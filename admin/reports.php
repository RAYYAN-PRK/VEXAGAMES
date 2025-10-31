<?php $page = "Reports" ?>
<?php include "includes/config.php"; ?>
<?php require "../app/includes/function_general.php"; ?>
<?php include("includes/header.php"); ?>
<?php

$sql = mysqli_query($con, "SELECT * FROM zon_report");

if (isset($_GET) && isset($_GET['bug_fixed']) && isset($_GET['bug_id']) && $_GET['bug_fixed'] == 'true') {
    if (mysqli_query($con, "DELETE FROM zon_report WHERE id=" . $_GET['bug_id'])) {
        echo "<script>window.location.href='?';</script>";
    }
}

?>

<body class="dark:bg-[#121317]">
    <main class="d-flex ">
        <?php include "includes/sidebar.php"; ?>
        <div class="main w-full px-12 py-6">
            <div class="games-list">
                <table class="w-full mt-10  ">
                    <thead class="border-b-2 dark:border-zinc-900 px-16 border-gray-100 py-2">
                        <tr>
                            <td class="py-2 text-xs text-gray-600 px-4">ID</td>
                            <td class="py-2 text-xs text-gray-600 px-4 ">Game Name</td>
                            <td class="py-2 text-xs text-gray-600 px-4">Bug</td>
                            <td class="py-2 text-xs text-right text-gray-600">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($sql)) { ?>
                            <?php
                            $sql2 = mysqli_query($con, "SELECT * FROM zon_games WHERE id=" . $row['game_id']);
                            $game = mysqli_fetch_assoc($sql2); ?>
                                <tr class="bg-[white] dark:bg-zinc-900 px-16 ">
                                    <td class="text-xs text-gray-500 px-4 ">#<?= $row['id'] ?></td>
                                    <td class="text-gray-500 px-4 text-sm flex items-center py-3"><?= $game['game_name'] ?></td>
                                    <td class="text-gray-500 px-4 text-sm "><?= $row['report_subject'] ?></td>
                                    <td class="text-right relative px-6"><a class="bg-green-600 px-4 py-2 rounded-md text-sm text-gray-200 hover:bg-green-500 hover:text-gray-300" href="?bug_fixed=true&bug_id=<?= $row['id'] ?>">Fixed</a></td>
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