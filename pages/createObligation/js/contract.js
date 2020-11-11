function viewContent(id){
    var obj = "content_"+id;
    var listType = document.getElementById(obj);
    for (i=1; i<=3; i++){
        let obj1 = "content_"+i;
        document.getElementById(obj1).style.display = "none";
    }
listType.style.display = "block";
}

