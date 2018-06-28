<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Autoridad'), ['action' => 'edit', $autoridad->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Autoridad'), ['action' => 'delete', $autoridad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $autoridad->id)]) ?> </li>
<li><?= $this->Html->link(__('List Autoridads'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Autoridad'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Autoridad'), ['action' => 'edit', $autoridad->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Autoridad'), ['action' => 'delete', $autoridad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $autoridad->id)]) ?> </li>
<li><?= $this->Html->link(__('List Autoridads'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Autoridad'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($autoridad->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= h($autoridad->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Nombre') ?></td>
            <td><?= h($autoridad->nombre) ?></td>
        </tr>
        <tr>
            <td><?= __('Sigla') ?></td>
            <td><?= h($autoridad->sigla) ?></td>
        </tr>
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $autoridad->has('user') ? $this->Html->link($autoridad->user->id, ['controller' => 'Users', 'action' => 'view', $autoridad->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($autoridad->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($autoridad->modified) ?></td>
        </tr>
    </table>
</div>

