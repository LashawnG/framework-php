<div class="container">
	<div class="row">
		<h1>Reserveringen van <?php echo $visitor['visitor_name']?></h1>
		<table class="table table-hover table-responsive">
		    <thead>
		        <tr>
		            <th>Paard</th>
		            <th>Tijd</th>
		        </tr>
		    </thead>
		    <tbody>
				<?php
					foreach ($detail as $row) {
				?>
		        <tr>
		            <td><?php echo $row['horse_name']?></td>
		            <td><?php echo $row['event_time']?></td>
		        </tr>       
				<?php
					}
				?>
 			</tbody>
		</table>
		<h3>Totaal: €<?php echo $total?>,-</h3>
	</div>	
</div>

