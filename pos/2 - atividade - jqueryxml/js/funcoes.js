$(document).ready(function(){
	$("#conteudo").append("<div></div>");
	$.ajax({
		type: "GET",
		url: "xml/dados.xml",
		dateType: "xml",
		success: function(xml){
			$(xml).find('pessoa').each(function(){
				var sNome = $(this).find('nome').text();
				var sIdade = $(this).find('idade').text();
				$("<h5></h5>").html(sNome + "tem" + sIdade + "anos");
			});
		},
		error: function(){
			alert("Ocorreu um erro inesperado");
		},
	});
});