<?php
namespace ASTairov\Seat\Vision\Http\Controllers;

use Seat\Services\Repositories\Character\Info;
use Seat\Services\Repositories\Character\Skills;
use Seat\Services\Repositories\Configuration\UserRespository;
use Seat\Web\Http\Controllers\Controller;
use Seat\Web\Models\Acl\Role;
use Seat\Eveapi\Jobs\EsiBase;
use Seat\Eveapi\Models\Location\CharacterOnline;
use Seat\Eveapi\Models\Location\CharacterShip;

use Seat\Eveapi\Models\Location\CharacterLocation;
use Seat\Eveapi\Jobs\Location\Character;

use Seat\Eveapi\Models\Character\CharacterInfo;
use Seat\Eveapi\Models\Sde\MapDenormalize;
use Seat\Eveapi\Models\Sde\StaStation;
use Seat\Eveapi\Models\Universe\UniverseName;
use Seat\Eveapi\Models\Universe\UniverseStructure;
use Seat\Services\Repositories\Corporation\Members;
use Yajra\DataTables\DataTables;

class VisionController extends Controller
{
    public function getVisionView()
    {
        $visiongroups=Location::find('95021222');
        return view('vision::vision',compact('visiongroups'));
    }
}
