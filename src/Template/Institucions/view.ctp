<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Institucion'), ['action' => 'edit', $institucion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Institucion'), ['action' => 'delete', $institucion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $institucion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Institucions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Institucion'), ['action' => 'edit', $institucion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Institucion'), ['action' => 'delete', $institucion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $institucion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Institucions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($institucion->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= h($institucion->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Nombre') ?></td>
            <td><?= h($institucion->nombre) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($institucion->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($institucion->modified) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related Equipos') ?></h3>
    </div>
    <?php if (!empty($institucion->equipos)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nombre Fantasia') ?></th>
                <th><?= __('Institucion Id') ?></th>
                <th><?= __('Deporte Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($institucion->equipos as $equipos): ?>
                <tr>
                    <td><?= h($equipos->id) ?></td>
                    <td><?= h($equipos->nombre_fantasia) ?></td>
                    <td><?= h($equipos->institucion_id) ?></td>
                    <td><?= h($equipos->deporte_id) ?></td>
                    <td><?= h($equipos->created) ?></td>
                    <td><?= h($equipos->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Equipos', 'action' => 'view', $equipos->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'Equipos', 'action' => 'edit', $equipos->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'Equipos', 'action' => 'delete', $equipos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipos->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related Equipos</p>
    <?php endif; ?>
</div>
