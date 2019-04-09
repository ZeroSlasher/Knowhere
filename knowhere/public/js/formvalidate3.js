                            function formValidation3() {

                                // Make quick references to our fields
                                var email = document.getElementById('email');
                                var curpass = document.getElementById('curpass');
                                var npass = document.getElementById('npass');
                                var cpass = document.getElementById('cpass');



                                //  to check empty form fields.

                                if ((curpass.value = null) || (npass.value = null) || (cpass.value = null)) {
                                    $("#head").show().delay(1000).fadeOut();
                                    // document.getElementById('head').innerText = "All fields are mandatory"; //this segment displays the validation rule for all fields
                                    curpass.focus();
                                    return false;
                                }
                                if (emailValidation(email)) {

                                    if (validatePassword(pass.value, cpass.value)) {

                                        return true;
                                    }
                                }


                                return false;
                            }



                            //function that checks whether input text is an alphabetic character or not.


                            // Function that checks whether an user entered valid email address or not and displays alert message on wrong email address format.

                            function emailValidation(inputtext) {
                                var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
                                if (inputtext.value.match(emailExp)) {
                                    document.getElementById('p3').innerText = "";
                                    return true;
                                } else {
                                    $("#p22").show().delay(1000).fadeOut();
                                    // document.getElementById('p3').innerText = "Enter a vaild email"; //this segment displays the validation rule for email
                                    // $("#p3").html("<p>Enter a vaild email</p>").fadeIn().delay('1000').fadeOut();
                                    email.value = '';
                                    return false;
                                }
                            }

                            function validatePassword(pass, cpass) {
                                if (pass == cpass) {
                                    document.getElementById('p5').innerText = "";
                                    return true;
                                } else {
                                    $("#p24").show().delay(1000).fadeOut();

                                    // document.getElementById('p5').innerText = "Check your password";
                                    // $("#p5").html("<p>Check your password</p>").fadeIn().delay('1000').fadeOut();
                                    document.form.pass.value = '';
                                    return false;
                                }
                            }





