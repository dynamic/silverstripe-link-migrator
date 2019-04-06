# SilverStripe Link Migrator

Migrate Linkable Link records to SilverStripe Link

[![Latest Stable Version](https://poser.pugx.org/dynamic/silverstripe-link-migrator/v/stable)](https://packagist.org/packages/dynamic/silverstripe-link-migrator)
[![Total Downloads](https://poser.pugx.org/dynamic/silverstripe-link-migrator/downloads)](https://packagist.org/packages/dynamic/silverstripe-link-migrator)
[![Latest Unstable Version](https://poser.pugx.org/dynamic/silverstripe-link-migrator/v/unstable)](https://packagist.org/packages/dynamic/silverstripe-link-migrator)
[![License](https://poser.pugx.org/dynamic/silverstripe-link-migrator/license)](https://packagist.org/packages/dynamic/silverstripe-link-migrator)

## Requirements

* SilverStripe ^4.0
* gorriecoe/silverstripe-link: ^1.2
* sheadawson/silverstripe-linkable: ^2.0

## Installation

```
composer require dynamic/silverstripe-link-migrator
```

## License
See [License](license.md)

## Documentation

This module contains a task to create new SilverStripe Link records from existing SilverStripe Linkable Link records. 

cli:

`vendor/bin/sake /dev/tasks/LinkableMigrationTask`

browser:

`example.com/dev/tasks/LinkableMigrationTask`

## Maintainers
 * Dynamic <dev@dynamicagency.com>
 
## Bugtracker
Bugs are tracked in the issues section of this repository. Before submitting an issue please read over 
existing issues to ensure yours is unique. 
 
If the issue does look like a new bug:
 
 - Create a new issue
 - Describe the steps required to reproduce your issue, and the expected outcome. Unit tests, screenshots 
 and screencasts can help here.
 - Describe your environment as detailed as possible: SilverStripe version, Browser, PHP version, 
 Operating System, any installed SilverStripe modules.
 
Please report security issues to the module maintainers directly. Please don't file security issues in the bugtracker.
 
## Development and contribution
If you would like to make contributions to the module please ensure you raise a pull request and discuss with the module maintainers.
