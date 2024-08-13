$(function() {
    $.ajax({
        url: 'https://hellosalut.stefanbohacek.dev/?lang=fr',
        success: function(data) {
            $('#hello').text(data.hello);
        }
    });


});
