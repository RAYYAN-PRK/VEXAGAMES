<script src="<?php echo $site_url?>admin/assets/js/main.js"></script>
<script>
const DROP_BUTTON=document.querySelectorAll(".drop_btn");null!==DROP_BUTTON&&DROP_BUTTON.forEach(e=>{e.addEventListener("click",()=>{let t=e.getAttribute("data-target");document.querySelector(t).classList.toggle("show")})});const TAB_BUTTON=document.querySelectorAll(".tab-button"),TAB=document.querySelectorAll(".tab");function ActiveButton(){TAB_BUTTON.forEach(e=>{e.classList.remove("bg-blue-500"),e.classList.remove("text-gray-100"),e.classList.add("text-gray-500")}),this.classList.add("bg-blue-500"),this.classList.replace("text-gray-500","text-gray-100")}null!==TAB_BUTTON&&TAB_BUTTON.forEach(e=>{e.addEventListener("click",t=>{TAB.forEach(e=>{e.classList.add("hidden"),e.classList.remove("show")});let l=e.getAttribute("data-target");document.querySelector(l).classList.remove("hidden"),document.querySelector(l).classList.toggle("block")})}),null!==TAB_BUTTON&&TAB_BUTTON.forEach(e=>{e.addEventListener("click",ActiveButton)});const USER_PROFILE_UPLOAD_IMAGE_BUTTON=document.getElementById("pic_upload_button");null!==USER_PROFILE_UPLOAD_IMAGE_BUTTON&&USER_PROFILE_UPLOAD_IMAGE_BUTTON.addEventListener("click",()=>{document.getElementById("user_profile_pic").click()});const FILE_TYPE=document.getElementById("File_Type");null!==FILE_TYPE&&(FILE_TYPE.addEventListener("change",()=>{("File"===FILE_TYPE.value||"URL"===FILE_TYPE.value)&&"null"!==FILE_TYPE.value&&(console.warn(FILE_TYPE.value),"File"===FILE_TYPE.value?document.getElementById("FILE_IMAGE").classList.remove("hidden"):document.getElementById("FILE_IMAGE").classList.add("hidden"),"URL"===FILE_TYPE.value?document.getElementById("URL_IMAGE").classList.remove("hidden"):document.getElementById("URL_IMAGE").classList.add("hidden"))}),window.addEventListener("load",()=>{null!==FILE_TYPE&&("File"===FILE_TYPE.value||"URL"===FILE_TYPE.value)&&"null"!==FILE_TYPE.value&&(console.warn(FILE_TYPE.value),"File"===FILE_TYPE.value?document.getElementById("FILE_IMAGE").classList.remove("hidden"):document.getElementById("FILE_IMAGE").classList.add("hidden"),"URL"===FILE_TYPE.value?document.getElementById("URL_IMAGE").classList.remove("hidden"):document.getElementById("URL_IMAGE").classList.add("hidden"))}));const CATEGORY_INPUT=document.getElementById("category_name");null!==CATEGORY_INPUT&&CATEGORY_INPUT.addEventListener("keyup",e=>{var t=e.target.value;document.getElementById("category_slug").innerHTML=t});

console.log(CATEGORY_INPUT)

</script>


<script>
    document.querySelectorAll("body").forEach((e) => {
        e.classList.add("dark:bg-[#121317]");
    });

    document.querySelectorAll("input, select").forEach((e) => {
        e.classList.add("dark:bg-zinc-900");
    });
</script>