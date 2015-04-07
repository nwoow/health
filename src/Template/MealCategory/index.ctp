<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Meal Category'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="mealCategory index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('item1') ?></th>
            <th><?= $this->Paginator->sort('item2') ?></th>
            <th><?= $this->Paginator->sort('item3') ?></th>
            <th><?= $this->Paginator->sort('item4') ?></th>
            <th><?= $this->Paginator->sort('item5') ?></th>
            <th><?= $this->Paginator->sort('category') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($mealCategory as $mealCategory): ?>
        <tr>
            <td><?= $this->Number->format($mealCategory->id) ?></td>
            <td><?= h($mealCategory->item1) ?></td>
            <td><?= h($mealCategory->item2) ?></td>
            <td><?= h($mealCategory->item3) ?></td>
            <td><?= h($mealCategory->item4) ?></td>
            <td><?= h($mealCategory->item5) ?></td>
            <td><?= h($mealCategory->category) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $mealCategory->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mealCategory->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mealCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mealCategory->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
