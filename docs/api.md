---
layout: default
title: Full API Documentation
header_anchor: true
---


# Full Documentation

## Application

### Class: \Boomerang\Boomerang

Boomerang Application



#### Method: Boomerang::addValidator

```php
function addValidator($validator)
```

Register a Validator with Boomerang  
After creating an instance of a Validator, it needs to be registered with Boomerang in order for results to be tallied and displayed.

##### Parameters:

- ***\Boomerang\Interfaces\ValidatorInterface*** `$validator`

## Http

### Class: \Boomerang\HttpRequest

Utility for generating HTTP Requests and receiving Responses into `HttpResponse` objects.

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

#### Method: HttpRequest->getMethod

```php
function getMethod()
```

Get the current request method.

##### Returns:

- ***string***

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

#### Method: HttpRequest->getUrlParam

```php
function getUrlParam($param)
```

Retrieve a url param by name

##### Parameters:

- ***string*** `$param` - The name of the param.

##### Returns:

- ***string*** | ***array*** | ***null*** - Null on failure.

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

#### Method: HttpRequest->getUrlParams

```php
function getUrlParams()
```

Get all url params.

##### Returns:

- ***array***

---

#### Method: HttpRequest->setUrlParams

```php
function setUrlParams($params)
```

Set outgoing params as an array of ParamName => Value

##### Parameters:

- ***array*** `$params` - Params to set

---

#### Method: HttpRequest->getHeader

```php
function getHeader($key)
```

Retrieve an outgoing header by name

##### Parameters:

- ***string*** `$key` - The name of the header.

##### Returns:

- ***string*** | ***null*** - Null on failure.

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

#### Method: HttpRequest->getHeaders

```php
function getHeaders()
```

Get all set headers.

##### Returns:

- ***array***

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

#### Method: HttpRequest->getPost

```php
function getPost($key)
```

Retrieve an post value by name.

##### DEPRECATED

Use getFormValue instead

##### Parameters:

- ***mixed*** `$key`

##### Returns:

- ***string*** | ***null***

---

#### Method: HttpRequest->setPost

```php
function setPost($key, $value)
```

Set a named key of the post value  
Note that this has the side effect of changing the HTTP Method to POST

##### DEPRECATED

Use setMethod and setFormValue instead

##### Parameters:

- ***string*** `$key`
- ***mixed*** `$value`

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

#### Method: HttpRequest->getFormValue

```php
function getFormValue($key)
```

Retrieve an form value by name.

##### Parameters:

- ***string*** `$key`

##### Returns:

- ***mixed*** | ***null***

---

#### Method: HttpRequest->getPostData

```php
function getPostData()
```

Retrieve all queued post-data as an array.

##### DEPRECATED

Use getBody instead

##### Returns:

- ***array*** | ***string***

---

#### Method: HttpRequest->setPostData

```php
function setPostData($post)
```

Set all post data, whipping past values.  
Note that this has the side effect of changing the HTTP Method to POST

##### DEPRECATED

Use setBody instead

##### Parameters:

- ***array*** `$post`

---

#### Method: HttpRequest->getBody

```php
function getBody()
```

Get the requests body

##### Returns:

- ***array*** | ***string***

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

#### Method: HttpRequest->getEndpoint

```php
function getEndpoint()
```

Gets the request URI

##### Returns:

- ***string***

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

##### Returns:

- ***\Boomerang\HttpResponse*** - An object representing the result of the request

---

#### Method: HttpRequest->getCurlInfo

```php
function getCurlInfo()
```

##### Returns:

- ***mixed***

---

#### Method: HttpRequest->getLastRequestTime

```php
function getLastRequestTime()
```

Get the time the last request took in seconds a float

##### Returns:

- ***null*** | ***float*** - null if there is no last request

---

#### Method: HttpRequest->getMaxRedirects

```php
function getMaxRedirects()
```

Get the current maximum number of redirects(hops) a request should follow.

##### Returns:

- ***int***

---

#### Method: HttpRequest->setMaxRedirects

```php
function setMaxRedirects($maxRedirects)
```

Set the maximum number of redirects(hops) a request should follow.

##### Parameters:

- ***int*** `$maxRedirects`

### Class: \Boomerang\HttpResponse

Represents an HTTP Response.

Usually received from an `HttpRequest` object

#### Method: HttpResponse->__construct

```php
function __construct($body, $headers [, $request = null])
```

##### Parameters:

- ***string*** `$body` - The body of the HTTP Request
- ***string*** `$headers`
- ***\Boomerang\HttpRequest*** | ***null*** `$request`

---

#### Method: HttpResponse->getHeader

```php
function getHeader($header [, $hop = null])
```

Get a response header by name.

##### Parameters:

- ***string*** `$header`
- ***null*** | ***int*** `$hop`

##### Returns:

- ***null*** | ***string*** - Header value or null on not found

---

#### Method: HttpResponse->getHeaders

```php
function getHeaders([ $hop = null])
```

Get response headers as a HeaderName => Value array

##### Parameters:

- ***null*** | ***int*** `$hop` - The zero indexed hop(redirect). Defaults to the final hop.

##### Returns:

- ***array*** | ***null***

---

#### Method: HttpResponse->getAllHeaders

```php
function getAllHeaders()
```

Get all response headers from all hops as a HopIndex => HeaderName => Value array.  
Note: header key values are lower cased.

##### Returns:

- ***array***

---

#### Method: HttpResponse->getRawHeaders

```php
function getRawHeaders()
```

Get the raw un-parsed Response header string.

##### Returns:

- ***string***

---

#### Method: HttpResponse->getBody

```php
function getBody()
```

Get the body of the Response.

##### Returns:

- ***string***

---

#### Method: HttpResponse->getRequest

```php
function getRequest()
```

Get the HttpRequest object that made the Response object.

##### Returns:

- ***\Boomerang\HttpRequest***

---

#### Method: HttpResponse->getHopCount

```php
function getHopCount()
```

Get the number of hops(redirects) the request took

##### Returns:

- ***int***

---

#### Method: HttpResponse->getStatus

```php
function getStatus([ $hop = null])
```

Get the HTTP status of a hop

##### Parameters:

- ***int*** | ***null*** `$hop` - The zero indexed hop(redirect). Defaults to the final hop.

##### Returns:

- ***int*** | ***null***

## Validators

### Class: \Boomerang\HttpResponseValidator

HTTP Validation

Used to validate expected responses, headers and HTTP statues

#### Method: HttpResponseValidator->__construct

```php
function __construct($response)
```

##### Parameters:

- ***\Boomerang\Interfaces\HttpResponseInterface*** `$response`

---

#### Method: HttpResponseValidator->getResponse

```php
function getResponse()
```

##### Returns:

- ***\Boomerang\Interfaces\HttpResponseInterface***

---

#### Method: HttpResponseValidator->expectStatus

```php
function expectStatus([ $expected_status = 200 [, $hop = null]])
```

Verify that the HTTP response code is as expected.

##### Parameters:

- ***int*** `$expected_status`
- ***null*** `$hop` - The zero indexed redirect hop. Defaults to the final hop.

##### Returns:

- ***$this***

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

##### Returns:

- ***$this***

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

##### Returns:

- ***$this***

---

#### Method: HttpResponseValidator->expectBody

```php
function expectBody($expectedContent)
```

Verify that the content body equals an expected value.

##### Parameters:

- ***string*** `$expectedContent` - The expected value.

##### Returns:

- ***$this***

---

#### Method: HttpResponseValidator->expectBodyContains

```php
function expectBodyContains($expectedContent)
```

Verify that the content body contains an expected value.

##### Parameters:

- ***string*** `$expectedContent` - The expected containing value.

##### Returns:

- ***$this***

---

#### Method: HttpResponseValidator->expectHopCount

```php
function expectHopCount($expectedCount)
```

Verify the number of redirection hops is as expected.

##### Parameters:

- ***int*** `$expectedCount` - The expected number of redirect hops.

##### Returns:

- ***$this***

---

#### Method: HttpResponseValidator->getExpectationResults

```php
function getExpectationResults()
```

##### Returns:

- ***\Boomerang\Interfaces\ExpectationResultInterface[]***

### Class: \Boomerang\JSONValidator

JSON Validator

Used to validate JSON encoding and structure.

#### Method: JSONValidator->__construct

```php
function __construct($response)
```

##### Parameters:

- ***\Boomerang\Interfaces\ResponseInterface*** `$response` - The response to inspect

---

#### Method: JSONValidator->inspectJSON

```php
function inspectJSON()
```

Log the JSON response as an InfoResult in the output.

##### Returns:

- ***$this***

---

#### Method: JSONValidator->expectStructure

```php
function expectStructure($structure)
```

Verify that the data matches the passed expected structure definition.

##### Parameters:

- ***\Boomerang\Interfaces\TypeExpectationInterface*** | ***callable*** | ***mixed*** `$structure` - A description of the expected structure.

##### Returns:

- ***$this***

---

#### Method: JSONValidator->getResponse

```php
function getResponse()
```

##### Returns:

- ***\Boomerang\Interfaces\ResponseInterface***

---

#### Method: JSONValidator->getExpectationResults

```php
function getExpectationResults()
```

##### Returns:

- ***\Boomerang\Interfaces\ExpectationResultInterface[]***

## Type Expectations

### Class: \Boomerang\TypeExpectations\AllEx

All Expectation

Defines a requirement to match **all** structure definitions expectations.

Example:

    new AllEx(
        array(1,2,3),
        function($data) { return count($data) == 3; }
    );

#### Method: AllEx->__construct

```php
function __construct($structure)
```

##### Parameters:

- ***\Boomerang\Interfaces\TypeExpectationInterface*** | ***callable*** | ***mixed*** `$structure,...` - One or more structure definitions to match





---

#### Method: AllEx->getValidator

```php
function getValidator()
```

##### Returns:

- ***\Boomerang\Interfaces\ValidatorInterface***

### Class: \Boomerang\TypeExpectations\AnyEx

Any Expectation

Defines a requirement to match **any** structure definitions expectations.

Example:

    new AllEx(
        array(1,2,3),
        function($data) { return count($data) == 4; }
    );





#### Method: AnyEx->__construct

```php
function __construct($structure)
```

##### Parameters:

- ***\Boomerang\Interfaces\TypeExpectationInterface*** | ***callable*** | ***mixed*** `$structure,...` - One or more structure definitions to match

---

#### Method: AnyEx->getValidator

```php
function getValidator()
```

##### Returns:

- ***\Boomerang\Interfaces\ValidatorInterface***

### Class: \Boomerang\TypeExpectations\IntEx

Integer Expectation

Defines a placeholder expectation of an integer with an optional minimum/maximum range.

**Passes**: int
**Fails**: float/numeric string





#### Method: IntEx->__construct

```php
function __construct([ $min = null [, $max = null]])
```

##### Parameters:

- ***null*** | ***int*** | ***float*** `$min` - Optional minimum valid value
- ***null*** | ***int*** | ***float*** `$max` - Optional maximum valid value

### Class: \Boomerang\TypeExpectations\Iterate\IterateArrayEx

Iterating Array Expectation

Iterates over every element of an array, ensuring it is an array, and matching against passed structure expectations.





#### Method: IterateArrayEx->__construct

```php
function __construct($structure)
```

##### Parameters:

- ***\Boomerang\Interfaces\TypeExpectationInterface*** | ***callable*** | ***mixed*** `$structure`

---

#### Method: IterateArrayEx->getValidator

```php
function getValidator()
```

##### Returns:

- ***\Boomerang\Interfaces\ValidatorInterface***

### Class: \Boomerang\TypeExpectations\Iterate\IterateObjectEx

Iterating Object Expectation

Iterates over every element of an object, ensuring it is an object, and matching against passed structure expectations.





#### Method: IterateObjectEx->__construct

```php
function __construct($structure)
```

##### Parameters:

- ***\Boomerang\Interfaces\TypeExpectationInterface*** | ***callable*** | ***mixed*** `$structure`

---

#### Method: IterateObjectEx->getValidator

```php
function getValidator()
```

##### Returns:

- ***\Boomerang\Interfaces\ValidatorInterface***

### Class: \Boomerang\TypeExpectations\Iterate\IterateStructureEx

Iterating Structure (object/array) Expectation

Iterates over every element of a iterable structure (object/array), ensuring it iterable, and matching against passed structure expectations.





#### Method: IterateStructureEx->__construct

```php
function __construct($structure)
```

##### Parameters:

- ***\Boomerang\Interfaces\TypeExpectationInterface*** | ***callable*** | ***mixed*** `$structure`

---

#### Method: IterateStructureEx->getValidator

```php
function getValidator()
```

##### Returns:

- ***\Boomerang\Interfaces\ValidatorInterface***

### Class: \Boomerang\TypeExpectations\NullEx

Null Expectation

Defines a placeholder expectation of a NULL value.

**Passes**: `null`

### Class: \Boomerang\TypeExpectations\NumberEx

Number Expectation

Defines a placeholder expectation of a "number" (int/float) with an optional minimum/maximum range.

**Passes**: `int` / `float`
**Fails**: `numeric string`





#### Method: NumberEx->__construct

```php
function __construct([ $min = null [, $max = null]])
```

##### Parameters:

- ***null*** | ***int*** | ***float*** `$min` - Optional minimum valid value
- ***null*** | ***int*** | ***float*** `$max` - Optional maximum valid value

### Class: \Boomerang\TypeExpectations\NumericEx

Numeric Expectation

Defines a placeholder expectation of a "numeric" (int/float/numeric string) with an optional minimum/maximum range.

See: [php.net/is_numeric](http://php.net/is_numeric)

**Passes**: `numeric string` / `int` / `float`

#### Method: NumericEx->__construct

```php
function __construct([ $min = null [, $max = null]])
```

##### Parameters:

- ***null*** | ***int*** | ***float*** `$min` - Optional minimum valid value
- ***null*** | ***int*** | ***float*** `$max` - Optional maximum valid value

### Class: \Boomerang\TypeExpectations\NumericStringEx

Numeric String Expectation

Defines a placeholder expectation of a "numeric string" with an optional minimum/maximum range.

**Passes**: `numeric string` eg: "1.2"
**Fails**: `int` / `float`





#### Method: NumericStringEx->__construct

```php
function __construct([ $min = null [, $max = null]])
```

##### Parameters:

- ***null*** | ***int*** | ***float*** `$min` - Optional minimum valid value
- ***null*** | ***int*** | ***float*** `$max` - Optional maximum valid value

### Class: \Boomerang\TypeExpectations\RegexEx

Regex Match Expectation

Define a regex matching placeholder

#### Method: RegexEx->__construct

```php
function __construct($pattern)
```

##### Parameters:

- ***string*** `$pattern` - The preg pattern to search for

### Class: \Boomerang\TypeExpectations\StringEx

String Expectation

Define a string matching placeholder expectation

#### Method: StringEx->__construct

```php
function __construct([ $minLength = null [, $maxLength = null]])
```

##### Parameters:

- ***null*** | ***int*** `$minLength` - Optional minimum length in bytes of a valid value
- ***null*** | ***int*** `$maxLength` - Optional maximum length in bytes of a valid value

### Class: \Boomerang\TypeExpectations\StructureEx

Structure Expectation

Used to define rules about structure.

#### Method: StructureEx->__construct

```php
function __construct($structure)
```

##### Parameters:

- ***\Boomerang\Interfaces\TypeExpectationInterface*** | ***callable*** | ***mixed*** `$structure`

---

#### Method: StructureEx->getValidator

```php
function getValidator()
```

##### Returns:

- ***\Boomerang\Interfaces\ValidatorInterface***