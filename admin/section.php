<?php 
$add = $_GET['add'] ?? '';
$edit = $_GET['edit'] ?? '';

if ($add == 'true') {
    $page = "Add Section";
} else if ($edit == 'true') {
    $page = "Edit Section";
} else {
    $page = "Game Section";
}

 ?>
<?php require "../app/includes/function_general.php"; ?>
<?php include "includes/header.php"; ?>
<?php // include "includes/config.php"; ?>
<?php

$query = mysqli_query($con, "SELECT * FROM zon_config");
$config = mysqli_fetch_assoc($query);

if (isset($_GET) && !empty($_GET)) {
    if (isset($_GET['content_type']) && isset($_GET['action']) && isset($_GET['token_id'])) {
        if ($_GET['content_type'] == 'section') {
            if ($_GET['action'] == 'delete') {
                $id = $_GET['token_id'];
                $sql = "DELETE FROM zon_section WHERE id=$id";
                if (mysqli_query($socket, $sql)) {
                    echo "<script>window.location.href = '?';</script>";
                }
            }
        }
    }
}

if (isset($_POST) && !empty($_POST)) {
    if (isset($_POST['section_name']) && isset($_POST['section_category']) && isset($_POST['insert_section'])) {
        $section_category = $_POST['section_category'];
        $section_name = $_POST['section_name'];
        $sql = "INSERT INTO zon_section (`section_name`, `section_category`) VALUES ('$section_name', $section_category) ";
        if (mysqli_query($socket, $sql)) {
            echo "<script>window.location.href = '?';</script>";
        }
    }
}

if (isset($_POST) && !empty($_POST)) {
    if (isset($_POST['section_name']) && isset($_POST['section_category']) && isset($_POST['update_section'])) {
        $section_category = $_POST['section_category'];
        $section_name = $_POST['section_name'];
        $id = $_GET['id'];
        $sql = "UPDATE zon_section SET `section_name`='$section_name', `section_category`=$section_category WHERE  id=$id";
        if (mysqli_query($socket, $sql)) {
            echo "<script>window.location.href = '?';</script>";
        }
    }
}

function getSectionDataById($id) {
    global $socket;
    $sql = "SELECT * FROM zon_section WHERE id=$id";
    $run = mysqli_query($socket, $sql);
    $data = mysqli_fetch_assoc($run);
    return $data;
}

$data = [];

if (isset($_GET['edit']) && isset($_GET['id'])) {
    $data = getSectionDataById($_GET['id']);
}

?>

<body class="dark:bg-[#121317]">
    <main class="d-flex">
        <?php include "includes/sidebar.php"; ?>
        <div class="main w-full px-12 py-6">
            <div class="games-list mt-6">
                <?php if($add === 'true' || $edit == 'true' ) { ?>
                <form action="" method="post">
                    <div class="flex gap-10">
                        <div class="input-group flex flex-column">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">Section Name</label>
                            <!-- <input type="color" required value="<?php echo $config['site_color'];  ?>" name="site_color" class="py-0 text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-0 text-xs" placeholder="Number of views"> -->
                            <input placeholder="Section Name" value="<?php echo $edit == 'true' ? $data['section_name'] : '' ?>" type="text" name="section_name" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs" />
                        </div>

                        <div class="input-group flex flex-column">
                            <label class="text-gray-500 uppercase text-[10px] mb-2">Select Category</label>
                            <select required name="section_category" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs">
                            <?php
                                    $query = mysqli_query($con, "select * from zon_category order by id desc");
                                    while ($row = mysqli_fetch_assoc($query)) { ?>
                                        <option <?php echo $edit == 'true' ? (getCategoryNameById($data['section_category']) == $row['name'] ? 'selected' : '') : '' ?> value="<?= $row['id'] ?>"><?= $row['name'] ?> ( <?php echo num_rows(T_ZON_GAMES, "game_category='". $row['name']. "'") ?> ) </option>
                                    <?php } ?>
                            </select>
                            <label class="text-gray-500 text-[10px] mb-2">Select which category of games you want to show in this section.</label>
                        </div>
                    </div>
                    <input type="hidden" name="<?php echo $edit == 'true' ? 'update_section' : 'insert_section' ?>" value=""  />
                    <button name="<?php echo $edit == 'true' ? 'update_section' : 'insert_section' ?>" class="bg-blue-600 text-white uppercase mt-4 text-sm rounded-sm py-2 px-3 "><?php echo $edit == 'true' ? 'update section' : 'add section' ?></button>
                </form>
                <?php } else { ?>
                    <a href="?add=true" class="py-2 px-6 bg-blue-400 text-white uppercase text-xs rounded-md">ADD</a>
                    <table class="w-full mt-10 ">
                    <thead class="border-b-2 dark:border-zinc-900 px-16 border-gray-100 py-2">
                        <td class=" text-gray-400 py-2 text-xs px-6">#Id</td>
                        <td class=" text-gray-400 py-2 text-xs px-6 w-full">Name</td>
                        <td class=" text-gray-400 py-2 text-xs px-6 ">Category</td>
                        <td class=" text-gray-400 py-2 text-xs text-right px-6">Action</td>
                    </thead>
                    <tbody class="py-4">
                        <?php $run = mysqli_query($con, 'select * from zon_section') ?>
                        <?php while ($row = mysqli_fetch_assoc($run)) { ?>
                            <tr class="bg-[white] dark:bg-zinc-900 px-16 py-4 rounded-lg">
                                <td class="text-xs px-6 text-gray-500"><?=$row['id']?></td>
                                <td class="text-gray-500 text-xs px-6 py-4"><a href="?edit=true&id=<?= $row['id'] ?>"><?=$row['section_name']?></a></td>
                                <td class="text-gray-500 whitespace-nowrap text-xs px-6 py-4"><a><?php echo getCategoryNameById($row['section_category']) ?></a></td>
                                <td class="text-right relative px-6">
                                    <button data-target="#dc_<?= $row['id'] ?>" class="bi-three-dots-vertical text-gray-500 drop_btn"></button>
                                    <div id="dc_<?= $row['id'] ?>" style="z-index: 99;" class="dropdown absolute bg-white text-right right-0 hidden flex-column ">
                                        <a href="?action=delete&token_id=<?= $row['id'] ?>&content_type=section" class="text-xs px-4 py-2 text-red-700">Delete</a>
                                        <a href="?edit=true&id=<?= $row['id'] ?>" class="text-xs px-4 py-2">Edit</a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php } ?>
            </div>
        </div>
    </main>
    <?php include "includes/footer.php"; ?>
</body>

</html>