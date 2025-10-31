<?php $page = "Blog"; ?>
<?php require "../app/includes/function_general.php"; ?>
<?php include "includes/header.php"; ?>
<?php
$add = $_GET['add'] ?? '';
$edit = $_GET['edit'] ?? '';

if (isset($_POST) && !empty($_POST)) {
    if (isset($_POST['add_blog'])) {
        $blog_title = $_POST['blog_title'];
        $blog_desc = $_POST['blog_desc'];
        $blog_content = mysqli_real_escape_string($socket, $_POST['blog_content']);
        // $blog_content = "hello world";
        $date = date('D, d M Y');
        $file = $_FILES['blog_img'];
        $file_name = rand(11111111, 9999999) . $file['name'];
        $iu = false;

        if ($file['error'] == 0) {
            if (move_uploaded_file($file['tmp_name'], '../static/blog/' . $file_name)) {
                $f_name = $file_name;
                $iu = true;
            }
        }

        // echo "<pre>";
        // print_r($_FILES);

        // if ($iu) {
            $sql = "INSERT INTO zon_blog (`blog_title`, `blog_desc`, `blog_content`, `blog_image`, `blog_date`) VALUES ('$blog_title', '$blog_desc', '$blog_content', '$file_name', '$date') ";
        // } else {
            // $sql = "INSERT INTO zon_blog (`blog_title`, `blog_desc`, `blog_content`, `blog_image`, `blog_date`) VALUES ('$blog_title', '$blog_desc', '$blog_content', '$file_name', '$date') ";
        // }

        if (mysqli_query($socket, $sql)) {
            echo "<script>window.location.href = '?';</script>";
        }
    }
}

if (isset($_POST) && !empty($_POST)) {
    if (isset($_POST['update_blog'])) {
        $blog_title = $_POST['blog_title'];
        $blog_desc = $_POST['blog_desc'];
        $blog_content = mysqli_real_escape_string($socket, $_POST['blog_content']);
        $date = date('D, d M Y');
        $id = $_GET['token_id'];
        $file = $_FILES['blog_img'];
        $file_name = rand(11111111, 9999999) . $file['name'];
        $iu = false;

        mysqli_query($con, "SET GLOBAL max_allowed_packet=1073741824");

        if ($file['error'] == 0) {
            if (move_uploaded_file($file['tmp_name'], '../static/blog/' . $file_name)) {
                $f_name = $file_name;
                $iu = true;
            }
        }

        if ($iu) {
            $sql = "UPDATE zon_blog SET `blog_title`='$blog_title', `blog_desc`='$blog_desc', `blog_content`='$blog_content', `blog_image`='$file_name', `blog_date`='$date' WHERE id=$id ";
        } else {
            $sql = "UPDATE zon_blog SET `blog_title`='$blog_title', `blog_desc`='$blog_desc', `blog_content`='$blog_content', `blog_date`='$date' WHERE id=$id ";
        }


        if (mysqli_query($socket, $sql)) {
            echo "<script>window.location.href = '?';</script>";
        }
    }
}

if (isset($_GET) && !empty($_GET)) {
    if (isset($_GET['action']) && isset($_GET['token_id'])) {
        if ($_GET['action'] == 'delete') {
            $id = $_GET['token_id'];
            if (mysqli_query($socket, "DELETE FROM zon_blog WHERE id=$id")) {
                echo "<script>window.location.href = '?';</script>";
            }
        }
    }
}


function getBlogDataById($id)
{
    global $socket;

    $sql = mysqli_query($socket, "SELECT * FROM zon_blog WHERE id=$id");
    $data = mysqli_fetch_assoc($sql);
    return $data;
}

$data = [];
if (isset($_GET) && isset($_GET['edit']) && isset($_GET['token_id'])) {
    $data = getBlogDataById($_GET['token_id']);
}


?>

<body>
    <main class="d-flex">
        <?php include "includes/sidebar.php"; ?>
        <div class="main w-full px-12 py-6">
            <?php if ($add == 'true' || $edit == 'true') { ?>
                <div class="games-list mt-6">
                    <form action="" method="post" id="add-page" enctype="multipart/form-data" class="tab">
                        <div class="input-group flex flex-column">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">Page title</label>
                            <input value="<?php echo $edit == 'true' ? $data['blog_title'] : '' ?>" required
                                name="blog_title"
                                class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs"
                                type="text" placeholder="Blog title">
                        </div>
                        <div class="input-group flex flex-column mt-6">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">Blog Description</label>
                            <input value="<?php echo $edit == 'true' ? $data['blog_desc'] : '' ?>" required name="blog_desc"
                                class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs"
                                type="text" placeholder="Blog Description">
                        </div>

                        <div class="input-group flex flex-column mt-6">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">Blog Thumbnail</label>
                            <input <?php echo $edit == 'true' ? '' : 'required' ?> name="blog_img"
                                class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs"
                                type="file" placeholder="Blog Thumbnail">
                        </div>

                        <div class="input-group flex flex-column mt-6">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">Blog Content</label>
                            <textarea name="blog_content" id="editor"
                                class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs"
                                type="text"
                                placeholder="Blog Content"><?php echo $edit == 'true' ? $data['blog_content'] : '' ?></textarea>
                        </div>

                        <button name="<?php echo $edit == 'true' ? 'update_blog' : 'add_blog' ?>"
                            class="bg-blue-600 text-white uppercase mt-4 text-sm rounded-sm py-2 px-3 ">
                            <?php echo $edit == 'true' ? 'Update Blog' : 'Add Blog' ?>
                        </button>

                    </form>
                </div>
            <?php } else { ?>
                <div class="games-list">
                    <a href="?add=true" class="py-2 px-6 bg-blue-400 text-white uppercase text-xs rounded-md">ADD</a>
                    <table class="w-full mt-10 ">
                        <thead class="border-b-2 dark:border-zinc-900 px-16 border-gray-100 py-2">
                            <td class=" text-gray-400 py-2 text-xs px-6">#Id</td>
                            <td class=" text-gray-400 py-2 text-xs px-6 w-full">Title</td>
                            <td class=" text-gray-400 py-2 text-xs px-6 w-full">Date</td>
                            <td class=" text-gray-400 py-2 text-xs text-right px-6">Action</td>
                        </thead>
                        <tbody class="py-4">
                            <?php $run = mysqli_query($con, 'select * from zon_blog') ?>
                            <?php while ($row = mysqli_fetch_assoc($run)) { ?>
                                <tr class="bg-[white] dark:bg-zinc-900 px-16 py-4 rounded-lg">
                                    <td class="text-xs px-6 text-gray-500">
                                        <?= $row['id'] ?>
                                    </td>
                                    <td class="text-gray-500 text-xs px-6 py-4"><a href="?edit=true&token_id=<?= $row['id'] ?>">
                                            <?= $row['blog_title'] ?>
                                        </a></td>
                                    <td class="text-gray-500 whitespace-nowrap text-xs px-6 py-4">
                                        <?= $row['blog_date'] ?>
                                    </td>
                                    <td class="text-right relative px-6">
                                        <button data-target="#dc_<?= $row['id'] ?>"
                                            class="bi-three-dots-vertical text-gray-500 drop_btn"></button>
                                        <div id="dc_<?= $row['id'] ?>" style="z-index: 99;"
                                            class="dropdown absolute bg-white text-right right-0 hidden flex-column ">
                                            <a href="?action=delete&token_id=<?= $row['id'] ?>"
                                                class="text-xs px-4 py-2 text-red-700">Delete</a>
                                            <a href="?edit=true&token_id=<?= $row['id'] ?>" class="text-xs px-4 py-2">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php } ?>
        </div>
    </main>

    <script>
        var editor1 = new RichTextEditor("#editor");    
    </script>
    <?php include "includes/footer.php"; ?>
</body>

</html>