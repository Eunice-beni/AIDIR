function showMenu(selectedMenu){
    var selects = document.querySelectorAll("select.selectmenu");
    for(var i=0; i<selects.length; i++){
       var isVisible = (selects[i].getAttribute("id") === selectedMenu);
       selects[i].style.display = isVisible ? "block" : "none";
    }
}
  
var radios = document.getElementsByName("region");
for(var e=0; e<radios.length; e++){
    radios[e].addEventListener("click", function(){
        if(this.checked){
            showMenu(this.value);         
        }
    });
}
  
showMenu();