<?php
error_reporting(E_ERROR);
$url = "http://$_SERVER[HTTP_HOST]";
echo $url;
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
    <link href="<?php echo $url ?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link href="<?php echo $url ?>/assets/dist/css/carousel.css" rel="stylesheet">
</head>
<body>
<?php include 'stylesheet.php'; ?>
<header>
    <div id="toppity"></div>
    <nav class="navbar navbar-expand-md fixed-top navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand non-mobile" href="#">
            <img src="/assets/img/nomaskpalogo%20.png" width="225" alt="" loading="lazy">
        </a>
        <a class="navbar-brand mobile" href="#">
            <img src="/assets/img/nomaskpalogo%20.png" width="180" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        &nbsp;&nbsp;&nbsp;&nbsp;Featured Articles
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" data-toggle="collapse" data-target="#navbarSupportedContent" href="#fifthgrader">Do Masks Work?</a>
                        <a class="dropdown-item" data-toggle="collapse" data-target="#navbarSupportedContent" href="#test">What is The PCR Test?</a>
                        <a class="dropdown-item" data-toggle="collapse" data-target="#navbarSupportedContent" href="#numbers">Should I Be Afraid?</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" data-toggle="collapse" data-target="#navbarSupportedContent" href="#surgeons">What Do Surgeons Say?</a>
                        <a class="dropdown-item" data-toggle="collapse" data-target="#navbarSupportedContent" href="#children">Should Children Wear Masks?</a>
                        <a class="dropdown-item" data-toggle="collapse" data-target="#navbarSupportedContent" href="#quackery">Are Homemade Masks Effective?</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" data-toggle="collapse" data-target="#navbarSupportedContent" href="#badge">Can I Get An Exemption?</a>
                        <a class="dropdown-item" data-toggle="collapse" data-target="#navbarSupportedContent" href="#business">What About Businesses?</a>
                        <a class="dropdown-item" data-toggle="collapse" data-target="#navbarSupportedContent" href="#experiment">Are Masks Really Not Safe To Wear?</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" target="_blank" href="/timeline">The Covid-19 Timeline&nbsp;&nbsp;<img src="assets/img/external-link-duotone.svg" width="12"></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" data-toggle="collapse" data-target="#navbarSupportedContent" href="#toppity">Start Over At The Top</a>
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





    <div class="container marketing" id="top">

        <h2 class="featurette-heading" >N95 and Surgical Mask Protection Review: <span class="text-muted">Let's Look At The Facts!</span></h2><br>
        <br>
        <br>
        <p class="lead"><b><i>There is a pervasive myth that goes like this: We should all be wearing masks because mask wearing is beneficial. It isn't. Nothing could be further from the truth. Your mask doesn't help me and my mask doesn't help you.</i></b><br>I wrote this article after I investigated a scientific paper that examines how well the N95 mask works at protecting us from viruses and bacteria. It doesn't. </p>
        <br>
        <div class="mobile quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit.png"><img src="/assets/img/article1n95conclusionnobenefit.png" style="border: 3px solid; border-color: grey;" alt="" width="405"></a><br><br></div>
       <br>
        <p class="lead"> What I found in my investigation of this 2007 research experiment is that there is a big problem with the N95 mask that has been overlooked by our popular print and television press. This problem has been known to OSHA and the CDC for decades. The problem is this:  even the best N95 masks do not protect against virus and bacteria sized particles. Read the full scholarly article for yourself <a href="assets/docs/n95oshastudy2007.pdf" target="_blank" style="text-decoration: none">here</a></p><br>
        <div class="mobile quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit2.png"><img src="/assets/img/article1n95conclusionnobenefit2.png" style="border: 3px solid; border-color: grey;" alt="" width="405"></a><br><br></div>


        <p class="lead">As I examined this study, I saw that the N95 mask is pretty effective with stopping big particles that you might expect to see on a construction site which is why it is called a dust mask. I also read that it works well with protecting against breathing in bleach or ammonia vapors. But, I found that according to this scholarly article, N95 masks provide almost no protection against things the size of bacteria and viruses like the dreaded Coronavirus. See the quote I am referencing from the conclusion <a href="assets/img/article1n95conclusionnobenefit.png" target="_blank" style="text-decoration: none">here</a> </p>
        <br>
        <div class="mobile quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit3.png"><img src="/assets/img/article1n95conclusionnobenefit3.png" style="border: 3px solid; border-color: grey;" alt="" width="405"></a><br><br></div>

        <p class="lead">I was really shocked to learn that industrial hygienists and research scientists have known for a long time that virus and bacteria sized particles (that are 0.05 um - 0.2um in size) slip right through the N95 mask. This means the very best mask we have provides no protection at all.</p>
        <br>
        <div class="mobile quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit4.png"><img src="/assets/img/article1n95conclusionnobenefit4.png" style="border: 3px solid; border-color: grey;" alt="" width="405"></a><br><br></div>

        <p class="lead"> While this study was mostly focused on the N95, they also decided to weigh in on the non-effectiveness of surgical masks too. I read in this study that the surgical mask is 8-12 times worse than the N95. But, the N95 doesn't filter bacteria or viruses including the Coronavirus. With these facts in evidence, I think  that a better name for the study would be : "Evidence that N95 and Surgical Masks Do Not Filter Bacteria or Virus Sized Particles." </p>

        <br>
        <div class="mobile quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit5.png"><img src="/assets/img/article1n95conclusionnobenefit5.png" style="border: 3px solid; border-color: grey;" alt="" width="405"></a><br><br></div>
        <br>

        <!--                <p class="lead">Next, let's look at <a href="assets/docs/surgicalmaskefficacynaturemedicine.pdf" style="text-decoration: none" target="_blank"> a second scholarly article that covers a research experiment </a> that claims that surgical face masks are beneficial when worn by those who are infected with a virus and are symptomatic. This Nature Medicine article is cited everywhere as proof that surgical face masks provide some benefits.</p>-->
        <!--                <p class="lead">On closer observation of this research study, we have found that deceptive practices are used to hide the fact that they did not have enough results to determine anything conclusively. Instead of being honest and reporting the facts, they chose to hide their failures behind a cloak of clever scientific terminology.</p>-->
        <!--                <br>-->
        <!--                <div class="mobile quote"><img src="assets/img/article1n95conclusionnobenefit6.png" width="405"  style="border: 3px solid; border-color: grey;"><br><br></div>-->

        <!--                <p class="lead">This study does not show that masks prevent the transmission of disease. They never quite got that far. What their data shows is that they couldn't capture even one virus from the exhaled breath of an infected person on a carefully designed medium for catching aerosolized viral content. This study had sick participants breathing for 30 minutes onto a virus capturing medium (half masked and half unmasked) and they didn't capture a single virus.  </p>-->
        <!--                <p class="lead">We are speculating that they didn't capture even one virus from the exhaled breath of the infected participants. If they had found one, then they would have performed an electron micrograph and we would at a minimum have an image of the exhaled virus as proof of that discovery and capture. There are no micrograph images provided in this study.</p>-->
        <!--                <p class="lead"> This gross shortcoming lead them to reflect that, <blockquote class="lead"> <b><i>"The major limitation of our study was the large proportion of participants with undetectable viral shedding in exhaled breath for each of the viruses studied."</i></b></blockquote></p>-->
        <!---->
        <!--                <br>-->
        <!--                <div class="mobile quote"><img src="assets/img/article1n95conclusionnobenefit7.png" width="405"  style="border: 3px solid; border-color: grey;"><br><br></div>-->

        <!--                <p class="lead">They had sick people breathe for 30 minutes onto a medium designed to capture viral content and the majority of the participants had no detectable viral shedding from the exhaled breath. This goes beyond whether or not masks are useful and puts us face to face with a much bigger question. Do we understand how sickness is transmitted? It seems that even these dishonest scientists don't appear to have a clue what is going on in their own study.</p>-->
        <!--                <br>-->
        <!---->
        <!---->
        <!--                <p class="lead">At the beginning of the article, we reported that N95 masks can't stop virus and bacteria sized particles despite the fact that they stop smaller particles. Now, we are telling you that a study designed to test the efficacy of surgical masks has trouble capturing even a single virus from the exhaled breath of sick people. From these studies, it looks like the medical scientists don't know how to capture or filter even one single virus.</p>-->
        <!--                <p class="lead">Now, let's look at how they package it all up with lies, conjecture and obfuscation. In the second study, they did not find any viruses in the exhaled breath in either the control or the variable group. But they needed some help to make a convincing chart. So they used a couple statistical methods to create imaginary data.</p>-->
        <!---->
        <!--                <br>-->
        <!--                <div class="mobile quote"><img src="assets/img/article1n95conclusionnobenefit10.png" width="405"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!---->
        <!--                <p class="lead"> For this, they use a method called the <a href="https://en.wikipedia.org/wiki/Tobit_model" target="_blank" style="text-decoration: none"> Tobit Regression Model</a>. This model creates fictional data that can be used in the place of a zero result especially when the zero result would cloud the picture. There are a number of legitimate uses for this type of modeling in statistics and economics. However, claiming that the fictional data created by the Tobit Regression Model is actually the real data from the experiment is not a legitimate use of this model. But, that is exactly what they did here. </p>-->
        <!---->
        <!---->
        <!---->
        <!--                <p class="lead">In that same study, they list a reference to a two-sided <a href="https://en.wikipedia.org/wiki/Fisher%27s_exact_test" target="_blank" style="text-decoration: none"> Fisher's exact test</a>. The exact test is not really a test but another method for dealing with null result situations. It was invented to figure out what was poured first, the tea or the milk in an experiment where a woman believed she could tell the difference between tea if the milk was poured first and vice versa. I am not making that part up. See for yourself here on <a href="https://en.wikipedia.org/wiki/Fisher%27s_exact_test" target="_blank" style="text-decoration: none"> Wikipedia</a>.  Use of this so called "exact test" is another proof that they were engaged in conjuring imaginary results out of thin air instead of using the actual data from their experiment.</p>-->
        <!---->
        <!--                <br>-->
        <!--                <div class="mobile quote"><img src="assets/img/article1n95conclusionnobenefit8.png" width="405"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!---->
        <!--                <p class="lead">It looks like the only real data they were able to obtain was from throat and nasal swabs. Then they took that data and used a PCR test to confirm the evidence of a virus. But, the RT-PCR test ( the popular Covid-19 test) isn't a test for a virus but a method of amplifying genetic material. Therefore the PCR test cannot be used to exclusively confirm that the content from the swab is viral. We have an entire article about the PCR test <a style="text-decoration: none;" href="#test"> here</a>. </p>-->
        <!---->
        <!---->
        <!---->
        <!--                <p class="lead"> This Nature Medicine article was written to prove how effective surgical masks were at preventing sick people from spreading viral content. But, they were not able to detect viral shedding from anyone including those wearing a mask and those who were not. But all of the participants were sick and infected with a virus proven by a positive PCR result. How can they make any conclusions about mask efficacy in the absence of viral shedding? Why not instead conclude that masks did not help and that more research is necessary to understand the mechanism for disease transmission if it occurs at all.</p>-->
        <!---->
        <!--                <div class="mobile"><img src="assets/img/testimage5.png" width="153" height="207" style="border: 3px solid; border-color: grey;">&nbsp;&nbsp;<img src="assets/img/testimage6.png" width="153" height="207" style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!--                <p class="lead"> <b><b><i>A question about the efficacy of the PCR test would have been a nice honorable mention in the conclusion of this Nature Medicine article. This experiment did not prove anything because their sick, symptomatic, infected, PCR positive participants did not shed viruses. This is contrary to their assumptions and the opposite of the current understanding used by the medical authorities and the acquiescent governments to force masking on the entire population today.</i></b></b> </p>-->
        <!--                <p class="lead">Another significant blow to this experiment came in the form of this statement later in their discussion, <blockquote class="lead"> <b><i> " Another limitation is that we did not confirm the infectivity of coronavirus or rhinovirus detected in exhaled breath....we did not attempt to culture coronavirus or rhinovirus from the corresponding aerosol samples."</i></b></blockquote></p>-->
        <!--                <p class="lead">So let's summarize these points. Firstly, they could not detect the virus from the exhaled breath of infected people who were symptomatic. Even though, they had these sick people exhaling onto a medium designed to capture aerosolized viruses for 30 minutes at a time. They couldn't detect viral shedding from anyone in the control or the variable group (masked or unmasked). They hid these duplicated null results behind multiple statistical methods that aided in obscuring the facts. </p>-->
        <!---->
        <!--                <br>-->
        <!--                <div class="mobile quote"><img src="assets/img/article1n95conclusionnobenefit9.png" width="405"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!---->
        <!--                <p class="lead"> And secondly, because they couldn't detect any viral shedding or obtain even one virus from the exhaled breath of sick people, they weren't able to culture that non-existent viral material to determine if it could infect healthy cells. This means that they failed to prove that masks are effective. But more than that, they failed to prove that sick people exhale contagious viral content which is the reason for testing of the surgical masks in the first place.</p>-->
        <!--                <p class="lead">It seems that these viruses (if they exist at all) have a mind of their own. They aren't stopped or filtered by N95 masks, much less surgical or homemade masks. And, they are not easily captured by even the most clever aerosolized viral content traps. These emerging facts about the nature of viruses are cloaked and hidden in these studies. This is done by diverting attention to meaningless conjured results and authoritative statements that are in most cases, contrary to the facts.</p>-->
        <!---->
        <!--                <br>-->
        <!--                <div class="mobile"><a href="#surgeons" style="text-decoration: none"><img src="assets/img/surgeonnomaskjpg.jpg" width="405"  style="border: 3px solid; border-color: grey;"></a><br><br></div>-->
        <!---->
        <!--                <p class="lead">There are dozens of studies that show that wearing a mask has absolutely no positive effect on reducing infections or preventing the transmission of disease. We wrote <a href="#surgeons" style="text-decoration: none">an entire article here </a> about the on-going research by surgeons to determine if masks are effective. In that article, we revealed that some studies show that more post-op infections occur when surgeons and operating room staff wear masks. Yes, more infections are reported when surgeons where masks, not less.</p>-->
        <!---->
        <!--                <br>-->
        <!--                <div class="mobile quote"><img src="assets/img/nobenefit5.png" width="405"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!---->
        <!--                <p class="lead"><b><b><i>It is the public's poor understanding of the facts that has allowed universal masking to take root.</i></b></b> Here is an <a target="_blank" style="text-decoration: none" href="/assets/docs/www_rcreader_com_commentary_masks_dont_work_covid_a_review_o.pdf"> actual physicist </a> that says it would be really odd if masks did help given what we already know to be true about viruses.</p>-->
        <!--                <p class="lead"><b>To destroy the myth that masks are beneficial, you must seek truth from facts. It is all as clear as day. Masks are useless.</b> <a  target="_blank" style="text-decoration: none" href="/assets/docs/journal.pone.0029744.PDF">Here</a> , <a  target="_blank" style="text-decoration: none" href="/assets/docs/003335491012500206.pdf">Here</a> and <a  target="_blank" style="text-decoration: none" href="assets/docs/annrcse01509-0009.pdf">Here</a> are additional studies, we didn't even talk about. The N95 study is <a href="assets/docs/n95oshastudy2007.pdf" target="_blank" style="text-decoration: none"> here</a>.  The surgical mask study is <a href="assets/docs/surgicalmaskefficacynaturemedicine.pdf" target="_blank" style="text-decoration: none"> here</a>. </p>-->



        <div  class="row featurette" id="n95"  >
            <div class="col-md-7" >
                <h2 class="featurette-heading" >N95 and Surgical Mask Protection Review: <span class="text-muted">Let's Look At The Facts!</span></h2><br>
                <br>
                <br>
                <p class="lead"><b><i>There is a pervasive myth that goes like this: We should all be wearing masks because mask wearing is beneficial. It isn't. Nothing could be further from the truth. Your mask doesn't help me and my mask doesn't help you.</i></b><br>I wrote this article after I investigated a scientific paper that examines how well the N95 mask works at protecting us from viruses and bacteria. It doesn't. </p>
                <br>
                <div class="mobile quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit.png"><img src="/assets/img/article1n95conclusionnobenefit.png" style="border: 3px solid; border-color: grey;" alt="" width="405"></a><br><br></div>
                        
                <p class="lead"> What I found in my investigation of this 2007 research experiment is that there is a big problem with the N95 mask that has been overlooked by our popular print and television press. This problem has been known to OSHA and the CDC for decades. The problem is this:  even the best N95 masks do not protect against virus and bacteria sized particles. Read the full scholarly article for yourself <a href="assets/docs/n95oshastudy2007.pdf" target="_blank" style="text-decoration: none">here</a></p><br>
                <div class="mobile quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit2.png"><img src="/assets/img/article1n95conclusionnobenefit2.png" style="border: 3px solid; border-color: grey;" alt="" width="405"></a><br><br></div>


                <p class="lead">As I examined this study, I saw that the N95 mask is pretty effective with stopping big particles that you might expect to see on a construction site which is why it is called a dust mask. I also read that it works well with protecting against breathing in bleach or ammonia vapors. But, I found that according to this scholarly article, N95 masks provide almost no protection against things the size of bacteria and viruses like the dreaded Coronavirus. See the quote I am referencing from the conclusion <a href="assets/img/article1n95conclusionnobenefit.png" target="_blank" style="text-decoration: none">here</a> </p>
                <br>
                <div class="mobile quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit3.png"><img src="/assets/img/article1n95conclusionnobenefit3.png" style="border: 3px solid; border-color: grey;" alt="" width="405"></a><br><br></div>

                <p class="lead">I was really shocked to learn that industrial hygienists and research scientists have known for a long time that virus and bacteria sized particles (that are 0.05 um - 0.2um in size) slip right through the N95 mask. This means the very best mask we have provides no protection at all.</p>
                <br>
                <div class="mobile quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit4.png"><img src="/assets/img/article1n95conclusionnobenefit4.png" style="border: 3px solid; border-color: grey;" alt="" width="405"></a><br><br></div>

                <p class="lead"> While this study was mostly focused on the N95, they also decided to weigh in on the non-effectiveness of surgical masks too. I read in this study that the surgical mask is 8-12 times worse than the N95. But, the N95 doesn't filter bacteria or viruses including the Coronavirus. With these facts in evidence, I think  that a better name for the study would be : "Evidence that N95 and Surgical Masks Do Not Filter Bacteria or Virus Sized Particles." </p>

                <br>
                <div class="mobile quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit5.png"><img src="/assets/img/article1n95conclusionnobenefit5.png" style="border: 3px solid; border-color: grey;" alt="" width="405"></a><br><br></div>
                <br>

                <!--                <p class="lead">Next, let's look at <a href="assets/docs/surgicalmaskefficacynaturemedicine.pdf" style="text-decoration: none" target="_blank"> a second scholarly article that covers a research experiment </a> that claims that surgical face masks are beneficial when worn by those who are infected with a virus and are symptomatic. This Nature Medicine article is cited everywhere as proof that surgical face masks provide some benefits.</p>-->
                <!--                <p class="lead">On closer observation of this research study, we have found that deceptive practices are used to hide the fact that they did not have enough results to determine anything conclusively. Instead of being honest and reporting the facts, they chose to hide their failures behind a cloak of clever scientific terminology.</p>-->
                <!--                <br>-->
                <!--                <div class="mobile quote"><img src="assets/img/article1n95conclusionnobenefit6.png" width="405"  style="border: 3px solid; border-color: grey;"><br><br></div>-->

                <!--                <p class="lead">This study does not show that masks prevent the transmission of disease. They never quite got that far. What their data shows is that they couldn't capture even one virus from the exhaled breath of an infected person on a carefully designed medium for catching aerosolized viral content. This study had sick participants breathing for 30 minutes onto a virus capturing medium (half masked and half unmasked) and they didn't capture a single virus.  </p>-->
                <!--                <p class="lead">We are speculating that they didn't capture even one virus from the exhaled breath of the infected participants. If they had found one, then they would have performed an electron micrograph and we would at a minimum have an image of the exhaled virus as proof of that discovery and capture. There are no micrograph images provided in this study.</p>-->
                <!--                <p class="lead"> This gross shortcoming lead them to reflect that, <blockquote class="lead"> <b><i>"The major limitation of our study was the large proportion of participants with undetectable viral shedding in exhaled breath for each of the viruses studied."</i></b></blockquote></p>-->
                <!---->
                <!--                <br>-->
                <!--                <div class="mobile quote"><img src="assets/img/article1n95conclusionnobenefit7.png" width="405"  style="border: 3px solid; border-color: grey;"><br><br></div>-->

                <!--                <p class="lead">They had sick people breathe for 30 minutes onto a medium designed to capture viral content and the majority of the participants had no detectable viral shedding from the exhaled breath. This goes beyond whether or not masks are useful and puts us face to face with a much bigger question. Do we understand how sickness is transmitted? It seems that even these dishonest scientists don't appear to have a clue what is going on in their own study.</p>-->
                <!--                <br>-->
                <!---->
                <!---->
                <!--                <p class="lead">At the beginning of the article, we reported that N95 masks can't stop virus and bacteria sized particles despite the fact that they stop smaller particles. Now, we are telling you that a study designed to test the efficacy of surgical masks has trouble capturing even a single virus from the exhaled breath of sick people. From these studies, it looks like the medical scientists don't know how to capture or filter even one single virus.</p>-->
                <!--                <p class="lead">Now, let's look at how they package it all up with lies, conjecture and obfuscation. In the second study, they did not find any viruses in the exhaled breath in either the control or the variable group. But they needed some help to make a convincing chart. So they used a couple statistical methods to create imaginary data.</p>-->
                <!---->
                <!--                <br>-->
                <!--                <div class="mobile quote"><img src="assets/img/article1n95conclusionnobenefit10.png" width="405"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
                <!---->
                <!--                <p class="lead"> For this, they use a method called the <a href="https://en.wikipedia.org/wiki/Tobit_model" target="_blank" style="text-decoration: none"> Tobit Regression Model</a>. This model creates fictional data that can be used in the place of a zero result especially when the zero result would cloud the picture. There are a number of legitimate uses for this type of modeling in statistics and economics. However, claiming that the fictional data created by the Tobit Regression Model is actually the real data from the experiment is not a legitimate use of this model. But, that is exactly what they did here. </p>-->
                <!---->
                <!---->
                <!---->
                <!--                <p class="lead">In that same study, they list a reference to a two-sided <a href="https://en.wikipedia.org/wiki/Fisher%27s_exact_test" target="_blank" style="text-decoration: none"> Fisher's exact test</a>. The exact test is not really a test but another method for dealing with null result situations. It was invented to figure out what was poured first, the tea or the milk in an experiment where a woman believed she could tell the difference between tea if the milk was poured first and vice versa. I am not making that part up. See for yourself here on <a href="https://en.wikipedia.org/wiki/Fisher%27s_exact_test" target="_blank" style="text-decoration: none"> Wikipedia</a>.  Use of this so called "exact test" is another proof that they were engaged in conjuring imaginary results out of thin air instead of using the actual data from their experiment.</p>-->
                <!---->
                <!--                <br>-->
                <!--                <div class="mobile quote"><img src="assets/img/article1n95conclusionnobenefit8.png" width="405"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
                <!---->
                <!--                <p class="lead">It looks like the only real data they were able to obtain was from throat and nasal swabs. Then they took that data and used a PCR test to confirm the evidence of a virus. But, the RT-PCR test ( the popular Covid-19 test) isn't a test for a virus but a method of amplifying genetic material. Therefore the PCR test cannot be used to exclusively confirm that the content from the swab is viral. We have an entire article about the PCR test <a style="text-decoration: none;" href="#test"> here</a>. </p>-->
                <!---->
                <!---->
                <!---->
                <!--                <p class="lead"> This Nature Medicine article was written to prove how effective surgical masks were at preventing sick people from spreading viral content. But, they were not able to detect viral shedding from anyone including those wearing a mask and those who were not. But all of the participants were sick and infected with a virus proven by a positive PCR result. How can they make any conclusions about mask efficacy in the absence of viral shedding? Why not instead conclude that masks did not help and that more research is necessary to understand the mechanism for disease transmission if it occurs at all.</p>-->
                <!---->
                <!--                <div class="mobile"><img src="assets/img/testimage5.png" width="153" height="207" style="border: 3px solid; border-color: grey;">&nbsp;&nbsp;<img src="assets/img/testimage6.png" width="153" height="207" style="border: 3px solid; border-color: grey;"><br><br></div>-->
                <!--                <p class="lead"> <b><b><i>A question about the efficacy of the PCR test would have been a nice honorable mention in the conclusion of this Nature Medicine article. This experiment did not prove anything because their sick, symptomatic, infected, PCR positive participants did not shed viruses. This is contrary to their assumptions and the opposite of the current understanding used by the medical authorities and the acquiescent governments to force masking on the entire population today.</i></b></b> </p>-->
                <!--                <p class="lead">Another significant blow to this experiment came in the form of this statement later in their discussion, <blockquote class="lead"> <b><i> " Another limitation is that we did not confirm the infectivity of coronavirus or rhinovirus detected in exhaled breath....we did not attempt to culture coronavirus or rhinovirus from the corresponding aerosol samples."</i></b></blockquote></p>-->
                <!--                <p class="lead">So let's summarize these points. Firstly, they could not detect the virus from the exhaled breath of infected people who were symptomatic. Even though, they had these sick people exhaling onto a medium designed to capture aerosolized viruses for 30 minutes at a time. They couldn't detect viral shedding from anyone in the control or the variable group (masked or unmasked). They hid these duplicated null results behind multiple statistical methods that aided in obscuring the facts. </p>-->
                <!---->
                <!--                <br>-->
                <!--                <div class="mobile quote"><img src="assets/img/article1n95conclusionnobenefit9.png" width="405"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
                <!---->
                <!--                <p class="lead"> And secondly, because they couldn't detect any viral shedding or obtain even one virus from the exhaled breath of sick people, they weren't able to culture that non-existent viral material to determine if it could infect healthy cells. This means that they failed to prove that masks are effective. But more than that, they failed to prove that sick people exhale contagious viral content which is the reason for testing of the surgical masks in the first place.</p>-->
                <!--                <p class="lead">It seems that these viruses (if they exist at all) have a mind of their own. They aren't stopped or filtered by N95 masks, much less surgical or homemade masks. And, they are not easily captured by even the most clever aerosolized viral content traps. These emerging facts about the nature of viruses are cloaked and hidden in these studies. This is done by diverting attention to meaningless conjured results and authoritative statements that are in most cases, contrary to the facts.</p>-->
                <!---->
                <!--                <br>-->
                <!--                <div class="mobile"><a href="#surgeons" style="text-decoration: none"><img src="assets/img/surgeonnomaskjpg.jpg" width="405"  style="border: 3px solid; border-color: grey;"></a><br><br></div>-->
                <!---->
                <!--                <p class="lead">There are dozens of studies that show that wearing a mask has absolutely no positive effect on reducing infections or preventing the transmission of disease. We wrote <a href="#surgeons" style="text-decoration: none">an entire article here </a> about the on-going research by surgeons to determine if masks are effective. In that article, we revealed that some studies show that more post-op infections occur when surgeons and operating room staff wear masks. Yes, more infections are reported when surgeons where masks, not less.</p>-->
                <!---->
                <!--                <br>-->
                <!--                <div class="mobile quote"><img src="assets/img/nobenefit5.png" width="405"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
                <!---->
                <!--                <p class="lead"><b><b><i>It is the public's poor understanding of the facts that has allowed universal masking to take root.</i></b></b> Here is an <a target="_blank" style="text-decoration: none" href="/assets/docs/www_rcreader_com_commentary_masks_dont_work_covid_a_review_o.pdf"> actual physicist </a> that says it would be really odd if masks did help given what we already know to be true about viruses.</p>-->
                <!--                <p class="lead"><b>To destroy the myth that masks are beneficial, you must seek truth from facts. It is all as clear as day. Masks are useless.</b> <a  target="_blank" style="text-decoration: none" href="/assets/docs/journal.pone.0029744.PDF">Here</a> , <a  target="_blank" style="text-decoration: none" href="/assets/docs/003335491012500206.pdf">Here</a> and <a  target="_blank" style="text-decoration: none" href="assets/docs/annrcse01509-0009.pdf">Here</a> are additional studies, we didn't even talk about. The N95 study is <a href="assets/docs/n95oshastudy2007.pdf" target="_blank" style="text-decoration: none"> here</a>.  The surgical mask study is <a href="assets/docs/surgicalmaskefficacynaturemedicine.pdf" target="_blank" style="text-decoration: none"> here</a>. </p>-->


            </div>
            <div class="col-md-5 non-mobile">
                <div class="non-mobile" style="padding-bottom: 120px;"></div>
                <div class="quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit.png"><img src="/assets/img/article1n95conclusionnobenefit.png" style="border: 3px solid; border-color: grey;" alt="" width="500"></a></div>
                <br>
                <br>
                <div class="quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit2.png"><img src="/assets/img/article1n95conclusionnobenefit2.png" style="border: 3px solid; border-color: grey;" alt="" width="500"></a></div>
                <br>
                <br>
                <div class="quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit3.png"><img src="/assets/img/article1n95conclusionnobenefit3.png" style="border: 3px solid; border-color: grey;" alt="" width="500"></a></div>
                <br>
                <br>
                <div class="quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit4.png"><img src="/assets/img/article1n95conclusionnobenefit4.png" style="border: 3px solid; border-color: grey;" alt="" width="500"></a></div>
                <br>
                <br>
                <div class="quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit5.png"><img src="/assets/img/article1n95conclusionnobenefit5.png" style="border: 3px solid; border-color: grey;" alt="" width="500"></a></div>

                <!--                <div class="quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit6.png"><img src="/assets/img/article1n95conclusionnobenefit6.png" style="border: 3px solid; border-color: grey;" alt="" width="500"></a></div>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <div class="quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit7.png"><img src="/assets/img/article1n95conclusionnobenefit7.png" style="border: 3px solid; border-color: grey;" alt="" width="500"></a></div>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <div class="quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit8.png"><img src="/assets/img/article1n95conclusionnobenefit8.png" style="border: 3px solid; border-color: grey;" alt="" width="500"></a></div>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <div class="quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit9.png"><img src="/assets/img/article1n95conclusionnobenefit9.png" style="border: 3px solid; border-color: grey;" alt="" width="500"></a></div>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <br>-->
                <!--                <div class="quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit10.png"><img src="/assets/img/article1n95conclusionnobenefit10.png" style="border: 3px solid; border-color: grey;" alt="" width="500"></a></div>-->


            </div>
        </div>

        <hr class="featurette-divider" id="surgical_masks">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Title <span class="text-muted">Subtitle .</span></h2><br>
                <p class="lead">Paragraph 1</p>
                <br>
                <div class="mobile quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit6.png"><img src="/assets/img/article1n95conclusionnobenefit6.png" style="border: 3px solid; border-color: grey;" alt="" width="306"></a><br><br></div>


                <p class="lead" id="testpart2">Paragraph 2</p><br>
                <div class="mobile"><img src="assets/koreanstudy/img/Anthony-Fauci.jpg" width="306"  style="border: 3px solid; border-color: grey;"><br><br></div>
                <p class="lead"> Robert Gallo and Tony Faucci, yes that one, declared the existence of HIV via a press conference without a single shred of evidence much to the dissent and dismay of those concerned that the scientific method had not been utilized and that the RT-qPCR method cannot prove that a virus exists. They misrepresented the results of the RT-qPCR method to obtain continued funding for HIV/AIDS research.</p><br>
                <p class="lead"> The term used very often during the AIDS pandemic was viral load. That phrase is a synonym for the result of the RT-PCR method. It is the exact same scam that was used almost 4 decades ago to fool the world. There is no vaccine for HIV and yet magically HIV/AIDS has all but disappeared because it only exists as a result of the misuse of the RT-qPCR method. </p><br>
                <div class="mobile quote"><img src="assets/img/testimage1.png" width="405"  style="border: 3px solid; border-color: grey;"><br><br></div>
                <p class="lead" id="testpart3">The RT-qPCR method takes a bit of you from a swab and mixes it with a number of things to get the results that they want for any given test. It mixes your swabbed material with enzymes called DNA Polymerase that merges your genetic material with the foreign pharmaceutical material for amplification or cloning. The cloning is done so that enough material is created to be sufficient to present a readable result to compare to a <i>known</i> profile. That is why a better word to describe this method than a test is to call it a simulation. </p><br>
                <p class="lead"> They are simulating a larger sample of you through the process of PCR. But, once this mixing has been done, <b>it is impossible to determine what is the foreign material and what is from the swab of you. It is the wrong way around if you are <b><u>trying to isolate a contagion.</u></b></b> That is unless there is a defined purification process to render out the foreign material and isolate the viral content. There isn't. They would then need to prove the viral content is from you and not from the foreign material. That is something they do not do. </p><br>
                <div class="mobile quote"><img src="assets/img/testimage2.png" width="405"  style="border: 3px solid; border-color: grey;"><br><br></div>
                <p class="lead" id="testpart4">Because the Rt-qPCR method involves severe adulteration and alteration of the sample, it remains impossible to determine how much of the result is actually from you, if any, and how much is from the foreign material that was added. <br></p><p class="lead">This conundrum is called by the phrase: amplification bias by the medical bio-tech industry. But don't worry, their special mixture of foreign material has been carefully engineered to reduce amplification bias. How did they do that? Well, it appears to be a matter of linguistics. Basically, they just say it's not a problem.</p><br>
                <p class="lead"> <b><b>The RT-qPCR method was used incorrectly by certain scientists with a financial interest in the early 80s.</b></b> This caused much of research medical science to take a wrong turn and become pseudoscience. They were attempting to prove something via claims but without any evidence and without the use of the scientific method, Koch's Postulates or Rivers' Postulates.</p><br>
                <p class="lead"> The mixture of ingredients that is added to your material for testing is highly suspect as well. In some labs they have reported only positive Covid-19 tests defying the statistical improbability of such an event occurring. The companies creating the mixture of enzymes and foreign material used in the RT-qPCR method for the Covid-19 test have a vested financial interest in continuing the endless confusion. The more we are forced to test the more profit they rack up. The components of the mixture have also never been independently verified.</p><br>
                <p class="lead"> But, I thought the scientific method and peer review process was about scientists working hard to disprove one another so that the result is always as true a fact as possible. Science is trusted as the ultimate source of facts because of the laborious process of overcoming objections to prove something to be actual. While that theory seems to be very honorable, the approach that modern medicine takes is one of strict faith in their methods where dissenting opinions are quickly marginalized to maintain the consensus narrative.</p><br>
                <div class="mobile quote"><img src="assets/img/testimage3.png" width="405"  style="border: 3px solid; border-color: grey;"><br><br></div>
                <p class="lead" id="testpart5"> <b><b>These several facts make the likelihood of corruption all but a certainty when it comes to the Covid-19 test.</b></b> This is not the first time this scam was used. The entire population has been fooled more than once by the same cunning propaganda. They are not trying to convince the general public of their scam. They have a much easier job to do. They have to convince a handful of scientists whose careers and salaries are based on ensuring the test is used broadly.</p><br>
                <p class="lead"> If you are still reading and you understand what you are reading then you are among a very small part of the population that has any understanding of what goes on in the laboratory testing world vis-à-vis the RT-qPCR method. These things that I am discussing here are meant to convince the scientists that the test is accurate and that any objections or unscientific conditions have been handled already. Then the scientists tell the doctors and the doctors tell us that it is an accurate test and we can trust it. However, none of that is true. It is an amplification method and not a test that identifies the presence of a virus. That is why the Nobel laureate that invented the method became one of the loudest opponents to its use during th HIV/AIDS scare. And, as then, so now. </p><br>
                <div class="mobile quote"><img src="assets/img/testimage4.png" width="432"  style="border: 3px solid; border-color: grey;"><br><br></div>
                <p class="lead"> <b><b>Because the entire Covid-19 testing regime is a scam, doctors and medical professionals are required to follow careful instructions that negate the test results entirely.</b></b> If you read the citations presented you will see that doctors and patients are warned that a positive test may be false even though it is said to be a definitive proof of Coronavirus RNA present in the sample. If the test is negative then it also doesn't prove anything and the patient may still be infected. With all these false positive and false negative results, how can anyone claim that the global dataset of test results is accurate. Because the test is not accurate, it means that the more the test is performed the more corrupted and useless the dataset becomes and the more confused we all are about what the results actually mean.</p><br>
                <div class="mobile quote"><img src="assets/img/testimage7.png" width="432"  style="border: 3px solid; border-color: grey;"><br><br></div>
                <div class="mobile quote"><img src="assets/img/testimage8.png" width="432"  style="border: 3px solid; border-color: grey;"><br><br></div>
                <p class="lead"> <b><b>This entire pandemic appears to be about selling tests while compounding ignorance and confusion about what the results actually mean.</b></b> Insurance companies are being charged $6000 to $8000 per test. Drive thru operations and clinics offering the RT-qPCR test for payment directly by the patient are offering this service for $249 to $850 though it isn't clear what is included with that and some people end up paying more. Take those numbers and multiply that by the number of tests that your chosen politician or news presenter says have been performed and you just might begin to see the greed angle of this current pandemic.</p><br>
                <div class="mobile quote"><img src="assets/img/covidpricing.png" width="432"  style="border: 3px solid; border-color: grey;"><br><br></div>
                <p class="lead"> I relied on numerous sources to compose this article. The CDC guidance on the Covid-19 Test for Healthcare Providers is <a style="text-decoration: none" target="_blank" href="assets/docs/Factsheet-for-Healthcare-Providers-2019-nCoV.pdf"> here</a>. It is cited multiple times. Next is some of the deeper scientific information on amplification bias <a style="text-decoration: none" target="_blank" href="assets/docs/amplificationbias1.pdf"> here</a> and <a style="text-decoration: none" target="_blank" href="assets/docs/Roche%20Sequencing%20Solutions.pdf"> here</a>. The information on Kary Mullis' dissenting points of view is <a style="text-decoration: none" target="_blank" href="assets/docs/Was%20the%20COVID-19%20Test%20Meant%20to%20Detect%20a%20Virus_%20-%20UncoverDC.pdf"> here</a>. The discussion about the correlation between Covid-19 and The HIV/AIDS scare is <a style="text-decoration: none" target="_blank" href="assets/docs/Shedding%20Light%20on%20the%20Dishonorable%20Record%20of%20Dr.%20Fauci%20–%20A%20Real%20Mengele%20–%20Fort%20Russ.pdf"> here</a>. The information on Covid-19 testing pricing is <a style="text-decoration: none" target="_blank" href="assets/docs/covidtestcost.pdf"> here</a>.  Finally, the Washington Post Story about Covid-19 testing as schools return is <a style="text-decoration: none" target="_blank" href="assets/docs/CDC_%20Colleges%20should%20not%20give%20covid-19%20tests%20to%20everybody%20returning%20to%20campus%20-%20The%20Washington%20Post.pdf"> here</a>.</p>

            </div>
            <div class="col-md-5 order-md-1 non-mobile">
                <div class="non-mobile" style="padding-bottom: 120px;"></div>
                <div class="quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit6.png"><img src="/assets/img/article1n95conclusionnobenefit6.png" style="border: 3px solid; border-color: grey;" alt="" width="500"></a></div>
                <br>
                <br>
                <div class="quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit7.png"><img src="/assets/img/article1n95conclusionnobenefit7.png" style="border: 3px solid; border-color: grey;" alt="" width="500"></a></div>
                <br>
                <br>
                <div class="quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit8.png"><img src="/assets/img/article1n95conclusionnobenefit8.png" style="border: 3px solid; border-color: grey;" alt="" width="500"></a></div>
                <br>
                <br>
                <div class="quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit9.png"><img src="/assets/img/article1n95conclusionnobenefit9.png" style="border: 3px solid; border-color: grey;" alt="" width="500"></a></div>
                <br>
                <br>
                <div class="quote"><a  target="_blank" style="text-decoration: none" href="/assets/img/article1n95conclusionnobenefit10.png"><img src="/assets/img/article1n95conclusionnobenefit10.png" style="border: 3px solid; border-color: grey;" alt="" width="500"></a></div>
            </div>
        </div>


        <!--        <hr class="featurette-divider" id="test">-->
        <!---->
        <!--        <div class="row featurette">-->
        <!--            <div class="col-md-7 order-md-2">-->
        <!--                <h2 class="featurette-heading">Misapplication of The RT-qPCR Method: <span class="text-muted">A Case Study In Pseudoscience and Greed.</span></h2><br>-->
        <!--                <div class="mobile"><img src="assets/img/testimage5.png" width="153" height="207" style="border: 3px solid; border-color: grey;">&nbsp;&nbsp;<img src="assets/img/testimage6.png" width="153" height="207" style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!--                <p class="lead" id="testpart1"> Actually, The RT-qPCR method is not a test. It cannot prove that you have a sickness. Let's get that out of the way first. It gives false positives when someone has the flu, the common cold, leprosy, and even pregnancy can cause a false positive. Why, because it is a method of amplifying genetic material not a test for the presence of a virus. </p> <br> <p class="lead">The RT-qPCR is a method to multiply a very small amount of nucleic acids. The process uses enzymes and foreign material to allow any fragments of RNA present in a sample to merge and form complete RNA chains for replication.  It is then compared against reporter against a <i>known</i> molecule or gene to determine if the sample being tested is identical.</p> <br> <p class="lead"> This process is called Reverse Trasciptase Quantitative Polymerase Chain Reaction. It was invented by Kary Mullis. <b><b>Mullis, a Nobel Laureate, became an outspoken dissenting voice against the use of his RT-qPCR method for virus detection.</b> He claimed that it was a misapplication of the results to say that his method proved the presence of the HIV virus.</b> </p><br>-->
        <!--                <div class="mobile"><img src="assets/img/Kary_Mullis.jpg" width="207"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!---->
        <!--                <p class="lead" id="testpart2">This RT-qPCR that Mullis invented was used 36 years ago to scare the entire world to death about HIV and AIDS. Yes, the inventor of the method claimed it was being misapplied and could not indicate the existence of any virus including HIV. But, we never heard that side of the story in the media because his opinion was largely suppressed and marginalized.</p><br>-->
        <!--                <div class="mobile"><img src="assets/koreanstudy/img/Anthony-Fauci.jpg" width="306"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!--                <p class="lead"> Robert Gallo and Tony Faucci, yes that one, declared the existence of HIV via a press conference without a single shred of evidence much to the dissent and dismay of those concerned that the scientific method had not been utilized and that the RT-qPCR method cannot prove that a virus exists. They misrepresented the results of the RT-qPCR method to obtain continued funding for HIV/AIDS research.</p><br>-->
        <!--                <p class="lead"> The term used very often during the AIDS pandemic was viral load. That phrase is a synonym for the result of the RT-PCR method. It is the exact same scam that was used almost 4 decades ago to fool the world. There is no vaccine for HIV and yet magically HIV/AIDS has all but disappeared because it only exists as a result of the misuse of the RT-qPCR method. </p><br>-->
        <!--                <div class="mobile quote"><img src="assets/img/testimage1.png" width="405"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!--                <p class="lead" id="testpart3">The RT-qPCR method takes a bit of you from a swab and mixes it with a number of things to get the results that they want for any given test. It mixes your swabbed material with enzymes called DNA Polymerase that merges your genetic material with the foreign pharmaceutical material for amplification or cloning. The cloning is done so that enough material is created to be sufficient to present a readable result to compare to a <i>known</i> profile. That is why a better word to describe this method than a test is to call it a simulation. </p><br>-->
        <!--                <p class="lead"> They are simulating a larger sample of you through the process of PCR. But, once this mixing has been done, <b>it is impossible to determine what is the foreign material and what is from the swab of you. It is the wrong way around if you are <b><u>trying to isolate a contagion.</u></b></b> That is unless there is a defined purification process to render out the foreign material and isolate the viral content. There isn't. They would then need to prove the viral content is from you and not from the foreign material. That is something they do not do. </p><br>-->
        <!--                <div class="mobile quote"><img src="assets/img/testimage2.png" width="405"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!--                <p class="lead" id="testpart4">Because the Rt-qPCR method involves severe adulteration and alteration of the sample, it remains impossible to determine how much of the result is actually from you, if any, and how much is from the foreign material that was added. <br></p><p class="lead">This conundrum is called by the phrase: amplification bias by the medical bio-tech industry. But don't worry, their special mixture of foreign material has been carefully engineered to reduce amplification bias. How did they do that? Well, it appears to be a matter of linguistics. Basically, they just say it's not a problem.</p><br>-->
        <!--                <p class="lead"> <b><b>The RT-qPCR method was used incorrectly by certain scientists with a financial interest in the early 80s.</b></b> This caused much of research medical science to take a wrong turn and become pseudoscience. They were attempting to prove something via claims but without any evidence and without the use of the scientific method, Koch's Postulates or Rivers' Postulates.</p><br>-->
        <!--                <p class="lead"> The mixture of ingredients that is added to your material for testing is highly suspect as well. In some labs they have reported only positive Covid-19 tests defying the statistical improbability of such an event occurring. The companies creating the mixture of enzymes and foreign material used in the RT-qPCR method for the Covid-19 test have a vested financial interest in continuing the endless confusion. The more we are forced to test the more profit they rack up. The components of the mixture have also never been independently verified.</p><br>-->
        <!--                <p class="lead"> But, I thought the scientific method and peer review process was about scientists working hard to disprove one another so that the result is always as true a fact as possible. Science is trusted as the ultimate source of facts because of the laborious process of overcoming objections to prove something to be actual. While that theory seems to be very honorable, the approach that modern medicine takes is one of strict faith in their methods where dissenting opinions are quickly marginalized to maintain the consensus narrative.</p><br>-->
        <!--                <div class="mobile quote"><img src="assets/img/testimage3.png" width="405"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!--                <p class="lead" id="testpart5"> <b><b>These several facts make the likelihood of corruption all but a certainty when it comes to the Covid-19 test.</b></b> This is not the first time this scam was used. The entire population has been fooled more than once by the same cunning propaganda. They are not trying to convince the general public of their scam. They have a much easier job to do. They have to convince a handful of scientists whose careers and salaries are based on ensuring the test is used broadly.</p><br>-->
        <!--                <p class="lead"> If you are still reading and you understand what you are reading then you are among a very small part of the population that has any understanding of what goes on in the laboratory testing world vis-à-vis the RT-qPCR method. These things that I am discussing here are meant to convince the scientists that the test is accurate and that any objections or unscientific conditions have been handled already. Then the scientists tell the doctors and the doctors tell us that it is an accurate test and we can trust it. However, none of that is true. It is an amplification method and not a test that identifies the presence of a virus. That is why the Nobel laureate that invented the method became one of the loudest opponents to its use during th HIV/AIDS scare. And, as then, so now. </p><br>-->
        <!--                <div class="mobile quote"><img src="assets/img/testimage4.png" width="432"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!--                <p class="lead"> <b><b>Because the entire Covid-19 testing regime is a scam, doctors and medical professionals are required to follow careful instructions that negate the test results entirely.</b></b> If you read the citations presented you will see that doctors and patients are warned that a positive test may be false even though it is said to be a definitive proof of Coronavirus RNA present in the sample. If the test is negative then it also doesn't prove anything and the patient may still be infected. With all these false positive and false negative results, how can anyone claim that the global dataset of test results is accurate. Because the test is not accurate, it means that the more the test is performed the more corrupted and useless the dataset becomes and the more confused we all are about what the results actually mean.</p><br>-->
        <!--                <div class="mobile quote"><img src="assets/img/testimage7.png" width="432"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!--                <div class="mobile quote"><img src="assets/img/testimage8.png" width="432"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!--                <p class="lead"> <b><b>This entire pandemic appears to be about selling tests while compounding ignorance and confusion about what the results actually mean.</b></b> Insurance companies are being charged $6000 to $8000 per test. Drive thru operations and clinics offering the RT-qPCR test for payment directly by the patient are offering this service for $249 to $850 though it isn't clear what is included with that and some people end up paying more. Take those numbers and multiply that by the number of tests that your chosen politician or news presenter says have been performed and you just might begin to see the greed angle of this current pandemic.</p><br>-->
        <!--                <div class="mobile quote"><img src="assets/img/covidpricing.png" width="432"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!--                <p class="lead"> I relied on numerous sources to compose this article. The CDC guidance on the Covid-19 Test for Healthcare Providers is <a style="text-decoration: none" target="_blank" href="assets/docs/Factsheet-for-Healthcare-Providers-2019-nCoV.pdf"> here</a>. It is cited multiple times. Next is some of the deeper scientific information on amplification bias <a style="text-decoration: none" target="_blank" href="assets/docs/amplificationbias1.pdf"> here</a> and <a style="text-decoration: none" target="_blank" href="assets/docs/Roche%20Sequencing%20Solutions.pdf"> here</a>. The information on Kary Mullis' dissenting points of view is <a style="text-decoration: none" target="_blank" href="assets/docs/Was%20the%20COVID-19%20Test%20Meant%20to%20Detect%20a%20Virus_%20-%20UncoverDC.pdf"> here</a>. The discussion about the correlation between Covid-19 and The HIV/AIDS scare is <a style="text-decoration: none" target="_blank" href="assets/docs/Shedding%20Light%20on%20the%20Dishonorable%20Record%20of%20Dr.%20Fauci%20–%20A%20Real%20Mengele%20–%20Fort%20Russ.pdf"> here</a>. The information on Covid-19 testing pricing is <a style="text-decoration: none" target="_blank" href="assets/docs/covidtestcost.pdf"> here</a>.  Finally, the Washington Post Story about Covid-19 testing as schools return is <a style="text-decoration: none" target="_blank" href="assets/docs/CDC_%20Colleges%20should%20not%20give%20covid-19%20tests%20to%20everybody%20returning%20to%20campus%20-%20The%20Washington%20Post.pdf"> here</a>.</p>-->
        <!---->
        <!--            </div>-->
        <!--            <div class="col-md-5 order-md-1 non-mobile">-->
        <!--                <div class="non-mobile" style="padding-bottom: 120px;"></div>-->
        <!--                <img src="assets/img/Kary_Mullis.jpg" width="370"  style="border: 3px solid; border-color: grey;">-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <img src="assets/img/testimage5.png" width="370" style="border: 3px solid; border-color: grey;">-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <img src="assets/img/testimage6.png" width="370" style="border: 3px solid; border-color: grey;">-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <img src="assets/koreanstudy/img/Anthony-Fauci.jpg" width="370" style="border: 3px solid; border-color: grey;">-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <div class="quote"><img src="assets/img/testimage1.png" width="460" style="border: 3px solid; border-color: grey;"></div>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <div class="quote"><img src="assets/img/testimage2.png" width="460" style="border: 3px solid; border-color: grey;"></div>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <div class="quote"><img src="assets/img/testimage3.png" width="460" style="border: 3px solid; border-color: grey;"></div>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <div class="quote"><img src="assets/img/testimage4.png" width="460" style="border: 3px solid; border-color: grey;"></div>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <div class="quote"><img src="assets/img/testimage7.png" width="460" style="border: 3px solid; border-color: grey;"></div>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <div class="quote"><img src="assets/img/testimage8.png" width="460" style="border: 3px solid; border-color: grey;"></div>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <div class="quote"><img src="assets/img/covidpricing.png" width="460" style="border: 3px solid; border-color: grey;"></div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!---->
        <!--        <hr class="featurette-divider" id="numbers">-->
        <!---->
        <!--        <div class="row featurette"  >-->
        <!--            <div class="col-md-7">-->
        <!--                <h2 class="featurette-heading">A Sober Look At The Death Numbers : <span class="text-muted">Yes They Really Did Ruin Our World And Scare Us To Death For Nothing.</span></h2><br>-->
        <!--                <div class="mobile"><a style="text-decoration: none" href="https://jordan-henderson.pixels.com/featured/sanity-her-son-and-the-credulous-jordan-henderson.html" target="_blank"><img src="assets/img/sanity-her-son-and-the-credulous-jordan-henderson.jpg" width="350" style="border: 3px solid; border-color: grey;"></a><br><br></div>-->
        <!--                <p class="lead"><b><i>It is time for a sober, sane, breath of unmasked, unafraid air. The medical fascists and their counterparts within governance and media have manipulated the number of cases, infections and deaths to fool us into yielding willingly as they have destroyed our world right in front of our eyes. It is time that we use their numbers to correct the errors and end the bewitchment. There is nothing to be afraid of and I am going to prove it.</i></b></p><br><p class="lead"> While other parts of this website focus of the totality of the medical fascism at work today. Here, we are going to laser focus on the numbers from PA alone and will add some broad strokes at the end to complete the idea. <br><br>-->
        <!--                    The official number for the amount of deaths related to SARS-COV-2 is reported as being from results of the RT-qPCR test which the inventor, Karey Mullis, claims cannot prove the existence of a virus. <a style="text-decoration: none" target="_blank" href="#test">See my article on the RT-qPCR method here</a>.  Because of the problems with the PCR test, all of the diagnoses were based on symptoms, not test results, per the CDC guidance. If you had a fever, cough or pneumonia like symptoms you were considered Covid-19 positive despite positive or negative results from the actual test. Any death due to pneumonia was labeled a Covid-19 death as a result. See the actual CDC documents given to healthcare providers as a diagnostic tool <a style="text-decoration: none" target="_blank" href="assets/docs/Factsheet-for-Healthcare-Providers-2019-nCoV.pdf"> here</a>.</p><br>-->
        <!--                <div class="mobile"><a href="/assets/img/deathchart.png" target="_blank" style="text-decoration: none"><img src="assets/img/deathchart.png" width="350" style="border: 3px solid; border-color: grey;"></a><br><br></div>-->
        <!--                <p class="lead"> But, if you believe that the death numbers are accurate despite the inaccuracy of the method used for calculation, then you should accept the percentages those numbers create as a result of simple easy math.<br><br> For example, the population of Pennsylvania is roughly 12,800,000 souls according to the US Census and easily verifiable <a style="text-decoration: none" href="/assets/docs/www_census_gov_quickfacts_PA.pdf" target="_blank"> here</a>. <b><b>In addition the total number of deaths attributed to SARS-COV-2 is around 8100.</b></b> This number can be verified as of the writing of this story <a style="text-decoration: none" href="/assets/img/deathspabigpicture.png" target="_blank"> here</a>. </p>-->
        <!--                <div class="mobile"><a href="/assets/img/totaldeathpercentage.png" target="_blank" style="text-decoration: none"><img src="assets/img/totaldeathpercentage.png" width="350" style="border: 3px solid; border-color: grey;"></a><br><br></div>-->
        <!--                <p class="lead"> If you just have those two numbers and agree that they are correct, the population and the number of deaths then you can generate a percentage. Let's call it the percentage of those who died vs. those who are still living. It seems like that would be a percentage that matters to the living or at least I would hope. <br><br>When you divide the number of deaths by the population total, you get the total death rate percentage. It is a very small number seen in image three on the side or above. <b>The total death rate percentage is <b><u>6.328 ten thousandths of 1 percent.</u></b></b> That percentage is insignificant to a population of almost 13 million and would never create a scare.  But, the math gets even more surreal.</p>-->
        <!--                <div class="mobile"><br><br>-->
        <!--                <a href="/assets/img/under60deathpercentage.png" target="_blank" style="text-decoration: none"><img src="assets/img/under60deathpercentage.png" width="350" style="border: 3px solid; border-color: grey;"></a><br><br></div>-->
        <!--                <p class="lead">Now let us look at the death rate percentage for those under 60 years old. Remember, the first percentage is the total death rate percentage which includes everyone young and old. But this next number will be the percentage of residents of PA under the age of 60 that have died in this pandemic. <br><br>This number is especially hard to say. The closer the number get to zero, the harder it is to articulate and envision in the mind. <br><br>In the second calculator image, you will see a number so small that  it is easiest to say it as <b><b>less than 1/2 of <u>1 millionth of 1 percent.</u></b></b> That means that <b><u>almost no one under sixty years of age that lives in Pennsylvania has died from the pandemic</u></b>. <br><br>Here are some staggering statistics: The number of deaths for those over 90 years of age is 2100 deaths. That's means, 25 percent of all the deaths were in people over 90 years old. Another 30 percent were between 80-90 years old. Which means that almost 60% of all deaths allegedly attributed to this current pandemic were over the age of 80. The life expectancy in this state is 78.5 years. More than 60% of deaths were beyond that age. Over 70% of deaths occurred in nursing homes.</p> <br>-->
        <!--                <div class="mobile quote"><a href="/assets/img/deathrategraph1988.png" target="_blank" style="text-decoration: none"><img src="/assets/img/deathrategraph1988.png" width="350" style="border: 3px solid; border-color: grey;"></a><br><br></div>-->
        <!--                <div class="mobile quote"><a href="/assets/img/deathrategraph1.png" target="_blank" style="text-decoration: none"><img src="/assets/img/deathrategraph1.png" width="350" style="border: 3px solid; border-color: grey;"></a><br><br></div>-->
        <!---->
        <!--                <p class="lead">Now, set the cases, fear, propaganda and rhetoric aside for a moment. What if I was to tell you that the death rate this year for the entire US with a pandemic is lower than the death rate of 1988. <a href="/assets/docs/U.S.%20Death%20Rate%201950-2020%20_%20MacroTrends.pdf" target="_blank" style="text-decoration: none"> See it for yourself here</a> or look at the graphs on the side or above. Were they having a pandemic in 1988 worse than this one? <b>Or, have they simply weaponized fear, confusion and erroneous statistics to fool us all into being scared of our own shadows.</b><br><br> Do you think with so few actual deaths even when accepting their numbers and methodology that the governor and his health secretary had the legal justification to destroy our world? Further, do you think they are ever going to return that broken world back to us willingly?</p><div class="mobile quote"><br><br>-->
        <!---->
        <!--                <a href="/assets/docs/Preliminary%20Estimates%20of%20Mortality%20and%20Years%20of%20Life%20Lost%20Associated%20with%20the%202009%20A_H1N1%20Pandemic%20in%20the%20US%20and%20Comparison%20with%20Past%20Influenza%20Seasons.pdf" target="_blank" style="text-decoration: none"><img src="/assets/img/seasonaldeathrate.png" width="430" style="border: 3px solid; border-color: grey;"></a><br><br></div>-->
        <!---->
        <!--                <p class="lead"> <b>There is a seasonality of respiratory related deaths that happens predictably every year.</b> See the sixth image at the left or above and <a href="/assets/docs/Preliminary%20Estimates%20of%20Mortality%20and%20Years%20of%20Life%20Lost%20Associated%20with%20the%202009%20A_H1N1%20Pandemic%20in%20the%20US%20and%20Comparison%20with%20Past%20Influenza%20Seasons.pdf" target="_blank" style="text-decoration: none"> read the NIH study here </a>. The death rate is unchanged this year despite a pandemic. How is that possible? Again, <a href="/assets/docs/U.S.%20Death%20Rate%201950-2020%20_%20MacroTrends.pdf" target="_blank" style="text-decoration: none"> see it for yourself</a>. </p><div class="mobile quote"><br><br>-->
        <!--                <a href="/assets/docs/virustransmissiondependentonhumidity.pdf" target="_blank" style="text-decoration: none"><img src="/assets/img/fluvirusisseasonal.png" width="430" style="border: 3px solid; border-color: grey;"></a><br><br></div>-->
        <!--                <p class="lead"> We all know that the powers that be will likely double-down this next flu season with more fear, propaganda, misinformation and senseless <i>lockdowns</i>. The best thing that we all can do is to free ourselves from fear by seeking truth from facts. Become a sense-maker and start making sense of the senseless going on around you.</p><div class="mobile"><br><br>-->
        <!--                <a style="text-decoration: none" href="https://jordan-henderson.pixels.com/featured/sanity-her-son-and-the-credulous-jordan-henderson.html" target="_blank"><img src="assets/img/sanity-her-son-and-the-credulous-jordan-henderson.jpg" width="350" style="border: 3px solid; border-color: grey;"></a><br><br></div>-->
        <!--                <p class="lead"> <b>Look at the actual numbers and determine for yourself if you should be <b>living in fear</b>. Then find your <b>action point</b> by <b>sharing</b> this information with as many people as possible and by <b>living <i>visibly</i> <u>unafraid</u> in a world lost in fear.</b></b> The artist, Jordan Henderson, has graciously allowed me to display his epic and unparalleled work of art with this article. It is appropriately named : Sanity, Her Son, And The Credulous. This portrait of a mom and son refusing to partake in the epidemic of fear is a fountain of water to my soul. May it inspire you too. You can support Jordan and purchase Sanity, Her Son and The Credulous <a style="text-decoration: none" href="https://jordan-henderson.pixels.com/featured/sanity-her-son-and-the-credulous-jordan-henderson.html" target="_blank"> here </a>.</p>-->
        <!--            </div>-->
        <!--            <div class="col-md-5 non-mobile">-->
        <!--                <div class="non-mobile" style="padding-bottom: 120px;"></div>-->
        <!--                <a style="text-decoration: none" href="https://jordan-henderson.pixels.com/featured/sanity-her-son-and-the-credulous-jordan-henderson.html" target="_blank"><img src="assets/img/sanity-her-son-and-the-credulous-jordan-henderson.jpg" width="370" style="border: 3px solid; border-color: grey;"></a>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <img src="assets/img/deathchart.png" width="370" style="border: 3px solid; border-color: grey;">-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <img src="assets/img/totaldeathpercentage.png" width="370" style="border: 3px solid; border-color: grey;">-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <img src="assets/img/under60deathpercentage.png" width="370" style="border: 3px solid; border-color: grey;">-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <div class="quote"><a href="/assets/img/deathrategraph1988.png" target="_blank" style="text-decoration: none"><img src="/assets/img/deathrategraph1988.png" width="432" style="border: 3px solid; border-color: grey;"></a></div>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <div class="quote"><a href="/assets/img/deathrategraph1.png" target="_blank" style="text-decoration: none"><img src="/assets/img/deathrategraph1.png" width="432" style="border: 3px solid; border-color: grey;"></a></div>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <div class="quote"><a href="/assets/docs/Preliminary%20Estimates%20of%20Mortality%20and%20Years%20of%20Life%20Lost%20Associated%20with%20the%202009%20A_H1N1%20Pandemic%20in%20the%20US%20and%20Comparison%20with%20Past%20Influenza%20Seasons.pdf" target="_blank" style="text-decoration: none"><img src="/assets/img/seasonaldeathrate.png" width="432" style="border: 3px solid; border-color: grey;"></a></div>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <div class="quote"><a href="/assets/docs/virustransmissiondependentonhumidity.pdf" target="_blank" style="text-decoration: none"><img src="/assets/img/fluvirusisseasonal.png" width="432" style="border: 3px solid; border-color: grey;"></a></div>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <a style="text-decoration: none" href="https://jordan-henderson.pixels.com/featured/sanity-her-son-and-the-credulous-jordan-henderson.html" target="_blank"><img src="assets/img/sanity-her-son-and-the-credulous-jordan-henderson.jpg" width="370" style="border: 3px solid; border-color: grey;"></a>-->
        <!---->
        <!--            </div>-->
        <!--        </div>-->
        <!---->
        <!--        <hr class="featurette-divider" id="surgeons">-->
        <!---->
        <!--        <div  class="row featurette"  >-->
        <!--            <div class="col-md-7 order-md-2" >-->
        <!--                <h2 class="featurette-heading" >Yes, Surgeons Have Proven <span class="text-muted">That You Shouldn't Even Wear A Mask In The Operating Room!</span></h2><br><br>-->
        <!--                <div class="mobile"><a href="/assets/img/surgeonnomaskjpg.jpg" target="_blank" style="text-decoration: none"><img src="assets/img/surgeonnomaskjpg.jpg" width="350" style="border: 3px solid; border-color: grey;"></a><br><br></div>-->
        <!--                <p class="lead"> Are you seriously trying to tell me that if a poor soul has his body sliced open for repair, that a surgeon shouldn't wear a mask while breathing into his exposed guts and viscera?</p>-->
        <!--                <p class="lead"> Well, actually, yes.</p><br>-->
        <!--                <div class="mobile quote"><br><a target="_blank" style="text-decoration: none" href="assets/docs/annrcse01509-0009.pdf"><img src="/assets/img/nobenefit5.png" style="border: 3px solid; border-color: grey;" alt="" width="432"></a><br><br></div>-->
        <!---->
        <!--                <p class="lead">The scientific data from multiple research studies including the one cited here involving 3000 surgeries <b><b>indicates that mask wearing has <u>no effect.</u></b></b> This study indicates that not wearing a mask in the operating theatre may reduce the number of post operative infections and be more beneficial than wearing a mask.</p><br>-->
        <!--                <div class="mobile quote"><a href="/assets/docs/gorantunevallsurgeonmaskdonthelp1991.pdf" target="_blank" style="text-decoration: none"><img src="assets/img/surgeonsdontwearmasks.png" width="432" style="border: 3px solid; border-color: grey;"></a><br><br></div>-->
        <!--                <p class="lead">Yes, I am saying that <b><b>wearing a mask even in a surgical setting could be harmful</b></b> to the patient. Or, to put it another way, Wearing a mask in the surgical theatre appears to contribute somehow to more post operative infections.</p>-->
        <!--                <p class="lead">These facts may cause serious cognitive dissonance. They certainly did for us. To get a better understanding of why masks don't work take a look at our easy explanation. In an era of confusion sometimes the simplest answer is best. <b><b>We explain why masks make things worse right <a style="text-decoration: none;" href="#fifthgrader">here</a></b></b>.</p>-->
        <!--                <p class="lead">Before rejecting this idea as is so easy to do, why not consider it for just a minute more. <b>These studies show that wearing a mask appears to increase the total number of post-op infections. Why not read the studies for yourself.</b></p>-->
        <!--                <div class="mobile quote"><a href="/assets/docs/gorantunevallsurgeonmaskdonthelp1991.pdf" target="_blank" style="text-decoration: none"><img src="assets/img/table2surgeonsnoinfections.png" width="432" style="border: 3px solid; border-color: grey;"></a><br><br></div>-->
        <!--                <p class="lead"> See how dumbfounded the researchers are when trying create cogent conclusions that match the data observed. All the while, they are grasping at anything to continue the consensus opinion that masking is beneficial in the clinical setting.</p>-->
        <!--                <div class="mobile quote"><img src="/assets/img/followthecashcowmask.png" style="border: 3px solid; border-color: grey;" alt="" width="432"><br><br></div>-->
        <!--                <p class="lead"> <b><b>Why are our medical authorities still trying to convince us that masking is good and helpful despite overwhelming evidence to the contrary?</b></b> <b>Read This Entire Study <a style="text-decoration: none" href="/assets/docs/gorantunevallsurgeonmaskdonthelp1991.pdf" target="_blank">Here</a>. Here's <a style="text-decoration: none" href="/assets/docs/annrcse01509-0009.pdf" target="_blank">another one, too </a>.</b></p>-->
        <!--            </div>-->
        <!--            <div class="col-md-5 order-md-1 non-mobile">-->
        <!--                <div class="non-mobile" style="padding-bottom: 120px;"></div>-->
        <!--                <img src="/assets/img/surgeonnomaskjpg.jpg" width="432" style="border: 3px solid; border-color: grey;" alt="">-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <div class="quote"><a target="_blank" style="text-decoration: none" href="assets/docs/annrcse01509-0009.pdf"><img src="/assets/img/nobenefit5.png" style="border: 3px solid; border-color: grey;" alt="" width="432"></a></div>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <div class="quote"><a href="/assets/docs/gorantunevallsurgeonmaskdonthelp1991.pdf" target="_blank" style="text-decoration: none"><img src="/assets/img/surgeonsdontwearmasks.png" width="432" style="border: 3px solid; border-color: grey;" alt=""></a></div>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <div class="quote"><a href="/assets/docs/gorantunevallsurgeonmaskdonthelp1991.pdf" target="_blank" style="text-decoration: none"><img src="assets/img/table2surgeonsnoinfections.png" width="432" style="border: 3px solid; border-color: grey;"></a></div>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <div class="quote"><img src="/assets/img/followthecashcowmask.png" style="border: 3px solid; border-color: grey;" alt="" width="432"></div>-->
        <!--            </div>-->
        <!--        </div>-->

        <hr class="featurette-divider" id="children">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading"> Forcing Children To Wear A Mask <span class="text-muted">Causes Significantly More Pain Than Adults Experience</span></h2><br>
                <div class="mobile"><img src="assets/img/childforcedtowearamask.jpg" width="200"  style="border: 3px solid; border-color: grey;"><br><br></div>
                <p class="lead"><b><b>Yes, forcing children to wear a mask has been reported as painful by the children in multiple research studies.</b> This is an often brushed over brutalization of children that will have epic consequences for decades to come. Nothing in this new, insane, normal is more detrimental and more unconscionable, than forcing children against their will and against their own conscience to cover their faces with a mask.</b></p><br>
                <div class="mobile quote"><img src="assets/img/childrenpain1.png" width="300"  style="border: 3px solid; border-color: grey;"><br><br></div>

                <p class="lead">Let's take a look at how these research studies chronicle the use of masks on children and report that <b><b>children are more likely to experience serious symptoms of pain and distress</b></b>. The authors of the top cited study gleefully generalize the fact that half of the child aged participants claimed distress, pain or shortness of breath from wearing a mask. Half of the participant children claim that the mask is painful! Isn't that worth reporting?</p><br>
                <div class="mobile quote"><img src="assets/img/childrenpain2.png" width="300"  style="border: 3px solid; border-color: grey;"><br><br></div>

                <p class="lead"> In a similar study, it was observed that <b><b>75% of participants experienced discomfort</b></b> enough to report it during the study. In that second study, you find almost an identical summary that<b><b> children complain more frequently of pain when wearing a mask.</b></b> Read the entire text of both of these studies <a style="text-decoration: none" target="_blank" href="/assets/docs/1471-2334-12-26.pdf">here</a> and <a style="text-decoration: none" target="_blank" href="/assets/docs/journal.pone.0013998.PDF">here </a> The first study claims in its conclusion, the third citation, that <a style="text-decoration: none" target="_blank" href="assets/img/tolerable.png">masks are tolerable</a> which denies the fact that the masks were not tolerable in 38% of its participants including 50% of children and was said to cause children and adults to experience pain, shortness of breath among other problems.</p><br>
                <div class="mobile quote"><img src="assets/img/tolerable.png" width="300"  style="border: 3px solid; border-color: grey;"><br><br></div>

                <p class="lead"> This is the opposite of tolerable and the opposite of scientific. Science means knowing. We know from this study that masks cause children pain. <b><b>Mask wearing is not tolerable.</b></b> That is the only thing that could be sanely concluded without further citation or analysis. Masks are not effective at preventing transmission of disease. <b>See our easy explanation of why masks don't work and how they can makes things worse <a style="text-decoration: none;" href="#fifthgrader">here</a></b>.</p>
            </div>
            <div class="col-md-5 non-mobile">
                <div class="non-mobile" style="padding-bottom: 120px;"></div>
                <img src="assets/img/childforcedtowearamask.jpg" width="500" style="border: 3px solid; border-color: grey;">
                <br>
                <br>
                <div class="quote"><img src="assets/img/childrenpain1.png" width="500" style="border: 3px solid; border-color: grey;"></div>
                <br>
                <br>
                <div class="quote"><img src="assets/img/childrenpain2.png" width="500" style="border: 3px solid; border-color: grey;"></div>
                <br>
                <br>
                <div class="quote"><img src="assets/img/tolerable.png" width="500" style="border: 3px solid; border-color: grey;"></div>


            </div>
        </div>

        <!--        <hr class="featurette-divider" id="quackery">-->
        <!---->
        <!--        <div class="row featurette">-->
        <!--            <div class="col-md-7 order-md-2">-->
        <!--                <h2 class="featurette-heading">Sadism is The New Scientific Method: <span class="text-muted">Participant is physically distressed while photographed during experiment.</span></h2><br>-->
        <!--                <div class="mobile quote"><img src="assets/img/distressedwoman1.png" width="306"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!--                <p class="lead">This published research experiment is a perfect example of the <b>death of sense-making within the scientific and academic elite.</b> With the SARS-COV-2 situation, researchers are citing this study as evidence of homemade mask efficacy which makes this study all the more dangerous because it's findings do not prove that infection rate or transmission of disease is reduced.</p><p class="lead"> In this study, the researchers are trying to show that there are benefits to wearing a homemade mask with a cumbersome stocking on top of it. These pictures show how an eager participant was turned into someone in fear for her life and who clearly became a victim of this insane experiment. </p>-->
        <!--                <div class="mobile quote"><img src="assets/img/distressedwoman.png" width="306"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!--                <p class="lead">Look at image b and compare it to image a. In image b, her muscles and veins are tight, her eyes are drooping and she shows distinct signs of distress, pain and fear in her expressions. This misguided experiment wants to show that wearing a mask and a stocking on top of it may reduce the total number of particles in the masked face area but fails at doing that miserably because of its poor design.</p>-->
        <!--                <p class="lead"> First, <b><b>they couldn't be bothered to do these tests for more than a minute.</b></b> See The top citation. They only did each test for one minute at a time. </p>-->
        <!--                <div class="mobile quote"><img src="assets/img/minutelongtests.png" width="432"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!---->
        <!--                <p class="lead">In the chart labeled Table 1 in the study, <b><b>some masks are only tested once</b></b>. With so few recorded minutes of data on a mask being <b><b>tested with equipment that hasn't been calibrated</b></b>, they are able to definitively tell us that homemade masks work. <b>Are you kidding me?</b></p>-->
        <!--                <p class="lead">Oh yes, see the fourth image and second citation, followed by the image of the machines, proving that <b><b>neither machine gets the same reading for the particle count of the air in the room.</b></b> So, which machine is correct? Or, does it even matter? </p><p class="lead"> The word : inter-calibration is scientific jargon for : <i><b>these machines don't have the same readings but we can do simple math and find the difference despite the fact that we have no clue what the accurate reading is.</b></i> How can they trust these machines to tell them the correct amount of particles in a very important controlled experiment if <b><b>the machines cannot agree on the actual correct number of particles in the room.</b></b> </p>-->
        <!--                <div class="mobile"><img src="assets/img/calibration.png" width="432"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!---->
        <!--                <p class="lead"> Meanwhile, Numerous studies in clinical environments have proven over and over again <a target="_blank" style="text-decoration: none" href="/assets/docs/japanstudyhealthcareworkersnomaskbenefit.pdf">that the practice of wearing masks does not prevent or reduce infection rates</a>. In a couple studies focused on mask wearing in surgical settings, the wearing of a mask appears <a target="_blank" style="text-decoration: none" href="/assets/docs/annrcse01509-0009.pdf">to increase the infection rate</a>. Here is another example of <a target="_blank" style="text-decoration: none" href="https://link.springer.com/article/10.1007/BF01658736">more infections recorded when wearing the mask in a surgical setting </a>.</p>-->
        <!--                <p class="lead"> Back to the current study, I am curious as to the state of the participant's health during this bizarre ritualistic double masking. What is her pulse, cognitive function and emotional state? What is the oxygen and carbon dioxide levels within the masked area? What is her blood oxygen saturation? Could she complete a simple cognitive ability test in the same way as she did before putting on the ridiculous costume? </p>-->
        <!--                <div class="mobile"><img src="assets/img/calibrationimage.png" width="432"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!--                <p class="lead">  No wonder they only did these tests for a minute at a time. These questions would lead honest researchers to determine what is the most important question. <b><b><i>Is this insane ritual causing measurable physiological harm to the participant?</i></b></b> If it is, then all of the perceived particle reduction benefits are completely negated. Why,.. you ask? Because she can't breathe and is in distress. </p>-->
        <!--                <div class="mobile quote"><img src="assets/img/30percenteffective.png" width="432"  style="border: 3px solid; border-color: grey;"><br><br></div>-->
        <!--                <p class="lead">  The conclusions show that the lose fitting mask even with a stocking covering the face too may only be 45% effective (30% + 15 %) in their controlled setting at reducing particulate matter in the masked area for about a minute. Though, that is only when you negate the fact that she exhales particles too and those pesky exhaled particles must be subtracted.</p><p class="lead"> <b><b> Would you be willing to be tortured like the woman in the images for just 30-45% effectiveness in a controlled environment less the particles that you exhale directly?</b></b> Most would say no to that if they were given the choice and the chance as it sounds insane. <b>This entire study is <a target="_blank" style="text-decoration: none" href="/assets/docs/2020.04.17.20069567v2.full.pdf"> here </a>. </b> </p>-->
        <!--            </div>-->
        <!--            <div class="col-md-5 order-md-1 non-mobile">-->
        <!--                <div class="non-mobile" style="padding-bottom: 120px;"></div>-->
        <!--                <img src="assets/img/distressedwoman1.png" width="370" style="border: 3px solid; border-color: grey;">-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <img src="assets/img/distressedwoman.png" width="370" style="border: 3px solid; border-color: grey;">-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <div class="quote"><img src="assets/img/minutelongtests.png" width="460" height="200" style="border: 3px solid; border-color: grey;"></div>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <div class="quote"><img src="assets/img/calibration.png" width="460" height="200" style="border: 3px solid; border-color: grey;"></div>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <img src="assets/img/calibrationimage.png" width="370" height="200" style="border: 3px solid; border-color: grey;">-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <div class="quote"><img src="assets/img/30percenteffective.png" width="460" height="200" style="border: 3px solid; border-color: grey;"></div>-->
        <!--            </div>-->
        <!--        </div>-->

        <hr class="featurette-divider" id="research">

        <div  class="row featurette"  >
            <div class="col-md-7" >
                <h2 class="featurette-heading" >A Perfect Pandemic <span class="text-muted">Has Been Sought By Research Scientists For Decades To Force Us All To Wear Masks!</span></h2><b></b><br>
                <div class="mobile quote"><a target="_blank" style="text-decoration: none" href="/assets/docs/003335491012500206.pdf"><img src="/assets/img/nobenefit6.png" style="border: 3px solid; border-color: grey;" alt="" width="400"></a><br><br></div>
                <p class="lead">Why? To force masking and social distancing on the population against their will and against all the scientific data in their studies. If you think that scientific researchers want to ensure that the public is healthy and safe then you have missed the point. It is clear that they would prefer to omit from their conclusions any relevant facts and force us into bizarre superstitious rituals that do not foster public health vis-à-vis mask wearing and social distancing. </p>
                <div class="mobile quote">  <a target="_blank" style="text-decoration: none" href="/assets/docs/003335491012500206.pdf"><img src="/assets/img/nobenefit7.png" style="border: 3px solid; border-color: grey;" alt="" width="400"></a><br><br></div>
                <p class="lead"><b><b>Many published studies have eerily predicted in their conclusions that no one would accept wearing a mask or social distancing without a constant military-style threat of a dangerous looming pandemic.</b></b> Yes that is right, they have been planning today for decades. This study cited and imaged is from 10 years ago. </p>
                <div class="mobile quote"><a target="_blank" style="text-decoration: none" href="/assets/docs/003335491012500206.pdf"><img src="/assets/img/nobenefit8.png" style="border: 3px solid; border-color: grey;" alt="" width="400"></a><br><br></div>
                <p class="lead">But.... most studies, including this one cited, state that mask wearing <b><b>has almost no effect</b></b> and that they cannot even get the participants to wear the masks because of tolerance issues. This is what they call : <a id="poorcompliance" style="text-decoration: none" href="/assets/img/poorcompliance.png" target="_blank">poor compliance.</a> How can they possibly conclude that mask wearing is promising when the subjects of the study did not adhere to the protocol?  Where is the data that proves masks wearing is promising? It doesn't exist. Their data shows that there were no differences in the two groups. Read This Entire Study <a style="text-decoration: none" href="/assets/docs/003335491012500206.pdf" target="_blank">Here</a>.</p>
            </div>
            <div class="col-md-5 non-mobile">
                <div class="non-mobile" style="padding-bottom: 120px;"></div>
                <div class="quote"><a target="_blank" style="text-decoration: none" href="/assets/docs/003335491012500206.pdf"><img src="/assets/img/nobenefit6.png" style="border: 3px solid; border-color: grey;" alt="" width="500"></a></div>
                <br>
                <br>
                <br>
                <div class="quote"><a target="_blank" style="text-decoration: none" href="/assets/docs/003335491012500206.pdf"><img src="/assets/img/nobenefit7.png" style="border: 3px solid; border-color: grey;" alt="" width="500"></a></div>
                <br>
                <br>
                <br>
                <div class="quote"><a target="_blank" style="text-decoration: none" href="/assets/docs/003335491012500206.pdf"><img src="/assets/img/nobenefit8.png" style="border: 3px solid; border-color: grey;" alt="" width="500"></a></div>

            </div>
        </div>

        <hr class="featurette-divider" id="badge">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading" id="legal"> Masking Order Medical Exception Badge <span class="text-muted">A Unique, Beautiful & Informative Statement Without Saying A Single Word </span></h2><br>
                <div class="mobile"><a target="_blank" style="text-decoration: none" href="/assets/img/MASKEXCEPTIONFRONT.png"><img class="quote" src="/assets/img/MASKEXCEPTIONFRONT.png" style="border: 3px solid; border-color: grey;" alt="" width="200"></a>&nbsp;&nbsp;<a target="_blank" style="text-decoration: none" href="/assets/img/MASKEXCEPTIONBACK.png"><img class="quote" src="/assets/img/MASKEXCEPTIONBACK.png" style="border: 3px solid; border-color: grey;" alt="" width="190"></a><br><br></div>
                <p class="lead">Firstly, let's get the legal stuff out of the way. This website is not engaged in dispensing legal or medical advice. The author is not a lawyer, medical doctor, scholar, business consultant or a yoga teacher. The products and image downloads offered here are for informational and entertainment purposes only. Use at your own risk. To Access This Site You Must Agree To Our Legal Disclaimer and Downloads Notice. See Our Full Legal <a style="text-decoration: none" href="#" class="disclaimer">Disclaimer</a> Here. See Our <a style="text-decoration: none" href="#" class="downloads">Downloads Notice</a> Here.
                    Under section 3a of the <a href="assets/docs/20200701-SOH-Universal-Face-Coverings-Order.pdf" target="_blank" style="text-decoration: none">current PA universal masking order</a>, you are allowed and entitled to be excepted from the requirement to wear a mask at all times while in public if wearing a mask is not conducive with <a href="assets/img/section3aandb.png" target="_blank" style="text-decoration: none">a medical or mental health condition or disability that you have.</a> Under section 3b of that same order, it says that <a href="assets/img/section3aandb.png" target="_blank" style="text-decoration: none"> <b>you do not need to provide proof of a medical exception</b></a>. This includes the fact that you shouldn't need to wear a badge or a sign explaining it either. But we have found that those who might be angry that you are not wearing a mask in a store may be inclined to leave you alone if they are properly and quietly informed that you have a medical condition allowed as an exception. That is why we decided to begin offering this amazing product to give you the boost of confidence you need when going to the store. Print your own two-sided badge<a target="_blank" style="text-decoration: none" href="/assets/img/maskexceptionbadgeprintout.pdf"> here </a> for free by clicking on the link. Print, laminate and share too. If you want a professionally printed version, email us at the bottom and we'll put you in touch with IDCreator. Btw, this website is loaded with great articles and research data on why masks are not beneficial. <a style="text-decoration: none" href="#top"> Go back to the top and check things out by clicking here</a> </p>
            </div>
            <div class="col-md-5 non-mobile">
                <div class="non-mobile" style="padding-bottom: 120px;"></div>
                <a target="_blank" style="text-decoration: none" href="/assets/img/MASKEXCEPTIONFRONT.png"><img src="/assets/img/MASKEXCEPTIONFRONT.png" style="border: 3px solid; border-color: grey;" alt="" width="500"></a>


            </div>
        </div>

        <hr class="featurette-divider" id="business">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">A Sign of Sanity <span class="text-muted">Of Peace And Goodwill To All Who Patronize Your Business, Masked or Not</span></h2><br>
                <div class="mobile"><a target="_blank" style="text-decoration: none" href="/assets/img/MEDICALEXCEPTIONSIGN.png"><img src="/assets/img/MEDICALEXCEPTIONSIGN.png" style="border: 3px solid; border-color: grey;" alt="" width="400"></a><br><br></div>
                <p class="lead">To Access This Site You Must Agree To Our Legal Disclaimer and Downloads Notice. See Our Full Legal <a style="text-decoration: none" href="#" class="disclaimer">Disclaimer</a> Here. See Our <a style="text-decoration: none" href="#" class="downloads">Downloads Notice</a> Here.  In section 3a of the <a href="assets/docs/20200701-SOH-Universal-Face-Coverings-Order.pdf" target="_blank" style="text-decoration: none">current PA universal masking order</a>. Your patrons may qualify to be in public without wearing a mask including in your store. The news media has been silent about this legal right of exception and some mask wearers  have been seen confronting or being violent towards non-mask wearers. As a result, very few businesses and individuals know that the universal masking order has exceptions for medical conditions and disabilities. Help your patrons be informed and make sure you don't alienate anyone due to their medical condition or disability. <a href="/assets/img/MEDICALEXCEPTIONSIGN.png" style="text-decoration: none" target="_blank">Download and print your sign today</a>. This sign is specific to PA.</p>
            </div>
            <div class="col-md-5 order-md-1 non-mobile">
                <div class="non-mobile" style="padding-bottom: 120px;"></div>
                <a target="_blank" style="text-decoration: none" href="/assets/img/MEDICALEXCEPTIONSIGN.png"><img src="/assets/img/MEDICALEXCEPTIONSIGN.png" style="border: 3px solid; border-color: grey;" alt="" width="441"></a>

            </div>
        </div>

        <!--        <hr class="featurette-divider" id="experiment">-->
        <!---->
        <!--        <div class="row featurette">-->
        <!--            <div class="col-md-7">-->
        <!--                <h2 class="featurette-heading">Is Mask Wearing Safe? <span class="text-muted">We have designed an experiment to determine that in three ways.</span></h2>-->
        <!--                <p class="lead">We are sharing our methodology for the design of the experiment because we want to solicit others to do similar. </p>-->
        <!--                <p class="lead">Firstly, we want to determine if the mask wearer is experiencing reduced or limited access to atmosopheric oxygen while wearing a mask for short and long periods of time. While oxygen is very abundant in the atmosophere, we want to determine if breathing through a mask reduces access to that atmosopheric oxygen. We want to answer the question: is the mask creating a significant enough impedance that it lowers the concentration of oxygen within the masked area of the face available for the mask wearer to breathe. OSHA has determined that for safety we must have access to a minimum quantity of oxygen in confined spaces (19.5%). </p>-->
        <!--                <p class="lead">We want to determine if access to fresh atmospheric oxygen is restricted and to what degree that restriction occurs within the masked area of the face during both short and long periods of mask wearing. We want to monitor the changes in oxygen access if present and compare that to the overall state of emotional well being that the mask wearer is experiencing.</p>-->
        <!--                <p class="lead"> Large portions of the population claim distress and trouble breathing while wearing a mask. We want to determine if those feelings of distress can be directly correlated to specific changes in the availability of oxygen to breathe in the masked area of the face.</p>-->
        <!--                <p class="lead">Secondly, we want to determine if the mask wearer's blood oxygen saturation, pulse and blood pressure are affected while mask wearing occurs. We want to determine if changes are present while the mask wearer is at rest and during mild to rigorous activity. These will be done in both short and long periods.</p>-->
        <!--                <p class="lead"> Thirdly, we want to determine if the mask wearer's cognition is altered during short and long periods of mask wearing. We want to determine if prolonged mask wearing has a detrimental effect on cognition. This will be facilitated by the usage of a yet to be designed timed test of simple intelligence and cognition questions modeled very closely to the WAIS-IV (2008) for adults. and WISC-V for children. We want to determine if the mask wearer experiences changes in the four areas that these tests score. </p><p class="lead"> Accumulating all of the data from these experiments will allow us to create a model of explanation that may correlate changes in intelligence and cognition with the vital signs, access to oxygen within the masked area of the face and the level of emotional distress that is experienced by the mask wearing participant. These measurements and correlations if observed may allow us to qualitatively answer the question posed in the opening : Is mask wearing safe?  </p> <p class="lead">A final note, we want the full design of this experiment to be very easily observable, testable, repeatable, and falsifiable through accurate experimentation. We reject entirely falsifications based on assumption, conjecture, derivations, and appeals to listen to scientific, medical or government authorities. This experiment is done for all of humankind as it seems we have lost our way. We must return to real science and real sense-making if we are ever going to survive. Maybe this experiment will help get us back on track. </p> <p class="lead">  Btw, this website is loaded with great articles and research data on whether or not masks are beneficial and healthy. <a style="text-decoration: none" href="#top"> Go back to the top and check things out by clicking here</a> </p>-->
        <!--            </div>-->
        <!--            <div class="col-md-5">-->
        <!--                <div class="non-mobile" style="padding-bottom: 120px;"></div>-->
        <!--                <img src="/assets/img/oxygendetector.jpg" style="border: 3px solid; border-color: grey;" alt="" width="500">-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <img src="/assets/img/pulseoximeter.jpg" style="border: 3px solid; border-color: grey;" alt="" width="500">-->
        <!--            </div>-->
        <!--        </div>-->

        <hr class="featurette-divider">




        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">

        <p><i>"I fight medical fascists not because I am going to win but because they are medical fascists."</i> .... Jason Castle <br><br>The Content On This Site Is The Painstaking and Reclusive Work of Me, Jason Castle. You must fully accept, understand and agree to My Legal <a style="text-decoration: none" href="#" class="disclaimer">Disclaimer</a>. If you disagree please <a style="text-decoration: none" href="https://youtu.be/hY7m5jjJ9mM?t=22">click here</a> to be returned to an <a style="text-decoration: none" href="https://youtu.be/hY7m5jjJ9mM?t=22"> Instructive Cat Video Broadcast</a> already in progress with my sincerest Adieu, Adieu. You Can <a style="text-decoration: none;" href="#top">Start Over</a> too. To Order Badges, Or Communicate With Me You Can Email Me : <a target="_blank" style="text-decoration: none" href="mailto: jasoncastle@protonmail.com">Here</a>. <br><br><br> <i>(Jason's sales plug ---- insert here--shh)</i>  If you find this website to be magical and amazing then consider hiring me to build you a full stack website or web application, an encrypted email or text server, a database, or an analog social media platform like youtube just for your content and interactions. The curating clowns at youtube will never censor you again. This I promise. I am a PHP wizard with CSS, HTML and jQuery super powers. But enough about me, tell me exactly what you want to convey to the world <a target="_blank" style="text-decoration: none" href="mailto: jasoncastle@protonmail.com">here</a>. I answer emails weekly, daily and sometimes monthly Adieu..JC

    </footer>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
<script src="/assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="index.js"></script>
