<?php require "../app/includes/function_general.php"; ?>
<?php include "includes/header.php"; ?>

<body class="dark:bg-[#121317]">
    <main class="d-flex">
        <?php include "includes/sidebar.php"; ?>
        <div class="main w-full px-12 py-6">
            <div class="flex gap-6">
                <div class="box bg-[white] dark:bg-zinc-900 rounded-md w-full p-4">
                    <span class="uppercase text-gray-500 text-xs ">user</span>
                    <div class="flex justify-between">
                        <span class="font-bold text-2xl dark:text-gray-100">
                            <?php echo Total_Items("zon_users") ?>
                        </span>
                        <span class="bi-activity text-3xl text-gray-400"></span>
                    </div>
                    <span class="text-gray-500 text-xs whitespace-nowrap">There are total user</span>
                </div>
                <div class="box bg-[white] dark:bg-zinc-900 rounded-md w-full p-4">
                    <span class="uppercase text-gray-500 text-xs ">comment</span>
                    <div class="flex justify-between">
                        <span class="font-bold text-2xl dark:text-gray-100">
                            <?php echo Total_Items("zon_comments") ?>
                        </span>
                        <span class="bi-activity text-3xl text-gray-400"></span>
                    </div>
                    <span class="text-gray-500 text-xs whitespace-nowrap">There are total comment</span>
                </div>
            </div>
            <div class="flex gap-6">
                <div class="box bg-[white] mt-6 dark:bg-zinc-900 rounded-md p-4 w-full">
                    <span class="uppercase text-gray-500 text-xs ">Game</span>
                    <div class="flex justify-between">
                        <span class="font-bold text-2xl dark:text-gray-100">
                            <?php echo Total_Items("zon_games") ?>
                        </span>
                        <span class="bi-activity text-3xl text-gray-400"></span>
                    </div>
                    <span class="text-gray-500 text-xs ">There are total games</span>
                </div>
                <div class="box bg-[white] mt-6 dark:bg-zinc-900 rounded-md p-4 w-full">
                    <span class="uppercase text-gray-500 text-xs ">category</span>
                    <div class="flex justify-between">
                        <span class="font-bold text-2xl dark:text-gray-100">
                            <?php echo Total_Items("zon_category") ?>
                        </span>
                        <span class="bi-activity text-4xl text-gray-400"></span>
                    </div>
                    <span class="text-gray-500 text-xs whitespace-nowrap">There are total category</span>
                </div>
            </div>
            <div class="games-list">
                <table class="w-full mt-10 rounded-md">
                    <thead class="border-b-2 dark:border-zinc-800 px-16 border-gray-200 py-2">
                        <td class="py-2 text-xs text-gray-600 px-4">ID</td>
                        <td class="py-2 text-xs text-gray-600 px-4 w-full">Name</td>
                        <td class="py-2 text-xs text-right"></td>
                    </thead>
                    <tbody class="rounded-md ">
                        <?php $run = mysqli_query($con, 'select * from zon_games order by id desc limit 10') ?>
                        <?php while ($row = mysqli_fetch_assoc($run)) { ?>
                            <?php if ($row['game_status'] == 0) { ?>
                                <tr class="bg-[white] dark:bg-zinc-900 px-16 ">
                                    <td class="text-xs text-gray-500 px-4 ">#
                                        <?= $row['id'] ?>
                                    </td>
                                    <td class="text-gray-500 px-4 text-sm flex items-center py-3"><img
                                            class="object-cover h-12 w-12 rounded-lg mr-4 overflow-hidden"
                                            src="<?= $row['game_image_url'] ?>"> <a
                                            href="add-game.php?action=update&token_id=<?= $row['id'] ?>">
                                            <?= $row['game_name'] ?>
                                        </a></td>
                                    <td class="text-right relative px-6">
                                        <button data-target="#dc_<?= $row['id'] ?>"
                                            class="bi-three-dots-vertical text-gray-500 drop_btn"></button>
                                        <div id="dc_<?= $row['id'] ?>" style="z-index: 99;"
                                            class="dropdown absolute bg-white text-right right-0 hidden flex-column ">
                                            <a href="functions/functions.php?action=delete&token_id=<?= $row['id'] ?>&content_type=game&url=<?php echo $site_url ?>admin/index"
                                                class="text-xs px-4 py-2 text-red-700">Delete</a>
                                            <a href="add-game.php?action=update&token_id=<?= $row['id'] ?>&content_type=game"
                                                class="text-xs px-4 py-2">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
<?php include "includes/footer.php"; ?>

</html>