<?php

namespace App\Http\Resources;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $category = $this;
        
        return [
            'id' => $category->id_category,
            'id_parent' => $category->id_parent,
            'name' => $category->categoryLang->name,
            'id_shop_default' => $category->id_shop_default,
            'level_depth' => $category->level_depth,
            'active' => $category->active,
            'date_add' => $category->date_add,
            'date_upd' => $category->date_upd,
            'position' => $category->position,
            'is_root_category' => $category->is_root_category,
            
        ];
    }
}
