<?php $page = "Add Ads"; ?>
<?php require "../app/includes/function_general.php"; ?>
<?php include "includes/header.php"; ?>
<?php // include "includes/config.php"; ?>

<?php

if (!empty($_GET['token_id']) && isset($_GET['action'])) {
    $token_id = $_GET['token_id'];
    $action_type = $_GET['action'];
}

if (isset($token_id) && isset($action_type) && !empty($token_id)) {

    $sql = "select * from zon_ads where id=$token_id";
    $run = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($run);
}
?>

<body class="dark:bg-[#121317]">
    <main class="d-flex">
        <?php include "includes/sidebar.php"; ?>
        <div class="main w-full px-12 py-6">
            <div class="games-list mt-6">
                <form action="functions/functions.php" method="POST" enctype="multipart/form-data" id="add-page" class="tab">
                <?php if(!empty($token_id)) { ?> <input hidden type="text" name="ad_id" value="<?php echo $data['id']; ?>"> <?php } ?>
                    <div class="flex gap-6">
                        <div class="input-form w-full">
                            <div class="input-group flex flex-column">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">Name</label>
                                <input id="category_name" value="<?php if(!empty($token_id)) { echo $data['ad_name']; } ?>" required name="ad_name" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs" type="text" placeholder="Ad Name">
                            </div>
                            <div class="input-group flex flex-column mt-6">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">Advertise Code</label>
                                <textarea name="ad_code" class="outline-none px-2 dark:bg-zinc-900 py-2 focus:outline-blue-500 transition-sm text-gray-500 text-sm" cols="30" rows="10"><?php if(!empty($token_id)) { echo $data['code']; } ?></textarea>
                            </div>
                            <div class="input-group mt-4">
                                <input id="ad_contr" <?php if($data['status'] == 1) { echo "checked"; } ?> type="checkbox" value="off" name="ad_contr" class="mr-2">
                                <label for="ad_contr" class="text-xs text-gray-600 ml-3 select-none">off Advertisement</label>
                            </div>
                        </div>
                        <div class="other-inputs w-80"></div>

                    </div>
                    <button name="ads_up_add" class="bg-blue-600 text-white uppercase mt-4  text-sm rounded-sm py-2 px-3 ">Save</button>
                </form>
            </div>
    </main>
    <?php include "includes/footer.php"; ?>
</body>

</html>