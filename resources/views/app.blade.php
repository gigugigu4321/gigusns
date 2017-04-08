<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ID=edge">
    <meta name="viewport" content="width=device-width, initail-scale=1, shrink-to-fit=no">

    <title>GIGU SNS</title>
    <link rel="stylesheet" href="css/app.css">

    <script>
      window.Laravel = {};
      window.Laravel.csrfToken = "{{ csrf_token() }}";
    </script>
  </head>
  <body>
    <div id="app">
      <example></example>
    </div>
  </body>
  <script src="js/app.js"></script>
</html>
