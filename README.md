# Projeto AutoCar Concessionária

## Descrição do Projeto

O **Projeto AutoCar Concessionária** é um sistema de gerenciamento web desenvolvido em PHP para auxiliar na administração de uma concessionária de veículos. O sistema permite o gerenciamento completo de cadastros e operações essenciais, como:

*   **Funcionários:** Cadastro, listagem, edição e exclusão de colaboradores.
*   **Clientes:** Cadastro, listagem, edição e exclusão de clientes.
*   **Marcas:** Cadastro, listagem, edição e exclusão de marcas de veículos.
*   **Modelos:** Cadastro, listagem, edição e exclusão de modelos de veículos.
*   **Vendas:** Registro, listagem, edição e exclusão de transações de vendas.

A aplicação é construída com uma arquitetura simples de inclusão de páginas PHP e utiliza o framework **Bootstrap** para uma interface de usuário responsiva e moderna.

## Tecnologias Utilizadas

O projeto foi desenvolvido utilizando as seguintes tecnologias:

| Categoria | Tecnologia | Descrição |
| :--- | :--- | :--- |
| **Backend** | PHP | Linguagem de programação principal para a lógica de negócios e manipulação de dados. |
| **Frontend** | HTML5, CSS3, JavaScript | Estrutura e estilização da aplicação. |
| **Framework CSS** | Bootstrap 5 | Utilizado para um design responsivo e componentes de interface prontos. |
| **Ícones** | Font Awesome | Biblioteca de ícones para aprimorar a experiência visual. |
| **Banco de Dados** | MySQL/MariaDB (Presumido) | Necessário para persistência dos dados (configuração em `config.php`). |

## Instalação e Configuração

Para rodar este projeto localmente, siga os passos abaixo:

### Pré-requisitos

Você precisará de um ambiente de servidor web que suporte PHP e MySQL (como XAMPP, WAMP ou MAMP).

### 1. Clonar o Repositório

```bash
git clone https://github.com/Jonatas-Anjos98/Projeto_AutoCar_Concessionaria.git
cd Projeto_AutoCar_Concessionaria
```

### 2. Configuração do Banco de Dados

1.  Crie um banco de dados MySQL (ou MariaDB) com o nome de sua preferência (ex: `autocar`).
2.  **Atenção:** O arquivo SQL para criação das tabelas não está presente no repositório. Você precisará criar manualmente as tabelas necessárias (`funcionarios`, `clientes`, `marcas`, `modelos` e `vendas`) com as colunas apropriadas para o funcionamento do sistema.

### 3. Configuração do PHP

1.  Mova a pasta `Projeto_AutoCar_Concessionaria` para o diretório de documentos do seu servidor web (ex: `htdocs` no XAMPP).
2.  Edite o arquivo `config.php` para configurar a conexão com o seu banco de dados:

    ```php
    // Exemplo de configuração em config.php
    <?php
    $host = "localhost";
    $user = "seu_usuario";
    $pass = "sua_senha";
    $db = "autocar"; // Nome do banco de dados criado
    
    $conn = new mysqli($host, $user, $pass, $db);
    
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    ?>
    ```

    **Substitua** `seu_usuario` e `sua_senha` pelas suas credenciais de acesso ao banco de dados.

### 4. Acesso à Aplicação

Após a configuração, acesse a aplicação no seu navegador:

```
http://localhost/Projeto_AutoCar_Concessionaria/
```

## Estrutura de Arquivos

A estrutura do projeto é organizada da seguinte forma:

```
Projeto_AutoCar_Concessionaria/
├── README.md
├── index.php             # Página principal e roteador de requisições
├── config.php            # Configuração de conexão com o banco de dados
├── cadastrar-*.php       # Arquivos para formulários de cadastro
├── listar-*.php          # Arquivos para listagem de registros
├── editar-*.php          # Arquivos para formulários de edição
├── salvar-*.php          # Arquivos para lógica de salvamento (inserção/atualização)
├── css/                  # Arquivos CSS (incluindo Bootstrap)
├── js/                   # Arquivos JavaScript (incluindo Bootstrap)
└── fontawesome/          # Biblioteca de ícones Font Awesome
```

## Como Contribuir

Se você deseja contribuir para este projeto, sinta-se à vontade para abrir *issues* ou enviar *pull requests* no repositório original.

## Licença

Este projeto está licenciado sob a licença **MIT** (presumido, pois não há arquivo de licença explícito). Consulte o repositório original para mais detalhes.
