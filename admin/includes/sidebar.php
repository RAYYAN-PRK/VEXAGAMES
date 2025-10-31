<?php
// session_start();

if (!isset($_SESSION['admin-Loggedin']) && !isset($_SESSION['is_admin_Loggedin'])) {
    @header("location: ../login");
    // echo "<script>window.location.href='./login.php';</script>";
}

///include("config.php");
?>
<div class="sidebar sticky w-[350px] h-[100vh]">
    <style>
        .sidebar {
            position: sticky;
            top: 0;
        }

        .colorpick-eyedropper-input-trigger {
            display: none;
        }

        /* .main {
           max-width: 400px !important;
        } */

        body {
            max-width: 1000px;
            margin: auto;
        }

        .container {
            max-width: 1000px;
            margin: auto;  
        }

        .sidebar a {
            white-space: nowrap;
        }
    </style>
    <!-- <div class="logo px-4 py-6"> -->
        <!-- <a href="<?php echo $site_url ?>">
            <h3 class="fw-bold text-2xl dark:text-gray-100 text-center uppercase text-gray-600 "><?php echo Zon_Config('site_name') ?></h3>
        </a> -->
    <!-- </div> -->
    <?php 
    $zon['page'][0] = explode("/", $_SERVER['PHP_SELF'])[2] ?? 'index.php';
    ?>
    <ul class="list px-4 mt-2">
        <li class="<?php if($zon['page'][0] === 'index.php') { echo "bg-blue-600 text-white hover:text-white";  } else { ?> text-gray-500 hover:text-gray-700 <?php } ?> my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="index.php"><span class="bi-speedometer2 mr-2"></span> Dashboard</a></li>
        
        <li class="text-gray-500 hover:text-gray-700 my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="/" target="_blank"><span class="bi-house mr-2"></span> Home</a></li>        

        <li class="<?php if($zon['page'][0] === 'games.php') { echo "bg-blue-600 text-white hover:text-white";  } else { ?> text-gray-500 hover:text-gray-700 <?php } ?> my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="games.php"><span class="bi-controller mr-2"></span> Games</a></li>
        <li class="<?php if($zon['page'][0] === 'featured_games.php') { echo "bg-blue-600 text-white hover:text-white";  } else { ?> text-gray-500 hover:text-gray-700 <?php } ?> my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="featured_games.php"><span class="bi-stickies mr-2"></span> Featured Games</a></li>
        <li class="<?php if($zon['page'][0] === 'categories.php') { echo "bg-blue-600 text-white hover:text-white";  } else { ?> text-gray-500 hover:text-gray-700 <?php } ?> my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="categories.php"><span class="bi-columns-gap mr-2"></span> Categories</a></li>
        <li class="<?php if($zon['page'][0] === 'users.php') { echo "bg-blue-600 text-white hover:text-white";  } else { ?> text-gray-500 hover:text-gray-700 <?php } ?> my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="users.php"><span class="bi-person mr-2"></span> Users</a></li>
        <!-- <li class="<?php if($zon['page'][0] === 'comments.php') { echo "bg-blue-600 text-white hover:text-white";  } else { ?> text-gray-500 hover:text-gray-700 <?php } ?> my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="comments.php"><span class="bi-chat-square-text mr-2"></span> Comments</a></li> -->
        <li class="<?php if($zon['page'][0] === 'pages.php') { echo "bg-blue-600 text-white hover:text-white";  } else { ?> text-gray-500 hover:text-gray-700 <?php } ?> my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="pages.php"><span class="bi-collection mr-2"></span> Pages</a></li>
        <!-- <li class="<?php if($zon['page'][0] === 'blog.php') { echo "bg-blue-600 text-white hover:text-white";  } else { ?> text-gray-500 hover:text-gray-700 <?php } ?> my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="blog.php"><span class="bi-clipboard mr-2"></span> Blog</a></li> -->
        <li class="<?php if($zon['page'][0] === 'reports.php') { echo "bg-blue-600 text-white hover:text-white";  } else { ?> text-gray-500 hover:text-gray-700 <?php } ?> my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="reports.php"><span class="bi-bug mr-2"></span> Reports</a></li>
        <!-- <li class="<?php if($zon['page'][0] === 'auto-fetch.php') { echo "bg-blue-600 text-white hover:text-white";  } else { ?> text-gray-500 hover:text-gray-700 <?php } ?> my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="auto-fetch.php"><span class="bi-arrow-repeat mr-2"></span> Auto Fetching</a></li> -->
        <!-- <li class="<?php if($zon['page'][0] === 'section.php') { echo "bg-blue-600 text-white hover:text-white";  } else { ?> text-gray-500 hover:text-gray-700 <?php } ?> my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="section.php"><span class="bi-grip-horizontal mr-2"></span> Sections</a></li> -->
        <!-- <li class="<?php if($zon['page'][0] === 'themes.php') { echo "bg-blue-600 text-white hover:text-white";  } else { ?> text-gray-500 hover:text-gray-700 <?php } ?> my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="themes.php"><span class="bi-palette mr-2"></span> Themes</a></li> -->
        <li class="<?php if($zon['page'][0] === 'customize.php') { echo "bg-blue-600 text-white hover:text-white";  } else { ?> text-gray-500 hover:text-gray-700 <?php } ?> my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="customize.php"><span class="bi-palette2 mr-2"></span> Customize</a></li>
        <li class="<?php if($zon['page'][0] === 'tools.php') { echo "bg-blue-600 text-white hover:text-white";  } else { ?> text-gray-500 hover:text-gray-700 <?php } ?> my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="tools.php"><span class="bi-tools mr-2"></span> Tools</a></li>
        <li class="<?php if($zon['page'][0] === 'advertisement.php') { echo "bg-blue-600 text-white hover:text-white";  } else { ?> text-gray-500 hover:text-gray-700 <?php } ?> my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="advertisement.php"><span class="bi-tv mr-2"></span> Advertisement</a></li>
        <li class="<?php if($zon['page'][0] === 'settings.php') { echo "bg-blue-600 text-white hover:text-white";  } else { ?> text-gray-500 hover:text-gray-700 <?php } ?> my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="settings.php"><span class="bi-gear mr-2"></span> Settings</a></li>
        <!-- <li class="<?php if($zon['page'][0] === 'update-script.php') { echo "bg-blue-600 text-white hover:text-white";  } else { ?> text-gray-500 hover:text-gray-700 <?php } ?> my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="update-script.php"><span class="bi-pause-fill mr-2"></span> Update</a></li> -->
        <li class="<?php if($zon['page'][0] === 'delete-games.php') { echo "bg-blue-600 text-white hover:text-white";  } else { ?> text-gray-500 hover:text-gray-700 <?php } ?> my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="delete-games.php"><span class="bi-trash mr-2"></span> Delete All Games</a></li>
        <li class="<?php if($zon['page'][0] === 'logout.php') { echo "bg-blue-600 text-white hover:text-white";  } else { ?> text-gray-500 hover:text-gray-700 <?php } ?> my-1 px-3 list-style-none"><a class="text-docoration-none py-2 block text-[13px] " href="logout.php"><span class="bi-door-open mr-2"></span> logout</a></li>
    </ul>
</div>