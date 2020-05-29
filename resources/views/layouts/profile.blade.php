@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3" align ="center">
            <div class="card pt-4">
                <img src="https://media.istockphoto.com/vectors/user-vector-icon-vector-id955397756?k=6&m=955397756&s=612x612&w=0&h=xYXhu8pmqqnk32v9TQYSjKX2pFMht-zebnpl4d0KxrY=" alt="user-image" alt="profile-img" class="card-img-top mx-auto" style="width:50%;">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <a href="" class="btn btn-primary">Edit Pofile</a>

                    <hr class="my-4">
                    {{-- if --}}
                    @if(auth()->user()->id == $user->id) {{--!=--}}
                        @if(auth()->user()->is_following($user->id) == true)
                        <form action="{{route('layouts.follow', ['id' => $user->id])}}" method="POST">
                            @csrf
                            <button type="submit"  class="btn btn-primary">Follow</button>
                        </form>
                        @else
                        <form action="{{route('layouts.unfollow', ['id' => $user->id])}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-primary">Unfollow</button>
                        </form>
                        @endif
                    @endif
                    <br>
                    <div class="row">
                        
                        <div class="col-md-6">
                            <a href="{{route('layouts.list', ['id' => $user->id, 'type' => 1])}}">{{$user->following()->count()}}</a>
                            <p >following</p>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('layouts.list', ['id' => $user->id, 'type'=> 2])}}">{{$user->followed()->count()}}</a>
                            <p>followers</p>
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="jumbotron py-4">
                        <a href="">Learned number words</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {{--need change-display button--}}
                            <h5 class="card-title">Activity</h5>
                            <hr class="my-4">
                            @foreach($activities as $activity){
                                @if($user->is_following($activity->user_id) == true)
                                {
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
                                }
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection