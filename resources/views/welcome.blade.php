<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Untuk notifikasi melayang */
        .notification {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
            transition: opacity 0.3s ease-in-out;
        }
        .notification.show {
            opacity: 1;
        }
    </style>
</head>
<body class="flex justify-center items-center h-screen bg-gradient-to-r from-red-400 to-yellow-400">
    <div class="container text-center">
        <h1 class="text-white text-3xl mb-6">Login</h1>
        <form class="bg-white rounded-lg shadow-lg p-6 w-80 mx-auto">
            <input type="email" placeholder="Email" id="username" class="border border-gray-300 rounded-md p-2 mb-3 w-full" />
            <input type="password" placeholder="Password" id="password" class="border border-gray-300 rounded-md p-2 mb-3 w-full" />
            <input type="button" value="Login" id="tombol" class="bg-[#0B1D26] text-white font-semibold p-2 rounded-md w-full hover:bg-[#09313e] cursor-pointer" />
        </form>
        <div class="notification opacity-0" id="successNotification">Login Berhasil!</div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const tombol = document.querySelector("#tombol");
            const txtUsername = document.querySelector("#username");
            const txtPassword = document.querySelector("#password");
            const successNotification = document.querySelector("#successNotification");

            tombol.addEventListener("click", function (event) {
                event.preventDefault(); // Mencegah form dari pengiriman otomatis

                const emailValue = txtUsername.value.trim();
                const passwordValue = txtPassword.value.trim();

                // Menghapus pesan kesalahan sebelumnya
                clearErrorMessages();

                // Validasi apakah email dan password diisi
                if (emailValue === "" || passwordValue === "") {
                    if (emailValue === "") {
                        displayErrorMessage(txtUsername, "Email tidak boleh kosong");
                    }
                    if (passwordValue === "") {
                        displayErrorMessage(txtPassword, "Password tidak boleh kosong");
                    }
                } else if (!isValidEmail(emailValue)) {
                    displayErrorMessage(txtUsername, "Email tidak valid");
                } else if (emailValue !== "fravv@gmail.com" && passwordValue !== "okee") {
                    displayErrorMessage(txtUsername, "Email dan password Anda salah");
                } else if (emailValue !== "fravv@gmail.com") {
                    displayErrorMessage(txtUsername, "Email Anda salah");
                } else if (passwordValue !== "okee") {
                    displayErrorMessage(txtPassword, "Password Anda salah");
                } else {
                    showSuccessNotification();
                    setTimeout(function () {
                        window.location.href = "index.html"; // Ganti dengan URL halaman tujuan
                    }, 2000); // Menunggu 2 detik sebelum melakukan redirect
                }
            });

            function displayErrorMessage(inputElement, message) {
                // Membuat elemen span untuk pesan kesalahan
                const errorMessage = document.createElement("span");
                errorMessage.classList.add("text-red-500", "text-xs", "mb-2", "block");
                errorMessage.textContent = message;

                // Menyisipkan pesan kesalahan di bawah input
                inputElement.insertAdjacentElement("afterend", errorMessage);
            }

            function clearErrorMessages() {
                // Menghapus semua pesan kesalahan yang ada
                const errorMessages = document.querySelectorAll(".text-red-500");
                errorMessages.forEach(function(message) {
                    message.remove();
                });
            }

            function isValidEmail(email) {
                // Regular expression untuk validasi format email
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }

            function showSuccessNotification() {
                successNotification.classList.add("show", "bg-black", "text-white", "p-3", "rounded", "shadow-lg");
                successNotification.classList.remove("opacity-0");
                setTimeout(function () {
                    successNotification.classList.remove("show");
                    successNotification.classList.add("opacity-0");
                }, 2000); // Menyembunyikan notifikasi setelah 2 detik
            }
        });
    </script>
</body>
</html>
