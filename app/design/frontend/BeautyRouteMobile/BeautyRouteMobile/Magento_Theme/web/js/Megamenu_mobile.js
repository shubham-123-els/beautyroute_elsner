require(['jquery'], function ($) {

    $('nav.navigation ul  li.megamenu.level1 > a').click(function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        $(this).parent().parent().siblings().find('.level1.submenu').removeClass('active');
        $(this).parent().parent().siblings().find('.level1 > a').removeClass('active');
        $(this).toggleClass('active').siblings('ul').toggleClass('active');
    });

    $('.megamenu.level2 > a').click(function (e) {
        e.preventDefault();
        // e.stopPropagation();
        e.stopImmediatePropagation();
        $(this).parents().siblings().find('ul').removeClass('active').hide(250);
        $(this).parents().siblings().find('a').removeClass('active');
        $(this).toggleClass('active').siblings('ul').toggleClass('active').fadeToggle(250);
    });


    $('.megamenu.level0 > a').click(function (e) {
        $(this).parents().toggleClass('active-lovelo').siblings('ul').toggleClass('active-lovelo');
        $(this).parents('li').prevAll().hide();
    });

    $(document).on('click', '.megamenu.level0 > .ui-state-active', function () {
        $('.megamenu.level0').show();
    });

    const lastMobileMenu = document.querySelector('.megamenu.level0.last > a');
    if (lastMobileMenu) {
        document.addEventListener('click', (e) => {
            setTimeout(() => {
                if (e.target == lastMobileMenu) {
                    let parentEle = e.target.parentElement;
                    if (parentEle.classList.contains('active-lovelo')) {
                        e.target.nextElementSibling.classList.remove('hide');
                        e.target.nextElementSibling.classList.add('show');
                    } else {
                        let level10Menu = document.querySelectorAll('.megamenu.level0');
                        level10Menu.forEach(ele => {
                            ele.style.display = 'block';
                        });
                        e.target.nextElementSibling.classList.remove('show');
                        e.target.nextElementSibling.classList.add('hide');
                    }
                }
            }, 100);
        })
    }
});
