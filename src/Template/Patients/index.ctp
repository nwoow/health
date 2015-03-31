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
            <?php  echo $row->password ; ?>
        </td>
        
    </tr>
  
  
 <?php endforeach; ?>
 </table>