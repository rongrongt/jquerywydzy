window.onload=function(){

	if($.cookie('closetip')){

		$('#job-box').hide()
	}else{
		$('#job-box').show()
	}

	$('.dele-job').click(function(){
		$.cookie('closetip','yes');
		$('#job-box').hide();
	});

}






























// function setCookie(name,value){
// 	return document.cookie = name + '=' + value;
// }


// function getCookie(name){
// 	var cookieary = document.cookie.split('; ');

// 	console.log(cookieary);

// 	for(var i=0,leng=cookieary.length;i<leng;i++){
// 		if(cookieary[i].split('=')[0] == name){
// 			return cookieary[i].split('=')[1];
// 		}
		
// 	}
// }








































