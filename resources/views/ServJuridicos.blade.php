<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços Jurídicos</title>
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
                                <li><a class="dropdown-item" href="RGE">Regimento Comun das Etecs</a></li>
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
                <h3 style="text-align:center;">SERVIÇOS JURÍDICOS</h3>
                <p>&nbsp;</p>
                <div class="flex flex-col justify-center">
                    <img src="/img/Juridico1.jpg" class="card-img-top" alt="Ilustração referente a SERVIÇOS JURÍDICOS" max-width="100%" height="auto" />
                </div>
                <p>&nbsp;</p>
                <p style="text-align:center;">Como o foco do curso está nas leis e normas, o aluno vai estudar as áreas do Direito. Vai aprender sobre a Constituição Federal (direito constitucional), a punição aos crimes (direito penal),
                    as regras para relações e disputas entre as pessoas e também as normas para disputas e questões familiares (direito civil), o funcionamento dos órgãos públicos (direito administrativo), as regras para os negócios entre empresas e pessoas (direito empresarial),
                    como deve ser a relação entre patrão e empregado, considerando direitos e deveres de cada um (direito do trabalho), cobrança de tributos, como os impostos (direito tributário) e a proteção garantida aos consumidores (direito do consumidor), entre outros assuntos.</p>
                <p style="text-align:center;">O estudante vai conhecer também como são elaborados e redigidos os processos, contratos e documentos jurídicos. Além de aprender sobre as leis, o aluno vai estudar conceitos de administração de empresas, matemática financeira,
                    técnicas de atendimento ao cliente e inglês instrumental. A língua portuguesa é fundamental.</p>
                <p>&nbsp;</p>
            </div>
            </div>
        </section>

        <section class="AdmAtuacao">
            <h3 style="text-align: center;">EXEMPLOS DE AREAS DE ATUAÇÃO</h3>
            <ul class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Apoio técnico e administrativo a empresas</p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Presta atendimento ao público</p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Verifica prazos de cada etapa de um processo judicial</p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Calculo</p>
                        <p class="text-muted mb-0">Valores dos honorários dos advogados
                        <p>
                        <p class="text-muted mb-0">Valores dos custos de um processo
                        <p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Recebe e envia documentos</p>
                        <p class="text-muted mb-0">Registra a movimentação em sistemas ou livros de protocolo
                        <p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align: center">
                        <p class="fw-bold mb-1">Redige:</p>
                        <p class="text-muted mb-0">Contratos</p>
                        <p class="text-muted mb-0">Ofícios</p>
                        <p class="text-muted mb-0">Processos
                        <p>
                        <p class="text-muted mb-0">Cartas comerciais
                        <p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align: center">
                        <p class="fw-bold mb-1">Arquiva processos</p>
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