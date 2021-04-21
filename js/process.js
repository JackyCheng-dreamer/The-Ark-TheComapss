let currentTabIndex = 0;
var photos = 0;
var Google_drive_id;
// generate a hash key, see if need
var Client_number;

$(document).ready(() => {
    $('#lastBtn').hide();
    $(`.tabb`).hide();
    showTab(0);
    console.log(currentTabIndex);
});

function showContent() {
    $('.content').css("visibility", "visible");
    $('.btnbutton').css("visibility", "visible");
    $('#loading_pic').hide();
}

function hideContent() {
    $('.content').css("visibility", "hidden");
    $('.btnbutton').css("visibility", "hidden");
    $('#loading_pic').show();

}

function showKeyword() {
    $('.keyword').css("visibility", "visible");
    $('.btnbutton').css("visibility", "visible");
    $('#loading_pic').hide();
}

function hideKeyword() {
    $('.keyword').css("visibility", "hidden");
    $('.btnbutton').css("visibility", "hidden");
    $('#loading_pic').show();

}

//showing tab
function showTab(indexOfTab) {

    $("#nextBtn").text("Next Page");
    console.log(indexOfTab);

    $('#lastBtn').hide();
    $('#PartC_small').hide();

    if (indexOfTab == 2) {
        //$("#nextBtn").text("Submit");
        // add a checking
        // add a swal 
        $('#lastBtn').show();
        $("#RegTtile").text("Part B Document Collection ");
        GenerateCaseId();
        console.log(Client_number);
        generate_pdfA();

    } else if (indexOfTab == 3) {
        $('#lastBtn').show();
        $("#RegTtile").text("Part C Questions - Vulnerability Identification ");
        $("#RegTtile").css("margin-bottom", "10px")
        $('#PartC_small').show();
        $("#nextBtn").text("Submit");
        generate_pdfB();

    } else if (indexOfTab == 0) {
        $('#lastBtn').hide();
    } else if (indexOfTab == 1) {
        $('#lastBtn').show();
        $("#RegTtile").text("Part A Biography ");


    } else if (indexOfTab == 4) {

        hideContent();
        swal.fire({
            title: 'Your application would be submitted to JCHK',
            type: "info",
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText: '<i class="fa fa-thumbs-up"></i>  Yes ,submit',
            confirmButtonAriaLabel: 'Noted !',
            cancelButtonText: '<i class="fa fa-thumbs-down"></i> No',
            cancelButtonAriaLabel: 'Leave',
        }).then(x => {
            console.log(x['isConfirmed']);
            if (x['isConfirmed']) {
                generate_pdfC();
                download_pdf();
                sendGMAIL();
            } else {
                nextPrev(-1);
                showContent();
            }
        })

        $('.Pc-H').each(function() {
            if ($(this).val() != "No" && $(this).val() !== null) {
                document.getElementById('h').value = "Y";
            }
        });

        $('.Pc-F').each(function() {
            if ($(this).val() != "No" && $(this).val() !== null) {
                document.getElementById('f').value = "Y";
            }
        });
        $('.Pc-D ').each(function() {
            if ($(this).val() != "No" && $(this).val() !== null) {
                document.getElementById('d').value = "Y";
            }
        });
        // . submit

    }

    $(`.tabb:eq(${indexOfTab})`).show();

    $("#client-disclaim").click(() => {
        if (disclaimer.checked == true) {
            location.replace("basic.php");
        } else {
            $("#valide").show();
        }

    })

}

function validating(number) {
    ok = true;
    /*if (number == 0) {
        $('.P0 ').each(function() {
            if ($(this).val() == null) {
                $('#invalid-msg').show();
                ok = false;

            }

        });
        if ($('#interpreter').val() == "Yes") {
            if ($("#client-prefer-intergender").val() == null) {
                $('#invalid-msg').show();
                return false;
            }
        }
    }

    if (number == 1) {

        $('.P1 ').each(function() {
            if ($(this).val() == null) {
                $('#invalid-msg').show();
                ok = false;

            }
            // || $(this).val() == ''
        });
        // later add back 
    }*/


    $('#invalid-msg').hide();
    return ok;
}

/**
 * @param {number} number indicate the moiving index of tabb, normaly is 1 or -1.
 * Positive number mean the next tabb, Negitive number mean the previous tabb
 */
function nextPrev(number) {


    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    x = validating(currentTabIndex);
    console.log("x : " + x);
    if (x) {
        $('.invalid-msg').hide();
        // hide the current tabb
        $(`.tabb:eq(${currentTabIndex})`).hide();

        /*if (currentTabIndex == 0) {
            // the form gets submitted:
            $("#refund").submit();
            //return false;
        }*/

        // update current tabb]
        currentTabIndex = currentTabIndex + number;

        showTab(currentTabIndex);
    } else {
        $('.invalid-msg').show();
    }
}

$(document).ready(function() {

    //Google !!!!!!!!!!!!!!!!!!!!!!!!11

    $('#interpreter').change(function() {

            if ($(this).val() == 'Yes') {
                $('#client-translator').show();
                $('.goog-te-banner-frame.skiptranslate').show();
                $('#client-translator-gender').show();

            } else {
                $('#client-translator').hide();
                $('#client-translator-gender').hide();
                $('.goog-te-banner-frame.skiptranslate').hide();

            }
        })
        //----------------------------------------------------------------

    // functions for decide pop-up questions !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!1
    $('#client-family').change(function() {

        if ($(this).val() == 'Yes') {
            $('#have_family').show();
        } else {
            $('#have_family').hide();

        }
    })
    $('#client-prefer-gender').change(function() {

        if ($(this).val() == 'Other') {
            $('#client-other-gender').show();
        } else {
            $('#client-other-gender').hide();

        }
    })
    $('#client-case').change(function() {

        if ($(this).val() == 'Yes') {
            $('#have_case').show();
        } else {
            $('#have_case').hide();

        }
    })
    $('#client-have_recognizance').change(function() {

        if ($(this).val() == 'other') {
            $('#have_recognizance_other').show();
        } else {
            $('#have_recognizance_other').hide();

        }
    })
    $('#client-recognizance').change(function() {

        if ($(this).val() == 'Yes') {
            $('#have_recognizance').show();
        } else {
            $('#have_recognizance').hide();

        }
    })
    $('#client-detained').change(function() {

            if ($(this).val() == 'Yes') {
                $('#have_detained').show();
            } else {
                $('#have_detained').hide();

            }
        })
        // Part B --------------------------------------------------------------------------------

    $('#Pb-visa-own').change(function() {

        if ($(this).val() == 'Yes') {
            $('#have_visa').show();
        } else {
            $('#have_visa').hide();

        }
    })

    $('#Pb-ws').change(function() {

        if ($(this).val() == 'Yes') {
            $('#have_ws').show();
        } else {
            $('#have_ws').hide();

        }
    });

    $('#Pb-partc').change(function() {

        if ($(this).val() == 'Yes') {
            $('#have_partc').show();
        } else {
            $('#have_partc').hide();

        }
    })

    $('#Pb-partd').change(function() {

        if ($(this).val() == 'Yes') {
            $('#have_partd').show();
        } else {
            $('#have_partd').hide();

        }
    })

    $('#Pb-parte').change(function() {

        if ($(this).val() != 'No') {
            $('#have_parte').show();
        } else {
            $('#have_parte').hide();

        }
    })
    $('#Pb-partf').change(function() {

        if ($(this).val() == 'Yes') {
            $('#have_partf').show();
        } else {
            $('#have_partf').hide();

        }
    })
    $('#Pb-partg').change(function() {

        if ($(this).val() == 'Yes') {
            $('#have_partg').show();
        } else {
            $('#have_partg').hide();

        }
    })
    $('#Pb-parth').change(function() {

        if ($(this).val() != 'No') {
            $('#have_parth').show();
        } else {
            $('#have_parth').hide();

        }
    })

    $('#Pb-parti').change(function() {

        if ($(this).val() != 'No') {
            $('#have_parti').show();
        } else {
            $('#have_parti').hide();

        }
    })
    $('#Pb-parti_2').change(function() {

        if ($(this).val() != 'No') {
            $('#have_parti_2').show();
        } else {
            $('#have_parti_2').hide();

        }
    })
    $('#Pb-part3a').change(function() {

        if ($(this).val() != 'No') {
            $('#have_part3a').show();
        } else {
            $('#have_part3a').hide();

        }
    })

    $('#Pb-part3c').change(function() {

        if ($(this).val() != 'No') {
            $('#have_part3c').show();
        } else {
            $('#have_part3c').hide();

        }
    })
    $('#Pb-part3c_2').change(function() {

        if ($(this).val() != 'No') {
            $('#have_part3c_2').show();
        } else {
            $('#have_part3c_2').hide();

        }
    })
    $('#Pb-part3d').change(function() {

        if ($(this).val() != 'No') {
            $('#have_part3d').show();
        } else {
            $('#have_part3d').hide();

        }
    })
    $('#Pb-part3d2').change(function() {

        if ($(this).val() != 'No') {
            $('#have_part3d2').show();
        } else {
            $('#have_part3d2').hide();

        }
    })

    // Part C ---------------------------------------------------------------
    $('#Pc-H1').change(function() {

        if ($(this).val() != 'No') {
            $('#have_partH1').show();
        } else {
            $('#have_partH1').hide();

        }
    })
    $('#Pc-M2').change(function() {

        if ($(this).val() != 'No') {
            $('#have_partM2').show();
        } else {
            $('#have_partM2').hide();

        }
    })
    $('#Pc-F2').change(function() {

        if ($(this).val() != 'No') {
            $('#have_partF2').show();
        } else {
            $('#have_partF2').hide();

        }
    })
    $('#Pc-P1').change(function() {

            if ($(this).val() != 'No') {
                $('#have_partP1').show();
            } else {
                $('#have_partP1').hide();

            }
        })
        // pop-up question functions !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!1
});


//Swal part -------------------------------------------------------------------------------
// for swal show example fo written siginificant
$('#OpenExample').click(() => {
    swal.fire({
        title: '<u>Written Signification</u>',
        type: 'info',
        html: '<small style="color : grey ;"><i>A written signification is a letter from you to the Immigration Department to explain why you are afraid to go back to your home country.</i></small><br>',
        showCloseButton: true,
        focusConfirm: false,
        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
        confirmButtonAriaLabel: 'Noted !',
    });
});
// for Letter of Confirmation
$('#OpenExample2').click(() => {
    swal.fire({
        title: '<u>Letter of Confirmation</u>',
        type: 'info',
        html: '<p style="color : grey ;"><i>This confirmation letter shall normally be received around 3-6 weeks after your submission of written signification (for ID to complete the review and send you the letter).  ' +
            '<br><br>If your written signification is accepted, you should also have received a call from the Social Welfare Department and be referred to the International Social Service (Hong Kong Branch). </i></p>',

        showCloseButton: true,
        focusConfirm: false,
        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
        confirmButtonAriaLabel: 'Noted !',
    });
});

$('#OpenExample3').click(() => {
    let embedNode = document.createElement('embed');
    embedNode.src = "../photo/Recognizance_Paper.pdf";
    embedNode.setAttribute('height', '450px');
    embedNode.setAttribute('width', '100%');
    let newLi = document.createElement('li');
    newLi.appendChild(embedNode);
    swal.fire({
        title: '<u>Recognizance Document</u>',
        type: "info",
        width: 800,
        html: '<p style="color : grey ;"><i>Having a recognizance document means you cannot be detained until your claim is decided. A recognizance document does not give you residence or other rights in Hong Kong </i></p>' +
            "<ul class='previewList' style='width:90%;list-style-type:none;'></ul>",
        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
        onOpen: () => {
            swal.getContent().querySelector(".previewList").appendChild(newLi);
        }
    });
})

$('#OpenExample4').click(() => {
    swal.fire({
        title: '<u>Briefing Session</u>',
        type: 'info',
        html: '<p style="color : grey ;"><i>In the briefing session, the immigration officer shall have<br></i></p>' +
            '<ul><li>Explained you the USM process</li> ' +
            '<li>Give you non-refoulement claim form</li> ' +
            '<li>Refer you to the Duty Lawyer Service</li> ' +
            '<li>Arrange you an interpreter when needed</li> ' +
            '</ul>',
        showCloseButton: true,
        focusConfirm: false,
        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
        confirmButtonAriaLabel: 'Noted !',
    });
});

$('#OpenExampleC').click(() => { // have 

    let embedNode = document.createElement('embed');
    embedNode.src = "../photo/Non-refoulement_Claim_Form_[Sample].pdf";
    embedNode.setAttribute('height', '450px');
    embedNode.setAttribute('width', '100%');
    let newLi = document.createElement('li');
    newLi.appendChild(embedNode);
    swal.fire({
        title: '<u> Non-refoulment claim</u>',
        type: "info",
        width: 800,
        html: '<p style="color : grey ;"><i> The non-refoulement claim form is a 28-page form consisting of 75 questions for you to provide all the background and fact-specific information for the Immigration Director to assess you case and decide whether to grant you a claim</i></p>' +
            "<ul class='previewList' style='width:90%;list-style-type:none;'></ul>",
        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
        onOpen: () => {
            swal.getContent().querySelector(".previewList").appendChild(newLi);
        }
    });
});

$('#OpenExample6').click(() => {
    swal.fire({
        title: '<u>Duty Lawyer </u>',
        type: 'info',
        html: '<p style="color : grey ;"><i>Duty Lawyer Service provides free legal services. Duty lawyers are private and independent lawyers in Hong Kong, who are managed by the Duty lawyer service and funded by the Hong Kong government. The Duty Lawyer Service office is located on 17F Skyline Tower, Kowloon Bay.</i></p>',
        showCloseButton: true,
        focusConfirm: false,
        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
        confirmButtonAriaLabel: 'Noted !',
    });
});

$('#OpenExample7').click(() => {
    swal.fire({
        title: '<u>  Screening interview </u>',
        type: 'info',
        html: '<span style="color : grey ;"><i><ul><li>This shall normally be received after your submission of the non-refoulement claim form.</li> ' +
            '<br><li>The screening interview is for you to answer any questions the Immigration Department has about your non-refoulement claim form. It is also an opportunity for you to explain further why you cannot safely return to your home country.</li>' +
            '<br><li>The screening interview usually takes a half or full day, starting in the morning or the afternoon.</li>' +
            '</ul> </i></span>',
        showCloseButton: true,
        focusConfirm: false,
        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
        confirmButtonAriaLabel: 'Noted !',
    });
});

$('#OpenExample9').click(() => {
    swal.fire({
        title: '<u> Decision document</u>',
        type: 'info',
        html: '<span style="color : grey ;"><i>The Immigration Department will make a decision and send you a decision document explaining the reasons for granting/not granting you protection in Hong Kong.  </i></span>',
        showCloseButton: true,
        focusConfirm: false,
        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
        confirmButtonAriaLabel: 'Noted !',
    });
});

$('#OpenExample3a').click(() => {
    swal.fire({
        title: '<u> Filed appeal document </u>',
        type: 'info',
        html: '<p style="color : grey ;"><i> After the Immigration Department rejects your claim, if you are aggrieved by the decision, you should make the filed appeal document within 14 days after service of the Notice of Decision</i></p>',
        showCloseButton: true,
        focusConfirm: false,
        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
        confirmButtonAriaLabel: 'Noted !',
    });
});


$('#OpenExample3b2').click(() => {
    let embedNode = document.createElement('embed');
    embedNode.src = "../photo/Hearing_Bundle.pdf";
    embedNode.setAttribute('height', '450px');
    embedNode.setAttribute('width', '100%');
    let newLi = document.createElement('li');
    newLi.appendChild(embedNode);
    swal.fire({
        title: '<u>Appeal hearing bundle</u>',
        type: "info",
        width: 800,
        html: '<p style="color : grey ;"><i>An Appeal Hearing Bundle is a bundle comprised of all the key application and evidential documents needed for your appeal at the Torture Claims Tribunal. You can refer to a sample cover page of the bundle below.</i></p>' +
            "<ul class='previewList' style='width:90%;list-style-type:none;'></ul>",
        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
        onOpen: () => {
            swal.getContent().querySelector(".previewList").appendChild(newLi);
        }
    });
})

$('#OpenExample3b').click(() => {
    swal.fire({
        title: '<u> letter of invitation to the appeal hearing </u>',
        type: 'info',
        html: '<span style="color : grey ;"><i>This document is titled "Notice of Hearing<br> A hearing at the Torture Claims Appeal Board will be arranged if you file an appeal and your appeal is accepted by the Board to proceed. A Board Adjudicator will sit at the hearing and assess your claim. </i></span>',
        showCloseButton: true,
        focusConfirm: false,
        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
        confirmButtonAriaLabel: 'Noted !',
    });
});

$('#OpenExample3c').click(() => {

    let embedNode = document.createElement('embed');
    embedNode.src = "../photo/REDACTED_TCAB_Decision(Refused).pdf";
    embedNode.setAttribute('height', '450px');
    embedNode.setAttribute('width', '100%');
    let newLi = document.createElement('li');
    newLi.appendChild(embedNode);
    swal.fire({
        title: '<u>Official decision document from the Appeal Board</u>',
        type: "info",
        width: 800,
        html: "<ul class='previewList' style='width:90%;list-style-type:none;'></ul>",
        confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
        onOpen: () => {
            swal.getContent().querySelector(".previewList").appendChild(newLi);
        }
    });
})


//Part B - stage-written significant upload

// for clicking the upload ws , upload it with swal 
function ToUpload(what) {
    console.log(what);
    uploadFile(Client_number, what);
}

function sendGMAIL() {

    $.ajax({
        type: "POST",
        url: "send_email.php",
        data: {
            "Google_drive_id": Google_drive_id,
            "photos": photos,
            "Client_number": Client_number,
        },
        success: function(res) {
            console.log(res);
            swal.fire({
                title: 'Your application is submitted to JCHK',
                type: "info",
                confirmButtonText: '<i class="fa fa-thumbs-up"> </i> Go to the next page!',
            }).then(function() {
                $("#lending").submit();
            })

        },
        error: function(response) {
            console.log("fail : " + response);
            swal.fire({
                title: response,
                type: 'error',
                confirmButtonText: 'Back'
            })
        },
    })

}

var disclaimer = document.getElementById("client-disclaimer");

$("#client—disclaimer").click(() => {
    if (disclaimer.checked == true) {
        $("#valide").hide();
    }
})



function GenerateCaseId() {

    var hash = sha256.create();
    let name = $('input[id=client-first-name]').val() + $('input[id=client-last-name]').val();
    let phone_no = $('input[id=client-phone]').val().toString();
    hash.update(name + phone_no);
    Client_number = hash.hex();

    document.getElementById('c').value = Client_number;
    //document.getElementById("client-number").innerHTML = Client_numebr;
}
async function uploadFile(Client_number, what) {
    console.log("GG");
    const { value: file } =
    await swal.fire({
        title: "Please upload documents with .jpg/.jpeg/.png/.pdf format",
        type: "info",
        input: "file",
        imageUrl: "../photo/upload_file.png",
        showCancelButton: true,
        confirmButtonText: 'Confirm',
        cancelButtonText: 'Cancel',
        inputAttributes: {
            'accept': '.jpg, .png, .jpeg, .pdf',
            'aria-label': 'Upload your profile picture'
        }
    });
    if (file) {
        if (file.type === 'application/pdf') {
            const URL = window.URL || window.webkitURL;
            const pdfUrl = URL.createObjectURL(file);
            let embedNode = document.createElement('embed');
            embedNode.src = pdfUrl;
            embedNode.setAttribute('height', '450px');
            embedNode.setAttribute('width', '100%');
            let newLi = document.createElement('li');
            newLi.appendChild(embedNode);
            swal.fire({
                title: 'Preview the document',
                type: "info",
                width: 800,
                html: "<ul class='previewList' style='width:90%;list-style-type:none;'></ul>",
                showCancelButton: true,
                confirmButtonText: 'Upload',
                cancelButtonText: 'Cancel',
                onOpen: () => {
                    swal.getContent().querySelector(".previewList").appendChild(newLi);
                }
            }).then(function(result) {
                if (result.dismiss != swal.DismissReason.cancel) {
                    var formData = new FormData();
                    formData.append('file', file);
                    formData.append('case_id', Client_number);
                    formData.append('what', what);
                    formData.append('photos', photos);
                    hideContent();
                    setTimeout(() => {
                        $.ajax({
                            url: "google-drive_upload.php",
                            type: "POST",
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function(response) {
                                if (!(response.includes("Yes"))) {
                                    swal.fire({
                                        title: response,
                                        type: 'error',
                                        confirmButtonText: 'back'
                                    }).then(function() {
                                        uploadFile(Client_number);
                                    });
                                } else {
                                    Google_drive_id = response.split(",")[1];
                                    console.log(Google_drive_id);
                                    swal.fire({
                                        title: "Successfully uploaded!",
                                        type: 'success',
                                        confirmButtonText: 'Great'
                                    }).then(function() {
                                        photos++;
                                        validate = true;
                                        $('#photo_show').show();
                                        $('#invalid-photo').hide();
                                        document.getElementById("photo").innerHTML = photos;
                                    })
                                }
                            },
                            error: function(response) {
                                swal.fire({
                                    title: response,
                                    type: 'error',
                                    confirmButtonText: 'Back'
                                }).then(function() {
                                    uploadFile(Client_number);
                                });
                            },
                            complete: function() {
                                showContent();
                            }
                        });
                    }, 2000);
                }
            })
        } else {
            const reader = new FileReader
            reader.onload = (e) => {
                swal.fire({
                    title: 'Preview the document',
                    type: "info",
                    width: 800,

                    imageUrl: e.target.result,
                    imageAlt: 'The uploaded picture',
                    showCancelButton: true,
                    confirmButtonText: 'Upload',
                    cancelButtonText: 'Cancel',
                }).then(function(result) {
                    if (result.dismiss != swal.DismissReason.cancel) {
                        var formData = new FormData();
                        formData.append('file', file);
                        formData.append('what', what);
                        formData.append('case_id', Client_number);
                        formData.append('photos', photos);
                        hideContent();
                        setTimeout(() => {
                            $.ajax({
                                url: "google-drive_upload.php",
                                type: "POST",
                                data: formData,
                                contentType: false,
                                processData: false,
                                success: function(response) {
                                    if (!(response.includes("Yes"))) {
                                        swal.fire({
                                            title: response,
                                            type: 'error',
                                            confirmButtonText: 'Back'
                                        }).then(function() {
                                            uploadFile(Client_number);
                                        });
                                    } else {

                                        Google_drive_id = response.split(",")[1];
                                        console.log(Google_drive_id);
                                        swal.fire({
                                            title: "Successfully uploaded!",
                                            type: 'success',
                                            confirmButtonText: 'Great'
                                        }).then(function() {
                                            photos++;
                                            validate = true;
                                            $('#photo_show').show();
                                            $('#invalid-photo').hide();
                                            document.getElementById("photo").innerHTML = photos;
                                        })
                                    }
                                },

                                error: function(response) {
                                    swal.fire({
                                        title: response,
                                        type: 'error',
                                        confirmButtonText: 'Back'
                                    }).then(function() {
                                        uploadFile(Client_number);
                                    });
                                },
                                complete: function() {
                                    showContent();
                                }
                            });
                        }, 2000);
                    }
                })
            }
            reader.readAsDataURL(file)
        }
    }
}