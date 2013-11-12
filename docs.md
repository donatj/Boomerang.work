---
layout: default
title: Documentation
header_anchor: true
---
# Documentation

**Important:** Everything within this documentation is within the `Boomerang` namespace, e.g.: HttpRequest's fully qualified classname is `Boomerang\HttpRequest`. 

## Application

### Boomerang `Boomerang`

#### Validator Registration `Boomerang::addValidator( Interfaces\Validator\ValidatorInterface $validator )`

After creating an instance of a Validator, it needs to be registered with Boomerang in order for results to be tallied and displayed. 

## Http

### Request `HttpRequest`

A simple cURL wrapper that performs our requests and returns a `\Boomerang\Response` object.

#### `__construct( $endpoint ) {`

- `$endpoint` The url at which the request will be made.

#### `getHeader( $key ) {`

Retrieve an outgoing header by name

- `$key` The name of the header.

#### `setHeader( $key, $value ) {`

Set an outgoing header by name

- `$key` The name of the header.
- `$value` The value to set the header to.

#### `setPostdata( array $post ) {`

Clear and set all post data as an array of key value pairs

- `$post` 

#### `getPostdata() {`
#### `setPost( $key, $value ) {`
#### `setCookiesFollowRedirects( $bool, $tmp_path = '/tmp' ) {`
#### `public $tmp = "/tmp";`

#### `setCookies( array $cookies ) {`
#### `setCookie( $key, $value ) {`
#### `getEndpoint() {`
#### `setEndpoint( $endpoint ) {`
#### `makeRequest() {`
#### `getHeaders() {`
#### `setHeaders( array $headers ) {`
#### `getLastRequestTime() {`
#### `setMaxRedirects( $maxRedirects ) {`

### Response `HttpResponse`

#### `__construct( $body, $headers, HttpRequest $request = null ) {`
#### `getHeader( $header, $hop = null ) {`
#### `getHeaders( $hop = null ) {`
#### `getAllHeaders() {`
#### `getRawHeaders() {`
#### `getBody() {`
#### `getRequest() {`
#### `getHopCount() {`
#### `getStatus( $hop = null ) {`

## Validators

### HTTP `HttpValidator`

Validates HTTP Responses

### JSON `JSONValidator`

Validates JSON Encoding, integrity and structure

## Structure Validators