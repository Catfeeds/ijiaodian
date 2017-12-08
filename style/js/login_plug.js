$().ready(function() {
    $("#formLogin").validate({
		rules: {
			username: {
				required: true,
				minlength: 2
			},
			password: {
				required: true,
				minlength: 6
			}
		},
		 messages: {
			username: {
				required: "请输入用户名",
				minlength: "用户名必需由两个字母或汉字组成"
			},
			password: {
				required: "请输入密码",
				minlength: "密码长度不能小于 5 个字母"
			},
		 }
	});
	$("#post_form").validate({
		rules: {
			phone: {
				required: true,
				minlength: 11,
				maxlength: 11,
				number:true,
				digits:true
			},
			captcha: {
				required: true,
				minlength: 4,
				maxlength: 4,
			},
			sms_captcha: {
				required: true,
				minlength: 6,
				maxlength: 6,
				number:true,
				digits:true
			}
		},
		 messages: {
			phone: {
				required: "请正确输入11位手机号",
				minlength: "请正确输入11位手机号",
				maxlength: "请正确输入11位手机号",
				number: "请正确输入11位手机号",
				digits: "请正确输入11位手机号",
			},
			captcha: {
				required: "请正确输入4位图形验证码",
				minlength: "请正确输入4位图形验证码",
				maxlength: "请正确输入4位图形验证码"
			},
			sms_captcha: {
				required: "请正确输入6位短信验证码",
				minlength: "请正确输入6位短信验证码",
				maxlength: "请正确输入6位短信验证码",
				number: "请正确输入6位短信验证码",
				digits: "请正确输入6位短信验证码",
			},
		 },
		 
		submitHandler: function(form) 
		{      
			var ajaxurl = 'connect_sms.php?act=check_captcha';
            ajaxurl += '&sms_captcha='+$('#sms_captcha').val()+'&phone='+$('#phone').val();
			console.log(ajaxurl);
			$.ajax({
				type: "GET",
				url: ajaxurl,
				async: false,
				success: function(rs){
            	    if(rs == 'true') {
						console.log("true");
            	        $.getScript('connect_sms.php?act=register'+'&phone='+$('#phone').val());
            	        $("#register_sms_form").show();
            	        $("#post_form").hide();
						$("#register_sms_captcha").val($('#sms_captcha').val());
						$("#register_phone").val($('#phone').val());
            	    } else {
						console.log("fase");
            	        $("#sms_text").html(rs);
            	    }
			    }
			});
		}
		
	});	
	$("#register_sms_form").validate({
		rules: {
			member_name: {
				required: true,
				minlength: 2
			},
			sms_password: {
				required: true,
				minlength: 6
			}
		},
		 messages: {
			member_name: {
				required: "请输入用户名",
				minlength: "用户名必需由两个字母或汉字组成"
			},
			sms_password: {
				required: "请输入密码",
				minlength: "密码长度不能小于 5 个字母"
			},
		 }
	});	
});


function get_sms_captcha(type){
	var phone_li = $("#register_box .register_box .mc .phone label");
	if(!/^(13[0-9]|14[0-9]|15[0-9]|17[0-9]|18[0-9])\d{8}$/i.test($("#phone").val()))
	{		
		if($(phone_li).length > 0){
			$("#phone").addClass("error");
			$(phone_li).html("请输入正确的手机号");
			$(phone_li).show();
		}else{			
			$("#phone").addClass("error");
			$("#phone").parent().append("<label for='phone' class='error'>请输入正确的手机号</label>");
		}
		$("#phone").focus();
		return false;
	}
	var ajaxurl = 'connect_sms.php?act=get_captcha&nchash=1&type='+type;
	ajaxurl += '&captcha='+$('#image_captcha').val()+'&phone='+$('#phone').val();
	$.ajax({
		type: "GET",
		url: ajaxurl,
		async: false,
		success: function(rs){
			if(rs == 'true') {
				$("#sms_text").html('<a>已发送</a>');		
			} else {
				$("#sms_text").html("<label for='sms_captcha' class='error'>"+rs+"</label>");
			}
		}
	});
}

function warning(cms){
	$(hidden_float).show();
	$(hidden_float).find(".warning").show();
	$(hidden_float).find(".warning_text").text(cms);
};