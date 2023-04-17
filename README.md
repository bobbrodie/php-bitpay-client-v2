<img src="https://bitpay.com/_nuxt/img/bitpay-logo-blue.1c0494b.svg" width="150">

# BitPay PHP Client
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://raw.githubusercontent.com/bitpay/php-bitpay-client-v2/master/LICENSE)
[![Packagist](https://img.shields.io/packagist/v/bitpay/sdk.svg?style=flat-square)](https://packagist.org/packages/bitpay/sdk)
[![Total Downloads](https://poser.pugx.org/bitpay/sdk/downloads.svg)](https://packagist.org/packages/bitpay/sdk)
[![Latest Unstable Version](https://poser.pugx.org/bitpay/sdk/v/unstable.svg)](https://packagist.org/packages/bitpay/sdk)

Full implementation of the BitPay Payment Gateway. This library implements BitPay's [Cryptographically Secure RESTful API](https://bitpay.com/api).

Our Lite version will most likely be all you need to integrate to your site, available [here](https://github.com/bitpay/php-bitpay-light-client)

## Getting Started

To get up and running with our PHP library quickly, follow [the guide](https://bitpay.readme.io/reference/php-full-sdk-getting-started)

## Support

* https://github.com/bitpay/php-bitpay-client-v2/issues
* https://support.bitpay.com

### Requirements

- PHP version: 8.0 / 8.1 / 8.2
- PHP extensions: json, reflection

## Unit Tests
```php
./vendor/bin/phpunit --testsuite "Unit"
```

## Integration Tests
To run integration tests you have to generate BitPay.config.xml by BitPaySetup and put this file into Integration tests folder.
To submit request you should create recipient in https://test.bitpay.com/dashboard/payouts/recipients and put this email to "email.txt" file in Integration tests folder.
```php
./vendor/bin/phpunit --testsuite "Integration"
```

## Contribute

To contribute to this project, please fork and submit a pull request.

## License

MIT License

Copyright (c) 2019 BitPay

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
