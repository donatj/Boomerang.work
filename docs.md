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


#### Method: `HttpRequest`->`getHeader($key)`

Retrieve an outgoing header by name

##### Arguments

- `$key` (`string`)
	- The name of the header.


##### Returns

(`string` | `null`)


#### Method: `HttpRequest`->`setHeader($key, $value)`

Set an outgoing header by name.

##### Arguments

- `$key` (`string`)
	- The name of the header.
- `$value` (`string`)
	- The value to set the header to.



#### Method: `HttpRequest`->`getPost($key)`

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

Retrieve all enqueued post-data as an array.

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
- `$tmp_path` (`string`)
	- Path to save the cookie jar file, defaults to /tmp



#### Method: `HttpRequest`->`setCookies($cookies)`

##### Arguments

- `$cookies` (`array`)



#### Method: `HttpRequest`->`setCookie($key, $value)`

##### Arguments

- `$key` (`string`)
- `$value` (`string`)



#### Method: `HttpRequest`->`getEndpoint()`

##### Returns

(`string`)


#### Method: `HttpRequest`->`setEndpoint($endpoint)`

##### Arguments

- `$endpoint` (`string`)



#### Method: `HttpRequest`->`makeRequest()`

##### Returns

(`\Boomerang\HttpResponse`)


#### Method: `HttpRequest`->`getHeaders()`

##### Returns

(`array`)


#### Method: `HttpRequest`->`setHeaders($headers)`

##### Arguments

- `$headers` (`array`)



#### Method: `HttpRequest`->`getLastRequestTime()`

Get the time the last request took in seconds a float

##### Returns

(`null` | `float`)


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

##### Arguments

- `$hop` (`null` | `int`)


##### Returns

(`array` | `null`)


#### Method: `HttpResponse`->`getAllHeaders()`

##### Returns

(`array`)


#### Method: `HttpResponse`->`getRawHeaders()`

##### Returns

(`string`)


#### Method: `HttpResponse`->`getBody()`

##### Returns

(`string`)


#### Method: `HttpResponse`->`getRequest()`

##### Returns

(`\Boomerang\HttpRequest`)


#### Method: `HttpResponse`->`getHopCount()`

##### Returns

(`int`)


#### Method: `HttpResponse`->`getStatus([ $hop = null])`

##### Arguments

- `$hop` (`int` | `null`)


##### Returns

(`int` | `null`)


## Validators

### Class: HttpResponseValidator - `\Boomerang\HttpResponseValidator`

#### Method: `HttpResponseValidator`->`__construct($response)`


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

#### Method: `JSONValidator`->`__construct($response)`


#### Method: `JSONValidator`->`inspectJSON()`


## Type Expectations

### Class: AllEx - `\Boomerang\TypeExpectations\AllEx`

#### Method: `AllEx`->`__construct()`


#### Method: `AllEx`->`match($data)`


#### Method: `AllEx`->`getMatchingTypeName()`


### Class: AnyEx - `\Boomerang\TypeExpectations\AnyEx`

#### Method: `AnyEx`->`match($data)`


#### Method: `AnyEx`->`getMatchingTypeName()`


### Class: ArrayEx - `\Boomerang\TypeExpectations\ArrayEx`

#### Method: `ArrayEx`->`match($data)`


### Class: IntEx - `\Boomerang\TypeExpectations\IntEx`

#### Method: `IntEx`->`match($data)`


#### Method: `IntEx`->`getMatchingTypeName()`


### Class: IterateArrayEx - `\Boomerang\TypeExpectations\Iterate\IterateArrayEx`

#### Method: `IterateArrayEx`->`match($data)`


#### Method: `IterateArrayEx`->`getMatchingTypeName()`


### Class: IterateObjectEx - `\Boomerang\TypeExpectations\Iterate\IterateObjectEx`

#### Method: `IterateObjectEx`->`getMatchingTypeName()`


### Class: IterateStructureEx - `\Boomerang\TypeExpectations\Iterate\IterateStructureEx`

#### Method: `IterateStructureEx`->`match($data)`


#### Method: `IterateStructureEx`->`getMatchingTypeName()`


### Class: NullEx - `\Boomerang\TypeExpectations\NullEx`

#### Method: `NullEx`->`match($data)`


#### Method: `NullEx`->`getMatchingTypeName()`


### Class: NumberEx - `\Boomerang\TypeExpectations\NumberEx`

#### Method: `NumberEx`->`match($data)`


#### Method: `NumberEx`->`getMatchingTypeName()`


### Class: NumericEx - `\Boomerang\TypeExpectations\NumericEx`

#### Method: `NumericEx`->`__construct([ $min = null [, $max = null]])`


#### Method: `NumericEx`->`match($data)`


#### Method: `NumericEx`->`getMatchingTypeName()`


### Class: NumericStringEx - `\Boomerang\TypeExpectations\NumericStringEx`

#### Method: `NumericStringEx`->`match($data)`


#### Method: `NumericStringEx`->`getMatchingTypeName()`


### Class: RegexEx - `\Boomerang\TypeExpectations\RegexEx`

#### Method: `RegexEx`->`__construct($pattern)`


#### Method: `RegexEx`->`match($data)`


#### Method: `RegexEx`->`getMatchingTypeName()`


### Class: StringEx - `\Boomerang\TypeExpectations\StringEx`

#### Method: `StringEx`->`match($data)`


#### Method: `StringEx`->`getMatchingTypeName()`


### Class: StructureEx - `\Boomerang\TypeExpectations\StructureEx`

#### Method: `StructureEx`->`__construct($structure)`


#### Method: `StructureEx`->`getValidator()`

##### Returns

(`\Boomerang\Interfaces\ValidatorInterface`)


#### Method: `StructureEx`->`setValidator($validator)`

##### Arguments

- `$validator` (`\Boomerang\Interfaces\ValidatorInterface`)



#### Method: `StructureEx`->`match($data)`


#### Method: `StructureEx`->`setPath($path)`

##### Arguments

- `$path` (`array`)


##### Returns

(`mixed`)


#### Method: `StructureEx`->`getExpectations()`

##### Returns

(`array`)


#### Method: `StructureEx`->`getMatchingTypeName()`


