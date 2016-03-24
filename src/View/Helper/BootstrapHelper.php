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
                $option = $options[0];
                switch ($option["type"]) {
                    case "button":
                    case "reset":
                    case "submit":
                        return $this->__normal($option);
                        break;
                    case "postLink":
                        return $this->__postLink($option);
                        break;
                    case "modal":
                        return $this->__modal($option);
                        break;
                    case "link":
                        return $this->__link($option);
                        break;
                }
            } else {
                $resultado = '<div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Opción <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">';
                foreach ($options as $option) {
                    switch ($option["type"]) {
                        case "divider":
                            $resultado .= '<li class="divider"></li>';
                            break;
                        case "button":
                        case "reset":
                        case "submit":
                            $resultado .= $this->__wrapperLi($this->__normal($option));
                            break;
                        case "postLink":
                            $resultado .= $this->__wrapperLi($this->__postLink($option));
                            break;
                        case "modal":
                            $resultado .= $this->__wrapperLi($this->__modal($option));
                            break;
                        case "link":
                            $resultado .= $this->__wrapperLi($this->__link($option));
                            break;
                    }
                }
                return $resultado . "</ul></div>";
            }
        }
    }
    
    private function __normal($option) {
        return $this->Form->button($option["title"], [
            'type' => $option["type"], 
            "class" => @$option["class"]
        ]);
    }
    
    private function __postLink($option) {
        return $this->Form->postLink($option["title"], $option["url"], [
            "confirm" => @$option["confirmMessage"], 
            "escape" => false,
            "class" => @$option["class"]
        ]);
    }
    
    private function __modal($option) {
        $atributos = [
            "class" => @$option["class"],
            "data-toogle" => "modal",
            "data-target" => @$option["data-target"]
        ];
        return $this->Html->link($option["title"], "#", @array_merge(@$option["metadata"], @$atributos));
    }
    
    private function __link($option) {
        return $this->Html->link($option["title"], $option["url"], [
            "escape" => false,
            "class" => @$option["class"]
        ]);
    }
    
    private function __wrapperLi($content) {
        return "<li>" . $content . "</li>";
    }
}
/*
 * 
<?php echo $this->Bootstrap->options(
    [
        [
            "title" => "boton1", 
            "url" => "sdadsa/dasds",
            "type" => "button"
        ]
    ]
) ?>
<?php echo $this->Bootstrap->options(
    [
        [
            "title" => "postLink1", 
            "url" => "sdadsa/dasds",
            "type" => "postLink",
            "confirmMessage" => "dsada"
        ]
    ]
) ?>
<?php echo $this->Bootstrap->options([[
    "title" => "modal1", 
    "type" => "modal",
    "data-target" => "#id_de_algo",
    "metadata" => [
        "data-id" => "dasda",
        "data-mono" => "tu"
    ]
]]) ?>

<?php 
    echo $this->Bootstrap->options([
        [
            "title" => "boton1", 
            "url" => "sdadsa/dasds",
            "type" => "button"
        ],
        [
            "title" => "postLink1", 
            "url" => "sdadsa/dasds",
            "type" => "postLink",
            "confirmMessage" => "dsada"
        ], 
        [
            "title" => "modal1", 
            "type" => "modal",
            "data-target" => "#id_de_algo",
            "metadata" => [
                "data-id" => "dasda",
                "data-mono" => "tu"
            ]
        ],
        [
            "type" => "divider"
        ],
        [
            "title" => "modal1", 
            "type" => "modal",
            "data-target" => "#id_de_algo",
            "metadata" => [
                "data-id" => "dasda",
                "data-mono" => "tu"
            ]
        ]
    ]);
?>

 */