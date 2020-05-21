@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="{{route('admin.editpostquestions',['id'=>$question->id, 'num'=>$limit])}}" method="POST">
        @method('PATCH')
        @csrf
        <div class="row">
          <div class="form-group col-md-5">
            <label for="word">Word</label>
            <input type="text" class="form-control" name="word" value="{{$question->question_text}}">
          </div>
          <div class="col-md-5">
            <label for="choices">Choice</label>

            {{-- @for($y = 1; $y <= $limit; $y++)
            <div class="form-group">
              <input type="text" class="form-control" name="choice{{$y}}_text" value="{{$choice->get($y)->choice_text}}">
              <input type="hidden" name="choice{{$y}}_id" value="{{ $choice->get()id }}">
            </div>
            @php
                $y += 1;
            @endphp
            @endfor --}}

            @foreach ($question->choices as $y => $choice)
            <div class="form-group">
              <input type="text" class="form-control" name="choice{{$y+1}}_text" value="{{$choice->choice_text}}">
              <input type="hidden" name="choice{{$y+1}}_id" value="{{ $choice->id }}">
            </div>
            @endforeach

          </div>
          <div class="col-md-2">
            <label for="choice">Answer</label>
              <select class="form-control" name="answer" id="answer">

                @for($z = 1; $z <= $limit; $z++)
                <option value="{{$z}}">{{$z}}</option>
                @endfor

              </select>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Post</button>
        </div>
      </form>
  </div>
</div>
@endsection