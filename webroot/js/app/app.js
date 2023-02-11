function addToCart(id, name, price, image){
    //cart-total-price
    let cartCount = parseInt( $('.cart-count').text() );
    let cartTotalPrice = parseFloat( $('.cart-total-price').text() );
    let product = `<div class="product" data-id="product-${id}">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="product.html">${name}</a>
                                    </h4>

                                    <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $${price}
                                            </span>
                                </div><!-- End .product-cart-details -->

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="/ecommerce/img/${image}" alt="product">
                                    </a>
                                </figure>
                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                            </div><!-- End .product -->`;


    // Imprimimos el producto en carrito
    $('#section-cart').append(product);

    // Aumentamos e imprimimos la cantidad de item que tenemos en el carrito
    cartCount++;
    $('.cart-count').text(cartCount);

    // Sumamos e imprimimos el monto de los items
    cartTotalPrice += parseFloat(price);

    $('.cart-total-price').html(`${cartTotalPrice.toFixed(2)}`);
    //$('.cart-total-price').html(cartTotalPrice);


    // Mostramos un mensaje que el producto fue agregado al carrito
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Producto agregado al carrito',
        showConfirmButton: false,
        timer: 3000
    })
}

function addToWishlist(){

}
