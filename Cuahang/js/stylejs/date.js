const date = document.getElementById("date")
function showdates(){
    let day =["Thứ Hai","Thứ Ba","Thứ Tư","Thứ Năm","Thứ Sáu","Thứ 7","Chủ Nhật"]
    let showdate = new Date();
    date.innerHTML=day[showdate.getDay()]+" Ngày " + showdate.getDate() + " Tháng "+ (showdate.getMonth()+1) + " Năm "  +showdate.getFullYear()
   
}
showdates()