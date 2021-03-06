<?php


namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Config;


class CategoryScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->join('category_translations', 'categories.id', '=', 'category_translations.category_id')
            ->where('category_translations.local', '=', Config::get('app.locale'))
            ->select([
                'categories.id','categories.parent_id','categories.is_active',
                'categories.image','categories.slug',
                'categories.section_id',
                'category_translations.name', 'category_translations.local']);
    }
}
