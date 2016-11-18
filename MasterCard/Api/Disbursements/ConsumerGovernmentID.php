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
class ConsumerGovernmentID extends BaseObject {


    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "d996832f-af10-4117-a7e4-bee49596e779":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids", "query", array(), array());
            case "64ce64e8-c9d4-49db-8139-81cb25bc08b3":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids", "create", array(), array());
            case "3b7b8210-d712-43f8-8c84-8c42c3adea41":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids/{governmentId}", "read", array(), array());
            case "f1fd7438-802c-4146-8339-d18563a29055":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids/{governmentId}", "update", array(), array());
            case "65f1c8e1-21c7-4d74-b2c4-79f46029420b":
                return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids/{governmentId}", "delete", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        return new OperationMetadata(SDKConfig::getVersion(), SDKConfig::getHost());
    }







    /**
     * Query objects of type ConsumerGovernmentID by id and optional criteria
     * @param type $criteria
     * @return type
     */
    public static function listAll($criteria)
    {
        return self::execute("d996832f-af10-4117-a7e4-bee49596e779",new ConsumerGovernmentID($criteria));
    }
   /**
    * Creates object of type ConsumerGovernmentID
    *
    * @param Map map, containing the required parameters to create a new object
    * @return ConsumerGovernmentID of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("64ce64e8-c9d4-49db-8139-81cb25bc08b3", new ConsumerGovernmentID($map));
    }









    /**
     * Returns objects of type ConsumerGovernmentID by id and optional criteria
     * @param type $id
     * @param type $criteria
     * @return type
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
        return self::execute("3b7b8210-d712-43f8-8c84-8c42c3adea41",new ConsumerGovernmentID($map));
    }


   /**
    * Updates an object of type ConsumerGovernmentID
    *
    * @return A ConsumerGovernmentID object representing the response.
    */
    public function update()  {
        return self::execute("f1fd7438-802c-4146-8339-d18563a29055",$this);
    }







   /**
    * Delete object of type ConsumerGovernmentID by id
    *
    * @param String id
    * @return ConsumerGovernmentID of the response of the deleted instance.
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
        return self::execute("65f1c8e1-21c7-4d74-b2c4-79f46029420b", new ConsumerGovernmentID($map));
    }

   /**
    * Delete this object of type ConsumerGovernmentID
    *
    * @return ConsumerGovernmentID of the response of the deleted instance.
    */
    public function delete()
    {
        return self::execute("65f1c8e1-21c7-4d74-b2c4-79f46029420b", $this);
    }




}

