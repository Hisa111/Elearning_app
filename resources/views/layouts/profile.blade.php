@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3" align ="center">
            <div class="card pt-4">
                <img src="https://www.seekpng.com/png/full/46-462959_unknown-person-icon-png-download-single-people-logo.png" alt="user-image" alt="profile-img" class="card-img-top mx-auto" style="width:50%;">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <a href="" class="btn btn-primary">Edit Pofile</a>

                    <hr class="my-4">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="">number</a>
                            <p >following</p>
                        </div>
                        <div class="col-md-6">
                            <a href="">number</a>
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
                            {{--@foreach ($members as $member)--}}
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <img class="col-md-2" style="width:80%;" src="https://www.seekpng.com/png/full/46-462959_unknown-person-icon-png-download-single-people-logo.png" alt="user-image" alt="">
                                        <div class="col-md-8 align-self-center">
                                            <div class="row flex-column ">
                                                <div class="">
                                                    <p class="card-text">
                                                        <a href="">followed name</a>
                                                        learned {number} words in 
                                                        <a href="">{lesson name}</a>
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <p class="text-secondary">{number}days ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                        {{--follow button conditional branch
                                        @if()
                                            <a name="" id="" class="btn btn-danger" href="" role="button">unfollow</a>
                                        @else
                                            <a name="" id="" class="btn btn-primary" href="" role="button">follow</a>
                                        @endif
                                        --}}
                                        
        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--@endforeach--}}
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection