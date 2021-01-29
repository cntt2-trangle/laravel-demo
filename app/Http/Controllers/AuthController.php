<?php
// app/Http/Controllers/AuthController.php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;
 
class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            // 'c_password' => 'required|same:password',
        ]);
 
        $user = new User([
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => bcrypt($request->password),
            'country_id'        => $request->country_id,
            'gender'            => $request->gender,
            'community_id'      => $request->community_id,
            'expertise_id'      => $request->expertise_id,
            'business_type_id'  => $request->business_type_id,
            'seek'              => $request->seek,
            'introduction'      => $request->introduction,
            'workplace_id'      => $request->workplace_id
        ]);
 
        $user->save();
 
        return response()->json([
            'status' => 'success',
        ]);
    }
 
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            // 'remember_me' => 'boolean'
        ]);
 
        // if ($request->fails()) {
        //     return response()->json([
        //         'status' => 'fails',
        //         'message' => $request->errors()->first(),
        //         'errors' => $request->errors()->toArray(),
        //     ]);
        // }
 
        $credentials = request(['email', 'password']);
 
        if (!Auth::attempt($credentials)) {
            return response()->json([
                'status' => 'fails',
                'message' => 'Unauthorized'
            ], 401);
        }
 
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
 
        if ($request->remember_me) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }
 
        $token->save();
 
        return response()->json([
            'status' => 'success',
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }
 
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'status' => 'success',
        ]);
    }
 
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}