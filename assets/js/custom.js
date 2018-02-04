$('#statement_table, #visa_content, #amex_content, #other_content, #master_content').hide();

$(document).ready(function() {
    var btnName = "";
    
    $(".button-select button").click(function(){
        $('.btn-none').removeClass("btn-active");
        $(this).addClass("btn-active");
        btnName = $(this).attr('name');
        
        if (btnName == 'visa') {
            $('#visa_content').fadeIn("slow");
            $('#master_content').hide();
            $('#amex_content').hide();
            $('#other_content').hide();
        } else if (btnName == 'master') {
            $('#master_content').fadeIn("slow"); 
            $('#visa_content').hide();
            $('#amex_content').hide();
            $('#other_content').hide();
        } else if (btnName == 'amex') {
            $('#amex_content').fadeIn("slow");
            $('#master_content').hide();
            $('#visa_content').hide();
            $('#other_content').hide();
        } else {
            $('#other_content').fadeIn("slow");
            $('#master_content').hide();
            $('#amex_content').hide();
            $('#visa_content').hide();
        }
    });

    $('.dashboard-progress .progress-bar').css("width",
            function() {
                return $(this).attr("aria-valuenow") + "%";
            }
    );
    
    $('.dashboard-progress-two .progress-bar').css("width",
            function() {
                return $(this).attr("aria-valuenow") + "%";
            }
    );
    
    $('#btn_activate').on('click', function(){
        $(this).toggleClass("btn-active");
        $('#statement_table').fadeToggle("fast");
    });
});