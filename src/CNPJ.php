<?php

namespace Jorzel\FocusPHP;

use Jorzel\FocusPHP\Utils\Connection;
use Jorzel\FocusPHP\Utils\Helpers;

class CNPJ
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

            return $this->http->get('/v2/cnpjs/' . $id);
        } catch (\Exception $e) {
            return [
                'code' => $e->getCode(),
                'response' => $e->getMessage()
            ];
        }
    }
}
