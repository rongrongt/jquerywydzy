define(['jquery'],function(){
	function Scroll(opt){
		this.url = opt.url;
		this.container = opt.container;
		this._ajaxData();
	}

	Scroll.prototype._ajaxData=function(){
		var self= this;
		$.ajax({
			url:this.url,
			dataType:'json',
			success:function(result){
						self._render(result);
					}
		})
	}

	Scroll.prototype._render=function (result){
		
		var list=result.list;
		var self=this;
		var length = result.list.length;

		var str='';
		for(var i=0;i<length;i++){
			str+='<div class="hot-branch">\
						<div class="hbranch-img">\
							<a href="">\
								<img src="'+list[i].imgSrc+'" alt="">\
							</a>\
						</div>\
						<div class="ch-list-box">\
							<h6 class="ch-list-name">\
								<a href="" >'+list[i].name+'</a>\
							</h6>\
							<b class="s-renq">\
								<i class="rent"></i>'+list[i].renqi+'\
							</b>\
						</div>\
				</div>';
		}

		this.container.html(str)
		var countS = 0; 
		setInterval(function(){
			if(countS > 5){
				countS = 0;
				self.container.css('transition','none');
			}else{
				self.container.css('transition','all 0.3s');
			}
			self.container.css('margin-top',-70*countS+'px');
			countS++;
		},500)
		
	}

	
	return Scroll;
})