function call() {
    var msg = $('#formx').serialize();
    $.ajax({
        type: 'POST',
        url: 'post.php',
        data: msg,
        success: function(data) {
            $('#results').html(data);
        },
        error: function(xhr, str) {
            alert ('Возникла ошибка ' + xhr.responseCode);
        }
    });
    $('#product_name').val('');
    $('#manager_name').val('');
}