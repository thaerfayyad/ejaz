<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ejaz</title>
  <meta content="نتميز عن غيرنا بسرعة إنجاز المعاملات وسرعة وصول العاملة إليكم  " name="description">
  <meta content="طباخ ,  سائق  ,ممرض,مربية اطفال , عامل نظافة,حارس امن  , عاملات منزلية" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('front/assets/img/logo.png') }}" rel="icon">
  <link href="{{ asset('front/assets/img/logo.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.cs') }}s" rel="stylesheet">

  <link href="{{ asset('front/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <link href="{{ asset('front/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">


  <link href="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


  <link href="{{ asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

  <link href="{{ asset('front/assets/css/bootstrap-rtl.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('front/assets/css/style.css') }}" rel="stylesheet">
<style>
    #contact  .social-links a {
        display: inline-block;
        background: #FAFAFA;
        color: var(--miancolor);
        line-height: 1;
        margin-right: 4px;
        border-radius: 50%;
        width: 36px;
        height: 36px;
        transition: 0.3s;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        }
        #contact  .social-links a i {
        line-height: 0;
        font-size: 16px;
        }
        #contact  .social-links a:hover {
        background: var(--miancolor);
        color: #fff;
        }
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('front/assets/img/logo.png') }}" class="mr-2" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">الصفحة الرئيسية</a></li>
          <li><a class="nav-link scrollto" href="#about">من نحن</a></li>
          <li><a class="nav-link scrollto" href="#service">الخدمات</a></li>
          <li><a class="nav-link scrollto" href="#employment">العمالة المستهدفة</a></li>
          <li><a class="nav-link scrollto" href="#contact1">التواصل معنا</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!--  <div>
        <a href="#" class="btn-get-started scrollto mt-0 login " data-toggle="modal" data-target="#user">
          <span>تسجيل الدخول</span>
        </a>
        <a href="#" class="btn-get-started scrollto mt-0 register " data-toggle="modal" data-target="#user">
          <span>حساب جديد</span>
        </a>
      </div> -->
      <div>
        <a href="{{ route('auth.login-show') }}" class="btn-get-started scrollto mt-0 login ">
          <span>تسجيل الدخول</span>
        </a>

      </div>
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!--  <section id="hero" class="hero d-flex align-items-center ">

    <div class="container mt-5">
      <div class="row d-flex justify-content-center text-center">

        <div class="col-lg-8 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">خيارك الافضل </h2>
          <h1 data-aos="fade-up" data-aos-delay="400"> نتميز عن غيرنا بسرعة إنجاز المعاملات وسرعة وصول العاملة إليكم
          </h1>
        </div>
        <div class="col-lg-5 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('front/assets/img/shape (2).svg') }}" class="img-fluid animation01" alt="">
        </div>
      </div>
    </div>

  </section> -->

  <!-- End Hero -->



  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">ما يميزنا </h1>
          <!--  <h1 data-aos="fade-up" data-aos-delay="400"> نتميز عن غيرنا بسرعة إنجاز المعاملات وسرعة وصول العاملة إليكم -->
          <ul class="list-unstyled mt-2" data-aos="fade-up" data-aos-delay="150">
            <li> <i class="bi bi-check "></i> التواصل الفعال</li>
            <li> <i class="bi bi-check "></i> خدمة العملاء 24 ساعة</li>
            <li> <i class="bi bi-check "></i> طاقم عمل مٌدرب</li>
            <li> <i class="bi bi-check "></i> توفر مترجم </li>
            <li> <i class="bi bi-check "></i> سير ذاتية بخيارات متعددة </li>
            <li> <i class="bi bi-check "></i> حل المشكلات خلال مدة العقد (سنتين)</li>
            <li> <i class="bi bi-check "></i> الوصول خلال فترة وجيزة </li>
            <li> <i class="bi bi-check "></i> سرعه الانجاز والتواصل الفعال خلال مده العقد معك</li>
          </ul>
        </div>
        <div class="col-md-6 hero-img aos-init aos-animate p-md-5" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('front/assets/img/people.svg') }}" class="img-fluid animation01" alt="">
        </div>
      </div>
    </div>

  </section>


  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row gx-0">
          <div class="col-lg-6 mt-lg-0 mt-3 d-flex flex-column justify-content-center" data-aos="zoom-in"
            data-aos-delay="200">
            <img src="{{ asset('front/assets/img/about.svg') }}" class="img-fluid p-4" alt="">
          </div>
          <div class="col-lg-6  d-flex flex-column justify-content-center">
            <div class=" text-right" data-aos="fade-up" data-aos-delay="200">
              <h2>من نحن <span></span></h2>
              <p>   {{ $about_us->value }} </p>
            </div>


          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= service Section ======= -->
    <section id="service" class="service">

      <div class="container" data-aos="fade-up">
        <div class="row d-flex justify-content-center">
          <div class="col-md-9">
            <header class="section-header text-center">
              <h2>خدماتنا</h2>
              <p>خدمات مميزة بتكاليف تنافسية </p>
            </header>
          </div>

          <div class="row no-gutters" data-aos="fade-up">

            <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
              <span>01</span>
              <h4>الاستقدام </h4>
              <p>متوفر لدينا استقدام من جميع الدول المتاحة حالياً، مدة الاستقدام تتراوح من 30 الى 45 يوم </p>
            </div>

            <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
              <span>02</span>
              <h4>توظيف عاملات شهري </h4>
              <p>متوفر توظيف شهري لعاملات على مستوى تدريب عالي</p>
            </div>

            <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
              <span>03</span>
              <h4> نقل خدمات </h4>
              <p>لدينا عمالة منزلية مدربة وجاهزة للتعاقد مدة سنتين</p>
            </div>

          </div>

        </div>



      </div>

    </section><!-- End Values Section -->



    <!-- ======= why Section ======= -->
    <section id="employment" class="employment ">
      <div class="container pr-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-md-9">
            <header class="section-header text-center">
              <h2>العمالة المستهدفة</h2>
              <p>خدمات مميزة بتكاليف تنافسية </p>
            </header>
          </div>
        </div>

        <div class="row">

           @foreach ($Services as $service )

            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                <img src="{{ $service->image_path }}" class="img-fluid" alt="">
                <div class="member-info">
                    <div class="member-info-content">
                    <h4> {{ $service->type }} <h4>
                    </div>
                </div>
                </div>
            </div>
           @endforeach



        </div>
      </div>
      </div>
    </section>

    <!--  <div class="feat" id="feat">
      <div class="container">
        <div class="row d-flex align-items-center">

          <div class="col-md-6 " data-aos="fade-up" data-aos-delay="200">
            <h2>ما يميزنا</h2>
            <ul class="list-unstyled">
              <li> <i class="bi bi-check "></i> توفر مترجم </li>
              <li> <i class="bi bi-check "></i> التواصل الفعال</li>
              <li> <i class="bi bi-check "></i> طاقم عمل مٌدرب</li>
              <li> <i class="bi bi-check "></i> خدمة العملاء 24 ساعة</li>
              <li> <i class="bi bi-check "></i> الوصول خلال فترة وجيزة </li>
              <li> <i class="bi bi-check "></i> سير ذاتية بخيارات متعددة </li>
              <li> <i class="bi bi-check "></i> حل المشكلات خلال مدة العقد (سنتين)</li>
              <li> <i class="bi bi-check "></i> سرعه الانجاز والتواصل الفعال خلال مده العقد معك</li>
            </ul>
          </div>
          <div class="col-lg-6 mt-lg-0 mt-3  p-5 d-flex flex-column justify-content-center" data-aos="zoom-in"
            data-aos-delay="200">
            <img src="{{ asset('front/assets/img/undraw_at_the_park_-2-e47.svg') }}" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </div> -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>الدول المتاحة</h2>
          <p>الدول المتاح استقطاب العمال منها</p>
        </header>

        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset('front/assets/img/1.png') }}" class="img-fluid" alt="">
              <h5 class="text-center mt-2">سيرلينكا</h5>
            </div>
            <div class="swiper-slide"><img src="{{ asset('front/assets/img/2.png') }}" class="img-fluid" alt="">
              <h5 class="text-center mt-2">الهند</h5>
            </div>
            <div class="swiper-slide"><img src="{{ asset('front/assets/img/3.png') }}" class="img-fluid" alt="">
              <h5 class="text-center mt-2">أثيوبيا</h5>
            </div>
            <div class="swiper-slide"><img src="{{ asset('front/assets/img/4.png') }}" class="img-fluid" alt="">
              <h5 class="text-center mt-2">اندونيسيا</h5>
            </div>
            <div class="swiper-slide"><img src="{{ asset('front/assets/img/5.png') }}" class="img-fluid" alt="">
              <h5 class="text-center mt-2">مصر</h5>
            </div>
            <div class="swiper-slide"><img src="{{ asset('front/assets/img/6.png') }}" class="img-fluid" alt="">
              <h5 class="text-center mt-2">غانا</h5>
            </div>
            <div class="swiper-slide"><img src="{{ asset('front/assets/img/7.png') }}" class="img-fluid" alt="">
              <h5 class="text-center mt-2">تونس</h5>
            </div>
            <div class="swiper-slide"><img src="{{ asset('front/assets/img/8.png') }}" class="img-fluid" alt="">
              <h5 class="text-center mt-2">المغرب</h5>
            </div>
            <div class="swiper-slide"><img src="{{ asset('front/assets/img/9.png') }}" class="img-fluid" alt="">
              <h5 class="text-center mt-2">الفبين</h5>
            </div>
            <div class="swiper-slide"><img src="{{ asset('front/assets/img/10.png') }}" class="img-fluid" alt="">
              <h5 class="text-center mt-2">أوغندا</h5>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Clients Section -->


    <!-- End why Section -->

    <!-- ======= About Section ======= -->
    <section id="contact1" class="contact1">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-9">
            <header class="section-header">
              <h2>تواصل معنا</h2>
              <p>يسُر موظفي خدمة العملاء مساعدتك والإجابة على كافة استفساراتك حول خدماتنا</p>
            </header>
          </div>
        </div>

        <div class="row  d-fle justify-content-center">
          <div class="col-lg-4 col-md-6 " data-aos="fade-up" data-aos-delay="200">
            <div class="info-box  mb-4">
              <i class="bi bi-envelope mb-2"></i>
              <h3>البريد الألكتروني</h3>
              <p> <a href="mailto:eejazcompany@gmail.com"
                  title="انقر للتواصل من خلال الايميل"> {{ $email->value }}</a></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 " data-aos="fade-up" data-aos-delay="300">
            <div class="info-box  mb-4">
              <i class="bi bi-whatsapp mb-2"></i>
              <h3>الواتس اب</h3>
              <p><a href="https://wa.me/{{ $whatsapp->value }}" title="انقر للتواصل">{{ $whatsapp->value }}</a> <span>
                  |</span> <a href="https://wa.me/{{ $whatsapp2->value }}" title="انقر للتواصل"> {{ $whatsapp2->value }}</a></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 " data-aos="fade-up" data-aos-delay="300">
            <div class="info-box  mb-4">
              <i class="bi bi-geo-alt mb-2"></i>

              <h3>العنوان</h3>
              <p> {{ $address->value }}  </p>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= contact ======= -->
    <section class="contact mt-3" id="contact">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-4 d-flex justify-content-center" data-aos="zoom-out" data-aos-delay="200">
            <a href="#"> <img src="{{ asset('front/assets/img/logo.png') }}" width="200px" alt="logo"></a>
          </div>
          <div class="social-links text-center mt-4">
            <a href="{{ $twitter->value }}" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="{{ $facebook->value }}" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="{{ $instagram->value }}" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="{{ $youtube->value }}" target="_blank" class="instagram"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>
    </section>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        © جميع الحقوق محفوظة لصالح شركة ايجاز
      </div>
    </div>
    </div>
  </footer><!-- End Footer -->




  <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <a type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </a>
        </div>
        <div class="modal-body">
          <div class="d-flex justify-content-center align-items-center">

            <div class="card">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item text-center">
                  <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">تسجيل الدخول</a>
                </li>
                <li class="nav-item text-center">
                  <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">حساب جديد</a>
                </li>

              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="form px-4 pt-5">
                    <input type="text" name="" class="form-control" placeholder="Email or Phone">
                    <input type="text" name="" class="form-control" placeholder="Password">
                    <button class="btn btn-success btn-block w-100">تسجيل الدخول</button>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                  <div class="form px-4">

                    <input type="text" name="" class="form-control" placeholder="Name">

                    <input type="text" name="" class="form-control" placeholder="Email">

                    <input type="text" name="" class="form-control" placeholder="Phone">

                    <input type="text" name="" class="form-control" placeholder="Password">

                    <button class="btn btn-success btn-block w-100">انشاء حساب جديد</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <a href="https://wa.me/{{ $whatsapp->value }}" title="انقر للتواصل واتساب" target="_blank" class="whats-icon"><i
      class="bx bxl-whatsapp"></i> </a>
  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('front/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('front/assets/js/main.js') }}"></script>

</body>

</html>
