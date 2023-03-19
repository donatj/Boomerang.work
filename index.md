---
layout: default
---

# Introduction

Boomerang*!* is an easy to use API surface testing framework. It is written in PHP and is composer compatible.

Inspired by [Frisby.js](https://docs.frisbyjs.com/), Boomerang*!* takes API testing a step further by allowing easy iteration of values, validation of individual hops along a set of redirects, all the while using a more reliable, extensible architecture.

Boomerang*!* uses [semantic versioning](https://semver.org/), and is at major version 0, so the public API while the API should not contain major changes, there may be some small shuffeling from time to time until we hit our 1.0 release.

## What does it do?

Boomerang*!* tests your API by making actual HTTP requests to your API and validates the response body and headers according to rules you define.

### Features

- Fully programable in PHP
- HTTP Validation Engine
	- Header Validations
	- HTTP Status Validations
	- Body Validations
	- Validations *Per Redirection* Hop
- JSON Structure Validation Engine
	- Field Type Validations
	- Numeric Range Validations
	- Iterative Validations

### Features Possibly In The Works

- XML Validation

## Does Boomerang*!* replace unit testing?

*No*, not at all. Boomerang*!* is for what is known as "end to end" or E2E testing. A final sanity test of youre response.  It is intended to be used in **conjunction** with a other unit test suites for an full test sweep. 

## What does a simple test look like?

Here is a simple sample that validates a response like `{ "origin": "216.14.16.226" }` where the IP address could be variable.

```php
<?php

namespace Boomerang;

use Boomerang\TypeExpectations\RegexEx;

$req      = new HttpRequest('http://httpbin.org/ip');  // Create the API Request
$response = $req->makeRequest();                       // Execute the request, return a Response object

$valid = new HttpResponseValidator($response);         // Create an HTTP response validator.
$valid->expectStatus(200)                              // State a HTTP 200 status expectation
      ->expectHeaderContains('Content-Type', 'json');  // State a Content-Type expectation

Boomerang::addValidator($valid);                       // Register the validator with Boomerang

$json = new JSONValidator($response);                  // Create a JSON Validator
$json->expectStructure(array(
	// Check that the 'origin' key matches a simple four dot IPv4 pattern.
	"origin" => new RegexEx('/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/')
));

Boomerang::addValidator($json);                        // Register the validator with Boomerang
```
