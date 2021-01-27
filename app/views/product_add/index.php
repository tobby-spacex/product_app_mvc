<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/app/views/header.php' ?>

<div class="container">
<div class="row">
<div class="col-sm">
<h3 class="page-header" id="text1"> Product Add</h3>

<!-- <form> -->
<!-- <form id="myForm" name="dvd" method="post" action="product_add/insertData" class="needs-validation" novalidate> -->
<form id="myForm" name="dvd" method="post" action="product_add/insertData" class="needs-validation" novalidate>

    <div class="text-right">
    <h3 class="page-header" id="text1"> Product Add</h3>
        <!-- <button type="submit" class="btn btn-primary" id="button1" >Save</button> -->
        <input type="submit" name="submit" class="btn btn-info" value="Save" />
        <button type="button" class="btn btn-warning" id="button2" onclick="cancelButton();">Cancel </a></button>

    </div>

</div>
<div class="about-border"></div>
</div>


<!-- Fetching main products input fields -->
<?php include_once 'main_fields.php';?>

<!-- Fetching products input boxes -->
<?php include_once 'product_boxes.php';?>



   </form>  <!--</form>-->

</div>  <!-- container -->

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/app/views/footer.php' ?>




<!-- if(isset($_SESSION['message'])){
    if($_SESSION['message'] == 'success'){
        echo "Yeah !";
    }else{
        echo "Problem";
    }
    unset($_SESSION['message']);
}
MESSAGE

    if(mail()){
    $_SESSION['message']='success';
}else{
    $_SESSION['message']='error';
} -->