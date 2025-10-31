const DROP_BUTTON = document.querySelectorAll('.drop_btn');

if (DROP_BUTTON !== null) {
    DROP_BUTTON.forEach((e) => {
        e.addEventListener("click", () => {
            const TARGET_ELEMENT = e.getAttribute("data-target");
            document.querySelector(TARGET_ELEMENT).classList.toggle('show');
        });
    });
}

const TAB_BUTTON = document.querySelectorAll('.tab-button');
const TAB = document.querySelectorAll('.tab');

if (TAB_BUTTON !== null) {
    TAB_BUTTON.forEach((e) => {
        e.addEventListener("click", (button) => {
            TAB.forEach((t) => {
                t.classList.add('hidden');
                t.classList.remove('show');
            })
            const TARGET_TAB = e.getAttribute("data-target");
            document.querySelector(TARGET_TAB).classList.remove('hidden');
            document.querySelector(TARGET_TAB).classList.toggle('block');
        })
    })
}

if (TAB_BUTTON !== null) {
    TAB_BUTTON.forEach((e) => {
        e.addEventListener("click", ActiveButton);
    })
}

function ActiveButton() {
    TAB_BUTTON.forEach((e) => {
        e.classList.remove("bg-blue-500");
        e.classList.remove("text-gray-100");
        e.classList.add("text-gray-500");
        // e.classList.add("bg-transparent");
    })
    this.classList.add("bg-blue-500");
    this.classList.replace("text-gray-500", "text-gray-100");
}


const USER_PROFILE_UPLOAD_IMAGE_BUTTON = document.getElementById('pic_upload_button');

if (USER_PROFILE_UPLOAD_IMAGE_BUTTON !== null) {
    USER_PROFILE_UPLOAD_IMAGE_BUTTON.addEventListener("click", () => {
        document.getElementById('user_profile_pic').click();
    })
}

const FILE_TYPE = document.getElementById('File_Type');


if (FILE_TYPE !== null) {
    FILE_TYPE.addEventListener("change", () => {
        if (FILE_TYPE.value === 'File' || FILE_TYPE.value === 'URL') {
            if (FILE_TYPE.value !== 'null') {
                console.warn(FILE_TYPE.value)
                if (FILE_TYPE.value === 'File') {
                    document.getElementById('FILE_IMAGE').classList.remove('hidden');
                } else {
                    document.getElementById('FILE_IMAGE').classList.add('hidden');
                }
                if (FILE_TYPE.value === 'URL') {
                    document.getElementById('URL_IMAGE').classList.remove('hidden');
                } else {
                    document.getElementById('URL_IMAGE').classList.add('hidden');
                }
            }
        }
    });

    // window.addEventListener("DOMContentLoaded", () => {
        // document.addEventListener("DOMContentLoaded", () => {
            window.addEventListener("load", () => {
                // document.addEventListener("load", () => {
                    if (FILE_TYPE !== null) {
                        if (FILE_TYPE.value === 'File' || FILE_TYPE.value === 'URL') {
                            if (FILE_TYPE.value !== 'null') {
                                console.warn(FILE_TYPE.value)
                                if (FILE_TYPE.value === 'File') {
                                    document.getElementById('FILE_IMAGE').classList.remove('hidden');
                                } else {
                                    document.getElementById('FILE_IMAGE').classList.add('hidden');
                                }
                                if (FILE_TYPE.value === 'URL') {
                                    document.getElementById('URL_IMAGE').classList.remove('hidden');
                                } else {
                                    document.getElementById('URL_IMAGE').classList.add('hidden');
                                }
                            }
                        }
                    }
                // })
            })
        // })
    // })
}

const CATEGORY_INPUT = document.getElementById("category_name");

if (CATEGORY_INPUT !== null) {
    CATEGORY_INPUT.addEventListener("keyup", (e) => {
        var value = e.value;
        value.toLowerCase();
        value.replaceAll(" ", "-");
        document.getElementById("category_slug").innerText = value;
    });    
}


document.querySelectorAll("body").forEach((e) => {
    e.classList.add("dark:bg-[#121317]");
});