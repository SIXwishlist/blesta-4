<?php

namespace Apis;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

class EnveridoApi {

	/**
	 * @var string The key to use when connecting
	 */
	private $key;

    /**
     * @var string The organisation the user belongs to
     */
    private $organisation;

    /**
     * @var Client Guzzle HTTP client
     */
    private $httpClient;

    protected $module;

	/**
	 * Sets the connection details
	 *
	 * @param string $key The Enverido API key
	 */

	public function __construct($organisation, $key, \Enverido $module) {
		$this->key = $key;
        $this->organisation = $organisation;
        $this->module = $module;

        $this->httpClient = new Client([
            'base_uri' => 'https://'.$organisation.'.enverido.com',
            'headers' => [
                'X-API-KEY' => $key
            ]
        ]);
	}

    /**
     * Get array of product objects
     * @return array Array of product objects
     */

    public function getProducts() {

        $responseBody = null;

        try {
            $response = $this->httpClient->request('GET', "/product");
            $responseBody = json_decode($response->getBody());
        } catch(ClientException $ex) {
            // Log exception
            $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/product', serialize($ex->getMessage()), 'input', false);
            // Throw the same exception, so it's caught in the module and the error is shown to the user
            throw $ex;
        }

        $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/product', serialize($responseBody), 'input', true);
        return $responseBody;
    }

    /**
     * Retrieve a specific product's information from the API
     * @param $id int The product ID
     * @return mixed
     */

    public function getProduct($id) {

        $responseBody = null;

        try {
            $response = $this->httpClient->request('GET', '/product/' . $id);
            $responseBody = json_decode($response->getBody());
        } catch(ClientException $ex) {
            // Log exception
            $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/product/'.$id, serialize($ex->getMessage()), 'input', false);
            // Throw the same exception, so it's caught in the module and the error is shown to the user
            throw $ex;
        }

        $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/product/'.$id, serialize($responseBody), 'input', true);
        return $responseBody;
    }

    /**
     * Get an array of issuing authority objects
     * @return mixed
     */

    public function getIssuingAuthorities() {

        $responseBody = null;

        try {
            $response = $this->httpClient->request('GET', "/authority");
            $responseBody = json_decode($response->getBody());
        } catch(ClientException $ex) {
            $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/authority', serialize($ex->getMessage()), 'input', false);
            // Throw the same exception, so it's caught in the module and the error is shown to the user
            throw $ex;
        }

        $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/authority', serialize($responseBody), 'input', true);
        return $responseBody;
    }

    /**
     * Generate a new licence
     *
     * @param $product
     * @param $authority
     * @param $email
     * @param $ip
     * @param $domain
     * @param $expiry
     * @return mixed
     */

    public function generateLicence($product, $authority, $email,  $ip, $domain, $expiry) {

        $params = array(
            'authority' => $authority,
            'email' => $email,
            'expiry' => $expiry
        );

        if($ip != null) {
            $params['ip'] = $ip;
        }

        if($domain != null) {
            $params['domain'] = $domain;
        }

        $responseBody = null;

         try {
             $response = $this->httpClient->request('POST', '/product/' . $product . '/licence', [
                 'form_params' => $params
             ]);
         } catch(ClientException $ex) {
             $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/product/'.$product.'/licence', serialize($ex->getMessage()), 'output', false);
             // Throw the same exception, so it's caught in the module and the error is shown to the user
             throw $ex;
         }

        $responseBody = json_decode($response->getBody());
        $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/product/'.$product.'/licence', serialize($responseBody), 'output', true);

        return $responseBody;
    }

    /**
     * Suspend the licence
     *
     * @param $product
     * @param $licence
     * @return mixed|null
     */

    public function suspendLicence($product, $licence) {

        $responseBody = null;

        try {
            $response = $this->httpClient->request('PATCH', '/product/' . $product . '/licence/' . $licence . '/suspend');
            $responseBody = json_decode($response->getBody());
        } catch(ClientException $ex) {
            // Log the error
            $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/product/'.$product.'/licence/'.$licence.'/suspend', serialize($ex->getMessage()), 'output', false);
            // Throw the exception again so that it can be passed to the UI
            throw $ex;
        }

        $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/product/'.$product.'/licence/'.$licence.'/suspend', serialize($responseBody), 'output', true);
        return $responseBody;
    }

    /**
     * Unsuspend a licence
     *
     * @param $product
     * @param $licence
     * @return mixed
     */

    public function unsuspendLicence($product, $licence) {

        $responseBody = null;

        try {
            $response = $this->httpClient->request('PATCH', '/product/' . $product . '/licence/' . $licence . '/unsuspend');
            $responseBody = json_decode($response->getBody());
        } catch(ClientException $ex) {
            $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/product/'.$product.'/licence/'.$licence.'/unsuspend', serialize($ex->getMessage()), 'output', false);
            // Throw the same exception, so it's caught in the module and the error is shown to the user
            throw $ex;
        }

        $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/product/'.$product.'/licence/'.$licence.'/unsuspend', serialize($responseBody), 'output', true);
        return $responseBody;
    }

    /**
     * Renew a licence
     *
     * @param $product
     * @param $licence
     * @param $expiry
     * @return mixed|null
     */

    public function renew_licence($product, $licence, $expiry) {

        $responseBody = null;

        try {
            $response = $this->httpClient->request('PATCH', '/product/' . $product . '/licence/' . $licence . '/renew', [
                'form_params' => [
                    'expiry' => $expiry
                ]
            ]);
        } catch(ClientException $ex) {
            $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/product/'.$product.'/licence/'.$licence.'/renew', serialize($ex->getMessage()), 'output', false);
            // Throw the same exception, so it's caught in the module and the error is shown to the user
            throw $ex;
        }

        $responseBody = json_decode($response->getBody());
        $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/product/'.$product.'/licence/'.$licence.'/renew', serialize($responseBody), 'output', true);

        return $responseBody;
    }

    /**
     * Reissue a licence
     *
     * @param $product
     * @param $licence
     * @return mixed
     */

    public function reissue_licence($product, $licence) {

        $responseBody = null;

        try {
            $response = $this->httpClient->request('PATCH', '/product/' . $product . '/licence/' . $licence . '/reissue');
            $responseBody = json_decode($response->getBody());
        } catch(ClientException $ex) {
            $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/product/'.$product.'/licence/'.$licence.'/reissue', serialize($ex->getMessage()), 'output', false);
            // Throw the same exception, so it's caught in the module and the error is shown to the user
            throw $ex;
        }

        $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/product/'.$product.'/licence/'.$licence.'/reissue', serialize($responseBody), 'output', true);
        return $responseBody;
    }

    /**
     * Edit a licence
     *
     * @param $ip
     * @param $domain
     * @param $email
     * @param $product
     * @param $licence
     * @return mixed|null
     */

    public function editLicence($ip, $domain, $email, $product, $licence) {

        $params = array(
            'email' => $email
        );

        if($ip != null) {
            $params['ip'] = $ip;
        }

        if($domain != null) {
            $params['domain'] = $domain;
        }

        $responseBody = null;

        try {
            $response = $this->httpClient->request('PATCH', '/product/' . $product . '/licence/' . $licence, [
                'form_params' => $params
            ]);
        } catch(ClientException $ex) {
            $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/product/'.$product.'/licence/'.$licence, serialize($ex->getMessage()), 'output', false);
            // Throw the same exception, so it's caught in the module and the error is shown to the user
            throw $ex;
        }

        $responseBody = json_decode($response->getBody());
        $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/product/'.$product.'/licence/'.$licence, serialize($responseBody), 'output', true);

        return $responseBody;
    }

    /**
     * Delete a licence
     *
     * @param $product
     * @param $licence
     * @return bool
     */

    public function delete_licence($product, $licence) {

        $response = null;

        try {
            $request = $this->httpClient->delete('/product/'.$product.'/licence/'.$licence);
            $response = json_decode($request->getBody());
        } catch(ClientException $ex) {
            $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/product/'.$product.'/licence/'.$licence, serialize($ex->getMessage()), 'output', false);
            // Throw the same exception, so it's caught in the module and the error is shown to the user
            throw $ex;
        }

        $this->module->passLogEntry($this->httpClient->getConfig('base_uri').'/product/'.$product.'/licence/'.$licence, serialize($response), 'input', true);

        if(property_exists($response, 'deleted')) {
            return $response->deleted;
        } else {
            return false;
        }
    }
}
?>