<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ListController extends Controller
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
    public function index()
    {
        $list = new User();

        $paginator = $this->UserRepository->getAllWithPaginate();

        return view('index_main',
            compact('paginator'));
    }


}
