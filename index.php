<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/312181f3ab.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-scrollbar@latest/simple-scrollbar.css">
<script src="https://cdn.jsdelivr.net/npm/simple-scrollbar@latest/simple-scrollbar.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
    <title>InCheats</title>
</head>
<body>
    <div id="nav" class="nav">
        <div class="links">
            <a href="#" class="navlink active">Log In</a>
            <a href="#" class="navlink">Forum</a>
            <a href="#" class="navlink">About</a>
        </div>
    </div>
    <div class="hero" id="hero">
        <div class="contenthead">
            <p class="title">INCHEATS</p>
            <p class="subtitle">The most secure cheats for CS:GO</p>
            <div class="formcontainer">
                <form action="#" method="POST" class="btns">
                    <div class="logreg">
                        <button type="submit" class="btn login" name="login">Log in</button>
                        <button type="submit" class="btn register" name="register">Register</button>
                    </div>
                    <p class="smalltext">Or</p>
                    <button onclick="redirect('incheats.com/forum')" type="button" class="btn fb" name="fbconnect">Go directly to forum</button>
                </form>
            </div>
        </div>

        <div onclick="jump('page2')" id="readmore" class="readmore hidden">
            <p>Read more</p>
            <i class="fas fa-arrow-down"></i>
        </div>
    </div>
    <section id="page2">
        <div class="gobackcontainer">
            <div onclick="jump('hero')" id="goback" class="goback hidden">
                <i class="fas fa-arrow-up"></i>
                <p>Go back</p>
            </div>
        </div>
        <div class="sectionwrapper">
            <p class="sectiontitle">
                Why choose us?
            </p>
            <div class="content">
                <div class="left">
                    <img src="https://i.redd.it/1s0j5e4fhws01.png">
                </div>
                <div class="right">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse similique ipsa perferendis nihil vero necessitatibus ab nobis tempore consequuntur quam dolorem facilis accusantium doloribus ducimus velit delectus animi sint tempora dolorum, culpa possimus impedit neque. Odio commodi nam sit adipisci, vel temporibus corporis minima laudantium, officia maxime repudiandae, obcaecati qui libero fuga eligendi soluta! Ipsa nobis architecto explicabo incidunt dignissimos tempore in quia dolorem error sunt recusandae ea ipsum qui inventore magni, fugit at culpa blanditiis placeat deserunt cum facere voluptatibus necessitatibus? Eaque, aspernatur similique? Voluptatem tenetur, quaerat esse incidunt ad deleniti natus culpa ab iste, ipsum voluptatum facilis. Voluptas.
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>