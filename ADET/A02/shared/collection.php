<div class="my-3 mb-5">
  <img src="img/poster2.png" class="d-block w-100" alt="Poster">
</div>

<div class="h3 mb-4">Featured Collection</div>
<?php
$collections = [
  ["img/mikasa7.png", "mikasa7Chemin Des Tourelles Powermatic 80 34MM T139.207.22.038.00"],
  ["img/mikasa8.png", "mikasa7Chrono XL Classic T116.617.11.047.01"],
  ["img/molten7.png", "Alpina Alpiner Comtesse Quartz Blooming Purple AL-240LP2C6B"],
  ["img/molten8.png", "Alpina Alpiner 4 Automatic AL-525N4AQ6"]
];
?>

<div class="row">
  <?php foreach ($collections as $balls) { ?>
    <div class="col-12 col-md-6 col-lg-3 mb-4">
      <div class="card h-100">
        <img src="<?php echo $balls[0]; ?>" class="card-img-top" alt="image">
        <div class="card-body d-flex flex-column">
          <p class="h6 card-text flex-grow-1"><?php echo $balls[1]; ?></p>
        </div>
      </div>
    </div>
  <?php } ?>
</div>

<div class="text-center mt-3 mb-5">
  <a href="#" class="viewAll btn text-white" style="background-color: rgb(58,31,1); padding: 10px 30px;">See More</a>
</div>

<?php
$evolution = [
  ["img/evo1.png", "evo 1"],
  ["img/evo2.png", "evo 2"],
  ["img/evo3.png", "evo 3"],
  ["img/molten1.png", "evo 4"],
  ["img/evo5.png", "evo 5"],
  ["img/evo6.png", "evo 6"],
  ["img/mikasa2.png", "evo 7"],
  ["img/evo8.png", "evo 8"]
];
?>

<div class="container my-5">
  <div class="row">
    <div class="col-12 mb-4">
      <h2>EVOLUTION OF OFFICIAL BALL</h2>
    </div>

    <?php foreach ($evolution as $evolve) { ?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="box1 card" style="width: 100%;">
          <img src="<?php echo $evolve[0]; ?>" class="card-img-top" alt="<?php echo $evolve[1]; ?>">
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-12 p-3" style="background-color: rgb(58,31,1); height: 200px;">
      <div class="text-center text-white p-3">
        <p class="historyHeading h4 mb-4"><strong>FEDERATION</strong></p>
        <p class="historyText mb-0">
          The FIVB (Fédération Internationale de Volleyball) is the global governing body, organizing major
          international events, icluding AVC (Asia), CEV (Europe), NORCECA (North/Central America &
          Caribbean), and CSV (South America).
        </p>
      </div>
    </div>
  </div>
</div>