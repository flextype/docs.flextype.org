---
title: Assets
---

- [\Flextype\Component\Assets\Assets](#class-flextypecomponentassetsassets)

<hr /><a id="class-flextypecomponentassetsassets"></a>

### Class: \Flextype\Component\Assets\Assets

| Visibility    | Function                                                                                                                                                                                                                                                                                                                    |
|:------------- |:--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| public static | <strong>add(</strong><em>\string</em> <strong>$asset_type</strong>, <em>\string</em> <strong>$asset</strong>, <em>\string</em> <strong>$namespace</strong>, <em>\integer</em> <strong>$priority=1</strong>)</strong> : <em>void</em><br /><em>Add new asset Assets::add('js', 'jquery.js', 'site', 1); Assets::add('js', 'site.js', 'site', 2); Assets::add('css', 'site.css', 'site', 1); Assets::add('css', 'theme.css', 'site', 2);</em> |
| public static | <strong>get(</strong><em>\string</em> <strong>$asset_type</strong>, <em>\string</em> <strong>$namespace</strong>)</strong> : <em>array</em><br /><em>Get assets for current namespace and asset type $css = Assets::get('css', 'site'); $js  = Assets::get('js', 'site');</em>                                                                                                  |
