# Extend Spryker Form-Type-Extensions Module
[![Build Status](https://travis-ci.org/fond-of/spryker-form-type-extensions.svg?branch=master)](https://travis-ci.org/fond-of/spryker-form-type-extensions)
[![PHP from Travis config](https://img.shields.io/travis/php-v/symfony/symfony.svg)](https://php.net/)
[![license](https://img.shields.io/github/license/mashape/apistatus.svg)](https://packagist.org/packages/fond-of-spryker/form-type-extensions)

## Installation

```
composer require fond-of-spryker/form-type-extensions
```

## YVES

add to FormDependencyProvider in Yves

```
    /**
     * @return \Spryker\Shared\FormExtension\Dependency\Plugin\FormPluginInterface[]
     */
    protected function getFormPlugins(): array
    {
        return [
            ...
            new ChoiceTypeExtensionFormPlugin(),
        ];
    }
```

## ZED

add to FormDependencyProvider in Zed

```
    /**
     * @return \Spryker\Shared\FormExtension\Dependency\Plugin\FormPluginInterface[]
     */
    protected function getFormPlugins(): array
    {
        return [
            ...
            new ChoiceTypeExtensionFormPlugin(),
        ];
    }
```
