<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oportunidades</title>

    <!--Antes de qualquer coisa ao mexer no bootstrap é pra colocar os links do javascript e do css que se encontra na pagina inicial do site-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header>
        <!---------------------------------------------INÍCIO DO HEADER--------------------------------------------------------------------->

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
    <!---------------------------------------------FINAL DO HEADER--------------------------------------------------------------------->
    <main>

        <!--Terceira sessão-->
        <section class="FuturoZL grid gap-3" id="terceira-sessão">
            <!--Primeiro texto com Foto-->
            <div class="card  align-items-center">
                <div class="card-body">
                    <h2 style="text-align: center;">Oportunidades</h2>
                    <h5 style="text-align: center;">Oportunidades de emprego incríveis aguardam por você. Encontre sua trajetória de sucesso hoje!</h5>
                    <p>&nbsp;&nbsp;</p>
                    <h3 style="text-align:center">Consurso Público</h3>
                    <img src="/img/Avaliacao.jpg" class="rounded mx-auto d-block" alt="..." width="500px" height="375px">
                    <p>&nbsp;&nbsp;</p>
                    <p style="text-align: center;">Estão em andamento concursos públicos para contratação de 2,7 mil docentes e servidores administrativos para atuar em Escolas Técnicas (Etecs), Faculdades de Tecnologia (Fatecs) do Estado e na Administração Central do Centro Paula Souza (CPS). Os certames foram autorizados em junho de 2022 e as admissões ocorrem em 2023.
                        O calendário do concurso para os cargos administrativos e os editais para docentes, que são liberados em lotes, estão disponíveis nos links abaixo.</p>
                    <p style="text-align: center;">A previsão é contratar 993 professores de Ensino Médio e Técnico, 594 docentes de Ensino Superior, 887 agentes técnicos e administrativos, 227 bibliotecários e 6 especialistas em planejamento educacional. Foi autorizado, ainda, o aproveitamento de 80 vagas de professores remanescentes de concursos anteriores.</p>
                </div>
            </div>
            <div class="text-center">
                <a type="button" class="btn btn-danger" href="https://www.cps.sp.gov.br/concursopublico/" style=>Saiba Mais</a>
            </div>
        </section>
        <p>&nbsp;&nbsp;</p>

        <!--Quarta Sessão-->
        <section class="Aprendizado" id="quarta-sessão">
            <!--Segundo texto com Foto-->
            <div class="card  align-items-center">
                <div class="card-body flex-shrink-0">
                    <h2 style="text-align: center;">Processo Seletivo Simplificado para Auxiliar de Docente</h2>
                    <img src="/img/Processo.jpeg" class="rounded mx-auto d-block" alt="..." width="500px" height="375px">
                    <p>&nbsp;&nbsp;&nbsp;</p>

                    <p style="text-align: center;">Prepare-se para embarcar em uma jornada de ensino e aprendizado! O Processo Seletivo Simplificado para Auxiliar de Docente nas renomadas Escolas Técnicas Estaduais (ETECs) ou Faculdades de Tecnologia (FATECs) está com inscrições abertas.</p>
                    <p style="text-align: center;">Participe deste processo seletivo e compartilhe seu conhecimento, experiência e paixão pelo ensino. As inscrições estão disponíveis para aqueles que desejam desempenhar um papel fundamental na educação técnica do Estado de São Paulo.</p>
                </div>
            </div>
            <div class="text-center">
                <a type="button" class="btn btn-danger" href="https://urhsistemas.cps.sp.gov.br/dgsdad/SelecaoPublica/PSSAD/Abertos.aspx" style=>Saiba Mais</a>
            </div>
        </section>
        <p>&nbsp;&nbsp;&nbsp;</p>

        <!--Quinta sessão-->
        <section class="Aprendizado grid gap-3 text-center" id="terceira-sessão">
            <!--Terceiro texto com Foto-->
            <div class="card  align-items-center">
                <div class="card-body">
                    <h2 style="text-align: center;">Programa Aprendiz Paulista</h2>
                    <img src="/img/JAP.jpg" class="rounded mx-auto d-block" alt="..." width="auto" height="438px">
                    <p>&nbsp;&nbsp;&nbsp;</p>
                    <p style="text-align: center;">Sua chance de ingressar no mercado de trabalho! Se você tem entre 14 e 24 anos,
                        está matriculado em cursos técnicos profissionalizantes do Centro Estadual de Educação Tecnológica Paula Souza e reside em São Paulo, esta é a sua chance de conquistar uma vaga de aprendizagem em empresas parceiras.</p>
                    <p style="text-align: center;">Benefícios incluem salário mínimo por hora, vale transporte, férias remuneradas, FGTS e registro em carteira. Esteja preparado para uma jornada de aprendizado prático e teórico. Junte-se a nós e construa o seu futuro!</p>
                </div>
            </div>
            <div class="text-center">
                <a type="button" class="btn btn-danger" href="https://jovemaprendiz.sp.gov.br/" style=>Saiba Mais</a>
            </div>
        </section>
        <p>&nbsp;&nbsp;&nbsp;</p>

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