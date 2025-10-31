// var cursor = document.querySelector(".cursor");
// var cursorinner = document.querySelector(".cursor2");
// var a = document.querySelectorAll("a");

// document.addEventListener("mousemove", function (e) {
//   var x = e.clientX;
//   var y = e.clientY;
//   cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`;
// });

// document.addEventListener("mousemove", function (e) {
//   var x = e.clientX;
//   var y = e.clientY;
//   cursorinner.style.left = x + "px";
//   cursorinner.style.top = y + "px";
// });

// document.addEventListener("mousedown", function () {
//   cursor.classList.add("click");
//   cursorinner.classList.add("cursorinnerhover");
// });

// document.addEventListener("mouseup", function () {
//   cursor.classList.remove("click");
//   cursorinner.classList.remove("cursorinnerhover");
// });

// a.forEach((item) => {
//   item.addEventListener("mouseover", () => {
//     cursor.classList.add("hover");
//   });
//   item.addEventListener("mouseleave", () => {
//     cursor.classList.remove("hover");
//   });
// });

// const menu = document.querySelector(".burger-menu");
// const menuSm = document.querySelector(".burger-menu-sm");
// const sidebar = document.querySelector(".zontal-sidebar");
// const overlay = document.querySelector(".zontal-sidebar .overlay");
// if (menu !== null) {
//   menu.addEventListener("click", () => {
//     if (window.innerWidth <= 2020) {
//       sidebar.classList.toggle("active");
//     } else {
//       sidebar.classList.toggle("close");
//     }
//   });
// }

// if (menuSm !== null) {
//   menuSm.addEventListener("click", () => {
//     sidebar.classList.toggle("active");
//   });
// }

// const title = document.querySelectorAll(".game-card a");

// title.forEach((e) => {
//   e.addEventListener("mousemove", () => {
//     cursorinner.classList.add("link-hover");
//     // console.log("Hello...");
//   });
//   e.addEventListener("mouseleave", () => {
//     cursorinner.classList.remove("link-hover");
//     // console.log("Hello...");
//   });
// });

// var pagination = document.querySelectorAll(".Pagination button");

// pagination.forEach((e) => {
//   e.addEventListener("mousemove", () => {
//     cursor.classList.add("pag-cur");
//     cursorinner.classList.add("pag-cur");
//   });
//   e.addEventListener("mouseleave", () => {
//     cursor.classList.remove("pag-cur");
//     cursorinner.classList.remove("pag-cur");
//   });
// });

// const slideButtons = document.querySelectorAll(".Pagination button");

// slideButtons.forEach((button) => {
//   button.addEventListener("click", HandleSlide);
// });

// function HandleSlide() {
//   var main = this.parentNode.parentNode.getAttribute("data-target");
//   main = document.querySelector(main);
//   var angle = this.parentNode;
//   if (angle.classList[0].includes("left-pagination")) {
//     main.scrollLeft -= 300;
//     console.log("Left");
//   } else {
//     main.scrollLeft += 300;
//     console.log("Right");
//   }
// }

// var sideBarLists = document.querySelectorAll(".zontal-sidebar-body li");

// if (sideBarLists !== null) {
//   sideBarLists.forEach((e) => {
//     e.addEventListener("mousemove", () => {
//       cursor.classList.add("list-cursor-effect");
//       e.classList.add("add-border");
//     });
//     e.addEventListener("mouseleave", () => {
//       cursor.classList.remove("list-cursor-effect");
//       e.classList.remove("add-border");
//     });
//   });
// }

// const toggler = document.querySelector(".theme-toggler");
// const darkIcon = document.getElementById("DarkIcon");
// const lightIcon = document.getElementById("LightIcon");

// toggler.addEventListener("change", () => {
//   if (toggler.checked) {
//     document.documentElement.setAttribute("zontal-theme", "dark");
//     localStorage.setItem("zon_theme", "dark");
//     darkIcon.classList.add("active-icon");
//     lightIcon.classList.remove("active-icon");
//   } else {
//     document.documentElement.setAttribute("zontal-theme", "light");
//     localStorage.setItem("zon_theme", "light");
//     darkIcon.classList.remove("active-icon");
//     lightIcon.classList.add("active-icon");
//   }
// });

// const theme = localStorage.getItem("zon_theme");
// if (theme === "dark") {
//   toggler.checked = true;
//   document.documentElement.setAttribute("zontal-theme", "dark");
//   darkIcon.classList.add("active-icon");
//   lightIcon.classList.remove("active-icon");
// } else {
//   toggler.checked = false;
//   document.documentElement.setAttribute("zontal-theme", "light");
//   darkIcon.classList.remove("active-icon");
//   lightIcon.classList.add("active-icon");
// }

// window
//   .matchMedia("(prefers-color-scheme: dark)")
//   .addEventListener("change", ({ matches }) => {
//     localStorage.clear();
//     if (matches) {
//       toggler.checked = true;
//       document.documentElement.setAttribute("zontal-theme", "dark");
//       darkIcon.classList.add("active-icon");
//       lightIcon.classList.remove("active-icon");
//     } else {
//       toggler.checked = false;
//       document.documentElement.setAttribute("zontal-theme", "light");
//       darkIcon.classList.remove("active-icon");
//       lightIcon.classList.add("active-icon");
//     }
//   });

const iframe = document.getElementById("zonFrame");
const fullscreenButton = document.getElementById("fullscreenButton");

// Function to request fullscreen
function requestFullscreen(element) {
  if (element.requestFullscreen) {
    element.requestFullscreen();
  } else if (element.mozRequestFullScreen) {
    // Firefox
    element.mozRequestFullScreen();
  } else if (element.webkitRequestFullscreen) {
    // Chrome, Safari, and Opera
    element.webkitRequestFullscreen();
  } else if (element.msRequestFullscreen) {
    // IE/Edge
    element.msRequestFullscreen();
  }
}

// Function to exit fullscreen
function exitFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.mozCancelFullScreen) {
    // Firefox
    document.mozCancelFullScreen();
  } else if (document.webkitExitFullscreen) {
    // Chrome, Safari, and Opera
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) {
    // IE/Edge
    document.msExitFullscreen();
  }
}

if (fullscreenButton !== null) {
  fullscreenButton.addEventListener("click", () => {
    if (
      !document.fullscreenElement &&
      !document.mozFullScreenElement &&
      !document.webkitFullscreenElement &&
      !document.msFullscreenElement
    ) {
      requestFullscreen(iframe);
    } else {
      exitFullscreen();
    }
  });
}

function copyToURL() {
  // Select the input element
  const textToCopy = document.getElementById("textToCopy");

  // Select the text within the input element
  textToCopy.select();

  // Copy the selected text to the clipboard
  document.execCommand("copy");

  // Deselect the text (optional)
  textToCopy.setSelectionRange(0, 1000);

  // Provide user feedback (e.g., show a message)
  alert("URL has been copied to the clipboard: " + textToCopy.value);
}

var LikeButton = document.getElementById("LikeButton");

function LikeGame(game_id) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", `${window.zontal.url}xhr/like.php`);
  xhr.onreadystatechange = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        LikeButton.classList.toggle("liked");
        LikeButton.querySelector("span").innerText = xhr.responseText;
      }
    }
  };
  const form = new FormData();
  form.append("gi", game_id);
  form.append("ui", window.zontal.ui);
  xhr.send(form);
}

const lForm = document.getElementById("login-form");

if (lForm !== null) {
  lForm.addEventListener("submit", (e) => {
    e.preventDefault();

    console.log(window.poko);
    
    const username = lForm.querySelector("input[name='usernameEmail']").value;
    const password = lForm.querySelector("input[name='password']").value;
    const button = lForm.querySelector("button[type='submit']");
    
    const xhr = new XMLHttpRequest();
    button.setAttribute("disabled", "true");
    xhr.open("POST", `${window.poko.url}xhr/login.php`);
    xhr.onreadystatechange = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          if (xhr.responseText.includes("successfully") == true) {
            Toastify({
              text: xhr.responseText,
              className: "info",
              duration: 3000,
              style: {
                background: "#96c93d",
              },
            }).showToast();
            setTimeout(() => {
              window.location.href = "./admin/";
              button.removeAttribute("disabled");
            }, 1500);
          } else {
            Toastify({
              text: xhr.responseText,
              className: "info",
              duration: 3000,
              style: {
                background: "red",
              },
            }).showToast();
            button.removeAttribute("disabled");
          }
        }
      }
    };
    const form = new FormData();
    form.append("usernameEmail", username);
    form.append("password", password);
    xhr.send(form);
  });
}





const RForm = document.getElementById("sign-form");

// console.log(RForm);

if (RForm !== null) {
  RForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const button = RForm.querySelector("button[type='submit']");
    
    const xhr = new XMLHttpRequest();
    button.setAttribute("disabled", "true");
    xhr.open("POST", `${window.zontal.url}xhr/register.php`);
    xhr.onreadystatechange = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          if (xhr.responseText.includes("successfully") == true) {
            Toastify({
              text: xhr.responseText,
              className: "info",
              duration: 3000,
              style: {
                background: "#96c93d",
              },
            }).showToast();
            setTimeout(() => {
              window.location.href = "./";
              button.removeAttribute("disabled");
            }, 1500);
          } else {
            Toastify({
              text: xhr.responseText,
              className: "info",
              duration: 3000,
              style: {
                background: "red",
              },
            }).showToast();
            button.removeAttribute("disabled");
          }
        }
      }
    };
    const form = new FormData(RForm);
    xhr.send(form);
  });
}




const upForm = document.getElementById("update-info");

// console.log(RForm);

if (upForm !== null) {
  upForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const button = upForm.querySelector("button[type='submit']");
    
    const xhr = new XMLHttpRequest();
    button.setAttribute("disabled", "true");
    xhr.open("POST", `${window.zontal.url}xhr/update-userinfo.php`);
    xhr.onreadystatechange = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          console.log(xhr.responseText);
          if (xhr.responseText.includes("successfully") == true) {
            Toastify({
              text: xhr.responseText,
              className: "info",
              duration: 3000,
              style: {
                background: "#96c93d",
              },
            }).showToast();
            setTimeout(() => {
              button.removeAttribute("disabled");
            }, 1500);
          } else {
            Toastify({
              text: xhr.responseText,
              className: "info",
              duration: 3000,
              style: {
                background: "red",
              },
            }).showToast();
            button.removeAttribute("disabled");
          }
        }
      }
    };
    const form = new FormData(upForm);
    xhr.send(form);
  });
}
