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
