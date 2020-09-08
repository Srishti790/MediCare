<?php
include_once 'includes/dbh.inc.php'; 
include_once 'managerheader.php'
?>
<style>
@import url("https://fonts.googleapis.com/css?family=Roboto+Mono");
* {
  box-sizing: border-box;
  font-weight: normal;
}

body {
  color: #555;
  /* background: #222; */
  /* text-align: center; */
  font-family: 'Roboto Mono';
  /* padding: 1em; */
  overflow:hidden;
}

h1 {
  font-size: 2.2em;
}

.flip {
  position: relative;
  text-align: center;
  overflow:hidden;
}
.flip > .front,
.flip > .back {
  display: block;
  transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transition-duration: .5s;
  transition-property: transform, opacity;
}
.flip > .front {
  transform: rotateY(0deg);
}
.flip > .back {
  position: absolute;
  opacity: 0;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  transform: rotateY(-180deg);
}
.flip:hover > .front {
  transform: rotateY(180deg);
}
.flip:hover > .back {
  opacity: 1;
  transform: rotateY(0deg);
}
.flip.flip-vertical > .back {
  transform: rotateX(-180deg);
}
.flip.flip-vertical:hover > .front {
  transform: rotateX(180deg);
}
.flip.flip-vertical:hover > .back {
  transform: rotateX(0deg);
}

.flip {
  position: relative;
  display: inline-block;
  /* margin-left:10px; */
  margin-right:5em;
  margin-bottom: 1em;
  width: 100%;
}
.flip > .front,
.flip > .back {
  display: block;
  color: white;
  width: inherit;
  background-size: cover !important;
  background-position: center !important;
  height: 220px;
  padding: 1em 2em;
  background: #313131;
  border-radius: 10px;
}
.flip > .front p,
.flip > .back p {
  font-size: 0.9125rem;
  line-height: 160%;
  color: #999;
}

.text-shadow {
  text-shadow: 1px 1px rgba(0, 0, 0, 0.04), 2px 2px rgba(0, 0, 0, 0.04), 3px 3px rgba(0, 0, 0, 0.04), 4px 4px rgba(0, 0, 0, 0.04), 0.125rem 0.125rem rgba(0, 0, 0, 0.04), 6px 6px rgba(0, 0, 0, 0.04), 7px 7px rgba(0, 0, 0, 0.04), 8px 8px rgba(0, 0, 0, 0.04), 9px 9px rgba(0, 0, 0, 0.04), 0.3125rem 0.3125rem rgba(0, 0, 0, 0.04), 11px 11px rgba(0, 0, 0, 0.04), 12px 12px rgba(0, 0, 0, 0.04), 13px 13px rgba(0, 0, 0, 0.04), 14px 14px rgba(0, 0, 0, 0.04), 0.625rem 0.625rem rgba(0, 0, 0, 0.04), 16px 16px rgba(0, 0, 0, 0.04), 17px 17px rgba(0, 0, 0, 0.04), 18px 18px rgba(0, 0, 0, 0.04), 19px 19px rgba(0, 0, 0, 0.04), 1.25rem 1.25rem rgba(0, 0, 0, 0.04);
}

</style>

<div class ="container">
<h1 class ="text-center"><u>Equipments</u></h1>
<br>
<br>
<div class ="row">
<?php

$sql="SELECT * FROM equipments";
$result=mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);
if($resultCheck<1)
{?>
<center><h3>No Equipments</h3></center>
<?php }
else{
    while($row =mysqli_fetch_assoc($result)){
        ?>
    <div class ="col-md-4 col-sm-12">
        <div class="flip">
            <div class="front" style="background-image: url(upload/<?php echo $row['image']?>)">
            <!-- <h1 class="text-shadow"><?php// echo $row['name']?></h1> -->
            </div>
            <div class="back">
            <h3><?php echo $row['name'];?></h3>
            <p><b>Quantity :</b><?php echo $row['Quantity'];?></p>
            <p><b>Price :Rs.</b><?php echo $row['Price'];?></p>
            </div>
        </div>
    </div>
<?php
    }
}
?>
</div>
</div>
</body>
</html>