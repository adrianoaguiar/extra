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
use LuzPropria\Extra\Autenticacao\Autenticacao;
use LuzPropria\Extra\Enviar\Extra;

$auth = new Autenticacao();
$auth->setAuthToken('nova-auth-token');
$auth->setAppToken('nova-app-token');
// Desenvolvimento `sandbox` ou Produção (default) `producao`.
$auth->setSandbox('sandbox');
$extra = new Extra($auth);

```

### Serviços para consulta de categorias ###

1. Recupera uma lista de categorias.
```php
$class = new \LuzPropria\Extra\Api\Categorie\Categories();
$class->setOffset(0); // Parâmetro utilizado para limitar a quantidade de registros trazidos por página.
$class->setLimit(50); // Parâmetro utilizado para limitar a quantidade de registros trazidos pela operação.

try {
    /** @var \LuzPropria\Extra\Utils\ArrayCollection $retorno */
    $retorno = $extra->send($class);

} catch (\Exception $e ) {
    $e->getMessage();
}

/** @var \LuzPropria\Extra\Api\Categorie\Response\Category $categoria */
foreach($retorno as $categoria) {
    // $categoria
}
```

LuzPropria integração com Extra.com.br
