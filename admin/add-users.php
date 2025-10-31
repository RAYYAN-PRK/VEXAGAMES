<?php require "../app/includes/function_general.php"; ?>
<?php include "includes/header.php"; ?>
<?php // include "includes/config.php"; ?>

<?php
// session_start();

if (!empty($_GET['token_id']) && isset($_GET['action'])) {
    $token_id = $_GET['token_id'];
    $action_type = $_GET['action'];
}

if (isset($token_id) && isset($action_type) && !empty($token_id)) {

    $sql = "select * from zon_users where id=$token_id";
    $run = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($run);
}
?>

<body class="dark:bg-[#121317]">
    <main class="d-flex">
        <?php include "includes/sidebar.php"; ?>
        <div class="main w-full px-12 py-6">
            <div class="games-list mt-6">

                <form action="functions/add-user.php" method="POST" enctype="multipart/form-data" id="add-page" class="tab">
                    <?php if (!empty($token_id)) { ?> <input hidden type="text" name="user_id" value="<?php echo $data['id']; ?>"> <?php } ?>
                    <div class="flex gap-6">
                        <div class="input-form w-full">

                            <div class="input-group flex flex-column">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">full Name</label>
                                <input value="<?php if (!empty($token_id)) {
                                                    echo $data['name'];
                                                } ?><?php if(isset($_SESSION['name'])){ echo $_SESSION['name']; } ?>" required name="name" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs" type="text" placeholder="full name">
                            </div>

                            <div class="input-group flex flex-column mt-6">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">email</label>
                                <input required value="<?php if (!empty($token_id)) {
                                                            echo $data['email'];
                                                        } ?><?php if(isset($_SESSION['email'])){ echo $_SESSION['email']; } ?>" name="email" class="py-[15px] text-gray-500 outline-none <?php if (isset($_GET['emailError'])) { echo "border-2 border-red-800 focus:outline-red-800";  }?> focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs" type="email" placeholder="Email">
                                <?php if (isset($_GET['emailError'])) {  ?>
                                    <label class="select-none text-red-800 capitalize text-xs mb-1 mt-1"> <?php echo Secure_DATA($_GET['emailError']); ?> </label>
                                <?php } ?>
                            </div>

                            <div class="input-group flex flex-column mt-6">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">username</label>
                                <input required value="<?php if (!empty($token_id)) {
                                                            echo $data['username'];
                                                        } ?><?php if(isset($_SESSION['username'])){ echo $_SESSION['username']; } ?>" name="username" class="py-[15px] text-gray-500 outline-none <?php if (isset($_GET['usernameError'])) { echo "border-2 border-red-800 focus:outline-red-800";  }?>  focus:outline focus:outline-blue-500 transition-sm  px-3 text-xs" type="text" placeholder="Username">
                                <?php if (isset($_GET['usernameError'])) {  ?>
                                    <label class="select-none text-red-800 capitalize text-xs mb-1 mt-1"> <?php echo Secure_DATA($_GET['usernameError']); ?> </label>
                                <?php } ?>
                            </div>


                            <div class="input-group flex flex-column mt-6">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">user pic</label>
                                <input name="user_pic" class="py-0 border-2 dark:border-zinc-900 border-gray-100 text-gray-500 outline-none rounded-sm focus:outline bg-[white] h-12 focus:outline-blue-500 transition-sm  px-0 text-xs" type="file" placeholder="Game Image">
                            </div>

                            <div class="input-group flex flex-column mt-6">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">password</label>
                                <input name="password" value="<?php if (!empty($token_id)) {
                                                            echo $data['password'];
                                                        } ?><?php if(isset($_SESSION['password'])){ echo $_SESSION['password']; } ?>" class="py-0 border-2 dark:border-zinc-900 border-gray-100 text-gray-500 outline-none rounded-sm focus:outline bg-[white] h-12 focus:outline-blue-500 transition-sm  px-3 text-xs" type="text" placeholder="Password">
                            </div>


                            <div class="input-group flex flex-column mt-6">
                                <label class="text-gray-500 uppercase text-[10px] mb-2">user is </label>
                                <select name="user_status" class="py-[15px] text-gray-500 outline-none focus:outline focus:outline-blue-500 transition-sm w-full  px-3 text-xs" id="">
                                    <option <?php if (!empty($token_id)) {
                                                if ($data['status'] == '0') {
                                                    echo "selected";
                                                }
                                            } ?> value="0">Add User</option>
                                    <option <?php if (!empty($token_id)) {
                                                if ($data['status'] == '1') {
                                                    echo "selected";
                                                }
                                            } ?> value="1">User Banned</option>
                                </select>
                            </div>
                        </div>
                        <div class="other-inputs w-80"></div>

                    </div>
                    <button name="<?php if (!empty($token_id)) {
                                        echo 'update_user';
                                    } else {
                                        echo 'add_user';
                                    } ?>" class="bg-blue-600 text-white uppercase mt-4 text-sm rounded-sm py-2 px-3 "><?php if (!empty($token_id)) {
                                                                                                                                                                                                    echo 'update';
                                                                                                                                                                                                } else {
                                                                                                                                                                                                    echo 'Add User';
                                                                                                                                                                                                } ?></button>
                </form>
            </div>
    </main>
    <?php include "includes/footer.php"; ?>
</body>

</html>