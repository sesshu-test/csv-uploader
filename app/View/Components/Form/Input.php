<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $label;
    public $type;
    public $value;

    public function __construct($name, $label = '', $type = 'text', $value = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this-> value = $value;
    }

    public function render()
    {
        return view('components.form.input');
    }
}
