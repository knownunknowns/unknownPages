<?php
namespace IdnoPlugins\UnknownPages{
    class Main extends \Idno\Common\Plugin {
        function registerPages() {
            //front page
            \Idno\Core\Idno::site()->addPageHandler('/', '\IdnoPlugins\unknownPages\Pages\landing');
            //people
            \Idno\Core\Idno::site()->addPageHandler('/people', '\IdnoPlugins\unknownPages\Pages\people');
        }
    }
 }
