<?php
namespace ASTairov\Seat\Vision\Http\Controllers;

use Seat\Eveapi\Models\Location\CharacterLocation;
use Seat\Eveapi\Models\Killmails;
use Seat\Eveapi\Jobs\Location\Character;


class VisionController extends Controller
{
    /**
    * @param int $type_id
    */

    public function getVisionView(int $type_id)
    {
        $visiongroups=Location::find($type_id);

        return view('vision::vision',compact('visiongroups'));
    }
}
