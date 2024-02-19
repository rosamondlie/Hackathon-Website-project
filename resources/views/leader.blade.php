{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | Hackathon 2024</title>
    <link rel="stylesheet" href="register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body style="background-color: rgb(117, 34, 185)"> --}}
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
        {{-- <div  style="width: auto; height: 100%; padding: 64px; background: rgba(30, 29, 38, 0.60); border-radius: 24px; backdrop-filter: blur(10px); flex-direction: column; align-items: center; gap: 44px; display: inline-flex">
            <div>
            <h2 style="text-align: center; color: white; font-size: 32px; font-family: Orbitron; font-weight: 600;">Leader Informations</h2>
            <h3 style="text-align: center; color: #C0C0C0; font-size: 16px; font-family: Manrope; font-weight: 600;">Please input your leader informations</h3>
            </div> --}}
            {{-- form-box --}}
            {{-- <div style="flex-direction: column; gap: 16px">
                @csrf
                <form method="POST" action="/post-information" enctype="multipart/form-data" style="gap: 16px">
                    @csrf
                    <div class="input-box" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                        <label style="color: white; font-size: 16px; font-family: Manrope; font-weight: 600; line-height: 16.96px">Team Name</label>
                        <input type="text" name="team_name_input" placeholder="Input your full name">
                    </div>
                    <div class="input-box" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                        <label style="color: white; font-size: 16px; font-family: Manrope; font-weight: 600; line-height: 16.96px">Full Name</label>
                        <input type="text" name="full_name_input" placeholder="Input your full name">
                    </div>
                    <div class="input-box" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                        <label style="color: white; font-size: 16px; font-family: Manrope; font-weight: 600; line-height: 16.96px">Email</label>
                        <input type="text" name="email_input" placeholder="Input your email" >
                    </div>
                    <div class="input-box" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                        <label style="color: white; font-size: 16px; font-family: Manrope; font-weight: 600; line-height: 16.96px">WhatsApp Number</label>
                        <input type="tel" name="WA_num_input" placeholder="Input your number" >
                    </div>
                    <div class="input-box" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                        <label style="color: white; font-size: 16px; font-family: Manrope; font-weight: 600; line-height: 16.96px">Line ID</label>
                        <input type="text" name="line_ID_input" placeholder="Input your line ID" >
                    </div>
                    <div class="input-box" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                        <label style="color: white; font-size: 16px; font-family: Manrope; font-weight: 600; line-height: 16.96px">Github/Gitlab ID</label>
                        <input type="text" name="git_ID_input" placeholder="Input your github/gitlab ID" >
                    </div>
                    <div class="input-box" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                        <label style="color: white; font-size: 16px; font-family: Manrope; font-weight: 600; line-height: 16.96px">Birth Place</label>
                        <input type="text" name="birth_place_input" placeholder="Input your birth place" >
                    </div>
                    <div class="input-boxdate" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                        <label style="color: white; font-size: 16px; font-family: Manrope; font-weight: 600; line-height: 16.96px">Birth Date</label>
                        <input type="date" name="birth_date_input" required>
                    </div>
                    <div class="input-file" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                        <label style="color: white; font-size: 16px; font-family: Manrope; font-weight: 600; line-height: 16.96px">Upload CV</label>
                        <input type="file" name="CV_img_input">
                        <h6 style="color: #EB5757; font-size: 12px; font-family: Manrope; font-weight: 400; line-height: 16px">Format file berupa pdf, jpg. jpeg dan png</h6>
                    </div>
                    <div class="input-file" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                        <label style="color: white; font-size: 16px; font-family: Manrope; font-weight: 600; line-height: 16.96px">Upload Flazz Card (Binusian)</label>
                        <input type="file" name="card_img_input">
                        <h6 style="color: #EB5757; font-size: 12px; font-family: Manrope; font-weight: 400; line-height: 16px">Format file berupa pdf, jpg. jpeg dan png</h6>
                    </div>
                    <div class="input-file" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                        <label style="color: white; font-size: 16px; font-family: Manrope; font-weight: 600; line-height: 16.96px">Upload ID CARD (Non-Binusian)</label>
                        <input type="file" name="card_img_input">
                        <h6 style="color: #EB5757; font-size: 12px; font-family: Manrope; font-weight: 400; line-height: 16px">Format file berupa pdf, jpg. jpeg dan png</h6>
                    </div>
                    <button type="submit" class="btn">Create Account</button>
                </form>
            </div>

        </div>

    </section>
    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>  --}}


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Register | Hackathon 2024</title>
        <link rel="stylesheet" href="{{ asset('./plugin/leader.css') }}" />
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
    <body class="body-bg">
        <!-- Add class to body -->

        {{-- hero section --}}

        {{-- navbar --}}
        <nav class="navbar-wrapper">
            <div class="navbar-container">
                <a href="/home" class="logo">LOGO</a>
                <!-- <ul class="nav-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Prizes</a></li>
                        <li><a href="#">Jury & Mentor</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Timeline</a></li>
                    </ul>
                    <a href="#"><button class="login-btn">Login</button></a> -->
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
                <h2 class="register-title">Leader Informations</h2>
                <h3 class="register-subtitle">
                    Please input your leader informations
                </h3>
            </div>
            {{-- form-box --}}
            <div class="form-box">
                @csrf
                <form
                    method="POST"
                    action="/post-information"
                    enctype="multipart/form-data"
                >
                    @csrf
                    <div class="input-box">
                        <label>Team Name</label>
                        <input
                            type="text"
                            name="team_name_input"
                            placeholder="Input your full name"
                        />
                    </div>
                    <div class="input-box">
                        <label>Full Name</label>
                        <input
                            type="text"
                            name="full_name_input"
                            placeholder="Input your full name"
                        />
                    </div>
                    <div class="input-box">
                        <label>Email</label>
                        <input
                            type="text"
                            name="email_input"
                            placeholder="Input your email"
                        />
                    </div>
                    <div class="input-box">
                        <label>WhatsApp Number</label>
                        <input
                            type="tel"
                            name="WA_num_input"
                            placeholder="Input your number"
                        />
                    </div>
                    <div class="input-box">
                        <label>Line ID</label>
                        <input
                            type="text"
                            name="line_ID_input"
                            placeholder="Input your line ID"
                        />
                    </div>
                    <div class="input-box">
                        <label>Github/Gitlab ID</label>
                        <input
                            type="text"
                            name="git_ID_input"
                            placeholder="Input your github/gitlab ID"
                        />
                    </div>
                    <div class="input-box">
                        <label>Birth Place</label>
                        <input
                            type="text"
                            name="birth_place_input"
                            placeholder="Input your birth place"
                        />
                    </div>
                    <div class="input-box">
                        <label>Birth Date</label>
                        <input type="date" name="birth_date_input" required />
                    </div>
                    <div class="input-box">
                        <label>Upload CV</label>
                        <div class="input-file">
                            <p>Upload File</p>
                            <input type="file" name="CV_img_input" />
                        </div>
                        <h6>Format file berupa pdf, jpg. jpeg dan png</h6>
                    </div>
                    <div class="input-box">
                        <label>Upload Flazz Card (Binusian)</label>
                        <div class="input-file">
                            <p>Upload File</p>
                            <input type="file" name="card_img_input" />
                        </div>
                        <h6>Format file berupa pdf, jpg. jpeg dan png</h6>
                    </div>
                    <div class="input-box">
                        <label>Upload ID CARD (Non-Binusian)</label>
                        <div class="input-file">
                            <p>Upload File</p>
                            <input type="file" name="card_img_input" />
                        </div>
                        <h6>Format file berupa pdf, jpg. jpeg dan png</h6>
                    </div>
                    <button type="submit" class="btn-default">
                        Create Account
                    </button>
                </form>
            </div>
        </div>

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
    </body>
</html>