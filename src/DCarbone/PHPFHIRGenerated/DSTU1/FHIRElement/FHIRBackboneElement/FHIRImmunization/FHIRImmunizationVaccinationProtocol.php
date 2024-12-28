<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunization;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:13+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * Immunization event information.
 *
 * Class FHIRImmunizationVaccinationProtocol
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunization
 */
class FHIRImmunizationVaccinationProtocol extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_VACCINATION_PROTOCOL;
    const FIELD_DOSE_SEQUENCE = 'doseSequence';
    const FIELD_DOSE_SEQUENCE_EXT = '_doseSequence';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_AUTHORITY = 'authority';
    const FIELD_SERIES = 'series';
    const FIELD_SERIES_EXT = '_series';
    const FIELD_SERIES_DOSES = 'seriesDoses';
    const FIELD_SERIES_DOSES_EXT = '_seriesDoses';
    const FIELD_DOSE_TARGET = 'doseTarget';
    const FIELD_DOSE_STATUS = 'doseStatus';
    const FIELD_DOSE_STATUS_REASON = 'doseStatusReason';

    /** @var string */
    private $_xmlns = '';

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position in a series.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected $doseSequence = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol? E.g. ACIP.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $authority = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $series = null;

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    protected $seriesDoses = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The targeted disease.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $doseTarget = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if the immunization event should "count" against the protocol.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $doseStatus = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides an explanation as to why a immunization event should or should not
     * count against the protocol.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $doseStatusReason = null;

    /**
     * Validation map for fields in type Immunization.VaccinationProtocol
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRImmunizationVaccinationProtocol Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationVaccinationProtocol::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DOSE_SEQUENCE]) || isset($data[self::FIELD_DOSE_SEQUENCE_EXT])) {
            $value = isset($data[self::FIELD_DOSE_SEQUENCE]) ? $data[self::FIELD_DOSE_SEQUENCE] : null;
            $ext = (isset($data[self::FIELD_DOSE_SEQUENCE_EXT]) && is_array($data[self::FIELD_DOSE_SEQUENCE_EXT])) ? $ext = $data[self::FIELD_DOSE_SEQUENCE_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setDoseSequence($value);
                } else if (is_array($value)) {
                    $this->setDoseSequence(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setDoseSequence(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDoseSequence(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            $value = isset($data[self::FIELD_DESCRIPTION]) ? $data[self::FIELD_DESCRIPTION] : null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $ext = $data[self::FIELD_DESCRIPTION_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_AUTHORITY])) {
            if ($data[self::FIELD_AUTHORITY] instanceof FHIRResourceReference) {
                $this->setAuthority($data[self::FIELD_AUTHORITY]);
            } else {
                $this->setAuthority(new FHIRResourceReference($data[self::FIELD_AUTHORITY]));
            }
        }
        if (isset($data[self::FIELD_SERIES]) || isset($data[self::FIELD_SERIES_EXT])) {
            $value = isset($data[self::FIELD_SERIES]) ? $data[self::FIELD_SERIES] : null;
            $ext = (isset($data[self::FIELD_SERIES_EXT]) && is_array($data[self::FIELD_SERIES_EXT])) ? $ext = $data[self::FIELD_SERIES_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSeries($value);
                } else if (is_array($value)) {
                    $this->setSeries(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSeries(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSeries(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SERIES_DOSES]) || isset($data[self::FIELD_SERIES_DOSES_EXT])) {
            $value = isset($data[self::FIELD_SERIES_DOSES]) ? $data[self::FIELD_SERIES_DOSES] : null;
            $ext = (isset($data[self::FIELD_SERIES_DOSES_EXT]) && is_array($data[self::FIELD_SERIES_DOSES_EXT])) ? $ext = $data[self::FIELD_SERIES_DOSES_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setSeriesDoses($value);
                } else if (is_array($value)) {
                    $this->setSeriesDoses(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setSeriesDoses(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSeriesDoses(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_DOSE_TARGET])) {
            if ($data[self::FIELD_DOSE_TARGET] instanceof FHIRCodeableConcept) {
                $this->setDoseTarget($data[self::FIELD_DOSE_TARGET]);
            } else {
                $this->setDoseTarget(new FHIRCodeableConcept($data[self::FIELD_DOSE_TARGET]));
            }
        }
        if (isset($data[self::FIELD_DOSE_STATUS])) {
            if ($data[self::FIELD_DOSE_STATUS] instanceof FHIRCodeableConcept) {
                $this->setDoseStatus($data[self::FIELD_DOSE_STATUS]);
            } else {
                $this->setDoseStatus(new FHIRCodeableConcept($data[self::FIELD_DOSE_STATUS]));
            }
        }
        if (isset($data[self::FIELD_DOSE_STATUS_REASON])) {
            if ($data[self::FIELD_DOSE_STATUS_REASON] instanceof FHIRCodeableConcept) {
                $this->setDoseStatusReason($data[self::FIELD_DOSE_STATUS_REASON]);
            } else {
                $this->setDoseStatusReason(new FHIRCodeableConcept($data[self::FIELD_DOSE_STATUS_REASON]));
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
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ImmunizationVaccinationProtocol{$xmlns}></ImmunizationVaccinationProtocol>";
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position in a series.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getDoseSequence()
    {
        return $this->doseSequence;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Nominal position in a series.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $doseSequence
     * @return static
     */
    public function setDoseSequence($doseSequence = null)
    {
        if (null !== $doseSequence && !($doseSequence instanceof FHIRInteger)) {
            $doseSequence = new FHIRInteger($doseSequence);
        }
        $this->_trackValueSet($this->doseSequence, $doseSequence);
        $this->doseSequence = $doseSequence;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription($description = null)
    {
        if (null !== $description && !($description instanceof FHIRString)) {
            $description = new FHIRString($description);
        }
        $this->_trackValueSet($this->description, $description);
        $this->description = $description;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol? E.g. ACIP.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol? E.g. ACIP.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $authority
     * @return static
     */
    public function setAuthority(FHIRResourceReference $authority = null)
    {
        $this->_trackValueSet($this->authority, $authority);
        $this->authority = $authority;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $series
     * @return static
     */
    public function setSeries($series = null)
    {
        if (null !== $series && !($series instanceof FHIRString)) {
            $series = new FHIRString($series);
        }
        $this->_trackValueSet($this->series, $series);
        $this->series = $series;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getSeriesDoses()
    {
        return $this->seriesDoses;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $seriesDoses
     * @return static
     */
    public function setSeriesDoses($seriesDoses = null)
    {
        if (null !== $seriesDoses && !($seriesDoses instanceof FHIRInteger)) {
            $seriesDoses = new FHIRInteger($seriesDoses);
        }
        $this->_trackValueSet($this->seriesDoses, $seriesDoses);
        $this->seriesDoses = $seriesDoses;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The targeted disease.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseTarget()
    {
        return $this->doseTarget;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The targeted disease.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $doseTarget
     * @return static
     */
    public function setDoseTarget(FHIRCodeableConcept $doseTarget = null)
    {
        $this->_trackValueSet($this->doseTarget, $doseTarget);
        $this->doseTarget = $doseTarget;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if the immunization event should "count" against the protocol.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseStatus()
    {
        return $this->doseStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if the immunization event should "count" against the protocol.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $doseStatus
     * @return static
     */
    public function setDoseStatus(FHIRCodeableConcept $doseStatus = null)
    {
        $this->_trackValueSet($this->doseStatus, $doseStatus);
        $this->doseStatus = $doseStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides an explanation as to why a immunization event should or should not
     * count against the protocol.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseStatusReason()
    {
        return $this->doseStatusReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Provides an explanation as to why a immunization event should or should not
     * count against the protocol.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $doseStatusReason
     * @return static
     */
    public function setDoseStatusReason(FHIRCodeableConcept $doseStatusReason = null)
    {
        $this->_trackValueSet($this->doseStatusReason, $doseStatusReason);
        $this->doseStatusReason = $doseStatusReason;
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
        if (null !== ($v = $this->getDoseSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_SEQUENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAuthority())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHORITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSeries())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERIES] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSeriesDoses())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SERIES_DOSES] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDoseTarget())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_TARGET] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDoseStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDoseStatusReason())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_STATUS_REASON] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_SEQUENCE])) {
            $v = $this->getDoseSequence();
            foreach($validationRules[self::FIELD_DOSE_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_VACCINATION_PROTOCOL, self::FIELD_DOSE_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_SEQUENCE])) {
                        $errs[self::FIELD_DOSE_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_DOSE_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_VACCINATION_PROTOCOL, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHORITY])) {
            $v = $this->getAuthority();
            foreach($validationRules[self::FIELD_AUTHORITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_VACCINATION_PROTOCOL, self::FIELD_AUTHORITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORITY])) {
                        $errs[self::FIELD_AUTHORITY] = [];
                    }
                    $errs[self::FIELD_AUTHORITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIES])) {
            $v = $this->getSeries();
            foreach($validationRules[self::FIELD_SERIES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_VACCINATION_PROTOCOL, self::FIELD_SERIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIES])) {
                        $errs[self::FIELD_SERIES] = [];
                    }
                    $errs[self::FIELD_SERIES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SERIES_DOSES])) {
            $v = $this->getSeriesDoses();
            foreach($validationRules[self::FIELD_SERIES_DOSES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_VACCINATION_PROTOCOL, self::FIELD_SERIES_DOSES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SERIES_DOSES])) {
                        $errs[self::FIELD_SERIES_DOSES] = [];
                    }
                    $errs[self::FIELD_SERIES_DOSES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_TARGET])) {
            $v = $this->getDoseTarget();
            foreach($validationRules[self::FIELD_DOSE_TARGET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_VACCINATION_PROTOCOL, self::FIELD_DOSE_TARGET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_TARGET])) {
                        $errs[self::FIELD_DOSE_TARGET] = [];
                    }
                    $errs[self::FIELD_DOSE_TARGET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_STATUS])) {
            $v = $this->getDoseStatus();
            foreach($validationRules[self::FIELD_DOSE_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_VACCINATION_PROTOCOL, self::FIELD_DOSE_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_STATUS])) {
                        $errs[self::FIELD_DOSE_STATUS] = [];
                    }
                    $errs[self::FIELD_DOSE_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_STATUS_REASON])) {
            $v = $this->getDoseStatusReason();
            foreach($validationRules[self::FIELD_DOSE_STATUS_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_VACCINATION_PROTOCOL, self::FIELD_DOSE_STATUS_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_STATUS_REASON])) {
                        $errs[self::FIELD_DOSE_STATUS_REASON] = [];
                    }
                    $errs[self::FIELD_DOSE_STATUS_REASON][$rule] = $err;
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
     * @param null|string|\DOMElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            $dom->loadXML($element, $libxmlOpts);
            if (false === $dom) {
                throw new \DomainException(sprintf('FHIRImmunizationVaccinationProtocol::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImmunizationVaccinationProtocol::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRImmunizationVaccinationProtocol(null);
        } elseif (!is_object($type) || !($type instanceof FHIRImmunizationVaccinationProtocol)) {
            throw new \RuntimeException(sprintf(
                'FHIRImmunizationVaccinationProtocol::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_DOSE_SEQUENCE === $n->nodeName) {
                $type->setDoseSequence(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_AUTHORITY === $n->nodeName) {
                $type->setAuthority(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_SERIES === $n->nodeName) {
                $type->setSeries(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_SERIES_DOSES === $n->nodeName) {
                $type->setSeriesDoses(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_DOSE_TARGET === $n->nodeName) {
                $type->setDoseTarget(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DOSE_STATUS === $n->nodeName) {
                $type->setDoseStatus(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DOSE_STATUS_REASON === $n->nodeName) {
                $type->setDoseStatusReason(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DOSE_SEQUENCE);
        if (null !== $n) {
            $pt = $type->getDoseSequence();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDoseSequence($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DESCRIPTION);
        if (null !== $n) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDescription($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SERIES);
        if (null !== $n) {
            $pt = $type->getSeries();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSeries($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SERIES_DOSES);
        if (null !== $n) {
            $pt = $type->getSeriesDoses();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSeriesDoses($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getDoseSequence())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DOSE_SEQUENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAuthority())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AUTHORITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSeries())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SERIES);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSeriesDoses())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SERIES_DOSES);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDoseTarget())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DOSE_TARGET);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDoseStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DOSE_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDoseStatusReason())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DOSE_STATUS_REASON);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        return $element;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDoseSequence())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DOSE_SEQUENCE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRInteger::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DOSE_SEQUENCE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DESCRIPTION] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DESCRIPTION_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getAuthority())) {
            $a[self::FIELD_AUTHORITY] = $v;
        }
        if (null !== ($v = $this->getSeries())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_SERIES] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_SERIES_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getSeriesDoses())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_SERIES_DOSES] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRInteger::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_SERIES_DOSES_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDoseTarget())) {
            $a[self::FIELD_DOSE_TARGET] = $v;
        }
        if (null !== ($v = $this->getDoseStatus())) {
            $a[self::FIELD_DOSE_STATUS] = $v;
        }
        if (null !== ($v = $this->getDoseStatusReason())) {
            $a[self::FIELD_DOSE_STATUS_REASON] = $v;
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