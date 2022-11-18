# [Magento 2 Currency Switcher](https://magefan.com/magento-2-currency-switcher-auto-currency-by-country) by Magefan

This Magento 2 module allows you to automatically show prices on your store in currency based on visitor county.

## Features
  * Currency Based On Customer Geographic Location
  * GeoIP Database
  * Robots Restrictions
  * Integration With Custom Themes

## Storefront Demo
https://acs.demo.magefan.com/gear/bags.html
## Admin Panel Demo
https://acs.demo.magefan.com/admin/



## Installation Method 1 - Installing via Composer (prefer)
  * Open command line
  * Using command "cd" navigate to your magento2 root directory
  * Run commands: 
```
  composer config repositories.magefan composer https://magefan.com/repo/
  composer require magefan/module-auto-currency-switcher
  #Authentication Data can be found in your [Magefan Account](https://magefan.com/downloadable/customer/products/)
  php bin/magento setup:upgrade
  php bin/magento setup:di:compile
  php bin/magento setup:static-content:deploy
```


## Installation Method 2 (Long One)
  * Install GeoIP2 PHP API (https://github.com/maxmind/GeoIP2-php).
  * Install Magefan Community Extension (https://github.com/magefan/module-community)
  * Install Magefan GeoIp Extension (https://github.com/magefan/module-geoip)
  * Unzip Magefan Auto Currency Switcher Extension Archive
  * In your Magento 2 root directory create a folder app/code/Magefan/AutoCurrencySwitcher
  * Copy files and folders from archive to that folder
  * In command line, using "cd", navigate to your Magento 2 root directory
  * Run commands:
```
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
```

## Support
If you have any issues, please [contact us](mailto:support@magefan.com)

## Need More Features?
Please contact us to get a quote
https://magefan.com/contact

## License
The code is licensed under [EULA](https://magefan.com/end-user-license-agreement).
