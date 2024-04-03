<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contabilidade</title>
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
            <p>&nbsp;&nbsp;</p>
            <h3 style="text-align:center;"> CONTABILIDADE</h3>
            <p>&nbsp;&nbsp;</p>
            <div class="flex flex-col justify-center">
                <img src="/img/Contabilidade1.jpg" class="card-img-top" alt="Ilustração referente a CONTABILIDADE" max-width="100%" height="auto" />
                <div class="banner-secondary_wysiwyg">
                    <p>&nbsp;</p>
                    <p style="text-align:center;">Matemática e língua portuguesa são disciplinas importantes para entender a contabilidade,
                        que é a ciência responsável por organizar as contas de uma empresa e registrar seus bens patrimoniais (como prédios, veículos e máquinas, entre outros).</p>
                    <p style="text-align:center;">Além da matemática básica, que serve como ferramenta para calcular o lucro ou o prejuízo de uma empresa, o estudante aprenderá matemática financeira,
                        utilizada para operações de financiamento e cálculo de taxas de juros, por exemplo. </p>
                    <p style="text-align:center;">O aluno também vai conhecer quais são as regras da contabilidade e todas as leis que estabelecem o que as empresas podem fazer e quais impostos devem pagar.
                        Na área de Informática, o estudante vai aprender a fazer planilhas e a usar programas de computador específicos para a contabilidade.</p>
                    <p>&nbsp;</p>
                </div>
            </div>
        </section>

        <section class="ContabilidadeAtuacao">
            <h3 style="text-align: center;">EXEMPLOS DE AREAS DE ATUAÇÃO</h3>
            <ul class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Processos administrativos contábeis</p>
                        <p class="text-muted mb-0">Classificação de documentos(fiscais e não fiscais)</p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Preparação de documentos</p>
                        <p class="text-muted mb-0">Documentos necessários para a abertura ou encerramento de uma empresa</p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Calculo de tributos</p>
                        <p class="text-muted mb-0">Tributos federais
                        <p class="text-muted mb-0">Tributos estaduais</p>
                        <p class="text-muted mb-0">Tributos municipais</p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Atendimento a fiscalização</p>
                        <p class="text-muted mb-0">Apresentação de documentos, livros e relatórios contábeis</p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Emissão de notas fiscais</p>
                        <p class="text-muted mb-0">Gerar guias para o pagamento dos tributos</p>
                        <p class="text-muted mb-0">Gerar boletos bancários</p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Registra bens</p>
                        <p class="text-muted mb-0">Vendidos pela empresa</p>
                        <p class="text-muted mb-0">Comprados para a empresa</p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Organiza e arquiva documentos</p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Elaboração de planos</p>
                        <p class="text-muted mb-0">Planos de determinação das taxas de depreciação</p>
                        <p class="text-muted mb-0">Planos de determinação das taxas de exaustão dos bens materiais</p>
                        <p class="text-muted mb-0">Planos de amortização dos valores imateriais</p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Ordena os fatos - Dados contábeis</p>
                        <p class="text-muted mb-0">Dados contábeis por débito</p>
                        <p class="text-muted mb-0">Dados contábeis por crédito</p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-3" style="text-align:center">
                        <p class="fw-bold mb-1">Apuração legal</p>
                        <p class="text-muted mb-0">Direitos legais</p>
                        <p class="text-muted mb-0">Obrigações legais</p>
                        <p class="text-muted mb-0">Haveres legais</p>
                    </div>
                    <p>&nbsp;&nbsp;</p>
                </li>
            </ul>
            <p>&nbsp;&nbsp;</p>

            <h5 style="color: red; text-align:center">IMPORTANTE: o curso de Técnico em Contabilidade, desde 02/06/2015,
                não prevê a obtenção de registro de Conselho da categoria da classe,
                conforme o disposto na Lei nº 12.249/10, que alterou o Decreto-Lei nº 9295,
                de 27 de maio de 1946, artigo 12, parágrafo segundo.</h5>
        </section>
        <div class="text-center">
            <p>&nbsp;&nbsp;</p>
            <a type="button" class="btn btn-dark" href="SiteEtec">Voltar para a página inicial</a>
        </div>
        <p>&nbsp;&nbsp;</p>
        ]
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