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
@import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
* {
  box-sizing: border-box;
}
.container {
  display: flex;
  margin-left:30px;
  flex-wrap: wrap;
  
}
.card {
  margin: 10px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  width: 300px;
  height: 350px;
}
.card-header img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}
.card-body {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  padding: 20px;
  min-height:50px;
}

.tag {
  background: #cccccc;
  border-radius: 50px;
  font-size: 12px;
  margin: 0;
  color: #fff;
  padding: 2px 10px;
  text-transform: uppercase;
  cursor: pointer;
}
.tag-teal {
  background-color: #47bcd4;
}
.tag-purple {
  background-color: #5e76bf;
}
.tag-pink {
  background-color: #cd5b9f;
}

.card-body p {
  font-size: 13px;
  margin: 0 0 40px;
}
.user {
  display: flex;
  margin-top: auto;
}

.user img {
  border-radius: 50%;
  width: 40px;
  height: 40px;
  margin-right: 10px;
}
.user-info h5 {
  margin: 0;
}
.user-info small {
  color: #545d7a;
}


    </style>
</head>
<body>
<div class="topnav">
  <a href="{{url('/')}}"class="logo" style="float:left">Hotelio</a>
  <a class="active">Hotels</a>
  <a href="{{url('/')}}">Home</a>
</div>
 
  <div>
    <a href="/add">Add Hotel</a>
  </div>
<div class="container">
  <div class="card">
    <div class="card-header">
      <img src="{{ asset('image/padma-hotel-bandung.jpg') }}" alt="rover" />
    </div>
    <div class="card-body">
      <span class="tag tag-teal">Bandung</span>
      <h4>
          Padma Hotel 
      </h4>
      <p>
        <b><font size="5px">$174</font></b>/Night
      </p>
      <div class="user">
        
        <div class="user-info">
        </div>
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card-header">
      <img src="{{ asset('image/ibis-hotel.jpg') }}" alt="ballons" />
    </div>
    <div class="card-body">
      <span class="tag tag-purple">Bandung</span>
      <h4>
        Ibis Trans Studio Hotel
      </h4>
      <p>
      <b><font size="5px">$20</font></b>/Night
      </p>
      <div class="user">
        <div class="user-info">
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <img src="{{ asset('image/Hotel-Indonesia.jpg') }}" alt="city" />
    </div>
    <div class="card-body">
      <span class="tag tag-pink">Jakarta</span>
      <h4>
       Hotel Indonesia Kempinski
      </h4>
      <p>
         <b><font size="5px">$174</font></b>/Night
      </p>
      <div class="user">
        <div class="user-info">
        </div>
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card-header">
      <img src="{{ asset('image/hotel-raffles.jpg') }}" alt="" >
    </div>
    <div class="card-body">
      <span class="tag tag-purple">Jakarta</span>
      <h4>
       Hotel Raffles 
      </h4>
      <p>
       <b><font size="5px">$213</font></b>/Night
      </p>
      <div class="user">
        <div class="user-info">
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <img src="{{ asset('image/bvlgari.jpg') }}" alt="ballons" />
    </div>
    <div class="card-body">
      <span class="tag tag-purple">Bali</span>
      <h4>
       Bvlgari Resort
      </h4>
      <p>
      <b><font size="5px">$913</font></b>/Night
      </p>
      <div class="user">
        <div class="user-info">
        </div>
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card-header">
      <img src="{{ asset('image/nihii-sumba.jpg') }}" alt="ballons" />
    </div>
    <div class="card-body">
      <span class="tag tag-purple">Sumba / NTT</span>
      <h4>
        Resort Nihi
      </h4>
      <p>
      <b><font size="5px">$2091</font></b>/Night
      </p>
      <div class="user">
        <div class="user-info">
        </div>
      </div>
    </div>
  </div>
  

</body>
</html>