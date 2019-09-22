function init(){
  console.log("Hello World");
  getmyparalle();
  $(".valori-somme").show();
  
}
$(document).ready(init);
function getmyparalle(){
  var a1 = prompt("Inserisci valore a:");
  var b1 = prompt("Inserisci valore b:");
  var c1 = prompt("Inserisci valore c:");
  var a2 = prompt("Inserisci valore a:");
  var b2 = prompt("Inserisci valore b:");
  var c2 = prompt("Inserisci valore c:");
  var a3 = prompt("Inserisci valore a:");
  var b3 = prompt("Inserisci valore b:");
  var c3 = prompt("Inserisci valore c:");

  $.ajax({
    url:'getparam.php',
    method:"GET",
    data:{
      a1:a1,b1:b1,c1:c1,
      a2:a2,b2:b2,c2:c2,
      a3:a3,b3:b3,c3:c3,
    },
    success:function(data){
      printparalle(data);
      console.log(data);
    },
    errorr:function(){
      alert("ERRORE");
    },
  });
}
function printparalle(data){
  $(".area-totale").append("<span>"+ sumArea(data) +"</span>");
  $(".volume-totale").append("<span>"+ sumVolume(data) + "</span>");
  var obj = $(".container");
  var source=$("#item-template").html();
  var template=Handlebars.compile(source);
  for(var i=0;i<data.length;i++){
    var d=data[i];
    var context = {
      number:i+1,
      a:d.a,
      b:d.b,
      c:d.c,
      area:d.Area,
      volume:d.Volume
    };
    var html=template(context);
    obj.append(html);
}
}
function sumArea(data){
  var area = 0;
  for(var i=0;i<data.length;i++){
    var d=data[i];
    area += d.Area;
  };
  return area;
}
function sumVolume(data){
  var volume = 0;
  for(var i=0;i<data.length;i++){
    var d=data[i];
    volume+=d.Volume;
  }
  return volume;
}
function printsumareaandvolume(){
  $(".area-totale").html(sumArea(data));
}
