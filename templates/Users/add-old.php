<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?> <!-- <form method="POST" action="/Users/add"> -->
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                echo $this->Form->control('nombres');// <input type="text" name="nombres" id="nombres"/>
                echo $this->Form->control('apellidos');
                echo $this->Form->control('email'); // <input type="email" name="email" id="email"/>
                echo $this->Form->control('password'); // <input type="password" name="password" id="password"/>
                //echo $this->Form->hidden('status');
                echo $this->Form->control('role_id', ['options' => $roles]);
                echo $this->Form->control('roles._ids', ['options' => $roles]);// <select name="roles[_ids][]" multiple="true"> </select>
                //echo $this->Form->hidden('type');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?> <!-- </form> -->
        </div>
    </div>
</div>
