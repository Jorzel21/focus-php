<?php

namespace Jorzel\Focus;

use Jorzel\Focus\Utils\Connection;
use Jorzel\Focus\Utils\Helpers;

class Webhook
{
    use Helpers;

    protected $http;

    /*
     * Create a new Connection instance.
     *
     * @return void
     */
    public function __construct($accessToken)
    {
        $this->http = new Connection($accessToken);
    }
    /*
     * get list of webhook in focusNfse.
     *
     * @return array
     */
    public function getList()
    {
        try {
            return $this->http->get('/v2/hooks');
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage()
            ];
        }
    }
    /*
     * get webhook in focusNfse.
     *
     * @param int $id
     * @return array
     */
    public function get($id)
    {
        try {
            $this->validateIdInteger(
                ['id' => $id]
            );

            return $this->http->get('/v2/hooks/' . $id);
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage()
            ];
        }
    }

    /*
     * create webhook in focusNfse.
     *
     * @param array $data
     * @return array
     */
    public function create($data)
    {
        try {
            $this->validateCreateWebhookNFSeData($data);

            return $this->http->post('/v2/hooks', $data);
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage()
            ];
        }
    }

    /*
     * destroy webhook in focusNfse.
     *
     * @param int $id
     * @return array
     */
    public function destroy($id)
    {
        try {
            $this->validateIdInteger([
                'id' => $id
            ]);

            return $this->http->delete('/v2/hooks/' . $id);
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage()
            ];
        }
    }
}
