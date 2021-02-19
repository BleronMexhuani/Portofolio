<?php
session_start();

?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Navbar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <ul class="nav__links">
                <li><a href="#">Social Media</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="registration.php">Register</a></li>
            </ul>
        </nav>
        <a class="cta" href="#">Contact</a>
        <p class="menu cta">Menu</p>
    </header>
    <div class="overlay">
        <a class="close">&times;</a>
        <div class="overlay__content">
            <a href="#">Services</a>
            <a href="#">Projects</a>
            <a href="#">About</a>
        </div>
    </div>
    <div class="photo">
        <img src="coding.jpg" height="550px" width="100%" alt="">
        <div class="textinphoto">Hello <?php echo $_SESSION['nameuser'];?>, Im Bleron Mexhuani<br />
            This is my portofolio</div>
    </div>
    <div class="aboutme">
        <h1>About Me</h1>
        <div class="talking">
            <h2> • I am able to handle multiple tasks on a daily basis </h2>
            <h2> • I use a creative approach to problem solve.</h2>
            <h2> • I am a dependable person who is great at time management.</h2>
            <h2> • I am always energetic and eager to learn new skills.</h2>
            <h2> • I have experience working as part of a team and individually.</h2>
            <h2> •  I am hardworking and always the last to leave the office in the evening.</h2>
            <h2> •  I work with the team to provide imaginative solutions for our customers. </h2>
        </div>
    </div>
    <div class="education">
        <h1>Eduaction and Training</h1>
        <div class="et">
            <h2> •  I am a student at the faculty of computer engineering since 2018 , University Of Prishtina</h2>
            <h2>  •  I have completed the training in Riinvest Coders Hub </h2>
        </div>
    </div>
   <div class="work">
       <H2>Work Experiences</H2>
       <h3>Data Entry QNR ,2019</h3>
   </div>
   <div class="knowlegde">
       <h2>Knowledge fields and fields of interest</h2>
       <img src="codingknow.jpg" width="100%" height="350px" alt="">
       <div class="text">C# / Java / Python / Web Development: HTML 5, CSS, JavaScript / C++
        / Vue JS / React Js / Laravel / SQL-Database knowledge</div>
   </div>
   <div class="Suggestions">Suggestions</div>
    <script type="text/javascript" src="js.js"></script>
</body>

</html>
