
<div class="container" style="width: 30%">


<form class="text-center border border-light p-5" action="<?=URL?>visitor/store" name="register" method="post">

    <p class="h4 mb-4">Vul je gegevens in:</p>


     <label for="exampleInputPassword1">Naam:</label>
    <input type="text" id="name" class="form-control mb-4" name="name" placeholder="Naam" required>


     <label for="exampleInputPassword1">Adres:</label>
    <input type="text" id="adres" class="form-control mb-4" name="adres" placeholder="Adres" required>

    <label for="exampleInputPassword1">Telefoon:</label>
    <input type="tel" id="phone" class="form-control mb-4" name="phone" pattern="[0-9]{10}" placeholder="0612345678" required>
    <div class="d-flex justify-content-around">
        </div>
<br>
    <button class="btn btn-info btn-block my-4" type="submit">Registreer</button>
