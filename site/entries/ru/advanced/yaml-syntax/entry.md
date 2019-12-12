---
title: Синтаксис YAML
---

YAML (YAML Ain't Markup) является дружественным человеческим языком специализации данных.

Flextype использует YAML, потому что он так близок к простому английскому языку, как специализация данных и конфигурация форматов получить. Он не имеет фигурных скобок, в большинстве случаев позволяет опустить кавычки для строк, а для структуры полагается на отступ, что делает его невероятно читаемым по сравнению с другими языками, такими как JSON и XML.

YAML широко используется в Flextype для конфигурационных файлов, наборов полей, а также в настройках записей.

### Основные правила

Существуют некоторые правила, которые существуют в YAML, чтобы избежать вопросов, связанных с двусмысленностью в отношении различных языков и редактирования программ. Эти правила позволяют последовательно интерпретировать один файл YAML независимо от того, какое приложение или библиотека используется для его интерпретации.

* YAML-файлы должны заканчиваться на .yaml, по возможности в Flextype.
* YAML чувствительна к регистру.
* YAML не позволяет использовать вкладки. Вместо этого используются пробелы, так как вкладки не всегда поддерживаются.

### Тип данных

Значения в парах ключ-значение YAML являются скалярными. Они действуют как скалярные типы в языках Perl, Javascript и Python. Обычно достаточно хорошо заключать строки в кавычки, оставлять цифры без кавычек и позволять парсеру разобраться в них.

Но это только верхушка айсберга. YAML способен на гораздо большее.

#### Пары ключевых слов и словари ключевых значений

Ключевое значение является основным структурным элементом YAML. Каждый пункт в документе YAML является членом хотя бы одного словаря. Ключом всегда является строка. Значение является скалярным и может быть любым типом данных.

Итак, как мы уже видели, значением может быть строка, число или другой словарь.

#### Strings

YAML strings are Unicode. In most situations, you don’t have to specify them in quotes.<br> Any group of characters beginning with an alphabetic or numeric character is a string, unless it belongs to one of the groups below (such as an Integer or Time).


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

* [Официальная документация YAML 1.2](https://yaml.org/spec/1.2/spec.html)
* [Справочная карта YAML](https://yaml.org/refcard.html)
* [YAML Lint](http://www.yamllint.com)
