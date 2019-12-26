<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
 * Server that may be used as a statement of actual server functionality or a
 * statement of required or desired server implementation.
 *
 * Class FHIRCapabilityStatementSecurity
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement
 */
class FHIRCapabilityStatementSecurity extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_SECURITY;
    const FIELD_CERTIFICATE = 'certificate';
    const FIELD_CORS = 'cors';
    const FIELD_CORS_EXT = '_cors';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_SERVICE = 'service';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Certificates associated with security profiles.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementCertificate[]
     */
    protected $certificate = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Server adds CORS headers when responding to requests - this enables javascript
     * applications to use the server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $cors = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * General description of how security works.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Types of security services that are supported/required by the system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected $service = [];

    /**
     * Validation map for fields in type CapabilityStatement.Security
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRCapabilityStatementSecurity Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCapabilityStatementSecurity::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CERTIFICATE])) {
            if (is_array($data[self::FIELD_CERTIFICATE])) {
                foreach($data[self::FIELD_CERTIFICATE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCapabilityStatementCertificate) {
                        $this->addCertificate($v);
                    } else {
                        $this->addCertificate(new FHIRCapabilityStatementCertificate($v));
                    }
                }
            } else if ($data[self::FIELD_CERTIFICATE] instanceof FHIRCapabilityStatementCertificate) {
                $this->addCertificate($data[self::FIELD_CERTIFICATE]);
            } else {
                $this->addCertificate(new FHIRCapabilityStatementCertificate($data[self::FIELD_CERTIFICATE]));
            }
        }
        if (isset($data[self::FIELD_CORS]) || isset($data[self::FIELD_CORS_EXT])) {
            if (isset($data[self::FIELD_CORS])) {
                $value = $data[self::FIELD_CORS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CORS_EXT]) && is_array($data[self::FIELD_CORS_EXT])) {
                $ext = $data[self::FIELD_CORS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setCors($value);
                } else if (is_array($value)) {
                    $this->setCors(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setCors(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCors(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            if (isset($data[self::FIELD_DESCRIPTION])) {
                $value = $data[self::FIELD_DESCRIPTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) {
                $ext = $data[self::FIELD_DESCRIPTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SERVICE])) {
            if (is_array($data[self::FIELD_SERVICE])) {
                foreach($data[self::FIELD_SERVICE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addService($v);
                    } else {
                        $this->addService(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_SERVICE] instanceof FHIRCodeableConcept) {
                $this->addService($data[self::FIELD_SERVICE]);
            } else {
                $this->addService(new FHIRCodeableConcept($data[self::FIELD_SERVICE]));
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
        return "<CapabilityStatementSecurity{$xmlns}></CapabilityStatementSecurity>";
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Certificates associated with security profiles.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementCertificate[]
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Certificates associated with security profiles.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementCertificate $certificate
     * @return static
     */
    public function addCertificate(FHIRCapabilityStatementCertificate $certificate = null)
    {
        $this->certificate[] = $certificate;
        return $this;
    }

    /**
     * A Capability Statement documents a set of capabilities (behaviors) of a FHIR
     * Server that may be used as a statement of actual server functionality or a
     * statement of required or desired server implementation.
     *
     * Certificates associated with security profiles.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementCertificate[] $certificate
     * @return static
     */
    public function setCertificate(array $certificate = [])
    {
        $this->certificate = [];
        if ([] === $certificate) {
            return $this;
        }
        foreach($certificate as $v) {
            if ($v instanceof FHIRCapabilityStatementCertificate) {
                $this->addCertificate($v);
            } else {
                $this->addCertificate(new FHIRCapabilityStatementCertificate($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Server adds CORS headers when responding to requests - this enables javascript
     * applications to use the server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getCors()
    {
        return $this->cors;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Server adds CORS headers when responding to requests - this enables javascript
     * applications to use the server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $cors
     * @return static
     */
    public function setCors($cors = null)
    {
        if (null === $cors) {
            $this->cors = null;
            return $this;
        }
        if ($cors instanceof FHIRBoolean) {
            $this->cors = $cors;
            return $this;
        }
        $this->cors = new FHIRBoolean($cors);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * General description of how security works.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * General description of how security works.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Types of security services that are supported/required by the system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Types of security services that are supported/required by the system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept $service
     * @return static
     */
    public function addService(FHIRCodeableConcept $service = null)
    {
        $this->service[] = $service;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Types of security services that are supported/required by the system.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept[] $service
     * @return static
     */
    public function setService(array $service = [])
    {
        $this->service = [];
        if ([] === $service) {
            return $this;
        }
        foreach($service as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addService($v);
            } else {
                $this->addService(new FHIRCodeableConcept($v));
            }
        }
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
        if ([] !== ($vs = $this->getCertificate())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CERTIFICATE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCors())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CORS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getService())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SERVICE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CERTIFICATE])) {
            $v = $this->getCertificate();
            foreach($validationRules[self::FIELD_CERTIFICATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_SECURITY, self::FIELD_CERTIFICATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CERTIFICATE])) {
                        $errs[self::FIELD_CERTIFICATE] = [];
                    }
                    $errs[self::FIELD_CERTIFICATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CORS])) {
            $v = $this->getCors();
            foreach($validationRules[self::FIELD_CORS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_SECURITY, self::FIELD_CORS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CORS])) {
                        $errs[self::FIELD_CORS] = [];
                    }
                    $errs[self::FIELD_CORS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_SECURITY, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERVICE])) {
            $v = $this->getService();
            foreach($validationRules[self::FIELD_SERVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_SECURITY, self::FIELD_SERVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERVICE])) {
                        $errs[self::FIELD_SERVICE] = [];
                    }
                    $errs[self::FIELD_SERVICE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSecurity $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSecurity
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
                throw new \DomainException(sprintf('FHIRCapabilityStatementSecurity::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCapabilityStatementSecurity::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCapabilityStatementSecurity;
        } elseif (!is_object($type) || !($type instanceof FHIRCapabilityStatementSecurity)) {
            throw new \RuntimeException(sprintf(
                'FHIRCapabilityStatementSecurity::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSecurity or null, %s seen.',
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
        if (isset($children->certificate)) {
            foreach($children->certificate as $child) {
                $type->addCertificate(FHIRCapabilityStatementCertificate::xmlUnserialize($child));
            }
        }
        if (isset($children->cors)) {
            $type->setCors(FHIRBoolean::xmlUnserialize($children->cors));
        }
        if (isset($attributes->cors)) {
            $pt = $type->getCors();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->cors);
            } else {
                $type->setCors((string)$attributes->cors);
            }
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->description)) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->description);
            } else {
                $type->setDescription((string)$attributes->description);
            }
        }
        if (isset($children->service)) {
            foreach($children->service as $child) {
                $type->addService(FHIRCodeableConcept::xmlUnserialize($child));
            }
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
        if ([] !== ($vs = $this->getCertificate())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CERTIFICATE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getCors())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CORS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getService())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SERVICE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getCertificate())) {
            $a[self::FIELD_CERTIFICATE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CERTIFICATE][] = $v;
            }
        }
        if (null !== ($v = $this->getCors())) {
            $a[self::FIELD_CORS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_CORS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getService())) {
            $a[self::FIELD_SERVICE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SERVICE][] = $v;
            }
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