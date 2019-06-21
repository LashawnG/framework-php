<div class="container" style="width: 30%">
<form action="<?=URL?>event/update" name="update" method="post">
  <input type="hidden" name="id" value="<?= $event['event_id'] ?>"/>

    <p class="h4 mb-4">Bewerken:</p>

    <label for="naam">Ruiter:</label>
    <select class="form-control mb-4" id="sel1" name="event_rider" required>
      <?php foreach ($visitor as $row) {
        if ($event['event_rider'] == $row['visitor_id']) {
               
                 $text = "selected";
       
               } else {
       
                 $text = "";
       
               }
               ?>

        <option <?php echo $text ?> value="<?php echo $row['visitor_id'] ?>"><?php echo $row['visitor_name'] ?></option>
        
      <?php } ?>
    </select>

     <label for="exampleInputPassword1">Paard:</label>
    <select class="form-control mb-4" id="sel1" name="horse" required>
      <?php 

          foreach ($horse as $result) {
          if ($event['event_horse'] == $result['id']) {
               
                 $text = "selected";
       
               } else {
       
                 $text = "";
       
               }
        
        ?>

        <option <?php echo $text ?> value="<?php echo $result['id'] ?>" ><?php echo $result['horse_name'] ?> (<?php echo $result['horse_race'] ?>)</option>
        
      <?php } ?>
    </select>


     <label for="exampleInputPassword1">Tijd: (10:00-18:00)</label>
    <input type="time" class="form-control mb-4" name="time" min="10:00" max="18:00" value="<?php echo $event['event_time'] ?>" required>
    
<br>
    <input class="btn btn-info btn-block my-4" type="submit" name="Bewerk"></input>
  </form>
  <form action="<?= URL ?>event/index" method="post">
    <button class="btn btn-danger btn-block my-4" type="submit">Annuleer</button>
</form>
    </div>
    <?php

      /*
      $paarden = getAllHorses(); 
      $event = getEvent($id); 



      for (1 <= count($paarden))
       { 
          if ($event['event_horse'] == $paarden['horse_id']) {
               
                 $text = "selected";
       
               } else {
       
                 $text = "";
       
               }
        }

      <option <?php echo $text>>

    */
   
    ?>
  





















