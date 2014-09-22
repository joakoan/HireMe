<?php

use HireMe\Entities\User;
use HireMe\Managers\RegisterManagers;
use HireMe\Repositories\CandidateRepo;
use HireMe\Repositories\CategoryRepo;
use HireMe\Managers\AccountManagers;
use HireMe\Managers\ProfileManagers;

class UsesController extends \BaseController {

    protected $candidateRepo;
    protected $categoryRepo;

    public function __construct(CandidateRepo $candidateRepo, CategoryRepo $categoryRepo){
        $this->candidateRepo = $candidateRepo;
        $this->categoryRepo = $categoryRepo;
    }

	public function singUp()
    {
        $fieldBuilder = new \HireMe\Components\FieldBuilder();
        return View::make('users/sing-up', compact('fieldBuilder'));
    }

    public function register()
    {
       $user = $this->candidateRepo->newCandidate();
       $manager = new RegisterManagers( $user,Input::all() );
       $manager->save();

       return Redirect::route('home');
    }
    public function account()
    {
        $user = Auth::user();

        return View::make('users/account', compact('user') );
    }
    public function updateAccount()
    {
        $user = Auth::user();
        $manager = new AccountManagers( $user,Input::all() );
        $manager->save();

        return Redirect::route('home');
    }

    public function profile()
    {
        $user = Auth::user();
        $candidate = $user->getCandidate();

        $categories = $this->categoryRepo->getList();
        $job_types  = \Lang::get('utils.job_types');

        return View::make('users/profile', compact('user', 'candidate','categories','job_types') );

    }
    public function updateProfile()
    {
        $user = Auth::user();
        $candidate = $user->getCandidate();

        $manager = new ProfileManagers($candidate, Input::all() );

        $manager->save();

        return Redirect::route('home');
    }

}
