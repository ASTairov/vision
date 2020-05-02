<?
namespace ASTairov\Seat\Vision\Http\Controllers;

use Seat\Services\Repositories\Character\Info;
use Seat\Services\Repositories\Character\Skills;
use Seat\Services\Repositories\Configuration\UserRespository;
use Seat\Web\Http\Controllers\Controller;
use Seat\Web\Models\Acl\Role;

use Seat\Eveapi\Models\Location\CharacterLocation;
use Seat\Eveapi\Models\Location\CharacterOnline;
use Seat\Eveapi\Models\Location\CharacterShip;
use Seat\Eveapi\Jobs\Location\Character;

class VisionController extends Controller
{
    public function getVisionView()
    {
        $visiongroups= Location::handle('95021222');
        return view('vision::vision',compact('visiongroups'));
    }
}
