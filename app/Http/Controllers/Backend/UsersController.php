<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\CommonHelper;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

    public function index(Request $request)
    {
        $filters = CommonHelper::getFilterParams($request);
        $filters = CommonHelper::saveSessionSearch($request, $filters);

        $user = DB::table('users')
            ->select(
                'users.*'
            );

        if (!empty($filters)) {
            if (isset($filters['suggest_name']) && $filters['suggest_name'] != "") {
                $user = $user->where('users.fullname', 'LIKE', DB::raw("'%" . $filters['suggest_name'] . "%'"));
            }

            if (isset($filters['status']) && intval($filters['status']) != DEFAULT_SELECT_ALL_VALUE) {
                $user = $user->where('users.status', $filters['status']);
            }
        }
        $user = $user->orderBy('updated_at', 'desc');
        $users = $user->paginate(ITEM_IN_PAGE);

        return view('backend.users.index', [
            "users" => $users,
            "page" => $request->get("page", 1),
            "filters" => $filters
        ]);
    }

}