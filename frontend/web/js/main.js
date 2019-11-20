$(document).ready(function() {
    $('#vehicle-type').on('change', function () {
        let type = $(this).val();
        $.ajax({
            url: '/vehicle/lines',
            type: 'POST',
            data: {val: type},
            success: function (data) {
                $('#vehicle-line_id').html('');
                $.each(JSON.parse(data), function(index, value){
                    $('#vehicle-line_id').append('<option value="'+index+'">'+value+'</option>');
                });

            },
            error: function () {
                alert('Error!');
            }
        });
    });
});