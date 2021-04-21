<!DOCTYPE html>
<html lang="en">
<head>
  
  <?php 
    require("head.php");
    ?>

</style>
</head>
<body>
<!-- Just nav bar -->
  <?php require("header.php"); ?>
  <!-- main container -->
  <div class="container container_a">
    <div class="mx-auto" style="width:500px;">
      <img src="./photo/index_icon.png" width="500" height="500" alt="The Compass" style="margin-bottom : 10px;">
    </div>
    <div class="content ">
      <h5>This tool assists applicants in preparing the written signification to be submitted to the Immigration Department.</h5>
      <p><i> The information on this site is for general information purposes only. It is intended to be used by caseworkers, officers and lawyers at Justice Centre Hong Kong. It does not constitute professional advice, whether legal or otherwise, and does not purport to be comprehensive. You should seek legal or other professional advice before acting or relying on any of the content. Team ARK (LITE Lab@HKU) does not accept responsibility for any loss that may arise from accessing or relying upon the information contained in this site.  </i></p>
      <h6 style="color:red">
      Please note that:<br><br>
a) this tool does not intend to provide legal advice<br>
b) the guidelines for written signification is for reference only; applicants have 
to exercise their judgment to include relevant information… <br>

      </h6>

      <input type="checkbox" id="disclaimer" name="disclaimer" >
      <label for="disclaimer"> I understand the above disclaimers.</label><br>

      <div id="valide" style="display:none; color:red"><stron> Please tick the checkbox to ensure that you have read the above disclaimers</stron></div>
      <br>
      <br>

      <div class="mx-auto" style="width: 300px;">
      <button type="button" id="disclaim"> <strong> Start Now </strong></button>
      </div>

    </div>
    

  </div>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="./js/check.js"></script>

<?php 
   require("footer.php"); 
?>
</body>

</html>