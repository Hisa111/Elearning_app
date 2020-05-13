@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <form action="" class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="word">Word</label>
                        <input type="text" class="form-control" id="word" placeholder="">
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="choice">Choice</label>
                        <input type="text" class="form-control" id="choice c1">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="choice c1">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="choice c1">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="choice c1">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="choice c1">
                      </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Update</button>
        </form>
        
    </div>
</div>
@endsection