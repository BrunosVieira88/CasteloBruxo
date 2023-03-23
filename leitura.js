function ler() {

    // Obtenha o conteúdo da div
    var conteudo = document.getElementById("conteudo").textContent.trim();
  
    // Crie um objeto SpeechSynthesisUtterance
    var utterance = new SpeechSynthesisUtterance(conteudo);
  
    
  
    // Inicie a leitura
    window.speechSynthesis.cancel();
    utterance = new SpeechSynthesisUtterance(conteudo);
    window.speechSynthesis.speak(utterance);
  }
  
  function pausar() {
  
      window.speechSynthesis.pause();
   
  }
  
  function cancelarLeitura() {
    window.speechSynthesis.cancel();
  }
