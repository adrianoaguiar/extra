# Marketplace Extra.com.br #
API PHP para integração com extra.com.br


## Instalação Composer ##

1. Baixe o [`composer.phar`](https://getcomposer.org/composer.phar).
2. Adiciona o pacote `"luzpropria/extra": "dev-master"` no seu composer.json
    ``` json
    {
        "require": {
            "luzpropria/extra": "dev-master"
        }
    }
    ```
3. Execute o composer `php composer.phar install` ou `php composer.phar update`

### Autenticação ###
```php
$auth = new Autenticacao();
$auth->setAuthToken('nova-auth-token');
$auth->setAppToken('nova-app-token');
```

`Ambiente de desenvolvimento`
```php
$auth->setSandbox('sandbox');
```


### Serviços para consulta de categorias ###

1. Recupera uma lista de categorias.
```php

```

LuzPropria integração com Extra.com.br
