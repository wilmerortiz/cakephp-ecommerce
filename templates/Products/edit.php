<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $product
 * @var string[]|\Cake\Collection\CollectionInterface $types
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products form content">
            <?= $this->Form->create($product) ?>
            <fieldset>
                <legend><?= __('Edit Product') ?></legend>
                <?php
                    echo $this->Form->control('category_id');
                    echo $this->Form->control('subcategory_id');
                    echo $this->Form->control('type_id', ['options' => $types, 'empty' => true]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('details');
                    echo $this->Form->control('stock');
                    echo $this->Form->control('price');
                    echo $this->Form->control('description');
                    echo $this->Form->control('additional_information');
                    echo $this->Form->control('shipping_returns');
                    echo $this->Form->control('image');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
