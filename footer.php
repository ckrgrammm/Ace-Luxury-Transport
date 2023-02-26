 <!-- Footer Starts Here -->



  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>
            Copyright © 2023 Ace Luxury Transport Services
          </p>
        </div>
      </div>
    </div>
  </div>

  <script>
  $("#form-submit-footer").click(function (e) {
    e.preventDefault();
    var regName = /^[a-zA-Z]{1}[a-zA-Z ]*$/;
    var regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var regContactNum = /^[0-9]{3}-[0-9]{7,10}$/;

    if (!regName.test($('#name_footer_contact').val())) {
      swal({
          title: "Sorry!",
          text: "Please enter your name",
          icon: "warning",
          button: "OK"
      });
      return false;
    } else if (!regEmail.test($('#email_footer_contact').val())) {
      swal({
          title: "Sorry!",
          text: "Please enter your email",
          icon: "warning",
          button: "OK"
      });
      return false;
    } else if ($('#message_footer_contact').val() == "") {
      swal({
          title: "Sorry!",
          text: "Please enter your message",
          icon: "warning",
          button: "OK"
      });
      return false;
    } else {
      swal({
        title: "Successfully Sent",
        text: "Thank you for your respond. We will contact you soon.",
        icon: "success",
        button: "OK"
      }).then((value) => {
        $(".footer-contact").submit();
      });
      
    }
  });
</script>