$(document).ready(function () {
    $('select[name="catSelect"]').on('change', function () {
        var catID = $(this).val();
        if (catID) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/subcat/ajax/' + catID,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    $('select[name="subcat"]').empty();
                    $('select[name="subcat"]').append('<option disabled selected> -- select subcatagory -- </option>');
                    $.each(data, function (key, value) {
                        $('select[name="subcat"]').append('<option value="' + value.subcat_id + '">' + value.subcatagory + '</option>');
                    });
                }
            });
        } else {
            $('select[name="subcat"]').empty();
        }
    });
});

$(document).ready(function () {
    $('select[name="state"]').on('change', function () {
        var stateID = $(this).val();
        if (stateID) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/dist/ajax/' + stateID,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    $('select[name="district"]').empty();
                    $('select[name="district"]').append('<option disabled selected> -- select district -- </option>');
                    $.each(data, function (key, value) {
                        $('select[name="district"]').append('<option value="' + value.dist_id + '">' + value.district + '</option>');
                    });
                }
            });
        } else {
            $('select[name="district"]').empty();
        }
    });
});

$(document).ready(function () {
    $('select[name="district"]').on('change', function () {
        var distID = $(this).val();
        if (distID) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/city/ajax/' + distID,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    $('select[name="city"]').empty();
                    $('select[name="city"]').append('<option disabled selected> -- select city -- </option>');
                    $.each(data, function (key, value) {
                        $('select[name="city"]').append('<option value="' + value.city_id + '">' + value.city + '</option>');
                    });
                }
            });
        } else {
            $('select[name="city"]').empty();
        }
    });
});

$(document).ready(function () {
    $('.listing-wrapper1').addClass('open');
});

$(document).ready(function () {
    $('select[name="subcat"]').on('change', function () {
        var subID = $(this).val();
        if (subID) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/fetchservice/' + subID,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    $('#tbox').empty();
                    $.each(data, function (key, value) {
                        $('#tbox').append('<input type="checkbox" style="padding-left:2px;" name="service[]" id="service" value="' + value.service_id + '"">' + value.service + '');
                        $('#tbox').append('&nbsp;&nbsp;&nbsp;&nbsp;');
                    });
                }
            });
        } else {
            $('#tbox').empty();
        }
    });
});

$(document).ready(function () {

    $('#loc').keyup(function () {
        var query = $(this).val();
        if (query != '') {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/fetchloc",
                type: "POST",
                data: {
                    query: query
                },
                success: function (data) {
                    $('#List').fadeIn();
                    $('#List').html(data);
                }
            });
        } else {
            $('#List').fadeOut();
        }
    });

    $(document).on('click', '.load', function () {
        $('#loc').val($(this).text());
        $('#List').fadeOut();
    });

});

$(document).ready(function () {

    $('#local').keyup(function () {
        var query = $(this).val();
        if (query != '') {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/fetchloc",
                type: "POST",
                data: {
                    query: query
                },
                success: function (data) {
                    $('#List').fadeIn();
                    $('#List').html(data);
                }
            });
        } else {
            $('#List').fadeOut();
        }
    });

    $(document).on('click', '.load', function () {
        $('#loc').val($(this).text());
        $('#List').fadeOut();
    });

});








let modalId = $('#image-gallery');

$(document)
    .ready(function () {

        loadGallery(true, 'a.thumbnail');

        //This function disables buttons when needed
        function disableButtons(counter_max, counter_current) {
            $('#show-previous-image, #show-next-image')
                .show();
            if (counter_max === counter_current) {
                $('#show-next-image')
                    .hide();
            } else if (counter_current === 1) {
                $('#show-previous-image')
                    .hide();
            }
        }

        /**
         *
         * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
         * @param setClickAttr  Sets the attribute for the click handler.
         */

        function loadGallery(setIDs, setClickAttr) {
            let current_image,
                selector,
                counter = 0;

            $('#show-next-image, #show-previous-image')
                .click(function () {
                    if ($(this)
                        .attr('id') === 'show-previous-image') {
                        current_image--;
                    } else {
                        current_image++;
                    }

                    selector = $('[data-image-id="' + current_image + '"]');
                    updateGallery(selector);
                });

            function updateGallery(selector) {
                let $sel = selector;
                current_image = $sel.data('image-id');
                $('#image-gallery-title')
                    .text($sel.data('title'));
                $('#image-gallery-image')
                    .attr('src', $sel.data('image'));
                disableButtons(counter, $sel.data('image-id'));
            }

            if (setIDs == true) {
                $('[data-image-id]')
                    .each(function () {
                        counter++;
                        $(this)
                            .attr('data-image-id', counter);
                    });
            }
            $(setClickAttr)
                .on('click', function () {
                    updateGallery($(this));
                });
        }
    });

// build key actions
$(document)
    .keydown(function (e) {
        switch (e.which) {
            case 37: // left
                if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                    $('#show-previous-image')
                        .click();
                }
                break;

            case 39: // right
                if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                    $('#show-next-image')
                        .click();
                }
                break;

            default:
                return; // exit this handler for other keys
        }
        e.preventDefault(); // prevent the default action (scroll / move caret)
    });
