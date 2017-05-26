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
				

```php
<?php
namespace Boomerang;

class HttpRequest {
	const GET = "GET";
	const POST = "POST";
	const PUT = "PUT";
	const PATCH = "PATCH";
	const DELETE = "DELETE";
	const TRACE = "TRACE";
	const OPTIONS = "OPTIONS";
}
```

#### Method: HttpRequest->__construct

```php
function __construct($endpoint [, $responseFactory = null])
```

##### Parameters:

- ***string*** `$endpoint` - URI to request.
- ***\Boomerang\Factories\HttpResponseFactory*** `$responseFactory` - A factory for creating Response objects.



---

#### Method: HttpRequest->setMethod

```php
function setMethod($method)
```

Set the request method.

##### Helper constants exist, for example

```php  
$req->setMethod(HttpRequest::POST);  
```

##### Parameters:

- ***string*** `$method`



---

#### Method: HttpRequest->setUrlParam

```php
function setUrlParam($param, $value)
```

Set a url param by name.

##### Parameters:

- ***string*** `$param` - The name of the param.
- ***string*** | ***int*** | ***float*** | ***array*** `$value`



---

#### Method: HttpRequest->setUrlParams

```php
function setUrlParams($params)
```

Set outgoing params as an array of ParamName => Value

##### Parameters:

- ***array*** `$params` - Params to set



---

#### Method: HttpRequest->setHeader

```php
function setHeader($key, $value)
```

Set an outgoing header by name.

##### Parameters:

- ***string*** `$key` - The name of the header.
- ***string*** `$value` - The value to set the header to.



---

#### Method: HttpRequest->setHeaders

```php
function setHeaders($headers)
```

Set outgoing headers as an array of HeaderName => Value

##### Parameters:

- ***array*** `$headers` - Headers to set

---

#### Method: HttpRequest->setBasicAuth

```php
function setBasicAuth($username [, $password = ''])
```

Set outgoing basic auth header.

##### Parameters:

- ***string*** `$username`
- ***string*** `$password`





---

#### Method: HttpRequest->setFormValue

```php
function setFormValue($key, $value)
```

Set a named key of the form values  
Note that if there is a non-form body set, this will replace it.

##### Parameters:

- ***string*** `$key`
- ***mixed*** `$value`









---

#### Method: HttpRequest->setBody

```php
function setBody($body)
```

Set the requests body

##### Parameters:

- ***array*** | ***string*** `$body`

---

#### Method: HttpRequest->setCookiesFollowRedirects

```php
function setCookiesFollowRedirects($bool)
```

Allows you to enable cookie's set by server re-posting following a redirect.  
Requires file system storage of a "cookie jar" file and is therefore disabled by default.

##### Parameters:

- ***bool*** `$bool` - true/false to enable/disable respectively

---

#### Method: HttpRequest->setCookies

```php
function setCookies($cookies)
```

Set outgoing cookies as an array of CookieName => Value

##### Parameters:

- ***array*** `$cookies` - Cookies to set

---

#### Method: HttpRequest->setCookie

```php
function setCookie($key, $value)
```

Set a named cookies outgoing value

##### Parameters:

- ***string*** `$key`
- ***string*** `$value`



---

#### Method: HttpRequest->setEndpoint

```php
function setEndpoint($endpoint)
```

Sets the request URI

##### Parameters:

- ***string*** `$endpoint`

---

#### Method: HttpRequest->makeRequest

```php
function makeRequest()
```

Execute the request







---

#### Method: HttpRequest->setMaxRedirects

```php
function setMaxRedirects($maxRedirects)
```

Set the maximum number of redirects(hops) a request should follow.

##### Parameters:

- ***int*** `$maxRedirects`

## Validating API Expectations

Validators are used to define your expecations for the response.

#### Method: HttpResponseValidator->expectStatus

```php
function expectStatus([ $expected_status = 200 [, $hop = null]])
```

Verify that the HTTP response code is as expected.

##### Parameters:

- ***int*** `$expected_status`
- ***null*** `$hop` - The zero indexed redirect hop. Defaults to the final hop.

---

#### Method: HttpResponseValidator->expectHeader

```php
function expectHeader($key, $value [, $hop = null])
```

Verify that a header field equals an expected value.

##### Parameters:

- ***string*** `$key` - The header field name to verify.
- ***string*** `$value` - The expected value.
- ***null*** | ***int*** `$hop` - The zero indexed redirect hop. Defaults to the final hop.

---

#### Method: HttpResponseValidator->expectHeaderContains

```php
function expectHeaderContains($key, $value [, $hop = null])
```

Verify that a header field contains an expected value.  
For example, checking the header Content-Type for "json" **would** match a response of "application/json"

##### Parameters:

- ***string*** `$key` - The header field name to verify.
- ***string*** `$value` - The expected containing value.
- ***null*** | ***int*** `$hop` - The zero indexed redirect hop. Defaults to the final hop.

---

#### Method: HttpResponseValidator->expectBody

```php
function expectBody($expectedContent)
```

Verify that the content body equals an expected value.

##### Parameters:

- ***string*** `$expectedContent` - The expected value.

---

#### Method: HttpResponseValidator->expectBodyContains

```php
function expectBodyContains($expectedContent)
```

Verify that the content body contains an expected value.

##### Parameters:

- ***string*** `$expectedContent` - The expected containing value.

---

#### Method: HttpResponseValidator->expectHopCount

```php
function expectHopCount($expectedCount)
```

Verify the number of redirection hops is as expected.

##### Parameters:

- ***int*** `$expectedCount` - The expected number of redirect hops.

#### Method: JSONValidator->expectStructure

```php
function expectStructure($structure)
```

Verify that the data matches the passed expected structure definition.

##### Parameters:

- ***\Boomerang\Interfaces\TypeExpectationInterface*** | ***callable*** | ***mixed*** `$structure` - A description of the expected structure.