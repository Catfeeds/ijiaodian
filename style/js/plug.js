$(function() {
	var black_bg = $("#hidden_float .black_bg"),
	    hidden_float = $("#hidden_float"),
	    open_float = $("#hidden_float .open_hidden_float"),
			qrcode = $("#header header .welcome"),
			core_service = $("#main .core_service .mc .card");
			message_phone = $("#footer .message #message_form .message_phone"),
			message_content = $("#footer .message #message_form .message_content");

	$(black_bg).on("click",function(){
		$(hidden_float).hide();
		$(hidden_float).find(".inside_float").hide();
	});
	$(open_float).on("click",function(){
		$(hidden_float).hide();
		$(hidden_float).find(".inside_float").hide();
	});
	$(qrcode).on("click",function(){
		$(hidden_float).show();
		$(hidden_float).find(".qr_code ").show();
	})
	$(".wechat_open").on("click",function(){
		$(hidden_float).show();
		$(hidden_float).find(".qr_code ").show();
	})
	$(core_service).hover(function(){
		var this_core = $(this);
		setTimeout(function(){
			$(core_service).removeClass("active");
			$(this_core).addClass("active");
		},100);
	});

	$("#online_close").on("click",function(){
		$("#online_lx").animate({right:'-190px'},600,function(){
			$("#float_right .online_open").animate({marginLeft:'0px'});
		});
	});
	$("#float_right .online_open").on("click",function(){
		$("#online_lx").animate({right:'0'},600,function(){
			$("#float_right .online_open").animate({marginLeft:'32px'});
		});
	});


	 $("#message_form").bind("submit", function(){
			 if($(message_phone).val() == ""){
				  $(message_phone).css({"border-color":"#fe0000","box-shadow":"0px 0px 13px 2px #f00"});
					$(message_phone).focus();
					return false;
			 }else{
				 if(!/^(13[0-9]|14[0-9]|15[0-9]|17[0-9]|18[0-9])\d{8}$/i.test($(message_phone).val()))
					{
						//alert('请输入正确的手机号码');
						 $(message_phone).css({"border-color":"#fe0000","box-shadow":"0px 0px 13px 2px #f00"});
						 warning("为了获得更好的服务，请您正确填写手机号码！");
						 $(message_phone).focus();
						 return false;
					}
			 };
			 if($(message_content).val() == ""){
				 $(message_content).css({"border-color":"#fe0000","box-shadow":"0px 0px 13px 2px #f00"});
				 $(message_content).focus();
				 return false;
			 }
	 });

	 $(message_phone).on("change",function(){
		 $(message_phone).css({"border-color":"#fff","box-shadow":"none"});
	 })
 //首页banner
	$(".home_ad").bxSlider({
		auto: !0,
		mode: "fade"
	});
	
	//换一批客户
	$("#change_customer").on("click",function(){
		$.ajax({
		 type: "post",
			dataType: "json",
			url: "/index.php?act=chagecase",
			success: function(data){								
				$(".append_box").remove();
				for(var i=0;i<data.length;i++){	
					$("#customer_box").append("<li class='append_box'><img src='"+data[i].ad_code+"'><div class='hover'><p class='name'>"+data[i].ad_name+"</p><a href='"+data[i].ad_link+"' target='_blank'>点击查看</a><em></em></div></li>")
				}
				
			},
			error:function(){
				console.log("false");
			}
		});
	})
});
function warning(cms){
	$(hidden_float).show();
	$(hidden_float).find(".warning").show();
	$(hidden_float).find(".warning_text").text(cms);
};

function setImagePreview(avalue) {
	var docObj=document.getElementById("avatar");		 
	var imgObjPreview=document.getElementById("preview");
	if(docObj.files &&docObj.files[0])
	{
		//火狐下，直接设img属性
		imgObjPreview.style.display = 'block';
		imgObjPreview.style.width = '40px';
		imgObjPreview.style.height = '40px'; 
		//imgObjPreview.src = docObj.files[0].getAsDataURL();			 
		//火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式
		imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);
	}
	else
	{
		//IE下，使用滤镜
		docObj.select();
		var imgSrc = document.selection.createRange().text;
		var localImagId = document.getElementById("localImag");
		//必须设置初始大小
		localImagId.style.width = "150px";
		localImagId.style.height = "180px";
		//图片异常的捕捉，防止用户修改后缀来伪造图片
		try{
			localImagId.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
			localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
		}
		catch(e)
		{
			alert("您上传的图片格式不正确，请重新选择!");
			return false;
		}
		imgObjPreview.style.display = 'none';
		document.selection.empty();
	}
	return true;
}



	//换一批案例
function changecase(id){
	var id = id,
	    url = "/goods.php?id="+id+"&act=change";
	$.ajax({
		 type: "post",
			dataType: "json",
			url: url,
			success: function(data){	
				console.log(data);
				$(".append_box").remove();
				for(var i=0;i<data.length;i++){	
					 $("#customer_box").append("<article class='bg_white append_box'><div class='img_box'><img src='"+data[i].goods_thumb+"'></div><p class='title'><a href='goods.php?id="+data[i].goods_id+"'>"+data[i].goods_name+"</a></p><p class='tap'>服务行业："+data[i].goodscat+"</p></article>")
				}
				
				 
				
			},
			error:function(){
				console.log("false");
			}
	});
};
	