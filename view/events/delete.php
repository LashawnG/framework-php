<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">Let op!</h5>
    <p class="card-text">Weet je zeker dat je dit event wilt verwijderen?</p>
    <form  action="<?= URL ?>event/destroy/<?php echo $event['event_id'] ?>"  method="post" >
		<input class="btn btn-danger" type="submit" name="submit" value="Verwijder"></input>
	</form>
	<br>
	<form action="<?= URL ?>event/index" method="post">
		<input class="btn btn-primary" type="submit" name="cancel" value="Annuleer"></input>
	</form>
  </div>

</div>