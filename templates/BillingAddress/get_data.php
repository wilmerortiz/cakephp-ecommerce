<?php if(count($billing) > 0): ?>
    <?php foreach ($billing as $k => $sh): ?>
        <div class="custom-control custom-radio my-0">
            <input type="radio" id="billing_address_id-<?= $sh->id ?>" name="billing_address_id"
                   class="custom-control-input"
                   required
                   value="<?= $sh->id ?>"
            />
            <label class="custom-control-label" for="billing_address_id-<?= $sh->id ?>">
                <?= $sh->address . ' ' .$sh->address_number ?>
            </label>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <h4 class="text-warning">No existe direcciones de facturación</h4>
<?php endif; ?>
