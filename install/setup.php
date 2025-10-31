<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST) && !empty($_POST) && isset($_POST['install'])) {

    $host_name = htmlspecialchars($_POST['host_name']);
    $db_username = htmlspecialchars($_POST['db_username']);
    $db_password = htmlspecialchars($_POST['db_password']);
    $db_name = htmlspecialchars($_POST['db_name']);
    $site_URL = htmlspecialchars(filter_var($_POST['site_url'], FILTER_VALIDATE_URL));
    $site_name = htmlspecialchars($_POST['site_name']);
    $site_title = htmlspecialchars($_POST['site_title']);
    $admin_username = htmlspecialchars($_POST['admin_username']);
    $admin_password = htmlspecialchars($_POST['admin_password']);

    $connect = true;

    $con = mysqli_connect($host_name, $db_username, $db_password, $db_name);

    if (mysqli_connect_errno()) {
        echo "Problem To Connecting Database";
        $connect = false;
    }

    if ($connect) {
        $filename = '../poko.sql';
        // Temporary variable, used to store current query
        $templine = '';
        // Read in entire file
        $lines = file($filename);
        // Loop through each line
        foreach ($lines as $line) {
            // Skip it if it's a comment
            if (substr($line, 0, 2) == '--' || $line == '')
                continue;
            // Add this line to the current segment
            $templine .= $line;
            $query = false;
            // If it has a semicolon at the end, it's the end of the query
            if (substr(trim($line), -1, 1) == ';') {
                // Perform the query
                $query = mysqli_query($con, $templine);
                // Reset temp variable to empty
                $templine = '';
            }
        }

        $user_query = "INSERT INTO zon_users (`username`, `password`, `user_pic`, `status`, `is_admin`) values ('$admin_username', '$admin_password', 'user_pic.png', 0, '1')";
        $config_query = "UPDATE zon_config SET `site_name`='$site_name', `site_title`='$site_title'";

        if (mysqli_query($con, $user_query) && mysqli_query($con, $config_query)) {
            $config_file_content = '<?php
// +------------------------------------------------------------------------+
// | @author: coder_mvn
// | @name: Poko - The Arcade Online HTML5 Game Playing Platform
// | @author_email: mvk62015@gmail.com   
// | @version: 4.0v
// +------------------------------------------------------------------------+
// | Poko - The Arcade Online HTML5 Game Playing Platform
// | Copyright (c) 2023 Poko. All rights reserved.
// +------------------------------------------------------------------------+

// MySQL Database User
define("DB_USERNAME", "' . $db_username . '");
// MySQL Database Password
define("DB_PASSWORD", "' . $db_password . '");
// MySQL Hostname
define("DB_HOST", "' . $host_name . '");
// MySQL Database Name
define("DB_NAME", "' . $db_name . '");

// Site URL
$site_url = "' . $site_URL . '"; // e.g (http://example.com)
?>';

            $file = fopen("../config.php", "w");
            fwrite($file, $config_file_content);
            fclose($file);

            $query = "UPDATE zon_config SET `site_name`='$site_name', `site_title`='$site_title'";

            if (mysqli_query($con, $query)) {
                // echo "<script>localStorage.clear()</script>";
                header("location: index.php?page=finish");
            }

        }
    }
}
