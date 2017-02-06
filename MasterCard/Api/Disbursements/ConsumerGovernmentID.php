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
			case "f5d5f726-3e19-40ae-a717-bffcc6707c00":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids", "create", array(), array());
			case "1194da6b-fc18-476f-847e-4e929ee635d8":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids/{governmentId}", "delete", array(), array());
			case "e9e89297-6519-4d7a-b267-e3ea6c383ad9":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids/{governmentId}", "read", array(), array());
			case "c840d440-c2e7-4bb5-af38-258e203cbeb2":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids", "query", array(), array());
			case "2d076d0a-1e8c-429d-8438-7a8987e0d431":
				return new OperationConfig("/send/v1/partners/{partnerId}/consumers/{consumerId}/government_ids/{governmentId}", "update", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext());
	}


   /**
	* Creates object of type ConsumerGovernmentID
	*
	* @param Map map, containing the required parameters to create a new object
	* @return ConsumerGovernmentID of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("f5d5f726-3e19-40ae-a717-bffcc6707c00", new ConsumerGovernmentID($map));
	}








   /**
	* Delete object of type ConsumerGovernmentID by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return ConsumerGovernmentID of the response.
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
		return self::execute("1194da6b-fc18-476f-847e-4e929ee635d8", new ConsumerGovernmentID($map));
	}

   /**
	* Delete this object of type ConsumerGovernmentID
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return ConsumerGovernmentID of the response.
	*/
	public function delete()
	{
		return self::execute("1194da6b-fc18-476f-847e-4e929ee635d8", $this);
	}






	/**
	 * Returns objects of type ConsumerGovernmentID by id and optional criteria
	 * @param type $id
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return ConsumerGovernmentID of the response
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
		return self::execute("e9e89297-6519-4d7a-b267-e3ea6c383ad9",new ConsumerGovernmentID($map));
	}






	/**
	 * Query objects of type ConsumerGovernmentID by id and optional criteria
	 *
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return ConsumerGovernmentID of the response
	 */
	public static function listAll($criteria)
	{
		return self::execute("c840d440-c2e7-4bb5-af38-258e203cbeb2",new ConsumerGovernmentID($criteria));
	}

	/**
	 * Updates an object of type ConsumerGovernmentID
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return ConsumerGovernmentID of the response
	 */
	public function update()  {
		return self::execute("2d076d0a-1e8c-429d-8438-7a8987e0d431",$this);
	}






}

