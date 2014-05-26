$(function() {
	// Scroll effect van het menu
	var selectedCell = $("#menu td.sel"),
		firstCell = $("#menu td:first").text(),
		lastCell = $("#menu td:last").text();
	
	$("#menu td").each(function() {
		var cell = $(this);
		if (cell.text() != lastCell) cell.css("border-right", "solid 1px #a79783");
	});
	
	// Menu animation
	$("#menu td").hover(function() {
		var cell = $(this).css("background-color", "#615a53");
		if (cell.text() != lastCell) cell.css("border-right", "solid 1px black");
		if (cell.text() != firstCell) cell.prev().css("border-right", "solid 1px black");
		
		cell.find("a").css("color", "white");
	},
	function()
	{
		$(this).css("background-color", "#a79783").css("border-color", "#a79783").find("a").css("color", "#30281f");
		$(this).prev().css("border-color", "#a79783");
	});
		
	//  Looping images
	if ($("#loopImage").size() == 1) {
		$("#loopImage").fadeIn().cycle({
			fx: 'fade',
			random: 1,
			timeout: 2000,
			speed: 3000
		});
	}
});