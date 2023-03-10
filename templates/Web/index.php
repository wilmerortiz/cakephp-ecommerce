<main class="main">
    <div class="container-fluid">
        <div class="row">
            <?php foreach($types as $key => $type): ?>
                <div class="col-lg-6">
                    <div class="banner banner-big banner-overlay">
                        <a href="#">
                            <?= $this->Html->image($type['image'], ['alt' =>'Banner']) ?>
                        </a>

                        <div class="banner-content banner-content-center">
                            <h3 class="banner-subtitle text-white"><a href="#">New Collection</a></h3><!-- End .banner-subtitle -->
                            <h2 class="banner-title text-white"><a href="#">Shop <?= $type['name']; ?></a></h2><!-- End .banner-title -->
                            <a href="#" class="btn underline"><span>Discover Now</span></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-lg-6 -->
            <?php endforeach; ?>
        </div><!-- End .row -->

        <div class="row justify-content-center">
            <?php foreach($categories as $key => $category): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="banner banner-overlay <?= $category['class_text_color'] ?>">
                        <a href="#">
                            <?= $this->Html->image($category['image'], ['alt' =>'Banner']) ?>
                        </a>

                        <div class="banner-content <?= $category['class_posicion_content'] ?>">
                            <h4 class="banner-subtitle"><a href="#"><?= $category['name'] ?></a></h4><!-- End .banner-subtitle -->
                            <h3 class="banner-title"><a href="#"><?= $category['descripcion'] ?></a></h3><!-- End .banner-title -->
                            <a href="#" class="btn underline btn-outline-white-3 banner-link">Shop Now</a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner -->
                </div><!-- End .col-lg-4 -->
            <?php endforeach; ?>

        </div><!-- End .row -->
    </div><!-- End .container-fluid -->

    <div class="icon-boxes-container bg-transparent">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12 icon-boxes"">
                    <?php foreach($varios as $key => $vr): ?>
                        <div class="col-sm-6 col-lg-4">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <?= $vr['icono'] ?>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title"><?= $vr['title'] ?></h3><!-- End .icon-box-title -->
                                    <p><?= $vr['description'] ?></p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-4 -->
                    <?php endforeach ?>

                </div>
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .icon-boxes-container -->

    <div class="bg-light-2 pt-6 pb-6 featured">
        <div class="container-fluid">
            <div class="heading heading-center mb-3">
                <h2 class="title">FEATURED PRODUCTS</h2><!-- End .title -->

                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <?php foreach ($products as $key => $type): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php if($key==0) echo 'active' ?>"
                               id="featured-<?= $type['id'] ?>-link"
                               data-toggle="tab"
                               href="#featured-<?= $type['id'] ?>-tab"
                               role="tab"
                               aria-controls="featured-<?= $type['id'] ?>-tab"
                               aria-selected="<?= $key==0 ? 'true' : 'false' ?>"
                            >
                                <?= $type['name'] ?> Clothing
                            </a>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div><!-- End .heading -->

            <div class="tab-content tab-content-carousel">

                <?php foreach ($products as $key => $type): ?>
                    <div class="tab-pane p-0 fade <?php if($key==0) echo 'show active' ?>" id="featured-<?= $type['id'] ?>-tab" role="tabpanel" aria-labelledby="featured-<?= $type['id'] ?>-link">
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
                            <?php //debug($type) ?>
                            <?php foreach($type['products'] as $ky => $product): ?>
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <?= $this->Html->image($product['image'],
                                            ['alt' =>'Product image', 'class'=>'product-image'])
                                        ?>
                                        <!--
                                        <?php //echo $this->Html->image('../assets/images/demos/demo-7/products/product-1-2.jpg',
                                            //['alt' =>'Product image', 'class'=>'product-image-hover'])
                                        ?>
                                        -->
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="javascript:"
                                           class="btn-product btn-cart"
                                           onclick="addItem(<?= $product['id'] ?>, '<?= $product['name'] ?>', <?= $product['price'] ?>, '<?= $product['image'] ?>')"
                                        >
                                            <span>add to cart</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html"><?= $product['name'] ?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $<?= $product['price'] ?>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                            <?php endforeach; ?>

                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                <?php endforeach; ?>

            </div><!-- End .tab-content -->
        </div><!-- End .container-fluid -->
    </div><!-- End .bg-light-2 pt-4 pb-4 -->

    <div class="mb-6"></div><!-- End .mb-6 -->

    <div class="container-fluid">
        <div class="heading heading-center mb-3">
            <h2 class="title">NEW ARRIVALS</h2><!-- End .title -->

            <ul class="nav nav-pills justify-content-center" role="tablist">
                <?php foreach ($productsArrivals as $ky => $type): ?>
                <li class="nav-item">
                    <a class="nav-link <?php if($ky===0) echo 'active' ?>"
                       id="new-tab-link-<?= $type->id ?>" data-toggle="tab"
                       href="#new-tab-tab-<?= $type->id ?>" role="tab"
                       aria-controls="new-women-tab"
                       aria-selected="<?= $ky===0 ? 'true' : 'false' ?>">
                        <?= $type->name ?> Clothing
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div><!-- End .heading -->

        <div class="tab-content">
            <?php foreach ($productsArrivals as $ky => $type): ?>
            <div class="tab-pane p-0 fade <?php if($ky===0) echo 'show active' ?>" id="new-tab-tab-<?= $type->id ?>" role="tabpanel" aria-labelledby="new-tab-link-<?= $type->id ?>">
                <div class="products">
                    <div class="row justify-content-center">
                        <?php foreach ($type->products as $kp => $product): ?>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <?= $this->Html->image($product->image,
                                            ['alt' =>'Product image', 'class'=>'product-image']);
                                        ?>
                                        <!--
                                        <?php //echo $this->Html->image('../assets/images/demos/demo-7/products/product-7-2.jpg',
                                            //['alt' =>'Product image', 'class'=>'product-image-hover']);
                                        ?>-->
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="javascript:"
                                           class="btn-product btn-cart"
                                        onclick="addItem(<?= $product->id ?>, '<?= $product->name ?>', <?= $product->price ?>, '<?= $product->image ?>')">
                                            <span>add to cart</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html"><?= $product->name ?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $<?= $product->price ?>
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
                        <?php endforeach ?>

                    </div><!-- End .row -->
                </div><!-- End .products -->
            </div><!-- .End .tab-pane -->
            <?php endforeach; ?>
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
            <a href="<?= $this->Url->build(['controller' => 'Products', 'action'=>'listado']) ?>"
               class="btn btn-outline-dark-3 btn-more">
                <span>Load more</span><i class="icon-long-arrow-right"></i>
            </a>
        </div><!-- End .more-container -->

    </div><!-- End .container-fluid -->
    <!--
    <div class="bg-light-2 pt-7 pb-6 testimonials">
        <div class="container">
            <h2 class="title text-center mb-2">Our Customers Say</h2>
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
                    <p class="lead">???Really great store???</p>
                    <p>??? Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra<br>a, ultricies in, diam. Sed arcu. ???</p>

                    <cite>
                        Charly Smith,
                        <span>Customer</span>
                    </cite>
                </blockquote>

                <blockquote class="testimonial testimonial-icon text-center">
                    <p class="lead">???Friendly Support???</p>
                    <p>??? Impedit, ratione sequi, sunt incidunt magnam et. Delectus obcaecati optio eius error libero perferendis nesciunt atque dolores magni recusandae! Doloremque quidem error eum quis similique doloribus natus qui ut ipsum.???</p>

                    <cite>
                        Damon Stone
                        <span>Customer</span>
                    </cite>
                </blockquote>

                <blockquote class="testimonial testimonial-icon text-center">
                    <p class="lead">???Free Shipping???</p>
                    <p>??? Molestias animi illo natus ut quod neque ad accusamus praesentium fuga! Dolores odio alias sapiente odit delectus quasi, explicabo a, modi voluptatibus. Perferendis perspiciatis, voluptate, distinctio earum veritatis animi tempora eget blandit nunc tortor mollis ???</p>

                    <cite>
                        John Smith
                        <span>Customer</span>
                    </cite>
                </blockquote>
            </div>
        </div>
    </div>
    -->
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
