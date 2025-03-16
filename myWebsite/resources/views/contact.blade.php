<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
@section('title', 'ArunCloudWhiz')
</head>
<body>
  @extends('header')

  @section('content')

<!-- Contact Section -->
<section id="contact" class="contact section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">

    <div class="col-md-6">
      <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
        <i class="icon bi bi-geo-alt flex-shrink-0"></i>
        <div>
          <h3>Address</h3>
          <p>Mysuru, Karnataka</p>
        </div>
      </div>
    </div><!-- End Info Item -->

    <div class="col-md-6">
      <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
        <i class="icon bi bi-telephone flex-shrink-0"></i>
        <div>
          <h3>Call Me</h3>
          <p>+91 7087046932</p>
        </div>
      </div>
    </div><!-- End Info Item -->

    <div class="col-md-6">
      <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
        <i class="icon bi bi-envelope flex-shrink-0"></i>
        <div>
          <h3>Email Us</h3>
          <p>aarjaappu@outlook.com</p>
        </div>
      </div>
    </div><!-- End Info Item -->

    <div class="col-md-6">
      <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
        <i class="icon bi bi-share flex-shrink-0"></i>
        <div>
          <h3>Social Profiles</h3>
          <div class="social-links">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-skype"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div><!-- End Info Item -->

  </div>

  <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
    <div class="row gy-4">

      <div class="col-md-6">
        <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
      </div>

      <div class="col-md-6 ">
        <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
      </div>

      <div class="col-md-12">
        <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
      </div>

      <div class="col-md-12">
        <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
      </div>

      <div class="col-md-12 text-center">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>

        <button type="submit">Send Message</button>
      </div>

    </div>
  </form><!-- End Contact Form -->

</div>

</section><!-- /Contact Section -->

  @endsection

</body>
</html>
