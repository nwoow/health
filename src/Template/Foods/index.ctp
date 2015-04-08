<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Food'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="foods index large-10 medium-9 columns">
    <table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name_food') ?></th>
            <th><?= $this->Paginator->sort('calorie') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($foods as $food): ?>
        <tr>
            <td><?= $this->Number->format($food->id) ?></td>
            <td><?= h($food->name_food) ?></td>
            <td><?= $this->Number->format($food->calorie) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $food->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $food->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $food->id], ['confirm' => __('Are you sure you want to delete # {0}?', $food->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
  
</div>
