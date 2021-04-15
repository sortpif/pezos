<?php

namespace Pezos\Generated\Shell\Normalizer;

use Pezos\Generated\Shell\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = array('Pezos\\Generated\\Shell\\Model\\BlockHeader' => 'Pezos\\Generated\\Shell\\Normalizer\\BlockHeaderNormalizer', 'Pezos\\Generated\\Shell\\Model\\Mempool' => 'Pezos\\Generated\\Shell\\Normalizer\\MempoolNormalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkVersion' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkVersionNormalizer', 'Pezos\\Generated\\Shell\\Model\\Operation' => 'Pezos\\Generated\\Shell\\Normalizer\\OperationNormalizer', 'Pezos\\Generated\\Shell\\Model\\P2pConnectionId' => 'Pezos\\Generated\\Shell\\Normalizer\\P2pConnectionIdNormalizer', 'Pezos\\Generated\\Shell\\Model\\P2pPeerPoolEvent' => 'Pezos\\Generated\\Shell\\Normalizer\\P2pPeerPoolEventNormalizer', 'Pezos\\Generated\\Shell\\Model\\P2pPointInfo' => 'Pezos\\Generated\\Shell\\Normalizer\\P2pPointInfoNormalizer', 'Pezos\\Generated\\Shell\\Model\\P2pStat' => 'Pezos\\Generated\\Shell\\Normalizer\\P2pStatNormalizer', 'Pezos\\Generated\\Shell\\Model\\Protocol' => 'Pezos\\Generated\\Shell\\Normalizer\\ProtocolNormalizer', 'Pezos\\Generated\\Shell\\Model\\ProtocolComponentsItem' => 'Pezos\\Generated\\Shell\\Normalizer\\ProtocolComponentsItemNormalizer', 'Pezos\\Generated\\Shell\\Model\\UserActivatedProtocolOverridesItem' => 'Pezos\\Generated\\Shell\\Normalizer\\UserActivatedProtocolOverridesItemNormalizer', 'Pezos\\Generated\\Shell\\Model\\UserActivatedUpgradesItem' => 'Pezos\\Generated\\Shell\\Normalizer\\UserActivatedUpgradesItemNormalizer', 'Pezos\\Generated\\Shell\\Model\\ChainsChainIdPatchBody' => 'Pezos\\Generated\\Shell\\Normalizer\\ChainsChainIdPatchBodyNormalizer', 'Pezos\\Generated\\Shell\\Model\\ChainsChainIdCheckpointGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\ChainsChainIdCheckpointGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\ChainsChainIdInvalidBlocksGetResponse200Item' => 'Pezos\\Generated\\Shell\\Normalizer\\ChainsChainIdInvalidBlocksGetResponse200ItemNormalizer', 'Pezos\\Generated\\Shell\\Model\\ChainsChainIdInvalidBlocksBlockHashDeleteResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\ChainsChainIdInvalidBlocksBlockHashDeleteResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\ChainsChainIdInvalidBlocksBlockHashGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\ChainsChainIdInvalidBlocksBlockHashGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\ChainsChainIdIsBootstrappedGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\ChainsChainIdIsBootstrappedGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\ConfigGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200Rpc' => 'Pezos\\Generated\\Shell\\Normalizer\\ConfigGetResponse200RpcNormalizer', 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200P2p' => 'Pezos\\Generated\\Shell\\Normalizer\\ConfigGetResponse200P2pNormalizer', 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200P2pLimits' => 'Pezos\\Generated\\Shell\\Normalizer\\ConfigGetResponse200P2pLimitsNormalizer', 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200P2pGreylistingConfig' => 'Pezos\\Generated\\Shell\\Normalizer\\ConfigGetResponse200P2pGreylistingConfigNormalizer', 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200Log' => 'Pezos\\Generated\\Shell\\Normalizer\\ConfigGetResponse200LogNormalizer', 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200InternalEvents' => 'Pezos\\Generated\\Shell\\Normalizer\\ConfigGetResponse200InternalEventsNormalizer', 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200Shell' => 'Pezos\\Generated\\Shell\\Normalizer\\ConfigGetResponse200ShellNormalizer', 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200ShellPeerValidator' => 'Pezos\\Generated\\Shell\\Normalizer\\ConfigGetResponse200ShellPeerValidatorNormalizer', 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200ShellBlockValidator' => 'Pezos\\Generated\\Shell\\Normalizer\\ConfigGetResponse200ShellBlockValidatorNormalizer', 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200ShellPrevalidator' => 'Pezos\\Generated\\Shell\\Normalizer\\ConfigGetResponse200ShellPrevalidatorNormalizer', 'Pezos\\Generated\\Shell\\Model\\InjectionBlockPostBody' => 'Pezos\\Generated\\Shell\\Normalizer\\InjectionBlockPostBodyNormalizer', 'Pezos\\Generated\\Shell\\Model\\MonitorBootstrappedGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\MonitorBootstrappedGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\MonitorHeadsChainIdGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\MonitorHeadsChainIdGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\MonitorValidBlocksGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\MonitorValidBlocksGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkConnectionsGetResponse200Item' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkConnectionsGetResponse200ItemNormalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkConnectionsGetResponse200ItemLocalMetadata' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkConnectionsGetResponse200ItemLocalMetadataNormalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkConnectionsGetResponse200ItemRemoteMetadata' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkConnectionsGetResponse200ItemRemoteMetadataNormalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkConnectionsPeerIdDeleteResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkConnectionsPeerIdDeleteResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkConnectionsPeerIdGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkConnectionsPeerIdGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkConnectionsPeerIdGetResponse200LocalMetadata' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkConnectionsPeerIdGetResponse200LocalMetadataNormalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkConnectionsPeerIdGetResponse200RemoteMetadata' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkConnectionsPeerIdGetResponse200RemoteMetadataNormalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkGreylistClearGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkGreylistClearGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPeersPeerIdGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200ConnMetadata' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPeersPeerIdGetResponse200ConnMetadataNormalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadata' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPeersPeerIdGetResponse200PeerMetadataNormalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataResponses' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPeersPeerIdGetResponse200PeerMetadataResponsesNormalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataRequests' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPeersPeerIdGetResponse200PeerMetadataRequestsNormalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataPrevalidatorResults' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPeersPeerIdGetResponse200PeerMetadataPrevalidatorResultsNormalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataUnadvertised' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPeersPeerIdGetResponse200PeerMetadataUnadvertisedNormalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisements' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsNormalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsSent' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsSentNormalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsReceived' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsReceivedNormalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdBanGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPeersPeerIdBanGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdTrustGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPeersPeerIdTrustGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdUnbanGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPeersPeerIdUnbanGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdUntrustGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPeersPeerIdUntrustGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPointsPointPutBody' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPointsPointPutBodyNormalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPointsPointPutResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPointsPointPutResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPointsPointBanGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPointsPointBanGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPointsPointTrustGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPointsPointTrustGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPointsPointUnbanGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPointsPointUnbanGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\NetworkPointsPointUntrustGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\NetworkPointsPointUntrustGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\StatsGcGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\StatsGcGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\VersionGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\VersionGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\VersionGetResponse200Version' => 'Pezos\\Generated\\Shell\\Normalizer\\VersionGetResponse200VersionNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersBlockValidatorGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersBlockValidatorGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersBlockValidatorGetResponse200PendingRequestsItem' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersBlockValidatorGetResponse200PendingRequestsItemNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersBlockValidatorGetResponse200PendingRequestsItemRequest' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersBlockValidatorGetResponse200PendingRequestsItemRequestNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersBlockValidatorGetResponse200BacklogItem' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersBlockValidatorGetResponse200BacklogItemNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersBlockValidatorGetResponse200CurrentRequest' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersBlockValidatorGetResponse200CurrentRequestNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersBlockValidatorGetResponse200CurrentRequestRequest' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersBlockValidatorGetResponse200CurrentRequestRequestNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsGetResponse200Item' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersChainValidatorsGetResponse200ItemNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsGetResponse200ItemInformation' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersChainValidatorsGetResponse200ItemInformationNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersChainValidatorsChainIdGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdGetResponse200PendingRequestsItem' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersChainValidatorsChainIdGetResponse200PendingRequestsItemNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdGetResponse200BacklogItem' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersChainValidatorsChainIdGetResponse200BacklogItemNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdGetResponse200CurrentRequest' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersChainValidatorsChainIdGetResponse200CurrentRequestNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdDdbGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersChainValidatorsChainIdDdbGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdDdbGetResponse200OperationDb' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersChainValidatorsChainIdDdbGetResponse200OperationDbNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdDdbGetResponse200OperationsDb' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersChainValidatorsChainIdDdbGetResponse200OperationsDbNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdDdbGetResponse200BlockHeaderDb' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersChainValidatorsChainIdDdbGetResponse200BlockHeaderDbNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdPeersValidatorsGetResponse200Item' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemInformation' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemInformationNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemPipelines' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersChainValidatorsChainIdPeersValidatorsGetResponse200ItemPipelinesNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200PendingRequestsItem' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200PendingRequestsItemNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200BacklogItem' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200BacklogItemNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200CurrentRequest' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersChainValidatorsChainIdPeersValidatorsPeerIdGetResponse200CurrentRequestNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersPrevalidatorsGetResponse200Item' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersPrevalidatorsGetResponse200ItemNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersPrevalidatorsGetResponse200ItemInformation' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersPrevalidatorsGetResponse200ItemInformationNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersPrevalidatorsChainIdGetResponse200' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersPrevalidatorsChainIdGetResponse200Normalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersPrevalidatorsChainIdGetResponse200PendingRequestsItem' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersPrevalidatorsChainIdGetResponse200PendingRequestsItemNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersPrevalidatorsChainIdGetResponse200BacklogItem' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersPrevalidatorsChainIdGetResponse200BacklogItemNormalizer', 'Pezos\\Generated\\Shell\\Model\\WorkersPrevalidatorsChainIdGetResponse200CurrentRequest' => 'Pezos\\Generated\\Shell\\Normalizer\\WorkersPrevalidatorsChainIdGetResponse200CurrentRequestNormalizer', '\\Jane\\JsonSchemaRuntime\\Reference' => '\\Pezos\\Generated\\Shell\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}