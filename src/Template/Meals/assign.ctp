<h1>Assign</h1>
<?php
    echo $this->Form->create($meal);
    
	echo $this->Form->input('user_id', [
            'options' => [1 => 'Admin', 2 => 'Author']
        ]) ;
 echo $this->Form->button(__('Submit')); 
 
    echo $this->Form->end();
?>


<?php 


 foreach ($data as $value) {
    echo "$value <br>";
}

foreach($data as $role)
{
	 echo $options[strtolower($role)] = $role;
}
?>


