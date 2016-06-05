@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">


            <!-- Current Tasks -->
            @if (count($allcalig) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Calligraphies
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                            <th>Name </th>

                            </thead>
                            <tbody>
                            @foreach ($allcalig as $task)
                                <tr>
                                    <td class="table-text"><div>{{ $task->style }}</div></td>
                                    <td class="table-text"><div>{{ $task->time }}</div></td>
                                    <!-- Task Delete Button -->
                                    <td>
                                        <form action="/calligraphy/{{ $task->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="/calligraphyupdatepage/{{ $task->id }}" method="POST">
                                            {{ csrf_field() }}
                                            
                                            <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Update
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
