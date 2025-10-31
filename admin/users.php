<?php $page = "Users"; ?>
<?php require "../app/includes/function_general.php"; ?>
<?php include "includes/header.php"; ?>
<?php // include "includes/config.php"; ?>  
<body>
    <main class="d-flex">
        <?php include "includes/sidebar.php"; ?>
        <div class="main w-full px-12 py-6">
            <div class="games-list">
                <a href="add-users.php" class="py-2 px-6 bg-blue-400 text-white uppercase text-xs rounded-md">ADD</a>
                <table class="w-full mt-10 ">
                    <thead class="border-b-2 dark:border-zinc-800 px-16 border-gray-100 py-2">
                        <td class=" text-gray-400 py-2 text-xs px-6">ID</td>
                        <td class=" text-gray-400 py-2 text-xs px-6 w-full">Name</td>
                        <td class=" text-gray-400 py-2 text-xs text-right px-6"></td>
                    </thead>
                    <tbody class="py-0">
                        <?php $run = mysqli_query($con, 'select * from zon_users') ?>
                        <?php while ($row = mysqli_fetch_assoc($run)) { ?>
                            <tr class="bg-[white] dark:bg-zinc-900 px-16 <?php if($row['status'] == 1) { echo "border-2 border-red-800 "; } ?> ">
                                <td class="text-xs text-gray-500 px-4 ">#<?= $row['id'] ?></td>
                                <td class="text-gray-500 px-4 text-sm flex items-center py-3"><img class="object-cover h-12 w-12 rounded-lg mr-4 overflow-hidden" src="<?php echo $site_url ?>static/img/<?= $row['user_pic'] ?>"> <a href="add-users.php?action=update&token_id=<?= $row['id'] ?>"><?= $row['username'] ?></a></td>
                                <td class="text-right relative px-6">
                                    <button data-target="#dc_<?= $row['id'] ?>" class="bi-three-dots-vertical text-gray-500 drop_btn"></button>
                                    <div id="dc_<?= $row['id'] ?>" style="z-index: 99;" class="dropdown absolute bg-white text-right right-0 hidden flex-column ">
                                        <a href="functions/functions.php?action=delete&token_id=<?= $row['id'] ?>&content_type=user&url=<?php echo $site_url ?>admin/users" class="text-xs px-4 py-2 text-red-700">Delete</a>
                                        <a href="add-users.php?action=update&token_id=<?= $row['id'] ?>&content_type=user" class="text-xs px-4 py-2">Edit</a>
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