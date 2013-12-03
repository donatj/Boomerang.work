---
layout: default
title: Documentation
header_anchor: true
---
# Documentation

## Application

### Class: Boomerang - `\Boomerang\Boomerang`

Boomerang Application

#### Method: `Boomerang`::`addValidator($validator)`

Register a Validator with Boomerang  
After creating an instance of a Validator, it needs to be registered with Boomerang in order for results to be tallied and displayed.  


##### Parameters

- ***\Boomerang\Interfaces\ValidatorInterface*** `$validator`



## Http

### Class: HttpRequest - `\Boomerang\HttpRequest`

Utility for generating HTTP Requests and receiving Responses into `HttpResponse` objects.

#### Method: `HttpRequest`->`__construct($endpoint [, $responseFactory = null])`

##### Parameters

- ***string*** `$endpoint` - URI to request.
- ***\Boomerang\Factories\HttpResponseFactory*** `$responseFactory` - A factory for creating Response objects.



---

#### Method: `HttpRequest`->`getHeader($key)`

Retrieve an outgoing header by name  
  


##### Parameters

- ***string*** `$key` - The name of the header.


##### Returns

- ***string*** | ***null*** - Null on failure.


---

#### Method: `HttpRequest`->`setHeader($key, $value)`

Set an outgoing header by name.  
  


##### Parameters

- ***string*** `$key` - The name of the header.
- ***string*** `$value` - The value to set the header to.



---

#### Method: `HttpRequest`->`getHeaders()`

Get all set headers.  
  


##### Returns

- ***array***


---

#### Method: `HttpRequest`->`setHeaders($headers)`

Set outgoing headers as an array of HeaderName => Value  
  


##### Parameters

- ***array*** `$headers` - Headers to set



---

#### Method: `HttpRequest`->`getPost($key)`

Retrieve an post value by name.  
  


##### Parameters

- ***mixed*** `$key`


##### Returns

- ***string*** | ***null***


---

#### Method: `HttpRequest`->`setPost($key, $value)`

Set a named key of the post value  
  


##### Parameters

- ***mixed*** `$key`
- ***mixed*** `$value`



---

#### Method: `HttpRequest`->`getPostdata()`

Retrieve all queued post-data as an array.  
  


##### Returns

- ***array***


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

#### Method: `HttpRequest`->`getEndpoint()`

Gets the request URI  
  


##### Returns

- ***string***


---

#### Method: `HttpRequest`->`setEndpoint($endpoint)`

Sets the request URI  
  


##### Parameters

- ***string*** `$endpoint`



---

#### Method: `HttpRequest`->`makeRequest()`

Execute the request  
  


##### Returns

- ***\Boomerang\HttpResponse*** - An object representing the result of the request


---

#### Method: `HttpRequest`->`getLastRequestTime()`

Get the time the last request took in seconds a float  
  


##### Returns

- ***null*** | ***float*** - null if there is no last request


---

#### Method: `HttpRequest`->`getMaxRedirects()`

Get the current maximum number of redirects(hops) a request should follow.  
  


##### Returns

- ***int***


---

#### Method: `HttpRequest`->`setMaxRedirects($maxRedirects)`

Set the maximum number of redirects(hops) a request should follow.  
  


##### Parameters

- ***int*** `$maxRedirects`



### Class: HttpResponse - `\Boomerang\HttpResponse`

Represents an HTTP Response.

Usually received from an `HttpRequest` object

#### Method: `HttpResponse`->`__construct($body, $headers [, $request = null])`

##### Parameters

- ***string*** `$body` - The body of the HTTP Request
- ***string*** `$headers`
- ***\Boomerang\HttpRequest*** | ***null*** `$request`



---

#### Method: `HttpResponse`->`getHeader($header [, $hop = null])`

##### Parameters

- ***string*** `$header`
- ***null*** | ***int*** `$hop`


##### Returns

- ***null*** | ***string*** - Header value or null on not found


---

#### Method: `HttpResponse`->`getHeaders([ $hop = null])`

Get Response headers as a HeaderName => Value array  
  


##### Parameters

- ***null*** | ***int*** `$hop` - The zero indexed hop(redirect). Defaults to the final hop.


##### Returns

- ***array*** | ***null***


---

#### Method: `HttpResponse`->`getAllHeaders()`

Get all Response headers from all hops as a HopIndex => HeaderName => Value array.  
  


##### Returns

- ***array***


---

#### Method: `HttpResponse`->`getRawHeaders()`

Get the raw unparsed Response header string.  
  


##### Returns

- ***string***


---

#### Method: `HttpResponse`->`getBody()`

Get the body of the Response.  
  


##### Returns

- ***string***


---

#### Method: `HttpResponse`->`getRequest()`

Get the HttpRequest object that made the Response object.  
  


##### Returns

- ***\Boomerang\HttpRequest***


---

#### Method: `HttpResponse`->`getHopCount()`

Get the number of hops(redirects) the request took  
  


##### Returns

- ***int***


---

#### Method: `HttpResponse`->`getStatus([ $hop = null])`

Get the HTTP status of a hop  
  


##### Parameters

- ***int*** | ***null*** `$hop` - The zero indexed hop(redirect). Defaults to the final hop.


##### Returns

- ***int*** | ***null***


## Validators

### Class: HttpResponseValidator - `\Boomerang\HttpResponseValidator`

HTTP Validation

Used to validate expected responses, headers and HTTP statues

#### Method: `HttpResponseValidator`->`__construct($response)`

##### Parameters

- ***\Boomerang\Interfaces\HttpResponseInterface*** `$response`



---

#### Method: `HttpResponseValidator`->`getResponse()`

##### Returns

- ***\Boomerang\HttpResponse***


---

#### Method: `HttpResponseValidator`->`expectStatus([ $expected_status = 200 [, $hop = null]])`

##### Parameters

- ***int*** `$expected_status`
- ***null*** `$hop`


##### Returns

- ***$this***


---

#### Method: `HttpResponseValidator`->`expectHeader($key, $value [, $hop = null])`

##### Parameters

- ***string*** `$key`
- ***string*** `$value`
- ***null*** | ***int*** `$hop`


##### Returns

- ***$this***


---

#### Method: `HttpResponseValidator`->`expectHeaderContains($key, $value [, $hop = null])`

##### Parameters

- ***string*** `$key`
- ***string*** `$value`
- ***null*** | ***int*** `$hop`


##### Returns

- ***$this***


---

#### Method: `HttpResponseValidator`->`expectBody($expectedContent)`

##### Parameters

- ***string*** `$expectedContent`


##### Returns

- ***$this***


---

#### Method: `HttpResponseValidator`->`expectBodyContains($expectedContent)`

##### Parameters

- ***string*** `$expectedContent`


##### Returns

- ***$this***


---

#### Method: `HttpResponseValidator`->`getExpectationResults()`

##### Returns

- ***\Boomerang\Interfaces\ExpectationResultInterface[]***


### Class: JSONValidator - `\Boomerang\JSONValidator`

JSON Validator

Used to validate JSON encoding and structure.

#### Method: `JSONValidator`->`__construct($response)`

##### Parameters

- ***\Boomerang\Interfaces\ResponseInterface*** `$response` - The response to inspect



---

#### Method: `JSONValidator`->`inspectJSON()`

Log the JSON response as an InfoResult in the output.  
  


##### Returns

- ***$this***


---

#### Method: `JSONValidator`->`getExpectationResults()`

##### Returns

- ***\Boomerang\Interfaces\ExpectationResultInterface[]***


---

#### Method: `JSONValidator`->`expectStructure($structure)`

##### Parameters

- ***\Boomerang\Interfaces\TypeExpectationInterface*** | ***callable*** | ***mixed*** `$structure`


##### Returns

- ***$this***


---

#### Method: `JSONValidator`->`getResponse()`

##### Returns

- ***\Boomerang\Interfaces\ResponseInterface***


## Type Expectations

### Class: AllEx - `\Boomerang\TypeExpectations\AllEx`

All Expectation

Defines a requirement to match **all** structure definitions expectations.

Example:

    new AllEx(
        array(1,2,3),
        function($data) { return count($data) == 3; }
    );

#### Method: `AllEx`->`__construct($structure)`

##### Parameters

- ***\Boomerang\Interfaces\TypeExpectationInterface*** | ***callable*** | ***mixed*** `$structure,...` - One or more structure definitions to match



---

#### Method: `AllEx`->`getValidator()`

##### Returns

- ***\Boomerang\Interfaces\ValidatorInterface***


### Class: AnyEx - `\Boomerang\TypeExpectations\AnyEx`

Any Expectation

Defines a requirement to match **any** structure definitions expectations.

Example:

    new AllEx(
        array(1,2,3),
        function($data) { return count($data) == 4; }
    );

#### Method: `AnyEx`->`__construct($structure)`

##### Parameters

- ***\Boomerang\Interfaces\TypeExpectationInterface*** | ***callable*** | ***mixed*** `$structure,...` - One or more structure definitions to match



---

#### Method: `AnyEx`->`getValidator()`

##### Returns

- ***\Boomerang\Interfaces\ValidatorInterface***


### Class: ArrayEx - `\Boomerang\TypeExpectations\ArrayEx`

### Class: IntEx - `\Boomerang\TypeExpectations\IntEx`

Integer Expectation

Defines a placeholder expectation of an integer with an optional minimum/maximum range.

**Passes**: int
**Fails**: float/numeric string

#### Method: `IntEx`->`__construct([ $min = null [, $max = null]])`

##### Parameters

- ***null*** | ***int*** | ***float*** `$min` - Optional minimum valid value
- ***null*** | ***int*** | ***float*** `$max` - Optional maximum valid value



### Class: IterateArrayEx - `\Boomerang\TypeExpectations\Iterate\IterateArrayEx`

Iterating Array Expectation

Iterates over every element of an array, ensuring it is an array, and matching against passed structure expectations.

#### Method: `IterateArrayEx`->`__construct($structure)`

##### Parameters

- ***\Boomerang\Interfaces\TypeExpectationInterface*** | ***callable*** | ***mixed*** `$structure`



---

#### Method: `IterateArrayEx`->`getValidator()`

##### Returns

- ***\Boomerang\Interfaces\ValidatorInterface***


### Class: IterateObjectEx - `\Boomerang\TypeExpectations\Iterate\IterateObjectEx`

Iterating Object Expectation

Iterates over every element of an object, ensuring it is an object, and matching against passed structure expectations.

#### Method: `IterateObjectEx`->`__construct($structure)`

##### Parameters

- ***\Boomerang\Interfaces\TypeExpectationInterface*** | ***callable*** | ***mixed*** `$structure`



---

#### Method: `IterateObjectEx`->`getValidator()`

##### Returns

- ***\Boomerang\Interfaces\ValidatorInterface***


### Class: IterateStructureEx - `\Boomerang\TypeExpectations\Iterate\IterateStructureEx`

Iterating Structure (object/array) Expectation

Iterates over every element of a iterable structure (object/array), ensuring it iterable, and matching against passed structure expectations.

#### Method: `IterateStructureEx`->`__construct($structure)`

##### Parameters

- ***\Boomerang\Interfaces\TypeExpectationInterface*** | ***callable*** | ***mixed*** `$structure`



---

#### Method: `IterateStructureEx`->`getValidator()`

##### Returns

- ***\Boomerang\Interfaces\ValidatorInterface***


### Class: NullEx - `\Boomerang\TypeExpectations\NullEx`

Null Expectation

Defines a placeholder expectation of a NULL value.

### Class: NumberEx - `\Boomerang\TypeExpectations\NumberEx`

Number Expectation

Defines a placeholder expectation of a "number" (int/float) with an optional minimum/maximum range.

**Passes**: `int` / `float`
**Fails**: `numeric string`

#### Method: `NumberEx`->`__construct([ $min = null [, $max = null]])`

##### Parameters

- ***null*** | ***int*** | ***float*** `$min` - Optional minimum valid value
- ***null*** | ***int*** | ***float*** `$max` - Optional maximum valid value



### Class: NumericEx - `\Boomerang\TypeExpectations\NumericEx`

Numeric Expectation

Defines a placeholder expectation of a "numeric" (int/float/numeric string) with an optional minimum/maximum range.

See: [php.net/is_numeric](http://php.net/is_numeric)

**Passes**: `numeric string` / `int` / `float`

#### Method: `NumericEx`->`__construct([ $min = null [, $max = null]])`

##### Parameters

- ***null*** | ***int*** | ***float*** `$min` - Optional minimum valid value
- ***null*** | ***int*** | ***float*** `$max` - Optional maximum valid value



### Class: NumericStringEx - `\Boomerang\TypeExpectations\NumericStringEx`

Numeric String Expectation

Defines a placeholder expectation of a "numeric string" with an optional minimum/maximum range.

**Passes**: `numeric string`
**Fails**: `int` / `float`

#### Method: `NumericStringEx`->`__construct([ $min = null [, $max = null]])`

##### Parameters

- ***null*** | ***int*** | ***float*** `$min` - Optional minimum valid value
- ***null*** | ***int*** | ***float*** `$max` - Optional maximum valid value



### Class: RegexEx - `\Boomerang\TypeExpectations\RegexEx`

Regex Match Expectation

Define a regex matching placeholder

#### Method: `RegexEx`->`__construct($pattern)`

##### Parameters

- ***string*** `$pattern` - The preg pattern to search for



### Class: StringEx - `\Boomerang\TypeExpectations\StringEx`

String Expectation

Define a string matching placeholder expectation

### Class: StructureEx - `\Boomerang\TypeExpectations\StructureEx`

Structure Expectation

Used to define rules about structure.

#### Method: `StructureEx`->`__construct($structure)`

##### Parameters

- ***\Boomerang\Interfaces\TypeExpectationInterface*** | ***callable*** | ***mixed*** `$structure`



---

#### Method: `StructureEx`->`getValidator()`

##### Returns

- ***\Boomerang\Interfaces\ValidatorInterface***


