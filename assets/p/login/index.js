define(function(require) {

    var page = {
        init: function(){
            this.events();
        },
        events: function(){
            $('.J_ForgetPwd').click(function(){
                $('.J_ContactManager').show();
            })
        }
    }
    page.init();
});