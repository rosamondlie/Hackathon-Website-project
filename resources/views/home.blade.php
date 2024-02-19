<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{ asset('./plugin/home.css') }}" />
        <!-- {{ asset('/plugin/style.css')}} -->
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
        <title>
            Hackathon 2023 - Exploring The Boundaries Of Artificial
            Intelligence.
        </title>
    </head>
    <body>
        <!-- navbar -->
        <nav class="nav">
            <div class="container nav-container">
                <a href="#" class="nav-logo font-orbitron">LOGO</a>
                <ul class="nav-links">
                    <li class="nav-link"><a href="#">Home</a></li>
                    <li class="nav-link"><a href="#prizes">Prizes</a></li>
                    <li class="nav-link"><a href="#jnm">Jury & Mentor</a></li>
                    <li class="nav-link"><a href="#about-us">About</a></li>
                    <li class="nav-link"><a href="#faq">FAQ</a></li>
                    <li class="nav-link"><a href="#timeline">Timeline</a></li>
                </ul>
                <a href="/login" class="btn btn-primary">Login</a>
            </div>
        </nav>
        <!-- end navbar -->

        <!-- intro -->
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
        <section class="intro">
            <div class="container intro-container">
                <div class="intro-sub-title-container">
                    <p class="intro-sub-title font-orbitron">Hackathon 2023</p>
                    <img
                        src="{{
                            asset('./images/icons/arrow-bottom-left.png')
                        }}"
                        alt="arrow-bottom-left"
                    />
                </div>

                <h1 class="intro-title font-orbitron">
                    Exploring <span>The Boundaries</span><br />
                    Of Artificial Intelligence.
                </h1>

                <p class="intro-description">
                    Embark on an extraordinary journey where you redefine limits
                    and unleash the full potential of artificial intelligence.
                    Join us in shaping a more intelligent and interconnected
                    world through groundbreaking solutions and cutting-edge
                    algorithms.
                </p>

                <div class="intro-buttons">
                    <a class="btn btn-primary" href="/login"> Get Started </a>
                    <button class="btn btn-secondary">Learn More</button>

                    <a href="#about-us" class="intro-explore-btn">
                        <p class="intro-explore-btn-title">EXPLORE</p>
                        <img
                            src="{{ asset('./images/icons/arrow-down.png') }}"
                            alt="arrow-down"
                            style="transform: rotate(-90deg)"
                        />
                    </a>
                </div>
            </div>
        </section>
        <!-- end intro -->

        <!-- about us -->
        <section class="about-us" id="about-us">
            <!-- <img
				src="{{ asset('./images/about-us-abstract-bg.svg')}}"
				aria-hidden="true"
				class="abstract-bg"
				width="2355"
				height="1394"
				style=""
			/> -->
            <div class="container about-us-container">
                <img
                    class="about-us-img"
                    src="images/about-us.jpg"
                    alt="about us"
                />
                <div class="about-us-text">
                    <p class="section-sub-title">ABOUT US</p>
                    <h2 class="section-title">What Is Hackathon?</h2>
                    <p
                        class="section-description"
                        style="margin-top: 24px; max-width: 560px"
                    >
                        A hackathon is a time-limited event where under time
                        crunch, individuals or teams collaborate intensively to
                        create innovative solutions to specific challenges,
                        usually in software development or technology. Hackathon
                        promotes rapid problem-solving and creativity,
                        culminating in the development of tangible prototypes or
                        products. Hackathons serve as platforms for learning,
                        networking, and fostering innovation within the tech
                        community.
                    </p>
                </div>
            </div>
        </section>
        <!-- end about us -->

        <!-- why -->
        <section class="why">
            <div class="container">
                <h2 class="section-title text-center">
                    Why Should You Join Us?
                </h2>
                <p
                    class="section-description text-center"
                    style="max-width: 599px; font-size: 12px; margin: 13px auto"
                >
                    Delve into this hackathon experience, where your
                    participation is a gateway to a network of like-minded
                    individuals, providing a platform for both personal and
                    professional development.
                </p>

                <div class="why-card-container">
                    <div class="why-card first">
                        <div class="why-card-logo">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="27"
                                height="27"
                                viewBox="0 0 27 27"
                                fill="none"
                            >
                                <path
                                    d="M18.6809 12.5345C19.366 11.3973 19.6619 10.0773 19.5257 8.7655C19.3244 6.81089 18.2039 5.08307 16.3724 3.90088L15.1292 5.72621C16.3881 6.53917 17.1542 7.69726 17.287 8.98463C17.3482 9.58296 17.2717 10.187 17.0631 10.753C16.8545 11.3189 16.519 11.8324 16.081 12.2562L14.74 13.5622L16.5602 14.0826C21.3212 15.4412 21.3764 20.1042 21.3764 20.1514H23.6264C23.6264 18.1913 22.5509 14.3609 18.6809 12.5345Z"
                                    fill="#F0EFF9"
                                />
                                <path
                                    d="M10.6888 13.5776C13.1706 13.5776 15.1888 11.612 15.1888 9.19504C15.1888 6.77807 13.1706 4.8125 10.6888 4.8125C8.20709 4.8125 6.18884 6.77807 6.18884 9.19504C6.18884 11.612 8.20709 13.5776 10.6888 13.5776ZM10.6888 7.00377C11.9297 7.00377 12.9388 7.98656 12.9388 9.19504C12.9388 10.4035 11.9297 11.3863 10.6888 11.3863C9.44797 11.3863 8.43884 10.4035 8.43884 9.19504C8.43884 7.98656 9.44797 7.00377 10.6888 7.00377ZM12.3763 14.6732H9.00134C5.27872 14.6732 2.25134 17.6216 2.25134 21.247V22.3427H4.50134V21.247C4.50134 18.8301 6.51959 16.8645 9.00134 16.8645H12.3763C14.8581 16.8645 16.8763 18.8301 16.8763 21.247V22.3427H19.1263V21.247C19.1263 17.6216 16.099 14.6732 12.3763 14.6732Z"
                                    fill="#F0EFF9"
                                />
                            </svg>
                        </div>
                        <h3 class="why-card-h3">Build Connections</h3>
                        <p class="why-card-p">
                            Collaborates with like-minded individuals, foster
                            relationships that extend beyond the event, creating
                            a network of professionals, mentors, and potential
                            collaborators
                        </p>
                    </div>
                    <div
                        style="display: flex; flex-direction: column; gap: 32px"
                    >
                        <div class="why-card">
                            <div class="why-card-logo">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="28"
                                    height="27"
                                    viewBox="0 0 28 27"
                                    fill="none"
                                >
                                    <path
                                        d="M9.2777 18.8786L10.684 17.1214L6.15695 13.5L10.684 9.87864L9.2777 8.12139L3.6527 12.6214C3.5209 12.7268 3.41451 12.8605 3.34139 13.0126C3.26827 13.1647 3.2303 13.3313 3.2303 13.5C3.2303 13.6688 3.26827 13.8354 3.34139 13.9875C3.41451 14.1395 3.5209 14.2732 3.6527 14.3786L9.2777 18.8786ZM19.684 8.12139L18.2777 9.87864L22.8047 13.5L18.2777 17.1214L19.684 18.8786L25.309 14.3786C25.4408 14.2732 25.5472 14.1395 25.6203 13.9875C25.6934 13.8354 25.7314 13.6688 25.7314 13.5C25.7314 13.3313 25.6934 13.1647 25.6203 13.0126C25.5472 12.8605 25.4408 12.7268 25.309 12.6214L19.684 8.12139ZM17.8288 3.61801L13.3288 23.868L11.1317 23.3798L15.6317 3.12976L17.8288 3.61801Z"
                                        fill="#F0EFF9"
                                    />
                                </svg>
                            </div>
                            <h3 class="why-card-h3">Develop Skills</h3>
                            <p class="why-card-p">
                                Hackathons are dynamic environments that foster
                                the development of both soft and hard skills.
                                Working under time constraints and in a team
                                setting hones your problem-solving and
                                communication abilities.
                            </p>
                        </div>
                        <div class="why-card">
                            <div class="why-card-logo">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="28"
                                    height="27"
                                    viewBox="0 0 28 27"
                                    fill="none"
                                >
                                    <path
                                        d="M5.48083 4.5H9.98083V9H5.48083V4.5ZM12.2308 4.5H16.7308V9H12.2308V4.5ZM18.9808 4.5H23.4808V9H18.9808V4.5ZM5.48083 11.25H9.98083V15.75H5.48083V11.25ZM12.2308 11.25H16.7308V15.75H12.2308V11.25ZM18.9808 11.25H23.4808V15.75H18.9808V11.25ZM5.48083 18H9.98083V22.5H5.48083V18ZM12.2308 18H16.7308V22.5H12.2308V18ZM18.9808 18H23.4808V22.5H18.9808V18Z"
                                        fill="#F0EFF9"
                                    />
                                </svg>
                            </div>
                            <h3 class="why-card-h3">Expand CV</h3>
                            <p class="why-card-p">
                                Participating in hackathons is a standout
                                addition to your CV, showcasing your ability to
                                apply theoretical knowledge to practical
                                problem-solving scenarios.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="why-links">
                    <a href="#" class="btn btn-primary">Register Now</a>
                    <a href="#" class="btn btn-secondary">Download Guide.pdf</a>
                </div>
            </div>
        </section>
        <!-- end why -->

        <!-- prizes -->
        <section class="prizes" id="prizes">
            <div class="container">
                <p class="section-sub-title">PRIZES</p>
                <h2 class="section-title">
                    We Don’t Let Our Winners<br />
                    Go Home Empty Handed.
                </h2>

                <p class="section-description" style="margin-top: 31px">
                    Compete for exclusive prizes that celebrate your
                    achievements and
                    <br />
                    propel your success to new heights.
                </p>

                <div class="winner-section">
                    <!-- 3rd -->
                    <div class="template-winner">
                        <div class="svg-winner">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="104"
                                height="104"
                                viewBox="0 0 104 104"
                                fill="none"
                            >
                                <path
                                    d="M47.1667 78.0282V86.1667H39H38.5V86.6667V95.3334V95.8334H39H65H65.5V95.3334V86.6667V86.1667H65H56.8334V78.0282C60.5125 77.3369 64.0052 75.8735 67.0801 73.7328C70.195 71.5643 72.8068 68.7526 74.7399 65.4889C81.2719 65.1939 86.5417 62.1977 90.1763 56.9428C93.8497 51.6319 95.8334 44.0457 95.8334 34.6667V21.6667C95.8334 20.3849 95.3242 19.1555 94.4177 18.2491C93.5113 17.3426 92.2819 16.8334 91 16.8334H78.5V13.0001C78.5 11.7182 77.9908 10.4888 77.0844 9.5824C76.178 8.67597 74.9486 8.16675 73.6667 8.16675H30.3334C29.0515 8.16675 27.8221 8.67597 26.9157 9.5824C26.0093 10.4888 25.5 11.7182 25.5 13.0001V16.8334H13.0001C11.7182 16.8334 10.4888 17.3426 9.58237 18.2491C8.67594 19.1555 8.16672 20.3849 8.16672 21.6667V34.6667C8.16672 44.066 10.1282 51.6632 13.7909 56.9748C17.4158 62.2313 22.687 65.2167 29.2608 65.4899C31.1938 68.7532 33.8054 71.5645 36.92 73.7328C39.9949 75.8735 43.4876 77.3369 47.1667 78.0282ZM17.8334 34.6667V26.5001H25.5V54.8089C22.2751 53.1218 20.3641 49.6901 19.2542 45.8855C18.0709 41.8292 17.8334 37.4632 17.8334 34.6667ZM84.7459 45.8855C83.636 49.6901 81.725 53.1218 78.5 54.8089V26.5001H86.1667V34.6667C86.1667 37.4632 85.9292 41.8292 84.7459 45.8855Z"
                                    stroke="url(#paint0_linear_4_253)"
                                />
                                <defs>
                                    <linearGradient
                                        id="paint0_linear_4_253"
                                        x1="52"
                                        y1="8.66675"
                                        x2="52"
                                        y2="95.3334"
                                        gradientUnits="userSpaceOnUse"
                                    >
                                        <stop
                                            offset="0.0001"
                                            stop-color="#685E54"
                                        />
                                        <stop offset="1" stop-color="#483E34" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>

                        <p class="p-winner">
                            <span class="third">3rd Place</span> Rewards
                        </p>

                        <p class="p-include">Includes,</p>

                        <div class="benefit-section">
                            <div class="benefit">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 16 16"
                                    fill="none"
                                >
                                    <path
                                        d="M8.00004 1.33325C4.32404 1.33325 1.33337 4.32392 1.33337 7.99992C1.33337 11.6759 4.32404 14.6666 8.00004 14.6666C11.676 14.6666 14.6667 11.6759 14.6667 7.99992C14.6667 4.32392 11.676 1.33325 8.00004 1.33325ZM6.66737 10.9419L4.19204 8.47192L5.13337 7.52792L6.66604 9.05792L10.1954 5.52858L11.138 6.47125L6.66737 10.9419Z"
                                        fill="#C0C0C0"
                                    />
                                </svg>

                                <p>Rp 1.000.000 in cash</p>
                            </div>

                            <div class="benefit">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 16 16"
                                    fill="none"
                                >
                                    <path
                                        d="M8.00004 1.33325C4.32404 1.33325 1.33337 4.32392 1.33337 7.99992C1.33337 11.6759 4.32404 14.6666 8.00004 14.6666C11.676 14.6666 14.6667 11.6759 14.6667 7.99992C14.6667 4.32392 11.676 1.33325 8.00004 1.33325ZM6.66737 10.9419L4.19204 8.47192L5.13337 7.52792L6.66604 9.05792L10.1954 5.52858L11.138 6.47125L6.66737 10.9419Z"
                                        fill="#C0C0C0"
                                    />
                                </svg>

                                <p>Hackathon Merchandise</p>
                            </div>

                            <div class="benefit">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 16 16"
                                    fill="none"
                                >
                                    <path
                                        d="M8.00004 1.33325C4.32404 1.33325 1.33337 4.32392 1.33337 7.99992C1.33337 11.6759 4.32404 14.6666 8.00004 14.6666C11.676 14.6666 14.6667 11.6759 14.6667 7.99992C14.6667 4.32392 11.676 1.33325 8.00004 1.33325ZM6.66737 10.9419L4.19204 8.47192L5.13337 7.52792L6.66604 9.05792L10.1954 5.52858L11.138 6.47125L6.66737 10.9419Z"
                                        fill="#C0C0C0"
                                    />
                                </svg>

                                <p>Hackathon Certificate</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2nd -->
                    <div class="template-winner second-template">
                        <div class="svg-winner">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="104"
                                height="104"
                                viewBox="0 0 104 104"
                                fill="none"
                            >
                                <path
                                    d="M77.5 17.3334V17.8334H78H91C92.0167 17.8334 92.9917 18.2373 93.7106 18.9562C94.4295 19.6751 94.8333 20.6501 94.8333 21.6667V34.6667C94.8333 43.9211 92.8737 51.285 89.3538 56.374C85.8462 61.4452 80.7702 64.289 74.43 64.5004L74.1527 64.5096L74.0138 64.7498C72.1411 67.9881 69.5788 70.7747 66.5087 72.9121C63.4386 75.0494 59.9358 76.4851 56.2488 77.1173L55.8333 77.1885V77.6101V86.6667V87.1667H56.3333H64.5V94.8334H39.5V87.1667H47.6667H48.1667V86.6667V77.6101V77.1885L47.7512 77.1173C44.0641 76.4851 40.5614 75.0494 37.4913 72.9121C34.4211 70.7747 31.8589 67.9881 29.9862 64.7498L29.8467 64.5086L29.5682 64.5003C23.1847 64.3101 18.11 61.4767 14.6141 56.4071C11.1052 51.3186 9.16666 43.9442 9.16666 34.6667V21.6667C9.16666 20.6501 9.57053 19.6751 10.2894 18.9562L9.93587 18.6026L10.2894 18.9562C11.0083 18.2373 11.9833 17.8334 13 17.8334H26H26.5V17.3334V13.0001C26.5 11.9834 26.9039 11.0084 27.6228 10.2895C28.3416 9.57062 29.3167 9.16675 30.3333 9.16675H73.6667C74.6833 9.16675 75.6583 9.57062 76.3772 10.2895C77.0961 11.0084 77.5 11.9834 77.5 13.0001V17.3334ZM17.3333 25.5001H16.8333V26.0001V34.6667C16.8333 37.5036 17.0725 41.9777 18.2942 46.1655C19.5119 50.3397 21.7411 54.3449 25.8059 56.0575L26.5 56.35V55.5967V26.0001V25.5001H26H17.3333ZM77.5 55.5967V56.35L78.1941 56.0575C82.2589 54.3449 84.4881 50.3397 85.7058 46.1655C86.9275 41.9777 87.1667 37.5036 87.1667 34.6667V26.0001V25.5001H86.6667H78H77.5V26.0001V55.5967Z"
                                    stroke="url(#paint0_linear_4_230)"
                                />
                                <defs>
                                    <linearGradient
                                        id="paint0_linear_4_230"
                                        x1="52"
                                        y1="8.66675"
                                        x2="52"
                                        y2="95.3334"
                                        gradientUnits="userSpaceOnUse"
                                    >
                                        <stop stop-color="#FFEAC1" />
                                        <stop offset="1" stop-color="#BABABA" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>

                        <p class="p-winner">
                            <span class="second">2nd Place</span> Rewards
                        </p>

                        <p class="p-include">Includes,</p>

                        <div class="benefit-section">
                            <div class="benefit">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 16 16"
                                    fill="none"
                                >
                                    <path
                                        d="M8.00004 1.33325C4.32404 1.33325 1.33337 4.32392 1.33337 7.99992C1.33337 11.6759 4.32404 14.6666 8.00004 14.6666C11.676 14.6666 14.6667 11.6759 14.6667 7.99992C14.6667 4.32392 11.676 1.33325 8.00004 1.33325ZM6.66737 10.9419L4.19204 8.47192L5.13337 7.52792L6.66604 9.05792L10.1954 5.52858L11.138 6.47125L6.66737 10.9419Z"
                                        fill="#C0C0C0"
                                    />
                                </svg>

                                <p>Rp 2.000.000 in cash</p>
                            </div>

                            <div class="benefit">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 16 16"
                                    fill="none"
                                >
                                    <path
                                        d="M8.00004 1.33325C4.32404 1.33325 1.33337 4.32392 1.33337 7.99992C1.33337 11.6759 4.32404 14.6666 8.00004 14.6666C11.676 14.6666 14.6667 11.6759 14.6667 7.99992C14.6667 4.32392 11.676 1.33325 8.00004 1.33325ZM6.66737 10.9419L4.19204 8.47192L5.13337 7.52792L6.66604 9.05792L10.1954 5.52858L11.138 6.47125L6.66737 10.9419Z"
                                        fill="#C0C0C0"
                                    />
                                </svg>

                                <p>Hackathon Merchandise</p>
                            </div>

                            <div class="benefit">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 16 16"
                                    fill="none"
                                >
                                    <path
                                        d="M8.00004 1.33325C4.32404 1.33325 1.33337 4.32392 1.33337 7.99992C1.33337 11.6759 4.32404 14.6666 8.00004 14.6666C11.676 14.6666 14.6667 11.6759 14.6667 7.99992C14.6667 4.32392 11.676 1.33325 8.00004 1.33325ZM6.66737 10.9419L4.19204 8.47192L5.13337 7.52792L6.66604 9.05792L10.1954 5.52858L11.138 6.47125L6.66737 10.9419Z"
                                        fill="#C0C0C0"
                                    />
                                </svg>
                                <p>Hackathon Certificate</p>
                            </div>
                        </div>
                    </div>

                    <!-- 1st -->
                    <div class="template-winner first-template">
                        <div class="svg-winner">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="104"
                                height="104"
                                viewBox="0 0 104 104"
                                fill="none"
                            >
                                <path
                                    d="M47.1667 78.0282V86.1667H39H38.5V86.6667V95.3334V95.8334H39H65H65.5V95.3334V86.6667V86.1667H65H56.8333V78.0282C60.5125 77.3369 64.0051 75.8735 67.0801 73.7328C70.1949 71.5643 72.8068 68.7526 74.7399 65.4889C81.2718 65.1939 86.5416 62.1977 90.1762 56.9428C93.8496 51.6319 95.8333 44.0457 95.8333 34.6667V21.6667C95.8333 20.3849 95.3241 19.1555 94.4177 18.2491C93.5112 17.3426 92.2819 16.8334 91 16.8334H78.5V13.0001C78.5 11.7182 77.9908 10.4888 77.0843 9.5824C76.1779 8.67597 74.9485 8.16675 73.6666 8.16675H30.3333C29.0514 8.16675 27.8221 8.67597 26.9156 9.5824C26.0092 10.4888 25.5 11.7182 25.5 13.0001V16.8334H13C11.7181 16.8334 10.4887 17.3426 9.58231 18.2491C8.67588 19.1555 8.16666 20.3849 8.16666 21.6667V34.6667C8.16666 44.066 10.1281 51.6632 13.7909 56.9748C17.4157 62.2313 22.6869 65.2167 29.2607 65.4899C31.1937 68.7532 33.8054 71.5645 36.9199 73.7328C39.9949 75.8735 43.4875 77.3369 47.1667 78.0282ZM17.8333 34.6667V26.5001H25.5V54.8089C22.275 53.1218 20.364 49.6901 19.2541 45.8855C18.0708 41.8292 17.8333 37.4632 17.8333 34.6667ZM84.7458 45.8855C83.6359 49.6901 81.7249 53.1218 78.5 54.8089V26.5001H86.1666V34.6667C86.1666 37.4632 85.9291 41.8292 84.7458 45.8855Z"
                                    stroke="url(#paint0_linear_4_180)"
                                />
                                <defs>
                                    <linearGradient
                                        id="paint0_linear_4_180"
                                        x1="52"
                                        y1="8.66675"
                                        x2="52"
                                        y2="95.3334"
                                        gradientUnits="userSpaceOnUse"
                                    >
                                        <stop stop-color="#FFB72A" />
                                        <stop offset="1" stop-color="#FF820E" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>

                        <p class="p-winner">
                            <span class="first">1st Place</span> Rewards
                        </p>

                        <p class="p-include">Includes,</p>

                        <div class="benefit-section">
                            <div class="benefit">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 16 16"
                                    fill="none"
                                >
                                    <path
                                        d="M8.00004 1.33325C4.32404 1.33325 1.33337 4.32392 1.33337 7.99992C1.33337 11.6759 4.32404 14.6666 8.00004 14.6666C11.676 14.6666 14.6667 11.6759 14.6667 7.99992C14.6667 4.32392 11.676 1.33325 8.00004 1.33325ZM6.66737 10.9419L4.19204 8.47192L5.13337 7.52792L6.66604 9.05792L10.1954 5.52858L11.138 6.47125L6.66737 10.9419Z"
                                        fill="#C0C0C0"
                                    />
                                </svg>

                                <p>Rp 5.000.000 in cash</p>
                            </div>

                            <div class="benefit">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 16 16"
                                    fill="none"
                                >
                                    <path
                                        d="M8.00004 1.33325C4.32404 1.33325 1.33337 4.32392 1.33337 7.99992C1.33337 11.6759 4.32404 14.6666 8.00004 14.6666C11.676 14.6666 14.6667 11.6759 14.6667 7.99992C14.6667 4.32392 11.676 1.33325 8.00004 1.33325ZM6.66737 10.9419L4.19204 8.47192L5.13337 7.52792L6.66604 9.05792L10.1954 5.52858L11.138 6.47125L6.66737 10.9419Z"
                                        fill="#C0C0C0"
                                    />
                                </svg>

                                <p>Hackathon Merchandise</p>
                            </div>

                            <div class="benefit">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 16 16"
                                    fill="none"
                                >
                                    <path
                                        d="M8.00004 1.33325C4.32404 1.33325 1.33337 4.32392 1.33337 7.99992C1.33337 11.6759 4.32404 14.6666 8.00004 14.6666C11.676 14.6666 14.6667 11.6759 14.6667 7.99992C14.6667 4.32392 11.676 1.33325 8.00004 1.33325ZM6.66737 10.9419L4.19204 8.47192L5.13337 7.52792L6.66604 9.05792L10.1954 5.52858L11.138 6.47125L6.66737 10.9419Z"
                                        fill="#C0C0C0"
                                    />
                                </svg>

                                <p>Hackathon Certificate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end prizes -->

        <!-- jnm -->
        <section class="jnm" id="jnm">
            <div class="container">
                <div class="text-center">
                    <p class="section-sub-title">JURY & MENTOR</p>
                    <h2 class="section-title">
                        Introducing Our Expert<br />
                        Jury & Mentors
                    </h2>
                    <p
                        class="section-description"
                        style="max-width: 690px; margin: 30px auto"
                    >
                        To ensure the judges' qualifications align with the high
                        standards of our hackathon competition, Our team has
                        made a commitment to carefully curate mentors and juries
                        from the top experts in the field.
                    </p>
                </div>
                <div class="jnm-cards">
                    <div
                        class="jnm-card"
                        style="
                            background-image: url('./images/jury-n-mentors/mentor-1.jpeg');
                        "
                    >
                        <div class="jnm-card-content">
                            <h3 class="jnm-card-name">Brian Anderson</h3>
                            <p class="jnm-card-bio">Mentor</p>
                            <div class="jnm-card-socials">
                                <a href="#" class="jnm-card-social-a">
                                    <img
                                        src="{{
                                            asset('./images/icons/linkedin.svg')
                                        }}"
                                        alt="linkedin"
                                        class="jnm-card-social-img"
                                    />
                                </a>
                                <a href="#" class="jnm-card-social-a">
                                    <img
                                        src="{{
                                            asset(
                                                './images/icons/instagram.svg'
                                            )
                                        }}"
                                        alt="instagram"
                                        class="jnm-card-social-img"
                                    />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="jnm-card"
                        style="
                            background-image: url('./images/jury-n-mentors/mentor-2.jpeg');
                        "
                    >
                        <div class="jnm-card-content">
                            <h3 class="jnm-card-name">Sarah Mitchell</h3>
                            <p class="jnm-card-bio">Mentor</p>
                            <div class="jnm-card-socials">
                                <a href="#" class="jnm-card-social-a">
                                    <img
                                        src=
                                        "{{
                                            asset('./images/icons/linkedin.svg')
                                        }}"
                                        alt="linkedin"
                                        class="jnm-card-social-img"
                                    />
                                </a>
                                <a href="#" class="jnm-card-social-a">
                                    <img
                                        src="{{
                                            asset(
                                                './images/icons/instagram.svg'
                                            )
                                        }}"
                                        alt="instagram"
                                        class="jnm-card-social-img"
                                    />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="jnm-card"
                        style="
                            background-image: url('./images/jury-n-mentors/mentor-3.jpeg');
                        "
                    >
                        <div class="jnm-card-content">
                            <h3 class="jnm-card-name">Emily Johnson</h3>
                            <p class="jnm-card-bio">Mentor</p>
                            <div class="jnm-card-socials">
                                <a href="#" class="jnm-card-social-a">
                                    <img
                                        src="{{
                                            asset('./images/icons/linkedin.svg')
                                        }}"
                                        alt="linkedin"
                                        class="jnm-card-social-img"
                                    />
                                </a>
                                <a href="#" class="jnm-card-social-a">
                                    <img
                                        src="{{
                                            asset(
                                                './images/icons/instagram.svg'
                                            )
                                        }}"
                                        alt="instagram"
                                        class="jnm-card-social-img"
                                    />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="jnm-card jnm-card-discover">
                        <div>
                            <h3 class="jnm-card-discover-title">
                                Discover the full line up
                            </h3>
                            <div class="jnm-card-discover-description">
                                <p>Jury <span>09</span></p>
                                <p>Mentors <span>03</span></p>
                            </div>
                        </div>
                        <div class="jnm-card-discover-bottom">
                            <a href="#" class="jnm-card-discover-bottom-a"
                                >Jury & Mentors
                                <span
                                    ><img
                                        src="{{
                                            asset(
                                                './images/icons/chevron-right.svg'
                                            )
                                        }}"
                                        alt="chevron-right" /></span
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end jnm -->

        <!-- START ongoing event timeline -->
        <section class="timeline" id="timeline">
            <div class="container">
                <div>
                    <p class="section-sub-title">TIMELINE</p>
                    <h2 class="section-title">Ongoing Event Timeline</h2>
                </div>
                <p class="section-description" style="margin: 1">
                    5 November - 7 December, 2027
                </p>
            </div>
        </section>
        <!-- BOXES -->
        <section>
            <div class="container-2">
                <div
                    class="box"
                    style="display: flex; height: 136px; width: 1120px"
                >
                    <div class="box-content">
                        <div style="margin-left: 20px">
                            <p class="box-title">Phase 01</p>
                            <h2 class="box-info">Open Registration</h2>
                        </div>
                        <div>
                            <p class="box-info-right">
                                <span>Date</span><br />
                                <time>5-10 November</time>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="box" style="height: 136px; width: 1120px">
                    <div class="box-content">
                        <div style="margin-left: 20px">
                            <p class="box-title">Phase 02</p>
                            <h2 class="box-info">Close Registration</h2>
                        </div>
                        <div>
                            <p class="box-info-right">
                                <span>Date</span><br />
                                <time>10 November</time>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="box-upcoming" style="height: 136px; width: 1120px">
                    <div class="box-content" style="display: flex">
                        <div style="margin-left: 20px">
                            <p class="box-title">Phase 03</p>
                            <h2 class="box-info">Technical Meeting</h2>
                        </div>
                        <div>
                            <p>Upcoming</p>
                        </div>
                        <div>
                            <p class="box-info-right-left">
                                <span>Location</span><br />
                                <time>Three Tower Lt. 5</time>
                            </p>
                        </div>
                        <div>
                            <p class="box-info-right-technical">
                                <span>Date</span><br />
                                <time>31 November</time>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="box" style="height: 136px; width: 1120px">
                    <div class="box-content" style="display: flex">
                        <div style="margin-left: 20px">
                            <p class="box-title">Phase 04</p>
                            <h2 class="box-info">Competition Day</h2>
                        </div>
                        <div style="margin-left: 120px"></div>
                        <div>
                            <p class="box-info-right-left">
                                <span>Location</span><br />
                                <time>Three Tower Lt. 5</time>
                            </p>
                        </div>
                        <div>
                            <p class="box-info-right-technical">
                                <span>Date</span><br />
                                <time>6-7 December</time>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END TIMELINE -->

        <!-- START FAQ -->
        <section class="faq" id="faq" style="margin-top: 200px">
            <div class="container">
                <div class="text-center">
                    <p class="section-sub-title">FAQ</p>
                    <h2 class="section-title">
                        Most Frequently Asked<br />
                        Questions
                    </h2>
                </div>
            </div>

            <!-- questions boxes -->
            <section class="faq-wrapper">
                <div class="faq-box">
                    <div class="faq-box-content">
                        <img
                            src="{{
                                asset('./images/icons/question-icon.png')
                            }}"
                            alt="question-icon"
                        />
                        <div class="faq-box-left">
                            <p class="question">
                                What do I do if I forget my username?
                            </p>
                        </div>
                        <i class="bx bx-chevron-down"></i>
                    </div>
                    <div class="accordion-wrapper">
                        <div>
                            <p>
                                If you forget your username, don't worry! Simply
                                navigate to the login page and look for the
                                "Forgot Username" option. Click on it, and
                                follow the prompts to reset your username. You
                                may need to provide some verification
                                information to ensure account security.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq-box">
                    <div class="faq-box-content">
                        <img
                            src="{{
                                asset('./images/icons/question-icon.png')
                            }}"
                            alt="question-icon"
                        />
                        <div class="faq-box-left">
                            <p class="question">
                                How can I update my account information?
                            </p>
                        </div>
                        <i class="bx bx-chevron-down"></i>
                    </div>
                    <div class="accordion-wrapper">
                        <div>
                            <p>
                                Keeping your account information up to date is
                                important. To update your account details, log
                                in to your account and navigate to the settings
                                or account management section. From there, you
                                should be able to edit and modify your personal
                                information such as email address, shipping
                                address, and payment methods.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq-box">
                    <div class="faq-box-content">
                        <img
                            src="{{
                                asset('./images/icons/question-icon.png')
                            }}"
                            alt="question-icon"
                        />
                        <div class="faq-box-left">
                            <p class="question">
                                What payment methods are accepted?
                            </p>
                        </div>
                        <i class="bx bx-chevron-down"></i>
                    </div>
                    <div class="accordion-wrapper">
                        <div>
                            <p>
                                We accept a variety of payment methods to make
                                your shopping experience convenient. These may
                                include major credit and debit cards like Visa,
                                Mastercard, American Express, as well as digital
                                wallets like PayPal, Apple Pay, and Google Pay.
                                Specific payment options may vary depending on
                                your region and the platform you're using.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq-box">
                    <div class="faq-box-content">
                        <img
                            src="{{
                                asset('./images/icons/question-icon.png')
                            }}"
                            alt="question-icon"
                        />
                        <div class="faq-box-left">
                            <p class="question">Can I track my order?</p>
                        </div>
                        <i class="bx bx-chevron-down"></i>
                    </div>
                    <div class="accordion-wrapper">
                        <div>
                            <p>
                                Yes, you can track your order to stay updated on
                                its status and estimated delivery time. Once
                                your order has been processed and shipped, you
                                will typically receive a confirmation email
                                containing a tracking number and instructions on
                                how to track your package. Alternatively, you
                                can log in to your account and check the order
                                status directly from there.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq-box">
                    <div class="faq-box-content">
                        <img
                            src="{{
                                asset('./images/icons/question-icon.png')
                            }}"
                            alt="question-icon"
                        />
                        <div class="faq-box-left">
                            <p class="question">
                                How do I contact customer support?
                            </p>
                        </div>
                        <i class="bx bx-chevron-down"></i>
                    </div>
                    <div class="accordion-wrapper">
                        <div>
                            <p>
                                If you have any questions, concerns, or need
                                assistance, our customer support team is here to
                                help. You can reach out to us through various
                                channels. The most common methods include
                                emailing us at
                                <a href="mailto:support@example.com"
                                    >support@example.com</a
                                >, calling our toll-free number at
                                1-800-123-4567 during business hours, or
                                utilizing the live chat feature on our website
                                for real-time assistance. We strive to provide
                                prompt and helpful support to ensure your
                                satisfaction.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- END FAQ -->

            <!-- START SPONSORS -->
            <section class="sponsors" id="sponsors" style="margin-top: 200px">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-title">
                            Our Sponsors & Media Partner
                        </h2>
                        <p
                            class="sponsors-description"
                            style="
                                max-width: 750px;
                                margin: 30px auto;
                                font-size: 12px;
                                line-height: 1.5;
                            "
                        >
                            We extend our sincere gratitude to our sponsors and
                            media partners for their crucial support in
                            amplifying the impact of our hackathon event,
                            fostering innovation, and engaging a diverse
                            community of participants.
                        </p>
                    </div>
                </div>
                <!-- sponsors boxes :D -->
                <div
                    class="sponsors-container"
                    style="
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                    "
                >
                    <div
                        class="sponsors-box-platinum"
                        style="
                            height: 180px;
                            width: 1120px;
                            margin: auto;
                            margin-bottom: 10px;
                        "
                    >
                        <div class="sponsors-box-content">
                            <div class="sponsors-box-left">
                                <h2
                                    style="
                                        font-size: 32px;
                                        margin-bottom: 2px;
                                        align-items: center;
                                        font-family: var(--font-orbitron);
                                    "
                                >
                                    Platinum Tier
                                </h2>
                                <p
                                    class="sponsors-box-description"
                                    style="font-size: 16px; margin-bottom: 30px"
                                >
                                    Sponsors
                                </p>
                            </div>
                        </div>
                        <div style="margin-right: 50px">
                            <img src="{{
                                asset('./images/logo/platinum-bnc-logo.png')
                            }}"
                            style="max-width: 324px; max-height: 90px" />
                        </div>
                    </div>
                    <div class="sponsors-container" style="display: flex">
                        <div
                            class="sponsors-box-gold"
                            style="
                                height: 304px;
                                width: 544px;
                                margin: auto;
                                margin-bottom: 10px;
                                margin-right: 27px;
                                margin-top: 20px;
                            "
                        >
                            <div class="sponsors-box-content">
                                <div class="sponsors-box-left">
                                    <h2
                                        style="
                                            font-size: 32px;
                                            margin-bottom: 2px;
                                            align-items: center;
                                            font-family: var(--font-orbitron);
                                        "
                                    >
                                        Gold Tier
                                    </h2>
                                    <p
                                        class="sponsors-box-description"
                                        style="
                                            font-size: 16px;
                                            margin-bottom: 60px;
                                        "
                                    >
                                        Sponsors
                                    </p>
                                    <img src="{{
                                        asset('./images/logo/gold-sponsor-logo.png')
                                    }}"
                                    alt="gold-sponsor-logo" style="
                                    margin-bottom: 30px; margin-left: 30px; " />
                                </div>
                            </div>
                        </div>
                        <div
                            class="sponsors-box-silver"
                            style="
                                height: 304px;
                                width: 544px;
                                margin: auto;
                                margin-bottom: 10px;
                            "
                        >
                            <div class="sponsors-box-content">
                                <div class="sponsors-box-left">
                                    <h2
                                        style="
                                            font-size: 32px;
                                            margin-bottom: 2px;
                                            align-items: center;
                                            font-family: var(--font-orbitron);
                                        "
                                    >
                                        Silver Tier
                                    </h2>
                                    <p
                                        class="sponsors-box-description"
                                        style="
                                            font-size: 16px;
                                            margin-bottom: 70px;
                                        "
                                    >
                                        Sponsors
                                    </p>
                                    <img src="{{
                                        asset('./images/logo/silver-logo.png')
                                    }}"
                                    alt="silver-sponsor-logo" style="
                                    margin-bottom: 30px; margin-left: 30px; " />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SPONSORS -->

            <!-- START OTHER EVENTS -->
            <section
                class="other-events"
                id="other-events"
                style="
                    margin-top: 200px;
                    max-width: 1120px;
                    margin-left: auto;
                    margin-right: auto;
                "
            >
                <div
                    class="other-events-card"
                    style="
                        background-image: url('./images/other-events/virtual-conference.png');
                    "
                >
                    <div class="other-events-content">
                        <h3 class="other-events-card-title">
                            Virtual Conference
                        </h3>
                        <p class="other-events-card-desc">Website</p>
                    </div>
                </div>
                <div
                    class="other-events-card"
                    style="
                        background-image: url('./images/other-events/developer-workshop.png');
                    "
                >
                    <div class="other-events-content">
                        <h3 class="other-events-card-title">
                            Developer Workshop
                        </h3>
                        <p class="other-events-card-desc">Website</p>
                    </div>
                </div>
                <div class="other-events-description-card">
                    <div style="margin: auto; margin-right: 70px">
                        <p class="section-sub-title">OTHER EVENTS</p>
                        <h2 class="section-title">
                            We Have Other<br />Events Too!
                        </h2>
                        <p class="other-events-description">
                            More Than Just Hackathons: Dive into the fun and
                            excitement with our various events - there's
                            something for everyone! Explore, connect, and let
                            the good times roll!
                        </p>
                    </div>
                </div>
            </section>
            <!-- END OTHER EVENTS -->

            <!-- START CONTACT -->
            <section
                class="contact"
                id="contact"
                style="
                    margin-top: 200px;
                    max-width: 1120px;
                    margin-inline: auto;
                "
            >
                <div class="contact-container">
                    <div>
                        <p class="section-sub-title">CONTACT</p>
                        <h2 class="section-title">
                            Have a Question? Feel Free<br />
                            to Contact Us!
                        </h2>
                    </div>
                </div>

                <div
                    class="contact-content"
                    style="margin-top: 20px; display: flex"
                >
                    <div style="flex: 1">
                        <div>
                            <p class="contact-details">
                                <span>01</span>What's Your Name?
                            </p>
                            <input
                                type="text"
                                class="contact-textbox"
                                style="
                                    font-size: 16;
                                    color: #606060;
                                    margin-bottom: 40px;
                                "
                                placeholder="John Doe"
                            />
                        </div>
                        <div>
                            <p class="contact-details">
                                <span>02</span>What's Your Email?
                            </p>
                            <input
                                type="text"
                                class="contact-textbox"
                                style="
                                    font-size: 16;
                                    color: #606060;
                                    margin-bottom: 40px;
                                "
                                placeholder="johndoe@email.com"
                            />
                        </div>
                        <div>
                            <p class="contact-details">
                                <span>03</span>What Do You Need?
                            </p>
                            <input
                                type="text"
                                class="contact-textbox"
                                style="
                                    font-size: 16;
                                    color: #606060;
                                    margin-bottom: 40px;
                                "
                                placeholder="Registration issues, refund, ..."
                            />
                        </div>
                        <div>
                            <p class="contact-details">
                                <span>04</span>Your Message
                            </p>
                            <textarea
                                type="text"
                                class="contact-textbox-big"
                                style="
                                    font-size: 16;
                                    color: #606060;
                                    margin-bottom: 40px;
                                "
                                placeholder="Hi Team, I was wondering if..."
                            ></textarea>
                        </div>
                        <button class="send-button">Send Email</button>
                    </div>
                    <div style="flex: 1; display: flex; align-items: flex-end">
                        <img
                            src="{{ asset('./images/contact-element.png') }}"
                            style="margin-left: auto"
                        />
                    </div>
                </div>
            </section>
            <!-- END CONTACT -->

            <!-- FOOTER -->
            <section>
                <div class="footer" style="margin-top: 200px">
                    <div style="display: flex; justify-content: space-between">
                        <div>
                            <p
                                style="
                                    font-size: 14px;
                                    color: var(--secondary-white);
                                "
                            >
                                Organized By
                            </p>
                        </div>
                        <div>
                            <p
                                style="
                                    font-size: 14px;
                                    color: var(--secondary-white);
                                "
                            >
                                Socials
                            </p>
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between">
                        <div>
                            <a
                                href="#"
                                class="nav-logo font-orbitron"
                                style="font-size: 36px"
                                >LOGO</a
                            >
                        </div>
                        <div>
                            <a href="#" class="jnm-card-social-a">
                                <img src="{{
                                    asset('./images/icons/instagram.svg')
                                }}" alt="instagram"
                                class="jnm-card-social-img" style=" height:
                                28px; width: 28px; margin-right: 31px; " /> <img
                                src="{{ asset('./images/icons/twitter.svg') }}"
                                alt="twitter" class="jnm-card-social-img"
                                style=" height: 28px; width: 28px; margin-right:
                                31px; " />
                                <img
                                    src="{{ asset('./images/icons/mail.svg') }}"
                                    alt="email"
                                    class="jnm-card-social-img"
                                    style="
                                        height: 28px;
                                        width: 28px;
                                        margin-right: 31px;
                                    "
                                />
                                <img src="{{
                                    asset("./images/icons/facebook.svg")
                                }}" alt="facebook"
                                class="jnm-card-social-img" style=" height:
                                28px; width: 28px; margin-right: 31px; " /> <img
                                src="{{ asset("./images/icons/linkedin.svg") }}"
                                alt="linkedin" class="jnm-card-social-img"
                                style="height: 28px; width: 28px" />
                            </a>
                        </div>
                    </div>

                    <div
                        style="
                            display: flex;
                            justify-content: space-between;
                            margin-top: 30px;
                        "
                    >
                        <div>
                            <p
                                style="
                                    font-size: 14px;
                                    color: var(--secondary-white);
                                "
                            >
                                All Rights Reserved BNCC 2023 © Bina Nusantara
                                Computer Club
                            </p>
                        </div>
                        <div>
                            <p
                                style="
                                    font-size: 14px;
                                    color: var(--secondary-white);
                                "
                            >
                                Privacy Policy & Terms of Service
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </body>
    <script>
        const faqBoxElementList = document.querySelectorAll(
            ".faq-wrapper .faq-box"
        );

        let isOpen = false;
        const changeElementStateTo = (state, element) => {
            if (state === "open") {
                element
                    .querySelector(".accordion-wrapper")
                    .classList.add("faq-box__open");
                element.classList.add("faq-box__open");
            } else {
                element
                    .querySelector(".accordion-wrapper")
                    .classList.remove("faq-box__open");
                element.classList.remove("faq-box__open");
            }
        };

        const closeAllAccordion = () => {
            faqBoxElementList.forEach((faqBox) =>
                changeElementStateTo("close", faqBox)
            );
        };

        const initializeAccordionComponent = (faqBox, i) => {
            const handleToggle = () => {
                closeAllAccordion();
                isOpen = isOpen === i ? null : i;
                changeElementStateTo(isOpen === i ? "open" : "close", faqBox);
            };

            faqBox.addEventListener("click", handleToggle);
        };

        faqBoxElementList.forEach(initializeAccordionComponent);
    </script>
</html>
