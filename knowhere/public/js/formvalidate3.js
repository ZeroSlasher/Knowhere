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
                                    $('#s').val("0");
                                    emailverify();
                                });
                            });

                            $(document).ready(function () {
                                $("#rpmail").blur(function () {
                                    $('#s1').val("0");
                                    emailverify1();
                                });
                            });

                            $(document).ready(function () {
                                $("#smail").blur(function () {
                                    $('#s2').val("0");
                                    emailverify2();
                                });
                            });


                            function emailverify() {
                                $('#postr').prop('disabled', true);

                                $('#vcodebox').fadeIn();
                                $('#vbutton').fadeIn();
                                $('#ack').fadeIn();

                                var semail = document.getElementById('email').value;
                                var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
                                if (semail && semail.match(emailExp)) {
                                    // $("#vmail").text(semail);
                                    $.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        url: '/mailverify/' + semail, //send mail
                                        type: "GET",
                                        dataType: "json",
                                        // data: {
                                        //     'email': semail
                                        // },
                                        success: function (data) {
                                            console.log(data);

                                            if (data == 1) {
                                                //fail
                                                $('#vcodebox').fadeOut();
                                                $('#vbutton').fadeOut();
                                                $('#ack').fadeOut();
                                                $("#p222").show().delay(1000).fadeOut();
                                            } else if (data == 0) {
                                                //success
                                                $("#vwarn").show().delay(1000).fadeOut();
                                                $('#vcodebox').fadeIn();
                                                $('#vbutton').fadeIn();

                                            }

                                        }
                                    });
                                } else {
                                    $('#ack').fadeOut();
                                    $('#vcodebox').fadeOut();
                                    $('#vbutton').fadeOut();
                                    $("#p22").show().delay(1000).fadeOut();
                                }
                            }

                            function emailverify1() {
                                $('#reportsub').prop('disabled', true);

                                $('#vcodeboxr').fadeIn();
                                $('#vbuttonr').fadeIn();
                                $('#ackr').fadeIn();

                                var semail = document.getElementById('rpmail').value;
                                var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
                                if (semail && semail.match(emailExp)) {
                                    // $("#vmail").text(semail);
                                    $.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        url: '/mailverify/' + semail, //send mail
                                        type: "GET",
                                        dataType: "json",
                                        // data: {
                                        //     'email': semail
                                        // },
                                        success: function (data) {
                                            console.log(data);

                                            if (data == 1) {
                                                //fail
                                                $('#vcodeboxr').fadeOut();
                                                $('#vbuttonr').fadeOut();
                                                $('#ackr').fadeOut();
                                                $("#p222r").show().delay(1000).fadeOut();
                                            } else if (data == 0) {
                                                //success
                                                $("#vwarnr").show().delay(1000).fadeOut();
                                                $('#vcodeboxr').fadeIn();
                                                $('#vbuttonr').fadeIn();

                                            }

                                        }
                                    });
                                } else {
                                    $('#ackr').fadeOut();
                                    $('#vcodeboxr').fadeOut();
                                    $('#vbuttonr').fadeOut();
                                    $("#p22r").show().delay(1000).fadeOut();
                                }
                            }

                            function emailverify2() {
                                $('#suggestbtn').prop('disabled', true);

                                $('#vcodeboxs').fadeIn();
                                $('#vbuttons').fadeIn();
                                $('#acks').fadeIn();

                                var semail = document.getElementById('smail').value;
                                var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
                                if (semail && semail.match(emailExp)) {
                                    // $("#vmail").text(semail);
                                    $.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        url: '/mailverify/' + semail, //send mail
                                        type: "GET",
                                        dataType: "json",
                                        // data: {
                                        //     'email': semail
                                        // },
                                        success: function (data) {
                                            console.log(data);

                                            if (data == 1) {
                                                //fail
                                                $('#vcodeboxs').fadeOut();
                                                $('#vbuttons').fadeOut();
                                                $('#acks').fadeOut();
                                                $("#p222s").show().delay(1000).fadeOut();
                                            } else if (data == 0) {
                                                //success
                                                $("#vwarns").show().delay(1000).fadeOut();
                                                $('#vcodeboxs').fadeIn();
                                                $('#vbuttons').fadeIn();

                                            }

                                        }
                                    });
                                } else {
                                    $('#acks').fadeOut();
                                    $('#vcodeboxs').fadeOut();
                                    $('#vbuttons').fadeOut();
                                    $("#p22s").show().delay(1000).fadeOut();
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

                                            success: function (data) {
                                                if (data == 1) {
                                                    console.log(data);
                                                    $("#vwarn1").show().delay(1000).fadeOut();

                                                } else {
                                                    console.log(data);
                                                    $('#vcodebox').fadeOut();
                                                    $('#vbutton').fadeOut();
                                                    $('#s').val("1");
                                                    $('#ack').fadeOut();
                                                    $("#vs").show().delay(1000).fadeOut();
                                                    $('#postr').prop('disabled', false);

                                                }

                                            }
                                        });
                                    } else {
                                        $('#ack').fadeOut();
                                        $("#vwarn").show().delay(1000).fadeOut();
                                        return false;

                                    }
                                });
                            });

                            $(document).ready(function () {
                                $("#vbuttonr").click(function () {

                                    var vcode = document.getElementById('vcodeboxr').value;
                                    var vmail = document.getElementById('rpmail').value;
                                    if (vcode && vmail) {
                                        $.ajax({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            },
                                            url: '/verifycode/' + vcode + '/' + vmail,

                                            type: "GET",
                                            dataType: "json",

                                            success: function (data) {
                                                if (data == 1) {
                                                    console.log(data);
                                                    $("#vwarn1r").show().delay(1000).fadeOut();

                                                } else {
                                                    console.log(data);
                                                    $('#vcodeboxr').fadeOut();
                                                    $('#vbuttonr').fadeOut();
                                                    $('#s1').val("1");
                                                    $('#ackr').fadeOut();
                                                    $("#vsr").show().delay(1000).fadeOut();
                                                    $('#reportsub').prop('disabled', false);

                                                }

                                            }
                                        });
                                    } else {
                                        $('#ackr').fadeOut();
                                        $("#vwarnr").show().delay(1000).fadeOut();
                                        return false;

                                    }
                                });
                            });

                            $(document).ready(function () {
                                $("#vbuttons").click(function () {

                                    var vcode = document.getElementById('vcodeboxs').value;
                                    var vmail = document.getElementById('smail').value;
                                    if (vcode && vmail) {
                                        $.ajax({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            },
                                            url: '/verifycode/' + vcode + '/' + vmail,

                                            type: "GET",
                                            dataType: "json",

                                            success: function (data) {
                                                if (data == 1) {
                                                    console.log(data);
                                                    $("#vwarn1s").show().delay(1000).fadeOut();

                                                } else {
                                                    console.log(data);
                                                    $('#vcodeboxs').fadeOut();
                                                    $('#vbuttons').fadeOut();
                                                    $('#s2').val("1");
                                                    $('#acks').fadeOut();
                                                    $("#vss").show().delay(1000).fadeOut();
                                                    // $('#suggestbtn').removeClass('disabled');
                                                    $('#suggestbtn').prop('disabled', false);

                                                }

                                            }
                                        });
                                    } else {
                                        $('#acks').fadeOut();
                                        $("#vwarns").show().delay(1000).fadeOut();
                                        return false;

                                    }
                                });
                            });




                            $(document).ready(function () {
                                $('#freview').on('submit', function () {
                                    var review = $('#review').val();
                                    var title = $('#title').val();
                                    var rate = $("input[name=rating]").val();
                                    var email = $('#email').val();
                                    var name = $('#name').val();
                                    var status = $('#s').val();
                                    var alphaExp = /^[a-zA-Z ]*$/;

                                    if (review == "" || title == "" || rate == "" || email == "" || name == "" || status == "" || status == 0) {
                                        $("#head").show().delay(1000).fadeOut();

                                        return false;
                                    } else if (!name.match(alphaExp)) {
                                        $("#namer").show().delay(1000).fadeOut();

                                        return false;
                                    } else {
                                        return true;
                                    }
                                });

                            });


                            $(document).ready(function () {
                                $('#freviews').on('submit', function () {
                                    var review = $('#review').val();
                                    var title = $('#title').val();
                                    var rate = $("input[name=rating]").val();


                                    if (review == "" || title == "" || rate == "") {
                                        $("#head").show().delay(1000).fadeOut();

                                        return false;
                                    } else {
                                        return true;
                                    }
                                });

                            });




                            // function emailDoesExist() {
                            //     $('#postr').addClass('disabled');
                            //     var semail = document.getElementById('email').value;
                            //     var id = document.getElementById('id').value;

                            //     var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
                            //     if (semail && semail.match(emailExp)) {
                            //         $.ajax({
                            //             headers: {
                            //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            //             },
                            //             url: '/mailcheckr/' + semail + '/' + id,
                            //             type: "GET",
                            //             dataType: "json",
                            //             // data: {
                            //             //     'email': semail
                            //             // },
                            //             success: function (data) {
                            //                 if (data == 1) {
                            //                     $("#p2").show().delay(1000).fadeOut();
                            //                     document.getElementById('email').value = "";
                            //                     return false;
                            //                 } else {
                            //                     $('#postr').removeClass('disabled');
                            //                     // $('.verify-wrapper').addClass('open');
                            //                     //call to email verify ajax function
                            //                     emailverify();
                            //                     return true;
                            //                 }

                            //             }
                            //         });
                            //     } else {
                            //         $("#p22").show().delay(1000).fadeOut();
                            //         return false;
                            //     }
                            // }
