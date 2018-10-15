<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\Query\Query;
use Doctrine\ODM\MongoDB\UnitOfWork;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadataInfo;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class FOSMessageBundleDocumentMessageHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate($document, $data, array $hints = array())
    {
        $hydratedData = array();

        /** @Field(type="string") */
        if (isset($data['body']) || (! empty($this->class->fieldMappings['body']['nullable']) && array_key_exists('body', $data))) {
            $value = $data['body'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['body']['type'];
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['body']->setValue($document, $return);
            $hydratedData['body'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['createdAt'])) {
            $value = $data['createdAt'];
            if ($value === null) { $return = null; } else { $return = \Doctrine\ODM\MongoDB\Types\DateType::getDateTime($value); }
            $this->class->reflFields['createdAt']->setValue($document, clone $return);
            $hydratedData['createdAt'] = $return;
        }

        /** @Field(type="boolean") */
        if (isset($data['isSpam']) || (! empty($this->class->fieldMappings['isSpam']['nullable']) && array_key_exists('isSpam', $data))) {
            $value = $data['isSpam'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['isSpam']['type'];
                $return = (bool) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['isSpam']->setValue($document, $return);
            $hydratedData['isSpam'] = $return;
        }

        /** @Field(type="collection") */
        if (isset($data['unreadForParticipants']) || (! empty($this->class->fieldMappings['unreadForParticipants']['nullable']) && array_key_exists('unreadForParticipants', $data))) {
            $value = $data['unreadForParticipants'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['unreadForParticipants']['type'];
                $return = $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['unreadForParticipants']->setValue($document, $return);
            $hydratedData['unreadForParticipants'] = $return;
        }
        return $hydratedData;
    }
}