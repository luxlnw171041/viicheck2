@extends('theme.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="border: 0px">

                    <section id="hero" class="d-flex align-items-center">

                          <div id="carouselExampleIndicators" class="carousel slide col-md-12" style="margin-left:200px;" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <!--div class="carousel-item active">
                                <img src="https://ctfassets.imgix.net/vh7r69kgcki3/eXWPjvkhJLHlYF4UXJUwq/bed3e8b3958db9ecff7aed8736af0573/Web_150DPI-20191213_WeWork_One_Seaport_Square_Boston_004.jpg" width="100%"  alt="">
                              </div>
                              <div class="carousel-item">
                                <img src="https://ctfassets.imgix.net/vh7r69kgcki3/4Dab4DLfemWorHT001bYeT/51663d4ffca4d876ef69c57011231bd4/3_Web_150DPI-20180808_WeWork_Ponce_De_Leon_-_Art__Murals_and_Details-1.jpg" width="100%"    alt="homepage hero 2">
                              </div>
                              <div class="carousel-item">
                                <img src="https://ctfassets.imgix.net/vh7r69kgcki3/1PqMvOJcBvq88GvdCoKHFg/49779864d704427e0de36a4544fc9512/2_Web_150DPI-20180607_WeWork_92_Champs-E__lyse__es_-_Common_Areas_-_Couch_Area-2.jpg" width="100%"    alt="homepage hero 3">
                              </div-->

                              <div class="carousel-item active">
                                <img src="{{ url('images/bicycle-bike-black-and-white-brake-545007.jpg') }}" width="100%"  alt="">
                              </div>
                              <div class="carousel-item">
                                <img src="{{ url('images/road-people-street-smartphone-2224.jpg') }}" width="100%"    alt="homepage hero 2">
                              </div>
                              <div class="carousel-item">
                                <img src="{{ url('images/motor-bike-running-close-up-photography-2519374.jpg') }}" width="100%"    alt="homepage hero 3">
                              </div>
                            </div>
                            
                          </div>

                          <div class="col-md-4 " style="position:absolute;" >
                            <div class="px-4" style=" background: #fff;">
                              <h1 class="mt-5" style="font-size:2em;" data-aos="fade-up"> ปฏิวัติการจัดเก็บข้อมูลของยานพาหนะคุณ </h1>
                              <h5 class="text-black-50 mt-4" style="font-size:1em;"  data-aos="fade-up" data-aos-delay="400">ไม่ว่าคุณจะเป็นองค์กรบริษัทหรือบุคคลทั่วไปที่อยากมีการจัดเก็บข้อมูลของยานพาหนะที่ได้มาตรฐาน เพื่อทำให้ชีวิตของคุณง่ายสะดวกรวดเร็ว ทั้งหมดอยู่ที่นี่แล้ว</h5>
                              <div class="py-3">
                                <label>ค้นหาศูนย์บริการที่ใกล้คุณ</label>
                                <select class="form-control">
                                  <option>กรุงเทพ</option>
                                </select>
                              </div>
                              <div class="pb-4" data-aos="fade-up" data-aos-delay="800">
                                <a href="{{ url('dealers') }}" class="btn btn-outline-primary rounded-pill px-5 py-2 ">เริ่มต้น</a>
                              </div>
                            </div>
                            
                          </div>
                    </section>
            </div>

            <hr>

            <div class="card" style="border: 0px">

              <section style="background: #ffc64a;width: 80%">

                    <div style="position:absolute; right:0;">
                      <iframe style="background-color: #8e8e8e;border: 0px solid #424242;border-radius: 5px;" width="570" height="320"
                        src="https://www.youtube.com/embed/eHT1gJ0-FQg?autoplay=1">
                        </iframe>
                    </div>  

                    <div class="col-md-7" ><br>
                      <div>โควิด-19 (COVID-19)</div>
                        <h1 style="font-size:2em;"><b>การสนับสนุนกลุ่มสมาชิกของเรา</b></h1><br>
                        <h3 class="text-black-50" style="font-size:1.5em;">ในขณะที่โลกพยายามปรับตัวและแก้ไขปัญหา Coronavirus อยู่นั้น Viicheck ยังคงมุ่งมั่นที่จะสนับสนุนองค์กรบริษัทและทุกคนที่เป็นสมาชิกของเรา ซึ่งเราทำงานอย่างขันแข็งเพื่อให้ปลอดภัย แข็งแรงและเชื่อมต่อข้อมูลของยานพาหนะทุกคนเข้าด้วยกัน</h3><br>
                        <div>
                          <a aria-label="อ่านเพิ่มเติมเกี่ยวกับมาตรการตอบสนองของ Viicheck" class="ray-link ray-link--with-arrow" href="#">อ่านเพิ่มเติมเกี่ยวกับมาตรการตอบสนองของ WeWork</a>
                        </div><br>
                    </div>
              </section>
            </div><br>

            <div class="card" style="border: 0px">

              <div class="row" style="background: #f7f7f7;">
                <div class="col-md-3" >
                  <div>อาคารใกล้คุณ </div><br>
                    <h1><b>5 แห่งใน Bangkok</b></h1><br>
                    <div>
                      <a href="{{ url('dealers') }}">ดูทั้งหมดใน Bangkok</a>
                    </div><br><br><br><br>
                </div>

                @foreach($dealers as $item)
                <div class="col-md-3">
                  <div class="card" style=" border: 1px solid #DCDCDC;border-radius: 5px;">
                      <img src="{{ url('images/isuzu').'/'.$item->latitude.','.$item->longitude.'.jpg' }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">{{$item->name_dealers}}</h5>
                        <p class="card-text">{{$item->location}}</p>
                      </div>
                  </div> 
                </div>
                @endforeach

                
                
              </div>

            </div><br>

            <div class="card" style="border: 0px">

              <section >

                <div class="card" style="width: 18rem;position:absolute; margin-left:392px;border: 1px solid #DCDCDC;border-radius: 5px;">
                    <img src="{{ url('images/auto-repair-3691962_1920.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="card-title"><a href=""> ทีมช่างมืออาชีพ</a></h4>
                      <p class="card-text">เราดูแลรถของลูกค้าด้วยทีมช่างที่มีความชำนาญและประสบการณ์ เพื่อให้รถของลูกค้าทำงานได้เต็มสมรรถนะ</p>
                    </div>
                  </div>

                  <div class="card" style="width: 18rem;position:absolute; margin-left:707px;border: 1px solid #DCDCDC;border-radius: 5px;">
                    <img src="{{ url('images/car-buying-car-dealership-car-mechanic-97075.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="card-title"><a href=""> ส่งมอบตรงเวลา</a></h4>
                      <p class="card-text">เพราะรู้ว่าลูกค้าต้องใช้งาน งานซ่อมและงานบริการต่างๆ ต้องตรงต่อเวลา และส่งมอบในสภาพที่สมบูรณ์</p>
                    </div>
                  </div>

                  <div class="card d-none" style="width: 18rem;position:absolute; margin-left:1020px;border: 1px solid #DCDCDC;border-radius: 5px;">
                    <img src="{{ url('images/auto-repair-3691962_1920.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="card-title"><a href=""> ห้องชุดสำนักงาน</a></h4>
                      <p class="card-text">สำนักงานสำหรับทีมขนาดใหญ่ หรือทีมขนาดกลางที่มีความหนาแน่นน้อยลงมา ซึ่งมาพร้อมกับห้องประชุม ห้องทำงานผู้บริหาร และการสนับสนุนการปฏิบัติงาน</p>
                    </div>
                  </div>

                <div class="col-md-3" ><br>
                    <h2><b>การใส่ใจในการซ่อมบำรุงและดูแลลูกค้าอย่างครบครัน</b></h2><br>
                    <div>
                      <p>ศูนย์บริการที่ทำงานร่วมกับเราเตรียมพร้อมเพื่อการพัฒนาปรับปรุงพื้นที่ให้เหมาะสำหรับทุกๆคนตั้งแต่ในส่วนของศูนย์ให้บริการพื้นที่รับรองรวมไปถึงเทคโนโลยีต่างๆเพื่อรองรับการใช้บริการอย่างมีประสิทธิภาพ</p>
                    </div>
                    <div>
                      <a href="">ดูโซลูชันทั้งหมด</a>
                    </div><br>
                </div>
                
              </section>

            </div>

            <div class="card" style="border: 0px">
              <div>
                <h2><br>
                    <b> &nbsp; เรื่องราวความสำเร็จของลูกค้า</b>
                </h2>
                <p></p>
              </div>
            </div>         

            <div class="card" style="border: 0px">

              <section style="background: #f7f7f7;">

                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div>
                        <div>
                          <img width="75" height="75" src="{{ url('/images/GreenLogo.png') }}">
                        </div><br>
                          <h2><b>"บริษัทเราประสบความสำเร็จในการลดค่าใช้จ่ายการจัดเก็บข้อมูลการซ่อมบำรุงรวมไปถึงราคาเบี้ยประกันที่ถูกลงซึ่งเป็นผลดีอย่างมาก"</b></h2><br>
                          <div>
                            DR.NATHSETH YURAWAN ประธานและซีอีโอ 2BGREEN CO.,LTD.
                          </div>
                          <div>
                            <a href="">เรียนรู้เพิ่มเติม</a>
                          </div><br>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div>
                        <div>
                            <img width="110" height="30" src="https://ctfassets.imgix.net/vh7r69kgcki3/7yAQhnqtkFdi34Luj6ZIzJ/5fefe0bd181b32f23504bfdbe50021db/royal-bank-canade_logo_3.png?auto=format%20compress&fit=crop&q=50&w=200">
                        </div><br>
                          <p>"WeWork ช่วยกำจัดอุปสรรคใหญ่ออกไปได้ในเรื่องของการหาพื้นที่สำนักงานและการเจรจากับเจ้าของที่"<br><br>
                          
                            NIRANJAN VIVEKANANDAN รองประธานฝ่ายกลยุทธ์ที่ธนาคารพาณิชย์ RBC</p>
                          
                          <div>
                            <a href="">เรียนรู้เพิ่มเติม</a>
                          </div>
                        </div>
                        <hr>
                        <div>
                        <div>
                            <img width="110" height="30" src="https://ctfassets.imgix.net/vh7r69kgcki3/4jW89SumohqjzK9woLhBpf/6e8c67d271294aef709a34f95fa7e1c0/Standard_Chartered_Logo.png?auto=format%20compress&fit=crop&q=50&w=200">
                        </div><br>
                          <p>"ห้องปฏิบัติการคิดค้นนวัตกรรมของเรารวบรวมไอเดีย ทักษะ และที่สำคัญคือคนเก่ง ๆ มาไว้ด้วยกันเพื่อสร้างสรรค์สิ่งใหม่ ๆ"<br><br>
                          
                            ALEX MANSON ผู้อำนวยการระดับโลกของ SC VENTURES, STANDARD CHARTERED BANK</p>
                          
                          <div>
                            <a href="">เรียนรู้เพิ่มเติม</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </section>

            </div>

            
              <div class="card" style="border: 0px">
              <div>
                <br><h2>
                    <b> &nbsp; ข่าวสาร ข้อมูลใหม่ และข้อมูลเชิงลึก</b>
                </h2>
              </div>
            </div>    

            <div class="card" style="border: 0px">

              <section>

                <div class="container">
                  <div class="row">
                    <div class="col-md-6" style="margin-left:-110px;">
                        <img width="630" height="400" src="{{ url('images/forced-perspective-photography-of-cars-running-on-road-below-799443.jpg') }}">
                    </div>
                    
                    <div class="col-md-6" style="margin-left:110px;">
                      <div>
                        <h1><a href=""><br>ส่งเสริมให้พนักงานที่ทำงานทางไกลมีส่วนร่วมด้วยวัฒนธรรมของบริษัท</h1></a><br>
                          ลองมาดูวิธีกระตุ้นให้พนักงานทางไกลมีส่วนร่วมด้วยค่านิยมและวัฒนธรรมของบริษัท
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>

            <hr>

            <div class="card" >

              <section>

                <div class="container">
                  <div class="row">
                    <div class="col-md-4" >
                        <div class="card" style="border: 1px solid #DCDCDC;border-radius: 5px;">
                          <img src="{{ url('images/blur-connection-ecommerce-230544.jpg') }}" height=250  class="card-img-top" alt="...">
                          <div class="card-body">
                            <h4 class="card-title"><a href=""> ห้องชุดสำนักงาน</a></h4>
                            <p class="card-text">สำนักงานสำหรับทีมขนาดใหญ่ หรือทีมขนาดกลางที่มีความหนาแน่นน้อยลงมา ซึ่งมาพร้อมกับห้องประชุม ห้องทำงานผู้บริหาร และการสนับสนุนการปฏิบัติงาน</p>
                          </div>
                        </div>
                    </div>

                    <div class="col-md-4" >
                        <div class="card" style="border: 1px solid #DCDCDC;border-radius: 5px;">
                          <img src="{{ url('images/car-connection-dashboard-1305305.jpg') }}" height=250 class="card-img-top" alt="...">
                          <div class="card-body">
                            <h4 class="card-title"><a href=""> ห้องชุดสำนักงาน</a></h4>
                            <p class="card-text">สำนักงานสำหรับทีมขนาดใหญ่ หรือทีมขนาดกลางที่มีความหนาแน่นน้อยลงมา ซึ่งมาพร้อมกับห้องประชุม ห้องทำงานผู้บริหาร และการสนับสนุนการปฏิบัติงาน</p>
                          </div>
                        </div>
                    </div>

                    <div class="col-md-4" >
                        <div class="card" style="border: 1px solid #DCDCDC;border-radius: 5px;">
                          <img src="{{ url('images/financing-4521118_1920.jpg') }}" height=250 class="card-img-top" alt="...">
                          <div class="card-body">
                            <h4 class="card-title"><a href=""> ห้องชุดสำนักงาน</a></h4>
                            <p class="card-text">สำนักงานสำหรับทีมขนาดใหญ่ หรือทีมขนาดกลางที่มีความหนาแน่นน้อยลงมา ซึ่งมาพร้อมกับห้องประชุม ห้องทำงานผู้บริหาร และการสนับสนุนการปฏิบัติงาน</p>
                          </div>
                        </div>
                    </div>

                  </div>
                </div>
              </section>

            </div>

        </div>
    </div>

    </div>
@endsection
