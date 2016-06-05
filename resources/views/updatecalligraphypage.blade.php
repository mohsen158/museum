@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <p>
                    <div class="w3-container w3-blue">
                        <h2>Update Calligraphy</h2> 

                    </div></p>
                    <form action="/calligraphyupdate/{{$ex->id}}" method="POST" class="w3-container">
                        {{ csrf_field() }}
                        <p>
                            <label>Calligraphy Name</label>
                            <input class="w3-input w3-hover-blue w3-animate-input " name="name" style="width:30%"type="text" value={{$ex->style}}></p>

                        <p> <button type="submit" class="w3-btn w3-white w3-border w3-border-blue w3-round">Update</button>
                        </p>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
