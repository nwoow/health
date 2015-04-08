
 
 
 <div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Home'), ['action' => 'index']) ?></li>
    </ul>
</div>

<div class="mealCategory index large-10 medium-9 columns">


<table id="example" class="display" cellspacing="0" width="100%">

 <thead>
        <tr>
            <th>Username</th>
			<th>Id</th>
            
        </tr>
    </thead>
 <tbody>
    <?php foreach ($query as $row): ?>
        <tr>
            <td><?= $row->username; ?></td>
			 <td><?= $row->id; ?></td>
            
           
        </tr>

    <?php endforeach; ?>
    </tbody>



</table>

</div>