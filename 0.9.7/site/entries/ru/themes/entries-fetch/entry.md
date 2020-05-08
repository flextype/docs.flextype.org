---
title: Загрузка записей
---

### Условие

* `eq` or `=` - Equal to
* `neq` or `<>` or `!=` - Not equal to
* `lt` или `<` - Меньше чем
* `gt` или `>` - Больше чем
* `lt` или `<` - Меньше чем
* `gte` или `>=` - Больше или равно
* `in` - Включено в массив значений
* `nin` - Не включен в массив значений
* `contains` or `like` - Contains the substring
* `member_of` - Членство
* `start_with` - Начать с
* `ends_withс` - заканчивается

### where

Задает место выражения.

Пример

Получить записи в блоге, где категория **** равна **велосипедам**

```twig
{% set posts = entries.fetch('blog', {
                                            'where': {
                                                'key': 'category',
                                                'expr': 'eq',
                                                'value': 'bikes'
                                            }
                                        }) %}

{% for post in posts %}
    <h3>{{ post.title }}</h3>
{% endfor %}
```

### and_where

Устанавливает and_where выражение(и).

Пример

Получить сообщения в блоге, где категория **** равна **велосипедам** и где **бренд** равен **GT** и где **цвет** равен **красным**

```twig
{% set posts = entries.fetch('blog', {
                                            'where': {
                                                'key': 'category',
                                                'expr': 'eq',
                                                'value': 'bikes'
                                            },
                                            'and_where': [
                                                {
                                                    'key': 'brand',
                                                    'expr': 'eq',
                                                    'value': 'GT'
                                                },
                                                {
                                                    'key': 'color',
                                                    'expr': 'eq',
                                                    'value': 'red'
                                                }
                                            ]
                                        }) %}

{% for post in posts %}
    <h3>{{ post.title }}</h3>
{% endfor %}
```


### or_where

Задает выражение(и) or_where.

Пример

Получить сообщения в блоге, где **бренд** равен **GT** или где **бренд** равен **Норко** или где **страна** равна **США**

```twig
{% set posts = entries.fetch('blog', {
                                            'where': {
                                                'key': 'brand',
                                                'expr': 'eq',
                                                'value': 'GT'
                                            },
                                            'or_where': [
                                                {
                                                    'key': 'brand',
                                                    'expr': 'eq',
                                                    'value': 'Norco'
                                                },
                                                {
                                                    'key': 'country',
                                                    'expr': 'eq',
                                                    'value': 'USA'
                                                }
                                            ]
                                        }) %}

{% for post in posts %}
    <h3>{{ post.title }}</h3>
{% endfor %}
```

### set_first_result

Пропустить определенное количество записей (особенно полезное для нумерации).

Пример

Получить записи блога и задать первый результат 2

```twig
{% set posts = entries.fetch('blog', {'set_first_result': 2}) %}

{% for post in posts %}
    <h3>{{ post.title }}</h3>
{% endfor %}
```

Результат

```twig
<h3>Lorem ipsum dolor sit amet</h3>
<h3>Cillum dolore eu fugiat nulla pariatur</h3>
<h3>Excepteur sint occaecat cupidatat non proident</h3>
```

### set_max_result

Ограничить размер возвращаемых результатов.

Пример

Получить записи блога и задать первый результат 2

```twig
{% set posts = entries.fetch('blog', {'set_max_result': 2}) %}

{% for post in posts %}
    <h3>{{ post.title }}</h3>
{% endfor %}
```

Результат

```twig
<h3>Ullamco laboris nisi ut aliquip</h3>
<h3>Allamco laboris nisi ut aliquip nisi ut aliquip</h3>
```

### order_by

Сортировать по определенному полю и направлению.


Пример

Получить сообщения блога, заказать по полю **title** и **asc**(по возрастанию)

```twig
{% set posts = entries.fetch('blog', {
                                            'order_by': {
                                                'field': 'title',
                                                'direction': 'asc'
                                            }
                                        }) %}

{% for post in posts %}
    <h3>{{ post.title }}</h3>
{% endfor %}
```

Результат

```twig
<h3>Allamco laboris nisi ut aliquip nisi ut aliquip</h3>
<h3>Cillum dolore eu fugiat nulla pariatur</h3>
<h3>Excepteur sint occaecat cupidatat non proident</h3>
<h3>Lorem ipsum dolor sit amet</h3>
<h3>Ullamco laboris nisi ut aliquip</h3>
```

Пример

Получить сообщения блога, заказать по полю **title** и **asc**(по возрастанию)

```twig
{% set posts = entries.fetch('blog', {
                                            'order_by': {
                                                'field': 'title',
                                                'direction': 'desc'
                                            }
                                        }) %}

{% for post in posts %}
    <h3>{{ post.title }}</h3>
{% endfor %}
```

Результат

```twig
<h3>Ullamco laboris nisi ut aliquip</h3>
<h3>Lorem ipsum dolor sit amet</h3>
<h3>Excepteur sint occaecat cupidatat non proident</h3>
<h3>Cillum dolore eu fugiat nulla pariatur</h3>
<h3>Allamco laboris nisi ut aliquip nisi ut aliquip</h3>
```
