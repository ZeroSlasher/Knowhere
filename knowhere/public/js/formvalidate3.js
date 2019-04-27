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

                            $(document).ready(function () {
                                $("#email").blur(function () {
                                    emailDoesExist();
                                });
                            });

                            function emailDoesExist() {
                                $('#postr').addClass('disabled');
                                var semail = document.getElementById('email').value;
                                var id = document.getElementById('id').value;

                                var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
                                if (semail && semail.match(emailExp)) {
                                    $.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        url: '/mailcheckr/' + semail + '/' + id,
                                        type: "GET",
                                        dataType: "json",
                                        // data: {
                                        //     'email': semail
                                        // },
                                        success: function (data) {
                                            if (data == 1) {
                                                $("#p2").show().delay(1000).fadeOut();
                                                document.getElementById('email').value = "";
                                                return false;
                                            } else {
                                                $('#postr').removeClass('disabled');
                                                // $('.verify-wrapper').addClass('open');
                                                //call to email verify ajax function
                                                emailverify();
                                                return true;
                                            }

                                        }
                                    });
                                } else {
                                    $("#p22").show().delay(1000).fadeOut();
                                    return false;
                                }
                            }


                            function emailverify() {
                                $('#postr').addClass('disabled');


                                $('#vcodebox').fadeIn();
                                $('#vbutton').fadeIn();

                                var semail = document.getElementById('email').value;
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
                                                $('#vcodebox').fadeOut();
                                                $('#vbutton').fadeOut();
                                                $("#p222").show().delay(1000).fadeOut();
                                            } else {
                                                $('#postr').removeClass('disabled');
                                            }

                                        }
                                    });
                                }
                            }


                            $(document).ready(function () {
                                $("#vbutton").click(function () {

                                    var vcode = document.getElementById('vcodebox').value;
                                    var vmail = document.getElementById('email').value;
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
                                                    $('#vcodebox').fadeOut();
                                                    $('#vbutton').fadeOut();
                                                    $("#vs").show().delay(1000).fadeOut();
                                                    return true;
                                                }

                                            }
                                        });
                                    } else {

                                        $("#vwarn").show().delay(1000).fadeOut();
                                        return false;

                                    }
                                });
                            });
