<?php

namespace App\Http\Controllers;
use App\Repositories\UserFileRepository;
use App\Repositories\UserDatabaseRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $users;
    public function __construct(UserFileRepository $user)
    {
        $this->users = $user;
    }
    public function index(){
        // $user = new UserDatabaseRepository();
        echo $this->users->save();
    }
}
