@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="first_heading">Welcome to my To Do App</h1>
        <div class="new-task-button">
            <button class="task-button" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                <i class="fa-solid fa-circle-plus add-icon"></i>  Add New Task            
            </button>
        </div>
        <!--Table for viewing To Do List -->
        <table class="table table-bordered table-striped main-table">
            <thead>
                <tr style="text-align: center;">
                    <th class="col-1">Serial No.</th>
                    <th class="col-6">Task To Do</th>
                    <th class="col-2">Status</th>
                    <th class="col-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="text-align: center;">
                    <th>1</th>
                    <td>Mark</td>
                    <td><span class="btn btn-warning disabled">Not Done</span></td>
                    <td>
                        <a href="" class="btn btn-info"><i class="fa-solid fa-pen-to-square" title="Edit Task"></i></a>
                        <a href="" class="btn btn-warning"><i class="fa-solid fa-bolt" title="Change Status"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash" title="Delete Task"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        function add()
        {
            alert(20);
        }
    </script>
@include ('add_new_task') 
@endsection