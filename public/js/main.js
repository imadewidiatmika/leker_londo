(function ($) {
    "use strict";

    // Spinner
    let spinner = function () {
        setTimeout(function () {
            if ($("#spinner").length > 0) {
                $("#spinner").removeClass("show");
            }
        }, 1);
    };
    spinner();

    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $(".sticky-top").addClass("bg-primary shadow-sm").css("top", "0px");
        } else {
            $(".sticky-top")
                .removeClass("bg-primary shadow-sm")
                .css("top", "-150px");
        }
    });

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $(".back-to-top").fadeIn("slow");
        } else {
            $(".back-to-top").fadeOut("slow");
        }
    });
    $(".back-to-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
        return false;
    });

    // Countdown Timer
    function countDownTimer() {
        let endTime = new Date("31 December 2023 10:00:00 GMT+00:00");
        endTime = Date.parse(endTime) / 1000;

        let now = new Date();
        now = Date.parse(now) / 1000;

        let timeLeft = endTime - now;

        let days = Math.floor(timeLeft / 86400);
        let hours = Math.floor((timeLeft - days * 86400) / 3600);
        let minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);
        let seconds = Math.floor(
            timeLeft - days * 86400 - hours * 3600 - minutes * 60
        );

        if (days < "10") {
            days = "0" + days;
        }
        if (hours < "10") {
            hours = "0" + hours;
        }
        if (minutes < "10") {
            minutes = "0" + minutes;
        }
        if (seconds < "10") {
            seconds = "0" + seconds;
        }

        $("#cdt-days").html(days + "<span>-Days-</span>");
        $("#cdt-hours").html(hours + "<span>-Hours-</span>");
        $("#cdt-minutes").html(minutes + "<span>-Mins-</span>");
        $("#cdt-seconds").html(seconds + "<span>-Secs-</span>");
    }

    setInterval(function () {
        countDownTimer();
    }, 1000);

    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        loop: true,
        nav: false,
        dots: true,
        items: 1,
        dotsData: true,
    });
})(jQuery);

function showModal(title, image, description) {
    document.getElementById("productModalLabel").innerText = title;
    document.getElementById("productImage").src = image;
    document.getElementById("productDescription").innerText = description;

    let myModal = new bootstrap.Modal(document.getElementById("productModal"));
    myModal.show();
}

let swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: { slidesPerView: 2, spaceBetween: 20 },
        768: { slidesPerView: 3, spaceBetween: 30 },
        1024: { slidesPerView: 4, spaceBetween: 40 },
    },
});

document.addEventListener("DOMContentLoaded", function () {
    let dealSection = document.querySelector(".deal");
    let modal = new bootstrap.Modal(document.getElementById("dealModal"));

    let observer = new IntersectionObserver(
        function (entries) {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    modal.show();
                    observer.unobserve(dealSection); // Berhenti mengamati setelah modal muncul sekali
                }
            });
        },
        { threshold: 0.5 } // Modal akan muncul ketika 50% dari elemen terlihat
    );

    observer.observe(dealSection);
});

document.addEventListener("DOMContentLoaded", function () {
    const claimButton = document.getElementById("claimButton");
    const parner = document.getElementById("claimPartner"); // Assuming you added an ID to the button
    const modal = new bootstrap.Modal(document.getElementById("dealModal"));

    claimButton.addEventListener("click", function (e) {
        e.preventDefault(); // Prevent default link behavior
        modal.show(); // Show the modal when the button is clicked
    });

    claimPartner.addEventListener("click", function (e) {
        e.preventDefault(); // Prevent default link behavior
        modal.show(); // Show the modal when the button is clicked
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const provinceSelect = document.getElementById("province");
    const citySelect = document.getElementById("city");
    const provinceNameInput = document.getElementById("province_name");
    const cityNameInput = document.getElementById("city_name");

    // Fetch daftar provinsi
    fetch("https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json")
        .then((response) => response.json())
        .then((data) => {
            provinceSelect.innerHTML =
                '<option value="">Pilih Provinsi</option>';
            data.forEach((province) => {
                let option = document.createElement("option");
                option.value = province.id; // ID Provinsi
                option.textContent = province.name; // Nama Provinsi
                provinceSelect.appendChild(option);
            });
        });

    // Saat provinsi dipilih, ambil daftar kota
    provinceSelect.addEventListener("change", function () {
        let provinceId = this.value;
        let provinceName = this.options[this.selectedIndex].text; // Ambil Nama Provinsi
        provinceNameInput.value = provinceName; // Set ke hidden input

        if (provinceId) {
            fetch(
                `https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provinceId}.json`
            )
                .then((response) => response.json())
                .then((data) => {
                    citySelect.innerHTML =
                        '<option value="">Pilih Kabupaten/Kota</option>';
                    data.forEach((city) => {
                        let option = document.createElement("option");
                        option.value = city.id; // ID Kota
                        option.textContent = city.name; // Nama Kota
                        citySelect.appendChild(option);
                    });
                });
        } else {
            citySelect.innerHTML =
                '<option value="">Pilih Kabupaten/Kota</option>';
        }
    });

    // Saat kota dipilih, simpan namanya juga
    citySelect.addEventListener("change", function () {
        let cityName = this.options[this.selectedIndex].text; // Ambil Nama Kota
        cityNameInput.value = cityName; // Set ke hidden input
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("dealForm");
    const emailInput = document.getElementById("email");
    const nowaInput = document.getElementById("nowa");
    const emailError = document.getElementById("emailError");
    const nowaError = document.getElementById("nowaError");

    form.addEventListener("submit", function (e) {
        e.preventDefault(); // Mencegah reload halaman

        let emailValue = emailInput.value.trim();
        let nowaValue = nowaInput.value.trim();
        let valid = true;

        // Validasi: Salah satu dari Email atau No WhatsApp harus diisi
        if (emailValue === "" && nowaValue === "") {
            emailError.style.display = "block";
            nowaError.style.display = "block";
            valid = false;
        } else {
            emailError.style.display = "none";
            nowaError.style.display = "none";
        }

        if (!valid) return;

        let formData = new FormData(form);

        fetch("{{ url('/deals') }}", {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]'
                ).content,
            },
        })
            .then((response) => response.json())
            .then((data) => {
                alert(data.message); // Tampilkan pesan sukses
                form.reset(); // Reset form setelah berhasil
                let modalElement = document.getElementById("dealModal");
                let modalInstance = bootstrap.Modal.getInstance(modalElement);
                modalInstance.hide(); // Tutup modal
            })
            .catch((error) => console.error("Error:", error));
    });
});
