@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><h3>{{$users->find($id)->name}}'s
                        @if($type == 1)
                         Follower List
                        @elseif($type == 2)
                         Following List
                        @elseif($type == 3)
                         Recommendition
                        @endif
                        </h3>
                    </li>
                </ul>

                    

                    @foreach($users->find($friend) as $user)
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <img class="col-md-2 card-img w-75" src="https://media.istockphoto.com/vectors/user-vector-icon-vector-id955397756?k=6&m=955397756&s=612x612&w=0&h=xYXhu8pmqqnk32v9TQYSjKX2pFMht-zebnpl4d0KxrY=" alt="">
                                <a class="col-md-7 card-title" href=""><h4 class="">{{$user->name}}</h4></a>
                                
                                <div class="col-md-4 text-right">
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
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <img class="col-md-2 card-img w-75" src="https://media.istockphoto.com/vectors/user-vector-icon-vector-id955397756?k=6&m=955397756&s=612x612&w=0&h=xYXhu8pmqqnk32v9TQYSjKX2pFMht-zebnpl4d0KxrY=" alt="">
                            <a class="col-md-7 card-title" href=""><h4 class="">name</h4></a>
                            <div class="col-md-3 text-right">
                                <form  method="POST">
                                    @csrf
                                    <button type="submit"  class="btn btn-primary">Follow</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection