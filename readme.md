Asset manager для ruvents/yii
-----------------------------

Пакет совместим с yii1

###Зависимости
ruvents/yii 1.2 и выше
nmp или yarn

###Установка
В файл composer.json добавить конфигурацию:

```json
"config": {
    "foxy": {
      "manager": "yarn",
      "enabled": true
    },
  },
```

В секции manager можно указать какой пакетный менеджер использовать yarn или npm.

Создать файл package.json. Пример:
```json
{
  "name": "myapp",
  "version": "1.0.0",
  "description": "My super app",
  "author": "Fedor B Gorsky",
  "license": "MIT",
  "dependencies": {
  }
}
```

Установить composer пакет
```bash
composer require fgh151/core-assets
```

###Конфигурация

В файле конфигурации указываем компонент

```php
'components' => [
    'clientScript' => [
        'class' => 'fgh151\core\assets\ClientScript',
    ]
]
```

###Использование

Пример пакета
```php
<?php
/**
 * @author : Fedor B Gorsky
 */

namespace app\assets\site;

use fgh151\core\assets\Asset;
use fgh151\core\assets\BootstrapAsset;
use fgh151\core\assets\FontAwesomeAsset;

class SiteAsset extends Asset
{
    //Подключаем стили
    public static $css = [
        __DIR__ . '/css/main.css',
    ];
    //Подключаем стили с внешних ресурсов
    public static $externalCss = [
        'https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800',
    ];
    //Подключаем скрипты с внешних ресурсов
    public static $externalJs = [
        '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js'
    ];
    //Подключаем скрипты
    public static $js = [
        __DIR__ . '/js/script.js',
    ];
    //Указываем зависимости
    public static $depends = [
        BootstrapAsset::class,
        FontAwesomeAsset::class
    ];
}
```

Созданный пакет подключаем в layout или вьюшке:

```php
use app\assets\site\SiteAsset;

Yii::$app->clientScript->register(SiteAsset::class);
```

Различные примеры пакетов можно увидеть в файлах:

src/BootstrapAsset.php
src/FontAwesomeAsset.php
src/JqueryAsset.php

###Roadmap

* Версионирование пакетов
* Минификация
