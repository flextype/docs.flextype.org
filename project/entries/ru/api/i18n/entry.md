---
title: i18n
---

- [\Flextype\Component\I18n\I18n](#class-flextypecomponenti18ni18n)

<hr /><a id="class-flextypecomponenti18ni18n"></a>

### Class: \Flextype\Component\I18n\I18n

| Visibility    | Function                                                                                                                                                                                                                                                                      |
|:------------- |:----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| public static | <strong>add(</strong><em>string/array</em> <strong>$translates</strong>, <em>\string</em> <strong>$locale=null</strong>)</strong> : <em>void</em><br /><em>Add translation keys I18n::add(['auth_login' => 'Login', 'auth_password' => 'Password'], 'ru');</em>                                                           |
| public static | <strong>find(</strong><em>\string</em> <strong>$translate</strong>, <em>\string</em> <strong>$locale=null</strong>, <em>array</em> <strong>$values=array()</strong>)</strong> : <em>string</em><br /><em>Returns translation of a string. If no translation exists, the original string will be returned. No parameters are replaced. $translated_string = I18n::find('auth_login', 'ru');</em> |
