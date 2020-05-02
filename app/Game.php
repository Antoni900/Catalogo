<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Game
 *
 * @property int $id
 * @property string $name
 * @property string $image_url
 * @property string $description
 * @property float $price
 * @property int $fk_id_category
 * @property int $fk_id_user
 * @property-read \App\Category $category
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Game newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Game newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Game query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Game whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Game whereFkIdCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Game whereFkIdUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Game whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Game whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Game whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Game wherePrice($value)
 * @mixin \Eloquent
 */
class Game extends Model
{
    protected $table = 'game';
    protected $fillable = [
        'name',
        'image_url',
        'description',
        'price',
        'trailer_url',
        'fk_id_category'
    ];
    public $timestamps = false;

    public function category()
	{
		return $this->belongsTo(
			Category::class,
			'fk_id_category',
			'id'
		);
	}

	public function user()
	{
		return $this->belongsTo(
			User::class,
			'fk_id_user',
			'id'
		);
	}
}
