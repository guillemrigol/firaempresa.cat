<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <style media="screen">

body{
  background-color: #CACACA
}

#logofira{
  display:block;
  position:absolute;
  width:320px;
  height:320px;
  background-color: transparent;
  transform:translate(10%, -60%);
  cursor:pointer;
  transition: all 400ms ease;
}

#logolletres{
  display:block;
  position:absolute;
  width:400px;
  height:400px;
  transform:translate(0%, -7%);
  transition: all 400ms ease;
}

.logosvg{
  width:300px;
  height:300px;
}

.lletres{
  width:350px;
  height:350px;
}

#buttonClicker{
  display:block;
  position:absolute;
  width:400px;
  height:400px;
  background-color:transparent;
  transform:translate(-50%, -50%);
  left:50vw;
  top:50vh;
  cursor:pointer;
  transition: all 400ms ease;
  border: none;
  outline: hidden;
}

#FadeAnimation{
  display:block;
  position:absolute;
  width:600px;
  height:600px;
  background-color:#CACACA;
  transform:translate(-150%, -90%);
  left:50vw;
  top:50vh;
  cursor:pointer;
  transition: all 400ms ease;
  border: none;
  outline: hidden;
  opacity: 0;
  animation:fade 2s ease;
}

@keyframes fade{
 0%{opacity: 1;}
 50%{opacity: 0.5;}
 100%{opacity: 0;}}

  </style>
  <body>
    <a href="http://localhost/projects/firaempresa.cat/estils.php"><button type="button" id="buttonClicker">
    <div id="logolletres">
      <img class="lletres" src="assets/svg/logo02.svg" />
    </div>
    <div id="logofira">
      <img class="logosvg" src="assets/svg/iconset/Logo.svg" />
    </div>
    <div id="FadeAnimation"> </div>
  </button>
  </body>
</html>
