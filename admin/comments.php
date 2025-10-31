<?php $page = "Comments"; ?>
<?php require "../app/includes/function_general.php"; ?>
<?php include "includes/header.php"; ?>
<?php // include "includes/config.php"; ?>

<body>
    <main class="d-flex">
        <?php include "includes/sidebar.php"; ?>
        <div class="main w-full px-12 py-6">
            <div class="games-list">
                <!-- <a href="#" class="py-2 px-6 bg-blue-400 text-white uppercase text-xs rounded-md">ADD</a> -->
                <table class="w-full mt-10 ">
                    <thead class="border-b-2 px-16 dark:border-zinc-900 border-gray-100 py-2">
                        <td class=" text-gray-400 py-2 text-xs px-6">#Id</td>
                        <td class=" text-gray-400 py-2 text-xs px-6">username</td>
                        <td class=" text-gray-400 py-2 text-xs px-6">comment</td>
                        <td class=" text-gray-400 py-2 text-xs px-6">Game</td>
                        <td class=" text-gray-400 py-2 text-xs px-6">Commented at</td>
                        <td class=" text-gray-400 py-2 text-xs text-right px-6"></td>
                    </thead>
                    <tbody class="py-4">
                        <?php $run = mysqli_query($con, 'select * from zon_comments') ?>
                        <?php while ($row = mysqli_fetch_assoc($run)) { ?>
                            <tr class="bg-[white] dark:bg-zinc-900 px-16 py-4 rounded-lg">
                                <td class="text-xs px-6 text-gray-500"><?=$row['id']?></td>
                                <td class="text-gray-500 text-xs px-6 py-4"><?php echo User_Data_By_Cond('username', "id=".$row['user_id']); ?></td>
                                <td class="text-gray-500 text-xs px-6 py-4"><?=$row['subject']?></td>
                                <td class="text-gray-500 text-xs px-6 py-4"><?php Game_Data($row['game_id'], "game_name") ?></td>
                                <td class="text-gray-500 text-xs px-6 py-4"><?=$row['date']?></td>
                                <td class="text-right relative px-6">
                                    <button data-target="#dc_<?= $row['id'] ?>" class="bi-three-dots-vertical text-gray-500 drop_btn"></button>
                                    <div id="dc_<?= $row['id'] ?>" style="z-index: 99;" class="dropdown absolute bg-white text-right right-0 hidden flex-column ">
                                        <a href="functions/functions.php?action=delete&token_id=<?= $row['id'] ?>&content_type=comment&url=<?php echo $site_url ?>admin/comments" class="text-xs px-4 py-2 text-red-700">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <?php include "includes/footer.php"; ?>
</body>

</html>