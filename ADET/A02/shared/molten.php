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
$moltenBalls = [
  ["img/molten1.png", "MOLTEN V5M1500 VOLLEYBALL SIZE 5"],
  ["img/molten2.png", "MOLTEN V5M2500 VOLLEYBALL SIZE 5"],
  ["img/molten3.png", "MOLTEN V5M2700 VOLLEYBALL SIZE 5"],
  ["img/molten4.png", "MOLTEN V5M3500 VOLLEYBALL SIZE 5"],
  ["img/molten5.png", "MOLTEN L2 VOLLEYBALL OFFICIAL SIZE, SOFT MICROFIBER COVER, UNI-BLADDER COTTON CONSTRUCTION."],
  ["img/molten6.png", "MOLTEN NCAA® SUPER TOUCH OFFICIAL NCAA WOMEN'S CHAMPIONSHIP BALL, PREMIUM JAPANESE LEATHER."]
];
?>

<div class="row">
  <?php foreach ($moltenBalls as $moltens) { ?>
    <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex">
      <div class="card equal-card w-100">
        <img src="<?php echo $moltens[0]; ?>" class="card-img-top" alt="image">
        <div class="card-body">
          <p class="h6 card-text"><?php echo $moltens[1]; ?></p>
        </div>
      </div>
    </div>
  <?php } ?>
</div>


<div class="text-center mt-3">
  <a href="#" class="viewAll btn text-white" style="background-color: rgb(58,31,1); padding: 10px 30px;">See More</a>
</div>