<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>About</title>
</head>
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
  background-color: #474e5d;
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
  color: grey;
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
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Selamat Datang</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/artikel">Artikel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

<div class="about-section">
</div>

<h2 style="text-align:center">About Us</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <a href><img src="https://scontent.fsub7-1.fna.fbcdn.net/v/t1.6435-9/54255256_394222014704206_244629878207414272_n.jpg?_nc_cat=111&ccb=1-3&_nc_sid=e3f864&_nc_ohc=7I1My8wHLl0AX_6DFui&_nc_ht=scontent.fsub7-1.fna&oh=7591e86116a3577d9b964973e54dda11&oe=60D0183D" alt="Jihyan" style="width:200px;height:200px;"></a>
      <div class="container">
        <h2>Jihyan Sugiono</h2>
        <p class="title">Mahasiswa T.Informatika</p>
        <p>jihyansugiono@gmail.com</p>
        <p><button class="button">Contact</button></p>
        <div>
		<a href="https://www.instagram.com/jihyan_/?hl=en" target="_blank">Instagram profile</a>
	</div>
	<div>
		<a href="https://www.linkedin.com/in/jihyan-sugiono-63ab25130" target="_blank">LinkedIn profile</a>
	</div>
      </div>
    </div>
  </div>
</body>
</html>