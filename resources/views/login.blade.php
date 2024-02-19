<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login</title>
        <link rel="stylesheet" href="{{ asset('/plugin/login.css') }}" />
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Orbitron:wght@400..900&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />
    </head>

    <body>
        <header class="header">
            <h1>Logo</h1>
            <!-- 
            <nav class="navbar">
                <a href="#">Home</a>
                <a href="#">Prizes</a>
                <a href="#">Jury & Mentor</a>
                <a href="#">About</a>
                <a href="#">FAQ</a>
                <a href="#">Timeline</a>
            </nav> -->
        </header>
        <div class="bg">
            <img
                src="{{ asset('./images/intro-abstract-bg-2.svg') }}"
                aria-hidden="true"
                class="abstract-bg"
            />
            <img
                src="{{ asset('./images/intro-abstract-bg-1.svg') }}"
                aria-hidden="true"
                class="abstract-bg"
            />
        </div>
        <div class="card">
            <h1>WELCOME BACK</h1>
            <h2>Please log in your account</h2>
            <form action="/dashboard" method="POST" id="loginform">
                @csrf
                <div class="input-wrapper">
                    <label class="input-label">Team Name</label>
                    <div class="input-box">
                        <input
                            type="email"
                            id="UEmail"
                            name="email"
                            placeholder="John Doe"
                        />
                        <i class="bx bxs-user"></i>
                    </div>
                </div>
                <div class="input-wrapper">
                    <label class="input-label">Password</label>
                    <div class="input-box">
                        <input
                            type="password"
                            id="UPass"
                            name="password"
                            placeholder="mypassword"
                        />
                        <i class="bx bxs-lock-alt"></i>
                    </div>
                </div>

                <div class="misc">
                    <label> <input type="checkbox" />Remember me</label>
                    <a href="#" class="forgot-password">Forgot password</a>
                </div>

                <div class="btn">
                    <button type="submit" id="submit" class="login">
                        Login
                    </button>
                    <a href="/register" class="create-account"
                        >Create Account</a
                    >
                </div>
            </form>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const loginForm = document.getElementById("loginform");
                const loginButton = document.getElementById("submit");

                loginButton.addEventListener("click", (e) => {
                    const username = document.getElementById("UEmail").value;
                    const password = document.getElementById("UPass").value;

                    if (username.trim() === "" || password.trim() === "") {
                        alert("Please enter both email and password.");
                        e.preventDefault();
                    }

                    loginForm.submit();
                });
            });
        </script>
    </body>
</html>
