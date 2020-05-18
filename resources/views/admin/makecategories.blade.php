@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{route('admin.postcategories')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" name="description" rows="3" style="min-width:100%;"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Post</button>
              </form>
        </div>
    </div>
</div>
{{--
    @if(auth()->user()->id->is_admin() == true)
    
    @else
    <h3>you cant access</h3>
    @endif
    --}}
@endsection