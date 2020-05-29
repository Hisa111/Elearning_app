@extends('layouts.app')
@section('content')
@if(auth()->user()->admin_check() == true)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <h3>Categories</h3>
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{route('admin.makecategories')}}" class="btn btn-primary" role="button"> make New</a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="width:10%;">Id</th>
                        <th scope="col" style="width:20%;">Title</th>
                        <th scope="col" style="width:35%;">Description</th>
                        <th scope="col" style="width:35%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td scope="row" style="width:10%;"><a href="">{{$category->id}}</a></td>
                        <td style="width:20%;"><a href="" class="font-weight-bold">{{$category->title}}</a></td>
                        <td style="width:35%;">{{$category->description}}</td>
                        <td style="width:35%;">
                            <a href="{{ route('admin.valuelist', ['id'=>$category->id])}}" class="btn btn-primary d-inliney">Add</a>
                            <a href="{{ route('edit.editcategories', ['id'=>$category->id])}}" class="btn btn-success d-inline">Edit</a>
                            <form action="{{ route('admin.deletecategories', ['id'=>$category->id])}}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button href="" class="btn btn-danger">Delete</button>
                            </form>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@else
@php
return redirect()->route('home');
@endphp
@endif
@endsection