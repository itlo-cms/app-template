Шаблон корпоративного сайта
================
 

Ссылки
-----

* [Web site](https://cms.skeeks.com)
* [Author](https://skeeks.com)
* [ChangeLog](https://github.com/skeeks-cms/cms/blob/master/CHANGELOG.md)
* [Youtube](https://www.youtube.com/channel/UC26fcOT8EK0Rr80WSM44mEA)
* [Facebook](https://www.facebook.com/skeekscom)
* [Vk](https://vk.com/skeeks_com)

Установка
------------

```bash
# Download latest version of composer
curl -sS https://getcomposer.org/installer | COMPOSER_HOME=.composer php

# Installing the base project SkeekS CMS
COMPOSER_HOME=.composer php composer.phar create-project --prefer-dist --stability=dev itlo/app-template demo.ru
# Going into the project folder
cd demo.ru

#Edit the file to access the database, it is located at common/config/db.php

#Update configs
COMPOSER_HOME=.composer php composer.phar self-update && COMPOSER_HOME=.composer php composer.phar du


#Installation of ready-dump
php yii migrate -t=migration_install -p=backup/migrations
```


Documentation
-------------

- [Web version](https://docs.cms.skeeks.com/en/latest/).
- [Pdf version](https://media.readthedocs.org/pdf/skeeks-cms/latest/skeeks-cms.pdf).
- [Веб-версия на русскомя зыке](https://docs.cms.skeeks.com/ru/latest/).
- [Pdf-версия на русскомя зыке](https://media.readthedocs.org/pdf/skeeks-cms-ru/latest/skeeks-cms-ru.pdf).


Screenshots
-------------

[![skeeks!](https://cms.skeeks.com/uploads/all/11/46/fc/1146fc43f1f4663a70b9d1101e550863.png)](http://cms.skeeks.com)



___

> [![skeeks!](https://skeeks.com/img/logo/logo-no-title-80px.png)](https://skeeks.com)  
<i>SkeekS CMS (Yii2) — quickly, easily and effectively!</i>  
[skeeks.com](https://skeeks.com) | [cms.skeeks.com](https://cms.skeeks.com)
