# Magento2 Product Hidprice

Extension allows the store owner to hide the product price and add to cart button from guests or certain customer groups.

### Configuration

<img alt="Magento2 Product Hideprice" src="https://raw.githubusercontent.com/vishwassoni/screenshots/master/Hideprice/config.png" style="width:100%"/>

## Install with Composer as you go

1. Go to Magento2 root folder

2. Enter following commands to install module:

    ```bash
    composer config repositories.hideprices git https://github.com/vishwassoni/magento2-module-product-hideprice.git
    composer require vishwassoni/magento2-module-product-hideprice:dev-master
    ```
   Wait while dependencies are updated.

3. Enter following commands to enable module:

    ```bash
	php bin/magento setup:upgrade

