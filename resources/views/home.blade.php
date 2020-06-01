@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Dashboard</h5>
                    <div class="row">
                        <div class="col-md-5">
                            <img class="img-thumbnail" src="https://media.istockphoto.com/vectors/user-vector-icon-vector-id955397756?k=6&m=955397756&s=612x612&w=0&h=xYXhu8pmqqnk32v9TQYSjKX2pFMht-zebnpl4d0KxrY=" alt="user-image">
                          </div>
                          <div class="col-md-7">
                            <a href="{{route('layouts.profile', ['id' => auth()->user()->id])}}"><h5 class="card-text">{{auth()->user()->name}}</h5></a>
                            <hr class="my-2">
                            <a href="#!" class="card-link">number learned</a>
                          </div>
                    </div>
                </div>
              </div>
        </div>
        @php
            $type = 1;
        @endphp
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if($type % 2 == 1)
                        <h5 class="card-title d-inline">Activity</h5>
                        <a href="{{route('home')}}" class="btn btn-primary d-inline text-right">My Activity</a>
                        <hr class="my-4">
                        @foreach($activities as $activity)
                            @if(auth()->user()->is_following($activity->user_id) == true)
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <img class="col-md-2" style="width:80%;" src="https://media.istockphoto.com/vectors/user-vector-icon-vector-id955397756?k=6&m=955397756&s=612x612&w=0&h=xYXhu8pmqqnk32v9TQYSjKX2pFMht-zebnpl4d0KxrY=" alt="user-image" alt="">
                                            <div class="col-md-8 align-self-center">
                                                <div class="row flex-column ">
                                                    <div class="">
                                                        <p class="card-text">
                                                            <a href="">{{$activity->user->name}}</a>
                                                            passed
                                                            <a href="">{{$activity->lesson->category->title}}</a>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <p class="text-secondary">{{$activity->created_at}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @elseif($type % 2 == 0)
                        <h5 class="card-title d-inline">Activity</h5>
                        <a href="{{route('home')}}" class="btn btn-primary d-inline text-right">My Activity</a>
                        <hr class="my-4">
                        @foreach($activities->where('user_id', auth()->user()->id) as $activity)
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class=" align-self-center">
                                            <div class="row flex-column ">
                                                <div class="">
                                                    <p class="card-text">You
                                                        passed
                                                        <a href="">{{$activity->lesson->category->title}}</a>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <p class="text-secondary">{{$activity->created_at}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
