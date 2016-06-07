@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-3 ">
            <ul class="nav nav-pills nav-stacked">
 
  <li><a href="/addArtwork"><span class="glyphicon glyphicon-chevron-right"></span> Add Artwork</a></li>
  <li><a href="/addartist"><span class="glyphicon glyphicon-chevron-right"></span> Add Arist</a></li>
  <li><a href="/addexhibition"><span class="glyphicon glyphicon-chevron-right"></span> Add Exhibition</a></li> 
  <li><a href="/addmuseum"><span class="glyphicon glyphicon-chevron-right"></span> Add Museum</a></li>
  <li><a href="addpaint"><span class="glyphicon glyphicon-chevron-right"></span> Add paint</a></li>
   <li><a href="addcalligraphy"><span class="glyphicon glyphicon-chevron-right"></span> Add Calligraphy</a></li>
    <li><a href="addsculpture"><span class="glyphicon glyphicon-chevron-right"></span> Add Sculpture</a></li>
</ul>
</div>
        <div class="col-md-3 ">
            <div class="panel panel-default">
                <div class="panel-heading">Find artworks</div>

                <div class="panel-body">
                    exhibnamequer
<form action="/exhibnamequer" method="POST" class="w3-container">
 <input class="w3-input w3-hover-blue w3-animate-input " name="name" style="width:30%"type="text"></p>
{{ csrf_field() }}
<p> <button type="submit" class="w3-btn w3-white w3-border w3-border-blue w3-round">ok</button>
                    </p>
</form>




                </div>
            </div>
            </div>
          
 <div class="col-md-3 ">
            <div class="panel panel-default">
                <div class="panel-heading">Find artworks</div>

                <div class="panel-body">
                   artistnamequer
                    <br>
                    <form action="/artistnamequer" method="POST" class="w3-container">
 <input class="w3-input w3-hover-blue w3-animate-input " name="name" style="width:30%"type="text"></p>
{{ csrf_field() }}
<p> <button type="submit" class="w3-btn w3-white w3-border w3-border-blue w3-round">ok</button>
                    </p>
</form>
                </div>
            </div>
            </div>

             <div class="col-md-3 ">
            <div class="panel panel-default">
                <div class="panel-heading">Find artworks</div>

                <div class="panel-body">
                    paintstylequer
                    <form action="/paintstylequer" method="POST" class="w3-container">
 <input class="w3-input w3-hover-blue w3-animate-input " name="name" style="width:30%"type="text"></p>
{{ csrf_field() }}
<p> <button type="submit" class="w3-btn w3-white w3-border w3-border-blue w3-round">ok</button>
                    </p>
</form>
                </div>
            </div>
            </div>

             <div class="col-md-offset-1 col-md-3 ">
            <div class="panel panel-default">
                <div class="panel-heading">Find artworks</div>

                <div class="panel-body">
                    calligstylequer
                    <br>
                    <form action="/calligstylequer" method="POST" class="w3-container">
 <input class="w3-input w3-hover-blue w3-animate-input " name="name" style="width:30%"type="text"></p>
{{ csrf_field() }}
<p> <button type="submit" class="w3-btn w3-white w3-border w3-border-blue w3-round">ok</button>
                    </p>
</form>
                </div>
            </div>
            </div>

             <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Find artworks</div>

                <div class="panel-body">
                   sculptsubstquer
                    <br>
                    <form action="/sculptsubstquer" method="POST" class="w3-container">
 <input class="w3-input w3-hover-blue w3-animate-input " name="name" style="width:30%"type="text"></p>
{{ csrf_field() }}
<p> <button type="submit" class="w3-btn w3-white w3-border w3-border-blue w3-round">ok</button>
                    </p>
</form>
                </div>
            </div>
            </div>

    </div>
</div>
@endsection
