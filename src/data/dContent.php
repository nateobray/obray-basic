<?php

namespace d;

class dContent 
{
    private $content = array(
        "<p>Welcome to obray-basic. This is the most basic setup for any kind of obray application.  Here are some additional obray repositories you migth consider adding to this project.</p>",
        "<ul>",
        '<li><a href="https://github.com/nateobray/session">Session</a> - session manager for obray</li>',
        '<li><a href="https://github.com/nateobray/container">Container</a> - a dependency container, which is great for use with session so it can be used a shared dependency</li>',
        '<li><a href="https://github.com/nateobray/data">Data</a> - very basic ORM</li>',
        '<li><a href="https://github.com/nateobray/users">Users</a> - a user and permission management library</li>',
        '</ul>'
    );

    public function get()
    {
        return $this->content;
    }
}