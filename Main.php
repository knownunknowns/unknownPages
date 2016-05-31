<?php
namespace IdnoPlugins\UnknownPages{
    class Main extends \Idno\Common\Plugin {
        function registerPages() {
            //front page
            \Idno\Core\Idno::site()->addPageHandler('/', '\IdnoPlugins\unknownPages\Pages\landing');
            //people
            \Idno\Core\Idno::site()->addPageHandler('/people', '\IdnoPlugins\unknownPages\Pages\people');
            //static pages
            \Idno\Core\Idno::site()->addPageHandler('/info', '\IdnoPlugins\unknownPages\Pages\info');
            \Idno\Core\Idno::site()->addPageHandler('/show', '\IdnoPlugins\unknownPages\Pages\show');
        }
    }
 }
