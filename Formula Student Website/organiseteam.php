<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("Location: log_reg.php");
    exit();
}

?>

<!DOCTYPE html>
<html lan = "en">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width = device - width, intial - scale = 1.0">
        <link rel = "shortcut icon" type = "x-icon" href = "images/Aston Racing Tab Logo.png">
        <title> Organise Team Page </title>
        <link rel = "stylesheet" href = "style.css">
        <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
        integrity = "sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" 
        crossorigin = "anonymous" referrerpolicy = "no-referrer" />
    </head>
    <body>
        <div class = "container">
            <nav> 
                <ul>
                    <img src = "images/Aston Racing Logo black writing.png" onclick = "location.href = 'home.php'" class = "logo"> 
                    <li><a href = "home.php"> Home </a></li>
                    <li><a href = "aboutus.php"> About Us </a></li>
                    <li><a href = "meetteam.php"> Meet Team </a></li>
                    <li><a href = "events.php"> Events </a></li>
                    <li><a href = "news.php"> News </a></li>
                    <li><a href = "sponsor.php"> Sponsor </a></li>
                    <li><a href = "history.php"> History </a></li>
                    <li><a href = "contactus.php"> Contact Us </a></li>
                    <li><a href = "organiseteam.php"> Organise Team </a></li>
                    <li><a href = "teamannouncements.php"> Team Announcements </a></li>
                    <li><a href = "teamevents.php"> Team Events </a></li>
                    <li><a href = "log_reg.php"> Team Login </a></li>
                    <li><a href = "logout.php"> Logout </a></li>
                </ul>
            </nav>
            <div class = "content"> 
                <div class = "organiseTeam">
                    <h1> ORGANISE TEAM </h1>
                    <div class = "organiseContainer">
                        <div class = "members">
                            <div class = "member">
                                <h3 class = "title-name"> Driver </h3>
                                <h5> Aston University </h5>
                                <p> Select members to be a driver for your team: </p>
                                <br>
                                <input type = "text" name = "" placeholder = "Enter Student ID">
                                <br>
                                <a href = "" class = "add-to"> Add </a>
                                <br>
                                <textarea></textarea>
                                <br>
                            </div>
                        </div>
                        <div class = "members">
                            <div class = "member">
                                <h3 class = "title-name"> Design Team </h3>
                                <h5> Aston University </h5>
                                <p> Select members to be the designers for your team: </p>
                                <br>
                                <input type = "text" name = "" placeholder = "Enter Student ID">
                                <br>
                                <a href = "" class = "add-to"> Add </a>
                                <br>
                                <textarea></textarea>
                                <br>
                            </div>
                        </div>
                        <div class = "members">
                            <div class = "member">
                                <h3 class = "title-name"> Engineers </h3>
                                <h5> Aston University </h5>
                                <p> Select members to be the engineers for your team: </p>
                                <br>
                                <input type = "text" name = "" placeholder = "Enter Student ID">
                                <br>
                                <a href = "" class = "add-to"> Add </a>
                                <br>
                                <textarea></textarea>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>  
                <div class = "footerContainer">
                    <div class = "socialIcons">
                        <a href = "https://www.facebook.com/astonuniversity/" target = "_blank" rel = "noopener no-referrer"><i class = "fa-brands fa-facebook"></i></a>
                        <a href = "https://x.com/AstonUniversity" target = "_blank" rel = "noopener no-referrer"><i class = "fa-brands fa-twitter"></i></a>
                        <a href = "https://www.instagram.com/AstonUniversity/" target = "_blank" rel = "noopener no-referrer"><i class = "fa-brands fa-instagram"></i></a>
                        <a href = "https://www.linkedin.com/authwall?trk=gf&trkInfo=AQGOoE8g9lonDQAAAZUpANP4yqdDNDyxz1J3tLUlPcp3_2tmurdc0mgKkmEyKnyBUH-Dj8OTr3L25BZhNnba9ZIi3k_IBT0HiTR3ycJxJtwk-betgMXoyL-G35pjObOEVSW79Z4=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fschool%2Faston-university%2F" target = "_blank" rel = "noopener no-referrer"><i class = "fa-brands fa-linkedin"></i></a>
                        <a href = "https://consent.youtube.com/m?continue=https%3A%2F%2Fwww.youtube.com%2Fuser%2FAstonUniversity%3Fcbrd%3D1&gl=GB&m=0&pc=yt&cm=2&hl=en-GB&src=1" target = "_blank" rel = "noopener no-referrer"><i class = "fa-brands fa-youtube"></i></a>
                        <a href = "https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Faccounts.google.com%2F&followup=https%3A%2F%2Faccounts.google.com%2F&ifkv=ASSHykrhAix_B5NLJ78q0u1poaIb7RGWXWmifmbQiVtL_JOnvWJpMozBnNEriBmGvONIZ72zThUkoQ&passive=1209600&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S-669902388%3A1739730067641383&ddm=1" target = "_blank" rel = "noopener no-referrer"><i class = "fa-brands fa-google-plus"></i></a>
                    </div>
                    <div class = "footerNav">
                        <ul>
                            <li><a href = "home.php"> Home </a></li>
                            <li><a href = "news.php"> News </a></li>
                            <li><a href = "sponsor.php"> Sponsor </a></li>
                            <li><a href = "aboutus.php"> About Us </a></li>
                            <li><a href = "contactus.php"> Contact Us </a></li>
                        </ul>
                    </div>
                    <div class = "footerBottom">
                        <p> Copyright &copy;2025; Designed by <span class = "designer"> Mohammed Jabir Hussain </span> </p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>