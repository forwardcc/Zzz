define(function(require) {
	require('project');
	require('headerTab');

    var page = {
        init: function(){
            this.events();
        },
        events: function(){
        	var timer = 0;
            $('.category .main-cate-order').on('mouseenter', function(){
            	$(this).find('.order-types').show();
            });
            $('.category .main-cate-order').on('mouseleave', function(){
            	var _self = this;
            	timer = setTimeout(function(){
            		$(_self).find('.order-types').hide()
            	},500);
            })
            $('.category .main-cate-order .order-types').on('mouseenter', function(){
            	clearTimeout(timer);
            	$(this).show();
            });

            $('.category .main-cate-order .item').on('click', function(){
                $(this).parent().siblings('.active-cate').html($(this).html());
            })
            
        }
    }
    page.init();
});