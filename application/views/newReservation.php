<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
        
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>

body {
  margin: 0;
  padding: 0;
  background-color:white;
  height: 100vh;
}

#newReservation .container #login-row #login-column #login-box {
  margin-top: 150px;
  max-width: 600px;
  height: 1000px;
  border: 1px;
  border-radius: 15px;
  background-color: black;
  opacity: 0.7;
  color: white !important; 
}

#newReservation .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}

#newReservation .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;

}

</style>
</head>
<body>

    <div id="newReservation">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="<?php echo base_url(); ?>newReservation/insertReservation" method="post">
                        
                            <h5 class="text-center ">New Reservation</h5> 

                            <div class="form-group">
                                <label for="firstname" >People </label><br>
                                <select name="selection" id="selection" onchange="myFunction(this.value)">
                                <option style="display:none" selected="selected" value=""> </option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                </select>
                            </div>
                            <script>
                            function myFunction(value) {
                                if(value == '1'){
                                 document.getElementById('1').style='display:block;';
                                 document.getElementById('2').style='display:none;';
                                 document.getElementById('3').style='display:none;';
                                 document.getElementById('4').style='display:none;';
                                }
                                if(value == '2'){
                                 document.getElementById('2').style='display:block;';
                                 document.getElementById('1').style='display:block;';
                                 document.getElementById('3').style='display:none;';
                                 document.getElementById('4').style='display:none;';
                                }
                                if(value == '3'){
                                 document.getElementById('3').style='display:block;';
                                 document.getElementById('1').style='display:block;';
                                 document.getElementById('2').style='display:block;';
                                 document.getElementById('4').style='display:none;';
                                }
                                if(value == '4') {
                                 document.getElementById('4').style='display:block;';
                                 document.getElementById('1').style='display:block;';
                                 document.getElementById('2').style='display:block;';
                                 document.getElementById('3').style='display:block;';
                                }
                            }
                            </script>
                            <div class="form-group">
                                <div id="1" style="display:none">
                                <label for="firstname" >Identity number 1: </label><br>
                                <input type="id" name="identitynumber" id="identitynumber" class="form-control" >
                                <a href="javascript:void(0);" class="btn" onclick="checkidentity(document.getElementById('identitynumber').value)">SEARCH</a><br>
                                </div>
                                <div id="2" style="display:none"> 
                                <label for="firstname" >Identity number 2: </label><br>
                                <input type="id" name="identitynumber2"  id="identitynumber2" class="form-control">
                                <a href="javascript:void(0);" class="btn" onclick="checkidentity(document.getElementById('identitynumber2').value)">SEARCH</a><br>
                                </div>
                                <div id="3" style="display:none">
                                <label for="firstname" >Identity number 3: </label><br>
                                <input type="id" name="identitynumber3" id="identitynumber3" class="form-control">
                                <a href="javascript:void(0);" class="btn" onclick="checkidentity(document.getElementById('identitynumber3').value)">SEARCH</a><br>
                                </div>
                                <div id="4" style="display:none">
                                <label for="firstname" >Identity number 4: </label><br>
                                <input type="id" name="identitynumber4" id="identitynumber4" class="form-control">
                                <a href="javascript:void(0);" class="btn" onclick="checkidentity(document.getElementById('identitynumber4').value)">SEARCH</a>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label for="room_name" >Room: </label><br>
                                <select name="room_name">
                                <option style="display:none" selected="selected" value=""> </option>
                                <option name="room_name" value="101">101</option>
                                <option name="room_name" value="102">102</option>
                                <option name="room_name" value="103">103</option>
                                <option name="room_name" value="201">201</option>
                                <option name="room_name" value="202">202</option>
                                <option name="room_name" value="203">203</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="checkin">Check-in date: </label>
                            <input type="date" name="checkin_date" class="form-control"  placeholder="Enter check-in date">
                            </div>
                            <div class="form-group">
                            <label for="checkin">Check-out date: </label>
                            <input type="date" name="checkout_date" class="form-control"  placeholder="Enter check-out date">
                            </div>
                            <div class="form-group">
                            <label for="checkin">Payment: </label>
                            <input type="number" name="payment" class="form-control"  placeholder="Enter payment">
                            </div>
                            <div class="form-group">
                            <label for="checkin">Username: </label>
                            <input type="text" name="username" class="form-control"  placeholder="Enter your username">
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" style="margin-left:380px; background-color:black; height: 47px; width: 80px; margin-top:7px;" name="newReservation" class="btn btn-info btn-md" value="Add" >
                            </div> 
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button id="modalId" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="form-group">
                <label for="checkin">Identity Number: </label>
                <input id="modalIdentity" type="id" name="identitynumber" class="form-control" >
                </div>
                <div class="form-group">
                <label for="checkin">Firstname: </label>
                <input id="modalFirstname" type="name" name="firstname" class="form-control"  placeholder="Enter firstname">
                </div>
                <div class="form-group">
                <label for="checkin">Lastname: </label>
                <input id="modalLastname" type="name" name="lastname" class="form-control"  placeholder="Enter lastname">
                </div>
                <div class="form-group">
                <label for="tel" >Phone number:</label><br>
                <input id="modaltel" type="tel" name="tel" class="form-control" placeholder="Enter phone number">
                </div>
                <div class="form-group">
                <label for="gender" >Gender:</label><br>
                <input onclick="changeGender('Male')" type="radio" name="modalGender" value="male"> Male<br>
                <input onclick="changeGender('Female')" type="radio" name="modalGender" value="female"> Female<br>
                <input onclick="changeGender('Other')" type="radio" name="modalGender" value="other"> Other<br> 
                <input type="text" style="visibility: hidden;" id="modalGender">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button onclick="sendIdentity()" type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <button id="modalbtn" style="display: none;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
          </button>
</body>

</div>
<script>
    function changeGender(g){
        document.getElementById("modalGender").value = g ;
    }
    function sendIdentity(){
        var modalIdentity = document.getElementById("modalIdentity").value;
        var modalFirstname = document.getElementById("modalFirstname").value;
        var modalLastname = document.getElementById("modalLastname").value;
        var modaltel = document.getElementById("modaltel").value;
        var modalGender = document.getElementById("modalGender").value;
        
        var obj = JSON.parse('{ "identitynumber":"'+modalIdentity+'", "firstname":"'+modalFirstname+'", "lastname":"'+modalLastname+'", "tel":"'+modaltel+'", "gender":"'+modalGender+'"}');
        console.log(obj);
        
        $.ajax({
        url: "<?php echo base_url(); ?>insertGuest/insert",
        type: "post",
        data: obj ,
        success: function (response) {
            
           if(response == 1){
            document.getElementById("modalId").click();
            var modalIdentity = document.getElementById("modalIdentity").value = "";
            var modalFirstname = document.getElementById("modalFirstname").value= "";
            var modalLastname = document.getElementById("modalLastname").value= "";
            var modaltel = document.getElementById("modaltel").value= "";
            var modalGender = document.getElementById("modalGender").value= "" ;
          
           }
           
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
    }
    function checkidentity(x){
        var obj = JSON.parse('{ "identitynumber":"'+x+'"}');
        console.log(obj);
        
        $.ajax({
        url: "<?php echo base_url(); ?>insertGuest/check",
        type: "post",
        data: obj ,
        success: function (response) {
            
           if(response == 0){
            
            document.getElementById("modalIdentity").value = x;
            document.getElementById("modalbtn").click();
           // $('#exampleModal').modal('show');
           }
           
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
        
    }
</script>
</html>