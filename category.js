define(['jquery'],function(){//分类的课程
	function Category(opt){

		this.container=opt.container;//元素容器
		this.cateObj=opt.cateObj;//要绑定的元素信息
		this._render();
	}
	// opt{
	// 	cateObj:[
	//			{label:'产品设计',value:'pl'},
	//			{label:'编程语言',value:'pd'}	
	//			],
	//  container:$('#pro-class'),
	// }

	Category.prototype._render = function(){//渲染
		var str='';
		for(i=0;i<this.cateObj.length;i++){//
			if(this.cateObj[i].status){//如果产品配置里有status代表默认获取该类，为它增加class样式，同时广播事件

				str += '<a class="current" data-value="'+this.cateObj[i].value+'">'+this.cateObj[i].label+'</a>';
				this.container.trigger('category',this.cateObj[i].value);
			}else{
				str += '<a data-value="'+this.cateObj[i].value+'">'+this.cateObj[i].label+'</a>'

			}

		}
		this.container.html(str);
		this.aa();
	}


	Category.prototype.aa = function(){
		//   var a = $(this.container+' a');//找到父容器下的所以子元素a
		//	 var self = this;
		// for(var i=0;i<a.length;i++){
		// 		
		// 		a[i].onclick=function(event){//为每个a绑定。
		// 		event.preventDefault();
		// 		$(a).removeClass('current');
		// 		$(this).addClass('current');
		// 		var value = this.dataset['value'];
		// 		$.on('category',value);

		// 		}
		//	}
		
		var a = this.container.children('a');//找到父容器下的所以子元素a
		
		var self=this;
		this.container.on('click','a',function(event){//为每个a绑定。
			event.preventDefault();
			$(a).removeClass('current');//添加class增加样式
			$(this).addClass('current');
			var value = this.dataset['value'];
			
			self.container.trigger('category',value);//广播事件
		})
	}

	return Category;
});//