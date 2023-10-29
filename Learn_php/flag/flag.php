<?php
// json- javascript object notation
$jesonData = file_get_contents("https://restcountries.com/v3.1/all");


$countriesData = json_decode($jesonData , true);
// echo "<pre>";
// var_dump($userdata);
// echo "</pre>";


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Hello, world!</title>
</head>

<style>
  .container{
    margin: 0 auto;
  }
  img.card-img-top {
    height: 8rem;
    width: 100%;
    padding: 8px;
}
p.card-text {
    font-size: 11px;
}
 
</style>

<body>
  <div class="container py-5">
    <div class="row">
      
<?php
      foreach ($countriesData as $key => $country) {
      $name = $country ["name"]["common"];
      $population = $country ["population"];
      $flags = $country ["flags"]["png"];
      $region = $country ["region"];
?>
<div class="col-sm-4 mb-5">
        <div class="card">
          <img src="<?php echo $flags ?>" class="card-img-top" alt="">
          <div class="card-body">
            <p class="card-text"><b>Name : <?php echo $name ?></b></p>
            <p class="card-text">Population : <?php echo $population ?></p>
            <p class="card-text">Region : <?php echo $region ?></p>


            

            
            
          </div>
        </div>
       
      </div>
      <?php } ?>
      
        
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>