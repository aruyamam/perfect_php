<?php

class MiniBlogApplication extends Application
{
   protected $login_action = array('account', 'singin');

   public function getRootDir()
   {
      return dirname(__FILE__);
   }

   protected function registerRoutes()
   {
      return [
         '/' => [
            'controller' => 'status',
            'action' => 'index'
         ],
         '/status/post' => [
            'controller' => 'status',
            'action' => 'post'
         ],
         '/account' => [
            'controller' => 'account',
            'action' => 'index'
         ],
         '/account/:action' => [
            'controller' => 'account'
         ]
      ];
   }

   protected function configure()
   {
      $this->db_manager->connect('master', array(
         'dsn' => 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST,
         'user' => DB_USER,
         'password' => DB_PASS,
      ));
   }
}