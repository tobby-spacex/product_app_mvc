
<div class="boxs">

<div id="dvd" class="form">
        <label>Size (MB)</label>
        <input type="text" name="size_mb" >
        <br>
        <span class="error"><small>
        <?php
            echo isset($_SESSION['mb_error']) ?  $_SESSION['mb_error'] : null;
            unset($_SESSION['mb_error']);
        ?>

         </span>
         <br>
        <strong class="">Please, provide size</strong>
</div>



<div id="furniture" class="form" >
        <label>Height (CM)</label>
        <input type="text" name="height" >
        <br>
        <span class="error">
        <?php
            echo isset($_SESSION['h_error']) ?  $_SESSION['h_error'] : null;
            unset($_SESSION['h_error']);
        ?>

        </span>
        <br>

        <label>Width (CM)</label>
        <input type="text" name="width" >
        <br>
        <span class="error">
        <?php
            echo isset($_SESSION['w_error']) ?  $_SESSION['w_error'] : null;
            unset($_SESSION['w_error']);
        ?>
        </span>
        <br>

        <label>Length (CM)</label>
        <input type="text" name="length" >
        <br>
        <span class="error">
        <?php
            echo isset($_SESSION['l_error']) ?  $_SESSION['l_error'] : null;
            unset($_SESSION['l_error']);
        ?>
         </span>
        <br>

        <strong class="">Please,provide dimensions</strong>
</div>


<div id="book" class="form">
        <label>Weight (KG)</label>
        <input type="text" name="b_weight">
        <br>
        <span class="error">
        <?php
            echo isset($_SESSION['boo_error']) ?  $_SESSION['boo_error'] : null;
            unset($_SESSION['boo_error']);
        ?>
        </span>
        <br>

        <strong class="">Please, provide weight</strong>
</div>

</div>