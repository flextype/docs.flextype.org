---
title: Collections
description:
breadcrumbs:
  -
    title: "Core Concepts"
    link: "[url]/en/core/"
on_this_page:
  -
    title: "Operators"
    link: "operators"
  -
    title: "Methods"
    link: "methods"
---

Flextype provide a powerful functionality to work with data collections. You may use it for collecting specific data by specific criterias. For e.g. collect specific blog posts or movies or series and etc..

### <a name="operators"></a> Operators

<div class="table">
    <table>
        <thead>
            <tr>
                <th style="width: 190px;">
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
                    eq =
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
                    neq &lt;&gt; !=
                </td>
                <td>
                    <b>Not equal to</b><br><br>

                    Filter your collection by checking if your custom attribute (field) does not have a value that is equal to one of the values provided.
                </td>
            </tr>
            <tr>
                <td>
                    lt &lt;
                </td>
                <td>
                    <b>Lower than</b><br><br>

                   Filter your collection by checking if your custom attribute (field) has a value that is lower than one of the values provided.
                </td>
            </tr>
            <tr>
                <td>
                    gt &gt;
                </td>
                <td>
                    <b>Greater than</b><br><br>

                    Filter your collection by checking if your custom attribute (field) has a value that is greater than one of the values provided.
                </td>
            </tr>
            <tr>
                <td>
                    lte &lt;=
                </td>
                <td>
                    <b>Lower than or equal to</b><br><br>

                    Filter your collection by checking if your custom attribute (field) has a value that is lower than or equal to one of the values provided.
                </td>
            </tr>
            <tr>
                <td>
                    gt &gt;=
                </td>
                <td>
                    <b>Greater than or equal to</b><br><br>

                    Filter your collection by checking if your custom attribute (field) has a value that is greater than or equal to one of the values provided.
                </td>
            </tr>
            <tr>
                <td>
                    in
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
                    nin
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
                    contains like
                </td>
                <td>
                    <b>Contains the substring</b><br><br>

                    Filter your entries by checking if your custom attribute (field) has a value that is "like" the value provided.
                </td>
            </tr>
            <tr>
                <td>
                    member_of
                </td>
                <td>
                    <b>Member of</b><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    starts_with
                </td>
                <td>
                    <b>Starts with</b><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    ends_with
                </td>
                <td>
                    <b>Ends with</b><br><br>
                </td>
            </tr>
        </tbody>
    </table>
</div>

### <a name="methods"></a> Methods

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#collection">collect()</a></td>
                <td>Returns a new Collection instance with the items currently in the collection.</td>
            </tr>
            <tr>
                <td><a href="#merge">merge()</a></td>
                <td>Merges the given array or collection with the original collection. If a string key in the given items matches a string key in the original collection, the given items's value will overwrite the value in the original collection.</td>
            </tr>
            <tr>
                <td><a href="#where">where()</a></td>
                <td>Sets the where expression to evaluate when this Criteria is searched for.</td>
            </tr>
            <tr>
                <td><a href="#and-where">andWhere()</a></td>
                <td>Appends the where expression to evaluate when this Criteria is searched for using an AND with previous expression.</td>
            </tr>
            <tr>
                <td><a href="#or-where">orWhere()</a></td>
                <td>Appends the where expression to evaluate when this Criteria is searched for using an OR with previous expression.</td>
            </tr>
            <tr>
                <td><a href="#order-by">orderBy()</a></td>
                <td>Sets the ordering of the result of this Criteria. Keys are field and values are the order, being either ASC or DESC.</td>
            </tr>
            <tr>
                <td><a href="#set-first-result">setFirstResult()</a></td>
                <td>Set the number of first result that this Criteria should return.</td>
            </tr>
            <tr>
                <td><a href="#limit">limit()</a></td>
                <td>Sets the max results that this Criteria should return.</td>
            </tr>
            <tr>
                <td><a href="#first">first()</a></td>
                <td>Returns the current first result option of this Criteria.</td>
            </tr>
            <tr>
                <td><a href="#last">last()</a></td>
                <td>Returns the current last result option of this Criteria.</td>
            </tr>
            <tr>
                <td><a href="#next">next()</a></td>
                <td>Returns a single item of result. Moves the internal iterator position to the next element and returns this element.</td>
            </tr>
            <tr>
                <td><a href="#random">random()</a></td>
                <td>Returns one or a specified number of items randomly from the collection.</td>
            </tr>
            <tr>
                <td><a href="#shuffle">shuffle()</a></td>
                <td>Returns randomly shuffles the items in the collection.</td>
            </tr>
            <tr>
                <td><a href="#slice">slice()</a></td>
                <td>Returns a slice of the collection by defining length of elements and starting position offset.<br><br>If length is null it returns all elements from offset to the end of the Collection. Keys have to be preserved by this method. Calling this method will only return the selected slice and NOT change the elements contained in the collection slice is called on.</td>
            </tr>
            <tr>
                <td><a href="#count">count()</a></td>
                <td>If you want to know how many items match your Criteria, you can call count().</td>
            </tr>
            <tr>
                <td><a href="#exists">exists()</a></td>
                <td>If you just need to check if any item exist in the collection that match the Criteria, you can call exists(), which will return either true or false.</td>
            </tr>
            <tr>
                <td><a href="#all">all()</a></td>
                <td>Returns the underlying array represented by the collection.</td>
            </tr>
            <tr>
                <td><a href="#collect-filter">collect_filter()</a></td>
                <td>Apply filters to the array items with help of parameters array.</td>
            </tr>
        </tbody>
    </table>
</div>

### Methods Details

##### <a name="collection"></a> `collect()`

Returns a new `Collection` instance with the items currently in the collection.

**Examples**

Collect movies

```php
// Fetch movies collections
$movies_collection = flextype('entries')->fetchCollection('movies');

// Create movies collection
$movies = collect($movies_collection);
```

##### <a name="merge"></a> `merge()`

Merges the given array or collection with the original collection. If a string key in the given items matches a string key in the original collection, the given items's value will overwrite the value in the original collection

**Examples**

Collect all movies in genres in one movies collection

```php
// Fetch movies: comedy, drama and fantasy
$comedy  = flextype('entries')->fetchCollection('movies/comedy');
$drama   = flextype('entries')->fetchCollection('movies/drama');
$fantasy = flextype('entries')->fetchCollection('movies/fantasy');

// Create movies collection with comedy, drama and fantasy
$movies = collect($comedy)->merge($drama)->merge($fantasy);
```

##### <a name="where"></a> `where()`

Sets the where expression to evaluate when this Criteria is searched for.

**Examples**

Collect drama movies where field directed_by eq Denis Villeneuve

```php
// Fetch movies drama collection
$drama = flextype('entries')->fetchCollection('movies/drama');

// Create movies drama collection where field directed_by eq Denis Villeneuve
$movies = collect($drama)->where('directed_by', 'eq', 'Denis Villeneuve');
```

Collect drama movies where field stars contains Amy Adams

```php
// Fetch movies drama collection
$drama = flextype('entries')->fetchCollection('movies/drama');

// Create movies drama collection where field stars contains Amy Adams
$movies = collect($drama)->where('stars', 'contains', 'Amy Adams');
```

##### <a name="and-where"></a> `andWhere()`

Appends the where expression to evaluate when this Criteria is searched for using an AND with previous expression.

**Examples**

Collect drama movies where field directed_by eq Denis Villeneuve and where field year eq 2020

```php
// Fetch movies drama collection
$drama = flextype('entries')->fetchCollection('movies/drama');

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
// and where field year eq 2020
$movies = collect($drama)
            ->where('directed_by', 'eq', 'Denis Villeneuve')
            ->andWhere('year', 'eq', 2020);
```

Collect drama movies where field directed_by eq Denis Villeneuve and where field year eq 2020 and where field stars contains Amy Adams

```php
// Fetch movies drama collection
$drama = flextype('entries')->fetchCollection('movies/drama');

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
// and where field year eq 2020
// and where field stars contains Amy Adams
$movies = collect($drama)
            ->where('directed_by', 'eq', 'Denis Villeneuve')
            ->andWhere('year', 'eq', 2020);
            ->andWhere('stars', 'contains', 'Amy Adams');
```

##### <a name="or-where"></a> `orWhere()`

Appends the where expression to evaluate when this Criteria is searched for using an OR with previous expression.

**Examples**

Collect drama movies where field directed_by eq Denis Villeneuve and where field year eq 2020 or where year eq 2019

```php
// Fetch movies drama collection
$drama = flextype('entries')->fetchCollection('movies/drama');

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
// and where field year eq 2020
// or where field year eq 2019
$movies = collect($drama)
            ->where('directed_by', 'eq', 'Denis Villeneuve')
            ->andWhere('year', 'eq', 2020);
            ->orWhere('year', 'eq', 2019);
```

##### <a name="order-by"></a> `orderBy()`

Sets the ordering of the result of this Criteria. Keys are field and values are the order, being either ASC or DESC.

**Examples**

Collect drama movies where field directed_by eq Denis Villeneuve and order by year ASC.

```php
// Fetch movies drama collection
$drama = flextype('entries')->fetchCollection('movies/drama');

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
// and order by year ASC
$movies = collect($drama)
            ->where('directed_by', 'eq', 'Denis Villeneuve')
            ->orderBy('year', 'ASC');
```

Collect drama movies where field directed_by eq Denis Villeneuve and order by year DESC.

```php
// Fetch movies drama collection
$drama = flextype('entries')->fetchCollection('movies/drama');

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
// and order by year DESC
$movies = collect($drama)
            ->where('directed_by', 'eq', 'Denis Villeneuve')
            ->orderBy('year', 'DESC');
```

##### <a name="set-first-result"></a> `setFirstResult()`

Set the number of first result that this Criteria should return.

**Examples**

Collect drama movies where field directed_by eq Denis Villeneuve and set first result 5.

```php
// Fetch movies drama collection
$drama = flextype('entries')->fetchCollection('movies/drama');

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
// and set first result 5
$movies = collect($drama)
            ->where('directed_by', 'eq', 'Denis Villeneuve')
            ->setFirstResult(5);
```

##### <a name="limit"></a> `limit()`

Sets the max results that this Criteria should return.

**Examples**

Collect drama movies where field directed_by eq Denis Villeneuve and set limit 10.

```php
// Fetch movies drama collection
$drama = flextype('entries')->fetchCollection('movies/drama');

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
// and set limit 10
$movies = collect($drama)
            ->where('directed_by', 'eq', 'Denis Villeneuve')
            ->limit(10);
```

##### <a name="first"></a> `first()`

Returns the current first result option of this Criteria.

**Examples**

Collect drama movies where field directed_by eq Denis Villeneuve and return first option of this Criteria.

```php
// Fetch movies drama collection
$drama = flextype('entries')->fetchCollection('movies/drama');

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
$movies = collect($drama)
            ->where('directed_by', 'eq', 'Denis Villeneuve')

$result = $movies->first();
```

##### <a name="last"></a> `last()`

Returns the current last result option of this Criteria.

**Examples**

Collect drama movies where field directed_by eq Denis Villeneuve and return last option of this Criteria.

```php
// Fetch movies drama collection
$drama = flextype('entries')->fetchCollection('movies/drama');

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
$movies = collect($drama)
            ->where('directed_by', 'eq', 'Denis Villeneuve')

$result = $movies->last();
```

##### <a name="next"></a> `next()`

Returns a single item of result. Moves the internal iterator position to the next element and returns this element.

**Examples**

Collect drama movies where field directed_by eq Denis Villeneuve and moves the internal iterator position to the next element and returns this element.

```php
// Fetch movies drama collection
$drama = flextype('entries')->fetchCollection('movies/drama');

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
$movies = collect($drama)
            ->where('directed_by', 'eq', 'Denis Villeneuve')

$result = $movies->next();
```

##### <a name="random"></a> `random()`

Returns one or a specified number of items randomly from the collection.

**Examples**

Collect drama movies where field directed_by eq Denis Villeneuve and return 3 random items.

```php
// Fetch movies drama collection
$drama = flextype('entries')->fetchCollection('movies/drama');

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
$movies = collect($drama)
            ->where('directed_by', 'eq', 'Denis Villeneuve')

$result = $movies->random(3);
```

##### <a name="shuffle"></a> `shuffle()`

Returns randomly shuffles the items in the collection.

**Examples**

Collect drama movies where field directed_by eq Denis Villeneuve, shuffle the items and return them all.

```php
// Fetch movies drama collection
$drama = flextype('entries')->fetchCollection('movies/drama');

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
$movies = collect($drama)
            ->where('directed_by', 'eq', 'Denis Villeneuve')

$result = $movies->shuffle();
```

##### <a name="slice"></a> `slice()`

Returns a slice of the collection by defining `length` of elements and starting position `offset`.<br><br>If `length` is null it returns all elements from `offset` to the end of the Collection. Keys have to be preserved by this method. Calling this method will only return the selected slice and NOT change the elements contained in the collection slice is called on.

**Examples**

Collect drama movies where field directed_by eq Denis Villeneuve, and set offset 0 and length 5

```php
// Fetch movies drama collection
$drama = flextype('entries')->fetchCollection('movies/drama');

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
$movies = collect($drama)
            ->where('directed_by', 'eq', 'Denis Villeneuve')

$result = $movies->slice(0, 5);
```

##### <a name="count"></a> `count()`

If you want to know how many items match your Criteria, you can call `count()`.

**Examples**

Count all drama movies where field directed_by eq Denis Villeneuve.

```php
// Fetch movies drama collection
$drama = flextype('entries')->fetchCollection('movies/drama');

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
$movies = collect($drama)
            ->where('directed_by', 'eq', 'Denis Villeneuve')

$result = $movies->count();
```

##### <a name="exists"></a> `exists()`

If you just need to check if any item exist in the collection that match the Criteria, you can call `exists()`, which will return either `true` or `false`.

**Examples**

Check if any drama movies where field directed_by eq Denis Villeneuve are exists.

```php
// Fetch movies drama collection
$drama = flextype('entries')->fetchCollection('movies/drama');

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
$movies = collect($drama)
            ->where('directed_by', 'eq', 'Denis Villeneuve')

$result = $movies->exists();

if ($result) {
    // do something...
}
```

##### <a name="all"></a> `all()`

Returns the underlying array represented by the collection.

**Examples**

Collect all drama movies where field directed_by eq Denis Villeneuve

```php
// Fetch movies drama collection
$drama = flextype('entries')->fetchCollection('movies/drama');

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
$movies = collect($drama)
            ->where('directed_by', 'eq', 'Denis Villeneuve')

$result = $movies->all();
```


##### <a name="collect-filter"></a> `collect_filter()`

Apply filters to the array items with help of parameters array.

**Examples**

```php
// Fetch movies drama collection
$drama = flextype('entries')->fetchCollection('movies/drama');

// Create movies drama collection where field directed_by eq Denis Villeneuve
$movies = collect_filter($drama, [
                                    'where' => [
                                        'key' => 'directed_by',
                                        'expr' => 'eq',
                                        'value' => 'Denis Villeneuve'
                                  ]
                              ]);

// Create movies drama collection where field stars contains Amy Adams
$movies = collect_filter($drama, [
                                    'where' => [
                                        'key' => 'directed_by',
                                        'expr' => 'contains',
                                        'value' => 'Amy Adams'
                                    ]
                                ]);

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
// and where field year eq 2020
$movies = collect_filter($drama, [
                                        'where' => [
                                            'key' => 'directed_by',
                                            'expr' => 'eq',
                                            'value' => 'Denis Villeneuve'
                                        ],
                                        'and_where' => [
                                            [
                                                'key' => 'year',
                                                'expr' => 'eq',
                                                'value' => 2020
                                            ]
                                        ]
                                    ]);

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
// and where field year eq 2020
// and where field stars contains Amy Adams
$movies = collect_filter($drama, [
                                        'where' => [
                                            'key' => 'directed_by',
                                            'expr' => 'eq',
                                            'value' => 'Denis Villeneuve'
                                        ],
                                        'and_where' => [
                                            [
                                                'key' => 'year',
                                                'expr' => 'eq',
                                                'value' => 2020
                                            ]
                                        ],
                                        'and_where' => [
                                            [
                                                'key' => 'stars',
                                                'expr' => 'contains',
                                                'value' => 'Amy Adams'
                                            ]
                                        ]
                                    ]);

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
// and where field year eq 2020
// or where field year eq 2019
$movies = collect_filter($drama, [
                                        'where' => [
                                            'key' => 'directed_by',
                                            'expr' => 'eq',
                                            'value' => 'Denis Villeneuve'
                                        ],
                                        'and_where' => [
                                            [
                                                'key' => 'year',
                                                'expr' => 'eq',
                                                'value' => 2020
                                            ]
                                        ],
                                        'or_where' => [
                                            [
                                                'key' => 'year',
                                                'expr' => 'eq',
                                                'value' => 2019
                                            ]
                                        ]
                                    ]);

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
// and order by year ASC
$movies = collect_filter($drama, [
                                        'where' => [
                                            'key' => 'directed_by',
                                            'expr' => 'eq',
                                            'value' => 'Denis Villeneuve'
                                        ],
                                        'order_by' => [
                                            'field' => 'year',
                                            'direction' => 'ASC'
                                        ]
                                    ]);

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
// and set first result 5
$movies = collect_filter($drama, [
                                        'where' => [
                                            'key' => 'directed_by',
                                            'expr' => 'eq',
                                            'value' => 'Denis Villeneuve'
                                        ],
                                        'set_first_result_value' => 5,
                                        'return' => 'set_first_result'
                                    ]);

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
// and set limit 10
$movies = collect_filter($drama, [
                                        'where' => [
                                            'key' => 'directed_by',
                                            'expr' => 'eq',
                                            'value' => 'Denis Villeneuve'
                                        ],
                                        'limit_value' => 10,
                                        'return' => 'limit'
                                    ]);

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
// and return first option of this Criteria.
$movies = collect_filter($drama, [
                                        'where' => [
                                            'key' => 'directed_by',
                                            'expr' => 'eq',
                                            'value' => 'Denis Villeneuve'
                                        ],
                                        'return' => 'first'
                                    ]);

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
// and return last option of this Criteria.
$movies = collect_filter($drama, [
                                        'where' => [
                                            'key' => 'directed_by',
                                            'expr' => 'eq',
                                            'value' => 'Denis Villeneuve'
                                        ],
                                        'return' => 'last'
                                    ]);

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
// and moves the internal iterator position to the next element and returns this element.
$movies = collect_filter($drama, [
                                        'where' => [
                                            'key' => 'directed_by',
                                            'expr' => 'eq',
                                            'value' => 'Denis Villeneuve'
                                        ],
                                        'return' => 'next'
                                    ]);

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
// and return 3 random items.
$movies = collect_filter($drama, [
                                        'where' => [
                                            'key' => 'directed_by',
                                            'expr' => 'eq',
                                            'value' => 'Denis Villeneuve'
                                        ],
                                        'return' => 'random',
                                        'random_value' => 3
                                    ]);

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
// shuffle the items and return them all.
$movies = collect_filter($drama, [
                                        'where' => [
                                            'key' => 'directed_by',
                                            'expr' => 'eq',
                                            'value' => 'Denis Villeneuve'
                                        ],
                                        'return' => 'shuffle'
                                    ]);

// Create movies drama collection
// where field directed_by eq Denis Villeneuve
// and set offset 0 and length 5
$movies = collect_filter($drama, [
                                        'where' => [
                                            'key' => 'directed_by',
                                            'expr' => 'eq',
                                            'value' => 'Denis Villeneuve'
                                        ],
                                        'return' => 'slice',
                                        'slice_offset_value' => 0,
                                        'slice_offset_value' => 5,
                                    ]);

// Count all drama movies where field directed_by eq Denis Villeneuve.
$movies = collect_filter($drama, [
                                        'where' => [
                                            'key' => 'directed_by',
                                            'expr' => 'eq',
                                            'value' => 'Denis Villeneuve'
                                        ],
                                        'return' => 'count'
                                    ]);

// Check if any drama movies where field directed_by eq Denis Villeneuve are exists.
$movies = collect_filter($drama, [
                                        'where' => [
                                            'key' => 'directed_by',
                                            'expr' => 'eq',
                                            'value' => 'Denis Villeneuve'
                                        ],
                                        'return' => 'exists'
                                    ]);
```
