$(function () {
    // ハンバーガメニュー
    $(".openbtn1").click(function () {
        $(this).toggleClass('active');
        $(".header-bottom").toggleClass('menu_active');
        // $(".header-nav-list").toggleClass("sp_toggle");
    });
});

// let $TopPosition = 0;
// let $openbtn1 = document.querySelector('.openbtn1');
// let $btn = document.getElementById('openbtn');

// window.addEventListener('scroll', () => {
//     $TopPosition = window.scrollY;
//     console.log($TopPosition)
//     if ($TopPosition > 50) {
//         $btn.style.top = '0';
//         $btn.style.right = '0';
//         $btn.style.transition = '0.5s';
//     } else {
//         $btn.style.top = '75px';
//         $btn.style.right = '30px';
//     }
// });


