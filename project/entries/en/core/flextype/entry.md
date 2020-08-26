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
---

Common part of Flextype is a Flextype Core Class that extends [Slim Framework](http://www.slimframework.com) that we are using under the hood. Slim is amazing PHP micro framework that helps quickly write simple yet powerful web applications and APIs.

**Slim Framework Resources**
* Website: http://slimframework.com
* Documentation: http://slimframework.com/docs/v3/
* Repository: https://github.com/slimphp/Slim

Getting back to Flextype Core.

With help of Flextype Core Class we are able to access all features and develop a new amazing features for Flextype powered project.

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
        </tbody>
    </table>
</div>
