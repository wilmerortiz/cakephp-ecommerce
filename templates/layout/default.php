<?php
$cakeDescription = 'ecommerce';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <meta name="theme-color" content="#ffffff">
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <!-- Plugins CSS File -->
    <?= $this->Html->css([
        '../assets/css/bootstrap.min.css',
        '../assets/css/plugins/owl-carousel/owl.carousel.css',
        '../assets/css/plugins/magnific-popup/magnific-popup.css',
        '../assets/css/plugins/jquery.countdown.css'
    ]) ?>
    <!-- Main CSS File -->
    <?= $this->Html->css([
        '../assets/css/style.css',
        '../assets/css/skins/skin-demo-7.css',
        '../assets/css/demos/demo-7.css'
    ]) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>
<div class="page-wrapper">

    <!-- Start .header -->
    <?= $this->element('header') ?>
    <!-- End .header -->

    <main class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner banner-big banner-overlay">
                        <a href="#">
                            <?= $this->Html->image('../assets/images/demos/demo-7/banners/banner-1.jpg', ['alt' =>'Banner']) ?>
                        </a>

                        <div class="banner-content banner-content-center">
                            <h3 class="banner-subtitle text-white"><a href="#">New Collection</a></h3><!-- End .banner-subtitle -->
                            <h2 class="banner-title text-white"><a href="#">Shop Women's</a></h2><!-- End .banner-title -->
                            <a href="#" class="btn underline"><span>Discover Now</span></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-lg-6 -->

                <div class="col-lg-6">
                    <div class="banner banner-big banner-overlay">
                        <a href="#">
                            <?= $this->Html->image('../assets/images/demos/demo-7/banners/banner-2.jpg', ['alt' =>'Banner']) ?>
                        </a>

                        <div class="banner-content banner-content-center">
                            <h3 class="banner-subtitle text-white"><a href="#">New Collection</a></h3><!-- End .banner-subtitle -->
                            <h2 class="banner-title text-white"><a href="#">Shop Men's</a></h2><!-- End .banner-title -->
                            <a href="#" class="btn underline"><span>Discover Now</span></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="banner banner-overlay text-white">
                        <a href="#">
                            <?= $this->Html->image('../assets/images/demos/demo-7/banners/banner-3.jpg', ['alt' =>'Banner']) ?>
                        </a>

                        <div class="banner-content banner-content-right">
                            <h4 class="banner-subtitle"><a href="#">Flip Flop</a></h4><!-- End .banner-subtitle -->
                            <h3 class="banner-title"><a href="#">Summer<br>sale -70% off</a></h3><!-- End .banner-title -->
                            <a href="#" class="btn underline btn-outline-white-3 banner-link">Shop Now</a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-lg-4 -->

                <div class="col-md-6 col-lg-4">
                    <div class="banner banner-overlay color-grey">
                        <a href="#">
                            <?= $this->Html->image('../assets/images/demos/demo-7/banners/banner-4.jpg', ['alt' =>'Banner']) ?>
                        </a>

                        <div class="banner-content">
                            <h4 class="banner-subtitle"><a href="#">Accessories</a></h4><!-- End .banner-subtitle -->
                            <h3 class="banner-title"><a href="#">2019 Winter<br>up to 50% off</a></h3><!-- End .banner-title -->
                            <a href="#" class="btn underline banner-link">Shop Now</a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-lg-4 -->

                <div class="col-md-6 col-lg-4">
                    <div class="banner banner-overlay text-white">
                        <a href="#">
                            <?= $this->Html->image('../assets/images/demos/demo-7/banners/banner-5.jpg', ['alt' =>'Banner']) ?>
                        </a>

                        <div class="banner-content banner-content-right mr">
                            <h4 class="banner-subtitle"><a href="#">New in</a></h4><!-- End .banner-subtitle -->
                            <h3 class="banner-title"><a href="#">Women’s<br>sportswear</a></h3><!-- End .banner-title -->
                            <a href="#" class="btn underline btn-outline-white-3 banner-link">Shop Now</a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-lg-4 -->
            </div><!-- End .row -->
        </div><!-- End .container-fluid -->

        <div class="icon-boxes-container bg-transparent">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-12 icon-boxes"">
                    <div class="col-sm-6 col-lg-4">
                        <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon">
                                        <i class="icon-truck"></i>
                                    </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Payment & Delivery</h3><!-- End .icon-box-title -->
                                <p>Free shipping for orders over $50</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-4 -->

                    <div class="col-sm-6 col-lg-4">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon">
                                <i class="icon-rotate-left"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Return & Refund</h3><!-- End .icon-box-title -->
                                <p>Free 100% money back guarantee</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-4 -->

                    <div class="col-sm-6 col-lg-4">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon">
                                <i class="icon-headphones"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Quality Support</h3><!-- End .icon-box-title -->
                                <p>Alway online feedback 24/7</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-4 -->
                </div>
            </div><!-- End .row -->
        </div><!-- End .container -->
</div><!-- End .icon-boxes-container -->

<div class="bg-light-2 pt-6 pb-6 featured">
    <div class="container-fluid">
        <div class="heading heading-center mb-3">
            <h2 class="title">FEATURED PRODUCTS</h2><!-- End .title -->

            <ul class="nav nav-pills justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="featured-women-link" data-toggle="tab" href="#featured-women-tab" role="tab" aria-controls="featured-women-tab" aria-selected="true">Womens Clothing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="featured-men-link" data-toggle="tab" href="#featured-men-tab" role="tab" aria-controls="featured-men-tab" aria-selected="false">Mens Clothing</a>
                </li>
            </ul>
        </div><!-- End .heading -->

        <div class="tab-content tab-content-carousel">
            <div class="tab-pane p-0 fade show active" id="featured-women-tab" role="tabpanel" aria-labelledby="featured-women-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                     data-owl-options='{
                                    "nav": false,
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1200": {
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <?= $this->Html->image('../assets/images/demos/demo-7/products/product-1-1.jpg',
                                    ['alt' =>'Product image', 'class'=>'product-image'])
                                ?>
                                <?= $this->Html->image('../assets/images/demos/demo-7/products/product-1-2.jpg',
                                    ['alt' =>'Product image', 'class'=>'product-image-hover'])
                                ?>
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Backpack</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $60.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <?= $this->Html->image('../assets/images/demos/demo-7/products/product-2-1.jpg',
                                    ['alt' =>'Product image', 'class'=>'product-image'])
                                ?>
                                <?= $this->Html->image('../assets/images/demos/demo-7/products/product-2-2.jpg',
                                    ['alt' =>'Product image', 'class'=>'product-image-hover'])
                                ?>
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Biker jacket</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $120.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #d79442;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #cc3333;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <?= $this->Html->image('../assets/images/demos/demo-7/products/product-3-1.jpg',
                                    ['alt' =>'Product image', 'class'=>'product-image'])
                                ?>
                                <?= $this->Html->image('../assets/images/demos/demo-7/products/product-3-2.jpg',
                                    ['alt' =>'Product image', 'class'=>'product-image-hover'])
                                ?>
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Sandals</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $70.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <span class="product-label label-circle label-sale">Sale</span>
                            <a href="product.html">
                                <?= $this->Html->image('../assets/images/demos/demo-7/products/product-4-1.jpg',
                                    ['alt' =>'Product image', 'class'=>'product-image'])
                                ?>
                                <?= $this->Html->image('../assets/images/demos/demo-7/products/product-4-2.jpg',
                                    ['alt' =>'Product image', 'class'=>'product-image-hover'])
                                ?>
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->

                            <div class="deal-countdown offer-countdown" data-until="+11d"></div><!-- End .deal-countdown -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Super Skinny High Jeggings</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$190.00</span>
                                <span class="old-price">$310.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="product.html">
                                <?= $this->Html->image('../assets/images/demos/demo-7/products/product-5-1.jpg',
                                    ['alt' =>'Product image', 'class'=>'product-image'])
                                ?>
                                <?= $this->Html->image('../assets/images/demos/demo-7/products/product-5-2.jpg',
                                    ['alt' =>'Product image', 'class'=>'product-image-hover'])
                                ?>
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Short wrap dress</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $80.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <?= $this->Html->image('../assets/images/demos/demo-7/products/product-1-1.jpg',
                                    ['alt' =>'Product image', 'class'=>'product-image'])
                                ?>
                                <?= $this->Html->image('../assets/images/demos/demo-7/products/product-1-2.jpg',
                                    ['alt' =>'Product image', 'class'=>'product-image-hover'])
                                ?>
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Backpack</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $60.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="featured-men-tab" role="tabpanel" aria-labelledby="featured-men-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                     data-owl-options='{
                                    "nav": false,
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":1
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1200": {
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <?= $this->Html->image('../assets/images/demos/demo-7/products/product-2-1.jpg',
                                    ['alt' =>'Product image', 'class'=>'product-image'])
                                ?>
                                <?= $this->Html->image('../assets/images/demos/demo-7/products/product-2-2.jpg',
                                    ['alt' =>'Product image', 'class'=>'product-image-hover'])
                                ?>
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Biker jacket</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $120.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #d79442;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #cc3333;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <?= $this->Html->image('../assets/images/demos/demo-7/products/product-3-1.jpg',
                                    ['alt' =>'Product image', 'class'=>'product-image'])
                                ?>
                                <?= $this->Html->image('../assets/images/demos/demo-7/products/product-3-2.jpg',
                                    ['alt' =>'Product image', 'class'=>'product-image-hover'])
                                ?>
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Sandals</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $70.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <span class="product-label label-circle label-sale">Sale</span>
                            <a href="product.html">
                                <?= $this->Html->image('../assets/images/demos/demo-7/products/product-4-1.jpg',
                                    ['alt' =>'Product image', 'class'=>'product-image'])
                                ?>
                                <?= $this->Html->image('../assets/images/demos/demo-7/products/product-4-2.jpg',
                                    ['alt' =>'Product image', 'class'=>'product-image-hover'])
                                ?>
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->

                            <div class="deal-countdown offer-countdown" data-until="+11d"></div><!-- End .deal-countdown -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Super Skinny High Jeggings</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$190.00</span>
                                <span class="old-price">$310.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->
    </div><!-- End .container-fluid -->
</div><!-- End .bg-light-2 pt-4 pb-4 -->

<div class="mb-6"></div><!-- End .mb-6 -->

<div class="container-fluid">
    <div class="heading heading-center mb-3">
        <h2 class="title">NEW ARRIVALS</h2><!-- End .title -->

        <ul class="nav nav-pills justify-content-center" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="new-women-link" data-toggle="tab" href="#new-women-tab" role="tab" aria-controls="new-women-tab" aria-selected="true">Womens Clothing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="new-men-link" data-toggle="tab" href="#new-men-tab" role="tab" aria-controls="new-men-tab" aria-selected="false">Mens Clothing</a>
            </li>
        </ul>
    </div><!-- End .heading -->

    <div class="tab-content">
        <div class="tab-pane p-0 fade show active" id="new-women-tab" role="tabpanel" aria-labelledby="new-women-link">
            <div class="products">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <span class="product-label label-circle label-sale">Sale</span>
                                <a href="product.html">
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-6-1.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image']);
                                    ?>
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-6-2.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image-hover']);
                                    ?>
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Tie-detail top</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$50.00</span>
                                    <span class="old-price">$84.00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-7-1.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image']);
                                    ?>
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-7-2.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image-hover']);
                                    ?>
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Dress with a belt</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $120.99
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-8-1.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image']);
                                    ?>
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-8-2.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image-hover']);
                                    ?>
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Linen-blend paper bag trousers</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $60.00
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->
                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #d5ad81;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="product.html">
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-9-1.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image']);
                                    ?>
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-9-2.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image-hover']);
                                    ?>
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Paper straw shopper</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $80.95
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 6 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-10-1.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image']);
                                    ?>
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-10-2.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image-hover']);
                                    ?>
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Trainers</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $56.00
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <span class="product-label label-circle label-sale">Sale</span>
                                <a href="product.html">
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-11-1.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image']);
                                    ?>
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-11-2.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image-hover']);
                                    ?>
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Hooded top </a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$50.00</span>
                                    <span class="old-price">$84.00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-12-1.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image']);
                                    ?>
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-12-2.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image-hover']);
                                    ?>
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Vest dress</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $89.99
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-13-1.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image']);
                                    ?>
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-13-2.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image-hover']);
                                    ?>
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Long-sleeved blouse</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $84.00
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 3 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-14-1.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image']);
                                    ?>
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-14-2.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image-hover']);
                                    ?>
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Denim jacket</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $80.95
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->
                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #7ba1c9;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #feb143;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #f0c7b7;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-15-1.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image']);
                                    ?>
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-15-2.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image-hover']);
                                    ?>
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Sunglasses</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $56.00
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .products -->
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="new-men-tab" role="tabpanel" aria-labelledby="new-men-link">
            <div class="products">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-8-1.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image']);
                                    ?>
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-8-2.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image-hover']);
                                    ?>
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Linen-blend paper bag trousers</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $60.00
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->
                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #d5ad81;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="product.html">
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-9-1.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image']);
                                    ?>
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-9-2.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image-hover']);
                                    ?>
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Paper straw shopper</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $80.95
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 6 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-10-1.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image']);
                                    ?>
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-10-2.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image-hover']);
                                    ?>
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Trainers</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $56.00
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <span class="product-label label-circle label-sale">Sale</span>
                                <a href="product.html">
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-11-1.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image']);
                                    ?>
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-11-2.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image-hover']);
                                    ?>
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Hooded top </a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$50.00</span>
                                    <span class="old-price">$84.00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-12-1.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image']);
                                    ?>
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-12-2.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image-hover']);
                                    ?>
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Vest dress</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $89.99
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-13-1.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image']);
                                    ?>
                                    <?= $this->Html->image('../assets/images/demos/demo-7/products/product-13-2.jpg',
                                        ['alt' =>'Product image', 'class'=>'product-image-hover']);
                                    ?>
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Long-sleeved blouse</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $84.00
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 3 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .products -->
        </div><!-- .End .tab-pane -->
    </div><!-- End .tab-content -->

    <div class="more-container text-center mt-2">
        <a href="#" class="btn btn-outline-dark-3 btn-more"><span>Load more</span><i class="icon-long-arrow-right"></i></a>
    </div><!-- End .more-container -->

    <hr class="mt-0 mb-6">

    <div class="blog-posts mb-4">
        <h2 class="title text-center mb-3">From Our Blog</h2><!-- End .title text-center -->

        <div class="owl-carousel owl-simple mb-2" data-toggle="owl"
             data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "items": 3,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "520": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                }
                            }
                        }'>
            <article class="entry">
                <figure class="entry-media">
                    <a href="single.html">
                        <?= $this->Html->image('../assets/images/demos/demo-7/blog/post-1.jpg',
                            ['alt' =>'image desc']);
                        ?>
                    </a>
                </figure><!-- End .entry-media -->

                <div class="entry-body text-center">
                    <div class="entry-meta">
                        <a href="#">Nov 22, 2018</a>, 1 Comments
                    </div><!-- End .entry-meta -->

                    <h3 class="entry-title">
                        <a href="single.html">Sed adipiscing ornare.</a>
                    </h3><!-- End .entry-title -->

                    <div class="entry-content">
                        <a href="single.html" class="read-more">Read More</a>
                    </div><!-- End .entry-content -->
                </div><!-- End .entry-body -->
            </article><!-- End .entry -->

            <article class="entry">
                <figure class="entry-media">
                    <a href="single.html">
                        <?= $this->Html->image('../assets/images/demos/demo-7/blog/post-2.jpg',
                            ['alt' =>'image desc']);
                        ?>
                    </a>
                </figure><!-- End .entry-media -->

                <div class="entry-body text-center">
                    <div class="entry-meta">
                        <a href="#">Dec 12, 2018</a>, 0 Comments
                    </div><!-- End .entry-meta -->

                    <h3 class="entry-title">
                        <a href="single.html">Fusce lacinia arcuet nulla.</a>
                    </h3><!-- End .entry-title -->

                    <div class="entry-content">
                        <a href="single.html" class="read-more">Read More</a>
                    </div><!-- End .entry-content -->
                </div><!-- End .entry-body -->
            </article><!-- End .entry -->

            <article class="entry">
                <figure class="entry-media">
                    <a href="single.html">
                        <?= $this->Html->image('../assets/images/demos/demo-7/blog/post-3.jpg',
                            ['alt' =>'image desc']);
                        ?>
                    </a>
                </figure><!-- End .entry-media -->

                <div class="entry-body text-center">
                    <div class="entry-meta">
                        <a href="#">Dec 19, 2018</a>, 2 Comments
                    </div><!-- End .entry-meta -->

                    <h3 class="entry-title">
                        <a href="single.html">Quisque volutpat mattis eros.</a>
                    </h3><!-- End .entry-title -->

                    <div class="entry-content">
                        <a href="single.html" class="read-more">Read More</a>
                    </div><!-- End .entry-content -->
                </div><!-- End .entry-body -->
            </article><!-- End .entry -->

            <article class="entry">
                <figure class="entry-media">
                    <a href="single.html">
                        <?= $this->Html->image('../assets/images/demos/demo-7/blog/post-4.jpg',
                            ['alt' =>'image desc']);
                        ?>
                    </a>
                </figure><!-- End .entry-media -->

                <div class="entry-body text-center">
                    <div class="entry-meta">
                        <a href="#">Dec 25, 2018</a>, 3 Comments
                    </div><!-- End .entry-meta -->

                    <h3 class="entry-title">
                        <a href="single.html">Mauris suscipit in massa.</a>
                    </h3><!-- End .entry-title -->

                    <div class="entry-content">
                        <a href="single.html" class="read-more">Read More</a>
                    </div><!-- End .entry-content -->
                </div><!-- End .entry-body -->
            </article><!-- End .entry -->
        </div><!-- End .owl-carousel -->
    </div><!-- End .blog-posts -->
</div><!-- End .container-fluid -->

<div class="bg-light-2 pt-7 pb-6 testimonials">
    <div class="container">
        <h2 class="title text-center mb-2">Our Customers Say</h2><!-- End .title text-center -->
        <div class="owl-carousel owl-simple owl-testimonials" data-toggle="owl"
             data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "1200": {
                                    "nav": true
                                }
                            }
                        }'>
            <blockquote class="testimonial testimonial-icon text-center">
                <p class="lead">“Really great store”</p><!-- End .lead -->
                <p>“ Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra<br>a, ultricies in, diam. Sed arcu. ”</p>

                <cite>
                    Charly Smith,
                    <span>Customer</span>
                </cite>
            </blockquote><!-- End .testimonial -->

            <blockquote class="testimonial testimonial-icon text-center">
                <p class="lead">“Friendly Support”</p><!-- End .lead -->
                <p>“ Impedit, ratione sequi, sunt incidunt magnam et. Delectus obcaecati optio eius error libero perferendis nesciunt atque dolores magni recusandae! Doloremque quidem error eum quis similique doloribus natus qui ut ipsum.”</p>

                <cite>
                    Damon Stone
                    <span>Customer</span>
                </cite>
            </blockquote><!-- End .testimonial -->

            <blockquote class="testimonial testimonial-icon text-center">
                <p class="lead">“Free Shipping”</p><!-- End .lead -->
                <p>“ Molestias animi illo natus ut quod neque ad accusamus praesentium fuga! Dolores odio alias sapiente odit delectus quasi, explicabo a, modi voluptatibus. Perferendis perspiciatis, voluptate, distinctio earum veritatis animi tempora eget blandit nunc tortor mollis ”</p>

                <cite>
                    John Smith
                    <span>Customer</span>
                </cite>
            </blockquote><!-- End .testimonial -->
        </div><!-- End .testimonials-slider owl-carousel -->
    </div><!-- End .container -->
</div><!-- End .bg-light pt-5 pb-5 -->

<div class="brands-border owl-carousel owl-simple" data-toggle="owl"
     data-owl-options='{
                    "nav": false,
                    "dots": false,
                    "margin": 0,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "420": {
                            "items":3
                        },
                        "600": {
                            "items":4
                        },
                        "900": {
                            "items":5
                        },
                        "1024": {
                            "items":6
                        },
                        "1360": {
                            "items":7
                        }
                    }
                }'>
    <a href="#" class="brand">
        <?= $this->Html->image('../assets/images/brands/1.png',
            ['alt' =>'Brand Name']);
        ?>
    </a>

    <a href="#" class="brand">
        <?= $this->Html->image('../assets/images/brands/2.png',
            ['alt' =>'Brand Name']);
        ?>
    </a>

    <a href="#" class="brand">
        <?= $this->Html->image('../assets/images/brands/3.png',
            ['alt' =>'Brand Name']);
        ?>
    </a>

    <a href="#" class="brand">
        <?= $this->Html->image('../assets/images/brands/4.png',
            ['alt' =>'Brand Name']);
        ?>
    </a>

    <a href="#" class="brand">
        <?= $this->Html->image('../assets/images/brands/5.png',
            ['alt' =>'Brand Name']);
        ?>
    </a>

    <a href="#" class="brand">
        <?= $this->Html->image('../assets/images/brands/6.png',
            ['alt' =>'Brand Name']);
        ?>
    </a>

    <a href="#" class="brand">
        <?= $this->Html->image('../assets/images/brands/7.png',
            ['alt' =>'Brand Name']);
        ?>
    </a>
</div><!-- End .owl-carousel -->
</main><!-- End .main -->

<?= $this->Element('footer') ?>

</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>

        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li class="active">
                    <a href="index.html">Home</a>

                    <ul>
                        <li><a href="index-1.html">01 - furniture store</a></li>
                        <li><a href="index-2.html">02 - furniture store</a></li>
                        <li><a href="index-3.html">03 - electronic store</a></li>
                        <li><a href="index-4.html">04 - electronic store</a></li>
                        <li><a href="index-5.html">05 - fashion store</a></li>
                        <li><a href="index-6.html">06 - fashion store</a></li>
                        <li><a href="index-7.html">07 - fashion store</a></li>
                        <li><a href="index-8.html">08 - fashion store</a></li>
                        <li><a href="index-9.html">09 - fashion store</a></li>
                        <li><a href="index-10.html">10 - shoes store</a></li>
                        <li><a href="index-11.html">11 - furniture simple store</a></li>
                        <li><a href="index-12.html">12 - fashion simple store</a></li>
                        <li><a href="index-13.html">13 - market</a></li>
                        <li><a href="index-14.html">14 - market fullwidth</a></li>
                        <li><a href="index-15.html">15 - lookbook 1</a></li>
                        <li><a href="index-16.html">16 - lookbook 2</a></li>
                        <li><a href="index-17.html">17 - fashion store</a></li>
                        <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                        <li><a href="index-19.html">19 - games store</a></li>
                        <li><a href="index-20.html">20 - book store</a></li>
                        <li><a href="index-21.html">21 - sport store</a></li>
                        <li><a href="index-22.html">22 - tools store</a></li>
                        <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                        <li><a href="index-24.html">24 - extreme sport store</a></li>
                    </ul>
                </li>
                <li>
                    <a href="category.html">Shop</a>
                    <ul>
                        <li><a href="category-list.html">Shop List</a></li>
                        <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                        <li><a href="category.html">Shop Grid 3 Columns</a></li>
                        <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                        <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                        <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                        <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                        <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="#">Lookbook</a></li>
                    </ul>
                </li>
                <li>
                    <a href="product.html" class="sf-with-ul">Product</a>
                    <ul>
                        <li><a href="product.html">Default</a></li>
                        <li><a href="product-centered.html">Centered</a></li>
                        <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                        <li><a href="product-gallery.html">Gallery</a></li>
                        <li><a href="product-sticky.html">Sticky Info</a></li>
                        <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                        <li><a href="product-fullwidth.html">Full Width</a></li>
                        <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul>
                        <li>
                            <a href="about.html">About</a>

                            <ul>
                                <li><a href="about.html">About 01</a></li>
                                <li><a href="about-2.html">About 02</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>

                            <ul>
                                <li><a href="contact.html">Contact 01</a></li>
                                <li><a href="contact-2.html">Contact 02</a></li>
                            </ul>
                        </li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                        <li><a href="404.html">Error 404</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li>
                    <a href="blog.html">Blog</a>

                    <ul>
                        <li><a href="blog.html">Classic</a></li>
                        <li><a href="blog-listing.html">Listing</a></li>
                        <li>
                            <a href="#">Grid</a>
                            <ul>
                                <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Masonry</a>
                            <ul>
                                <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Mask</a>
                            <ul>
                                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Single Post</a>
                            <ul>
                                <li><a href="single.html">Default with sidebar</a></li>
                                <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="elements-list.html">Elements</a>
                    <ul>
                        <li><a href="elements-products.html">Products</a></li>
                        <li><a href="elements-typography.html">Typography</a></li>
                        <li><a href="elements-titles.html">Titles</a></li>
                        <li><a href="elements-banners.html">Banners</a></li>
                        <li><a href="elements-product-category.html">Product Category</a></li>
                        <li><a href="elements-video-banners.html">Video Banners</a></li>
                        <li><a href="elements-buttons.html">Buttons</a></li>
                        <li><a href="elements-accordions.html">Accordions</a></li>
                        <li><a href="elements-tabs.html">Tabs</a></li>
                        <li><a href="elements-testimonials.html">Testimonials</a></li>
                        <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                        <li><a href="elements-portfolio.html">Portfolio</a></li>
                        <li><a href="elements-cta.html">Call to Action</a></li>
                        <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                    </ul>
                </li>
            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

<!-- Sign in / Register Modal -->
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-close"></i></span>
                </button>

                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tab-content-5">
                            <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="singin-email">Username or email address *</label>
                                        <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="singin-password">Password *</label>
                                        <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>LOG IN</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="signin-remember">
                                            <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                        </div><!-- End .custom-checkbox -->

                                        <a href="#" class="forgot-link">Forgot Your Password?</a>
                                    </div><!-- End .form-footer -->
                                </form>
                                <div class="form-choice">
                                    <p class="text-center">or sign in with</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-g">
                                                <i class="icon-google"></i>
                                                Login With Google
                                            </a>
                                        </div><!-- End .col-6 -->
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-f">
                                                <i class="icon-facebook-f"></i>
                                                Login With Facebook
                                            </a>
                                        </div><!-- End .col-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .form-choice -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="register-email">Your email address *</label>
                                        <input type="email" class="form-control" id="register-email" name="register-email" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="register-password">Password *</label>
                                        <input type="password" class="form-control" id="register-password" name="register-password" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>SIGN UP</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                            <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                        </div><!-- End .custom-checkbox -->
                                    </div><!-- End .form-footer -->
                                </form>
                                <div class="form-choice">
                                    <p class="text-center">or sign in with</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-g">
                                                <i class="icon-google"></i>
                                                Login With Google
                                            </a>
                                        </div><!-- End .col-6 -->
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login  btn-f">
                                                <i class="icon-facebook-f"></i>
                                                Login With Facebook
                                            </a>
                                        </div><!-- End .col-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .form-choice -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .form-tab -->
                </div><!-- End .form-box -->
            </div><!-- End .modal-body -->
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div><!-- End .modal -->

<div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row no-gutters bg-white newsletter-popup-content">
                <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                    <div class="banner-content text-center">
                        <?= $this->Html->image('../assets/images/popup/newsletter/logo.png',
                            ['class'=>'logo', 'alt' =>'logo', 'width'=>'60', 'height'=>'15']);
                        ?>
                        <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                        <p>Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite products.</p>
                        <form action="#">
                            <div class="input-group input-group-round">
                                <input type="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                                <div class="input-group-append">
                                    <button class="btn" type="submit"><span>go</span></button>
                                </div><!-- .End .input-group-append -->
                            </div><!-- .End .input-group -->
                        </form>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                            <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
                        </div><!-- End .custom-checkbox -->
                    </div>
                </div>
                <div class="col-xl-2-5col col-lg-5 ">
                    <?= $this->Html->image('../assets/images/popup/newsletter/img-1.jpg',
                        ['class'=>'newsletter-img', 'alt' =>'newsletter']);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Plugins JS File -->
<?= $this->Html->script([
    '../assets/js/jquery.min.js',
    '../assets/js/bootstrap.bundle.min.js',
    '../assets/js/jquery.hoverIntent.min.js',
    '../assets/js/jquery.waypoints.min.js',
    '../assets/js/superfish.min.js',
    '../assets/js/bootstrap-input-spinner.js',
    '../assets/js/owl.carousel.min.js',
    '../assets/js/jquery.plugin.min.js',
    '../assets/js/jquery.magnific-popup.min.js',
    '../assets/js/jquery.countdown.min.js',
]) ?>
<!-- Main JS File -->
<?= $this->Html->script([
    '../assets/js/main.js',
    '../assets/js/demos/demo-7.js'
]) ?>
</body>
</html>
