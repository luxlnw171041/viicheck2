@extends('theme.main')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">โปรไฟล์ที่ {{ $profile->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/profiles') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/profiles/' . $profile->id . '/edit') }}" title="Edit Profile"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('profiles' . '/' . $profile->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Profile" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="row">
                        <div class="table-responsive col-md-8">
                            <table class="table">
                                <tbody>
                                    <tr class="d-none">
                                        <td>
                                            <b>หมายเลขผู้ใช้ : </b> {{ $profile->id }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th> 
                                            ชื่อสกุล :  <br><br>
                                            หมายเลขบัตร :  <br><br>
                                            ที่อยู่ : <br><br>
                                            เบอร์โทรติดต่อ : 
                                        </th>
                                        <td>
                                            {{ $profile->name }} {{ $profile->lastname }} <br><br>
                                            {{ $profile->card_number }} <br><br>
                                            {{ $profile->address }} <br><br>
                                            {{ $profile->contact }}
                                        </td>
                                    </tr>

                                    <tr class="d-none">
                                        <th> User Id </th>
                                        <td> {{ $profile->user_id }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <img width="80%" src="https://png.pngtree.com/png-vector/20190629/ourlarge/pngtree-business-people-avatar-icon-user-profile-free-vector-png-image_1527664.jpg">
                        </div>
                        </div>

                    </div>
                </div>

                <hr>

                @php
                    $car = $profile->cars;
                @endphp

                <div class="card">
                    <div class="card-header">รถยนต์ของคุณ</div>
                    <div class="card-body">
                            <a href="{{ url('/cars/create') }}" class="btn btn-success btn-sm float-right" title="Add New Car">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                        <!-- <form method="GET" action="{{ url('/cars') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form> -->

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                    <tr>
                                        <th>คันที่</th>
                                        <th>รุ่นรถ</th>
                                        <th>เลขตัวถัง</th>
                                        <th>เลขเครื่องยนต์</th>
                                        <th>สีรถ</th>
                                        <th>ออฟชั่น</th>
                                        <th>เลขทะเบียน</th>
                                        <th class="d-none">User Id</th>
                                        <th class="d-none">Actions</th>

                                @foreach($car as $item)
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->car_model }}</td>
                                        <td>{{ $item->body_car }}</td>
                                        <td>{{ $item->rg_number }}</td>
                                        <td>{{ $item->car_color }}</td>
                                        <td>{{ $item->offtion }}</td>
                                        <td>{{ $item->vg_number }}</td>
                                        <td class="d-none">{{ $item->user_id }}</td>
                                        <td class="d-none">
                                            <a href="{{ url('/cars/' . $item->id) }}" title="View Car"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/cars/' . $item->id . '/edit') }}" title="Edit Car"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/cars' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Car" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
