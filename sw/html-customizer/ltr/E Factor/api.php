<?php
include("include/config.php");
if(isset($_POST['factory'])){
    $factory=$_POST['factory'];
    $sql=mysqli_query($conn,"select * from factory_registration where factory_name='$factory'");
    $arr=mysqli_fetch_array($sql);
   echo ' <div class="col-md-12 mb-1">
   <label class="form-label" for="select2-basic">Address</label>
   <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"
       value=""
       name="factory_address" placeholder="Address" readonly>'.$arr['factory_address'].'</textarea>
</div>

<!-- Multiple -->
<div class="col-md-12 mb-1">
   <label class="form-label" for="select2-array">Office</label>
   <input type="text" class="form-control" id="basicInput" value="'.$arr['office'].'"
       name="office" placeholder="Office" readonly />
</div>';
}
?>