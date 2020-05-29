@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="row">
                    @foreach ($questions as $z => $question)
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="text-center">{{$lesson->category->title}}</h3>
                            </div>
                            <div class="col-md-12">

                                <h1 class="text-center" style=padding:100px;>{{$question->question_text}}</h1>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12 ">
                            <p class="h3 text-right">
                                {{$questions->currentPage()}}
                                of 
                                {{$questions->lastPage()}}

                            </p>
                        </div>
                        @foreach($question->choices as $y => $choice)
                            {{-- @dd(request()->session()->get('answers')[$y]->choice_id) --}}
                            {{-- @if(request()->session()->get('answers')[$questions->currentPage() - 1]->choice_id == null)
                            <form method="POST" action="{{route('lesson.answerpost', ['id' => $lesson->id, 'choice_id'=>$choice->id])}}">
                                @csrf
                                <input type="hidden" name="page_num" value="{{$questions->currentPage() - 1}}">
                                <input type="hidden" name="next_page" value="{{ $questions->nextPageUrl() }}">
                                <button class="btn btn-primary btn-block m-3" name="choice{{$y+1}}_text">
                                    {{$choice->choice_text}}
                                </button>
                            </form> --}}

                            @if(request()->session()->get('answers')[$questions->currentPage() - 1]->choice_id == $choice->id)
                            <form method="POST" action="{{route('lesson.answerdelete')}}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="page_num" value="{{$questions->currentPage() - 1}}">
                                <button class="btn btn-danger btn-block m-3" name="choice{{$y+1}}_text">
                                    {{$choice->choice_text}}
                                </button>
                            </form>
                            @else
                            <form method="POST" action="{{route('lesson.answerpost', ['id' => $lesson->id, 'choice_id'=>$choice->id])}}">
                                @csrf
                                <input type="hidden" name="next_page" value="{{ $questions->nextPageUrl() }}">
                                <input type="hidden" name="page_num" value="{{$questions->currentPage() - 1}}">
                                <button class="btn btn-primary btn-block m-3" name="choice{{$y+1}}_text">
                                    {{$choice->choice_text}}
                                </button>
                            </form>
                            @endif
                        @endforeach
                    </div>

                    @endforeach
                    <div class="col-md-12">
                        <div class="justify-content-center">
                            {{$questions->links()}}
                        </div>
                    </div>
                    <form action="{{route('lesson.answersubmit', ['id' =>$lesson->id])}}" method="POST">
                        @csrf
                        <button class="btn btn-primary" type='submit'>Submit</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
@endsection