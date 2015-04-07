<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Foods'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="foods form large-10 medium-9 columns">
    <?= $this->Form->create($food); ?>
    <fieldset>
        <legend><?= __('Add Food') ?></legend>
        <?php
            echo $this->Form->input('name_food');
            echo $this->Form->input('calorie');
            echo $this->Form->input('link');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
