<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Law Offices of R. Richard Stone</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="includes/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slicknav/slicknav.css"/>

    <link href='http://fonts.googleapis.com/css?family=Playfair+Display+SC:400,900,700' rel='stylesheet' type='text/css'>
    <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Droid+Sans|Lato|Roboto|Raleway' rel='stylesheet' type='text/css'> -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
     
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
   
    <script>
        var map;
        function initialize() {
          var myLatlng = new google.maps.LatLng(43.768601, -79.475279);
          var mapOptions = {
            zoom: 13,
            draggable: false,
            scrollwheel: false,
            center: myLatlng
          }
          var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

          var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              title: 'Law Offices of R. Richard Stone'
          });
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  
</head>

<!-- MAIN NAVIGATION -->

  <body>
        <nav class = "mainnav">
          <ul>
            <li><a href="#about">About</li></a>
            <li><a href="#focus">Areas of Focus</li></a>
            <li><a href="#test">Testimonials</li></a>
            <li><a href="#contact">Contact</li></a>
            <li>1120 Finch Avenue West <span class = "vertical"></span> T: 416-667-9393</li>
          </ul>
  </nav>

<!-- MOBILE NAVIGATION -->

  <nav class = "mobilenav"> 
  <p>1120 Finch Avenue West <span class = "vertical"></span>416-667-9393</p>
      <ul id="menu">
        <li><a href = "#about">About</a></li>
        <li><a href = "#focus">Areas of Focus</a></li>
        <li><a href = "#test">Testimonials</a></li>
        <li><a href = "#contact">Contact</a></li>
      </ul>
    </div>
  </nav>

<!-- TITLE BANNER -->

  <section class="mainheader">
    <div class="titlebanner">
        <h1>Law Offices of R. Richard Stone</h1>
        <h2>Barrister and Solicitor</h2>
        <h2>Since 1975</h2>
    </div>
  </section>
  
  </body>
</html>