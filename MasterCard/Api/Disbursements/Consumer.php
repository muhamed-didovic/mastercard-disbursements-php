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
class Consumer extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "d2638b44-835b-422a-babb-46d8b977c05d":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}", "delete", array(), array());
            case "7ec578dc-bc5c-49cd-a7bd-3ae632563124":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers", "create", array(), array());
            case "a7b9b971-40bc-4118-87ff-f502220fc767":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}", "read", array(), array());
            case "03480e6a-7996-4c92-8354-364c148bd539":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers", "query", array("ref","contact_id_uri"), array());
            case "adfaecdb-b3b3-4f28-b15f-df82fa6d19bd":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/search", "create", array(), array());
            case "ab527e8f-a4ed-4389-aa20-3feef199f475":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}", "update", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }





   /**
    * Delete object of type Consumer by id
    *
    * @param String id
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return Consumer of the response.
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
        return self::execute("d2638b44-835b-422a-babb-46d8b977c05d", new Consumer($map));
    }

   /**
    * Delete this object of type Consumer
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return Consumer of the response.
    */
    public function delete()
    {
        return self::execute("d2638b44-835b-422a-babb-46d8b977c05d", $this);
    }


   /**
    * Creates object of type Consumer
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Consumer of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("7ec578dc-bc5c-49cd-a7bd-3ae632563124", new Consumer($map));
    }









    /**
     * Returns objects of type Consumer by id and optional criteria
     * @param type $id
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Consumer of the response
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
        return self::execute("a7b9b971-40bc-4118-87ff-f502220fc767",new Consumer($map));
    }






    /**
     * Query objects of type Consumer by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Consumer of the response
     */
    public static function listByReferenceOrContactID($criteria)
    {
        return self::execute("03480e6a-7996-4c92-8354-364c148bd539",new Consumer($criteria));
    }
   /**
    * Creates object of type Consumer
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Consumer of the response of created instance.
    */
    public static function listByReferenceContactIDOrGovernmentID($map)
    {
        return self::execute("adfaecdb-b3b3-4f28-b15f-df82fa6d19bd", new Consumer($map));
    }






    /**
     * Updates an object of type Consumer
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Consumer of the response
     */
    public function update()  {
        return self::execute("ab527e8f-a4ed-4389-aa20-3feef199f475",$this);
    }






}

