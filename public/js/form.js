$(function() {
    var form = $('#orderForm'),
        selectItem = $('#selectItem'),
        inputAmount = $('#inputAmount'),
        priceSpan = $('#price'),
        inputPrice = $('#inputPrice'),
        popup = $('#popup'),
        okButton = $('#popup .ok-btn'),
        errorText = $('.error-text'),
        inputAgree = $('#inputAgree');

    selectItem.on('change input select', updatePrice);
    inputAmount.on('change input paste', updatePrice);

    okButton.click(hidePopup);

    $('body').keyup(function(e) {
        if (e.keyCode == 27) {
            hidePopup();
        }
    });

    function hidePopup() {
        popup.hide();
    }

    function showPopup() {
        offsetLeft = ($(window).width()-350)/2;
        offsetTop = ($(window).height()-popup.height()*2)/2;

        popup.css('left', offsetLeft);
        popup.css('top', offsetTop);

        popup.show();
        okButton.focus();
    }

    function updatePrice() {
        var item = selectItem.find('[value="' + selectItem.val() + '"]');

        if (item.attr('data-sample') == 1) {
            inputAmount.val(1);
            inputAmount.attr('disabled', 'disabled');
            /* Make price textual */
        } else {
            inputAmount.removeAttr('disabled');
        }

        var price = parseFloat(item.attr('data-price')) * parseInt(inputAmount.val());

        priceSpan.text(price);
        inputPrice.val(price);
    }

    form.submit(function(e) {
        e.preventDefault();

        $('.has-error').removeClass('has-error');
        errorText.hide();

        if (inputAgree.is(':checked')) {
            inputAgree.val('on');
        }

        var json = $(this).serialize();

        $.ajax({
            url: '/order',
            data: json,
            method: 'POST'
        }).done(function() {
            showPopup();

            form.find('input').val('');
        }).fail(function(res) {
            response = res.responseJSON;

            Object.keys(response).forEach(function(key) {
                $('form [name="' + key + '"]').closest('.form-group').addClass('has-error');
            });

            errorText.show();
        });

        return false;
    });

    updatePrice();
});