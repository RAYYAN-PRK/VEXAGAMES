<?php

include ('../../../config.php');
include ('../../../app/includes/constant.php');
include ('../../../app/includes/app_start.php');

$message = '';

if (isset ($_POST) && !empty ($_POST)) {
    $query = $_POST['query'];
    $sql = "SELECT * FROM zon_games WHERE game_name LIKE '%$query%' LIMIT 20 ";
    $run = mysqli_query($socket, $sql);
    while ($row = mysqli_fetch_assoc($run)) {
        if ($row) {
            // if ($row['game_banner_url'] !== '') {
            ?>
            <div class="game-box">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <img class="h-10 w-10 rounded-md" src="<?= $row['game_image_url'] ?>" />
                        <div class="details">
                            <span class="text-lg font-bold ">
                                <?= $row['game_name'] ?>
                            </span> <br>
                            <span class="text-gray-400 text-sm ">
                                <?= $row['game_category'] ?>
                            </span>
                        </div>
                    </div>
                    <input type="checkbox" value="<?= $row['id'] ?>" class="h-7 outline-auto focus:outline-blue-500 rounded-lg w-7"
                        name="game_id[]" />
                </div>
            </div>
            <?php
            // } else {
            //     $message = 'game not able to add in featured game.';
            // }
        } else {
            echo 'game not found';
        }
    }
} else {
    echo "Search your game";
}

echo $message;

?>