---
title: Debug
---

- [\Flextype\Component\Debug\Debug](#class-flextypecomponentdebugdebug)

<hr /><a id="class-flextypecomponentdebugdebug"></a>

### Class: \Flextype\Component\Debug\Debug

| Visibility    | Function                                                                                                                                                                                                            |
|:------------- |:------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| public static | <strong>dump(</strong><em>mixed</em> <strong>$data</strong>, <em>\boolean</em> <strong>$exit=false</strong>)</strong> : <em>void</em><br /><em>Print the variable $data and exit if exit = true Debug::dump($data);</em> |
| public static | <strong>elapsedTime(</strong><em>\string</em> <strong>$point_name</strong>)</strong> : <em>string</em><br /><em>Get elapsed time for current point echo Debug::elapsedTime('point_name');</em>                                                 |
| public static | <strong>elapsedTimeSetPoint(</strong><em>\string</em> <strong>$point_name</strong>)</strong> : <em>void</em><br /><em>Save current time for current point Debug::elapsedTimeSetPoint('point_name');</em>                                               |
| public static | <strong>memoryUsage(</strong><em>\string</em> <strong>$point_name</strong>)</strong> : <em>string</em><br /><em>Get memory usage for current point echo Debug::memoryUsage('point_name');</em>                                               |
| public static | <strong>memoryUsageSetPoint(</strong><em>\string</em> <strong>$point_name</strong>)</strong> : <em>void</em><br /><em>Save current memory for current point Debug::memoryUsageSetPoint('point_name');</em>                                               |
