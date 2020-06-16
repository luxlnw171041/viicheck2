
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
                <li><a href="{{ url('dealers') }}">ตำแหน่งที่ตั้ง</a></li>
                <li><a href="">พื้นที่ทำงาน</a></li>
                <li><a href="">องค์กร</a></li>
                <li><a href="">แนวคิด</a></li>
                
                <li><a href="">ติดต่อเรา</a></li>
                <!-- <li class="get-started"><a href="{{ url('/welcome') }}">ลงชื่อเข้าใช้ &nbsp; <i class="icofont-ui-user"></i></a></li> -->

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

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

  
  