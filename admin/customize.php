<?php $page = "Customize Layouts"; ?>
<?php require "../app/includes/function_general.php"; ?>
<?php include "includes/header.php"; ?>
<?php // include "includes/config.php"; ?>
<?php

$query = mysqli_query($con, "SELECT * FROM zon_config");
$config = mysqli_fetch_assoc($query);

if (isset($_GET) && !empty($_GET)) {
    if (isset($_GET['reset']) && isset($_GET['customize'])) {
        $sql = "UPDATE zon_config SET site_color='#ff3814', section_games_limit=10, 	featured_game_slider=1, popular_views=3, cursor_color='#ff3814', animate_class='fadeInDown', custom_cursor=1 ";
        if (mysqli_query($con, $sql)) {
            echo "<script>window.location.href = '?'; </script>";
        }
    }
}

?>

<body class="dark:bg-[#121317]">
    <main class="d-flex">
        <?php include "includes/sidebar.php"; ?>
        <div class="main w-full px-12 py-6">
            <div class="games-list mt-6">
                <form action="functions/functions.php" method="post">
                    <div class="flex gap-10">
                        <div class="input-group flex flex-column">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">Website Color</label>
                            <input type="color" required value="<?php echo $config['site_color'];  ?>" name="site_color" class="py-0 text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-0 text-xs" placeholder="Number of views">
                        </div>

                        <!-- <div class="input-group flex flex-column">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">Section games limit</label>
                            <input type="number" value="<?php echo $config['section_games_limit'];  ?>" required name="section_games_limit" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs" placeholder="Number of views">
                        </div> -->
                    </div>

                    <div class="flex gap-10 mt-6">
                        <!-- <div class="input-group flex flex-column">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">Featured Game Slider Show</label>
                            <select required name="featured_game_slider" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs">
                                <option <?php if ($config['featured_game_slider'] == 1) {
                                            echo 'selected';
                                        } ?> value="1">Yes</option>
                                <option <?php if ($config['featured_game_slider'] == 0) {
                                            echo 'selected';
                                        } ?> value="0">No</option>
                            </select>
                        </div> -->

                        <!-- <div class="input-group flex flex-column">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">game popular views limit</label>
                            <input type="number" value="<?php echo $config['popular_views'];  ?>" required name="popular_views" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs" placeholder="Number of views">
                            <label class="text-gray-500 text-[10px] mt-2">How many views will go to your work, then you will call it popular</label>
                        </div> -->
                    </div>

                    <div class="flex gap-10 mt-6">
                        <div class="input-group flex flex-column">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">Animation</label>
                            <select required name="animate_class" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs">
                                <?php 
                                $run = mysqli_query($con, "SELECT * FROM zon_animation_classes");
                                while ($class = mysqli_fetch_assoc($run)) {?>
                                <option <?php if( $config['animate_class'] == $class['name'] ) { echo "selected"; } ?> value="<?= $class['name']  ?>"><?= $class['name']  ?></option>
                                <?php } ?>
                            </select>
                            <label class="text-gray-500 text-[10px] mt-2">If you want to see how the animation is then you can see it from here. <a target="_blank" class="text-blue-400" href="https://animate.style/">animation list</a> </label>
                        </div>

                        <!-- <div class="input-group flex flex-column">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">CURSOR Color</label>
                            <input type="color" required value="<?php echo $config['cursor_color'];  ?>" name="cursor_color" class="py-0 text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-0 text-xs" placeholder="Number of views">
                        </div> -->
                    </div>

                    <div class="flex gap-10 mt-6">
                        <!-- <div class="input-group flex flex-column">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">Show Custom Cursor</label>
                            <select required name="custom_cursor" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs">
                            <option <?php if ($config['custom_cursor'] == 1) {
                                            echo 'selected';
                                        } ?> value="1">Yes</option>
                                <option <?php if ($config['custom_cursor'] == 0) {
                                            echo 'selected';
                                        } ?> value="0">No</option>
                            </select>
                        </div> -->

                        <!-- <div class="input-group flex flex-column">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">CURSOR Color</label>
                            <input type="color" required value="<?php echo $config['cursor_color'];  ?>" name="cursor_color" class="py-0 text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-0 text-xs" placeholder="Number of views">
                        </div> -->
                    </div>

                    <div class="flex gap-10 mt-6">
                        <!-- <div class="input-group flex flex-column">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">You want blogs</label>
                            <select required name="blog" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs">
                            <option <?php if ($config['blog'] == 1) {
                                            echo 'selected';
                                        } ?> value="1">Yes</option>
                                <option <?php if ($config['blog'] == 0) {
                                            echo 'selected';
                                        } ?> value="0">No</option>
                            </select>
                        </div> -->

                        <div class="input-group flex flex-column">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">Gamepix sid</label>
                            <input type="text" required value="<?php echo $config['gamepix_sid'];  ?>" name="gamepix_sid" class="py-[15px] px-2 text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-0 text-xs" placeholder="Number of views">
                        </div>
                    </div>


                    <button name="customize_button" class="bg-blue-600 text-white uppercase mt-4 text-xs rounded-sm py-2 px-3 ">Save Changes</button>

                </form>
            </div>
        </div>
    </main>
    <?php include "includes/footer.php"; ?>
</body>

</html>