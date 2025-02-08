AOS.init();

$(function () {
    $("#checkIn").datepicker({
        dateFormat: "yy-mm-dd",
    });
});
$(function () {
    $("#checkOut").datepicker({
        dateFormat: "yy-mm-dd",
    });
});
// $(function () {
//     $("#birthdate").datepicker({
//         dateFormat: "yy-mm-dd",
//     });
// });

const selectedAll = document.querySelectorAll(".wrapper-dropdown");

selectedAll.forEach((selected) => {
    const optionsContainer = selected.children[2];
    const optionsList = selected.querySelectorAll("div.wrapper-dropdown li");

    selected.addEventListener("click", () => {
        let arrow = selected.children[1];

        if (selected.classList.contains("active")) {
            handleDropdown(selected, arrow, false);
        } else {
            let currentActive = document.querySelector(
                ".wrapper-dropdown.active"
            );

            if (currentActive) {
                let anotherArrow = currentActive.children[1];
                handleDropdown(currentActive, anotherArrow, false);
            }

            handleDropdown(selected, arrow, true);
        }
    });

    // update the display of the dropdown
    for (let o of optionsList) {
        o.addEventListener("click", () => {
            selected.querySelector(".selected-display").innerHTML = o.innerHTML;
        });
    }
});

// check if anything else ofther than the dropdown is clicked
window.addEventListener("click", function (e) {
    if (e.target.closest(".wrapper-dropdown") === null) {
        closeAllDropdowns();
    }
});

// close all the dropdowns
function closeAllDropdowns() {
    const selectedAll = document.querySelectorAll(".wrapper-dropdown");
    selectedAll.forEach((selected) => {
        const optionsContainer = selected.children[2];
        let arrow = selected.children[1];

        handleDropdown(selected, arrow, false);
    });
}

// open all the dropdowns
function handleDropdown(dropdown, arrow, open) {
    if (open) {
        arrow.classList.add("rotated");
        dropdown.classList.add("active");
    } else {
        arrow.classList.remove("rotated");
        dropdown.classList.remove("active");
    }
}

Fancybox.bind('[data-fancybox="gallery"]', {});

$(".economic-slider").slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: false,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ],
});
$('#test').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3
  });

$(".lux-slider").slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: false,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ],
});

const booking = document.querySelector(".booking");

if (window.innerWidth < 991) {
    booking.removeAttribute("data-aos");
}

// form upload
// document.querySelector(".upload-btn")?.addEventListener("click", () => {
//     document.querySelector(".dropzone .dz-button").click();
// });
// Dropzone.autoDiscover = false;

// const dropzone = new Dropzone("#form-upload", {
//     url: "http://127.0.0.1:8000/cms/gallery/upload",
//     maxFilesize: 5,
//     acceptedFiles: ".jpeg,.jpg,.png,.gif,.webp", // Dozvoljeni fajlovi
//     addRemoveLinks: true,
//     dictDefaultMessage: "",
//     init: function () {
//         this.on("success", function (file, response) {
//             console.log("File uploaded successfully", response);
//         });
//         this.on("error", function (file, errorMessage) {
//             console.error("Upload error", errorMessage);
//         });
//     },
// });

$(".testimonials-slider").slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 7000,
});

$(".npk-slider-1").slick({
    fade: true,
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 3000,
});

$(".nnpk-slider-1").slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 2000,
    autoplay: true,
    autoplaySpeed: 1000,
    fade: true,              
    cssEase: 'linear'        
});


$(".nnpk-slider-2").slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 2000,
    autoplay: true,
    autoplaySpeed: 1000,
    fade: true,
    cssEase: 'linear' 
});

document.addEventListener("DOMContentLoaded", function () {
    const fileUploadArea = document.getElementById("file-upload-area");
    const fileInput = document.getElementById("file-input");
    const uploadedFilesList = document.getElementById("uploaded-files");

    // Click handlers
    fileUploadArea.addEventListener("click", () => fileInput.click());

    // Drag and drop handlers

    fileUploadArea.addEventListener("drop", (event) => {
        event.preventDefault();
        fileUploadArea.style.borderColor = "#ccc";

        const files = event.dataTransfer.files;
        displaySelectedFiles(files);
    });

    fileInput.addEventListener("change", () => {
        const files = fileInput.files;
        displaySelectedFiles(files);
    });

    function displaySelectedFiles(files) {
        uploadedFilesList.innerHTML = "";
        Array.from(files).forEach((file) => {
            const listItem = document.createElement("li");

            listItem.innerHTML = `
                <div>
                    <img src="/assets/images/link.svg" alt="">
                    <p>${file.name}</p>
                </div>
                <button class="remove-file">
                    <img src="/assets/images/delete.svg" alt="">
                </button>
            `;

            listItem.querySelector(".remove-file").addEventListener("click", () => {
                listItem.remove();
            });

            uploadedFilesList.appendChild(listItem);
        });
    }
});