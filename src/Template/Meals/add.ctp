<!-- File: src/Template/Articles/add.ctp -->

<h1>Add Meals</h1>
<?php
    echo $this->Form->create($meal);
    echo $this->Form->input('breakfast', ['rows' => '3']);
    echo $this->Form->input('lunch', ['rows' => '3']);
	 echo $this->Form->input('dinner', ['rows' => '3']);
    echo $this->Form->button(__('Create Meals'));
    echo $this->Form->end();
?>