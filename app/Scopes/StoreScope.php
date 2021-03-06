<?php


namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Config;


class StoreScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->join('store_translations', 'stores.id', '=','store_translations.store_id' )
            ->where('store_translations.local','=',Config::get('app.locale'))
            ->select([
                'stores.id',
                'stores.is_active',
                'stores.created_at',
                'stores.currency_id',
                'stores.social_media_id',
                'stores.activity_type_id',
                'stores.owner_id',
                'stores.section_id',
                'stores.is_active',
                'stores.is_approved',
                'stores.logo',
                'store_translations.name']);
    }
}
