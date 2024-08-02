<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Font Awesome CSS -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="logosji" src="{{ asset('assets/images/logosji.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('class-list') }}">Daftar Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="bendera" src="{{ asset('assets/images/indonesia.png') }}" alt="">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#"><img src="{{ asset('assets/images/indonesia.png') }}" alt="Indonesia" class="dropdown-flag"> Indonesia</a></li>
                        <li><a class="dropdown-item" href="#"><img src="{{ asset('assets/images/jepang.jpg') }}" alt="Jepang" class="dropdown-flag"> Jepang</a></li>
                        <!-- Tambahkan bendera lain sesuai kebutuhan -->
                    </ul>
                </div>
            </div>
        </div>
    </nav>
   <section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col text-center text-lg-start">
                <h1>Empowering Excellence through Training and Consulting</h1>
                <p>Our expert training and consulting solutions pave the way for your organization's success by driving continuous improvement, innovation, and exceptional performance.</p>
            </div>
            <div class="col text-center">
                <img class="banner rounded-1" src="{{ asset('assets/images/banner.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>


<section class="bg-grey my-5 py-5">
  <div class="container text-center">
    <div class="row">
      <h2 class="mb-5">Our Partner</h2>
      <div class="d-flex justify-content-between">
        <img class="logo-partner" src="{{ asset('assets/images/lpk.png') }}" alt="">
        <img class="logo-partner" src="{{ asset('assets/images/multi.png') }}" alt="">
        <img class="logo-partner" src="{{ asset('assets/images/sbi.png') }}" alt="">
        <img class="logo-partner" src="{{ asset('assets/images/logo-irson.png') }}" alt="">
        <img class="logo-partner" src="{{ asset('assets/images/BHJ.png') }}" alt="">
      </div>
    </div>
  </div>
</section>



    <section class="my-5 py-5">
      <div class="container text-center">
          <div class="row align-items-center">
              <div class="col-lg-6 text-start">
                  <h1>Proving Excellence Through Training & Consulting</h1>
                  <p>Increasing organizational productivity, and driving sustainable growth. Our success stories</p>
              </div>
              <div class="col-lg-6">
                  <div class="row">
                      <div class="col-6">
                          <h1>20+</h1>
                          <p>Perusahaan Magang</p>
                      </div>
                      <div class="col-6">
                          <h1>20+</h1>
                          <p>Perusahaan Magang</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-6">
                          <h1>20+</h1>
                          <p>Perusahaan Magang</p>
                      </div>
                      <div class="col-6">
                          <h1>20+</h1>
                          <p>Perusahaan Magang</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

    <section class="bg-grey my-5 py-5">
      <div class="container text-start">
        <div class="row">
          <h1>Professional Development Program</h1>
            <p>Experiental and transformational sales and leadership training</p>
            <div class="container text-center">
              <div class="row align-items-center">
                <div class="d-flex align-items-start">
                <div class="col">
                  <div class="container my-2">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link text-white active" id="v-pills-home-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            Sales Training 
                            <span class="icon-circle">
                                <i class="fas fa-arrow-right" style="color: black"></i>
                            </span>
                        </button>
                        <button class="nav-link" id="v-pills-profile-tab" style="color: black" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            Private Training On-Site 
                            <span class="icon-circle">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </button>
                        <button class="nav-link" id="v-pills-messages-tab" style="color: black" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            Leadership Training 
                            <span class="icon-circle">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </button>
                        <button class="nav-link" id="v-pills-settings-tab" style="color: black" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            Corporate Training 
                            <span class="icon-circle">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </button>
                        
                    </div>
                </div>
                </div>
                <div class="col card-program">
                  <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                      <img src="{{ asset('assets/images/pertanian.jpg') }}" alt="" class="img-program rounded-1" >
                      <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                  </div>
                </div>
                
                 
                 
                </div>
              </div>
            </div>

        </div>
      </div>
      
    </section>

    <section class="my-5 py-5">
      <div class="container text-start">
        <div class="row">
          <h1 class="mb-3">Testimonials and Feedback</h1>

          <div class="col-md-4 mb-3 " >
            <div class="card p-3 testimoni" style="max-width: 540px;">
              <div class="row g-0" >
                <div class="col-md-4">
                  <img src="{{ asset('assets/images/adit.jpg') }}" class="img-fluid rounded-circle" alt="...">
                </div>
                <div class="col-md-8" >
                  <div class="card-body">
                    <h5 class="card-title">Adit</h5>
                    <p class="card-text"><small class="text-body-secondary">adit@gmail.com</small></p>
                  </div>
                </div>
              </div>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="card p-3 testimoni" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{ asset('assets/images/adit.jpg') }}" class="img-fluid rounded-circle" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Adit</h5>
                    <p class="card-text"><small class="text-body-secondary">adit@gmail.com</small></p>
                  </div>
                </div>
              </div>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="card p-3 testimoni" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{ asset('assets/images/adit.jpg') }}" class="img-fluid rounded-circle" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Adit</h5>
                    <p class="card-text"><small class="text-body-secondary">adit@gmail.com</small></p>
                  </div>
                </div>
              </div>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!--Site Footer One Start-->
<footer class="site-footer bg-footer mt-5 py-5 " >
  <div class="container">
      <div class="site-footer__one-top">
          <div class="row">
              <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                  <div class="footer-widget__column footer-widget__about">
                      <div class="footer-widget__logo">
                          <a href="/"><img class="logofooter" src="{{ asset('assets/images/logosji.png') }}" alt=""></a>
                      </div>
                      <p class="footer-widget__text">Pendidikan dan Pelatihan Bahasa dan Budaya Jepang. </p>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                  <div class="footer-widget__column footer-widget__explore clearfix" id="layanankami">
                      <h3 class="footer-widget__title">Layanan Kami</h3>
                      <ul class="footer-widget__explore-list list-unstyled">
                        <li><a class="text-decoration-none" style="color: black"><i class="fas fa-calendar-alt"></i> Senin - Jumat</a></li>
                        <li><a class="text-decoration-none" style="color: black"><i class="fas fa-clock"></i> 08.00 - 16.00</a></li>
                          
                      </ul>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="footer-widget__column footer-widget__contact">
                    <h3 class="footer-widget__title">Contact</h3>
                    <ul class="list-unstyled footer-widget__contact-list">
                      <li>
                        <div class="contact-item">
                            <i class="fas fa-phone-square-alt"></i>
                            <p><a class="text-decoration-none" style="color: black" href="tel:+6281333270022">0813-3327-0022</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <p><a class="text-decoration-none" style="color: black" href="mailto:sahabat.jepang.marketing@gmail.com">sahabat.jepang.marketing@gmail.com</a></p>
                        </div>
                    </li>
                        <li>
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>Jl. Gracia Land Ruko A1-A3, RT.008/RW.018, Tani Swah, Pepe, Kec. Sedati, Kabupaten Sidoarjo, Jawa Timur 61253</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
              <div class="footer-widget__column footer-widget__support">
                  <h3 class="footer-widget__title">Official Account</h3>
                  <div class="site-footer__social">
                      <a href="#" class="clr-youtube text-decoration-none"><i class="fab fa-youtube"></i></a>
                      <a href="#" class="clr-tiktok text-decoration-none"><i class="fab fa-tiktok"></i></a>
                      <a href="#" class="clr-fb text-decoration-none"><i class="fab fa-facebook-square"></i></a>
                      <a href="#" class="clr-ins text-decoration-none"><i class="fab fa-instagram"></i></a>
                  </div>
                  <br>
              </div>
          </div>
          
          </div>
      </div>
  </div>
</footer>
<!--Site Footer One End-->

<!--Site Footer Bottom Start-->
<div class="site-footer-bottom">
  <div class="container d-flex justify-content-center">
      <div class="row">
          <div class="col-xl-12">
              <div class="site-footer-bottom__inner">
                  <div class="site-footer-bottom__left py-2">
                      <p>© Copyright 2024 ❤ - by <a class="text-decoration-none" >Sahabat Jepang Indonesia</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!--Site Footer Bottom End-->


    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
