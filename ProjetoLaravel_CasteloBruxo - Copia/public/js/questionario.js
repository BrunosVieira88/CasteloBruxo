let pergunta0 = `
    
<div class="row">
    <h3>Você acabou de entrar com varios outros alunos em uma sala totalmente escura, você não consegue ver sua propria mão o que voce faria?</h3>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(1,1)">
    Falaria para ninguém ficar em panico pois você sabe que esse é apenas o primeiro teste para determinar sua casa
</div>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(1,4)">
   Lummus!
</div>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(1,2)">
    Perguntaria se todos estão bem, e tentaria acalmar quem estivesse com medo
</div>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(1,3)">
    Ficaria com um pouco de medo, e ficaria esperando alguem tomar a liderança
</div>
</div>`;

let pergunta1 = `
<div class="row">
    <h3>Você esta jogando quadribol qual posição voce gostaria de jogar? </h3>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(2,4)">
    Quero apanhar o pomo de ouro, sou um apanhador nato!
</div>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(2,1)">
    Nenhum dos meus amigos vai ser Atingido hoje, já meus adversarios vão suar para permanecerem em suas vassouras, o Batedor chegou!
</div>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(2,3)">
   Se depender de mim nada vai passar sou um Goleiro Excepcional
</div>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(2,2)">
    Vou levar meu time a vitoria e talvez nem precisemos dos pontos do pomo de ouro, eu sou um Artilheiro afinal das contas. 
</div>
</div>`;

let pergunta2 = `
<div class="row">
    <h3>Um Trasgo aparece do nada você e varios alunos estão no caminho dele o que você faz? </h3>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(3,2)">
    Chama todos os alunos e pedem para todos ficarem calmos 
</div>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(3,3)">
    Corram por suas Vidas !
</div>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(3,1)">
    Estupefaça!
</div>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(3,4)">
    Bom é mais um teste da escola eles nao deixariam nenhum aluno se machucar!
</div>
</div>`;	
                    
let pergunta3 = `
<div class="row">
    <h3>voce olha para cima há um céu estrelado, voce esta proximo de um pequeno riacho, muitos estudantes estão confuso e nao sabem o que esta acontecendo</h3>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(4,1)">
    Chama os alunos vamos seguir o riacho e ver onde ele pode nos levar 
</div>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(4,4)">
    Vamos deitar e observar o céu é o melhor a se fazer
</div>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(4,3)">
   Verifica se todos estão bem, e tenta enteder o que tem que fazer nesse novo teste
</div>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(4,2)">
    Olha as estrelas a vegetação, tenta encontrar algo para tentar desvendar o porque estão ali
</div>
</div>`;	

let pergunta4 = `
<div class="row">
    <h3>Agora você esta completamente sozinho ao seu redor voce ve 4 cada uma com uma placa qual delas escolheria</h3>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(5,3)">
    Tranquilidade
</div>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(5,2)">
    Conhecimento
</div>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(5,1)">
    Aventura
</div>
<div class="btn btn-primary mt-2" onclick="mostrarPergunta(5,4)">
    Beleza
</div>
</div>`;	

let vazio = [pergunta0, pergunta1, pergunta2, pergunta3, pergunta4];
let perguntaAtual = 0;
var RubroBravo = 0;
var Aurinegro = 0;
var BrancoForte = 0;
var VerdePluma = 0;

function mostrarPergunta(numPergunta,Time) {

resultado = casa(Time);

if (numPergunta == 5) {
   
    Swal.fire({
        title: 'Time '+resultado[1],
        text:resultado[0],
        imageUrl: 'img/'+resultado[1]+'.png',
        imageWidth: 400,
        imageHeight: 200,
        showConfirmButton: false,
        imageAlt: resultado,
        footer: '<a href=Times/'+resultado[1]+'.html>Saiba Mais sobre seu Time</a>'
    });

        return;
}else{
    perguntaAtual = numPergunta;
   
    document.getElementById("frase").innerHTML = vazio[perguntaAtual];
}    
}

function casa(Time){
if (Time == 1) {
    RubroBravo++;
} else if (Time == 2) {
    Aurinegro++;
} else if (Time == 3) {
    BrancoForte++;
} else if (Time == 4) {
    VerdePluma++;
}

if (RubroBravo > Aurinegro && RubroBravo > BrancoForte && RubroBravo > VerdePluma) {
    resultado =[];
    resultado.push("Os membros da Time Rubobrava são pessoas corajosas de grande determinação, tem paixão pelo que fazem gostam de liderar são guiados pelo coração e são muito valentes!");
    resultado.push("RubroBravo");
    return resultado;
} else if (Aurinegro > RubroBravo && Aurinegro > BrancoForte && Aurinegro > VerdePluma) {
    resultado =[];
    resultado.push("Os membros da Time Aurinegro são pessoas astutas extremamente leais, tem grande senso de união são muito inteligentes e são muito estrategistas!");
    resultado.push("Aurinegro");
   return resultado;
} else if (BrancoForte > RubroBravo && BrancoForte > Aurinegro && BrancoForte > VerdePluma) {
    resultado =[];
    resultado.push("Os membros da Time Brancoforte são honesto com muito humildade, geralmente sao pessoas timidas , são os mais gentis e educados e tem o maior senso de justiça e critico!");
    resultado.push("BrancoForte");
    return resultado;
} else if (VerdePluma > RubroBravo && VerdePluma > Aurinegro && VerdePluma > BrancoForte) {
    resultado =[];
    resultado.push("Os membros da Time VerdePluma tem muita criatividade são muito inteligentes prezam pela inovação são curiosos natos e geralmente são muito talentosos!");
    resultado.push("Verdepluma");
    return resultado;
} else {
// Se houver empate, escolher aleatoriamente
    var opcoes = ["RubroBravo", "Aurinegro", "BrancoForte", "VerdePluma"];
    resultado =[];
    resultado.push("Interessante, Você tem um metodo interessante de ver a vida poderia estar em mais de um Time, mas acho que este é o que mais combina com seu potencial Magico!");
    resultado.push(opcoes[Math.floor(Math.random() * opcoes.length)]);
    return resultado;
}
}
const element = document.querySelector('.row.some');

function openModal(frase) {

const element = document.querySelector('.row.some');


element.classList.add('desaparece');

var modal = document.getElementById("myModal");
modal.style.display = "block";
document.getElementById("frase").innerHTML =frase;
}
//fecha o Modal
function closeModal() {
var modal = document.getElementById("myModal");
modal.style.display = "none";
element.classList.remove('desaparece');

}