<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class _009PsFLorenScriptedTraceItemStackItem
{
    /**
     * @var mixed
     */
    protected $item;
    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @var mixed
     */
    protected $annot;

    /**
     * @return mixed
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param mixed $item
     */
    public function setItem($item): self
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @return mixed
     */
    public function getAnnot()
    {
        return $this->annot;
    }

    /**
     * Either a plain UTF8 string, or a sequence of bytes for strings that contain invalid byte sequences.
     *
     * @param mixed $annot
     */
    public function setAnnot($annot): self
    {
        $this->annot = $annot;

        return $this;
    }
}
