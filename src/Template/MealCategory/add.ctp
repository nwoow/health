<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Meal Category'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="mealCategory form large-10 medium-9 columns">
    <?= $this->Form->create($mealCategory); ?>
    <fieldset>
        <legend><?= __('Add Meal Category') ?></legend>
		
</select>
        
        <?php
            echo $this->Form->input('item1', ['options' => $foods, 'empty' => true ,'class' => 'js-example-basic-single']);
			 
			  echo $this->Form->input('item2', ['options' => $foods, 'empty' => true ,'class' => 'js-example-basic-single']);
			   echo $this->Form->input('item3', ['options' => $foods, 'empty' => true ,'class' => 'js-example-basic-single']);
			    echo $this->Form->input('item4', ['options' => $foods, 'empty' => true ,'class' => 'js-example-basic-single']);
				 echo $this->Form->input('item5', ['options' => $foods, 'empty' => true ,'class' => 'js-example-basic-single']);
				 echo $this->Form->input('category', ['options' => ['Breakfast' => 'Breakfast', 'Lunch' => 'Lunch', 'Dinner' => 'Dinner'], ['default' => 'Breakfast'],'class' => 'js-example-basic-single']);
			 ?>
			
			
           <?php 
           
            echo $this->Form->input('did');
            echo $this->Form->input('pid');
				
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<script> $(document).ready(function() {
  $(".js-example-basic-single").select2();
});</script>