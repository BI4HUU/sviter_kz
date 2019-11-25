
var shipping_method = "Доставка курьером по Алматы";
var payment_method = "Оплата наличными курьеру";
var shipping_price = 0;
var price_all
var AllShops = JSON.parse(localStorage.AllShops);
let length_shops = JSON.parse(localStorage.AllShops).length;

function shopData_fun() {
    localStorage.shopData = ''
    var shopData = {};
    shopData["firstname"] = document.getElementById("payment_address_firstname").value
    shopData["lastname"] = document.getElementById("payment_address_lastname").value
    shopData["telephone"] = document.getElementById("payment_address_telephone").value
    shopData["address"] = document.getElementById("payment_address_address_1").value
    shopData["shipping"] = shipping_method;
    shopData["payment"] = payment_method;
    shopData["comment"] = document.getElementById("confirm_comment").value
    localStorage.shopData = JSON.stringify(shopData);
    console.log(shopData);
    var xhr = new XMLHttpRequest();

    var data =  `firstname=${document.getElementById("payment_address_firstname").value}&lastname=${document.getElementById("payment_address_lastname").value}&telephone=${document.getElementById("payment_address_telephone").value}&address=${document.getElementById("payment_address_address_1").value}&shipping=${shipping_method}&payment=${payment_method}&comment=${document.getElementById("confirm_comment").value}`;

    xhr.open("POST", 'mail.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // xhr.onreadystatechange = ...;

    xhr.send(data);
}

function prise_total() {
    price_all = 0;

    for (let index = 0; index < length_shops; index++) {
        price_all += Number(AllShops[index].numbers) * Number(AllShops[index].price);
        
    }
    console.log(shipping_price);
    console.log(price_all);
    
    price_all + shipping_price;
    document.getElementById("total").textContent = price_all;
    
}
prise_total()
setInterval(function () {
    prise_total()
}, 2000)

