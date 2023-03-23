<?php

namespace Database\Factories\Webkul\Category\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Webkul\Category\Models\CategoryTranslation;
use Illuminate\Support\Arr;

class CategoryTranslationFactory extends Factory
{

    protected $model = CategoryTranslation::class;

    public function definition()
    {        
        $name = Arr::random(['Men', 'Women', 'Kids']);
        return [
            'locale'                       => 'en',
            'name'                        =>  $name
        ];
    }
}
