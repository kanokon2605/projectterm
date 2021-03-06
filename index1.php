<?php
       require 'connectdb.php';

        
       if (isset($_POST['reserve'])) {
        $name = $_POST['name'];
        $time_f = $_POST['time_f'];
        $people = $_POST['people'];
        $phone = $_POST['phone'];
        $comments = $_POST['comments'];

        $q = "INSERT INTO food (food_name,food_phone,time_food,number_food,comments) VALUES ('" . $name . "','". $phone ."','" . $time_f . "','" . $people ."','" . $comments . "')";

        $result = mysqli_query($dbcon, $q);  

        if ($result) {
            header('location:food_insert.php');
        } else {
            header('location:index1.php');;
        }

        mysqli_close($dbcon);

    }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
  <title>Healthiness Shop</title>
  <meta name="description" content="Free Bootstrap 4 Pingendo Elegant template for restaurant and food">
  <meta name="keywords" content="Pingendo restaurant food elegant free template bootstrap 4">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="elegant.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="js/animate-in.js"></script>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar-expand-md navbar-dark bg-dark navbar fixed-top">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation" style=""> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item mx-3">
            <a class="nav-link text-light" href="#"><b>HOME</b></a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#menu"><b>MENU</b></a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#venue"><b>ABOUT</b></a>
          </li>
        </ul>
        <a class="btn navbar-btn btn-secondary mx-2" href="#book"><b>BOOK</b></a>
        <a class="nav-link text-light" href="http://localhost/project.ruch/login.php"><b>LOGIN</b></a>
        <a class="nav-link text-light" href="http://localhost/project.ruch/index2.php"><b>LOGOUT</b></a>
      </div>
    </div>
  </nav>
  <!-- Cover -->
  <div class="align-items-center d-flex photo-overlay py-5 cover" style="background-image: url(&quot;assets/restaurant/cover_dark.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 align-self-center text-lg-left text-center">
          <h1 class="mb-0 mt-4 display-3">Healthiness Shop</h1>
          <p class="mb-5 lead">Clean Food</p>
        </div>
        <div class="col-lg-5 p-3" >
           <form class="p-4 bg-dark-opaque" method="post" action="index1.php">
            <h4 class="mb-4 text-center">Make a reservation</h4>
            <p class="my-4 text-center">**ลูกค้าสามารถจองโต๊ะได้วันต่อวัน**<br> หยุดทุกวันจันทร์
            </p>
            <div class="form-group"> <label>Name</label>
              <input type="text" class="form-control" placeholder="Name" name="name"> </div>
              <div class="form-group"> <label>Phone</label>
              <input type="text" class="form-control" placeholder="Phone" name="phone"> </div>
            <div class="form-group"> <label>Time</label>
            <select class="form-control" name="time_f">
                <option value="7 AM.">01 PM.</option>
                <option value="8 AM.">02 PM.</option>
                <option value="9 AM.">03 PM.</option>
                <option value="10 AM.">04 PM.</option>
                <option value="11 AM.">05 PM.</option>
                <option value="12 AM.">06 PM.</option>
            </select> </div>
            <div class="form-group"> <label>People</label>
              <input type="text" class="form-control" placeholder="0" name="people"> </div>
            <div class="form-group"> <label>Comments</label>
              <input type="text" class="form-control" placeholder="comments" name="comments"> </div>
            <button type="submit" class="btn mt-4 btn-block btn-outline-primary p-2" name="reserve"><b>Reserve a table</b></button>
        </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Intro -->
  <!-- Gallery -->
  <div class="">
    <div class="container-fluid">
      <div class="row">
        <div class="p-0 col-md-2 col-4">
          <img src="อาหาร/b.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="อาหาร/3.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="อาหาร/1.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="อาหาร/7.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="อาหาร/6.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="อาหาร/8.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="อาหาร/5.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="อาหาร/9.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="อาหาร/11.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="อาหาร/10.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="อาหาร/a.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img class="img-fluid" src="อาหาร/c.jpg"> </div>
      </div>
    </div>
  </div>
  <!-- Menu -->
  <div class="py-5 text-center" id="menu">
    <div class="container">
      <div class="row p-4 my-5 bg-primary animate-in-down">
        <div class="col-md-12">
          <h2 class="mt-3">Menu</h2>
          <p class="mb-5">Week #26</p>
          <div class="row">
            <div class="col-md-4">
              
              <ul class="list-unstyled">
                <li class="my-4"><img src="อาหาร/3.jpg" class="img-fluid"> สันในไก่, <br>เสิร์ฟพร้อมกับผักโขม <br>[ 159฿ ]</li>
                <li class="my-4"><img src="อาหาร/4.jpg" class="img-fluid"> ข้าวผัดน้ำพริก, <br>เสิร์ฟพร้อมกับแซลมอลย่างและเครื่องเคียง <br>[ 229฿ ]</li>
                <li class="my-4"><img src="อาหาร/5.jpg" class="img-fluid"> เนื้อย่าง, <br>เสิร์ฟพร้อมน้ำสลัดคลีม <br>[ 189฿ ]</li>
                <li class="my-4"><img src="อาหาร/6.jpg" class="img-fluid"> แซลมอลย่าง <br>เสิร์ฟพร้อมกับธัญพืช <br>[ 199฿ ]</li>
              </ul>
            </div>
            <div class="col-md-4">
              
              <ul class="list-unstyled">
                <li class="my-4"><img src="อาหาร/7.jpg" class="img-fluid"> พ็อคช็อปราดซอสแอปเปิ้ล &nbsp; <br> <br>[ 229฿ ]</li>
                <li class="my-4"><img src="อาหาร/8.jpg" class="img-fluid"> โจ๊กไข่ขาว&nbsp; <br>เสิร์ฟพร้อมเบคอนไร้น้ำมัน <br>[ 79฿ ]</li>
                <li class="my-4"><img src="อาหาร/9.jpg" class="img-fluid"> ยำแซลมอลตะไคร้ลุยสวน&nbsp; <br> <br>[ 189฿ ]</li>
                <li class="my-4"><img src="อาหาร/10.jpg" class="img-fluid"> แซลมอลย่างน้ำมันมะกอก <br>&nbsp; <br>[ 189฿ ]</li>
              </ul>
            </div>
            <div class="col-md-4">
              
              <ul class="list-unstyled">
                <li class="my-4"><img src="อาหาร/11.jpg" class="img-fluid">ซาบะย่าง <br>เสิร์ฟพร้อมสลัดควินัว <br>[ 250฿ ]</li>
                <li class="my-4"><img src="อาหาร/12.jpg" class="img-fluid">สตรอว์เบอร์รี่ สมูทตี้ <br> <br>[ 89฿ ]</li>
                <li class="my-4"><img src="อาหาร/13.jpg" class="img-fluid">สเต็กปลากระพงอบซอสมะนาว <br>เสิร์ฟพร้อมเอเชี่ยนสลอว์ <br>[ 269฿ ]</li>
                <li class="my-4"><img src="อาหาร/14.jpg" class="img-fluid">ข้าวผัดกุ้งอบสับปะรด <br> <br>[ 120฿ ]</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel reviews -->
  <div class="p-5 text-center photo-overlay" style="background-image: url(&quot;assets/restaurant/testimonal_background_dark.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="carousel slide" data-ride="carousel" id="carouselArchitecture">
            <div class="carousel-inner" role="listbox">
              <div class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn">Close</a>
    <a href="#" class="btn btn-primary">Save changes</a>
  </div>
</div>
<form action="/html/tags/html_form_tag_action.cfm" method="post"action="index1.php">

</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel venue -->
  <div class="py-3" id="venue">
    <div class="container">
      <div class="row my-5 bg-primary animate-in-down">
        <div class="p-4 col-md-6 align-self-center">
          <p class="mb-1">Good food Good Life</p>
          <h2 class="">Healthiness Shop</h2>
          <p class="my-3">ยินดีตอนรับคนรักสุขภาพ</p>
          
        </div>
        <div class="p-0 col-md-6">
          <div class="carousel slide" data-ride="carousel" id="carousel1">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item carousel-item-next carousel-item-left">
                <img class="d-block img-fluid w-100" src="อาหาร/17.jpg" atl="first slide">
                <div class="carousel-caption">
                  <h3>Dining room</h3>
                  <p>Good architecture, better food</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid w-100" src="อาหาร/18.jpg" data-holder-rendered="true">
                <div class="carousel-caption">
                  <h3>Cooking</h3>
                  <p>Enjoy our long drink selection</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid w-100" src="อาหาร/15.jpg" data-holder-rendered="true">
                <div class="carousel-caption">
                  <h3>Show cooking</h3>
                  <p>Tastes better</p>
                </div>
              </div>
              <div class="carousel-item active carousel-item-left">
                <img class="d-block img-fluid w-100" src="อาหาร/16.jpg" data-holder-rendered="true">
                <div class="carousel-caption">
                  <h3>Area</h3>
                  <p>Take the time to chill</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
            <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Events -->
  <!-- Dark opaque section -->
  <div class="py-5 photo-overlay" id="book" style="background-image: url(&quot;assets/restaurant/makereservation_dark.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-lg-6 p-3 animate-in-down">
          <form class="p-4 bg-dark-opaque" method="post" action="index1.php">
            <h4 class="mb-4 text-center">Make a reservation</h4>
            <p class="my-4 text-center">**ลูกค้าสามารถจองโต๊ะได้วันต่อวัน**<br> หยุดทุกวันจันทร์
            </p>
            <div class="form-group"> <label>Name</label>
              <input type="text" class="form-control" placeholder="Name" name="name"> </div>
            <div class="form-group"> <label>Time</label>
            <select class="form-control" name="time_f">
                <option value="7 AM.">01 PM.</option>
                <option value="8 AM.">02 PM.</option>
                <option value="9 AM.">03 PM.</option>
                <option value="10 AM.">04 PM.</option>
                <option value="11 AM.">05 PM.</option>
                <option value="12 AM.">06 PM.</option>
            </select> </div>
            <div class="form-group"> <label>People</label>
            <input type="text" class="form-control" placeholder="0" name="people"> </div>
            <div class="form-group"> <label>Comments</label>
              <input type="text" class="form-control" placeholder="comments" name="comments"> </div>
            <button type="submit" class="btn mt-4 btn-block btn-outline-primary p-2" name="reserve"><b>Reserve a table</b></button>
        </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <div class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-4 p-4">
          <h2 class="mb-4">Contact</h2>
          <p class="m-0">
            <a href="tel:+246 - 542 550 5462" class="text-white">0622166324</a>
          </p>
          <p>
            <a href="mailto:info@pingendo.com" class="text-white">healthiness_shop@hotmail.com</a>
          </p>
        </div>
        <div class="col-md-4 p-4">
          <h2 class="mb-4">Location</h2>
          <p>
            <a href="https://www.google.it/maps" target="_blank" class="text-white">Hatyai songkla <br>90110</a>
          </p>
        </div>
        <div class="col-md-4 p-4">
          <h2 class="mb-4">Openings</h2>
          <p> 07:00 - 19:00 Tue/Fri <br>07:00 - 19:00 Sat/Sun</p>
        </div>
      </div>
      <div class="col-md-12 mt-3">
        <p class="text-center text-muted"> </p>
      </div>
    </div>
  </div>
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="js/smooth-scroll.js"></script>
  
</body>

</html>