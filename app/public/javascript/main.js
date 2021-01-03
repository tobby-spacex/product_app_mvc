// method for dynamically switching type
$(document).ready(function(){
    $("#inputState").on('change', function(){
        $(".form").hide();
        $("#" + $(this).val()).fadeIn(500);
    }).change();
});


// method for deleting cells

function validateForm() {
    var count_checked = $("[name='box[]']:checked").length;
    if (count_checked == 0) {
        alert("Please select at least one checkbox");
        return false;
    }else{
        return true;
    }
}


// cancel button which returns to main page
function cancelButton(){
    window.location.replace("http://product-app/");
}