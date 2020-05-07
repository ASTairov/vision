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
    public function getVisionView()
    {
        $ids=[
        '2114128820',
        '2114796962',
        '2114139809',
        '2114224584',
        '2115384420',
        '2115384467',
        '2115396144',
        '2115327813',
        '2116768440'
    ];
        foreach ($ids as $id){
            $data[getCharName($id)]=[getCharLoc($id)];
        }
        //$char_loc = CharacterInfo::with('location')->find($character_id)->location;
        //$char_name = CharacterInfo::with('location')->find($character_id)->name;
        return view('vision::vision', compact('data'));
    }
    public function getCharName(int $id){
        return $char_name = CharacterInfo::with('location')->find($id)->name;
    }
    public function getCharLoc(int $id){
        return $char_name = CharacterInfo::with('location')->find($id)->name;
    }
}
