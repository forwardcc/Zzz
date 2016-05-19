define(function(require) {
    require('slick');
    require('project');

    var page = {
        init: function(){
            this.events();
            this.slick();
        },
        events: function(){
            $('.J_UnfoldDesc').on('click', function(e){
                e.preventDefault();
                $(this).siblings('.c-desc').css({'overflow': 'visible', 'height':'auto'});
                $(this).hide();
            })
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