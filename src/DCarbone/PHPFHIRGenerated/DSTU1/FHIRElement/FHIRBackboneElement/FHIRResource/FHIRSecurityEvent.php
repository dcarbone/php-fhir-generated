<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventEvent;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventObject;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventParticipant;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventSource;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A record of an event made for purposes of maintaining a security log. Typical
 * uses include detection of intrusion attempts and monitoring for inappropriate
 * usage.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRSecurityEvent
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRSecurityEvent extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT;
    const FIELD_EVENT = 'event';
    const FIELD_OBJECT = 'object';
    const FIELD_PARTICIPANT = 'participant';
    const FIELD_SOURCE = 'source';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Identifies the name, action type, time, and disposition of the audited event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventEvent
     */
    protected $event = null;

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Specific instances of data or objects that have been accessed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventObject[]
     */
    protected $object = [];

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * A person, a hardware device or software process.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventParticipant[]
     */
    protected $participant = [];

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Application systems and processes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventSource
     */
    protected $source = null;

    /**
     * Validation map for fields in type SecurityEvent
     * @var array
     */
    private static $_validationRules = [
        self::FIELD_PARTICIPANT => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRSecurityEvent Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSecurityEvent::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_EVENT])) {
            if ($data[self::FIELD_EVENT] instanceof FHIRSecurityEventEvent) {
                $this->setEvent($data[self::FIELD_EVENT]);
            } else {
                $this->setEvent(new FHIRSecurityEventEvent($data[self::FIELD_EVENT]));
            }
        }
        if (isset($data[self::FIELD_OBJECT])) {
            if (is_array($data[self::FIELD_OBJECT])) {
                foreach($data[self::FIELD_OBJECT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSecurityEventObject) {
                        $this->addObject($v);
                    } else {
                        $this->addObject(new FHIRSecurityEventObject($v));
                    }
                }
            } else if ($data[self::FIELD_OBJECT] instanceof FHIRSecurityEventObject) {
                $this->addObject($data[self::FIELD_OBJECT]);
            } else {
                $this->addObject(new FHIRSecurityEventObject($data[self::FIELD_OBJECT]));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT])) {
            if (is_array($data[self::FIELD_PARTICIPANT])) {
                foreach($data[self::FIELD_PARTICIPANT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSecurityEventParticipant) {
                        $this->addParticipant($v);
                    } else {
                        $this->addParticipant(new FHIRSecurityEventParticipant($v));
                    }
                }
            } else if ($data[self::FIELD_PARTICIPANT] instanceof FHIRSecurityEventParticipant) {
                $this->addParticipant($data[self::FIELD_PARTICIPANT]);
            } else {
                $this->addParticipant(new FHIRSecurityEventParticipant($data[self::FIELD_PARTICIPANT]));
            }
        }
        if (isset($data[self::FIELD_SOURCE])) {
            if ($data[self::FIELD_SOURCE] instanceof FHIRSecurityEventSource) {
                $this->setSource($data[self::FIELD_SOURCE]);
            } else {
                $this->setSource(new FHIRSecurityEventSource($data[self::FIELD_SOURCE]));
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
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<SecurityEvent{$xmlns}></SecurityEvent>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Identifies the name, action type, time, and disposition of the audited event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventEvent
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Identifies the name, action type, time, and disposition of the audited event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventEvent $event
     * @return static
     */
    public function setEvent(FHIRSecurityEventEvent $event = null)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Specific instances of data or objects that have been accessed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventObject[]
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Specific instances of data or objects that have been accessed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventObject $object
     * @return static
     */
    public function addObject(FHIRSecurityEventObject $object = null)
    {
        $this->object[] = $object;
        return $this;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Specific instances of data or objects that have been accessed.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventObject[] $object
     * @return static
     */
    public function setObject(array $object = [])
    {
        $this->object = [];
        if ([] === $object) {
            return $this;
        }
        foreach($object as $v) {
            if ($v instanceof FHIRSecurityEventObject) {
                $this->addObject($v);
            } else {
                $this->addObject(new FHIRSecurityEventObject($v));
            }
        }
        return $this;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * A person, a hardware device or software process.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * A person, a hardware device or software process.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventParticipant $participant
     * @return static
     */
    public function addParticipant(FHIRSecurityEventParticipant $participant = null)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * A person, a hardware device or software process.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventParticipant[] $participant
     * @return static
     */
    public function setParticipant(array $participant = [])
    {
        $this->participant = [];
        if ([] === $participant) {
            return $this;
        }
        foreach($participant as $v) {
            if ($v instanceof FHIRSecurityEventParticipant) {
                $this->addParticipant($v);
            } else {
                $this->addParticipant(new FHIRSecurityEventParticipant($v));
            }
        }
        return $this;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Application systems and processes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventSource
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Application systems and processes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventSource $source
     * @return static
     */
    public function setSource(FHIRSecurityEventSource $source = null)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getEvent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EVENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getObject())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OBJECT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARTICIPANT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_EVENT])) {
            $v = $this->getEvent();
            foreach($validationRules[self::FIELD_EVENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT, self::FIELD_EVENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EVENT])) {
                        $errs[self::FIELD_EVENT] = [];
                    }
                    $errs[self::FIELD_EVENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OBJECT])) {
            $v = $this->getObject();
            foreach($validationRules[self::FIELD_OBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT, self::FIELD_OBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OBJECT])) {
                        $errs[self::FIELD_OBJECT] = [];
                    }
                    $errs[self::FIELD_OBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTICIPANT])) {
            $v = $this->getParticipant();
            foreach($validationRules[self::FIELD_PARTICIPANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT, self::FIELD_PARTICIPANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTICIPANT])) {
                        $errs[self::FIELD_PARTICIPANT] = [];
                    }
                    $errs[self::FIELD_PARTICIPANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE])) {
            $v = $this->getSource();
            foreach($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT, self::FIELD_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE])) {
                        $errs[self::FIELD_SOURCE] = [];
                    }
                    $errs[self::FIELD_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSecurityEvent $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSecurityEvent
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
                throw new \DomainException(sprintf('FHIRSecurityEvent::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSecurityEvent::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSecurityEvent;
        } elseif (!is_object($type) || !($type instanceof FHIRSecurityEvent)) {
            throw new \RuntimeException(sprintf(
                'FHIRSecurityEvent::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSecurityEvent or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->event)) {
            $type->setEvent(FHIRSecurityEventEvent::xmlUnserialize($children->event));
        }
        if (isset($children->object)) {
            foreach($children->object as $child) {
                $type->addObject(FHIRSecurityEventObject::xmlUnserialize($child));
            }
        }
        if (isset($children->participant)) {
            foreach($children->participant as $child) {
                $type->addParticipant(FHIRSecurityEventParticipant::xmlUnserialize($child));
            }
        }
        if (isset($children->source)) {
            $type->setSource(FHIRSecurityEventSource::xmlUnserialize($children->source));
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
        if (null !== ($v = $this->getEvent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EVENT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getObject())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_OBJECT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getSource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SOURCE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getEvent())) {
            $a[self::FIELD_EVENT] = $v;
        }
        if ([] !== ($vs = $this->getObject())) {
            $a[self::FIELD_OBJECT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_OBJECT][] = $v;
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            $a[self::FIELD_PARTICIPANT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PARTICIPANT][] = $v;
            }
        }
        if (null !== ($v = $this->getSource())) {
            $a[self::FIELD_SOURCE] = $v;
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}