<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript;

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
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A structured set of tests against a FHIR server implementation to determine
 * compliance against the FHIR specification.
 *
 * Class FHIRTestScriptFixture
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript
 */
class FHIRTestScriptFixture extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_FIXTURE;
    const FIELD_AUTOCREATE = 'autocreate';
    const FIELD_AUTOCREATE_EXT = '_autocreate';
    const FIELD_AUTODELETE = 'autodelete';
    const FIELD_AUTODELETE_EXT = '_autodelete';
    const FIELD_RESOURCE = 'resource';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not to implicitly create the fixture during setup. If true, the
     * fixture is automatically created on each server being tested during setup,
     * therefore no create operation is required for this fixture in the
     * TestScript.setup section.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $autocreate = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not to implicitly delete the fixture during teardown. If true, the
     * fixture is automatically deleted on each server being tested during teardown,
     * therefore no delete operation is required for this fixture in the
     * TestScript.teardown section.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    protected $autodelete = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the resource (containing the contents of the resource needed for
     * operations).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    protected $resource = null;

    /**
     * Validation map for fields in type TestScript.Fixture
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRTestScriptFixture Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptFixture::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTOCREATE]) || isset($data[self::FIELD_AUTOCREATE_EXT])) {
            if (isset($data[self::FIELD_AUTOCREATE])) {
                $value = $data[self::FIELD_AUTOCREATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_AUTOCREATE_EXT]) && is_array($data[self::FIELD_AUTOCREATE_EXT])) {
                $ext = $data[self::FIELD_AUTOCREATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setAutocreate($value);
                } else if (is_array($value)) {
                    $this->setAutocreate(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setAutocreate(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAutocreate(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_AUTODELETE]) || isset($data[self::FIELD_AUTODELETE_EXT])) {
            if (isset($data[self::FIELD_AUTODELETE])) {
                $value = $data[self::FIELD_AUTODELETE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_AUTODELETE_EXT]) && is_array($data[self::FIELD_AUTODELETE_EXT])) {
                $ext = $data[self::FIELD_AUTODELETE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setAutodelete($value);
                } else if (is_array($value)) {
                    $this->setAutodelete(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setAutodelete(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAutodelete(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_RESOURCE])) {
            if ($data[self::FIELD_RESOURCE] instanceof FHIRReference) {
                $this->setResource($data[self::FIELD_RESOURCE]);
            } else {
                $this->setResource(new FHIRReference($data[self::FIELD_RESOURCE]));
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
        return "<TestScriptFixture{$xmlns}></TestScriptFixture>";
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not to implicitly create the fixture during setup. If true, the
     * fixture is automatically created on each server being tested during setup,
     * therefore no create operation is required for this fixture in the
     * TestScript.setup section.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getAutocreate()
    {
        return $this->autocreate;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not to implicitly create the fixture during setup. If true, the
     * fixture is automatically created on each server being tested during setup,
     * therefore no create operation is required for this fixture in the
     * TestScript.setup section.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $autocreate
     * @return static
     */
    public function setAutocreate($autocreate = null)
    {
        if (null === $autocreate) {
            $this->autocreate = null;
            return $this;
        }
        if ($autocreate instanceof FHIRBoolean) {
            $this->autocreate = $autocreate;
            return $this;
        }
        $this->autocreate = new FHIRBoolean($autocreate);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not to implicitly delete the fixture during teardown. If true, the
     * fixture is automatically deleted on each server being tested during teardown,
     * therefore no delete operation is required for this fixture in the
     * TestScript.teardown section.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getAutodelete()
    {
        return $this->autodelete;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not to implicitly delete the fixture during teardown. If true, the
     * fixture is automatically deleted on each server being tested during teardown,
     * therefore no delete operation is required for this fixture in the
     * TestScript.teardown section.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $autodelete
     * @return static
     */
    public function setAutodelete($autodelete = null)
    {
        if (null === $autodelete) {
            $this->autodelete = null;
            return $this;
        }
        if ($autodelete instanceof FHIRBoolean) {
            $this->autodelete = $autodelete;
            return $this;
        }
        $this->autodelete = new FHIRBoolean($autodelete);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the resource (containing the contents of the resource needed for
     * operations).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Reference to the resource (containing the contents of the resource needed for
     * operations).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $resource
     * @return static
     */
    public function setResource(FHIRReference $resource = null)
    {
        $this->resource = $resource;
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
        if (null !== ($v = $this->getAutocreate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTOCREATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAutodelete())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTODELETE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESOURCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_AUTOCREATE])) {
            $v = $this->getAutocreate();
            foreach($validationRules[self::FIELD_AUTOCREATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_FIXTURE, self::FIELD_AUTOCREATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTOCREATE])) {
                        $errs[self::FIELD_AUTOCREATE] = [];
                    }
                    $errs[self::FIELD_AUTOCREATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTODELETE])) {
            $v = $this->getAutodelete();
            foreach($validationRules[self::FIELD_AUTODELETE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_FIXTURE, self::FIELD_AUTODELETE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTODELETE])) {
                        $errs[self::FIELD_AUTODELETE] = [];
                    }
                    $errs[self::FIELD_AUTODELETE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE])) {
            $v = $this->getResource();
            foreach($validationRules[self::FIELD_RESOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_FIXTURE, self::FIELD_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE])) {
                        $errs[self::FIELD_RESOURCE] = [];
                    }
                    $errs[self::FIELD_RESOURCE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture
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
                throw new \DomainException(sprintf('FHIRTestScriptFixture::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTestScriptFixture::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRTestScriptFixture;
        } elseif (!is_object($type) || !($type instanceof FHIRTestScriptFixture)) {
            throw new \RuntimeException(sprintf(
                'FHIRTestScriptFixture::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture or null, %s seen.',
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
        if (isset($children->autocreate)) {
            $type->setAutocreate(FHIRBoolean::xmlUnserialize($children->autocreate));
        }
        if (isset($attributes->autocreate)) {
            $pt = $type->getAutocreate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->autocreate);
            } else {
                $type->setAutocreate((string)$attributes->autocreate);
            }
        }
        if (isset($children->autodelete)) {
            $type->setAutodelete(FHIRBoolean::xmlUnserialize($children->autodelete));
        }
        if (isset($attributes->autodelete)) {
            $pt = $type->getAutodelete();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->autodelete);
            } else {
                $type->setAutodelete((string)$attributes->autodelete);
            }
        }
        if (isset($children->resource)) {
            $type->setResource(FHIRReference::xmlUnserialize($children->resource));
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
        if (null !== ($v = $this->getAutocreate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTOCREATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAutodelete())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTODELETE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getResource())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESOURCE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAutocreate())) {
            $a[self::FIELD_AUTOCREATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_AUTOCREATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAutodelete())) {
            $a[self::FIELD_AUTODELETE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_AUTODELETE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getResource())) {
            $a[self::FIELD_RESOURCE] = $v;
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