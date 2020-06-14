@extends('theme.main')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                              <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        </div>

                        <div class="col-md-8">
                            <button type="button" class="btn btn-primary" onclick=""><i class="icofont-ui-user"> &nbsp;1</i></button> &nbsp;
                            <input class="btn btn-outline-primary" type="button" value="ย้ายเข้า" onclick="">
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                          <div class="card-body">
                            <table class="table">
                                @foreach($dealers as $item)
                                <tr>
                                    <td> <a style="text-decoration: none;" href="{{ url('/dealers/' . $item->id) }}" title="View Dealer">
                                            <h5 class="text-dark">{{ $item->name_dealers }}</h5><br>
                                            <!-- <img width="250" src="{{ asset('/storage/{$item->photo}') }}"> -->
                                            <img width="250" src="https://cdn.wework.com/locations/image/834625e4-1b49-11e9-845b-1202be33576a/0-3.jpg?q=50&auto=format%20compress&w=300">
                                        </a>
                                    </td>
                                    <td>
                                        <div><br><br><br>
                                            <div><b>จังหวัด</b> : {{ $item->province }}<br></div>
                                            <div>
                                                
                                                <b>ศูนย์บริการ</b> : 

                                                <!-- เช็คสถานะ dealer -->
                                                @if( $item->dealer )
                                                <i class="icofont-check"> โชว์รูม</i><br> 
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                @else
                                                @endif

                                                <!-- เช็คสถานะ isuzu_all -->
                                                @if( $item->isuzu_all )
                                                <i class="icofont-check"> รถอีซูซุทุกประเภท</i><br> 
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                                @else
                                                @endif

                                                <!-- เช็คสถานะ pickup_and_multipurpose -->
                                                @if( $item->pickup_and_multipurpose )
                                                <i class="icofont-check"> ปิ๊กอัพและอเนกประสงค์</i><br> 
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                @else
                                                @endif

                                                <!-- เช็คสถานะ paint_and_body -->
                                                @if( $item->paint_and_body )
                                                <i class="icofont-check"> ศูนย์ซ่อมสีและตัวถัง</i>
                                                @else
                                                @endif
                                            </div>
                                                <b>สถานที่ตั้ง</b> : {{ $item->location }} <br>
                                                <p><b>latitude</b> : {{ $item->latitude }}   <b> longitude</b> : {{ $item->longitude }}</p>
                                            
                                        </div>
                                    </td>
                                </tr>

                                @endforeach


                            </table>
                            <div class="pagination-wrapper"> {!! $dealers->appends(['search' => Request::get('search')])->render() !!} </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        @include('map')
                    </div>
                </div>
            </div>


                <!-- <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/dealers/create') }}" class="btn btn-success btn-sm" title="Add New Dealer">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/dealers') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name Dealers</th>
                                        <th>Province</th>
                                        <th>Dealers</th>
                                        <th>Isuzu All</th>
                                        <th>Pickup And Multipurpose</th>
                                        <th>Paint And Body</th>
                                        <th>Location</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Image</th>
                                        <th >Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($dealers as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name_dealers }}</td>
                                        <td>{{ $item->province }}</td>
                                        <td>{{ $item->dealers }}</td>
                                        <td>{{ $item->isuzu_all }}</td>
                                        <td>{{ $item->pickup_and_multipurpose }}</td>
                                        <td>{{ $item->Paint_and_body }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->latitude }}</td>
                                        <td>{{ $item->longitude }}</td>
                                        <td><img src="{{ asset("/storage/{$item->image}") }}"></td>
                                        <td >
                                            <a href="{{ url('/dealers/' . $item->id) }}" title="View Dealer"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/dealers/' . $item->id . '/edit') }}" title="Edit Dealer"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/dealers' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Dealer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $dealers->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div> -->


            </div>
        </div>
    </div>
@endsection
