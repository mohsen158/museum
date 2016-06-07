

    <script type="text/javascript">
      $(document).ready(function(){
    $(".inputhide").hide();
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


$('input:radio[name="condition"]').change(function() {
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
