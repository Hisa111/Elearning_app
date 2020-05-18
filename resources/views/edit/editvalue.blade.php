@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="{{route('admin.editpostquestions',['id'=>$question->id, 'sec'=>$choice->question_id, 'num'=>$limit])}}" method="POST">
        @method('PATCH')
        @csrf
        <div class="row">
          <div class="form-group col-md-5">
            <label for="word">Word</label>
            <input type="text" class="form-control" name="word" placeholder="{{$question->question_text}}">
          </div>
          <div class="col-md-5">
            <label for="choices">Choice</label>

            @for($y = 1; $y <= $limit; $y++)
            <div class="form-group">
              <input type="text" class="form-control" name="{{$y}}" placeholder="{{$question->choices()->where('id', '<=', $y)->choice_text}}">
            </div>
            @endfor

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