---
layout: default
title: Documentation
header_anchor: true
---

# Documentation Overview

For more information view the [full api documentation](docs/api.html).

## Making a Request

The first step in surface testing your API is making the request. That is done with the
					`HttpRequest` object.

#### Method: `HttpRequest->__construct($endpoint [, $responseFactory = null])`

##### Parameters:

- ***string*** `$endpoint` - URI to request.
- ***\Boomerang\Factories\HttpResponseFactory*** `$responseFactory` - A factory for creating Response objects.



---

#### Method: `HttpRequest->setUrlParam($param, $value)`

Set a url param by name.  
  


##### Parameters:

- ***string*** `$param` - The name of the param.
- ***string*** | ***int*** | ***float*** | ***array*** `$value`



---

#### Method: `HttpRequest->setUrlParams($params)`

Set outgoing params as an array of ParamName => Value  
  


##### Parameters:

- ***array*** `$params` - Params to set



---

#### Method: `HttpRequest->setHeader($key, $value)`

Set an outgoing header by name.  
  


##### Parameters:

- ***string*** `$key` - The name of the header.
- ***string*** `$value` - The value to set the header to.



---

#### Method: `HttpRequest->setHeaders($headers)`

Set outgoing headers as an array of HeaderName => Value  
  


##### Parameters:

- ***array*** `$headers` - Headers to set



---

#### Method: `HttpRequest->setBasicAuth($username [, $password = ''])`

Set outgoing basic auth header.  
  


##### Parameters:

- ***string*** `$username`
- ***string*** `$password`



---

#### Method: `HttpRequest->setPost($key, $value)`

Set a named key of the post value  
  


##### Parameters:

- ***mixed*** `$key`
- ***mixed*** `$value`



---

#### Method: `HttpRequest->setPostdata($post)`

Set all post data, whipping past values.  
  


##### Parameters:

- ***array*** `$post`



---

#### Method: `HttpRequest->setCookiesFollowRedirects($bool)`

Allows you to enable cookie's set by server re-posting following a redirect.  
Requires file system storage of a "cookie jar" file and is therefore disabled by default.  


##### Parameters:

- ***bool*** `$bool` - true/false to enable/disable respectively



---

#### Method: `HttpRequest->setCookies($cookies)`

Set outgoing cookies as an array of CookieName => Value  
  


##### Parameters:

- ***array*** `$cookies` - Cookies to set



---

#### Method: `HttpRequest->setCookie($key, $value)`

Set a named cookies outgoing value  
  


##### Parameters:

- ***string*** `$key`
- ***string*** `$value`



---

#### Method: `HttpRequest->setEndpoint($endpoint)`

Sets the request URI  
  


##### Parameters:

- ***string*** `$endpoint`



---

#### Method: `HttpRequest->makeRequest()`

Execute the request  
  



---

#### Method: `HttpRequest->setMaxRedirects($maxRedirects)`

Set the maximum number of redirects(hops) a request should follow.  
  


##### Parameters:

- ***int*** `$maxRedirects`

## Validating API Expectations

Validators are used to define your expecations for the response.

#### Method: `HttpResponseValidator->expectStatus([ $expected_status = 200 [, $hop = null]])`

Verify that the HTTP response code is as expected.  
  


##### Parameters:

- ***int*** `$expected_status`
- ***null*** `$hop` - The zero indexed redirect hop. Defaults to the final hop.



---

#### Method: `HttpResponseValidator->expectHeader($key, $value [, $hop = null])`

Verify that a header field equals an expected value.  
  


##### Parameters:

- ***string*** `$key` - The header field name to verify.
- ***string*** `$value` - The expected value.
- ***null*** | ***int*** `$hop` - The zero indexed redirect hop. Defaults to the final hop.



---

#### Method: `HttpResponseValidator->expectHeaderContains($key, $value [, $hop = null])`

Verify that a header field contains an expected value.  
For example, checking the header Content-Type for "json" **would** match a response of "application/json"  


##### Parameters:

- ***string*** `$key` - The header field name to verify.
- ***string*** `$value` - The expected containing value.
- ***null*** | ***int*** `$hop` - The zero indexed redirect hop. Defaults to the final hop.



---

#### Method: `HttpResponseValidator->expectBody($expectedContent)`

Verify that the content body equals an expected value.  
  


##### Parameters:

- ***string*** `$expectedContent` - The expected value.



---

#### Method: `HttpResponseValidator->expectBodyContains($expectedContent)`

Verify that the content body contains an expected value.  
  


##### Parameters:

- ***string*** `$expectedContent` - The expected containing value.



#### Method: `JSONValidator->expectStructure($structure)`

Verify that the data matches the passed expected structure definition.  
  


##### Parameters:

- ***\Boomerang\Interfaces\TypeExpectationInterface*** | ***callable*** | ***mixed*** `$structure` - A description of the expected structure.

