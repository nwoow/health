<!-- File: src/Template/Articles/index.ctp  (edit links added) -->

<h1>Meals</h1>
<p><?= $this->Html->link("Add Meals", ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>BreakFast</th>
        <th>Lunch</th>
        <th>Dinner</th>
		<th>Assign</th>
    </tr>

<!-- Here's where we iterate through our $articles query object, printing out article info -->

<?php foreach ($meals as $meal): ?>
    <tr>
        <td><?= $meal->id ?></td>
        <td>
            <?= $meal->breakfast ?>
        </td>
		
        <td>
            <?= $meal->lunch ?>
        </td>
		<td>
            <?= $meal->dinner ?>
        </td>
		<td>
       <?= $this->Html->link('Assign', ['action' => 'assign', $meal->id]) ?>
	   </td>
    </tr>
<?php endforeach; ?>

</table>