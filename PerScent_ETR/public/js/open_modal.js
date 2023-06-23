$(document).ready(function () {
    $('.add-to-cart').click(function (e) {
        e.preventDefault();
        console.log('Form submitted!');
        var productId = $(this).data('product-id');
        $('#product_id').val(productId);
        $('#orderModal').modal('show');
    });

    $('#orderForm').submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var formData = form.serialize();

        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: formData,
            success: function (response) {
                // Handle success response
                console.log(response);
                $('#orderModal').modal('hide');
            },
            error: function (xhr, status, error) {
                // Handle error response
                console.error(error);
            }
        });
    });
});