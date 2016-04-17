define(function(require) {
    require('slick');

    var page = {
        init: function(){
            this.events();
            this.slick();
        },
        events: function(){
            $('.other-tab-hd .hd-item').each(function(idx,item){
                $(item).on('click', function(){
                    $('.other-tab-hd .hd-item').removeClass('active');
                    $(this).addClass('active');
                    $('.other-tab-bd .bd-item').removeClass('active');
                    $('.other-tab-bd .bd-item').eq(idx).addClass('active');
                })
            })
        },
        slick: function(){
            $('.company-pics .slide-container').slick({
                dots: true,
                autoplay: false,
            });
        }
    }
    page.init();
});