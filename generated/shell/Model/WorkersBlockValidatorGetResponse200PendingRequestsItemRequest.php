<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class WorkersBlockValidatorGetResponse200PendingRequestsItemRequest
{
    /**
     * @var mixed
     */
    protected $block;
    /**
     * @var mixed
     */
    protected $chainId;
    /**
     * @var mixed
     */
    protected $peer;

    /**
     * @return mixed
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * @param mixed $block
     */
    public function setBlock($block): self
    {
        $this->block = $block;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChainId()
    {
        return $this->chainId;
    }

    /**
     * @param mixed $chainId
     */
    public function setChainId($chainId): self
    {
        $this->chainId = $chainId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPeer()
    {
        return $this->peer;
    }

    /**
     * @param mixed $peer
     */
    public function setPeer($peer): self
    {
        $this->peer = $peer;

        return $this;
    }
}
