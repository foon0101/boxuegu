
	// NProgress.start();

	// NProgress.done();

	// $('.navs ul').prev('a').on('click', function () {
	// 	$(this).next().slideToggle();
	// });


	if(!$.cookie('PHPSESSID')&&location.pathname!='/login'){
		location.href = 'login';
	}

	if(location.pathname!='/login'&&location.pathname!='/dashboard/login'&&location.pathname!='/views/dashboard/login'){
		var tcInfo = JSON.parse($.cookie('tcInfo'));
		var htmlStr = template('tp_aside_avatar',tcInfo);
		$('.aside>.profile').html(htmlStr);
	}
