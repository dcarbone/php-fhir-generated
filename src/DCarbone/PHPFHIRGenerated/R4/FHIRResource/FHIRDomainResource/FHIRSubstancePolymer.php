<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Todo.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRSubstancePolymer
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRSubstancePolymer extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER;
    const FIELD_CLASS = 'class';
    const FIELD_COPOLYMER_CONNECTIVITY = 'copolymerConnectivity';
    const FIELD_GEOMETRY = 'geometry';
    const FIELD_MODIFICATION = 'modification';
    const FIELD_MODIFICATION_EXT = '_modification';
    const FIELD_MONOMER_SET = 'monomerSet';
    const FIELD_REPEAT = 'repeat';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $class = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $copolymerConnectivity = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $geometry = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    protected $modification = [];

    /**
     * Todo.
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet[]
     */
    protected $monomerSet = [];

    /**
     * Todo.
     *
     * Todo.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat[]
     */
    protected $repeat = [];

    /**
     * Validation map for fields in type SubstancePolymer
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRSubstancePolymer Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstancePolymer::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CLASS])) {
            if ($data[self::FIELD_CLASS] instanceof FHIRCodeableConcept) {
                $this->setClass($data[self::FIELD_CLASS]);
            } else {
                $this->setClass(new FHIRCodeableConcept($data[self::FIELD_CLASS]));
            }
        }
        if (isset($data[self::FIELD_COPOLYMER_CONNECTIVITY])) {
            if (is_array($data[self::FIELD_COPOLYMER_CONNECTIVITY])) {
                foreach($data[self::FIELD_COPOLYMER_CONNECTIVITY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCopolymerConnectivity($v);
                    } else {
                        $this->addCopolymerConnectivity(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_COPOLYMER_CONNECTIVITY] instanceof FHIRCodeableConcept) {
                $this->addCopolymerConnectivity($data[self::FIELD_COPOLYMER_CONNECTIVITY]);
            } else {
                $this->addCopolymerConnectivity(new FHIRCodeableConcept($data[self::FIELD_COPOLYMER_CONNECTIVITY]));
            }
        }
        if (isset($data[self::FIELD_GEOMETRY])) {
            if ($data[self::FIELD_GEOMETRY] instanceof FHIRCodeableConcept) {
                $this->setGeometry($data[self::FIELD_GEOMETRY]);
            } else {
                $this->setGeometry(new FHIRCodeableConcept($data[self::FIELD_GEOMETRY]));
            }
        }
        if (isset($data[self::FIELD_MODIFICATION]) || isset($data[self::FIELD_MODIFICATION_EXT])) {
            if (isset($data[self::FIELD_MODIFICATION])) {
                $value = $data[self::FIELD_MODIFICATION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MODIFICATION_EXT]) && is_array($data[self::FIELD_MODIFICATION_EXT])) {
                $ext = $data[self::FIELD_MODIFICATION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->addModification($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRString) {
                            $this->addModification($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addModification(new FHIRString(array_merge($v, $iext)));
                            } else {
                                $this->addModification(new FHIRString([FHIRString::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addModification(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->addModification(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addModification(new FHIRString($iext));
                }
            }
        }
        if (isset($data[self::FIELD_MONOMER_SET])) {
            if (is_array($data[self::FIELD_MONOMER_SET])) {
                foreach($data[self::FIELD_MONOMER_SET] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstancePolymerMonomerSet) {
                        $this->addMonomerSet($v);
                    } else {
                        $this->addMonomerSet(new FHIRSubstancePolymerMonomerSet($v));
                    }
                }
            } else if ($data[self::FIELD_MONOMER_SET] instanceof FHIRSubstancePolymerMonomerSet) {
                $this->addMonomerSet($data[self::FIELD_MONOMER_SET]);
            } else {
                $this->addMonomerSet(new FHIRSubstancePolymerMonomerSet($data[self::FIELD_MONOMER_SET]));
            }
        }
        if (isset($data[self::FIELD_REPEAT])) {
            if (is_array($data[self::FIELD_REPEAT])) {
                foreach($data[self::FIELD_REPEAT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstancePolymerRepeat) {
                        $this->addRepeat($v);
                    } else {
                        $this->addRepeat(new FHIRSubstancePolymerRepeat($v));
                    }
                }
            } else if ($data[self::FIELD_REPEAT] instanceof FHIRSubstancePolymerRepeat) {
                $this->addRepeat($data[self::FIELD_REPEAT]);
            } else {
                $this->addRepeat(new FHIRSubstancePolymerRepeat($data[self::FIELD_REPEAT]));
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
        return "<SubstancePolymer{$xmlns}></SubstancePolymer>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $class
     * @return static
     */
    public function setClass(FHIRCodeableConcept $class = null)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCopolymerConnectivity()
    {
        return $this->copolymerConnectivity;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $copolymerConnectivity
     * @return static
     */
    public function addCopolymerConnectivity(FHIRCodeableConcept $copolymerConnectivity = null)
    {
        $this->copolymerConnectivity[] = $copolymerConnectivity;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $copolymerConnectivity
     * @return static
     */
    public function setCopolymerConnectivity(array $copolymerConnectivity = [])
    {
        $this->copolymerConnectivity = [];
        if ([] === $copolymerConnectivity) {
            return $this;
        }
        foreach($copolymerConnectivity as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCopolymerConnectivity($v);
            } else {
                $this->addCopolymerConnectivity(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getGeometry()
    {
        return $this->geometry;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $geometry
     * @return static
     */
    public function setGeometry(FHIRCodeableConcept $geometry = null)
    {
        $this->geometry = $geometry;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[]
     */
    public function getModification()
    {
        return $this->modification;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $modification
     * @return static
     */
    public function addModification($modification = null)
    {
        if (null === $modification) {
            $this->modification = [];
            return $this;
        }
        if ($modification instanceof FHIRString) {
            $this->modification[] = $modification;
            return $this;
        }
        $this->modification[] = new FHIRString($modification);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Todo.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString[] $modification
     * @return static
     */
    public function setModification(array $modification = [])
    {
        $this->modification = [];
        if ([] === $modification) {
            return $this;
        }
        foreach($modification as $v) {
            if ($v instanceof FHIRString) {
                $this->addModification($v);
            } else {
                $this->addModification(new FHIRString($v));
            }
        }
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet[]
     */
    public function getMonomerSet()
    {
        return $this->monomerSet;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet $monomerSet
     * @return static
     */
    public function addMonomerSet(FHIRSubstancePolymerMonomerSet $monomerSet = null)
    {
        $this->monomerSet[] = $monomerSet;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerMonomerSet[] $monomerSet
     * @return static
     */
    public function setMonomerSet(array $monomerSet = [])
    {
        $this->monomerSet = [];
        if ([] === $monomerSet) {
            return $this;
        }
        foreach($monomerSet as $v) {
            if ($v instanceof FHIRSubstancePolymerMonomerSet) {
                $this->addMonomerSet($v);
            } else {
                $this->addMonomerSet(new FHIRSubstancePolymerMonomerSet($v));
            }
        }
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat[]
     */
    public function getRepeat()
    {
        return $this->repeat;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat $repeat
     * @return static
     */
    public function addRepeat(FHIRSubstancePolymerRepeat $repeat = null)
    {
        $this->repeat[] = $repeat;
        return $this;
    }

    /**
     * Todo.
     *
     * Todo.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRSubstancePolymer\FHIRSubstancePolymerRepeat[] $repeat
     * @return static
     */
    public function setRepeat(array $repeat = [])
    {
        $this->repeat = [];
        if ([] === $repeat) {
            return $this;
        }
        foreach($repeat as $v) {
            if ($v instanceof FHIRSubstancePolymerRepeat) {
                $this->addRepeat($v);
            } else {
                $this->addRepeat(new FHIRSubstancePolymerRepeat($v));
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
        if (null !== ($v = $this->getClass())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLASS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCopolymerConnectivity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COPOLYMER_CONNECTIVITY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getGeometry())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GEOMETRY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getModification())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MODIFICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMonomerSet())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MONOMER_SET, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRepeat())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REPEAT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASS])) {
            $v = $this->getClass();
            foreach($validationRules[self::FIELD_CLASS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER, self::FIELD_CLASS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASS])) {
                        $errs[self::FIELD_CLASS] = [];
                    }
                    $errs[self::FIELD_CLASS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COPOLYMER_CONNECTIVITY])) {
            $v = $this->getCopolymerConnectivity();
            foreach($validationRules[self::FIELD_COPOLYMER_CONNECTIVITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER, self::FIELD_COPOLYMER_CONNECTIVITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COPOLYMER_CONNECTIVITY])) {
                        $errs[self::FIELD_COPOLYMER_CONNECTIVITY] = [];
                    }
                    $errs[self::FIELD_COPOLYMER_CONNECTIVITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GEOMETRY])) {
            $v = $this->getGeometry();
            foreach($validationRules[self::FIELD_GEOMETRY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER, self::FIELD_GEOMETRY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GEOMETRY])) {
                        $errs[self::FIELD_GEOMETRY] = [];
                    }
                    $errs[self::FIELD_GEOMETRY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFICATION])) {
            $v = $this->getModification();
            foreach($validationRules[self::FIELD_MODIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER, self::FIELD_MODIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFICATION])) {
                        $errs[self::FIELD_MODIFICATION] = [];
                    }
                    $errs[self::FIELD_MODIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MONOMER_SET])) {
            $v = $this->getMonomerSet();
            foreach($validationRules[self::FIELD_MONOMER_SET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER, self::FIELD_MONOMER_SET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MONOMER_SET])) {
                        $errs[self::FIELD_MONOMER_SET] = [];
                    }
                    $errs[self::FIELD_MONOMER_SET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPEAT])) {
            $v = $this->getRepeat();
            foreach($validationRules[self::FIELD_REPEAT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_POLYMER, self::FIELD_REPEAT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPEAT])) {
                        $errs[self::FIELD_REPEAT] = [];
                    }
                    $errs[self::FIELD_REPEAT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer
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
                throw new \DomainException(sprintf('FHIRSubstancePolymer::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstancePolymer::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSubstancePolymer;
        } elseif (!is_object($type) || !($type instanceof FHIRSubstancePolymer)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstancePolymer::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRSubstancePolymer or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->class)) {
            $type->setClass(FHIRCodeableConcept::xmlUnserialize($children->class));
        }
        if (isset($children->copolymerConnectivity)) {
            foreach($children->copolymerConnectivity as $child) {
                $type->addCopolymerConnectivity(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->geometry)) {
            $type->setGeometry(FHIRCodeableConcept::xmlUnserialize($children->geometry));
        }
        if (isset($children->modification)) {
            foreach($children->modification as $child) {
                $type->addModification(FHIRString::xmlUnserialize($child));
            }
        }
        if (isset($children->monomerSet)) {
            foreach($children->monomerSet as $child) {
                $type->addMonomerSet(FHIRSubstancePolymerMonomerSet::xmlUnserialize($child));
            }
        }
        if (isset($children->repeat)) {
            foreach($children->repeat as $child) {
                $type->addRepeat(FHIRSubstancePolymerRepeat::xmlUnserialize($child));
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
        if (null !== ($v = $this->getClass())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLASS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getCopolymerConnectivity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_COPOLYMER_CONNECTIVITY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getGeometry())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GEOMETRY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getModification())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MODIFICATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getMonomerSet())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MONOMER_SET, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getRepeat())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REPEAT, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getClass())) {
            $a[self::FIELD_CLASS] = $v;
        }
        if ([] !== ($vs = $this->getCopolymerConnectivity())) {
            $a[self::FIELD_COPOLYMER_CONNECTIVITY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_COPOLYMER_CONNECTIVITY][] = $v;
            }
        }
        if (null !== ($v = $this->getGeometry())) {
            $a[self::FIELD_GEOMETRY] = $v;
        }
        if ([] !== ($vs = $this->getModification())) {
            $a[self::FIELD_MODIFICATION] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MODIFICATION][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRString::FIELD_VALUE]) || array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRString::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_MODIFICATION_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getMonomerSet())) {
            $a[self::FIELD_MONOMER_SET] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_MONOMER_SET][] = $v;
            }
        }
        if ([] !== ($vs = $this->getRepeat())) {
            $a[self::FIELD_REPEAT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REPEAT][] = $v;
            }
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