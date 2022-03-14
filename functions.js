var menustat = 0;
function obremenu(){
  if(menustat == 0){
    document.getElementById("main").style.top = "200px";
    document.getElementById("menu_button").style.backgroundImage = "url('assets/svg/iconset/x.svg')";
    menustat = 1;
  }else{
    document.getElementById("main").style.top = "-100vh";
    document.getElementById("menu_button").style.backgroundImage = "url('assets/svg/iconset/menu.svg')";
    menustat = 0;
  }
}
