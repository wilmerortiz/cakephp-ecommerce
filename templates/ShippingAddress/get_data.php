<?php if(count($shipping) > 0): ?>
    <?php foreach ($shipping as $k => $sh): ?>
        <div class="custom-control custom-radio my-0">
            <input type="radio" id="shipping_address_id-<?= $sh->id ?>" name="shipping_address_id"
                   class="custom-control-input"
                   required
                   value="<?= $sh->id ?>"
            />
            <label class="custom-control-label" for="shipping_address_id-<?= $sh->id ?>">
                <?= $sh->address . ' ' .$sh->address_number ?>
            </label>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <h4 class="text-warning">No existe direcciones de envío</h4>
<?php endif; ?>
