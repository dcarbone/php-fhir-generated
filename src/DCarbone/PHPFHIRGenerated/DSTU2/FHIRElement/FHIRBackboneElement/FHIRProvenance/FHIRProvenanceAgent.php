<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * Provenance of a resource is a record that describes entities and processes
 * involved in producing and delivering or otherwise influencing that resource.
 * Provenance provides a critical foundation for assessing authenticity, enabling
 * trust, and allowing reproducibility. Provenance assertions are a form of
 * contextual metadata and can themselves become important records with their own
 * provenance. Provenance statement indicates clinical significance in terms of
 * confidence in authenticity, reliability, and trustworthiness, integrity, and
 * stage in lifecycle (e.g. Document Completion - has the artifact been legally
 * authenticated), all of which may impact security, privacy, and trust policies.
 *
 * Class FHIRProvenanceAgent
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance
 */
class FHIRProvenanceAgent extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_AGENT;
    const FIELD_ACTOR = 'actor';
    const FIELD_RELATED_AGENT = 'relatedAgent';
    const FIELD_ROLE = 'role';
    const FIELD_USER_ID = 'userId';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual, device or organization that participated in the event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $actor = null;

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * A relationship between two the agents referenced in this resource. This is
     * defined to allow for explicit description of the delegation between agents. For
     * example, this human author used this device, or one person acted on another's
     * behest.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceRelatedAgent[]
     */
    protected $relatedAgent = [];

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The function of the agent with respect to the activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected $role = null;

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identity of the agent as known by the authorization system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    protected $userId = null;

    /**
     * Validation map for fields in type Provenance.Agent
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRProvenanceAgent Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProvenanceAgent::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTOR])) {
            if ($data[self::FIELD_ACTOR] instanceof FHIRReference) {
                $this->setActor($data[self::FIELD_ACTOR]);
            } else {
                $this->setActor(new FHIRReference($data[self::FIELD_ACTOR]));
            }
        }
        if (isset($data[self::FIELD_RELATED_AGENT])) {
            if (is_array($data[self::FIELD_RELATED_AGENT])) {
                foreach($data[self::FIELD_RELATED_AGENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRProvenanceRelatedAgent) {
                        $this->addRelatedAgent($v);
                    } else {
                        $this->addRelatedAgent(new FHIRProvenanceRelatedAgent($v));
                    }
                }
            } else if ($data[self::FIELD_RELATED_AGENT] instanceof FHIRProvenanceRelatedAgent) {
                $this->addRelatedAgent($data[self::FIELD_RELATED_AGENT]);
            } else {
                $this->addRelatedAgent(new FHIRProvenanceRelatedAgent($data[self::FIELD_RELATED_AGENT]));
            }
        }
        if (isset($data[self::FIELD_ROLE])) {
            if ($data[self::FIELD_ROLE] instanceof FHIRCoding) {
                $this->setRole($data[self::FIELD_ROLE]);
            } else {
                $this->setRole(new FHIRCoding($data[self::FIELD_ROLE]));
            }
        }
        if (isset($data[self::FIELD_USER_ID])) {
            if ($data[self::FIELD_USER_ID] instanceof FHIRIdentifier) {
                $this->setUserId($data[self::FIELD_USER_ID]);
            } else {
                $this->setUserId(new FHIRIdentifier($data[self::FIELD_USER_ID]));
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
        return "<ProvenanceAgent{$xmlns}></ProvenanceAgent>";
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual, device or organization that participated in the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual, device or organization that participated in the event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $actor
     * @return static
     */
    public function setActor(FHIRReference $actor = null)
    {
        $this->actor = $actor;
        return $this;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * A relationship between two the agents referenced in this resource. This is
     * defined to allow for explicit description of the delegation between agents. For
     * example, this human author used this device, or one person acted on another's
     * behest.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceRelatedAgent[]
     */
    public function getRelatedAgent()
    {
        return $this->relatedAgent;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * A relationship between two the agents referenced in this resource. This is
     * defined to allow for explicit description of the delegation between agents. For
     * example, this human author used this device, or one person acted on another's
     * behest.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceRelatedAgent $relatedAgent
     * @return static
     */
    public function addRelatedAgent(FHIRProvenanceRelatedAgent $relatedAgent = null)
    {
        $this->relatedAgent[] = $relatedAgent;
        return $this;
    }

    /**
     * Provenance of a resource is a record that describes entities and processes
     * involved in producing and delivering or otherwise influencing that resource.
     * Provenance provides a critical foundation for assessing authenticity, enabling
     * trust, and allowing reproducibility. Provenance assertions are a form of
     * contextual metadata and can themselves become important records with their own
     * provenance. Provenance statement indicates clinical significance in terms of
     * confidence in authenticity, reliability, and trustworthiness, integrity, and
     * stage in lifecycle (e.g. Document Completion - has the artifact been legally
     * authenticated), all of which may impact security, privacy, and trust policies.
     *
     * A relationship between two the agents referenced in this resource. This is
     * defined to allow for explicit description of the delegation between agents. For
     * example, this human author used this device, or one person acted on another's
     * behest.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceRelatedAgent[] $relatedAgent
     * @return static
     */
    public function setRelatedAgent(array $relatedAgent = [])
    {
        $this->relatedAgent = [];
        if ([] === $relatedAgent) {
            return $this;
        }
        foreach($relatedAgent as $v) {
            if ($v instanceof FHIRProvenanceRelatedAgent) {
                $this->addRelatedAgent($v);
            } else {
                $this->addRelatedAgent(new FHIRProvenanceRelatedAgent($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The function of the agent with respect to the activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The function of the agent with respect to the activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $role
     * @return static
     */
    public function setRole(FHIRCoding $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identity of the agent as known by the authorization system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identity of the agent as known by the authorization system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $userId
     * @return static
     */
    public function setUserId(FHIRIdentifier $userId = null)
    {
        $this->userId = $userId;
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
        if (null !== ($v = $this->getActor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACTOR] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRelatedAgent())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATED_AGENT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRole())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ROLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUserId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_USER_ID] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ACTOR])) {
            $v = $this->getActor();
            foreach($validationRules[self::FIELD_ACTOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_AGENT, self::FIELD_ACTOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTOR])) {
                        $errs[self::FIELD_ACTOR] = [];
                    }
                    $errs[self::FIELD_ACTOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED_AGENT])) {
            $v = $this->getRelatedAgent();
            foreach($validationRules[self::FIELD_RELATED_AGENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_AGENT, self::FIELD_RELATED_AGENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_AGENT])) {
                        $errs[self::FIELD_RELATED_AGENT] = [];
                    }
                    $errs[self::FIELD_RELATED_AGENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROLE])) {
            $v = $this->getRole();
            foreach($validationRules[self::FIELD_ROLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_AGENT, self::FIELD_ROLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROLE])) {
                        $errs[self::FIELD_ROLE] = [];
                    }
                    $errs[self::FIELD_ROLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USER_ID])) {
            $v = $this->getUserId();
            foreach($validationRules[self::FIELD_USER_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_AGENT, self::FIELD_USER_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USER_ID])) {
                        $errs[self::FIELD_USER_ID] = [];
                    }
                    $errs[self::FIELD_USER_ID][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent
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
                throw new \DomainException(sprintf('FHIRProvenanceAgent::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRProvenanceAgent::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRProvenanceAgent;
        } elseif (!is_object($type) || !($type instanceof FHIRProvenanceAgent)) {
            throw new \RuntimeException(sprintf(
                'FHIRProvenanceAgent::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent or null, %s seen.',
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
        if (isset($children->actor)) {
            $type->setActor(FHIRReference::xmlUnserialize($children->actor));
        }
        if (isset($children->relatedAgent)) {
            foreach($children->relatedAgent as $child) {
                $type->addRelatedAgent(FHIRProvenanceRelatedAgent::xmlUnserialize($child));
            }
        }
        if (isset($children->role)) {
            $type->setRole(FHIRCoding::xmlUnserialize($children->role));
        }
        if (isset($children->userId)) {
            $type->setUserId(FHIRIdentifier::xmlUnserialize($children->userId));
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
        if (null !== ($v = $this->getActor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACTOR, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getRelatedAgent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_RELATED_AGENT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRole())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ROLE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUserId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USER_ID, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getActor())) {
            $a[self::FIELD_ACTOR] = $v;
        }
        if ([] !== ($vs = $this->getRelatedAgent())) {
            $a[self::FIELD_RELATED_AGENT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_RELATED_AGENT][] = $v;
            }
        }
        if (null !== ($v = $this->getRole())) {
            $a[self::FIELD_ROLE] = $v;
        }
        if (null !== ($v = $this->getUserId())) {
            $a[self::FIELD_USER_ID] = $v;
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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