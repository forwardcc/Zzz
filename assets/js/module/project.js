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
                $(this).find('.my-roads').removeClass('hide');
            });
            $('.J_AddNewRoad').on('click', function(){
                var ipt = $(this).siblings('input'),
                    roadName = ipt.val().trim();
                if(roadName){
                    $(this).parent().siblings('.roads-container').prepend('<p class="r-item">'+roadName+'</p>');
                    ipt.val('');
                }
            });
            $('.J_ProjectFavor').on('click', '.r-item', function(e){
                e.preventDefault();
                $('.J_ProjectFavor .my-roads').addClass('hide');
                return false;
            });


            $('.J_OperateBtns .btn').on('click', function(e){
                e.preventDefault();
                $('.J_OperateBtns .btn').removeClass('active');
                $(this).addClass('active');
            });

            // 展开项目描述
            $('.J_ExpandProIntroduce').on('click', function(e){
                e.preventDefault();
                $(this).hide().parent().addClass('show-all');
            })


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