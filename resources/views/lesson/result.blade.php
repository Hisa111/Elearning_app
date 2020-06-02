@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <h3>Basic 500</h3>
                    </div>
                    <div class="col-md-6 text-left">
                        {{--conditional branch: if the score is under 80% font-color red, else green--}}
                        {{-- <h3>Result:{{$score}}/{{$lesson->questions->count()}}</h3> --}}
                            <div class="row">
                                @if($correct_answers/$lesson->category->questions->count() < 0.7)
                                    <h3 class="col-md-5">Result: 
                                    <span style="color:red;">{{$correct_answers}}</span>
                                    /{{$lesson->category->questions->count()}}  </h3>
                                    <h4 class="col-md-7">
                                        <form method="POST" action="{{route('lesson.store', ['id' => $lesson->category_id])}}">
                                            @csrf
                                            <button type="submit" class="badge badge-pill badge-danger border-0">Re-Test</button>
                                        </form>
                                    </h4>
                                @else
                                    <h3 class="col-md-5">Result: 
                                    <span style="color:green;">{{$correct_answers}}</span>
                                    /{{$lesson->category->questions->count()}}  </h3>
                                    <h4 class="col-md-7"><a href="{{route('lesson.categories')}}" class="badge badge-success">Success</a></h4>
                            @endif
                            </div>
                    </div>
                    <table class="table col-md-12">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Num</th>
                                <th scope="col">Your choice</th>
                                <th scope="col">Result</th>
                                <th scope="col">Answer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lesson->category->questions as $x => $question)
                            <tr class="text-center">
                                <td scope="row">
                                    {{$x+1}}
                                </td>
                                
                                <td>
                                    @if($answers->get($x)->choice_id !=null)
                                    {{$answers->get($x)->choice->choice_text}}
                                    @else
                                    <span style="color: red;">
                                        <p>blank</p>
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    {{--conditional branch--}}
                                    @if ($answers->get($x)->choice_id ==null)
                                        <span style="color: red;">
                                            <p>blank</p>
                                        </span>
                                    @else
                                        @if($answers->get($x)->choice->is_correct == 2)
                                            <span style="color: green;">
                                                <i class="far fa-check-circle"></i>
                                            </span>
                                            @else
                                            <span style="color: red;">
                                                <i class="far fa-times-circle"></i>
                                            </span>
                                        @endif
                                    @endif
                                </td>
                                {{-- <td>{{ $question->choices->where('is_correct', 2)->first()->choice_text }}</td> by_tantan --}}
                                {{-- @dd($question->choices->where('is_correct', 2)); --}}
                                <td>{{$question->choices->where('is_correct', 2)->first()->choice_text}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-12 text-right">
                        @if($correct_answers/$lesson->category->questions->count() < 0.7)
                            <form class="" method="POST" action="{{route('lesson.store', ['id' => $lesson->category_id])}}">
                                @csrf
                                <button type="submit" class="btn btn-danger">Re-Test</button>
                            </form>
                        @endif
                        <a class="btn btn-success" href="{{route('lesson.categories')}}">Choose Next</a>
                        <a class="btn btn-primary" href="{{route('home')}}">Back Home</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection