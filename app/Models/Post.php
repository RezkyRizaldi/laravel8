<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	use HasFactory;

	// protected $fillable = ['title', 'slug', 'excerpt', 'body'];
	protected $guarded = ['id'];
	protected $with = ['category', 'author'];
	protected $appends = ['published_at'];

	public function scopeFilter($query, array $filters)
	{
		// if (isset($filters['search']) ? $filters['search'] : false) {
		// 	return $query
		// 		->where('title', 'LIKE', '%' . $filters['search'] . '%')
		// 		->orWhere('body', 'LIKE', '%' . $filters['search'] . '%');
		// }

		$query->when(isset($filters['search']) ? $filters['search'] : false, function ($query, $search) {
			return $query
				->where('title', 'like', '%' . $search . '%')
				->orWhere('body', 'like', '%' . $search . '%');
		});

		$query->when(isset($filters['category']) ? $filters['category'] : false, function ($query, $category) {
			return $query
				->whereHas('category', function ($query) use ($category) {
					$query->where('slug', $category);
				});
		});

		$query->when(isset($filters['author']) ? $filters['author'] : false, function ($query, $author) {
			return $query
				->whereHas('author', function ($query) use ($author) {
					$query->where('username', $author);
				});
		});
	}

	public function getPublishedAtAttribute()
	{
		$published_at = $this->created_at->diffForHumans();

		return $published_at;
	}

	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function author()
	{
		return $this->belongsTo(User::class, "user_id");
	}
}
