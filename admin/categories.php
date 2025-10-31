<?php $page = "Categories"; ?>
<?php include "includes/config.php"; ?>
<?php require "../app/includes/function_general.php"; ?>
<?php include "includes/header.php"; ?>
<?php
$sql = "select * from zon_category order by id desc";

$run = mysqli_query($con, $sql);
?>
<body class="dark:bg-[#121317]">
    <main class="d-flex">
        <?php include "includes/sidebar.php"; ?>
        <div class="main w-full px-12 py-6">
            <div class="games-list">
                <a href="add-category.php" class="py-2 px-6 bg-blue-400 text-white uppercase text-xs rounded-md">ADD</a>
                <table class="w-full mt-10  " >
                    <thead class="border-b-2 dark:border-zinc-800 px-16 border-gray-100 py-2">
                        <td class="py-2 text-xs text-gray-600 px-4">ID</td>
                        <td class="py-2 text-xs text-gray-600 px-4 w-full">Name</td>
                        <td class="py-2 text-xs text-right"></td>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($run)) { ?>
                            <tr class="bg-[white] dark:bg-[#121317] px-16 ">
                                <td class="text-xs text-gray-500 px-4 ">#<?=$row['id']?></td>
                                <td class="text-gray-500 px-4 text-sm flex items-center py-3"><a href="add-category.php?action=update&token_id=<?= $row['id'] ?>"><?= $row['name'] ?></a></td>
                                <td class="text-right relative px-6">
                                    <button data-target="#dc_<?= $row['id'] ?>" class="bi-three-dots-vertical text-gray-500 drop_btn"></button>
                                    <div id="dc_<?= $row['id'] ?>" style="z-index: 99;" class="dropdown absolute bg-white text-right right-0 hidden flex-column ">
                                        <a href="add-category.php?action=update&token_id=<?= $row['id'] ?>" class="text-xs px-4 py-2">Edit</a>
                                        <a href="functions/functions.php?action=delete&token_id=<?= $row['id'] ?>&content_type=category" class="text-xs px-4 py-2 text-red-700">Delete</a>
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