---
layout: default
title: Documentation
header_anchor: true
---
# Documentation

## Application

### Class: Boomerang - `\Boomerang\Boomerang`

#### Method: `::main($args)`


#### Method: `::addValidator($validator)`

After creating an instance of a Validator, it needs to be registered with Boomerang in order for results to be tallied and displayed.

##### Arguments

- `$validator` (`\Boomerang\Interfaces\ValidatorInterface`)



## Http

### Class: HttpRequest - `\Boomerang\HttpRequest`

#### Method: `->__construct($endpoint, $responseFactory)`


#### Method: `->getHeader($key)`

Retrieve an outgoing header by name

##### Arguments

- `$key` (`string`)
	- The name of the header.


##### Returns

(`string` | `null`)


#### Method: `->setHeader($key, $value)`

Set an outgoing header by name.

##### Arguments

- `$key` (`string`)
	- The name of the header.
- `$value` (`string`)
	- The value to set the header to.



#### Method: `->getPost($key)`

##### Arguments

- `$key` (``)


##### Returns

(`string` | `null`)


#### Method: `->setPost($key, $value)`

Set a named key of the post value

##### Arguments

- `$key` (``)
- `$value` (``)



#### Method: `->getPostdata()`

Retrieve all enqueued post-data as an array.

##### Returns

(`array`)


#### Method: `->setPostdata($post)`

Set all post data, whipping past values.

##### Arguments

- `$post` (`array`)



#### Method: `->setCookiesFollowRedirects($bool, $tmp_path)`

Allows you to enable cookie's set by server re-posting following a redirect.

##### Arguments

- `$bool` (`bool`)
- `$tmp_path` (`string`)
	- Path to save the cookie jar file, defaults to /tmp



#### Method: `->setCookies($cookies)`

##### Arguments

- `$cookies` (`array`)



#### Method: `->setCookie($key, $value)`

##### Arguments

- `$key` (`string`)
- `$value` (`string`)



#### Method: `->getEndpoint()`

##### Returns

(`string`)


#### Method: `->setEndpoint($endpoint)`

##### Arguments

- `$endpoint` (`string`)



#### Method: `->makeRequest()`

##### Returns

(`\Boomerang\HttpResponse`)


#### Method: `->getHeaders()`

##### Returns

(`array`)


#### Method: `->setHeaders($headers)`

##### Arguments

- `$headers` (`array`)



#### Method: `->getLastRequestTime()`

Get the time the last request took in seconds a float

##### Returns

(`null` | `float`)


#### Method: `->setMaxRedirects($maxRedirects)`

Set the maximum number of redirects(hops) a request should follow.

##### Arguments

- `$maxRedirects` (`int`)



### Class: HttpResponse - `\Boomerang\HttpResponse`

#### Method: `->__construct($body, $headers, $request)`

##### Arguments

- `$body` (`string`)
	- The body of the HTTP Request
- `$headers` (`string`)
- `$request` (`\Boomerang\HttpRequest` | `null`)



#### Method: `->getHeader($header, $hop)`

##### Arguments

- `$header` (`string`)
- `$hop` (`null` | `int`)


##### Returns

(`null` | `string`) - Header value or null on not found


#### Method: `->getHeaders($hop)`

##### Arguments

- `$hop` (`null` | `int`)


##### Returns

(`array` | `null`)


#### Method: `->getAllHeaders()`

##### Returns

(`array`)


#### Method: `->getRawHeaders()`

##### Returns

(`string`)


#### Method: `->getBody()`

##### Returns

(`string`)


#### Method: `->getRequest()`

##### Returns

(`\Boomerang\HttpRequest`)


#### Method: `->getHopCount()`

##### Returns

(`int`)


#### Method: `->getStatus($hop)`

##### Arguments

- `$hop` (`int` | `null`)


##### Returns

(`int` | `null`)


## Validators

### Class: HttpResponseValidator - `\Boomerang\HttpResponseValidator`

#### Method: `->__construct($response)`


#### Method: `->getResponse()`

##### Returns

(`\Boomerang\HttpResponse`)


#### Method: `->expectStatus($expected_status, $hop)`

##### Arguments

- `$expected_status` (`int`)
- `$hop` (`null`)


##### Returns

(`$this`)


#### Method: `->expectHeader($key, $value, $hop)`

##### Arguments

- `$key` (`string`)
- `$value` (`string`)
- `$hop` (`null` | `int`)


##### Returns

(`$this`)


#### Method: `->expectHeaderContains($key, $value, $hop)`

##### Arguments

- `$key` (`string`)
- `$value` (`string`)
- `$hop` (`null` | `int`)


##### Returns

(`$this`)


#### Method: `->expectBody($expectedContent)`

##### Arguments

- `$expectedContent` (`string`)


##### Returns

(`$this`)


#### Method: `->expectBodyContains($expectedContent)`

##### Arguments

- `$expectedContent` (`string`)


##### Returns

(`$this`)


#### Method: `->getExpectationResults()`

##### Returns

(`\Boomerang\Interfaces\ExpectationResultInterface[]`)


### Class: JSONValidator - `\Boomerang\JSONValidator`

#### Method: `->__construct($response)`


#### Method: `->inspectJSON()`


