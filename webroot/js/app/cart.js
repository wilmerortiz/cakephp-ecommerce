$(document).ready(function(){
    cartProducts();
})

const cartProducts = () => {
    const products = getCartItems();
    $('#table-cart tbody').empty();
    if(products !== null) {
        products.map((product) => {
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
                    <td class="quantity-col">
                        <div class="cart-product-quantity">
                            <input type="text" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0"
                                   required onkeyup="sumaItems(${product.id}, this.value)">
                        </div>
                        <!-- End .cart-product-quantity -->
                    </td>
                    <td class="total-col" id="importe-${product.id}">$${product.price.toFixed(2)}</td>
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
    const price = parseFloat($(`#price-${index}`).val());
    const cantidad = parseFloat(value);
    const importe = price * cantidad;
    $(`#importe-${index}`).html(`$${importe.toFixed(2)}`);

    sumarImportes();
}

const sumarImportes = () => {
    let total = 0;
    $('.fila').each(function(){
        const index = $(this).attr('data-index');
        const importe = $(`#importe-${index}`).text();
        const newImporte = importe.slice(1, (importe.length));
        total += parseFloat(newImporte);
    });

    console.log(total)
}
