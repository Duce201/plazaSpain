$("#sendForm").on("click", function(){
    let cities = $("#cities").val();
    let categories = $("#categories").val();
    let offers = $("#offers").val();

$.ajax({
  url:'kvartiri.php',
  type: 'POST',
  cache: false,
  data:{'cities':cities, 'categories': categories, 'offers':offers},
  dataType:'text',
  beforeSend: function(){
    $("#sendForm").prop("disabled", true);   
  },
  success: function(data){
    alert(data);
    $("#sendForm").prop("disabled", false); 
  } 
  });
  $('#advanceSearch').trigger("reset");
});

