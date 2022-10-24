<!DOCTYPE html>
<html>
<head>
<style>
body {margin:25px;}

div.polaroid {
  width: 20%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container {
  text-align: center;
  padding: 10px 20px;
}
</style>
</head>
<body>

<div class="polaroid">
  <img src="lights600x400.jpg" alt="Norther Lights" style="width:100%">
  <div class="container">
  <p>Northern Lights</p>
  </div>
</div>
<body><br> <br> <br></body>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 18%;
  padding: 40px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>

<h2>Images Side by Side</h2>
<p>How to create side-by-side images with the CSS float property:</p>

<div class="row">
  <div class="column" class="polaroid">
    <img src="lights600x400.jpg" alt="Snow" style="width:100%">
    <p class="container">Northern Lights</p>
  </div>
  <div class="column" class="polaroid" >
    <img src="lights600x400.jpg" alt="Forest" style="width:100%">
    <p class="container">Northern Lights</p>
  </div>
  <div class="column" class="polaroid">
    <img src="lights600x400.jpg" alt="Mountains" style="width:100%">
    <p class="container">Northern Lights</p>
  </div>
  <div class="column">
    <img src="lights600x400.jpg" alt="Mountains" style="width:100%">
    <p class="container">Northern Lights</p>
  </div>
  <div class="column">
    <img src="lights600x400.jpg" alt="Mountains" style="width:100%">
    <p class="container">Northern Lights</p>
  </div>
  <div class="column">
    <img src="lights600x400.jpg" alt="Mountains" style="width:100%">
    <p class="container">Northern Lights</p>
  </div>
  <div class="column">
    <img src="lights600x400.jpg" alt="Mountains" style="width:100%">
    <p class="container">Northern Lights</p>
  </div>
  <div class="column">
    <img src="lights600x400.jpg" alt="Mountains" style="width:100%">
    <p class="container">Northern Lights</p>
  </div>
  
</div>

</body>
</html>