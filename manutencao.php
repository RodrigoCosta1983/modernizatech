<?php

	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
	
?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Moderniza Tech</title>
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
  <style>
    body{
      font-family: 'Titillium Web', sans-serif;
      color: #666666;
      text-align: center;
          background: whitesmoke;

    }
    .box{
          background: whitesmoke;

      width: 500px;
      margin: 9rem auto;
    }
    #title {
      font-size: 50px;
      margin-top: 25px;
    }
    #descricao{
      font-size:30px;
      margin: 20px auto;
    }
    #logo {
      margin-top: 25px;
      max-width: 365px;
      height: auto;
    }
    #logo-task {
      width: 225px;
    }
  </style>
</head>
<body>
  <div class="box">
  <!--<img src="logo.png" id="logo">-->
    <div id="title">
      SITE EM MANUTENÇÃO
    </div>
    <div id="descricao">
      (21) 98405-6383<br>
      contato@modernizatech.com.br
    </div>
    <a href="https://modernizatech.com.br/" target="_blank">
      <img src="about002.jpg" id="logo-task">
    </a>
  </div>
</body>
</html>