<?php
require_once('connect.php');
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Laundry Services</title>
    <link rel="stylesheet" type="text/css" href="stylesbackup1.css">
    <link rel="shortcut icon" href="images/download.png"/>

  </head>
  <div class="header">
    <div class="logoWrapper">
      <img class="logo" src="images/download.png" border="0" />
      <div class="topnav">
        <a href="usermanagement.php">Home</a>
        <a href="welcome.php">Go back</a>
        <a href="payment.php">Pay Here</a>
        
      </div>
    </div>
   
  </div>
  <body>
    <div class="row">
    <div class="content">
<!-- if(isset($_SESSION['userStatus']) && (($_SESSION['userStatus']=="STAFF") || ($_SESSION['userStatus']=="ADMIN"))){ -->
    <?php
      if(isset($_SESSION['memberUserId']) ){
    ?>
        <div class="boxWrapper">

          <div class="box1">
            <div class="profileWrapper">
              <img class="profileImg" src="images/person.png" border="0" />
            </div>
            <div class="pofileText">
              <?php
              echo "Hello"."&nbsp".$_SESSION['userFirstName']."&nbsp".$_SESSION['userLastName']."<br>"."<br>"."Status:".$_SESSION['memberType']."<br><br>"."Bonus points:".$_SESSION['bonusPoint'];
              ?>
              <br>
              <br>
              <a href="logout.php">Logout</a>
            </div>

          </div>
          <div class="box2">

              <div class="rightSecondRow">
                <a href="trackservice.php">
                  <div class="regisItemWrapper">
                    <h1>Track Service Process</h1>
                  </div>
                </a>

              </div>
              
              <div class="box2">
              <div class="rightSecondRow">
                <a href="benefit.php">
                  <div class="viewHistorymWrapper">
                    <h1>View benefit of bonus point</h1>
                  </div>
                </a>

              </div>
              

          </div>


      </div>
      <div id="form_new_payment" style="display:none;" class="modal">
            <form  class="modal-content animate"action="#" method="post" style="width: 400px;" id="paymentForm">
                <div class="imgcontainer">
                    <p style="font-size: 30px;">Make Payment Here: </p>
                </div>
                <div class="feedback"></div>

                <div class="container">

                    <label for="amount"><b>Amount</b></label>
                    <input type="number" placeholder="amount" name="amount" id="amount" required>

                    <label for="phone"><b>Phone Number</b></label>
                    <input type="number" placeholder="254759053976" name="phone" id="phone" required>

                    <button type="submit" id="submitPayment">Submit</button>
                    <a href = ""><button type="button" onclick="document.getElementById('id01').style.display='none'" 
                class="cancelbtn">Cancel</button></a>
                </div>

                </div>

                <div class="completeContainer">
                </div>

            </form>
        </div>

    <?php }
      else {
        ?>
        <div class="boxWrapper">

          <div class="box1">
            <div class="profileWrapper">
              <img class="profileImg" src="images/Guest.png" border="0" />
            </div>
            <div class="pofileText">
              <?php
              echo "Hello"."&nbsp"."Guest"."<br>"."<br>"."Please Signup or login<br>"."to proceed";
              ?>
              <br>
              <br>

            </div>

          </div>
          <div class="box2">

              <div class="rightSecondRow">
                <a href="trackservice.php">
                  <div class="regisItemWrapper">
                    <h1>Track Service Process</h1>
                  </div>
                </a>

              </div>

          </div>


      </div>
  <?php  } ?>

    </div>
  </div>

  <footer>
    <div class="footerContent">
      <div class="logoWrapper">
        <img class="logo" src="images/download.png" border="0" />
      </div>
      <div class="leftFooter">
        <h1 id="followUs">Follow Me on. . </h1>
        <div class="iconWrapper">
          <a href="https://www.facebook.com/">
            <img class="socialIcon" src="images/facebook.png" border="0" />
          </a>
          <a href="https://www.instagram.com/">
            <img class="socialIcon" src="images/ig.jpg" border="0" />
          </a>
          <a href="https://twitter.com/">
            <img class="socialIcon" src="images/twitter.png" border="0" />
          </a>
        </div>
      </div>
      <div class="rightFooter">
        <div class="memberCredit">
          <h1>Created by</h1>
        </div>
        <div class="nameList">
          <ul id="name">
            <li>Otieno Amba</li>
           
          </ul>

        </div>
      </div>
    </div>
  </footer>
  </body>
  <script>
    (function() {
        // console.log($('#completePayment'));
        $('#submitPayment').on('click', function(event) {
            event.preventDefault();
            var amount = $("input[name='amount']").val();
            var phone = $("input[name='phone']").val(),
                errors = [];
            if (amount == null || amount == '') {
                errors.push("Amount is required");
            }
            if (phone == null || phone == '') {
                errors.push("Phone number is required");
            }
            if (amount == null || amount == '') {
                errors.push("Amount is required");
            }
            if (errors.length > 0) {
                var p = "";
                $.each(errors, (key, value) => {
                    p += value;
                });
                $(".feedback").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button><strong>Oops!  </strong>" + p + "</div>");
            } else {
                var data = {
                    phone: phone,
                    amount: amount,
                    makepayment: true
                }
                $.ajax({
                    method: 'POST',
                    url: 'backend/payment.php',
                    data: data,
                    success: (params) => {
                        var arr = params.split(":");
                        if (arr[0] == "success") {
                            console.log(arr[1]);
                            $(".feedback").html("<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button><strong>Success!  </strong>Payment Accepted for processing! Check your phone, enter Mpesa Pin to complete the transaction. </div>");
                            $('.completeContainer').html("<button  class=\"btn btn-primary btn-md\" id=\"completePayment\" data-val=" + arr[1] + ">Complete</button>");
                        } else {
                            $(".feedback").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button><strong>Oops!  </strong>Error occured during processing. Ensure you have enough money in your mpesa and retry. </div>");
                        }
                    },
                    error: (error) => {
                        $(".feedback").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button><strong>Oops!  </strong>Error occured during processing. Ensure you have enough money in your mpesa and retry. </div>");
                    }
                }).then(function() {
                    $('#completePayment').on('click', function(event) {
                        event.preventDefault();
                        var checkoutid = $(this).data('val');
                        var data = {
                            checkoutid: checkoutid,
                            confirmPayment: true,
                        }
                        $.ajax({
                            method: 'POST',
                            data: data,
                            url: 'backend/confirm.php',
                            success: function(params) {
                                console.log(params);
                                if (params == "success") {
                                    $(".feedback").html("<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button><strong>Success!  </strong>Payment was received successfully. </div>");
                                } else {
                                    $(".feedback").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button><strong>Oops!  </strong>We have not received any payments from you. </div>");
                                }
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        });

                    });
                });
            }
        });


    })()
</script>

</html>
