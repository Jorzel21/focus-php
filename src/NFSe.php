<?php

namespace Jorzel\Focus;

use Jorzel\Focus\Utils\Connection;
use Jorzel\Focus\Utils\Helpers;

class NFSe
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
     * get NFSe in focusNfse.
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

            return $this->http->get('/v2/nfse/' . $id);
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage()
            ];
        }
    }

    /*
     * create NFSe in focusNfse.
     *
     * @param array $data
     * @return array
     */
    public function create($data, $ref)
    {
        try {
            $this->validateCreateNFSeData($data);

            return $this->http->post('/v2/nfse?ref=' . $ref, $data);
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage()
            ];
        }
    }

    /*
     * cancel NFSe in focusNfse.
     *
     * @param int $id
     * @param array $data
     * @return array
     */
    public function cancel($id, $data)
    {
        try {
            $this->validateCancelNFSeData($data);

            return $this->http->delete('/v2/nfse/' . $id, $data);
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage()
            ];
        }
    }

    /*
     * destroy NFSe in focusNfse.
     *
     * @param int $id
     * @return array
     */
    public function reSendEmail($id, $data)
    {
        try {
            $this->validateReSendEmailNFSeData($data);

            return $this->http->post('/v2/nfse' . $id . '/email', $data);
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage()
            ];
        }
    }
}
