<?php
namespace ASTairov\Seat\Vision\Http\Controllers;

use Seat\Services\Repositories\Character\Info;
use Seat\Services\Repositories\Character\Skills;
use Seat\Services\Repositories\Configuration\UserRespository;
use Seat\Web\Http\Controllers\Controller;
use Seat\Web\Models\Acl\Role;
use Seat\Eveapi\Models\Alliances\Alliance;
use Seat\Eveapi\Models\Alliances\AllianceMember;
use Seat\Eveapi\Models\Character\CharacterInfo;
use Seat\Eveapi\Models\Corporation\CorporationInfo;

use Seat\Eveapi\Models\Location\CharacterLocation;
use Seat\Eveapi\Models\Killmails;
use Seat\Eveapi\Jobs\Location\Character;

use Illuminate\Database\Eloquent\Model;

use Seat\Web\Models;
use Seat\Web\Models\User;

class VisionController extends Controller
{
    /**
    * @param int $type_id
    */

    public function getVisionView()
    {
        //$visiongroups=$this->getVisionbyId('95021222');
        $visiongroups='test';
        return view('vision::vision',compact('visiongroups'));
    }

    public function user1()
    {
        return view('vesion', ['users' => User::all()]);

    }

    public function getVisionbyId(int $type_id)
    {
        return $getVisionbyId=Location::find($type_id);
    }

}
