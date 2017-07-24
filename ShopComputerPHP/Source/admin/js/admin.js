var products = [{
    "stt": "01",
    "id": "01",
    "productName": "Macbook Pro Retina - MC975",
    "productType": "Laptop",
    "shortDescription": "",
    "detail": {
        // vi xu ly
        "CPU": "Intel Core i7",
        "Loại CPU": "quad-core",
        "Tốc độ CPU": "2.3GHz",
        "Bộ nhớ đệm": "6MB L3 cache",
        "Tốc độ CPU tối đa": "Turbo Boost up to 3.3GHz",
        // bo nho
        "Loại RAM": "DDR3",
        "Dung lượng RAM": "8GB",
        "Tốc độ Bus RAM": "1600 MHz",
        //o cung
        "Loại ổ cứng": "SSD",
        "Dung lượng": "256GB",
        //dia quang
        "Tích hợp đĩa quang": "có",
        "Loại đĩa quang": "DVD",
        //do hoa
        "Bộ xử lý đồ họa": "Intel HD Graphics + NVIDIA GeForce",
        "Chipset card đồ họa: ": "Intel HD Graphics 4000 + NVIDIA GeForce GT 650M",
        "Dung lượng card đồ họa: ": "1GB",
        //man hinh
        "Loại màn hình": "Led",
        "Kích thước màn hình ": "15.4 inch",
        "Độ phân giải màn hình": "2880 x 1800 pixel",
        //am thanh
        "Công nghệ âm thanh": "Intel High Definition Audio",
        "Chuần âm thanh": "High Definition Audio",
        //ket noi
        "Chuẩn WiFi": "802.11ac Wi-Fi",
        "Chuẩn LAN": "Không"
    },
    "company": "Apple",
    "price": "22,400,000đ",
    "sale": "0",
    "image": ["img/mac/01/01.png", "img/mac/01/02.jpg", "img/mac/01/03.jpg", "img/mac/01/04.jpg", "img/mac/01/05.jpg", "img/mac/01/06.jpg"],
    "newProduct": "yes",
    "dateCreate": "29/10/2016",
    "soldOut": "no"
}];

function init() {
    showProduct();
}

function showProduct() {
    var table = document.getElementById("product");
    var row = document.createElement('tr');
    for (i = 0; i < products.length; i++) {
    // table.appendChild(row);//này sai nek ahihi
        for (p in products[i]) {
            if (p == 'detail') {
                var col = document.createElement('td');
                var ul = document.createElement('ul');
                ul.style.listStyle = "none";
                col.appendChild(ul);
                for (p1 in products[i][p]) {
                    var li = document.createElement('li');
                    li.innerHTML = p1 + ":" + products[i][p][p1];
                    ul.appendChild(li);
                }
                row.appendChild(col);
            } 
            
            else {
                var col = document.createElement('td');
                if(products[i][p] == 'no' || products[i][p] == 'yes'){
                	var check = document.createElement('input');
                	check.type='checkbox';
                	if(products[i][p] == 'no')
                		check.checked = false;
                	else
                		check.checked = true;
                	col.appendChild(check);
                }
                else{
                	col.textContent = products[i][p];
                }
                row.appendChild(col);
            }
        }
    }
    var operate = document.createElement('td');
    var deleteBtn = document.createElement('button');
    var edit = document.createElement('button');
    deleteBtn.className = "fa fa-trash delete";
    edit.className = "fa fa-edit edit";
    operate.appendChild(edit);
    operate.appendChild(deleteBtn);
    row.appendChild(operate);
}
window.onload = init;