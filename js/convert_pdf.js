var doc = new jsPDF();
let name_of_pdf = "";

function generate_pdfA() {

    //Part A -----------------------------------------------------------------------------------
    name_of_pdf = Client_number + ".pdf";

    doc.text("Reference number : ", 15, 15);
    doc.setFontSize(11);
    doc.text(Client_number, 70, 15);
    doc.setFontSize(16);
    doc.setFontType("italic");
    doc.text("Part A Questions - Biography", 20, 30);

    // content
    doc.setFontSize(10);
    doc.setFontType("normal");
    doc.setFontType("normal");
    doc.text("Client first name : " + $('#client-first-name').val(), 20, 40);
    doc.text("last name : " + $('#client-last-name').val(), 90, 40);
    if ($('#client-middle-name').val() != '' & $('#client-middle-name').val() != null) {
        doc.text("middle name : " + $('#client-middle-name').val(), 150, 40);
    }
    var e0 = document.getElementById("client-first-language");
    var e1 = document.getElementById("client-other-language");

    doc.text("Client first language : " + e0.options[e0.selectedIndex].text, 20, 50);
    doc.text("Client second language : " + e1.options[e0.selectedIndex].text, 80, 50);

    if ($('#interpreter').val() != "No") {
        doc.text("Need Interpreter : " + $('#client-prefer-intergender').val(), 150, 50);
    } else {
        doc.text("Need Interpreter : No", 150, 50);
    }

    doc.text("Client phone : " + $('#client-phone').val(), 20, 60);

    doc.text("Client address : " + $('#client-address').val(), 20, 70);

    doc.text("Client nationality : " + $('#client-nationality').val(), 20, 80);

    doc.text("Client gender : " + $('#client-prefer-gender').val(), 20, 90);

    doc.text("Client birth : " + $('#client-brith').val(), 20, 100);


    doc.text("Client family members in Hong Kong : " + $('#client-family').val(), 20, 110);
    let y = 120;

    if ($('#client-family').val() == "Yes") {
        let x1 = 20;
        let x2 = 50;
        let x3 = 100;
        let x4 = 150;
        let n = 0;

        doc.setFontType("italic");
        doc.text("Relationship", x1, y);
        doc.text("Name", x2, y);
        doc.text("Date of Birth", x3, y);
        doc.text("Country of Nationality", x4, y);

        doc.setFontType("normal");
        let cure_y = y;
        $('.client-family-relationship').each(function() {
            n++
            cure_y += 10;
            if ($(this).val() != "" && $(this).val() !== null) {
                doc.text($(this).val(), x1, cure_y);
            }
        });
        cure_y = y;
        $('.client-family-name').each(function() {
            cure_y += 10;
            if (n == 2) { x = x2; } else if (n == 3) { x = x3; } else if (n == 4) { x = x4; }
            if ($(this).val() != "" && $(this).val() !== null) {
                doc.text($(this).val(), x2, cure_y);
            }
        });
        cure_y = y;
        $('.client-family-birth').each(function() {
            cure_y += 10;
            if (n == 2) { x = x2; } else if (n == 3) { x = x3; } else if (n == 4) { x = x4; }
            if ($(this).val() != "" && $(this).val() !== null) {
                doc.text($(this).val(), x3, cure_y);
            }
        });
        cure_y = y;
        $('.client-family-nationality').each(function() {
            cure_y += 10;
            if (n == 2) { x = x2; } else if (n == 3) { x = x3; } else if (n == 4) { x = x4; }
            if ($(this).val() != "" && $(this).val() !== null) {
                doc.text($(this).val(), x4, cure_y);
            }
        });
        y = cure_y;

    }

    doc.text("Client arrival in Hong Kong : " + $('#client-arrival').val(), 20, y);
    y += 10;

    doc.text("Client detained after arrived HK  : " + $('#client-detained').val(), 20, y);
    if ($('#client-detained').val() == "Yes") {
        doc.text(" When  : " + $('#client-have_detained').val(), 90, y);
    }
    y += 10;

    doc.text("Client have Recognizance paper  : " + $('#client-recognizance').val(), 20, y);
    if ($('#client-recognizance').val() == "Yes") {
        if ($('#client-have_recognizance').val() == "other") {
            doc.text(" Which  : " + $('#client-have_recognizance').val() + " --  " + $('#client-have_recognizance-other').val(), 90, y);
        } else {
            doc.text(" Which  : " + $('#client-have_recognizance').val(), 90, y);
        }
    }
    y += 10;

    doc.text("Client upcoming hearing or deadline  : " + $('#client-case').val(), 20, y);
    if ($('#client-case').val() == "Yes") {
        doc.text(" When  : " + $('#client-have_case').val(), 90, y);
    }
    y += 10;

    doc.text("Client preferred gender of caseworker : " + $('#client-worker_gender').val(), 20, y);
    y += 10;
    doc.addPage();
}

//Part B---------------------------------------------------------------------------------------
function generate_pdfB() {

    y = 20;
    doc.setFontSize(16);
    //Part A -----------------------------------------------------------------------------------
    doc.setFontType("italic");
    doc.text("Part B Questions - Evidence", 20, y);
    y += 20;
    doc.setFontSize(10);
    doc.setFontType("normal");

    doc.text("Client stage of claim : " + $('input[name="stage"]:checked').val(), 20, y);
    y += 10;

    doc.text(" Have you been assisted by any duty lawyer : " + $('#Pb-partf').val(), 20, y);
    if ($('#Pb-partf').val() == "Yes") {
        y += 10;
        doc.text(" Lawer Name  : " + $('#Pb-partf_lawername').val(), 40, y);
        doc.text(" Lawer Contact  : " + $('#Pb-partf_lawercontact').val(), 100, y);
    }
    y += 10;

    // set sub-title ------------------------------------- 1
    y += 10;
    doc.setFontSize(13);
    doc.setFontType("italic");
    doc.text("1. Unregistered", 20, y);
    y += 10;
    doc.setFontSize(10);
    doc.setFontType("normal");
    // up here------------------------------------------

    doc.text(" Have valid visa : " + $('#Pb-visa-own').val(), 20, y);
    if ($('#Pb-visa-own').val() == "Yes") {
        doc.text("What visa  : " + $('#Pb-visa-type').val(), 70, y);
        doc.text("When expire  : " + $('#Pb-visa-expire').val(), 130, y);
    }
    y += 10;

    // set sub-title ------------------------------------- 2 
    y += 10;
    doc.setFontSize(13);
    doc.setFontType("italic");
    doc.text("2.Immigration Department", 20, y);
    y += 10;
    doc.setFontSize(10);
    doc.setFontType("normal");
    // up here------------------------------------------

    doc.text("a. Have you delivered written signification ? " + $('#Pb-ws').val(), 20, y);
    y += 10;
    doc.text("b. Have you received letter of confirmation ? " + $('#Pb-loc').val(), 20, y);
    y += 10;
    doc.text("c. Have the Immigration Department asked you for more information before making the decision? " + $('#Pb-partc').val(), 20, y);
    y += 10;
    if ($('#Pb-partc').val() == "Yes") {
        doc.text("  -  What information is it about? " + $('#Pb-partc_word').val(), 20, y);
        y += 10;
    }
    doc.text("d. Have you collected your <strong>Recognizance Document ? " + $('#Pb-partd').val(), 20, y);
    y += 10;
    doc.text("e. Have you attended a briefing session with immigration department? " + $('#Pb-parte').val(), 20, y);
    if ($('#Pb-parte').val() != "No") {
        y += 10;
        doc.text("date : " + $('#Pb-visa-type').val(), 40, y);
    }
    y += 10;
    doc.text("f. Have you submitted the <strong>non-refoulement claim form  " + $('#Pb-partg').val(), 20, y);
    y += 10;
    doc.text("g. Have you received a letter issued by the Immigration Department to invite you to attend a screening interview? " + $('#Pb-parth').val(), 20, y);
    if ($('#Pb-parte').val() != "No") {
        y += 10;
        doc.text("date : " + $('#Pb-visa-type').val(), 40, y);
    }
    y += 10;
    doc.text("h. Has the Immigration Department made a decision about whether or not to grant you protection in Hong Kong  " + $('#Pb-parti').val(), 20, y);
    y += 10;
    if ($('#Pb-parti').val() == "Yes") {
        doc.text("  - If yes, is it successful or refused?  " + $('#Pb-parti_1').val(), 20, y);
        y += 10;
        doc.text("  - Have you received the official decision document from the Immigration Document?   " + $('#Pb-parti_2').val(), 20, y);
        y += 10;
    }

    // set sub-title ------------------------------------- 3
    y += 10;
    doc.addPage();
    y = 20;
    doc.setFontSize(13);
    doc.setFontType("italic");
    doc.text("3.Torture Claims Appeal Board ", 20, y);
    y += 10;
    doc.setFontSize(10);
    doc.setFontType("normal");
    // up here------------------------------------------------------------------------------
    doc.text("a. Have you appeal to the Torture Claims appeal Board/ Non-refoulment Claims Petition Office?  " + $('#Pb-part3a').val(), 20, y);
    y += 10;

    doc.text("b. Have you attended an appeal hearing?  " + $('#Pb-part3c').val(), 20, y);
    if ($('#Pb-part3c').val() != "No") {
        // part c stuff x2
        doc.text("  - date: " + $('#Pb-part3c_date').val(), 120, y);
    }
    y += 10;

    doc.text("c. Has the appeal been decided by the Appeal Board / Adjudicator? " + $('#Pb-part3d').val(), 20, y);
    if ($('#Pb-part3d').val() != "No") {
        // part c stuff x2
        y += 10;
        doc.text("If yes, is the appeal successful or refused? " + $('#Pb-part3d_result').val(), 40, y);
    }
    y += 10;

    doc.text(" - Have you received the official decision document from the Appeal Board? " + $('#Pb-part3d2').val(), 40, y);
    doc.addPage();
}

function generate_pdfC() {

    y = 20;
    doc.setFontSize(16);
    //Part A -----------------------------------------------------------------------------------
    doc.setFontType("italic");
    doc.text("Part C Questions - Vulnerability Identification ", 20, y);
    y += 20;
    // set sub-title ------------------------------------- 1
    doc.setFontType("italic");
    doc.setFontSize(13);
    doc.text("Housing", 20, y);
    y += 10;
    doc.setFontSize(10);
    doc.setFontType("normal");
    // up here------------------------------------------
    doc.text("Do you face a risk of eviction from where you live : " + $('#Pc-H1').val(), 20, y);
    y += 10;
    if ($('#Pc-H1').val() != "No") {
        // part c stuff x2
        doc.text(" If yes, specify the reasons: " + $('input[name="Pc-H1__choose"]:checked').val(), 20, y);
        y += 10;
    }
    doc.text("Have you defaulted in rent payment in the past 6 months : " + $('#Pc-H2').val(), 20, y);
    y += 10;
    doc.text("Do you have a written agreement between you and the landlord : " + $('#Pc-H3').val(), 20, y);
    y += 10;

    doc.text("Have you defaulted in rent payment in the past 6 months : " + $('#Pc-H4').val(), 20, y);
    y += 10;

    doc.text("Do you have any other housing concerns? If yes, please specify:  " + $('#Pc-H5').val(), 20, y);
    y += 10;
    // set sub-title ------------------------------------- 1
    doc.setFontType("italic");
    y += 10;
    doc.setFontSize(13);
    doc.text("Medical", 20, y);
    y += 10;
    doc.setFontSize(10);
    doc.setFontType("normal");
    // up here------------------------------------------
    doc.text("Are you or any of your family members able to access hospitals/clinics in the past six months? " + $('#Pc-M1').val(), 20, y);
    y += 10;
    doc.text("Do you or any of your family members have a medical condition / injury? " + $('#Pc-M2').val(), 20, y);
    y += 10;
    if ($('#Pc-H1').val() != "No") {
        // part c stuff x2
        doc.text("Does identified medical problem/disability affect the person’s ability to perform activity of daily living (eating, bathing, toileting, dressing, transferring) ", 20, y);
        y += 10;
        doc.text(" toileting, dressing, transferring) " + $('#Pc-M2-1').val(), 20, y);
        y += 10;
        doc.text("Does identified medical problem/disability affect your ability to work? " + $('#Pc-M2-2').val(), 20, y);
        y += 10;
    }
    doc.text("Do you have any other medical concerns? If yes, please specify:  " + $('#Pc-M3').val(), 20, y);
    y += 10;
    // set sub-title ------------------------------------- 1
    doc.setFontType("italic");
    y += 10;
    doc.setFontSize(13);
    doc.text("Food", 20, y);
    y += 10;
    doc.setFontSize(10);
    doc.setFontType("normal");
    // up here------------------------------------------
    doc.text("In general do you think you have enough food during your time in Hong Kong? " + $('#Pc-F1').val(), 20, y);
    y += 10;
    doc.text("Have you experienced prolonged starvation during your time in Hong Kong : " + $('#Pc-F2').val(), 20, y);
    y += 10;
    if ($('#Pc-H1').val() != "No") {
        // part c stuff x2
        doc.text("Do you still experience occasional starvation as of this moment? " + $('#Pc-F2__word').val(), 20, y);
        y += 10;
    }
    doc.text("Are you receiving any assistance from the Hong Kong government / NGOs to support your basic food needs? " + $('#Pc-F3').val(), 20, y);
    y += 10;
    if ($('#Pc-F3').val() != "No") {
        // part c stuff x2
        doc.text("If yes, specify the reasons: " + $('#Pc-F3__word').val(), 20, y);
        y += 10;
    }
    doc.text("Do you have any other food concerns? If yes, please specify:  " + $('#Pc-F4').val(), 20, y);
    y += 10;
    doc.addPage();
    y = 20;
    // set sub-title ------------------------------------- 1
    doc.setFontType("italic");
    y += 10;
    doc.setFontSize(13);
    doc.text("Disability or Impairment", 20, y);
    y += 10;
    doc.setFontSize(10);
    doc.setFontType("normal");
    // up here------------------------------------------
    doc.text("Do you have difficulties in seeing (even when you are wearing glasses, if applicable)? " + $('#Pc-D1').val(), 20, y);
    y += 10;
    doc.text("Do you have difficulties in hearing / listening (even when you are wearing a hearing aid, if applicable)?" + $('#Pc-D2').val(), 20, y);
    y += 10;
    doc.text("Do you have difficulties in concentrating or remembering things?" + $('#Pc-D3').val(), 20, y);
    y += 10;
    doc.text("Do you have difficulties in walking or climbing stairs?" + $('#Pc-D4').val(), 20, y);
    y += 10;
    doc.text("Do you have any other disability? If yes, please specify: " + $('#Pc-D5').val(), 20, y);
    y += 10;

    // set sub-title ------------------------------------- 1
    doc.setFontType("italic");
    y += 10;
    doc.setFontSize(13);
    doc.text("Pregnancy", 20, y);
    y += 10;
    doc.setFontSize(10);
    doc.setFontType("normal");
    // up here------------------------------------------
    doc.text("Are you pregnant? " + $('#Pc-P1').val(), 20, y);
    y += 10;
    if ($('#Pc-F1').val() != "No") {
        // part c stuff x2
        doc.text("If yes, how long have you been pregnant? ( MM/YY )  " + $('#Pc-P1__word').val(), 20, y);
        y += 10;
    }
    doc.text("Do you have any other pregnancy concerns? If yes, please specify: ?" + $('#Pc-P2').val(), 20, y);
    y += 10;

    // set sub-title ------------------------------------- Minor
    doc.setFontType("italic");
    doc.setFontSize(13);
    doc.text("Minor", 20, y);
    y += 10;
    doc.setFontSize(10);
    doc.setFontType("normal");
    // up here------------------------------------------
    doc.text("Are you a minor (i.e. under 18 years old)? " + $('#Pc-I1').val(), 20, y);
    y += 10;
    doc.text("Are you a parent or guardian of minor(s)? " + $('#Pc-I2').val(), 20, y);
    y += 10;
    doc.text("Do you have any other concerns related to yourself or your family members’ minor identity? If yes, please specify:  " + $('#Pc-I3').val(), 20, y);
    y += 10;

    // set sub-title ------------------------------------- Psychological
    doc.setFontType("italic");
    doc.setFontSize(13);
    doc.text("Psychological support", 20, y);
    y += 10;
    doc.setFontSize(10);
    doc.setFontType("normal");
    // up here------------------------------------------
    doc.text("Would you like any psychological support/assistance? " + $('#Pc-S1').val(), 20, y);
    y += 10;
    // set sub-title ------------------------------------- [Non-compulsory question]
    doc.setFontType("bold");
    doc.setFontSize(13);
    doc.text("[Non-compulsory question]", 20, y);
    y += 10;
    doc.setFontSize(10);
    doc.setFontType("normal");
    // up here------------------------------------------
    doc.text("Please let us know if you have any other concerns that have not been specified above: " + $('#Pc-N1').val(), 20, y);
    y += 20;

    // last ---------------------------
    doc.setTextColor(255, 0, 0);
    doc.text("---------------------------------------------------------------------------------------------------------------------------------------------", 20, y);
    doc.setTextColor(0, 0, 0);
    doc.text("For JCHK backstage record (JCHK worker filling in this after reading the client’s information)", 20, y);
    y += 20;
    doc.setFontType("bold");
    doc.text("Vulnerabilities", 20, y);
    doc.setFontType("normal");
    doc.setFontType("italic");
    doc.setTextColor(100);
    doc.text("Circle the element", 50, y);
    doc.setTextColor(0, 0, 0);
    doc.setFontType("normal");
    y += 10;
    doc.text("Minor (<18)                Security concerns           Parent or guardian of minor(s) l concerns", 20, y);
    y += 10;
    doc.text("Psychological concerns     Pregnant                   Other’s    ", 20, y);
    y += 20;

    doc.setTextColor(255, 0, 0);
    doc.text("---------------------------------------------------------------------------------------------------------------------------------------------", 20, y);

}


function download_pdf() {

    var blob = doc.output("blob");

    var formData = new FormData();
    formData.append('file', blob);
    formData.append('case_id', Client_number);
    formData.append('photos', 0);
    formData.append('what', "Client_registration_form");

    var pdf = btoa(doc.output());
    $.ajax({
        url: "google-drive_upload.php",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) { console.log(data) },
        error: function(data) { console.log(data) }
    });

}