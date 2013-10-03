# Marketplace Extra.com.br #
API PHP para integração com extra.com.br

* [Autenticação](#autenticação)
* [Serviços para consulta de categorias](#serviços-para-consulta-de-categorias)
<ol>
    <li>[Recupera uma lista de categorias](#recupera-uma-lista-de-categorias)</li>
    <li>[Recupera detalhes de uma categoria informada.](#recupera-detalhes-de-uma-categoria-informada)</li>
</ol>
* [Serviços de itens vendidos pelo lojista](#serviços-de-itens-vendidos-pelo-lojista)

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
### Serviços de itens vendidos pelo lojista ###

###### Recupera itens do Lojista. ######
```php
use LuzPropria\Extra\Api\Seller\SellerGetItems;
use LuzPropria\Extra\Api\Seller\Response\SellerItem;
use LuzPropria\Extra\Utils\ArrayCollection;
use LuzPropria\Extra\Enviar\Exception\Exception as LPException

$class = new SellerGetItems();
$class->setOffset(0); // Parâmetro utilizado para limitar a quantidade de registros trazidos por página.
$class->setLimit(50); // Parâmetro utilizado para limitar a quantidade de registros trazidos pela operação.

try {
    /** @var ArrayCollection $retorno */
    $retorno = $extra->send($class);

} catch (LPException $e ) {
    $e->getMessage();
}

/** @var SellerItem $selleritem */
foreach($retorno as $selleritem) {
    // $selleritem
}
```

###### Recupera Itens do Lojista que já estão disponíveis para venda. ######
```php
use LuzPropria\Extra\Api\Seller\SellerItemsStatusSelling;
use LuzPropria\Extra\Api\Seller\Response\SellerItem;
use LuzPropria\Extra\Utils\ArrayCollection;
use LuzPropria\Extra\Enviar\Exception\Exception as LPException

$class = new SellerItemsStatusSelling();
$class->setOffset(0); // Parâmetro utilizado para limitar a quantidade de registros trazidos por página.
$class->setLimit(50); // Parâmetro utilizado para limitar a quantidade de registros trazidos pela operação.

try {
    /** @var ArrayCollection $retorno */
    $retorno = $extra->send($class);

} catch (LPException $e ) {
    $e->getMessage();
}

/** @var SellerItem $selleritem */
foreach($retorno as $selleritem) {
    // $selleritem
}
```

###### Recupera detalhes do Item do Lojista através do sku informado. ######
```php
use LuzPropria\Extra\Api\Seller\SellerGetItem;
use LuzPropria\Extra\Api\Seller\Response\SellerItem;
use LuzPropria\Extra\Enviar\Exception\Exception as LPException

$class = new SellerGetItem();
$class->setSkuId(21956411); // SKU ID do produto no Marketplace.

try {
    /** @var SellerItem $retorno */
    $retorno = $extra->send($class);

} catch (LPException $e ) {
    $e->getMessage();
}
```

###### Recupera detalhes do Item do Lojista através do sku do lojista. ######
```php
use LuzPropria\Extra\Api\Seller\SellerItemsSkuOrigin;
use LuzPropria\Extra\Api\Seller\Response\SellerItem;
use LuzPropria\Extra\Enviar\Exception\Exception as LPException

$class = new SellerItemsSkuOrigin();
$class->setSkuOrigin(848); // SKU ID do produto do Lojista.

try {
    /** @var SellerItem $retorno */
    $retorno = $extra->send($class);

} catch (LPException $e ) {
    $e->getMessage();
}
```

###### Serviço utilizado para registrar Itens do Lojista que já estão disponíveis para venda. ######
```php
use LuzPropria\Extra\Api\Seller\SellerItem;
use LuzPropria\Extra\Api\Seller\SellerItems;
use LuzPropria\Extra\Api\Seller\Response\SellerCreate;
use LuzPropria\Extra\Enviar\Exception\NotUpdateException;
use LuzPropria\Extra\Enviar\Exception\Exception as LPException

$SellerItem = new SellerItem();
$SellerItem
    ->setSkuId(10) // SKU ID do produto do Lojista `Opcional`
    ->setSkuOrigin('1') // SKU ID do produto no Marketplace
    ->setDefaultPrice(11.10) // Preço “de” no Marketplace
    ->setSalePrice(11.10) // Preço “por”. Preço real de venda
    ->setAvailableQuantity(5) // Quantidade disponível para venda
    ->setTotalQuantity(8) // Quantidade disponível em estoque
    ->setCrossDockingTime(1) // Tempo de fabricação `Opcional`
;

$class = new SellerItems();
$class->setSellerItem($SellerItem); // Ítem do Lojista

try {
    /** @var SellerCreate $retorno */
    $retorno = $extra->send($class);


} catch (NotUpdateException $e ) {
    $e->getMessage();
} catch (LPException $e ) {
    $e->getMessage();
}
```

###### Serviço de atualização de preços. ######
Atualiza o preço ´de´ e o preço ´por´ (preço real para venda) do Item do Lojista informado.

```php
use LuzPropria\Extra\Api\Seller\PriceUpdate;
use LuzPropria\Extra\Api\Seller\SellerItemsPrices;
use LuzPropria\Extra\Enviar\Exception\NotUpdateException;
use LuzPropria\Extra\Enviar\Exception\Exception as LPException

$priceUpdate = new PriceUpdate();
$priceUpdate
    ->setDefaultPrice(20.90) // Preço ´de´
    ->setSalePrice(20.00) // Preço ´por´
;
$class = new SellerItemsPrices();
$class
    ->setSkuId(21956924) // SKU ID do produto no Marketplace.
    ->setPriceUpdate($priceUpdate) // Objeto priceUpdate.
;

try {

    $extra->send($class);

} catch (NotUpdateException $e ) {
    $e->getMessage();
} catch (LPException $e ) {
    $e->getMessage();
}
```

###### Atualiza a quantidade disponível para venda do Item do Lojista informado. ######

```php
use LuzPropria\Extra\Api\Seller\StockUpdate;
use LuzPropria\Extra\Api\Seller\SellerItemsStock;
use LuzPropria\Extra\Enviar\Exception\NotUpdateException;
use LuzPropria\Extra\Enviar\Exception\Exception as LPException

$stockUpdate = new StockUpdate();
$stockUpdate
    ->setAvailableQuantity(2) // Quantidade disponível para venda
    ->setTotalQuantity(4) // Quantidade disponível em estoque
;
$class = new SellerItemsStock();
$class
    ->setSkuId(21956924) // SKU ID do produto no Marketplace.
    ->setStockUpdate($priceUpdate) // Objeto stockUpdate.
;

try {

    $extra->send($class);

} catch (NotUpdateException $e ) {
    $e->getMessage();
} catch (LPException $e ) {
    $e->getMessage();
}
```

Desenvolvimento Rogério Adriano - [`LuzPropria`](http://www.luzpropria.com).