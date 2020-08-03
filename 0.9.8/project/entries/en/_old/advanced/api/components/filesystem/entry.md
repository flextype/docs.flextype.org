---
title: Filesystem
---

- [\Flextype\Component\Filesystem\Filesystem](#class-flextypecomponentfilesystemfilesystem)

<hr /><a id="class-flextypecomponentfilesystemfilesystem"></a>
### Class: \Flextype\Component\Filesystem\Filesystem

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>copy(</strong><em>\string</em> <strong>$path</strong>, <em>\string</em> <strong>$newpath</strong>, <em>\boolean</em> <strong>$recursive=false</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Copy a file(s).</em> |
| public static | <strong>createDir(</strong><em>\string</em> <strong>$dirname</strong>, <em>\string</em> <strong>$visibility=`'public'`</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Create a directory.</em> |
| public static | <strong>delete(</strong><em>\string</em> <strong>$path</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Delete a file.</em> |
| public static | <strong>deleteDir(</strong><em>\string</em> <strong>$dirname</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Delete a directory.</em> |
| public static | <strong>getDirTimestamp(</strong><em>\string</em> <strong>$directory</strong>)</strong> : <em>int directory timestamp</em><br /><em>Get directory timestamp</em> |
| public static | <strong>getMetadata(</strong><em>\string</em> <strong>$path</strong>)</strong> : <em>array/false The file metadata or false on failure.</em><br /><em>Get a file's metadata.</em> |
| public static | <strong>getMimeType(</strong><em>\string</em> <strong>$file</strong>, <em>\boolean</em> <strong>$guess=true</strong>)</strong> : <em>mixed</em><br /><em>Returns the mime type of a file. Returns false if the mime type is not found.</em> |
| public static | <strong>getSize(</strong><em>\string</em> <strong>$path</strong>)</strong> : <em>int/false The file size or false on failure.</em><br /><em>Get a file's size.</em> |
| public static | <strong>getTimestamp(</strong><em>\string</em> <strong>$path</strong>)</strong> : <em>string/false The timestamp or false on failure.</em><br /><em>Get a file's timestamp.</em> |
| public static | <strong>getVisibility(</strong><em>\string</em> <strong>$path</strong>)</strong> : <em>string/false The visibility (public/private) or false on failure.</em><br /><em>Get a file's visibility.</em> |
| public static | <strong>has(</strong><em>\string</em> <strong>$path</strong>)</strong> : <em>bool</em><br /><em>Check whether a file exists.</em> |
| public static | <strong>listContents(</strong><em>\string</em> <strong>$directory=`''`</strong>, <em>\boolean</em> <strong>$recursive=false</strong>)</strong> : <em>array A list of file metadata.</em><br /><em>List contents of a directory.</em> |
| public static | <strong>read(</strong><em>\string</em> <strong>$path</strong>)</strong> : <em>string/false The file contents or false on failure.</em><br /><em>Read a file.</em> |
| public static | <strong>rename(</strong><em>\string</em> <strong>$path</strong>, <em>\string</em> <strong>$newpath</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Rename a file.</em> |
| public static | <strong>setVisibility(</strong><em>\string</em> <strong>$path</strong>, <em>\string</em> <strong>$visibility</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Set the visibility for a file.</em> |
| public static | <strong>write(</strong><em>\string</em> <strong>$path</strong>, <em>\string</em> <strong>$contents</strong>, <em>\string</em> <strong>$visibility=`'public'`</strong>, <em>\integer</em> <strong>$flags=2</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Write a file.</em> |
| protected static | <strong>getDirectoryIterator(</strong><em>\string</em> <strong>$path</strong>)</strong> : <em>mixed</em> |
| protected static | <strong>getFilePath(</strong><em>[\SplFileInfo](http://php.net/manual/en/class.splfileinfo.php)</em> <strong>$file</strong>)</strong> : <em>mixed</em><br /><em>Get the normalized path from a SplFileInfo object.</em> |
| protected static | <strong>getRecursiveDirectoryIterator(</strong><em>\string</em> <strong>$path</strong>, <em>\integer</em> <strong>$mode=1</strong>)</strong> : <em>mixed</em> |
| protected static | <strong>mapFileInfo(</strong><em>[\SplFileInfo](http://php.net/manual/en/class.splfileinfo.php)</em> <strong>$file</strong>)</strong> : <em>array</em> |
| protected static | <strong>normalizeFileInfo(</strong><em>[\SplFileInfo](http://php.net/manual/en/class.splfileinfo.php)</em> <strong>$file</strong>)</strong> : <em>array/void</em><br /><em>Normalize the file info.</em> |
