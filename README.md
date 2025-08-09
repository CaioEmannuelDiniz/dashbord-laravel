# Requisitos

- **PHP 8.2 ou superior**  
  Conferir a versão:  
  ```bash
  php -v
  ```

- **Composer**  
  Conferir a instalação:  
  ```bash
  composer --version
  ```

- **Node.js 22 ou superior**  
  Conferir a versão:  
  ```bash
  node -v
  ```

- **GIT**  
  Conferir a instalação:  
  ```bash
  git -v
  ```

---

## Como Rodar o Projeto Baixado

### 1. Baixar os arquivos do GitHub
```bash
git clone <repositorio_url> .
# Exemplo:
git clone https://github.com/celkecursos/tutorial-como-usar-laravel-12.git .
```

### 2. Configurar o arquivo `.env`
- Duplicar o arquivo `.env.example` e renomear para `.env`.
- Alterar no arquivo `.env` as credenciais do banco de dados:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco_de_dados
DB_USERNAME=usuario_do_banco_de_dados
DB_PASSWORD=senha_do_usuario_do_banco_de_dados
```

### 3. Configuração de E-mail

Para a funcionalidade de envio de e-mails funcionar, alterar as credenciais no arquivo `.env`.

#### Servidor fake (desenvolvimento)
- Acessar: *envio gratuito de e-mail*

#### Servidor Iagente (produção)
- Acessar: *envio gratuito de e-mail*
- Configurar DNS da Iagente na Hostinger: *Acessar o tutorial*

```env
# MAIL_MAILER=smtp
# MAIL_SCHEME=null
# MAIL_HOST=smart.iagentesmtp.com.br
# MAIL_PORT=587
# MAIL_USERNAME=nome-do-usuario-na-iagente
# MAIL_PASSWORD=senha-do-usuario-na-iagente
# MAIL_FROM_ADDRESS="colocar-email-remetente@meu-dominio.com.br"
# MAIL_FROM_NAME="${APP_NAME}"
```

---

## Instalar Dependências

### PHP
```bash
composer install
```

### Node.js
```bash
npm install
```

---

## Gerar Chave do `.env`
```bash
php artisan key:generate
```

---

## Criar Banco de Dados e Tabelas
```bash
php artisan migrate
```

---

## Popular o Banco com Dados de Teste
```bash
php artisan db:seed
```

---

## Iniciar o Projeto
```bash
php artisan serve
```

---

## Executar as Bibliotecas Node.js
```bash
npm run dev
```

---

## Acessar o Projeto
[http://127.0.0.1:8000](http://127.0.0.1:8000)
