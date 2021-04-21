var doc = new jsPDF();
var name_of_pdf = "";
var generated = false;
var string_pdf = 'For more information, please refer to the links below: \n' +
    "Contact JCHK: follow us on our social media page \n" +
    "Facebook: https://www.facebook.com/JusticeCentreHongKong/ \n" +
    "Twitter: https://twitter.com/justicecentrehk \n" +
    "Instagram: https://www.instagram.com/justicecentrehk/ \n" +
    "LinkedIn: https://www.linkedin.com/company/justice-centre-hong-kong/ \n" +
    "Youtube: https://www.youtube.com/channel/UCyKfwIcg4wFHcD5wc9iOxfQ \n" +
    "\n" +
    "HK Asylum Guide\n" +
    "This app is a guide to making a non-refoulement claims in Hong Kong for asylum seekers. If you are in Hong Kong and cannot live safely in your home country, you may need to apply for protection.\n" +
    "If you are afraid to go back to your home country because you might be killed, tortured or seriously harmed, or your human rights will be seriously restricted, you can apply for asylum. In Hong Kong, you do this by making a non-refoulement claim under the Unified Screening Mechanism (USM).\n" +
    "This app is a guide that will walk you through the USM process. It will help you to:\n" +
    "    -Understand what the USM process is. \n" +
    "    -Understand whether you should apply.\n" +
    "    -Understand how to make an application.\n" +
    "    -Know which people to speak to and where you can find them.\n\n" +
    "This app is available on a range of devices and can be used offline. It provides links to other relevant resources and organisations and contact information for Justice Centre Hong Kong if you need further support. The app is also available in a website version.\n" +
    "iOS: https://apps.apple.com/us/app/hk-asylum-guide/id1537953818\n" +
    "Google Play Store: https://play.google.com/store/apps/details?id=com.justicecentre.hkasylumguide&hl=pt_BR&gl=US\n\n" +
    "hkasylumguide.justicecentre.org.hk\n" +
    "\n\n" +
    "For more information, please refer to the links below:\n" +
    "    -Contact JCHK: follow us on our social media page\n" +
    "    -Facebook: https://www.facebook.com/JusticeCentreHongKong/\n" +
    "    -Twitter: https://twitter.com/justicecentrehk\n" +
    "    -Instagram: https://www.instagram.com/justicecentrehk/\n" +
    "    -LinkedIn: https://www.linkedin.com/company/justice-centre-hong-kong/\n" +
    "    -Youtube: https://www.youtube.com/channel/UCyKfwIcg4wFHcD5wc9iOxfQ\n" +
    "\n" +
    "HKSAR Government Official Website\n" +
    "    -Torture Claims Appeal Board / Non-refoulemnt Claims Petition Office \n     -https://www.sb.gov.hk/eng/links/tcab/index.html';"

function generate_Client_pdf() {


    /*// doc . setFonSize ( number )  number is the font size 
    // doc . setFontType("italic")  set font type, [ italic鈄字 , normal=正常 , bold]
    // doc . addPage();   // Add new page 開一版新page

    doc.text("Reference number : ", 15, 15);
    doc.setFontSize(11);
    doc.text(Client_number, 70, 15);
    doc.setFontSize(16);
    doc.setFontType("italic");

    y = 30; // y coordinate of the report text
    x = 20; // x coordinate of the report text
    doc.text("Your report : ", x, y);
    y += 10; // y coordinate每次 + 10, so 去下一行

    // 轉返正常字
    doc.setFontType("normal");
    // 正常size
    doc.setFontSize(10);
    doc.text("Food - NGOs ", x, y);
    y += 10; // y coordinate每次 + 10, so 去下一行
    doc.text(" -  Food Angel (by Bo Charity Foundation) (惜食堂)", x, y);
    y += 10; // y coordinate每次 + 10, so 去下一行

*/

    var result = $('.Result_for_PDF').prop('innerText');
    doc.setFontSize(11);
    var splitTitle = doc.splitTextToSize(result, 180);
    var y = 20;
    for (var i = 0; i < splitTitle.length; i++) {
        if (y > 250) {
            y = 20;
            doc.addPage();
        }
        doc.text(15, y, splitTitle[i]);
        y = y + 7;
    }


    var splitTitle2 = doc.splitTextToSize(string_pdf, 180);

    for (var i = 0; i < splitTitle2.length; i++) {
        if (y > 250) {
            y = 20;
            doc.addPage();
        }
        doc.text(15, y, splitTitle2[i]);

        y = y + 7;
    }

    // Save the PDF
    doc.save('Report.pdf');

    generated = true;
}




$(document).ready(() => {

    $('#save').click(() => {
        //if (generated == false) {
        generate_Client_pdf();
        //    location.replace("index.php");
        //}
    })

})