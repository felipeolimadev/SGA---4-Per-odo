<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/fd.png" rel="shortcut icon" type="image/x-icon">

  <title>SGA</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap-theme.min.css" rel="stylesheet">
  <link href="css/signin.css" rel="stylesheet">
  <link href="theme.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
    crossorigin="anonymous">
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <script src="js/ie-emulation-modes-warning.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <link href="css/estilo.css" rel="stylesheet">
  <script>
  $('#filtro-nome').keyup(function() {
    var nomeFiltro = $(this).val().toLowerCase();
    console.log(nomeFiltro);
    $('table tbody').find('tr').each(function() {
        var conteudoCelula = $(this).find('td:first').text();
        console.log(conteudoCelula);
        var corresponde = conteudoCelula.toLowerCase().indexOf(nomeFiltro) >= 0;
        $(this).css('display', corresponde ? '' : 'none');
    });
});
  </script>
</head>