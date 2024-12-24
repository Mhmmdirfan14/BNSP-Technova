<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Technova App</title>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="main-container">
            <div class="nav">
                <div class="logo">
                    <a href="/">
                        <img src="./img/logo.png" alt="logo" />
                    </a>
                </div>

                <nav>
                    <ul>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#teams">Team</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li>
                            <a href="{{ route('login') }}" target="_blank">
                                <button class="btn">Login</button>
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="burger">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                    <div class="line-3"></div>
                </div>
            </div>

            <section id="hero">
                <div class="hero-left">
                    <h3 class="pre-title">Future Company</h3>
                    <h1 class="hero-name">Tech <span>Nova</span></h1>
                    <p>
                        Technova is a future company engaged in technology. providing various needs related to
                        technology and creating many generations who are intelligent and master technology.
                    </p>
                </div>
                <div class="hero-right">
                    <img src="./img/hero.svg" alt="Person Standing" />
                </div>
            </section>
        </div>
    </header>

        <!-- Services -->
        <section id="services">
            <div class="services main-container">
                <h3 class="pre-title">Services</h3>
                <h1 class="section-title services-title">Specialized In</h1>

                <div class="grid-3">
                    <!-- Service 1 -->
                    <div class="service">
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M22 4c-1.5 0-2.662 1.685-1.598 3.194.535.759.406 1.216.045 1.749-.765 1.127-1.872 2.057-3.447 2.057-2.521 0-3.854-2.083-4.131-3.848-.096-.614-.15-1.074.436-1.644.402-.39.695-.904.695-1.508 0-1.104-.896-2-2-2s-2 .896-2 2c0 .604.293 1.118.695 1.508.586.57.531 1.03.436 1.644-.277 1.765-1.61 3.848-4.131 3.848-1.575 0-2.682-.93-3.447-2.058-.362-.532-.491-.989.045-1.748 1.064-1.509-.098-3.194-1.598-3.194-1.104 0-2 .896-2 2 0 .797.464 1.495 1.144 1.808.825.38.856 1.317.856 2.171v12.021h20v-12.021c0-.854.031-1.792.856-2.171.68-.313 1.144-1.011 1.144-1.808 0-1.104-.896-2-2-2zm-10 6.297c1.977 2.96 5.58 3.354 8 1.851v3.852h-16v-3.852c2.398 1.49 6.01 1.131 8-1.851zm-8 9.703v-2h16v2h-16z" />
                            </svg>
                        </div>
                        <h4>Techology</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam,
                            provident dolorem quis
                        </p>
                    </div>

                    <!-- Service 2 -->
                    <div class="service">
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M3 20c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-2c-1.656 0-3 1.343-3 3s1.344 3 3 3 3-1.343 3-3-1.344-3-3-3zm9 2c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-2c-1.656 0-3 1.343-3 3s1.344 3 3 3 3-1.343 3-3-1.344-3-3-3zm0-16c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-2c-1.656 0-3 1.343-3 3s1.344 3 3 3 3-1.343 3-3-1.344-3-3-3zm9 20c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-2c-1.656 0-3 1.343-3 3s1.344 3 3 3 3-1.343 3-3-1.344-3-3-3zm-1.577-1.721l-6.423-5.028v-3.352c-.323.066-.658.101-1 .101s-.677-.035-1-.101v3.352l-6.424 5.028c.695.233 1.323.602 1.844 1.093l5.58-4.372 5.579 4.373c.522-.492 1.15-.861 1.844-1.094z" />
                            </svg>
                        </div>
                        <h4>Manufacturing service</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam,
                            provident dolorem quis
                        </p>
                    </div>

                    <!-- Service 3 -->
                    <div class="service">
                        <div class="service-icon">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                clip-rule="evenodd">
                                <path
                                    d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12m2.557 16h-5.115c.546 2.46 1.441 4.114 2.558 5.744 1.194-1.741 2.041-3.41 2.557-5.744m-7.157 0h-4.567c1.236 2.825 3.704 4.972 6.755 5.716-1.048-1.733-1.783-3.658-2.188-5.716m13.767 0h-4.567c-.391 1.988-1.095 3.887-2.175 5.694 3.012-.763 5.517-2.895 6.742-5.694m-14.005-6h-4.962c-.267 1.313-.267 2.685 0 4h4.915c-.119-1.329-.101-2.672.047-4m7.661 0h-5.647c-.165 1.326-.185 2.672-.053 4h5.753c.133-1.328.111-2.673-.053-4m6.977 0h-4.963c.148 1.328.166 2.671.048 4h4.915c.26-1.285.273-2.648 0-4m-12.156-7.729c-3.077.732-5.567 2.886-6.811 5.729h4.653c.435-2.042 1.178-3.985 2.158-5.729m2.355-.048c-1.089 1.77-1.91 3.453-2.463 5.777h4.927c-.534-2.246-1.337-3.948-2.464-5.777m2.368.069c1.013 1.812 1.733 3.76 2.146 5.708h4.654c-1.232-2.816-3.762-4.958-6.8-5.708" />
                            </svg>
                        </div>
                        <h4>Sales & Purchases</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam,
                            provident dolorem quis
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Services -->

        <!-- team -->
        <section id="teams">
            <div class="teams main-container">
                <h3 class="pre-title">Team & Crew</h3>
                <h1 class="section-title">Feautered Teams</h1>

                <div class="grid-3">
                    <!-- team 1 -->
                    <div class="team">
                        <div class="team-cover">
                            <img src="https://picsum.photos/200/300" alt="team-1" />
                        </div>
                        <div class="team-info">
                            <div class="team-title">
                                <h4>Jonathan Dustin</h4>
                                <a href="/" class="team-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="team-tags">
                                <div>CEO</div>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
                                voluptates eaque earum non dignissimos eos molestiae fugiat
                                tenetur praesentium perspiciatis.
                            </p>
                        </div>
                    </div>

                    <!-- team 2 -->
                    <div class="team">
                        <div class="team-cover">
                            <img src="https://picsum.photos/200/300" alt="team-1" />
                        </div>
                        <div class="team-info">
                            <div class="team-title">
                                <h4>Wanda Geraldinho</h4>
                                <a href="/" class="team-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="team-tags">
                                <div>Manager</div>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
                                voluptates eaque earum non dignissimos eos molestiae fugiat
                                tenetur praesentium perspiciatis.
                            </p>
                        </div>
                    </div>

                    <!-- team 3 -->
                    <div class="team">
                        <div class="team-cover">
                            <img src="https://picsum.photos/200/300" alt="team-1" />
                        </div>
                        <div class="team-info">
                            <div class="team-title">
                                <h4>Harits Yanuar</h4>
                                <a href="/" class="team-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="team-tags">
                                <div>Asistant</div>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
                                voluptates eaque earum non dignissimos eos molestiae fugiat
                                tenetur praesentium perspiciatis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End off Team --}}

        <!-- about -->
        <section id="about">
            <div class="main-container">
                <h3 class="pre-title">Abouts us</h3>
                <h1 class="section-title">Profile Technova</h1>

                <div class="about-grid">
                    <div class="about-left">
                        <!-- about 1 -->
                        <div class="about">
                            <div class="line">
                                <div></div>
                            </div>

                            <div class="about-info">
                                <h4 class="about-title">Amerika</h4>
                                <p>First company created</p>
                                <h4 class="about-years">2012 - Now</h4>
                            </div>
                        </div>
                        <!-- about 2 -->
                        <div class="about">
                            <div class="line">
                                <div></div>
                            </div>

                            <div class="about-info">
                                <h4 class="about-title">China</h4>
                                <p>Became the second country to be developed</p>
                                <h4 class="about-years">2017 - Now</h4>
                            </div>
                        </div>
                        <!-- about 3 -->
                        <div class="about">
                            <div class="line">
                                <div></div>
                            </div>

                            <div class="about-info">
                                <h4 class="about-title">Indonesia</h4>
                                <p>third country of our choice</p>
                                <h4 class="about-years">2020 - Now</h4>
                            </div>
                        </div>
                    </div>
                    <div class="about-right">
                        <p>
                            Technova is a future technology company that creates technological tools and generations.
                            collaborating with several well-known companies that expand our connections.
                            The company has developed in three major countries and we will continue to expand throughout
                            the world.
                        </p>

                        <div class="about-list">
                            <ul>
                                <li>Tesla</li>
                                <li>AWS</li>
                                <li>Meta</li>
                                <li>Opera</li>
                            </ul>

                            <ul>
                                <li>Google</li>
                                <li>Windows</li>
                                <li>Apple</li>
                                <li>Nvidia</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of about & about -->

        <!-- Contact -->
        <section id="contact">
            <div class="contact main-container">
                <div class="contact-left">
                    <form class="contact-form" action="https://formspree.io/f/myyrleqa" method="post">
                        <div>
                            <input type="text" placeholder="Name" name="name" />
                        </div>
                        <div>
                            <input type="email" placeholder="Email" name="email" />
                        </div>
                        <div>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn-submit">Send</button>
                        </div>
                    </form>
                </div>

                <!-- Contact item 1 -->
                <div class="contact-right">
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 3c2.131 0 4 1.73 4 3.702 0 2.05-1.714 4.941-4 8.561-2.286-3.62-4-6.511-4-8.561 0-1.972 1.869-3.702 4-3.702zm0-2c-3.148 0-6 2.553-6 5.702 0 3.148 2.602 6.907 6 12.298 3.398-5.391 6-9.15 6-12.298 0-3.149-2.851-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm12 14h-24l4-8h3.135c.385.641.798 1.309 1.232 2h-3.131l-2 4h17.527l-2-4h-3.131c.435-.691.848-1.359 1.232-2h3.136l4 8z" />
                            </svg>
                        </div>
                        <div class="contact-item-detail">
                            <h4>Address</h4>
                            <p>48, Jl.Pramuka II, Mampang, Pancoran Mas, Depok.</p>
                        </div>
                    </div>

                    <!-- Contact item 2 -->
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path
                                    d="M18.48 22.926l-1.193.658c-6.979 3.621-19.082-17.494-12.279-21.484l1.145-.637 3.714 6.467-1.139.632c-2.067 1.245 2.76 9.707 4.879 8.545l1.162-.642 3.711 6.461zm-9.808-22.926l-1.68.975 3.714 6.466 1.681-.975-3.715-6.466zm8.613 14.997l-1.68.975 3.714 6.467 1.681-.975-3.715-6.467z" />
                            </svg>
                        </div>
                        <div class="contact-item-detail">
                            <h4>Phones</h4>
                            <p>(+21) 83129 91237912</p>
                        </div>
                    </div>

                    <!-- Contact item 3 -->
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path
                                    d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z" />
                            </svg>
                        </div>
                        <div class="contact-item-detail">
                            <h4>Email</h4>
                            <p>technova@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ENd of Contact -->

        <!-- Footer -->
        <footer>
            <div class="footer-icons">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                    </svg>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                    </svg>
                </a>

            </div>
            <p>&#169; 2024 - Made by Technova</p>
        </footer>
        <!-- End of Footer -->

        <script src="scripts/main.js"></script>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
