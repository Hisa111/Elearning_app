@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 text-right">
                        <h3>Basic 500</h3>
                    </div>
                    <div class="col-md-6 text-left">
                        {{--conditional branch: if the score is under 80% font-color red, else green--}}
                        <h3>Result:{score}</h3>
                    </div>
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Result</th>
                                <th scope="col">Word</th>
                                <th scope="col">Answers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td scope="row">
                                    {{--conditional branch--}}
                                    <span style="color: green;">
                                        <i class="far fa-check-circle"></i>
                                    </span>
                                    <span style="color: red;">
                                        <i class="far fa-times-circle"></i>
                                    </span>
                                </td>
                                <td>what word</td>
                                <td>answer</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection