<?php $page = "Adverisements"; ?>
<?php require "../app/includes/function_general.php"; ?>
<?php include "includes/header.php"; ?>
<?php // include "includes/config.php"; ?>

<body class="dark:bg-[#121317]">
    <main class="d-flex">
        <?php include "includes/sidebar.php"; ?>
        <div class="main w-full px-12 py-6">
            <div class="games-list">
                <table class="w-full mt-10 ">
                    <thead class="border-b-2 dark:border-zinc-900 px-16 border-gray-100 py-2">
                        <td class=" text-gray-400 py-2 text-xs px-6">#Id</td>
                        <td class=" text-gray-400 py-2 text-xs px-6 w-full">Name</td>
                        <td class=" text-gray-400 py-2 text-xs text-right px-6">Action</td>
                    </thead>
                    <tbody class="py-4">
                        <?php
                        $run = mysqli_query($con, "select * from zon_ads");
                        while ($row = mysqli_fetch_assoc($run)) {
                        ?>
                            <tr class="bg-[white] dark:bg-zinc-900 px-16 py-4 rounded-lg">
                                <td class="text-xs px-6 text-gray-500"><?=$row['id']?></td>
                                <td class="text-gray-500 text-xs px-6 py-4"><a href="add-ads.php?action=update&token_id=<?=$row['id']?>"><?=$row['ad_name']?></a></td>
                                <td class="text-right relative px-6"></td>
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