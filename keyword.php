<!DOCTYPE html>
<html lang="en-US">
<head>
  
  <?php 
    require("head.php");
    ?>
    <link rel="stylesheet" href="css/keyword.css">
    <link rel="stylesheet" href="css/self.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    
</head>
<body>
<!-- Just nav bar -->
  <?php require("header.php"); ?>
  <!-- main container -->
  
  <div class="container container_a">

    <div id="loading_pic"><i class="fas fa-spinner fa-spin fa-10x"></i> </div>
    
    <div class="keyword" style="display:block;">
        <h2 class="responsive" >  Keyword Identification Page <i class="fas fa-street-view"></i> </h2>
            <!-- keyword up part -->
            <div class="keyword_up">
              <fieldset>
            
              This keyword identification function is to help you tell your story more completely. After entering your story, please press the ‘scan’ button. Follow-up questions will be generated to help you include more details. Please note that the follow-up questions are for reference only:
              <ul>
                <li>if you think that the follow-up questions are not applicable, you may directly skip those questions;</li>
                <li>if the testimony is complete, you may proceed to the next stage.</li>
              </ul>
              When telling your story, you may consider including the following:
              <ul>
                <li>you and your family’s background </li>
                <li>what harm did you suffer, and why did you leave your home country? </li>
                <li>what are the risks if you return to your home country?</li>
                <li>can you live in another part of the country without suffering the harm?             </li>
              </ul>
              </fieldset>

            </div>
          <!-- finish-->

          <div class="add_on col-xs-3 col-sm-3" id= "client-translator">
                  <div id="google_translate_element"></div>
              </div>


      <form action="result.php" method="post"  id="keyword_scanning_page">  
      <div class="row" style="margin-bottom: 10px;">

              
          <input type="hidden" name='h' id='h' value=<?= $_POST['h'] ?>>
          <input type="hidden" name='f' id='f' value=<?= $_POST['f'] ?>>
          <input type="hidden" name='d' id='d' value=<?= $_POST['d'] ?>>
          <input type="hidden" name='c' id='c' value=<?= $_POST['c'] ?>>
               <!-- left-->
              <div class="keyword_left col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="row">
                  <div class="textwrapper">
                    <div class="keyword_script_upper"> 
                      <textarea id="keyword_script" name="keyword_script" cols="7" rows="18" maxlength="1000"></textarea> 
                    </div>  
                  </div>
                </div>
                <div class="row"> 
                    <div class=" col-xs-7 col-sm-7 col-md-7 col-lg-7"> </div>
                    <div class=" col-xs-5 col-sm-5 col-md-5 col-lg-5" >
                      <div class="keyword_script_lower"><button type="button" id="keyword_show" name="keyword_show"> Scan </button>  
                       </div>         
                      
                    </div>
                </div>
                
              </div>
              <!-- end of left-->
              <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
                <!-- keyword-right-->
                  <div class="keyword_right  col-xs-5 col-sm-5 col-md-5 col-lg-5">
                    <div class=" container_b" id="trial">

                      <div class="wrapper_a wrapper_f sample">

                        <div class="card pop_up">
                          <div class="card-header pop-keyword" id="heading-a">
                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-a" aria-expanded="true" aria-controls="collapse-a">
                               <h6 class="responsive">Sample Keyword </h6>
                              </button>
                          </div>
                          
                          <div id="collapse-a" class="collapse" aria-labelledby="heading-a" data-parent=".sample">
                            <div class="card-body pop-questions">
                              <label for="sam"> Follow-up question related to this keyword will pop-up</label>
                              <input type="text" class="form-control" name="sam">
                            </div>
                          </div>
                        </div><!-- card end -->
                      </div><!-- wrapper end -->
                    </div><!-- containerB ( pop up ) -->
                  </div><!-- right-->

                </div> <!-- row end --> 
              </form>                   
              </div><!-- class= keyword end -->

              <div class="row" style="margin-bottom: 50px;">
                <div class="item">
                  <input type="checkbox" id="keyword_disclaimer"  class="p1" name="keyword_disclaimer" >
                  <label for="keyword_disclaimer" >  This is the end of the registration form. I confirmed this is my submission, and all the information provided is accurate.<span class="must1">*</span></label>
                </div>
              </div>

                      <div class="btnbutton">
                        <!-- Pre, Next Button -->
                        <div class="row" style ="margin-bottom: 100px" >
                          <div class='col-xs-4 col-4 col-sm-4 col-md-4' > 
                             
                          </div>
                          <div class='col-xs-3 col-3 col-sm-3 col-md-3' > 
                          </div>

                          <div class='col-xs-4 col-4 col-sm-4 col-md-4' > 
                             <button type="button" class="nextStepBtn btn btn-own " id="nextBtn" onclick="nextPage()">Next Page</button>
                          </div>
                        </div>
                      </div>

        </div><!-- end of container -->
              

  </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js" integrity="sha512-VKjwFVu/mmKGk0Z0BxgDzmn10e590qk3ou/jkmRugAkSTMSIRkd4nEnk+n7r5WBbJquusQEQjBidrBD3IQQISQ==" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

<script src="./js/google_translate.js"></script>
<script src="./js/keyword_char.js"></script>
<script src="./js/keyword_identify.js"></script>
<script src="./js/story_telling.js"></script>
<script src="./js/date_safari.js"></script>

<script>

Client_number ='<?= $_POST['c'] ?>';

          </script>
<?php 
   require("footer.php"); 
?>
</body>

</html>

