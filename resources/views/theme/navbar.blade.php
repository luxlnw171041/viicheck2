<header id="header" class="fixed-top  bg-white">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

          <nav class="navbar navbar-expand-lg navbar-light ">

            <a class="navbar-brand" href="{{ url('/') }}">
              <img src="{{ url('images/logo.jpg') }}" alt="" height="50">
            </a>

            <div class="collapse navbar-collapse" id="navbarText">
                           
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item"><a class="nav-link" href="{{ url('dealers') }}">ตำแหน่งศูนย์บริการ</a></li>
                  <li class="nav-item d-none"><a class="nav-link" href="">พื้นที่ทำงาน</a></li>
                  <li class="nav-item d-none"><a class="nav-link" href="">องค์กร</a></li>
                  <li class="nav-item d-none"><a class="nav-link" href="">แนวคิด</a></li>
                  
                  <li class="nav-item" ><a class="nav-link" href="#contact">ติดต่อเรา</a></li>
                  <!-- <li class="get-started"><a href="{{ url('/welcome') }}">ลงชื่อเข้าใช้ &nbsp; <i class="icofont-ui-user"></i></a></li> -->
                  
                  @auth
                    <li class="nav-item dropdown">
                      <div>
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                      </div>

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
                  @else
                    <li class="nav-item"><a  class="nav-link  get-started btn btn-primary rounded-pill text-white px-3 ml-2" href="{{ url('/login') }}">ลงชื่อเข้าใช้ &nbsp; <i class="icofont-ui-user"></i></a></li>
                  @endauth       

              </ul>

            </div>

          </nav>
        </div>
    </div>
  </div>
</header>