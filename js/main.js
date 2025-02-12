function mostrarCampos() {
    var opcao = document.getElementById("selecao").value;
    document.getElementById("camposPeca").style.display = (opcao === "Peca") ? "block" : "none";
    document.getElementById("camposFornecedor").style.display = (opcao === "Fornecedor") ? "block" : "none";
}