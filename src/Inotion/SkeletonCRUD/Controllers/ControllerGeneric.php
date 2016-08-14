<?php namespace Inotion\SkeletonCRUD\Controllers;

use Illuminate\Http\Request;
use Inotion\SkeletonCRUD\Interfaces\IGeneric;
use App\Http\Controllers\Controller;

/**
 * Class ControllerGeneric
 * @package Inotion\SkeletonCRUD\Controllers
 */
class ControllerGeneric  extends Controller implements IGeneric {

    /**
     * @var
     */
    protected $object;

    /**
     * @return mixed
     */
    public function allItems()
    {
        try{
            return $this->object->all();
        }catch (\Exception $e){
            throw new \Exception("Erro ao tentar listar os dados.");
        }
    }

    /**
     * @param $fields
     * @return bool
     */
    public function saveItem( $fields )
    {
        try{
            $item = $this->object;
            return ( $item->create( $fields ) ) ? true : false;
        }catch (\Exception $e){
            throw new \Exception("Erro ao tentar salvar os dados.");
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getByID( $id )
    {
        try{
            return $this->object->find( $id );
        }catch (\Exception $e){
            throw new \Exception("Erro ao tentar buscar os dados.");
        }
    }

    /**
     * @param $id
     * @return bool
     */
    public function deleteItem( $id )
    {
        try{
            $item = $this->object->find( $id );
            $bool = false;
            if(!empty( $item )){
                $bool = ( $item->delete() ) ? true : false;
            }
            return $bool;
        }catch (\Exception $e){
            throw new \Exception("Erro ao tentar deletar os dados.");
        }
    }

    /**
     * @param $fields
     * @return bool
     */
    public function updateItem( $id, $fields )
    {
        try{
            $item = $this->object->find( $id );
            $bool = false;
            if(!empty($item)){
                $item->fill( $fields );
                $bool = ($item->save()) ? true : false;
            }
            return $bool;
        }catch (\Exception $e){
            throw new \Exception("Erro ao tentar atualizar os dados.");
        }

    }

}