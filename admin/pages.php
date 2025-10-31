<?php $page = "Pages"; ?>
<?php require "../app/includes/function_general.php"; ?>
<?php include "includes/header.php"; ?>
<?php // include "includes/config.php"; ?>

<body>
    <main class="d-flex">
        <?php include "includes/sidebar.php"; ?>
        <div class="main w-full px-12 py-6">
            <div class="games-list">
                <a href="<?php echo $site_url ?>admin/add-page.php" class="py-2 px-6 bg-blue-400 text-white uppercase text-xs rounded-md">ADD</a>
                <table class="w-full mt-10 ">
                    <thead class="border-b-2 dark:border-zinc-900 px-16 border-gray-100 py-2">
                        <td class=" text-gray-400 py-2 text-xs px-6">#Id</td>
                        <td class=" text-gray-400 py-2 text-xs px-6 w-full">Title</td>
                        <td class=" text-gray-400 py-2 text-xs text-right px-6">Action</td>
                    </thead>
                    <tbody class="py-4">
                        <?php $run = mysqli_query($con, 'select * from zon_pages') ?>
                        <?php while ($row = mysqli_fetch_assoc($run)) { ?>
                            <tr class="bg-[white] dark:bg-zinc-900 px-16 py-4 rounded-lg">
                                <td class="text-xs px-6 text-gray-500"><?=$row['id']?></td>
                                <td class="text-gray-500 text-xs px-6 py-4"><a href="add-page.php?action=update&token_id=<?=$row['id']?>"><?=$row['title']?></a></td>
                                <td class="text-right relative px-6">
                                    <button data-target="#dc_<?= $row['id'] ?>" class="bi-three-dots-vertical text-gray-500 drop_btn"></button>
                                    <div id="dc_<?= $row['id'] ?>" style="z-index: 99;" class="dropdown absolute bg-white text-right right-0 hidden flex-column ">
                                        <a href="functions/functions.php?action=delete&token_id=<?= $row['id'] ?>&content_type=page&url=<?php echo $site_url ?>admin/pages.php" class="text-xs px-4 py-2 text-red-700">Delete</a>
                                        <a href="add-page.php?action=update&token_id=<?= $row['id'] ?>&content_type=page" class="text-xs px-4 py-2">Edit</a>
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