$(document).ready(function(){
	site.twitter();
});

var site ={
	twitter :function(){
		var url = "https://api.twitter.com/1/statuses/user_timeline/mstf_34.json?count=1&include_rts=1&callback=?";
		$.getJSON(url,function(response){
			$("#tadsoyad").text(response[0].user.name);
			$("#tmesaj").html(response[0].text);
			$("#tfoto").attr("src",response[0].user.profile_image_url);
		})
	}
}
