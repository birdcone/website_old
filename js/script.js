// JavaScript Document
$(function(){
	var win = $(window);
	var a = $(".main_navigation");
	var b = a.find(".menu_title");
	var c = 0;
	b.click(function(e){
	if(win.width()>979){
		return;
	}	
			e.preventDefault();
		a.find("ul").eq(0).slideToggle();
			
	return false;		
	});
	
	a.find("li:has(ul)")
	 .click(function(e){
	 		if($(this).context.childNodes[0]==e.target){			
			e.preventDefault();
			$(this).find("ul").slideToggle();
			}		
	 });
	
	
	win.resize(function(){
		if(win.width()>979){
		a.find("ul").attr("style","");	
		}	
	});
	
	});