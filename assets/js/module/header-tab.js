define(function(require) {
    var tab = {
        init: function(){
            this.events();
        },
        events: function(){
            $('.category .main-cate .item').on('click', function(e){
                var idx = $(this).index();
                $('.category .main-cate .item').removeClass('active');
                $(this).addClass('active');

                $('.category .secondary-cate-content').addClass('hide');

                $content = $('.category .secondary-cate-content').eq(idx)
                if($content){
                    $content.removeClass('hide');
                }

            })

            $('.category .selected-cate .sel-item').on('click', function(){
                $(this).remove();
            })


        }
    }
    tab.init();
});