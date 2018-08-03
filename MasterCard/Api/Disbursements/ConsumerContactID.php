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
class ConsumerContactID extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "c66bb283-85cb-4014-a3cd-704241ba78ef":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/contact_ids", "create", array(), array());
            case "0046ab1c-4412-4908-9193-67ec4424fe2b":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/contact_ids/{contactId}", "delete", array(), array());
            case "7e4bf67e-dec4-4a7a-95f6-57e9bbde0e31":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/contact_ids/{contactId}", "read", array(), array());
            case "0845143e-e24c-47a4-91b2-ae7764bd7537":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/contact_ids", "query", array(), array());
            case "b49ad299-7931-4835-b714-d826dd0b69d4":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/contact_ids/{contactId}", "update", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }


   /**
    * Creates object of type ConsumerContactID
    *
    * @param Map map, containing the required parameters to create a new object
    * @return ConsumerContactID of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("c66bb283-85cb-4014-a3cd-704241ba78ef", new ConsumerContactID($map));
    }








   /**
    * Delete object of type ConsumerContactID by id
    *
    * @param String id
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return ConsumerContactID of the response.
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
        return self::execute("0046ab1c-4412-4908-9193-67ec4424fe2b", new ConsumerContactID($map));
    }

   /**
    * Delete this object of type ConsumerContactID
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return ConsumerContactID of the response.
    */
    public function delete()
    {
        return self::execute("0046ab1c-4412-4908-9193-67ec4424fe2b", $this);
    }






    /**
     * Returns objects of type ConsumerContactID by id and optional criteria
     * @param type $id
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ConsumerContactID of the response
     */
    public static function read($id, $criteria = null)
    {
        $map = new RequestMap();
        if (!empty($id)) {
            $map->set("id", $id);
        }
        if ($criteria != null) {
            $map->setAll($criteria);
        }
        return self::execute("7e4bf67e-dec4-4a7a-95f6-57e9bbde0e31",new ConsumerContactID($map));
    }






    /**
     * Query objects of type ConsumerContactID by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ConsumerContactID of the response
     */
    public static function listAll($criteria)
    {
        return self::execute("0845143e-e24c-47a4-91b2-ae7764bd7537",new ConsumerContactID($criteria));
    }

    /**
     * Updates an object of type ConsumerContactID
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ConsumerContactID of the response
     */
    public function update()  {
        return self::execute("b49ad299-7931-4835-b714-d826dd0b69d4",$this);
    }






}

