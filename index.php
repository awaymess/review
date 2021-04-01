<!DOCTYPE html>
<html lang="en">

<?php include "connect.php";
session_start();
?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

  <title>กูดูยังวะ</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
  <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>


  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <?php include "menu.php"; ?>

  <!-- Page Content -->

  <!-- Banner Starts Here -->
  <div class="banner header-text">
    <div class="owl-banner owl-carousel">

      <div class="banner-item-02">
        <div class="text-content">
          <h2 style="font-family: 'Kanit', sans-serif;">วันๆไม่ทำเหี้ยไรดูแต่ซี่รี่ย์</h2>
          <h2></h2>
        </div>
      </div>

      <div class="banner-item-03">
        <div class="text-content">
          <h2 style="font-family: 'Kanit', sans-serif;">กูทำเพื่อเตือนความจำตัวเองครับ</h2>
          <h2></h2>
        </div>
      </div>

    </div>
  </div>
  <!-- Banner Ends Here -->

  <!-- 
    <div class="content">
      <div id="fileContent">
        <?php include('php/custom.php') ?>
      </div>

      <div id="wrapper" style="margin: 20px">

        <div id="posters">

        </div>
      </div>
    </div> -->



  <div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Watching</h2>
            <a href="catalog.php">view all <i class="fa fa-angle-right"></i></a>
          </div>
        </div>



        <?php
        $stmt = $pdo->prepare("SELECT * FROM movie WHERE status='กำลังดู' ORDER BY idm DESC LIMIT 6 OFFSET 0 ");
        $stmt->execute();
        while ($row = $stmt->fetch()) {

          // $name = [$row["name"]];
          // $url = 'https://api.themoviedb.org/3/search/movie?api_key=15d2ea6d0dc1d476efbca3eba2b9bbfb&query=';

          // $curl = curl_init();
          // curl_setopt_array($curl, array(
          //   CURLOPT_URL => 'https://api.themoviedb.org/3/search/movie?api_key=15d2ea6d0dc1d476efbca3eba2b9bbfb&query=' . $name[0],
          //   CURLOPT_RETURNTRANSFER => true,
          //   CURLOPT_ENCODING => "",
          //   CURLOPT_MAXREDIRS => 10,
          //   CURLOPT_TIMEOUT => 0,
          //   CURLOPT_FOLLOWLOCATION => true,
          //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          //   CURLOPT_CUSTOMREQUEST => "GET",
          // ));

          // $respose = curl_exec($curl);
          // curl_close($curl);
          // $data = json_decode($respose, true);

          // foreach ($data as $key => $values) {
          //   if (@$values[0]['original_title'] == 'Kakegurui') {
          //     $posterf = [
          //       'name' => $values[0]['original_title'],
          //       'picture' => $values[0]['poster_path']
          //     ];
          //     print_r($posterf);
          //   } elseif (@$values['results'][0]['original_title'] != 'Your Name') {
          //     print_r('fuck');
          //   }
          // }




        ?>
          <div class="col-md-4">
            <div class="product-item">
              <a href="detail.php?idm=<?= $row["idm"] ?>"><img src="https://image.tmdb.org/t/p/w500/9uICQr5NWmNW8ptTTC3EBacTEGn.jpg" alt=""></a>
              <div class="down-content">
                <a href="detail.php?idm=<?= $row["idm"] ?>">
                  <h4 class="col-10 " style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?= $row["name"] ?></h4>
                </a>
                <h6 style=" font-family: 'Kanit', sans-serif;"><?= $row["status"] ?></h6>
                <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-family: 'Kanit', sans-serif;"><?= $row["comment"] ?></p>
                <ul class="stars">
                  <?php
                  for ($x = 0; $x < $row["score"]; $x++) {
                    echo '<li><i class="fa fa-star"></i></li>';
                  }
                  ?>
                </ul>
                <span><?= $row["recom"] ?></span>

              </div>
            </div>
          </div>

        <?php } ?>
      </div>


      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="inner-content">
                <p>Copyright &copy; 2021 Memory my movie
              </div>
            </div>
          </div>
        </div>
      </footer>


      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


      <!-- Additional Scripts -->
      <script src="assets/js/custom.js"></script>
      <script src="assets/js/owl.js"></script>
      <script src="assets/js/slick.js"></script>
      <script src="assets/js/isotope.js"></script>
      <script src="assets/js/accordions.js"></script>

      <script src="bootstrap/js/jquery-3.4.1.js"></script>
      <script src="js/jquery.cookie.js"></script>
      <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="js/javascript.js"></script>

      <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
          if (!cleared[t.id]) { // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ''; // with more chance of typos
            t.style.color = '#fff';
          }
        }
      </script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="script.js"></script>



</body>


</html>