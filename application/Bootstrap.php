<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initAutoload()
     {
          // Add autoloader empty namespace
          $autoLoader = Zend_Loader_Autoloader::getInstance();
          $resourceLoader = new Zend_Loader_Autoloader_Resource(array(
            'basePath'      => APPLICATION_PATH,
            'namespace'     => '',
            'resourceTypes' => array(
                'model' => array(
                    'path'      => 'models/',
                    'namespace' => 'Model_'
                    )
               )
          ));
          //Return it so that it can be stored by the bootstrap
          return $autoLoader;
     }

}

