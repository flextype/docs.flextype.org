---
title: Flextype
description:
breadcrumbs:
  -
    title: "Core Concepts"
    link: "[url]/en/core/"
on_this_page:
  -
    title: "Methods"
    link: "methods"
    level2:
      -
        title: "getInstance()"
        link: "methods-getInstance"
      -
        title: "getVersion()"
        link: "methods-getVersion"
      -
        title: "container()"
        link: "methods-container"
      -
        title: "getContainer()"
        link: "methods-getContainer"
      -
        title: "add()"
        link: "methods-add"
      -
        title: "get()"
        link: "methods-get"
      -
        title: "post()"
        link: "methods-post"
      -
        title: "put()"
        link: "methods-put"
      -
        title: "patch()"
        link: "methods-patch"
      -
        title: "delete()"
        link: "methods-delete"
      -
        title: "any()"
        link: "methods-any"
      -
        title: "map()"
        link: "methods-map"
      -
        title: "redirect()"
        link: "methods-redirect"
      -
        title: "group()"
        link: "methods-group"
      -
        title: "run()"
        link: "methods-run"
      -
        title: "process()"
        link: "methods-process"
      -
        title: "respond()"
        link: "methods-respond"
      -
        title: "subRequest()"
        link: "methods-subRequest"
---

Common part of Flextype is a Flextype Class that extends Basic Slim Application Class. With help of this  class we are able to access all features an develop a new amazing features for Flextype powered project.


### <a name="methods"></a> Methods

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Method</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#methods-getInstance">getInstance()</a></td>
                <td>Get the available Flextype Application instance.</td>
            </tr>
            <tr>
                <td><a href="#methods-getVersion">getVersion()</a></td>
                <td>Get current Flextype version.</td>
            </tr>
            <tr>
                <td><a href="#methods-container">container()</a></td>
                <td>Get and Set Dependency Injection Container.</td>
            </tr>
            <tr>
                <td><a href="#methods-getContainer">getContainer()</a></td>
                <td>Get Dependency Injection Container.</td>
            </tr>
            <tr>
                <td><a href="#methods-add">add()</a></td>
                <td>Add a new middleware to the Flextype Application middleware stack.</td>
            </tr>
            <tr>
                <td><a href="#methods-get">get()</a></td>
                <td>Add a new GET route.</td>
            </tr>
            <tr>
                <td><a href="#methods-post">post()</a></td>
                <td>Add a new POST route.</td>
            </tr>
            <tr>
                <td><a href="#methods-put">put()</a></td>
                <td>Add a new PUT route.</td>
            </tr>
            <tr>
                <td><a href="#methods-patch">patch()</a></td>
                <td>Add a new PATCH route.</td>
            </tr>
            <tr>
                <td><a href="#methods-delete">delete()</a></td>
                <td>Add a new DELETE route.</td>
            </tr>
            <tr>
                <td><a href="#methods-any">any()</a></td>
                <td>Add a new route for any HTTP method.</td>
            </tr>
            <tr>
                <td><a href="#methods-map">map()</a></td>
                <td>Add a new route with multiple methods.</td>
            </tr>
            <tr>
                <td><a href="#methods-redirect">redirect()</a></td>
                <td>Add a new route that sends an HTTP redirect</td>
            </tr>
            <tr>
                <td><a href="#methods-group">group()</a></td>
                <td>Add a new route group.<br><br>

                This method accepts a route pattern and a callback.
                All route declarations in the callback will be prepended by the group(s) that it is in.</td>
            </tr>
            <tr>
                <td><a href="#methods-run">run()</a></td>
                <td>
                    Run Flextype Application.<br><br>

                    This method traverses the application middleware stack and then sends the resultant Response object to the HTTP client.
                </td>
            </tr>
            <tr>
                <td><a href="#methods-process">process()</a></td>
                <td>
                    Process a request.<br><br>

                    This method traverses the application middleware stack and then returns the resultant Response object.
                </td>
            </tr>
            <tr>
                <td><a href="#methods-respond">respond()</a></td>
                <td>
                     Send the response to the client.
                </td>
            </tr>
            <tr>
                <td><a href="#methods-subRequest">subRequest()</a></td>
                <td>
                    Perform a sub-request from within an application route.<br><br>

                    This method allows you to prepare and initiate a sub-request, run within the context of the current request. This WILL NOT issue a remote HTTP request. Instead, it will route the provided URL, method, headers, cookies, body, and server variables against the set of registered application routes. The result response object is returned.
                </td>
            </tr>
        </tbody>
    </table>
</div>
