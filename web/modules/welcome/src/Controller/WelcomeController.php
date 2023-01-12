<?php
namespace Drupal\welcome\Controller;
use Drupal\Core\Controller\ControllerBase;

class WelcomeController extends ControllerBase {
// class WelcomeController{
    public function Welcome(){
        // $element = array('#markup' => 'Welcome to Drupal page',);
        // return $element;

        
        $items = 'xin chao ban';
        return [
            '#theme' => 'welcome_page',
            '#items' => $items,
            '#attached' => [
                'library' => [
                  'welcome/welcome-styles',
                ]
            ]
        ];
    }
}
?>