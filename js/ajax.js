happyNewYear = {
	showPopup : (param, element) => {

		let main_element	= $('#popup_order'),
			overlay_element = $('.overlay');

		if (param) {
			let product_element = $(element);

			main_element.find('[name=product-id]').val(product_element.parents('.tovar').data('id'));

			main_element.show();
			overlay_element.show();
		} else {
			main_element.hide();
			overlay_element.hide();
		}
	},

	sendOrder : () => {

		let url = 'D:\programms\openserver\domains\KPlus.com\blocks\ajax.php',
			data = {
				'id' : $('[name=product-id]').val(),
				'fio' : $('[name=fio]').val(),
				'phone' : $('[name=phone]').val(),
				'email' : $('[name=email]').val(),
				'comment' : $('[name=comment]').val(),
			};

		$.ajax({
			url: url,
			type: "POST",
			data: data,
			dataType: 'json',
			success: (response) => {

		      let errorsBlock = $('.js_error');

		      if (response.errors) {
		      	
		      	errorsBlock.html('');

		      	for (let key in response.errors) {
		      		errorsBlock.append(response.errors[key] + '<br>');
		      	}
		      } else {
		      	if (response.res == true) {
		      		errorsBlock.html('Заказ оформлен!');
		      	}
		      }
			}
		});
	},
};
        
$(document)
	.on('click', '.tovar_btn', function () { happyNewYear.showPopup(true, this) })
	.on('click', '.js_close-popup', function () { happyNewYear.showPopup(false) })
	.on('click', '.js_overlay', function () { happyNewYear.showPopup(false) })
	.on('click', '.js_send', function () { happyNewYear.sendOrder(); });