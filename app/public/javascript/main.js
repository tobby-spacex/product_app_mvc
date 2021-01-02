// method for dynamically switching type
$(document).ready(function(){
    $("#inputState").on('change', function(){
        $(".form").hide();
        $("#" + $(this).val()).fadeIn(500);
    }).change();
});


// cancel button which returns to main page
function cancelButton(){
    window.location.replace("http://product-app/");
}