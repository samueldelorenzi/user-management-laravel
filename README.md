# Gerenciamento de Usuários - Aplicação CRUD

![Tela inicial da aplicação](https://github.com/samueldelorenzi/user-management-laravel/blob/main/CRUD.png)

Esta é uma aplicação desenvolvida com **Laravel** para o gerenciamento de usuários, utilizando as tecnologias **PHP**, **Vite** e **Bootstrap**. O sistema permite realizar operações de **CRUD** (Criar, Ler, Atualizar e Deletar) de usuários de forma simples e eficiente.

## Tecnologias Utilizadas

- **Laravel**: Framework PHP para o desenvolvimento de aplicações web robustas.
- **Vite**: Ferramenta moderna de build e bundling de front-end.
- **Bootstrap**: Framework CSS para design responsivo e moderno.
- **PHP**: Linguagem de programação usada para o back-end.

## Pré-requisitos

Antes de rodar a aplicação, verifique se você tem os seguintes requisitos instalados:

- PHP (versão 8.x ou superior)
- Composer
- Node.js (para Vite)
- NPM ou Yarn
- Banco de dados (ex: MySQL, SQLite, PostgreSQL, etc.)

## Instalação

### 1. Clone o repositório

```bash
git clone https://github.com/samueldelorenzi/user-management-laravel.git
cd user-management-laravel
```

### 2. Instale as dependências do PHP

Instale as dependências do Laravel usando o Composer.
```bash
composer install
```

### 3. Configuração do ambiente
Copie o arquivo .env.example para .env:

```bash
cp .env.example .env
```

Em seguida, configure as variáveis de ambiente, como as credenciais do banco de dados, no arquivo .env.

### 4. Gere a chave da aplicação
Para gerar a chave de aplicativo do Laravel, execute o comando:

```bash
php artisan key:generate
```

### 5. Execute as migrações
Rodando as migrações para criar as tabelas no banco de dados:

```bash
php artisan migrate
```

### 6. Instale as dependências de front-end
Instale as dependências de front-end com o npm ou yarn:

```bash
npm install
```
ou
```bash
yarn install
```

### 7. Compilar os assets com o Vite
Para compilar os assets front-end, execute o comando:

```bash
npm run dev
```
ou
```bash
yarn dev
```

### 8. Inicie o servidor local
Agora, você pode rodar o servidor Laravel localmente:

```bash
php artisan serve
```
O servidor estará disponível em http://127.0.0.1:8000.

### Funcionalidades

- [x] Cadastro de Usuários: Cadastro de novos usuários no sistema.

- [x] Listagem de Usuários: Visualização de todos os usuários cadastrados.

- [x] Edição de Usuários: Edição das informações de um usuário existente.

- [x] Exclusão de Usuários: Exclusão de usuários do sistema.

### Estrutura do Projeto

```bash
├── app/                     # Contém o código da aplicação (Controllers, Models, etc)
├── bootstrap/               # Arquivos de inicialização do Laravel
├── config/                  # Configurações do aplicativo
├── database/                # Migrações e seeding do banco de dados
├── public/                  # Arquivos públicos (imagens, CSS, JS)
├── resources/               # Contém os arquivos de recursos (views, assets)
├── routes/                  # Define as rotas da aplicação
├── storage/                 # Arquivos de armazenamento (logs, cache, uploads)
└── vendor/                  # Dependências do Composer

```

