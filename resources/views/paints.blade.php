@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">


            <!-- Current Tasks -->
            @if (count($paints) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Paints
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                            <th>Style </th>




                            </thead>
                            <tbody>
                            @foreach ($paints as $task)
                                <tr>
                                    <td class="table-text"><div>{{ $task->style }}</div></td>

                                    <!-- Task Delete Button -->
                                    <td>
                                        <form action="/paintdel/{{ $task->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="/paintupdate/{{ $task->id }}" method="GET">
                                            {{ csrf_field() }}


                                            <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-info">
                                                <i class="fa fa-cog"></i>  Update
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
