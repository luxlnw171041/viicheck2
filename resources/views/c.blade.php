@extends('theme.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    	<div class="container">
	        <div class="col-md-12">
	        	<div class="row">
		        	<div class="col-md-6">
		        		<h1>Spring Tower</h1>
		        		<i class="icofont-star" style="color: #FF0033"></i> 5.0 &nbsp;|&nbsp; 0 reviews        		
		        	</div>

		        	<div class="col-md-6" style="text-align: right;">
		        		<span>Phayathai Rd<br>
						Khwaeng Thung Phaya Thai, Khet Ratchathewi<br>
						Bangkok 10400</span>
		        	</div>
	        	</div>
	        </div>
	    </div><br><br><br>

	    <div class="container">
	        <div class="col-md-8">
	        	<div class="row"><br><br>

	        		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="https://locations-api-production.imgix.net/locations/image/4b90a2cc-2d78-11ea-988f-1214a1ac73cf/Web_150DPI-20190723_WeWork_Seolleung_III_21.jpg?auto=format%20compress&fit=crop&q=50&w=1200&h=675" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://locations-api-production.imgix.net/locations/image/4ba91cc6-2d78-11ea-988f-1214a1ac73cf/Web_150DPI-20190611_WeWork_Yeoksam_Station_II_7.jpg?auto=format%20compress&fit=crop&q=50&w=1200&h=675" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://locations-api-production.imgix.net/locations/image/4bc41e36-2d78-11ea-988f-1214a1ac73cf/Web_150DPI-20180608_WeWork_Nanjing_Xi_Lu_-_Kitchens-2.jpg?auto=format%20compress&fit=crop&q=50&w=1200&h=675" alt="Third slide">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
	        		
	        	</div>
	        </div>
	    </div>

	    <div class="container">
	        <div class="col-md-8">

	        		<div><br><br>
			        	<h1>ตำแหน่ง</h1>
			        	Phayathai Rd Khwaeng Thung Phaya Thai, Khet Ratchathewi Bangkok 10400
			        	<br>
		        	</div>
	        </div>
	    </div>

	    <div class="container">
	        <div class="col-md-8">
	        		<div><p></p></div>
	        		<div style="height: 400px;">
			        	@include('map')
		        	</div>
		        	<div><p></p></div>
		        	<div>
		        		<p> การขนส่งใกล้เคียง<br>
		        			<i class="icofont-bus"></i> &nbsp; BTS Line at Ratchathewi Station (2 minute walk)
		        		</p>
		        	</div>
	        </div>
	    </div>

    </div>
</div>

    </div>
@endsection


