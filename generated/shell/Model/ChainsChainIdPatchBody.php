<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class ChainsChainIdPatchBody
{
    /**
     * @var bool
     */
    protected $bootstrapped;

    public function getBootstrapped(): bool
    {
        return $this->bootstrapped;
    }

    public function setBootstrapped(bool $bootstrapped): self
    {
        $this->bootstrapped = $bootstrapped;

        return $this;
    }
}
