$(document).ready(function(){
  $.getJSON("includes/details.json",function(data){
  console.log(data);
  var sHTML= "";
  $.each (data.start,function(key,val){
    console.log(val);
    sHTML+="<option>" + val + "</option>";
  });
  
  $('#start').append(sHTML);
  var sHTML= "";
  $.each (data.end,function(key,val){
    console.log(val);
    sHTML+="<option>" + val + "</option>";

    


  });
  $('#end').append(sHTML);

  var sHTML= "";
  $.each (data.players,function(key,val){
    console.log(val);
    sHTML+="<option>" + val + "</option>";

    

  });
  $('#players').append(sHTML);

    });
    

  });




  





