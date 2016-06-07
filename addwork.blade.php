@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <p>
            <div class="w3-container w3-blue">
                <h2>Add Artwork</h2>

            </div></p>
                <form action="/addArtwork" method="POST" class="w3-container">
                    {{ csrf_field() }}




                    <p>
                        <label>Artwork Name</label>
                        <input class="w3-input w3-hover-blue w3-animate-input " name="name" style="width:30%"type="text"></p>

                  




                        <p>
                            <label>create Date</label>
                            <input class="w3-input w3-hover-blue w3-animate-input " name="cdate" style="width:30%"type="date"></p>



<input id="postageyes" name="type" value="Paint" type="radio">Paint
<br>
<label class ="inputhide">Paint style</label>
<input id="ptext" name="paintStyle"  class ="inputhide" value="type" type="text">
<br>
<input id="postageno2" name="type" value="Sculpture" type="radio">Sculpture
<br><label class ="inputhide">Sculpture style</label>
<input id="stext" name="calligStyle" class ="inputhide" value="type" type="text">
<br>
<input id="postageno3" name="type" value="calligraphy" type="radio">calligraphy substance
<br><label class ="inputhide">calligraphy </label>
<input id="ctext" name="substance" class ="inputhide" value="type" type="text">
<br>




<input id="rCondition" name="Condition" value="store" type="radio">Store
<br>
<input id="rCondition2" name="Condition" value="exposet" type="radio">Exposet
<br>
    <p>
                            <label>Recive Date</label>
                            <input id="edateid" class="w3-input w3-hover-blue w3-animate-input " name="recievedDate" style="width:30%"type="date"></p>




    <script type="text/javascript">
      $(document).ready(function(){
    $(".inputhide").hide();
    $("#edateid").hide();
});
      
      
$('input:radio[name="type"]').change(function() {
  if ($(this).val() == 'Paint') {
    $("#ptext").show();
  } else {
    $("#ptext").hide();
  }
  
  if ($(this).val() == 'Sculpture') {
    $("#stext").show();
  } else {
    $("#stext").hide();
  }
  
  if ($(this).val() == 'calligraphy') {
    $("#ctext").show();
  } else {
    $("#ctext").hide();
  }
  
});


$('input:radio[name="Condition"]').change(function() {
  if ($(this).val() == 'store') {
    
  
    $("#edateid").hide();
  }
  
  if ($(this).val() == 'exposet') {
    $("#edateid").show();
  } else {
    $("#edateid").hide();
  }
  
  
  
});


    </script>


<p> <button type="submit" class="w3-btn w3-white w3-border w3-border-blue w3-round">Add</button>
                    </p>

                </form>

            </div>
            </div>
        </div>
    </div>
</div>

@endsection
