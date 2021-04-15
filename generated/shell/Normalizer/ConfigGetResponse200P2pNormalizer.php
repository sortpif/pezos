<?php

namespace Pezos\Generated\Shell\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Pezos\Generated\Shell\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ConfigGetResponse200P2pNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200P2p';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200P2p';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Shell\Model\ConfigGetResponse200P2p();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('expected-proof-of-work', $data)) {
            $object->setExpectedProofOfWork($data['expected-proof-of-work']);
        }
        if (\array_key_exists('bootstrap-peers', $data)) {
            $values = array();
            foreach ($data['bootstrap-peers'] as $value) {
                $values[] = $value;
            }
            $object->setBootstrapPeers($values);
        }
        if (\array_key_exists('listen-addr', $data)) {
            $object->setListenAddr($data['listen-addr']);
        }
        if (\array_key_exists('discovery-addr', $data) && $data['discovery-addr'] !== null) {
            $object->setDiscoveryAddr($data['discovery-addr']);
        }
        elseif (\array_key_exists('discovery-addr', $data) && $data['discovery-addr'] === null) {
            $object->setDiscoveryAddr(null);
        }
        if (\array_key_exists('private-mode', $data)) {
            $object->setPrivateMode($data['private-mode']);
        }
        if (\array_key_exists('limits', $data)) {
            $object->setLimits($this->denormalizer->denormalize($data['limits'], 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200P2pLimits', 'json', $context));
        }
        if (\array_key_exists('disable_mempool', $data)) {
            $object->setDisableMempool($data['disable_mempool']);
        }
        if (\array_key_exists('enable_testchain', $data)) {
            $object->setEnableTestchain($data['enable_testchain']);
        }
        if (\array_key_exists('greylisting_config', $data)) {
            $object->setGreylistingConfig($this->denormalizer->denormalize($data['greylisting_config'], 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200P2pGreylistingConfig', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getExpectedProofOfWork()) {
            $data['expected-proof-of-work'] = $object->getExpectedProofOfWork();
        }
        if (null !== $object->getBootstrapPeers()) {
            $values = array();
            foreach ($object->getBootstrapPeers() as $value) {
                $values[] = $value;
            }
            $data['bootstrap-peers'] = $values;
        }
        if (null !== $object->getListenAddr()) {
            $data['listen-addr'] = $object->getListenAddr();
        }
        if (null !== $object->getDiscoveryAddr()) {
            $data['discovery-addr'] = $object->getDiscoveryAddr();
        }
        if (null !== $object->getPrivateMode()) {
            $data['private-mode'] = $object->getPrivateMode();
        }
        if (null !== $object->getLimits()) {
            $data['limits'] = $this->normalizer->normalize($object->getLimits(), 'json', $context);
        }
        if (null !== $object->getDisableMempool()) {
            $data['disable_mempool'] = $object->getDisableMempool();
        }
        if (null !== $object->getEnableTestchain()) {
            $data['enable_testchain'] = $object->getEnableTestchain();
        }
        if (null !== $object->getGreylistingConfig()) {
            $data['greylisting_config'] = $this->normalizer->normalize($object->getGreylistingConfig(), 'json', $context);
        }
        return $data;
    }
}