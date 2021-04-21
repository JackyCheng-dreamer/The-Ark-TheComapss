var disclaimer = document.getElementById("disclaimer");

$("#disclaim").click(() => {
    if (disclaimer.checked == true) {
        location.replace("basic.php");
    } else {
        $("#valide").show();
    }

})

$("#disclaimer").click(() => {
    if (disclaimer.checked == true) {
        $("#valide").hide();
    }
})