function addToCart(){
    let cartTotalPrice = 0;
    const cartItems = getCartItems();

    $('#section-cart').empty();

    if(cartItems !== null){
        cartItems.map((item) => {
            cartTotalPrice += parseFloat( item.price ) * parseInt(item.cantidad);
            let product = `<div class="product" data-id="product-${item.id}">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="product.html">${item.name}</a>
                                    </h4>

                                    <span class="cart-product-info">
                                                <span class="cart-product-qty">${item.cantidad}</span>
                                                x $${item.price}
                                            </span>
                                </div><!-- End .product-cart-details -->

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="/ecommerce/img/${item.image}" alt="product">
                                    </a>
                                </figure>
                                <a href="javascript:" class="btn-remove" title="Remove Product" onclick="removeItem(${item.id})" >
                                    <i class="icon-close"></i>
                                </a>
                            </div><!-- End .product -->`;


            // Imprimimos el producto en carrito
            $('#section-cart').append(product);
        })
    }


    // Imprimimos la cantidad de items.
    $('.cart-count').text(cartItems?.length || 0);

    // Imprimimos el monto total
    $('.cart-total-price').html(`${cartTotalPrice.toFixed(2)}`);
    //$('.cart-total-price').html(cartTotalPrice);

}

function addToWishlist(){

}

const getCartItems = () => {
    const data = localStorage.getItem("cartItems");
    return JSON.parse(data);
}

const addItem = (id, name, price, image, cantidad=1) => {
    let cartItems = getCartItems();
    let item = {
        id, // id: id
        name, // name: name
        price, // price: price
        image, // image: image
        cantidad // cantidad: cantidad
    }

    if(cartItems !== null && cartItems.length > 0){

        const index = cartItems.findIndex(item => item.id === id);

        if(index > -1) {

            item = {
                id: id,
                name: name,
                price: price,
                image: image,
                cantidad: cartItems[index].cantidad + 1
            }

            cartItems[index] = item;

        }else{
            cartItems = [
                ...cartItems,
                item
            ]
        }

    } else {
        cartItems = [
            item
        ];
    }

    localStorage.setItem("cartItems", JSON.stringify(cartItems));

    addToCart();

    // Mostramos un mensaje que el producto fue agregado al carrito
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Producto agregado al carrito',
        showConfirmButton: false,
        timer: 3000
    });
}

const removeItem = (id) => {
    const cartItems = getCartItems();
    const newCartItems = cartItems.filter((item) => item.id !== id);
    localStorage.setItem("cartItems", JSON.stringify(newCartItems));
    addToCart();
}

const addAndUpdateData = (id, modalFormId, formId, controllerAndAction, print=false) => {
    $.ajax({
        url : `${baseUrl}${controllerAndAction}/${id}`,
        type: 'POST',
        data: $(`#${formId}`).serialize(), // $('#'+formId).serialize()
        dataType: 'json'
    }).done((resp) => {
        Swal.fire({
            icon: 'success',
            title: 'DONE',
            text: resp.message
        })
        $('#' + modalFormId).modal('hide');
        $('#' + modalFormId).on('hidden.bs.modal', function (evt) {
            if(controllerAndAction === 'ShippingAddress/add'){
                getAddress($('#user_id').val(), 'ShippingAddress/getData', 'shipping-address')
            }else if(controllerAndAction === 'BillingAddress/add'){
                getAddress($('#user_id').val(), 'BillingAddress/getData', 'billing-address')
            }
        })
        // Limpiamos el localStorage
        if(controllerAndAction==='Checkout/add'){
            localStorage.removeItem('cartItems');
            localStorage.removeItem('subTotal');
            localStorage.removeItem('shipping');
            localStorage.removeItem('summaryTotal');
        }

        print && imprimir(resp)

    }).fail((resp) => {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: resp.message
        })
    })
}

const getAddress = (user_id, controllerAndAction, showContent) => {
    $.ajax({
        url: baseUrl + controllerAndAction + '/' + user_id, // http://localhost/ecommerce/ShippingAddress/getData/4
        type: 'GET',
        dataType: 'html'
    }).done((resp) => {
        $('#' + showContent).html(resp)
    }).fail((resp) => {
        console.log(resp)
    })
}

const imprimir = (params) => {
    const ruta = `${baseUrl}${params.controller}/${params.id}`;

    $('#iframeImprimir').attr('src', ruta);
    $('#modalImprimir').modal('show');
}

$(document).ready(function(){
    addToCart();
    /*
    function disableIE() {
        if (document.all) {
            return false;
        }
    }
    function disableNS(e) {
        if (document.layers || (document.getElementById && !document.all)) {
            if (e.which==2 || e.which==3) {
                return false;
            }
        }
    }
    if (document.layers) {
        document.captureEvents(Event.MOUSEDOWN);
        document.onmousedown = disableNS;
    }
    else {
        document.onmouseup = disableNS;
        document.oncontextmenu = disableIE;
    }
    document.oncontextmenu=new Function("return false");

     */
})
