
<script type="text/javascript">
  var form_group = document.getElementsByClassName("form-group");
  for (var i = form_group[0].getElementsByClassName("radio").length - 1; i >= 0; i--) {
            var form_group_radio = form_group[0].getElementsByClassName("radio")[i];
            form_group_radio.onclick = function() {
              if (!event.target.innerText == "") {
                sizes["man"] = event.target.innerText;
              }
            }
          } 
          for (var i = form_group[1].getElementsByClassName("radio").length - 1; i >= 0; i--) {
            var form_group_radio = form_group[1].getElementsByClassName("radio")[i];
            form_group_radio.onclick = function() {
              if (!event.target.innerText == "") {
                sizes["woman"] = event.target.innerText
              }
            }
          }
          for (var i = form_group[2].getElementsByClassName("radio").length - 1; i >= 0; i--) {
            var form_group_radio = form_group[2].getElementsByClassName("radio")[i];
            form_group_radio.onclick = function() {
              if (!event.target.innerText == "") {
                sizes["teen1"] = event.target.innerText
              }
            }
          }
          for (let i = 0; i < form_group[3].getElementsByClassName("radio").length; i++) {
            var form_group_radio = form_group[3].getElementsByClassName("radio")[i];
            form_group_radio.onclick = function() {
              if (!event.target.innerText == "") {
                sizes["teen2"] = event.target.innerText
              }
            }
          }
</script>

<script type="text/javascript">
  var tagName = document.getElementsByClassName("form-group")[3].getElementsByClassName("radio")[0].getElementsByTagName("input")[0].name
  document.getElementsByName(tagName)[5].name = "a"
  document.getElementsByName(tagName)[4].name = "a"
  document.getElementsByName(tagName)[3].name = "a"
</script>
<script>

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
var sizes = {};
sizes["man"] = '';
sizes["woman"] = '';
sizes["teen1"] = '';
sizes["teen2"] = '';

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
      button_cart.textContent = "В корзине";
      button_cart.style.background="#92E056";
        var shopItem = {};

        shopItem["img"] = document.getElementsByClassName("swiper-slide")[0].getElementsByTagName("img")[0].src;
        shopItem["name_sviter"] = document.getElementsByTagName("h1")[0].textContent
        if (document.getElementsByClassName("form-group").length == 5) {
          shopItem["size"] = this_sizes
        } else {
          shopItem["sizes"] = sizes;
          shopItem["numbers2"] = '4';
        }
        

        if (document.getElementsByClassName("autocalc-product-special").length > 0) {
          shopItem["price"] = document.getElementsByClassName("autocalc-product-special")[0].textContent.replace(/[^.\d]+/g,"").replace( /^([^\.]*\.)|\./g, '$1' )
        } else {
          shopItem["price"] = document.getElementsByClassName("autocalc-product-price")[0].textContent.replace(/[^.\d]+/g,"").replace( /^([^\.]*\.)|\./g, '$1' )
        }

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


</script>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-3 col-md-12">
        <div class="footer_logo">
          <img style="height: 70px; width: 96px;" src="image\catalog\logo_white.jpg" title=" Sviter.kz | Производство и продажа свитеров" alt="Sviter.kz">
          <br><span>Производство и продажа свитеров</span>
        </div>


        <div class="footer_copy"><br>
          © 2019,  Sviter.kz | Производство и продажа свитеров        </div>
      </div>
      <div class="col-3 hidden-md">
        <div class="footer_title">Магазин</div>
        <ul class="footer_list">
          <li><a href="for-man.html">Мужские свитера с оленями</a></li>
          <li><a href="for-woman.html">Женские свитера с оленями</a></li>
          <li><a href="for-children.html">Детские свитера с оленями</a></li>
          <li><a href="for-family.html">Свитера с оленями для всей семьи</a></li>
        </ul>
      </div>
            <div class="col-3 hidden-md">
        <div class="footer_title">Информация</div>
        <ul class="footer_list">
                    <li><a href="about.html">О нас</a></li>
                    <li><a href="payment-shipping.html">Оплата и доставка</a></li>
                    <li><a href="contact-us\index.htm">Контакты</a></li>
        </ul>
      </div>
            <div class="col-3 col-md-12 footer_contacts">
        <div class="footer_phone">
          <a class="" href="tel:+87081088260">+8 (708) 108 82 60</a></div>
        <div class="footer_phone">
            <a href="whatsapp://send?phone=+77474198980" style="font-size: 16px;">+7 (747) 419 89 80 WhatsApp</a><br>
        <a class="footer_callme underline underline-dashed" href="#feedbackModal32" data-toggle="modal">Перезвонить вам?</a>
        <div class="soc">
          <div>
           
            <a href="https://www.instagram.com/sviterkz/" target="_blank" class="color-insta"><i class="fab fa-instagram"></i></a>          </div>
        </div>
      </div>
    </div>
  </div>

      
<div class="modal modal-v-center fade sob_modal" id="feedbackModal32" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel32">
  <div class="modal-dialog modal-xs" role="document">
    <div class="modal-content clearfix">
      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-title" id="feedbackModalLabel32">Обратная связь</div>
      </div>
      <div class="modal-body">
        <form role="form" data-toggle="validator" enctype="multipart/form-data" id="form-sobfeedback32">
            <div class="form-group required">
            <input id="NameUser" type="text" class="form-control" name="sob_input[1][Ваше имя]" id="sobInput32-1" data-minlength="3" data-maxlength="25" required="" placeholder="Ваше имя">
            <div class="help-block with-errors"></div>
            <input type="hidden" class="form-control" name="sob_input[1][required]" id="sobInputHiddden32-1-1" value="input">
          </div>
            <div class="form-group required">
            <input id="PhoneUser" type="tel" class="form-control phone_mask" name="sob_input[2][Номер телефона]" id="sobInput[232]" data-minlength="3" required="" placeholder="Номер телефона">
            <div class="help-block with-errors"></div>
            <input type="hidden" class="form-control" name="sob_input[2][required]" id="sobInput[232-1]" value="input">
          </div>
            <div class="form-group">
            <input id="EmailUser" type="text" class="form-control" name="sob_input[3][E-mail]" id="sobInput32-3" placeholder="E-mail">
          </div>
        <div class="hidden-inputs">
            <input type="hidden" name="link_page" value="http://">
            <input type="hidden" name="module_name" value="Обратная связь">
            <input type="hidden" name="module_id" value="32">
            <input type="hidden" name="form_success" value="Наш менеджер перезвонит Вам в ближайшее время">
          </div>
          
            <button onclick="SEND()" id="callBeac" type="submit" class="btn btn-primary btn-fill btn-block">Отправить</button>
          
      </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="catalog\view\javascript\bootstrap\js\validator.js"></script>
<!--script type="text/javascript" src="catalog/view/javascript/bootstrap/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="catalog/view/javascript/bootstrap/js/bootstrap-datepicker.ru.js"></script>
<link rel="stylesheet" href="catalog/view/javascript/bootstrap/css/bootstrap-datepicker.css" /-->
<script type="text/javascript">
    function SEND(){
        var xhr = new XMLHttpRequest();
        var NameUser = document.getElementById('NameUser').value
        var PhoneUser = document.getElementById('PhoneUser').value
        var EmailUser = document.getElementById('EmailUser').value
        var callBeac = document.getElementById('callBeac')
        callBeac.textContent = "Отправлено"
        callBeac.style.background = "#61ac62";
        callBeac.style.borderColor = "#61ac62";
        var data =  `Name=${NameUser}&Phone=${PhoneUser}&Email=${EmailUser}`;

        xhr.open("POST", 'mail.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        // xhr.onreadystatechange = ...;

        xhr.send(data);
    }
</script>
<script type="text/javascript">
      $('#form-sobfeedback32').on('submit', function(e) {
        e.preventDefault(); 
        var that = $(e.target);          
        $.ajax({                 
          url: 'index.php?route=extension/module/sobfeedback/send',
          type: 'post', 
          data: $(this).serialize(), 
          dataType:'json', 
          success: function(data) {
            if (data['error']) {
              $('#feedbackModal32 .text-danger').remove();
              if (32 == 33) {
                yaCounter54912718.reachGoal('cooperation');
                fbq('track', 'Lead');
              }
              if (32 == 32) {
                yaCounter54912718.reachGoal('callback');
                fbq('track', 'Lead');
              }
              if (data['error']) {
                
              }
              return;
            }
            $('#feedbackModal32 .text-danger').remove();
            alertForm({form: that, msg: data['success']});
            that.find('input[type=\'tel\']').val('');
            that.find('input[type=\'text\']').val('');
            that.find('input[type=\'email\']').val('');
            that.find('textarea').val('');
          }, 
        });
      });
      function alertForm(alert) {
        var div = '<div class="modal modal-v-center fade sob_modal" id="feedbackModal32-success" tabindex="-1" role="dialog">';
        div +=        '<div class="modal-dialog modal-xs" role="document">';
        div +=            '<div class="modal-content clearfix">';
        div +=                '<div class="modal-header">';
        div +=                    '<button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>';
        div +=                    '<div class="modal-title modal-title-send">Заявка принята</div>';
        div +=                '</div>';
        div +=                '<div class="modal-body">';
        div +=                    '<div class="send-text">' + alert.msg + '</div>';
        div +=                '</div>';
        div +=            '</div>';
        div +=        '</div>';
        div +=    '</div>';

        $('footer').append(div);
        alert.form.closest('.modal').modal('hide');

        setTimeout(function() {
          $('#feedbackModal32-success').modal('show');
        }, 300);
      }
  document.getElementsByClassName("sizes_link")[0].onclick=function(){
	document.getElementsByClassName("fix_mobile_tab")[0].style.display = "block"
	setTimeout(function(){
		document.getElementsByClassName("fix_mobile_tab")[0].scrollIntoView()
	}, 500)
}
</script>


</footer>

<div id="load_more" style="display:none;">
        <div class="row"><div class="col-6 col-offset-3 col-sm-8 col-sm-offset-2 text-center">
            <a href="#" class="load_more btn btn-block btn-primary" data-loading-text="<i class='far fa-spinner-third fa-spin'></i>">Показать ещё</a>
        </div></div>
    </div>
</div>

<script type="text/javascript">
var sc_project=12063985; 
var sc_invisible=1; 
var sc_security="51bf34b8"; 
</script>
<script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async=""></script>
<noscript><div class="statcounter"><a title="Web Analytics
Made Easy - StatCounter" href="https://statcounter.com/" target="_blank"><img class="statcounter" src="https://c.statcounter.com/12063985/0/51bf34b8/1/" alt="Web Analytics Made Easy -
StatCounter"></a></div></noscript>

<script src="//code.jivosite.com/widget.js" data-jv-id="Xy5AWKiyZD" async></script>

</body></html>