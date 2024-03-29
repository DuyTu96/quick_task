<!-- resources/views/tasks/index.blade.php -->

@extends('admin.layouts.main')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">

    <!-- New Task Form -->
    <form method="POST" class="form-horizontal">
        @csrf

        <!-- Task Name -->
        <div class="form-group">
            <label for="task-name" class="col-sm-3 control-label">Task</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="task-name" class="form-control">
            </div>
        </div>

        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Add Task
                </button>
            </div>
        </div>
            <!-- Display Validation Errors -->
    @include('admin.layouts.errors')
    @include('admin.layouts.alert')
    </form>
</div>

<!-- TODO: Current Tasks -->
@if (count($tasks) > 0)
<div class="col-md-3"></div>
<div class="panel panel-default col-md-6">
    <div class="panel-heading">
        Current Tasks
    </div>

    <div class="panel-body">
        <table class="table table-striped task-table">

            <!-- Table Headings -->
            <thead>
                <th>Task</th>
                <th>&nbsp;</th>
            </thead>

            <!-- Table Body -->
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <!-- Task Name -->
                    <td class="table-text">
                        <div>{{ $task->name }}</div>
                    </td>

                    <td>
                            <a href="/admin/edit/{{ $task->id }}"><button class="btn btn-success">Edit</button></a> ||
                            <a href="/admin/index/{{ $task->id }}"><button type="submit" class="btn btn-danger">
                                <i class="fa fa-btn fa-trash"></i>Delete
                            </button></a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection
