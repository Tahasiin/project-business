<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name', 'product_id', 'category_name', 'production_year', 'product_weight', 'product_mileage', 'fuel_type', 'product_color', 'smoking_status', 'history_status','product_price', 'pre_description', 'accidental_issue', 'mileage_issue', 'service_issue', 'other_issue', 'term_1', 'term_2', 'term_3', 'term_4', 'term_5', 'term_6', 'term_7', 'term_8', 'term_9', 'term_10', 'image_1', 'image_2', 'image_3', 'image_4', 'image_5', 'image_6', 'image_7', 'image_8', 'image_9', 'image_10', 'publication_status', 'created_on'];
}
