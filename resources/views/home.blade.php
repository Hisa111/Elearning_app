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
                            <img class="img-thumbnail" src="https://www.seekpng.com/png/full/46-462959_unknown-person-icon-png-download-single-people-logo.png" alt="user-image">
                          </div>
                          <div class="col-md-7">
                            <h6 class="card-text">user-name</h6>
                            <a href="#!" class="card-link">number learned</a>
                          </div>
                    </div>
                </div>
              </div>
        </div>
        <div class="col-md-8">
<<<<<<< Updated upstream
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">what user learned or activities conditional branch</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">something</li>
                        <li class="list-group-item">anything</li>
                        <li class="list-group-item">nothng</li>
                        <li class="list-group-item">something</li>
                        <li class="list-group-item">anything</li>
                        <li class="list-group-item">nothng</li>
                      </ul>
                </div>
              </div>
=======
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
>>>>>>> Stashed changes
        </div>
    </div>
</div>
@endsection
