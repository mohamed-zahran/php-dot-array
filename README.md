# [PHP] DotArray -  Accessing arrays using dot notation and asterisk

[![Latest Stable Version](https://poser.pugx.org/raggitech/php-dot-array/v/stable)](https://packagist.org/packages/raggitech/php-dot-array) [![Total Downloads](https://poser.pugx.org/raggitech/php-dot-array/downloads)](https://packagist.org/packages/raggitech/php-dot-array) [![License](https://poser.pugx.org/raggitech/php-dot-array/license)](https://packagist.org/packages/raggitech/php-dot-array)

DotArray provides an quick/easy access to arrays of data with dot-notation and asterisk.

```php
//Get all users names with DotArray
$names = $dot->get('users.*.name');
```

## Examples
**Traditional way**

```php
$array['users']['raggi']['name'] = 'Moamen Eltouny';

echo $array['users']['raggi']['name']; // Moamen Eltouny
```

**DotArray way (with DotArray Object)**

```php
$dot = dot(); // Creating DotArray Object
$dot->set('users.raggi.name', 'Moamen Eltouny');

// Getting [DotArray way]
echo $dot->get('users.raggi.name');

// OR Getting [ArrayAccess way]
echo $dot['users.raggi.name'];
```



## Install

Install the latest version using [Composer](https://getcomposer.org/):

```
$ composer require raggitech/php-dot-array
```


## Usage

**Create a new DotArray object:**

```php
$dot = new \RaggiTech\DotArray\DotArray;

// With existing array
$dot = new \RaggiTech\DotArray\DotArray($array);
```

**OR You can use a helper function to create the object:**

```php
$dot = dot();

// With existing array
$dot = dot($array);
```



## Methods

**DotArray has the following methods:**

- [set()](#set)
- [get()](#get)
- [toJson()](#tojson)
- [all()](#all)
- [delete()](#delete)
- [clear()](#clear)

- [has()](#has)
- [count()](#count)
- [isEmpty()](#isempty)

- [setArray()](#setarray)
- [setReference()](#setreference)


<a name="set"></a>
### set()

Sets a given key / value pair:
```php
$dot->set('users.raggi.created_at', date('r', time()));

// ArrayAccess
$dot['users.raggi.created_at'] = date('r', time());
```


<a name="get"></a>
### get()

Returns the value of a given key:
```php
print_r($dot->get('users.*.name'));

// ArrayAccess
print_r($dot['users.*.name']);
```

Returns a given default value, if the given key doesn't exist:
```php
print_r($dot->get('users.*.name', 'Raggi'));
```


<a name="tojson"></a>
### toJson()

Returns the value of a given key (like [get()](#get) method) as JSON:
```php
echo $dot->toJson('users');
```

Returns all the stored items (like [get()](#get) method) as JSON:
```php
echo $dot->toJson();
```


<a name="all"></a>

### all()

Returns all the stored items as an array:
```php
$values = $dot->all();
```


<a name="delete"></a>
### delete()

Deletes the given key:
```php
$dot->delete('users.*.name');

// ArrayAccess
unset($dot['users.*.name']);
```


<a name="clear"></a>
### clear()

Deletes all the stored items:
```php
$dot->clear();
```


<a name="has"></a>
### has()

Checks if a given key exists  (returns boolean):
```php
$dot->has('users.raggi.name');

// ArrayAccess
isset($dot['users.raggi.name']);
```


<a name="count"></a>
### count()

Returns the number of the root Items:
```php
$dot->count();

// Or use count() function [Countable Way]
count($dot);
```

Returns the number of items in a given key:
```php
$dot->count('users');
```

<a name="isempty"></a>

### isEmpty()

Checks if a given key is empty (returns boolean):
```php
$dot->isEmpty('users.raggi.name');

// ArrayAccess
empty($dot['users.raggi.name']);
```

Checks the whole DotArray object:
```php
$dot->isEmpty();
```


<a name="setarray"></a>
### setArray()

Replaces all items in DotArray object with a given array:
```php
$dot->setArray($array);
```


<a name="setreference"></a>
### setReference()

Replaces all items in Dot object with a given array as a reference:
```php
$dot->setReference($array);
```



## License

[MIT license](LICENSE.md)