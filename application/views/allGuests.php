<!doctype html>
<html lang="tr">

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>All Guests</title>
</head>
<style>
 table {
  border-collapse: collapse;
  width: 90% !important;
  margin-left: 80px;
}
table{
  border: 1px solid black;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
 .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 50px;
   background-color: #ebf2f5;
   color: black;
   text-align: center;
   
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 15px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;

}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 20px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
	
</style>
<body>
<br>
<h2 style="margin-left:80px;"> GUESTS</h2>
<a href="<?php echo base_url(); ?>allReservations"><button class="button" style="vertical-align:middle; margin-left:1300px;"><span>All Reservations </span></button></a><br>

<table class="table">
  <thead>
    <tr>
    <th>Identity Number</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Phone</th>
    <th>Gender</th>
    </tr>
    <?php foreach($rows as $row){ ?>
    <?php echo "<tr>
    <td>$row->identitynumber</td>
    <td>$row->firstname</td>
    <td>$row->lastname</td>
    <td>$row->tel</td>
    <td>$row->gender</td>
    </tr>"  ?>
    <?php } ?>
  </thead>
  <tbody >


<?php 



?>

</form>
</body>
</html>    