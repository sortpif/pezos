<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersPreapplyBlockPostResponse200OperationsItem
{
    /**
     * @var HelpersPreapplyBlockPostResponse200OperationsItemAppliedItem[]
     */
    protected $applied;
    /**
     * @var HelpersPreapplyBlockPostResponse200OperationsItemRefusedItem[]
     */
    protected $refused;
    /**
     * @var HelpersPreapplyBlockPostResponse200OperationsItemBranchRefusedItem[]
     */
    protected $branchRefused;
    /**
     * @var HelpersPreapplyBlockPostResponse200OperationsItemBranchDelayedItem[]
     */
    protected $branchDelayed;

    /**
     * @return HelpersPreapplyBlockPostResponse200OperationsItemAppliedItem[]
     */
    public function getApplied(): array
    {
        return $this->applied;
    }

    /**
     * @param HelpersPreapplyBlockPostResponse200OperationsItemAppliedItem[] $applied
     */
    public function setApplied(array $applied): self
    {
        $this->applied = $applied;

        return $this;
    }

    /**
     * @return HelpersPreapplyBlockPostResponse200OperationsItemRefusedItem[]
     */
    public function getRefused(): array
    {
        return $this->refused;
    }

    /**
     * @param HelpersPreapplyBlockPostResponse200OperationsItemRefusedItem[] $refused
     */
    public function setRefused(array $refused): self
    {
        $this->refused = $refused;

        return $this;
    }

    /**
     * @return HelpersPreapplyBlockPostResponse200OperationsItemBranchRefusedItem[]
     */
    public function getBranchRefused(): array
    {
        return $this->branchRefused;
    }

    /**
     * @param HelpersPreapplyBlockPostResponse200OperationsItemBranchRefusedItem[] $branchRefused
     */
    public function setBranchRefused(array $branchRefused): self
    {
        $this->branchRefused = $branchRefused;

        return $this;
    }

    /**
     * @return HelpersPreapplyBlockPostResponse200OperationsItemBranchDelayedItem[]
     */
    public function getBranchDelayed(): array
    {
        return $this->branchDelayed;
    }

    /**
     * @param HelpersPreapplyBlockPostResponse200OperationsItemBranchDelayedItem[] $branchDelayed
     */
    public function setBranchDelayed(array $branchDelayed): self
    {
        $this->branchDelayed = $branchDelayed;

        return $this;
    }
}
