

jQuery(document).ready(function($) {
    
	$('#mortgage_calculator').on('submit', function(e) {
		e.preventDefault();
		var $params = {
			balance: $('#mortgage_balance').val() - $('#mortgage_downpayment').val(),
			rate: $('#mortgage_interest').val(),
			term: $('#mortgage_years').val(),
			period: 12
		};
		
		$(this).calculateMortgage({
			params: $params,
            results_weekly: $('#results_weekly'),
            results_monthly: $('#results_monthly')
		})
	
	});	
    
	$.fn.calculateMortgage = function(options) {
		var defaults = {
			currency_prefix: '$',
            currency_suffix: '-',
			params: {}
		};
		options = $.extend(defaults, options);
		
		var calculate = function(params) {
			params = $.extend({
				balance: 0,
				rate: 0,
				term: 0,
				period: 0,
                results_weekly: null,
                results_monthly: null
			}, params);
			
			var N = params.term * params.period;
			var I = (params.rate / 100) / params.period;
			var v = Math.pow((1 + I), N);
			var t = (I * v) / (v - 1);
			var result = params.balance * t;
			
			return result;
		};
		
		return this.each(function() {
			var $element = $(this);
			var $result_custom = calculate(options.params);
            var $result_month = calculate($.extend(options.params, {period: 12}));
            var $result_week = calculate($.extend(options.params, {period: 52}));
            
            $element.find('div.alert').remove();
            
			var output_week = options.currency_prefix + ' ' + $result_week.toFixed(2) + ' ' + options.currency_suffix;
            if(selio_mortgage_is_numeric($result_week.toFixed(2)))
            {
                options.results_weekly.html(output_week);
                options.results_weekly.parent().slideDown();
            }
            else
            {
                $element.prepend('<div class="alert alert-danger" role="alert">Please fill empty fields</div>');
                 $('html,body').animate({scrollTop: $element.offset().top-170}, 'slow');
            }
			     
		
			var output_month = options.currency_prefix + ' ' + $result_month.toFixed(2) + ' ' + options.currency_suffix;
			if(selio_mortgage_is_numeric($result_month.toFixed(2))){
                            options.results_monthly.html(output_month);
                            options.results_monthly.parent().slideDown();
                        }
		});

	};

});


function selio_mortgage_is_numeric(mixed_var) {
  var whitespace =
    ' \n\r\t\f\x0b\xa0\u2000\u2001\u2002\u2003\u2004\u2005\u2006\u2007\u2008\u2009\u200a\u200b\u2028\u2029\u3000';
  return (typeof mixed_var === 'number' || (typeof mixed_var === 'string' && whitespace.indexOf(mixed_var.slice(-1)) === -
    1)) && mixed_var !== '' && !isNaN(mixed_var);
}
