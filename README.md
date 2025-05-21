# Sistema de Cadastro e Login

## Descrição

Este projeto é uma aplicação web baseada em PHP projetada para cadastrar usuários, ele permite que os usuários se registrem, façam login. O sistema também inclui funcionalidades administrativas, como aprovar ou bloquear usuários.

## Funcionalidades

*   Cadastro de Usuário
*   Login de Usuário
*   Gerenciamento Administrativo de Usuários (Aprovar/Bloquear usuários)
*   Integração com Google Maps (detalhes em `apis/google_maps_php_e_mysqli`)
*   Interação com banco de dados para armazenar dados de usuários e outras informações relevantes.

## Tecnologias Utilizadas

*   **Backend:** PHP
*   **Banco de Dados:** MySQL (sugerido por `celke.sql` e `DB.class.php`)
*   **Frontend:** HTML, CSS, JavaScript (suposição, comum para projetos web)
*   **APIs:** Google Maps API (integração PHP & MySQLi)

## Configuração e Instalação

1.  **Pré-requisitos:**
    *   Um servidor web com suporte a PHP (ex: Apache, Nginx)
    *   Servidor de banco de dados MySQL
    *   PHPMyAdmin ou ferramenta de gerenciamento de banco de dados similar (opcional, para gerenciar o banco de dados)

2.  **Configuração do Banco de Dados:**
    *   Importe o arquivo `celke.sql` (localizado em `apis/google_maps_php_e_mysqli/`) para o seu banco de dados MySQL. Isso criará as tabelas e a estrutura necessárias.
    *   Configure os detalhes de conexão com o banco de dados em `conexao.php` (provavelmente em `apis/google_maps_php_e_mysqli/`) e potencialmente em `classes/DB.class.php` se ele gerenciar uma conexão principal ou separada.

3.  **Arquivos do Projeto:**
    *   Clone ou baixe os arquivos do projeto para o diretório raiz do seu servidor web (ex: `htdocs` para XAMPP, `www` para WampServer).

4.  **API do Google Maps:**
    *   Você provavelmente precisará obter uma chave da API do Google Maps.
    *   Configure esta chave de API nos arquivos PHP relevantes (verifique `apis/google_maps_php_e_mysqli/index.php` ou arquivos relacionados).

5.  **Acessando a Aplicação:**
    *   Abra seu navegador web e navegue para a URL do projeto (ex: `http://localhost/sua_pasta_do_projeto/`).

## Visão Geral da Estrutura de Arquivos

*   `apis/google_maps_php_e_mysqli/`: Contém arquivos relacionados à integração com o Google Maps, incluindo esquema do banco de dados (`celke.sql`), conexão (`conexao.php`) e implementação de exemplo (`index.php`, `resultado.php`).
*   `cadastro.php`: Página principal de cadastro de usuário (nível raiz).
*   `classes/`: Contém classes PHP para funcionalidades centrais.
    *   `Cadastro.class.php`: Provavelmente lida com a lógica de cadastro de usuário.
    *   `DB.class.php`: Camada de abstração do banco de dados ou gerenciamento de conexão.
    *   `Login.class.php`: Provavelmente lida com a lógica de login de usuário.
*   `controllers/`: Contém scripts PHP que lidam com requisições e lógica de negócios.
    *   `aprovar.php`: Script para aprovar usuários.
    *   `bloquear.php`: Script para bloquear usuários.
    *   `cadastro.php`: Controller para cadastro de usuário.
    *   `check.php`: Possivelmente para verificação de sessão ou validação de entrada.
    *   `criarG.php`: O propósito deste arquivo não está imediatamente claro pelo nome (poderia ser "criar Grupo" ou algo diferente).
    *   `login.php`: Controller para login de usuário.
