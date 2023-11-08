
## Instruções de Instalação

Siga as etapas abaixo para configurar o ambiente de desenvolvimento local.

Com fins educacionais, empregaremos o Laragon como nosso servidor web.

### 1. Clonar o repositório

Clone este repositório para o seu ambiente local usando o seguinte comando:

`git clone https://github.com/pdroavila/sprint-brudam.git`

### 2. Copiar o arquivo .env

Faça uma cópia do arquivo `.env.example` e renomeie para `.env`.

### 3. Instalar as dependencias do composer

Execute o seguinte comando no terminal para instalar as dependencias:

`composer install`

### 4. Gerar a APP_KEY

Utilize o seguinte comando para gerar a APP_KEY:

`php artisan key:generate`

### 5. Executar as migrações do banco de dados

Dentro do container da aplicação, execute o seguinte comando para executar as migrações do banco de dados:

`php artisan migrate`

### 6. Executar o seeder do banco de dados

Após executar as migrações, você pode executar o seeder para preencher o banco de dados com dados de exemplo. Execute o seguinte comando:

`php artisan db:seed`

## Acesso

O servidor ficará habilitado em `localhost`.