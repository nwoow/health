<?php 

echo $user;


?>

</br>

<?php 

//foreach ($data as $row){
	 //  echo $row->message;
	// }

?>


<h1>Messages</h1>
<table>
    <tr>
       
        <th>Title</th>
        
    </tr>
	
	 <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php 
	   if ($user === 'patient') { foreach ($data1 as $row):
	   ?>
	  
	
	
    <tr>
        <td><?= $row->title ?></td>
        
       
    </tr>
    <?php endforeach;
	   } elseif ($user === 'dietitian') { 
	   foreach ($data as $row):
	    ?>
	  


    <tr>
        <td><?= $row->title ?></td>
        
       
    </tr>
	  
	  

   <?php 
	   
	   endforeach;
	   
	   }
	   ?>
	   
	   
	   
	  
</table>