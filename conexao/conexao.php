<?php
  $servidor = 'mysql04.kci1.hospedagemdesites.ws';
  $usuario  = 'kci5';
  $senha    = 'jrkbt00@@';
  $banco    = 'annakstore';
  $conecta  = mysqli_connect($servidor, $usuario, $senha, $banco);

  if (mysqli_connect_errno()) {
    echo "<script>console.log('Conexao falhou: " . mysqli_connect_errno() . "' );</script>";
    //* die ("Conexão Falhou !!!" . mysqli_connect_errno());
  }

//* ----- dev ------
//*  $servidor = 'localhost';
//*  $usuario  = 'root';
//*  $senha    = '';
//*  $banco    = 'annakstore';

//* ----- prod ------
//*  $servidor = 'mysql04.kci1.hospedagemdesites.ws';
//*  $usuario  = 'kci5';
//*  $senha    = 'jrkbt00@@';
//*  $banco    = 'annakstore';
?>