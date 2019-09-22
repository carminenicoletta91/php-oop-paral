<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- FONT: LATO -->
   <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
   <!-- FONT: FONTAWESOME -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
   <!-- CSS:STYLE-->
   <link rel="stylesheet" href="style.css">
   <!-- JS: JQUERY -->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="script.js" charset="utf-8"></script>
   <!-- JS: MOMENT -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
   <!-- JS: CHART JS -->
   <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
   <!-- JS: HANDLEBARS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>


  </head>
  <body>
    <div class="container">

    </div>
    <div class="valori-somme">
      <h2 class="area-totale">Area Totale:</h2>
      <h2 class="volume-totale">Volume Totale:</h2>
    </div>


    <script id="item-template" type="text/x-handlebars-template">
    <div class="items" >
      <h1>Parallelepipedo N.{{{number}}}</h1>
      <h2>Parallelepipedo=<span>{{{a}}}</span>*<span>{{{b}}}</span>*<span>{{{c}}}</span></h2>
      <h2>Area:<span>{{{area}}}</span></h2>
      <h2>Volume:<span>{{{volume}}}</span></h2>
    </div>
  </script>
  </body>
</html>
