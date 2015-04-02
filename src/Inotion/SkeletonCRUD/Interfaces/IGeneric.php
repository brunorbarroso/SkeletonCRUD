<?php namespace Inotion\SkeletonCRUD\Interfaces;

/**
 * Interface IGeneric
 * @package Inotion\SkeletonCRUD\Interfaces
 */
Interface IGeneric {

    /**
     * Retorna todos os items
     *
     * @return mixed
     */
    public function allItems();

    /**
     * Salva um item
     *
     * @param $objeto
     * @return mixed
     */
    public function saveItem( $objeto );

    /**
     * Obtém um item pelo o ID
     *
     * @param $id
     * @return mixed
     */
    public function getByID( $id );

    /**
     * Deleta um item
     *
     * @param $id
     * @return mixed
     */
    public function deleteItem( $id );

    /**
     * Atualiza um item
     *
     * @param $objeto
     * @return mixed
     */
    public function updateItem( $objeto );

}