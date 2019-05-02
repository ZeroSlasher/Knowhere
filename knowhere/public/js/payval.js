    $("#cc_number").blur(function () {
        var cc_number = $(this).val();
        $('#ctype').val("");
        $("#cimg").attr("src", "")

        if (cc_number != "") {
            $('#cc_number').validateCreditCard(function (result) {
                console.log(result);
                if (result.length_valid && result.luhn_valid && result.valid) {
                    $('#ctype').val(result.card_type.name);
                    if (result.card_type.name == "visa") {
                        $("#cimg").attr("src", "/assets/img/footer/visa.png")
                    } else if (result.card_type.name == "maestro") {
                        $("#cimg").attr("src", "/assets/img/footer/maestro.png")
                    } else if (result.card_type.name == "mastercard") {
                        $("#cimg").attr("src", "/assets/img/footer/master.png")
                    } else if (result.card_type.name == "amex") {
                        $("#cimg").attr("src", "/assets/img/footer/amex.png")
                    }

                    return true;
                } else {
                    $("#carderr").show().delay(1000).fadeOut();
                    $('#ctype').val("");
                    $("#cimg").attr("src", "")
                    $("#cc_number").focus();
                    return false;
                }
            });
        } else {
            $("#cc_number").focus();
            $('#ctype').val("");
            $("#cimg").attr("src", "")
            $("#carderr").show().delay(1000).fadeOut();
            return false;

        }
    });

    $("#cname").blur(function () {
        var alphaExp = /^[a-z ,.'-]+$/i;
        var cname = $(this).val();
        if (cname.match(alphaExp) && cname != "") {
            return true;
        } else {
            $("#cname").focus();
            $("#nameerr").show().delay(1000).fadeOut();
            return false;
        }
    });

    $("#cvv").blur(function () {
        var alphaExp = /^[0-9]{3}$/;
        var cvv = $(this).val();

        if (!cvv.match(alphaExp) || cvv == "") {
            $("#cvv").focus();
            $("#cvverr").show().delay(1000).fadeOut();
            //invalid cvv number
            return false;
        } else {
            return true; //valid cvv number
        }
    });

    $("#expiry_month").blur(function () {
        var alphaExp = /^01|02|03|04|05|06|07|08|09|10|11|12{2}$/;
        var expiry_month = $(this).val();

        if (!expiry_month.match(alphaExp) || expiry_month == "" || expiry_month.length > 2) {
            $("#expiry_month").focus();
            $("#mntherr").show().delay(1000).fadeOut();

            return false;
        } else {
            return true;
        }
    });

    $("#expiry_year").blur(function () {
        var alphaExp = /^19|20|21|22|23|24|25|26|27|28|29|30|31{2}$/;

        var expiry_year = $(this).val();

        if (!expiry_year.match(alphaExp) || expiry_year == "" || expiry_year.length > 2) {
            $("#expiry_year").focus();
            $("#yearerr").show().delay(1000).fadeOut();

            return false;
        } else {
            return true;
        }
    });

    $(document).ready(function () {
        $('#dopay').on('submit', function () {
            var cc_number = $('#cc_number').val();
            var cname = $('#cname').val();
            var cvv = $('#cvv').val();
            var expiry_month = $('#expiry_month').val();
            var expiry_year = $('#expiry_year').val();
            if (cc_number == "" || cname == "" || cvv == "" || expiry_month == "" || expiry_year == "") {
                $("#head").show().delay(1000).fadeOut();

                return false;

            } else {
                return true;
            }



        });

    });
