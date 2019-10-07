<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 7th, 2019 22:31+0000
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
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * Describes the event of a patient being administered a vaccination or a record of
 * a vaccination as reported by a patient, a clinician or another party and may
 * include vaccine reaction information and what vaccination protocol was followed.
 *
 * Class FHIRImmunizationVaccinationProtocol
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization
 */
class FHIRImmunizationVaccinationProtocol extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_VACCINATION_PROTOCOL;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_AUTHORITY = 'authority';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DOSE_SEQUENCE = 'doseSequence';
    const FIELD_DOSE_SEQUENCE_EXT = '_doseSequence';
    const FIELD_DOSE_STATUS = 'doseStatus';
    const FIELD_DOSE_STATUS_REASON = 'doseStatusReason';
    const FIELD_SERIES = 'series';
    const FIELD_SERIES_EXT = '_series';
    const FIELD_SERIES_DOSES = 'seriesDoses';
    const FIELD_SERIES_DOSES_EXT = '_seriesDoses';
    const FIELD_TARGET_DISEASE = 'targetDisease';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol. E.g. ACIP.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    private $authority = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    private $description = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Nominal position in a series.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    private $doseSequence = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates if the immunization event should "count" against the protocol.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    private $doseStatus = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides an explanation as to why an immunization event should or should not
     * count against the protocol.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    private $doseStatusReason = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    private $series = null;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    private $seriesDoses = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The targeted disease.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    private $targetDisease = [];

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
        if (isset($data[self::FIELD_AUTHORITY])) {
            if ($data[self::FIELD_AUTHORITY] instanceof FHIRReference) {
                $this->setAuthority($data[self::FIELD_AUTHORITY]);
            } else {
                $this->setAuthority(new FHIRReference($data[self::FIELD_AUTHORITY]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_DOSE_SEQUENCE])) {
            $ext = (isset($data[self::FIELD_DOSE_SEQUENCE_EXT]) && is_array($data[self::FIELD_DOSE_SEQUENCE_EXT]))
                ? $data[self::FIELD_DOSE_SEQUENCE_EXT]
                : null;
            if ($data[self::FIELD_DOSE_SEQUENCE] instanceof FHIRPositiveInt) {
                $this->setDoseSequence($data[self::FIELD_DOSE_SEQUENCE]);
            } elseif ($ext && is_scalar($data[self::FIELD_DOSE_SEQUENCE])) {
                $this->setDoseSequence(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_DOSE_SEQUENCE]] + $ext));
            } else {
                $this->setDoseSequence(new FHIRPositiveInt($data[self::FIELD_DOSE_SEQUENCE]));
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
        if (isset($data[self::FIELD_SERIES])) {
            $ext = (isset($data[self::FIELD_SERIES_EXT]) && is_array($data[self::FIELD_SERIES_EXT]))
                ? $data[self::FIELD_SERIES_EXT]
                : null;
            if ($data[self::FIELD_SERIES] instanceof FHIRString) {
                $this->setSeries($data[self::FIELD_SERIES]);
            } elseif ($ext && is_scalar($data[self::FIELD_SERIES])) {
                $this->setSeries(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SERIES]] + $ext));
            } else {
                $this->setSeries(new FHIRString($data[self::FIELD_SERIES]));
            }
        }
        if (isset($data[self::FIELD_SERIES_DOSES])) {
            $ext = (isset($data[self::FIELD_SERIES_DOSES_EXT]) && is_array($data[self::FIELD_SERIES_DOSES_EXT]))
                ? $data[self::FIELD_SERIES_DOSES_EXT]
                : null;
            if ($data[self::FIELD_SERIES_DOSES] instanceof FHIRPositiveInt) {
                $this->setSeriesDoses($data[self::FIELD_SERIES_DOSES]);
            } elseif ($ext && is_scalar($data[self::FIELD_SERIES_DOSES])) {
                $this->setSeriesDoses(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_SERIES_DOSES]] + $ext));
            } else {
                $this->setSeriesDoses(new FHIRPositiveInt($data[self::FIELD_SERIES_DOSES]));
            }
        }
        if (isset($data[self::FIELD_TARGET_DISEASE])) {
            if (is_array($data[self::FIELD_TARGET_DISEASE])) {
                foreach($data[self::FIELD_TARGET_DISEASE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addTargetDisease($v);
                    } else {
                        $this->addTargetDisease(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_TARGET_DISEASE] instanceof FHIRCodeableConcept) {
                $this->addTargetDisease($data[self::FIELD_TARGET_DISEASE]);
            } else {
                $this->addTargetDisease(new FHIRCodeableConcept($data[self::FIELD_TARGET_DISEASE]));
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
     * @return string|null
     */
    public function getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @return string
     */
    public function getFHIRXMLElementDefinition()
    {
        $xmlns = $this->getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ImmunizationVaccinationProtocol{$xmlns}></ImmunizationVaccinationProtocol>";
    }


    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol. E.g. ACIP.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol. E.g. ACIP.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $authority
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol
     */
    public function setAuthority(FHIRReference $authority = null)
    {
        $this->authority = $authority;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol
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
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Nominal position in a series.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getDoseSequence()
    {
        return $this->doseSequence;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Nominal position in a series.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt $doseSequence
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol
     */
    public function setDoseSequence($doseSequence = null)
    {
        if (null === $doseSequence) {
            $this->doseSequence = null;
            return $this;
        }
        if ($doseSequence instanceof FHIRPositiveInt) {
            $this->doseSequence = $doseSequence;
            return $this;
        }
        $this->doseSequence = new FHIRPositiveInt($doseSequence);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates if the immunization event should "count" against the protocol.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseStatus()
    {
        return $this->doseStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates if the immunization event should "count" against the protocol.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $doseStatus
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol
     */
    public function setDoseStatus(FHIRCodeableConcept $doseStatus = null)
    {
        $this->doseStatus = $doseStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides an explanation as to why an immunization event should or should not
     * count against the protocol.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getDoseStatusReason()
    {
        return $this->doseStatusReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Provides an explanation as to why an immunization event should or should not
     * count against the protocol.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $doseStatusReason
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol
     */
    public function setDoseStatusReason(FHIRCodeableConcept $doseStatusReason = null)
    {
        $this->doseStatusReason = $doseStatusReason;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $series
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol
     */
    public function setSeries($series = null)
    {
        if (null === $series) {
            $this->series = null;
            return $this;
        }
        if ($series instanceof FHIRString) {
            $this->series = $series;
            return $this;
        }
        $this->series = new FHIRString($series);
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt
     */
    public function getSeriesDoses()
    {
        return $this->seriesDoses;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt $seriesDoses
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol
     */
    public function setSeriesDoses($seriesDoses = null)
    {
        if (null === $seriesDoses) {
            $this->seriesDoses = null;
            return $this;
        }
        if ($seriesDoses instanceof FHIRPositiveInt) {
            $this->seriesDoses = $seriesDoses;
            return $this;
        }
        $this->seriesDoses = new FHIRPositiveInt($seriesDoses);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The targeted disease.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getTargetDisease()
    {
        return $this->targetDisease;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The targeted disease.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $targetDisease
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol
     */
    public function addTargetDisease(FHIRCodeableConcept $targetDisease = null)
    {
        $this->targetDisease[] = $targetDisease;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The targeted disease.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $targetDisease
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol
     */
    public function setTargetDisease(array $targetDisease = [])
    {
        $this->targetDisease = [];
        if ([] === $targetDisease) {
            return $this;
        }
        foreach($targetDisease as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addTargetDisease($v);
            } else {
                $this->addTargetDisease(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol
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
                throw new \DomainException(sprintf('FHIRImmunizationVaccinationProtocol::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImmunizationVaccinationProtocol::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRImmunizationVaccinationProtocol);
        } elseif (!is_object($type) || !($type instanceof FHIRImmunizationVaccinationProtocol)) {
            throw new \RuntimeException(sprintf(
                'FHIRImmunizationVaccinationProtocol::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->authority)) {
            $type->setAuthority(FHIRReference::xmlUnserialize($children->authority));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->doseSequence)) {
            $type->setDoseSequence((string)$attributes->doseSequence);
        }
        if (isset($children->doseSequence)) {
            $type->setDoseSequence(FHIRPositiveInt::xmlUnserialize($children->doseSequence));
        }
        if (isset($children->doseStatus)) {
            $type->setDoseStatus(FHIRCodeableConcept::xmlUnserialize($children->doseStatus));
        }
        if (isset($children->doseStatusReason)) {
            $type->setDoseStatusReason(FHIRCodeableConcept::xmlUnserialize($children->doseStatusReason));
        }
        if (isset($attributes->series)) {
            $type->setSeries((string)$attributes->series);
        }
        if (isset($children->series)) {
            $type->setSeries(FHIRString::xmlUnserialize($children->series));
        }
        if (isset($attributes->seriesDoses)) {
            $type->setSeriesDoses((string)$attributes->seriesDoses);
        }
        if (isset($children->seriesDoses)) {
            $type->setSeriesDoses(FHIRPositiveInt::xmlUnserialize($children->seriesDoses));
        }
        if (isset($children->targetDisease)) {
            foreach($children->targetDisease as $child) {
                $type->addTargetDisease(FHIRCodeableConcept::xmlUnserialize($child));
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
            $sxe = new \SimpleXMLElement($this->getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getAuthority())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHORITY, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDoseSequence())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOSE_SEQUENCE, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDoseStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOSE_STATUS, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDoseStatusReason())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOSE_STATUS_REASON, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSeries())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERIES, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSeriesDoses())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SERIES_DOSES, null, $v->getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getTargetDisease())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET_DISEASE, null, $v->getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getAuthority())) {
            $a[self::FIELD_AUTHORITY] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = (string)$v;
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getDoseSequence())) {
            $a[self::FIELD_DOSE_SEQUENCE] = (string)$v;
            $a[self::FIELD_DOSE_SEQUENCE_EXT] = $v;
        }
        if (null !== ($v = $this->getDoseStatus())) {
            $a[self::FIELD_DOSE_STATUS] = $v;
        }
        if (null !== ($v = $this->getDoseStatusReason())) {
            $a[self::FIELD_DOSE_STATUS_REASON] = $v;
        }
        if (null !== ($v = $this->getSeries())) {
            $a[self::FIELD_SERIES] = (string)$v;
            $a[self::FIELD_SERIES_EXT] = $v;
        }
        if (null !== ($v = $this->getSeriesDoses())) {
            $a[self::FIELD_SERIES_DOSES] = (string)$v;
            $a[self::FIELD_SERIES_DOSES_EXT] = $v;
        }
        if ([] !== ($vs = $this->getTargetDisease())) {
            $a[self::FIELD_TARGET_DISEASE] = $vs;
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