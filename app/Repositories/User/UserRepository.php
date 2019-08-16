<?php 
namespace App\Repositories\User;
use App\Repositories\BaseRepository;
use App\User;
use App\Repositories\User\InterfaceUser;

#use for login tokens
use Laravel\Passport\Client;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserRepository extends BaseRepository implements InterfaceUser{
    private $client;
    private $user;

    public function __construct()
        {
            $this->client=Client::find(2);
            $this->user=new User();
        }

    public function getModel()
        {
            return $this->user;
        }

    public function Login($request)
        {
            $validator=\Validator::make($request->all(),[
                'username'=>'required',
                'password'=>'required|min:6',

            ]);

            if($validator->fails())
                {
                    return response()->json($errors=$validator->errors(),400);
                }

            $user=User::where('email',$request->username)->orwhere('name',$request->username)->where('state',1)->first();
                if($user)
                    {
                        $params=[
                            'grant_type'=>'password',
                            'client_id'=>$this->client->id,
                            'client_secret'=>$this->client->secret,
                            'username'=>$request->username,
                            'password'=>$request->password,
                            'scope'=>'*'
                        ];

                        $request->request->add($params);
                        $proxy=Request::create('oauth/token','POST');
                            return Route::dispatch($proxy);
                    }
                else
                    {
                        return response()->json("No se pudo iniciar sesíon correctamente",401);
                    }
        }
    public function refresh($request)
        {
            $this->validate($request, [
                'refresh_token' => 'required'
            ]);
    
            $params = [
                'grant_type' => 'refresh_token',
                'client_id' => $this->client->id,
                'client_secret' => $this->client->secret,
                'username' => request('username'),
                'password' => request('password')
            ];
    
            $request->request->add($params);
    
             $proxy = Request::create('oauth/token', 'POST');
    
            return Route::dispatch($proxy);
        }
        public function Logout()
        {
            
          $accessToken = Auth::user()->token();

          DB::table('oauth_refresh_tokens')->where('access_token_id', $accessToken->id)->update(['revoked' => true]);
    
          $accessToken->revoke();
    
          return response()->json('success', 200);
    
    
        }
    
        public function prueba(Request $request)
        {
    
        return response()->json("hola");
    
        }
}
