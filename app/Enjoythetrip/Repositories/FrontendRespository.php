<?php

namespace App\Enjoythetrip\Repositories; /* Lecture 12 */

use App\TouristObject;

class FrontendRepository  {

    public function getObjectsForMainPage()
    {
        return TouristObject::all();
    }

}