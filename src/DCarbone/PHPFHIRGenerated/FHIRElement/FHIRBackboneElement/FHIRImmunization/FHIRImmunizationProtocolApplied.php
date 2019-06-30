<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization;

include_once __DIR__.'/../../../constants.php';

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 30th, 2019 14:05+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Describes the event of a patient being administered a vaccine or a record of an
 * immunization as reported by a patient, a clinician or another party.
 *
 * Class FHIRImmunizationProtocolApplied
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization
 */
class FHIRImmunizationProtocolApplied extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = FHIR_TYPE_NAME_IMMUNIZATION_DOT_PROTOCOL_APPLIED;

    const FIELD_AUTHORITY = 'authority';
    const FIELD_DOSE_NUMBER_POSITIVE_INT = 'doseNumberPositiveInt';
    const FIELD_DOSE_NUMBER_POSITIVE_INT_EXT = '_doseNumberPositiveInt';
    const FIELD_DOSE_NUMBER_STRING = 'doseNumberString';
    const FIELD_DOSE_NUMBER_STRING_EXT = '_doseNumberString';
    const FIELD_SERIES = 'series';
    const FIELD_SERIES_EXT = '_series';
    const FIELD_SERIES_DOSES_POSITIVE_INT = 'seriesDosesPositiveInt';
    const FIELD_SERIES_DOSES_POSITIVE_INT_EXT = '_seriesDosesPositiveInt';
    const FIELD_SERIES_DOSES_STRING = 'seriesDosesString';
    const FIELD_SERIES_DOSES_STRING_EXT = '_seriesDosesString';
    const FIELD_TARGET_DISEASE = 'targetDisease';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol (e.g. ACIP) that is being
     * followed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $authority = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Nominal position in a series. (choose any one of doseNumber*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $doseNumberPositiveInt = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Nominal position in a series. (choose any one of doseNumber*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $doseNumberString = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $series = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity. (choose any one of
     * seriesDoses*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    private $seriesDosesPositiveInt = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The recommended number of doses to achieve immunity. (choose any one of
     * seriesDoses*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $seriesDosesString = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The vaccine preventable disease the dose is being administered against.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    private $targetDisease = [];

    /**
     * FHIRImmunizationProtocolApplied Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImmunizationProtocolApplied::_construct - $data expected to be null or array, %s seen',
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
        if (isset($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT])) {
            $ext = (isset($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT]))
                ? $data[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT]
                : null;
            if ($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT] instanceof FHIRPositiveInt) {
                $this->setDoseNumberPositiveInt($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT]);
            } elseif ($ext && is_scalar($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT])) {
                $this->setDoseNumberPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_DOSE_NUMBER_POSITIVE_INT]] + $ext));
            } else {
                $this->setDoseNumberPositiveInt(new FHIRPositiveInt($data[self::FIELD_DOSE_NUMBER_POSITIVE_INT]));
            }
        }
        if (isset($data[self::FIELD_DOSE_NUMBER_STRING])) {
            $ext = (isset($data[self::FIELD_DOSE_NUMBER_STRING_EXT]) && is_array($data[self::FIELD_DOSE_NUMBER_STRING_EXT]))
                ? $data[self::FIELD_DOSE_NUMBER_STRING_EXT]
                : null;
            if ($data[self::FIELD_DOSE_NUMBER_STRING] instanceof FHIRString) {
                $this->setDoseNumberString($data[self::FIELD_DOSE_NUMBER_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_DOSE_NUMBER_STRING])) {
                $this->setDoseNumberString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DOSE_NUMBER_STRING]] + $ext));
            } else {
                $this->setDoseNumberString(new FHIRString($data[self::FIELD_DOSE_NUMBER_STRING]));
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
        if (isset($data[self::FIELD_SERIES_DOSES_POSITIVE_INT])) {
            $ext = (isset($data[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT]) && is_array($data[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT]))
                ? $data[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT]
                : null;
            if ($data[self::FIELD_SERIES_DOSES_POSITIVE_INT] instanceof FHIRPositiveInt) {
                $this->setSeriesDosesPositiveInt($data[self::FIELD_SERIES_DOSES_POSITIVE_INT]);
            } elseif ($ext && is_scalar($data[self::FIELD_SERIES_DOSES_POSITIVE_INT])) {
                $this->setSeriesDosesPositiveInt(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $data[self::FIELD_SERIES_DOSES_POSITIVE_INT]] + $ext));
            } else {
                $this->setSeriesDosesPositiveInt(new FHIRPositiveInt($data[self::FIELD_SERIES_DOSES_POSITIVE_INT]));
            }
        }
        if (isset($data[self::FIELD_SERIES_DOSES_STRING])) {
            $ext = (isset($data[self::FIELD_SERIES_DOSES_STRING_EXT]) && is_array($data[self::FIELD_SERIES_DOSES_STRING_EXT]))
                ? $data[self::FIELD_SERIES_DOSES_STRING_EXT]
                : null;
            if ($data[self::FIELD_SERIES_DOSES_STRING] instanceof FHIRString) {
                $this->setSeriesDosesString($data[self::FIELD_SERIES_DOSES_STRING]);
            } elseif ($ext && is_scalar($data[self::FIELD_SERIES_DOSES_STRING])) {
                $this->setSeriesDosesString(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SERIES_DOSES_STRING]] + $ext));
            } else {
                $this->setSeriesDosesString(new FHIRString($data[self::FIELD_SERIES_DOSES_STRING]));
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol (e.g. ACIP) that is being
     * followed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference
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
     * Indicates the authority who published the protocol (e.g. ACIP) that is being
     * followed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRReference $authority
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied
     */
    public function setAuthority(FHIRReference $authority = null)
    {
        $this->authority = $authority;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Nominal position in a series. (choose any one of doseNumber*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getDoseNumberPositiveInt()
    {
        return $this->doseNumberPositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * Nominal position in a series. (choose any one of doseNumber*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $doseNumberPositiveInt
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied
     */
    public function setDoseNumberPositiveInt($doseNumberPositiveInt = null)
    {
        if (null === $doseNumberPositiveInt) {
            $this->doseNumberPositiveInt = null;
            return $this;
        }
        if ($doseNumberPositiveInt instanceof FHIRPositiveInt) {
            $this->doseNumberPositiveInt = $doseNumberPositiveInt;
            return $this;
        }
        $this->doseNumberPositiveInt = new FHIRPositiveInt($doseNumberPositiveInt);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Nominal position in a series. (choose any one of doseNumber*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDoseNumberString()
    {
        return $this->doseNumberString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Nominal position in a series. (choose any one of doseNumber*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $doseNumberString
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied
     */
    public function setDoseNumberString($doseNumberString = null)
    {
        if (null === $doseNumberString) {
            $this->doseNumberString = null;
            return $this;
        }
        if ($doseNumberString instanceof FHIRString) {
            $this->doseNumberString = $doseNumberString;
            return $this;
        }
        $this->doseNumberString = new FHIRString($doseNumberString);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $series
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied
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
     * The recommended number of doses to achieve immunity. (choose any one of
     * seriesDoses*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSeriesDosesPositiveInt()
    {
        return $this->seriesDosesPositiveInt;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * The recommended number of doses to achieve immunity. (choose any one of
     * seriesDoses*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $seriesDosesPositiveInt
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied
     */
    public function setSeriesDosesPositiveInt($seriesDosesPositiveInt = null)
    {
        if (null === $seriesDosesPositiveInt) {
            $this->seriesDosesPositiveInt = null;
            return $this;
        }
        if ($seriesDosesPositiveInt instanceof FHIRPositiveInt) {
            $this->seriesDosesPositiveInt = $seriesDosesPositiveInt;
            return $this;
        }
        $this->seriesDosesPositiveInt = new FHIRPositiveInt($seriesDosesPositiveInt);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The recommended number of doses to achieve immunity. (choose any one of
     * seriesDoses*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSeriesDosesString()
    {
        return $this->seriesDosesString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The recommended number of doses to achieve immunity. (choose any one of
     * seriesDoses*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $seriesDosesString
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied
     */
    public function setSeriesDosesString($seriesDosesString = null)
    {
        if (null === $seriesDosesString) {
            $this->seriesDosesString = null;
            return $this;
        }
        if ($seriesDosesString instanceof FHIRString) {
            $this->seriesDosesString = $seriesDosesString;
            return $this;
        }
        $this->seriesDosesString = new FHIRString($seriesDosesString);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The vaccine preventable disease the dose is being administered against.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
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
     * The vaccine preventable disease the dose is being administered against.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $targetDisease
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied
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
     * The vaccine preventable disease the dose is being administered against.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $targetDisease
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied
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
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied
     */
    public static function xmlUnserialize($sxe = null, $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRImmunizationProtocolApplied::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRImmunizationProtocolApplied::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRImmunizationProtocolApplied);
        } elseif (!is_object($type) || !($type instanceof FHIRImmunizationProtocolApplied)) {
            throw new \RuntimeException(sprintf(
                'FHIRImmunizationProtocolApplied::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->authority)) {
            $type->setAuthority(FHIRReference::xmlUnserialize($children->authority));
        }
        if (isset($attributes->doseNumberPositiveInt)) {
            $type->setDoseNumberPositiveInt((string)$attributes->doseNumberPositiveInt);
        }
        if (isset($children->doseNumberPositiveInt)) {
            $type->setDoseNumberPositiveInt(FHIRPositiveInt::xmlUnserialize($children->doseNumberPositiveInt));
        }
        if (isset($attributes->doseNumberString)) {
            $type->setDoseNumberString((string)$attributes->doseNumberString);
        }
        if (isset($children->doseNumberString)) {
            $type->setDoseNumberString(FHIRString::xmlUnserialize($children->doseNumberString));
        }
        if (isset($attributes->series)) {
            $type->setSeries((string)$attributes->series);
        }
        if (isset($children->series)) {
            $type->setSeries(FHIRString::xmlUnserialize($children->series));
        }
        if (isset($attributes->seriesDosesPositiveInt)) {
            $type->setSeriesDosesPositiveInt((string)$attributes->seriesDosesPositiveInt);
        }
        if (isset($children->seriesDosesPositiveInt)) {
            $type->setSeriesDosesPositiveInt(FHIRPositiveInt::xmlUnserialize($children->seriesDosesPositiveInt));
        }
        if (isset($attributes->seriesDosesString)) {
            $type->setSeriesDosesString((string)$attributes->seriesDosesString);
        }
        if (isset($children->seriesDosesString)) {
            $type->setSeriesDosesString(FHIRString::xmlUnserialize($children->seriesDosesString));
        }
        if (isset($children->targetDisease)) {
            foreach($children->targetDisease as $child) {
                $type->addTargetDisease(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ImmunizationProtocolApplied xmlns="http://hl7.org/fhir"></ImmunizationProtocolApplied>');
        }
        if (null !== ($v = $this->getAuthority())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHORITY));
        }
        if (null !== ($v = $this->getDoseNumberPositiveInt())) {
            $sxe->addAttribute(self::FIELD_DOSE_NUMBER_POSITIVE_INT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOSE_NUMBER_POSITIVE_INT));
            }
        }
        if (null !== ($v = $this->getDoseNumberString())) {
            $sxe->addAttribute(self::FIELD_DOSE_NUMBER_STRING, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOSE_NUMBER_STRING));
            }
        }
        if (null !== ($v = $this->getSeries())) {
            $sxe->addAttribute(self::FIELD_SERIES, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SERIES));
            }
        }
        if (null !== ($v = $this->getSeriesDosesPositiveInt())) {
            $sxe->addAttribute(self::FIELD_SERIES_DOSES_POSITIVE_INT, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SERIES_DOSES_POSITIVE_INT));
            }
        }
        if (null !== ($v = $this->getSeriesDosesString())) {
            $sxe->addAttribute(self::FIELD_SERIES_DOSES_STRING, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SERIES_DOSES_STRING));
            }
        }
        if ([] !== ($vs = $this->getTargetDisease())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET_DISEASE));
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
        if (null !== ($v = $this->getDoseNumberPositiveInt())) {
            $a[self::FIELD_DOSE_NUMBER_POSITIVE_INT] = (string)$v;
            $a[self::FIELD_DOSE_NUMBER_POSITIVE_INT_EXT] = $v;
        }
        if (null !== ($v = $this->getDoseNumberString())) {
            $a[self::FIELD_DOSE_NUMBER_STRING] = (string)$v;
            $a[self::FIELD_DOSE_NUMBER_STRING_EXT] = $v;
        }
        if (null !== ($v = $this->getSeries())) {
            $a[self::FIELD_SERIES] = (string)$v;
            $a[self::FIELD_SERIES_EXT] = $v;
        }
        if (null !== ($v = $this->getSeriesDosesPositiveInt())) {
            $a[self::FIELD_SERIES_DOSES_POSITIVE_INT] = (string)$v;
            $a[self::FIELD_SERIES_DOSES_POSITIVE_INT_EXT] = $v;
        }
        if (null !== ($v = $this->getSeriesDosesString())) {
            $a[self::FIELD_SERIES_DOSES_STRING] = (string)$v;
            $a[self::FIELD_SERIES_DOSES_STRING_EXT] = $v;
        }
        if ([] !== ($vs = $this->getTargetDisease())) {
            $a[self::FIELD_TARGET_DISEASE] = $vs;
        }
        return [FHIR_JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}