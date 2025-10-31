<?php include("includes/config.php") ?>
<?php require '../app/includes/function_general.php'; ?>
<?php // require '../app/includes/app_start.php'; ?>

<body class="dark:bg-[#121317]">
    <style>
        .flex-direction-column {
            flex-direction: column;
        }
    </style>

    <head>
        <title>Login To <?php echo Zon_Config('site_name') ?></title>
    </head>
    <div class="flex items-center px-4 h-[80vh]">
        <form class="login-form mx-auto my-12 w-96" action="<?php echo $site_url ?>admin/functions/login.php" method="post">
            <div class="logo flex items-center justify-center ">
                <h1 class="text-4xl dark:text-gray-200 font-bold mb-16">Login To Admin</h1>
                <!-- <img class="dark:block hidden" src="<?php echo $site_url ?>static/img/logo/<?php echo Zon_Config('site_logo_dark'); ?>" alt="<?php echo Zon_Config('site_name') ?>">
                <img class="dark:hidden block" src="<?php echo $site_url ?>static/img/logo/<?php echo Zon_Config('site_logo_light'); ?>" alt="<?php echo Zon_Config('site_name') ?>"> -->
            </div>
            <?php if (isset($_GET) && isset($_GET['error'])) { ?>
                <div class="text-center bg-red-600 rounded-lg py-3 text-white mb-7 ">
                    <h1 class="text-lg font-normal capitalize text-white "><?php echo Secure_DATA(($_GET['error'])); ?></h1>
                </div>
            <?php } ?>
            <div class="input-group flex flex-direction-column mb-6">
                <label class="select-none uppercase text-gray-500 text-xs mb-1 dark:text-gray-300">Username</label>
                <input required name="username_email" class="border-2 transition dark:text-gray-300 dark:border-zinc-700 dark:bg-zinc-800 duration-300 border-gray-200 px-2 py-4 outline-none rounded-lg focus:border-blue-700 " type="text" placeholder="Username">
            </div>
            <div class="input-group flex flex-direction-column">
                <label class="select-none uppercase text-gray-500 text-xs mb-1 dark:text-gray-300">Password</label>
                <input name="password" required class="border-2 transition dark:text-gray-300 duration-300 dark:border-zinc-700 dark:bg-zinc-800 border-gray-200 px-2 py-4 outline-none rounded-lg focus:border-blue-700 " type="password" placeholder="Password">
            </div>
            <button type="submit" name="login" class="w-full text-sm h-12 bg-blue-500 mt-4 text-white uppercase font-bold space-lg rounded-lg">Login</button>
        </form>
    </div>
</body>

<script src="<?php echo $site_url ?>js/tailwind.js"></script>

</html>