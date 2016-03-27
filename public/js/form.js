$(function() {
    var form = $('#orderForm'),
        selectItem = $('#selectItem'),
        inputAmount = $('#inputAmount'),
        priceSpan = $('#price'),
        inputPrice = $('#inputPrice');

    selectItem.on('change input select', updatePrice);
    inputAmount.on('change input paste', updatePrice);


    function updatePrice() {
        var item = selectItem.find('[value="' + selectItem.val() + '"]');

        if (item.attr('data-sample') == 1) {
            inputAmount.val(1);
        }

        var price = parseFloat(item.attr('data-price')) * parseInt(inputAmount.val());

        priceSpan.text(price);
        inputPrice.val(price);
    }

    form.submit(function(e) {
        e.preventDefault();

        $('.has-error').removeClass('has-error');

        var json = $(this).serialize();

        $.ajax({
            url: '/order',
            data: json,
            method: 'POST'
        }).done(function() {
            form.find('.btn').addClass('btn-success');

            form.find('input').val('');
        }).fail(function(res) {
            response = res.responseJSON;

            Object.keys(response).forEach(function(key) {
                $('form [name="' + key + '"]').closest('.form-group').addClass('has-error');
            });
        });

        return false;
    });

    updatePrice();
});