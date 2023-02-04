<?= $this->Form->create($user) ?> <!-- <form method="POST" action="/Users/add"> -->
<div class="row">
    <div class="col-md-12">
        <label for="nombres">Nombre</label>
        <?= $this->Form->control('nombres', ['templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'id' => 'nombres', 'class'=> 'form-control']); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <label for="apellidos">Apellidos</label>
        <?= $this->Form->control('apellidos', ['templates' => ['inputContainer' => '{{content}}'], 'label' => false,'id' => 'apellidos', 'class'=> 'form-control']); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <label for="email">Email</label>
        <?= $this->Form->control('email', ['templates' => ['inputContainer' => '{{content}}'], 'label' => false,'id' => 'email', 'class'=> 'form-control']); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <label for="password">Contraseña</label>
        <?= $this->Form->control('password', ['templates' => ['inputContainer' => '{{content}}'], 'label' => false,'id' => 'password', 'class'=> 'form-control']); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <label for="role_id">Rol Principal</label>
        <?= $this->Form->control('role_id', ['templates' => ['inputContainer' => '{{content}}'], 'label' => false,'id' => 'role_id', 'class'=> 'form-control']); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <label for="roles">Roles</label>
        <?= $this->Form->control('roles._ids', ['templates' => ['inputContainer' => '{{content}}'], 'label' => false,'id' => 'roles_id', 'class'=> 'form-control']); ?>
    </div>
</div>

<div class="form-footer">
    <button type="submit" class="btn btn-outline-primary-2">
        <span>REGISTRARME</span>
        <i class="icon-long-arrow-right"></i>
    </button>

    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
        <label class="custom-control-label" for="register-policy-2">I agree to the <a href="#">privacy policy</a> *</label>
    </div><!-- End .custom-checkbox -->
</div><!-- End .form-footer -->

<?= $this->Form->end() ?> <!-- </form> -->

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
