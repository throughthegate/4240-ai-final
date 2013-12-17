$(document).ready( function(){
    

    $('#diagnostics').hide();
    $("#activate_d").mouseenter(function(){
        $("#activate_d").css('background-color', 'transparent');
        $("#hoverprompt").hide();
        $('#diagnostics').fadeIn();
        $("html, body").animate({ scrollTop: $(document).height() }, "slow");
        return false;
    })
    
    $("#diagnostics").mouseleave(function(){
        $('#diagnostics').hide();
        $("html, body").animate({ scrollTop: ($(document).height())/2 }, "slow");
        $("#hoverprompt").show();
        $("#activate_d").css('background-color', '#333');
        return false;
    })
    
    
});