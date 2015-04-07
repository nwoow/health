<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Meal Category'), ['action' => 'edit', $mealCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Meal Category'), ['action' => 'delete', $mealCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mealCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Meal Category'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Meal Category'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="mealCategory view large-10 medium-9 columns">
    <h2><?= h($mealCategory->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Item1') ?></h6>
            <p><?= h($mealCategory->item1) ?></p>
            <h6 class="subheader"><?= __('Item2') ?></h6>
            <p><?= h($mealCategory->item2) ?></p>
            <h6 class="subheader"><?= __('Item3') ?></h6>
            <p><?= h($mealCategory->item3) ?></p>
            <h6 class="subheader"><?= __('Item4') ?></h6>
            <p><?= h($mealCategory->item4) ?></p>
            <h6 class="subheader"><?= __('Item5') ?></h6>
            <p><?= h($mealCategory->item5) ?></p>
            <h6 class="subheader"><?= __('Category') ?></h6>
            <p><?= h($mealCategory->category) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($mealCategory->id) ?></p>
            <h6 class="subheader"><?= __('Did') ?></h6>
            <p><?= $this->Number->format($mealCategory->did) ?></p>
            <h6 class="subheader"><?= __('Pid') ?></h6>
            <p><?= $this->Number->format($mealCategory->pid) ?></p>
        </div>
    </div>
</div>
