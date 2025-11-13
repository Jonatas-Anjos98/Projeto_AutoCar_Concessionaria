<!DOCTYPE html>
<html lang="PT - BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oncessionárias</title>
    <link href="css/bootstrap.min.css" type='text/css' rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">AutoCar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Funcionários
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=cadastrar-funcionario">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="?page=listar-funcionario">Listar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Clientes
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=cadastrar-cliente">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="?page=listar-cliente">Listar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Marcas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=cadastrar-marca">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="?page=listar-marca">Listar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Modelos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=cadastrar-modelo">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="?page=listar-modelo">Listar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Vendas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="?page=cadastrar-venda">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="?page=listar-venda">Listar</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container mt-3">
            <div class="row">
                <div class="col">
                    <?php 
                        include('config.php');
                        switch (@$_REQUEST['page']) {
                            //funcionario
                            case 'cadastrar-funcionario':
                                include('cadastrar-funcionario.php');
                                break;
                            case 'listar-funcionario':
                                include('listar-funcionario.php');
                                break;
                            case 'editar-funcionario':
                                include('editar-funcionario.php');
                                break;
                            case 'salvar-funcionario':
                                include('salvar-funcionario.php');
                                break;

                            //cliente
                            case 'cadastrar-cliente':
                                include('cadastrar-cliente.php');
                                break;
                            case 'listar-cliente':
                                include('listar-cliente.php');
                                break;
                            case 'editar-cliente':
                                include('editar-cliente.php');
                                break;
                            case 'salvar-cliente':
                                include('salvar-cliente.php');
                                break;

                            //marca
                            case 'cadastrar-marca':
                                include('cadastrar-marca.php');
                                break;
                            case 'listar-marca':
                                include('listar-marca.php');
                                break;
                            case 'editar-marca':
                                include('editar-marca.php');
                                break;
                            case 'salvar-marca':
                                include('salvar-marca.php');
                                break;

                            //modelo
                            case 'cadastrar-modelo':
                                include('cadastrar-modelo.php');
                                break;
                            case 'listar-modelo':
                                include('listar-modelo.php');
                                break;
                            case 'editar-modelo':
                                include('editar-modelo.php');
                                break;
                            case 'salvar-modelo':
                                include('salvar-modelo.php');
                                break;

                            //venda
                            case 'cadastrar-venda':
                                include('cadastrar-venda.php');
                                break;
                            case 'listar-venda':
                                include('listar-venda.php');
                                break;
                            case 'editar-venda':
                                include('editar-venda.php');
                                break;
                            case 'salvar-venda':
                                include('salvar-venda.php');
                                break;
                            default:
                                print "<h1>Seja Bem Vindo ao sistema da AutoCar</h1>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-light pt-5 pb-4 mt-5">    
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="mb-3">Sobre a AutoCar</h5>
                    <p>Somos a AutoCar, uma concessionária que conecta pessoas ao carro ideal, oferecendo confiança, qualidade e transparência em cada negociação.</p>
                    <a href="sobrenos.html" class="btn btn-primary btn-sm">Saiba Mais</a>
                </div>
                <div class="col-md-4 mb-4">
                    <h5 class="mb-3">Contato</h5>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-map-marker-alt me-2"></i>Av. Solidariedade, 123 - Brasília, DF</li>
                        <li><i class="fa fa-phone me-2"></i>(61) 9 XXXX-XXXX</li>
                        <li><i class="fa fa-envelope me-2"></i>contato@AutoCar.org.br</li>
                    </ul>
                </div>

                <div class="col-md-4 mb-4">
                    <h5 class="mb-3">Redes Sociais</h5>
                    <a href="#" class="text-light me-3 fs-4"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" class="text-light me-3 fs-4"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-light me-3 fs-4"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-light fs-4"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <hr class="bg-light" />
            <div class="text-center">
                <small>&copy; 2025 AutoCar. Todos os direitos reservados.</small>
            </div>
        </div>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>