<?php namespace Inotion\SkeletonCRUD\Controllers;

use Inotion\SkeletonCRUD\Interfaces\IGeneric;
use \Controller;

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
        return $this->object->all();
    }

    /**
     * @param $fields
     * @return bool
     */
    public function saveItem( $fields )
    {
        $item = $this->object;
        return ( $item->create( $fields ) ) ? true : false;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getByID( $id )
    {
        return $this->object->find( $id );
    }

    /**
     * @param $id
     * @return bool
     */
    public function deleteItem( $id )
    {
        $item = $this->object->find( $id );
        return ( $item->delete() ) ? true : false;
    }

    /**
     * @param $fields
     * @return bool
     */
    public function updateItem( $fields )
    {
        $item = $this->object->find( $fields['id'] );
        $item->fill( $fields );
        return ($item->save()) ? true : false;
    }

}