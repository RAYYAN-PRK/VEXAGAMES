<?php $page = "Tools"; ?>
<?php require "../app/includes/function_general.php"; ?>
<?php include "includes/header.php"; ?>
<?php
$themes = glob("../themes/*");

if (isset($_GET) && isset($_GET['theme'])) {
    $theme_n = $_GET['theme'];
    $sql = "UPDATE zon_config SET theme='$theme_n'";
    if ($socket->query($sql)) {
        header("Location: ?");
    }
}
// print_r($themes);
?>

<body>
    <main class="d-flex">
        <?php include "includes/sidebar.php"; ?>
        <div class="main w-full px-12 py-6">
            <div class="games-list flex gap-6">
                <?php foreach ($themes as $theme) {
                    $folder_name = str_replace("../themes/", "", $theme);
                    include($theme . "/info.php");
                    ?>
                    <div
                        class="h-auto dark:bg-zinc-900 overflow-hidden rounded-xl hover:shadow-lg transition duration-300 hover:shadow-sm cursor-pointer w-60 bg-[white]">
                        <div class="px-12 py-4 relative flex flex-column text-center justify-center ">
                            <div class="flex justify-center">
                                <img src="<?= $theme ?>/themeLogo.png"
                                    class="w-[110px] rounded-lg h-[110px] object-cover" />
                            </div>
                            <a
                                class="text-slate-700 hover:text-black font-bold dark:hover:text-gray-100 dark:text-gray-200">
                                <?= $theme_name ?>
                            </a>
                            <span class="text-xs text-gray-400 mt-1 mb-1">Made By <b>
                                    <?= $theme_author ?>
                                </b></span>
                            <?php if ($zon['config']['theme'] === $folder_name) { ?>
                                <a class="text-xs cursor-auto text-gray-100 opacity-40 hover:text-white rounded-lg bg-blue-500 py-2 mt-2">Activate</a>
                            <?php } else { ?>
                                <a aria-disabled="true" href="?theme=<?= $folder_name ?>"
                                    class="text-xs text-gray-100 disabled:opacity-40 hover:text-white rounded-lg bg-blue-500 py-2 mt-2">Activate</a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
    <?php include "includes/footer.php"; ?>
</body>

</html>