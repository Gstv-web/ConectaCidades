<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="/scripts.js"></script>
    
    <title>Conecta Cidades</title>
</head>
   
<body>

    <div class="container-fluid-md" id="topo">
        <div class="row d-flex justify-content-sm-between align-items-center ml-4 mt-4 mr-4" id="header">

            <div class="logo col-sm-6 align-items-center pl-5 ml-2">

                <img src="Assets/LogoHorizontal.png" class="conectaCidades">

            </div>

            <nav>
                <ul class="d-flex">
                    <li>Início</li>
                    <li>Palestras</li>
                    <li>Transformação Digital</li>
                    <li>Speakers</li>
                </ul>
            </nav>

        </div>

        <div class="row d-flex justify-content-between align-items-center ml-4 mt-4 mr-4">

            <div class="col-md-6 d-flex flex-column mb-3 ml-5 pt-5 mt-5" id="text">

                <div class="align-items-center align-self-md-center text-md-left pt-5 paragrafos">

                    <p style="font-size: 12px; font-weight: bold; margin-bottom: 0;">DESCUBRA COMO CIDADES FIZERAM AÇÕES
                        QUE SALVARAM VIDAS</p>
                    <p class="text-sm-center" style="font-size: 37px; font-weight: bold; margin-bottom: 0;">As tendências 2022-2032 na
                        Transformação Digital em Órgãos Públicos</p>
                    <p style="font-size: 18px;"><span><strong>100% Gratuito.</strong></span> Feito para auxiliar
                        gestores públicos tomarem
                        melhores decisões para o futuro.</p>

                    <button id="saibaMais" class="w-auto">SAIBA MAIS</button>
                </div>

            </div>

            <div class="col-md-5" id="form-box">

                <form action="dbConnection.php" method="post" class="d-flex flex-column" id="form1">

                    <p class="text-center" style="font-size: 16px; color: white;"><strong>Preencha seus dados</strong> e
                        receba as palestras no seu e-mail.<br>Sem
                        segredos.<br>Compartilhe à vontade!</p>

                    <input type="text" name="nome" id="nome" placeholder="Seu nome...">

                    <input type="email" name="email" id="email" placeholder="Seu e-mail...">

                    <input type="phone" name="telefone" id="telefone" placeholder="Seu telefone">

                    <button type="submit" class="align-self-center" onclick="enviarAPI()" id="send1">ENVIAR</button>

                </form>
                

            </div>


        </div>

        <!-- ARGUMENTOS -->
        <div class="row mt-3 mb-3 justify-content-center">
            <h2 class="historias pt-4 pb-5 text-center">Histórias que você vai conhecer</h2>
        </div>

        <div class="row d-flex flex-sm-wrap justify-content-center ml-1 mr-1">

            <div class="col-md-4 d-flex flex-column text-center">
                <h2>INCONTAVEIS VIDAS</h2>
                <p>Salvas através de estratégias digitais durante a pandemia</p>
            </div>

            <div class="col-md-4 d-flex flex-column text-center">
                <h2>R$ 41 MILHÕES</h2>
                <p>Arrecadados a mais pela prefeitura de Recife através de Mensageria Mobile</p>
            </div>

            <div class="col-md-4 d-flex flex-column text-center">
                <h2>SETORES INTEIROS</h2>
                <p>Economizam verba pública digitalizando os seus serviços públicos</p>
            </div>

            <div class="col-md-4 d-flex flex-column text-center">
                <h2>ARGUMENTO 4</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="col-md-4 d-flex flex-column text-center">
                <h2>ARGUMENTO 5</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>


        </div>


        <div class="d-flex flex-column align-items-center">
            <p style="font-size: 32px;">E muito mais...</p>
            <div class="mt-2 text-center w-auto" id="AccessButton">ACESSAR AGORA</div>
        </div>

    </div>
    <div class="container-fluid-md" id="bg">

        <div class="row d-flex align-items-center" id="historias">

            <div class="conteudo d-flex flex-column col-sm-6 mx-md-auto">

                <p style="font-family: 'Inter', sans-serif; color: white; font-size: 22px; font-weight: 500;"
                    class="text-center text-sm-center">Conteúdo reunido para gestores públicos, atores políticos,
                    secretários e todos que acreditam num
                    futuro melhor para a população através da tecnologia!</p>
                <button class="queroAcessar w-auto align-self-sm-center">QUERO ACESSAR</button>
            </div>

            <div class="d-flex w-100 col-sm-6 mx-md-auto justify-content-center" id="media">

                <div class="video">


                </div>
            </div>

        </div>

        <!-- IMG TRANSFORMAÇÃO DIGITAL -->
        <div class="row justify-content-center">

            <div class="d-flex flex-column align-items-center">

                <img src="/Assets/TransformacaoDigital.png" class="transformacao" alt="">
                <button class="queroAcessar w-auto justify-content-center">QUERO ACESSAR</button>
            </div>

        </div>

        <!-- CARROSSEL SPEAKERS -->
        <div class="row d-flex flex-column align-items-center pt-5">

            <p style="font-family: 'Inter', sans-serif; color: white; font-size: 30px;" class="pb-4">Palestrantes</p>



            <div class="cards d-flex justify-content-between col-sm-12">

                <div class="cardExternalArea d-flex flex-column align-content-center col-sm-2 mr-2">

                    <div class="pic d-flex justify-content-center"><img src="/Assets/Ellipse 1.png" alt=""
                            class="pic align-self-center"></div>

                    <div class="nomeTexto">

                        <p class="pt-3 text-center" style="font-weight: bold; font-size: 15px;">Nome Sobrenome</p>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tenetur
                            quia cumque ad totam ex</p>

                    </div>

                </div>

                <div class="cardExternalArea d-flex flex-column align-content-center col-sm-2 mr-2">

                    <div class="pic d-flex justify-content-center"><img src="/Assets/Ellipse 1.png" alt=""
                            class="pic align-self-center"></div>
                    <div class="nomeTexto">

                        <p class="pt-3 text-center" style="font-weight: bold; font-size: 15px;">Nome Sobrenome</p>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tenetur
                            quia cumque ad totam ex</p>

                    </div>

                </div>

                <div class="cardExternalArea d-flex flex-column align-content-center col-md-2 col-sm-2 mr-2">

                    <div class="pic d-flex justify-content-center"><img src="/Assets/Ellipse 1.png" alt=""
                            class="pic align-self-center"></div>
                    <div class="nomeTexto">

                        <p class="pt-3 text-center" style="font-weight: bold; font-size: 15px;">Nome Sobrenome</p>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tenetur
                            quia cumque ad totam ex</p>

                    </div>

                </div>

                <div class="cardExternalArea d-flex flex-column align-content-center col-md-2 col-sm-2 mr-2">

                    <div class="pic d-flex justify-content-center"><img src="/Assets/Ellipse 1.png" alt=""
                            class="pic align-self-center"></div>
                    <div class="nomeTexto">

                        <p class="pt-3 text-center" style="font-weight: bold; font-size: 15px;">Nome Sobrenome</p>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tenetur
                            quia cumque ad totam ex</p>

                    </div>

                </div>

                <div class="cardExternalArea d-flex flex-column align-content-center col-md-2 col-sm-2">
                    <div class="pic d-flex justify-content-center"><img src="/Assets/Ellipse 1.png" alt=""
                            class="pic align-self-center"></div>
                    <div class="nomeTexto">

                        <p class="pt-3 text-center" style="font-weight: bold; font-size: 15px;">Nome Sobrenome</p>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tenetur
                            quia cumque ad totam ex</p>

                    </div>

                </div>



            </div>


            <button class="queroAcessar w-auto mt-5">QUERO ACESSAR</button>

        </div>

        <!-- Mockup -->

        <div class="row d-flex align-items-center justify-content-sm-center pt-5">



            <img src="/Assets/MockupConectaCidades.png" alt="" class="col-sm-6 mx-auto" id="mock">



            <div id="mockP" class="d-flex col-sm-4 text-sm-center accordion mx-auto">
                <p class="text-center"><strong>Preencha o formulário</strong> e seja redirecionado para uma página
                    contendo as <strong>mais
                        atualizadas palestras</strong> sobre <strong>Transformação Digital em Órgãos Públicos no
                        Brasil</strong>, categorizadas por tema.</p>
            </div>


        </div>

        <!-- FORM 2 -->

        <div class="container d-flex col-10 flex-column align-items-center mx-auto form-box2">

            <p class="text-center col-9" style="font-size: 16px; color: white; font-family: 'Montserrat', sans-serif;">
                Preencha seus dados e receba as<br>palestras no seu e-mail. Sem segredos.<br>Compartilhe à vontade!</p>

            <form action="dbConnection.php" method="post" onSubmit="window.location.reload()" class="d-flex flex-column w-100" id="form2">

                
                <div class="inputs d-flex justify-content-between pb-4">

                    <input type="text" name="nome" id="nome" placeholder="Seu nome...">
    
                    <input type="email" name="email" id="email" placeholder="Seu e-mail...">
    
                    <input type="phone" name="telefone" id="telefone" placeholder="Seu telefone">
                    
                </div>

                <button type="submit" id="send2" class="w-25 align-self-center">Enviar</button>

                
            </form>

        </div>
        <hr>
        <footer class="pl-5 ml-5 pb-3">

            <p>Projeto Conecta Cidade - Todos os direitos reservados.</p>

        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
</body>

</html>