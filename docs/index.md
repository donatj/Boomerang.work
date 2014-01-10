---
layout: default
title: Documentation
header_anchor: true
---

# Documentation Overview

For more information view the [full api documentation](docs/api.html).

## Making a Request

The first step in surface testing your API is making the request. That is done with the `HttpRequest` object.

#### Method: `HttpRequest`->`__construct($endpoint [, $responseFactory = null])`

##### Parameters

- ***string*** `$endpoint` - URI to request.
- ***\Boomerang\Factories\HttpResponseFactory*** `$responseFactory` - A factory for creating Response objects.



---

#### Method: `HttpRequest`->`setHeader($key, $value)`

Set an outgoing header by name.  
  


##### Parameters

- ***string*** `$key` - The name of the header.
- ***string*** `$value` - The value to set the header to.



---

#### Method: `HttpRequest`->`setHeaders($headers)`

Set outgoing headers as an array of HeaderName => Value  
  


##### Parameters

- ***array*** `$headers` - Headers to set



---

#### Method: `HttpRequest`->`setPost($key, $value)`

Set a named key of the post value  
  


##### Parameters

- ***mixed*** `$key`
- ***mixed*** `$value`



---

#### Method: `HttpRequest`->`setPostdata($post)`

Set all post data, whipping past values.  
  


##### Parameters

- ***array*** `$post`



---

#### Method: `HttpRequest`->`setCookiesFollowRedirects($bool [, $tmp_path = '/tmp'])`

Allows you to enable cookie's set by server re-posting following a redirect.  
Requires file system storage of a "cookie jar" file and is therefore disabled by default.  


##### Parameters

- ***bool*** `$bool` - true/false to enable/disable respectively
- ***string*** `$tmp_path` - Path to save the cookie jar file, defaults to /tmp



---

#### Method: `HttpRequest`->`setCookies($cookies)`

Set outgoing cookies as an array of CookieName => Value  
  


##### Parameters

- ***array*** `$cookies` - Cookies to set



---

#### Method: `HttpRequest`->`setCookie($key, $value)`

Set a named cookies outgoing value  
  


##### Parameters

- ***string*** `$key`
- ***string*** `$value`



---

#### Method: `HttpRequest`->`setEndpoint($endpoint)`

Sets the request URI  
  


##### Parameters

- ***string*** `$endpoint`



---

#### Method: `HttpRequest`->`makeRequest()`

Execute the request  
  



---

#### Method: `HttpRequest`->`setMaxRedirects($maxRedirects)`

Set the maximum number of redirects(hops) a request should follow.  
  


##### Parameters

- ***int*** `$maxRedirects`

## Validating API Expectations

Validators are used to define your expecations for the response.

#### Method: `HttpResponseValidator`->`expectStatus([ $expected_status = 200 [, $hop = null]])`

##### Parameters

- ***int*** `$expected_status`
- ***null*** `$hop`



---

#### Method: `HttpResponseValidator`->`expectHeader($key, $value [, $hop = null])`

##### Parameters

- ***string*** `$key`
- ***string*** `$value`
- ***null*** | ***int*** `$hop`



---

#### Method: `HttpResponseValidator`->`expectHeaderContains($key, $value [, $hop = null])`

##### Parameters

- ***string*** `$key`
- ***string*** `$value`
- ***null*** | ***int*** `$hop`



---

#### Method: `HttpResponseValidator`->`expectBody($expectedContent)`

##### Parameters

- ***string*** `$expectedContent`



---

#### Method: `HttpResponseValidator`->`expectBodyContains($expectedContent)`

##### Parameters

- ***string*** `$expectedContent`



#### Method: `JSONValidator`->`expectStructure($structure)`

##### Parameters

- ***\Boomerang\Interfaces\TypeExpectationInterface*** | ***callable*** | ***mixed*** `$structure`

