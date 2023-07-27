function opneMenu() {
  document.querySelector(".menu-mobile").style.display = "flex";
}

function closeMenu() {
  document.querySelector(".menu-mobile").style.display = "none";
}

function closeBanner() {
  document.getElementById("popup").style.display = "none";
}

window.onload = () => {
  document.querySelector(".container-geral").style.display = "block";
  document.querySelector(".loading").style.display = "none";
}

const form = document.getElementById("form");

form.addEventListener("submit", function(e) {
  e.preventDefault(); // Evita o envio padrão do formulário

  const button = document.getElementById('button-enviar-email');
  button.textContent = "ENVIADO..."

  const formData = new FormData(form); // Cria um objeto FormData com os dados do formulário

  // Envia os dados para o arquivo PHP usando Fetch
  fetch(form.action, {
    method: "POST",
    body: formData
  })
  .then(response => {
    if (response.ok) {
      // Dados enviados com sucesso
      button.textContent = "EMAIL ENVIADO";
    } else {
      // Erro ao enviar dados
      button.textContent = "ERRO AO ENVIAR";
    }
  })
  .catch(error => {
    // Erro ao enviar dados
    button.textContent = "ERRO AO ENVIAR";
  });
});

