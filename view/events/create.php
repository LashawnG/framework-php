<div class="container" style="width: 30%">
<form action="<?=URL?>event/store" name="register" method="post">
  <input type="hidden" name="visitor_id" value="<?=$visitor["visitor_id"] ?>"/>

    <p class="h4 mb-4">Reserveren:</p>


     <label for="exampleInputPassword1">Paard:</label>
    <select class="form-control mb-4" id="sel1" name="horse"  required>
      <?php foreach ($horses as $result) {?>

        <option value="<?php echo $result['id'] ?>"><?php echo $result['horse_name'] ?> (<?php echo $result['horse_race'] ?>)</option>
        
      <?php } ?>
    </select>


     <label for="exampleInputPassword1">Tijd: (10:00-18:00)</label>
    <input type="time" class="form-control mb-4" name="time" min="10:00" max="18:00" required>
    
<br>
    <button class="btn btn-info btn-block my-4" type="submit">Reserveer</button>
  </form>
  <form action="<?= URL ?>visitor/index" method="post">
    <button class="btn btn-danger btn-block my-4" type="submit">Annuleer</button>
</form>
    </div>
    <?php 


  

