# Inline plugin for Craft CMS 3.x

Inline the contents of a file in a twig template.

<!-- ![Screenshot](resources/img/plugin-logo.png) -->

## Installation

To install Inline, follow these steps:

1. Install with Composer via `composer require luwes/craft3-inline`
2. Install plugin in the Craft Control Panel under Settings > Plugins

Inline works on Craft 3.x.

## Inline Overview

Internally uses the PHP function `file_get_contents`.

## Using Inline

`{{ inline(assetsUrl ~ '/images/logo.svg') }}`

## Inline Roadmap

Some things to do, and ideas for potential features:

* Release it

Brought to you by [Wesley Luyten](https://wesleyluyten.com)
