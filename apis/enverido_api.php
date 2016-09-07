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
}
?>