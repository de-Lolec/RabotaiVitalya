<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{

    /**
     * @var Application|mixed
     */
    private $UserRepository;

    public function __construct()
    {
        parent::__construct();

        $this->UserRepository = app(UserRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index($id)
    {
        $list = new User();

        $user = $list->find($id);

        $path = base_path('pandas\food.json');
        $json = file_get_contents($path);
        $city = json_decode($json, true); // декодируем строку json в ассоциативный массив
        $id = $city["id"];
        $food = $city["food"];

        return view('users.profile',
            compact('user', 'food'));

        //return view('Timetable')->with('item', $item);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $item = new User();

        //return view('users.profile');

        return view('users.createTimetable',
            compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        //  $data = $request->input();

        // $item = (new Timetable())->create($data);

        $data = $request->input();
        $item = (new User())->create($data);

        $prepod = (new User())-> create($data);
        dd($prepod);
        if($item) {
            return redirect()->route('user.timetable.create', ['id' => Auth::user()->id, 'name' => Auth::user()->name]);
        }
//        foreach($request->get('categories') as $categoryId){
//            $category = Categories::find($categoryId);
//            $post->categories()->save($category);
//        }

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
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        // $item = $this->TimetableRepository->getEdit($id);

        $user = Auth::user();

        if(empty($user)){
            abort(404);
        }



        return view('users.editProfile',
            compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
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


}
