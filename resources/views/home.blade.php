@extends('theme.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card" style="border: 0px">

                    <section id="hero" class="d-flex align-items-center">

                          <div id="carouselExampleIndicators" class="carousel slide col-md-12" style="margin-left:200px;" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="https://ctfassets.imgix.net/vh7r69kgcki3/eXWPjvkhJLHlYF4UXJUwq/bed3e8b3958db9ecff7aed8736af0573/Web_150DPI-20191213_WeWork_One_Seaport_Square_Boston_004.jpg?auto=format%20compress&amp;fit=crop&amp;q=50&amp;w=1096&amp;h=617" alt="" alt="">
                              </div>
                              <div class="carousel-item">
                                <img src="https://ctfassets.imgix.net/vh7r69kgcki3/4Dab4DLfemWorHT001bYeT/51663d4ffca4d876ef69c57011231bd4/3_Web_150DPI-20180808_WeWork_Ponce_De_Leon_-_Art__Murals_and_Details-1.jpg?auto=format%20compress&amp;fit=crop&amp;q=50&amp;w=1096&amp;h=617" alt="homepage hero 2">
                              </div>
                              <div class="carousel-item">
                                <img src="https://ctfassets.imgix.net/vh7r69kgcki3/1PqMvOJcBvq88GvdCoKHFg/49779864d704427e0de36a4544fc9512/2_Web_150DPI-20180607_WeWork_92_Champs-E__lyse__es_-_Common_Areas_-_Couch_Area-2.jpg?auto=format%20compress&amp;fit=crop&amp;q=50&amp;w=1096&amp;h=617" alt="homepage hero 3">
                              </div>
                            </div>
                            
                          </div>

                          <div class="col-md-4" style="position:absolute; background: #fff;">
                            <div>
                              <h5></h5>
                            </div>
                            <h1 data-aos="fade-up"><br><b>ปฏิวัติพื้นที่ทำงานของคุณ</b></h1>
                            <h5 data-aos="fade-up" data-aos-delay="400">ไม่ว่าคุณจะเป็นองค์กรที่มีรากฐานมั่นคงแล้วหรือสตาร์ทอัพที่กำลังโต ลองมาสำรวจพื้นที่ที่จะสร้างแรงบันดาลใจให้คุณสร้างสรรค์ผลงานที่สร้างผลกระทบที่สุด</h5>
                            <div data-aos="fade-up" data-aos-delay="800">
                              <a href="" class="btn-get-started scrollto">เริ่มต้น</a>
                            </div>
                            <div>
                              <h4><br></h4>
                            </div>
                          </div>
                    </section><!-- End Hero -->
            </div>

            <hr>

            <div class="card" style="border: 0px">

              <section style="background: #ffc64a;width: 80%">

                    <div style="position:absolute; margin-left:700px;">
                      <iframe style="background-color: #8e8e8e;border: 0px solid #424242;border-radius: 5px;" width="570" height="320"
                        src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1">
                        </iframe>
                    </div>  

                    <div class="col-md-8" ><br>
                      <div>โควิด-19 (COVID-19)</div>
                        <h1><b>การสนับสนุนกลุ่มสมาชิกของเรา</b></h1><br>
                        <h3>ในขณะที่โลกพยายามก้าวข้ามความท้าทายที่โคโรน่าไวรัสนำมา WeWork ยังคงมุ่งมั่นที่จะสนับสนุนพนักงานและบริษัทที่เป็นสมาชิกของเรา ซึ่งหลายแห่งก็กำลังทำงานอย่างหนักเพื่อช่วยให้ผู้คนปลอดภัย แข็งแรง และเชื่อมต่อผู้คนเข้าด้วยกัน</h3><br>
                        <div>
                          <a aria-label="อ่านเพิ่มเติมเกี่ยวกับมาตรการตอบสนองของ WeWork" class="ray-link ray-link--with-arrow" href="https://www.wework.com/info/navigating-the-future-of-the-workplace">อ่านเพิ่มเติมเกี่ยวกับมาตรการตอบสนองของ WeWork</a>
                        </div><br>
                    </div>
              </section><!-- End Hero -->

            </div>
        </div>
    </div>

    </div>
@endsection
