<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistica</title>
    <!--Antes de qualquer coisa ao mexer no bootstrap é pra colocar os links do javascript e do css que se encontra na pagina inicial do site-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <!--Barra de navegação(Começo do site)-->

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <nav class="navbar">
                    <div class="container">
                        <a class="navbar-brand" href="SiteEtec">

                            <!--Foto da logo-->
                            <img src="/img/logo.jpg" alt="Bootstrap" width="100px" height="auto">
                        </a>
                    </div>
                </nav>
                <!--Começo do conteúdo do navbar(links)-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <!--Página Inicial-->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="SiteEtec">Página Inicial</a>
                        </li>

                        <!--Cursos-->
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cursos</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Adm">Administração</a></li>
                                <li><a class="dropdown-item" href="Contabilidade">Contabilidade</a></li>
                                <li><a class="dropdown-item" href="DS">Novotec Desenvolvimento de Sistemas</a></li>
                                <li><a class="dropdown-item" href="Logistica">Logística</a></li>
                                <li><a class="dropdown-item" href="RH">Recursos Humanos</a></li>
                                <li><a class="dropdown-item" href="ServJuridicos">Serviços Jurídicos</a></li>
                            </ul>
                        </li>

                        <!--Instituição-->
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Instituição</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="HistoriaZL">Nossa História</a></li>
                                <li><a class="dropdown-item" href="Infra">Infraestrutura</a></li>
                                <li><a class="dropdown-item" href="PPG">Plano Plurianual de Gestão</a></li>
                                <li><a class="dropdown-item" href="MA">Manual do Aluno</a></li>
                                <li><a class="dropdown-item" href="RCE">Regimento Comun das Etecs</a></li>
                            </ul>
                        </li>

                        <!--Departamentos-->
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Departamentos</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="APM">APM - Associação de Pais e Mestres</a></li>
                                <li><a class="dropdown-item" href="CDC">Coordenação de Curso</a></li>
                                <li><a class="dropdown-item" href="Direcao">Direção</a></li>
                            </ul>
                        </li>

                        <!--Oportunidades-->
                        <li class="nav-item">
                            <a class="nav-link active" href="Oportunidade">Oportunidades</a>
                        </li>

                        <!--Vestiblinho-->
                        <li class="nav-item">
                            <a class="nav-link active" href="Vestibulinho">Vestibulinho</a>
                        </li>
                    </ul>
                    <!--Parte da pesquisa-->
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-danger" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="Adm" id="pri2-sessão">
            <!--Segundo texto com Foto-->
            <div class="banner-secondary_wysiwyg">
                <p>&nbsp;&nbsp;</p>
                <h3 style="text-align:center;">LOGÍSTICA</h3>
                <p>&nbsp;</p>
                <div class="flex flex-col justify-center">
                    <img src="/img/Log1.jpeg" class="card-img-top" alt="Ilustração referente a LOGÍSTICA" max-width="100%" height="auto" />
                </div>
                <p>&nbsp;</p>
                <p style="text-align:center;">Logística é o planejamento do caminho feito por um produto ou serviço até chegar ao cliente de forma organizada, rápida e econômica. Para planejar esse caminho,
                    o estudante vai precisar de conhecimentos de matemática, geografia e física.
                    O aluno aprenderá sobre os processos de compra de matérias-primas, incluindo a escolha dos fornecedores, o registro dos pedidos de compra e o recebimento dos materiais adquiridos.</p>
                <p style="text-align:center;">O estudante vai aprender também como se deve movimentar as cargas e os produtos dentro de um estoque para decidir se utilizará, por exemplo,
                    um carrinho ou uma empilhadeira, e como se deve armazenar cada tipo de produto e por quanto tempo. Vai estudar ainda sobre a entrega das mercadorias compradas pelos clientes: como organizar a carga para o transporte,
                    qual a embalagem mais adequada (em caixas de papelão ou madeira, em páletes ou contêineres), qual é o tipo de transporte mais adequado para o produto e para o cliente (caminhões, embarcações, trem ou avião),
                    e quais são as principais rotas que podem ser utilizadas. Além disso, o estudante aprenderá sobre os custos envolvidos em cada uma das atividades.</p>
                <p style="text-align:center;">O candidato que ingressar no curso técnico de Logística, na modalidade AMS, poderá prosseguir os estudos em uma Fatec no curso superior de tecnologia em Logística.</p>
                <p>&nbsp;</p>
            </div>
        </section>

        <section class="AdmAtuacao">
            <h3 style="text-align: center;">EXEMPLOS DE AREAS DE ATUAÇÃO</h3>
            <ul class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Pesquisa de preços com fornecedores</p>
                        <p class="text-muted mb-0">Elaborar orçamentos de compra
                        <p>
                        <p class="text-muted mb-0">Elaborar orçamentos de transporte
                        <p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Controle de mercadorias</p>
                        <p class="text-muted mb-0">Entrada de mercadorias
                        <p>
                        <p class="text-muted mb-0">Saída de mercadorias
                        <p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Check-up</p>
                        <p class="text-muted mb-0">Produtos recebidos - de acordo com a nota fiscal</p>
                        <p class="text-muted mb-0">Verificação de defeitos</p>
                        <p class="text-muted mb-0">Prazos de validade</p>
                        <p class="text-muted mb-0">Devolução dos itens com problemas</p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Resolução de problemas na devolução de produtos com problemas</p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Organização de estoque</p>
                        <p class="text-muted mb-0">Produtos que foram comprados</p>
                        <p class="text-muted mb-0">Produtos a serem espachados</p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Dimensionamento de capacidade na hora da estrega</p>
                        <p class="text-muted mb-0">Capacidade do trasporte da moto</p>
                        <p class="text-muted mb-0">Capacidade do trasporte do carro</p>
                        <p class="text-muted mb-0">Capacidade do trasporte do avião</p>
                        <p class="text-muted mb-0">Etc</p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Melhor rota e melhor transporte dependendo da carga</p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Acompanhamento do produto trasportado</p>
                        <p class="text-muted mb-0">Rastreamento do produto</p>
                        <p class="text-muted mb-0">Acompanhamento do fluxo de entregas - Alimentação do banco de dados da empresa</p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
            </ul>
        </section>
        <div class="text-center">
            <p>&nbsp;&nbsp;</p>
            <a type="button" class="btn btn-dark" href="SiteEtec">Voltar para a página inicial</a>
        </div>
        <p>&nbsp;&nbsp;</p>
    </main>
    <!--Footer-->
    <footer class="bg-body-tertiary text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2020 Copyright:
            <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            <p>Desenvolvio por Bruna Aguiar Santos 3º DS Manhã</p>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>