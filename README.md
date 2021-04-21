# IronTech

Documentation :

PHP 
1. index.php    landing page
2. basic.php    Session A of our tool -- The Registration Form
3. keyword.php  Session B of our tool -- The Keyword Identification Part
4. result.php   Last Session of our tool -- The result showing page 

Special fucntion php
1. head.php         -- all metadata & stylesheet to be applied of all pages
2. header.php       -- the top navigation bar of all pages
3. footer.php       -- the footer of all pages
4. google-drive.php -- This is the php page where it creates the google-drive api client for later usage
5. google-drive_upload.php -- The is the php page where it handles real uploading / opening new folders [ It apply the api]
6. send_gmail.php -- This is the php page where it creates the google-gmail api client for later usage
7. send_email.php -- This is the php page where it handles sending automatic email part [ It apply the api]
8. x.php -- for indirect link ( for goolge api to indirect )
9. save_file.php -- The is the php to save uploaded_file in local device 


JSON 
1. credentials_gamil.json -- It is the json file generated from google-gmail api ( link in below )
2. credentials.json       -- It is the json file generated from google-drive api ( link in below )

File 
1. vendor -- it is the composer file including all Google api script
2. photo -- it includes all the photos of our webpages
3. css -- it includes all the css styling sheet of our webpages
4. js -- it includes all the JavaScript files that are used 
5. JCHK Client -- it includes the uploaded_file ( our web first store it in this file then upload to google drive)

JavaScript file
1. check.js -- validation of the index.php
2. clien_pdf.js -- generate the ultimate report for the client
3. convert_pdf.js -- generate the Client registration form report to the drive
4. **keyword_char.js** -- it includes all the keywords and follow up questions ( as json format ) , so if you have any additional keywords/ follow-up questions, can put all in this js file
5. **keyword_identify.js** -- it includes all the logic in the keyword identification page keyword.php , & generate new pop-up cards
5. process.js -- it includes all the logic in the basic.php ( and handle data flow and trigger upload google drive / SWAL )
6. result.js -- it includes all the logic in the result.php
7. sha256.js / sha256.min.js -- it includes all the encryption method js
8. story_telling.js -- it includes the story-telling pdf generate

**Please noted that :**

**Google Gmail api : https://developers.google.com/gmail/api/quickstart/php**

**Google Drive api : https://developers.google.com/drive/api/v3/quickstart/php**


**This webpage is published in :**

**1. Landing Page :  https://yipmeme.wixsite.com/my-site-2**

**2. Our tool site : https://thecompass.infinityfreeapp.com/ **
