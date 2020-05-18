@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{route('admin.editpostcategories', ['id'=>$category->id])}}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{$category->title}}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description"rows="3" style="min-width:100%;">{{$category->description}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Update</button>
              </form>
        </div>
    </div>
</div>
@endsection