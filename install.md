---
layout: default
title: Installation
header_anchor: true
---

# Installation

## Requirements

- Unix-like Environment (OS X / Linux / Cygwin)
- PHP 5.3.0+ Locally

## Via Composer (recommended)

If you are a PHP developer, `composer` is the recommended installation method. Boomerang*!* can be installed globally or within the current project.

### Globally

```bash
composer global require 'boomerang/boomerang=~0.2.0'
```

### In Your Composer Project

Add the following to your composer.json

```json
"require": {
	"boomerang/boomerang" : "~0.2.0"
}
```
	
Then, from your project root you can then execute `./vendor/bin/boomerang`

## Via PHAR

Info to come!