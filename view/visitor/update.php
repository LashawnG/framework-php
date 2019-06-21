


<div class="container" style="width: 30%">


<form class="text-center border border-light p-5" action="<?=URL?>visitor/update" name="update" method="post">
<input type="hidden" name="id" value="<?=$visitor["visitor_id"] ?>"/>
    <p class="h4 mb-4">Bezoeker bewerken:</p>


     <label for="exampleInputPassword1">Naam:</label>
    <input type="text" id="name" class="form-control mb-4" name="name" placeholder="Naam" value="<?=$visitor["visitor_name"] ?>" required>


     <label for="exampleInputPassword1">Adres:</label>
    <input type="text" id="adres" class="form-control mb-4" name="adres" placeholder="Adres" value="<?=$visitor["visitor_adres"] ?>" required>

    <label for="exampleInputPassword1">Telefoon:</label>
    <input type="tel" id="phone" class="form-control mb-4" name="phone" pattern="[0-9]{10}" placeholder="0612345678" value="<?=$visitor["visitor_phone"] ?>" required>
    <div class="d-flex justify-content-around">
        </div>
<br>
    <button class="btn btn-info btn-block my-4" type="submit">Bewerk</button>
    <form action="<?= URL ?>home/index" method="post">
    <button class="btn btn-danger btn-block my-4" type="submit">Annuleer</button>
</form>
