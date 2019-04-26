function formValidation() {

    // Make quick references to our fields

    var name = document.getElementById('name');
    var email = document.getElementById('mail');
    var phone = document.getElementById('phone');
    var pass = document.getElementById('pwd');

    //  to check empty form fields.

    if (name.value.length == 0 || email.value.length == 0 || phone.value.length == 0 || pass.value.length == 0) {
        $("#head").show().delay(1000).fadeOut();
        // document.getElementById('head').innerText = "All fields are mandatory"; //this segment displays the validation rule for all fields
        name.focus();
        return false;
    }
    if (inputAlphabetln(name, 3, 15)) {

        if (emailValidationn(email)) {

            if (isverified()) {

                if (phonevalidationn(phone, 10)) {

                    if (lengthDefinepn(pass, 8)) {



                        return true;

                    }
                }
            }
        }
    }
    return false;
}


function inputAlphabetln(inputtext, min, max) {
    var alphaExp = /^[a-z ,.'-]+$/i;
    var uInput = inputtext.value;
    if (inputtext.value.match(alphaExp) && uInput.length >= min && uInput.length <= max) {
        document.getElementById('p1').innerText = "";
        return true;
    } else {
        // document.getElementById('p2').innerText = "Enter valid name";  //this segment displays the validation rule for name
        $("#p1").show().delay(1000).fadeOut();
        name.value = '';
        return false;
    }
}

function isverified() {
    var sts = $('#s').val();
    if (sts == 0) {

        $("#p2222").show().delay(1000).fadeOut();
        $("#p22222").show().delay(1000).fadeOut();
        return false;

    } else {
        return true;
    }
}

function emailValidationn(inputtext) {
    var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    if (inputtext.value.match(emailExp)) {
        document.getElementById('p2').innerText = "";
        return true;
    } else {
        // document.getElementById('p3').innerText = "Enter a vaild email"; //this segment displays the validation rule for email
        $("#p2").show().delay(1000).fadeOut();
        mail.value = '';
        return false;
    }
}


function phonevalidationn(inputtext, max) {
    var alphaExp = /^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/;
    var uInput = inputtext.value;
    if (inputtext.value.match(alphaExp) && uInput.length == max) {
        document.getElementById('p3').innerText = "";

        return true;
    } else {
        // document.getElementById('p1').innerText = "Enter valid name";  //this segment displays the validation rule for name
        $("#p3").show().delay(1000).fadeOut();
        phone.value = '';
        return false;
    }
}


function lengthDefinepn(inputtext, min) {

    var uInput = inputtext.value;
    var alphaExp = /^(?=.*\d).{8,15}$/;
    if (uInput.length >= min && inputtext.value.match(alphaExp)) {
        document.getElementById('p4').innerText = "";
        return true;
    } else {

        // document.getElementById('p4').innerText = "Enter name between " +min+ " and " +max+ " characters *"; //this segment displays the validation rule for username
        $("#p4").show().delay(1000).fadeOut();
        inputtext.value = '';
        return false;
    }
}


$(document).ready(function () {
    $("#mail").blur(function () {
        emailDoesExist1();
    });
});



function emailDoesExist1() {
    $('#Register').addClass('disabled');
    var semail = document.getElementById('mail').value;

    var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    if (semail && semail.match(emailExp)) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/mailcheck/' + semail,
            type: "GET",
            dataType: "json",
            // data: {
            //     'email': semail
            // },
            success: function (data) {
                if (data == 1) {
                    $("#p24").show().delay(1000).fadeOut();
                    document.getElementById('mail').value = "";
                    return false;
                } else {
                    $('#Register').removeClass('disabled');
                    // $('.verify-wrapper').addClass('open');
                    //call to email verify ajax function
                    emailverify1();
                    return true;
                }

            }
        });
    } else {
        $("#p2").show().delay(1000).fadeOut();
    }
}



function emailverify1() {
    $('#Register').addClass('disabled');
    $('.verify-wrapper').addClass('open');

    var semail = document.getElementById('mail').value;
    $("#vmail").text(semail);
    if (semail) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/mailverify/' + semail,
            type: "GET",
            dataType: "json",
            // data: {
            //     'email': semail
            // },
            success: function (data) {
                if (data == 1) {

                    $('.verify-wrapper').removeClass('open');
                    $("#p2222").show().delay(1000).fadeOut();
                } else {

                }

            }
        });
    }
}

$(document).ready(function () {
    $("#vbutton").click(function () {
        var vcode = document.getElementById('vcode').value;
        var vmail = $('#vmail').text();
        if (vcode && vmail) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/verifycode/' + vcode + '/' + vmail,

                type: "GET",
                dataType: "json",
                // data: {
                //     'vcode': vcode,
                //     'email': email,
                // },
                success: function (data) {
                    if (data == 1) {

                        $("#vwarn1").show().delay(1000).fadeOut();
                    } else {
                        $('#s').val('1');
                        $('.verify-wrapper').removeClass('open');
                        $('.success-wrapper').addClass('open');
                    }

                }
            });
        } else {

            $("#vwarn").show().delay(1000).fadeOut();

        }
    });
});
