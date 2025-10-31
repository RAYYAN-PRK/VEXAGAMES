<?php $page = "Delete Games" ?>
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
?>
<body class="dark:bg-[#121317]">
    <main class="d-flex ">
        <?php include "includes/sidebar.php"; ?>
        <div class="main w-full px-12 py-6">
            <div class="games-list">
                <h1 class="text-3xl font-bold" >Delete All Games</h1>
                <p class="text-sm mt-2 text-red-700 " >With this action, all the games on your server will be deleted.</p>
                <a href="?delete=true" class="px-4 bg-red-600 text-white font-bold rounded-md mt-4 block w-fit py-2">Delete Games</a>
            </div>
        </div>
    </main>
</body>