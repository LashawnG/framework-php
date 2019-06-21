
<div class="container" style="width: 30%">


<form class="text-center border border-light p-5" action="<?=URL?>horse/store" name="register" method="post">

    <p class="h4 mb-4">Paard aanmaken:</p>


     <label for="naam">Naam:</label>
    <input type="text" id="name" class="form-control mb-4" name="horse_name" placeholder="Naam" required>


     <label for="leeftijd">Leeftijd:</label>
    <input type="text" id="adres" class="form-control mb-4" name="horse_age" placeholder="Leeftijd"  required>

    <label for="hoogte">Hoogte (in CM!):</label>
    <input type="number" id="adres" class="form-control mb-4" name="horse_height" placeholder="Hoogte" step="any" required>
    <div class="d-flex justify-content-around">
        </div>
<br>
    <button class="btn btn-info btn-block my-4" type="submit">Maak aan</button>