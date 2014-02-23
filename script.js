$.get("server_ajax.php", {title: 'Hot Fuzz'})
	.done(function(data){
		$.each(data,function(key,value){
			$("body").append('<p><strong>'+key+':</strong>'+value);
		});
	});
