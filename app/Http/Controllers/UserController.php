<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        # Validate Data
        $this->validate($request, [
            'users' => 'required|numeric|max:99|min:1'
        ]);

        # Get data from form
        $users = $request->input('users');

        # Display Ipsum view if no errors exist
        return view('showUser')->with(['users' => $users]);

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

    public function generator(Request $request)
    {

        # Validate Data
        $this->validate($request, [
            'number' => 'required|numeric|max:99|min:1|'
        ]);

        # Get data from form
        $number = $request->input('number');
        $email = $request->input('email');
        $phone = $request->input('phone');

        # Generate data
        #Faker
        $faker = \Faker\Factory::create();

        # Pass variable to faker
        $limit = $number;

        $names = array();
        for ($i = 0; $i < $limit; $i++) {

        $fakernames = $faker->name;
        array_push($names, $fakernames);

        if ($email != '') {
            $fakeremail = $faker->unique()->email;
            array_push($names, $fakeremail);
        }

        if ($phone != '') {
            $fakerphone = $faker->phoneNumber;
            array_push($names, $fakerphone);
        }


        # Display Users view if no errors exist


        }

        return \View::make('showUser')->with('names', $names);

    }




}
