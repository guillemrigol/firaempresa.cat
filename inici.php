<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <style media="screen">


#logofira{
  display:block;
  position:absolute;
  width:320px;
  height:320px;
  background-color: transparent;
  transform:translate(-50%, -50%);
  left:50vw;
  top:50vh;
  cursor:pointer;
  transition: all 400ms ease;
}

#logolletres{
  display:block;
  position:absolute;
  width:400px;
  height:400px;
  transform:translate(-50%, -50%);
  left:54.5vw;
  top:52vh;
  transition: all 400ms ease;
}

.logosvg{
  width:300px;
  height:300px;
}

#buttonClicker{
  display:block;
  position:absolute;
  width:400px;
  height:400px;
  background-color: blue;
  transform:translate(-50%, -50%);
  left:50vw;
  top:50vh;
  cursor:pointer;
  transition: all 400ms ease;
  border: none;
}

  </style>
  <body>
    <button id="buttonClicker">

    <div id="logolletres">
      <img class="logolletres" src="assets/svg/logo02.svg" />
    </div>
    <div id="logofira">
      <img class="logosvg" src="assets/svg/iconset/Logo.svg" />
  </div>
      </button>
  </body>
</html>
