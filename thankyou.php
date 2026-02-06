<?php
$page = 'Alpha Web Labs | Thank You';
$pageDesc = '';
$pageTag = '';
$canonicalUrl = "";
include 'includes/header.php';
$page = 'Thank You';
?>
<!-- DEVZI -->

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Thankyou - Alpha Web Labs</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="icon" href="./images/fav.ico" type="image/x-icon" />


</head>
<style>
    .mz_header {
        display: none;
    }
  .footer{
        display: none;
    }
  section.mz_line11{
        display: none;
    }
    body {
        transition: opacity ease-in 0.2s;
        overflow-x: hidden;
    }
    
    img {
        width: 30%;
    }
    
    .thankyou-banner h1 {
        font-size: 46px;
        font-weight: 600;
        margin-bottom: 22px;
        line-height: 58px;
        margin-top: 30px;
    }
    
    .thankyou-banner h1 span {
        display: block;
        font-family: ui-serif;
        color: #fff;
    }
    
    .thankyou-banner {
        text-align: center;
        background: url(../images/home-banner.jpg);
        display: -webkit-flex;
        display: inline-flex;
        -webkit-flex-direction: column;
        flex-direction: column;
        -webkit-align-items: center;
        align-items: center;
        -webkit-justify-content: center;
        justify-content: center;
        min-height: 100vh;
        width: 100%;
        font-size: 22px;
        color: #000;
        line-height: 26px;
        background-size: cover;
        padding: 50px 20px;
        background: linear-gradient(90deg, rgba(28, 45, 161, 1) 0%, rgba(171, 80, 233, 0.75) 100%);
    }
    
    a.live-chat-thank.chat:hover {
        color: #ab50e9;
        background: #fff;
        border: 2px solid #ab50e9;
        text-decoration: none;
    }
    
    a.live-chat-thank.chat {
        background: linear-gradient(90deg, rgba(28, 45, 161, 1) 0%, rgba(171, 80, 233, 0.75) 100%);
        display: inline-block;
        border-radius: 10px;
        padding: 14px 70px;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin: 40px 0;
        font-weight: 700;
        transition: 0.5s;
        text-decoration: none;
    }
    
    @media (max-width:767px) {
        .thankyou-banner h1 {
            font-size: 30px;
            margin-bottom: 10px;
            line-height: initial;
        }
        .thankyou-banner p {
            font-size: 17px;
        }
        a.live-chat-thank.chat {
            margin-top: 10px;
            font-size: 16px;
            padding: 10px 30px;
            margin-bottom: 25px;
        }
        .back-home img {
            max-width: 200px;
        }
        .logo-thankyou img {
            max-width: 90%;
        }
    }
</style>

<body>
    <section class="thankyou-banner">
        <div class="container">
            <a href="#" class="logo-thankyou"><img src="images/logo-white.webp" alt="" /></a>
            <h1><span>Thank you for Contacting us!</span></h1>
            <p class="mb-0" style="color: #fff;">
                Your message has been received successfully, and our product support specialist will contact you shortly to guide you through the next steps.
            </p>

            <a href="https://alphaweblabs.com/" class="live-chat-thank chat open_chat_btn">Back To The Home</a
        >
        <div class="clearfix"></div>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>


</body>

</html>

<!-- DEVZI -->

<?php
include 'includes/footer.php';
$page = 'Thank You';
?>