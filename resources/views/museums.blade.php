@extends('layouts.app')

@section('content')


<button  type="button" class="btn btn-info btn-circle btn-xl" onclick="location.href='/addmuseum';"><a href="/addmuseum"><i class="fa fa-plus" aria-hidden="true"></i>
</button>


    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">


            <!-- Current Tasks -->
            @if (count($ex) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Museums
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                            <th>Name </th>
                            <th>Reception</th>
                            </thead>
                            <tbody>
                            @foreach ($ex as $task)
                                <tr>
                                    <td class="table-text"><div>{{ $task->name }}</div></td>
                                    <td class="table-text"><div>{{ $task->reception }}</div></td>
                                    <!-- Task Delete Button --> 
                                    <td>
                                        <form action="/museumdelete/{{ $task->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="/museumupdatepage/{{ $task->id }}" method="POST">
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
