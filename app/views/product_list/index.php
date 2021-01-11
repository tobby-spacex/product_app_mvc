<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/app/views/header.php' ?>

<?php require_once  $_SERVER['DOCUMENT_ROOT'] .'/app/models/products_display.php'?>

<div class="container">
<div class="row">

<div class="col-sm">

<form action="product_delete" method="post">

    <div class="text-right">
    <h3 class="page-header" id="text1"> Product List</h3>
        <button type="button" class="btn btn-primary" id="button1" onClick="document.location.href ='/product_add'">Add</button>
        <button type="submit" class="btn btn-danger" name="delete" id="button2" onclick="return validateForm();">Mass Delete</button>

    </div>

     </div>
    <div class="about-border"></div>
  </div>


<!-- Fetching DVD -->
<?php include_once 'dvd_view.php'; ?>

<!-- Fetching BOOK -->
<?php include_once 'book_view.php'; ?>

<!-- Fetching FURNITURE -->
<?php include_once 'furniture_view.php'; ?>


</form>
</div> <!-- container -->


<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/app/views/footer.php' ?>