<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRProvenanceEntityRole;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

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
 * Class FHIRProvenanceEntity
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance
 */
class FHIRProvenanceEntity extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY;
    const FIELD_AGENT = 'agent';
    const FIELD_ROLE = 'role';
    const FIELD_ROLE_EXT = '_role';
    const FIELD_WHAT = 'what';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

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
     * The entity is attributed to an agent to express the agent's responsibility for
     * that entity, possibly along with other agents. This description can be
     * understood as shorthand for saying that the agent was responsible for the
     * activity which generated the entity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[]
     */
    protected $agent = [];

    /**
     * How an entity was used in an activity.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the entity was used during the activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRProvenanceEntityRole
     */
    protected $role = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $what = null;

    /**
     * Validation map for fields in type Provenance.Entity
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRProvenanceEntity Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRProvenanceEntity::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AGENT])) {
            if (is_array($data[self::FIELD_AGENT])) {
                foreach($data[self::FIELD_AGENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRProvenanceAgent) {
                        $this->addAgent($v);
                    } else {
                        $this->addAgent(new FHIRProvenanceAgent($v));
                    }
                }
            } else if ($data[self::FIELD_AGENT] instanceof FHIRProvenanceAgent) {
                $this->addAgent($data[self::FIELD_AGENT]);
            } else {
                $this->addAgent(new FHIRProvenanceAgent($data[self::FIELD_AGENT]));
            }
        }
        if (isset($data[self::FIELD_ROLE]) || isset($data[self::FIELD_ROLE_EXT])) {
            if (isset($data[self::FIELD_ROLE])) {
                $value = $data[self::FIELD_ROLE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ROLE_EXT]) && is_array($data[self::FIELD_ROLE_EXT])) {
                $ext = $data[self::FIELD_ROLE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRProvenanceEntityRole) {
                    $this->setRole($value);
                } else if (is_array($value)) {
                    $this->setRole(new FHIRProvenanceEntityRole(array_merge($ext, $value)));
                } else {
                    $this->setRole(new FHIRProvenanceEntityRole([FHIRProvenanceEntityRole::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setRole(new FHIRProvenanceEntityRole($ext));
            }
        }
        if (isset($data[self::FIELD_WHAT])) {
            if ($data[self::FIELD_WHAT] instanceof FHIRReference) {
                $this->setWhat($data[self::FIELD_WHAT]);
            } else {
                $this->setWhat(new FHIRReference($data[self::FIELD_WHAT]));
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
        return "<ProvenanceEntity{$xmlns}></ProvenanceEntity>";
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
     * The entity is attributed to an agent to express the agent's responsibility for
     * that entity, possibly along with other agents. This description can be
     * understood as shorthand for saying that the agent was responsible for the
     * activity which generated the entity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[]
     */
    public function getAgent()
    {
        return $this->agent;
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
     * The entity is attributed to an agent to express the agent's responsibility for
     * that entity, possibly along with other agents. This description can be
     * understood as shorthand for saying that the agent was responsible for the
     * activity which generated the entity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent $agent
     * @return static
     */
    public function addAgent(FHIRProvenanceAgent $agent = null)
    {
        $this->agent[] = $agent;
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
     * The entity is attributed to an agent to express the agent's responsibility for
     * that entity, possibly along with other agents. This description can be
     * understood as shorthand for saying that the agent was responsible for the
     * activity which generated the entity.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent[] $agent
     * @return static
     */
    public function setAgent(array $agent = [])
    {
        $this->agent = [];
        if ([] === $agent) {
            return $this;
        }
        foreach($agent as $v) {
            if ($v instanceof FHIRProvenanceAgent) {
                $this->addAgent($v);
            } else {
                $this->addAgent(new FHIRProvenanceAgent($v));
            }
        }
        return $this;
    }

    /**
     * How an entity was used in an activity.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the entity was used during the activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRProvenanceEntityRole
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * How an entity was used in an activity.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the entity was used during the activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRProvenanceEntityRole $role
     * @return static
     */
    public function setRole(FHIRProvenanceEntityRole $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getWhat()
    {
        return $this->what;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identity of the Entity used. May be a logical or physical uri and maybe absolute
     * or relative.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $what
     * @return static
     */
    public function setWhat(FHIRReference $what = null)
    {
        $this->what = $what;
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
        if ([] !== ($vs = $this->getAgent())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AGENT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRole())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ROLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getWhat())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_WHAT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_AGENT])) {
            $v = $this->getAgent();
            foreach($validationRules[self::FIELD_AGENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY, self::FIELD_AGENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGENT])) {
                        $errs[self::FIELD_AGENT] = [];
                    }
                    $errs[self::FIELD_AGENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROLE])) {
            $v = $this->getRole();
            foreach($validationRules[self::FIELD_ROLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY, self::FIELD_ROLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROLE])) {
                        $errs[self::FIELD_ROLE] = [];
                    }
                    $errs[self::FIELD_ROLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WHAT])) {
            $v = $this->getWhat();
            foreach($validationRules[self::FIELD_WHAT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY, self::FIELD_WHAT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WHAT])) {
                        $errs[self::FIELD_WHAT] = [];
                    }
                    $errs[self::FIELD_WHAT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity
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
                throw new \DomainException(sprintf('FHIRProvenanceEntity::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRProvenanceEntity::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRProvenanceEntity;
        } elseif (!is_object($type) || !($type instanceof FHIRProvenanceEntity)) {
            throw new \RuntimeException(sprintf(
                'FHIRProvenanceEntity::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity or null, %s seen.',
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
        if (isset($children->agent)) {
            foreach($children->agent as $child) {
                $type->addAgent(FHIRProvenanceAgent::xmlUnserialize($child));
            }
        }
        if (isset($children->role)) {
            $type->setRole(FHIRProvenanceEntityRole::xmlUnserialize($children->role));
        }
        if (isset($children->what)) {
            $type->setWhat(FHIRReference::xmlUnserialize($children->what));
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
        if ([] !== ($vs = $this->getAgent())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_AGENT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRole())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ROLE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getWhat())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_WHAT, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAgent())) {
            $a[self::FIELD_AGENT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_AGENT][] = $v;
            }
        }
        if (null !== ($v = $this->getRole())) {
            $a[self::FIELD_ROLE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRProvenanceEntityRole::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRProvenanceEntityRole::FIELD_VALUE]);
                $a[self::FIELD_ROLE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getWhat())) {
            $a[self::FIELD_WHAT] = $v;
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