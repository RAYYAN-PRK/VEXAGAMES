<?php
// require_once '../../app/includes/function_general.php';
require_once '../../config.php';
require_once '../../app/includes/constant.php';
require_once '../../app/includes/app_start.php';

// $demo = "demo";

// if ($demo === $demo) {
//     header("Location: ../index.php");
//     die();
// }

// Secure Data 
function Secure_DATA($d)
{
    global $socket;
    return htmlspecialchars(mysqli_real_escape_string($socket, $d));
}


// Site Configuration Actions 
if (isset($_POST) && isset($_POST['site_info'])) {

    $site_name = Secure_DATA($_POST['site_name']);
    $profile_tagline = Secure_DATA($_POST['profile_tagline']);
    $head_code =  mysqli_real_escape_string($con, $_POST['head_code']);
    $footer_content = mysqli_real_escape_string($con, $_POST['footer_content']);
    $site_title = Secure_DATA($_POST['site_title']);
    $site_desc = Secure_DATA($_POST['site_desc']);
    $site_keywords = Secure_DATA($_POST['site_keywords']);

    $games_title = Secure_DATA($_POST['games_title']);
    $games_desc = Secure_DATA($_POST['games_desc']);
    $play_title = Secure_DATA($_POST['play_title']);
    $play_desc = Secure_DATA($_POST['play_desc']);
    $profile_title = Secure_DATA($_POST['profile_title']);
    $profile_desc = Secure_DATA($_POST['profile_desc']);
    $category_title = Secure_DATA($_POST['category_title']);
    $category_desc = Secure_DATA($_POST['category_desc']);

    $u = ",`games_title`='$games_title',`games_desc`='$games_desc',`play_title`='$play_title',`play_desc`='$play_desc',`profile_title`='$profile_title',`profile_desc`='$profile_desc',`category_title`='$category_title',`category_desc`='$category_desc'";

    $sql = "UPDATE zon_config set `site_name`='$site_name', `profile_tagline`='$profile_tagline', `head_code`='$head_code', `footer_content`='$footer_content', `site_title`='$site_title', `site_desc`='$site_desc', `site_keywords`='$site_keywords'";

    if (isset($_FILES['logo']) && isset($_FILES) && $_FILES['logo']['error'] == 0) {
        $logo_name = rand(111111111, 999999999) . $_FILES['logo']['name'];
        $logo_tmp_name = $_FILES['logo']['tmp_name'];

        if (move_uploaded_file($logo_tmp_name, "../../static/img/logo/" . $logo_name)) {
            $logo_name = $logo_name;
            $sql = "UPDATE zon_config set `site_name`='$site_name', `profile_tagline`='$profile_tagline', `site_logo_light`='$logo_name', `head_code`='$head_code', `site_title`='$site_title', `site_desc`='$site_desc', `site_keywords`='$site_keywords'";
        }
    }

    if (isset($_FILES['dark_logo']) && isset($_FILES) && $_FILES['dark_logo']['error'] == 0) {
        $dark_logo_name = rand(111111111, 999999999) . $_FILES['dark_logo']['name'];
        $dark_logo_tmp_name = $_FILES['dark_logo']['tmp_name'];

        if (move_uploaded_file($dark_logo_tmp_name, "../../static/img/logo/" . $dark_logo_name)) {
            $dark_logo_name = $dark_logo_name;
            $sql = "UPDATE zon_config set `site_name`='$site_name', `profile_tagline`='$profile_tagline', `site_logo_sm`='$dark_logo_name', `head_code`='$head_code', `site_title`='$site_title', `site_desc`='$site_desc', `site_keywords`='$site_keywords'";
        }
    }

    if (isset($_FILES['favicon']) && isset($_FILES) && $_FILES['favicon']['error'] == 0) {
        $favicon_logo_name = rand(111111111, 999999999) . $_FILES['favicon']['name'];
        $favicon_logo_tmp_name = $_FILES['favicon']['tmp_name'];

        if (move_uploaded_file($favicon_logo_tmp_name, "../../static/img/logo/" . $favicon_logo_name)) {
            $favicon_logo_name = $favicon_logo_name;
            $sql = "UPDATE zon_config set `site_name`='$site_name', `profile_tagline`='$profile_tagline', `site_favicon`='$favicon_logo_name', `head_code`='$head_code', `site_title`='$site_title', `site_desc`='$site_desc', `site_keywords`='$site_keywords'";
        }
    }

    $sql .= $u;

    if (mysqli_query($con, $sql)) {
        @header("location: ../settings.php");
    }
}
