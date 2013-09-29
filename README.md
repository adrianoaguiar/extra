# Marketplace Extra.com.br #
API PHP para integração com extra.com.br


## Instalação Composer ##

1. Baixe o [`composer.phar`](https://getcomposer.org/composer.phar).
2. Adiciona o pacote `"luzpropria/extra": "dev-master"` no seu composer.json
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

###### Recupera uma lista de categorias ######
```php
use LuzPropria\Extra\Api\Categorie\Categories;
use LuzPropria\Extra\Api\Categorie\Response\Category;
use LuzPropria\Extra\Utils\ArrayCollection;
use LuzPropria\Extra\Enviar\Exception\Exception as LPException

$class = new Categories();
$class->setOffset(0); // Parâmetro utilizado para limitar a quantidade de registros trazidos por página.
$class->setLimit(50); // Parâmetro utilizado para limitar a quantidade de registros trazidos pela operação.

try {
    /** @var ArrayCollection $retorno */
    $retorno = $extra->send($class);

} catch (LPException $e ) {
    $e->getMessage();
}

/** @var Category $categoria */
foreach($retorno as $categoria) {
    // $categoria
}
```
###### Recupera detalhes de uma categoria informada. ######
```php
use LuzPropria\Extra\Api\Categorie\CategoriesLevelId;
use LuzPropria\Extra\Api\Categorie\Response\Category;
use LuzPropria\Extra\Enviar\Exception\Exception as LPException

$class = new CategoriesLevelId();
$class->setLevelId(80056); // Id da categoria

try {
    /** @var Category $retorno */
    $retorno = $extra->send($class);

} catch (LPException $e ) {
    $e->getMessage();
}
```
[`LuzPropria`](http://www.luzpropria.com).