<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class PrefForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('prefecture_cd', 'text')
            ->add('prefecture_name', 'text')
            ->add('submit', 'submit', ['label' => '検索']);
    }
}
