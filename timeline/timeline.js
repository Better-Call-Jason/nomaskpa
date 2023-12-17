
$('#openlink1').click(function (e) {
    e.preventDefault();
    $('#iframe1').toggle();
    $('#closelink1').toggle();
    $('#links1').toggle();
})
$('#closelink1').click(function (e) {
    e.preventDefault();
    $('#iframe1').toggle();
    $('#closelink1').toggle();
    $('#links1').toggle();
    $('html, body').animate({
        scrollTop: $('#section1').offset().top
    }, 400);
})
$('#readmore1').click(function () {

    $('#readmore1_blk').toggle();
    $('#readless1_blk').toggle();
    $('#readmore1_text').toggle();

})
$('#readless1').click(function () {

    $('#readmore1_blk').toggle();
    $('#readless1_blk').toggle();
    $('#readmore1_text').toggle();
    $('#quotestext1').hide();
    $('#closequotes1').hide();
    $('#showquotes1').show();
    $('#commentarytext1').hide();
    $('#closecommentary1').hide();
    $('#showcommentary1').show();
    $('html, body').animate({
        scrollTop: $('#section1').offset().top
    }, 400);


})
$('#showquotes1').click(function () {

    $('#quotestext1').toggle();
    $('#closequotes1').toggle();
    $('#showquotes1').toggle();

})
$('#closequotes1').click(function () {

    $('#quotestext1').toggle();
    $('#closequotes1').toggle();
    $('#showquotes1').toggle();
    $('html, body').animate({
        scrollTop: $('#section1').offset().top
    }, 400);

})
$('#showcommentary1').click(function () {

    $('#commentarytext1').toggle();
    $('#closecommentary1').toggle();
    $('#showcommentary1').toggle();

})
$('#closecommentary1').click(function () {

    $('#commentarytext1').toggle();
    $('#closecommentary1').toggle();
    $('#showcommentary1').toggle();
    $('html, body').animate({
        scrollTop: $('#section1').offset().top
    }, 400);

})
