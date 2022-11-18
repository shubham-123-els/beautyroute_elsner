require([
        'jquery',
        'jquery/ui'
    ], function ($,ui) {

    $(".fieldset.create.account span.toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $(".block-customer-login .form-login span.toggle-pass").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    if ($(".login-container .sign-login-tab button.signup-tab").length) { 
        $('.login-container .sign-login-tab button.signup-tab').addClass('active');
    }
    $('.login-container .sign-login-tab button.login-tab').click(function(){
            $('.login-container .block-customer-login').show();
            $('.login-container .form-create-account').hide();
            $('.login-container .sign-login-tab button.signup-tab').removeClass('active');
            $('.login-container .sign-login-tab button.login-tab').addClass('active');
    });
    $('.login-container .sign-login-tab button.signup-tab').click(function(){
        $('.login-container .block-customer-login').hide();
        $('.login-container .form-create-account').show();
        $('.login-container .sign-login-tab button.login-tab').removeClass('active');
        $('.login-container .sign-login-tab button.signup-tab').addClass('active');
    });    
});