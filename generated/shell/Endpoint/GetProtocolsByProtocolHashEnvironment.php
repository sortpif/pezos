<?php

namespace Pezos\Generated\Shell\Endpoint;

class GetProtocolsByProtocolHashEnvironment extends \Pezos\Generated\Shell\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Shell\Runtime\Client\Endpoint
{
    protected $Protocol_hash;
    /**
     * (no description)
     *
     * @param string $protocolHash Protocol_hash (Base58Check-encoded)
     */
    public function __construct(string $protocolHash)
    {
        $this->Protocol_hash = $protocolHash;
    }
    use \Pezos\Generated\Shell\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{Protocol_hash}'), array($this->Protocol_hash), '/protocols/{Protocol_hash}/environment');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}