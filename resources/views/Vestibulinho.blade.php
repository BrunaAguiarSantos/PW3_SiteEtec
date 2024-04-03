<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vestibulinho</title>

    <!--Antes de qualquer coisa ao mexer no bootstrap é pra colocar os links do javascript e do css que se encontra na pagina inicial do site-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
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
                                <li><a class="dropdown-item" href="RCE">Regimento Comum das Etecs</a></li>
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
        <!--Terceira sessão-->
        <section class="FuturoZL grid gap-3" id="terceira-sessão">
            <!--Primeiro texto com Foto-->
            <div class="card  align-items-center">
                <div class="card-body">
                    <h2 style="text-align: center;">Vestibulinho</h2>
                    <p style="text-align: center;">Contemplando os dois semestres do ano,
                        o Vestibulinho é a porta de entrada para os cursos que se dividem em modalidades, sendo elas na ETEC Zona Leste: Ensino Técnico, Ensino Integrado Tradicional (M-Tec) e Articulação Médio-Técnica e Superior (AMS).</p>
                    <p style="text-align: center;"> É importante que os interessados à candidatura compreendam cada uma das modalidades, escolhendo a mais adequada à sua disponibilidade. Para a obtenção de um resultado positivo, o candidato deve se preparar para a prova com antecedência.</p>

                </div>
                <img src="/img/Vestibulinho.jpeg" class="rounded mx-auto d-block" alt="..." width="auto" height="375px">
            </div>
        </section>
        <!--Quarta Sessão-->
        <section class="Aprendizado" id="quarta-sessão">
            <!--Segundo texto com Foto-->
            <div class="card  align-items-center">
                <div class="card-body flex-shrink-0">
                    <h2 style="text-align: center;">Informações importantes sobre o exame do Vestibulinho</h2>
                    <p>&nbsp;&nbsp;</p>
                    <h6 style="text-align: center;">01 – A prova avalia conhecimentos nas principais matérias da Base Nacional Comum Curricular (BNCC) do Ensino Fundamental II,
                        incluindo Linguagens (Língua Portuguesa), Matemática, Ciências Humanas (Geografia e História) e Ciências da Natureza;</h6>
                    <p>&nbsp;&nbsp;</p>
                    <h6 style="text-align: center;">02 – As questões não são separadas por disciplinas, podendo ser multidisciplinares ou específicas;</h6>
                    <p>&nbsp;&nbsp;</p>
                    <h6 style="text-align: center;">03 – Valores e ações que promovam uma sociedade mais humana, justa e sustentável são avaliados, exigindo atenção a temas atuais relacionados a esses tópicos;</h6>
                    <p>&nbsp;&nbsp;</p>
                    <h6 style="text-align: center;">04 – As questões abordam competências como interpretação de diversos tipos de texto, aplicação de conhecimentos do Ensino Fundamental para resolver problemas, análise crítica de argumentos,
                        reconhecimento de diferentes formas de linguagem e avaliação de ações de acordo com critérios estabelecidos.</h6>
                </div>
            </div>
        </section>

        <!--Botão que volta para a tela inicial-->
        <div class="text-center">
            <p>&nbsp;&nbsp;</p>
            <a type="button" class="btn btn-dark" href="SiteEtec">Voltar para a página inicial</a>
        </div>
        <p>
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