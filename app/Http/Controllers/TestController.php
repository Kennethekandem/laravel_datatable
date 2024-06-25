<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Order;
class TestController extends Controller
{
    public function Register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'age' => 'required|integer',
            'votes' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Your code logic here

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->age = $request->input('age');
        $user->votes = $request->input('votes');
        $user->save();

        

        return response()->json(['message' => 'Registration successful'], 200);
    }

    public function fetchUsers() {

        try {
            // $users = User::all();
            $users = DB::table('users')->get();
            return response()->json($users, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        /* $users = User::all();
        return response()->json($users, 200); */
    }

    public function whereClause() {
        $users = DB::table('users')->where('id', 1)->get();
        // $users = DB::table('users')->where('email', '=', 'kennyekandem@gmail.com')->get();
        return response()->json($users, 200);
    }

    public function selectSpecificColumns() {
        $users = DB::table('users')->select('name', 'votes')->get();
        return response()->json($users, 200);
    }

    public function addSelectColumns() {
        $query = DB::table('users')->select('name');
        $users = $query->addSelect('age')->get();
        return response()->json($users, 200);
    }

    public function topVote() {
        $users = DB::table('users')->where('votes', '=', 100)->get();
        return response()->json($users, 200);
    }

    public function mmultipleWhere() {
        $users = DB::table('users')->where('votes', '>=', 100)
        ->where('email', '!=', '')
        ->where('age', '>=', 20)->get();
        return response()->json($users, 200);
    }

    public function multipleWhereSimplified() {

        $queryParams = [['votes', '>=', 100], ['age', '>=', 20]];

        $users = DB::table('users')->where($queryParams)->get();
        return response()->json($users, 200);
    }

    public function groupByClause() {

        $users = DB::table('users')
             ->select('age', DB::raw('count(*) as total, age'))
             ->where('age', '>', 1)
             ->groupBy('age')
             ->get();
        return response()->json($users, 200);
    }

    public function distinctClause() {
        $users = DB::table('users')->distinct()->get();
        return response()->json($users, 200);
    }

    public function innerJoinClause() {

        $users = DB::table('users')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.name', 'orders.order_date')
            ->get();
        return response()->json($users, 200);
    }

    public function leftJoinClause() {

        $users = DB::table('users')
            ->leftJoin('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.email', 'orders.order_date')
            ->get();
        return response()->json($users, 200);
    }

    public function rightJoinClause() {
        $users = DB::table('users')
            ->rightJoin('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.name', 'orders.order_date')
            ->get();
        return response()->json($users, 200);
    }

    public function moreOptions($value = null) {

        $query = DB::table('users')->select("name", "votes");
        if ($value) {
            $query->addSelect($value /* can be age 🤷🏾‍♂️ */); 
        }
        $result = $query->get();
        return response()->json($result, 200);
    }

    // where clause

    public function multipleWhereCause() {
        $users = DB::table('users')
            ->where('votes', '>=', 100)
            ->where('age', '>=', 20)
            ->get();
        return response()->json($users, 200);
    }

}
