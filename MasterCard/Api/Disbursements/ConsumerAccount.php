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
			case "3e749a5b-c5e9-4347-8222-3f0c2045fcf5":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/accounts", "create", array(), array());
			case "1b65cb48-b445-4cbc-81af-fd2347c24da5":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/accounts/{accountId}", "delete", array(), array());
			case "a5156840-8b6b-4a76-ab1c-b7437c049399":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/accounts/{accountId}", "read", array(), array());
			case "7f011200-b434-420b-a765-135d0118335d":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/accounts", "query", array("ref"), array());
			case "a620651f-304d-46df-a976-7cd41ce6cb3c":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/accounts/{accountId}", "update", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext());
	}


   /**
	* Creates object of type ConsumerAccount
	*
	* @param Map map, containing the required parameters to create a new object
	* @return ConsumerAccount of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("3e749a5b-c5e9-4347-8222-3f0c2045fcf5", new ConsumerAccount($map));
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
		return self::execute("1b65cb48-b445-4cbc-81af-fd2347c24da5", new ConsumerAccount($map));
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
		return self::execute("1b65cb48-b445-4cbc-81af-fd2347c24da5", $this);
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
		return self::execute("a5156840-8b6b-4a76-ab1c-b7437c049399",new ConsumerAccount($map));
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
		return self::execute("7f011200-b434-420b-a765-135d0118335d",new ConsumerAccount($criteria));
	}

	/**
	 * Updates an object of type ConsumerAccount
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return ConsumerAccount of the response
	 */
	public function update()  {
		return self::execute("a620651f-304d-46df-a976-7cd41ce6cb3c",$this);
	}






}

