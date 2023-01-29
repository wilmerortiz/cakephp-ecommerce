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

<fieldset>
    <legend><?= __('Add User') ?></legend>
    <?php


    echo $this->Form->control('email'); // <input type="email" name="email" id="email"/>
    echo $this->Form->control('password'); // <input type="password" name="password" id="password"/>
    //echo $this->Form->hidden('status');
    echo $this->Form->control('role_id', ['label' => false ,'options' => $roles]);
    echo $this->Form->control('roles._ids', ['options' => $roles]);// <select name="roles[_ids][]" multiple="true"> </select>
    //echo $this->Form->hidden('type');
    ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?> <!-- </form> -->
