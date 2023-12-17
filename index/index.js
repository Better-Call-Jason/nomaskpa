
$(document).ready(function(){

    eml = "";
    emlerr = "";
    function ajaxEmail(){

        console.log('ajaxEmail');
        console.log(eml);

        $.when($.ajax({


                type: 'POST',
                url: '/email.php',
                data: "eml=" + eml,
                timeout: 10000,
                success: function (msg){

                    console.log(msg);
                    emlerr = msg;

                },



            })).done(function () {
            errorCheck();

        });





    }

    function errorCheck(){

        console.log("errorCheck");
        console.log(emlerr);


        if (emlerr === "bad"|| emlerr === "invalid") {

            $('#subscribe').attr("disabled", false);


            $.alert({
                title: 'Oops',
                content: 'The email address you entered is bad or invalid. Please try again!',
            });

        }

        else if (emlerr === "problem") {

            $('#subscribe').attr("disabled", false);

            $.alert({
                title: 'Oops',
                content: 'Your email address was not added to our system. Please try again!',
            });

        }
        else if (emlerr === "exists") {

            $('#subscribe').attr("disabled", false);
            $('#email').val('');

            $.alert({
                title: 'Oops',
                content: 'Your email address is already in our system.',

            });

        }

        else if (emlerr ==="success") {

            $('#subscribe').attr("disabled", false);
            $('#email').val('');
            $("#subscribeform").toggle();

            $.alert({
                title: 'Success',
                content: 'Your email address was added to our system. When we make changes or add more articles or features, we will keep you posted!',
            });


        }




    }

    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });

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

    $('#subscribe').click(function (e) {


        e.preventDefault();
        $(this).attr("disabled", true);
        eml = $("#email").val();
        console.log(eml);
        ajaxEmail();





    })

    // $("#copyfifthgrader").click(function (e) {
    //
    //     e.preventDefault();
    //     $("#fifthgraderlink").focus();
    //     $("#fifthgraderlink").select();
    //     document.execCommand('copy');
    //
    // })
});
