$(document).ready(function(){
	site.twitter();
	$(".number-wrapper a:eq(0)").addClass("selected");
	
	$(".number-wrapper a").live("click",function(){
		$(".number-wrapper a").removeClass("selected");
		$(this).addClass("selected");
	})
});

var site ={
	twitter :function(){
		var url = "https://api.twitter.com/1/statuses/user_timeline/yajinn.json?count=1&include_rts=1&callback=?";
		$.getJSON(url,function(response){
			$("#tadsoyad").text(response[0].user.name);
			$("#tmesaj").html(response[0].text);
			$("#tfoto").attr("src",response[0].user.profile_image_url);
		})
	}
}
