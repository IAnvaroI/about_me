let techInfoHeight = $('#techInfo').height();
let notTechInfoHeight = $('#notTechInfo').height();
if (techInfoHeight < notTechInfoHeight) {
    $("#techInfo").height(notTechInfoHeight);
} else {
    $("#notTechInfo").height(techInfoHeight);
}

let containerHeight = $('#container').height();
let menuHeight = $('#menu').height();
let windowHeight = $(window).height();

if ((containerHeight + menuHeight) > windowHeight) {
    $('#footer').css('position', 'relative');
} else {
    $('#footer').css('position', 'absolute');
}


