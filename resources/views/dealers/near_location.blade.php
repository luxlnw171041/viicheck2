@extends('theme.main')

@section('content')

<div class="container">
    <div class="row">


        <div class="col-md-12">
            <form name="search_location" id="search_location">
              <div class="form-row align-items-center">
                <div class="col-auto">
                  <input type="text" class="form-control mb-2" id="lat" placeholder="latitude">
                </div>
                <div class="col-auto">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    </div>
                    <input type="text" class="form-control" id="lng" placeholder="longitude">
                  </div>
                </div>
                <div class="col-auto">
                  <input type="submit" class="btn btn-primary mb-2" id="submit" name="submit" value="ค้นหา">
                </div>
              </div>
            </form>
        </div>
        

        <script>
           $('form#search_location').submit(function(event) {
               event.preventDefault();
                // รับค่าจากฟอร์ม
                var lat = $('input#lat').val();
                var lng = $('input#lng').val();
                // ส่งค่าไป search ด้วย jQuery Ajax
                $.ajax({
                    url: "{{ url('/') }}/api/dealer",
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        lat:lat,
                        lng:lng
                    },
                    success: function(data){
                        if(data.length != 0){
                            // กรณีมีข้อมูล
                        }else{
                            alert('ไม่พบข้อมูลที่ค้นหา');
                        }
                    }
                });
            });
        </script>


    </div>
</div>
@endsection