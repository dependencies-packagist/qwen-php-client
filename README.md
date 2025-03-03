# Qwen PHP Client

[![GitHub Tag](https://img.shields.io/github/v/tag/dependencies-packagist/qwen-php-client)](https://github.com/dependencies-packagist/qwen-php-client/tags)
[![Total Downloads](https://img.shields.io/packagist/dt/qwen/qwen-php-client?style=flat-square)](https://packagist.org/packages/qwen/qwen-php-client)
[![Packagist Version](https://img.shields.io/packagist/v/qwen/qwen-php-client)](https://packagist.org/packages/qwen/qwen-php-client)
[![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/qwen/qwen-php-client)](https://github.com/dependencies-packagist/qwen-php-client)
[![Packagist License](https://img.shields.io/github/license/dependencies-packagist/qwen-php-client)](https://github.com/dependencies-packagist/qwen-php-client)

<p align="center">
  <a href="https://github.com/dependencies-packagist/qwen-php-client" target="_blank">
    <img src="./docs/qwen_screenshot.png?raw=true" alt="Qwen Usage">
  </a>
</p>

## Table of Contents

- [Overview](#Overview)
    - [Features](#key-Features)
- [Installation](#installation)
- [Quick Start Guide](#quick-start-guide)
    - [Basic Usage](#basic-usage)
    - [Advanced Usage](#advanced-usage)
- [License](#license)

---

## Overview

**Qwen PHP Client** is a robust and community-driven PHP client library for seamless integration with the [Qwen](https://qwenlm.ai/) API.

### Key Features

- **Easy Integration:** Simplifies interaction with the Qwen API using a PHP client.
- **Method Chaining:** Supports fluent method chaining for building requests.
- **Customizable:** Allows setting different models, query roles, and streaming options.
- **PSR-18 Compliance:** Utilizes PSR-18 HTTP client for making API requests.

---

## Installation

You can install the package via [Composer](https://getcomposer.org/):

```bash
composer require qwen/qwen-php-client
```

Ensure your project meets the following requirements:

> Requires [PHP 8.1+](https://php.net/releases/)

---

## Quick Start Guide

### Basic Usage

```php
use Qwen\QwenClient;

$apiKey = 'your-api-key';

$response = QwenClient::build($apiKey)
    ->query('Hello qwen, how are you today?')
    ->run();

echo 'API Response:'.$response;
```

**Note**: in easy mode it will take defaults for all configs [Check Default Values](src/Enums/Configs/DefaultConfigs.php)

### Advanced Usage

```php
use Qwen\QwenClient;
use Qwen\Enums\Queries\QueryRoles;
use Qwen\Enums\Models;

$apiKey = 'your-api-key';

$response = QwenClient::build($apiKey, 'https://dashscope-intl.aliyuncs.com', 500)
    ->query('System setup query', 'system')
    ->query('User input message', 'user')
    ->withModel(Models::QWEN_VL_MAX->value)
    ->run();

echo 'API Response:'.$response;
```

## License

Nacosvel Contracts is made available under the MIT License (MIT). Please see [License File](LICENSE) for more information.
