$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
});

// getIndustryNameForm

function addMultiplePreviewImages(event, previewImages, previewImagesSplide) {
    $(`#${previewImages}`).empty();
    $("#" + previewImagesSplide + " .splide__slide:not(:first-child)").remove();

    // Get selected files
    var files = event.target.files;

    // Loop through selected files
    for (var i = 0; i < files.length; i++) {
        // Create a new FileReader object
        var reader = new FileReader();

        reader.onload = function (event) {
            var imgSplide = $("<img>").attr("src", event.target.result);
            imgSplide.addClass("w-100");
            var li = $("<li>").addClass("splide__slide").append(imgSplide);
            $(`#${previewImagesSplide}`).append(li);

            var img = $("<img>").attr("src", event.target.result);
            img.addClass("w-25 me-3");
            $(`#${previewImages}`).append(img);

            var splide = new Splide("#image-carousel", {
                pagination: false,
            });
            splide.mount();
        };

        // Read the file as a data URL
        reader.readAsDataURL(files[i]);
    }
}
// Signle Image Preview
function addPreviewImage(event, previewImageId) {
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function (event) {
        $(`#${previewImageId}`).attr("src", event.target.result);
    };
    reader.readAsDataURL(file);
}

function formSubmit(e, url) {
    e.preventDefault();
    var qrName = localStorage.getItem("staticqrName");
    var formData = new FormData(e.target);
    formData.append("qrName", qrName);
    const formDataJson = {};
    formData.forEach((value, key) => {
        formDataJson[key] = value;
    });
    const formDataString = JSON.stringify(formDataJson);
    localStorage.setItem("formData", formDataString);
    $("#status").show();
    $(".template_container").hide();
    $("#loading_qr").show();
    $.ajax({
        url: url,
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function (res) {
            console.log(res);
            localStorage.setItem("qrCodeImage", res.qrCode);
            $("#status").hide();
            $("#loading_qr").hide();
            $(".template_container").show();
            // $("#next-btn").show();
            $("#previewImage").attr(
                "src",
                "data:image/png;base64," + res.qrCode
            );
            $("#download").prop("disabled", false);
            $("#withLogo").prop("disabled", false);
            // nextPage(res.qrCode)
            console.log(formData);
        },
        error: function (xhr, status, error) {
            console.log(xhr, status);
        },
    });
}


function downloadImg(id, url) {
    var image = $("img[data-id='" + id + "']");
    var imageUrl = image.attr("src");
    var link = $("<a>")
        .attr("href", imageUrl)
        .attr("download", "qr_download.jpg");
    $("body").append(link);
    link[0].click();
    link.remove();
    addDownloadCount(url);
}


function deleteForm(url, id) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: url,
                method: "POST",
                data: { id: id },
                success: function (res) {
                    console.log(res);
                    if (res.success) {
                        Swal.fire({
                            title: "Deleted",
                            text: res.message,
                            icon: "success",
                            confirmButtonText: "OK",
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    } else {
                        Swal.fire({
                            title: "Something Wrong",
                            text: res.message,
                            icon: "danger",
                            confirmButtonText: "OK",
                        });
                    }
                },
                error: function (e, xhr) {
                    console.log(e, xhr);
                },
            });
        }
    });
}

function pauseOrResumeQr(url, id) {
    Swal.fire({
        title: "Are you sure?",
        text: "You can resume any time? Qr will not be deleted",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, pause it!",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: url,
                method: "POST",
                data: { id: id },
                success: function (res) {
                    console.log(res);
                    if (res.success) {
                        Swal.fire({
                            title: "Success",
                            text: res.message,
                            icon: "success",
                            confirmButtonText: "OK",
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    } else {
                        Swal.fire({
                            title: "Something Wrong",
                            text: res.message,
                            icon: "danger",
                            confirmButtonText: "OK",
                        });
                    }
                },
                error: function (e, xhr) {
                    console.log(e, xhr);
                },
            });
        }
    });
}


function callModal(url, modalId, editType) {
    $.ajax({
        method : 'GET',
        url : url,
        data: {editType : editType},
        success : function(res) {
            if(res.success) {
                $('.modal-data').html(res.view)
                $('#'+modalId).modal('show')
                if(res.qrdesign) {
                    $('#qr_design').val(res.qrdesign)
                    const data = res.data.customize_design;
                    getQrDesign("", '/user/getQrDesignOrTemplate', res.qrdesign, data);
                } else {

                    getIndustryNameForm(res.data.IndustryName, res.data.templateName);        
                }
                
            }
        },
        error : function(err, xhr) {
            console.log(err, xhr)
        }
    })
} 


