---
layout: default
title: Getting Started
header_anchor: true
---

# Getting Started

The first step is simply getting Boomerang*!* installed. You can find instructions for that [here](install.html).

To verify your installation try running `boomerang --version` from the command line.  If everything is good you should get back something like `Boomerang! .X.Y by Jesse G. Donat`.

## Layout

The `boomerang` executable takes a filename or directory as the final argument.
When loading a directory it will recursively search for files matching the glob `*Spec.php` and load them as tests.

As an example, testing an API with the following structure
	
	├── users.json
	└── buildings.json
	
One could simply structure the API test folder

	
	├── usersSpec.php
	└── buildingsSpec.php
	
## Test Structure

There are three steps to creating a test.

1. Creating a new request and receive the response.
2. Validating the response by creating one or more validators.
3. Register the validator with Boomerang*!* 
	
### Sample

The following is a very simple example test that ensures a call returns the HTTP status code `418`. 
	
{% highlight php %}
<?php

namespace Boomerang;

$req      = new Request('http://httpbin.org/get'); // Create the API Request
$response = $req->makeRequest();                   // Execute the request, return a Response object

$valid = new ResponseValidator($response); // Create a basic response validator.
$valid->expectStatus(200)                  // State a HTTP 200 status expectation
      ->expectHeaderContains('Content-Type', 'json'); // State a Content-Type expectation

Boomerang::addValidator($valid); // Register the validator with Boomerang to output the results
{% endhighlight %}


