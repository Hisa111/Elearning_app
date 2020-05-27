@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Categories</h2>
            </div>
            <div class="col-md-8">
                <div class="row">
                    {{--foreach--}}
                    
                    @foreach ($categories as $category)

                    <div class="col-md-6 h-75 pt-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{$category->title}}
                                </h5>
                                <p class="card-text">
                                    {{$category->description}}
                                </p>
                                <form action="{{ route('lesson.store', ['id' => $category->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit">test</button>
                                </form>
                                {{-- <a href="{{route('lesson.answers', ['id'=>$category->questions->get(0)->id])}}" class="btn btn-primary">
                                    Start
                                </a> --}}
                            </div>
                        </div>
                    </div>

                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
@endsection