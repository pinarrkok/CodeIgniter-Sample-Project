<!doctype html>
<html lang="tr">

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>All Reservations</title>
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
  margin-left:80px;
 
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
  padding-right: 50px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<body>

<br>
<h2 style="margin-left:80px;">RESERVATIONS</h2> 
<a href="<?php echo base_url(); ?>newReservation"><button class="button" style="vertical-align:middle; margin-left:1300px;"><span>New Reservation </span></button></a>
<p style="margin-left:80px;">SEARCH: <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>

<table class="table" >
  <thead >
    <tr>
    <th>Guest Firstname</th>
    <th>Guest Lastname</th>
    <th>Guest Identity Number</th>
    <th>Room Name</th>
    <th>Check-in date</th>
    <th>Check-out date</th>
    <th>Payment</th>
    <th></th>
    <th></th>
    </tr>
  </thead>
  <tbody id="ajaxTable" >
  <?php if(is_array($allReservations)): ?>
    <?php foreach($allReservations as $row): ?>
    <?php echo "<tr>
    <td>$row->firstname</td>
    <td>$row->lastname</td>
    <td>$row->identitynumber</td>
    <td>$row->room_name</td>
    <td>$row->checkin_date</td>
    <td>$row->checkout_date</td>
    <td>$row->payment</td>
    <td><a onclick='deleteReservation($row->stay_id, $row->guestxstay_id )' href='javascript:void(0);'>Delete</a>
    <td><a onclick='updateReservation($row->stay_id, $row->guestxstay_id )' href='javascript:void(0);'>Update</a>
     
    </tr>"  ?>
    <?php endforeach?>
    <?php endif?>


</tbody>
<script>
function deleteReservation(stay_id, guestxstay_id){
   
    var obj = JSON.parse('{ "stay_id":"'+stay_id+'", "guestxstay_id":"'+guestxstay_id+'"}');
          console.log(obj);
         
          $.ajax({
          url: "<?php echo base_url(); ?>deleteReservation/delete",
          type: "post",
          data: obj ,
          success: function (response) {
             
             if(response == 1){
              alert("silindi");
              window.location.reload();
             }
             if(response==0) alert("silinemedi");
            
          },
          error: function(jqXHR, textStatus, errorThrown) {
             console.log(textStatus, errorThrown);
          }
      });
    
  }
  function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("ajaxTable").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajaxTable").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "<?php echo base_url(); ?>searchReservation/search?q="+str, true);
  xhttp.send();   
}
</script>
 

<?php 



?>

</form>
</body>
</html>    