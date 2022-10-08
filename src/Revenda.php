<?php

namespace Jorzel\Focus;

use Jorzel\Focus\Utils\Connection;
use Jorzel\Focus\Utils\Helpers;

class Revenda
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
     * get company in focusNfse.
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

            return $this->http->get('/v2/empresas/' . $id);
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage()
            ];
        }
    }

    /*
     * create company in focusNfse.
     *
     * @param array $data
     * @return array
     */
    public function create($data)
    {
        try {
            $this->validateCreateRevendaData($data);

            return $this->http->post('/v2/empresas', $data);
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage()
            ];
        }
    }

    /*
     * update company in focusNfse.
     *
     * @param int $id
     * @param array $data
     * @return array
     */
    public function update($id, $data)
    {
        try {
            $this->validateUpdateRevendaData($data);

            return $this->http->put('/v2/empresas/' . $id, $data);
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage()
            ];
        }
    }

    /*
     * destroy company in focusNfse.
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

            return $this->http->delete('/v2/empresas/' . $id);
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage()
            ];
        }
    }
}
