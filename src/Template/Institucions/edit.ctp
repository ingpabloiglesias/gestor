<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Institucion $institucion
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $institucion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $institucion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Institucions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $institucion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $institucion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Institucions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($institucion); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Institucion']) ?></legend>
    <?php
    echo $this->Form->control('nombre');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
