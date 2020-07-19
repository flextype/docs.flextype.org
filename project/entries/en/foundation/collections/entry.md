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
| <a href="#collection"><code>collection()</a> | Returns a new `Collection` instance with the items currently in the collection. |
| <a href="#merge"><code>merge()</a> | Merges the given array or collection with the original collection. If a string key in the given items matches a string key in the original collection, the given items's value will overwrite the value in the original collection. |
| `where()` | Sets the where expression to evaluate when this Criteria is searched for. |
| `andWhere()` | Appends the where expression to evaluate when this Criteria is searched for using an AND with previous expression. |
| `orWhere()` | Appends the where expression to evaluate when this Criteria is searched for using an OR with previous expression. |
| `orderBy()` | Sets the ordering of the result of this Criteria. Keys are field and values are the order, being either ASC or DESC. |
| `setFirstResult()` | Set the number of first result that this Criteria should return. |
| `limit()` | Sets the max results that this Criteria should return. |
| `first()` | Returns the current first result option of this Criteria. |
| `last()` | Returns the current last result option of this Criteria.  |
| `next()` | Returns a single item of result. Moves the internal iterator position to the next element and returns this element. |
| `random()` | Returns one or a specified number of items randomly from the collection. |
| `shuffle()` | Returns randomly shuffles the items in the collection |
| `slice()` | Returns a slice of the collection starting at the given index: |
| `all()` | Returns the underlying array represented by the collection |  

### Method Details

#### <a name="collection"></a> `collection()`

Returns a new `Collection` instance with the items currently in the collection.

**Examples**

Collect movies

```php
// Fetch movies collections
$movies_collection = $flextype->entries->fetchCollection('movies');

// Create movies collection
$movies = collection($movies_collection);
```

#### <a name="merge"></a> `merge()`

Merges the given array or collection with the original collection. If a string key in the given items matches a string key in the original collection, the given items's value will overwrite the value in the original collection

**Examples**

Collect all movies in genres in one movies collection

```php
// Fetch movies: comedy, drama and fantasy
$comedy  = $flextype->entries->fetchCollection('movies/comedy');
$drama   = $flextype->entries->fetchCollection('movies/drama');
$fantasy = $flextype->entries->fetchCollection('movies/fantasy');

// Create movies collection with comedy, drama and fantasy
$movies = collection($comedy)->merge($drama)->merge($fantasy);
```

#### `where()`

Sets the where expression to evaluate when this Criteria is searched for.

**Examples**

Collect drama movies where directed_by eq Denis Villeneuve

```php
// Fetch movies drama collection
$drama = $flextype->entries->fetchCollection('movies/drama');

// Create movies drama collection where directed_by eq Denis Villeneuve
$movies = collection($drama)->where('directed_by', 'eq', 'Denis Villeneuve');
```
