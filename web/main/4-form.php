<?php
// require 'db.php';
?>
<!--

Integrates Sign up form

-->

<section class="row d-flex flex-column align-items-center" id="form">

  <div class="form-area col-12 col-md-6 flex-wrap">
    <img class="form-icon" src="img/form.png" alt="">
    <h2>Contact Kawaii cult !</h2>
  </div>

  <p class="col-12  col-md-5 py-5">
    向へ表注得じたる者乗りい治岡ね詳省ミ待西コユリ市球いれげえ岡野テハワタ域極ね料薬ン権歳念ゅゆスお末72写っ暮並康町帰歴せよぎご。綿ろせそこ世7来みえざ書意ル渉位チレヨヌ勝4光ハノワツ筆由真じしべを床天はうえル月現週タユ周呆實帖ぴ。
  </p>

  <form class="col-12 flex-wrap" action="" method="post">

    <div class="d-flex flex-column col-12">
      <input type="name" name="name" id="inputName" class="form-control" placeholder="Your Name" required>

      <input class="form-control"  id="form_email" type="email" name="email" placeholder="Your Email" required="required" data-error="Valid email is required.">

      <input type="name" name="subject" id="inputSubject" class="form-control" placeholder="Subject Line" required>

      <textarea class="form-control" name="message" id="inputMessage" placeholder="Your message" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary" name="submit">
      Submit!
    </button>
  </form>

<?php
  if( (isset($_POST['name']) && !empty($_POST['name']))
  && (isset($_POST['email']) && !empty($_POST['email']))
  && (isset($_POST['message']) && !empty($_POST['message']))
  && (isset($_POST['subject']) && !empty($_POST['subject'])) ){

  	$name = $_POST['name'];
  	$email = $_POST['email'];
  	$subject = $_POST['subject'];
  	$message = $_POST['message'];

	  $to = "cookiesandwifi404@gmail.com";
  	$headers = "From : " . $email;

	  if( mail($to, $subject, $message, $headers)){
		  echo "Message sent successfully, we will get back to you soon :3";
?>
  <!-- display toast alert when message submits successfully -->
  <div class="toast alert alert-success alert-dismissible fade show" role="alert">
    <div class="">
      <strong>Message sent successfully!</strong>
      We will get back to you soon
    </div>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php
	}
}
?>
</section>
