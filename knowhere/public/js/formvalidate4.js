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
    var service = document.getElementById('service');
    var wsite = document.getElementById('wsite'); //3
    var phone1 = document.getElementById('phone1'); //4
    var phone2 = document.getElementById('phone2'); //5

    //1&2 inputalpha
    //3 website  
    //4&5 phone

    //  to check empty form fields.

    if (oname.value.length == 0 || owname.value.length == 0 || Address.value.length == 0 ||
        title.value.length == 0 ||
        wsite.value.length == 0 || phone1.value.length == 0) {
        oname.focus();
        $("#head").show().delay(1000).fadeOut();
        return false;
    }



    if (inputAlphabetl(owname)) {

        if (inputwebsite(wsite)) {

            if (phonevalidation(phone1)) {

                if (phonevalidation(phone2)) {

                    return true;
                }
            }
        }
    }

    return false;
}



//function that checks whether input text is an alphabetic character or not.

function inputAlphabetl(inputtext) {
    var alphaExp = /^[a-z ,.'-]+$/i;
    if (inputtext.value.match(alphaExp)) {
        document.getElementById('p11').innerText = "";
        return true;
    } else {
        // $("#p1").show().delay(1000).fadeOut();
        // document.getElementById('p2').innerText = "Enter valid name";  //this segment displays the validation rule for name
        $("#p11").fadeIn().delay('1000').fadeOut();
        inputtext.focus();
        return false;

    }
}

function phonevalidation(inputtext) {
    var alphaExp = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/;
    var uInput = inputtext.value;
    if (inputtext.value.match(alphaExp)) {
        return true;
    } else {
        $("#p33").fadeIn().delay('1000').fadeOut();
        inputtext.focus();
        return false;
    }
}

function inputwebsite(inputtext) {
    var alphaExp = /^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$/;
    if (inputtext.value.match(alphaExp)) {
        return true;
    } else {
        $("#p44").fadeIn().delay('1000').fadeOut();
        inputtext.focus();
        return false;
    }
}

// function servvalidate() {
//     if (document.getElementById('service').checked) {
//         alert("checked");
//         return true;
//     } else {
//         alert("You didn't check it! Let me check it for you.");
//         return false;
//     }
// }
