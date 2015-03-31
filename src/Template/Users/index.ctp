<!-- File: src/Template/Articles/index.ctp  (edit links added) -->

<h1>Dietitian Dashboard</h1>

<p><?= $this->Html->link("Add Meals", ['action' => 'add' , 'controller' => 'meals']) ?></p>
<p><?= $this->Html->link("View Meals", ['action' => 'index' ,'controller' => 'meals']) ?></p>
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