define(['jquery'],function(){
	function List(opt){
		this.container = opt.container;//容器
		this.url = opt.url;//请求地址；
		
		this,dataType = opt.dataType;//ajax返回数据类型
		this.currentCate = opt.currentCate;//c初始课程类型
		this.page = opt.page || 1;//初始页码
		this._getData();

	}
	// {
	// 	container:$('#produce-desi-box'),
	// 	url:'./webDev/coursesByCategory.php',
	// 	page:1
	// }

	List.prototype.setCurrentCate = function(cate){
		this.currentCate=cate;
		this._getData();
	}
	List.prototype.setPage = function(page){
		this.page = page;
		this._getData();
	}
	List.prototype._getData = function(){
		var self=this;
		var url = this.url+'?pageIndex='+this.page+'&category='+this.currentCate;
		$.ajax({
			url:url,
			dataType:self.dataType||'json',
			success:function(data){
				self._render(data);
			} 

		})

	}

	List.prototype._render = function(data){//ajax返回成功开始渲染页面。
		console.log(data);
		var list = data.list;

		var str = '';
		for(var i=0;i<list.length;i++){
			str += '<div class="des-one-of">\
			<div class="desof-cover">\
				<a href=""><img src="'+list[i].bigPhotoUrl+'" alt=""></a>\
			</div>\
			<div class="noe-of-itr">\
				<h6 class="des-title">\
					<a href="">'+list[i].name+'</a>\
				</h6>\
				<b class="des-kinds">'+list[i].provider+'</b>\
				<b class="des-buzz"><i class="rent"></i><b >'+list[i].learnerCount+'</b></b>\
				<strong class="des-price">\
					￥<b>'+list[i].price+'</b>.00\
				</strong>\
			</div>\
		</div> ';
		}
		
		this.container.html(str);
	}

	return List;


});//