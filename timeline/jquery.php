<?php
//
//require 'data.php';

?>



<script>

    <?php
    foreach ($data as $array){
?>
    $('#openlink<?php echo $array['id']; ?>').click(function (e) {
        e.preventDefault();
        $('#iframe<?php echo $array['id']; ?>').toggle();
        $('#closelink<?php echo $array['id']; ?>').toggle();
        $('#links<?php echo $array['id']; ?>').toggle();
    })
    $('#closelink<?php echo $array['id']; ?>').click(function (e) {
        e.preventDefault();
        $('#iframe<?php echo $array['id']; ?>').toggle();
        $('#closelink<?php echo $array['id']; ?>').toggle();
        $('#links<?php echo $array['id']; ?>').toggle();
        $('html, body').animate({
            scrollTop: $('#section<?php echo $array['id']; ?>').offset().top
        }, 400);
    })
    $('#readmore<?php echo $array['id']; ?>').click(function () {

        $('#readmore<?php echo $array['id']; ?>_blk').toggle();
        $('#readless<?php echo $array['id']; ?>_blk').toggle();
        $('#readmore<?php echo $array['id']; ?>_text').toggle();

    })
    $('#readless<?php echo $array['id']; ?>').click(function () {

        $('#readmore<?php echo $array['id']; ?>_blk').toggle();
        $('#readless<?php echo $array['id']; ?>_blk').toggle();
        $('#readmore<?php echo $array['id']; ?>_text').toggle();
        $('#quotestext<?php echo $array['id']; ?>').hide();
        $('#closequotes<?php echo $array['id']; ?>').hide();
        $('#showquotes<?php echo $array['id']; ?>').show();
        $('#commentarytext<?php echo $array['id']; ?>').hide();
        $('#closecommentary<?php echo $array['id']; ?>').hide();
        $('#showcommentary<?php echo $array['id']; ?>').show();
        $('html, body').animate({
            scrollTop: $('#section<?php echo $array['id']; ?>').offset().top
        }, 400);


    })
    $('#showquotes<?php echo $array['id']; ?>').click(function () {

        $('#quotestext<?php echo $array['id']; ?>').toggle();
        $('#closequotes<?php echo $array['id']; ?>').toggle();
        $('#showquotes<?php echo $array['id']; ?>').toggle();

    })
    $('#closequotes<?php echo $array['id']; ?>').click(function () {

        $('#quotestext<?php echo $array['id']; ?>').toggle();
        $('#closequotes<?php echo $array['id']; ?>').toggle();
        $('#showquotes<?php echo $array['id']; ?>').toggle();
        $('html, body').animate({
            scrollTop: $('#section<?php echo $array['id']; ?>').offset().top
        }, 400);

    })
    $('#showcommentary<?php echo $array['id']; ?>').click(function () {

        $('#commentarytext<?php echo $array['id']; ?>').toggle();
        $('#closecommentary<?php echo $array['id']; ?>').toggle();
        $('#showcommentary<?php echo $array['id']; ?>').toggle();

    })
    $('#closecommentary<?php echo $array['id']; ?>').click(function () {

        $('#commentarytext<?php echo $array['id']; ?>').toggle();
        $('#closecommentary<?php echo $array['id']; ?>').toggle();
        $('#showcommentary<?php echo $array['id']; ?>').toggle();
        $('html, body').animate({
            scrollTop: $('#section<?php echo $array['id']; ?>').offset().top
        }, 400);

    })

    <?php } ?>

    $(".disclaimer").click(function (e) {

        e.preventDefault();

        $.confirm({
            title: 'Legal Disclaimer',
            content: 'This website is not engaged in dispensing legal or medical advice. The author is not a lawyer, medical doctor, scholar, business consultant or a yoga teacher. The website is not guaranteed to be accurate or truthful. It may all be lies. The content of this site is for adults only that can think for themselves and who can handle cognitive dissonance without freaking out. Persons under 21 years of age are prohibited from accessing this site. The content, products, images, articles and opinions offered here are for informational and entertainment purposes only. To make a medical decision, you should seek the advice of a medical doctor. To make a legal or business related decision, you should seek the advise of a competent attorney. The author and owner of this site is neither of those two things. Your access and use of this site is done at your own risk. No lifeguard is on duty. You must agree to hold the website and its author and owner entirely and completely harmless. Your ip address, other identifying information, and email (if provided) is stored in our secure database. Your clicks, scrolls and gestures are monitored and attached to your profile. Your acceptance of this legal disclaimer is material to our agreement and the only condition under which we provide courtesy access to this site and its information. Site access is prohibited without agreement to our legal disclaimer. If you decline you will be kindly redirected to a lovely and instructive cat video already in progress with our warmest and sincerest Adieu.',
            buttons: {
                Agree: function () {
                    $.alert('Great! You Understand And Are In Full Agreement With Our Legal Disclaimer!');
                },
                Decline: function () {
                    location.replace ('https://youtu.be/hY7m5jjJ9mM?t=22');
                }
            },
        });


    })
    $(".downloads").click(function (e) {

        e.preventDefault();

        $.confirm({
            title: 'Downloads Notice',
            content: 'Your acceptance of our legal disclaimer is material to our agreement and the only condition under which we provide access to this site and its information including these downloads. Site access is prohibited without agreement to our legal disclaimer. Our Legal Disclaimer is at the bottom of the website page. The image downloads are provided for free and are for entertainment purposes only. The badge and sign images are not issued or reviewed by any government entity. Use at your own risk. If you decline you will be kindly redirected to a lovely and instructive cat video already in progress with our warmest and sincerest Adieu.',
            buttons: {
                Agree: function () {
                    $.alert('Great! You Understand And Are In Full Agreement With Our Legal Disclaimer!');
                },
                Decline: function () {
                    location.replace ('https://youtu.be/hY7m5jjJ9mM?t=22');
                }
            },
        });


    })

</script>


