<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">Let op!</h5>
    <p class="card-text">Weet je zeker dat je "<?php echo $horse['horse_name'] ?>" wilt verwijderen?</p>
    <form  action="<?= URL ?>horse/destroy/<?php echo $horse['id'] ?>"  method="post" >
		<input class="btn btn-danger" type="submit" name="submit" value="Verwijder"></input>
	</form>
	<br>
	<form action="<?= URL ?>horse/index" method="post">
		<input class="btn btn-primary" type="submit" name="cancel" value="Annuleer"></input>
	</form>
  </div>

</div>