@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-name float-left">
                    Dashboard
            </div>
           
        </div>
        
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            
            <div class="row">
                   
                    <div class="col-lg-3 col-4">
                      <!-- small box -->
                      <div class="small-box bg-info">
                        <div class="inner">
                        <h3>{{$apartments}}</h3>
          
                          <p>Apartments</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-building"></i>
                        </div>
                        <a href="{{route('apartment.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-4">
                      <!-- small box -->
                      <div class="small-box bg-success">
                        <div class="inner">
                          <h3>{{$bookings}}</h3>
          
                          <p>Bookings</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-calendar-check"></i>
                        </div>
                        <a href="{{route('booking.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-4">
                      <!-- small box -->
                      <div class="small-box bg-warning">
                        <div class="inner">
                          <h3>{{$agents}}</h3>
          
                          <p>Agents</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-user"></i>
                        </div>
                        <a href="{{route('users.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                <!-- ./col -->
                <div class="col-lg-3 col-4">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$blogs}}</h3>

                            <p>Blogs</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-blog"></i>
                        </div>
                        <a href="{{route('blog.index')}}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                   
                  </div>
            
        </div>
    </div>
@endsection
