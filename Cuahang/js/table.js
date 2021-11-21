$(document).ready(function(){
    var baseurl = "http://localhost:8080/persons";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET",baseurl+"/all",true);
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState==4 && xmlhttp.status ==200){
            var persons = JSON.parse(xmlhttp.responseText);
            $("#example").DataTable({
               data:persons,
               "columns":[
                   {"data":"id"},
                   {"data":"firstName"},
                   {"data":"lastName"},
                   {"data":"age"}
               ]
            });
        }
    };
    xmlhttp.send();
 });