jQuery.noConflict();
(function($) {
	jQuery( document ).on('updated_checkout', 'body', function() {
		if (jQuery.fn.selectWoo) {
			jQuery('p.select2 select').selectWoo();
		} else {
			if (jQuery.fn.select2) {
				jQuery('p.select2 select').select2();
			}
		}

		$('.load-timepicker').timeselector({
		    hours12: false
		});
		jQuery('.load-datepicker').each(function() {
			var date_format = jQuery(this).attr('date_format');
			if ( date_format === '' ) {
				date_format = 'dd.mm.yyyy';
			}
			var days_before = jQuery(this).attr('days_before');
			var minDate = "";
			if ( days_before !== '' ) {
				if ( parseInt( days_before ) < 0 ) {
                    minDate = (-parseInt( days_before )) + 'd';
				}
				else {
                    minDate = '-' + days_before + 'd';
                }
			}
			var days_after = jQuery(this).attr('days_after');
			var maxDate = "";
			if ( days_after !== '' ) {
                if ( parseInt( days_before ) < 0 ) {
                    maxDate = days_after + 'd';
                }
                else {
                    maxDate = '+' + days_after + 'd';
                }
			}
			jQuery(this).datepicker( { "dateFormat": date_format, "minDate": minDate, "maxDate": maxDate } );
		})
		$('.load-colorpicker').each( function(index){
			let input = this;
			$(input).ColorPicker({
				onChange: function (hsb, hex, rgb) {
					$(input).val('#' + hex);
				},
				onHide: function () {
					$(input).trigger('change');
				}
			}).bind('keyup', function(){
				$(this).ColorPickerSetColor(this.value);
			});
		});

	});
})(jQuery);
