$(document).ready(function() {
 
	$('.tabs a').click(function(){
		switch_tabs($(this));
	});
 
	switch_tabs($('.defaulttab'));
 
});
 
function switch_tabs(obj)
{
	$('.tab-content').hide();
	$('.tabs a').removeClass("defaulttab");
	var id = obj.attr("data-tab");
 
	$('#'+id).show();
	obj.addClass("defaulttab");
}



