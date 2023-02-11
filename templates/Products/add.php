<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $product
 * @var \Cake\Collection\CollectionInterface|string[] $types
 * @var \Cake\Collection\CollectionInterface|string[] $categories
 * @var \Cake\Collection\CollectionInterface|string[] $subcategories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products form content">
            <?= $this->Form->create($product) ?>
            <fieldset>
                <legend><?= __('Add Product') ?></legend>
                <?php
                    echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true, 'required']);
                    echo $this->Form->control('subcategory_id', ['options' => $subcategories, 'empty' => true, 'required']);
                    echo $this->Form->control('type_id', ['options' => $types, 'empty' => true, 'required']);
                    echo $this->Form->control('name', ['required']);
                    echo $this->Form->control('details');
                    echo $this->Form->control('stock', ['required', 'type'=>'text']);
                    echo $this->Form->control('price', ['required', 'type'=>'text']);
                    echo $this->Form->control('description');
                    echo $this->Form->control('additional_information');
                    echo $this->Form->control('shipping_returns');
                    echo $this->Form->control('image', ['required']);

                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
