<h1>Assign</h1>
<?php

    echo $id;
    echo $this->Form->create($meal);
          echo $this->Form->hidden('d_id', ['value'=>$id]);
		echo $this->Form->input('user_id', [
    'options' => $users
]);
 echo $this->Form->button(__('Submit')); 
 
    echo $this->Form->end();
?>




