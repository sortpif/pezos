<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class UserActivatedProtocolOverridesItem
{
    /**
     * @var mixed
     */
    protected $replacedProtocol;
    /**
     * @var mixed
     */
    protected $replacementProtocol;

    /**
     * @return mixed
     */
    public function getReplacedProtocol()
    {
        return $this->replacedProtocol;
    }

    /**
     * @param mixed $replacedProtocol
     */
    public function setReplacedProtocol($replacedProtocol): self
    {
        $this->replacedProtocol = $replacedProtocol;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReplacementProtocol()
    {
        return $this->replacementProtocol;
    }

    /**
     * @param mixed $replacementProtocol
     */
    public function setReplacementProtocol($replacementProtocol): self
    {
        $this->replacementProtocol = $replacementProtocol;

        return $this;
    }
}
