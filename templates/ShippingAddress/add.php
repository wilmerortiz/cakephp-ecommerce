<?= $this->Form->create($shippingAddres, ['class' => 'Formulario', 'id'=>'formShipping', 'novalidate']) ?>
    <?= $this->Form->hidden('user_id', ['value' => $current_user->id]) ?>
<!-- Modal -->
<div class="modal fade" id="modalForm" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Registrar dirección de envío</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="icon-close"></i>
                    </span>
                </button>
            </div>
            <div class="modal-body p-3">
                <div class="row">
                    <div class="col-sm-12">
                        <label for="" class="mb-0">Dirección *</label>
                        <?= $this->Form->control('address', ['label' => false, 'class' => 'form-control', 'id'=>'address', 'required']) ?>
                        <div class="invalid-feedback">
                            El campo <b>Dirección es requerido</b>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="" class="mb-0">País *</label>
                        <?= $this->Form->control('country_id', [
                            'label' => false,
                            'class' => 'form-control',
                            'id'=>'country_id',
                            'required',
                            'options' => $countries
                        ]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="" class="mb-0">Estado *</label>
                        <?= $this->Form->control('state', [
                            'label' => false,
                            'class' => 'form-control',
                            'id'=>'state',
                            'required'
                        ]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="" class="mb-0">Número de dirección *</label>
                        <?= $this->Form->control('address_number', [
                            'label' => false,
                            'class' => 'form-control',
                            'id'=>'address_number',
                            'required'
                        ]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="" class="mb-0">Referencia *</label>
                        <?= $this->Form->control('reference', [
                            'label' => false,
                            'class' => 'form-control',
                            'id'=>'reference',
                            'required'
                        ]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="" class="mb-0">Código postal *</label>
                        <?= $this->Form->control('postal_code', [
                            'label' => false,
                            'class' => 'form-control',
                            'id'=>'postal_code',
                            'required'
                        ]) ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-outline-primary-2" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<?= $this->Form->end() ?>

<script>
    $('#modalForm').modal('show');

    $('#formShipping').submit(function(evt) {
        const vForm = $(this); // const vForm = $('#formShipping');

        if(vForm[0].checkValidity() === false){
            evt.preventDefault();
            evt.stopPropagation();
        } else {
            evt.preventDefault();
            addAndUpdateData(-1, 'modalForm', 'formShipping', 'ShippingAddress/add')
        }

        vForm.addClass('was-validated')
    })
</script>
