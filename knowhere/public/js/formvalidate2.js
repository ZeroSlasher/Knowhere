function formValidation2() {
    // Make quick references to our fields
    var own_name = document.getElementById('own_name'); //1
    var state = document.getElementById('state');
    var district = document.getElementById('district');
    var city = document.getElementById('city');
    var remail = document.getElementById('remail'); //3
    var cphone = document.getElementById('cphone'); //4




    //  to check empty form fields.

    if (own_name.value.length == 0 || state.value.length == 0 || district.value.length == 0 ||
        city.value.length == 0 || remail.value.length == 0 || cphone.value.length == 0) {
        $("#head1").show().delay(1000).fadeOut();
        $('#submit1').addClass('disabled');
        return false;
    }

    if (inputAlphabetl(own_name, 3, 15)) { //1

        // if (inputAlphabetl(est_name, 3, 30)) { //2

        if (emailValidation(remail)) { //3

            if (phonevalidation(cphone, 10)) { //4                    
                return true;
            }
        }
        // }
    }
    $('#submit1').addClass('disabled');
    return false;
}



//function that checks whether input text is an alphabetic character or not.

function inputAlphabetl(inputtext, min, max) {
    var alphaExp = /^[a-z ,.'-]+$/i;
    var uInput = inputtext.value;
    if (inputtext.value.match(alphaExp) && uInput.length >= min && uInput.length <= max) {
        document.getElementById('p11').innerText = "";
        return true;
    } else {
        // $("#p1").show().delay(1000).fadeOut();
        // document.getElementById('p2').innerText = "Enter valid name";  //this segment displays the validation rule for name
        $("#p11").fadeIn().delay('1000').fadeOut();
        // own_name.value = '';
        return false;

    }
}

function emailValidation(inputtext) {
    var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    if (inputtext.value.match(emailExp)) {
        document.getElementById('p22').innerText = "";
        return true;
    } else {
        // document.getElementById('p3').innerText = "Enter a vaild email"; //this segment displays the validation rule for email
        $("#p22").fadeIn().delay('1000').fadeOut();
        // remail.value = '';
        return false;
    }
}


function phonevalidation(inputtext, max) {
    var alphaExp = /^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/;
    var uInput = inputtext.value;
    if (inputtext.value.match(alphaExp) && uInput.length == max) {
        document.getElementById('p33').innerText = "";

        return true;
    } else {
        // document.getElementById('p1').innerText = "Enter valid name";  //this segment displays the validation rule for name
        $("#p33").fadeIn().delay('1000').fadeOut();
        // cphone.value = '';
        return false;
    }
}






// $(document).ready(function () {
//     $('text[name="remail"]').on('blur', function () {
function emailDoesExist() {
    $('#submit1').addClass('disabled');
    var remail = document.getElementById('remail').value;
    if (remail) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/mailcheck/' + remail,
            type: "GET",
            dataType: "json",
            // data: {
            //     'email': remail
            // },
            success: function (data) {
                if (data == 1) {
                    $("#p23").fadeIn().delay('1000').fadeOut();
                    document.getElementById('remail').value = "";
                } else {

                }

            }
        });
    }
}
//     });
// });
