define(function(require) {
    var project = {
        init: function(){
            this.events();
        },
        events: function(){
            // 见过  没见过
            $('.project-item .see-btn .btn').on('click', function(e){
                e.preventDefault();
                $('.project-item .see-btn .btn').removeClass('active');
                $(e.currentTarget).addClass('active');
            })
            // 收藏按钮
            $('.J_ProjectFavor').on('click', function(e){
                e.preventDefault();
                $(this).find('.my-roads').toggleClass('hide');
            });
            $('.J_AddNewRoad').on('click', function(){
                var ipt = $(this).siblings('input'),
                    roadName = ipt.val().trim();
                if(roadName){
                    $(this).parent().siblings('.roads-container').append('<p class="r-item">'+roadName+'</p>');
                    ipt.val('');
                }
            });
            $('.J_OperateBtns .btn').on('click', function(e){
                e.preventDefault();
                $('.J_OperateBtns .btn').removeClass('active');
                $(this).addClass('active');
            });
            // 微信二维码
            $('.J_WechatQrcode').on('mouseenter', function(e){
                $(this).siblings('.wx-qrcode').removeClass('hide');
            })
            $('.J_WechatQrcode').on('mouseleave', function(e){
                $(this).siblings('.wx-qrcode').addClass('hide');
            })
        }
    }
    project.init();
});