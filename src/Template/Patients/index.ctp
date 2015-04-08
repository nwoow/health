<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
	
<?php  

 foreach ($query as $row) :
  foreach ($query2 as $row1) :
  echo $pid = $row->id;
 echo  $did = $row1->id;
 ?>
 <ul class="side-nav">
	
	<li><p><?= $this->Html->link("Logout", ['action' => 'logout' ,'controller' => 'users']) ?></p></li>
	<li><p><?= $this->Html->link("View Messages", ['action' => 'view' ,'controller' => 'messages' ,$pid,]) ?></p></li>
	<li><p><?= $this->Html->link("Ask"." ".$row1->username."", ['action' => 'add' ,'controller' => 'messages' ,$pid ,$did,]) ?></p></li>
	
	</div>
	</ul>
<div class="mealCategory index large-10 medium-9 columns">
<h1>Patient Dashboard</h1>


  
  
   
   <h3> Welcome <?php  echo $row->username ; ?> </h3>

  <table>
    <tr>
        <th>Username</th>
        <th>User Role</th>
       
    </tr>
	
	 <tr>
        <td> <?php  echo $row->username ; ?></td>
        <td>
            <?php  echo $row->role ; ?>
        </td>
        
    </tr>
  
  
 
 </table>
 
 
 <?php  

 foreach ($query1 as $row) :

 ?>
  
   
  <h3> Patient This is your meal plan assign by dietitian </h3>
 
  <table>
    <tr>
        <th>Breakfast</th>
        <th>Lunch</th>
		 <th>Dinner</th>
		 <th>Assigned By</th>
       
    </tr>
	
	 <tr>
        <td> <?php  echo $row->breakfast ; ?></td>
        <td>
            <?php  echo $row->lunch ; ?>
        </td>
         <td>
            <?php  echo $row->dinner ; ?>
        </td>
		<td>
            <?php  echo $row1->username ; ?>
        </td>
    </tr>
  
  <?php endforeach; ?>
 <?php endforeach; ?>
 <?php endforeach; ?>
 </table>
 </div>