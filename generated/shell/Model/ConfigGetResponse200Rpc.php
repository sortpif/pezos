<?php

namespace Pezos\Generated\Shell\Model;

class ConfigGetResponse200Rpc
{
    /**
     * Hosts to listen to. If the port is not specified, the default port 8732 will be assumed.
     *
     * @var mixed[]
     */
    protected $listenAddrs;
    /**
     * Legacy value: Host to listen to
     *
     * @var mixed
     */
    protected $listenAddr;
    /**
     * Cross Origin Resource Sharing parameters, see https://en.wikipedia.org/wiki/Cross-origin_resource_sharing.
     *
     * @var mixed[]
     */
    protected $corsOrigin;
    /**
     * Cross Origin Resource Sharing parameters, see https://en.wikipedia.org/wiki/Cross-origin_resource_sharing.
     *
     * @var mixed[]
     */
    protected $corsHeaders;
    /**
     * Certificate file (necessary when TLS is used).
     *
     * @var mixed
     */
    protected $crt;
    /**
     * Key file (necessary when TLS is used).
     *
     * @var mixed
     */
    protected $key;
    /**
     * Hosts to listen to. If the port is not specified, the default port 8732 will be assumed.
     *
     * @return mixed[]
     */
    public function getListenAddrs() : array
    {
        return $this->listenAddrs;
    }
    /**
     * Hosts to listen to. If the port is not specified, the default port 8732 will be assumed.
     *
     * @param mixed[] $listenAddrs
     *
     * @return self
     */
    public function setListenAddrs(array $listenAddrs) : self
    {
        $this->listenAddrs = $listenAddrs;
        return $this;
    }
    /**
     * Legacy value: Host to listen to
     *
     * @return mixed
     */
    public function getListenAddr()
    {
        return $this->listenAddr;
    }
    /**
     * Legacy value: Host to listen to
     *
     * @param mixed $listenAddr
     *
     * @return self
     */
    public function setListenAddr($listenAddr) : self
    {
        $this->listenAddr = $listenAddr;
        return $this;
    }
    /**
     * Cross Origin Resource Sharing parameters, see https://en.wikipedia.org/wiki/Cross-origin_resource_sharing.
     *
     * @return mixed[]
     */
    public function getCorsOrigin() : array
    {
        return $this->corsOrigin;
    }
    /**
     * Cross Origin Resource Sharing parameters, see https://en.wikipedia.org/wiki/Cross-origin_resource_sharing.
     *
     * @param mixed[] $corsOrigin
     *
     * @return self
     */
    public function setCorsOrigin(array $corsOrigin) : self
    {
        $this->corsOrigin = $corsOrigin;
        return $this;
    }
    /**
     * Cross Origin Resource Sharing parameters, see https://en.wikipedia.org/wiki/Cross-origin_resource_sharing.
     *
     * @return mixed[]
     */
    public function getCorsHeaders() : array
    {
        return $this->corsHeaders;
    }
    /**
     * Cross Origin Resource Sharing parameters, see https://en.wikipedia.org/wiki/Cross-origin_resource_sharing.
     *
     * @param mixed[] $corsHeaders
     *
     * @return self
     */
    public function setCorsHeaders(array $corsHeaders) : self
    {
        $this->corsHeaders = $corsHeaders;
        return $this;
    }
    /**
     * Certificate file (necessary when TLS is used).
     *
     * @return mixed
     */
    public function getCrt()
    {
        return $this->crt;
    }
    /**
     * Certificate file (necessary when TLS is used).
     *
     * @param mixed $crt
     *
     * @return self
     */
    public function setCrt($crt) : self
    {
        $this->crt = $crt;
        return $this;
    }
    /**
     * Key file (necessary when TLS is used).
     *
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * Key file (necessary when TLS is used).
     *
     * @param mixed $key
     *
     * @return self
     */
    public function setKey($key) : self
    {
        $this->key = $key;
        return $this;
    }
}