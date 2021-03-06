(function($){
	$(document).ready(function() {
		var shipping_enabled_container = $('.shipping-fields-enabled');
		var shipping_container = $('.fields-conditional-logic-shipping-fields');

		$(shipping_enabled_container).find('input').each(function(){
			if ($(this).hasClass('conditional-logic-shipping-fields-enabled')) {
				var attr_class = $(this).attr('data-class');
				var enabled_field = $('input.shipping-fields_'+attr_class);
				$(enabled_field).on('click', function(){
					var methods_select = $('select.shipping_methods');
					if ($(enabled_field).prop('checked') === false) {

						if (methods_select.val() === '') {
							$(methods_select).append('<option class="selected-no-method" selected value="no_method_selected"></option>');
						}
					}else{
						$('.selected-no-method').remove();
					}
				});
			}
		});
		$(shipping_container).find('select,input').each(function edit_settings () {
			if ($(this).hasClass('zone-rule')) {
				var shipping_zones = this;
				$(shipping_zones).on('change', function(){
					var class_field = $(this).attr('data-zone-class');
					var zone_id = $(this).val();
					$.ajax({
						type: 'post',
						url: fcf_settings_saved_shipping_js.ajax_url,
						data: {
							action: 'retrieve_shipping_methods_by_selected_zone',
							zone_id: zone_id,
						},
						beforeSend: function disable_select_zone(){
								var methods = $('select.method_' + class_field);
								if (methods.innerHTML !== '') {
									$(methods).empty();
									$(methods).append($('<option selected ></option>').val('').html(fcf_settings_saved_shipping_js.select_shipping_method));
								}
						},
						success: function (data) {
							var select_fields = $('select.method_' + class_field);
							var response = JSON.parse(data);
							if (response.status === 'success') {
								$(select_fields).append($('<optgroup id="zone" label="'+fcf_settings_saved_shipping_js.methods+'">'));
								$.each(response.shipping_methods, function (key, value) {
									if(key.match('^flexible_shipping:')){
										$.each(response.flexible_shipping_methods, function (fs_method_key, fs_method_value) {
											$.each(response.flexible_shipping_ids, function get_flexible_shipping_methods_id(method, method_id){
												if(fs_method_key.match(method_id)){
													$(select_fields).append($('<option></option>').val(fs_method_key).html(fs_method_value));
												}
												var duplicate_options = {};
												$(select_fields).children().each(function(){
													var duplicate_values = $(this).attr('value');

													if (duplicate_options[duplicate_values]) {
														$(this).remove();
													} else{
														duplicate_options[duplicate_values] = true;
													}
												});
											});
										});
									}else{
										if(value !== null) {
											$(select_fields).append($('<option class="no-fs-methods"></option>').val(key).html(value));
										}
									}
								});
								$(select_fields).append('</optgroup>');
							}
						}
					});

				});
			}
		});
	});
})(jQuery);
