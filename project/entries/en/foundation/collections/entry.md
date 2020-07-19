---
title: Collections
description:
breadcrumbs:
  0:
    title: "Documentation"
    link: "[url]/en/"
  1:
    title: "Foundation"
    link: "[url]/en/foundation/"
---

### Public Methods

| Method | Description |
|---|---|
| `collection()` | The `collection` method returns a new `Collection` instance with the items currently in the collection |
| `merge()` | The `merge` method merges the given array or collection with the original collection. If a string key in the given items matches a string key in the original collection, the given items's value will overwrite the value in the original collection |
| `where()` | Sets the where expression to evaluate when this Criteria is searched for. |
| `andWhere()` |  |
| `orWhere()` |  |
| `orderBy()` |  |
| `setFirstResult()` |  |
| `limit()` |  |
| `first()` |  |
| `last()` |  |
| `next()` |  |
| `random()` |  |
| `shuffle()` |  |
| `slice()` |  |
| `all()` |  |  

### Method Details

#### `collect()`

The `collect` method returns a new `Collection` instance with the items currently in the collection

**Examples**

Collect movies

```php
$movies_collection = $flextype->entries->fetchCollection('movies');

$movies = collect($movies_collection);
```

#### `merge()`

The `merge` method merges the given array or collection with the original collection. If a string key in the given items matches a string key in the original collection, the given items's value will overwrite the value in the original collection

**Examples**

Collect all movies in genres in one movies collection

```php
$comedy  = $flextype->entries->fetchCollection('movies/comedy');
$drama   = $flextype->entries->fetchCollection('movies/drama');
$fantasy = $flextype->entries->fetchCollection('movies/fantasy');

$movies = collect($comedy)->merge($drama)->merge($fantasy);
```

#### `where()`

Sets the where expression to evaluate when this Criteria is searched for.

**Examples**

Collect drama movies where directed_by eq Denis Villeneuve

```php
$drama = $flextype->entries->fetchCollection('movies/drama');

$movies = collect($drama)->where('directed_by', 'eq', 'Denis Villeneuve');
```
