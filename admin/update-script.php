<?php $page = "Update Script" ?>
<?php include "includes/config.php"; ?>
<?php require "../app/includes/function_general.php"; ?>
<?php include("includes/header.php");
if (isset($_GET) && !empty($_GET)) {
    if (isset($_GET['delete']) && $_GET['delete'] == 'true') {
        $sql = "TRUNCATE TABLE zon_games";
        if (mysqli_query($con, $sql)) {
            echo "<script>window.location.href = 'index.php';</script>";
        }
    }
}

$message = '';

if (isset($_FILES) && !empty($_FILES)) {
    if (isset($_FILES) && isset($_FILES['update'])) {
        $file = $_FILES['update'];
        $file_name = $file['name'];
        $file_tmp = $file['tmp_name'];

        if (move_uploaded_file($file_tmp, "../" . $file_name)) {
            $zipFile = '../' . $file_name; // Replace with the path to your ZIP file
            $extractTo = '../'; // Replace with the path where you want to extract the files

            $zip = new ZipArchive();

            if ($zip->open($zipFile) === true) {
                $zip->extractTo($extractTo);
                $zip->close();

                $message = 'Your script updated successfully.';

                // // Now, let's replace existing files with the new files.
                // $newFilesDirectory = 'path_to_new_files_directory/'; // Replace with the path to the directory containing the new files

                // // Loop through the extracted files and replace existing files.
                // $dirIterator = new DirectoryIterator($extractTo);
                // foreach ($dirIterator as $fileInfo) {
                //     if (!$fileInfo->isDot() && $fileInfo->isFile()) {
                //         $newFilePath = $newFilesDirectory . $fileInfo->getFilename();
                //         $existingFilePath = $extractTo . $fileInfo->getFilename();

                //         // Check if the new file exists and replace the existing file.
                //         if (file_exists($newFilePath)) {
                //             // Overwrite the existing file with the new file.
                //             if (copy($newFilePath, $existingFilePath)) {
                //                 echo "File '{$fileInfo->getFilename()}' replaced successfully.<br>";
                //             } else {
                //                 echo "Failed to replace '{$fileInfo->getFilename()}'<br>";
                //             }
                //         }
                //     }
                // }

                unlink($zipFile);
            } else {
                echo 'Failed to open the ZIP file.';
            }
        }

        // echo "<pre>";
        // print_r($_FILES['update']);
    }
}


?>

<body class="dark:bg-[#121317]">
    <main class="d-flex ">
        <?php include "includes/sidebar.php"; ?>
        <div class="main w-full px-12 py-6">
            <form class="games-list" action="" method="post" enctype="multipart/form-data">
                <h1 class="text-3xl font-bold">Update Your Script</h1>
                <?php if(!empty($message)) { ?>
                <p class="mt-4 text-white mb-4 bg-green-500 py-2 px-4" ><?php echo $message ?></p>
                <?php } ?>
                <input type="file" accept=".zip" class="border mb-6 mt-6 w-full block py-3 px-2 " name="update" />
                <p class="mb-6 mt-2 text-sm text-gray-500">upload your script update zip file, Only Supports .zip files.</p>
                <p><b class="text-red-700 ">Note:</b> Please provide the correct zip file otherwise your entire script
                    may get corrupted. </p>
                <button class="px-4 py-1 mt-4 bg-blue-500 rounded-md text-white ">Update</button>
            </form>
        </div>
    </main>
</body>
<?php $message = ''; ?>