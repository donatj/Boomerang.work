---
layout: default
title: Documentation
header_anchor: true
---
# Documentation

## Application

### Class: Boomerang - `\Boomerang\Boomerang`

#### Method: `Boomerang`::`addValidator($validator)`

Register a Validator with Boomerang  
After creating an instance of a Validator, it needs to be registered with Boomerang in order for results to be tallied and displayed.  


##### Parameters

- ***\Boomerang\Interfaces\ValidatorInterface*** `$validator`



## Http

### Class: HttpRequest - `\Boomerang\HttpRequest`

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

#### Undocumented Method: `HttpResponseValidator`->`__construct($response)`
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

#### Undocumented Method: `JSONValidator`->`__construct($response)`
#### Undocumented Method: `JSONValidator`->`inspectJSON()`
---

#### Method: `JSONValidator`->`getExpectationResults()`

##### Returns

- ***\Boomerang\Interfaces\ExpectationResultInterface[]***


#### Undocumented Method: `JSONValidator`->`expectStructure($structure)`
---

#### Method: `JSONValidator`->`getResponse()`

##### Returns

- ***\Boomerang\Interfaces\ResponseInterface***


## Type Expectations

### Class: AllEx - `\Boomerang\TypeExpectations\AllEx`

#### Undocumented Method: `AllEx`->`__construct()`
---

#### Method: `AllEx`->`match($data)`

Method to pass data to compare against  
  


##### Parameters

- ***mixed*** `$data`


##### Returns

- ***bool***


---

#### Method: `AllEx`->`getValidator()`

##### Returns

- ***\Boomerang\Interfaces\ValidatorInterface***


---

#### Method: `AllEx`->`setValidator($validator)`

##### Parameters

- ***\Boomerang\Interfaces\ValidatorInterface*** `$validator`



---

#### Method: `AllEx`->`setPath($path)`

##### Parameters

- ***array*** `$path`


##### Returns

- ***mixed***


---

#### Method: `AllEx`->`getExpectations()`

##### Returns

- ***array***


### Class: AnyEx - `\Boomerang\TypeExpectations\AnyEx`

#### Method: `AnyEx`->`match($data)`

Method to pass data to compare against  
  


##### Parameters

- ***mixed*** `$data`


##### Returns

- ***bool***


#### Undocumented Method: `AnyEx`->`__construct()`
---

#### Method: `AnyEx`->`getValidator()`

##### Returns

- ***\Boomerang\Interfaces\ValidatorInterface***


---

#### Method: `AnyEx`->`setValidator($validator)`

##### Parameters

- ***\Boomerang\Interfaces\ValidatorInterface*** `$validator`



---

#### Method: `AnyEx`->`setPath($path)`

##### Parameters

- ***array*** `$path`


##### Returns

- ***mixed***


---

#### Method: `AnyEx`->`getExpectations()`

##### Returns

- ***array***


### Class: ArrayEx - `\Boomerang\TypeExpectations\ArrayEx`

#### Method: `ArrayEx`->`match($data)`

Method to pass data to compare against  
  


##### Parameters

- ***mixed*** `$data`


##### Returns

- ***bool***


### Class: IntEx - `\Boomerang\TypeExpectations\IntEx`

#### Method: `IntEx`->`match($data)`

Method to pass data to compare against  
  


##### Parameters

- ***mixed*** `$data`


##### Returns

- ***bool***


#### Undocumented Method: `IntEx`->`__construct([ $min = null [, $max = null]])`
### Class: IterateArrayEx - `\Boomerang\TypeExpectations\Iterate\IterateArrayEx`

#### Method: `IterateArrayEx`->`match($data)`

Method to pass data to compare against  
  


##### Parameters

- ***mixed*** `$data`


##### Returns

- ***bool***


#### Undocumented Method: `IterateArrayEx`->`__construct($structure)`
---

#### Method: `IterateArrayEx`->`getValidator()`

##### Returns

- ***\Boomerang\Interfaces\ValidatorInterface***


---

#### Method: `IterateArrayEx`->`setValidator($validator)`

##### Parameters

- ***\Boomerang\Interfaces\ValidatorInterface*** `$validator`



---

#### Method: `IterateArrayEx`->`setPath($path)`

##### Parameters

- ***array*** `$path`


##### Returns

- ***mixed***


---

#### Method: `IterateArrayEx`->`getExpectations()`

##### Returns

- ***array***


### Class: IterateObjectEx - `\Boomerang\TypeExpectations\Iterate\IterateObjectEx`

#### Method: `IterateObjectEx`->`match($data)`

Method to pass data to compare against  
  


##### Parameters

- ***mixed*** `$data`


##### Returns

- ***bool***


#### Undocumented Method: `IterateObjectEx`->`__construct($structure)`
---

#### Method: `IterateObjectEx`->`getValidator()`

##### Returns

- ***\Boomerang\Interfaces\ValidatorInterface***


---

#### Method: `IterateObjectEx`->`setValidator($validator)`

##### Parameters

- ***\Boomerang\Interfaces\ValidatorInterface*** `$validator`



---

#### Method: `IterateObjectEx`->`setPath($path)`

##### Parameters

- ***array*** `$path`


##### Returns

- ***mixed***


---

#### Method: `IterateObjectEx`->`getExpectations()`

##### Returns

- ***array***


### Class: IterateStructureEx - `\Boomerang\TypeExpectations\Iterate\IterateStructureEx`

#### Method: `IterateStructureEx`->`match($data)`

Method to pass data to compare against  
  


##### Parameters

- ***mixed*** `$data`


##### Returns

- ***bool***


#### Undocumented Method: `IterateStructureEx`->`__construct($structure)`
---

#### Method: `IterateStructureEx`->`getValidator()`

##### Returns

- ***\Boomerang\Interfaces\ValidatorInterface***


---

#### Method: `IterateStructureEx`->`setValidator($validator)`

##### Parameters

- ***\Boomerang\Interfaces\ValidatorInterface*** `$validator`



---

#### Method: `IterateStructureEx`->`setPath($path)`

##### Parameters

- ***array*** `$path`


##### Returns

- ***mixed***


---

#### Method: `IterateStructureEx`->`getExpectations()`

##### Returns

- ***array***


### Class: NullEx - `\Boomerang\TypeExpectations\NullEx`

#### Method: `NullEx`->`match($data)`

Method to pass data to compare against  
  


##### Parameters

- ***mixed*** `$data`


##### Returns

- ***bool***


### Class: NumberEx - `\Boomerang\TypeExpectations\NumberEx`

#### Method: `NumberEx`->`match($data)`

Method to pass data to compare against  
  


##### Parameters

- ***mixed*** `$data`


##### Returns

- ***bool***


#### Undocumented Method: `NumberEx`->`__construct([ $min = null [, $max = null]])`
### Class: NumericEx - `\Boomerang\TypeExpectations\NumericEx`

#### Undocumented Method: `NumericEx`->`__construct([ $min = null [, $max = null]])`
---

#### Method: `NumericEx`->`match($data)`

Method to pass data to compare against  
  


##### Parameters

- ***mixed*** `$data`


##### Returns

- ***bool***


### Class: NumericStringEx - `\Boomerang\TypeExpectations\NumericStringEx`

#### Method: `NumericStringEx`->`match($data)`

Method to pass data to compare against  
  


##### Parameters

- ***mixed*** `$data`


##### Returns

- ***bool***


#### Undocumented Method: `NumericStringEx`->`__construct([ $min = null [, $max = null]])`
### Class: RegexEx - `\Boomerang\TypeExpectations\RegexEx`

#### Undocumented Method: `RegexEx`->`__construct($pattern)`
---

#### Method: `RegexEx`->`match($data)`

Method to pass data to compare against  
  


##### Parameters

- ***mixed*** `$data`


##### Returns

- ***bool***


### Class: StringEx - `\Boomerang\TypeExpectations\StringEx`

#### Method: `StringEx`->`match($data)`

Method to pass data to compare against  
  


##### Parameters

- ***mixed*** `$data`


##### Returns

- ***bool***


### Class: StructureEx - `\Boomerang\TypeExpectations\StructureEx`

#### Undocumented Method: `StructureEx`->`__construct($structure)`
---

#### Method: `StructureEx`->`getValidator()`

##### Returns

- ***\Boomerang\Interfaces\ValidatorInterface***


---

#### Method: `StructureEx`->`setValidator($validator)`

##### Parameters

- ***\Boomerang\Interfaces\ValidatorInterface*** `$validator`



---

#### Method: `StructureEx`->`match($data)`

Method to pass data to compare against  
  


##### Parameters

- ***mixed*** `$data`


##### Returns

- ***bool***


---

#### Method: `StructureEx`->`setPath($path)`

##### Parameters

- ***array*** `$path`


##### Returns

- ***mixed***


---

#### Method: `StructureEx`->`getExpectations()`

##### Returns

- ***array***


