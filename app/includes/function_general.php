<?php

require_once '../app/includes/constant.php';
require_once '../config.php';
require_once '../app/includes/app_start.php';

// Getting All User Data this Function echo Data
function User_Data($column)
{
    global $socket;
    $current_user = $_SESSION['Loggedin_user_id'];
    $sql = "select * from zon_users where id=$current_user";
    $run = mysqli_query($socket, $sql);
    $row = mysqli_fetch_assoc($run);

    echo $row[$column];
}
// Getting All User Data this Function return Data
function User_Data_Two($column)
{
    global $socket;
    if (isset($_SESSION['Loggedin_user'])) {
        $current_user = $_SESSION['Loggedin_user_id'];
        $sql = "select * from zon_users where id=$current_user";
        $row = mysqli_fetch_assoc(mysqli_query($socket, $sql));

        return $row[$column];
    }
}

// Getting user Data by column name and condition
function User_Data_By_Cond($column, $cond)
{
    global $socket;
    $sql = "select * from zon_users where $cond";
    $row = mysqli_fetch_assoc(mysqli_query($socket, $sql));

    return $row[$column];
}



// Getting All Game Data this Function print Data
function Game_Data($id, $data)
{

    global $socket;

    $query = "SELECT * from zon_games where id=$id";

    $row = mysqli_fetch_assoc(mysqli_query($socket, $query));

    echo $row[$data];
}

// Getting All Game Data this Function return data
function Game_Data_Two($id, $data)
{
    global $socket;

    $query = "SELECT * from zon_games where id=$id";

    $row = mysqli_fetch_assoc(mysqli_query($socket, $query));

    return $row[$data];
}



// Secure Data 
function Secure_DATA($d)
{
    global $socket;
    return htmlspecialchars(mysqli_real_escape_string($socket, $d));
}


// Checking Data From Databse exist or not
function Exist_Data($table, $condition)
{

    global $socket;

    $query = "select * from $table where $condition";

    return mysqli_num_rows(mysqli_query($socket, $query));
}

// Getting Game Likes
function Game_Likes($data, $condition)
{
    global $socket;

    $query = "select * from zon_likes where $condition";

    $run = mysqli_query($socket, $query);

    $row = mysqli_fetch_assoc($run);

    return $row[$data];
}

// Getting All Configuraton Data of Site
function Zon_Config($data)
{
    global $socket;

    $query = "select * from zon_config";

    $run = mysqli_query($socket, $query);

    $row = mysqli_fetch_assoc($run);

    return $row[$data];
}

// Play Newest
function AutoPlays()
{
    global $socket;
    global $site_url;

    $query = "select * from zon_games order by id desc limit 1";

    $run = mysqli_query($socket, $query);

    $row = mysqli_fetch_assoc($run);

    echo $site_url . "single/" . $row['id'] . "/" . $row['game_name'];
}

// Getting Category Data
function Category_Data($data, $condition)
{
    global $socket;

    $query = "select * from zon_category where $condition";

    $run = mysqli_query($socket, $query);

    $row = mysqli_fetch_assoc($run);

    if (!empty($row[$data])) {
        return $row[$data];
    } else {
        return false;
    }

}

// Getting Likes Data
function Game_likes_data($data)
{
    global $socket;

        $current_user =  User_Data_Two('id');
    
        $query = "select * from zon_likes where user_id=$current_user";
    
        $run = mysqli_query($socket, $query);
    
        $row = mysqli_fetch_assoc($run);

        return $row[$data];
}

// Getting Total Numbers of Rows of Games
function Total_Games()
{

    global $socket;

    $query = "select * from zon_games";

    return mysqli_num_rows(mysqli_query($socket, $query));
}

// Getting Total Numbers of Rows By Table Name
function Total_Items ($table)
{

    global $socket;

    $query = "select * from $table";

    return mysqli_num_rows(mysqli_query($socket, $query));
}

// check user is in database or not
function ValidateFields($field, $var)
{
    global $socket;
    $Validate = "select * from zon_users where $field='$var'";

    return mysqli_num_rows(mysqli_query($socket, $Validate));
}

// Getting Page Data From Database
function page_data ($id, $data) {
    global $socket;

    $query = "select * from zon_pages where id=$id";
    
    $run = mysqli_query($socket, $query);

    $row = mysqli_fetch_assoc($run);

    return $row[$data];
}