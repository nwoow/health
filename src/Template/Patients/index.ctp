<!-- File: src/Template/Articles/index.ctp  (edit links added) -->

<h1>Patient Dashboard</h1>

<p><?= $this->Html->link("Logout", ['action' => 'logout' ,'controller' => 'users']) ?></p>
<?php  

 foreach ($query as $row) :
  foreach ($query2 as $row1) :
  echo $pid = $row->id;
 echo  $did = $row1->id;
 ?>
  <p><?= $this->Html->link("Ask"." ".$row1->username."", ['action' => 'add' ,'controller' => 'messages' ,$pid ,$did,]) ?></p>
  <p><?= $this->Html->link("View Messages", ['action' => 'view' ,'controller' => 'messages' ,$pid,]) ?></p>
   
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