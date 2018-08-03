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
            case "4658164a-a04e-4010-800c-6af983ccc208":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/accounts", "create", array(), array());
            case "33aef9af-a940-447d-a672-6b518ea37384":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/accounts/{accountId}", "delete", array(), array());
            case "63667117-2f09-4eb9-8e8e-1351f7043fa2":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/accounts/{accountId}", "read", array(), array());
            case "34cde231-de51-4179-b752-1c8fffe0782f":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/accounts", "query", array("ref"), array());
            case "5d88f9c6-a237-464f-9b45-9fcef2e0758f":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/accounts/{accountId}", "update", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }


   /**
    * Creates object of type ConsumerAccount
    *
    * @param Map map, containing the required parameters to create a new object
    * @return ConsumerAccount of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("4658164a-a04e-4010-800c-6af983ccc208", new ConsumerAccount($map));
    }








   /**
    * Delete object of type ConsumerAccount by id
    *
    * @param String id
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return ConsumerAccount of the response.
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
        return self::execute("33aef9af-a940-447d-a672-6b518ea37384", new ConsumerAccount($map));
    }

   /**
    * Delete this object of type ConsumerAccount
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return ConsumerAccount of the response.
    */
    public function delete()
    {
        return self::execute("33aef9af-a940-447d-a672-6b518ea37384", $this);
    }






    /**
     * Returns objects of type ConsumerAccount by id and optional criteria
     * @param type $id
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ConsumerAccount of the response
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
        return self::execute("63667117-2f09-4eb9-8e8e-1351f7043fa2",new ConsumerAccount($map));
    }






    /**
     * Query objects of type ConsumerAccount by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ConsumerAccount of the response
     */
    public static function listAll($criteria)
    {
        return self::execute("34cde231-de51-4179-b752-1c8fffe0782f",new ConsumerAccount($criteria));
    }

    /**
     * Updates an object of type ConsumerAccount
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ConsumerAccount of the response
     */
    public function update()  {
        return self::execute("5d88f9c6-a237-464f-9b45-9fcef2e0758f",$this);
    }






}

