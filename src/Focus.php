<?php

namespace Jorzel\Focus;

class Focus
{
    public function cnae($accessToken)
    {
        return new CNAE($accessToken);
    }

    public function cnpj($accessToken)
    {
        return new CNPJ($accessToken);
    }

    public function nfse($accessToken)
    {
        return new NFSe($accessToken);
    }

    public function revenda($accessToken)
    {
        return new Revenda($accessToken);
    }

    public function webhook($accessToken)
    {
        return new Webhook($accessToken);
    }
}
