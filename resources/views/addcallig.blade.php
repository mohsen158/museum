@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <p>
            <div class="w3-container w3-blue">
                <h2>Add Calligraphy</h2>

            </div></p>
                <form action="/addcalligraphy" method="POST" class="w3-container">
                    {{ csrf_field() }}
                    <p>
                        <label>Style Name</label>
                        <input class="w3-input w3-hover-blue w3-animate-input " name="text" style="width:30%"type="text">
                    </p>
                    <p> 
                        <button type="submit" class="w3-btn w3-white w3-border w3-border-blue w3-round">Add</button>
                    </p>
                </form>

            </div>
            </div>
        </div>
    </div>
</div>
@endsection
