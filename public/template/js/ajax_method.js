$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.fn.dataTable.Buttons.defaults.dom.button.className =
        "btn btn-white btn-sm";
    $(".dataTables-example").DataTable({
        pageLength: 25,
        responsive: true,
        dom: '<"html5buttons"B>lTfgitp',
        buttons: [
            { extend: "copy" },
            { extend: "csv" },
            { extend: "excel", title: "ExampleFile" },
            { extend: "pdf", title: "ExampleFile" },

            {
                extend: "print",
                customize: function (win) {
                    $(win.document.body).addClass("white-bg");
                    $(win.document.body).css("font-size", "10px");

                    $(win.document.body)
                        .find("table")
                        .addClass("compact")
                        .css("font-size", "inherit");
                },
            },
        ],
    });

    toastr.options = {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: "5000",
    };
    // Multiple Image Preview
    $("#fileInput").on("change", function () {
        // Clear any existing preview images
        $("#previewImages").empty();

        // Get selected files
        var files = $(this)[0].files;

        // Loop through selected files
        for (var i = 0; i < files.length; i++) {
            // Create a new FileReader object
            var reader = new FileReader();

            // Set the image src attribute with the data URL
            reader.onload = function (event) {
                var img = $("<img>").attr("src", event.target.result);
                img.addClass("w-25");
                $("#previewImages").append(img);
            };

            // Read the file as a data URL
            reader.readAsDataURL(files[i]);
        }
    });

    // Signle Image Preview
    $("#fileInput").on("change", function () {
        // Get selected file
        var file = $(this)[0].files[0];

        // Create a new FileReader object
        var reader = new FileReader();

        // Set the image src attribute with the data URL
        reader.onload = function (event) {
            $("#preview_image_before_upload").attr("src", event.target.result);
        };

        // Read the file as a data URL
        reader.readAsDataURL(file);
    });

    $(".plan_type").on("change", function () {
        var planType = $(".plan_type").val();
        if (planType == "paid") {
            $(".free-plan").hide();
            $(".paid-plan").show();
        } else {
            $(".paid-plan").hide();
            $(".free-plan").show();
        }
    });

    $(".add-price").on("click", function () {
        var id = Math.floor(Math.random() * 10) + 1;
        var html = `
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="form-group my-3">
                    <label for="name" class="font-weight-bold"> Month </label>
                    <div class="d-flex">
                        <input type="number" name="prices[${id}][quantity]" class="form-control mt-2 w-50" value="{{ old('quantity') }}">
                        <select name="prices[${id}][duration]" id="" class="form-control w-50 mt-2">
                            <option value="m">Months</option>
                            <option value="y">Year </option>
                            <option value="d"> Days</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group my-3">
                    <label for="name" class="font-weight-bold"> USD/month </label>
                    <input type="integer" name="prices[${id}][usd]" class="form-control mt-2">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group my-3">
                    <label for="name" class="font-weight-bold"> MMK/month </label>
                    <input type="integer" name="prices[${id}][mmk]" class="form-control mt-2">
                </div>
            </div>
        </div>
        `;
        $(".paid-plan").append(html);
    });

    $("#generateReferCode").on("click", function () {
        let result = "";
        const characters =
            "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        const length = 10;
        const charLength = characters.length;

        for (let i = 0; i < length; i++) {
            const randomIndex = Math.floor(Math.random() * charLength);
            result += characters[randomIndex];
        }
        $("#refercode").val(result);
    });
});

function changeState(url, id) {
    $.ajax({
        url: url,
        method: "POST",
        data: { id: id },
        success: function (res) {
            console.log(res);
            if (res.success) {
                toastr.success(res.message);
                setInterval(function () {
                    location.reload();
                }, 1000);
            } else {
                toastr.danger(res.message);
            }
        },
        error: function (e) {
            toastr.danger(res.message);
        },
    });
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
                    console.log(res)
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

function grantPermission(id, name, permissionId) {
    var checkbox = $("#" + permissionId);
    var isChecked = checkbox.is(":checked") ? true : false;
    $.ajax({
        url: "/admin/setting/permission/give",
        type: "POST",
        data: {
            id: id,
            name: name,
            status: isChecked,
        },
        success: function (res) {
            if (res.success) {
                toastr.success(res.message);
            } else {
                toastr.warning(res.message);
            }
        },
        error: function (xhr, status, error) {
            console.log(error);
        },
    });
}

// view detail
$(document).on("click", "#AjaxModalCall", function (e) {
    e.preventDefault();
    var url = $(this).attr("data-url");
    console.log(url);
    $(".modal-body").html("");
    $.ajax({
        url: url,
        type: "GET",
        dataType: "html",
    })
        .done(function (data) {
            console.log(data);
            $(".modal-body").html(data); // load response
            $("#AjaxModal").modal("show");
        })
        .fail(function () {
            $("#dynamic-content").html(
                '<i class="fa fa-sign"></i> Something went wrong, Please try again...'
            );
            $("#modal-loader").hide();
        });
});

// FAQ Status on/off
$(document).ready(function (e) {
    $(".faqView").on("change", function (e) {
        e.preventDefault();
        var url = $(this).attr("route");
        $.ajax({
            url: url,
            type: "GET",
            data: {
                id: $(this).val(),
                // param: $(this).val(),
                token: $('meta[name="csrf-token"]').attr("content"),
            },            
            success: function (res) {
                console.log(res);
                if (res) {
                    toastr.success("success!");
                    location.reload();
                } else {
                    toastr.error("error!");
                }
            },
            error: function (e, xhr) {
                console.log(e, xhr);
            },
        });
    });
});

// FAQ summernote text editor
$(document).ready(function () {
    $("#summernote").summernote({
        toolbar: [
            ["style", ["style"]],
            ["font", ["bold", "underline", "clear"]],
            ["fontname", ["fontname"]],
            ["color", ["color"]],
            ["para", ["ul", "ol", "paragraph"]],
            ["table", ["table"]],
            ["insert", ["link"]],
        ],
        height: "350px",
        callbacks: {
            onPaste: function (e) {
                e.preventDefault();
                var bufferText = (
                    (e.originalEvent || e).clipboardData || window.clipboardData
                ).getData("Text");
                var cleanText = CleanPastedHTML(bufferText);
                document.execCommand("insertText", false, cleanText);
            },
        },
    });
});

//clean text
function CleanPastedHTML(input) {
    // 1. remove line breaks / Mso classes
        var stringStripper = /(\n|\r| class=(")?Mso[a-zA-Z]+(")?)/g;
        var output = input.replace(stringStripper,'');
        // 2. strip Word generated HTML comments
        var commentSripper = new RegExp('<!--(.?)-->','g');
        var output = output.replace(commentSripper,'');
        var tagStripper = new RegExp('<(/)(p|div|meta|link|span|\\?xml:|st1:|o:|font)(.*?)>','gi');
        // 3. remove tags leave content if any
        output = output.replace(tagStripper,'');
        // 4. Remove everything in between and including tags '<style(.)style(.)>'
        var badTags = ['span','style', 'script','applet','embed','noframes','noscript','font','p','<div>'];

        for (var i=0; i< badTags.length; i++) {
            tagStripper = new RegExp('<'+badTags[i]+'.?'+badTags[i]+'(.?)>', 'gi');
            output = output.replace(tagStripper,'');
        }
        // 5. remove attributes ' style="..."'
        var badAttributes = ['style', 'start'];
        for (var i=0; i< badAttributes.length; i++) {
            var attributeStripper = new RegExp('' + badAttributes[i] + '="(.*?)"','gi');
            output = output.replace(attributeStripper, '');
    }
    return output;
}

// User Plan Change
$(document).ready(function () {
    let prices;
    let price;
    $("#planType").on("change", function () {
        var id = $(this).val();
        $.ajax({
            url: `/admin/customer/get-plan/${id}`,
            method: "get",
            success: function (res) {
                prices = res.prices;
                $("#quantity").empty();
                for (let i = 0; i < prices.length; i++) {
                    $("#quantity").append(
                        `<option value="${prices[i]["id"]}"> ${
                            prices[i]["quantity"]
                        } ${getFormattedValue(
                            prices[i]["duration"]
                        )}  </option>`
                    );
                }

                var price_id = $("#quantity").val();
                price = prices.filter((item) => item.id == price_id);
                addPerMonthAndTotalPrice(price);
                $("#currency").on("change", function () {
                    var currency = $(this).val();
                    changeCurrency(price, currency);
                });
            },
            error: function (e, xhr) {
                console.log(e, xhr);
            },
        });
    });

    $("#quantity").on("change", function () {
        var id = $(this).val();
        price = prices.filter((item) => item.id == id);
        $("#duration").empty();
        $("#duration").append(
            `<option value="${price[0].duration}"> ${getFormattedValue(
                price[0].duration
            )} </option>`
        );
        addPerMonthAndTotalPrice(price);
    });

    $("#currency").on("change", function () {
        var currency = $(this).val();
        changeCurrency(price, currency);
    });
});

function addPerMonthAndTotalPrice(price) {
    $("#pricePerMonth").val(price[0].mmk);
    var totalPrice = price[0].mmk * price[0].quantity;
    $("#totalPrice").val(totalPrice);
}

function changeCurrency(price, currency) {
    let value;
    console.log(price);
    if (currency == "usd") {
        value = price[0].usd;
    } else {
        value = price[0].mmk;
    }

    $("#pricePerMonth").val(value);
    var totalPrice = value * price[0].quantity;
    $("#totalPrice").val(totalPrice);
    return true;
}

function getFormattedValue(value) {
    var formattedValue = "";
    if (value == "m") {
        formattedValue = "Month";
    } else if (value == "y") {
        formattedValue = "Year";
    } else {
        formattedValue = "Day";
    }

    return formattedValue;
}
