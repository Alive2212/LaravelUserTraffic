# LaravelUserTraffic

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require alive2212/laravelusertraffic
```
after install use 'MetaTrait' in user model
```php
use Illuminate\Database\Eloquent\Model;
use Phoenix\EloquentMeta\MetaTrait;

class SomeModel extends Model
{
    use MetaTrait;

    // model methods
}
```

## Usage
after use 'auth:api' use this middleware
'user_traffic'

To get last and current and count of traffic 
```php
$request['user_traffic'];
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [author name][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/alive2212/laravelusertraffic.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/alive2212/laravelusertraffic.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/alive2212/laravelusertraffic/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/alive2212/laravelusertraffic
[link-downloads]: https://packagist.org/packages/alive2212/laravelusertraffic
[link-travis]: https://travis-ci.org/alive2212/laravelusertraffic
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/alive2212
[link-contributors]: ../../contributors]