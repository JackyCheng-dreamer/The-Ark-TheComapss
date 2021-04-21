<!DOCTYPE html>
<html lang="en-US">
<head>
  
  <?php 
    require("head.php");
    ?>
    <link rel="stylesheet" href="css/fontawesome/css/all.css">

    <style>
    .content {
                overflow: auto;
                margin-bottom:50px;
            }

    </style>
</head>
<body>
<!-- Just nav bar -->
  <?php require("header.php"); ?>
  <!-- main container -->
  
  <div class="container container_a">
    <div id="loading_pic"><i class="fas fa-spinner fa-spin fa-10x"></i> </div>
    <div class="Client_Reg_form">
      <h2 class="responsive"><i class="fas fa-user"></i> Client Registration Form </h2>
      <h3 class="responsive" id="RegTtile" style='margin-bottom:40px;'></h3>
      <h5 class="responsive invalid-msg">Please answer all the questions before proceed to the next page</h5>
      <!-- this is for Part C, belongs to title, not content -->
      <small id="PartC_small" style="color:gray; display:none;"><i>Justice Centre is the only NGO in Hong Kong adopting a holistic approach to provide legal, counselling and social welfare services. This is to ensure claimant's psycho-social needs are addressed while ensuring their equal access to justice.These questions are for us to know more about your needs so as to provide the most suitable non-legal services. 
        <br>These questions are drafted based on the “Vulnerability Assessment Framework” established by the United Nations High Commissioner for Refugees.  </i></small>
      <!-- Content -->
      
      <div class='content'>
        <form method="POST" action="keyword.php" class="col-md-12 m-auto p-2 form-container " id="lending">  

          <div class="tabb" id="tabb-0">
            <fieldset>
              
            <br>
              <h4 class="responsive"> Language</h4>
              <div class="form-group row" >
                <label for="client-first-language" class="col-xs-6 col-sm-5 col-form-label">What is your first language?<span class="must1">*</span>  </label>
                <select id="client-first-language" class="P0" name="client-first-language">
                    <option disabled selected value >Please select</option>
                  </select>                    
              </div>

              <div class="form-group row" >
                <label for="client-other-language" class="P0 col-xs-6 col-sm-5 col-form-label">What other languages do you speak?<span class="must1">*</span>  </label>
                <select id="client-other-language"  class="P0" name="client-other-language">
                    <option disabled selected value >Please select</option>
                  </select>          
              </div>
              
              <div class="form-group row" >
                <label for="interpreter" class="P0 col-xs-6 col-sm-5 col-form-label">Do you need an interpreter?<span class="must1">*</span>  </label>
                  <select id="interpreter"  class="P0" name="interpreter">
                    <option disabled selected value >Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                  
              <div class="add_on col-xs-3 col-sm-3" id= "client-translator">
                  <div id="google_translate_element"></div>
              </div>
              </div>

              <div style="display:none;" id= "client-translator-gender">
                <div class="form-group row" >
                <label for="client-prefer-intergender" class="col-xs-5 col-sm-5 col-form-label">What is your preferred gender of interpreter? </label>
                  <select id="client-prefer-intergender" name="client-prefer-intergender">
                    <option disabled selected value>Please select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="No">No preference</option>
                  </select>
                </div>
              </div>



            </fieldset>
          </div>

          <div class="tabb" id="tabb-1">
            <fieldset>
              <br>
              <h4 class="responsive">1. Basic information</h4>
              <div class="form-group row" >
                <label for="client-first-name" class="P1 col-xs-6 col-sm-4 col-form-label">What is your first name?<span class="must1">*</span>  </label>
                  <input type="text"  class="form-control "   id="client-first-name"  class="P1" name="client-first-name" >                    
                
              </div>

              <div class="form-group row" >
                <label for="client-middle-name" class=" col-xs-6 col-sm-4 col-form-label">What is your middle name? (if applicable) </label>
                  <input type="text"  class="form-control "   id="client-middle-name" name="client-middle-name" >                    
              </div>

              <div class="form-group row" >
                <label for="client-last-name" class="P1 col-xs-6 col-sm-4 col-form-label">What is your last name?<span class="must1">*</span>  </label>
                  <input type="text"  class="form-control "   id="client-last-name"  class="P1" name="client-last-name" >                    
              </div>

              <div class="form-group row">
                <label for="client-phone" class="P1 col-xs-6 col-sm-4 col-form-label">What is your phone number?<span class="must1">*</span>     </label>
                  <input type="text" class="form-control" id="client-phone"  class="P1" name="client-phone" >
              </div>

              <div class="form-group row">
                <label for="client-address" class="P1 col-xs-6 col-sm-4 col-form-label">What is your address?<span class="must1">*</span>     </label>
                  <input type="text" class="form-control" id="client-address"  class="P1" name="client-address" >
              </div>


              <br>
              <h4 class="responsive">2. Nationality </h4>
              <div class="form-group row" >
                <label for="client-nationality" class="col-xs-6 col-sm-5 col-form-label">What is your country of nationality? <br> (If you hold multiple passports, please list all your countries of nationality)<span class="must1">*</span>  </label>
                  <input type="text"  class="form-control "   id="client-nationality"  class="P1" name="client-nationality" >                    

              </div>
    
              <br>
              <h4 class="responsive">3. Gender </h4>
              <div class="form-group row" >
                <label for="client-prefer-gender" class="col-xs-6 col-sm-5 col-form-label">What is your gender ?<span class="must1">*</span>  </label>

                  <select id="client-prefer-gender"  class="P1" name="client-prefer-gender">
                    <option disabled selected value>Please select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                    <option value="Not_to_say">Prefer not to say</option>
                  </select>
                  
                <div class="add_on col-xs-5 col-sm-5" id= "client-other-gender">
                  <div class= "col-xs-1 col-sm-1"></div>
                  <label for="client-prefer-gender-other" class= "col-xs-3 col-sm-3">other:</label>
                  <input type="text"  class="form-control "   id="client-prefer-gender-other" name="client-prefer-gender-other" style="display:initial !important;" >    
                  
                </div>
              </div>

              <br>
              <h4 class="responsive">4. Birth </h4>
              <div class="form-group row" >
                <label for="client-birth" class="col-xs-6 col-sm-5 col-form-label">What is your date of birth?<span class="must1">*</span>  </label>
                <input type="date"  class="form-control "  id="client-birth"  class="P1" name="client-birth" >                    

              </div>

        
              <br>
              <h4 class="responsive">5. Family members in Hong Kong </h4>
              <div class="form-group row" >
                <label for="client-family" class="col-xs-6 col-sm-5 col-form-label">Do you have family members in Hong Kong?<span class="must1">*</span>  </label>

                  <select id="client-family"  class="P1" name="client-family">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>


                  <div id = "have_family" style='display :none;' >
                  <div class="table-responsive-sm">
                    <table  class="table">
                    <thead>
                      <tr>
                        <th>Relationship</th>
                        <th>Name</th>
                        <th>Date of Birth</th>
                        <th>Country of Nationality</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> <input type="text"  class="client-family-relationship"  id="client-family-relationship-0" name="client-family-relationship-0" ></td>
                        <td> <input type="text"   class="client-family-name"   id="client-family-name-0" name="client-family-name-0" ></td>
                        <td> <input type="date"   class="client-family-birth"   id="client-family-birth-0" name="client-family-birth-0" ></td>
                        <td> <input type="text"   class="client-family-nationality"   id="client-family-nationality-0" name="client-family-nationality-0" ></td>
                      </tr>
                      <tr>
                        <td> <input type="text"   class="client-family-relationship"   id="client-family-relationship-1" name="client-family-relationship-1" ></td>
                        <td> <input type="text"   class="client-family-name"   id="client-family-name-1" name="client-family-name-1" ></td>
                        <td> <input type="date"   class="client-family-birth"   id="client-family-birth-1" name="client-family-birth-1" ></td>
                        <td> <input type="text"   class="client-family-nationality"   id="client-family-nationality-1" name="client-family-nationality-1" ></td>
                      </tr>
                      <tr>
                        <td> <input type="text"   class="client-family-relationship"   id="client-family-relationship-2" name="client-family-relationship-2" ></td>
                        <td> <input type="text"   class="client-family-name"   id="client-family-name-2" name="client-family-name-2" ></td>
                        <td> <input type="date"    class="client-family-birth"  id="client-family-birth-2" name="client-family-birth-2" ></td>
                        <td> <input type="text"   class="client-family-nationality"   id="client-family-nationality-2" name="client-family-nationality-2" ></td>
                      </tr>
                    </tbody>
                    </table>
                  </div>
                  </div>
              </div>

              <br>
              <h4 class="responsive">6. Arrival in Hong Kong </h4>
              <div class="form-group row" >
                <label for="client-arrival" class="col-xs-6 col-sm-5 col-form-label">When did you arrive in Hong Kong?<span class="must1">*</span>  </label>
                <input type="date"  class="form-control "  id="client-arrival"  class="P1" name="client-arrival" >                    
              </div>

              <div class="form-group row" >
                <label for="client-detained" class="col-xs-6 col-sm-5 col-form-label">Were you detained after you arrived in Hong Kong?<span class="must1">*</span>  </label>
                  <select id="client-detained"  class="P1" name="client-detained">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
              </div>

              <div id = "have_detained" class="add_on">
                    <label for="client-have_detained"  class="col-xs-2 col-sm-1 col-form-label"> When?<span class="must1">*</span></label>
                    <input type="date" id="client-have_detained" name="client-have_detained">
                    <br>
                  </div>

              <div class="form-group row" >
                <label for="client-recognizance " class="col-xs-6 col-sm-5 col-form-label">Do you have a Recognizance (Immigration) paper?<span class="must1">*</span>  </label>

                  <select id="client-recognizance"  class="P1" name="client-recognizance">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
              </div>


              <div id = "have_recognizance" class="add_on" >
              <div class="form-group row" >
                    <label for="client-have_recognizance"  class="col-xs-6 col-sm-5 col-form-label">Which Recognizance (Immigration) paper do you have ?<span class="must1">*</span></label>
                    <select id="client-have_recognizance" name="client-have_recognizance">
                      <option disabled selected value>Please select</option>
                      <option value="RBCL">RBCL</option>
                      <option value="RBGI">RBGI</option>
                      <option value="RBCZ">RBCZ</option>
                      <option value="other">other</option>
                    </select>
                  </div>
                </div>
            

              <div id = "have_recognizance_other" class="add_on">
                  <div class="form-group row" >
                      <label for="client-have_recognizance-other"  class="col-xs-6 col-sm-5 col-form-label">If yes, Please State:<span class="must1">*</span></label>
                      <input type="text" id="client-have_recognizance-other" name="client-have_recognizance-other">
                    </div>
                </div>  


              <br>
              <h4 class="responsive">7. Case management</h4>

              <div class="form-group row" >
                <label for="client-case" class="col-xs-6 col-sm-5 col-form-label">Do you have an upcoming hearing or deadline?<span class="must1">*</span>  </label>
                  <select id="client-case"  class="P1" name="client-case">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
              </div>

              <div id = "have_case" class="add_on">
                <label for="client-have_case"  class="col-xs-2 col-sm-1 col-form-label">When?<span class="must1">*</span></label>
                <input type="date" id="client-have_case" name="client-have_case">
                <br>
              </div>

              <div class="form-group row" >
                  <label for="client-worker_gender"  class="col-xs-6 col-sm-5 col-form-label">What is your preferred gender of caseworker?<span class="must1">*</span> </label>
                  <select id="client-worker_gender"  class="P1" name="client-worker_gender">
                    <option disabled selected value>Please select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="No ">No preference</option>
                  </select>
              </div>


              <br>
              <h4 class="responsive">8. Consent to collection of data</h4>
              <input type="checkbox" id="client-disclaimer"  class="P1" name="client-disclaimer" >
              <label for="client-disclaimer"  class="col-xs-12 col-sm-11 col-form-label"> I consent to Justice Centre using my non-identifiable & anonymized data for these activities: research, advocacy, training, fundraising and development.</label><br>
              
              <div id="valide" style="display:none; color:red"><strong> Please tick the checkbox to ensure that you have read the above disclaimers</strong></div>
              <div class="form-group row" style="margin-bottom:30px;"></div>
              </fieldset>
            </div>

            <div class="tabb" id="tabb-2">
              <fieldset>
              <br>
              <h5>Procedural History (& Document collection)</h5>
              <br>
              <p><u> Stage identification and Availability of Legal Assistance</u></p>

              <p>Please indicate your stage of claim </p>
              <input type="radio" id="Unregistered" name="stage " value="Unregistered">
              <label for="Unregistered">Unregistered</label><br>
              <input type="radio" id="ImmiDepart" name="stage " value="Immigration Department">
              <label for="ImmiDepart">Immigration Department</label><br>
              <input type="radio" id="TCAB" name="stage " value="Torture Claims Appeal Board">
              <label for="TCAB"> Torture Claims Appeal Board</label>
              <br>
              <input type="radio" id="CFI" name="stage " value="High Court: Court of First Instance">
              <label for="CFI">High Court: Court of First Instance</label>
              <br>
              <input type="radio" id="COA" name="stage " value="High Court: Court of Appeal">
              <label for="COA">High Court: Court of Appeal</label>
              <br>
              <input type="radio" id="COFA" name="stage " value="Court of Final Appeal">
              <label for="COFA">Court of Final Appeal</label>
              <br>
              <input type="radio" id="no" name="stage " value="I am not sure">
              <label for="COFA">I am not sure</label>
              <br>
              <br>
              <!-- Originally in stage2 , question f-->
              <div class="form-group row" >
                <label for="Pb-partf" class="col-xs-6 col-sm-5 col-form-label"> Have you been assisted by any  <strong> duty lawyer</strong> ?<span class="must1">*</span>  </label>
                <select id="Pb-partf"  class="Pb" name="Pb-partf">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
                <div class="col-xs-3 col-sm-3 col-md-3"> <button type="button" class="Example" id="OpenExample6"><i class='fa fa-question-circle fa-3x ' aria-hidden="true"></i></button> </div>
              </div>

              <div id = "have_partf" class="add_on">
                <div class="form-group row" >
                  <label for="Pb-partf_lawername" class="col-xs-5 col-sm-3 col-form-label"> Lawyer Name: <span class="must1">*</span>  </label>
                  <input type="text"  class="form-control" id="Pb-partf_lawername" name="Pb-partf_lawername" >                    
                </div>
                <div class="form-group row" >
                  <label for="Pb-partf_lawercontact" class="col-xs-5 col-sm-3 col-form-label"> Lawyer Contact: <span class="must1">*</span>  </label>
                  <input type="text"  class="form-control" id="Pb-partf_lawercontact" name="Pb-partf_lawercontact" >                    
                </div>
              </div>
  <br>
              <br>
              <p><u> 1. Unregistered</u></p>
              <div class="form-group row" >
                <label for="Pb-visa-own" class="col-xs-6 col-sm-3 col-form-label">Do you have a valid visa?<span class="must1">*</span>  </label>
                <select id="Pb-visa-own"  class="Pb" name="Pb-visa-own">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
              </div>
              <br>
              <div id = "have_visa" class="add_on">
                <div class="form-group row" >
                <label for="Pb-visa-type" class="col-xs-6 col-sm-3 col-form-label">What visa?<span class="must1">*</span>  </label>
                  <input type="text"  class="form-control" id="Pb-visa-type" name="Pb-visa-type" >                    

                </div>
              <div class="form-group row" >
                <label for="Pb-visa-expire" class="col-xs-6 col-sm-4 col-form-label"> When will it expire / have it expired?<span class="must1">*</span>  </label>
                  <input type="date"  class="form-control " id="Pb-visa-expire" name="Pb-visa-expire" >                    
              </div>
            </div>

              <br>
              <p><u> 2.Immigration Department</u></p>
              <i><span style="color :darkgray;">(Immigration Department is part of the Hong Kong government and is responsible for immigration control)</span></i>
            <br><br>
              <div class="form-group row" >
                <label for="Pb-ws" class="col-xs-7 col-sm-7 col-form-label">a. Have you delivered your <strong>written signification</strong> to the Immigration Department?<span class="must1">*</span>  </label>
                <select id="Pb-ws"  class="Pb" name="Pb-ws">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                  <div class="col-xs-3 col-sm-3 col-md-3"> <button type="button" class="Example" id="OpenExample"><i class='fa fa-question-circle fa-3x ' aria-hidden="true"></i></button> </div>
              </div>

    
              <div id = "have_ws" class="add_on">
                <div class="form-group row" >
                  <label for="Pb-ws_upload" class="col-xs-4 col-sm-3 col-form-label">If yes, please upload your written signification<span class="must1">*</span>  </label>
                  <button type="button" class="Compass_button" id="Pb-ws_upload" name="Pb-ws_upload" onclick="ToUpload('written signification')" >Upload Photos</button>                   
                  <span id ='photo_show' style='display:none; color:#707070;'>In total <span id='photo'></span> photo uploaded </span>
                </div>
              </div>

              <div class="form-group row" >
                <label for="Pb-loc" class="col-xs-7 col-sm-7 col-form-label">b. Have you received the <strong>letter of confirmation</strong> (Immigration Department accepting your Written Signification)?<span class="must1">*</span>  </label>
                <select id="Pb-loc"  class="Pb" name="Pb-loc">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
                <div class="col-xs-3 col-sm-3 col-md-3"> <button type="button" class="Example" id="OpenExample2"><i class='fa fa-question-circle fa-3x ' aria-hidden="true"></i></button> </div>
              </div>

              <div class="form-group row" >
                <label for="Pb-partc" class="col-xs-7 col-sm-7 col-form-label">c.  Have the Immigration Department asked you for more information before making the decision?<span class="must1">*</span>  </label>
                <select id="Pb-partc"  class="Pb" name="Pb-partc">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
              </div>

              <div id = "have_partc" class="add_on">
                <div class="form-group row" >
                <label for="Pb-partc_word" class="col-xs-6 col-sm-3 col-form-label">What information is it about?<span class="must1">*</span>  </label>
                  <input type="text"  class="form-control" id="Pb-partc_word" name="Pb-partc_word" >                    
                </div>
              </div>

              <div class="form-group row" >
                <label for="Pb-partd" class="col-xs-7 col-sm-7 col-form-label">d. Have you collected your <strong>Recognizance Document? </strong><span class="must1">*</span>  </label>
                <select id="Pb-partd"  class="Pb" name="Pb-partd">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
                <div class="col-xs-3 col-sm-3 col-md-3"> <button type="button" class="Example" id="OpenExample3"><i class='fa fa-question-circle fa-3x ' aria-hidden="true"></i></button> </div>
              </div>
              
              <div id = "have_partd" class="add_on">
                <div class="form-group row" >
                  <label for="Pb-partd_upload" class="col-xs-6 col-sm-3 col-form-label">If yes, please upload your Recognizance Document<span class="must1">*</span>  </label>
                 <button type="button" class="Compass_button" id="Pb-partd_upload" name="Pb-partd_upload" onclick="ToUpload('Recognizance Document')">Upload Photos</button>                   

                </div>
              </div>

              <div class="form-group row" >
                <label for="Pb-parte" class="col-xs-7 col-sm-7 col-form-label">e. Have you attended a <strong> briefing session</strong> with immigration department?<span class="must1">*</span>  </label>
                <select id="Pb-parte"  class="Pb" name="Pb-parte">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Upcoming">Upcoming</option>
                  </select>       
                <div class="col-xs-3 col-sm-3 col-md-3"> <button type="button" class="Example" id="OpenExample4"><i class='fa fa-question-circle fa-3x ' aria-hidden="true"></i></button> </div>
              </div>

              <div id = "have_parte" class="add_on">
                <div class="form-group row" >
                <label for="Pb-parte_date" class="col-xs-3 col-sm-2 col-form-label"> Date for briefing: <span class="must1">*</span>  </label>
                  <input type="date"  class="form-control" id="Pb-parte_date" name="Pb-parte_date" >                    
                </div>
              </div>

              <div class="form-group row" >
                <label for="Pb-partg" class="col-xs-7 col-sm-7 col-form-label">f. Have you submitted the <strong> non-refoulement claim form </strong>?<span class="must1">*</span>  </label>
                <select id="Pb-partg"  class="Pb" name="Pb-partg">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>      
                  <div class="col-xs-3 col-sm-3 col-md-3"> <button type="button" class="Example" id="OpenExampleC"><i class='fa fa-question-circle fa-3x ' aria-hidden="true"></i></button> </div>         
                  
              </div>

              <div id = "have_partg" class="add_on">
                <div class="form-group row" >
                  <label for="Pb-partg_upload" class="col-xs-6 col-sm-3 col-form-label">If yes, please upload your Non-refoulment claim form<span class="must1">*</span>  </label>
                 <button type="button" class="Compass_button" id="Pb-partg_upload" name="Pb-partg_upload" onclick="ToUpload('Non-refoulment claim')">Upload Photos</button>                   

                </div>
              </div>

              <div class="form-group row" >
                <label for="Pb-parth" class="col-xs-7 col-sm-7 col-form-label">g. Have you attended the screening interview at the Immigration Department?</strong><span class="must1">*</span>  </label>
                <select id="Pb-parth"  class="Pb" name="Pb-parth">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Upcoming">Upcoming</option>
                  </select>       
                  <div class="col-xs-3 col-sm-3 col-md-3"> <button type="button" class="Example" id="OpenExample7"><i class='fa fa-question-circle fa-3x ' aria-hidden="true"></i></button> </div>
              </div>       

              <div id = "have_parth" class="add_on">
              
              <div class="form-group row" >
                <label for="Pb-parth_date" class="col-xs-3 col-sm-2 col-form-label"> Date for screening interview: <span class="must1">*</span>  </label>
                  <input type="date"  class="form-control" id="Pb-parth_date" name="Pb-parth_date" >                    
                </div>
                <div class="form-group row" >
                  <label for="Pb-parth_upload" class="col-xs-4 col-sm-4 col-form-label">If yes, please upload the Transcript of the screening Interview <span class="must1">*</span>  </label>
                  <button type="button" class="Compass_button" id="Pb-parth_upload" name="Pb-parth_upload" onclick="ToUpload('letter to Screening')">Upload Photos</button>               
                </div>
              </div>
              
              <div class="form-group row" >
                <label for="Pb-parti" class="col-xs-7 col-sm-7 col-form-label">h. Has the Immigration Department made a <strong>decision </strong> about whether or not to grant you protection in Hong Kong?<span class="must1">*</span>  </label>
                <select id="Pb-parti"  class="Pb" name="Pb-parti">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
                <div class="col-xs-3 col-sm-3 col-md-3"> <button type="button" class="Example" id="OpenExample9"><i class='fa fa-question-circle fa-3x ' aria-hidden="true"></i></button> </div>
              </div>

              <div class="add_on" id = "have_parti" >
                <div class="form-group row" >
                  <label for="Pb-parti_1" class="col-xs-5 col-sm-5 col-form-label"> If yes, is it successful or refused? <span class="must1">*</span>  </label>
                  <select id="Pb-parti_1" name="Pb-parti_1">
                    <option disabled selected value>Please select</option>
                    <option value="Yes ">Successful</option>
                    <option value="No">Refused</option>
                  </select>                      
                </div>

                <div class="form-group row" >
                  <label for="Pb-parti_2" class="col-xs-5 col-sm-5 col-form-label"> Have you received the official decision document from the Immigration Document? <span class="must1">*</span>  </label>
                  <select id="Pb-parti_2" name="Pb-parti_2">
                    <option disabled selected value>Please select</option>
                    <option value="Yes ">Yes</option>
                    <option value="No">No</option>
                  </select>                     
                </div>

                <div id = "have_parti_2" class="add_on">
                  <div class="form-group row" >
                    <label for="Pb-parti_2_upload" class="col-xs-5 col-sm-5 col-form-label">If yes, please upload<span class="must1">*</span>  </label>
                    <button type="button" class="Compass_button" id="Pb-parti_2_upload" name="Pb-parti_2_upload" onclick="ToUpload('decision document')">Upload Photos</button>               
                  </div>
                </div>

              </div>


              <br>
              <p><u> 3.Torture Claims Appeal Board </u></p>
              <div class="form-group row" >
                  <label for="Pb-part3a" class="col-xs-7 col-sm-7 col-form-label">a. Have you appealed to the Torture Claims Appeal Board/ Non-refoulement Claims Petition Office? <span class="must1">*</span>  </label>
                  <select id="Pb-part3a"  class="Pb" name="Pb-part3a">
                    <option disabled selected value>Please select</option>
                    <option value="Yes ">Yes</option>
                    <option value="No">No</option>
                  </select>   
                  <div class="col-xs-3 col-sm-3 col-md-3"> <button type="button" class="Example" id="OpenExample3a"><i class='fa fa-question-circle fa-3x ' aria-hidden="true"></i></button> </div>
                                
              </div>
              <div id = "have_part3a" class="add_on">
                <div class="form-group row" >
                <label for="Pb-part3d_upload" class="col-xs-5 col-sm-5 col-form-label">If yes, please upload the filed documents for Appeal<span class="must1">*</span>  </label>
                  <button type="button" class="Compass_button" id="Pb-part3a_upload" name="Pb-part3a_upload" onclick="ToUpload(' filed_appeal_document')">Upload Photos</button>               
                </div>
              </div>


  <!-- for part 3b, deleted, and so Pb-part3c=b -->
              <div class="form-group row" >
                <label for="Pb-part3c" class="col-xs-7 col-sm-7 col-form-label">b. Have you attended an <strong>appeal hearing?</strong><span class="must1">*</span>  </label>
                <select id="Pb-part3c"  class="Pb" name="Pb-part3c">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Upcoming">Upcoming</option>
                  </select>       
                  <div class="col-xs-3 col-sm-3 col-md-3"> <button type="button" class="Example" id="OpenExample3b"><i class='fa fa-question-circle fa-3x ' aria-hidden="true"></i></button> </div>
                    
              </div>       

              <div id = "have_part3c" class="add_on">
                <div class="form-group row" >
                  <label for="Pb-part3c_date" class="col-xs-3 col-sm-2 col-form-label"> Date for appeal hearing: <span class="must1">*</span>  </label>
                  <input type="date"  class="form-control" id="Pb-part3c_date" name="Pb-part3c_date" >    
                </div>

                <div class="form-group row" >
                <label for="Pb-part3c_2" class="col-xs-7 col-sm-7 col-form-label">Do you have a soft copy of the Appeal Hearing Bundle on your hand?<span class="must1">*</span>  </label>
                <select id="Pb-part3c_2"  class="Pb" name="Pb-part3c_2">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
                  <div class="col-xs-3 col-sm-3 col-md-3"> <button type="button" class="Example" id="OpenExample3b2"><i class='fa fa-question-circle fa-3x ' aria-hidden="true"></i></button> </div>
                    
              </div>       

              <div  id = "have_part3c_2" class="add_on">
                <div class="form-group row" >
                  <label for="Pb-part3c_upload" class="col-xs-5 col-sm-5 col-form-label">If yes, please upload the soft copy<span class="must1">*</span>  </label>
                  <button type="button" class="Compass_button" id="Pb-part3c_upload" name="Pb-part3c_upload" onclick="ToUpload('appeals')">Upload Photos</button>               
                </div>
          </div>

              </div>


              <div class="form-group row" >
                <label for="Pb-part3d" class="col-xs-7 col-sm-7 col-form-label"> c) Has the appeal been <strong>decided</strong> by the Appeal Board/ Adjudicator? <span class="must1">*</span>  </label>
                <select id="Pb-part3d"  class="Pb" name="Pb-part3d">
                    <option value="0" disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
              </div>

              <div id = "have_part3d" class="add_on">
                <div class="form-group row" >    
                  <label for="Pb-part3d_result" class="col-xs-4 col-sm-4 col-form-label"> If yes, is the appeal successful or refused? <span class="must1">*</span>  </label>
                  <select id="Pb-part3d_result" name="Pb-part3d_result">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Success</option>
                    <option value="No">Fail</option>
                  </select>     
                </div>

              <div class="form-group row">
                <label for="Pb-part3d2" class="col-xs-7 col-sm-7 col-form-label"> Have you received the official decision document from the Appeal Board?<span class="must1">*</span>  </label>
                <select id="Pb-part3d2"  class="Pb" name="Pb-part3d2">
                    <option value="0" disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
                  <div class="col-xs-3 col-sm-3 col-md-3"> <button type="button" class="Example" id="OpenExample3c"><i class='fa fa-question-circle fa-3x ' aria-hidden="true"></i></button> </div>   
              </div>

              <div id="have_part3d2" class="add_on">
                <div class="form-group row" >
                  <label for="Pb-part3d2_upload" class="col-xs-4 col-sm-4 col-form-label">If yes, please upload <span class="must1">*</span>  </label>
                  <button type="button" class="Compass_button" id="Pb-part3d2_upload" name="Pb-part3d2_upload" onclick="ToUpload('Appeal_Board_Doc')">Upload Photos</button>               
                </div>
              </div>
            </div>


              <br>
              <div class="form-group row"> 
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <p><u> Any additional documents </u></p><br></div>
              
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
              
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <button type="button" class="Compass_button" id="Other_upload" name="Other_upload" onclick="ToUpload('Additional_Document')">Upload Photos</button>               
            <br><br>
              </div>  
            </div>
              <br>

              </fieldset>
          </div>


          <div class="tabb" id="tabb-3">
            <fieldset>
              <br>
              <h4 class="responsive">Housing</h4>
              <div class="form-group row" >
                <label for="Pc-H1" class="col-xs-7 col-sm-7 col-form-label">Do you face a risk of eviction from where you live ?</strong><span class="must1">*</span>  </label>
                <select id="Pc-H1" class="Pc-H" name="Pc-H1">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
              </div>       

              <div id = "have_partH1" class="add_on">
                <label for="Pc-H1__choose" class="col-xs-6  col-form-label"> If yes, specify the reasons: <span class="must1">*</span>  </label>   
                  
                  <input type="checkbox" id="Pc-H1__choose1" name="Pc-H1__choose" value="1">
                  <label for="vehicle1">conflict with host community/landlord</label><br>
                  <input type="checkbox"  id="Pc-H1__choose2" name="Pc-H1__choose" value="2">
                  <label for="vehicle1">fear of eviction</label><br>
                  <input type="checkbox"  id="Pc-H1__choose3" name="Pc-H1__choose" value="3">
                  <label for="vehicle1">verbal threat of eviction</label><br>
                  <input type="checkbox" id="Pc-H1__choose4" name="Pc-H1__choose" value="4">
                  <label for="vehicle1">written note for eviction</label><br><br>
              </div>

              <div class="form-group row" >
                <label for="Pc-H2" class="col-xs-7 col-sm-7 col-form-label">Have you defaulted in rent payment in the past 6 months ?<span class="must1">*</span>  </label>
                
                <select  class="Pc-H"  id="Pc-H2" name="Pc-H2">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
              </div>   

              <div class="form-group row" >
                <label for="Pc-H3" class="col-xs-7 col-sm-7 col-form-label">Do you have a written agreement between you and the landlord ? <span class="must1">*</span>  </label>
                <select  class="Pc-H"  id="Pc-H3" name="Pc-H3" >
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
              </div>   
              <div class="form-group row" >
                <label for="Pc-H4" class="col-xs-7 col-sm-7 col-form-label">Have you changed accommodation in the past 6 months to reduce rental expenditure ? <span class="must1">*</span>  </label>
                <select  class="Pc-H"  id="Pc-H4" name="Pc-H4">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
              </div>             
              
              <div class="form-group row" >
                <label for="Pc-H5" class="col-xs-7 col-sm-7 col-form-label">Do you have any other housing concerns? If yes, please specify:  </label>
                <input type="text" class="form-control" id="Pc-H5"  name="Pc-H5">
              </div>    


              <br>
              <h4 class="responsive">Medical</h4>
              <div class="form-group row" >
                <label for="Pc-M1" class="col-xs-7 col-sm-7 col-form-label">Are you or any of your family members able to access hospitals/clinics in the past six months ?<span class="must1">*</span>  </label>
                <select id="Pc-M1"  class="Pc-M"  name="Pc-M1">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
              </div>   

              <div class="form-group row" >
                <label for="Pc-M2" class="col-xs-7 col-sm-7 col-form-label">Do you or any of your family members have a medical condition / injury ?<span class="must1">*</span>  </label>
                <select id="Pc-M2"  class="Pc-M"  name="Pc-M2">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
              </div>   

              <div class="add_on" id="have_partM2">
                <div class="form-group row" >
                  <label for="Pc-M2-1" class="col-xs-7 col-sm-7 col-form-label">Does identified medical problem/disability affect the person’s ability to perform activity of daily living (eating, bathing, toileting, dressing, transferring) ?<span class="must1">*</span>  </label>
                  <select id="Pc-M2-1"  class="Pc-M"  name="Pc-M2-1">
                      <option disabled selected value>Please select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>       
                </div>   
                <div class="form-group row" >
                <label for="Pc-M2-2" class="col-xs-7 col-sm-7 col-form-label">Does identified medical problem/disability affect your ability to work ?<span class="must1">*</span>  </label>
                <select id="Pc-M2-2"  class="Pc-M"  name="Pc-M2-2">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
                </div>   
              </div>

              <div class="form-group row" >
                <label for="Pc-M3" class="col-xs-7 col-sm-7 col-form-label">Do you have any other medical concerns? If yes, please specify:  </label>
                <input type="text" class="form-control" id="Pc-M3"  name="Pc-M3">
              </div>  

              <br>
              <h4 class="responsive">Food</h4>
              <div class="form-group row" >
                <label for="Pc-F1" class="col-xs-7 col-sm-7 col-form-label">In general do you think you have enough food during your time in Hong Kong ?<span class="must1">*</span>  </label>
                <select id="Pc-F1"  class="Pc-F"  name="Pc-F1">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
              </div>  
              <div class="form-group row" >
                <label for="Pc-F2" class="col-xs-7 col-sm-7 col-form-label">Have you experienced prolonged starvation during your time in Hong Kong ?<span class="must1">*</span>  </label>
                <select id="Pc-F2"  class="Pc-F"  name="Pc-F2">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
              </div>  
              <div class="add_on" id="have_partF2">
                <div class="form-group row" >
                  <label for="Pc-F2__word" class="col-xs-6 col-sm-3 col-form-label">Do you still experience occasional starvation as of this moment?<span class="must1">*</span>  </label>   
                  <select id="Pc-F2__word"  class="Pc-F"  name="Pc-F2__word">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>    
                  </div>
              </div>
              <div class="form-group row" >
                <label for="Pc-F3" class="col-xs-7 col-sm-7 col-form-label">Are you receiving any assistance from the Hong Kong government / NGOs to support your basic food needs?<span class="must1">*</span>  </label>
                <select id="Pc-F3"  class="Pc-F"  name="Pc-F3">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
              </div>  
              <div class="add_on" id="have_partF3">
                <div class="form-group row" >
                  <label for="Pc-F3__word" class="col-xs-6 col-sm-3 col-form-label"> If yes, specify the reasons: <span class="must1">*</span>  </label>   
                  <input type="text" class="form-control" id="Pc-F3__word" name="Pc-F3__word">
                  </div>
              </div>

              <div class="form-group row" >
                <label for="Pc-F4" class="col-xs-7 col-sm-7 col-form-label">Do you have any other food concerns? If yes, please specify:  </label>
                <input type="text" class="form-control" id="Pc-F4" name="Pc-F4">  
              </div>  
              
              <br>
              <h4 class="responsive">Disability or Impairment</h4>
              <div class="form-group row" >
                <label for="Pc-D1" class="col-xs-7 col-sm-7 col-form-label">Do you have difficulties in seeing (even when you are wearing glasses, if applicable)?<span class="must1">*</span>  </label>
                <select id="Pc-D1"  class="Pc-D"  name="Pc-D1">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
              </div>  
              <div class="form-group row" >
                <label for="Pc-D2" class="col-xs-7 col-sm-7 col-form-label">Do you have difficulties in hearing / listening (even when you are wearing a hearing aid, if applicable)?<span class="must1">*</span>  </label>
                <select id="Pc-D2"  class="Pc-D"  name="Pc-D2">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
              </div>  
              <div class="form-group row" >
                <label for="Pc-D3" class="col-xs-7 col-sm-7 col-form-label">Do you have difficulties in concentrating or remembering things?<span class="must1">*</span>  </label>
                <select id="Pc-D3"  class="Pc-D"  name="Pc-D3">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
              </div>  
              <div class="form-group row" >
                <label for="Pc-D4" class="col-xs-7 col-sm-7 col-form-label">Do you have difficulties in walking or climbing stairs?<span class="must1">*</span>  </label>
                <select id="Pc-D4"  class="Pc-D"  name="Pc-D4">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
              </div>  
              <div class="form-group row" >
                <label for="Pc-D5" class="col-xs-7 col-sm-7 col-form-label">Do you have any other disabilities? If yes, please specify: </label>
                <input type="text" class="form-control" id="Pc-D5" name="Pc-D5">
              </div>  

              <br>
              <h4 class="responsive">Pregnancy</h4>
              <div class="form-group row" >
                <label for="Pc-P1" class="col-xs-7 col-sm-7 col-form-label">Are you pregnant?<span class="must1">*</span>  </label>
                <select id="Pc-P1"  class="Pc-P"  name="Pc-P1">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
              </div>  
              <div class="add_on" id="have_partP1">
                <div class="form-group row" >
                  <label for="Pc-P1__word" class="col-xs-6 col-sm-3 col-form-label"> If yes, how long have you been pregnant? ( weeks ) <span class="must1">*</span>  </label>   
                  <input type="text" class="form-control" id="Pc-P1__word" name="Pc-P1__word" placeholder="weeks (i.e. 7 weeks)">
                  </div>
              </div>
              <div class="form-group row" >
                <label for="Pc-P2" class="col-xs-7 col-sm-7 col-form-label">Do you have any other pregnancy concerns? If yes, please specify: </label>
                <input type="text" class="form-control" id="Pc-P2"  name="Pc-P2">
              </div>  


              <br>
              <h4 class="responsive">Minor</h4>

              <div class="form-group row" >
                <label for="Pc-I1" class="col-xs-7 col-sm-7 col-form-label">Are you a minor (i.e. under 18 years old)?<span class="must1">*</span>  </label>
                <select id="Pc-I1"  class="Pc-I"  name="Pc-I1">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
              </div>  
              <div class="form-group row" >
                <label for="Pc-I2" class="col-xs-7 col-sm-7 col-form-label">Are you a parent or guardian of minor(s)?<span class="must1">*</span>  </label>
                <select id="Pc-I2"  class="Pc-I"  name="Pc-I2">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
              </div>  
              <div class="form-group row" >
                <label for="Pc-I3" class="col-xs-7 col-sm-7 col-form-label">Do you have any other concerns related to yourself or your family members’ minor identity? If yes, please specify: </label>
                <input type="text" class="form-control" id="Pc-I3"  name="Pc-I3">
              </div>  

              <br>
              <h4 class="responsive">Psychological support</h4>
              <div class="form-group row" >
                <label for="Pc-S1" class="col-xs-7 col-sm-7 col-form-label">Would you like any psychological support/assistance? <span class="must1">*</span>  </label>
                <select id="Pc-S1" name="Pc-S1">
                    <option disabled selected value>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>       
              </div>  

              <br>
              <h5 class="responsive"><strong>[Non-compulsory question]</h5>
              <div class="form-group row" >
                <label for="Pc-N1" class="col-xs-7 col-sm-7 col-form-label"><strong>Please let us know if you have any other concerns that have not been specified above: </strong></label>
                <input type="text" class="form-control" id="Pc-N1" name="Pc-N1">
              </div>  

            </fieldset>
            </div>
          <input type="hidden" name='h' id='h' value="N">
          <input type="hidden" name='f' id='f' value="N">
          <input type="hidden" name='d' id='d' value="N">
          <input type="hidden" name='c' id='c' value="Null">
          </form>
          </div><!-- Content  page -->
        </div> <!-- End of Client Reg form -->
        
                      <div class="btnbutton">
                        <!-- Pre, Next Button -->
                        <div class="row" style ="margin-bottom: 100px" >
                        <div class='col-xs-4 col-4 col-sm-4 col-md-4' > 
                             <button type="button" class="lastStepBtn btn btn-own " id="lastBtn" onclick="nextPrev(-1)">Previous Page</button>
                          </div>
                          <div class='col-xs-4 col-4 col-sm-4 col-md-4' > 
                          </div>

                          <div class='col-xs-3 col-3 col-sm-3 col-md-3' > 
                             <button type="button" class="nextStepBtn btn btn-own " id="nextBtn" onclick="nextPrev(1)">Next Page</button>
                          </div>
                        </div>
                        </div>

        </div>
        </div><!-- content page -->
  </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js" integrity="sha512-VKjwFVu/mmKGk0Z0BxgDzmn10e590qk3ou/jkmRugAkSTMSIRkd4nEnk+n7r5WBbJquusQEQjBidrBD3IQQISQ==" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script src="./js/sha256.js"></script>
<script src="./js/date_safari.js"></script>
<script src="./js/process.js"></script>
<script src="./js/convert_pdf.js"></script>
<script src="./js/google_translate.js"></script>

<?php 
   require("footer.php"); 
?>
</body>

</html>

