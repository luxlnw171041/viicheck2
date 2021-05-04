<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ViiCHECK ประเทศไทย</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{ url('img/logo/logo_x-icon.png')}}" type="image/x-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('Medilab/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Medilab/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Medilab/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('Medilab/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Medilab/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Medilab/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Medilab/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('Medilab/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('Medilab/css/style.css') }}" rel="stylesheet">
  
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact.viicheck@gmail.com">contact.viicheck@gmail.com</a>
        <i class="bi bi-phone"></i> <a href="tel:020277856">020277856</a> 
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="https://www.facebook.com/ViiCheck-100959585396310" target="bank"><i class="fab fa-facebook-square text-primary"></i></a>
        <a href="https://line.me/R/ti/p/%40702ytkls" target="bank"><i class="fab fa-line text-success"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="border-bottom: 2px solid red;">
    <div class="container d-flex align-items-center" >
      <div class="row">
        <div class="col-3">
            <a href="{{URL::to('/')}}"><img width="70%" src="{{ asset('/img/logo/VII-check-LOGO-W-v1.png') }}"></a>
        </div>
      </div>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <!-- <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav> -->
      <!-- .navbar -->
      <div style="padding-top: 20px;">
          <a href="https://market.viicheck.com/login" class="appointment-btn scrollto"><span class="d-none d-md-inline">เข้าสู่ระบบ</a>
      </div>
      
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>ยินดีต้อนรับสู่ ViiCHECK</h1>
      <h2>ร่วมกันสร้างสังคมแห่งการช่วยเหลือ แบ่งปันความสุขและมิตรภาพที่ดีกับ "วีเช็ค"</h2>
      <a style="font-size: 18px" href="https://market.viicheck.com/register_car/create" class="btn-get-started scrollto">เริ่มกันเลย &nbsp;<i class="far fa-smile-wink"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
                <img width="100%" src="{{ asset('/img/more/poster-v4-good-Vii-v3.jpg') }}" alt="">
              <div class="text-center">
                <br>
                <a href="{{ asset('/img/more/poster-v4-good-Vii-v3.jpg') }}" class="more-btn galelry-lightbox">ดูเพิ่มเติม <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fas fa-car-crash"></i>
                    <br>
                    <h4>เหตุฉุกเฉิน</h4>
                    <p>เมื่อเกิดเหตุฉุกเฉินไม่ต้องกังวัลใจ แค่เพียงกดปุ่ม <b>"SOS"</b> ก็มีเบอร์ที่จำเป็นแสดงขึ้นมา ไม่ว่าจะเป็น <u>เหตุด่วนเหตุร้าย</u> <u>ไฟไหม้รถ</u> หรือแม้กระทั่ง <u>ตำรวจท่องเที่ยว</u> ทำให้คุณขับขี่ได้สบายใจหายห่วง</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fas fa-id-card-alt"></i>
                    <br>
                    <h4>ติดต่อเจ้าของรถ</h4>
                    <p>ในบางครั้งคุณอาจจำเป็นต้องจอดรถซ้อนคันกับรถของคนอื่น ทำให้คุณไม่สบายใจเขาจะมาเข็นรถของคุณจะไปชนอะไรหรือไม่ เพียงแค่<u>ลงทะเบียนกับเราแล้วนำสติกเกอร์ไปติดที่รถของคุณ</u>เพียงเท่านี้คุณก็สามารถเดินเที่ยวได้อย่างสบายใจ</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fas fa-user-lock"></i>
                    <h4>เก็บรวบรวมข้อมูล</h4>
                    <p>คุณสามารถเก็บรวบรวมข้อมูลของคุณไว้ที่เดียวได้ ไม่ว่าจะเป็น วันหมดอายุ พรบ./ประกัน <u>เมื่อใกล้วันครบกำหนดระบบจะแจ้งเตือนคุณ</u> หรือแม้กระทั่งใบขับขี่เพื่อง่ายต่อการแสดงในกรณีที่คุณลืม และหายห่วงได้เลยเพราะเรา<u>รักษาความเป็นส่วนตัวของผู้ใช้บริการ</u></p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-5" style="padding:20px;">
                <div style="border: 1px solid red; border-radius: 10px;" class="video-box d-flex justify-content-center align-items-stretch position-relative">
                  <a href="https://youtu.be/eHT1gJ0-FQg" class="glightbox play-btn mb-4"></a>
                </div>
              </div>
              <div class="col-7" style="padding:20px;">
                <br>
                <div  class="icon-boxes d-flex flex-column align-items-stretch justify-content-center ">
                  <h3>Top4 ปัญหาโลกแตกเกี่ยวกับการใช้รถใช้ถนน</h3>
                  <p>ใครที่เดินทางไปไหนมาไหนบ่อยๆ โดยเฉพาะอย่างยิ่งในเขตเมืองหรือเขตชุมชน เชื่อว่าต้องเคยเจอปัญหาต่อไปนี้มาแล้วกันทั้งนั้น...</p>

                  <div class="icon-box">
                    <div class="icon"><i class="fas fa-house-damage"></i></div>
                    <h4 class="title"><a href="">รถจอดขวางหน้าบ้าน</a></h4>
                    <p class="description">ใครที่อาศัยอยู่ในเขตชุมชน เช่น ตลาด ย่านการค้า หรือบ้านที่รั้วบ้านติดๆกันและมีบ้านทั้งสองฝั่งจะต้องเคยเจอมาแล้วแน่นอน วันดีคืนดีมีใครก็ไม่รู้มาจอดรถขวางหน้าบ้าน จะเอารถออกก็ไม่ได้ จะไปไหนก็ไม่ได้ จะตามตัวเจ้าของรถก็ไม่รู้จะไปตามที่ไหน ซึ่งกรณีเช่นนี้ก็เป็นประเด็นให้เห็นทางโซเชียลบ่อยครั้ง</p>
                  </div>

                  <div class="icon-box">
                    <div class="icon"><i class="fas fa-road"></i></div>
                    <h4 class="title"><a href="">ถนนแคบ วิ่งได้แค่สองเลน แต่ดันจอดรถขวางเลน</a></h4>
                    <p class="description">ปัญหาที่พบได้บ่อยในย่านชุมชนเล็กๆที่ถนนเป็นแบบเลนสวน หลายคนมักจอดรถขวางเลนเพื่อลงไปซื้อของ ทำให้คันอื่นๆต้องคอยหักหลบ จนทำให้รถติด รถวิ่งลำบาก </p>
                  </div>

                  <div class="icon-box">
                    <div class="icon"><i class="fas fa-ban"></i></div>
                    <h4 class="title"><a href="">จอดซ้อนคันแต่ลืมปลดเกียร์ว่างและเอาเบรคมือลง</a></h4>
                    <p class="description">เคยไหม? เวลาไปห้าง ซื้อของเสร็จกำลังจะกลับ แต่ดันมีรถมาจอดซ้อนคันข้างหน้า จะเข็นก็เข็นไม่ได้เพราะใส่เกียร์ P กับเบรคมือเอาไว้ ห้างก็ตั้งใหญ่ ลูกค้ามีไม่รู้กี่คน ไม่รู้จะไปตามได้ที่ไหน หรือบางทีถึงให้ประชาสัมพันธ์ประกาศตามตัวให้ก็ใช่ว่าจะเจอ เพราะบางครั้งเจ้าของรถก็แค่มาจอดรถทิ้งไว้แล้วไปทำธุระที่อื่น บางคนหายไปเป็นชั่วโมง ก็ต้องเสียเวลารอ</p>
                  </div>

                  <div class="icon-box">
                    <div class="icon"><i class="fas fa-car-crash"></i></div>
                    <h4 class="title"><a href="">รถโดนกรีด ขูด หรือทุบกระจก</a></h4>
                    <p class="description">มักเกิดขึ้นในที่ที่มีรถจอดเยอะๆ หรือที่ที่จอดซ้อนคันได้ จอดรถทิ้งไว้ กลับมาอีกทีรถก็มีริ้วรอยซะแล้ว ถ้าบริเวณนั้นไม่มีกล้องวงจรปิดก็ไม่รู้จะไปตามตัวคนทำได้จากที่ไหน หรือบางครั้งเราไม่ใช่เจ้าของรถ แต่ผ่านไปเห็นรถคนอื่นโดน ก็ไม่รู้จะไปตามเจ้าของรถให้มารับทราบเรื่องยังไงดี</p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-car-alt"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
              <p>ลงทะเบียนแล้ว</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="fas fa-car-crash"></i>
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>แจ้งเตือนหาเจ้าของรถ</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-gift"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>ได้รับของรางวัล</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="far fa-laugh-squint"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>พึงพอใจ</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>ขั้นตอนการลงทะเบียน</h2>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <!-- ข้อดีของ VMOVE ซ่อนไว้ -->
          <div class="col-lg-4 col-md-4 d-none">
            <div class="gallery-item">
              <a href="{{ asset('/img/more/Advantages.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset('/img/more/Advantages.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <!-- ข้อดีของ VMOVE ซ่อนไว้ -->

          <div class="col-lg-4 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('/img/ขั้นตอนการลงทะเบียน/1 how to ลงทะเบียน 1920x1080-03.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset('/img/ขั้นตอนการลงทะเบียน/1 how to ลงทะเบียน 1920x1080-03.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('/img/ขั้นตอนการลงทะเบียน/2 how to ลงทะเบียน 1920x1080-01.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset('/img/ขั้นตอนการลงทะเบียน/2 how to ลงทะเบียน 1920x1080-01.jpg') }}" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('/img/ขั้นตอนการลงทะเบียน/3 how to ลงทะเบียน 1920x1080-02.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset('/img/ขั้นตอนการลงทะเบียน/3 how to ลงทะเบียน 1920x1080-02.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('/img/ขั้นตอนการลงทะเบียน/4 how to ลงทะเบียน 1920x1080-04.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset('/img/ขั้นตอนการลงทะเบียน/4 how to ลงทะเบียน 1920x1080-04.jpg') }}" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('/img/ขั้นตอนการลงทะเบียน/5 how to ลงทะเบียน 1920x1080-05.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset('/img/ขั้นตอนการลงทะเบียน/5 how to ลงทะเบียน 1920x1080-05.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('/img/ขั้นตอนการลงทะเบียน/6-how-to-ลงทะเบียน-1920x1080-06-v3.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset('/img/ขั้นตอนการลงทะเบียน/6-how-to-ลงทะเบียน-1920x1080-06-v3.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>บริการของเรา</h2>
          
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 align-items-stretch">
            <a href="https://line.me/R/ti/p/%40702ytkls">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-id-card-alt"></i></div>
                <h4><a href="https://line.me/R/ti/p/%40702ytkls">ติดต่อเจ้าของรถ</a></h4>
                <p>ติดต่อเจ้าของรถได้ง่ายผ่าน Line</p>
                <p>เพียงแค่สแกน QR-CODE บนสติ๊กเกอร์</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6  align-items-stretch mt-4 mt-md-0">
            <a href="https://line.me/R/ti/p/%40702ytkls">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-car-crash"></i></div>
                <h4><a href="https://line.me/R/ti/p/%40702ytkls">เหตุฉุกเฉิน</a></h4>
                <p>ติดต่อแจ้งเหตุฉุกเฉิน 24 ชั่วโมง</p>
                <p>เพียงแค่กดปุ่มก็จะมีเบอร์ที่จำเป็นแสดงขึ้นมา</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6  align-items-stretch mt-4 mt-lg-0">
            <a href="https://line.me/R/ti/p/%40702ytkls">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-exclamation-triangle"></i></div>
                <h4><a href="https://line.me/R/ti/p/%40702ytkls">แจ้งเตือน พรบ./ประกัน</a></h4>
                <p>หายห่วงเรื่องลืมต่ออายุ พรบ./ประกัน</p>
                <p>ระบบจะแจ้งเตือนเมื่อใกล้วันครบกำหนด</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 align-items-stretch mt-4">
            <a href="https://market.viicheck.com/middle_price_car">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-clipboard-check"></i></div>
                <h4><a href="https://market.viicheck.com/middle_price_car">เช็คราคากลางกรมขนส่ง</a></h4>
                <p>เมื่อคิดจะขายหรือขอสินเชื่อ</p>
                <p>ก็สามารถเช็คราคากลางได้ตลอด</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6  align-items-stretch mt-4">
            <a href="https://line.me/R/ti/p/%40702ytkls">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-bullhorn"></i></div>
                <h4><a href="https://line.me/R/ti/p/%40702ytkls">โปรโมชั่นเกี่ยวกับยานพาหนะ</a></h4>
                <p>โปรโมชั่นมากมายที่รอให้คุณใช้บริการ</p>
                <p>รีบเลยก่อนหมดเวลา !</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6  align-items-stretch mt-4">
            <a href="https://line.me/R/ti/p/%40702ytkls">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-user-lock"></i></div>
                <h4><a href="https://line.me/R/ti/p/%40702ytkls">เก็บรวบรวมข้อมูล</a></h4>
                <p>รวบรวมข้อมูลของคุณไว้ที่เดียว สะดวก รวดเร็ว ง่ายต่อการใช้งาน</p>
                <p>ที่สำคัญปลอดภัยด้วยการรักษาความเป็นส่วนตัวของผู้ใช้บริการ</p>
              </div>
            </a>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="credits">
          <div class="row">
            <div class="col-1">
                <p id="Certificate-banners"></p>
            </div>
            <!-- <div class="col-1">
                <img width="100%" src="{{ asset('/img/logo/VII-check-LOGO-W-v1.png') }}">
            </div> -->
            <div class="col-1">
                <img width="100%" src="{{ asset('/img/logo/GreenLogo.png') }}">
            </div>
            <div class="col-1">
                <img width="100%" src="{{ asset('/img/logo/js100.png') }}">
            </div>
          </div>
        </div>
        <div class="copyright">
          <div class="row">
            <div class="col-12">
              <div class="row">
                  <div class="col-9">
                    <br>
                    WWW.ViiCHECK.COM 
                    &nbsp;&nbsp;
                    <a class="link" style="font-size: 15px;" target="bank" href="{{ url('/privacy_policy') }}"><b>นโยบายเกี่ยวกับข้อมูลส่วนบุคคล</b></a>
                    &nbsp;&nbsp;
                    <a class="link" style="font-size: 15px;" target="bank" href="{{ url('/terms_of_service') }}"><b>ข้อกำหนดและเงื่อนไขการใช้บริการ</b></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class="col-3">
                  <div class="social-links">
                    <a href="https://www.facebook.com/ViiCheck-100959585396310" ><i class="fab fa-facebook"></i></a>
                    <a href="https://line.me/R/ti/p/%40702ytkls" ><i class="fab fa-line"></i></a>
                    <a href="mailto:contact.viicheck@gmail.com" ><i class="fas fa-mail-bulk"></i></a>
                    <a href="#" ><i class="fab fa-youtube"></i></a>
                    <a href="tel:020277856" ><i class="fas fa-phone-alt"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('Medilab/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('Medilab/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('Medilab/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('Medilab/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('Medilab/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('Medilab/js/main.js') }}"></script>

  <script id="dbd-init" src="https://www.trustmarkthai.com/callbackData/initialize.js?t=0fb7dd20-26-5-1dd80cec414c4d670072026d423afa933e149"></script>

</body>

</html>