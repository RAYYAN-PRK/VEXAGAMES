<?php $page = "Featured Games"; ?>
<?php require "../app/includes/function_general.php"; ?>
<?php include "includes/header.php"; ?>
<?php
$search_query = "SELECT * FROM zon_games WHERE is_featured=1 ORDER BY id DESC";

if (isset($_GET) && !empty($_GET)) {
    if (isset($_GET['content_type']) && isset($_GET['action']) && isset($_GET['token_id'])) {
        if ($_GET['content_type'] == 'featured_game') {
            if ($_GET['action'] == 'delete') {
                $id = $_GET['token_id'];
                $sql = "UPDATE zon_games SET is_featured=0 WHERE id=$id";
                if (mysqli_query($socket, $sql)) {
                    echo "<script>window.location.href = '?';</script>";
                }
            }
        }
    }
}

if (isset($_POST) && !empty($_POST)) {
    $game_id = $_POST['game_id'];

    foreach($game_id as $id) {
        if(mysqli_query($socket, "UPDATE zon_games SET is_featured=1 WHERE id=$id")) {
            echo "<script>window.location.href = '';</script>";
        }
    }

}

?>

<body>
    <main class="d-flex">
        <?php include "includes/sidebar.php"; ?>
        <div class="main w-full px-12 py-6">
            <div class="games-list">
                <a onclick="document.getElementById('GameAddModal').classList.toggle('close')" class="py-2 px-6 bg-blue-400 cursor-pointer text-white uppercase text-xs rounded-md">ADD</a>
                <table class="w-full mt-10  ">
                    <thead class="border-b-2 dark:border-zinc-900 px-16 border-gray-100 py-2">
                        <td class="py-2 text-xs text-gray-600 px-4">ID</td>
                        <td class="py-2 text-xs text-gray-600 px-4 w-full">Name</td>
                        <td class="py-2 text-xs text-right"></td>
                    </thead>
                    <tbody>
                        <?php
                        $mysql = mysqli_query($con, $search_query) or die("died");
                        while ($row = mysqli_fetch_assoc($mysql)) {
                            ?>
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
                                        </a>
                                    </td>
                                    <td class="text-right relative px-6">
                                        <button data-target="#dc_<?= $row['id'] ?>"
                                            class="bi-three-dots-vertical text-gray-500 drop_btn"></button>
                                        <div id="dc_<?= $row['id'] ?>" style="z-index: 99;"
                                            class="dropdown absolute bg-white text-right right-0 hidden flex-column ">
                                            <a href="?action=delete&token_id=<?= $row['id'] ?>&content_type=featured_game"
                                                class="text-xs px-4 py-2 text-red-700">Delete</a>
                                            <!-- <a href="add-game.php?action=update&token_id=<?= $row['id'] ?>&content_type=game" class="text-xs px-4 py-2">Edit</a> -->
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
    <div id="GameAddModal" class="game-add-modal close">
        <div onclick="this.parentNode.classList.add('close')" class="overlay"></div>
        <form action="" method="post" class="game-add-dialog">
            <div class="dialog-head px-4 flex justify-between mb-3 ">
                <span></span>
                <div onclick="this.parentNode.parentNode.parentNode.classList.add('close')" class="close text-2xl select-none cursor-pointer font-bold text-zinc-800 ">&times;</div>
            </div>
            <div class="form border">
                <input id="SearchGame" type="text" class="px-2" placeholder="Search your game..." />
                <button type="button" class="bi-search"></button>
            </div>
            <div id="gameList" class="game-list overflow-y-scroll h-[36vh] p-3"></div>
            <div class="modal-footer">
                <button class="bg-blue-600 px-3 py-1.5 text-white rounded-md">Add Game</button>
            </div>
        </form>
    </div>
    <style>
        .game-add-modal.close {
            display: none;
        }
    </style>

    <script>
        getGame('a');
        var input = document.getElementById('SearchGame');
        input.addEventListener("keyup", () => {
            getGame(input.value);
        })

        function getGame(value) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '<?php echo $site_url ?>admin/includes/ajax/gamesbyquery.php', true);
            // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Request was successful, handle the response
                    var response = xhr.responseText;
                    if (response !== '') {
                        document.getElementById('gameList').innerHTML = response;
                    } else {
                        document.getElementById('gameList').innerText = `Game not found from ( ${value} )`;  
                    }
                }
            };

            const formData = new FormData();
            formData.append("query", value);
            xhr.send(formData);
        }
    </script>

    <?php include "includes/footer.php"; ?>
</body>

</html>