<?= $this->Form->create() ?>
    <div class="form-group">
        <label for="singin-email-2">Correo *</label>
        <?= $this->Form->control('email', ['label'=>false, 'class' => 'form-control', 'id' => 'singin-email-2', 'required' => true]) ?>
    </div><!-- End .form-group -->

    <div class="form-group">
        <label for="singin-password-2">Contraseña *</label>
        <?= $this->Form->control('password', ['label'=>false, 'class' => 'form-control', 'id' => 'singin-password-2', 'required' => true]) ?>
    </div><!-- End .form-group -->

    <div class="form-footer">
        <button type="submit" class="btn btn-outline-primary-2">
            <span>ENTRAR</span>
            <i class="icon-long-arrow-right"></i>
        </button>

        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="signin-remember-2">
            <label class="custom-control-label" for="signin-remember-2">Remember Me</label>
        </div><!-- End .custom-checkbox -->

        <a href="#" class="forgot-link">Forgot Your Password?</a>
    </div><!-- End .form-footer -->
<?= $this->Form->end() ?>

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
