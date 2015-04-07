<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mealCategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mealCategory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Meal Category'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="mealCategory form large-10 medium-9 columns">
    <?= $this->Form->create($mealCategory); ?>
    <fieldset>
        <legend><?= __('Edit Meal Category') ?></legend>
        <?php
            echo $this->Form->input('item1');
            echo $this->Form->input('item2');
            echo $this->Form->input('item3');
            echo $this->Form->input('item4');
            echo $this->Form->input('item5');
            echo $this->Form->input('category');
            echo $this->Form->input('did');
            echo $this->Form->input('pid');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
