<style>
  .equal-card {
    height: 100%;
    display: flex;
    flex-direction: column;
  }

  .equal-card img {
  object-fit: contain; /* Show full image without cropping */
  max-height: 300px;   /* Or adjust as needed */
  width: 100%;
  height: auto;        /* Let height adjust based on aspect ratio */
  display: block;
  margin: 0 auto;
  }

  .equal-card .card-body {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .equal-card .card-text {
    flex-grow: 1;
    text-align: center;
  }
</style>

<?php
$equipmentUse = [
  ["img/equipment1.png", "VOLLEYBALL TRAINING MACHINE"],
  ["img/equipment2.png", "VOLLLEYBALL NET ANTENNA"],
  ["img/equipment3.png", "VOLLEYBALL MESH BALL BAG"],
  ["img/equipment4.png", "VOLLEYBALL BALL CAGE"],
  ["img/equipment5.png", "VOLLEYBALL BALL CART"],
  ["img/equipment6.png", "FREESTANDING REFEREE PLATFORM"]
];
?>

<div class="row">
  <?php foreach ($equipmentUse as $equipments) { ?>
    <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex">
      <div class="card equal-card w-100">
        <img src="<?php echo $equipments[0]; ?>" class="card-img-top" alt="image">
        <div class="card-body">
          <p class="h6 card-text"><?php echo $equipments[1]; ?></p>
        </div>
      </div>
    </div>
  <?php } ?>
</div>

<div class="text-center mt-3">
  <a href="#" class="viewAll btn text-white" style="background-color: rgb(58,31,1); padding: 10px 30px;">See More</a>
</div>