$(document).ready(function() {
    console.log('hi');

    $('.navShowHide').on('click', function() {
        console.log('Hide Show Button Clicked');

        let main = $('#main-section-container');
        let nav = $('#side-nav-container');

        if (main.hasClass('left-padding')) {
            nav.hide();
        } else {
            nav.show();
        }

        main.toggleClass('left-padding');
    });
});