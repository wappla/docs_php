# ![Logo](assets/signature.png) Wappla PHP

- [Dotfiles](#dotfiles)

## Dotfiles

Predefined dotfiles used for standard configuration. Can be added on per-project basis and adjusted accordingly.

### PHP CS FIXER

Based on [php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
Tool for automatically fix PHP coding standard issues.

[Config file quick start](https://github.com/dotfiles/.php_cs)

# PHP Style Guide & Best practices

- [General PHP Rules](#general-php-rules)
- [Coding practices](#coding-practices)
- [Laravel Best practices](#laravel-best-practices)

## General PHP Rules

### PSR standards

We basically follow the coding style related [PSR standards](http://www.php-fig.org/psr/) issued by the PHP Framework Interoperability Group:

* [PSR-1: Basic Coding Standard](http://www.php-fig.org/psr/psr-1/)
* [PSR-2: Coding Style Guide](http://www.php-fig.org/psr/psr-2/)

### Differences from PSR

### Short array syntax

```php
// bad
array('test', 'array');

// good
['test', 'array'];
```

#### Spaces around concatenation

The string concatenation operator MUST be preceded and followed by a space.

```php
// bad
$string = 'Hello '.$name;

// good
$string = 'Hello ' . $name;
```

#### Naming

About the names of identifiers like classes, functions, methods, variables:

* A name SHOULD be descriptive, distinctive, precise and readable.
* A name SHOULD NOT be abbreviated.
* A name SHOULD NOT be pre- or postfixed with Interface, Trait or Abstract.

Abbreviation exceptions :

- The `id` field
- Abbreviations common in the **domain** such as `VAT`

A long name is not a problem, since our IDE has auto completion.

#### Inter-line alignment

Consecutive assignments or declarations SHOULD NOT be aligned. Adding one item may require you to re-align the other items, resulting in unnecessary changes in your commit.

```php
// bad
$short        = 1;
$veryLongItem = 2;

// good
$short = 1;
$veryLongItem = 2;
```

### Docblocks

Every property and method MUST be preceded by a DocBlock comment.

Property DocBlocks:

* It MUST contain a @var tag indicating the type of the property.
* It MAY contain documentation about the property.

Method DocBlocks:

* It MUST contain `@param` tags for every parameter of the method.
* It MUST contain a `@return` tag if the method returns something.
* It SHOULD contain a `@throws` tag if the method throws an Exception.
* It MAY contain documentation about the method.

The description should provide more context than the method signature itself. Use full sentences for descriptions, including a period at the end.

Use a dockblocker plugin from your favorite editor to automate this process.

```php
/**
* Search the Unsplash api for images.
* Should provide the search query and has optional pagination parameters.
*
* @param $query
* @param int $page
* @param int $perPage
*
* @throws \Exception
*
* @return MediaSourceItemCollection
*/
public function search($query, int $page = 1, int $perPage = 10)
```

### Comments

Comments should be avoided as much as possible by writing expressive code. If you do need to use a comment format it like this:

```php
// There should be space before a single line comment.

/*
 * If you need to explain a lot you can use a comment block. Notice the
 * single * on the first line. Comment blocks don't need to be three
 * lines long or three characters shorter than the previous line.
 */
```

## Coding practices
### Be strict

PHP is a dynamically typed language. Careless [type juggling](http://php.net/manual/en/language.types.type-juggling.php) can lead to unpredictable code behaviour and hard-to-find bugs.

Be as strict as possible:

* Use type hints
* Use strict comparisons (=== and !==)
* Use value objects that check their arguments
* Use constants for values that are used more than once

### Optimize for code completion

If your editor can complete your code, you'll likely make less mistakes. And your editor can refactor your code later on.

* Use constants instead of string values
* Use value objects instead of associative arrays
* Use exceptions instead of return types

### Optimize for readability

You write code only once, but it is read (and changed) many times. Write your code so that other developers can easily understand it.

Quoting Martin Fowler:

> Any fool can write code that a computer can understand.<br />
> Good programmers write code that humans can understand.

* Prefer simple solutions over complex solutions. No over-engineering. No premature optimization. No premature abstraction.
* Be consistent in approach, naming and structure with the rest of the codebase. Do not reinvent the wheel.
* Write documentation explaining why the code exists, not what it does. Don't state the obvious.
* Use [object calisthenics](http://williamdurand.fr/2013/06/03/object-calisthenics/).

Not only on the scale of a method should your code be readable. Let the methods of a class tell the story of the class.

### Minimize the impact of change

Bad code is hard to change, unstable, fragile and non-reusable. A small change can have unexpected
and undetected effects anywhere.

Design your code to minimize the ripple effect of a change.

The [SOLID](https://en.wikipedia.org/wiki/SOLID_(object-oriented_design)) principles help to achieve this on
the level of classes; The lesser known [RCC ASS principles](http://butunclebob.com/ArticleS.UncleBob.PrinciplesOfOod)
do the same for packages, components or even entire systems.

### No assumptions

Do not assume that:

* input will be sane
* all users are benevolent
* other developers don't make mistakes
* external services are always available and don't change

Don't ignore errors, edge cases or faulty input. If something is really wrong, stop immediately with a descriptive and distinctive error.

## Laravel Best practices

Laravel provides the most value when you write things the way Laravel intended you to write it. If there's a documented way to achieve something, follow it. Whenever you do something differently, make sure you have a justification for *why* you didn't follow the defaults.

