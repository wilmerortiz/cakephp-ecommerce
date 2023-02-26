<?php //debug($invoice) ?>
<style>
    .table-valores-totales tbody tr.total td.td_total, .table-valores-totales tbody tr.total td.td_invoice {
        background: #1a8cff;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
    }
</style>
<table class="table">
    <tbody>
        <tr class="border_bottom">
            <td><img src="<?= WWW_ROOT ?>assets/images/logo.png" /></td>
            <td></td>
            <td>
                <p>123 Main Street</p>
                <p>Anytown, US 12345</p>
                <p>Phone: (555) 555-5555</p>
                <p>info@company.com</p>
                <p>www.company.com</p>
            </td>
        </tr>
    </tbody>
</table>

<table>
    <tbody>
        <tr class="border_bottom">
            <td>
                <?= $invoice->user->nombres . ' ' .$invoice->user->apellidos ?> <br>
                <?= $invoice->user->email ?> <br>
                <?= $invoice->user->phone ?>
            </td>
            <td>
                Enviar a: <br>
                <?= $invoice->user->nombres . ' ' .$invoice->user->apellidos ?> <br>
                Dirección: <?= $invoice->shipping_addres->address . ' '.$invoice->shipping_addres->address_number ?> <br>

                Estado: <?= $invoice->shipping_addres->state ?> <br>
                Referencia: <?= $invoice->shipping_addres->reference ?> <br>
                País: <?= $invoice->shipping_addres->country->nombre ?>
            </td>
            <td>
                <h3>INVOICE</h3>
                Order Number: <?= $invoice->id ?> <br>
                Order Date: <?= $invoice->fecha ?>
            </td>
        </tr>
    </tbody>
</table>
<br>
<table class="table">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Transporte</th>
            <th>Precio</th>
            <th>Importe</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($details as $detail): ?>
            <tr class="border_top">
                <td>
                    <img src="<?= WWW_ROOT ?>img/<?= $detail['image'] ?>" style="width: 150px" />
                    <?= $detail['name'] ?>
                </td>
                <td class="text-right"><?= $detail['cantidad'] ?></td>
                <td class="text-right"><?= $detail['transporte'] ?></td>
                <td class="text-right"><?= $detail['precio'] ?></td>
                <td class="text-right"><?= number_format($detail['precio'] * $detail['cantidad'], 2, '.', ''); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<table class="table table-valores-totales">
    <tbody>
        <tr>
            <td style="width: 50%"></td>
            <td><b>Subtotal</b></td>
            <td class="td_invoice"><?= $invoice->sub_total ?></td>
        </tr>
        <tr>
            <td></td>
            <td><b>Envío</b></td>
            <td class="td_invoice"><?= $invoice->shipping_monto ?></td>
        </tr>
        <tr>
            <td></td>
            <td><b>Impuestos</b></td>
            <td class="td_invoice"><?= $invoice->impuestos ?></td>
        </tr>
        <tr class="total">
            <td></td>
            <td class="td_total"><b>TOTAL</b></td>
            <td class="td_invoice"><?= $invoice->total ?></td>
        </tr>
    </tbody>
</table>
