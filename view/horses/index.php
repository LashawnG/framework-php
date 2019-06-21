<div class="container">
	<div class="row">
		<table class="table table-hover table-responsive">
		    <thead>
		    	<td><a href="<?=URL?>horse/create/<?php echo $row['id']?>" type="button" data-toggle="modal" data-target="#delete" data-uid="1" class="delete btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Paard toevoegen</a></td>
		        <tr>
		            <th>Naam</th>
		            <th>Leeftijd</th>
		            <th>Lengte</th>
		            <th>Ras</th>
		            <th>Geschikt voor springsport</th>
		            <th>Bewerk</th> 
		            <th>Verwijder</th>

		        </tr>
		    </thead>
		    <tbody>
	<?php
		foreach ($horses as $row) {
	?>
		        <tr>
		            <td><?php echo $row['horse_name']?></td>
		            <td><?php echo $row['horse_age']?></td>
		            <td><?php echo $row['horse_height']?> cm</td>
		            <td><?php echo $row['horse_race']?></td>
		            <td><?php echo $row['jumpsport']?></td>
		        

		            <td><a href="<?=URL?>horse/edit/<?php echo $row['id']?>" type="button" data-toggle="modal" data-target="#edit" data-uid="1" class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></td>
		            <td><a href="<?=URL?>horse/delete/<?php echo $row['id']?>" type="button" data-toggle="modal" data-target="#delete" data-uid="1" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a></td>
		            
		        </tr>
	<?php
		}
	?>
 			</tbody>
		</table>
	</div>	
</div>

