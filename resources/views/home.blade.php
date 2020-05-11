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
        </div>
    </div>
</div>
@endsection
