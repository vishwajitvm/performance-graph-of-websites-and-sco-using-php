<?php 
    if(isset($_POST)) {
      error_reporting (E_ALL ^ E_NOTICE);
      $first = strtoupper($_POST['plot1']) ;
      $two = strtoupper($_POST['plot2']) ;
      $three = strtoupper($_POST['plot3']) ;
      $four = strtoupper($_POST['plot4']) ;
      $five = strtoupper($_POST['plot5']) ;


      if($first == "A" ) {
        $first = 100 ;
        $firstData = "A" ;
        $firstcolor = "blue" ;
      }
      else if($first == "B") {
        $first = 100-16.66 ;
        $firstData = "B" ;
        $firstcolor = "green" ;
      }
      elseif($first == "C") {
        $first = 100-2*(16.66) ;
        $firstData = "C" ;
        $firstcolor = "gold" ;

      }
      elseif($first == "D") {
        $first = 100-3*(16.66) ;
        $firstData = "D" ;
        $firstcolor = "orange" ;

      }
      elseif($first == "E") {
        $first = 100-4*(16.66) ;
        $firstData = "E" ;
        $firstcolor = "#ff6270" ;

      }
      elseif($first == "F") {
        $first = 100-5*(16.66) ;
        $firstData = "F" ;
        $firstcolor = "red" ;
      }
      else{
        $first = 1 ;
        $firstData = "null" ;
        $firstcolor = "black" ;
      }



      //two
      if($two <= 20 && $two >0) {
        $two = $two ;
        $twodata = $two;
        $twocolor = "blue";
      }
      else if($two <= 40 && $two >20){
        $two = $two ;
        $twodata = $two;
        $twocolor = "green";
      }
      else if($two <= 60 && $two >40){
        $two = $two ;
        $twodata = $two;
        $twocolor = "gold";
      }
      else if($two <= 80 && $two >60){
        $two = $two ;
        $twodata = $two;
        $twocolor = "orange";
      }
      else if($two <= 100 && $two >80){
        $two = $two ;
        $twodata = $two;
        $twocolor = "red";
      }
      else{
         if(!is_numeric($two)){
          $two = 1 ;
          $twodata = "null";
          $twocolor = "black";
         }
         else{
          $two = 1 ;
          $twodata = "null";
          $twocolor = "black";
         }
      }



      //three
      if($three <= 20 && $three >0) {
        $three = $two ;
        $threedata = $two;
        $threecolor = "blue";
      }
      else if($three <= 40 && $three >20){
        $three = $three ;
        $threedata = $three;
        $threecolor = "green";
      }
      else if($three <= 60 && $three >40){
        $three = $three ;
        $threedata = $three;
        $threecolor = "gold";
      }
      else if($three <= 80 && $three >60){
        $three = $three ;
        $threedata = $three;
        $threecolor = "orange";
      }
      else if($three <= 100 && $three >80){
        $three = $three ;
        $threedata = $three;
        $threecolor = "red";
      }
      else{
         if(!is_numeric($three)){
          $three = 1 ;
          $threedata = "null";
          $threecolor = "black";
         }
         else{
          $three = 1 ;
          $threedata = "null";
          $threecolor = "black";
         }
      }

      //four
      if($four <= 12 && $four >0) {
        $four = $four ;
        $fourdata = $four;
        $fourcolor = "blue";
      }
      else if($four <= 24 && $four >12){
        $four = $four ;
        $fourdata = $four;
        $fourcolor = "green";
      }
      else if($four <= 36 && $four >24){
        $four = $four ;
        $fourdata = $four;
        $fourcolor = "gold";
      }
      else if($four <= 48 && $four >36){
        $four = $four ;
        $fourdata = $four;
        $fourcolor = "orange";
      }
      else if($four <= 60 && $four >48){
        $four = $four ;
        $fourdata = $four;
        $fourcolor = "red";
      }
      else{
         if(!is_numeric($four)){
          $four = 1 ;
          $fourdata = "null";
          $fourcolor = "black";
         }
         else{
          $four = 1 ;
          $fourdata = "null";
          $fourcolor = "black";
         }
      }


      //fifth
      if($five <= 20 && $five >0) {
        $five = $five ;
        $fivedata = $five;
        $fivecolor = "blue";
      }
      else if($five <= 40 && $five >20){
        $five = $five ;
        $fivedata = $five;
        $fivecolor = "green";
      }
      else if($five <= 60 && $five >40){
        $five = $five ;
        $fivedata = $five;
        $fivecolor = "gold";
      }
      else if($five <= 80 && $five >60){
        $five = $five ;
        $fivedata = $five;
        $fivecolor = "orange";
      }
      else if($five <= 100 && $five >80){
        $five = $five ;
        $fivedata = $five;
        $fivecolor = "red";
      }
      else{
         if(!is_numeric($five)){
          $five = 1 ;
          $fivedata = "null";
          $fivecolor = "black";
         }
         else{
          $five = 1 ;
          $fivedata = "null";
          $fivecolor = "black";
         }
      }




      

    }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> title </title>
<style>
    /* body{
    background-color: #403d37;
    }
    *, *:before, *:after {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    }

    body {
    font-family: Arial, "Hiragino Kaku Gothic Pro W3", Meiryo, sans-serif;
    text-align: center;
    } */

    article {
    width: 1050px;
    padding: 50px 30px;
    margin: 60px auto;
    border-radius: 12px;
    background-color: white;
    color: #ccc;
    
    }
    article a, article a:visited {
    color: #ccc;
    text-decoration: none;
    }
    article a:hover {
    color: #aaa;
    }
    article h1 {
    padding-bottom: 20px;
    margin-bottom: 20px;
    border-bottom: 1px solid #999;
    }
    article .left,
    article .right {
    display: inline-block;
    width: calc(50% - 10px);
    vertical-align: middle;
    }
    article .left {
    padding-right: 15px;
    text-align: left;
    }
    article .right img {
    display: block;
    width: 100%;
    padding: 5px;
    background-color: rgba(222, 219, 211, 0.6);
    }
    article p {
    line-height: 1.4;
    margin-bottom: 30px;
    }

    .btn {
    padding: 12px 18px;
    margin: 10px auto 20px;
    border: none;
    font-size: 16px;
    border-radius: 3px;
    color: #fff;
    background-color: #0D7DBE;
    text-decoration: none;
    cursor: pointer;
    }
    .btn:focus, .btn:active {
    outline: none;
    }
    .btn:disabled {
    cursor: not-allowed;
    }
    .btn:hover {
    box-shadow: 0 4px 12px -3px rgba(0, 0, 0, 0.4);
    }
</style>

  <script>
  window.console = window.console || function(t) {};
 </script>
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body  class="bg-dark text-light"  style="color: white;">

<div class="row">
  <div class="col-sm-2">
  <form action="" method="POST" >
  <input type="text" name="plot1"  placeholder="GTmatrix grade" class="pt-1 pb-1 pl-1 pr-5 mt-3"> <br>
  <input type="number" name="plot2" placeholder="Website Performance" class="pt-1 pb-1 pl-1 pr-5 mt-2"> <br>
  <input type="number" name="plot3" placeholder="Website Structure" class="pt-1 pb-1 pl-1 pr-5 mt-2"> <br>
  <input type="text" name="plot4" placeholder="fully load time" class="pt-1 pb-1 pl-1 pr-5 mt-2"> <br>
  <input type="number" name="plot5" placeholder="SEO score" class="pt-1 pb-1 pl-1 pr-5 mt-2 mb-3"> <br>
  <button type="submit" name="submit" class="btn btn-success btn-lg">Click to generate graph</button>
</form>
  </div>

  <div class="col-sm-4">
  <article id="capture-area">
  <div class="grid">
    <section >
      <h1 style="text-align: center;"> Wordpress Buddy Process Bars </h1>
      <section>
        
      <h2 style="padding-bottom:24px ;display:inline ;  " >GTmatrix Grade</h2>
      <svg class="circle-chart" viewbox="0 0 32.83098862 38.83098862" width="180" height="200" xmlns="http://www.w3.org/2000/svg">
        <circle class="circle-chart__background" stroke="#efefef" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
        <circle class="circle-chart__circle" stroke="<?php echo $firstcolor ?>" stroke-width="3" stroke-dasharray="<?php  echo $first; ?>,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="14.91549431" />
        <g class="circle-chart__info">
          <text class="circle-chart__percent text-light" x="16.91549431" y="15.5" alignment-baseline="central" text-anchor="middle" font-size="8" style="color: white;"><?php  echo $firstData; ?>
</text>
          <!-- <text class="circle-chart__subline" x="16.91549431" y="20.5" alignment-baseline="central" text-anchor="middle" font-size="2">Yay 30% progress!</text> -->
        </g>
      </svg>

      <!--second -->
      <h2 style="padding-top: 60px;padding-bottom:24px ; display:inline ;  padding-bottom:200px ; margin-left:50px ">Website Performance</h2>
      <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="200" height="200" xmlns="http://www.w3.org/2000/svg">
        <circle class="circle-chart__background" stroke="#efefef" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
        <circle class="circle-chart__circle" stroke="<?php echo $twocolor ?>" stroke-width="3" stroke-dasharray="<?php echo $two; ?>,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="14.91549431" />
        <g class="circle-chart__info">
          <text class="circle-chart__percent" x="16.91549431" y="15.5" alignment-baseline="central" text-anchor="middle" font-size="8"> <?php echo $twodata."%"; ?> </text>
          <!-- <text class="circle-chart__subline" x="16.91549431" y="20.5" alignment-baseline="central" text-anchor="middle" font-size="2">Yay 30% progress!</text> -->
        </g>
      </svg>
      </section>

      <section style="margin-top: 50px;">
                    <!--third -->
                    <h2 style="padding-top: 100px;padding-bottom:24px ; display:inline ; ">Website Structure</h2>
      <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="200" height="200" xmlns="http://www.w3.org/2000/svg">
        <circle class="circle-chart__background" stroke="#efefef" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
        <circle class="circle-chart__circle" stroke="<?php echo $threecolor ?>" stroke-width="3" stroke-dasharray="<?php echo $three ?>,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="14.91549431" />
        <g class="circle-chart__info">
          <text class="circle-chart__percent" x="16.91549431" y="15.5" alignment-baseline="central" text-anchor="middle" font-size="8"> <?php echo $threedata."%"; ?> </text>
          <!-- <text class="circle-chart__subline" x="16.91549431" y="20.5" alignment-baseline="central" text-anchor="middle" font-size="2">Yay 30% progress!</text> -->
        </g>
      </svg>

       <!--Fouth -->
       <h2 style="padding-top: 100px ;padding-bottom:24px ; display:inline ; margin-left:50px ">Fully Loaded Time</h2>
      <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="200" height="200" xmlns="http://www.w3.org/2000/svg">
        <circle class="circle-chart__background" stroke="#efefef" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
        <circle class="circle-chart__circle" stroke="<?php echo $fourcolor ?>" stroke-width="3" stroke-dasharray="<?php echo $four ?>,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="14.91549431" />
        <g class="circle-chart__info">
          <text class="circle-chart__percent" x="16.91549431" y="15.5" alignment-baseline="central" text-anchor="middle" font-size="8"> <?php echo $fourdata ?> </text>
          <!-- <text class="circle-chart__subline" x="16.91549431" y="20.5" alignment-baseline="central" text-anchor="middle" font-size="2">Yay 30% progress!</text> -->
        </g>
      </svg>

      </section>

      <section style="margin-top: 50px;">
               <!--Fifth -->
       <h2 style="padding-top: 60px;padding-bottom:24px ; display:inline ; margin-left:30% ">SEO Score</h2>
      <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="200" height="200" xmlns="http://www.w3.org/2000/svg">
        <circle class="circle-chart__background" stroke="#efefef" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
        <circle class="circle-chart__circle" stroke="<?php echo $fivecolor ?>" stroke-width="3" stroke-dasharray="<?php echo $five ?>,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="14.91549431" />
        <g class="circle-chart__info">
          <text class="circle-chart__percent" x="16.91549431" y="15.5" alignment-baseline="central" text-anchor="middle" font-size="8"> <?php echo $fivedata ?> </text>
          <!-- <text class="circle-chart__subline" x="16.91549431" y="20.5" alignment-baseline="central" text-anchor="middle" font-size="2">Yay 30% progress!</text> -->
        </g>
      </svg>

      </section>


    </section>
  </div>
</article>
  </div>

  <div class="col-sm-4">
  <div id="control-area">
  <input id="btn-preview-image" class="btn btn-success btn-lg" class="btn" type="button" value="Step 1 : Capture ↑" disabled />
  <a id="btn-download" class="btn btn-info btn-lg" href="">Step 2 : Download ↓</a>
</div>

<section id="preview-area">
  <h2>Captured Image :</h2>
  <div id="previewImage"></div>
</section>

  </div>

</div> <!--row end-->


<!-- <div id="control-area">
  <input id="btn-preview-image" class="btn btn-success btn-lg" class="btn" type="button" value="Step 1 : Capture ↑" disabled />
  <a id="btn-download" class="btn btn-info btn-lg" href="">Step 2 : Download ↓</a>
</div>

<section id="preview-area">
  <h2>Captured Image :</h2>
  <div id="previewImage"></div>
</section> -->
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

  <script src='https://html2canvas.hertzen.com/dist/html2canvas.min.js'></script>
      <script id="rendered-js" >
window.onload = function () {
  html2canvas(document.getElementById('capture-area'), {
    allowTaint: true,
    backgroundColor: 'transparent',
    useCORS: true
    // scale: window.devicePixelRatio,
  }).then(
  function (canvas) {
    let previewButton = document.getElementById('btn-preview-image'),
    downloadButton = document.getElementById('btn-download'),
    imgageData = canvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    imgageData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    previewButton.removeAttribute('disabled');
    downloadButton.setAttribute('download', 'screenshot.png');
    downloadButton.setAttribute('href', imgageData);

    previewButton.addEventListener('click', function () {
      document.getElementById('previewImage').appendChild(canvas);
    });

    downloadButton.addEventListener('click', function () {
      if (capturedData === void 0) {
        alert("Please preview before downloading.");
      }
    });
  });

};
//# sourceURL=pen.js
    </script>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>


</body>

</html>
 
