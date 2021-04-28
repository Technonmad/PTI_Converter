function swap(){

    var n1 = document.getElementById("curlst1").options.selectedIndex;
    var n2 = document.getElementById("curlst2").options.selectedIndex;
    
    var tmp = document.getElementById("curlst1").options.selectedIndex;
    document.getElementById("curlst2").options.selectedIndex = n1;
    document.getElementById("curlst1").options.selectedIndex = n2;
}