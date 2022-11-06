<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // Allows us to filter on our Listing Model
    public function scopeFilter($query, array $filters) {
			// dd($filters['tag']);

			// If tag exists, filter by tag
			if($filters['tag'] ?? false) {
				$query->where('tags', 'like', '%' . $filters['tag'] . '%');
			}

			if($filters['search'] ?? false) {
				// Decide which fields to search
				$query->where('title', 'like', '%' . $filters['search'] . '%')
					->orWhere('description', 'like', '%' . $filters['search'] . '%')
					->orWhere('tags', 'like', '%' . $filters['search'] . '%');
			}
    }
}
