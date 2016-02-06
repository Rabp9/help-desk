<?php
// src/View/Helper/BootstrapHelper.php

namespace App\View\Helper;

use Cake\View\Helper;

class BootstrapHelper extends Helper
{
    public $helpers = ["Form", "Html"];
    
    public function options(array $options) {
        if (!is_array($options)) {
            return "";
        } else {
            if (sizeof($options) == 1) {
                $option = $options["option"];
                switch ($option["type"]) {
                    case "button":
                    case "reset":
                    case "submit":
                        return $this->Form->button($option["title"], ['type' => $option["type"], "class" => $option["class"]]);
                        break;
                }
            } else {
                foreach ($options as $option) {

                }
            }
        }
    }
}