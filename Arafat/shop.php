<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="view1.css">
    <title>view</title>
   
</head>
<body>
<center>
    <h3>All the Apple </h3>
</center>


<?php
$coon=mysqli_connect("localhost=sql305.infinityfree.com","if0_35999981","","if0_35999981_apple","Arafat777");
$result=mysqli_query($coon,"select * from phones");
while($row=mysqli_fetch_array($result)){
  echo "
  <center>
  <main>
  <div class='card' style='width: 15rem;'>
    <img src='$row[img]' 'class='card-img-top' >
    <div class='card-body'>
    <h5 class='card-title'>$row[name]</h5>
    <h5 class='card-title'>$row[brand]</h5>
    <p class='card-text'>$row[model]</p>
    <p class='card-text'>$row[color]</p>
    <p class='card-text'>$row[storage]</p>
    <p class='card-text'>$row[price]</p>
      <a href='#' class='btn btn-danger'>buy</a>
      
    </div>
  </main>
  </center>
  ";
}

?>
</body>
<style>
   body{
    align-items: center;
    min-height: 85vh;
    background-image: url(1.jpg);
    background-size: cover;
    background-position: center; 
 } 
h3{
    color: rgb(231, 154, 22);
    font-style: italic;
    font-weight: bold;
    margin-top: 40px;
    margin-bottom: 50px;
}

.card{
    float:left;
    margin-left: 30px;
    margin-right: 20px;
    border-radius: 60px;
    border: 2px solid #996a32;
    margin-bottom: 30px;
}

.card img{
    width: 100%;
    height: 220px;
    border-radius: 60px;
    border: 2px solid #996a32;

}
main{
    width: 100%;
}
.btn{
    color:#333;
}

 </style>
</html>