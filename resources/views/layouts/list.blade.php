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
                    
                
                    @if($type == 3)
                        @foreach($users as $user)
                            @if(auth()->user()->id != $user->id)
                            <div class="card p-0">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <img class="col-md-2 card-img" src="https://media.istockphoto.com/vectors/user-vector-icon-vector-id955397756?k=6&m=955397756&s=612x612&w=0&h=xYXhu8pmqqnk32v9TQYSjKX2pFMht-zebnpl4d0KxrY=" alt="">
                                        <a class="col-md-7 card-title my-auto" href="{{route('layouts.profile',['id'=> $user->id])}}"><h4 class="">{{$user->name}}</h4></a>
                                        
                                        <div class="col-md-2 text-right my-auto">
                                            
                                            @if(auth()->user()->is_following($user->id) == true)
                                            <form action="{{route('layouts.unfollow', ['id' => $user->id])}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-primary">Unfollow</button>
                                            </form>
                                            @else
                                            <form action="{{route('layouts.follow', ['id' => $user->id])}}" method="POST">
                                                @csrf
                                                <button type="submit"  class="btn btn-primary">Follow</button>
                                            </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    @else
                        @foreach($users->find($friend) as $user)
                            @if(auth()->user()->id != $user->id)
                            <div class="card p-0">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <img class="col-md-2 card-img" src="https://media.istockphoto.com/vectors/user-vector-icon-vector-id955397756?k=6&m=955397756&s=612x612&w=0&h=xYXhu8pmqqnk32v9TQYSjKX2pFMht-zebnpl4d0KxrY=" alt="">
                                        <a class="col-md-7 card-title my-auto" href="{{route('layouts.profile',['id'=> $user->id])}}"><h4 class="">{{$user->name}}</h4></a>
                                        
                                        <div class="col-md-2 text-right my-auto">
                                            @if(auth()->user()->is_following($user->id) == true)
                                            <form action="{{route('layouts.unfollow', ['id' => $user->id])}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-primary">Unfollow</button>
                                            </form>
                                            @else
                                                <form action="{{route('layouts.follow', ['id' => $user->id])}}" method="POST">
                                                    @csrf
                                                    <button type="submit"  class="btn btn-primary">Follow</button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    @endif
                

            </div>
        </div>
    </div>
</div>
@endsection