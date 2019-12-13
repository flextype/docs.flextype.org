---
title: YAML Syntax
on_this_page:
  0:
    title: "Basic Rules"
    link: "basic-rules"
  1:
    title: "Collections"
    link: "collections"
  2:
    title: "Inline Collections"
    link: "inline-collections"
  3:
    title: "Datatypes"
    link: "datatypes"
---

YAML (YAML Ain't Markup) is a human friendly data serialization language.

Flextype uses YAML because it's as close to plain English as data serialization and configuration formats get. It has no curly braces, it allows you to omit quotation marks for strings in most cases, and it relies on indentation for structure, which makes it incredibly readable compared to other languages, such as JSON and XML.

YAML is used extensively in Flextype for its configuration files, fieldsets, and also in entries settings.

### <a name="basic-rules"></a> Basic Rules

There are some rules that YAML has in place to avoid issues related to ambiguity in relation to various languages and editing programs. These rules make it possible for a single YAML file to be interpreted consistently, regardless of which application and/or library is being used to interpret it.

* YAML files should end in .yaml whenever possible in Flextype.
* YAML is case sensitive.
* YAML does not allow the use of tabs. Spaces are used instead as tabs are not universally supported.

### <a name="collections"></a> Collections

#### Simple Sequence

You can specify a list in YAML by placing each member of the list on a new line with an opening dash. These lists are called sequences.

```yaml
- apple
- banana
- carrot
```

```php
Array
(
    [0] => apple
    [1] => banana
    [2] => carrot
)
```

#### Nested Sequences

You can include a sequence within another sequence by giving the sequence an empty dash, followed by an indented list.

```yaml
-
 - foo
 - bar
 - baz
```

```php
Array
(
    [0] => Array
        (
            [0] => foo
            [1] => bar
            [2] => baz
        )
)
```

#### Mixed Sequences

Sequences can contain any YAML data, including strings and other sequences.

```yaml
- apple
-
 - foo
 - bar
 - x123
- banana
- carrot
```

```php
Array
(
    [0] => apple
    [1] => Array
        (
            [0] => foo
            [1] => bar
            [2] => x123
        )
    [2] => banana
    [3] => carrot
)
```

#### Deeply Nested Sequences

Sequences can be nested even deeper, with each level of indentation representing a level of depth.

```yaml
-
 -
  - uno
  - dos
```

```php
Array
(
    [0] => Array
        (
            [0] => Array
                (
                    [0] => uno
                    [1] => dos
                )
        )
)
```

#### Simple Mapping

You can add a keyed list (also known as a dictionary or hash) to your document by placing each member of the list on a new line, with a colon seperating the key from its value. In YAML, this type of list is called a mapping.

```yaml
Array
(
    [foo] => whatever
    [bar] => stuff
)
```

#### Sequence in a Mapping

A value in a mapping can be a sequence.

```yaml
foo: whatever
bar:
 - uno
 - dos
```

```php
Array
(
    [foo] => whatever
    [bar] => Array
        (
            [0] => uno
            [1] => dos
        )
)
````

#### Nested Mappings

A value in a mapping can be another mapping.

```yaml
foo: whatever
bar:
 fruit: apple
 name: steve
 sport: baseball
```

```php
Array
(
    [foo] => whatever
    [bar] => Array
        (
            [fruit] => apple
            [name] => steve
            [sport] => baseball
        )
)
```

#### Mixed Mapping

A mapping can contain any assortment of mappings and sequences as values.

```yaml
foo: whatever
bar:
 -
   fruit: apple
   name: steve
   sport: baseball
 - more
 -
   python: rocks
   perl: papers
   ruby: scissorses
```

```php
Array
(
    [foo] => whatever
    [bar] => Array
        (
            [0] => Array
                (
                    [fruit] => apple
                    [name] => steve
                    [sport] => baseball
                )
            [1] => more
            [2] => Array
                (
                    [python] => rocks
                    [perl] => papers
                    [ruby] => scissorses
                )
        )
)
```

#### Mapping-in-Sequence Shortcut

If you are adding a mapping to a sequence, you can place the mapping on the same line as the dash as a shortcut.

```yaml
- work_on_YAML:
   - work on Store
```

```php
Array
(
    [0] => Array
        (
            [work_on_YAML] => Array
                (
                    [0] => work on Store
                )
        )
)
```

#### Sequence-in-Mapping Shortcut

The dash in a sequence counts as indentation, so you can add a sequence inside of a mapping without needing spaces as indentation.

```yaml
allow:
- 'localhost'
- '%.sourceforge.net'
- '%.freepan.org'
```

```php
Array
(
    [allow] => Array
        (
            [0] => localhost
            [1] => %.sourceforge.net
            [2] => %.freepan.org
        )
)
```

#### Merge key

A merge key `<<` can be used in a mapping to insert other mappings. If the value associated with the merge key is a mapping, each of its key/value pairs is inserted into the current mapping.

```yaml
mapping:
  name: Joe
  job: Accountant
  <<:
    age: 38
```

### <a name="inline-collections"></a> Inline Collections

#### Simple Inline Array

Sequences can be contained on a single line, using the inline syntax. Separate each entry with commas and enclose in square brackets.

```yaml
seq: [ a, b, c ]
```

```php
Array
(
    [seq] => Array
        (
            [0] => a
            [1] => b
            [2] => c
        )
)
```

#### Simple Inline Hash

Mapping can also be contained on a single line, using the inline syntax. Each key-value pair is separated by a colon, with a comma between each entry in the mapping. Enclose with curly braces.

```yaml
hash: { name: Steve, foo: bar }
```

```php
Array
(
    [hash] => Array
        (
            [name] => Steve
            [foo] => bar
        )
)
```

#### Multi-line Inline Collections

Both inline sequences and inline mappings can span multiple lines, provided that you indent the additional lines.

```yaml
languages: [ Ruby,
             Perl,
             Python ]
websites: { YAML: yaml.org,
            Ruby: ruby-lang.org,
            Python: python.org,
            Perl: use.perl.org }
```


```php
Array
(
    [languages] => Array
        (
            [0] => Ruby
            [1] => Perl
            [2] => Python
        )
    [websites] => Array
        (
            [YAML] => yaml.org
            [Ruby] => ruby-lang.org
            [Python] => python.org
            [Perl] => use.perl.org
        )
)
```

### <a name="datatypes"></a> Datatypes

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

```php
Array
(
    [foo] => this is a normal string
)
```

If we want escape sequences handled, we need to use double quotes.

```yaml
foo: "this is not a normal string\n"
bar: this is not a normal string\n
```

```php
Array
(
    [foo] => this is not a normal string

    [bar] => this is not a normal string\n
)
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

```php
Array
(
    [foo] => this is not a normal string it spans more than one line see?
)
```

The block (pipe) character has a similar function, but YAML interprets the field exactly as is. So, we see the newlines where they are in the document.

```yaml
foo: |
  this is not a normal string it
  spans more than
  one line
  see?
```

```php
Array
(
    [foo] => this is not a normal string it
spans more than
one line
see?

)
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

```php
Array
(
    [zero] => 0
    [simple] => 12
    [one_thousand] => 1,000
    [negative_one_thousand] => -1,000
    [universe] => 25
    [answer] => 42
)
```

##### Integers as Map Keys

An integer can be used a dictionary key.

```yaml
1: one
2: two
3: three
```

```php
Array
(
    [1] => one
    [2] => two
    [3] => three
)
```

#### Floats

Floats are represented by numbers with decimals, allowing for scientific notation, as well as positive and negative infinity and "not a number."

```yaml
a_simple_float: 2.00
larger_float: 1,000.09
scientific_notation: 1.00009e+3
```

```php
Array
(
    [a_simple_float] => 2
    [larger_float] => 1,000.09
    [scientific_notation] => 1000.09
)
```

#### Time

You can represent timestamps by using ISO8601 format, or a variation which allows spaces between the date, time and time zone.

```yaml
iso8601: 2001-12-14t21:59:43.10-05:00
space_seperated: 2001-12-14 21:59:43.10 -05:00
```

```php
Array
(
    [iso8601] => 1008385183
    [space_seperated] => 1008385183
)
```

#### Date

A date can be represented by its year, month and day in ISO8601 order.

```yaml
date: 1976-07-31
```

```php
Array
(
    [date] => 207619200
)
```

#### Nulls

You enter nulls with a tilde or the unquoted null string literal.

```yaml
foo: ~
bar: null
```

```php
Array
(
    [foo] =>
    [bar] =>
)
```

#### Booleans

YAML indicates boolean values with the keywords `true`. False is indicated with `false`.

```yaml
foo: true
bar: false
```

```php
Array
(
    [foo] => 1
    [bar] =>
)
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

### Resources and Further Documentation

* [Official YAML 1.2 Documentation](https://yaml.org/spec/1.2/spec.html)
* [YAML Reference Card](https://yaml.org/refcard.html)
* [YAML Lint](http://www.yamllint.com)
