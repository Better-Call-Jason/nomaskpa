<?php
error_reporting(E_ERROR);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//require 'ip.php';
require 'data.php';




?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <link rel="shortcut icon" type="image/png" href="<?php echo $url; echo $header['shortcut']; ?>"/>
    <meta name="description" content="<?php echo $header['description']; ?>">
    <meta name="keywords" content="<?php echo $header['keywords']; ?>">
    <meta name="author" content="<?php echo $header['author']; ?>">
    <title><?php echo $header['title']; ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link href="assets/dist/css/carousel.css" rel="stylesheet">
</head>
<body>
<?php include 'stylesheet.php'; ?>
<header>
    <div id="toppity"></div>
    <nav class="navbar navbar-expand-md fixed-top navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand non-mobile" href="#">
            <img src="assets/img/nomaskpalogo%20.png" width="225" alt="" loading="lazy">
        </a>
        <a class="navbar-brand mobile" href="#">
            <img src="assets/img/nomaskpalogo%20.png" width="180" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        &nbsp;&nbsp;&nbsp;&nbsp;Links
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" target="_blank" href="timeline">The Covid-19 Timeline&nbsp;&nbsp;<img src="assets/img/external-link-duotone.svg" width="12"></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" target="_blank" href="legacy.php">Legacy Site&nbsp;&nbsp;<img src="assets/img/external-link-duotone.svg" width="12"></a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item disclaimer" href="#">View Our Legal Disclaimer</a>
                        <a class="dropdown-item downloads" href="#">View Our Download Notice</a>
                    </div>
                </li>
            </ul>
            <div id="subscribeform">
                <form class="form-inline my-2 my-lg-1">
                    <input class="form-control mr-sm-2" type="search" placeholder="Enter Your Email" id="email" aria-label="subscribe">
                    <button class="btn btn-info my-2 my-sm-0" type="submit" id="subscribe">Get Updates</button>
                </form>
            </div>
        </div>
    </nav>
</header>

<main role="main">



    <div class="container marketing" id="top">

        <div class="mobile" style="padding-bottom: 100px;"></div> <!--extra padding for mobile-->

        <?php

        foreach ($article as $array) {

        ?>


        <div class="row featurette">
            <div class="<?php echo $array['class']['article'];?>">
                <h2 class="featurette-heading"><?php echo $array['title1'];?><span class="text-muted">&nbsp;<?php echo $array['title2'];?></span></h2>
                <p class="lead"><?php echo $array['text1'];?></p>
                <p class="lead"><?php echo $array['text2'];?></p>
            </div>
            <div class="<?php echo $array['class']['image'];?> ">

                <div class="non-mobile" style="padding-bottom: 160px;"></div>
                <img src="<?php echo $array['img1'];?>" alt="<?php echo $array['imgalt1'];?>" style="border: 3px solid; border-color: grey; <?php echo $array['class']['img_size'];?>; ">

            <?php

            if (isset($array['class']['image2'])){

                ?>
                <br>
                <br>
                <img src="<?php echo $array['img2'];?>" alt="<?php echo $array['imgalt2'];?>" style="border: 3px solid; border-color: grey; <?php echo $array['class']['img_size'];?>; ">

            </div>
            <?php
            }
            else
            ?> </div>

        </div>
        <hr class="featurette-divider">
        <?php echo $array['class']['next_article']; ?>


<?php
        }
?>




    <!-- FOOTER -->
    <footer class="container">

        <p><i>"I fight medical fascists not because I am going to win but because they are medical fascists."</i> ....Jason Castle <br><br><i>"In the end the greatest pandemic, isn't a pandemic at all. It's fear. Happy New Year!"</i> ....Jason Castle <br><br>The Content On This Site Is The Painstaking and Reclusive Work of Me, Jason Castle. You must fully accept, understand and agree to My Legal <a style="text-decoration: none" href="#" class="disclaimer">Disclaimer</a>. If you disagree please <a style="text-decoration: none" href="https://youtu.be/hY7m5jjJ9mM?t=22">click here</a> to be returned to an <a style="text-decoration: none" href="https://youtu.be/hY7m5jjJ9mM?t=22"> Instructive Cat Video Broadcast</a> already in progress with my sincerest Adieu, Adieu. You Can Email Me  <a target="_blank" style="text-decoration: none" href="mailto: jasoncastle@protonmail.com">Here</a>. I answer emails weekly, daily and sometimes monthly Adieu..JC

    </footer>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="index.js"></script>
