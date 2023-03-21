@include('navbar')
<section class="container">
  <div>
    <div class="row desaparece mt-3" >
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inne carousel-container">
            <div class="carousel-item active">
              <img src="img/PersonagensReunidos.png" class="d-block  " style="width:70em;height:30em;box-shadow: 2px 2px 4px white;margin-left:auto;margin-right:auto;" alt="...">
              <div class="carousel-caption d-none d-md-block" style="background-color: rgba(240, 248, 255, 0.2);">
                <h5 class="melhorLeitura">Personagens</h5>
                <p class="melhorLeitura">A comunidade bruxa no Brasil é uma sociedade complexa e diversificada, composta por bruxos e bruxas de todas as idades, classes sociais, etnias e orientações sexuais.</p>
                <a href="/Personagens"  ><button class="btn btn-primary ">SAIBA MAIS</button></a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/CMB.png" class="d-block " alt="..." style="width:70em;height:30em;box-shadow: 2px 2px 4px white;margin-left:auto;margin-right:auto;">
              <div class="carousel-caption d-none d-md-block" style="background-color: rgba(240, 248, 255, 0.2);">
                  <p class="melhorLeitura" >CSM - CONSELHO SUL AMERICANO DE MAGIA </p>
                  <p class="melhorLeitura">O CSM é a autoridade maxima Bruxa na america do sul</p>
                  <a href="/CMB"  ><button class="btn btn-primary">SAIBA MAIS</button></a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/CasteloBruxo.png" class="d-block " alt="..." style="width:70em;height:30em;box-shadow: 2px 2px 4px white;margin-left:auto;margin-right:auto;">
              <div class="carousel-caption d-none d-md-block" style="background-color: rgba(240, 248, 255, 0.2);">
                  <p class="melhorLeitura">CASTELO BRUXO</p>
                  <p class="melhorLeitura">Castelo Bruxo recebe alunos de todo continente sul americano sendo uma escola para todos!</p>
                  <a href="/Castelo"  ><button class="btn btn-primary">SAIBA MAIS</button></a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Times.png" class="d-block " alt="..." style="width:70em;height:30em;box-shadow: 2px 2px 4px white;margin-left:auto;margin-right:auto;">
              <div class="carousel-caption d-none d-md-block" style="background-color: rgba(240, 248, 255, 0.2);">
                  <p class="melhorLeitura">Os 4 times de CasteloBruxo</p>
                  <p class="melhorLeitura">Descubra qual Time voce seria em CasteloBruxo</p>
                  <a href="/Questionario"  ><button class="btn btn-primary">SAIBA MAIS</button></a>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>
    <div class="row aparece ">
      <div class="col-md-3  mt-2 mr-2">
        <div class="p-3 card" style="height: 36em;">
          <img src="img/CasteloBruxo.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">CASTELO BRUXO</h5>
            <p class="card-text">Castelo Bruxo recebe alunos de todo continente sul americano sendo uma escola para todos!</p>
          </div>
          <a href="CB/casteloIndex.html" class=" text-center" ><button class="btn btn-primary">SAIBA MAIS</button></a>
        </div>
      </div>
      <div class="col-md-3  mt-2">
        <div class="p-3 card" style="height: 36em;">
          <img src="img/CMB.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">CSM - CONSELHO SUL AMERICANO DE MAGIA </h5>
            <p class="card-text">O CSM é a autoridade máxima Bruxa na América do Sul</p>
          </div>
          <a href="ConselhoMagicoBrasileiro/CmbIndex.html" class="text-center"><button class="btn btn-primary">SAIBA MAIS</button></a> 

        </div>
      </div>
      <div class="col-md-3  mt-2">
        <div class="p-3 card" style="height: 36em;">
          <img src="img/PersonagensReunidos.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Personagens</h5>
            <p class="card-text">A comunidade bruxa no Brasil é uma sociedade complexa e diversificada, classes sociais, etnias e orientações sexuais.</p>
          </div>
          <a href="Personagens/PersonagensIndex.html" class="text-center" ><button class="btn btn-primary">SAIBA MAIS</button></a>

        </div>
      </div>
      <div class="col-md-3  mt-2">
        <div class="p-3 card" style="height: 36em;">
          <img src="img/Times.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Os 4 Times de CasteloBruxo</h5>
            <p class="card-text">Descubra qual Time voce seria em CasteloBruxo</p>
          </div>
          <a href="Questionario.html" class="text-center" ><button class="btn btn-primary">SAIBA MAIS</button></a>
        </div>
      </div>
    </div>
  <div class="mt-5">      
    <h2 style="color:white;">Wiki</h2>
    <p style="color:white;">Esse topico vai ser usado  como uma wiki para meu projeto do livro de fan fic Harry Potter</p>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img src="img/arthur o ataque ao ministerio.png"  class="img-thumbnail" alt="">
        </div>
        <div class="col-md-6">
            <div class="resumo">
                <h1>Resumo da história</h1>
                <p>Miguel é um jovem bruxo que está prestes a começar seus estudos em Castelo Bruxo. Em sua jornada, ele recebe um cajado mágico com núcleo de hidra, um dos mais raros e poderosos do mundo mágico. Mas o que ele não sabe é que esse cajado é objeto de desejo de um ex-revolucionário chamado Arthur, que fará de tudo para consegui-lo.</p>
                <p>Enquanto isso, o CMB esconde uma trama obscura e apaga a memória de muitos bruxos, causando um clima de incerteza e medo no mundo bruxo brasileiro. Arthur se alia a Meghan Lockhart, uma auror do Ministério Bruxo da Inglaterra, e Carlos, um auror brasileiro, para descobrir os segredos por trás dos planos do CMB. Meghan está investigando um possível atentado em Londres com uso de criaturas mágicas, algo que Arthur também fez no Brasil.</p>
                <p>Mas eles não estão sozinhos nessa luta. Um líder revolucionário mais sanguinolento surgiu no Brasil e está determinado a derrubar o governo de qualquer maneira. Será que Arthur, Meghan e Carlos serão capazes de descobrir os segredos do CMB e impedir o líder revolucionário antes que seja tarde demais?</p>
            </div>
        </div>
    </div>
  </div>
    <div class="row" style="margin-top: 5%;">
        <div class="col-md-6">
            <img src="img/MatrizInvertida.png" style="width: 45rem;" class="img-fluid d-flex align-content-center" alt="">
        </div>
        <div class="col-md-6 card">
            <h3>A comunidade Bruxa no Brasil</h3>
            <p>A comunidade bruxa no Brasil é uma sociedade complexa e diversificada, composta por bruxos e bruxas de todas as idades, classes sociais, etnias e orientações sexuais.</p>
            <p>Ao contrário do que se imagina, a comunidade bruxa no Brasil não é isolada, eles vivem entre os trouxas (pessoas sem habilidades mágicas) e possuem suas próprias instituições, como escolas de magia, lojas de varinhas, lojas de ingredientes mágicos e até mesmo bancos. Eles também possuem suas próprias autoridades, como o Ministério da Magia e o Ministro da Magia, que governam e regulamentam a prática da magia no país.</p>    
            <p>No entanto, a comunidade bruxa no Brasil é dividida em diferentes classes sociais, com bruxos de elite que possuem grande poder e riqueza, e bruxos de classe baixa que lutam para sobreviver e enfrentam discriminação e opressão. Essa desigualdade é perpetuada pelo Ministério da Magia, que se aproveita de seu poder para controlar e oprimir a população bruxa.</p>         
        </div>
    </div>
  </div>

</section>
<script>
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
</script>
