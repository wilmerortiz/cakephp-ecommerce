$(document).ready(function(){
    cartProducts();
})

const cartProducts = () => {
    const products = getCartItems();
    $('#table-cart tbody').empty();
    if(products !== null) {
        products.map((product) => {
            const importe = parseFloat(product.cantidad) * parseFloat(product.price);
            const row = `<tr class="fila" data-index="${product.id}">
                    <td class="product-col">
                        <div class="product">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="/ecommerce/img/${product.image}" alt="Product image">
                                </a>
                            </figure>

                            <h3 class="product-title">
                                <a href="#">${product.name}</a>
                            </h3><!-- End .product-title -->
                        </div>
                        <!-- End .product -->
                    </td>
                    <td class="price-col">
                        $${product.price.toFixed(2)}
                        <input type="hidden" id="price-${product.id}" value="${product.price.toFixed(2)}">
                   </td>
                    <td class="quantity-col pr-4">
                        <div class="input-group d-flex">
                          <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button" value="resta" onclick="sumaItems(${product.id}, this.value)">-</button>
                          </div>
                          <input type="text" class="form-control" value="${product.cantidad}" min="1" max="10"
                                   required readonly id="cantidad-${product.id}"/>
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" value="suma" onclick="sumaItems(${product.id}, this.value)">+</button>
                          </div>
                        </div>
                        <!-- End .cart-product-quantity -->
                    </td>
                    <td class="total-col" id="importe-${product.id}">$${importe.toFixed(2)}</td>
                    <td class="remove-col">
                        <button class="btn-remove"><i class="icon-close"></i></button>
                    </td>
                </tr>`;

            $('#table-cart tbody').append(row);
        })

        sumarImportes();
    }
}

const sumaItems = (index, value) => {
    const cantidadInput = $(`#cantidad-${index}`);
    let cantidad = parseInt(cantidadInput.val())
    if(value === 'resta'){
        if ( cantidad > 1 ){
            cantidad--
        }
    } else {
        if ( cantidad < 10 ){
            cantidad++
        }
    }

    cantidadInput.val(cantidad);

    // Actualizamos la cantidad del producto en el carrito
    const cartItems = getCartItems();
    const positionItem = cartItems.findIndex(item => item.id === index);
    cartItems[positionItem] = {
        id: cartItems[positionItem].id,
        name: cartItems[positionItem].name,
        price: cartItems[positionItem].price,
        image: cartItems[positionItem].image,
        cantidad: cantidad

    }
    localStorage.setItem("cartItems", JSON.stringify(cartItems));
    addToCart()

    // Calculamos los importes de producto
    const price = parseFloat($(`#price-${index}`).val());

    const importe = price * cantidad;
    $(`#importe-${index}`).html(`$${importe.toFixed(2)}`);

    sumarImportes();
}

const sumarImportes = () => {
    let subtotal = 0;
    $('.fila').each(function(){
        const index = $(this).attr('data-index');
        const importe = $(`#importe-${index}`).text();
        const newImporte = importe.slice(1, (importe.length));
        subtotal += parseFloat(newImporte);
    });

    $(`#summary-subtotal`).text(`$${subtotal}`);

    calcularTotales();
}

const calcularTotales = () => {
    const shipping = $('input[name="shipping"]:checked').val();
    const subtotal = $(`#summary-subtotal`).text()
    const valSubtotal = subtotal.slice(1, subtotal.length);

    const summaryTotal = parseFloat(shipping) + parseFloat(valSubtotal);

    $(`#summary-total`).text(`$${summaryTotal}`);
}
