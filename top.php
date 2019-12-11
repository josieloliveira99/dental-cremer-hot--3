<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="https://www.dentalcremer.com.br/assets/templates/1/js/jquery.js" type="text/javascript"></script>
    <script src="https://www.dentalcremer.com.br/assets/templates/1/js/head.min.js?25" type="text/javascript"></script>
    <link rel="stylesheet" href="https://www.dentalcremer.com.br/assets/templates/1/css/styles.css?166">
    <link rel="stylesheet" href="hotsite.css">
    
</head>
<body>
        <header id="header" class="upFloatHeader">
                <style>
    .box-question {
        background-color: rgba(0, 0, 0, 0.5);
        bottom: 0;
        display: none;
        height: 100%;
        left: 0;
        position: fixed;
        right: 0;
        top: 0;
        width: 100%;
        z-index: 999;
    }
    .box-question.active { display: block; }
    .box-question-inner {
        background-color: #FFF;
        border-radius: 10px;
        box-sizing: border-box;
        font-family: "Roboto";
        left: 50%;
        padding: 20px 25px 25px;
        position: absolute;
        text-align: left;
        top: 50%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        width: 322px;
    }
    .box-question .align-center { text-align: center; }
    .box-question-tit {
        color: #ff8a2c;
        font-size: 18px;
        font-weight: bold;
        line-height: 18px;
        margin-bottom: 7px;
    }
    .box-question-txt {
        color: #959494;
        font-size: 15px;
        line-height: 18px;
        margin-bottom: 19px;
    }
    .box-question-lst {
        font-size: 0;
        list-style: none;
        text-align: justify;
    }
    .box-question-lst:before {
        content: "";
        display: block;
        width: 100%;
    }
    .box-question-lst:after {
        content: "";
        display: inline-block;
        width: 100%;
    }
    .box-question-lst li {
        display: inline-block;
        vertical-align: top;
    } 
    .box-question-lst a {
        border-radius: 2px;
        border: 1px solid #9b9b9b;
        box-sizing: border-box;
        color: #9b9b9b;
        display: block;
        font-size: 16px;
        height: 45px;
        line-height: 43px;
        text-align: center;
        transition: .3s;
        width: 130px;
    }
    .box-question-lst a:hover {
        background-color: #ff8a2c;
        border-color: #ff8a2c;
        color: #FFF;
    }
    .box-question-step-2 { display: none }
    </style>
    <div class="box-question">
        <div class="box-question-inner box-question-step-1">
            <p class="box-question-tit">Precisamos confirmar o seu cadastro!</p>
            <p class="box-question-txt">Queremos direcionar as melhores ofertas para você. Por favor, assinale uma das opções abaixo:</p>
            <ul class="box-question-lst">
                <li>
                    <a href="#" class="box-question-estudante">Sou estudante</a>
                </li>
                <li>
                    <a href="/comprador?estudante-atualiza-cadastro" class="box-question-formado">Já sou formado</a>
                </li>
            </ul>
        </div>
        <div class="box-question-inner align-center box-question-step-2">
            <p class="box-question-tit">Atualize seu cadastro</p>
            <p class="box-question-txt">Em nosso sistema você ainda está cadastrado como estudante. Para continuar realizando suas compras é necessário que inclua em seu cadastro seu CRO.</p>
            <ul class="box-question-lst align-center">
                <li><a href="#">Atualizar agora</a></li>
            </ul>
        </div>
    </div>
    
    <div class="header-content">
      <div class="header-top">
        <div class="header-greeting">
          <span id="ciac-greetingB2B">        <div class="greeting-link">
                <a href="#">
                    <span class="greeting-link-tit">Entrar</span>
                </a>
            </div>
            <div id="programs" class="programs-notLogged" style="display: none;">
                <span class="arrow-up"></span>
                <div class="programs-close"><a href="#">+</a></div>
                <div class="header-user-notdentist">
                    <h4>Não é dentista?</h4>
                    <p>Escolha a melhor opção para você:</p>
                    <a href="https://www.programaestudantes.com.br/" target="_blank">Estudante</a>
                    <a href="https://laboratorio.dentalcremer.com.br/" target="_blank">Laboratório</a>
                </div>
                <div class="programs-header">
                    <h3 class="programs-header-title">Olá!</h3>
                    <p class="programs-header-message">Entre no site e confira o que preparamos para você.</p>
                </div>
                <div class="fastLogin">
                  <fieldset class="fastLogin-form form">
                    <div class="fastLogin-form-item fastLogin-form-email">
                      <span class="fastlogin-form-name">E-mail</span>
                      <label>
                        <input data-val="true" data-val-email="Não é um e-mail válido" data-val-length="O campo E-mail ultrapassou o tamanho limite de 255 caracteres" data-val-length-max="255" data-val-length-min="1" data-val-required="O campo E-mail ultrapassou o tamanho limite de 255 caracteres" id="Login_Email" name="Login.Email" type="text" value="" autocomplete="off" placeholder="Digite seu e-mail">
                        <span class="field-validation-valid" data-valmsg-for="Login.Email" data-valmsg-replace="true"></span>
                        <i></i>
                      </label>
                    </div>
                    <div class="fastLogin-form-item fastLogin-form-password">
                      <span class="fastlogin-form-name">Senha</span>
                      <label>
                        <input data-val="true" data-val-length="O campo Senha ultrapassou o tamanho limite de 20 caracteres" data-val-length-max="20" data-val-length-min="1" data-val-required="O campo Senha ultrapassou o tamanho limite de 20 caracteres" id="Login_Password" name="Login.Password" type="password" value="" autocomplete="off" placeholder="Digite sua senha">
                        <span class="field-validation-valid" data-valmsg-for="Login.Password" data-valmsg-replace="true"></span>
                        <i></i>
                      </label>
                    </div>
                    <div class="fastLogin-buttons">
                        <a href="https://www.dentalcremer.com.br/identificacao/t/1" class="fastLogin-link-register">Faça seu cadastro</a>
                        <a href="javascript:ForgotPassword('ciac-greetingB2B', '1');" class="fastLogin-form-forgotPassword">Esqueci minha senha</a>
                        <a href="javascript:LoginUser('ciac-greetingB2B', '1', '/assets/templates/1/ascx/header.ascx.xml','/JsonService.asmx/Login');" class="header-bt fastLogin-buttons-go">Entrar</a>
                    </div>
                  </fieldset>
                </div>
                <div class="user-links">
                    <ul>
                        <li><a href="/paginainstitucional/boleto">2ª Via de Boleto</a></li>
                        <li><a href="/identificacao/destino/comprador">Meu Cadastro</a></li>
                        <li><a href="/identificacao/destino/meuspedidos">Meus Pedidos</a></li>
                        <li><a href="/paginainstitucional/compra-rapida">Minhas Listas</a></li>
                    </ul>
                </div>
                <div class="greeting-banner-bottom">
                    <a href="https://www.dentalcremer.com.br/paginainstitucional/lovers"><img src=" data:image/png;base64,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" alt="DC Lovers"></a>
                </div>
            </div>
    </span><script>$(document).ready(LoadComponente('/assets/templates/1/ascx/header.ascx.xml','ciac-greetingB2B','/JsonService.asmx/Login'));</script>
    
        </div>
        <div class="header-help">
          <a href="https://www.dentalcremer.com.br/faleconosco" target="_self">Precisa de ajuda?</a>
          <ul class="header-help-box">
            <li><a href="https://www.dentalcremer.com.br/paginainstitucional/boleto" target="_self">2ª Via de Boleto</a></li> <!-- 2ª Via de Boleto -->
            <li><a href="https://www.dentalcremer.com.br/paginainstitucional/rastreamentopedido" target="_self">Acompanhe seu Pedido</a></li> <!-- Acompanhar Pedido -->
            <li><a href="https://www.dentalcremer.com.br/comprador/t/1/destino/comprador" target="_self">Meu Cadastro</a></li> <!-- Meu Cadastro -->
            <li><a href="https://www.dentalcremer.com.br/pedidos/t/1/destino/meuspedidos" target="_self">Meus Pedidos</a></li> <!-- Meus Pedidos -->
            <li><a href="https://www.dentalcremer.com.br/paginainstitucional/compra-rapida" target="_self">Minhas Listas</a></li> <!-- Minhas Listas -->
            <li><a href="https://www.dentalcremer.com.br/faleconosco" target="_self">Perguntas Frequentes</a></li> <!-- Perguntas Frequentes -->
          </ul>
        </div>
        <div class="header-navbar">
          <a href="https://www.dentalcremer.com.br/paginainstitucional/rastreamentopedido" target="_self">Acompanhe seu Pedido</a>
          <a href="https://www.dentalcremer.com.br/paginainstitucional/boleto" target="_self">2ª Via do Boleto</a>
        </div>
        <div class="header-cart">
          <a href="https://www.dentalcremer.com.br/carrinho" target="_self"></a>
          <div class="header-cart-info">
            <div class="header-cart-icon sprite"></div>
            <div id="header-cart-quantity">0</div>
            <div class="header-cart-title">Meu Carrinho</div>
          </div>
          <div id="header-miniCart"><div class="header-cart-items float-box float-box-right"><span class="arrow-up"></span><div class="header-cart-items-empty"><p class="header-cart-items-empty-title">Seu carrinho está vazio.</p><a href="https://www.dentalcremer.com.br/lista/1" class="header-cart-items-empty-bt">Ofertas Especiais</a></div></div></div>
          <div class="float-box float-box-right header-cart-addedMessage">
            <span class="arrow-up"></span>
            Produto adicionado ao carrinho!
          </div>
        </div>
      </div>
    
      <div class="header-middle">
        <div class="header-logo sprite">
          <a href="https://www.dentalcremer.com.br/" target="_self">Dental Cremer</a>
        </div>
        
      <div id="nm-search-term-container" class="nm-search-term-container" action="/"><div id="nm-search-input-term-container" class="nm-search-input-term-container"><input id="q" name="q" type="search" autocomplete="off" class="nm-search-input" placeholder="O que você procura?" nm-autocomplete="off"></div><div id="nm-search-button-container" class="nm-search-button-container"><div id="nm-search-button" class="nm-search-button"><a id="nm-search-button-click" src="javascript:void(0);"></a></div></div></div></div>
    </div>
    
    <div class="header-menu">
      <div class="header-menu-content">
        <ul class="header-menu-ul">
          <li class="header-menu-li header-menu-categorias">
            <a href="javascript: void(0)" class="header-menu-a">Categorias</a>
            <nav id="all-menu" class="header-menu-sub">
                  <ul>
          <li><a href="/departamento/854653/dentistica-e-estetica">Dentística e Estética<span class="sprite"></span></a>
            <ul class="header-menu-sub">
              <div class="lists"><li><a href="/departamento/854654/acabamento-e-polimento">Acabamento e Polimento</a></li><li><a href="/departamento/854655/acido">Ácido</a></li><li><a href="/departamento/854656/adesivo">Adesivo</a></li><li><a href="/departamento/854657/afastador">Afastador para Dentística</a></li><li><a href="/departamento/854658/amalgama-capsula">Amálgama Capsula</a></li><li><a href="/departamento/854659/amalgama-em-po">Amálgama em Pó</a></li><li><a href="/departamento/854660/aplicador-descartavel">Aplicador Descartável</a></li><li><a href="/departamento/854661/arcos-diversos">Arcos Diversos</a></li><li><a href="/departamento/854662/barreira-gengival">Barreira Gengival</a></li><li><a href="/departamento/855527/bloqueador-de-oxigenio">Bloqueador de Oxigênio</a></li><li><a href="/departamento/854663/carbono">Carbono</a></li><li><a href="/departamento/854664/cariostatico">Cariostático</a></li><li><a href="/departamento/854667/clareador-caseiro">Clareador Caseiro</a></li><li><a href="/departamento/854665/clareador-de-consultorio">Clareador de Consultório</a></li></div>
              
              
              
              
              
              
              
              
              
              
              
              
              
              <div class="lists"><li><a href="/departamento/854666/clareador-dental-interno">Clareador Dental Interno</a></li><li><a href="/departamento/855493/corante-para-resina">Corante para Resina</a></li><li><a href="/departamento/854668/cunhas">Cunhas</a></li><li><a href="/departamento/854945/dessensibilizante">Dessensibilizante</a></li><li><a href="/departamento/854669/disco-de-lixa">Disco De Lixa</a></li><li><a href="/departamento/854670/discos-diversos">Discos Diversos</a></li><li><a href="/departamento/855163/facetas">Facetas</a></li><li><a href="/departamento/854672/fibra-de-vidro">Fibra de Vidro</a></li><li><a href="/departamento/854673/fita-para-isolamento-dental">Fita Para Isolamento Dental</a></li><li><a href="/departamento/855178/infiltrante-de-carie">Infiltrante de Cárie</a></li><li><a href="/departamento/854675/instrumentais">Instrumentais para Dentística</a></li><li><a href="/departamento/854676/ionomero-de-vidro">Ionômero de Vidro</a></li><li><a href="/departamento/854679/matriz">Matriz</a></li><li><a href="/departamento/855058/opacificadores">Opacificador</a></li></div>
              
              
              
              
              
              
              
              
              
              
              
              
              
              <div class="lists"><li><a href="/departamento/854680/pasta-para-polimento">Pasta para Polimento</a></li><li><a href="/departamento/854681/piercing">Piercing</a></li><li><a href="/departamento/854682/placa-para-moldeira">Placa para Moldeira</a></li><li><a href="/departamento/854683/ponta-aplicadora">Ponta Aplicadora</a></li><li><a href="/departamento/854685/porta-matriz">Porta Matriz</a></li><li><a href="/departamento/855255/porta-resina">Porta Resina</a></li><li><a href="/departamento/855498/protetor-pulpar">Protetor Pulpar</a></li><li><a href="/departamento/854686/removedor">Removedor</a></li><li><a href="/departamento/855165/resina-de-preenchimento-unico">Resina Bulk Fill</a></li><li><a href="/departamento/854687/resina-composta">Resina Composta</a></li><li><a href="/departamento/855141/resina-fluida">Resina Fluida</a></li><li><a href="/departamento/855144/resina-para-preenchimento-de-nucleo">Resina para Preenchimento de Núcleo</a></li><li><a href="/departamento/854689/tira-de-lixa">Tira de Lixa</a></li><li><a href="/departamento/855336/umidificador-de-resina">Umidificador de Resina</a></li></div>
              
              
              
              
              
              
              
              
              
              
              
              
              
            </ul>
          </li>
          <li><a href="/departamento/854895/ortodontia">Ortodontia<span class="sprite"></span></a>
            <ul class="header-menu-sub">
              <div class="lists"><li><a href="/departamento/854902/acessorio-para-ortodontia">Acessórios para Ortodontia</a></li><li><a href="/departamento/854903/alginato">Alginato Ortodôntico</a></li><li><a href="/departamento/855037/alicate-ortodontico">Alicate Ortodôntico</a></li><li><a href="/departamento/855543/alinhador-estetico">Alinhador Estético</a></li><li><a href="/departamento/854904/arco-extra-oral">Arco Extra Oral</a></li><li><a href="/departamento/854905/arco-intra-oral">Arco Intra Oral</a></li><li><a href="/departamento/854906/banda">Banda</a></li><li><a href="/departamento/854907/barra-palatina">Barra Palatina</a></li><li><a href="/departamento/854908/botao-lingual">Botão Língual</a></li></div>
              
              
              
              
              
              
              
              
              <div class="lists"><li><a href="/departamento/854909/braquete-reposicao">Bráquete Reposição</a></li><li><a href="/departamento/854910/caixas-diversas">Caixas Diversas</a></li><li><a href="/departamento/854911/ceras-diversas">Ceras Diversas</a></li><li><a href="/departamento/854912/conjunto-braquete">Conjunto Bráquete</a></li><li><a href="/departamento/854913/corretor-pma">Corretor de Classe II</a></li><li><a href="/departamento/854914/elasticos">Elásticos</a></li><li><a href="/departamento/854915/expansor">Expansor</a></li><li><a href="/departamento/854916/fio">Fio</a></li><li><a href="/departamento/854917/fita-para-bandar">Fita para Bandar</a></li></div>
              
              
              
              
              
              
              
              
              <div class="lists"><li><a href="/departamento/854919/instrumentos-orto">Instrumentos para Ortodontia</a></li><li><a href="/departamento/855150/ionomero-de-vidro-para-ortodontia">Ionômero de Vidro Para Ortodontia</a></li><li><a href="/departamento/855341/levante-de-mordida">Levante de Mordida</a></li><li><a href="/departamento/854922/mola">Mola</a></li><li><a href="/departamento/855253/organizadores-ortodonticos">Organizadores Ortodônticos</a></li><li><a href="/departamento/854923/resina-acrilica-ortodontica">Resina Acrílica Ortodôntica</a></li><li><a href="/departamento/854926/resina/adesivo-ortodontico">Resina/Adesivo Ortodôntico</a></li><li><a href="/departamento/855040/tracionadores">Tracionadores</a></li><li><a href="/departamento/854930/tubo">Tubo</a></li></div>
              
              
              
              
              
              
              
              
            </ul>
          </li>
          <li><a href="/departamento/854715/endodontia">Endodontia<span class="sprite"></span></a>
            <ul class="header-menu-sub">
              <div class="lists"><li><a href="/departamento/854717/alargador-endodontico">Alargador Endodôntico</a></li><li><a href="/departamento/854780/aspiracao-/-irrigacao">Aspiração / Irrigação</a></li><li><a href="/departamento/854718/broca-endodontica">Broca Endodôntica</a></li><li><a href="/departamento/854719/cimento-endodontico">Cimento Endodôntico</a></li><li><a href="/departamento/854720/cimento-endodontico-reparador">Cimento Endodôntico Reparador</a></li><li><a href="/departamento/854721/condensador-de-guta-percha">Condensador de Guta Percha</a></li><li><a href="/departamento/854722/cone-de-papel">Cone de Papel</a></li><li><a href="/departamento/854724/espacador-digital">Espaçador Digital</a></li></div>
              
              
              
              
              
              
              
              <div class="lists"><li><a href="/departamento/854725/extirpa-nervo">Extirpa Nervo</a></li><li><a href="/departamento/854726/flexor-limas">Flexor de Limas</a></li><li><a href="/departamento/854727/guta-percha">Guta Percha</a></li><li><a href="/departamento/854729/lencol-de-borracha">Lençol de Borracha para Endodontia</a></li><li><a href="/departamento/854732/lima-endodontica">Lima Endodôntica</a></li><li><a href="/departamento/855517/lima-rotatoria">Lima Rotatória</a></li><li><a href="/departamento/855748/limpeza-de-canal">Limpeza de Canal</a></li><li><a href="/departamento/854747/medicamento-endodontico">Medicamento Endodôntico</a></li></div>
              
              
              
              
              
              
              
              <div class="lists"><li><a href="/departamento/854749/reguas">Réguas</a></li><li><a href="/departamento/854754/solvente">Solvente para Endodontia</a></li><li><a href="/departamento/854758/stop-de-silicone">Stop de Silicone</a></li><li><a href="/departamento/854759/tamborel">Tamborel</a></li><li><a href="/departamento/854760/teste-de-vitalidade-pulpar">Teste de Vitalidade Pulpar</a></li><li><a href="/departamento/854761/vaselina">Vaselina</a></li></div>
              
              
              
              
              
            </ul>
          </li>
          <li><a href="/departamento/854690/descartaveis">Descartáveis<span class="sprite"></span></a>
            <ul class="header-menu-sub">
              <div class="lists"><li><a href="/departamento/854691/abaixador-lingual">Abaixador Lingual</a></li><li><a href="/departamento/854693/agulhas-diversas">Agulhas Diversas</a></li><li><a href="/departamento/854694/algodao">Algodão</a></li><li><a href="/departamento/854695/aventais-diversos">Aventais Diversos</a></li><li><a href="/departamento/854696/babador-descartavel">Babador Descartável</a></li><li><a href="/departamento/854697/coletor">Coletor Descartável</a></li><li><a href="/departamento/854698/compressa">Compressa Descartável</a></li></div>
              
              
              
              
              
              
              <div class="lists"><li><a href="/departamento/854699/compressa-tnt">Compressa TNT</a></li><li><a href="/departamento/854700/gorros-e-toucas">Gorros e Toucas</a></li><li><a href="/departamento/854644/kit-de-paramentacao">Kit de Paramentação</a></li><li><a href="/departamento/854701/luva-cirurgica-esteril">Luva Cirúrgica Estéril</a></li><li><a href="/departamento/854702/luva-de-procedimento">Luva de Procedimento</a></li><li><a href="/departamento/854703/mascara">Máscara</a></li><li><a href="/departamento/854704/prope">Propé</a></li></div>
              
              
              
              
              
              
              <div class="lists"><li><a href="/departamento/854705/protetor">Protetor</a></li><li><a href="/departamento/854706/rolo-dental">Rolo Dental</a></li><li><a href="/departamento/854707/seringa">Seringa Descartável</a></li><li><a href="/departamento/854708/Sugador-Descartavel">Sugador Descartável</a></li><li><a href="/departamento/854709/suporte">Suporte Descartável</a></li><li><a href="/departamento/855260/toalheiro">Toalheiro</a></li></div>
              
              
              
              
              
            </ul>
          </li>
          <li><a href="/departamento/854598/anestesico">Anestésicos e Agulha Gengival<span class="sprite"></span></a>
            <ul class="header-menu-sub">
              <div class="lists"><li><a href="/departamento/854597/agulha-gengival">Agulha Gengival</a></li><li><a href="/departamento/854598/anestesico">Anestésicos</a></li></div>
                     
            </ul>
          </li>
          <li><a href="/departamento/854716/perifericos-e-pecas-de-mao">Periféricos e Peças de mão<span class="sprite"></span></a>
            <ul class="header-menu-sub">
              <div class="lists"><li><a href="/departamento/854770/acessorio-para-consultorio">Acessório para Consultório</a></li><li><a href="/departamento/854771/acessorio-para-fotopolimerizador">Acessório para Fotopolimerizador</a></li><li><a href="/departamento/855229/acessorio-para-peca-de-mao/t/1">Acessório para Peça de Mão</a></li><li><a href="/departamento/854773/amalgamador">Amalgamador</a></li><li><a href="/departamento/854736/aparelho-de-raio-x">Aparelho de Raio-X</a></li><li><a href="/departamento/855151/aparelho-para-anestesia">Aparelho para Anestesia</a></li><li><a href="/departamento/855162/aparelho-para-limpeza-de-protese">Aparelho para Limpeza de Prótese</a></li><li><a href="/departamento/855152/aquecedor-de-cera">Aquecedor de Cera</a></li><li><a href="/departamento/854778/articulador">Articulador</a></li><li><a href="/departamento/854781/autoclave">Autoclave</a></li><li><a href="/departamento/855033/bisturi-eletrico">Bisturi Elétrico</a></li><li><a href="/departamento/854785/bomba-de-vacuo">Bomba de Vácuo</a></li><li><a href="/departamento/854738/caixa-reveladora">Câmara para Revelação</a></li><li><a href="/departamento/854786/camera-intra-oral">Câmera Intra Oral</a></li><li><a href="/departamento/854787/turbinas">Canetas/Turbinas</a></li><li><a href="/departamento/854788/compressor-de-ar">Compressor de Ar</a></li><li><a href="/departamento/854790/contra-angulo">Contra Ângulo</a></li><li><a href="/departamento/854792/cuba-ultrassonica">Cuba Ultrassônica</a></li><li><a href="/departamento/855228/desintegrador-de-agulhas/t/1">Desintegrador de Agulhas</a></li><li><a href="/departamento/854793/destilador-de-agua">Destilador de Água</a></li></div>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              <div class="lists"><li><a href="/departamento/855054/esfigmomanometro">Esfigmomanômetro</a></li><li><a href="/departamento/855055/esfigmomanometro/estetoscopio">Esfigmomanômetro/Estetoscópio</a></li><li><a href="/departamento/855160/espatulador">Espatulador</a></li><li><a href="/departamento/855053/estetoscopio">Estetoscópio</a></li><li><a href="/departamento/854795/evidenciador-equipto">Evidenciador </a></li><li><a href="/departamento/854797/fibra-otica">Fibra Ótica</a></li><li><a href="/departamento/854798/fotoclareador">Fotoclareador</a></li><li><a href="/departamento/854800/fotopolimerizador">Fotopolimerizador</a></li><li><a href="/departamento/854768/camara-para-jato">Jateamento e Desgaste</a></li><li><a href="/departamento/854776/aparelho-para-profilaxia">Jato de Bicarbonato</a></li><li><a href="/departamento/854803/kit-academico">Kit Acadêmico</a></li><li><a href="/departamento/854775/laser-para-odontologia">Laser para Odontologia</a></li><li><a href="/departamento/854746/localizador-apical">Localizador Apical</a></li><li><a href="/departamento/854805/lubrificante">Lubrificante</a></li><li><a href="/departamento/854806/lupa">Lupa</a></li><li><a href="/departamento/854808/micro-motor">Micro Motor</a></li><li><a href="/departamento/855500/micro-serra">Micro Serra</a></li><li><a href="/departamento/854608/mini-incubadora">Mini Incubadora</a></li><li><a href="/departamento/855153/modelador-de-cera">Modelador de Cera</a></li><li><a href="/departamento/854849/motor-para-clinica">Motor Cirúrgico</a></li></div>
              
              
              
              
              
               
              
              
              
              
              
              
              
              
              
              
              
              
              
              <div class="lists"><li><a href="/departamento/854748/motor-para-clinica">Motor Endodôntico</a></li><li><a href="/departamento/854743/negatoscopio">Negatoscópio</a></li><li><a href="/departamento/854809/peca-reta">Peça Reta</a></li><li><a href="/departamento/855161/perfurador">Perfurador</a></li><li><a href="/departamento/854810/plastificadora">Plastificadora</a></li><li><a href="/departamento/854812/ponta-ultrassonica">Ponta Ultrassônica</a></li><li><a href="/departamento/854835/recortador">Recortador de Gesso  </a></li><li><a href="/departamento/854814/saca-broca">Saca Broca</a></li><li><a href="/departamento/854815/seladora">Seladora</a></li><li><a href="/departamento/855305/sensor-digital-de-cor/t/1">Sensor Digital de Cor</a></li><li><a href="/departamento/855115/sensor-para-radiografia">Sensor para Radiografia</a></li><li><a href="/departamento/855138/seringa-triplice">Seringa Tríplice</a></li><li><a href="/departamento/854928/solda">Soldador</a></li><li><a href="/departamento/854820/torneira">Torneira</a></li><li><a href="/departamento/855099/torno-de-polimento">Torno de Polimento</a></li><li><a href="/departamento/854822/ultrassom">Ultrassom</a></li><li><a href="/departamento/855145/ultrassom-com-jato">Ultrassom com Jato</a></li><li><a href="/departamento/854856/vibrador">Vibrador</a></li></div>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
            </ul>
          </li>
          <li><a href="/departamento/854918/moldagem">Moldagem<span class="sprite"></span></a>
            <ul class="header-menu-sub">
              <div class="lists"><li><a href="/departamento/854921/acessorio-para-pistola">Acessório para Pistola</a></li><li><a href="/departamento/854925/adesivo-de-moldeira">Adesivo de Moldeira</a></li><li><a href="/departamento/854927/alginato">Alginato</a></li><li><a href="/departamento/854929/anti-bolha">Anti Bolha</a></li><li><a href="/departamento/854931/fio-retrator">Fio Retrator</a></li></div>
              
              
              
              
              <div class="lists"><li><a href="/departamento/854933/mat-de-moldagem-polieter">Mat. de Moldagem Poliéter</a></li><li><a href="/departamento/854934/medidor-de-alginato">Medidor de Alginato</a></li><li><a href="/departamento/854935/moldeira">Moldeira</a></li><li><a href="/departamento/854937/pistola">Pistola</a></li><li><a href="/departamento/854938/ponta-aplicadora">Pontas Misturadoras</a></li></div>
              
              
              
              
              <div class="lists"><li><a href="/departamento/855324/silicone-de-adicao">Silicone de Adição</a></li><li><a href="/departamento/855323/silicone-de-condesacao">Silicone de Condensação</a></li><li><a href="/departamento/854939/seringa">Seringa para Moldagem</a></li><li><a href="/departamento/855107/solucao-hemostatica">Solução Hemostática</a></li><li><a href="/departamento/854941/cuba-para-moldagem">Cuba para Moldagem</a></li></div>
              
              
              
              
            </ul>
          </li>
          <li><a href="/departamento/854756/protese">Prótese<span class="sprite"></span></a>
            <ul class="header-menu-sub">
              <div class="lists"><li><a href="/departamento/854762/acabamento-e-polimento">Acabamento e Polimento para Prótese</a></li><li><a href="/departamento/854763/acessorio-para-laboratorio-de-protese">Acessório para Laboratório de Prótese</a></li><li><a href="/departamento/855109/acessorios-para-ceramica">Acessórios para Cerâmica</a></li><li><a href="/departamento/855104/anel">Anel</a></li><li><a href="/departamento/854766/aplicador-de-protese">Aplicador de Prótese</a></li><li><a href="/departamento/854767/articulador">Articulador para Prótese</a></li><li><a href="/departamento/854769/capsula-/-frasco-/-pote">Capsula / Frasco / Pote</a></li><li><a href="/departamento/854772/cera-em-lamina">Cera em Lâmina</a></li><li><a href="/departamento/854774/ceramica">Cerâmica</a></li><li><a href="/departamento/854779/coroa">Coroa</a></li><li><a href="/departamento/855139/delineador">Delineador</a></li><li><a href="/departamento/854782/dente">Dente</a></li><li><a href="/departamento/854783/discos-diversos">Discos para Prótese</a></li><li><a href="/departamento/854789/duplicador">Duplicador</a></li><li><a href="/departamento/854791/escala-de-cor">Escala de Cor</a></li><li><a href="/departamento/854796/fluido-para-polimento">Fluido para Polimento</a></li></div>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              <div class="lists"><li><a href="/departamento/854799/forma-zocalador">Forma Zocalador</a></li><li><a href="/departamento/854801/gesso">Gesso</a></li><li><a href="/departamento/854804/glaze">Glaze</a></li><li><a href="/departamento/854807/godiva">Godiva</a></li><li><a href="/departamento/854811/isolante">Isolante</a></li><li><a href="/departamento/854816/lamparina">Lamparina</a></li><li><a href="/departamento/855105/liga-de-metal">Liga de Metal</a></li><li><a href="/departamento/855093/macarico">Maçarico</a></li><li><a href="/departamento/854821/mufla">Mufla</a></li><li><a href="/departamento/854823/oxido-de-aluminio">Óxido de Alumínio</a></li><li><a href="/departamento/854824/pasta-zinco-enolica">Pasta Zinco Enólica para Prótese</a></li><li><a href="/departamento/854825/pincel">Pincel</a></li><li><a href="/departamento/855103/pino-de-fibra-de-carbono">Pino de Fibra de Carbono</a></li><li><a href="/departamento/854826/pino-de-fibra-de-vidro">Pino de Fibra de Vidro</a></li><li><a href="/departamento/854827/pino-metalico">Pino Metálico</a></li><li><a href="/departamento/854828/pino-para-fundicao">Pino para Fundição</a></li></div>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              <div class="lists"><li><a href="/departamento/854831/pino-para-troquel">Pino para Troquel</a></li><li><a href="/departamento/854833/placa-base">Placa Base</a></li><li><a href="/departamento/854834/prensa">Prensa</a></li><li><a href="/departamento/854836/reembasador">Reembasador</a></li><li><a href="/departamento/854839/removedor">Removedor para Prótese</a></li><li><a href="/departamento/854842/resina-acrilica-autopolimerizavel">Resina Acrílica Autopolimerizável</a></li><li><a href="/departamento/854844/resina-acrilica-dual">Resina Acrílica Dual</a></li><li><a href="/departamento/855056/resina-acrilica-fotopolimerizavel">Resina Acrílica Fotopolimerizável</a></li><li><a href="/departamento/854846/resina-acrilica-termopolimerizavel">Resina Acrílica Termopolimerizável</a></li><li><a href="/departamento/854848/resina-bisacrilica">Resina Bisacrílica</a></li><li><a href="/departamento/854850/resina-composta-para-laboratorio">Resina Composta para Laboratório</a></li><li><a href="/departamento/854851/revestimento-de-alta-fusao">Revestimento de Alta Fusão</a></li><li><a href="/departamento/854852/saca-protese">Saca Prótese</a></li><li><a href="/departamento/854854/silano">Silano para Prótese</a></li><li><a href="/departamento/855106/solda">Solda</a></li></div>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
            </ul>
          </li>
          <li><a href="/departamento/854614/cimentos">Cimentos<span class="sprite"></span></a>
            <ul class="header-menu-sub">
              <div class="lists"><li><a href="/departamento/854628/cimento-fosfato-de-zinco">Cimento Fosfato de Zinco</a></li><li><a href="/departamento/854629/cimento-hidroxido-de-calcio">Cimento Hidróxido de Cálcio</a></li><li><a href="/departamento/854630/cimento-provisorio">Cimento Provisório</a></li></div>
              
              
              <div class="lists"><li><a href="/departamento/854631/cimento-resinoso">Cimento Resinoso</a></li><li><a href="/departamento/854632/cimento/restaurador-provisorio">Cimento/Restaurador Provisório</a></li><li><a href="/departamento/854633/ionomero-de-vidro">Ionômero de Vidro para Cimentação</a></li></div>
              
              
              <div class="lists"><li><a href="/departamento/855110/pontas-aplicadoras">Pontas Aplicadoras</a></li></div>
            </ul>
          </li>
          <li><a href="/departamento/854853/instrumentais">Instrumentais<span class="sprite"></span></a>
            <ul class="header-menu-sub">
              <div class="lists"><li><a href="/departamento/854855/abaixador-lingual">Abaixador Língual</a></li><li><a href="/departamento/854857/abridor-de-boca">Abridor de Boca</a></li><li><a href="/departamento/854859/adaptador-de-succao">Adaptador de Sucção</a></li><li><a href="/departamento/854862/afastador">Afastador</a></li><li><a href="/departamento/854864/alavanca">Alavanca</a></li><li><a href="/departamento/854866/alicate">Alicate</a></li><li><a href="/departamento/854868/alveolotomo">Alveolotomo</a></li><li><a href="/departamento/855476/aparador-de-margem">Aparador de Margem</a></li><li><a href="/departamento/855461/aplicador">Aplicador</a></li><li><a href="/departamento/854784/bandeja">Bandeja</a></li><li><a href="/departamento/855478/borracha-de-reposicao">Borracha de Reposição</a></li><li><a href="/departamento/855462/brunidor">Brunidor</a></li><li><a href="/departamento/854872/cabos-diversos">Cabos Diversos</a></li><li><a href="/departamento/855463/calcador">Calcador</a></li><li><a href="/departamento/855546/capa-para-carpule">Capa para Carpule</a></li><li><a href="/departamento/855035/cinzel">Cinzel</a></li><li><a href="/departamento/855246/compasso">Compasso </a></li><li><a href="/departamento/854873/condensador">Condensador</a></li><li><a href="/departamento/854874/corrente-para-guardanapo">Corrente para Guardanapo</a></li><li><a href="/departamento/855464/cortante-de-black">Cortante</a></li><li><a href="/departamento/854876/cubas-diversas">Cubas</a></li><li><a href="/departamento/854878/curetas">Curetas</a></li><li><a href="/departamento/855247/curva-de-spee">Curva de Spee</a></li><li><a href="/departamento/855465/descolador">Descolador</a></li><li><a href="/departamento/855466/destaca">Destaca Periósteo</a></li></div>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              <div class="lists"><li><a href="/departamento/855318/escavador">Escavador </a></li><li><a href="/departamento/855467/esculpidor">Esculpidor</a></li><li><a href="/departamento/855468/espacador">Espaçador</a></li><li><a href="/departamento/854881/espatulas">Espátulas</a></li><li><a href="/departamento/855469/especimetro">Especímetro</a></li><li><a href="/departamento/854882/espelho-bucal">Espelho Bucal</a></li><li><a href="/departamento/855227/espelho-de-mao">Espelho de Mão</a></li><li><a href="/departamento/855319/estojo-clinico-metalico">Estojo Clínico Metálico </a></li><li><a href="/departamento/854884/extrator">Extrator</a></li><li><a href="/departamento/855470/faca-para-gesso">Faca para Gesso</a></li><li><a href="/departamento/854886/foice">Foice</a></li><li><a href="/departamento/854887/forceps">Fórceps</a></li><li><a href="/departamento/855471/gengivotomo">Gengivótomo</a></li><li><a href="/departamento/854674/grampo-para-isolamento-absoluto">Grampo para Isolamento Absoluto</a></li><li><a href="/departamento/855586/instrumentais-descartaveis">Instrumentais Descartáveis</a></li><li><a href="/departamento/855477/instrumento-para-enxerto">Instrumento para Enxerto</a></li><li><a href="/departamento/855480/instrumentos-dr-chu">Instrumentos Dr. Chu </a></li><li><a href="/departamento/855472/kit-instrumentais">Kit Instrumentais</a></li><li><a href="/departamento/855034/lima-para-osso">Lima para Osso</a></li><li><a href="/departamento/855015/manequim">Manequim</a></li><li><a href="/departamento/854870/marcador-de-instrumento">Marcador de Instrumento</a></li><li><a href="/departamento/855473/martelo">Martelo</a></li><li><a href="/departamento/854891/oculos">Óculos</a></li><li><a href="/departamento/855481/opener">Opener</a></li><li><a href="/departamento/855254/organizadores-para-instrumentais">Organizadores para Instrumentais</a></li></div>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              <div class="lists"><li><a href="/departamento/855321/osteotomo">Osteótomo</a></li><li><a href="/departamento/855482/paquimetro">Paquímetro</a></li><li><a href="/departamento/854892/pedra-para-afiar">Pedra para Afiar</a></li><li><a href="/departamento/855483/periosteo">Periósteo</a></li><li><a href="/departamento/855474/periotomo">Periótomo</a></li><li><a href="/departamento/854894/pinca">Pinça</a></li><li><a href="/departamento/854896/placa-de-vidro">Placa de Vidro</a></li><li><a href="/departamento/855248/plano-de-fox">Plano de Fox</a></li><li><a href="/departamento/855485/ponta-para-reposicao">Ponta para Reposição</a></li><li><a href="/departamento/855322/porta-agulha">Porta Agulha</a></li><li><a href="/departamento/855475/porta-algodao">Porta Algodão</a></li><li><a href="/departamento/854684/porta-amalgama">Porta Amálgama</a></li><li><a href="/departamento/855545/punch">Punch</a></li><li><a href="/departamento/855491/removedor-de-coroa">Removedor de Coroa</a></li><li><a href="/departamento/855490/removedor-de-guta-percha">Removedor de Guta Percha</a></li><li><a href="/departamento/855489/removedor-de-lamina">Removedor de Lâmina</a></li><li><a href="/departamento/855488/retrator-sinus">Retrator Sinus</a></li><li><a href="/departamento/855249/separador">Separador </a></li><li><a href="/departamento/854817/seringa">Seringa</a></li><li><a href="/departamento/855487/sindesmotomo">Sindesmótomo</a></li><li><a href="/departamento/854897/sondas">Sondas</a></li><li><a href="/departamento/854818/sugador-metalico">Sugador Metálico</a></li><li><a href="/departamento/854898/tesoura">Tesoura</a></li><li><a href="/departamento/855245/triturador-de-osso">Triturador de Osso </a></li><li><a href="/departamento/855486/tunelizador">Tunelizador</a></li></div>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
            </ul>
          </li>
          <li><a href="/departamento/854599/biosseguranca">Biossegurança<span class="sprite"></span></a>
            <ul class="header-menu-sub">
              <div class="lists"><li><a href="/departamento/855276/agua-destilada">Água Destilada</a></li><li><a href="/departamento/855277/alcool-antisseptico">Álcool Antisséptico</a></li><li><a href="/departamento/855278/alcool-gel">Álcool Gel</a></li><li><a href="/departamento/855279/alcool-glicerinado">Álcool Glicerinado</a></li><li><a href="/departamento/855280/alcool-saneante">Álcool Saneante</a></li><li><a href="/departamento/855326/barreiras-fisicas">Barreiras Físicas</a></li><li><a href="/departamento/855281/clorexidina-antisseptica">Clorexidina Antisséptica</a></li><li><a href="/departamento/855282/clorexidina-aquosa">Clorexidina Aquosa</a></li><li><a href="/departamento/855283/clorexidina-degermante">Clorexidina Degermante</a></li><li><a href="/departamento/855284/desincrustante">Desincrustante</a></li><li><a href="/departamento/855275/acido-peracetico">Desinfetante Ácido Peracético</a></li></div>
              
              
              
              
              
              
              
              
              
              
              <div class="lists"><li><a href="/departamento/855289/glutaraldeido">Desinfetante Glutaraldeído</a></li><li><a href="/departamento/855290/hipoclorito-de-sodio">Desinfetante Hipoclorito de Sódio</a></li><li><a href="/departamento/855315/desinfetante-peroxido-de-hidrogenio">Desinfetante Peróxido de Hidrogênio</a></li><li><a href="/departamento/855296/quartenario-de-amonio">Desinfetante Quaternário de Amônio</a></li><li><a href="/departamento/855285/detergente">Detergente</a></li><li><a href="/departamento/855286/detergente-enzimatico">Detergente Enzimático</a></li><li><a href="/departamento/854603/embalagem-para-autoclave">Embalagem Para Esterilização</a></li><li><a href="/departamento/855287/escova-para-assepsia">Escova para Assepsia</a></li><li><a href="/departamento/854604/estojos">Estojos</a></li><li><a href="/departamento/855288/eter">Eter</a></li><li><a href="/departamento/854605/fita-para-autoclave">Fita Para Autoclave</a></li></div>
              
              
              
              
              
              
              
              
              
              
              <div class="lists"><li><a href="/departamento/854606/indicador-de-esterilizacao">Indicador De Esterilização</a></li><li><a href="/departamento/855291/lenco-umedecido">Lenço Umedecido</a></li><li><a href="/departamento/855603/lubrificante-para-limpeza">Lubrificante para Limpeza</a></li><li><a href="/departamento/855293/pvpi-degermante">PVPI Degermante</a></li><li><a href="/departamento/855294/pvpi-tintura">PVPI Tintura</a></li><li><a href="/departamento/855295/pvpi-topico">PVPI Tópico</a></li><li><a href="/departamento/854609/sabonete">Sabonete</a></li><li><a href="/departamento/855297/solvente-de-residuos">Solvente de Resíduos</a></li><li><a href="/departamento/855314/talco">Talco</a></li></div>
              
              
              
              
              
              
              
              
            </ul>
          </li>
          <li><a href="/departamento/854635/cirurgia-e-periodontia">Cirurgia e Periodontia<span class="sprite"></span></a>
            <ul class="header-menu-sub">
              <div class="lists"><li><a href="/departamento/855057/agulha-de-sutura">Agulha de Sutura</a></li><li><a href="/departamento/855094/balao-para-sinus">Balão Para Sinus</a></li><li><a href="/departamento/854636/bolsa-termica">Bolsa Térmica</a></li><li><a href="/departamento/854637/broca-cirurgica">Broca Cirúrgica</a></li></div>
              
              
              
              <div class="lists"><li><a href="/departamento/854638/cimento-cirurgico">Cimento Cirúrgico</a></li><li><a href="/departamento/854640/curativo-alveolar">Curativo Alveolar</a></li><li><a href="/departamento/854641/fio-de-sutura-agulhado">Fio de Sutura Agulhado</a></li><li><a href="/departamento/854642/fio-de-sutura-nao-agulhado">Fio de Sutura Não Agulhado</a></li></div>
              
              
              
              <div class="lists"><li><a href="/departamento/854643/hemostatico">Hemostático</a></li><li><a href="/departamento/854645/lamina-de-bisturi">Lâmina de Bisturi</a></li><li><a href="/departamento/854647/regeneracao-ossea">Regeneração Óssea</a></li><li><a href="/departamento/854648/sugador-descartavel">Sugador Cirúrgico Descartável</a></li></div>
              
              
              
            </ul>
          </li>
          <li><a href="/departamento/854734/radiologia">Radiologia<span class="sprite"></span></a>
            <ul class="header-menu-sub">
              <div class="lists"><li><a href="/departamento/855313/recipiente"> Recipiente</a></li><li><a href="/departamento/854735/acessorio-para-raio-x">Acessório Para Raio-X</a></li><li><a href="/departamento/854737/avental-para-protecao-radiologica">Avental para Proteção Radiológica</a></li></div>
              
              
              <div class="lists"><li><a href="/departamento/855310/ficha-para-raio-x">Ficha para Raio-X</a></li><li><a href="/departamento/854741/filme-radiografico">Filme Radiográfico</a></li><li><a href="/departamento/854750/posicionador-de-raio-x">Posicionador de Raio-X</a></li></div>
              
              
              <div class="lists"><li><a href="/departamento/854751/suporte">Suporte Radiológico</a></li></div>
            </ul>
          </li>
          
          <li class="all-menu-viewAll">
              <a href="javascript: void(0)" class="all-menu-viewAll-a">Todos os departamentos<span class="sprite"></span></a>
                <ul class="all-menu-viewAll-sub header-menu-sub">
                  <!-- BANNER TODOS OS DEPARTAMENTOS w=300px h=340px -->
                  <a href="https://www.dentalcremer.com.br/paginainstitucional/app" class="header-menu-banner">
                    <img src="//www.dentalcremer.com.br/Assets/Banner/menu/menu-view-all-banner.png?v01" width="300px" height="343px">
                  </a>
                  
                  
                    <div class="lists"><li><a href="https://www.dentalcremer.com.br/departamento/854596/anestesicos-e-agulha-gengival">Anestésicos e Agulha Gengival</a></li><li><a href="https://www.dentalcremer.com.br/departamento/854599/biosseguranca">Biossegurança</a></li><li><a href="https://www.dentalcremer.com.br/departamento/854613/brocas">Brocas</a></li><li><a href="https://www.dentalcremer.com.br/departamento/855240/cadeiras-odontologicas">Cadeiras Odontológicas</a></li><li><a href="https://www.dentalcremer.com.br/departamento/854614/cimentos">Cimentos</a></li><li><a href="https://www.dentalcremer.com.br/departamento/854635/cirurgia-e-periodontia">Cirurgia e Periodontia</a></li><li><a href="https://www.dentalcremer.com.br/departamento/855512/danificados/vencimento-proximo">Danificados/Vencimento Próximo/Reembalados</a></li><li><a href="https://www.dentalcremer.com.br/departamento/854653/dentistica-e-estetica">Dentística e Estética</a></li><li><a href="https://www.dentalcremer.com.br/departamento/854690/descartaveis">Descartáveis</a></li></div>
                  
                    
                  
                    
                  
                    
                  
                    
                  
                    
                  
                    
                  
                    
                  
                    
                  
                    <div class="lists"><li><a href="https://www.dentalcremer.com.br/departamento/854715/endodontia">Endodontia</a></li><li><a href="https://www.dentalcremer.com.br/departamento/854829/fotografia">Fotografia</a></li><li><a href="https://www.dentalcremer.com.br/departamento/855587/harmonizacao-orofacial">Harmonização Orofacial</a></li><li><a href="https://www.dentalcremer.com.br/departamento/855166/higiene-oral">Higiene Oral</a></li><li><a href="https://www.dentalcremer.com.br/departamento/854843/implantodontia">Implantodontia</a></li><li><a href="https://www.dentalcremer.com.br/departamento/854853/instrumentais">Instrumentais</a></li><li><a href="https://www.dentalcremer.com.br/departamento/854973/livraria">Livraria</a></li><li><a href="https://www.dentalcremer.com.br/departamento/854918/moldagem">Moldagem</a></li><li><a href="https://www.dentalcremer.com.br/departamento/855419/moveis-para-laboratorio">Móveis para Laboratório</a></li></div>
                  
                    
                  
                    
                  
                    
                  
                    
                  
                    
                  
                    
                  
                    
                  
                    
                  
                    <div class="lists"><li><a href="https://www.dentalcremer.com.br/departamento/854895/ortodontia">Ortodontia</a></li><li><a href="https://www.dentalcremer.com.br/departamento/854963/para-o-consultorio">Para o Consultório</a></li><li><a href="https://www.dentalcremer.com.br/departamento/854716/perifericos-e-pecas-de-mao">Periféricos e Peças de Mão</a></li><li><a href="https://www.dentalcremer.com.br/departamento/854942/prevencao-e-profilaxia">Prevenção e Profilaxia</a></li><li><a href="https://www.dentalcremer.com.br/departamento/854858/produtos-cremer">Produtos Cremer</a></li><li><a href="https://www.dentalcremer.com.br/departamento/854756/protese">Prótese</a></li><li><a href="https://www.dentalcremer.com.br/departamento/854734/radiologia">Radiologia</a></li><li><a href="https://www.dentalcremer.com.br/departamento/855134/vestuario">Vestuário</a></li></div>
                  
                    
                  
                    
                  
                    
                  
                    
                  
                    
                  
                    
                  
                    
                  
                </ul>
          </li>
        </ul><span id="inlcude_header_menu"></span>
              <!--div class="header-menu-banner">
                <componente name="ciac:banner" id="header_menu" />
              </div-->
            </nav>
          </li>
          <li class="header-menu-li header-menu-compraRapida">
            <a href="javascript: void(0)" class="header-menu-a">Repetir Pedido</a>
            <div class="header-menu-sub">
              <div class="box-compraRapida">
                <a href="/paginainstitucional/compra-rapida" class="box-compraRapida-a"></a>
                <div class="sprite minhasListas to-left">Minhas Listas</div>
                <h4>
                  <span>Minhas<br> Listas</span>
                </h4>
                <p>Salve e dê nomes para listas que ficarão salvas conosco, permitindo que você recompre tudo  que precisa em um único clique.</p>
                <a href="/paginainstitucional/compra-rapida" class="header-bt">Continuar</a>
              </div>
              <div class="box-compraRapida">
                <a href="/paginainstitucional/compra-rapida" class="box-compraRapida-a"></a>
                <div class="sprite recompra to-left">Recompra</div>
                <h4>
                  <span>Recompra</span>
                </h4>
                <p>Comece sua compra a partir do seu último pedido ou simplesmente repita qualquer pedido já realizado conosco.</p>
                <a href="/paginainstitucional/compra-rapida" class="header-bt">Continuar</a>
              </div>
              <div class="box-compraRapida">
                <a href="/paginainstitucional/compra-rapida" class="box-compraRapida-a"></a>
                <div class="sprite compraPorCodigo to-left">Compra por Código</div>
                <h4>
                  <span>Compra<br> por Código</span>
                </h4>
                <p>Compre utilizando os códigos dos produtos que você encontra nos nossos catálogos e notas fiscais.<br><br></p>
                <a href="/paginainstitucional/compra-rapida" class="header-bt">Continuar</a>
              </div>
            </div>
          </li>
          <li class="header-menu-li header-menu-nossasLojas">
            <a href="javascript: void(0)" class="header-menu-a">Tudo Que Você Precisa</a>
            <div class="header-menu-sub">
              <div class="box-nossasLojas especialidades">
                <h3>Especialidades</h3>
                <nav class="header-menu-submenu">
                  <ul>
                    <li>
                      <a href="/departamento/854715/endodontia" class="tooltip-header tooltipstered"><span class="sprite" style="background-position: 0 -2050px;"></span>Endodontia</a>
                    </li>
                    <li>
                      <a href="/departamento/854653/dentistica-e-estetica" class="tooltip-header tooltipstered"><span class="sprite" style="background-position: -50px -2050px;"></span>Estética</a>
                    </li>
                    <li>
                      <a href="/departamento/854843/implantodontia" class="tooltip-header tooltipstered"><span class="sprite" style="background-position: -100px -2050px;"></span>Implantodontia</a>
                    </li>
                    <li>
                      <a href="//laboratorio.dentalcremer.com.br" class="tooltip-header tooltipstered" target="_blank"><span class="sprite" style="background-position: -150px -2050px;"></span>Laboratório</a>
                    </li>
                    <li>
                      <a href="/lista/28" class="tooltip-header tooltipstered"><span class="sprite" style="background-position: -200px -2050px;"></span>Odontopediatria</a>
                    </li>
                    <li>
                      <a href="/departamento/854895/ortodontia" class="tooltip-header tooltipstered"><span class="sprite" style="background-position: -250px -2050px;"></span>Ortodontia</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="box-nossasLojas tdqvcprecisa">
                <h3>Tudo Que Você Precisa</h3>
                <nav class="header-menu-submenu">
                  <ul>
                    <div class="lists-nossasLojas">
                      <li>
                        <a href="/departamento/855352/brindes-para-pacientes" class="tooltip-header tooltipstered"><span class="sprite" style="background-position: 0 -1950px;"></span>Brindes para Pacientes</a>
                      </li>
                      <!--li>
                        <a href="http://cursos.dentalcremer.com.br?campanha_id=85082" class="tooltip-header" title="Cursos presenciais e online para quem deseja investir na própria carreira e se destacar no concorrido mercado de trabalho." target="_blank"><span class="sprite" style="background-position: -100px -1950px;"></span>Cursos</a>
                      </li-->
                      <li>
                        <a href="/departamento/855350/decoracao" class="tooltip-header tooltipstered"><span class="sprite" style="background-position: -200px -1950px;"></span>Decoração</a>
                      </li>
                      <li>
                        <a href="/lista/276" class="tooltip-header tooltipstered"><span class="sprite" style="background-position: -300px -1950px;"></span>Digital</a>
                      </li>
    
                      <li>
                        <a href="/departamento/854965/escritorio" class="tooltip-header tooltipstered"><span class="sprite" style="background-position: 0 -2000px;"></span>Escritório</a>
                      </li>
                      <li>
                        <a href="/departamento/855587/harmonizacao-orofacial" class="tooltip-header tooltipstered"><span class="sprite" style="background-position: -150px -2000px;"></span>Harmonização Orofacial</a>
                      </li>
                      <!--li>
                        <a href="/lista/483" class="tooltip-header" title="Uma linha completa de tomógrafos e equipamentos para diagnóstico por imagem, com a mais alta tecnologia do mercado."><span class="sprite" style="background-position: -100px -2000px;"></span>Imagem</a>
                      </li-->
                    </div>
                    <div class="lists-nossasLojas">
                      <li>
                        <a href="/departamento/854973/livraria" class="tooltip-header tooltipstered"><span class="sprite" style="background-position: -50px -1950px;"></span>Livraria</a>
                      </li>
                      <li>
                        <a href="/departamento/854964/higiene-e-limpeza" class="tooltip-header tooltipstered"><span class="sprite" style="background-position: -150px -1950px;"></span>Limpeza</a>
                      </li>
                      <li>
                        <a href="//papelaria.dentalcremer.com.br" class="tooltip-header tooltipstered" target="_blank"><span class="sprite" style="background-position: -250px -1950px;"></span>Papelaria</a>
                      </li>
                      <!--li>
                        <a href="/lista/117?campanha_id=85082" class="tooltip-header" title="A Dental Cremer Premium é uma seleção de produtos de alta qualidade para profissionais que buscam a excelência. Garanta a melhor performance para o consultório e a máxima satisfação dos seus pacientes!" target="_blank"><span class="sprite" style="background-position: -350px -1950px;"></span>Premium</a>
                      </li-->
                      <li>
                        <a href="/departamento/855134/vestuario" class="tooltip-header tooltipstered"><span class="sprite" style="background-position: -450px -1950px;"></span>Vestuário</a>
                      </li>
                      <!--li>
                        <a href="http://viagens.dentalcremer.com.br?campanha_id=85082" class="tooltip-header" title="Seja para descansar ou visitar um congresso nacional ou internacional, nós temos a única agência de viagens pensada para suas necessidades." target="_blank"><span class="sprite" style="background-position: -50px -2000px;"></span>Viagens</a>
                      </li-->
                      <!-- <li>
                        <a href="http://www.programaestudantes.com.br?campanha_id=85082" class="tooltip-header" title="A melhor opção de compra para listas acadêmicas. Atendimento personalizado, economia, parcelamento facilitado e entrega rápida para todo o Brasil." target="_blank"><span class="sprite" style="background-position: -150px -1900px;"></span>Programa Estudantes</a>
                      </li>
                      <li>
                        <a href="http://meuconsultorio.dentalcremer.com.br?campanha_id=85082" class="tooltip-header" title="Ajudamos a reformar, equipar e montar o seu consultório. Queremos lhe ajudar a oferecer uma experiência diferenciada para seus pacientes com economia e facilidade de pagamento." target="_blank"><span class="sprite" style="background-position: -200px -1900px;"></span>Meu Consultório</a>
                      </li>
                      <li>
                        <a href="/paginainstitucional/arquitetura?campanha_id=85082" class="tooltip-header" title="Pensamos em todas as etapas do projeto do seu consultório, do planejamento à decoração. Uma equipe formada por quem entende do mercado odontológico." target="_blank"><span class="sprite" style="background-position: -200px -1950px;"></span>Arquitetura</a>
                      </li> -->
                      <li>
                        <a href="/departamento/855240/cadeiras-odontologicas" class="tooltip-header tooltipstered"><span class="sprite" style="background-position: -400px -1950px;"></span>Cadeiras</a>
                      </li>
                    </div>
                  </ul>
                </nav>
              </div>
              <div class="box-nossasLojas superlojas">
                <h3>Superlojas</h3>
                <a href="/lista/52" class="superLojas-banner superLojas-sprite tooltip-header-superLojas tooltipstered" style="background-position: 0 0">3m ESPE</a>
                <!--a href="/lista/53?campanha_id=85082" class="superLojas-banner superLojas-sprite tooltip-header-superLojas" title="Os principais produtos e conteúdos da KavoKerr reunidos em um único lugar. Uma excelente performance e a melhor condição do mercado." style="background-position: -100px 0">Kavo</a-->
                <a href="/lista/67" class="superLojas-banner superLojas-sprite tooltip-header-superLojas tooltipstered" style="background-position: -200px 0">Oral-B</a>
                <!--a href="/lista/68?campanha_id=85082" class="superLojas-banner superLojas-sprite tooltip-header-superLojas" title="Na superloja da SDI você encontra ofertas e informações de produtos de alta qualidade para aperfeiçoar seus procedimentos odontológicos." style="background-position: 0 -50px;">SDI</a-->
                <a href="/lista/72" class="superLojas-banner superLojas-sprite tooltip-header-superLojas tooltipstered" style="background-position: -100px -50px;">FGM</a>
                <a href="/lista/87" class="superLojas-banner superLojas-sprite tooltip-header-superLojas tooltipstered" style="background-position: -200px -50px;">Ivoclar</a>
                <a href="/lista/109" class="superLojas-banner superLojas-sprite tooltip-header-superLojas tooltipstered" style="background-position: 0 -100px;">Orthometric</a>
                <a href="/lista/116?campanha_id=85082" class="superLojas-banner superLojas-sprite tooltip-header-superLojas tooltipstered" style="background-position: -200px -100px;">Heraeus Kulzer</a>
                <!--a href="/lista/135?campanha_id=85082" class="superLojas-banner superLojas-sprite tooltip-header-superLojas" title="Conheça a linha de produtos da Coltene que abrange todo o processo de tratamento odontológico. Casos clínicos, vídeos e mais!" style="background-position: -100px -150px;">Coltene</a-->
                <!--a href="/lista/71?campanha_id=85082" class="superLojas-banner superLojas-sprite tooltip-header-superLojas" title="Conheça a linha completa de produtos da Nova DFL, a marca que investe no dentista brasileiro. Tenha acesso fácil a detalhes técnicos, conteúdos e ofertas." style="background-position: -100px -100px;">Nova DFL</a-->
                <!--a href="/lista/149?campanha_id=85082" class="superLojas-banner superLojas-sprite tooltip-header-superLojas" title="Promoções, artigos e informação. O conhecimento e sabedoria centenária dos japoneses aliada aos mais modernos conceitos de inovação e progresso tecnológico. Confira!" style="background-position: -200px -150px;">GC</a-->
                <!--a href="/lista/165?campanha_id=85082" class="superLojas-banner superLojas-sprite tooltip-header-superLojas" title="Conheça os principais lançamentos e promoções da Maquira. Produtos que realmente fazem a diferença." style="background-position: 0 -150px;">Maquira</a-->
                <!--a href="/lista/210?campanha_id=85082" class="superLojas-banner superLojas-sprite tooltip-header-superLojas" title="Mais de 100 anos de experiência focados unicamente em instrumentos rotatórios. Conheça a linha de produtos Jota." style="background-position: 0 -200px;">Jota</a-->
                <a href="/lista/227" class="superLojas-banner superLojas-sprite tooltip-header-superLojas tooltipstered" style="background-position: -100px -200px;">Gnatus</a>
                <!--<a href="/lista/233?campanha_id=85082" class="superLojas-banner superLojas-sprite tooltip-header-superLojas" title="Tudo o que você precisa saber sobre a Cobra Ultra Vision, A Turbina com exclusivo sistema de iluminação UV." style="background-position: -200px -200px;">Cobra Ultra Vision</a>-->
                <!--a href="/lista/205" class="superLojas-banner superLojas-sprite tooltip-header-superLojas" title="Conheça a DMG, produtos inovadores e de qualidade garantida diretamente da Alemanha para o Brasil." style="background-position: 0 -250px;">DMG</a-->
                <!--a href="/lista/242?campanha_id=85082" class="superLojas-banner superLojas-sprite tooltip-header-superLojas" title="Confira as novidades e ofertas de uma das marcas mais premiadas do mundo: a Voco!" style="background-position: -100px -250px;">Voco</a-->
                <a href="/lista/257" class="superLojas-banner superLojas-sprite tooltip-header-superLojas tooltipstered" style="background-position: -200px -250px;">Singular</a>
                <a href="/lista/255" class="superLojas-banner superLojas-sprite tooltip-header-superLojas tooltipstered" style="background-position: 0 -300px;">W&amp;H</a>
                <!--a href="/lista/253" class="superLojas-banner superLojas-sprite tooltip-header-superLojas" title="Produtos criativos, exclusivos e feitos com carinho para deixar seu dia a dia ainda mais cool." style="background-position: -100px -300px;">Molares</a-->
                <a href="/lista/276" class="superLojas-banner superLojas-sprite tooltip-header-superLojas tooltipstered" style="background-position: -200px -300px;">Dental Cremer Digital</a>
                <a href="/lista/295" class="superLojas-banner superLojas-sprite tooltip-header-superLojas tooltipstered" style="background-position: 0 -350px;">The Wand</a>
                <!--a href="/lista/333" class="superLojas-banner superLojas-sprite tooltip-header-superLojas" title="Na Dental One você encontra os produtos Tokuyama e Potenza - muito mais qualidade para seus procedimentos." style="background-position: -100px -350px;">Dental One</a-->
                <!--a href="/lista/383" class="superLojas-banner superLojas-sprite tooltip-header-superLojas" title="Confira o portfólio completo da maior editora odontológica do Brasil!" style="background-position: -200px -350px;">Napoleão Editora</a>
                <a href="/lista/508" class="superLojas-banner superLojas-sprite" style="background-position: 0 -400px;">Bioteck</a-->
                <!--a href="/lista/634" class="superLojas-banner superLojas-sprite" style="background-position: -100px -400px;">XDent</a-->
                <a href="/lista/706" class="superLojas-banner superLojas-sprite" style="background-position: -200px -400px;">Dentsply</a>
                <a href="/lista/738" class="superLojas-banner superLojas-sprite" style="background-position: -100px -450px;">Tokuyama</a>
                <!--a href="/lista/333" class="superLojas-banner superLojas-sprite" style="background-position: 0 -450px;">Potenza</a-->
                <a href="/lista/739" class="superLojas-banner superLojas-sprite" style="background-position: 0 -500px;">AllPrime</a>
                <a href="/lista/751" class="superLojas-banner superLojas-sprite" style="background-position: -200px -450px;">Lifetouch</a>
                <a href="/lista/779" class="superLojas-banner superLojas-sprite" style="background-position: -100px -500px;">Dabi Atlante</a>
              </div>
            </div>
          </li>
          <li class="header-menu-li header-menu-dynamic">
            <a href="/departamento/855587/harmonizacao-orofacial" class="header-menu-a">Harmonização Orofacial</a>
            <div class="header-menu-sub">
              <a href="/departamento/855587/harmonizacao-orofacial"><img src="https://www.dentalcremer.com.br/Assets/Banner/menu/menu_home_hof.png" alt="Harmonização Orofacial"></a>
            </div>
          </li>
          <li class="header-menu-li header-menu-promocoes">
            <a href="javascript: void(0)" class="header-menu-a">
              Promoções
              <span class="header-menu-promocoes-ico">
                <!--componente name="ciac:banner" id="catalogo_mini" /-->
                <img src="https://www.dentalcremer.com.br/Assets/Uploads/Catalogos/2019/Novembro/mala-tijolo.png?width=69&amp;height=69" title="Hora Certa" alt="Hora Certa" width="69px" height="69px">
              </span>
            </a>
            
            <!-- Catálogo Virtual -->
            <div class="header-menu-sub">
              <ul class="header-menu-fixedLinks">
                <li class="header-catalog">
                  <nav>
                    <ul>
                      <li class="header-catalog-main">
                        <a href="/catalogo.aspx?id=368">
                          <h3>Black November</h3>
                          <img src="https://www.dentalcremer.com.br/Assets/Uploads/Catalogos/2019/Novembro/mala-tijolo.png?width=110&amp;height=110">
                        </a>
                      </li>
                      <!--li>
                        <a href="/catalogo.aspx?id=361">
                          <h3>Dental Cremer <br />Lovers</h3>
                          <img src="https://www.dentalcremer.com.br/Assets/Uploads/Catalogos/2019/Outubro/Malatijolos/mala_tijolos1.png?width=110&height=110" />
                        </a>
                      </li>
                      <li>
                        <a href="/catalogo.aspx?id=363">
                          <h3>Mês do Dentista</h3>
                          <img src="https://www.dentalcremer.com.br/Assets/Uploads/Catalogos/2019/Outubro/MalaAnuncio/mala_anuncio_outubro1.png?width=110&height=110" />
                        </a>
                      </li>
                      <li>
                        <a href="/catalogo.aspx?id=364">
                          <h3>Festival de <br />Ortodontia</h3>
                          <img src="https://www.dentalcremer.com.br/Assets/Uploads/Catalogos/2019/Outubro/MalaOrtodontia/NovasPaginas/mala-ortodontia-online.png?width=110&height=110" />
                        </a>
                      </li-->
                    </ul>
                  </nav>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="header-menu-overlay" style="display: none;"></div>
    </header>