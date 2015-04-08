<?php foreach ($query as $row) {

echo $pid = $row->id;

}?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        
		<li><p><?= $this->Html->link("Add Meals", ['action' => 'add' , 'controller' => 'meals']) ?></p></li>
		<li><p><?= $this->Html->link("View Meals", ['action' => 'index' ,'controller' => 'meals']) ?></p></li>
		<li><p><?= $this->Html->link("Foods", ['action' => 'index' ,'controller' => 'foods']) ?></p></li>
		<li><p><?= $this->Html->link("MealCategory", ['action' => 'index' ,'controller' => 'MealCategory']) ?></p></li>
		<li><p><?= $this->Html->link("Add Patient", ['action' => 'addp' ,'controller' => 'users']) ?></p></li>
		<li><p><?= $this->Html->link("View Patients", ['action' => 'patients' ,'controller' => 'users']) ?></p></li>
		<li><p><?= $this->Html->link("View Messages", ['action' => 'view' ,'controller' => 'messages' ,$pid,]) ?></p></li>
		<li><p><?= $this->Html->link("Logout", ['action' => 'logout' ,'controller' => 'users']) ?></p></li>
		
    </ul>
</div>

<div class="mealCategory index large-10 medium-9 columns">

<h1>Dietitian Dashboard</h1>





<?php  

 foreach ($query as $row) :
 
 ?>
  
   
   <h3> Welcome <?php  echo $row->username ; ?> </h3>

  <table>
    <tr>
        <th>Username</th>
        <th>Password</th>
       
    </tr>
	
	 <tr>
        <td> <?php  echo $row->username ; ?></td>
        <td>
            <?php  echo $row->password ; ?>
        </td>
        
    </tr>
  
  
 <?php endforeach; ?>
 </table>
 </div>