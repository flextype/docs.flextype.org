---
title: Session
---

- [\Flextype\Component\Session\Session](#class-flextypecomponentsessionsession)

<hr /><a id="class-flextypecomponentsessionsession"></a>

### Class: \Flextype\Component\Session\Session

| Visibility    | Function                                                                                                                                                                                                                   |
|:------------- |:-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| public static | <strong>delete()</strong> : <em>void</em><br /><em>Deletes one or more session variables. Session::delete('user');</em>                                                                                                                        |
| public static | <strong>destroy()</strong> : <em>void</em><br /><em>Destroys the session. Session::destroy();</em>                                                                                                                        |
| public static | <strong>exists()</strong> : <em>bool</em><br /><em>Checks if a session variable exists. if (Session::exists('user')) { // Do something... }</em>                                                                                                                        |
| public static | <strong>get(</strong><em>\string</em> <strong>$key</strong>)</strong> : <em>mixed</em><br /><em>Gets a variable that was stored in the session. echo Session::get('user');</em>                                                      |
| public static | <strong>getSessionId()</strong> : <em>string</em><br /><em>Returns the sessionID. echo Session::getSessionId();</em>                                                                                                                     |
| public static | <strong>set(</strong><em>\string</em> <strong>$key</strong>, <em>mixed</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Stores a variable in the session. Session::set('user', 'Awilum');</em> |
| public static | <strong>start()</strong> : <em>void</em><br /><em>Starts the session. Session::start();</em>                                                                                                                     |
