$(function() {
	$("#reForm, #loginform").validate({
		rules: {
			name: "required",
			email: {
				required: true,
				email: true
			},
			pwd: "required",
			cfpwd: {
				required: true,
				equalTo: "#pwd"
			}
		},
		messages: {
			name: "Please enter your name",
			email: {
				required: "Please enter your email",
				email: "Your email is incorrect"
			},
			pwd: "Please enter your password",
			cfpwd: {
				required: "Please confirm your password",
				equalTo: "Your confirm password is not match"
			}
		}
		});
});