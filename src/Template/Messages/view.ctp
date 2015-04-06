<?php 

//foreach ($data1 as $row){
	  // echo $row->title;
	// }

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

    <?php foreach ($data as $row): ?>
    <tr>
        <td><?= $row->title ?></td>
        
       
    </tr>
    <?php endforeach; ?>
</table>