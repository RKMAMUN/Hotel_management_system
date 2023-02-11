!function ($) {
    $(document).on("click", "ul.nav li.parent > a ", function () {
        $(this).find('em').toggleClass("fa-minus");
    });
    $(".sidebar span.icon").find('em:first').addClass("fa-plus");
}

(window.jQuery);
$(window).on('resize', function () {
    if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
})
$(window).on('resize', function () {
    if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
})


$(document).ready(function () {
    $('#rooms').DataTable();
});


document.addEventListener('DOMContentLoaded', () => {

    let myBtns=document.querySelectorAll('.d');
    myBtns.forEach(function(btn) {

        btn.addEventListener('click', () => {
            myBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
        });

    });

});








