<!-- resources/views/tasks/index.blade.php -->

@extends('admin.layouts.main')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">
    <!-- Display Validation Errors -->
    @include('admin.layouts.errors')

    <!-- New Task Form -->
    <form method="POST" class="form-horizontal">
        @csrf

        <!-- Task Name -->
        <div class="form-group">
            <label for="task-name" class="col-sm-3 control-label">Task</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="task-name" class="form-control" value="{{ $tasks->name }}">
            </div>
        </div>

        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Edit Task
                </button>
            </div>
        </div>
    </form>
</div>
