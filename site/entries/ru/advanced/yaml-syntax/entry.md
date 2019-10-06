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

#### Числовые типы

YAML распознает числовые типы. Мы в идем двоеточие и целые числа ниже. YAML поддерживает несколько других цифровых типов.

```
foo: 12345
bar: 0x12d4
```

#### Строки

YAML строки - это Unicode. В большинстве случаев, вам не нужно указывать их в кавычках.

```
foo: this is a normal string
```

Если мы хотим работать с управляющими последовательностями, нам нужно использовать двойные кавычки.

```
foo: "this is not a normal string\n"
bar: this is not a normal string\n
```

YAML обрабатывает первое значение как заканчивающееся возвратом и подачей строки. Поскольку второе значение не цитируется, YAML рассматривает `\n` как два символа.

YAML will not escape strings with single quotes, but the single quotes do avoid having string contents interpreted as document formatting.

String values can span more than one line. With the fold (greater than) character, you can specify a string in a block. But it’s interpreted without the newlines.

```
foo: >
  this is not a normal string it
  spans more than
  one line
  see?
```

The block (pipe) character has a similar function, but YAML interprets the field exactly as is. So, we see the newlines where they are in the document.

```
foo: |
  this is not a normal string it
  spans more than
  one line
  see?
```


#### Nulls

You enter nulls with a tilde or the unquoted null string literal.

```
foo: ~
bar: null
```

#### Booleans

YAML indicates boolean values with the keywords True, On and Yes for true. False is indicated with False, Off, or No.

```
foo: True
bar: False
light: On
TV: Off
```

#### Arrays

You can specify arrays or lists on a single line.

```
items: [ 1, 2, 3, 4, 5 ]
names: [ "one", "two", "three", "four" ]
```

Or, you can put them on multiple lines.

```
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

```
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

```
foo: { thing1: huey, thing2: louie, thing3: dewey }
```

### Resources and Further Documentation

* [Official YAML 1.2 Documentation](https://yaml.org/spec/1.2/spec.html)
* [YAML Reference Card](https://yaml.org/refcard.html)
* [YAML Lint](http://www.yamllint.com)
