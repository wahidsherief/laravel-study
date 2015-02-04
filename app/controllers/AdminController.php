<?php 

class AdminController extends BaseController {
 

    public function showAdmin()
    {
        return View::make('pages.admin');
    }

}
