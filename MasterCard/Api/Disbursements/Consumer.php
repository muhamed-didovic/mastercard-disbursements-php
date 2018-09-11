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
            case "af2788b1-2129-434a-91aa-361e8d3d44dd":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}", "delete", array(), array());
            case "2fcafded-d4e3-47f2-aa18-f29becba001c":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers", "create", array(), array());
            case "2e849e28-e6e5-4ffb-a2b8-27ced91a70e4":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}", "read", array(), array());
            case "20e98f12-eace-4987-ba0a-0bc053a70a2a":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers", "query", array("ref","contact_id_uri"), array());
            case "d81c90e3-c2eb-41ad-a920-b39560101912":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/search", "create", array(), array());
            case "d3352874-dae9-4369-aed3-db1a596eb0f3":
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
        return self::execute("af2788b1-2129-434a-91aa-361e8d3d44dd", new Consumer($map));
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
        return self::execute("af2788b1-2129-434a-91aa-361e8d3d44dd", $this);
    }


   /**
    * Creates object of type Consumer
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Consumer of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("2fcafded-d4e3-47f2-aa18-f29becba001c", new Consumer($map));
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
        return self::execute("2e849e28-e6e5-4ffb-a2b8-27ced91a70e4",new Consumer($map));
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
        return self::execute("20e98f12-eace-4987-ba0a-0bc053a70a2a",new Consumer($criteria));
    }
   /**
    * Creates object of type Consumer
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Consumer of the response of created instance.
    */
    public static function listByReferenceContactIDOrGovernmentID($map)
    {
        return self::execute("d81c90e3-c2eb-41ad-a920-b39560101912", new Consumer($map));
    }






    /**
     * Updates an object of type Consumer
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Consumer of the response
     */
    public function update()  {
        return self::execute("d3352874-dae9-4369-aed3-db1a596eb0f3",$this);
    }






}

