<?php

namespace c;

class cIndex extends \obray\oObject 
{
    private $content;

    protected $permissions = array(
        "object" => "any",
        "index" => "any"
    );

    public function __construct(\m\mContent $content)
    {
        $this->content = $content;
    }

    public function index()
    {
        $this->html = "<h1>Hello World</h1>";
        $this->html .= $this->content->getContent();
    }

}