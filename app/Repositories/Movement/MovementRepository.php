<?php 
namespace App\Repositories\Movement;
use App\Repositories\BaseRepository;
use App\Movimiento;
use App\Patrimonio;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Movement\InterfaceMovement;

class MovementRepository extends BaseRepository implements InterfaceMovement{

    private $movement;
    private $patrimonio;

    public function __construct()
        {
            $this->movement=new Movimiento();
            $this->patrimonio=new Patrimonio();
        }

    public function getModel()
        {
            return $this->movement;
        }

    public function index($request)
        {
           $movimiento=$this->movement::search($request->search,$request->parameter)
                                       ->select('movimientos.id','u.name','t.descripcion','t.tipo','movimientos.descripcion as descrip','movimientos.value','movimientos.created_at','movimientos.state')
                                       ->where('id_user',Auth::id())
                                       ->join('users as u','u.id','movimientos.id_user')
                                       ->join('tipo_movimiento as t','t.id','movimientos.id_tipo_movimiento')
                                       ->paginate();

            $patrimonio=$this->patrimonio::where('id_user',Auth::id())->first();                        
                           

           return response()->json(["patrimonio"=>$patrimonio,"movimiento"=>$movimiento],200);
        }

    
}
