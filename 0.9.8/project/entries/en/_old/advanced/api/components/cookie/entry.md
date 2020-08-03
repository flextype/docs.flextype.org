---
title: Cookie
---

- [\Flextype\Component\Cookie\Cookie](#class-flextypecomponentcookiecookie)

<hr /><a id="class-flextypecomponentcookiecookie"></a>
### Class: \Flextype\Component\Cookie\Cookie

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>delete(</strong><em>string</em> <strong>$name</strong>)</strong> : <em>boolean</em><br /><em>Deletes a cookie by making the value NULL and expiring it. Cookie::delete('theme');</em> |
| public static | <strong>get(</strong><em>string</em> <strong>$key</strong>, <em>mixed</em> <strong>$default=null</strong>)</strong> : <em>mixed</em><br /><em>Get a cookie $username = Cookie::get('username');</em> |
| public static | <strong>salt(</strong><em>string</em> <strong>$name</strong>, <em>string</em> <strong>$value</strong>)</strong> : <em>string</em><br /><em>Generates a salt string for a cookie based on the name and value. $salt = Cookie::salt('theme', 'red');</em> |
| public static | <strong>set(</strong><em>\string</em> <strong>$key</strong>, <em>\string</em> <strong>$value</strong>, <em>\integer</em> <strong>$lifetime=null</strong>)</strong> : <em>bool</em><br /><em>Set a cookie Cookie::set('username', 'Awilum');</em> |
| protected static | <strong>_setcookie(</strong><em>string</em> <strong>$name</strong>, <em>string</em> <strong>$value</strong>, <em>integer</em> <strong>$expire</strong>, <em>string</em> <strong>$path</strong>, <em>string</em> <strong>$domain</strong>, <em>boolean</em> <strong>$secure</strong>, <em>boolean</em> <strong>$httponly</strong>)</strong> : <em>bool</em><br /><em>Proxy for the native setcookie function</em> |
| protected static | <strong>_time()</strong> : <em>int</em><br /><em>Proxy for the native time function</em> |
