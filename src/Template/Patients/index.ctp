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
<iframe src="http://www.healthyworld.in/wild-cape-manuka-honey-250g" name="iframename" scrolling="yes" align="center" height = "70%" width = "90%"> 
</iframe> 
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
        <th>Item1</th>
        <th>Item2</th>
		 <th>Item3</th>
		 <th>Item4</th>
		 <th>Category</th>
		 <th>Assigned By</th>
       
    </tr>
	
	 <tr>
        <td> <?php  echo $row->item1 ; ?></td>
        <td>
            <?php  echo $row->item2 ; ?>
        </td>
         <td>
            <?php  echo $row->item3 ; ?>
        </td>
		<td>
            <?php  echo $row->item4 ; ?>
        </td>
		<td>
            <?php  echo $row->category ; ?>
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