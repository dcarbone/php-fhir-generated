<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
 * of a FHIR Terminology Server that may be used as a statement of actual server
 * functionality or a statement of required or desired server implementation.
 *
 * Class FHIRTerminologyCapabilitiesCodeSystem
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities
 */
class FHIRTerminologyCapabilitiesCodeSystem extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_CODE_SYSTEM;
    const FIELD_SUBSUMPTION = 'subsumption';
    const FIELD_SUBSUMPTION_EXT = '_subsumption';
    const FIELD_URI = 'uri';
    const FIELD_URI_EXT = '_uri';
    const FIELD_VERSION = 'version';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if subsumption is supported for this version of the code system.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $subsumption = null;

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * URI for the Code System.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    protected $uri = null;

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * For the code system, a list of versions that are supported by the server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesVersion[]
     */
    protected $version = [];

    /**
     * Validation map for fields in type TerminologyCapabilities.CodeSystem
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRTerminologyCapabilitiesCodeSystem Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTerminologyCapabilitiesCodeSystem::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_SUBSUMPTION]) || isset($data[self::FIELD_SUBSUMPTION_EXT])) {
            if (isset($data[self::FIELD_SUBSUMPTION])) {
                $value = $data[self::FIELD_SUBSUMPTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SUBSUMPTION_EXT]) && is_array($data[self::FIELD_SUBSUMPTION_EXT])) {
                $ext = $data[self::FIELD_SUBSUMPTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setSubsumption($value);
                } else if (is_array($value)) {
                    $this->setSubsumption(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setSubsumption(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSubsumption(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_URI]) || isset($data[self::FIELD_URI_EXT])) {
            if (isset($data[self::FIELD_URI])) {
                $value = $data[self::FIELD_URI];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_URI_EXT]) && is_array($data[self::FIELD_URI_EXT])) {
                $ext = $data[self::FIELD_URI_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setUri($value);
                } else if (is_array($value)) {
                    $this->setUri(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setUri(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setUri(new FHIRCanonical($ext));
            }
        }
        if (isset($data[self::FIELD_VERSION])) {
            if (is_array($data[self::FIELD_VERSION])) {
                foreach($data[self::FIELD_VERSION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRTerminologyCapabilitiesVersion) {
                        $this->addVersion($v);
                    } else {
                        $this->addVersion(new FHIRTerminologyCapabilitiesVersion($v));
                    }
                }
            } else if ($data[self::FIELD_VERSION] instanceof FHIRTerminologyCapabilitiesVersion) {
                $this->addVersion($data[self::FIELD_VERSION]);
            } else {
                $this->addVersion(new FHIRTerminologyCapabilitiesVersion($data[self::FIELD_VERSION]));
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
        return "<TerminologyCapabilitiesCodeSystem{$xmlns}></TerminologyCapabilitiesCodeSystem>";
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if subsumption is supported for this version of the code system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getSubsumption()
    {
        return $this->subsumption;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if subsumption is supported for this version of the code system.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $subsumption
     * @return static
     */
    public function setSubsumption($subsumption = null)
    {
        if (null === $subsumption) {
            $this->subsumption = null;
            return $this;
        }
        if ($subsumption instanceof FHIRBoolean) {
            $this->subsumption = $subsumption;
            return $this;
        }
        $this->subsumption = new FHIRBoolean($subsumption);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * URI for the Code System.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * URI for the Code System.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $uri
     * @return static
     */
    public function setUri($uri = null)
    {
        if (null === $uri) {
            $this->uri = null;
            return $this;
        }
        if ($uri instanceof FHIRCanonical) {
            $this->uri = $uri;
            return $this;
        }
        $this->uri = new FHIRCanonical($uri);
        return $this;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * For the code system, a list of versions that are supported by the server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesVersion[]
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * For the code system, a list of versions that are supported by the server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesVersion $version
     * @return static
     */
    public function addVersion(FHIRTerminologyCapabilitiesVersion $version = null)
    {
        $this->version[] = $version;
        return $this;
    }

    /**
     * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
     * of a FHIR Terminology Server that may be used as a statement of actual server
     * functionality or a statement of required or desired server implementation.
     *
     * For the code system, a list of versions that are supported by the server.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesVersion[] $version
     * @return static
     */
    public function setVersion(array $version = [])
    {
        $this->version = [];
        if ([] === $version) {
            return $this;
        }
        foreach($version as $v) {
            if ($v instanceof FHIRTerminologyCapabilitiesVersion) {
                $this->addVersion($v);
            } else {
                $this->addVersion(new FHIRTerminologyCapabilitiesVersion($v));
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
        if (null !== ($v = $this->getSubsumption())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSUMPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URI] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getVersion())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VERSION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSUMPTION])) {
            $v = $this->getSubsumption();
            foreach($validationRules[self::FIELD_SUBSUMPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_CODE_SYSTEM, self::FIELD_SUBSUMPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSUMPTION])) {
                        $errs[self::FIELD_SUBSUMPTION] = [];
                    }
                    $errs[self::FIELD_SUBSUMPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_URI])) {
            $v = $this->getUri();
            foreach($validationRules[self::FIELD_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_CODE_SYSTEM, self::FIELD_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URI])) {
                        $errs[self::FIELD_URI] = [];
                    }
                    $errs[self::FIELD_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_CODE_SYSTEM, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem
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
                throw new \DomainException(sprintf('FHIRTerminologyCapabilitiesCodeSystem::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTerminologyCapabilitiesCodeSystem::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRTerminologyCapabilitiesCodeSystem;
        } elseif (!is_object($type) || !($type instanceof FHIRTerminologyCapabilitiesCodeSystem)) {
            throw new \RuntimeException(sprintf(
                'FHIRTerminologyCapabilitiesCodeSystem::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem or null, %s seen.',
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
        if (isset($children->subsumption)) {
            $type->setSubsumption(FHIRBoolean::xmlUnserialize($children->subsumption));
        }
        if (isset($attributes->subsumption)) {
            $pt = $type->getSubsumption();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->subsumption);
            } else {
                $type->setSubsumption((string)$attributes->subsumption);
            }
        }
        if (isset($children->uri)) {
            $type->setUri(FHIRCanonical::xmlUnserialize($children->uri));
        }
        if (isset($attributes->uri)) {
            $pt = $type->getUri();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->uri);
            } else {
                $type->setUri((string)$attributes->uri);
            }
        }
        if (isset($children->version)) {
            foreach($children->version as $child) {
                $type->addVersion(FHIRTerminologyCapabilitiesVersion::xmlUnserialize($child));
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
        if (null !== ($v = $this->getSubsumption())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBSUMPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getUri())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_URI, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getVersion())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_VERSION, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getSubsumption())) {
            $a[self::FIELD_SUBSUMPTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_SUBSUMPTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getUri())) {
            $a[self::FIELD_URI] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCanonical::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCanonical::FIELD_VALUE]);
                $a[self::FIELD_URI_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getVersion())) {
            $a[self::FIELD_VERSION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_VERSION][] = $v;
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