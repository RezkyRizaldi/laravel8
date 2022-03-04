<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
	public function index()
	{
		return view('authors', [
			'authors' => User::orderBy('name')->get(),
		]);
	}

	public function show(User $author)
	{
		return view('author', [
			'author_posts' => $author->posts->load('category', 'author'),
		]);
	}
}
