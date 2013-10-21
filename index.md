---
layout: default
---

# Introduction

Boomerang*!* is an easy to use API surface testing framework. It is written in PHP and is composer compatible.

Inspired by [Frisby.js](http://frisbyjs.com/), Boomerang*!* takes API testing a step further by allowing easy iteration of values, validation of individual hops along a set of redirects, using a more reliable, extensible architecture.

## Does API surface testing replace unit testing?

*No*, not at all.  It is meant to be used in **conjunction** with a proper unit test suite for an enhanced test sweep.

## What does a simple test look like?

Here is a simple sample that validates a respond like `{ "origin": "216.14.16.226" }`

{% highlight php %}
<?php

namespace Boomerang;

use Boomerang\TypeExpectations\RegexEx;

$req      = new HttpRequest('http://httpbin.org/ip'); // Create the API Request
$response = $req->makeRequest();                      // Execute the request, return a Response object

$valid = new HttpResponseValidator($response); // Create an HTTP response validator.
$valid->expectStatus(200)                      // State a HTTP 200 status expectation
      ->expectHeaderContains('Content-Type', 'json'); // State a Content-Type expectation

Boomerang::addValidator($valid); // Register the validator with Boomerang to output the results

$json = new JSONValidator($response); // Create a JSON Validator
$json->expectStructure(array(
	"origin" => new RegexEx('/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/')
));

Boomerang::addValidator($json);
{% endhighlight %}
