function addToCart(){
    let cartTotalPrice = 0;
    const cartItems = getCartItems();

    $('#section-cart').empty();

    if(cartItems !== null){
        cartItems.map((item) => {
            cartTotalPrice += parseFloat( item.price );
            let product = `<div class="product" data-id="product-${item.id}">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="product.html">${item.name}</a>
                                    </h4>

                                    <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
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

const addItem = (id, name, price, image) => {
    let cartItems = getCartItems();
    const item = {
        id, // id: id
        name, // name: name
        price, // price: price
        image // image: image
    }

    if(cartItems !== null && cartItems.length > 0){
        cartItems = [
            ...cartItems,
            item
        ]
        console.log('1');
    } else {
        console.log('1');
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

$(document).ready(function(){
    addToCart();
})
