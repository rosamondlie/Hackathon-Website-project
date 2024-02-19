{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | Hackathon 2024</title>
    <link rel="stylesheet" href="{{asset('register.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body style="background-color: rgb(117, 34, 185)">
    <body > --}}
    {{-- hero section --}}
    {{-- <section style="width: 100%; height: 100%; position: relative"> --}}
        {{-- navbar --}}
        {{-- <nav style="width: auto; height: 6rem; left: 0; top: 0; right: 0; position: fixed">
            <div style="max-width: 75rem; height: 100%; margin-inline: auto; display: flex; align-items: center; justify-content: space-between">
            <h2 style="color: #F0EFF9; font-size: 18px; font-family: Orbitron; font-weight: 900">LOGO</h2>
            <ul style="display: flex; align-items: center; list-style: none; gap: 3rem;">
                <li><a href="#" style="color: #F0EFF9; font-size: 14px; font-family: Manrope; text-decoration: none">Home</a></li>
                <li><a href="#" style="color: #F0EFF9; font-size: 14px; font-family: Manrope; text-decoration: none">Prizes</a></li>
                <li><a href="#" style="color: #F0EFF9; font-size: 14px; font-family: Manrope; text-decoration: none">Jury & Mentor</a></li>
                <li><a href="#" style="color: #F0EFF9; font-size: 14px; font-family: Manrope; text-decoration: none">About</a></li>
                <li><a href="#" style="color: #F0EFF9; font-size: 14px; font-family: Manrope; text-decoration: none">FAQ</a></li>
                <li><a href="#" style="color: #F0EFF9; font-size: 14px; font-family: Manrope; text-decoration: none">Timeline</a></li>
            </ul>
            <a href="#"><button style="background: white; color: black; font-size: 14px; font-family: Manrope; padding: 0.75rem 2.5rem; border: none; border-radius: 5rem; transition: 0.1s all; cursor: pointer">Login</button></a>
            </div>
        </nav>

        <img
			src="{{asset('/intro-abstract-bg-1.svg')}}"
			aria-hidden="true"
			class="abstract-bg"
            style=" position: absolute; z-index: -1;"
		/>
		<img
			src="{{asset('/intro-abstract-bg-2.svg')}}"
			aria-hidden="true"
			class="abstract-bg"
            style="position: absolute; z-index: -1;"
		/> --}}

        {{-- register pop --}}
        {{-- <div style="width: auto; height: 100%; padding: 64px; background: rgba(30, 29, 38, 0.60); border-radius: 24px; backdrop-filter: blur(10px); flex-direction: column; justify-content: center; align-items: center; gap: 44px; display: inline-block">
            <div>
            <h2 style="text-align: center; color: white; font-size: 32px; font-family: Orbitron; font-weight: 600;">Register Account</h2>
            <h3 style="text-align: center; color: #C0C0C0; font-size: 16px; font-family: Manrope; font-weight: 600;">Create your account here</h3>
            </div> --}}
            {{-- form-box --}}
            {{-- <div style="flex-direction: column; gap: 16px">
                <form method="POST" action="/post-create-account" style="gap: 16px">
                    @csrf
                    <div class="input-box" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                        <label style="color: white; font-size: 16px; font-family: Manrope; font-weight: 600; line-height: 16.96px">Team Name</label>
                        <input type="text" name="team_name_input" placeholder="Input your team name" required>
                    </div>
                    <div class="input-box"  style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                        <label style="color: white; font-size: 16px; font-family: Manrope; font-weight: 600; line-height: 16.96px" >Password</label>
                        <input type="password" name="password_input" placeholder="Enter password" required>
                    </div> --}}
                    {{-- <div style="width: 100%; height: 100%; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                        <div style="justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                            <div style="width: 16px; height: 16px; position: relative">
                                <div style="width: 9.33px; height: 9.33px; left: 3.33px; top: 3.33px; position: absolute; border: 1px #EB5757 solid"></div>
                            </div>
                            <div style="color: #EB5757; font-size: 12px; font-family: Manrope; font-weight: 400; line-height: 16px; word-wrap: break-word">Min. 8 character</div>
                        </div>
                        <div style="justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                            <div style="width: 16px; height: 16px; position: relative">
                                <div style="width: 9.33px; height: 9.33px; left: 3.33px; top: 3.33px; position: absolute; border: 1px #EB5757 solid"></div>
                            </div>
                            <div style="color: #EB5757; font-size: 12px; font-family: Manrope; font-weight: 400; line-height: 16px; word-wrap: break-word">Symbol</div>
                        </div>
                        <div style="justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                            <div style="width: 16px; height: 16px; position: relative">
                                <div style="width: 9.33px; height: 7.33px; left: 3.33px; top: 4.67px; position: absolute; border: 1px #52D325 solid"></div>
                            </div>
                            <div style="color: #52D325; font-size: 12px; font-family: Manrope; font-weight: 400; line-height: 16px; word-wrap: break-word">Uppercase letter</div>
                        </div>
                        <div style="justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                            <div style="width: 16px; height: 16px; position: relative">
                                <div style="width: 9.33px; height: 9.33px; left: 3.33px; top: 3.33px; position: absolute; border: 1px #EB5757 solid"></div>
                            </div>
                            <div style="color: #EB5757; font-size: 12px; font-family: Manrope; font-weight: 400; line-height: 16px; word-wrap: break-word">Lowercase letter</div>
                        </div>
                        <div style="justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                            <div style="width: 16px; height: 16px; position: relative">
                                <div style="width: 9.33px; height: 7.33px; left: 3.33px; top: 4.67px; position: absolute; border: 1px #52D325 solid"></div>
                            </div>
                            <div style="color: #52D325; font-size: 12px; font-family: Manrope; font-weight: 400; line-height: 16px; word-wrap: break-word">Number</div>
                        </div>
                    </div> --}}
                    {{-- <div class="input-box"  style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                        <label style="color: white; font-size: 16px; font-family: Manrope; font-weight: 600; line-height: 16.96px">Confirm Password</label>
                        <input type="password" name="password_input" placeholder="Confirm password" required>
                    </div> --}}
                    {{-- <a href="/leader-informations" class="btn" >Next</a> --}}
                    {{-- <button type="submit" class="btn">Create Account</button>
                </form>
            </div> --}}
            {{-- <button type="submit" class="btn">Create Account</button> --}}
            {{-- <a href="/leader-informations" class="btn" >Next</a> --}}
            {{-- <button type="submit"><a href="/leader-informations">Next</a></button> --}}
{{-- 
        </div>

    </section>
    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Register | Hackathon 2024</title>
        <link rel="stylesheet" href="{{ asset('./register.css') }}" />
        <!-- Link to your CSS file -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&family=Orbitron:wght@400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />
    </head>
    <body>
        <!-- Add class to body -->

        {{-- hero section --}}
        {{-- navbar --}}
        <nav class="navbar-wrapper">
            <div class="navbar-container">
                <a class="logo" href="/home">LOGO</a>
                <!-- <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Prizes</a></li>
                    <li><a href="#">Jury & Mentor</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Timeline</a></li>
                </ul> -->
                <!-- <a href="#"><button class="login-btn">Login</button></a> -->
            </div>
        </nav>

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

        {{-- register pop --}}
        <div class="register-pop">
            <div>
                <h2 class="register-title">Register Account</h2>
                <h3 class="register-subtitle">Create your account here</h3>
            </div>
            {{-- form-box --}}
            <div class="form-box">
                <form method="POST" action="/post-create-account">
                    @csrf
                    <div class="input-box">
                        <label>Team Name</label>
                        <input
                            type="text"
                            name="team_name_input"
                            placeholder="Input your team name"
                            required
                        />
                    </div>
                    <div class="input-box">
                        <label>Password</label>
                        <input
                            type="password"
                            name="password_input"
                            placeholder="Enter password"
                            required
                        />
                    </div>
                    <div class="input-box">
                        <label>Confirm Password</label>
                        <input
                            type="password"
                            name="password_input"
                            placeholder="Confirm password"
                            required
                        />
                    </div>
                    <button type="submit" class="btn-default">
                        Create Account
                    </button>
                </form>
            </div>
        </div>
    </body>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"
    ></script>
</html>
