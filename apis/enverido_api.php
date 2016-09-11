<?php

namespace Apis;

use GuzzleHttp\Client;

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

	/**
	 * Sets the connection details
	 *
	 * @param string $key The Enverido API key
	 */

	public function __construct($organisation, $key) {
		$this->key = $key;
        $this->organisation = $organisation;

        $this->httpClient = new Client([
            'base_uri' => 'http://'.$organisation.'.enverido.com',
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
        $response = $this->httpClient->request('GET', "/product");
        return json_decode($response->getBody());
    }

    /**
     * Retrieve a specific product's information from the API
     * @param $id int The product ID
     * @return mixed
     */

    public function getProduct($id) {
        $response = $this->httpClient->request('GET', '/product/'.$id);
        return json_decode($response->getBody());
    }

    /**
     * Get an array of issuing authority objects
     * @return mixed
     */

    public function getIssuingAuthorities() {
        $response = $this->httpClient->request('GET', "/authority");
        return json_decode($response->getBody());
    }

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

        $response = $this->httpClient->request('POST', '/product/'.$product.'/licence', [
            'form_params' => $params
        ]);

        return json_decode($response->getBody());
    }

    public function suspendLicence($product, $licence) {
        $response = $this->httpClient->request('PATCH', '/product/'.$product.'/licence/'.$licence.'/suspend');
        return json_decode($response->getBody());
    }

    public function unsuspendLicence($product, $licence) {
        $response = $this->httpClient->request('PATCH', '/product/'.$product.'/licence/'.$licence.'/unsuspend');
        return json_decode($response->getBody());
    }

    public function renew_licence($product, $licence, $expiry) {
        $response = $this->httpClient->request('PATCH', '/product/'.$product.'/licence/'.$licence.'/renew', [
            'form_params' => [
                'expiry' => $expiry
            ]
        ]);

        return json_decode($response->getBody());
    }

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

        $response = $this->httpClient->request('PATCH', '/product/'.$product.'/licence/'.$licence, [
            'form_params' => $params
        ]);

        return json_decode($response->getBody());
    }
}
?>