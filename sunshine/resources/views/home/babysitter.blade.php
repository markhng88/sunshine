<!DOCTYPE html>
<style>
  #doctorSlideshow {
    display: grid;
    grid-template-columns: repeat(3, 1fr); 
    gap: 16px; 
}

.item {
    width: 100%; 
}
</style>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Baby Sitters</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>
  
  <!-- Back to top button -->
  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Babysitter</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

        @foreach($babysitter as $babysitters)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="290px" src="babysitterimage/{{$babysitters->image}}" alt="">
              
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$babysitters->name}}</p>
              <span class="text-sm text-grey">{{$babysitters->age}}</span><br>
              <span class="text-sm text-grey">{{$babysitters->description}}</span>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
    </div>
  </div>

 

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>