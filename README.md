## About Log

Log is simple library for logging to file.


```php
<?php

use pekand\Log\Log;

Log::setAllowedSeverity([
    'INFO', 
    'ERROR', 
    'DEBUG',
]);

Log::setStoragePath(dirname(__FILE__).'/storage/log/');

Log::write('mesage', 'INFO');

```


## License

The Log is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
