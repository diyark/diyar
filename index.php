<!DOCTYPE html>
<html lang="en"  dir="rtl">
<head>
  <title>Registration For AVA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="my_style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body class="bg-black text-color">

<div class="container my-container">
  <img src="ava_logo.png" class="my-img rounded mx-auto d-block" alt="Responsive image">
  <hr class="my-hr" />
  <h2 class="font-rudaw my-header">فۆڕمی بەشداریکردن لە سەنتەری ئاڤا .</h2>
    <?php
      if(isset($_GET['error'])) {
        echo '<div class="alert alert-danger alert-dismissible font-rudaw" id="myAlert">';
        echo '<button type="button" class="close">&times;</button>';
        echo 'هەڵەیە! <br>'.$_GET['error'].'.';
        echo '</div>';
      }elseif(isset($_GET['success'])) {
        echo '<div class="alert alert-success alert-dismissible font-rudaw" id="myAlert">';
        echo '<button type="button" class="close">&times;</button>';
        echo 'پیرۆزە ! <br>'.$_GET['success'].'.';
        echo '</div>';
      }
    ?>
  <form action="action_page.php" class="needs-validation my-form" method="post" novalidate>
    <div class="form-group  font-rudaw">
      <label for="uname" >ناوی تەواو : </label>
      <input type="text" class="form-control font-calibri" id="uname" placeholder="Enter full name" name="fname" required>
      <div class="valid-feedback">ئامادەیە .</div>
      <div class="invalid-feedback">خانەکان پڕ بکەرەوە.</div>
    </div>
     <div class="form-group font-rudaw">
      <label for="email">ئیمێڵ یان ژمارەی مۆبایل :</label>
      <input type="text" class="form-control font-calibri" id="email" placeholder="Email or Phone" name="email" required>
      <div class="valid-feedback">ئامادەیە .</div>
      <div class="invalid-feedback">خانەکان پڕ بکەرەوە.</div>
    </div>
     <div class="form-group font-rudaw">
      <label for="adrress">ناونیشان :</label>
      <input type="text" class="form-control font-calibri" id="address" placeholder="Address" name="address" required>
      <div class="valid-feedback">ئامادەیە .</div>
      <div class="invalid-feedback">خانەکان پڕ بکەرەوە.</div>
    </div>
    <div class="form-group font-rudaw">
      <label for="adrress">ڕەگەز : </label>
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="gender" id="gender" value="male">
      <label class="form-check-label" for="inlineRadio1">&nbspنێر</label>
      </div>
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
      <label class="form-check-label" for="inlineRadio2">&nbspمێ</label>
    </div>
    </div>

    <div class="form-group">
      <label for="birth" class="col-form-label font-rudaw">بەرواری لەدایکبوون :</label>
      <div class="col-10">
        <input class="form-control" type="date" value="1998-01-01" id="birth" name="birthday">
      </div>
    </div>
    <div class="form-group font-rudaw">
      <label class="mr-sm-2" for="academy">ئاستی خوێندن :</label>
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="academy" name="academy">
        <option value="student">قوتابی زانکۆ</option>
        <option value="diblom">دیبلۆم</option>
        <option value="bakaloryos">بەکالۆریۆس</option>
        <option value="master">ماستەر</option>
      </select>
    </div>
    <div class="form-group font-rudaw">
      <label class="mr-sm-2" for="member">ئەندام لە بەشی :</label>
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="member" onchange="myFunction();" name="andamla">
        <option value="language">زمان</option>
        <option value="health">پزیشکی</option>
        <option value="engineering">ئەندازیاری</option>
        <option value="hdevelopment">گەشەپێدانی مرۆیی</option>
        <option value="computer">کۆمپیتەر</option>
      </select>
      <select class="col-5 custom-select mb-2 mr-sm-2 mb-sm-0" id="language" style="display: block;" name="bashandam">
        <option value="english">زمانی ئینگلیزی</option>
        <option value="arabic">زمانی عەرەبی</option>
        <option value="turkish">زمانی تورکی</option>
        <option value="persian">زمانی فارسی</option>
        <option value="german">زمانی ئەڵمانی</option>
      </select>
      <select class="col-5 custom-select mb-2 mr-sm-2 mb-sm-0" id="health" style="display: none;" name="bashandam1">
        <option value="pharmacy">دەرمانسازی</option>
        <option value="body_organs">کۆئەندامەکانی لەش</option>
        <option value="dyarykrdni_naxoshyakan">نەخۆشیەکانو دەستنیشان کردنی نەخۆشی</option>
        <option value="naxoshya_gwastrawakan">نەخۆشیە گواستراوەکان</option>
        <option value="naxoshya_darwnyakan">نەخۆشیە دەرونیەکان</option>
        <option value="darzy_w_kanola">دەرزی لێدانو دانانی کانوولا</option>
        <option value="first_aid">فریاگوزاری سەرەتایی</option>
        <option value="medical_lab">شیکاری نەخۆشیەکان</option>
      </select>
      <select class="col-5 custom-select mb-2 mr-sm-2 mb-sm-0 font-calibri" id="engineering" style="display: none;" name="bashandam2">
        <option value="electronics">Arduino and Electronics</option>
        <option value="autocad">AutoCad</option>
        <option value="sketchup">SketchUp</option>
        <option value="3dmax">3D Max</option>
        <option value="revit">AutoDesk Revit</option>
      </select>
      <select class="col-5 custom-select mb-2 mr-sm-2 mb-sm-0 font-calibri" id="computer" style="display: none;" name="bashandam3">
        <option value="programming">Programming</option>
        <option value="office">Microsoft office</option>
        <option value="web">Web Design</option>
        <option value="graphic_design">Graphic design</option>
      </select>
    </div>
    <div class="form-group font-rudaw">
      <label class="mr-sm-2" for="rol">ڕۆڵ :</label>
      <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="rol" name="rol">
        <option value="sarparshtyar">سەرپەرشتیاری کۆرس</option>
        <option value="mamosta">مامۆستا</option>
      </select>
    </div>

   
    <button type="submit" class="btn btn-primary font-rudaw" name="submit">ناردن</button>
  </form>

</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
function myFunction() {
  var x = document.getElementById("member").value;
  if (x == "language") {
    document.getElementById("language").style.display = "block";
    document.getElementById("health").style.display = "none";
    document.getElementById("engineering").style.display = "none";
    document.getElementById("computer").style.display = "none";
  }else if (x == "health") {
    document.getElementById("language").style.display = "none";
    document.getElementById("health").style.display = "block";
    document.getElementById("engineering").style.display = "none";
    document.getElementById("computer").style.display = "none";
    
  }else if (x == "engineering") {
    document.getElementById("language").style.display = "none";
    document.getElementById("health").style.display = "none";
    document.getElementById("engineering").style.display = "block";
    document.getElementById("computer").style.display = "none";
    
  }else if (x == "hdevelopment") {
    document.getElementById("language").style.display = "none";
    document.getElementById("health").style.display = "none";
    document.getElementById("engineering").style.display = "none";
    document.getElementById("computer").style.display = "none";
    
  }else if (x == "computer") {
    document.getElementById("language").style.display = "none";
    document.getElementById("health").style.display = "none";
    document.getElementById("engineering").style.display = "none";
    document.getElementById("computer").style.display = "block";
    
  }
}
$(document).ready(function(){
  $(".close").click(function(){
    $("#myAlert").alert("close");
  });
});
</script>

</body>
</html>
