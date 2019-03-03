$(function(){
	$('[href="#appointment-dialog"]').on("click",function(){
		ym(9412237, 'reachGoal', 'Fit_header');
		ym(9412237, 'reachGoal', 'PRIMERKA');
		//yaCounter9412237.reachGoal('PRIMERKA');
	})
	$('[href="#feedback-dialog"]').on("click",function(){
		ym(9412237, 'reachGoal', 'VOPROS');
		//yaCounter9412237.reachGoal('VOPROS')
	})
	// $('#feedback-dialog .form .button[type="submit"]').on("click",function(){
	// 	console.log("test")
	// })
})

window.seo_callbacks = [
		function(form){
			if($(form.element).attr("id") == "feedback-form"){
				ym(9412237, 'reachGoal', 'SEND');
				//yaCounter9412237.reachGoal('SEND')
			}
			if($(form.element).attr("id") == "appointment-form"){
				ym(9412237, 'reachGoal', 'OTPRAVKA');
				//yaCounter9412237.reachGoal('OTPRAVKA')
			}
		}
]