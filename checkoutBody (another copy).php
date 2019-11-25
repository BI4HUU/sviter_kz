

<style>
		#d_quickcheckout input[type=radio],
		#d_quickcheckout input[type=checkbox] {
			display: inline-block;
		}
		#d_quickcheckout .login-btn-group {
			margin-bottom: 20px;
		}
		#d_quickcheckout #login_button_popup:hover,
		#d_quickcheckout #login_button_popup:active,
		#d_quickcheckout #login_button_popup:focus,
		#d_quickcheckout #login_button_popup.focus,
		#d_quickcheckout #login_button_popup.active,
		#d_quickcheckout #login_button_popup.hover {
			outline: 0px !important;
		}
		#d_quickcheckout #login_social_login #d_social_login {
			margin-bottom: 10px;
		}
		#d_quickcheckout .modal {
			/* ... */
			overflow-y: scroll;
		}
		#d_quickcheckout .col-md-0 {
			display: none;
		}
		#d_quickcheckout .checkbox-input {
			margin-bottom: 10px;
		}
		#d_quickcheckout .text-danger {
			margin: 5px 0px 0px 0px;
		}
		#d_quickcheckout .list-group-item label,
		#d_quickcheckout .list-group-item {
			cursor: pointer;
			width: 100%;
		}
		#d_quickcheckout .list-group-item input[type=radio] {
			display: none;
		}
		#d_quickcheckout .address-item {
			white-space: pre;
		}
		#d_quickcheckout .control-label .text-danger {
			text-align: left;
		}
		#d_quickcheckout #shipping_method .radio label,
		#d_quickcheckout #payment_method .radio label {
			width: 100%;
		}
		#d_quickcheckout #shipping_method .radio label .price,
		#d_quickcheckout #payment_method .radio label .price {
			float: right;
		}
		#d_quickcheckout .qc-totals .row > div:first-child{
			text-align: right;
		}
		#d_quickcheckout .qc-totals .row:last-child {
			margin-top: 10px;
		}
		#d_quickcheckout .qc-totals .row:last-child > div{
		}
		#d_quickcheckout .qc-totals .row:last-child div,
		#d_quickcheckout .qc-totals .row:last-child label {
			font-size: 16px;
			font-weight: bold;
		}
		#d_quickcheckout .qc-quantity {
			min-width: 50px;
		}
		#d_quickcheckout .qc-product-qantity {
			width: 40px;
			background: transparent;
			border: 0;
			height: 38px;
			font-size: 18px;
			padding: 0;
			text-align: center;
		}
		#d_quickcheckout #payment_view #button-confirm,
		#d_quickcheckout #payment_view a,
		#d_quickcheckout #payment_view button,
		#d_quickcheckout #payment_view .btn,
		#d_quickcheckout #payment_view .btn-primary {
			display: none !important;
		}
		#d_quickcheckout #payment_view #payment_modal #button-confirm,
		#d_quickcheckout #payment_view #payment_modal a,
		#d_quickcheckout #payment_view #payment_modal button,
		#d_quickcheckout #payment_view #payment_modal .btn,
		#d_quickcheckout #payment_view #payment_modal .btn-primary {
			display: inline-block !important;
		}
		#d_quickcheckout .panel-body {
			position: relative;
		}
		#d_quickcheckout .preloader {
			width: 100%;
			height: 100%;
			position: absolute;
			background: rgba(0, 0, 0, 0.1);
			z-index: 1000;
			top: 0;
			box-sizing: border-box;
			display: none;
		}
		#d_quickcheckout .preloader .icon {
			top: 50%;
			left: 50%;
			position: absolute;
			margin-top: -50px;
			margin-left: -50px;
			width: 100px;
			height: 100px;
			color: #333333;
		}
		</style>

<div class="container" id="container">

			<div class="row">
				<div id="content" class="col-sm-12">
		
			
	
			
	
 














	<div id="d_quickcheckout">
	<div class="row">
			<div class="col-md-12"></div>
		</div>
		<div class="qc-col-0">
	<h1>Оформление заказа</h1>














	





	
			

	


	</div>
		<div class="row">
			<div class="qc-col-1 col-md-6">
			<div id="cart_view" class="qc-step" data-col="1" data-row="0">
		<div class="">
			
	
			<div class="qc-checkout-product">
				
				
	
				<div id="cart_wrap" class="cart">
	
				<div class="sub_404">Вы ещё ничего не добавили в корзину!</div>
<a href="https://sviter.kz/" class="btn btn-primary">Перейти к покупкам</a>
				</div>
				
	
				<div class="cart-totals-block">
				<div class="row">	

					<div class="cart-totals-right col-12">
						
							<div class="qc-totals">

								
									<div class="qc_t_row sub_total">
										<div class="qc_t_left">Предварительная стоимость:</div>
										<div class="qc_t_right"> <span id="sub_total">122</span>.00 <span class="rub">Тг</span></div>
									</div>
								
									<div style="display: none;" id="shipping_block" class="qc_t_row shipping">
										<div class="qc_t_left">Доставка Казпочтой по Казахстану:</div>
										<div class="qc_t_right"> <span id="shipping">1500</span>.00 <span class="rub">Тг</span></div>
									</div>
								
									<div class="qc_t_row total">
										<div class="qc_t_left">Итого:</div>
										<div class="qc_t_right"> <span id="total">122</span>.00 <span class="rub">Тг</span></div>
									</div>
								
							</div>
						
						<div class="preloader row"><img class="icon" src="image/catalog/d_quickcheckout/svg-loaders/puff.svg"></div>
					</div>
				</div>
				</div>
			</div>
		</div>
	
	</div></div>
			<div class="col-md-6">
				<div class="row">
					<div class="qc-col-2 col-md-12">
						<div class="qc-step" data-col="2" data-row="0">
		
		<div id="login_view">
	
	
		<div class="title_type_1">Контактные данные</div>
		
		
		
		<div class="hidden">
			
			
			
	
	<div class="modal fade" role="dialog" id="login_model">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h4 class="modal-title">
						<span class="icon">
					<i class=""></i>
				</span> 
				Войти		</h4>
				</div>
				<div class="modal-body">
					<form id="login_form">
				<div class="row">
					<div class="form-group col-lg-12 email">
						<label class="control-label" for="login_email">E-Mail</label>
						<input type="text" name="email" value="" id="login_email" placeholder="E-Mail" class="form-control">
					</div>
					<div class="form-group  col-lg-12 password">
						<label class="control-label" for="login_password">Пароль</label> 
						
						<input type="password" name="password" value="" id="login_password" placeholder="Пароль" class="form-control">
						<a id="remeber_password" href="https://shwedar.by/forgot-password/"><i class="fa fa-angle-right "></i> Забыли пароль?</a>
					</div>
	
					<div class="form-group col-sm-12">
						<label class="control-label hidden-lg">&ensp;</label> 
						<button id="button_login" class="btn btn-primary btn-block">Войти</button>
					</div>
				</div>
			</form>
				</div>
				
			</div>
		</div>
	</div>
	
	</div>
	
	</div>
		<div id="login_social_login"></div>
	</div>
	<div id="payment_address" class="qc-step" data-col="2" data-row="2">
	<div class="">
		<div class="checkout-block">

			<div class="checkout-body">
				
				
				<form id="payment_address_form" class="row" novalidate="novalidate">






	<div id="payment_address_firstname_input" class="text-input form-group  sort-item   required" data-sort="0">
								<div class="col-12">
									<label class="control-label" for="payment_address_firstname"> 
										<span class="text" title=""> Имя</span> 
									</label>
								</div>
								<div class="col-12"> 
									<input type="text" name="payment_address.firstname" id="payment_address_firstname" value="" class="form-control  required firstname" autocomplete="on" placeholder="Имя" data-rule-minlength="1" data-msg-minlength="Имя должно быть от 1 до 32 символов!" data-rule-maxlength="32" data-msg-maxlength="Имя должно быть от 1 до 32 символов!">
								</div>
							</div><div id="payment_address_lastname_input" class="text-input form-group  sort-item   required" data-sort="1">
								<div class="col-12">
									<label class="control-label" for="payment_address_lastname"> 
										<span class="text" title=""> Фамилия</span> 
									</label>
								</div>
								<div class="col-12"> 
									<input type="text" name="payment_address.lastname" id="payment_address_lastname" value="" class="form-control  required lastname" autocomplete="on" placeholder="Фамилия" data-rule-minlength="1" data-msg-minlength="Фамилия должна быть от 1 до 32 символов!" data-rule-maxlength="32" data-msg-maxlength="Фамилия должна быть от 1 до 32 символов!">
								</div>
							</div><div id="payment_address_telephone_input" class="text-input form-group  sort-item   required" data-sort="2">
								<div class="col-12">
									<label class="control-label" for="payment_address_telephone"> 
										<span class="text" title=""> Телефон</span> 
									</label>
								</div>
								<div class="col-12"> 
									<input type="tel" name="payment_address.telephone" id="payment_address_telephone" value="" class="form-control  required telephone" autocomplete="on" placeholder="Номер телефона" data-rule-minlength="3" data-msg-minlength="Номер телефона должен быть от 3 до 32 символов!" data-rule-maxlength="32" data-msg-maxlength="Номер телефона должен быть от 3 до 32 символов!" data-msg-telephone="Введите правильный номер телефона">
								</div>
							</div>
							<div id="payment_address_email_confirm_input" class="text-input form-group  sort-item hidden  " data-sort="4">
								<div class="col-12">
									<label class="control-label" for="payment_address_email_confirm"> 
										<span class="text" title=""> Подтвердить Email</span> 
									</label>
								</div>
								<div class="col-12"> 
									<input type="text" name="payment_address.email_confirm" id="payment_address_email_confirm" value="" class="form-control  not-required email_confirm" autocomplete="on" placeholder="Подтвердить Email" data-rule-equalto="#payment_address_email" data-msg-equalto="Email не совпадает!">
								</div>
							</div><div id="payment_address_fax_input" class="text-input form-group  sort-item hidden  " data-sort="5">
								<div class="col-12">
									<label class="control-label" for="payment_address_fax"> 
										<span class="text" title=""> Факс</span> 
									</label>
								</div>
								<div class="col-12"> 
									<input type="text" name="payment_address.fax" id="payment_address_fax" value="" class="form-control  not-required fax" autocomplete="on" placeholder="Факс" data-rule-minlength="3" data-msg-minlength="Номер телефона должен быть от 3 до 32 символов!" data-rule-maxlength="32" data-msg-maxlength="Номер телефона должен быть от 3 до 32 символов!">
								</div>
							</div><div id="payment_address_password_input" class="text-input form-group  sort-item hidden  " data-sort="6">
								<div class="col-12">
									<label class="control-label" for="payment_address_password"> 
										<span class="text" title=""> Пароль</span> 
									</label>
								</div>
								<div class="col-12"> 
									<input type="password" name="payment_address.password" id="payment_address_password" value="" class="form-control  not-required password" autocomplete="on" placeholder="Пароль" data-rule-minlength="3" data-msg-minlength="Пароль должен быть от 3 до 20 символов!" data-rule-maxlength="20" data-msg-maxlength="Пароль должен быть от 3 до 20 символов!">
								</div>
							</div><div id="payment_address_confirm_input" class="text-input form-group  sort-item hidden  " data-sort="7">
								<div class="col-12">
									<label class="control-label" for="payment_address_confirm"> 
										<span class="text" title=""> Подтвердить</span> 
									</label>
								</div>
								<div class="col-12"> 
									<input type="password" name="payment_address.confirm" id="payment_address_confirm" value="" class="form-control  not-required confirm" autocomplete="on" placeholder="Подтвердить" data-rule-equalto="#payment_address_password" data-msg-equalto="Пароли не совпадают!" data-rule-minlength="1" data-msg-minlength="Пароли не совпадают!">
								</div>
							</div><div id="payment_address_heading_heading" class="col-12 sort-item heading " data-sort="8">
							<hr>
					</div><div id="payment_address_company_input" class="text-input form-group  sort-item hidden  " data-sort="9">
								<div class="col-12">
									<label class="control-label" for="payment_address_company"> 
										<span class="text" title=""> Компания</span> 
									</label>
								</div>
								<div class="col-12"> 
									<input type="text" name="payment_address.company" id="payment_address_company" value="" class="form-control  not-required company" autocomplete="on" placeholder="Компания" data-rule-minlength="3" data-msg-minlength="Название компании должно содержать от 3 до 128 символов" data-rule-maxlength="34" data-msg-maxlength="Название компании должно содержать от 3 до 128 символов">
								</div>
							</div><div id="payment_address_customer_group_id_input" class="radio-input form-group  sort-item hidden  " data-sort="10">
									<div class="col-12">
										<label class="control-label">
											<span title="">Группа покупателя</span> 
										</label>
									</div>
									<div class="col-12">
	
											
											<div class="radio">
												<label for="payment_address_customer_group_id_1">
													<input type="radio" autocomplete="on" name="payment_address.customer_group_id" value="1" id="payment_address_customer_group_id_1" checked="checked" class="validate not-required">
														Default
													</label>
											</div>
										
								</div>
							</div>
							<div id="payment_address_address_1_input" class="text-input form-group  sort-item   required" data-sort="14">
								<div class="col-12">
									<label class="control-label" for="payment_address_address_1"> 
										<span class="text" title=""> Адрес</span> 
									</label>
								</div>
								<div class="col-12"> 
									<input type="text" name="payment_address.address_1" id="payment_address_address_1" value="" class="form-control  required address_1" autocomplete="on" placeholder="Точный адрес: город, улица, дом, квартира" data-rule-minlength="3" data-msg-minlength="Адрес должен быть от 3 до 128 символов!" data-rule-maxlength="128" data-msg-maxlength="Адрес должен быть от 3 до 128 символов!">
								</div>
							</div><div id="payment_address_address_2_input" class="text-input form-group  sort-item hidden  " data-sort="15">
								<div class="col-12">
									<label class="control-label" for="payment_address_address_2"> 
										<span class="text" title=""> Адрес (дополнительно)</span> 
									</label>
								</div>
								<div class="col-12"> 
									<input type="text" name="payment_address.address_2" id="payment_address_address_2" value="" class="form-control  not-required address_2" autocomplete="on" placeholder="Адрес (дополнительно)" data-rule-minlength="3" data-msg-minlength="Адрес должен быть от 3 до 128 символов!" data-rule-maxlength="128" data-msg-maxlength="Адрес должен быть от 3 до 128 символов!">
								</div>
							</div><div id="payment_address_postcode_input" class="text-input form-group  sort-item hidden  " data-sort="16">
								<div class="col-12">
									<label class="control-label" for="payment_address_postcode"> 
										<span class="text" title=""> Индекс</span> 
									</label>
								</div>
								<div class="col-12"> 
									<input type="text" name="payment_address.postcode" id="payment_address_postcode" value="" class="form-control  not-required postcode" autocomplete="on" placeholder="Индекс" data-rule-minlength="2" data-msg-minlength="Индекс должен быть от 2 до 10 символов!" data-rule-maxlength="10" data-msg-maxlength="Индекс должен быть от 2 до 10 символов!">
								</div>
							</div><div id="payment_address_newsletter_input" class="checkbox-input form-group sort-item hidden  " data-sort="17">
							
							
								<div class="col-12">
									<label for="payment_address_newsletter" class="custom-control">
										<input type="hidden" name="payment_address.newsletter" value="0">
											<input type="checkbox" autocomplete="on" name="payment_address.newsletter" id="payment_address_newsletter" class="validate not-required" value="1"><span></span>
	
											<span title="">Я хочу подписаться на рассылку новостей Shwedar.by | Производство и продажа свитеров.</span> 
										</label>
								</div>
							
							
	
							
						</div>
						
						

						
						
						
						<div id="payment_address_agree_input" class="checkbox-input form-group sort-item hidden  " data-sort="19">
							
							
								<div class="col-12">
									<label for="payment_address_agree" class="custom-control">
										<input type="hidden" name="payment_address.agree" value="0">
											<input type="checkbox" autocomplete="on" name="payment_address.agree" id="payment_address_agree" class="validate not-required" value="1"><span></span>
	
											<span title="">Мною прочитаны и я даю согласие с документом <a href="https://shwedar.by/index.php?route=information/information/agree&amp;information_id=3" class="agree"><b>Публичная оферта</b></a></span> 
										</label>
								</div>
							
							
	
							
						</div></form>
				
			</div>
		</div>
	</div>
	</div><div id="shipping_method" class="qc-step" data-col="2" data-row="3">
	
	<form id="shipping_method_form">
		
			<div class="checkout-block">
				<div class="title_type_1">Способ доставки</div>
				<div class="checkout-body">
					
					
					<div id="shipping_method_list">

						<div class="flex f-between">

						<label onclick="shipping_price = 0; shipping_method = 'Доставка курьером по Алматы'; prise_total(); document.getElementById('shipping_block').style.display = 'none';" class="custom-control">
						<input type="radio" name="shipping_method" value="dostavkaplus.sh1" id="dostavkaplus.sh1" checked="checked" data-refresh="5" class="styled">
						<span>
						</span>
						Доставка курьером по Алматы
						<small><p><br></p></small>
						</label>
						<label for="dostavkaplus.sh1"><span class="price">0</span></label>
						</div>

						<div class="flex f-between">
							<label onclick="prise_total(); shipping_price = '1500'; shipping_method = 'Доставка Казпочтой по Казахстану'; document.getElementById('shipping_block').style.display = 'flex';" class="custom-control">
								<input type="radio" name="shipping_method" value="dostavkaplus.sh3" id="dostavkaplus.sh3" data-refresh="5" class="styled">
								<span></span>
								Доставка Казпочтой по Казахстану
							</label>
							<span class="rub"></span>

						<div style="width:100%;display: flex;justify-content: space-between;">
							<label style="margin-left:25px" onclick="prise_total(); shipping_price = '1500'; shipping_method = 'Доставка Казпочтой по Казахстану'; document.getElementById('shipping_block').style.display = 'flex';" class="custom-control">
								<span></span>
								1 свитер:
							</label>
							<label for="dostavkaplus.sh3"><span class="price">1500.00 <span class="rub"> Тг</span></span></label>
						</div>

						<label  style="margin-left:25px" onclick="prise_total(); shipping_price = '1500'; shipping_method = 'Доставка Казпочтой по Казахстану'; document.getElementById('shipping_block').style.display = 'flex';" class="custom-control">
						<span></span>
						от 2х свитеров:
						</label>
						<label for="dostavkaplus.sh3"><span class="price">0 <span class="rub"> Тг</span></span></label>
						</div>
						<div class="flex f-between">

						<label onclick="prise_total(); shipping_price = '0'; shipping_method = 'Самовывоз'; document.getElementById('shipping_block').style.display = 'none';" class="custom-control">
							<input type="radio" name="shipping_method" value="dostavkaplus.sh5" id="dostavkaplus.sh5" data-refresh="5" class="styled">
							<span></span>
						Самовывоз
						</label>
						<label for="dostavkaplus.sh5"><span class="price">0 </span></label>
						</div>
					</div>
				</div>
			</div>
		
	</form>
	</div><div id="payment_method" class="qc-step" data-col="2" data-row="4">
	<form id="payment_method_form">
		
		
			<div class="checkout-block">
				<div class="title_type_1">Способ оплаты</div>
				<div class="checkout-body">
					
					
					<div id="payment_method_list" class="">
					
						
							<div class="flex f-between">
								
									
										<label onclick="payment_method = 'Оплата банковской картой';" class="custom-control">
											<input type="radio" name="payment_method" value="artpay" id="artpay" data-refresh="6">
												<span></span>
												Оплата банковской картой
										</label>
										<label for="artpay"><span class="price"></span></label>
	
									
								
							</div>
						

						
							<div class="flex f-between">

								<label onclick="payment_method = 'Оплата  наличными курьеру';" class="custom-control"><input type="radio" name="payment_method" value="cod" id="cod" checked="checked" data-refresh="6">
									<span></span>
									Оплата  наличными курьеру
								</label>
							<label for="cod"><span class="price"></span></label>

							</div>
						

						
					
					</div>									
				</div>
			</div>
		
	</form>
	</div><div id="payment_view" class="qc-step" data-col="2" data-row="5">
	
		
			<div class="buttons">
		<div class="pull-right">
			<input type="button" value="Подтверждение заказа" id="button-confirm" class="btn btn-primary" data-loading-text="Загрузка...">
		</div>
	</div>




	</div><div id="confirm_view" class="qc-step" data-col="2" data-row="7">
	<div id="confirm_wrap">
		<div class="">
			<div class="">
				<form id="confirm_form" onsubmit="ym(45245778, 'reachGoal', 'ORDERDONE'); return true;" class="form-horizontal" novalidate="novalidate">






























	<div id="confirm_comment_input" class="text-input form-group  sort-item   " data-sort="0">
								<div class="col-12">
									<label class="control-label" for="confirm_comment"> 
										<span class="text" title=""> Вы можете добавить комментарий к своему заказу:</span> 
									</label>
								</div>
								<div class="col-12"> 
									<textarea name="confirm.comment" id="confirm_comment" class="form-control validate not-required textarea comment" autocomplete="on" placeholder="" data-rule-minlength="1" data-msg-minlength="Пожалуйста, оставьте свой комментарий к заказу"></textarea>
								</div>
							</div><div id="confirm_agree_input" class="checkbox-input form-group sort-item   required" data-sort="1">
							
							
								<div class="col-12">
									<label for="confirm_agree" class="custom-control">
										<input type="hidden" name="confirm.agree" value="0">
											<input type="checkbox" autocomplete="on" name="confirm.agree" id="confirm_agree" class="validate required" required="" value="1" checked="checked"><span></span>
	
											<span title="">Мною прочитаны и я даю согласие с документом <a href="https://shwedar.by/index.php?route=information/information/agree&amp;information_id=5" class="agree"><b>Обработка персональных данных</b></a></span> 
										</label>
								</div>

						</div></form>
				
				<button onclick="shopData_fun()" id="qc_confirm_order" class="btn btn-primary btn-lg btn-block ">Оформить заказ</button>
	
			</div>
		</div>
	</div>
	</div></div>
						<div class="qc-col-3 col-md-0">
						</div>
					<div class="qc-col-4 col-md-12">
					</div>
				</div>
			</div>
		</div>
	</div>

				</div>
			</div>
	</div>

<script>

	var shipping_method = "Доставка курьером по Алматы";
	var payment_method = "Оплата наличными курьеру";
	var shipping_price = 0;
	var price_all
	var AllShops = JSON.parse(localStorage.AllShops);
	let length_shops = AllShops.length;

	function shopData_fun() {
		var confirm_order = document.getElementById("qc_confirm_order");
		confirm_order.textContent = "Заказ оформлен";
		confirm_order.style.background="#92E056";
		AllShops = JSON.parse(localStorage.AllShops);
		length_shops = AllShops.length;
			var xhr = new XMLHttpRequest(); 
			var data = '';
			
			for (let index = 0; index < length_shops; index++) {
				if (AllShops[index].size) {
				data += `${index}name_sviter=${AllShops[index].name_sviter}&${index}size=${AllShops[index].size}&${index}price=${AllShops[index].price}&${index}articul=${AllShops[index].articul}&${index}numbers=${AllShops[index].numbers}&${index}href=${AllShops[index].href}&`;
				} else{
					data += `${index}name_sviter=${AllShops[index].name_sviter}&${index}size=${AllShops[index].sizes.man},${AllShops[index].sizes.woman},${AllShops[index].sizes.teen1},${AllShops[index].sizes.teen2}&${index}price=${AllShops[index].price}&${index}articul=${AllShops[index].articul}&${index}numbers=${AllShops[index].numbers}&${index}href=${AllShops[index].href}&`;
				}
			}
			data += `firstname=${document.getElementById("payment_address_firstname").value}&lastname=${document.getElementById("payment_address_lastname").value}&telephone=${document.getElementById("payment_address_telephone").value}&address=${document.getElementById("payment_address_address_1").value}&shipping=${shipping_method}&payment=${payment_method}&comment=${document.getElementById("confirm_comment").value}`;

			xhr.open("POST", 'mail.php', true);
			xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

			// xhr.onreadystatechange = ...;

			xhr.send(data);
	}
	function prise_total() {

		AllShops = JSON.parse(localStorage.AllShops);
		length_shops = AllShops.length;
		price_all = 0;
		let shops_items = 0;
		price_all_mod = 0;
		var shipping_price2 = 1500;

		for (let index = 0; index < length_shops; index++) {
				price_all += Number(AllShops[index].numbers) * Number(AllShops[index].price);
				shops_items += Number(AllShops[index].numbers)
				if (AllShops[index].numbers2) {
					shipping_price2 = 0;
				}
		}
		
		document.getElementById("sub_total").textContent = price_all;

		if (Number(shipping_price) == 1500) {
			if (shops_items > 1) {shipping_price2 = 0;}
		} else {
			shipping_price2 = 0;
		}

		price_all += Number(shipping_price2);
		document.getElementById("total").textContent = price_all;
		document.getElementById("shipping").textContent = shipping_price2;
		
}
	prise_total()
	setInterval(function () {
			prise_total()
	}, 2000)

function generateShops() {

	AllShops = JSON.parse(localStorage.AllShops);
	length_shops = AllShops.length;

	if (length_shops == 0) {
		document.getElementById("cart_wrap").innerHTML = `<div class="sub_404">Вы ещё ничего не добавили в корзину!</div><a href="https://sviter.kz/" class="btn btn-primary">Перейти к покупкам</a>`;
	}

	var allShopBlock = ""
	for (let index = 0; index < length_shops; index++) {

		if (AllShops[index].size) {

		allShopBlock += `<div class="cart-content">
	<div class="cart-block-visible">
		<div class="cart-content__item">
			<a href="${AllShops[index].href}" class="image">
				<img width="155px" height="206px" src="${AllShops[index].img}" class="img-responsive">
			</a>
			<div class="cart-content__product">
				<div>
					<a href="${AllShops[index].href}" class="cart-content__product-name">
						${AllShops[index].name_sviter}
					</a>
					<div class=""><small>Размер: ${AllShops[index].size}</small></div>
					<div class="cart-content__price">
						<div class="price">${AllShops[index].price} <span class="rub">Тг</span></div>
					</div>
				</div>
			<div class="cart-content__quantity qc-quantity">
				<div class="quantity">
					<span onclick="localStorage_numbers(${index}, '-');" class="minus quantity-operator decrease" data-product="158"><i class="far fa-minus"></i></span>
					<input type="number" name="cart.158" value="${AllShops[index].numbers}" data-refresh="2" class="form-control qc-product-qantity">
					<span onclick="localStorage_numbers(${index}, '+');" class="plus quantity-operator increase" data-product="158"><i class="far fa-plus"></i></span>
				</div>
				<div class="cart-content__total"><div class="q_sub">итого:</div>${Number(AllShops[index].price) * Number(AllShops[index].numbers)}.00 <span class="rub">Тг</span></div>
				<div class="cart-content__links">
					<a onclick="delete_shop_block(${index})" class="delete cursor-p" data-product="158" title="удалить"><i class="fas fa-trash-alt"></i></a>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>`;
} else {
		allShopBlock += `<div class="cart-content">
	<div class="cart-block-visible">
		<div class="cart-content__item">
			<a href="${AllShops[index].href}" class="image">
				<img width="155px" height="206px" src="${AllShops[index].img}" class="img-responsive">
			</a>
			<div class="cart-content__product">
				<div>
					<a href="${AllShops[index].href}" class="cart-content__product-name">
						${AllShops[index].name_sviter}
					</a>
					<div class=""><small>Мужской: ${AllShops[index].sizes.man}</small></div>
					<div class=""><small>Женский: ${AllShops[index].sizes.woman}</small></div>
					<div class=""><small>Детский: ${AllShops[index].sizes.teen1}</small></div>
					<div class=""><small>Детский: ${AllShops[index].sizes.teen2}</small></div>
					<div class="cart-content__price">
						<div class="price">${AllShops[index].price} <span class="rub">Тг</span></div>
					</div>
				</div>
			<div class="cart-content__quantity qc-quantity">
				<div class="quantity">
					<span onclick="localStorage_numbers(${index}, '-');" class="minus quantity-operator decrease" data-product="158"><i class="far fa-minus"></i></span>
					<input type="number" name="cart.158" value="${AllShops[index].numbers}" data-refresh="2" class="form-control qc-product-qantity">
					<span onclick="localStorage_numbers(${index}, '+');" class="plus quantity-operator increase" data-product="158"><i class="far fa-plus"></i></span>
				</div>
				<div class="cart-content__total"><div class="q_sub">итого:</div>${Number(AllShops[index].price) * Number(AllShops[index].numbers)}.00 <span class="rub">Тг</span></div>
				<div class="cart-content__links">
					<a onclick="delete_shop_block(${index})" class="delete cursor-p" data-product="158" title="удалить"><i class="fas fa-trash-alt"></i></a>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>`;

}
document.getElementById("cart_wrap").innerHTML = allShopBlock;
	}

}generateShops()
function localStorage_numbers(index, params) {
	
	var AllShops = localStorage.AllShops;
	AllShops = JSON.parse(AllShops);
	if (params == '+') {
		AllShops[Number(index)].numbers = Number(AllShops[Number(index)].numbers) + 1;
	} else {
		if (Number(AllShops[Number(index)].numbers) > 0) {
			AllShops[Number(index)].numbers = Number(AllShops[Number(index)].numbers) - 1;
		}
	}
	AllShops = JSON.stringify(AllShops);
	localStorage.AllShops = AllShops;
	generateShops()
}

function delete_shop_block(index) {
	AllShops = localStorage.AllShops;
	AllShops = JSON.parse(AllShops)
	AllShops.splice(index, 1)
	AllShops = JSON.stringify(AllShops);
	localStorage.AllShops = AllShops;
	generateShops()
}

</script>
