$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $('#status').on('change', function() {
        const status = $(this).val()
        const id = $(this).attr('data-id')
        $.ajax({
            url : `/support-ticket/change-status/${id}`,
            method : "POST",
            data : {status : status},
            success : function(res) {
                responseUi(res);
            },
            error : function (err, xhr) {
                console.log(err, xhr)
            }
        })
    })

    $("#toggleNotify").on("click", function () {
        $("#content").toggleClass("active-noti");
    });
})

function formSubmit(e, url) {
    e.preventDefault();
    var formData = new FormData(e.target);
    $.ajax({
        url : url,
        method : 'POST',
        data : formData,
        processData: false, // Prevent jQuery from processing the data
        contentType: false, 
        success : function(res) {
            // console.log(res)
            responseUi(res)
        },
        error : function(err, xhr) {
            console.log(err, xhr)
        }
    })
}

function responseUi(res) {
    if(res.success) {
        Swal.fire({
            icon: 'success',
            text: res.message,
            showConfirmButton : true,
            confirmButtonText : "OK"
        }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = res.redirect;
        }
        })
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Something Wrong',
            text: res.message,
        })
    }
}

function setActiveButton(button, type) {
    $('.toggle-btn').removeClass('active')
    $(button).addClass('active')
    if (type == 'withdraw') {
        $(button).addClass('bg-secondary')
        $('.deposit-container').hide()
        $('.withdraw-container').show()
    } else {            
        $('.withdraw-container').hide()
        $('.deposit-container').show()
    }
}

function copyAddress() {
    var textToCopy = $("#originalText").text();
    var tempInput = $("<input>");
    $("body").append(tempInput);
    tempInput.val(textToCopy).select();
    document.execCommand("copy");
    tempInput.remove();
    $('#copyBtn').hide()
    $('#copyComplete').show();
    setTimeout(function() {
        $('#copyComplete').hide();
        $('#copyBtn').show()
    }, 2000);
}

$('#srcImage').on('change', function() {
    var file = $(this)[0].files[0];
    var reader = new FileReader();

    reader.onload = (event) => {
        $('#previewImage').attr("src", event.target.result);
    }

    reader.readAsDataURL(file);
});
