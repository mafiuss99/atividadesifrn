//Questao1
$(document).ready(function(){
	//A
	$(".module").css("background-color", "red");
	//B
	$("#myList #myListItem").css("background-color", "purple");
	//C
	$("label[for='q']").css("color", "green");
	//D
	var a = $("[alt]").length;
	alert("existem " + a +" elmentos com o atributo alt");
	//E
	var contador = $("#fruits tbody tr td").length;
	var i;
	for (var i = 1; i < contador; i = i + 2) {
		$("#fruits tbody tr td:eq(" + i + ")").css("background-color", "black");
	};
	//F
	var b = $("h2:contains('B')").length;
	alert("Existem " + b + " elementos h2 com 'B'");
	//G
	$("#myList").css("color", "pink");
	//H
	$("h2:last-of-type").css("background-color", "red");
	//I
//Questão 2
	//A
	$("img[alt]").each(function() {
		src = this.src;
		console.log(src);
	});
	//B
	c = $("input[type='text']");
	c.css("background-color", "purple");
	c.parent().addClass("template");
	//C
	$("#myList li.current").removeClass("current").next().addClass("current");
	//D
	$("#specials h2").text("Promoções").parent().find("[value = 'friday']").text("Dimitri");
	//E
	$("#slideshow li:nth(0)").addClass("current").siblings().addClass("disabled");
});

