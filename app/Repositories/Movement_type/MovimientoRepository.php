<?php 
namespace App\Repositories\Movement_type;
use App\Repositories\BaseRepository;
use App\TipoMovimiento;
use App\Repositories\Movement_type\InterfaceMovementType;

class MovimientoRepository extends BaseRepository implements InterfaceMovementType{

    private $type;

    public function __construct()
        {
            $this->type=new TipoMovimiento();
        }

    public function getModel()
        {
            return $this->type;
        }

    public function index($request)
        {
           return response()->json($this->type::search($request->search,$request->parameter)->paginate(7),200);
        }

    public function create($request)
        {
            $this->type->descripcion=$request->descripcion;
            $this->type->tipo=$request->tipo;
            $this->type->save();
            return response()->json(["tipo"=>$this->type,"status"=>"created"],200);
        }

    public function updating($request)
        {
            $tipo=$this->find($request->id);
            $tipo->descripcion=$request->descripcion;
            $tipo->tipo=$request->tipo;
            $tipo->save();
            return response()->json(["tipo"=>$tipo,"status"=>"updated"],200);
        }

    public function findId($id)
        {
            $tipo=$this->find($id);
            return response()->json($tipo,200);
        }
}
