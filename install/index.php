<?php
$page =  '';
if (!isset($_GET['page'])) {
    header("location: ?page=term");
} else if (!empty($_GET['page'])) {
    $page = $_GET['page'];
} else {
    header("location: ?page=term");
}


function CHECK_ROBOTS_TXT_FILE() {
    if (file_exists("../robots.txt") == 1) {
        echo '&check; Installed';
    } else {
        echo '&times; Not Installed';
    }
}

function CHECK_PHP_VERSION()
{
    $version = phpversion();
    if ($version > 5.5) {
        echo '&check; Installed';
    } else {
        echo '&times; Not Installed';
    }
}

function CHECK_CURL()
{
    if (function_exists('curl_version') == "enabled") {
        echo '&check; Installed';
    } else {
        echo '&times; Not Installed';
    }
}

function CHECK_MYSQL()
{
    if (function_exists('mysqli_connect') == 1) {
        echo '&check; Installed';
    } else {
        echo '&times; Not Installed';
    }
}

function CHECK_MDSTRING()
{
    if (extension_loaded('mbstring') == 1) {
        echo '&check; Installed';
    } else {
        echo '&times; Not Installed';
    }
}


function CHECK_AUF()
{
    if (ini_get('allow_url_fopen') == 1) {
        echo '&check; Installed';
    } else {
        echo '&times; Not Installed';
    }
}

function CHECK_HTACCESS()
{
    if (file_exists("../.htaccess") == 1) {
        echo '&check; Installed';
    } else {
        echo '&times; Not Installed';
    }
}

function CHECK_TABLE()
{
    if (file_exists("../poko.sql") == 1) {
        echo '&check; Installed';
    } else {
        echo '&times; Not Installed';
    }
}

function CHECK_CONFIG_FILE()
{
    if (file_exists("../config.php") == 1) {
        echo '&check; Installed';
    } else {
        echo '&times; Not Installed';
    }
}

// if (isset($_POST) && !empty($_POST) && $_POST['install']) {

// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poko</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>

<body>
    <div class="installation-page px-4">
        <div class="installation-progress flex">
            <div class="steps">
                <div class="step">
                    <span id="step_1" class="circle">1</span>
                </div>
                <div class="step">
                    <span id="step_2" class="circle ">2</span>
                </div>
                <div class="step">
                    <span id="step_3" class="circle">3</span>
                </div>
                <div class="step">
                    <span id="step_4" class="circle">4</span>
                </div>
                <div class="progress-bar">
                    <span class="indicator"></span>
                </div>
            </div>
        </div>
        <div class="installtion-information bg-white rounded-md px-6 py-5 shadow-md mt-6">
            <?php if (isset($page) && $page == 'term') { ?>
                <div class="agreement">
                    <h3 class="text-2xl font-bold text-gray-800 ">Terms & Condition</h3>
                    <p class="mt-4 text-gray-600">LICENSE AGREEMENT: one (1) Domain (site) Install</p>
                    <p class="mt-4 font-bold text-gray-600">You CAN:</p>
                    <p class="text-gray-600">1) Use on one (1) domain only, additional license purchase required for each
                        additional domain.</span>
                    <p class="text-gray-600">2) Modify or edit as you see fit.</p>
                    <p class="text-gray-600">3) Delete sections as you see fit.</p>
                    <p class="text-gray-600">4) Translate to your choice of language.</p>
                    <p class="mt-4 font-bold text-gray-600">You CANNOT:</p>
                    <p class="text-gray-600">1) Resell, distribute, give away or trade by any means to any third party or
                        individual without permission. </p>
                    <p class="text-gray-600">2) Use on more than one (1) domain.</p>
                    <div class="divider h-[1px] w-full bg-gray-200 mt-6"></div>
                    <form action="?page=requirem">
                        <div class="agree-button mt-4">
                            <input required type="checkbox" class="AgreementInput" id="agreeButton">
                            <label class="text-gray-600" id="agreeButton">Before Continuing You Agreement Terms And
                                Condition</label>
                        </div>
                        <button disabled id="step_1_button" style="width: fit-content;" href="?page=requirem" class="mt-6 block bg-blue-600 px-3 py-2 rounded-md text-sm text-white uppercase spacing-md">Continue</button>
                    </form>
                </div>
            <?php } ?>
            <?php if (isset($page) && $page == 'requirem') { ?>
                <div class="requirements">
                    <table border="1" class="w-full" width="100">
                        <thead class="py-2 block border-b-2 border-gray-200">
                            <tr class="flex px-2">
                                <td class="text-gray-600 w-full">Name</td>
                                <td class="text-gray-600 w-full">Description</td>
                                <td class="text-gray-600 w-full text-right">Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="flex py-2 hover:bg-gray-200 px-2">
                                <td class="text-gray-700 text-xs w-full">cURL</td>
                                <td class="text-gray-700 w-full text-xs">Required cURL PHP extension</td>
                                <td class="text-green-600 w-full text-right status-check text-xs"><?php CHECK_CURL() ?></td>
                            </tr>
                            <tr class="flex py-2 hover:bg-gray-200 px-2">
                                <td class="text-gray-700 text-xs w-full">MySQLi</td>
                                <td class="text-gray-700 w-full text-xs">Required MySQLi PHP extension</td>
                                <td class="text-green-600 w-full text-right status-check text-xs"><?php CHECK_MYSQL() ?></td>
                            </tr>
                            <!-- <tr class="flex py-2 hover:bg-gray-200 px-2">
                                <td class="text-gray-700 text-xs w-full">GD Library </td>
                                <td class="text-gray-700 w-full text-xs">Required GD Library for image cropping </td>
                                <td class="text-green-600 w-full text-right text-xs">&check; Installed</td>
                            </tr> -->
                            <!-- <tr class="flex py-2 hover:bg-gray-200 px-2">
                                <td class="text-gray-700 text-xs w-full">ZIP</td>
                                <td class="text-gray-700 w-full text-xs">Required ZIP extension for backuping data </td>
                                <td class="text-green-600 w-full text-right text-xs">&check; Installed</td>
                            </tr> -->
                            <tr class="flex py-2 hover:bg-gray-200 px-2">
                                <td class="text-gray-700 text-xs w-full">allow_url_fopen</td>
                                <td class="text-gray-700 w-full text-xs">Required allow_url_fopen </td>
                                <td class="text-green-600 w-full text-right status-check text-xs"><?php CHECK_AUF() ?></td>
                            </tr>
                            <!-- <tr class="flex py-2 hover:bg-gray-200 px-2">
                                <td class="text-gray-700 text-xs w-full">FileInfo </td>
                                <td class="text-gray-700 w-full text-xs">Required FileInfo extension for FFMPEG </td>
                                <td class="text-green-600 w-full text-right text-xs">&check; Installed</td>
                            </tr> -->
                            <tr class="flex py-2 hover:bg-gray-200 px-2">
                                <td class="text-gray-700 text-xs w-full">.htaccess </td>
                                <td class="text-gray-700 w-full text-xs">Required .htaccess file for script security
                                    (Located in ./poko) </td>
                                <td class="text-green-600 w-full text-right status-check text-xs"><?php CHECK_HTACCESS() ?></td>
                            </tr>
                            <tr class="flex py-2 hover:bg-gray-200 px-2">
                                <td class="text-gray-700 text-xs w-full">poko.sql</td>
                                <td class="text-gray-700 w-full text-xs ">Required poko.sql for the installation (Located
                                    in root directory) </td>
                                <td class="text-green-600 w-full text-right status-check text-xs"><?php CHECK_TABLE() ?></td>
                            </tr>
                            <tr class="flex py-2 hover:bg-gray-200 px-2">
                                <td class="text-gray-700 text-xs w-full">config.php</td>
                                <td class="text-gray-700 w-full text-xs">Required config.php to be writable for the
                                    installation </td>
                                <td class="text-green-600 w-full text-right status-check text-xs"><?php CHECK_CONFIG_FILE() ?></td>
                            </tr>
                            <tr class="flex py-2 hover:bg-gray-200 px-2">
                                <td class="text-gray-700 text-xs w-full">robots.txt</td>
                                <td class="text-gray-700 w-full text-xs">Required robots.txt to be writable for the
                                    installation </td>
                                <td class="text-green-600 w-full text-right status-check text-xs"><?php CHECK_ROBOTS_TXT_FILE() ?></td>
                            </tr>
                            <!-- <tr class="flex py-2 hover:bg-gray-200 px-2">
                                <td class="text-gray-700 text-xs w-full">config.json</td>
                                <td class="text-gray-700 w-full text-xs">Required config.php to be writable for the
                                    installation (Located in nodejs/config.json) </td>
                                <td class="text-green-600 w-full text-right text-xs">&check; Installed</td>
                            </tr> -->
                        </tbody>
                    </table>
                    <form action="?page=info">
                        <button href="#" id="step_2_button" style="width: fit-content;" href="?page=info" class="mt-6 block bg-blue-600 px-3 py-2 rounded-md text-sm text-white uppercase spacing-md">Continue</button>
                    </form>
                </div>
            <?php } ?>
            <?php if (isset($page) && $page == 'info') { ?>
                <form action="setup.php" method="POST" class="installation">
                    <h2 class="text-2xl font-bold text-gray-600">Installation</h2>
                    <div class="form sm:px-6 px-24 mt-6">
                        <input required type="text" name="host_name" class="w-full bg-gray-100 mb-4 outline-none border-2 rounded-md focus:border-blue-600 px-2 py-2" placeholder="SQL Host Name">
                        <input required type="text" name="db_username" class="w-full bg-gray-100 mb-4 outline-none border-2 rounded-md focus:border-blue-600 px-2 py-2" placeholder="SQL Username">
                        <input type="text" name="db_password" class="w-full bg-gray-100 mb-4 outline-none border-2 rounded-md focus:border-blue-600 px-2 py-2" placeholder="SQL Password">
                        <input required type="text" name="db_name" class="w-full bg-gray-100 mb-4 outline-none border-2 rounded-md focus:border-blue-600 px-2 py-2" placeholder="SQL Database Name ">
                        <input id="site_url" required type="text" name="site_url" class="w-full bg-gray-100 mb-1 outline-none border-2 rounded-md focus:border-blue-600 px-2 py-2" placeholder="Site URL">
                        <label class="text-xs text-gray-600 mb-6 block">Example: http://example.com - http://www.example.com </label>
                        <input required type="text" name="site_name" class="w-full bg-gray-100 mb-1 outline-none border-2 rounded-md focus:border-blue-600 px-2 py-2" placeholder="Site Name">
                        <input required type="text" name="site_title" class="w-full bg-gray-100 mb-1 outline-none border-2 rounded-md focus:border-blue-600 px-2 py-2" placeholder="Site Title">
                        <input required type="text" name="admin_username" class="w-full bg-gray-100 mb-1 outline-none border-2 rounded-md focus:border-blue-600 px-2 py-2" placeholder="Admin Username">
                        <input required type="text" name="admin_password" class="w-full bg-gray-100 mb-1 outline-none border-2 rounded-md focus:border-blue-600 px-2 py-2" placeholder="Admin Password">
                    </div>
                    <!-- <a id="step_3_button" style="width: fit-content;" href="?page=finish" class="mt-6 block bg-blue-600 px-3 py-2 rounded-md text-sm text-white uppercase spacing-md">Install</a> -->
                    <button id="Submit" name="install" class="mt-6 flex gap-5 items-center bg-blue-600 px-3 py-2 rounded-md text-sm text-white uppercase spacing-md" type="button">Install</button>
                    <button type="submit" name="install" id="go" class="opacity-0" ></button>
                </form>
            <?php } ?>

            <?php if (isset($page) && $page == 'finish') { ?>
                <div class="finish">
                    <h2 class="text-2xl mb-4 font-bold text-gray-800">Your Website is Ready!</h2>
                    <p class="text-gray-600"> Congratulations! Poko Script Has Been Successfully Installed and your website is ready.</p>
                    <p class="text-gray-600"> Login to your admin panel to make changes and modify any default content according to your needs.</p>
                    <a id="step_3_button" style="width: fit-content;" class="mt-6 cursor-pointer block bg-blue-600 px-3 py-2 mt-6 rounded-md text-sm text-white uppercase spacing-md">Let's Start</a>
                </div>
            <?php } ?>
        </div>
    </div>

    <script>
        var uri = document.URL;
        var url = uri.replace("install/?page=info", "");
        document.getElementById("site_url").value = url;
    </script>

    <style>
        [disabled] {
            opacity: 0.4;
            user-select: none;
            touch-action: none;
        }

        button[disabled] {
            opacity: 0.4;
        }

        * {
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
        }
        .loader {
            height: 10px;
            width: 10px;
            border-radius: 50%;
            border-top: 3px solid #fff;
            -webkit-animation: 1s spin linear infinite;
            -moz-animation: 1s spin linear infinite;
            animation: 1s spin linear infinite;
        }

        @keyframes spin {
            0% {transform: rotate(0deg);}
            100% {transform: rotate(360deg);}
        }
        @-webkit-keyframes spin {
            0% {transform: rotate(0deg);}
            100% {transform: rotate(360deg);}
        }
        body {
            background: #f6f7fb;
        }

        .installation-page {
            max-width: 900px;
            margin: 50px auto;
        }

        .steps .progress-bar {
            position: absolute;
            height: 4px;
            width: 100%;
            background: #4070f4 !important;
            z-index: -1;
        }

        .progress-bar .indicator {
            position: absolute;
            height: 100%;
            width: 0%;
            /* background: #4070f4; */
            transition: all 300ms ease;
        }

        .steps {
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: space-between;
            position: relative;
        }

        .steps .circle {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50px;
            width: 50px;
            color: #999;
            font-size: 22px;
            font-weight: 500;
            border-radius: 50%;
            background: #fff;
            border: 4px solid #e0e0e0;
            transition: all 200ms ease;
            transition-delay: 0s;
        }

        .steps .circle.active {
            transition-delay: 100ms;
            border-color: #4070f4;
            color: #4070f4;
        }

        .complete {
            background: #4070f4 !important;
            color: #fff !important;
        }
    </style>
    <script>
        const STEP_1 = document.getElementById('step_1');
        const STEP_2 = document.getElementById('step_2');
        const STEP_3 = document.getElementById('step_3');
        const STEP_4 = document.getElementById('step_4');

        const STEP_1_BUTTON = document.getElementById('step_1_button');
        const STEP_2_BUTTON = document.getElementById('step_2_button');
        const STEP_5_BUTTON = document.getElementById('step_3_button');
        const STEP_3_BUTTON = document.getElementById('Submit');
        const STEP_4_BUTTON = document.getElementById('step_4_button');

        if (STEP_1_BUTTON !== null) {
            STEP_1_BUTTON.addEventListener("click", STEP_1_FUNC);
        }
        if (STEP_2_BUTTON !== null) {
            STEP_2_BUTTON.addEventListener("click", STEP_2_FUNC);
        }
        if (STEP_3_BUTTON !== null) {
            STEP_3_BUTTON.addEventListener("click", STEP_3_FUNC);
        }
        if (STEP_4_BUTTON !== null) {
            STEP_4_BUTTON.addEventListener("click", STEP_4_FUNC);
        }

        function STEP_1_FUNC() {
            STEP_1.classList.add("complete");
            localStorage.setItem('KEY_1', '1');
        }

        function STEP_2_FUNC() {
            STEP_2.classList.add("complete");
            localStorage.setItem('KEY_2', '2');
        }

        function STEP_3_FUNC() {

            STEP_3.classList.add("complete");
            localStorage.setItem('KEY_3', '3');
            var Submit_Button = document.querySelector('#Submit');
            Submit_Button.setAttribute("disabled", "");
            Submit_Button.innerHTML = "<div class='loader'></div> Install";
        
            
            // Submit_Button.setAttribute("type", "submit");
            document.getElementById('go').click();
            // setTimeout(() => {
            // }, 1000);
        }

        function STEP_4_FUNC() {
            STEP_4.classList.add("complete");
            localStorage.setItem('KEY_4', '4');
        }

        const SESSION_1 = localStorage.getItem('KEY_1');
        const SESSION_2 = localStorage.getItem('KEY_2');
        const SESSION_3 = localStorage.getItem('KEY_3');
        const SESSION_4 = localStorage.getItem('KEY_4');

        const CURRENT_URL = window.location;
        const STR_URL = new URL(CURRENT_URL);
        const PARAM_URL = STR_URL.searchParams;

        if (SESSION_1) {
            STEP_1.classList.add('active');
            STEP_1.classList.add('complete');
            STEP_1.innerHTML = '&check;';
            if (PARAM_URL.get("page") == 'term') {
                window.location.href = '?page=requirem';
            }
        }
        if (SESSION_2) {
            STEP_2.classList.add('active');
            STEP_2.classList.add('complete');
            STEP_2.innerHTML = '&check;';
            if (PARAM_URL.get("page") == 'requirem') {
                window.location.href = '?page=info';
            }
        }
        if (SESSION_3) {
            STEP_3.classList.add('active');
            STEP_3.classList.add('complete');
            STEP_3.innerHTML = '&check;';
            if (PARAM_URL.get("page") == 'info') {
                window.location.href = '?page=finish';
            }
        }
        if (SESSION_4) {
            STEP_4.classList.add('active');
            STEP_4.classList.add('complete');
            STEP_4.innerHTML = '&check;';
            if (PARAM_URL.get("page") == 'term') {
                window.location.href = '?page=requirem';
            }
        }

        if (PARAM_URL.get("page") == 'term') {
            STEP_1.classList.add("active");
        }
        if (PARAM_URL.get("page") == 'requirem') {
            STEP_2.classList.add("active");
        }
        if (PARAM_URL.get("page") == 'info') {
            STEP_3.classList.add("active");
        }
        if (PARAM_URL.get("page") == 'finish') {
            STEP_4.classList.add("active");
        }

        const STATUS = document.querySelectorAll('.status-check');
        STATUS.forEach((e) => {
            const STRING = e.textContent.toLowerCase();
            if (STRING.indexOf("not") !== -1) {
                e.style.color = "red";
                STEP_2_BUTTON.setAttribute("disabled", "true");
                STEP_2_BUTTON.removeAttribute("href");
                // console.log("Hello World")
            }
        })

        function Check_Form_Validity() {
        document.querySelectorAll('input[required]').forEach((e) => {
            // e.addEventListener("keyup", () => {
                if (e.value !== '') {
                    if (document.getElementById("Submit") !== null) {
                        document.getElementById("Submit").disabled = false;
                    }
                } else {
                    if (document.getElementById("Submit") !== null) {
                        document.getElementById("Submit").disabled = true;
                    }
                }
            // })
        });
    }

    if (STEP_5_BUTTON !== null) {
        STEP_5_BUTTON.addEventListener("click", () => {
            localStorage.clear();
            window.location.href='../';
        })
    }

    Check_Form_Validity();

        document.querySelectorAll('input[required]').forEach((e) => {
            e.addEventListener("keyup", () => {
                Check_Form_Validity();
            })
        });

        document.querySelector('.AgreementInput').addEventListener("click", () => {
            if (document.querySelector('.AgreementInput').checked === false) {
                STEP_1_BUTTON.setAttribute("disabled", "");
            } else {
                STEP_1_BUTTON.removeAttribute("disabled");
            }
        })

        // console.log(PARAM_URL.get('page'));
    </script>

    <script src="tailwind.js"></script>
</body>

</html>