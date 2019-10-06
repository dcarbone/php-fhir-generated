<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:03+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventAction;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventOutcome;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A record of an event made for purposes of maintaining a security log. Typical
 * uses include detection of intrusion attempts and monitoring for inappropriate
 * usage.
 *
 * Class FHIRSecurityEventEvent
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent
 */
class FHIRSecurityEventEvent extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_DOT_EVENT;

    const FIELD_ACTION = 'action';
    const FIELD_DATE_TIME = 'dateTime';
    const FIELD_DATE_TIME_EXT = '_dateTime';
    const FIELD_OUTCOME = 'outcome';
    const FIELD_OUTCOME_DESC = 'outcomeDesc';
    const FIELD_OUTCOME_DESC_EXT = '_outcomeDesc';
    const FIELD_SUBTYPE = 'subtype';
    const FIELD_TYPE = 'type';

    /**
     * Indicator for type of action performed during the event that generated the
     * audit.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicator for type of action performed during the event that generated the
     * audit.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventAction
     */
    private $action = null;
    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The time when the event occurred on the source.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    private $dateTime = null;
    /**
     * Indicates whether the event succeeded or failed
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates whether the event succeeded or failed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventOutcome
     */
    private $outcome = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A free text description of the outcome of the event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $outcomeDesc = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier for the category of event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    private $subtype = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier for a family of the event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;

    /**
     * FHIRSecurityEventEvent Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSecurityEventEvent::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTION])) {
            if ($data[self::FIELD_ACTION] instanceof FHIRSecurityEventAction) {
                $this->setAction($data[self::FIELD_ACTION]);
            } else {
                $this->setAction(new FHIRSecurityEventAction($data[self::FIELD_ACTION]));
            }
        }
        if (isset($data[self::FIELD_DATE_TIME])) {
            $ext = (isset($data[self::FIELD_DATE_TIME_EXT]) && is_array($data[self::FIELD_DATE_TIME_EXT]))
                ? $data[self::FIELD_DATE_TIME_EXT]
                : null;
            if ($data[self::FIELD_DATE_TIME] instanceof FHIRInstant) {
                $this->setDateTime($data[self::FIELD_DATE_TIME]);
            } elseif ($ext && is_scalar($data[self::FIELD_DATE_TIME])) {
                $this->setDateTime(new FHIRInstant([FHIRInstant::FIELD_VALUE => $data[self::FIELD_DATE_TIME]] + $ext));
            } else {
                $this->setDateTime(new FHIRInstant($data[self::FIELD_DATE_TIME]));
            }
        }
        if (isset($data[self::FIELD_OUTCOME])) {
            if ($data[self::FIELD_OUTCOME] instanceof FHIRSecurityEventOutcome) {
                $this->setOutcome($data[self::FIELD_OUTCOME]);
            } else {
                $this->setOutcome(new FHIRSecurityEventOutcome($data[self::FIELD_OUTCOME]));
            }
        }
        if (isset($data[self::FIELD_OUTCOME_DESC])) {
            $ext = (isset($data[self::FIELD_OUTCOME_DESC_EXT]) && is_array($data[self::FIELD_OUTCOME_DESC_EXT]))
                ? $data[self::FIELD_OUTCOME_DESC_EXT]
                : null;
            if ($data[self::FIELD_OUTCOME_DESC] instanceof FHIRString) {
                $this->setOutcomeDesc($data[self::FIELD_OUTCOME_DESC]);
            } elseif ($ext && is_scalar($data[self::FIELD_OUTCOME_DESC])) {
                $this->setOutcomeDesc(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_OUTCOME_DESC]] + $ext));
            } else {
                $this->setOutcomeDesc(new FHIRString($data[self::FIELD_OUTCOME_DESC]));
            }
        }
        if (isset($data[self::FIELD_SUBTYPE])) {
            if (is_array($data[self::FIELD_SUBTYPE])) {
                foreach($data[self::FIELD_SUBTYPE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSubtype($v);
                    } else {
                        $this->addSubtype(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_SUBTYPE] instanceof FHIRCodeableConcept) {
                $this->addSubtype($data[self::FIELD_SUBTYPE]);
            } else {
                $this->addSubtype(new FHIRCodeableConcept($data[self::FIELD_SUBTYPE]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * Indicator for type of action performed during the event that generated the
     * audit.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicator for type of action performed during the event that generated the
     * audit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventAction
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Indicator for type of action performed during the event that generated the
     * audit.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicator for type of action performed during the event that generated the
     * audit.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventAction $action
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventEvent
     */
    public function setAction(FHIRSecurityEventAction $action = null)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The time when the event occurred on the source.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * An instant in time - known at least to the second
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The time when the event occurred on the source.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant $dateTime
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventEvent
     */
    public function setDateTime($dateTime = null)
    {
        if (null === $dateTime) {
            $this->dateTime = null;
            return $this;
        }
        if ($dateTime instanceof FHIRInstant) {
            $this->dateTime = $dateTime;
            return $this;
        }
        $this->dateTime = new FHIRInstant($dateTime);
        return $this;
    }

    /**
     * Indicates whether the event succeeded or failed
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates whether the event succeeded or failed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventOutcome
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Indicates whether the event succeeded or failed
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates whether the event succeeded or failed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventOutcome $outcome
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventEvent
     */
    public function setOutcome(FHIRSecurityEventOutcome $outcome = null)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A free text description of the outcome of the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getOutcomeDesc()
    {
        return $this->outcomeDesc;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A free text description of the outcome of the event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $outcomeDesc
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventEvent
     */
    public function setOutcomeDesc($outcomeDesc = null)
    {
        if (null === $outcomeDesc) {
            $this->outcomeDesc = null;
            return $this;
        }
        if ($outcomeDesc instanceof FHIRString) {
            $this->outcomeDesc = $outcomeDesc;
            return $this;
        }
        $this->outcomeDesc = new FHIRString($outcomeDesc);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier for the category of event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier for the category of event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $subtype
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventEvent
     */
    public function addSubtype(FHIRCodeableConcept $subtype = null)
    {
        $this->subtype[] = $subtype;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier for the category of event.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept[] $subtype
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventEvent
     */
    public function setSubtype(array $subtype = [])
    {
        $this->subtype = [];
        if ([] === $subtype) {
            return $this;
        }
        foreach($subtype as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSubtype($v);
            } else {
                $this->addSubtype(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier for a family of the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifier for a family of the event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventEvent
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventEvent $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventEvent
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRSecurityEventEvent::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSecurityEventEvent::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRSecurityEventEvent);
        } elseif (!is_object($type) || !($type instanceof FHIRSecurityEventEvent)) {
            throw new \RuntimeException(sprintf(
                'FHIRSecurityEventEvent::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventEvent or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->action)) {
            $type->setAction(FHIRSecurityEventAction::xmlUnserialize($children->action));
        }
        if (isset($attributes->dateTime)) {
            $type->setDateTime((string)$attributes->dateTime);
        }
        if (isset($children->dateTime)) {
            $type->setDateTime(FHIRInstant::xmlUnserialize($children->dateTime));
        }
        if (isset($children->outcome)) {
            $type->setOutcome(FHIRSecurityEventOutcome::xmlUnserialize($children->outcome));
        }
        if (isset($attributes->outcomeDesc)) {
            $type->setOutcomeDesc((string)$attributes->outcomeDesc);
        }
        if (isset($children->outcomeDesc)) {
            $type->setOutcomeDesc(FHIRString::xmlUnserialize($children->outcomeDesc));
        }
        if (isset($children->subtype)) {
            foreach($children->subtype as $child) {
                $type->addSubtype(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<SecurityEventEvent xmlns="http://hl7.org/fhir"></SecurityEventEvent>');
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getAction())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACTION));
        }
        if (null !== ($v = $this->getDateTime())) {
            $sxe->addAttribute(self::FIELD_DATE_TIME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DATE_TIME));
            }
        }

        if (null !== ($v = $this->getOutcome())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_OUTCOME));
        }
        if (null !== ($v = $this->getOutcomeDesc())) {
            $sxe->addAttribute(self::FIELD_OUTCOME_DESC, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_OUTCOME_DESC));
            }
        }

        if ([] !== ($vs = $this->getSubtype())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUBTYPE));
            }
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAction())) {
            $a[self::FIELD_ACTION] = $v;
        }
        if (null !== ($v = $this->getDateTime())) {
            $a[self::FIELD_DATE_TIME] = (string)$v;
            $a[self::FIELD_DATE_TIME_EXT] = $v;
        }
        if (null !== ($v = $this->getOutcome())) {
            $a[self::FIELD_OUTCOME] = $v;
        }
        if (null !== ($v = $this->getOutcomeDesc())) {
            $a[self::FIELD_OUTCOME_DESC] = (string)$v;
            $a[self::FIELD_OUTCOME_DESC_EXT] = $v;
        }
        if ([] !== ($vs = $this->getSubtype())) {
            $a[self::FIELD_SUBTYPE] = $vs;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}