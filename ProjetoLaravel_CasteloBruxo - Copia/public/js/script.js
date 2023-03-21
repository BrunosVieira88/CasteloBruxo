 // Seleciona o elemento que você deseja modificar
 const element = document.querySelector('.row.desaparece');
 const element2 = document.querySelector('.row.aparece');



// Função que adiciona ou remove a classe com base no tamanho da tela
function ajustarClasse() {
 if (window.innerWidth >= 990) {
   // Remove a classe "desaparece" do elemento
   element.classList.remove('desaparece');
   element2.classList.add('aparece');
 } else {
   element.classList.add('desaparece');
   element2.classList.remove('aparece');
 }
}

// Chama a função para ajustar a classe no carregamento da página
ajustarClasse();

// Adiciona um listener para o evento 'resize' da janela
window.addEventListener('resize', ajustarClasse);

