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

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}


 input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  float:center;
  margin-bottom: 16px;
  resize: vertical;
}
/* input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
} */

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

table{
    width:50%;
}

/* .container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
} */
</style>
</head>
<body>
<div class="topnav">
    <a href="#" class="logo" style="float:left">Hotelio</a>
  <a href="#news">Hotels</a>
  <a class="active" href="#home">Home</a>
</div>
<center>
    <br>
<table>
    <form action="">
        <tr>
            <td>Hotel Name</td>
        </tr>
        <tr>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Location</td>
        </tr>
        <tr>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Price per Night</td>
        </tr>
        <tr>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Image</td>
        </tr>
        <tr>
            <td>
                <input type="file">
            </td>
        </tr>
        <tr>
            <td>Facilitate</td>
        </tr>
        <tr>
    <td>
    <fieldset>
  <input type="checkbox" checked="checked">
        <label class="container">Shower
  <span class="checkmark"></span>
    </label> <br>

    <input type="checkbox">
    <label class="container">Breakfast
  <span class="checkmark"></span>
    </label> <br>

    <input type="checkbox">
    <label class="container">Pool   
  <span class="checkmark"></span>
    </label> <br>

    <input type="checkbox">
    <label class="container">Wifi
  <span class="checkmark"></span>
     </label> <br>

     <input type="checkbox">
    <label class="container">Double Bed
  <span class="checkmark"></span>
    </label> <br>

    <input type="checkbox">
    <label class="container">Refrigerator
  <span class="checkmark"></span>
  </fieldset>
    </label>
   </td>

        </tr>
        <tr>
            <td>Synopsis</td>
        </tr>
        <tr>
            <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
        </tr>
    <tr>
        <td>
    <center><input type="submit" value="Add Hotel"></center>
    </td>
    </tr>
    </form>
</table>
</center>




<!-- 
<div class="container">
  <form action="/action_page.php">
    <label for="fname">Hotel name</label>
    <input type="text" id="fname" name="firstname" placeholder="Hotel Name">

    <label for="location">Location</label>
    <input type="text" id="location" name="lastname" placeholder="Location In">

    <label for="price">Price per Night</label>
    <input type="text" id="price" name="price" placeholder="Price per Night">

    <p>Facilitate</p>
    <label class="container">Shower
  <input type="checkbox" checked="checked">
  <span class="checkmark"></span>
    </label>
    <label class="container">Breakfast
  <input type="checkbox">
  <span class="checkmark"></span>
    </label>
    <label class="container">Pool
  <input type="checkbox">
  <span class="checkmark"></span>
    </label>
    <label class="container">Wifi
  <input type="checkbox">
  <span class="checkmark"></span>
    </label>
    <label class="container">Double Bed
  <input type="checkbox">
  <span class="checkmark"></span>
    </label>
    <label class="container">Refrigerator
  <input type="checkbox">
  <span class="checkmark"></span>
    </label>
    <br> <br>
    <label for="subject">Synopsis</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <center><input type="submit" value="Add Hotel"></center>
  </form> -->
<!-- </div> -->

</body>
</html>