var menustat = 0;
function obremenu(){
  if(menustat == 0){
    document.getElementById("main").style.top = "200px";
    menustat = 1;
  }else{
    document.getElementById("main").style.top = "-100vh";
    menustat = 0;
  }
}
