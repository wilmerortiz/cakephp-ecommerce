<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombres') ?></th>
                    <td><?= h($user->nombres) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellidos') ?></th>
                    <td><?= h($user->apellidos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($user->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $user->status === null ? '' : $this->Number->format($user->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Billing Address') ?></h4>
                <?php if (!empty($user->billing_address)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Country Id') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Address Number') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->billing_address as $billingAddress) : ?>
                        <tr>
                            <td><?= h($billingAddress->id) ?></td>
                            <td><?= h($billingAddress->user_id) ?></td>
                            <td><?= h($billingAddress->address) ?></td>
                            <td><?= h($billingAddress->country_id) ?></td>
                            <td><?= h($billingAddress->state) ?></td>
                            <td><?= h($billingAddress->address_number) ?></td>
                            <td><?= h($billingAddress->reference) ?></td>
                            <td><?= h($billingAddress->status) ?></td>
                            <td><?= h($billingAddress->created) ?></td>
                            <td><?= h($billingAddress->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'BillingAddress', 'action' => 'view', $billingAddress->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'BillingAddress', 'action' => 'edit', $billingAddress->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'BillingAddress', 'action' => 'delete', $billingAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billingAddress->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Shipping Address') ?></h4>
                <?php if (!empty($user->shipping_address)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Country Id') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Address Number') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->shipping_address as $shippingAddress) : ?>
                        <tr>
                            <td><?= h($shippingAddress->id) ?></td>
                            <td><?= h($shippingAddress->user_id) ?></td>
                            <td><?= h($shippingAddress->address) ?></td>
                            <td><?= h($shippingAddress->country_id) ?></td>
                            <td><?= h($shippingAddress->state) ?></td>
                            <td><?= h($shippingAddress->address_number) ?></td>
                            <td><?= h($shippingAddress->reference) ?></td>
                            <td><?= h($shippingAddress->status) ?></td>
                            <td><?= h($shippingAddress->created) ?></td>
                            <td><?= h($shippingAddress->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ShippingAddress', 'action' => 'view', $shippingAddress->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ShippingAddress', 'action' => 'edit', $shippingAddress->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ShippingAddress', 'action' => 'delete', $shippingAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shippingAddress->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related User Roles') ?></h4>
                <?php if (!empty($user->user_roles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Role Id') ?></th>
                            <th><?= __('Grant Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->user_roles as $userRoles) : ?>
                        <tr>
                            <td><?= h($userRoles->user_id) ?></td>
                            <td><?= h($userRoles->role_id) ?></td>
                            <td><?= h($userRoles->grant_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'UserRoles', 'action' => 'view', $userRoles->user_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'UserRoles', 'action' => 'edit', $userRoles->user_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserRoles', 'action' => 'delete', $userRoles->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRoles->user_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
