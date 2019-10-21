<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:04+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionRelationshipType;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A group of related requests that can be used to capture intended activities that
 * have inter-dependencies such as "give this medication after that one".
 *
 * Class FHIRRequestGroupRelatedAction
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup
 */
class FHIRRequestGroupRelatedAction extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_RELATED_ACTION;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ACTION_ID = 'actionId';
    const FIELD_ACTION_ID_EXT = '_actionId';
    const FIELD_OFFSET_DURATION = 'offsetDuration';
    const FIELD_OFFSET_RANGE = 'offsetRange';
    const FIELD_RELATIONSHIP = 'relationship';
    const FIELD_RELATIONSHIP_EXT = '_relationship';

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The element id of the action this is related to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    private $actionId = null;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A duration or range of durations to apply to the relationship. For example,
     * 30-60 minutes before.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $offsetDuration = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A duration or range of durations to apply to the relationship. For example,
     * 30-60 minutes before.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    private $offsetRange = null;
    /**
     * Defines the types of relationships between actions
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The relationship of this action to the related action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionRelationshipType
     */
    private $relationship = null;

    /**
     * FHIRRequestGroupRelatedAction Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRRequestGroupRelatedAction::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTION_ID])) {
            $ext = (isset($data[self::FIELD_ACTION_ID_EXT]) && is_array($data[self::FIELD_ACTION_ID_EXT]))
                ? $data[self::FIELD_ACTION_ID_EXT]
                : null;
            if ($data[self::FIELD_ACTION_ID] instanceof FHIRId) {
                $this->setActionId($data[self::FIELD_ACTION_ID]);
            } elseif ($ext && is_scalar($data[self::FIELD_ACTION_ID])) {
                $this->setActionId(new FHIRId([FHIRId::FIELD_VALUE => $data[self::FIELD_ACTION_ID]] + $ext));
            } else {
                $this->setActionId(new FHIRId($data[self::FIELD_ACTION_ID]));
            }
        }
        if (isset($data[self::FIELD_OFFSET_DURATION])) {
            if ($data[self::FIELD_OFFSET_DURATION] instanceof FHIRDuration) {
                $this->setOffsetDuration($data[self::FIELD_OFFSET_DURATION]);
            } else {
                $this->setOffsetDuration(new FHIRDuration($data[self::FIELD_OFFSET_DURATION]));
            }
        }
        if (isset($data[self::FIELD_OFFSET_RANGE])) {
            if ($data[self::FIELD_OFFSET_RANGE] instanceof FHIRRange) {
                $this->setOffsetRange($data[self::FIELD_OFFSET_RANGE]);
            } else {
                $this->setOffsetRange(new FHIRRange($data[self::FIELD_OFFSET_RANGE]));
            }
        }
        if (isset($data[self::FIELD_RELATIONSHIP])) {
            $ext = (isset($data[self::FIELD_RELATIONSHIP_EXT]) && is_array($data[self::FIELD_RELATIONSHIP_EXT]))
                ? $data[self::FIELD_RELATIONSHIP_EXT]
                : null;
            if ($data[self::FIELD_RELATIONSHIP] instanceof FHIRActionRelationshipType) {
                $this->setRelationship($data[self::FIELD_RELATIONSHIP]);
            } elseif ($ext && is_scalar($data[self::FIELD_RELATIONSHIP])) {
                $this->setRelationship(new FHIRActionRelationshipType([FHIRActionRelationshipType::FIELD_VALUE => $data[self::FIELD_RELATIONSHIP]] + $ext));
            } else {
                $this->setRelationship(new FHIRActionRelationshipType($data[self::FIELD_RELATIONSHIP]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<RequestGroupRelatedAction{$xmlns}></RequestGroupRelatedAction>";
    }


    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The element id of the action this is related to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId
     */
    public function getActionId()
    {
        return $this->actionId;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The element id of the action this is related to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId $actionId
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction
     */
    public function setActionId($actionId = null)
    {
        if (null === $actionId) {
            $this->actionId = null;
            return $this;
        }
        if ($actionId instanceof FHIRId) {
            $this->actionId = $actionId;
            return $this;
        }
        $this->actionId = new FHIRId($actionId);
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A duration or range of durations to apply to the relationship. For example,
     * 30-60 minutes before.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getOffsetDuration()
    {
        return $this->offsetDuration;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A duration or range of durations to apply to the relationship. For example,
     * 30-60 minutes before.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration $offsetDuration
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction
     */
    public function setOffsetDuration(FHIRDuration $offsetDuration = null)
    {
        $this->offsetDuration = $offsetDuration;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A duration or range of durations to apply to the relationship. For example,
     * 30-60 minutes before.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange
     */
    public function getOffsetRange()
    {
        return $this->offsetRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A duration or range of durations to apply to the relationship. For example,
     * 30-60 minutes before.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange $offsetRange
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction
     */
    public function setOffsetRange(FHIRRange $offsetRange = null)
    {
        $this->offsetRange = $offsetRange;
        return $this;
    }

    /**
     * Defines the types of relationships between actions
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The relationship of this action to the related action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionRelationshipType
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * Defines the types of relationships between actions
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The relationship of this action to the related action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionRelationshipType $relationship
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction
     */
    public function setRelationship(FHIRActionRelationshipType $relationship = null)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRRequestGroupRelatedAction::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRRequestGroupRelatedAction::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRRequestGroupRelatedAction;
        } elseif (!is_object($type) || !($type instanceof FHIRRequestGroupRelatedAction)) {
            throw new \RuntimeException(sprintf(
                'FHIRRequestGroupRelatedAction::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->actionId)) {
            $type->setActionId((string)$attributes->actionId);
        }
        if (isset($children->actionId)) {
            $type->setActionId(FHIRId::xmlUnserialize($children->actionId));
        }
        if (isset($children->offsetDuration)) {
            $type->setOffsetDuration(FHIRDuration::xmlUnserialize($children->offsetDuration));
        }
        if (isset($children->offsetRange)) {
            $type->setOffsetRange(FHIRRange::xmlUnserialize($children->offsetRange));
        }
        if (isset($children->relationship)) {
            $type->setRelationship(FHIRActionRelationshipType::xmlUnserialize($children->relationship));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getActionId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACTION_ID, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getOffsetDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OFFSET_DURATION, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getOffsetRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OFFSET_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRelationship())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RELATIONSHIP, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getActionId())) {
            $a[self::FIELD_ACTION_ID] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_ACTION_ID_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getOffsetDuration())) {
            $a[self::FIELD_OFFSET_DURATION] = $v;
        }
        if (null !== ($v = $this->getOffsetRange())) {
            $a[self::FIELD_OFFSET_RANGE] = $v;
        }
        if (null !== ($v = $this->getRelationship())) {
            $a[self::FIELD_RELATIONSHIP] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_RELATIONSHIP_EXT] = $v;
            }
        }
        return $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}