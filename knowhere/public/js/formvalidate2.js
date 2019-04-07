function formValidation2() {
    // Make quick references to our fields
    var own_name = document.getElementById('own_name'); //1
    var cphone = document.getElementById('cphone'); //2
    var address = document.getElementById('Address');
    var state = document.getElementById('state');
    var district = document.getElementById('district');
    var city = document.getElementById('city');




    //  to check empty form fields.

    if (own_name.value.length == 0 || cphone.value.length == 0 || address.value.length == 0 ||
        state.value.length == 0 || district.value.length == 0 || city.value.length == 0) {
        $("#head1").show().delay(1000).fadeOut();
        $('#submit1').addClass('disabled');
        return false;
    }
    // alert();
    if (inputAlphabetl(own_name, 3, 15)) {

        if (phonevalidation(cphone)) {
            return true;
        }

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



function phonevalidation(inputtext) {
    var alphaExp = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/;
    var uInput = inputtext.value;
    if (inputtext.value.match(alphaExp)) {
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
