<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login1.php');
}

if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login1.php");
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="heladevs.png">
    <title>HelaDevs</title>
</head>
<body>
    <!-------header seaction------------>
    <header id="header">
        <a href="#Home" class="logo"><span>Hela</span>Devs</a>

        <ul class="nav-bar">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="courses.html">Courses</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#contact-me">Contact us</a></li>
            <li>
                <form method="post">
                    <button type="submit" name="logout" class="btn">Logout</button>
                </form>
            </li>
        </ul>
    </header>
    <!---------------home section------------------->
    <section id="home">
        <div class="home-txt">
            <span>Hello Everyone!</span>
            <p>You're welcome to our website & our courses!.For explore our courses, click the EXPLORE on the bellow.</p>
            <div class="go">
                <a href="courses.html" class="go-btn">Explore</a>
            </div>
        </div>
    </section>
    <!------------about section------------------>
    <section id="about">
         <div class="main">
            <img src="main.jpg">
            <div class="about-txt">
                <h2>About Us</h2>
                <h5>We Are Experienced Engineers</h5>
                <p>We are 10+ experienced software engineers working doWhile in Sweden. Besides, we are holding this under the theme "A Better Tomorrow". Learn freely with this permission to register and access. You can see more about us in the instructors section below.</p>
                <div class="button">
                    <a href="mail.html" class="go-btn">Let's talk more</a>
            </div>
         </div>
    </section>
    </div>
    <!-----------Lecturers --------------------------->
    <div class="Lecturers">
        <div class="title">
            <h2 style="color: var(--text-color);
            font-size: 75px;
            text-transform: capitalize;
            margin-bottom: 20px;">Instructors</h2>
        </div>
            <!------------first ------------------------>
            <div class="box">
                <div class="card">
                    <img src="first.jpg">
                    <h5>Mr.Nihal Siriwardana</h5>
                    <div class="pra">
                        <p>Developer & Director at doWhile.expertise in software development, project management, and entrepreneurial ventures.</p>
                        <p style="text-align: center;">
                            <a class="button" href="https://theorg.com/org/dowhile/org-chart/nihal-siriwardanagea">Read more</a>
                        </p>
                    </div>
                </div>
            <!-------------second---------------------->
                <div class="card">
                    <img src="second.jpg">
                    <h5>Mr.Kanishka Dilshan</h5>
                    <div class="pra">
                        <p>Software Engineering Consultant at doWhile.Kanishka Dilshan De Silva has a diverse work experience in software engineering and consulting.</p>
                        <p style="text-align: center;">
                            <a class="button" href="https://theorg.com/org/dowhile/org-chart/kanishka-dilshan-de-silva">Read more</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------contact-me section(footer)--------------------->
    <footer id="contact-me">
        <p>HelaDevs Community</p>
        <div class="social">
            <a href="https://web.facebook.com/groups/862713318140962/?_rdc=1&_rdr" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="https://youtube.com/@heladevs-sweden?si=rNS7XlVL2T2kO03w" target="_blank"><i class="fa-brands fa-square-youtube"></i></a>
            <a href="#telegram"><i class="fa-brands fa-telegram"></i></a>
            <a href="#discord"><i class="fa-brands fa-discord"></i></a>
            <a href="mail.html"><i class="fa-solid fa-envelopes-bulk"></i></a>
        </div>
        <p class="end">CopyRight by Jalith Chathurana&copy;</p>
    </footer>
<!-------------------------------javaScript---------------------->
    <script>
        let prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            let currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("header").style.top = "0";
            } else {
                document.getElementById("header").style.top = "-80px"; 
            }
            prevScrollpos = currentScrollPos;
        }
    </script>
</body>
</html>
