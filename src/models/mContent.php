<?php

namespace m;

class mContent 
{
    private $dContent;

    public function __construct(\d\dContent $content)
    {
        $this->dContent = $content;
    }
    public function getContent()
    {
        $content = '';
        forEach($this->dContent->get() as $part){
            $content .= $part;
        }
        return $content;
    }
}