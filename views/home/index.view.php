<?php
    require "database.php";
    $items = $conn->query(" SELECT * FROM list_shows");
?>
<div class="container_card p-5  bg-dark d-flex">
    <?php 
    foreach ($items as $item){ 
    ?>
        <div class="card w-25 m-2 bg-dark text-light">
        <img src="<?php echo $item['image']; ?>" class="card-img-top" style = "width: 100%; height: 270px" alt="Fissure in Sandstone"/>
        <div class="card-body">
            <h5 class="card-title"><?php echo $item['show_name']; ?></h5>
            <p class="card-text"><?php echo $item['description']; ?></p>
            <a href="#!" class="btn btn-outline-warning w-100 rounded-pill">Booking Now</a>
        </div>
        </div>
    <?php
    }
    ?>
</div>

