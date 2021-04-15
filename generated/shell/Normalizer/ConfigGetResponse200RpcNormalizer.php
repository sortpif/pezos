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
class ConfigGetResponse200RpcNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200Rpc';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200Rpc';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Shell\Model\ConfigGetResponse200Rpc();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('listen-addrs', $data)) {
            $values = array();
            foreach ($data['listen-addrs'] as $value) {
                $values[] = $value;
            }
            $object->setListenAddrs($values);
        }
        if (\array_key_exists('listen-addr', $data)) {
            $object->setListenAddr($data['listen-addr']);
        }
        if (\array_key_exists('cors-origin', $data)) {
            $values_1 = array();
            foreach ($data['cors-origin'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCorsOrigin($values_1);
        }
        if (\array_key_exists('cors-headers', $data)) {
            $values_2 = array();
            foreach ($data['cors-headers'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCorsHeaders($values_2);
        }
        if (\array_key_exists('crt', $data)) {
            $object->setCrt($data['crt']);
        }
        if (\array_key_exists('key', $data)) {
            $object->setKey($data['key']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getListenAddrs()) {
            $values = array();
            foreach ($object->getListenAddrs() as $value) {
                $values[] = $value;
            }
            $data['listen-addrs'] = $values;
        }
        if (null !== $object->getListenAddr()) {
            $data['listen-addr'] = $object->getListenAddr();
        }
        if (null !== $object->getCorsOrigin()) {
            $values_1 = array();
            foreach ($object->getCorsOrigin() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['cors-origin'] = $values_1;
        }
        if (null !== $object->getCorsHeaders()) {
            $values_2 = array();
            foreach ($object->getCorsHeaders() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['cors-headers'] = $values_2;
        }
        if (null !== $object->getCrt()) {
            $data['crt'] = $object->getCrt();
        }
        if (null !== $object->getKey()) {
            $data['key'] = $object->getKey();
        }
        return $data;
    }
}