@extends('layouts.app')
@section('content')
<<<<<<< Updated upstream
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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
                        {{--foreach--}}
                        <tr>
                            <td scope="row" style="width:10%;"><a href="">#num</a></td>
                            <td style="width:20%;"><a href="" class="font-weight-bold">lesson name</a></td>
                            <td style="width:35%;">discription</td>
                            <td style="width:35%;">
                                <button class="btn btn-primary">Add word</button>
                                <button class="btn btn-success">Edit</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
=======
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                    {{--foreach--}}
                    <tr>
                        <td scope="row" style="width:10%;"><a href="">#num</a></td>
                        <td style="width:20%;"><a href="" class="font-weight-bold">lesson name</a></td>
                        <td style="width:35%;">discription</td>
                        <td style="width:35%;">
                            <button class="btn btn-primary">Add word</button>
                            <button class="btn btn-success">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
</div>
>>>>>>> Stashed changes
@endsection