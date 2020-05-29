@extends('layouts.app')
@section('content')
@if(auth()->user()->admin_check() == true)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <h3>Questions</h3>
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{ route('admin.makevalue', ['id'=>$category->id]) }}" class="btn btn-primary" role="button"> make New</a>
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
                    @foreach($questions as $question)
                    <tr>
                        <td scope="row" style="width:10%;"><a href="">{{$question->id}}</a></td>
                        <td style="width:20%;"><a href="" class="font-weight-bold">{{$question->question_text}}</a></td>
                        <td style="width:35%;">null</td>
                        <td style="width:35%;">
                            <a href="{{ route('edit.editvalue', ['id'=>$question->category_id, 'sec'=>$question->id, 'num'=>$limit]) }}" class="btn btn-success d-inline">Edit</a>
                            <form action="{{ route('admin.deletevalue', ['id'=>$question->category_id, 'sec'=>$question->id])}}" method="POST" class="d-inline">
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