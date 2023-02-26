<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>Booking</title>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/rent.css">


  <!-- sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js"></script>
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-datetimepicker.min.css">
  <script src="vendor/bootstrap/js/bootstrap-datetimepicker.min.js"></script>
</head>

<body>
  <!-- Page Content -->
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Rent a car </h1>
          <span>We are here to listen from you deliver exellence</span>
        </div>
      </div>
    </div>
  </div>

  <section>

<center>
  <br>
  <div class="tabs">

    <input type="radio" name="tabs" id="tabone" checked="checked">
    <label for="tabone">Premium MPV</label>
    <div class="tab">
    <div class="blog-card" id="Premium">
    <div class="meta">
      <div class="photo">
      <a target="_blank">
    <img src="assets/images/alphard.jpeg" width="350" height="200">
  </a>
        </a>
      </div>
     
    </div>
    <div class="description">
      <h1>Toyota Alphard</h1>
      <h2>All Drivers are fully vaccinated</h2>
      <p> <strong> With This Car, It is available for </strong> <br>1-3 Passenger with Maximum 5 Large Luggage Only<br>
4 Passenger with Maximum 4 Large Luggage Only<br>
5 Passenger with Maximum 2 Large Luggage Only</p>
      <p class="read-more">
        <a href="#">Read More</a>
      </p>
    </div>
  </div>
  <div class="blog-card alt">
    <div class="meta">
      <div class="photo">
        <a target="_blank">
    <img src="assets/images/ve.png" width="450" height="200">
  </a>
      </div>
         
    </div>
    <div class="description">
      <h1>Toyota Vellfire</h1>
      <h2>All Drivers are fully vaccinated</h2>
      <p>The most comfortable Vellfire MPV 7 seaters for your Limousine Airport Transfer Service in KLIA Malaysia.</p>
      <p class="read-more">
        <a href="#">Read More</a>
      </p>
    </div>
  </div>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Book Now
</button>
  <br><br>
    </div>

    <input type="radio" name="tabs" id="tabtwo">
    <label for="tabtwo">Executive MPV</label>
    <div class="tab">
    <div class="blog-card" id="Premium">
    <div class="meta">
      <div class="photo">
      <a target="_blank">
    <img src="assets/images/nissan.jpeg" width="350" height="200">
  </a>
        </a>
      </div>
     
    </div>
    <div class="description">
      <h1>Nissan Highway Star</h1>
      <h2>ABCDEFG</h2>
      <p> <strong> With This Car, It is available for </strong><br>1-3 Passenger with Maximum 4 Large Luggage Only<br>
4 Passenger with Maximum 3 Large Luggage Only<br>
5 Passenger with Maximum 2 Large Luggage Only</p>
      <p class="read-more">
        <a href="#">Read More</a>
      </p>
    </div>
  </div>
  <div class="blog-card alt">
    <div class="meta">
      <div class="photo">
        <a target="_blank">
    <img src="assets/images/innova.webp" width="450" height="200">
  </a>
      </div>
         
    </div>
    <div class="description">
      <h1>Toyota Innova</h1>
      <h2>JABCDEFG</h2>
      <p>The most executive Innova MPV 7 seaters for your Limousine Service in KLIA or others states</p>
      <p class="read-more">
        <a href="#">Read More</a>
      </p>
    </div>
  </div>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Book Now
</button>
    </div>
    
    <input type="radio" name="tabs" id="tabthree">
    <label for="tabthree">Budget Sedan</label>
    <div class="tab">
    <div class="blog-card" id="Premium">
    <div class="meta">
      <div class="photo">
      <a target="_blank">
    <img src="assets/images/city.jpeg" width="350" height="200">
  </a>
        </a>
      </div>
     
    </div>
    <div class="description">
      <h1>Honda City</h1>
      <h2>ABCDEFG</h2>
      <p> <strong> With This Car, It is available for </strong><br>1-3 Passenger with Maximum 2 Large Luggage Only
      <br><br><br>

</p>


      <p class="read-more">
        <a href="#">Read More</a>
      </p>
    </div>
  </div>
  <div class="blog-card alt">
    <div class="meta">
      <div class="photo">
        <a target="_blank">
    <img src="assets/images/vios.png" width="450" height="200">
  </a>
      </div>
         
    </div>
    <div class="description">
      <h1>Toyota Vios</h1>
      <h2>JABCDEFG</h2>
      <p>A classic sedan private car service for your best solutions to travel KLIA / KLIA 2 airport / Intercity Exchange in Malaysia.</p>
      <p class="read-more">
        <a href="#">Read More</a>
      </p>
    </div>
  </div>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Book Now
</button>
    </div>

  <input type="radio" name="tabs" id="tabfour">
    <label for="tabfour">Intercity Transfer</label>
    <div class="tab">
    <div class="blog-card" id="Premium">
    <div class="meta">
      <div class="photo">
      <a target="_blank">
    <img src="assets/images/alza.jpeg" width="350" height="200">
  </a>
        </a>
      </div>
     
    </div>
    <div class="description">
      <h1>Perodua Alza</h1>
      <h2>ABCDEFG</h2>
      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
      <p class="read-more">
        <a href="#">Read More</a>
      </p>
    </div>
  </div>
  <div class="blog-card alt">
    <div class="meta">
      <div class="photo">
        <a target="_blank">
    <img src="assets/images/ve.png" width="450" height="200">
  </a>
      </div>
         
    </div>
    <div class="description">
      <h1>Toyota Vellfire</h1>
      <h2>JABCDEFG</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
      <p class="read-more">
        <a href="#">Read More</a>
      </p>
    </div>
  </div>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Book Now
</button>
    </div>

  <input type="radio" name="tabs" id="tabfive">
    <label for="tabfive">KLIA / klia2 Transfer</label>
    <div class="tab">
    <div class="blog-card" id="Premium">
    <div class="meta">
      <div class="photo">
      <a target="_blank">
    <img src="assets/images/alphard.jpeg" width="350" height="200">
  </a>
        </a>
      </div>
     
    </div>
    <div class="description">
      <h1>Toyota Alphard</h1>
      <h2>ABCDEFG</h2>
      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
      <p class="read-more">
        <a href="#">Read More</a>
      </p>
    </div>
  </div>
  <div class="blog-card alt">
    <div class="meta">
      <div class="photo">
        <a target="_blank">
    <img src="assets/images/ve.png" width="450" height="200">
  </a>
      </div>
         
    </div>
    <div class="description">
      <h1>Toyota Vellfire</h1>
      <h2>JABCDEFG</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
      <p class="read-more">
        <a href="#">Read More</a>
      </p>
    </div>
  </div>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Book Now
</button>    </div>
  </div>
</center>
 
<br><br><br><br><br><br>
</section>

 
<section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="column" id="main">
        <div class="row">
    <div class="col-md-12">
      <form action="sendMail.php" method="post" id="bookingForm">
        <h1> Book Your Car Today </h1>

        <fieldset>

          <legend><span class="number">1</span> Your Basic Info</legend>

          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name" placeholder="Name" required>

          <label for="email">Email:</label>
          <input type="email" id="mail" name="user_email" placeholder="example@gmail.com" required>

          <label for="cn">Contact Number:</label>
          <input type="text" id="cn" name="cn" placeholder="012-3456789" required>

          <label for="cn">Number of Passenger</label>
          <input type="number" id="nopassenger" name="nopassenger" placeholder="4" required>

          <label for="cn">Number of Luggage</label>
          <input type="number" id="nolugg" name="nolugg" placeholder="2" required>

          <label for="services">Type of Services</label>
          <select id="job" name="user_job" required>
            <option value="pm">Premium MPV</option>
            <option value="em">Executive MPV</option>
            <option value="bs">Budget Sedan</option>
            <option value="it">Intercity Transfer</option>
            <option value="at">Airport Transfer</option>
            
            </optgroup>
          </select> 

          

        </fieldset>
        <fieldset>

          <legend><span class="number">2</span> Your Details</legend>

          <label for="dateofbirth">Pick Up Date</label>
          <input type="text" name="pickupdate" id="pickupdate" required>

          <label for="dateofbirth">Drop Off Date</label>
          <input type="text" name="dropoffdate" id="dropoffdate" required>



          <label for="pickuplocation">Pick Up Location</label>
          <select id="job" name="user_job" required>
            <option value="johor">Johor</option>
            <option value="kedah">Kedah</option>
            <option value="kelantan">Kelantan</option>
            <option value="malacca">Malacca</option>
            <option value="negeri_sembilan">Negeri Sembilan</option>
            <option value="pahang">Pahang</option>
            <option value="penang">Penang</option>
            <option value="perlis">Perlis</option>
            <option value="selangor">Selangor</option>
            <option value="terengganu">Terengganu</option>
            <option value="kl">Kuala Lumpur</option>
            <option value="putrajaya">Putrajaya</option>
            </optgroup>
          </select> 
          <input type="text" name="pickuplocation" id="pickuplocation">

          <label for="dropofflocation">Drop Off Location</label>
          <input type="text" name="dropofflocation" id="dropofflocation" required>
        </fieldset>
        <button type="submit" id="submitBtn">Confirm Car Booking</button>
        <button type="reset" onclick="location.href='rent.php'">Cancel</button>

      </form>
    </div></div></div></div></div></div>
</div>
</section>






  <!--
  <div class="row">
    <div class="col-md-12">
      <form action="sendMail.php" method="post" id="bookingForm">
        <h1> Book Your Car Today </h1>

        <fieldset>

          <legend><span class="number">1</span> Your Basic Info</legend>

          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name" placeholder="Name">

          <label for="email">Email:</label>
          <input type="email" id="mail" name="user_email" placeholder="example@gmail.com">

          <label for="cn">Contact Number:</label>
          <input type="text" id="cn" name="cn" placeholder="012-3456789">

        </fieldset>
        <fieldset>

          <legend><span class="number">2</span> Your Details</legend>

          <label for="dateofbirth">Pick Up Date</label>
          <input type="text" name="pickupdate" id="pickupdate">

          <label for="dateofbirth">Drop Off Date</label>
          <input type="text" name="dropoffdate" id="dropoffdate">



          <label for="pickuplocation">Pick Up Location</label>
          <select id="job" name="user_job">
            <option value="johor">Johor</option>
            <option value="kedah">Kedah</option>
            <option value="kelantan">Kelantan</option>
            <option value="malacca">Malacca</option>
            <option value="negeri_sembilan">Negeri Sembilan</option>
            <option value="pahang">Pahang</option>
            <option value="penang">Penang</option>
            <option value="perlis">Perlis</option>
            <option value="selangor">Selangor</option>
            <option value="terengganu">Terengganu</option>
            <option value="kl">Kuala Lumpur</option>
            <option value="putrajaya">Putrajaya</option>
            </optgroup>
          </select> 
          <input type="text" name="pickuplocation" id="pickuplocation">

          <label for="dropofflocation">Drop Off Location</label>
          <input type="text" name="dropofflocation" id="dropofflocation">
        </fieldset>
        <button type="submit" id="submitBtn">Confirm Car Booking</button>
      </form>
    </div>
  </div>
-->
</body>

</html>



<?php
include('footer.php');
?>

<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/accordions.js"></script>

<script language="text/Javascript">
  cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
  function clearField(t) { //declaring the array outside of the
    if (!cleared[t.id]) { // function makes it static and global
      cleared[t.id] = 1; // you could use true and false, but that's more typing
      t.value = ''; // with more chance of typos
      t.style.color = '#fff';
    }
  }
</script>

<script type="text/javascript">
    $(function () {
        $('#pickupdate, #dropoffdate').datetimepicker({
        format : 'DD/MM/YYYY HH:mm',
        minDate: moment().add(0, 'h')
        });
    });
</script>

<script>
  $("#submitBtn").click(function (e) {
    e.preventDefault();
    var regName = /^[a-zA-Z]{1}[a-zA-Z ]*$/;
    var regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var regContactNum = /^[0-9]{3}-[0-9]{7,10}$/;

    if (!regName.test($('#name').val())) {
      swal({
          title: "Sorry!",
          text: "Please enter your name",
          icon: "warning",
          button: "OK"
      });
      return false;
    } else if (!regEmail.test($('#mail').val())) {
      swal({
          title: "Sorry!",
          text: "Please enter your email",
          icon: "warning",
          button: "OK"
      });
      return false;
    } else if (!regContactNum.test($('#cn').val())) {
      swal({
          title: "Sorry!",
          text: "Please enter your contact number with format: 012-3456789",
          icon: "warning",
          button: "OK"
      });
      return false;
    } else if ($('#pickupdate').val() == "") {
      swal({
          title: "Sorry!",
          text: "Please select your pickup date and time",
          icon: "warning",
          button: "OK"
      });
      return false;
    } else if ($('#dropoffdate').val() == "") {
      swal({
          title: "Sorry!",
          text: "Please select your dropoff date and time",
          icon: "warning",
          button: "OK"
      });
      return false;
    } else if ($('#pickuplocation').val() == "") {
      swal({
          title: "Sorry!",
          text: "Please enter your pickup location",
          icon: "warning",
          button: "OK"
      });
      return false;
    } else if ($('#dropofflocation').val() == "") {
      swal({
          title: "Sorry!",
          text: "Please enter your dropoff location",
          icon: "warning",
          button: "OK"
      });
      return false;
    } else {
      swal({
        title: "Booking Successfully!",
        text: "Thank you for your support. We will contact you soon.",
        icon: "success",
        button: "OK"
      }).then((value) => {
        $("#bookingForm").submit();
      });

      // $.ajax({
      //     type: "POST",
      //     data: {
      //       name: $("#name").val(),
      //       email: $("#mail").val(),
      //       contact_number: $("#cn").val(),
      //       pickupdate: $("#pickupdate").val(),
      //       dropoffdate: $("#dropoffdate").val(),
      //       pickuplocation: $("#pickuplocation").val(),
      //       dropofflocation: $("#dropofflocation").val()
      //     },
      //     url: "sendMail.php",
      //     success: function(data) {
      //         console.log(data);
      //         swal({
      //           title: "Booking Successfully!",
      //           text: "Thank you for your support. We will contact you soon.",
      //           icon: "success",
      //           button: "OK"
      //         }).then((value) => {
      //           $("#bookingForm").submit();
      //         });
      //     }

      // });
      
      
    }
  });
</script>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

</body>

</html>