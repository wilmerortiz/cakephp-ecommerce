const registerAddress = (type) => {
    let action = `${baseUrl}ShippingAddress/add`;
    if(type === 'billing') {
        action = `${baseUrl}BillingAddress/add`;
    }

    $.ajax({
        url: action,
        type: 'GET',
        dataType: 'html'
    }).done((resp) => {
        $('#divFormulario').html(resp);
    }).fail((resp) => {
        console.log(resp);
    })
}

const totalSummary = () => {
    const cartItems = getCartItems();
    const subTotal = parseFloat(localStorage.getItem('subTotal'));
    const shipping = parseFloat(localStorage.getItem('shipping'));
    const summaryTotal = parseFloat(localStorage.getItem('summaryTotal'));

    $('#total').val(summaryTotal);
    $('#impuestos').val(0)
    $('#sub_total').val(subTotal);
    $('#shipping_monto').val(shipping);

    $('#tableSummary tbody').empty()

    cartItems.map(item => {
        const rows = `<tr>
            <td>
                <a href="#">${item.name}</a>
                <input type="hidden" name="product_id[]" value="${item.id}">
                 <input type="hidden" name="cantidad[]" value="${item.cantidad}">
                 <input type="hidden" name="precio[]" value="${item.price}">
                 <input type="hidden" name="transporte[]" value="">
                 <input type="hidden" name="description[]" value="">
            </td>
            <td>${item.cantidad} x $${item.price}</td>
        </tr>`
        $('#tableSummary tbody').append(rows)
    })

    const row = `
        <tr class="summary-subtotal">
            <td>Subtotal:</td>
            <td>$${subTotal.toFixed(2)}</td>
        </tr><!-- End .summary-subtotal -->
        <tr>
            <td>Shipping:</td>
            <td>$${shipping.toFixed(2)}</td>
        </tr>
        <tr class="summary-total">
            <td>Total:</td>
            <td>$${summaryTotal.toFixed(2)}</td>
        </tr><!-- End .summary-total -->`;

    $('#tableSummary tbody').append(row)
}
