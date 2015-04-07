<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Food'), ['action' => 'edit', $food->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Food'), ['action' => 'delete', $food->id], ['confirm' => __('Are you sure you want to delete # {0}?', $food->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Foods'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="foods view large-10 medium-9 columns">
    <h2><?= h($food->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name Food') ?></h6>
            <p><?= h($food->name_food) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($food->id) ?></p>
            <h6 class="subheader"><?= __('Calorie') ?></h6>
            <p><?= $this->Number->format($food->calorie) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Link') ?></h6>
            <?= $this->Text->autoParagraph(h($food->link)); ?>

        </div>
    </div>
</div>
