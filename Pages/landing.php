<?php
namespace IdnoPlugins\unknownPages\Pages {
    class landing extends \Idno\Common\Page {
        function getContent(){
                $t = \Idno\Core\Idno::site()->template();
                $t->body  = $t->draw('front');
                $t->drawPage();
        }
    }
}
