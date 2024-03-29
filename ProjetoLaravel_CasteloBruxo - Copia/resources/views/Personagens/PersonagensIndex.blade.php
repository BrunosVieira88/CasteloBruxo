@extends('cabecalho')
@section('content')  
    @include('navbar')
    <section class="container">
        <div class="row card p-4 mt-3">
            <h1 >Fundadores Castelo Bruxo</h1>
            <div class="row">
                <div class="col-md-3 mt-2" onclick="redirecionar('MeganLockHart')">
                    <div class="container">
                        <div class="d-flex align-items-end justify-content-center">
                          <img src="../img/rafaela tricolora.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                          <span class="position-absolute bg-light text-dark px-4 py-0">Rafaela Tricolora</span>
                        </div>
                      </div>
                </div>
                <div class="col-md-3 mt-2" onclick="redirecionar('GiselaSchmidt')">
                    <div class="container">
                        <div class="d-flex align-items-end justify-content-center">
                            <img src="../img/fernandaVerdepluma.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                            <span class="position-absolute bg-light text-dark px-4 py-0">Fernanda Verdepluma</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-2 " onclick="redirecionar('ArthurVieira')">
                    <div class="container">
                        <div class="d-flex align-items-end justify-content-center">
                            <img src="../img/LucasTimonero.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                            <span class="position-absolute bg-light text-dark px-4 py-0">Lucas Timonero</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-2 " onclick="redirecionar('FelipeBrancoForte')">
                    <div class="container">
                        <div class="d-flex align-items-end justify-content-center">
                            <img src="../img/FelipeBrancoForte.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                            <span class="position-absolute bg-light text-dark px-4 py-0">Felipe BrancoForte</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row card p-4 mt-3">
            <h1>Bruxos</h1>
            <div class="row">
                <div class="col-md-3 mt-2" onclick="redirecionar('MeganLockHart')">
                    <div class="container">
                        <div class="d-flex align-items-end justify-content-center">
                        <img src="../img/Megan.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                        <span class="position-absolute bg-light text-dark px-4 py-0">Megan Lockhart</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-2" onclick="redirecionar('GiselaSchmidt')">
                    <div class="container">
                        <div class="d-flex align-items-end justify-content-center">
                        <img src="../img/Gisela.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                        <span class="position-absolute bg-light text-dark px-4 py-0">Gisela Schmidt</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-2 " onclick="redirecionar('ArthurVieira')">
                    <div class="container">
                        <div class="d-flex align-items-end justify-content-center">
                            <img src="../img/ArthurVieira.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                            <span class="position-absolute bg-light text-dark px-4 py-0">Arthur Vieira</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-2" onclick="redirecionar('Carlos')" >
                    <div class="container">
                        <div class="d-flex align-items-end justify-content-center">
                          <img src="../img/carlos.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                          <span class="position-absolute bg-light text-dark px-4 py-0">Carlos Silva e Silva</span>
                        </div>
                      </div>
                </div>      
            </div>
            <div class="row mt-3">
                <div class="col-md-3 mt-2" onclick="redirecionar('LarissaSouza')">
                    <div class="container">
                        <div class="d-flex align-items-end justify-content-center">
                        <img src="../img/LarissaSouza.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                        <span class="position-absolute bg-light text-dark px-4 py-0">Larissa Souza</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-2" onclick="redirecionar('TeaPaz')">
                    <div class="container">
                        <div class="d-flex align-items-end justify-content-center">
                        <img src="../img/TeaPaz.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                        <span class="position-absolute bg-light text-dark px-4 py-0">Tea Paz</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-2 " onclick="redirecionar('GianneSouza')">
                    <div class="container">
                        <div class="d-flex align-items-end justify-content-center">
                            <img src="../img/GianneSouza.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                            <span class="position-absolute bg-light text-dark px-4 py-0">Gianne Souza</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-2" onclick="redirecionar('ArthurPerigo')" >
                    <div class="container">
                        <div class="d-flex align-items-end justify-content-center">
                            <img src="../img/ArthurPerigo.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                            <span class="position-absolute bg-light text-dark px-4 py-0">Arthur Perigo</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row card p-4 mt-3">
            <h1>Conselho Magico Sul Americano</h1>
            <div class="row">
                <div class="col-md-3 mt-2 " onclick="redirecionar('HectorGomes')">
                    <div class="container">
                        <div class="d-flex align-items-end justify-content-center">
                            <img src="../img/Hector_Gomes.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                            <span class="position-absolute bg-light text-dark px-4 py-0">Hector Gomes</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-2 " onclick="redirecionar('MarinaOliveira')">
                    <div class="container">
                        <div class="d-flex align-items-end justify-content-center">
                            <img src="../img/MarinaOliveira.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                            <span class="position-absolute bg-light text-dark px-4 py-0">Marina Oliveira</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-2 " onclick="redirecionar('AmandaTerruel')">
                    <div class="container">
                        <div class="d-flex align-items-end justify-content-center">
                            <img src="../img/AmandaTerruel.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                            <span class="position-absolute bg-light text-dark px-4 py-0">Amanda Terruel</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-2 " onclick="redirecionar('SauloSalvatore')">
                    <div class="container">
                        <div class="d-flex align-items-end justify-content-center">
                            <img src="../img/SauloSalvatore.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                            <span class="position-absolute bg-light text-dark px-4 py-0">Saulo Salvatore</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3 mt-2 " onclick="redirecionar('JorgeBelchior')">
                    <div class="container">
                        <div class="d-flex align-items-end justify-content-center">
                            <img src="../img/JorgeBelchior.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                            <span class="position-absolute bg-light text-dark px-4 py-0">Jorge Belchior</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row card p-4 mt-3">
            <h1>Professores em Castelo Bruxo</h1>
            <div class="row">
                <div class="row " >
                    <div class="col-md-3 mt-2" onclick="redirecionar('FranciaMarquez')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                              <img src="../img/FranciaMarquez.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                              <span class="position-absolute bg-light text-dark px-4 py-0">Francia Marquez</span>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3 mt-2 " onclick="redirecionar('EnriqueCasaretto')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                                <img src="../img/EnriqueCasaretto.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                                <span class="position-absolute bg-light text-dark px-4 py-0">Enrique Casaretto</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2 " onclick="redirecionar('FumikoYoshida')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                                <img src="../img/FumikoYoshida.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                                <span class="position-absolute bg-light text-dark px-4 py-0">Fumiko Yoshida</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2 " onclick="redirecionar('DaisyFlores')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                                <img src="../img/DaisyFlores.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                                <span class="position-absolute bg-light text-dark px-4 py-0">Daisy Flores</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row " >
                    <div class="col-md-3 mt-2" onclick="redirecionar('AlineKirshiner')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                              <img src="../img/AlineKirshiner.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                              <span class="position-absolute bg-light text-dark px-4 py-0">Aline Kirshiner</span>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3 mt-2 " onclick="redirecionar('ManuelBlancoEncalada')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                                <img src="../img/ManuelBlancoEncalada.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                                <span class="position-absolute bg-light text-dark px-4 py-0">Manuel Blanco Encalada</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2 " onclick="redirecionar('MauroModerado')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                                <img src="../img/MauroModerado.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                                <span class="position-absolute bg-light text-dark px-4 py-0">Mauro Moderado</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2 " onclick="redirecionar('VictoriaAmaral')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                                <img src="../img/VictoriaAmaral.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                                <span class="position-absolute bg-light text-dark px-4 py-0">Victoria Amaral</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row card p-4 mt-3">
            <h1>Alunos Castelo Bruxo</h1>
            <div class="row">
                <div class="row " >
                    <div class="col-md-3 mt-2" onclick="redirecionar('MiguelFranco')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                              <img src="../img/MiguelFranco.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                              <span class="position-absolute bg-light text-dark px-4 py-0">Miguel Franco</span>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3 mt-2 " onclick="redirecionar('Anna')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                                <img src="../img/Anna.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                                <span class="position-absolute bg-light text-dark px-4 py-0">Anna Guimaraes</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2 " onclick="redirecionar('Fabio')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                                <img src="../img/Fabio.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                                <span class="position-absolute bg-light text-dark px-4 py-0">Fabio Gonzaeles</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2 " onclick="redirecionar('Sarah')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                                <img src="../img/Sarah.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                                <span class="position-absolute bg-light text-dark px-4 py-0">Sarah Calheiros</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row " >
                    <div class="col-md-3 mt-2" onclick="redirecionar('Amalia')" >
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                              <img src="../img/Amalia.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                              <span class="position-absolute bg-light text-dark px-4 py-0">Amalia Lima</span>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3 mt-2" onclick="redirecionar('HéctorSeijiNakayama')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                              <img src="../img/HéctorSeijiNakayama.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                              <span class="position-absolute bg-light text-dark px-4 py-0">Héctor Seiji Nakayama</span>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3 mt-2 " onclick="redirecionar('IsabeleRossi')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                                <img src="../img/IsabeleRossi.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                                <span class="position-absolute bg-light text-dark px-4 py-0">Isabele Rossi</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2 " onclick="redirecionar('Wellington')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                                <img src="../img/Wellington.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                                <span class="position-absolute bg-light text-dark px-4 py-0">Wellington Gollard</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row " >
                    <div class="col-md-3 mt-2" onclick="redirecionar('BrunoSantos')" >
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                              <img src="../img/BrunoVieira.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                              <span class="position-absolute bg-light text-dark px-4 py-0">Bruno Santos</span>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3 mt-2" onclick="redirecionar('AlineVieira')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                              <img src="../img/AlineVieira.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                              <span class="position-absolute bg-light text-dark px-4 py-0">Aline Santos</span>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3 mt-2 " onclick="redirecionar('oliver')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                                <img src="../img/oliver.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                                <span class="position-absolute bg-light text-dark px-4 py-0">Oliver Vieira</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2 " onclick="redirecionar('kariny')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                                <img src="../img/kariny.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                                <span class="position-absolute bg-light text-dark px-4 py-0">kariny Vieira</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row " >
                    <div class="col-md-3 mt-2" onclick="redirecionar('AishaKummar')" >
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                              <img src="../img/AishaKummar.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                              <span class="position-absolute bg-light text-dark px-4 py-0">Aisha Kummar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2" onclick="redirecionar('BeatrizSaldanha')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                              <img src="../img/BeatrizSaldanha.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                              <span class="position-absolute bg-light text-dark px-4 py-0">Beatriz Saldanha</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2 " onclick="redirecionar('CristianPaiva')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                                <img src="../img/CristianPaiva.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                                <span class="position-absolute bg-light text-dark px-4 py-0">Cristian Paiva</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2 " onclick="redirecionar('DhaianyPaiva')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                                <img src="../img/DhaianyPaiva.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                                <span class="position-absolute bg-light text-dark px-4 py-0">Dhaiany Paiva</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row " >
                    <div class="col-md-3 mt-2" onclick="redirecionar('DalilaSolimoes')" >
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                              <img src="../img/DalilaSolimoes.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                              <span class="position-absolute bg-light text-dark px-4 py-0">Dalila Solimoes</span>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3 mt-2" onclick="redirecionar('HadijaAl-Makki')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                              <img src="../img/HadijaAl-Makki.jpg" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                              <span class="position-absolute bg-light text-dark px-4 py-0">Hadija Al-Makki</span>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3 mt-2 " onclick="redirecionar('RobertoGuimaraes')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                                <img src="../img/RobertoGuimaraes.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                                <span class="position-absolute bg-light text-dark px-4 py-0">Roberto Guimaraes</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2 " onclick="redirecionar('SuelenFlores')">
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                                <img src="../img/SuelenFlores.png" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                                <span class="position-absolute bg-light text-dark px-4 py-0">Suelen Flores</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row " >
                    <div class="col-md-3 mt-2" onclick="redirecionar('KauanMira')" >
                        <div class="container">
                            <div class="d-flex align-items-end justify-content-center">
                              <img src="../img/KauanMira.jpeg" style="width: 100%;cursor:pointer;" class="img-fluid" alt="">
                              <span class="position-absolute bg-light text-dark px-4 py-0">Kauan Mira</span>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function redirecionar(nome) {
            window.location.href = nome + '.html';
        }
    </script>
@endsection