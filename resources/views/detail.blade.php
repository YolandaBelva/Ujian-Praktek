<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

img {
    width: 40%;
}
    </style>
</head>
<body>
<div class="topnav">
    <a href="#" class="logo" style="float:left">Hotelio</a>
  <a class="active" href="#news">Hotels</a>
  <a href="#home">Home</a>
</div>
<center>
    <h1>Judul Hotel</h1>
    <p>Lokasi Hotel</p>
    <img src="{{ asset('image/dashboard.jpg') }}" alt="Hotel">
    <h2>About Hotel</h2>
    <p>Lorem Ipsum</p>
    <h2>Facilitate</h2>

</center>
</body>
</html>