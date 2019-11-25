
function trim1 (str) {
    return str.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
}

if (!localStorage.AllShops) {
    localStorage.AllShops = '[]'
}
setInterval(function () {
    document.getElementById("cart-total").innerText = JSON.parse(localStorage.AllShops).length;
}, 1000)
var this_sizes;

var options_list = document.getElementsByClassName("options_list")[0]
for (let index = 0; index < options_list.childElementCount; index++) {
    options_list.children[index].getElementsByTagName("span")[0].onclick = function () {
        this_sizes = event.target.innerText;
    };
}
var button_cart = document.getElementById("button-cart")
button_cart.onclick = function () {
    ADD_TO_CART()
};
function ADD_TO_CART() {
var one_antiBag = true;

    if (this_sizes) {

        var shopItem = {};

        shopItem["img"] = document.getElementsByClassName("swiper-slide")[0].getElementsByTagName("img")[0].src;
        shopItem["name_sviter"] = document.getElementsByTagName("h1")[0].textContent
        shopItem["size"] = this_sizes
        shopItem["price"] = document.getElementsByClassName("autocalc-product-price")[0].textContent.replace(/[^.\d]+/g,"").replace( /^([^\.]*\.)|\./g, '$1' )
        shopItem["articul"] = trim1(document.getElementsByClassName("pp_art")[0].textContent);
        shopItem["href"] = window.location.href;
        let length_shops = JSON.parse(localStorage.AllShops).length;
        let AllShops_parse = JSON.parse(localStorage.AllShops);
        for (let index = 0; index < length_shops; index++) {
            if (AllShops_parse[index].name_sviter == shopItem.name_sviter && AllShops_parse[index].size == this_sizes) {

                var AllShops = localStorage.AllShops;
                AllShops = JSON.parse(AllShops)
                AllShops[index].numbers = String(Number(AllShops_parse[index].numbers)+1);
                localStorage.AllShops = JSON.stringify(AllShops);
                one_antiBag = false;
            } else {
            }
        }
        console.log(one_antiBag);
    
        if (one_antiBag) {
            shopItem["numbers"] = '1';
            var AllShops = localStorage.AllShops;
            AllShops = JSON.parse(AllShops)
            AllShops.push(shopItem);
            AllShops = JSON.stringify(AllShops)
            localStorage.AllShops = AllShops;
            one_antiBag = false;
            console.log(localStorage.AllShops);
        }



        console.log(localStorage.AllShops);

    }

}
