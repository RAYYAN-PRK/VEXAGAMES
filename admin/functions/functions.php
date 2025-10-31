<?php
require_once 'config.php';
require_once '../../app/includes/constant.php';
require_once '../../app/includes/app_start.php';
// require_once '../../app/includes/function_general.php';

function Secure_DATA($e) {
    return $e;
}

// Game Adding, Deleting And Updating Action 
if (isset($_POST['upload_game'])) {
    $game_name = mysqli_real_escape_string($con, $_POST['game_name']);
    $game_slug = mysqli_real_escape_string($con, $_POST['game_slug']);
    $game_desc = mysqli_real_escape_string($con, $_POST['game_description']);
    $game_frame_url = mysqli_real_escape_string($con, $_POST['game_frame_url']);
    $game_status = mysqli_real_escape_string($con, $_POST['game_status']);
    $game_category = mysqli_real_escape_string($con, $_POST['game_category']);
    $game_banner_url = mysqli_real_escape_string($con, $_POST['game_banner_url']);

    if (isset($_FILES['game_image'])) {
        if ($_FILES['game_image']['error'] == 0) {
            $file_name = rand(111111111, 999999999) . $_FILES['game_image']['name'];
            if (move_uploaded_file($_FILES['game_image']['tmp_name'], "../../static/uploads/" . $file_name)); {
                $game_image_url = $site_url . 'static/uploads/' . $file_name;
            }
        } else {
            $game_image_url = mysqli_real_escape_string($con, $_POST['game_image_url']);
        }
    } else {

        $game_image_url = mysqli_real_escape_string($con, $_POST['game_image_url']);
    }

    $sql = "INSERT INTO `zon_games`(`game_name`, `game_description`, `game_image_url`, `game_url`, `game_published`, `game_category`, `game_status`, `game_played`, `game_banner_url`, `is_featured`, `game_card_size`) VALUES ('$game_name','$game_desc','$game_image_url','$game_frame_url', '$game_status', '$game_category', 0, 0,'$game_banner_url', 0, '')";

    if (mysqli_query($con, $sql)) {
        @header("location: ../games.php");
    }
}

if (isset($_POST['update_game'])) {
    $game_id = mysqli_real_escape_string($con, $_POST['game_id']);
    $game_name = mysqli_real_escape_string($con, $_POST['game_name']);
    $game_slug = mysqli_real_escape_string($con, $_POST['game_slug']);
    $game_desc = mysqli_real_escape_string($con, $_POST['game_description']);
    $game_frame_url = mysqli_real_escape_string($con, $_POST['game_frame_url']);
    $game_status = mysqli_real_escape_string($con, $_POST['game_status']);
    $game_category = mysqli_real_escape_string($con, $_POST['game_category']);
    $game_banner_url = mysqli_real_escape_string($con, $_POST['game_banner_url']);

    if (isset($_FILES['game_image'])) {
        if ($_FILES['game_image']['error'] == 0) {
            $file_name = rand(111111111, 999999999) . $_FILES['game_image']['name'];
            if (move_uploaded_file($_FILES['game_image']['tmp_name'], "../../static/uploads/" . $file_name)); {
                $game_image_url = $site_url . 'static/uploads/' . $file_name;
            }
        } else {
            $game_image_url = mysqli_real_escape_string($con, $_POST['game_image_url']);
        }
    } else {

        $game_image_url = mysqli_real_escape_string($con, $_POST['game_image_url']);
    }

    $sql = "UPDATE `zon_games` SET `game_name`='$game_name', `game_description`='$game_desc', `game_image_url`='$game_image_url', `game_url`='$game_frame_url', `game_published`='$game_status', `game_category`='$game_category', `game_banner_url`='$game_banner_url' WHERE id=$game_id";

    if (mysqli_query($con, $sql)) {
        @header("location: ../games.php");
    }
}

if (isset($_POST['add_category'])) {

    $category_name = mysqli_real_escape_string($con, $_POST['game_category']);
    $category_slug = mysqli_real_escape_string($con, $_POST['game_category_slug']);
    // $category_description = mysqli_real_escape_string($con, $_POST['game_category_description']);

    if (mysqli_query($con, "insert into zon_category (`name`, `slug`) values ('$category_name' , '$category_slug') ")) {
        @header("location: ../categories.php");
    }
}


if (isset($_POST['update_category'])) {

    $category_name = mysqli_real_escape_string($con, $_POST['game_category']);
    $category_slug = mysqli_real_escape_string($con, $_POST['game_category_slug']);
    // $category_description = mysqli_real_escape_string($con, $_POST['game_category_description']);
    $category_id = mysqli_real_escape_string($con, $_POST['category_id']);

    if (mysqli_query($con, "update zon_category set `name`='$category_name', `slug`='$category_slug' where id=$category_id")) {
        @header("location: ../categories.php");
    }
}




if (isset($_GET) && !empty($_GET['token_id']) && !empty($_GET['action']) && !empty($_GET['content_type'])) {
    if ($_GET['content_type'] == 'game') {

        $action = $_GET['action'];
        $token_id = $_GET['token_id'];

        if ($action == 'delete') {
            if (mysqli_query($con, "DELETE FROM zon_games where id=$token_id")) {
                @header("location: ../games.php");
            }
        }
    }
}


if (isset($_GET) && !empty($_GET['token_id']) && !empty($_GET['action']) && !empty($_GET['content_type'])) {
    if ($_GET['content_type'] == 'category') {

        $action = $_GET['action'];
        $token_id = $_GET['token_id'];

        if ($action == 'delete') {
            if (mysqli_query($con, "delete from zon_category where id=$token_id")) {
                @header("location: ../categories.php");
            }
        } else {
            echo "Failed";
        }
    }
}


if (isset($_GET) && !empty($_GET['token_id']) && !empty($_GET['action']) && !empty($_GET['content_type']) && !empty($_GET['url'])) {
    if ($_GET['content_type'] == 'game') {

        $url = $_GET['url'];
        $action = $_GET['action'];
        $token_id = $_GET['token_id'];

        if ($action == 'delete') {
            if (mysqli_query($con, "delete from zon_games where id=$token_id")) {
                @header("location: $url.php");
            }
        } else {
            echo "Failed";
        }
    }
}


if (isset($_POST) && isset($_POST['ads_up_add'])) {

    $ad_name = mysqli_real_escape_string($con, $_POST['ad_name']);
    $id = Secure_DATA($_POST['ad_id']);
    $ad_code = mysqli_real_escape_string($con, $_POST['ad_code']);
    $ad_off = $_POST['ad_contr'];

    $sql = "UPDATE zon_ads set `code`='$ad_code', `ad_name`='$ad_name', `status`= 0 where id=$id";

    if (!empty($ad_off)) {
        $sql = "UPDATE zon_ads set `code`='$ad_code', `ad_name`='$ad_name', `status`=1 where id=$id";
    }


    if (mysqli_query($con, $sql)) {
        @header("location: ../advertisement.php");
    }
}



if (isset($_POST) && isset($_POST['add_page'])) {
    $page_title =  mysqli_escape_string($con,  $_POST['page_title']);
    $page_desc = mysqli_escape_string($con, $_POST['page_desc']);
    $page_content = mysqli_escape_string($con, $_POST['page_content']);

    $query = "INSERT INTO `zon_pages` (`title`, `desc`, `content`) VALUES ('$page_title', '$page_desc', '$page_content') ";

    if (mysqli_query($con, $query)) {
        @header("location: ../pages.php");
    }
}


if (isset($_GET) && !empty($_GET['token_id']) && !empty($_GET['action']) && !empty($_GET['content_type']) && !empty($_GET['url'])) {
    if ($_GET['content_type'] == 'page') {

        $url = $_GET['url'];
        $action = $_GET['action'];
        $token_id = $_GET['token_id'];

        if ($action == 'delete') {
            if (mysqli_query($con, "delete from zon_pages where id=$token_id")) {
                @header("location: $url");
            }
        } else {
            echo "Failed";
        }
    }
}



if (isset($_POST) && isset($_POST['update_page'])) {
    $page_title =  mysqli_escape_string($con,  $_POST['page_title']);
    $page_desc = mysqli_escape_string($con, $_POST['page_desc']);
    $page_content = mysqli_escape_string($con, $_POST['page_content']);
    $id = mysqli_escape_string($con, $_POST['id']);

    $query = "UPDATE `zon_pages` SET `title`='$page_title', `desc`='$page_desc', `content`='$page_content' where id=$id";

    if (mysqli_query($con, $query)) {
        @header("location: ../pages.php");
    }
}


if (isset($_GET) && !empty($_GET['token_id']) && !empty($_GET['action']) && !empty($_GET['content_type']) && !empty($_GET['url'])) {
    if ($_GET['content_type'] == 'comment') {

        $url = $_GET['url'];
        $action = $_GET['action'];
        $token_id = $_GET['token_id'];

        if ($action == 'delete') {
            if (mysqli_query($con, "delete from zon_comments where id=$token_id")) {
                @header("location: $url.php");
            }
        } else {
            echo "Failed";
        }
    }
}


if (isset($_GET) && !empty($_GET['token_id']) && !empty($_GET['action']) && !empty($_GET['content_type']) && !empty($_GET['url'])) {
    if ($_GET['content_type'] == 'user') {

        $url = $_GET['url'];
        $action = $_GET['action'];
        $token_id = $_GET['token_id'];

        if ($action == 'delete') {
            if (mysqli_query($con, "delete from zon_users where id=$token_id")) {
                @header("location: $url.php");
            }
        } else {
            echo "Failed";
        }
    }
}

if (isset($_POST) && isset($_POST['customize_button'])) {
    // $section_games_limit = Secure_DATA($_POST['section_games_limit']);
    // $featured_game_slider = Secure_DATA($_POST['featured_game_slider']);
    // $popular_views = Secure_DATA($_POST['popular_views']);
    $site_color = Secure_DATA($_POST['site_color']);
    // $IsBlog = Secure_DATA($_POST['blog']);
    $gamepix_sid = Secure_DATA($_POST['gamepix_sid']);

    $animate_class = Secure_DATA($_POST['animate_class']);
    // $cursor_color = '#fff';
    // $custom_cursor = 0;


    if (mysqli_query($con, "UPDATE zon_config SET site_color='$site_color', animate_class='$animate_class', gamepix_sid=$gamepix_sid ")) {
        header("location: ../customize.php");
    }
}