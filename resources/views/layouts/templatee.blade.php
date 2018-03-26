<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class = "block" style="background-color: #4d887f;">
      <div><h1>Телефонная книга</h1></div>
    </div>

    @yield('content')
  </body>

  <style>
    .block {
      width: 100%;
      height: 20px;
      text-align: left;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      color: white;
      padding-top: 35px;
      padding-left: 15px;
      padding-bottom: 35px;
    }
  </style>

</html>
