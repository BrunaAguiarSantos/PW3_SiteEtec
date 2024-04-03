<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APM</title>
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
                <h3 style="text-align:center;">Coordenação de Curso</h3>
                <p>&nbsp;</p>
                <div class="flex flex-col justify-center">
                    <img src="/img/PPG.jpg" class="card-img-top" alt="Ilustração referente a ADMINISTRAÇÃO" max-width="100%" height="auto" />
                </div>
                <p>&nbsp;</p>
                <p style="text-align:center;">As Coordenações de Curso são responsáveis pelo conjunto de ações destinadas ao planejamento do ensino,
                    à supervisão de sua execução, ao controle das atividades docentes em relação às diretrizes didáticas pedagógicas e administrativas,
                    bem como pela otimização dos recursos físicos e didáticos disponíveis para os cursos mantidos pelas Etecs.</p>
                <p>&nbsp;</p>
            </div>
        </section>

        <section class="AdmAtuacao">
            <h3 style="text-align: center;">Coordenadores dos Cursos(NovoTec)</h3>
            <table class="table table-hover" style="text-align: center;">
                <thead>
                    <tr>
                        <th scope="col">NovoTec Administração (ADM)</th>&nbsp;&nbsp;
                        <th scope="col">NovoTec Logística (Log)</th>&nbsp;&nbsp;
                        <th scope="col">NovoTec Desenvolvimento de Sistemas (DS)</th>&nbsp;&nbsp;
                        <th scope="col">NovoTec Recursos Humanos(RH)</th>&nbsp;&nbsp;
                        <th scope="col">NovoTec Desenvolvimento de Sistemas AMS(DS AMS)</th>&nbsp;&nbsp;

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Giovanna Littiere</td>&nbsp;&nbsp;
                        <td>Leandro</td>&nbsp;&nbsp;
                        <td>Marcello Collado</td>&nbsp;&nbsp;
                        <td>Cibelle Ferreria Francoso</td>&nbsp;&nbsp;
                        <td>Jeferson Roberto de Lima</td>&nbsp;&nbsp;
                    </tr>
                </tbody>
            </table>
        </section>
        <p>&nbsp;</p>

        <section class="AdmAtuacao">
            <h3 style="text-align: center;">Coordenadores dos Cursos(Técnico)</h3>
            <table class="table table-hover" style="text-align: center;">
                <thead>
                    <tr>
                        <th scope="col">Técnico em Administração</th>&nbsp;&nbsp;
                        <th scope="col">Técnico em Logística</th>&nbsp;&nbsp;
                        <th scope="col">Técnico em Desenvolvimento de Sistemas</th>&nbsp;&nbsp;
                        <th scope="col">Técnico em Contabilidade</th>&nbsp;&nbsp;
                        <th scope="col">Técnico em Serviços Jurídicos</th>&nbsp;&nbsp;
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Monyse Tesser Panacci</td>&nbsp;&nbsp;
                        <td>Silvano Lack de Brito </td>&nbsp;&nbsp;
                        <td>Ediney Ciasi Barreto </td>&nbsp;&nbsp;
                        <td>Monyse Tesser Panacci </td>&nbsp;&nbsp;
                        <td>Silvano Lack de Brito </td>&nbsp;&nbsp;
                    </tr>
                </tbody>
            </table>
        </section>
        <p>&nbsp;</p>

        <section class="Adm" id="pri2-sessão">
            <!--Segundo texto com Foto-->
            <div class="flex flex-col justify-center">
                <h3 style="text-align:center;">Contato</h3>
                <p>&nbsp;</p>
                <p style="text-align:center;">Telefone para contato: (11) 2045-4025</p>
                <p>&nbsp;</p>
            </div>
            </div>
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