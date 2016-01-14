<?php

class PostsController extends \BaseController {
	public function __construct()
	{
		parent::__construct();
		
		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = Post::with('user');
		
		if (Input::has('search')) {
			$search = Input::get('search');
			$query->where('title',  'like', "%$search%");
			$query->orWhere('body', 'like', "%$search%");
			
			$query->orWhereHas('user', function($q) use ($search) {
				$q->where('email', 'like', "%$search%");
			});
		}
		
		$posts = $query->paginate(4);
		
		if (Request::wantsJson()) {
            return Response::json($posts);
        } else {
			return View::make('posts.index')->with('posts', $posts);
        }
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);

		if(!$post) {
			Session::flash('errorMessage', 'This post does not exist');
			return Redirect::action('PostsController@index');
		}

		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);
	}


	public function store()
	{
		$post = new Post();
		return $this->validateAndSave($post);
	}

	public function update($id)
	{
		$post = Post::find($id);
		return $this->validateAndSave($post);
	}
	protected function validateAndSave($post)
	{
		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->user_id = Auth::id();
			
			$result = $post->save();

			if($result) {
				return Redirect::action('PostsController@show', $post->id);
			} else {
				return Redirect::back()->withInput();
			}
		}
	}

	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();

		$message = 'Post was deleted';

		Session::flash('successMessage', $message);
		return Redirect::action('PostsController@index');
	}
}
