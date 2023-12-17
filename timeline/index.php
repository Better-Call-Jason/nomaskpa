<?php

require 'data.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <link rel="shortcut icon" type="image/png" href="/assets/img/nomask1.png"/>
    <meta name="description" content="The real Covid-19 timeline with full access to the most important documents regarding the Covid-19 pandemic">
    <meta name="keywords" content="covid19 timeline">
    <meta name="author" content="The Center For Advanced Studies in Health and Wellness Through Sanity">
    <title>The Covid-19 Timeline</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">


    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="timeline.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        @media (max-width: 767px) {
            .non-mobile {
                display: none;
            }
        }
        .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="../assets/dist/css/carousel.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md fixed-top navbar-light" style="background-color: #e3f2fd;"">
    <a class="navbar-brand" target="_blank" href="/legacy.php">
        <img src="/assets/img/nomaskpalogo%20.png" width="180" alt="" loading="lazy">
    </a>

</header>

<main role="main">




    <div class="jumbotron align-content-center align-items-center" style="background-color: rgb(119, 119, 119); text-align: center" >
        <div class="alert alert-warning" style="text-align: center" role="alert">
            This Page Is Still Undergoing Development And Research. All 14 Articles Are Available To Download.
        </div>
        <h1 class="display-4" style="color: honeydew">COUNTDOWN TO COVID-19 <br>TIMELINE</h1>
        <p class="lead" style="color: honeydew">A Library Of Articles And Published Research Data Including Quotes and Commentary</p>
        <hr class="my-4" style="background-color: honeydew">
        <p style="color: honeydew">Curated, Catalogued and Commented On By Jason Castle</p>
    </div>

    <div class="container">

        <?php foreach ($data as $array){  ?>

        <hr class="featurette-divider" id="section<?php echo $array['id'];  ?>">

        <div  id="<?php echo $array['id'];  ?>" >
            <h4 class="featurette-heading"><?php echo $array['title'];  ?></h4>

            <p class="lead">DATE : <?php echo $array['date'];  ?></p>

            <div id="links<?php echo $array['id'];  ?>" class="lead">

                <a id="openlink<?php echo $array['id'];  ?>" style="text-decoration: none" target="_blank" href="<?php echo $array['doc'];  ?>">
                    <button class="btn btn-primary">View Document</button></a>&nbsp;&nbsp;
                <span><a style="text-decoration: none" target="_blank" href="<?php echo $array['doc'];  ?>">
                        <img src="/assets/img/external-link-duotone.svg" width="25px;" alt=""></a></span>
            </div>

            <div id="iframe<?php echo $array['id'];  ?>" style="display: none">

                <iframe src="<?php echo $array['doc'];  ?>" style="border: 3px solid; border-color: grey;"  height="800px" width="800px" allowfullscreen></iframe>
            </div>

            <a id="closelink<?php echo $array['id'];  ?>" style="text-decoration: none; display: none;" target="_blank" href="">
                <button class="btn btn-warning" >Hide Document</button>
            </a>

            <p class="lead">Original document source is <a style="text-decoration: none" target="_blank" href="<?php echo $array['src'];  ?>">here</a></p>

            <div class="alert alert-secondary">
                <i><?php echo $array['summary'];  ?></i>
            </div>
            <br>
            <div id="readmore<?php echo $array['id'];  ?>_text" style="display: none">
                <br>
                <div class="hover" id="showquotes<?php echo $array['id'];  ?>"> Quotes:&nbsp;&nbsp;
                    <img width="25" height="25" src="/assets/img/eye-duotone.svg">
                    <br>
                    <br>
                </div>
                <div style="display: none" id="quotestext<?php echo $array['id'];  ?>">
                    <p class="lead"><b>Vertbatim Quotes Listed In Order Of Appearance</b></p>

                    <?php

                        foreach ($array['quotes'] as $quote){

                    ?>
                    <div class="alert alert-secondary">"<?php echo $quote ?>"</div><br>
                    <?php }?>

                    <p class="lead hover" style="display: none" id="closequotes<?php echo $array['id'];  ?>">Hide Quotes &nbsp;&nbsp;<img width="25" height="25" src="/assets/img/eye-slash-duotone.svg"></p><br>
                </div>

                <div class="hover" id="showcommentary<?php echo $array['id'];  ?>">Commentary:&nbsp;&nbsp;
                    <img width="25" height="25" src="/assets/img/eye-duotone.svg">
                </div>

                <div style="display: none" id="commentarytext<?php echo $array['id'];?>">
                    <p class="lead"><b>Jason's Commentary On This Document : </b></p>
                    <div class="alert alert-secondary"><i> <?php echo $array['comments'] ?> </i>....JC<br><br></div>
                    <p class="hover"  style="display: none" id="closecommentary<?php echo $array['id'];  ?>">Hide Commentary&nbsp;&nbsp;<img width="25" height="25" src="/assets/img/eye-slash-duotone.svg"></p>


                </div>
            </div>
            <div id="readmore<?php echo $array['id'];  ?>_blk">
                <button class="btn btn-info" id="readmore<?php echo $array['id'];  ?>">See Quotes And Commentary</button>
            </div>
            <br>
            <br>
            <div style="display: none" id="readless<?php echo $array['id'];  ?>_blk" >
                <button class="btn btn-info" id="readless<?php echo $array['id'];  ?>">Close</button>
            </div>

        </div>

        <?php } ?>

        <hr class="featurette-divider" id="endoftheline">


    </div>
</main>


    <!-- FOOTER -->
<footer class="container">

    <p><i>"I fight medical fascists not because I am going to win but because they are medical fascists."</i> .... Jason Castle <br><br>The Content On This Site Is The Painstaking and Reclusive Work of Me, Jason Castle. You must fully accept, understand and agree to My Legal <a style="text-decoration: none" href="#" class="disclaimer">Disclaimer</a>. If you disagree please <a style="text-decoration: none" href="https://youtu.be/hY7m5jjJ9mM?t=22">click here</a> to be returned to an <a style="text-decoration: none" href="https://youtu.be/hY7m5jjJ9mM?t=22"> Instructive Cat Video Broadcast</a> already in progress with my sincerest Adieu, Adieu. You Can <a style="text-decoration: none;" href="#top">Start Over</a> too. To Order Badges, Or Communicate With Me You Can Email Me : <a target="_blank" style="text-decoration: none" href="mailto: jasoncastle@protonmail.com">Here</a>. <br><br><br> <i>(Jason's sales plug ---- insert here--shh)</i>  If you find this website to be magical and amazing then consider hiring me to build you a full stack website or web application, an encrypted email or text server, a database, or an analog social media platform like youtube just for your content and interactions. The curating clowns at youtube will never censor you again. This I promise. I am a PHP wizard with CSS, HTML and jQuery super powers. But enough about me, tell me exactly what you want to convey to the world <a target="_blank" style="text-decoration: none" href="mailto: jasoncastle@protonmail.com">here</a>. I answer emails weekly, daily and sometimes monthly Adieu..JC

</footer>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<?php require 'jquery.php' ?>
</html>