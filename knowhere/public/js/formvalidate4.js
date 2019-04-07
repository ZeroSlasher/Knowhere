function formValidation4() {

    // Make quick references to our fields
    var oname = document.getElementById('oname'); //1
    var owname = document.getElementById('owname'); //2
    var Address = document.getElementById('Address');
    var title = document.getElementById('title');
    var Description = document.getElementById('Description');
    var catSelect = document.getElementById('catSelect');
    var state = document.getElementById('state');
    var district = document.getElementById('district');
    var city = document.getElementById('city');
    var tbox = document.getElementById('tbox');
    var wsite = document.getElementById('wsite'); //3
    var phone1 = document.getElementById('phone1'); //4
    var phone2 = document.getElementById('phone2'); //5

    //1&2 inputalpha
    //3 website
    //4&5 phone

    //  to check empty form fields.

    if (oname.value.length == 0 || owname.value.length == 0 || Address.value.length == 0 ||
        title.value.length == 0 || Description.value.length == 0 || catSelect.value.length == 0 ||
        state.value.length == 0 || district.value.length == 0 || city.value.length == 0 ||
        tbox.value.length == 0 || wsite.value.length == 0 || phone1.value.length == 0) {
        oname.focus();
        $("#head").show().delay(1000).fadeOut();
        return false;
    }


    if (inputAlphabetu(oname)) {

        if (inputAlphabetu(ownname)) {

            if (inputWebsite(wsite)) {

                if (phonevalidation(phone1)) {

                    if (phonevalidation(phone2)) {

                        return true;
                    }
                }
            }
        }
    }


    return false;
}



//function that checks whether input text is an alphabetic character or not.


function inputAlphabetu(inputtext) {
    var alphaExp = /^[a-zA-Z0-9]+$/;
    if (inputtext.value.match(alphaExp)) {
        document.getElementById('p4').innerText = "";
        return true;
    } else {
        document.getElementById('p4').innerText = "Enter valid Username"; //this segment displays the validation rule for name
        $("#p4").html("<p>Enter valid Username</p>").fadeIn().delay('1000').fadeOut();
        uname.value = '';
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

        $("#p33").fadeIn().delay('1000').fadeOut();
        // cphone.value = '';
        return false;
    }
}

function emailValidation(inputtext) {
    var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    if (inputtext.value.match(emailExp)) {
        document.getElementById('p3').innerText = "";
        return true;
    } else {
        // document.getElementById('p3').innerText = "Enter a vaild email"; //this segment displays the validation rule for email
        $("#p3").html("<p>Enter a vaild email</p>").fadeIn().delay('1000').fadeOut();
        email.value = '';
        return false;
    }
}


$(document).ready(function () {
    $(".validate").on('blur', function () {
        $type = $(this).data("type");

        switch ($type) {
            case 'email':
                if (emailValidation(this)) {
                    emailDoesExist();
                }
                break;
            case 'fname':
                if (lengthDefinef(this, 3, 12)) {
                    inputAlphabetf(this);
                }
                break;
            case 'lname':
                if (lengthDefinel(this, 3, 12)) {
                    inputAlphabetl(this);
                }
                break;
            case 'uname':
                if (inputAlphabetu(this)) {
                    if (lengthDefineu(this, 6, 12)) {
                        usernameDoesExist();
                    }

                }
                break;
            case 'cpass':
                validatePassword($("#pass").val(), $("#cpass").val());
                break;
        }

    })

});
