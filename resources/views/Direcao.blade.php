<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direção</title>
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
        <section class="Direcao" id="pri1-sessão">
            <!--Primeiro Sobre a direção-->
            <div class="banner-secondary_wysiwyg">
                <p>&nbsp;&nbsp;</p>
                <h3 style="text-align:center;">Direção</h3>
                <p>&nbsp;</p>
                <div class="flex flex-col justify-center">
                    <img src="/img/Direcao1.jpg" class="card-img-top" alt="Ilustração referente a ADMINISTRAÇÃO" max-width="auto" height="100%" />
                </div>
                <p>&nbsp;&nbsp;</p>
                <p style="text-align:center;">A Direção Escolar é o departamento executivo encarregado da organizar as atividades administrativas e pedagógicas da Etec.
                    Suas atribuições, indicação e designação, são realizadas de acordo com o Capítulo IV, Seção I do Regimento Comum das Etecs (Deliberação CEETEPS nº 87, de 08 de dezembro de 2022).</p>
                <p>&nbsp;</p>
            </div>
            </div>
        </section>
        <!--Atribuições da direção escolar-->
        <section class="AtribuicaoDirecao">
            <h3 style="text-align: center;">Atribuições da Direção Escolar</h3>
            <p style="text-align: center;">De acordo com o artigo 20 do Regimento Comum das Etecs, o Diretor de Etec, sem prejuízo de outras constantes em documento próprio do CEETEPS e da legislação, terá as seguintes atribuições:</p>
            <p>&nbsp;&nbsp;</p>
            <h6 style="text-align: center;">1 – garantir as condições para o desenvolvimento da gestão democrática do ensino, na forma prevista pela legislação e neste Regimento;</h6>
            <p>&nbsp;&nbsp;</p>
            <h6 style="text-align: center;">2 – promover a elaboração do projeto político-pedagógico da escola;</h6>
            <p>&nbsp;&nbsp;</p>
            <h6 style="text-align: center;">3 – coordenar a elaboração, o acompanhamento, a avaliação e o controle da execução do Plano Plurianual de Gestão;</h6>
            <p>&nbsp;&nbsp;</p>
            <h6 style="text-align: center;">4 – gerenciar os recursos físicos, materiais, humanos e financeiros para atender às necessidades da escola a curto, médio e longo prazos;</h6>
            <p>&nbsp;&nbsp;</p>
            <h6 style="text-align: center;">5 – coordenar o planejamento, execução, controle e avaliação das atividades da escola com o objetivo de garantir a melhoria dos processos;</h6>
            <p>&nbsp;&nbsp;</p>
            <h6 style="text-align: center;">6 – garantir o cumprimento dos conteúdos curriculares, das cargas horárias e dos dias letivos previstos na legislação vigente;</h6>
            <p>&nbsp;&nbsp;</p>
            <h6 style="text-align: center;">7 – garantir os meios para a recuperação de alunos de menor rendimento e em progressão parcial, seja ela na forma presencial ou virtual.</h6>
            <p>&nbsp;&nbsp;</p>
            <h6 style="text-align: center;">8 – assegurar o cumprimento da legislação, bem como dos regulamentos, diretrizes e normas emanadas da administração superior e da Administração Central do CEETEPS;</h6>
            <p>&nbsp;&nbsp;</p>
            <h6 style="text-align: center;">9 – expedir diplomas, certificados e outros documentos escolares, responsabilizando-se por sua autenticidade e exatidão;</h6>
            <p>&nbsp;&nbsp;</p>
            <h6 style="text-align: center;">10 – promover estudos fundamentados por indicadores institucionais e gerenciar ações visando à oferta de cursos e seu contínuo aprimoramento, assim como de programas, dos recursos físicos, materiais e humanos que compõem a escola;</h6>
            <p>&nbsp;&nbsp;</p>
            <h6 style="text-align: center;">11 – administrar e responsabilizar-se pelo patrimônio do CEETEPS, observadas as normas e diretrizes legais e infralegais aplicáveis, fomentando estratégias para controle, manutenção, preservação e desfazimento dos bens inservíveis;</h6>
            <p>&nbsp;&nbsp;</p>
            <h6 style="text-align: center;">12 – promover ações para a integração escola-família e comunidade-empresa, apoiado em indicadores de fontes reconhecidas;</h6>
            <p>&nbsp;&nbsp;</p>
            <h6 style="text-align: center;">13 – coordenar a elaboração de projetos, submetendo-os à aprovação dos órgãos competentes, acompanhar seu desenvolvimento e avaliar seus resultados;</h6>
            <p>&nbsp;&nbsp;</p>
            <h6 style="text-align: center;">14 – criar condições e estimular experiências inovadoras para o aprimoramento do processo educacional;</h6>
            <p>&nbsp;&nbsp;</p>
            <h6 style="text-align: center;">15 – integrar as ações dos serviços prestados pela escola;</h6>
            <p>&nbsp;&nbsp;</p>
            <h6 style="text-align: center;">16 – criar procedimentos que favoreçam a comunicação e o fluxo de informações junto à Comunidade Escolar;</h6>
            <p>&nbsp;&nbsp;</p>
            <h6 style="text-align: center;">17 – convocar para as reuniões ordinárias e extraordinárias, de forma presencial ou virtual, os representantes dos órgãos colegiados discentes, docentes, servidores e membros dos demais segmentos da comunidade escolar;</h6>
            <p>&nbsp;&nbsp;</p>
            <h6 style="text-align: center;">18 – desempenhar outras atividades correlatas e afins.</h6>F
        </section>

        <!--Direoria da Etec-->
        <section>
            <h3 style="text-align: center;">Diretor(a) da Etec</h3>
            <p style="text-align: center;">Amanda Bueno</p>
        </section>

        <!--Acesor Técnico adm-->
        <section>
            <h3 style="text-align: center;">Acessor Técnico Administrativo</h3>
            <p style="text-align: center;">Patrick Moreno da Silva</p>
        </section>

        <!--Contato-->
        <section>
            <h3 style="text-align: center;">Contato</h3>
            <p style="text-align: center;">E-mail: e211dir@cps.sp.gov.br</p>
            <p style="text-align: center;">Telefones: (11) 2045-4016 | (11)2045-4011</p>
        </section>

        <!--Botão que volta para a tela inicial-->
        <div class="text-center">
            <p>&nbsp;&nbsp;</p>
            <a type="button" class="btn btn-dark" href="SiteEtec">Voltar para a página inicial</a>
        </div>


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