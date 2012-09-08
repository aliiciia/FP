function analytics(site){
	var a_data = '';
	a_data += 'callback=?';
	a_data += '&site=' + site;
	a_data += '&url=' + encodeURIComponent(document.URL);
	a_data += '&title=' + encodeURIComponent(document.title);
	a_data += '&referrer=' + encodeURIComponent(document.referrer);
	a_data += '&userAgent=' + encodeURIComponent(navigator.userAgent);
	a_data += '&appCodeName=' + encodeURIComponent(navigator.appCodeName);
	a_data += '&appName=' + encodeURIComponent(navigator.appName);
	a_data += '&appVersion=' + encodeURIComponent(navigator.appVersion);
	a_data += '&platform=' + encodeURIComponent(navigator.platform);
	a_data += '&screenwidth=' + encodeURIComponent(screen.width);
	a_data += '&screenheight=' + encodeURIComponent(screen.height);
	a_data += '&browserwidth=' + encodeURIComponent($(window).width());
	a_data += '&browserheight=' + encodeURIComponent($(window).height());
	
	var date = '';
	var d = new Date();
	date += d.getFullYear() + "-";
	date += (d.getMonth() + 1) + "-";
	date += d.getDate() + " ";
	date += d.getHours() + ":";
	date += (d.getMinutes()) + ":";
	date += (d.getSeconds());
	
	a_data += '&rawdate=' + encodeURIComponent(d.toString());
	a_data += '&localdate=' + encodeURIComponent(date);
	a_data += '&timezone=' + (-d.getTimezoneOffset()/60);
	
	$.ajax({
		type: "post",
		url: "http://www.abhinayrathore.com/includes/analytics_save.php",
		data: a_data,
		crossDomain: true,
		dataType: "json",
		success: function(data){
		}
	});
}