<?php date_default_timezone_set('America/Lima'); ?>
<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Checkout<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="checkout">
            <div class="container">
                <div class="checkout-discount">
                    <form action="#">
                        <input type="text" class="form-control" required id="checkout-discount-input">
                        <label for="checkout-discount-input" class="text-truncate">Have a coupon? <span>Click here to enter your code</span></label>
                    </form>
                </div><!-- End .checkout-discount -->
                <?= $this->Form->create($order, ['id'=>'Formulario', 'novalidate']) ?>
                    <?= $this->Form->hidden('user_id', ['id' => 'user_id', 'value' => $current_user->id]) ?>
                    <?= $this->Form->hidden('cliente_id', ['id' => 'cliente_id', 'value' => $current_user->id]) ?>
                    <?= $this->Form->hidden('fecha', ['id'=>'fecha', 'value' => date('Y-m-d H:i')]) ?><!-- 2023-02-25 09:48 -->

                    <?= $this->Form->hidden('total', ['id' => 'total', 'value' => 0]) ?>
                    <?= $this->Form->hidden('impuestos', ['id' => 'impuestos', 'value' => 0]) ?>
                    <?= $this->Form->hidden('sub_total', ['id' => 'sub_total', 'value' => 0]) ?>
                    <?= $this->Form->hidden('shipping_monto', ['id' => 'shipping_monto', 'value' => 0]) ?>
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="checkout-title">Datos Generales</h2><!-- End .checkout-title -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Nombres *</label>
                                    <?= $this->Form->control('nombres', [
                                        'label' => false,
                                        'class'=>'form-control',
                                        'id' => 'nombres',
                                        'required',
                                        'value' => $user->nombres
                                    ]) ?>
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label>Apellidos *</label>
                                    <?= $this->Form->control('apellidos', [
                                        'label' => false,
                                        'class'=>'form-control',
                                        'id' => 'nombres',
                                        'required',
                                        'value' => $user->apellidos
                                    ]) ?>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Teléfono *</label>
                                    <?= $this->Form->control('phone', [
                                        'label' => false,
                                        'class'=>'form-control',
                                        'id' => 'nombres',
                                        'required',
                                        'value' => $user->phone
                                    ]) ?>
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label>País *</label>
                                    <?= $this->Form->control('country_id', [
                                        'empty' => 'Seleccione...',
                                        'label' => false,
                                        'class'=>'form-control',
                                        'id' => 'nombres',
                                        'required',
                                        'default' => $user->country_id,
                                        'options' => $countries
                                    ]) ?>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <h2 class="checkout-title">Dirección de envío</h2><!-- End .checkout-title -->
                            <div class="row">
                                <div class="col-sm-12" id="shipping-address">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-primary" onclick="registerAddress('shipping')">
                                        Registrar dirección de envío
                                    </button>
                                </div>
                            </div>

                            <h2 class="checkout-title">Dirección de facturación</h2><!-- End .checkout-title -->
                            <div class="row">
                                <div class="col-sm-12" id="billing-address">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-primary" onclick="registerAddress('billing')">
                                        Registrar dirección de facturación
                                    </button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 mt-3">
                                    <label for="">Descripción (Opcional)</label>
                                    <?= $this->Form->control('descripcion', [
                                        'label' => false,
                                        'class'=>'form-control',
                                        'id' => 'descripcion'
                                    ]) ?>
                                </div>
                            </div>

                        </div><!-- End .col-lg-9 -->
                        <aside class="col-lg-3">
                            <div class="summary">
                                <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                                <table class="table table-summary" id="tableSummary">
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table><!-- End .table table-summary -->

                                <div class="accordion-summary" id="accordion-payment">
                                    <div class="card">
                                        <div class="card-header" id="heading-1">
                                            <h2 class="card-title">
                                                <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                    Direct bank transfer
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment">
                                            <div class="card-body">
                                                Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                    <div class="card">
                                        <div class="card-header" id="heading-2">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                                    Check payments
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-payment">
                                            <div class="card-body">
                                                Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                    <div class="card">
                                        <div class="card-header" id="heading-3">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                                    Cash on delivery
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
                                            <div class="card-body">Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                    <div class="card">
                                        <div class="card-header" id="heading-4">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                                    PayPal <small class="float-right paypal-link">What is PayPal?</small>
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-payment">
                                            <div class="card-body">
                                                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                    <div class="card">
                                        <div class="card-header" id="heading-5">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                                    Credit Card (Stripe)
                                                    <img src="assets/images/payments-summary.png" alt="payments cards">
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-payment">
                                            <div class="card-body"> Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit ame.
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->
                                </div><!-- End .accordion -->

                                <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block"
                                id="btnSubmit">
                                    <span class="btn-text">Place Order</span>
                                    <span class="btn-hover-text">Proceed to Checkout</span>
                                </button>
                            </div><!-- End .summary -->
                        </aside><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                <?= $this->Form->end(); ?>
            </div><!-- End .container -->
        </div><!-- End .checkout -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

<?= $this->Html->script([
    'app/checkout.js'
]) ?>

<script>
    $('#Formulario').submit(function(evt) {
        const vForm = $(this); // const vForm = $('#Formulario');

        if(vForm[0].checkValidity() === false){
            evt.preventDefault();
            evt.stopPropagation();
        } else {
            evt.preventDefault();
            $('#btnSubmit').html(`
                <span class="spinner-border spinner-border-lg" role="status" aria-hidden="true"></span>
                Procesando pedido...
            `).attr('disabled', 'disabled');

            addAndUpdateData(-1, 'modalFormulario', 'Formulario', 'Checkout/add', true)
        }

        vForm.addClass('was-validated')
    })
    $(document).ready(function(){
        getAddress(<?= $user->id ?>, 'ShippingAddress/getData', 'shipping-address');
        getAddress(<?= $user->id ?>, 'BillingAddress/getData', 'billing-address');
        totalSummary()
    })
</script>
