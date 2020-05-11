@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12 ">
                                <h3 class="h3 text-center">lesson name</h3>
                            </div>
                            <div class="col-md-12">
                                <h1 class="text-center" style=padding:100px;>subject</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12 ">
                            <p class="h3 text-right">number of all</p>
                        </div>
                        {{--foreach--}}
                        <button class="btn btn-primary btn-block m-3">choice1</button>
                        <button class="btn btn-primary btn-block m-3">choice2</button>
                        <button class="btn btn-primary btn-block m-3">choice3</button>
                        <button class="btn btn-primary btn-block m-3">choice4</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection