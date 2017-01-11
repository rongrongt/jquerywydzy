define(['jquery'],function(){
	function GuanZ(opt){
		this.gzbtn=opt.gzbtn;//关注按钮
		this.alrshow=opt.alrshow;//已关注容器
		this.fans=opt.fans;//fans人数容器
		this.qq();
	}
	
	GuanZ.prototype.qq=function(){
		var self=this;
		$('#btn-login-box').on('click',function(){
			var user = $('#wy-id').val();
			var pass = $('#wy-password').val();
			$.ajax({
				url:'./user/login.php',
				data:{user:user,pass:pass},
				dataType:"json"
			}).then(function(result){
				if(result.code == 500){
					alert('sb');
				}else if(result.code == 200){
					window.location = location.href;
				}
			})

		})
		$('#login-xx').click(function(){
			$('#pro-none-login').hide();
			$('#mask').hide();
		})
		self.gzbtn.on('click',function(){
			
			$.ajax({
				url: './user/getUser.php',
				dataType:'json'
			}).then(function(result){
				var login = result.login;//判断是否已经登录
				
				if(!login){
					$.ajax({
						url:"./user/guanzhu.php",
						dataType:'json'
					}).then(function(result){
						console.log(result);
						self.fans.html(result.guanzhushu);
					})	
				}else{
					console.log('a');
					$('.mask').show();
					$('#pro-none-login').show();
					if($.cookie('userName')){
						$('#wy-id').val($.cookie('userName'));
					}
				}
			});
			return;			
		})
	}	
	return {
		GuanZ:GuanZ
	}
})