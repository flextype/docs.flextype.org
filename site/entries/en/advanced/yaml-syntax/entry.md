---
title: YAML Syntax
---

YAML (YAML Ain't Markup) is a human friendly data serialization language.

Flextype uses YAML because it's as close to plain English as data serialization and configuration formats get. It has no curly braces, it allows you to omit quotation marks for strings in most cases, and it relies on indentation for structure, which makes it incredibly readable compared to other languages, such as JSON and XML.

YAML is used extensively in Flextype for its configuration files, fieldsets, and also in entries settings.

### Basic Rules

There are some rules that YAML has in place to avoid issues related to ambiguity in relation to various languages and editing programs. These rules make it possible for a single YAML file to be interpreted consistently, regardless of which application and/or library is being used to interpret it.

* YAML files should end in .yaml whenever possible in Flextype.
* YAML is case sensitive.
* YAML does not allow the use of tabs. Spaces are used instead as tabs are not universally supported.

### Datatypes

Values in YAML’s key-value pairs are scalar. They act like the scalar types in languages like Perl, Javascript, and Python. It’s usually good enough to enclose strings in quotes, leave numbers unquoted, and let the parser figure it out.

But that’s only the tip of the iceberg. YAML is capable of a great deal more.

#### Key-Value Pairs and Dictionaries

The key-value is YAML’s basic building block. Every item in a YAML document is a member of at least one dictionary. The key is always a string. The value is a scalar so that it can be any datatype.

So, as we’ve already seen, the value can be a string, a number, or another dictionary.

#### Strings

YAML strings are Unicode. In most situations, you don’t have to specify them in quotes.<br>
Any group of characters beginning with an alphabetic or numeric character is a string, unless it belongs to one of the groups below (such as an Integer or Time).


```yaml
foo: this is a normal string
```

If we want escape sequences handled, we need to use double quotes.

```yaml
foo: "this is not a normal string\n"
bar: this is not a normal string\n
```

YAML processes the first value as ending with a carriage return and linefeed. Since the second value is not quoted, YAML treats the `\n` as two characters.

YAML will not escape strings with single quotes, but the single quotes do avoid having string contents interpreted as document formatting.

String values can span more than one line. With the fold (greater than) character, you can specify a string in a block. But it’s interpreted without the newlines.

```yaml
foo: >
  this is not a normal string it
  spans more than
  one line
  see?
```

The block (pipe) character has a similar function, but YAML interprets the field exactly as is. So, we see the newlines where they are in the document.

```yaml
foo: |
  this is not a normal string it
  spans more than
  one line
  see?
```

##### Forcing Strings

Any YAML type can be forced into a string using the explicit `!str` method.

```yaml
date string: !str 2001-08-01
number string: !str 192
```

#### Integers

An integer is a series of numbers, optionally starting with a positive or negative sign. Integers may also contain commas for readability.

```yaml
zero: 0
simple: 12
one_thousand: 1,000
negative_one_thousand: -1,000
universe: 25
answer: 42
```

##### Integers as Map Keys

An integer can be used a dictionary key.

```yaml
1: one
2: two
3: three
```

#### Floats

Floats are represented by numbers with decimals, allowing for scientific notation, as well as positive and negative infinity and "not a number."

```yaml
a_simple_float: 2.00
larger_float: 1,000.09
scientific_notation: 1.00009e+3
```

#### Time

You can represent timestamps by using ISO8601 format, or a variation which allows spaces between the date, time and time zone.

```yaml
iso8601: 2001-12-14t21:59:43.10-05:00
space seperated: 2001-12-14 21:59:43.10 -05:00
```

#### Date

A date can be represented by its year, month and day in ISO8601 order.

```yaml
date: 1976-07-31
```

#### Nulls

You enter nulls with a tilde or the unquoted null string literal.

```yaml
foo: ~
bar: null
```

#### Booleans

YAML indicates boolean values with the keywords `true`. False is indicated with `false`.

```yaml
foo: true
bar: false
```

#### Arrays

You can specify arrays or lists on a single line.

```yaml
items: [ 1, 2, 3, 4, 5 ]
names: [ "one", "two", "three", "four" ]
```

Or, you can put them on multiple lines.

```yaml
items:
  - 1
  - 2
  - 3
  - 4
  - 5
names:
  - "one"
  - "two"
  - "three"
  - "four"
```

The multiple line format is useful for lists that contain complex objects instead of scalars.

```yaml
items:
  - things:
      thing1: huey
      things2: dewey
      thing3: louie
  - other things:
      key: value
```

An array can contain any valid YAML value. The values in a list do not have to be the same type.

#### Dictionaries

We covered dictionaries above, but there’s more to them.

Like arrays, you can put dictionaries inline. We saw this format above. It’s how python prints dictionaries.

```yaml
foo: { thing1: huey, thing2: louie, thing3: dewey }
```

### Merge key

A merge key `<<` can be used in a mapping to insert other mappings. If the value associated with the merge key is a mapping, each of its key/value pairs is inserted into the current mapping.

```yaml
mapping:
  name: Joe
  job: Accountant
  <<:
    age: 38
```

### Resources and Further Documentation

* [Official YAML 1.2 Documentation](https://yaml.org/spec/1.2/spec.html)
* [YAML Reference Card](https://yaml.org/refcard.html)
* [YAML Lint](http://www.yamllint.com)
