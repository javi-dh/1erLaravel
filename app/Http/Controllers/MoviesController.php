<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
	private $movies = [
		1 => "Toy Story",
		2 => "Buscando a Nemo",
		3 => "Avatar",
		4 => "Star Wars: Episodio V",
		5 => "Up",
		6 => "Mary and Max"
	];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
		public function index()
		{
			$myMovies = $this->movies;
			$elTeacher = "Lando";

			return view('movies.index')->with(compact('myMovies', 'elTeacher'));

			// return view('movies.index')->with('moviesList', $myMovies);

			// return view('movies.index')->with([
			// 	'moviesList' => $myMovies,
			// 	'elProfe' => 'Lando'
			// ]);
		}

		public function searchMovieById($id)
		{
			$myMovies = [
				1 => "Toy Story",
				2 => "Buscando a Nemo",
				3 => "Avatar",
				4 => "Star Wars: Episodio V",
				5 => "Up",
				6 => "Mary and Max"
			];

			// foreach ($myMovies as $idMovie => $movieTitle) {
			// 	if ($id == $idMovie) {
			// 		$result = $movieTitle;
			// 		break;
			// 	} else {
			// 		$result = 'No se encontró la película';
			// 	}
			// }

			// return $result;

			// foreach ($myMovies as $idMovie => $movieTitle) {
			// 	if ($id == $idMovie) {
			// 		return $movieTitle;
			// 	}
			// }
			//
			// return 'No se encontró la película';

			foreach ($myMovies as $idMovie => $movieTitle) {
				if ($id == $idMovie) return $movieTitle;
			}

			return 'No se encontró la película';
		}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

	public function test()
	{
		$movies = $this->movies;
		$arrayVacio = ['Salud', 'Paz'];

		return view('movies.test')->with(compact('movies', 'arrayVacio'));
	}
}
