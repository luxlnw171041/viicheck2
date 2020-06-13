
<header id="header" class="fixed-top d-flex align-items-center bg-white">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <!--h1 class="d-none text-light"><a href="{{ url('/home') }}"><span>Viicheck 2</span></a></h1-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ url('/') }}"><img src="{{ url('images/logo.jpg') }}" alt="" class="img-fluid"></a>
      </div>

        @if (Route::has('login'))
      <nav class="nav-menu nav-a d-none d-lg-block">
          @auth
              <ul>
                <li><a href="">ตำแหน่งที่ตั้ง</a></li>
                <li><a href="">พื้นที่ทำงาน</a></li>
                <li><a href="">องค์กร</a></li>
                <li><a href="">แนวคิด</a></li>
                
                <li><a href="">ติดต่อเรา</a></li>
                <!-- <li class="get-started"><a href="{{ url('/welcome') }}">ลงชื่อเข้าใช้ &nbsp; <i class="icofont-ui-user"></i></a></li> -->
              </ul>
          @else
              <ul>
                <li><a href="">ตำแหน่งที่ตั้ง</a></li>
                <li><a href="">พื้นที่ทำงาน</a></li>
                <li><a href="">องค์กร</a></li>
                <li><a href="">แนวคิด</a></li>
                
                <li><a href="">ติดต่อเรา</a></li>
                <li class="get-started"><a href="{{ url('/login') }}">ลงชื่อเข้าใช้ &nbsp; <i class="icofont-ui-user"></i></a></li>
              </ul>
          @endauth

      </nav><!-- .nav-menu -->
        @endif


    </div>
  </header><!-- End Header -->

  