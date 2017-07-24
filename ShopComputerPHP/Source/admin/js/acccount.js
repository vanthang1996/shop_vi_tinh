var account = [
    {"ma":"01",
        "name":"Lai",
        "fullname":"Hồ Lâm Lai",
        "email":"laihoit96@gmail.com",
        "pass":"123",
        "type":"Roor",
        "status":"true",
        "date":"1\/1\/1996",
        "lastlogin":"12\/12\/2012"
},
{"ma":"02",
        "name":"Phụng",
        "fullname":"Nguyễn Thị Hoài Phụng",
        "email":"phungit96@gmail.com",
        "pass":"123",
        "type":"Roor",
        "status":"true",
        "date":"1\/1\/1996",
        "lastlogin":"12\/12\/2012"
},
{"ma":"03",
        "name":"Lang",
        "fullname":"trương Tam Lang",
        "email":"laihoit96@gmail.com",
        "pass":"123",
        "type":"Roor",
        "status":"true",
        "date":"1\/1\/1996",
        "lastlogin":"12\/12\/2012"
},
{"ma":"04",
        "name":"Thắng",
        "fullname":"Trần Văn Thắng",
        "email":"laihoit96@gmail.com",
        "pass":"123",
        "type":"Roor",
        "status":"true",
        "date":"1\/1\/1996",
        "lastlogin":"12\/12\/2012"
}
];
function show_account(){
    var table = document.getElementById("table-body");
    for(i=0;i<account.length;i++){
        var row = document.createElement('tr');
        row.id=i;
        table.appendChild(row);
        for(p in account[i]){
            var col = document.createElement('td');
            col.textContent = account[i][p];
            row.appendChild(col);
                }
                var col = document.createElement('td');
                col.innerHTML="<button><span class='btn fa fa-edit'></span></button>"+"<button onclick='delete_account("+(i)+")'><span class='btn fa fa-trash'></span></button> ";
                row.appendChild(col);
    }
}
function delete_account(index){
    if(confirm('Bạn có muốn xóa tài khoản này không?')){
        deleteRow(index);
    }
}
function deleteRow(rowid){
    var row = document.getElementById(rowid);
    var table = row.parentNode;
    while(table && table.tagName != 'TABLE')
    table = table.parentNode;
    if(!table) return;
    table.deleteRow(row.rowIndex);
}
window.onload= show_account;