<div class="container">
	<div class="row">
		<table class="table table-hover table-responsive">
		    <thead>
		        <tr>
		            <th>Naam</th>
		            <th>Adres</th>
		            <th>Telefoon</th>
		            <th>Bewerk</th>
		            <th>Verwijder</th> 
		            <th>Reserveren</th>  
		        </tr>
		    </thead>
		    <tbody>
	<?php
		foreach ($visitors as $row) {
	?>
		        <tr>
		            <td><?php echo $row['visitor_name']?></td>
		            <td><?php echo $row['visitor_adres']?></td>
		            <td><?php echo $row['visitor_phone']?></td>
		            <td><a href="<?=URL?>visitor/edit/<?php echo $row['visitor_id']?>" type="button" data-toggle="modal" data-target="#edit" data-uid="1" class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></td>
		            <td><a href="<?=URL?>visitor/delete/<?php echo $row['visitor_id']?>" type="button" data-toggle="modal" data-target="#delete" data-uid="1" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a></td>
		            <td><a href="<?=URL?>event/create/<?php echo $row['visitor_id']?>" type="button" data-toggle="modal" data-target="#edit" data-uid="1" class="update btn btn-primary btn-sm"><span class="glyphicon glyphicon-bookmark"></span></a></td>
		        </tr>
	<?php
		}
	?>
 			</tbody>
		</table>
	</div>	
</div>

