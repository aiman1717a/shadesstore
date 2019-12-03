function notify_success(title, message){
	$.notify({
		title: title,
		message: message,
		target: '_blank'
	},{
		type: "success",
		allow_dismiss: true,
		newest_on_top: true,
		placement: {
			from: "top",
			align: "right"
		},
		animate: {
			enter: 'animated fadeInDown',
			exit: 'animated fadeOutUp'
		},
		template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
								'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
									'<span data-notify="icon"></span> ' +
									'<span data-notify="title"><strong>{1}</strong></span> ' +
									'<span data-notify="message">{2}</span>' +
								'<div class="progress" data-notify="progressbar">' +
									'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
								'</div>' +
								'<a href="{3}" target="{4}" data-notify="url"></a>' +
							'</div>'
		});
}

function notify_error(title, message){
	$.notify({
		title: title,
		message: message,
		target: '_blank'
	},{
		type: "danger",
		allow_dismiss: true,
		newest_on_top: true,
		placement: {
			from: "top",
			align: "right"
		},
		animate: {
			enter: 'animated fadeInDown',
			exit: 'animated fadeOutUp'
		},
		template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
								'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
									'<span data-notify="icon"></span> ' +
									'<span data-notify="title"><strong>{1}</strong></span> ' +
									'<span data-notify="message">{2}</span>' +
								'<div class="progress" data-notify="progressbar">' +
									'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
								'</div>' +
								'<a href="{3}" target="{4}" data-notify="url"></a>' +
							'</div>'
		});
}
