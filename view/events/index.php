<div class="container">
	<div class="row">
		<table class="table table-hover table-responsive">
		    <thead>
		        <tr>
		            <th>Ruiter</th>
		            <th>Paard</th>
		            <th>Tijd</th>
		            <th>Bewerk</th> 
		            <th>Verwijder</th>

		        </tr>
		    </thead>
		    <tbody>
				<?php
					foreach ($events as $event) {
				?>
		        <tr>
		            <td><a href="<?=URL?>event/detail/<?php echo $event['visitor_id']?>"><?php echo $event['visitor_name']?></a></td>
		            <td><?php echo $event['horse_name']?></td>
		            <td><?php echo $event['event_time']?></td>
		            <td><a href="<?=URL?>event/edit/<?php echo $event['event_id']?>" type="button" data-toggle="modal" data-target="#edit" data-uid="1" class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></a></td>
		            <td><a href="<?=URL?>event/delete/<?php echo $event['event_id']?>" type="button" data-toggle="modal" data-target="#delete" data-uid="1" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a></td>	
		        </tr>
				<?php
					}
				?>
 			</tbody>
		</table>
	</div>	
</div>
