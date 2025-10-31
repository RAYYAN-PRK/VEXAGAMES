<?php // session_start();  ?>
<!DOCTYPE html>
<html lang="en" class="dark:bg-zinc-800">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (!empty($page)) { ?>
        <title>
            <?php echo $page ?>
        </title>
    <?php } else { ?>
        <title>
            <?php echo Zon_Config('site_name') ?>
        </title>
    <?php } ?>
    <link rel="stylesheet" href="<?php echo $site_url ?>admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $site_url ?>admin/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $site_url ?>admin/assets/css/rte_theme_default.css">
    <link rel="stylesheet" href="<?php echo $site_url ?>admin/assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="shortcut icon" href="<?php echo $site_url ?>static/img/logo/<?php echo Zon_Config('site_favicon') ?>"
        type="image/x-icon">
    <script src="<?php echo $site_url ?>js/tailwind.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    <script src="<?php echo $site_url ?>admin/assets/js/rte.js"></script>
</head>
<div class="mx-2">
    <div class="container">
        <?php if (Zon_Config('auto_fetch_all_games_fetched') == 1) { ?>
            <div id="fetched_alert"
                class="bg-blue-200 relative text-xs capitalize flex gap-4 rounded-md text-blue-400 font-bold py-2.5 px-4 mt-2">
                <i class="bi bi-info-circle-fill"></i>
                All games have been fetched from your (
                <?php echo Zon_Config('auto_fetch_game_publisher') ?> )
                <button onclick="this.parentNode.classList.add('hidden'), localStorage.setItem('fetched_alert', 1)"
                    class="close-button font-bold text-lg top-[4px] absolute px-1 right-[20px]">&times;</button>
            </div>
        <?php } ?>
        <?php if (is_dir("../install")) { ?>
            <div class="bg-red-200 text-xs capitalize flex gap-4 rounded-md text-red-500 font-bold py-2.5 px-4 mt-4">
                <i class="bi bi-info-circle-fill"></i>
                Please delete (./install) folder for security reason.
            </div>
        <?php } ?>
    </div>

    <script>
        if (localStorage.getItem('fetched_alert') == 1) {
            document.getElementById("fetched_alert").classList.add("hidden");
        }
    </script>
</div>