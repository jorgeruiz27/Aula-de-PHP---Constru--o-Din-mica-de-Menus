estado = document.getElementById("idEstado");
estado.addEventListener("change", async(e) => {
  let requisicao = await fetch("cidadeController.php", {
    method: "post",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: "estado=" + e.target.value,
  });
  let resposta = await requisicao.json();
  console.log(resposta);
  let selCidades = document.getElementById("idCidade");
  selCidades.options.length = 1;
  resposta.forEach((elemento) => {
    let opt = document.createElement("option");
    opt.value = elemento.id;
    opt.innerHTML = elemento.nome;
    selCidades.appendChild(opt);
  });
  selCidades.removeAttribute("disabled");
});
