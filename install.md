---
layout: default
title: Installation
header_anchor: true
---

# Installation

## Requirements

- Unix-like Environment (OS X / Linux / Cygwin)
- PHP 5.3.0+ Locally

## Via Composer (recommended)

If you are a PHP developer, `composer` is the recommended installation method. Boomerang*!* can be installed globally or within the current project.

### Globally

{% highlight bash %}
composer global require 'boomerang/boomerang=dev-master'
{% endhighlight %}

### In Your Composer Project

Add the following to your composer.json

{% highlight json %}
"require": {
	"boomerang/boomerang" : "dev-master"
}
{% endhighlight %}
	
Then, from beneath the `vendor` folder, you can execute `./vendor/bin/boomerang`

## Via PHAR

Info to come!