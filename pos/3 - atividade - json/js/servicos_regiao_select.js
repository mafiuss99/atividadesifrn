
$(document).ready(function(){
	$.getJSON("https://servicodados.ibge.gov.br/api/v1/localidades/regioes/"+1+"/estados/", function(data)
	{
		$(data).each(function(indice, estado){
			$("#estados").append("<option>" + estado.nome + "</option>");
		});
	});
});  

/*Quando o botão cujo id é botao-consultar é pressionado, a seguinte função é disparada */
$("#regiao").change(function(e) 
{
		e.preventDefault(); 

		var idRegiao = $("#regiao").val();
		$.getJSON("https://servicodados.ibge.gov.br/api/v1/localidades/regioes/"+idRegiao+"/estados/", function(data) {
		
		//Limpando a tabela caso haja algum dado anterior
		$("#estados").html("");
		
		//Percorrendo o objeto retornado pelo json e recuperando cada um dos estados
		$(data).each(function(indice, estado){
			$("#estados").append("<option>"+ estado.nome + "</option>");
		});
		}).done(function() {
			$("#mensagem").addClass("alert-success");
			$("#mensagem").html("Os dados solicitados estão disponíveis a seguir: " );
		}).fail(function() {
			$("#mensagem").addClass("alert-danger");
			$("#mensagem").html("Dados indisponíveis para essa região" );
		});
});
