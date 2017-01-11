require.config({
	shim:{
		bootstrap:{
			deps:['jquery'],
			exports:'bootstrap'
		},
		jquerycookie:{
			deps:['jquery'],
			exports:'jquery'
		},
		slider:{
			deps:['jquery']
		},
		pagination:{
			deps:['jquery']
		},
		

	},//


	paths:{
		"jquery":"./lib/jquery",
		"guanzu":"guanzu",//关注按钮
		"jquerycookie":"./lib/jquerycookie",//cookie插件
		"bootstrap":"../../git-wydzy/lib/bootstrap",//
		"slider":"lib/slider/slider",//图片轮播
		"pagination":'lib/jquery.pagination',//分页插件
		"category":"category",//课程分类
		"list":"list"

	}//
})

require(['jquery','guanzu','category','list','jquerycookie','pagination','bootstrap','slider'],function($,guanzu,Category,List){
	+function(){
		

		if($.cookie('closetip')){//判断cookie的不再提醒

			$('#job-box').hide()
		}else{
			$('#job-box').show()
		}

		$('.dele-job').click(function(){//点击不再提醒关闭提示
			$.cookie('closetip','yes');
			$('#job-box').hide();
		});

	}


	new guanzu.GuanZ({//关注按钮
			gzbtn:$('#pro-group'),
			alrshow:$('#post-has'),
			fans:$('#pro-ary')
	});

	(function() {//轮播插件
		Slider.init({
			target: $('.slider'),
			time: 1000
		});
	})();

	$('.M-box').pagination({//分页插件
	    coping:true,
	    pagecount:3,
	    homePage:'首页',
	    endPage:'末页',
	    prevContent:'上页',
	    nextContent:'下页',
	    callback:function(page){
	    	var index = page.getCurrent();
	    	$('.M-box').trigger('paginationIndex',index);
	    }
	});

	var category= new Category({//课程分类
			cateObj:[
				{label:'产品设计',value:'pl',status:true},
				{label:'编程语言',value:'pd'}	
				],
	 		container:$('#pro-class'),
			
		});


	var list = new List({//课程页面内容展示
		container:$('#produce-desi-box'),
		url:'./webDev/coursesByCategory.php',
		page:1,
		currentCate:'pl'
	})

	$('.M-box').on('paginationIndex', function(e,index){//订阅事件，当点击翻页时重请求课程页面内容
		
		list.setPage(index);
	});

	category.container.on('category',function(e,value){//订阅事件，当点击翻页时重请求课程页面分类内容
		list.setCurrentCate(value)
	});

	$('#s-video-a').click(function(){//视频逻辑。
		$('#video-wrap-mask').show(1000);
		$('#video-wrap').show(1000);
		$('#ship-xx-vied').click(function(){
			document.getElementById('viedeoo').pause(); // 暂停
			$('#video-wrap-mask').hide(1000);
			$('#video-wrap').hide(1000);
		})
	});
	

});//



