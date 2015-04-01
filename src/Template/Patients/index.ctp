<!-- File: src/Template/Articles/index.ctp  (edit links added) -->

<h1>Patient Dashboard</h1>


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
            <?php  echo $row->role ; ?>
        </td>
        
    </tr>
  
  
 <?php endforeach; ?>
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
       
    </tr>
	
	 <tr>
        <td> <?php  echo $row->breakfast ; ?></td>
        <td>
            <?php  echo $row->lunch ; ?>
        </td>
         <td>
            <?php  echo $row->dinner ; ?>
        </td>
    </tr>
  
  
 <?php endforeach; ?>
 </table>