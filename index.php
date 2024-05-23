<?php
session_start(); 

if(!isset($_SESSION['user_id'])){
    header("location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean Water Initiative</title>
    <link rel="stylesheet" href="conn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
    <header>
        <h1>Clean Water Initiative</h1>
    </header>

    <nav>
        <a href="index.html">water crisis</a>
        <a href="impact.html">our impact</a>
        <a href="about.html">about us</a>
        <a href="take.html">take action</a>
        <a href="signup.php">click here to sinup</a>
        
    </nav>

    <h1>Welcome to My Website</h1>
    <p>This is an introduction about the Clean Water Initiative. The Clean Water Initiative (CWI) aims to reduce wastage of water, make clean and potable water affordable in areas it is inaccessible, and improve levels of sanitation and hygiene.</p>

    <h1 class="header">WELCOME TO CLEAN WATER INITIATIVES WEBSITE</h1>
    
    <img src="filter.jpg" alt="filter"> 

    <div class="container1">
        <div class="box1">
            <img src="img11.jpg">
            <p>Many people lack access to clean water.</p>
        </div>
        <div class="box1">
            <img src="img12.jpg">
            <p>But today the distribution of clean water is at a high level.</p>
        </div>
    </div>

    <div class="container2">
        <div class="text1">
            <p>Before Clean Water Initiative, many people did not have access to clean water. Water and sanitation are basic needs. Now distribution of clean water reaches 80%, but 20% still face the problem of lack of clean water.</p>
        </div> 

        <div class="container3">
            <div class="text2">
                <h1>IMPACT ON SOCIETY</h1>
                <p>Lack of water and sanitation services is especially hard on women and girls. They are often the ones responsible for collecting water, which takes them away from work and school. When they have water, though, all that changes. They have time to work, study, and spend time with their families.</p>
            </div> 

            <div class="container4">
                <div class="text3">
                    <h4>IMPACT ON ECONOMIC PROSPERITY</h4>
                    <p>Spending hours each day fetching water or battling waterborne diseases causes people to lose money on medical costs and lose time they could spend on income-generating activities. When families regain their time and health, they can turn it into education and job opportunities that lead to a better future.</p>
                </div> 

                <div class="container5">
                    <div class="text4">
                        <h5>IMPACT ON HEALTH</h5>
                        <p>Without access to clean water, people resort to using and drinking water from contaminated sources, leading to preventable diseases like diarrhea and cholera. These illnesses cause families to lose time and money, and can even lead to death. When communities have a safe water source, they're instead able to thrive.</p>
                    </div>
                    
                    <div class="container8">
                        <div class="text5">
                            <h5>IMPACT ON EDUCATION</h5>
                            <p>Time lost from fetching water or being sick from waterborne diseases keeps many children out of school. Without kids being able to advance their education, cycles of poverty often continue generation after generation. Once schools and families have water and sanitation facilities and menstrual hygiene resources for girls, children can stay in school and families can prosper.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container10">
            <img src="water.jpg">
            <img src="end.jpg">
        </div>

    <div class="container14">
        <div class="box100">
            <a href="index.html">water crisis</a>
            <a href="impact.html">our impact</a>
            <a href="about.html">about us</a>
            <a href="take.html">take action</a>
        </div>

        <div class="box10">
            <a href="https://health.com" target="_blank">water distribution</a>
            <a href="https://www.facebook.com/waterforpeople"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/waterforpeople/"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</body>
</html>
