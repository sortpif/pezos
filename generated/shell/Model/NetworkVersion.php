<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class NetworkVersion
{
    /**
     * A name for the distributed DB protocol.
     *
     * @var mixed
     */
    protected $chainName;
    /**
     * A version number for the distributed DB protocol.
     *
     * @var int
     */
    protected $distributedDbVersion;
    /**
     * A version number for the p2p layer.
     *
     * @var int
     */
    protected $p2pVersion;

    /**
     * A name for the distributed DB protocol.
     *
     * @return mixed
     */
    public function getChainName()
    {
        return $this->chainName;
    }

    /**
     * A name for the distributed DB protocol.
     *
     * @param mixed $chainName
     */
    public function setChainName($chainName): self
    {
        $this->chainName = $chainName;

        return $this;
    }

    /**
     * A version number for the distributed DB protocol.
     */
    public function getDistributedDbVersion(): int
    {
        return $this->distributedDbVersion;
    }

    /**
     * A version number for the distributed DB protocol.
     */
    public function setDistributedDbVersion(int $distributedDbVersion): self
    {
        $this->distributedDbVersion = $distributedDbVersion;

        return $this;
    }

    /**
     * A version number for the p2p layer.
     */
    public function getP2pVersion(): int
    {
        return $this->p2pVersion;
    }

    /**
     * A version number for the p2p layer.
     */
    public function setP2pVersion(int $p2pVersion): self
    {
        $this->p2pVersion = $p2pVersion;

        return $this;
    }
}
