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
$mikasaBalls = [
  ["img/mikasa1.png", "V200W Size 5 FIVB EXCLUSIVE OFFICIAL GAME BALL FIVB Approved"],
  ["img/mikasa2.png", "V200W-CEV Size 5 EXCLUSIVE OFFICIAL GAME BALL FOR CEV CHAMPIONS LEAGUE"],
  ["img/mikasa3.png", "VQ2000 FIVB INDOOR VOLLEYBALL Size 5"],
  ["img/mikasa4.png", "BV550C-WYBR Official Size and Weight BEACH VOLLEY GAME BALL FIVB Approved"],
  ["img/mikasa5.png", "MVA210 THE LASTING MEMORY 18 PANEL TRI-COLOR MODEL"],
  ["img/mikasa6.png", "W4000 HEAVY WEIGHT WATER POLO BALL "]
];
?>

<div class="row">
  <?php foreach ($mikasaBalls as $Balls) { ?>
    <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex">
      <div class="card equal-card w-100">
        <img src="<?php echo $Balls[0]; ?>" class="card-img-top" alt="Watch image">
        <div class="card-body">
          <p class="h6 card-text"><?php echo $Balls[1]; ?></p>
        </div>
      </div>
    </div>
  <?php } ?>
</div>


<div class="text-center mt-3">
  <a href="#" class="viewAll btn text-white" style="background-color: rgb(58,31,1) ; padding: 10px 30px;">See More</a>
</div>