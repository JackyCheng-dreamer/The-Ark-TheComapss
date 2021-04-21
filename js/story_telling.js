var doc = new jsPDF();
var Client_number = "";

function generateStory() {

    y = 20;

    doc.text(" Reference number : ", 15, 20);
    doc.setFontSize(11);

    doc.text(Client_number, 70, y);
    y += 20;

    doc.setFontSize(16);
    doc.setFontType("italic");
    doc.text("Story Telling by the Client :", 20, y);
    y += 10;

    doc.setFontSize(10);
    doc.setFontType("normal");

    var splitTitle = doc.splitTextToSize($('#keyword_script').val(), 180);
    doc.text(splitTitle, 15, y);
    doc.addPage();

    y = 30;
    doc.setFontSize(16);
    doc.setFontType("italic");
    doc.text("Follow-up questions answers:", 20, y);
    y += 20;

    doc.setFontSize(10);
    doc.setFontType("normal");
    $('.show_answer').each(function() {
        if (y >= 250) {
            y = 20;
            doc.addPage();
        }
        doc.text($(this).val(), 20, y);
        y += 10;
    });


    var blob = doc.output("blob");

    var formData = new FormData();
    formData.append('file', blob);
    formData.append('case_id', Client_number);
    formData.append('photos', 0);
    formData.append('what', "Story Telling");

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