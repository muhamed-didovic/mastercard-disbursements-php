<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of
 * conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its
 * contributors may be used to endorse or promote products derived from this software
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 */

 namespace MasterCard\Api\Disbursements;

 use MasterCard\Core\Model\BaseObject;
 use MasterCard\Core\Model\RequestMap;
 use MasterCard\Core\Model\OperationMetadata;
 use MasterCard\Core\Model\OperationConfig;


/**
 * 
 */
class ConsumerAccount extends BaseObject {


    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "4154c092-8623-4e35-8f55-489c675bf435":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/accounts", "query", array("ref"), array());
            case "54532e49-de96-46d1-90e6-903750e9620b":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/accounts", "create", array(), array());
            case "d97ccd90-51a0-4286-8b77-6c70dbebd7dd":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/accounts/{accountId}", "read", array(), array());
            case "a6c28034-54ac-400c-add4-e0808b199900":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/accounts/{accountId}", "update", array(), array());
            case "26dd79e7-5677-4d82-b033-1dccc777b5ff":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/accounts/{accountId}", "delete", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        return new OperationMetadata(SDKConfig::getVersion(), SDKConfig::getHost());
    }







    /**
     * Query objects of type ConsumerAccount by id and optional criteria
     * @param type $criteria
     * @return type
     */
    public static function listAll($criteria)
    {
        return self::execute("4154c092-8623-4e35-8f55-489c675bf435",new ConsumerAccount($criteria));
    }
   /**
    * Creates object of type ConsumerAccount
    *
    * @param Map map, containing the required parameters to create a new object
    * @return ConsumerAccount of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("54532e49-de96-46d1-90e6-903750e9620b", new ConsumerAccount($map));
    }









    /**
     * Returns objects of type ConsumerAccount by id and optional criteria
     * @param type $id
     * @param type $criteria
     * @return type
     */
    public static function readByID($id, $criteria = null)
    {
        $map = new RequestMap();
        if (!empty($id)) {
            $map->set("id", $id);
        }
        if ($criteria != null) {
            $map->setAll($criteria);
        }
        return self::execute("d97ccd90-51a0-4286-8b77-6c70dbebd7dd",new ConsumerAccount($map));
    }


   /**
    * Updates an object of type ConsumerAccount
    *
    * @return A ConsumerAccount object representing the response.
    */
    public function update()  {
        return self::execute("a6c28034-54ac-400c-add4-e0808b199900",$this);
    }







   /**
    * Delete object of type ConsumerAccount by id
    *
    * @param String id
    * @return ConsumerAccount of the response of the deleted instance.
    */
    public static function deleteById($id, $requestMap = null)
    {
        $map = new RequestMap();
        if (!empty($id)) {
            $map->set("id", $id);
        }
        if (!empty($requestMap)) {
            $map->setAll($requestMap);
        }
        return self::execute("26dd79e7-5677-4d82-b033-1dccc777b5ff", new ConsumerAccount($map));
    }

   /**
    * Delete this object of type ConsumerAccount
    *
    * @return ConsumerAccount of the response of the deleted instance.
    */
    public function delete()
    {
        return self::execute("26dd79e7-5677-4d82-b033-1dccc777b5ff", $this);
    }




}

