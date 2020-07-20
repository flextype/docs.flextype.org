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

### Operators

<table>
    <thead>
        <tr>
            <th style="width: 160px;">
                Operator
            </th>
            <th>
                Description
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <code>eq</code> <code>=</code>
            </td>
            <td>
                <b>Equal to</b><br><br>

                Filter your collection by checking if your custom attribute (field) has a value that is equal to one of the values provided.<br><br>

                <b>Use-cases:</b><br>
                Get collection that is refered to another in a 1:N relationship or if you want to get collection with a specific value in one of it's fields.
            </td>
        </tr>
        <tr>
            <td>
                <code>neq</code> <code>&lt;&gt;</code> <code>!=</code>
            </td>
            <td>
                <b>Not equal to</b><br><br>

                Filter your collection by checking if your custom attribute (field) does not have a value that is equal to one of the values provided.
            </td>
        </tr>
        <tr>
            <td>
                <code>lt</code> <code>&lt;</code>
            </td>
            <td>
                <b>Lower than</b><br><br>

               Filter your collection by checking if your custom attribute (field) has a value that is lower than one of the values provided.
            </td>
        </tr>
        <tr>
            <td>
                <code>gt</code> <code>&gt;</code>
            </td>
            <td>
                <b>Greater than</b><br><br>

                Filter your collection by checking if your custom attribute (field) has a value that is greater than one of the values provided.
            </td>
        </tr>
        <tr>
            <td>
                <code>lte</code> <code>&lt;=</code>
            </td>
            <td>
                <b>Lower than or equal to</b><br><br>

                Filter your collection by checking if your custom attribute (field) has a value that is lower than or equal to one of the values provided.
            </td>
        </tr>
        <tr>
            <td>
                <code>gt</code> <code>&gt;=</code>
            </td>
            <td>
                <b>Greater than or equal to</b><br><br>

                Filter your collection by checking if your custom attribute (field) has a value that is greater than or equal to one of the values provided.
            </td>
        </tr>
        <tr>
            <td>
                <code>in</code>
            </td>
            <td>
                <b>Included in an array of values</b><br><br>

                Filter your collection by checking if your custom array attribute (field) contains one of the values provided. As soon as one of the provided values separated with, are in the array field, the entry object will be in the response.<br><br>

                <b>Use-cases:</b><br>
                Get all content entries that is refered to others in a N:N relationship or if you want to get all entries with a specific value in one of it's array fields.
            </td>
        </tr>
        <tr>
            <td>
                <code>nin</code>
            </td>
            <td>
                <b>Isn't included in an array of values</b><br><br>

                Filter your entries by checking if your custom array attribute (field) is not contains one of the values provided.<br><br>

                <b>Use-cases:</b><br>
                Get all content collection that is not refered to others in a N:N relationship or if you want to get all entries with a specific value that is not in one of it's array fields.
            </td>
        </tr>
        <tr>
            <td>
                <code>contains</code> <code>like</code>
            </td>
            <td>
                <b>Contains the substring</b><br><br>

                Filter your entries by checking if your custom attribute (field) has a value that is "like" the value provided.
            </td>
        </tr>
        <tr>
            <td>
                <code>member_of</code>
            </td>
            <td>
                <b>Member of</b><br><br>
            </td>
        </tr>
        <tr>
            <td>
                <code>member_of</code>
            </td>
            <td>
                <b>Start with</b><br><br>
            </td>
        </tr>
        <tr>
            <td>
                <code>ends_with</code>
            </td>
            <td>
                <b>Ends with</b><br><br>
            </td>
        </tr>
    </tbody>
</table>

### Public Methods

| Method | Description |
|---|---|
| <a href="#collection"><code>collection()</code></a> | Returns a new `Collection` instance with the items currently in the collection. |
| <a href="#merge"><code>merge()</code></a> | Merges the given array or collection with the original collection. If a string key in the given items matches a string key in the original collection, the given items's value will overwrite the value in the original collection. |
| <a href="#where"><code>`where()`</code></a> | Sets the where expression to evaluate when this Criteria is searched for. |
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

#### Method Details

##### <a name="collection"></a> `collection()`

Returns a new `Collection` instance with the items currently in the collection.

**Examples**

Collect movies

```php
// Fetch movies collections
$movies_collection = $flextype->entries->fetchCollection('movies');

// Create movies collection
$movies = collection($movies_collection);
```

##### <a name="merge"></a> `merge()`

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

##### <a name="where"></a> `where()`

Sets the where expression to evaluate when this Criteria is searched for.

**Examples**

Collect drama movies where field directed_by eq Denis Villeneuve

```php
// Fetch movies drama collection
$drama = $flextype->entries->fetchCollection('movies/drama');

// Create movies drama collection where field directed_by eq Denis Villeneuve
$movies = collection($drama)->where('directed_by', 'eq', 'Denis Villeneuve');
```

Collect drama movies where field stars contains Amy Adams

```php
// Fetch movies drama collection
$drama = $flextype->entries->fetchCollection('movies/drama');

// Create movies drama collection where field stars contains Amy Adams
$movies = collection($drama)->where('stars', 'contains', 'Amy Adams');
```
