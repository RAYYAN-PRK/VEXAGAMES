<?php require "../app/includes/function_general.php"; ?>
<?php include "includes/header.php"; ?>
<?php // include "includes/config.php"; ?>

<?php
if (!empty($_GET['token_id']) && isset($_GET['action'])) {
    $token_id = $_GET['token_id'];
    $action_type = $_GET['action'];
}

if (isset($token_id) && isset($action_type) && !empty($token_id)) {

    $sql = "select * from zon_category where id=$token_id";
    $run = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($run);
}
?>
<style>
    #editor-cat-desc ul,
    #editor-cat-desc ol {
        list-style-type: disc;
        margin: 10px;
        padding: 10px;
    }
    #editor-cat-desc p {
        margin: 10px 0;
    }

    #editor-cat-desc h1,
    #editor-cat-desc h2,
    #editor-cat-desc h3,
    #editor-cat-desc h4,
    #editor-cat-desc h5,
    #editor-cat-desc h6 {
        margin: 10px 0;
        font-weight: bolder;
    }
</style>
<body class="dark:bg-[#121317]">
    <main class="d-flex">
        <?php include "includes/sidebar.php"; ?>
        <div class="main w-full px-12 py-6">
            <div class="games-list mt-6">
                <form action="functions/functions.php" method="POST" enctype="multipart/form-data" id="add-page" class="tab">
                <?php if(!empty($token_id)) { ?> <input hidden type="text" name="category_id" value="<?php echo $data['id']; ?>"> <?php } ?>
                    <div class="flex gap-6">
                        <div id="editor-cat-desc" class="input-form w-full">
                            <div class="input-group flex flex-column">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">Name</label>
                                <input id="category_name" value="<?php if(!empty($token_id)) { echo $data['name']; } ?>" required name="game_category" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs" type="text" placeholder="Category Name">
                            </div>
                            <div class="input-group flex flex-column mt-6">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">Slug</label>
                                <input required id="category_slug" value="<?php if(!empty($token_id)) { echo $data['slug']; } ?>" required name="game_category_slug" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs" type="text" placeholder="Category Slug">
                            </div>
                            
                            <div class="input-group flex flex-column mt-6">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">Description</label>
                                <textarea id="cat-desc-editor"
                            class="py-2 resize-none  text-gray-500 dark:bg-zinc-900 border-2 text-gray-400 bg-[white] border-gray-200 outline-none focus:outline focus:outline-blue-500 transition-sm text-xs px-2"
                            name="game_category_description" cols="50"
                            rows="16"><?php if(!empty($token_id)) { echo $data['description']; } ?></textarea>
                            </div>
                            
                        </div>
                        <div class="other-inputs w-80"></div>

                    </div>
                    <button name="<?php if(!empty($token_id)) { echo 'update_category'; } else{ echo 'add_category'; } ?>" class="bg-blue-600 text-white uppercase mt-4 text-sm rounded-sm py-2 px-3 "><?php if(!empty($token_id)) { echo 'update'; } else{ echo 'Add'; } ?></button>
                </form>
            </div>
    </main>
        <script>
        ClassicEditor
            .create(document.querySelector('#cat-desc-editor'))
            .catch(error => {
                console.error(error);
            });
    </script>    
    <?php include "includes/footer.php"; ?>
</body>

</html>