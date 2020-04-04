<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bizon votre gestionnaire de co-propriété</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href={{asset("./css/reset.css")}}>
  <link rel="stylesheet" href={{asset("https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css")}}>
  <link rel="stylesheet" href={{asset("./css/style.css")}}>
  <script src={{asset("https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js")}}></script>
  <script src={{asset("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js")}}></script>
  <script src={{asset("https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js")}}></script>
  <script src={{asset("https://cdn.zingchart.com/zingchart.min.js")}}></script>
  <script src={{asset("https://cdn.jsdelivr.net/npm/vue/dist/vue.js")}}></script>
  <link rel="icon" sizes="32x32" href={{asset("./img/favicon.png")}} />
</head>

<body class="masthead">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 " id="main-image" alt="image presentant le concept"> </div>
            <div class="col lg-6" >
              <div>
                <div class="row"  id="panel" >
                @yield('content')
                </div>
             </div>
        </div>
      </div>
    </div>
  </body>
  </html>
