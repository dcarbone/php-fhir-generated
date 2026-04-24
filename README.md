# php-fhir-generated

[![License](https://img.shields.io/badge/license-Apache--2.0-blue.svg)](https://github.com/dcarbone/php-fhir-generated/blob/main/LICENSE)
[![PHP Version](https://img.shields.io/badge/php-%3E%3D8.1-8892BF.svg)](https://www.php.net/)

Pre-generated PHP classes for [HL7 FHIR](https://www.hl7.org/fhir/) resources, produced by
[dcarbone/php-fhir](https://github.com/dcarbone/php-fhir).

This library provides strongly-typed PHP models for every FHIR resource, element, and primitive across multiple
FHIR versions — complete with JSON/XML serialization, field validation, and a built-in REST client.

## Features

- **All major FHIR versions** — DSTU1, DSTU2, STU3, R4, R4B, and R5
- **Strongly-typed models** — every resource, element, and primitive as a PHP class with full constructor support
- **JSON & XML serialization** — encode/decode resources using native PHP extensions
- **Built-in FHIR REST client** — read, create, update, patch, and delete resources via cURL
- **Automatic resource parsing** — detect and unserialize arbitrary FHIR responses by `resourceType` or XML element name
- **Schema-driven validation** — built-in rules derived from the FHIR schema, with support for custom rules
- **PHP 8.1+ named arguments** — clean, readable type construction without positional `null` padding

## Supported FHIR Versions

| Version | FHIR Spec |
|---------|-----------|
| DSTU1   | v0.x      |
| DSTU2   | v1.x      |
| STU3    | v3.x      |
| R4      | v4.0      |
| R4B     | v4.3      |
| R5      | v5.x      |

## Requirements

- PHP 8.1 or newer
- Extensions: `curl`, `dom`, `json`, `libxml`, `simplexml`, `xmlreader`, `xmlwriter`

## Installation

### Via Composer (recommended)

```shell
composer require dcarbone/php-fhir-generated
```

### Standalone

Clone or download this repository and require the built-in autoloader:

```php
require __DIR__ . '/src/DCarbone/PHPFHIRGenerated/Autoloader.php';
```

## Quick Start

### Constructing a Resource

```php
<?php

use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRHumanName;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRPatient;

$patient = new FHIRPatient(
    id: 'patient-1',
    language: 'en-us',
    name: [
        new FHIRHumanName(given: ['Real'], family: 'Human'),
    ],
);
```

### Serializing to JSON

```php
echo json_encode($patient, JSON_PRETTY_PRINT);
```

### Unserializing from JSON

```php
$patient = FHIRPatient::jsonUnserialize('{"resourceType":"Patient","id":"patient-1"}');
```

### Fetching from a FHIR Server

```php
<?php

use DCarbone\PHPFHIRGenerated\Client\Client;
use DCarbone\PHPFHIRGenerated\Client\Config;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeFormatEnum;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionClient;

$config = new Config(
    address: 'https://hapi.fhir.org/baseR4',
    defaultFormat: SerializeFormatEnum::JSON,
);

$client = new VersionClient(new Client($config), new Version());
$patient = $client->readOnePatient(resourceID: 'example');
```

### Validating a Resource

```php
$errors = $patient->_getValidationErrors();

if ([] === $errors) {
    echo "Resource is valid!\n";
} else {
    foreach ($errors as $path => $fieldErrors) {
        foreach ($fieldErrors as $rule => $message) {
            echo "{$path}: {$message}\n";
        }
    }
}
```

## Documentation

Full documentation is available on the **[Wiki](https://github.com/dcarbone/php-fhir-generated/wiki)**:

- [Configuration](https://github.com/dcarbone/php-fhir-generated/wiki/Configuration) — Version, serialization, and unserialization options
- [Constructing Types](https://github.com/dcarbone/php-fhir-generated/wiki/Constructing-Types) — Creating resource, element, and primitive instances
- [Serialization](https://github.com/dcarbone/php-fhir-generated/wiki/Serialization) — Encoding and decoding resources in JSON and XML
- [FHIR Client](https://github.com/dcarbone/php-fhir-generated/wiki/FHIR-Client) — Built-in HTTP client for FHIR REST operations
- [Resource Parsing](https://github.com/dcarbone/php-fhir-generated/wiki/Resource-Parsing) — Automatically parsing arbitrary FHIR responses
- [Validation](https://github.com/dcarbone/php-fhir-generated/wiki/Validation) — Built-in and custom validation rules
- [Type System](https://github.com/dcarbone/php-fhir-generated/wiki/Type-System) — Type hierarchy and interfaces
- [Autoloading](https://github.com/dcarbone/php-fhir-generated/wiki/Autoloading) — Class loading with and without Composer
- [Migrating from v2](https://github.com/dcarbone/php-fhir-generated/wiki/Migrating-from-v2) — Breaking changes and upgrade guide from the previous major version

## Related Projects

| Project                                                   | Description                                                                |
|-----------------------------------------------------------|----------------------------------------------------------------------------|
| [dcarbone/php-fhir](https://github.com/dcarbone/php-fhir) | The code generator that produces this library from FHIR schema definitions |
| [HL7 FHIR](https://www.hl7.org/fhir/)                     | The FHIR specification itself                                              |

## License

[Apache-2.0](https://github.com/dcarbone/php-fhir-generated/blob/main/LICENSE)
