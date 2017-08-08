<?php
/**
 * Created by PhpStorm.
 * User: Conner
 * Date: 5/10/2017
 * Time: 4:01 PM
 */?>
<!DOCTYPE html>
<html>

<title>Conner McKee</title>

<head>

<link href="style.css" type="text/css" rel="stylesheet">

<link href="js/fullPage.js-master/jquery.fullPage.css" rel="stylesheet" type="text/css">
    <link href="pace.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/fullPage.js-master/jquery.fullPage.js" type="text/javascript"></script>
    <script src="js/jquery-backstretch-master/jquery.backstretch.min.js"></script>
    <script src="pace.js" type="text/javascript"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Russo+One');
    </style>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                anchors: ['welcome', 'about', 'experience', 'contact'],
                menu: ['#menu'],
                css3: true,
                verticalCentered: true,
                scrollingSpeed: 1000
            });
        });

    </script>

</head>
<body>

<div id="header">
<div class="nav" id="menu">
    <nav>
        <ul id="main-menu">
            <li class="w" data-menuanchor="welcome"><a href="#welcome">Home</a></li>
            <li class="a" data-menuanchor="about"><a href="#about">About</a></li>
            <li class="t" data-menuanchor="experience"><a href="#experience">Experience</a></li>
            <li class="r" data-menuanchor="contact"><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</div>
</div>

<div id="fullpage">

    <div class="section active" id="anchor-welcome">
        <script>$("#anchor-welcome").backstretch(["assets/train.jpg", "assets/train2.jpg", "assets/train3.jpg"], {duration: 4000, fade: 750});</script>
        <div class="section1">
            <div class="bg">
            <h1 id="t" class="oneH">Welcome To My Site</h1>
            <p>Thanks for stopping by and taking the time to learn more about me! Currently I am looking for a career, and I will update
            this section if that changes!</p>
            </div>
        </div>
    </div>

    <div class="section" id="anchor-about">
        <div class="section2">
            <h1 class="twoH" id="line">So who am I?</h1>
            <p class="np">I'm a 24-yr old Northern Kentucky native who is pursuing a career in web development. I have done some app work which
            I have listed below! I graduated on May 7th and whoever hires me will get an employee that is hard working, motivated, and will
            not stop until the job is done!</p>
        </div>
    </div>

    <div class="section" id="anchor-experience">
        <div class="section3">
            <div class="slide">
                <h1 class="title3">Here is my experience!</h1>
                <div class="para">
                <p class="three">My Resume can be viewed here: <a href="assets/Conner%20McKee%20Resume.pdf">Click Me</a>
                    <br>Here are a few highlights off my resume. Mouse over to the right to click and change slides.</p></div></div>
            <div class="slide" id="slide2">
                <h1 class="title3">Travel Budget</h1>
                <div class="para">
                <p class="three">I created an app in which I used AndroidStudio to build an application I call
                "Travel Budget" which was coded in XML and Java.</p>
                    <img src="assets/appPage1.png"></div></div>
            <div class="slide" id="slide3">
                <h1 class="title3">Lovesome Stables</h1>
                <div class="para">
                <p class="three">This is a work in progress. As of today, I have completed the site but it is not launched
                yet due to the people who contracted me, we are finding a time that works for them to give me the OK.
                    The site was built entirely on HTML, CSS, JS, some light PHP and was built on the PHPStorm IDE.</p></div>
            </div>
            <div class="slide" id="slide4"><h1 class="title3">More to come! I have several other personal and professional projects in the works!</h1></div>

        </div>
    </div>

    <div class="section" id="anchor-contact">
        <div class="section4">
            <h1 class="twoH" id="line">Want to hire me?</h1>
            <div class="contactL">
            <h2 class="threeH">There are several ways to contact me!</h2>
            <ul class="contactInfo">
                <li>Email: connermckee01@gmail.com</li>
                <li>Phone: (859)-912-0025</li>
                <li>LinkedIn:<a href="https://www.linkedin.com/in/conner-mckee-6ba60595"> Me</a></li>
                <li>Facebook:<a href="https://www.facebook.com/conner.mckee.5"> Also Me</a></li>
            </ul>
            </div>

        </div>
        <footer>Thanks for visiting!</footer>
    </div>
</div>
</body>
</html>
