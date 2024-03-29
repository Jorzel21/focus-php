<?php

namespace Jorzel\Focus\Utils;

use Illuminate\Support\Facades\Http;

class Connection
{
    protected $accessToken;
    protected $baseUrl;

    /*
     * Pega valores no arquivo de configuração do pacote e atribui às variáveis
     * para utilização na classe.
     *
     * @return void
     */
    public function __construct($accessToken)
    {
        $this->accessToken = $accessToken;
        $this->baseUrl = config('focus.base_url');
    }

    /*
     * Realiza uma solicitação get padrão utilizando
     * Bearer Authentication.
     *
     * @param string $url
     * @param array|null $params
     * @return array
     */
    public function get($url, $params = null)
    {
        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json'
            ])
                ->withBasicAuth($this->accessToken, '')
                ->get($this->baseUrl . $url, $params);

            return [
                'code' => $response->getStatusCode(),
                'response' => json_decode($response->getBody(), true)
            ];
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage()
            ];
        }
    }

    /*
     * Realiza uma solicitação post padrão utilizando
     * Bearer Authentication.
     *
     * @param string $url
     * @param array|null $params
     * @return array
     */
    public function post($url, $params = array())
    {
        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json'
            ])
                ->withBasicAuth($this->accessToken, '')
                ->post($this->baseUrl . $url, $params);

            return [
                'code' => $response->getStatusCode(),
                'response' => json_decode($response->getBody(), true)
            ];
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage()
            ];
        }
    }

    public function put($url, $params = array())
    {
        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json'
            ])
                ->withBasicAuth($this->accessToken, '')
                ->post($this->baseUrl . $url, $params);

            return [
                'code' => $response->getStatusCode(),
                'response' => json_decode($response->getBody(), true)
            ];
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage()
            ];
        }
    }

    public function delete($url)
    {
        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json'
            ])
                ->withBasicAuth($this->accessToken, '')
                ->delete($this->baseUrl . $url);

            return [
                'code' => $response->getStatusCode(),
                'response' => json_decode($response->getBody(), true)
            ];
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage()
            ];
        }
    }
}
