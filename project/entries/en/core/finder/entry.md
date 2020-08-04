---
title: Finder
description:
breadcrumbs:
  1:
    title: "Core Concepts"
    link: "[url]/en/core/"
on_this_page:
  1:
    title: "Basic Usage"
    link: "basic-usage"
  2:
    title: "Searching for Files and Directories"
    link: "searching-for-files-and-directories"
  3:
    title: "Sorting Results"
    link: "sorting-results"
  4:
    title: "Transforming Results into Arrays"
    link: "transforming-results-into-arrays"
  5:
    title: "Reading Contents of Returned Files"
    link: "reading-contents-of-returned-files"
---

We are using Symfony Finder Component to finds files and directories based on different criteria
(name, file size, modification time, etc.) via an intuitive fluent interface.

### <a name="basic-usage"></a> Basic usage

```php
use Symfony\Component\Finder\Finder;

$finder = new Finder();

// find all files in the current directory
$finder->files()->in(__DIR__);

// check if there are any search results
if ($finder->hasResults()) {
    // ...
}

foreach ($finder as $file) {
    $absoluteFilePath = $file->getRealPath();
    $fileNameWithExtension = $file->getRelativePathname();

    // ...
}
```

The `$file` variable is an instance of `Symfony\Component\Finder\SplFileInfo` which extends PHP's own
`SplFileInfo` to provide methods to work with relative paths.

The `Finder` object doesn't reset its internal state automatically.
This means that you need to create a new instance if you do not want
to get mixed results.

You may use our `find()` helper function for initializing `Finder` object.


```php
$finder = find()->in(__DIR__);

foreach ($finder as $file) {
    $absoluteFilePath = $file->getRealPath();
    $fileNameWithExtension = $file->getRelativePathname();

    // ...
}
```

### <a name="searching-for-files-and-directories"></a> Searching for Files and Directories

The component provides lots of methods to define the search criteria. They all
can be chained because they implement a [fluent interface](https://en.wikipedia.org/wiki/Fluent_interface).

#### Location

The location is the only mandatory criteria. It tells the finder which
directory to use for the search:

```php
$finder->in(__DIR__);
```

Search in several locations by chaining calls to `in()`:

```php
// search inside *both* directories
$finder->in([__DIR__, '/elsewhere']);

// same as above
$finder->in(__DIR__)->in('/elsewhere');
```

Use `*` as a wildcard character to search in the directories matching a
pattern (each pattern has to resolve to at least one directory path)::

```php
$finder->in('src/Symfony/*/*/Resources');
```

Exclude directories from matching with the `exclude()` method:

```php
// directories passed as argument must be relative to the ones defined with the in() method
$finder->in(__DIR__)->exclude('ruby');
```

It's also possible to ignore directories that you don't have permission to read:

```php
$finder->ignoreUnreadableDirs()->in(__DIR__);
```

As the Finder uses PHP iterators, you can pass any URL with a supported
[PHP wrapper for URL-style protocols](https://www.php.net/manual/en/wrappers.php) (`ftp://`, `zlib://`, etc.)::

```php
// always add a trailing slash when looking for in the FTP root dir
$finder->in('ftp://example.com/');

// you can also look for in a FTP directory
$finder->in('ftp://example.com/pub/');
```

And it also works with user-defined streams:

```php
use Symfony\Component\Finder\Finder;

// register a 's3://' wrapper with the official AWS SDK
$s3Client = new Aws\S3\S3Client([/* config options */]);
$s3Client->registerStreamWrapper();

$finder = new Finder();
$finder->name('photos*')->size('< 100K')->date('since 1 hour ago');
foreach ($finder->in('s3://bucket-name') as $file) {
    // ... do something with the file
}
```

Read the [PHP streams](https://www.php.net/streams) documentation to learn how to create your own streams.

#### Files or Directories

By default, the Finder returns both files and directories. If you need to find either files or directories only, use the method `files()` and method `directories()`

```php
// look for files only; ignore directories
$finder->files();

// look for directories only; ignore files
$finder->directories();
```

If you want to follow [symbolic links](https://en.wikipedia.org/wiki/Symbolic_link), use the `followLinks()` method

```php
$finder->files()->followLinks();
```

##### Version Control Files


[Version Control Systems](https://en.wikipedia.org/wiki/Version_control) (or "VCS" for short), such as Git and Mercurial, create some special files to store their metadata. Those files are ignored by
default when looking for files and directories, but you can change this with the
`ignoreVCS()` method

```php
$finder->ignoreVCS(false);
```

If the search directory contains a `.gitignore` file, you can reuse those
rules to exclude files and directories from the results with the `ignoreVCSIgnored()` method:

```php
// excludes files/directories matching the .gitignore patterns
$finder->ignoreVCSIgnored(true);
```

#### File Name

Find files by name with the `name()` method:

```php
$finder->files()->name('*.php');
```

The `name()` method accepts globs, strings, regexes or an array of globs,
strings or regexes:

```php
$finder->files()->name('/\.php$/');
```

Multiple filenames can be defined by chaining calls or passing an array:

```php
$finder->files()->name('*.php')->name('*.twig');

// same as above
$finder->files()->name(['*.php', '*.twig']);
```

The `notName()` method excludes files matching a pattern:

```php
$finder->files()->notName('*.rb');
```

Multiple filenames can be excluded by chaining calls or passing an array:

```php
    $finder->files()->notName('*.rb')->notName('*.py');

    // same as above
    $finder->files()->notName(['*.rb', '*.py']);
```

#### File Contents

Find files by content with the
method `contains()`:

```php
$finder->files()->contains('lorem ipsum');
```

The `contains()` method accepts strings or regexes:

```php
$finder->files()->contains('/lorem\s+ipsum$/i');
```

The `notContains()` method excludes files containing given pattern:

```php
$finder->files()->notContains('dolor sit amet');
```

#### Path

Find files and directories by path with the `path()` method:

```php
// matches files that contain "data" anywhere in their paths (files or directories)
$finder->path('data');

// for example this will match data/*.xml and data.xml if they exist
$finder->path('data')->name('*.xml');
```

Use the forward slash (i.e. `/`) as the directory separator on all platforms,
including Windows. The component makes the necessary conversion internally.

The `path()` method accepts a string, a regular expression or an array of
strings or regulars expressions::

```php
$finder->path('foo/bar');
$finder->path('/^foo\/bar/');
```

Multiple paths can be defined by chaining calls or passing an array::

```php
$finder->path('data')->path('foo/bar');

// same as above
$finder->path(['data', 'foo/bar']);
```

Internally, strings are converted into regular expressions by escaping slashes
and adding delimiters:


<div class="table">
    <table>
        <thead>
            <tr>
                <th>Original Given String</th>
                <th>Original Given String</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>dirname</code></td>
                <td><code>/dirname/</code></td>
            </tr>
            <tr>
                <td><code>a/b/c</code></td>
                <td><code>/a\/b\/c/</code></td>
            </tr>
        </tbody>
    </table>
</div>

The method `notPath()` method excludes files by path:

```php
$finder->notPath('other/dir');
```

Multiple paths can be excluded by chaining calls or passing an array:

```php
    $finder->notPath('first/dir')->notPath('other/dir');

    // same as above
    $finder->notPath(['first/dir', 'other/dir']);
```

#### File Size

Find files by size with the method `size()` method:

```php
$finder->files()->size('< 1.5K');
```

Restrict by a size range by chaining calls or passing an array::

```php
$finder->files()->size('>= 1K')->size('<= 2K');

// same as above
$finder->files()->size(['>= 1K', '<= 2K']);
```

The comparison operator can be any of the following: `>`, `>=`, `<`,
`<=`, `==`, `!=`.

The target value may use magnitudes of kilobytes (`k`, `ki`), megabytes
(`m`, `mi`), or gigabytes (`g`, `gi`). Those suffixed with an `i` use
the appropriate `2**n` version in accordance with the [IEC standard](https://physics.nist.gov/cuu/Units/binary.html).

#### File Date


Find files by last modified dates with the method `date()`:

```php
$finder->date('since yesterday');
```

Restrict by a date range by chaining calls or passing an array::

```php
$finder->date('>= 2018-01-01')->date('<= 2018-12-31');

// same as above
$finder->date(['>= 2018-01-01', '<= 2018-12-31']);
```

The comparison operator can be any of the following: `>`, `>=`, `<`,
`<=`, `==`. You can also use `since` or `after` as an alias for `>`,
and `until` or `before` as an alias for `<`.

The target value can be any date supported by php function [strtotime](https://www.php.net/manual/en/function.strtotime.php).

#### Directory Depth

By default, the Finder recursively traverses directories. Restrict the depth of
traversing with method `depth()`:

```php
$finder->depth('== 0');
$finder->depth('< 3');
```

Restrict by a depth range by chaining calls or passing an array:

```php
$finder->depth('> 2')->depth('< 5');

// same as above
$finder->depth(['> 2', '< 5']);
```

#### Custom Filtering

To filter results with your own strategy, use method `filter()`:

```php
$filter = function (\SplFileInfo $file)
{
    if (strlen($file) > 10) {
        return false;
    }
};

$finder->files()->filter($filter);
```

The `filter()` method takes a Closure as an argument. For each matching file,
it is called with the file as a `Symfony\Component\Finder\SplFileInfo`
instance. The file is excluded from the result set if the Closure returns
`false`.

### <a name="sorting-results"></a> Sorting Results

Sort the results by name or by type (directories first, then files)::

```php
$finder->sortByName();

$finder->sortByType();
```

By default, the `sortByName()` method uses the php function [strcmp](https://www.php.net/manual/en/function.strcmp.php) PHP function (e.g. `file1.txt`, `file10.txt`, `file2.txt`). Pass `true`
as its argument to use PHP's [natural sort order](https://en.wikipedia.org/wiki/Natural_sort_order) algorithm instead (e.g. `file1.txt`, `file2.txt`, `file10.txt`).

Sort the files and directories by the last accessed, changed or modified time::

```php
$finder->sortByAccessedTime();

$finder->sortByChangedTime();

$finder->sortByModifiedTime();
```

You can also define your own sorting algorithm with the `sort()` method:

```php
$finder->sort(function (\SplFileInfo $a, \SplFileInfo $b) {
    return strcmp($a->getRealPath(), $b->getRealPath());
});
```

You can reverse any sorting by using the `reverseSorting()` method:

```php
// results will be sorted "Z to A" instead of the default "A to Z"
$finder->sortByName()->reverseSorting();
```

Notice that the `sort*` methods need to get all matching elements to do their jobs. For large iterators, it is slow.

### <a name="transforming-results-into-arrays"></a> Transforming Results into Arrays

A Finder instance is an `IteratorAggregate` PHP class. So, in addition to iterating over the Finder results with `foreach`, you can also convert it to an array with the `iterator_to_array` function, or get the number of items with `iterator_count`.

If you call to the `in()` method more than once to search through multiple locations, pass `false` as a second
parameter to `iterator_to_array` to avoid issues (a separate iterator is created for each location and, if you don't pass `false` to `iterator_to_array`, keys of result sets are used and some of them might be duplicated and their values overwritten).

### <a name="reading-contents-of-returned-files"></a> Reading Contents of Returned Files

The contents of returned files can be read with method `getContents()`:

```php
use Symfony\Component\Finder\Finder;

$finder = new Finder();
$finder->files()->in(__DIR__);

foreach ($finder as $file) {
    $contents = $file->getContents();

    // ...
}
```
