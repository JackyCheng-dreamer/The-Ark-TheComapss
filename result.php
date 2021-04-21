<!DOCTYPE html>
<html lang="en-US">
<head>
  
  <?php 
    require("head.php");
    ?>
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <style>
    .Result {
                height:1500px !important;
                overflow-y: auto;
                margin-bottom:30px;
            }
    </style>
    
</head>
<body>
<!-- Just nav bar -->
  <?php require("header.php"); ?>
  <!-- main container -->
  
  <div class="container container_a">
        <!--  Result page -->
        <div class="Result">
          <div class="row">
            <div class="col-xs-8 col-sm-8"> 
           <h2 class="responsive" > Result Page </h2> 
           </div>
           <div class="col-xs-4 col-sm-4">
             
           </div>
          </div> <br>
          <div class ="Result_for_PDF"> 
           <h4 class="responsive"> Reference number: <?= $_POST['c']?> </h4>
            <br>
           <h5 class="responsive" > Part1 </h5>
           <div id ="Result_Part1">
              “Your registration has been received. Justice Centre Hong Kong will review your application and contact you for further interviews as soon as possible”
              <br>Your case reference number is <i>"<?= $_POST['c'] ?>"</i>
            </div>
            <br>
           <h5 class="responsive" > Part2 </h5>
            <div id="copy_pdf"></div>
            <div id="haveNGOs">
            <small><i>“Based on the vulnerability report that you have just submitted to us, we have provided a list of NGOs that are providing assistance.while we are processing your case, If you need any urgent help, you may consider contacting the following NGOs” 
                Disclaimer: This list of NGOs is for reference only, and does not indicate Justice Centre Hong Kong’s connections with them. JCHK does not guarantee that you will be able to seek assistance from these NGOs.
                </i></small>
            
            </div>

            <div id="f" class="NGOs">
              <br>
              <u>Food - NGOs</u>

              <div class="NGO"> -  Food Angel (by Bo Charity Foundation) (惜食堂)
                  <ul style="list-style-type:circle">
                  <li>Address: 2/F, Fung Sing Building, 235 Hai Tan Street, Sham Shui Po, Kowloon
                  </li><br>
                  <li>
Website: http://www.foodangel.org.hk/index.php?l=en 
                  </li><br>
                  <li>
                  Telephone: +852 2801 5333 
                  </li><br>
                  </ul>
              </div>
            </div> 
             
            <div id="h" class="NGOs">
              <u>Housing - NGOs</u>

              <div class="NGO"> - Emergency Housing: Christian Action Centre for Refugees (基督教勵行會)
                  <ul style="list-style-type:circle">
                  <li>
                  Address: Rm.6, 16/F., Block E, Chungking Mansions, 36-44 Nathan Road, Kln, Tsim Sha Tsui
                  </li><br>
                  <li>
                  Website: https://www.christian-action.org.hk/
                  </li><br>
                  <li>
                  Telephone: 27236626
                  </li><br>
                  </ul>
              </div>
              <div class="NGO"> - Housing Subsidy: Branches of Hope (希望枝子)
                  <ul style="list-style-type:circle">
                  <li>
                  Address: 29 Burrows St, Wan Chai
                  </li><br>
                  <li>
                  Website: https://branchesofhope.org.hk/
                  </li><br>
                  <li>
                  Telephone: 35276088
                  </li><br>
                  </ul>
              </div>
            </div>
            <br>
            
            <div id="d" class="NGOs">
            <u>Disability - NGOs</u>
            <br>
            <div class="NGO"> - <strong>Q1 Blind:</strong> The Hong Kong Society for the Blind (香港盲人輔導會)
                  <ul style="list-style-type:circle">
                  <li>
                  Address: 248 Nam Cheong Street, Shamshuipo, Kowloon.
                  </li><br>
                  <li>
                  Website: https://www.hksb.org.hk/en/ 
                  </li><br>
                  <li>
                  Telephone: +852 2778 8332
                  </li><br>
                  </ul>
              </div>
              <div class="NGO"> <strong>Q2 Deaf:</strong> The Hong Kong Society for the Deaf (香港聾人福利促進會)
                  <ul style="list-style-type:circle;">
                  <li>
                  Address: Duke of Windsor Social Service Building, 15 Hennessy Road, Wanchai, Hong Kong 
                  </li><br>
                  <li>
                  Website: https://www.deaf.org.hk/ 
                  </li><br>
                  <li>
                  Telephone: +852 2527 8969
                  </li><br>
                  </ul>
              </div>
              <div class="NGO"> <strong>Q2 Deaf:</strong> The Hong Kong Society for the Deaf (香港聾人福利促進會)
                  <ul style="list-style-type:circle;">
                  <li>
                  Address: Duke of Windsor Social Service Building, 15 Hennessy Road, Wanchai, Hong Kong 
                  </li><br>
                  <li>
                  Website: https://www.deaf.org.hk/ 
                  </li><br>
                  <li>
                  Telephone: +852 2527 8969
                  </li><br>
                  </ul>
              </div>
              <div class="NGO"> <strong>Q4 Immobility:</strong>  Hong Kong PHAB Association (香港傷健協會)
                  <ul style="list-style-type:circle">
                  <li>Address: Room 1402, The Hong Kong Federation Of Youth Groups Building, 21 Pak Fuk Rd, Tsat Tsz Mui
                  </li><br>
                  <li>
                  Website: :www.hkphab.org.hk/ 
                  </li><br>
                  <li>
                  Telephone: + 852 2551 4161
                  </li><br>
                  </ul>
              </div>
            </div>

            </div>
            <div id="General_info">
            <ul><li>For more information, please refer to the links below: 
              <ul> 
                <li>Contact JCHK: follow us on our social media page </li>
                <li>Facebook: https://www.facebook.com/JusticeCentreHongKong/ </li>
                <li>Twitter: https://twitter.com/justicecentrehk </li>
                <li>Instagram: https://www.instagram.com/justicecentrehk/ </li>
                <li>LinkedIn: https://www.linkedin.com/company/justice-centre-hong-kong/ </li>
                <li>Youtube: https://www.youtube.com/channel/UCyKfwIcg4wFHcD5wc9iOxfQ </li>
              </ul>
              </li>
            </ul>
            <br>

            <ul><li>HK Asylum Guide 
            <ul> 
              <li>This app is a guide to making a non-refoulement claims in Hong Kong for asylum seekers. If you are in Hong Kong and cannot live safely in your home country, you may need to apply for protection.</li>
              <li>If you are afraid to go back to your home country because you might be killed, tortured or seriously harmed, or your human rights will be seriously restricted, you can apply for asylum. In Hong Kong, you do this by making a non-refoulement claim under the Unified Screening Mechanism (USM). </li>
              <li>This app is a guide that will walk you through the USM process. It will help you to:
                <ul>
                  <li> Understand what the USM process is.   </li>
                  <li> Understand whether you should apply.  </li>
                  <li> Understand how to make an application.  </li>
                  <li> Know which people to speak to and where you can find them.  </li>
                </ul>
              </li>

              <li>This app is available on a range of devices and can be used offline. It provides links to other relevant resources and organisations and contact information for Justice Centre Hong Kong if you need further support. The app is also available in a website version.</li>
              <li>iOS: https://apps.apple.com/us/app/hk-asylum-guide/id1537953818 </li>
              <li>Google Play Store: https://play.google.com/store/apps/details?id=com.justicecentre.hkasylumguide&hl=pt_BR&gl=US </li>
              <li>hkasylumguide.justicecentre.org.hk  </li>
              </ul>
              </li>
            </ul>
            <br>

            <ul><li>For more information, please refer to the links below: 
              <ul> 
                <li>Contact JCHK: follow us on our social media page </li>
                <li>Facebook: https://www.facebook.com/JusticeCentreHongKong/ </li>
                <li>Twitter: https://twitter.com/justicecentrehk </li>
                <li>Instagram: https://www.instagram.com/justicecentrehk/ </li>
                <li>LinkedIn: https://www.linkedin.com/company/justice-centre-hong-kong/ </li>
                <li>Youtube: https://www.youtube.com/channel/UCyKfwIcg4wFHcD5wc9iOxfQ </li>
              </ul>
              </li>
            </ul>
            <br>
            
            <ul>
            <li>HKSAR Government Official Website
              <ul>
                <li>Torture Claims Appeal Board / Non-refoulemnt Claims Petition Office https://www.sb.gov.hk/eng/links/tcab/index.html  </li>
              </ul>
            </li>
            </ul>
            
            <div id="elementH"></div>
            
            

</div>

  </div>
  
  <div class="mx-auto" style="width: 300px;">
      <button type="button" id="save"> <strong> Save as PDF </strong></button>
      </div>

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

<script src="./js/google_translate.js"></script>
<script src="./js/client_pdf.js"></script>
<script src="./js/result.js"></script>
<script src="./js/date_safari.js"></script>


<script>
             GetSession( '<?= $_POST['h'] ?>' , '<?= $_POST['f'] ?>', '<?= $_POST['d'] ?>', '<?= $_POST['c'] ?>'    );
           </script>

<?php 

   require("footer.php"); 
?>
</body>

</html>

