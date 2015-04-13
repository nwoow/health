<h1>Assign</h1>
<?php

    echo $id;
    echo $this->Form->create($meal);
          echo $this->Form->hidden('did', ['value'=>$id]);
		  echo $this->Form->input('pid', ['options' => $users, 'empty' => true ,'class' => 'js-example-basic-single']);
		
 ?>
 </br>
 <?php
 echo $this->Form->button(__('Submit')); 
 
    echo $this->Form->end();
?>
<script> $(document).ready(function() {
  $(".js-example-basic-single").select2();
});</script>