# Instalação

## Pacotes

Pacotes do Composer PHP

```
composer install
```

Pacotes do Node.JS

```
npm install && npm run dev
```

## Migration

Bando de dados **MySQL**

```
php artisan migrate
```


#Gere os registros do banco de dados para teste

```
php artisan db:seed --class=ToolSeeder
```


## A API deve responde na porta 3000
php artisan serve --port=3000


## Login no para entrar nas rotas protegidas da api

```
admin@mail.com
123456
```

# Acesso as rotas

### Rotas de Login e Logout


Post (Realizando o login com o usuario 'admin@mail.com' e senha '123456')
```
http://127.0.0.1:3000/api/auth/login
```

Post (Realizando o logout, invalidando o token que foi gerado no login)
```
http://127.0.0.1:3000/api/auth/logout
```


### Rotas do sistema

Get (Buscando todos os dados)
```
http://127.0.0.1:3000/api/tools
```

Get (Buscando por tag Ex.:'api')
```
http://127.0.0.1:3000/api/tools?tag=api
```

Post (Inserido dados)
```
http://127.0.0.1:3000/api/tools
```
Campos que poderão sere preenchidos (title, link, description, tags)

Delete (Deletando dados Ex.: com o id = 5)
```
http://127.0.0.1:3000/api/tools/5
```

Get (Listando todos os usuários)
```
http://127.0.0.1:3000/api/users
```

