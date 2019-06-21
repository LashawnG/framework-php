
<div class="container" style="width: 30%">


<form class="text-center border border-light p-5" action="<?=URL?>horse/update" name="register" method="post">
        <input type="hidden" name="id" value="<?=$horse["id"] ?>"/>

    <p class="h4 mb-4">Paard bewerken:</p>


     <label for="naam">Naam:</label>
    <input type="text" id="name" class="form-control mb-4" name="horse_name" placeholder="Naam" value="<?php echo $horse['horse_name'] ?>" required>


     <label for="leeftijd">Leeftijd:</label>
    <input type="text" id="adres" class="form-control mb-4" name="horse_age" placeholder="Leeftijd" value="<?php echo $horse['horse_age'] ?>" required>

    <label for="hoogte">Hoogte:</label>
    <input type="number" id="adres" class="form-control mb-4" name="horse_height" placeholder="Hoogte" step="any" value="<?php echo $horse['horse_height'] ?>" required>
    <div class="d-flex justify-content-around">
        </div>
<br>
    <button class="btn btn-info btn-block my-4" type="submit">Bewerken</button>
    <form action="<?= URL ?>horse/index" method="post">
    <button class="btn btn-danger btn-block my-4" type="submit">Annuleer</button>
</form>