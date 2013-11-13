---
layout: default
title: Documentation
header_anchor: true
---
# Documentation


## Application

### Class: Boomerang - `\Boomerang\Boomerang`

#### Method: `Boomerang`::`addValidator($validator)`

After creating an instance of a Validator, it needs to be registered with Boomerang in order for results to be tallied and displayed.

##### Arguments

- `$validator` (`\Boomerang\Interfaces\ValidatorInterface`)



## Http

### Class: HttpRequest - `\Boomerang\HttpRequest`

#### Method: `HttpRequest`->`__construct($endpoint [, $responseFactory = null])`

##### Arguments

- `$endpoint` (`string`)
	- URI to request.
- `$responseFactory` (`\Boomerang\Factories\HttpResponseFactory`)
	- A factory for creating Response objects.



#### Method: `HttpRequest`->`getHeader($key)`

Retrieve an outgoing header by name

##### Arguments

- `$key` (`string`)
	- The name of the header.


##### Returns

(`string` | `null`) - Null on failure.


#### Method: `HttpRequest`->`setHeader($key, $value)`

Set an outgoing header by name.

##### Arguments

- `$key` (`string`)
	- The name of the header.
- `$value` (`string`)
	- The value to set the header to.



#### Method: `HttpRequest`->`getHeaders()`

Get all set headers.

##### Returns

(`array`)


#### Method: `HttpRequest`->`setHeaders($headers)`

Set outgoing headers as an array of HeaderName => Value

##### Arguments

- `$headers` (`array`)
	- Headers to set



#### Method: `HttpRequest`->`getPost($key)`

Retrieve an post value by name.

##### Arguments

- `$key` (`mixed`)


##### Returns

(`string` | `null`)


#### Method: `HttpRequest`->`setPost($key, $value)`

Set a named key of the post value

##### Arguments

- `$key` (`mixed`)
- `$value` (`mixed`)



#### Method: `HttpRequest`->`getPostdata()`

Retrieve all queued post-data as an array.

##### Returns

(`array`)


#### Method: `HttpRequest`->`setPostdata($post)`

Set all post data, whipping past values.

##### Arguments

- `$post` (`array`)



#### Method: `HttpRequest`->`setCookiesFollowRedirects($bool [, $tmp_path = '/tmp'])`

Allows you to enable cookie's set by server re-posting following a redirect.

##### Arguments

- `$bool` (`bool`)
	- true/false to enable/disable respectively
- `$tmp_path` (`string`)
	- Path to save the cookie jar file, defaults to /tmp



#### Method: `HttpRequest`->`setCookies($cookies)`

Set outgoing cookies as an array of CookieName => Value

##### Arguments

- `$cookies` (`array`)
	- Cookies to set



#### Method: `HttpRequest`->`setCookie($key, $value)`

Set a named cookies outgoing value

##### Arguments

- `$key` (`string`)
- `$value` (`string`)



#### Method: `HttpRequest`->`getEndpoint()`

Gets the request URI

##### Returns

(`string`)


#### Method: `HttpRequest`->`setEndpoint($endpoint)`

Sets the request URI

##### Arguments

- `$endpoint` (`string`)



#### Method: `HttpRequest`->`makeRequest()`

Execute the request

##### Returns

(`\Boomerang\HttpResponse`) - An object representing the result of the request


#### Method: `HttpRequest`->`getLastRequestTime()`

Get the time the last request took in seconds a float

##### Returns

(`null` | `float`) - null if there is no last request


#### Method: `HttpRequest`->`getMaxRedirects()`

Get the current maximum number of redirects(hops) a request should follow.

##### Returns

(`int`)


#### Method: `HttpRequest`->`setMaxRedirects($maxRedirects)`

Set the maximum number of redirects(hops) a request should follow.

##### Arguments

- `$maxRedirects` (`int`)



### Class: HttpResponse - `\Boomerang\HttpResponse`

#### Method: `HttpResponse`->`__construct($body, $headers [, $request = null])`

##### Arguments

- `$body` (`string`)
	- The body of the HTTP Request
- `$headers` (`string`)
- `$request` (`\Boomerang\HttpRequest` | `null`)



#### Method: `HttpResponse`->`getHeader($header [, $hop = null])`

##### Arguments

- `$header` (`string`)
- `$hop` (`null` | `int`)


##### Returns

(`null` | `string`) - Header value or null on not found


#### Method: `HttpResponse`->`getHeaders([ $hop = null])`

Get Response headers as a HeaderName => Value array

##### Arguments

- `$hop` (`null` | `int`)
	- The zero indexed hop(redirect). Defaults to the final hop.


##### Returns

(`array` | `null`)


#### Method: `HttpResponse`->`getAllHeaders()`

Get all Response headers from all hops as a HopIndex => HeaderName => Value array.

##### Returns

(`array`)


#### Method: `HttpResponse`->`getRawHeaders()`

Get the raw unparsed Response header string.

##### Returns

(`string`)


#### Method: `HttpResponse`->`getBody()`

Get the body of the Response.

##### Returns

(`string`)


#### Method: `HttpResponse`->`getRequest()`

Get the HttpRequest object that made the Response object.

##### Returns

(`\Boomerang\HttpRequest`)


#### Method: `HttpResponse`->`getHopCount()`

Get the number of hops(redirects) the request took

##### Returns

(`int`)


#### Method: `HttpResponse`->`getStatus([ $hop = null])`

Get the HTTP status of a hop

##### Arguments

- `$hop` (`int` | `null`)
	- The zero indexed hop(redirect). Defaults to the final hop.


##### Returns

(`int` | `null`)


## Validators

### Class: HttpResponseValidator - `\Boomerang\HttpResponseValidator`

#### Undocumented Method: `HttpResponseValidator`->`__construct($response)`
#### Method: `HttpResponseValidator`->`getResponse()`

##### Returns

(`\Boomerang\HttpResponse`)


#### Method: `HttpResponseValidator`->`expectStatus([ $expected_status = 200 [, $hop = null]])`

##### Arguments

- `$expected_status` (`int`)
- `$hop` (`null`)


##### Returns

(`$this`)


#### Method: `HttpResponseValidator`->`expectHeader($key, $value [, $hop = null])`

##### Arguments

- `$key` (`string`)
- `$value` (`string`)
- `$hop` (`null` | `int`)


##### Returns

(`$this`)


#### Method: `HttpResponseValidator`->`expectHeaderContains($key, $value [, $hop = null])`

##### Arguments

- `$key` (`string`)
- `$value` (`string`)
- `$hop` (`null` | `int`)


##### Returns

(`$this`)


#### Method: `HttpResponseValidator`->`expectBody($expectedContent)`

##### Arguments

- `$expectedContent` (`string`)


##### Returns

(`$this`)


#### Method: `HttpResponseValidator`->`expectBodyContains($expectedContent)`

##### Arguments

- `$expectedContent` (`string`)


##### Returns

(`$this`)


#### Method: `HttpResponseValidator`->`getExpectationResults()`

##### Returns

(`\Boomerang\Interfaces\ExpectationResultInterface[]`)


### Class: JSONValidator - `\Boomerang\JSONValidator`

#### Undocumented Method: `JSONValidator`->`__construct($response)`
#### Undocumented Method: `JSONValidator`->`inspectJSON()`
## Type Expectations

### Class: AllEx - `\Boomerang\TypeExpectations\AllEx`

#### Undocumented Method: `AllEx`->`__construct()`
#### Undocumented Method: `AllEx`->`match($data)`
#### Undocumented Method: `AllEx`->`getMatchingTypeName()`
### Class: AnyEx - `\Boomerang\TypeExpectations\AnyEx`

#### Undocumented Method: `AnyEx`->`match($data)`
#### Undocumented Method: `AnyEx`->`getMatchingTypeName()`
### Class: ArrayEx - `\Boomerang\TypeExpectations\ArrayEx`

#### Undocumented Method: `ArrayEx`->`match($data)`
### Class: IntEx - `\Boomerang\TypeExpectations\IntEx`

#### Undocumented Method: `IntEx`->`match($data)`
#### Undocumented Method: `IntEx`->`getMatchingTypeName()`
### Class: IterateArrayEx - `\Boomerang\TypeExpectations\Iterate\IterateArrayEx`

#### Undocumented Method: `IterateArrayEx`->`match($data)`
#### Undocumented Method: `IterateArrayEx`->`getMatchingTypeName()`
### Class: IterateObjectEx - `\Boomerang\TypeExpectations\Iterate\IterateObjectEx`

#### Undocumented Method: `IterateObjectEx`->`getMatchingTypeName()`
### Class: IterateStructureEx - `\Boomerang\TypeExpectations\Iterate\IterateStructureEx`

#### Undocumented Method: `IterateStructureEx`->`match($data)`
#### Undocumented Method: `IterateStructureEx`->`getMatchingTypeName()`
### Class: NullEx - `\Boomerang\TypeExpectations\NullEx`

#### Undocumented Method: `NullEx`->`match($data)`
#### Undocumented Method: `NullEx`->`getMatchingTypeName()`
### Class: NumberEx - `\Boomerang\TypeExpectations\NumberEx`

#### Undocumented Method: `NumberEx`->`match($data)`
#### Undocumented Method: `NumberEx`->`getMatchingTypeName()`
### Class: NumericEx - `\Boomerang\TypeExpectations\NumericEx`

#### Undocumented Method: `NumericEx`->`__construct([ $min = null [, $max = null]])`
#### Undocumented Method: `NumericEx`->`match($data)`
#### Undocumented Method: `NumericEx`->`getMatchingTypeName()`
### Class: NumericStringEx - `\Boomerang\TypeExpectations\NumericStringEx`

#### Undocumented Method: `NumericStringEx`->`match($data)`
#### Undocumented Method: `NumericStringEx`->`getMatchingTypeName()`
### Class: RegexEx - `\Boomerang\TypeExpectations\RegexEx`

#### Undocumented Method: `RegexEx`->`__construct($pattern)`
#### Undocumented Method: `RegexEx`->`match($data)`
#### Undocumented Method: `RegexEx`->`getMatchingTypeName()`
### Class: StringEx - `\Boomerang\TypeExpectations\StringEx`

#### Undocumented Method: `StringEx`->`match($data)`
#### Undocumented Method: `StringEx`->`getMatchingTypeName()`
### Class: StructureEx - `\Boomerang\TypeExpectations\StructureEx`

#### Undocumented Method: `StructureEx`->`__construct($structure)`
#### Method: `StructureEx`->`getValidator()`

##### Returns

(`\Boomerang\Interfaces\ValidatorInterface`)


#### Method: `StructureEx`->`setValidator($validator)`

##### Arguments

- `$validator` (`\Boomerang\Interfaces\ValidatorInterface`)



#### Undocumented Method: `StructureEx`->`match($data)`
#### Method: `StructureEx`->`setPath($path)`

##### Arguments

- `$path` (`array`)


##### Returns

(`mixed`)


#### Method: `StructureEx`->`getExpectations()`

##### Returns

(`array`)


#### Undocumented Method: `StructureEx`->`getMatchingTypeName()`
