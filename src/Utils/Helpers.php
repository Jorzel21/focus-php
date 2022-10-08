<?php

namespace Jorzel\Focus\Utils;

use Illuminate\Support\Facades\Validator;

trait Helpers
{

    /*
     * Validate data for get a revenda.
     *
     * @param array $data
     * @return void
     */
    public function validateIdInteger($data)
    {
        $validator = Validator::make($data, [
            'id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            throw new \Exception($validator->errors()->first());
        }
    }

    /*
     * Validate data for creating a new revenda.
     *
     * @param array $data
     * @return void
     */
    public function validateCreateRevendaData($data)
    {
        $validator = Validator::make($data, [
            'nome' => 'required|string',
            'nome_fantasia' => 'required|string',
            'inscricao_estadual' => 'nullable|integer',
            'inscricao_municipal' => 'nullable|integer',
            'cnpj' => 'required|integer|max:14',
            'regime_tributario' => 'required|integer|max:1',
            'email' => 'nullable|email',
            'telefone' => 'required|integer|max:11',
            'logradouro' => 'required|string',
            'numero' => 'required|string',
            'complemento' => 'nullable|string',
            'bairro' => 'required|string',
            'cep' => 'required|integer',
            'municipio' => 'required|string',
            'uf' => 'required|string|max:2',
            'enviar_email_destinatario' => 'nullable|boolean',
            'discrimina_impostos' => 'nullable|boolean',
            'cpf_cnpj_contabilidade' => 'required|integer|max:14',
            'habilita_nfe' => 'nullable|boolean',
            'habilita_nfce' => 'nullable|boolean',
            'habilita_nfse' => 'nullable|boolean',
            'habilita_cte' => 'nullable|boolean',
            'habilita_mdfe' => 'nullable|boolean',
            'habilita_manifestacao' => 'nullable|boolean',
            'habilita_manifestacao_cte' => 'nullable|boolean',
            'csc_nfce_producao' => 'nullable|string',
            'id_token_nfce_producao' => 'nullable|integer',
            'csc_nfce_homologacao' => 'nullable|string',
            'id_token_nfce_homologacao' => 'nullable|integer',
            'proximo_numero_nfe_producao' => 'nullable|integer',
            'proximo_numero_nfe_homologacao' => 'nullable|integer',
            'serie_nfe_producao' => 'nullable|integer',
            'serie_nfe_homologacao' => 'nullable|integer',
            'proximo_numero_nfse_producao' => 'nullable|integer',
            'proximo_numero_nfse_homologacao' => 'nullable|integer',
            'serie_nfse_producao' => 'nullable|integer',
            'serie_nfse_homologacao' => 'nullable|integer',
            'proximo_numero_cte_producao' => 'nullable|integer',
            'proximo_numero_cte_homologacao' => 'nullable|integer',
            'serie_cte_producao' => 'nullable|integer',
            'serie_cte_homologacao' => 'nullable|integer',
            'proximo_numero_cte_os_producao' => 'nullable|integer',
            'proximo_numero_cte_os_homologacao' => 'nullable|integer',
            'serie_cte_os_producao' => 'nullable|integer',
            'serie_cte_os_homologacao' => 'nullable|integer',
            'proximo_numero_mdfe_producao' => 'nullable|integer',
            'proximo_numero_mdfe_homologacao' => 'nullable|integer',
            'serie_mdfe_producao' => 'nullable|integer',
            'serie_mdfe_homologacao' => 'nullable|integer',

            'arquivo_certificado_base64' => 'nullable|string',
            'senha_certificado' => 'nullable|string',
            'arquivo_logo_base64' => 'nullable|string',
            'login_responsavel' => 'nullable|string',
            'senha_responsavel' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            throw new \Exception($validator->errors()->first());
        }
    }

        /*
     * Validate data for updating a new revenda.
     *
     * @param array $data
     * @return void
     */
    public function validateUpdateRevendaData($data)
    {
        $validator = Validator::make($data, [
            'nome' => 'nullable|string',
            'nome_fantasia' => 'nullable|string',
            'inscricao_estadual' => 'nullable|integer',
            'inscricao_municipal' => 'nullable|integer',
            'cnpj' => 'nullable|integer|max:14',
            'regime_tributario' => 'nullable|integer|max:1',
            'email' => 'nullable|email',
            'telefone' => 'nullable|integer|max:11',
            'logradouro' => 'nullable|string',
            'numero' => 'nullable|string',
            'complemento' => 'nullable|string',
            'bairro' => 'nullable|string',
            'cep' => 'nullable|integer',
            'municipio' => 'nullable|string',
            'uf' => 'nullable|string|max:2',
            'enviar_email_destinatario' => 'nullable|boolean',
            'discrimina_impostos' => 'nullable|boolean',
            'cpf_cnpj_contabilidade' => 'nullable|integer|max:14',
            'habilita_nfe' => 'nullable|boolean',
            'habilita_nfce' => 'nullable|boolean',
            'habilita_nfse' => 'nullable|boolean',
            'habilita_cte' => 'nullable|boolean',
            'habilita_mdfe' => 'nullable|boolean',
            'habilita_manifestacao' => 'nullable|boolean',
            'habilita_manifestacao_cte' => 'nullable|boolean',
            'csc_nfce_producao' => 'nullable|string',
            'id_token_nfce_producao' => 'nullable|integer',
            'csc_nfce_homologacao' => 'nullable|string',
            'id_token_nfce_homologacao' => 'nullable|integer',
            'proximo_numero_nfe_producao' => 'nullable|integer',
            'proximo_numero_nfe_homologacao' => 'nullable|integer',
            'serie_nfe_producao' => 'nullable|integer',
            'serie_nfe_homologacao' => 'nullable|integer',
            'proximo_numero_nfse_producao' => 'nullable|integer',
            'proximo_numero_nfse_homologacao' => 'nullable|integer',
            'serie_nfse_producao' => 'nullable|integer',
            'serie_nfse_homologacao' => 'nullable|integer',
            'proximo_numero_cte_producao' => 'nullable|integer',
            'proximo_numero_cte_homologacao' => 'nullable|integer',
            'serie_cte_producao' => 'nullable|integer',
            'serie_cte_homologacao' => 'nullable|integer',
            'proximo_numero_cte_os_producao' => 'nullable|integer',
            'proximo_numero_cte_os_homologacao' => 'nullable|integer',
            'serie_cte_os_producao' => 'nullable|integer',
            'serie_cte_os_homologacao' => 'nullable|integer',
            'proximo_numero_mdfe_producao' => 'nullable|integer',
            'proximo_numero_mdfe_homologacao' => 'nullable|integer',
            'serie_mdfe_producao' => 'nullable|integer',
            'serie_mdfe_homologacao' => 'nullable|integer',

            'arquivo_certificado_base64' => 'nullable|string',
            'senha_certificado' => 'nullable|string',
            'arquivo_logo_base64' => 'nullable|string',
            'login_responsavel' => 'nullable|string',
            'senha_responsavel' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            throw new \Exception($validator->errors()->first());
        }
    }

        /*
     * Validate data for creating a new NFSe.
     *
     * @param array $data
     * @return void
     */
    public function validateCreateNFSeData($data)
    {
        $validator = Validator::make($data, [
            'data_emissao' => 'required|string',
            'natureza_operacao' => 'required|integer|max:1',
            'regime_especial_tributacao' => 'nullable|integer|max:1',
            'optante_simples_nacional' => 'required|boolean',
            'incentivador_cultural' => 'nullable|boolean',
            
            'codigo_obra' => 'nullable|string',
            'art' => 'nullable|string',
            'numero_rps_substituido' => 'nullable|string',
            'serie_rps_substituido' => 'nullable|string',
            'tipo_rps_substituido' => 'nullable|string',

            'prestador.cnpj' => 'required|integer|max:14',
            'prestador.codigo_municipio' => 'required|integer|max:7',
            'prestador.inscricao_municipal' => 'required|string',

            'tomador.cnpj'  => 'nullable|integer|max:14',
            'tomador.cpf'   => 'nullable|integer|max:11',
            'tomador.inscricao_municipal' => 'nullable|string',
            'tomador.razao_social' => 'nullable|string|max:115',
            'tomador.telefone' => 'nullable|integer|max:11',
            'tomador.email' => 'nullable|email',
            'tomador.endereco.logradouro' => 'nullable|string|max:125',
            'tomador.endereco.tipo_logradouro' => 'nullable|string|max:3',
            'tomador.endereco.numero' => 'nullable|string|max:10',
            'tomador.endereco.complemento' => 'nullable|string|max:60',
            'tomador.endereco.bairro' => 'nullable|string|max:60',
            'tomador.endereco.codigo_municipio' => 'nullable|string|max:7',
            'tomador.endereco.uf' => 'nullable|string|max:2',
            'tomador.endereco.cep' => 'nullable|string|max:9',

            'servico.valor_servicos'  => 'required|numeric',
            'servico.valor_deducoes'   => 'nullable|numeric',
            'servico.valor_pis'   => 'nullable|numeric',
            'servico.valor_cofins'   => 'nullable|numeric',
            'servico.valor_inss'   => 'nullable|numeric',
            'servico.valor_ir'   => 'nullable|numeric',
            'servico.valor_csll'   => 'nullable|numeric',
            'servico.iss_retido'   => 'required|boolean',
            'servico.valor_iss'   => 'nullable|numeric',
            'servico.valor_iss_retido'   => 'nullable|numeric',
            'servico.outras_retencoes'   => 'nullable|numeric',
            'servico.base_calculo'   => 'nullable|numeric',
            'servico.aliquota'   => 'nullable|numeric',
            'servico.desconto_incondicionado'   => 'nullable|numeric',
            'servico.desconto_condicionado'   => 'nullable|numeric',
            'servico.item_lista_servico'   => 'required|string',
            'servico.codigo_cnae'   => 'nullable|string',
            'servico.codigo_tributario_municipio'   => 'nullable|string',
            'servico.discriminacao'   => 'required|string',
            'servico.codigo_municipio'   => 'required|integer',
            'servico.percentual_total_tributos'   => 'required|numeric',
            'servico.fonte_total_tributos'   => 'nullable|string',

    
            'intermediario.razao_social'   => 'nullable|string',
            'intermediario.cpf'   => 'nullable|integer|max:11',
            'intermediario.cnpj'   => 'nullable|integer|max:14',
            'intermediario.inscricao_municipal'   => 'nullable|string',
        ]);

        if ($validator->fails()) {
            throw new \Exception($validator->errors()->first());
        }
    }

            /*
     * Validate data for creating a new revenda.
     *
     * @param array $data
     * @return void
     */
    public function validateCancelNFSeData($data)
    {
        $validator = Validator::make($data, [
            'justificativa' => 'required|string|min:15|max:255',
        ]);

        if ($validator->fails()) {
            throw new \Exception($validator->errors()->first());
        }
    }


            /*
     * Validate data for creating a new revenda.
     *
     * @param array $data
     * @return void
     */
    public function validateReSendEmailNFSeData($data)
    {
        $validator = Validator::make($data, [
            'emails' => 'required|array',
        ]);

        if ($validator->fails()) {
            throw new \Exception($validator->errors()->first());
        }
    }


            /*
     * Validate data for creating a new revenda.
     *
     * @param array $data
     * @return void
     */
    public function validateCreateWebhookNFSeData($data)
    {
        $validator = Validator::make($data, [
            'cnpj' => 'nullable|integer|max:14',
            'cpf' => 'nullable|integer|max:11',
            'event' => 'required|string',
            'url' => 'required|url',
            'authorization' => 'nullable|string',
            'authorization_header' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            throw new \Exception($validator->errors()->first());
        }
    }
}