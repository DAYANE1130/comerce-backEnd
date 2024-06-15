# 📝 API Motoca Systems

## 📄 Descrição

O objetivo deste projeto é desenvolver uma API RESTful utilizando o framework Laravel em PHP, 
que permita realizar operações de CRUD (Create, Read, Update, Delete) para duas entidades principais: "Produtos" e "Categorias". 
Esta API será responsável por gerenciar os dados relacionados a produtos e categorias dentro de um sistema de e-commerce ou similar, 
permitindo que os usuários interajam com esses dados através de solicitações HTTP. 
As operações CRUD são fundamentais para a manipulação de dados em aplicações web modernas, 
proporcionando flexibilidade e facilidade de uso tanto para desenvolvedores quanto para consumidores finais da API

## 🚀 Tecnologias Utilizadas para Desenvolver o Projeto

#### Backend

- **PHP**: Linguagem de programação escolhida para o desenvolvimento do backend.
- **Laravel**: Framework PHP utilizado para organizar e acelerar o desenvolvimento do backend. Ele fornece uma estrutura robusta para a criação de APIs RESTful, entre outras funcionalidades.
- **OMR**: Laravel inclui Eloquent, um mapeador objeto-relacional (ORM),além de recuperar registros da tabela de banco de dados, os modelos Eloquent permitem inserir, atualizar e excluir registros da tabela também.
- 
#### Banco de Dados

- **PostgreSQL**: Sistema de gerenciamento de banco de dados relacional usado para armazenar e gerenciar os dados das entidades "Produtos" e "Categorias". Ele oferece alta confiabilidade, escalabilidade e segurança.

#### Ferramentas e Bibliotecas

- **Composer**: Gerenciador de dependências para PHP, utilizado para gerenciar as bibliotecas e pacotes necessários para o projeto.
- **Postman**: Ferramenta de teste de API utilizada para testar e documentar as endpoints da API durante o desenvolvimento.

#### Práticas de Desenvolvimento

- **Migrations**: Utilizado para gerenciar as alterações no esquema do banco de dados de forma organizada e versionada.
- **Seeders**: Permite popular o banco de dados com dados de amostra ou iniciais, facilitando o desenvolvimento e testes.
- **Controllers,Services,Models e Rotas**: Estruturas de código organizadas para separar a lógica de negócios, a interação com o banco de dados e a definição de rotas de acesso à API.

#### Versionamento e Controle de Versão

- **Git**: Sistema de controle de versão utilizado para rastrear as alterações no código-fonte durante o desenvolvimento.
- **GitHub**: Plataforma de hospedagem de código-fonte utilizada para colaboração e compartilhamento do projeto.

## 🚀 Como Iniciar a Aplicação

Siga as etapas abaixo para configurar e iniciar o projeto:

#### Pré-requisitos

- PHP 8.2 ou superior
- Composer
- PostgreSQL

#### Passos para Configuração

1. **Clone o Repositório**

   ```bash
   git clone https://github.com/DAYANE1130/teste-motocaSystems-backEnd.git
 
   ```
  ```
  cd teste-motocaSystems-backEnd
  ```

2. Instale as Dependências

    Use o Composer para instalar as dependências do projeto:


   ```
   composer install
   ```
   

4.  Configure o Arquivo .env

    Copie o arquivo de exemplo .env.example para .env:
    
   ```
      cp .env.example .env
   ```

4. Abra o arquivo .env em um editor de texto e configure as variáveis de ambiente conforme necessário:
   ```
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=motoca
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha
   ```

5. Certifique-se de substituir seu_usuario e sua_senha pelas credenciais do seu banco de dados PostgreSQL.


6.   Execute as migrations e seeders para criar e povoar o banco de dados:

   ``` 
   php artisan migrate --seed
   ```

7-  Inicie o Servidor

   Inicie o servidor de desenvolvimento do Laravel:

   ```
   php artisan serve
   ```




O servidor será iniciado e você poderá acessar a aplicação em http://localhost:8000.


   







##  📄 Documentação


 Disponível em https://documenter.getpostman.com/view/31041446/2sA3XQhhPm

 
 Documenta cada endpoint da API no Postman estáincluindo descrições, exemplos de solicitações e respostas, e quaisquer parâmetros ou cabeçalhos relevantes.



## 🛠️ Funcionalidades

A aplicação deve inclui as seguintes operações CRUD para as entidades "Produtos" e "Categorias":

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



## Melhorias Futuras
- Implementação de testes unitários e de integração.



