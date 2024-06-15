# 📝 API Motoca Systems

## 📄 Descrição

O objetivo deste projeto é desenvolver uma API RESTful utilizando o framework Laravel em PHP, 
que permita realizar operações de CRUD (Create, Read, Update, Delete) para duas entidades principais: "Produtos" e "Categorias". 
Esta API será responsável por gerenciar os dados relacionados a produtos e categorias dentro de um sistema de e-commerce ou similar, 
permitindo que os usuários interajam com esses dados através de solicitações HTTP. 
As operações CRUD são fundamentais para a manipulação de dados em aplicações web modernas, 
proporcionando flexibilidade e facilidade de uso tanto para desenvolvedores quanto para consumidores finais da API

# Tecnologias Utilizadas para Desenvolver o Projeto

## Backend

- **PHP**: Linguagem de programação escolhida para o desenvolvimento do backend.
- **Laravel**: Framework PHP utilizado para organizar e acelerar o desenvolvimento do backend. Ele fornece uma estrutura robusta para a criação de APIs RESTful, entre outras funcionalidades.

## Banco de Dados

- **PostgreSQL**: Sistema de gerenciamento de banco de dados relacional usado para armazenar e gerenciar os dados das entidades "Produtos" e "Categorias". Ele oferece alta confiabilidade, escalabilidade e segurança.

## Ferramentas e Bibliotecas

- **Composer**: Gerenciador de dependências para PHP, utilizado para gerenciar as bibliotecas e pacotes necessários para o projeto.
- **Postman**: Ferramenta de teste de API utilizada para testar e documentar as endpoints da API durante o desenvolvimento.

## Práticas de Desenvolvimento

- **Migrations**: Utilizado para gerenciar as alterações no esquema do banco de dados de forma organizada e versionada.
- **Seeders**: Permite popular o banco de dados com dados de amostra ou iniciais, facilitando o desenvolvimento e testes.
- **Controllers, Models e Rotas**: Estruturas de código organizadas para separar a lógica de negócios, a interação com o banco de dados e a definição de rotas de acesso à API.

## Versionamento e Controle de Versão

- **Git**: Sistema de controle de versão utilizado para rastrear as alterações no código-fonte durante o desenvolvimento.
- **GitHub**: Plataforma de hospedagem de código-fonte utilizada para colaboração e compartilhamento do projeto.

Este projeto foi desenvolvido seguindo as melhores práticas de codificação e design, focando na manutenibilidade, escalabilidade e segurança.


## 🛠️ Funcionalidades

A aplicação deve inclui as seguintes operações CRUD para as entidades "Produtos" e "Categorias":

### Documentação
Ferramenya utilizada: Postman para testar e documentar as suas APIs. Disponível no link

### Produtos

1. **Criar Produto:**
   - Rota: `POST /api/produtos`
   - Payload: `{ "nome": "Nome do Produto", "descricao": "Descrição do Produto", "preco": 100.00, "categoria_id": 1 }`
   
2. **Ler Produtos:**
   - Rota: `GET /api/produtos`
   - Retorna uma lista de todos os produtos.
   
3. **Ler Produto por ID:**
   - Rota: `GET /api/produtos/{id}`
   - Retorna os detalhes de um produto específico.
   
4. **Atualizar Produto:**
   - Rota: `PUT /api/produtos/{id}`
   - Payload: `{ "nome": "Nome do Produto", "descricao": "Descrição do Produto", "preco": 150.00, "categoria_id": 2 }`
   
5. **Deletar Produto:**
   - Rota: `DELETE /api/produtos/{id}`
   - Deleta um produto específico.

### Categorias

1. **Criar Categoria:**
   - Rota: `POST /api/categorias`
   - Payload: `{ "nome": "Nome da Categoria" }`
   
2. **Ler Categorias:**
   - Rota: `GET /api/categorias`
   - Retorna uma lista de todas as categorias.
   
3. **Ler Categoria por ID:**
   - Rota: `GET /api/categorias/{id}`
   - Retorna os detalhes de uma categoria específica.
   
4. **Atualizar Categoria:**
   - Rota: `PUT /api/categorias/{id}`
   - Payload: `{ "nome": "Nome da Categoria Atualizada" }`
   
5. **Deletar Categoria:**
   - Rota: `DELETE /api/categorias/{id}`
   - Deleta uma categoria específica.

### Relacionamento Produto-Categoria

- Cada produto pertence a uma categoria (`categoria_id` como chave estrangeira na tabela `produtos`).
- Cada categoria pode ter vários produtos.



## 🚀 Como Iniciar a Aplicação

Siga as etapas abaixo para configurar e iniciar o projeto:

### Pré-requisitos

- PHP 8.2 ou superior
- Composer
- PostgreSQL
- Docker (opcional, mas recomendado)

### Passos para Configuração

1. **Clone o Repositório**

   ```bash
   git clone <URL_DO_REPOSITORIO>
   cd teste-motocaSystems-backEnd
