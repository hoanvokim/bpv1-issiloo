(function ($) {
    var $nav = $('#main-nav');
    var $toggle = $('.toggle');
    var data = {};
    var defaultData = {
        maxWidth: false,
        customToggle: $toggle,
        labelClose: '',
        labelBack: '<img src="http://www.beu.photography/webresources/img/issi/btnBack.png" width="35px"/>',
        levelTitles: true,
        pushContent: '#container',
        side: 'right'
    };

    // calling like this only for demo purposes

    const initNav = function (conf) {
        var $old = $('.hc-offcanvas-nav');

        setTimeout(function () {
            if ($old.length) {
                // clear previous instance
                $old.remove();
            }
        }, $toggle.hasClass('toggle-open') ? 450 : 0);

        if ($toggle.hasClass('toggle-open')) {
            $toggle.click();
        }

        // remove old toggle click event
        $toggle.off('click');

        // remember data
        $.extend(data, conf);

        // call the plugin
        $nav.clone().hcOffcanvasNav($.extend({}, defaultData, data));
    };

    // run first demo
    initNav({});

    $('.actions').find('a').on('click', function (e) {
        e.preventDefault();

        var $this = $(this).addClass('active');
        var $siblings = $this.parent().siblings().children('a').removeClass('active');

        initNav(eval('(' + $this.data('demo') + ')'));
    });

    $('.actions').find('input').on('change', function () {
        var $this = $(this);
        var data = eval('(' + $this.data('demo') + ')');

        if ($this.is(':checked')) {
            initNav(data);
        }
        else {
            var removeData = {};
            $.each(data, function (index, value) {
                removeData[index] = false;
            });
            initNav(removeData);
        }
    });

    $(document).ready(function () {
        if ((screen.width < 767)) {
            $('#callAction').show();
            $('#textAction').show();
        }
        else {
            $('#callAction').hide();
            $('#textAction').hide();
        }
    });
    $('#popUpCall').hide();
    $('#popUpContact').hide();
    $('#callAction').click(function () {
        $('#popUpCall').toggle();
    });
    $('#textAction').click(function () {
        $('#popUpContact').toggle();
    });
})(jQuery);