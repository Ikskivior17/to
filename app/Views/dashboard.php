<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #FF9100;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: black;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>Tentang Kami</h1>

  <p>Selamat datang di SD Technology</p>
</div>
<br>
<h2 style="text-align:center">Kenapa harus belanja di toko kami? </h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="img\nvidia.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <br>
        <p class="title">Kami menjual VGA yang memumpuni untuk bermain game, editing, rendering atau kebutuhan lainnya.</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img\komputer.jpg" alt="Mike" style="width:100%">
      <div class="container"><br>
        <p class="title">Kami dapat merakit komputer sesuai dengan kebutuhan anda dengan harga terjangkau</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img\komputer.jpg" alt="Mike" style="width:100%">
      <div class="container"><br>
        <p class="title">Kami dapat merakit komputer sesuai dengan kebutuhan anda dengan harga terjangkau</p>
      </div>
    </div>
  </div>  
  
 

</body>
</html>
