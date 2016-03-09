troca = 1;

function mudarCores() {
	if (troca == 1){
		document.getElementById("cabecalho").style.background = "blue";
		document.getElementById("conteudo").style.background = "red";
		document.getElementById("rodape").style.background = "black";
		troca = 0;
	} else{
		document.getElementById("cabecalho").style.background = "purple";
		document.getElementById("conteudo").style.background = "yellow";
		document.getElementById("rodape").style.background = "red";
		troca = 1;
	}
}