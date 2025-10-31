<?php $page = "Tools"; ?>
<?php require "../app/includes/function_general.php"; ?>
<?php include "includes/header.php"; ?>
<?php // include "includes/config.php"; ?>

<body>
    <main class="d-flex">
        <?php include "includes/sidebar.php"; ?>
        <div class="main w-full px-12 py-6">
            <div class="games-list flex gap-6">
                <!-- <a href="#" class="py-2 px-6 bg-blue-400 text-white uppercase text-xs rounded-md">ADD</a> -->
                <div class="h-auto dark:bg-zinc-900 overflow-hidden rounded-xl hover:shadow-lg transition duration-300 hover:shadow-sm cursor-pointer w-60 bg-[white]">
                    <div class="px-12 py-4  flex flex-column text-center justify-center ">
                        <a class="text-slate-700 hover:text-black font-bold dark:hover:text-gray-100 dark:text-gray-200">GameMonetize</a>
                        <span class="text-xs text-gray-400 mt-1 mb-1">By You can add games easily and quickly with API.</span>
                        <a href="api-settings.php?platform=gamemonetize" class="text-sm text-gray-100 hover:text-white rounded-lg bg-blue-600 py-2 mt-2"> <span class="bi-plus"></span> Add Game</a>
                    </div>
                </div>
                <div class="h-auto dark:bg-zinc-900 overflow-hidden rounded-xl hover:shadow-lg transition duration-300 hover:shadow-sm cursor-pointer w-60 bg-[white]">
                    <div class="px-12 py-4  flex flex-column text-center justify-center ">
                        <a class="text-slate-700 hover:text-black font-bold dark:hover:text-gray-100 dark:text-gray-200">Game Distribution</a>
                        <span class="text-xs text-gray-400 mt-1 mb-1">By You can add games easily and quickly with API.</span>
                        <a href="api-settings.php?platform=gamedistribution" class="text-sm text-gray-100 hover:text-white rounded-lg bg-blue-600 py-2 mt-2"> <span class="bi-plus"></span> Add Game</a>
                    </div>
                </div>
                <div class="h-auto dark:bg-zinc-900 overflow-hidden rounded-xl hover:shadow-lg transition duration-300 hover:shadow-sm cursor-pointer w-60 bg-[white]">
                    <div class="px-12 py-4  flex flex-column text-center justify-center ">
                        <a class="text-slate-700 hover:text-black font-bold dark:hover:text-gray-100 dark:text-gray-200">GamePix</a>
                        <span class="text-xs text-gray-400 mt-1 mb-1">By You can add games easily and quickly with API.</span>
                        <a href="api-settings.php?platform=gamepix" class="text-sm text-gray-100 hover:text-white rounded-lg bg-blue-600 py-2 mt-2"> <span class="bi-plus"></span> Add Game</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include "includes/footer.php"; ?>
</body>

</html>