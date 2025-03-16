<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
@section('title', 'VVVvArunCloudWhiz')
</head>
<body>
  @extends('header')

  @section('content')


  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{ asset ('images/hero-bg.jpg')}}" alt="" data-aos="fade-in">

      <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h2 style="color:white;font-weight: bold;">ARUN M L </h2>
        <p style="color:rgb(252, 247, 248));font-weight: bold;">I'm <span class="typed" data-typed-items="AWS Certified Solutions Architect, Microsoft Certified: Azure Administrator Associate, Cyber Law Advisor, Indian Air Force Veteran Soldier" style="color:rgb(252, 252, 252);font-weight: bold;"></span><span class="typed-cursor typed-cursor--blink"></span></p>
       <!------ <div class="social-links">
          <a href="#"><i class="bi bi-twitter-x"></i></a>
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
        </div> --------------->
      </div>

    </section><!-- /Hero Section -->

  </main>

  

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader 
  <div id="preloader"></div>-->

  @endsection

</body>
</html>
