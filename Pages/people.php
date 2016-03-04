<?php
namespace IdnoPlugins\unknownPages\Pages {
    class people extends \Idno\Common\Page {
        function getContent(){
                $t = \Idno\Core\Idno::site()->template();
                $t->body  = $t->draw('people');
                $t->title = "testing testing";
                $t->drawPage();
        }
    }
}
