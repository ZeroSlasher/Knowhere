$(document).ready(function() {
    $('select[name="catSelect"]').on('change', function() {
        var catID = $(this).val();
        if(catID) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: '/subcat/ajax/'+catID,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    $('select[name="subcat"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="subcat"]').append('<option value="'+ value.subcat_id +'">'+ value.subcatagory +'</option>');
                    });
                }
            });
        }else{
            $('select[name="subcat"]').empty();
        }
    });
});

$(document).ready(function() {
    $('select[name="state"]').on('change', function() {
        var stateID = $(this).val();
        if(stateID) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: '/dist/ajax/'+stateID,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    $('select[name="district"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="district"]').append('<option value="'+ value.dist_id +'">'+ value.district +'</option>');
                    });
                }
            });
        }else{
            $('select[name="district"]').empty();
        }
    });
});

$(document).ready(function() {
    $('select[name="district"]').on('change', function() {
        var distID = $(this).val();
        if(distID) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: '/city/ajax/'+distID,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    $('select[name="city"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="city"]').append('<option value="'+ value.city_id +'">'+ value.city +'</option>');
                    });
                }
            });
        }else{
            $('select[name="city"]').empty();
        }
    });
});

// $(document).ready(function() {
//     $('button[name="submit"]').on('click', function() {
//         var proof1 = $(this).val();
//         var proof2 = $(this).val();
//         var proof3 = $(this).val();
//         if(proof1 && proof2 && proof3) {
//             $.ajax({
//                 headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
//                 url: '/city/ajax/'+distID,
//                 type: "GET",
//                 dataType: "json",
//                 success:function(data) {
//                     $('select[name="city"]').empty();
//                     $.each(data, function(key, value) {
//                         $('select[name="city"]').append('<option value="'+ value.city_id +'">'+ value.city +'</option>');
//                     });
//                 }
//             });
//         }else{
//             $('select[name="city"]').empty();
//         }
//     });
// });