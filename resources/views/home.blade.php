@extends('theme.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card" style="border: 0px">
            <section id="hero" class="d-flex align-items-center">

                <div class="container">
                  <div class="row">
                    <div class="col-lg-4 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                      <h2 data-aos="fade-up"><b>ปฏิวัติพื้นที่ทำงานของคุณ</b></h2>
                      <p data-aos="fade-up" data-aos-delay="400">ไม่ว่าคุณจะเป็นองค์กรที่มีรากฐานมั่นคงแล้วหรือสตาร์ทอัพที่กำลังโต ลองมาสำรวจพื้นที่ที่จะสร้างแรงบันดาลใจให้คุณสร้างสรรค์ผลงานที่สร้างผลกระทบที่สุด</p>
                      <br>

                      <div data-aos="fade-up" data-aos-delay="800">
                        <a href="#" class="btn-get-started scrollto">เริ่มต้น</a>
                      </div>
                    </div>

                    <div class="col-lg-8 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                        
                        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="10000">
                              <img src="storage/app/public/portfolio-1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-interval="2000">
                              <img src="..." class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="..." class="d-block w-100" alt="...">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>

                    </div>
                  </div>
                </div>

            </section><!-- End Hero -->
        </div>
        </div>
    </div>
</div>
@endsection
