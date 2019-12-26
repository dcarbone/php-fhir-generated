<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;

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
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage\FHIRDosageDoseAndRate;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Indicates how the medication is/was taken or should be taken by the patient.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 *
 * Class FHIRDosage
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement
 */
class FHIRDosage extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DOSAGE;
    const FIELD_ADDITIONAL_INSTRUCTION = 'additionalInstruction';
    const FIELD_AS_NEEDED_BOOLEAN = 'asNeededBoolean';
    const FIELD_AS_NEEDED_BOOLEAN_EXT = '_asNeededBoolean';
    const FIELD_AS_NEEDED_CODEABLE_CONCEPT = 'asNeededCodeableConcept';
    const FIELD_DOSE_AND_RATE = 'doseAndRate';
    const FIELD_MAX_DOSE_PER_ADMINISTRATION = 'maxDosePerAdministration';
    const FIELD_MAX_DOSE_PER_LIFETIME = 'maxDosePerLifetime';
    const FIELD_MAX_DOSE_PER_PERIOD = 'maxDosePerPeriod';
    const FIELD_METHOD = 'method';
    const FIELD_PATIENT_INSTRUCTION = 'patientInstruction';
    const FIELD_PATIENT_INSTRUCTION_EXT = '_patientInstruction';
    const FIELD_ROUTE = 'route';
    const FIELD_SEQUENCE = 'sequence';
    const FIELD_SEQUENCE_EXT = '_sequence';
    const FIELD_SITE = 'site';
    const FIELD_TEXT = 'text';
    const FIELD_TEXT_EXT = '_text';
    const FIELD_TIMING = 'timing';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supplemental instructions to the patient on how to take the medication (e.g.
     * "with meals" or"take half to one hour before food") or warnings for the patient
     * about the medication (e.g. "may cause drowsiness" or "avoid exposure of skin to
     * direct sunlight or sunlamps").
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $additionalInstruction = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the Medication is only taken when needed within a specific
     * dosing schedule (Boolean option), or it indicates the precondition for taking
     * the Medication (CodeableConcept). (choose any one of asNeeded*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $asNeededBoolean = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whether the Medication is only taken when needed within a specific
     * dosing schedule (Boolean option), or it indicates the precondition for taking
     * the Medication (CodeableConcept). (choose any one of asNeeded*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $asNeededCodeableConcept = null;

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of medication administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage\FHIRDosageDoseAndRate[]
     */
    protected $doseAndRate = [];

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per administration.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $maxDosePerAdministration = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per lifetime of the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $maxDosePerLifetime = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per unit of time.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    protected $maxDosePerPeriod = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Technique for administering medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $method = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $patientInstruction = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How drug should enter body.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $route = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the order in which the dosage instructions should be applied or
     * interpreted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $sequence = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Body site to administer to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $site = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text dosage instructions e.g. SIG.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $text = null;

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When medication should be administered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    protected $timing = null;

    /**
     * Validation map for fields in type Dosage
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRDosage Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDosage::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ADDITIONAL_INSTRUCTION])) {
            if (is_array($data[self::FIELD_ADDITIONAL_INSTRUCTION])) {
                foreach($data[self::FIELD_ADDITIONAL_INSTRUCTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addAdditionalInstruction($v);
                    } else {
                        $this->addAdditionalInstruction(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_ADDITIONAL_INSTRUCTION] instanceof FHIRCodeableConcept) {
                $this->addAdditionalInstruction($data[self::FIELD_ADDITIONAL_INSTRUCTION]);
            } else {
                $this->addAdditionalInstruction(new FHIRCodeableConcept($data[self::FIELD_ADDITIONAL_INSTRUCTION]));
            }
        }
        if (isset($data[self::FIELD_AS_NEEDED_BOOLEAN]) || isset($data[self::FIELD_AS_NEEDED_BOOLEAN_EXT])) {
            if (isset($data[self::FIELD_AS_NEEDED_BOOLEAN])) {
                $value = $data[self::FIELD_AS_NEEDED_BOOLEAN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_AS_NEEDED_BOOLEAN_EXT]) && is_array($data[self::FIELD_AS_NEEDED_BOOLEAN_EXT])) {
                $ext = $data[self::FIELD_AS_NEEDED_BOOLEAN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setAsNeededBoolean($value);
                } else if (is_array($value)) {
                    $this->setAsNeededBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setAsNeededBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAsNeededBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setAsNeededCodeableConcept($data[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT]);
            } else {
                $this->setAsNeededCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_DOSE_AND_RATE])) {
            if (is_array($data[self::FIELD_DOSE_AND_RATE])) {
                foreach($data[self::FIELD_DOSE_AND_RATE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDosageDoseAndRate) {
                        $this->addDoseAndRate($v);
                    } else {
                        $this->addDoseAndRate(new FHIRDosageDoseAndRate($v));
                    }
                }
            } else if ($data[self::FIELD_DOSE_AND_RATE] instanceof FHIRDosageDoseAndRate) {
                $this->addDoseAndRate($data[self::FIELD_DOSE_AND_RATE]);
            } else {
                $this->addDoseAndRate(new FHIRDosageDoseAndRate($data[self::FIELD_DOSE_AND_RATE]));
            }
        }
        if (isset($data[self::FIELD_MAX_DOSE_PER_ADMINISTRATION])) {
            if ($data[self::FIELD_MAX_DOSE_PER_ADMINISTRATION] instanceof FHIRQuantity) {
                $this->setMaxDosePerAdministration($data[self::FIELD_MAX_DOSE_PER_ADMINISTRATION]);
            } else {
                $this->setMaxDosePerAdministration(new FHIRQuantity($data[self::FIELD_MAX_DOSE_PER_ADMINISTRATION]));
            }
        }
        if (isset($data[self::FIELD_MAX_DOSE_PER_LIFETIME])) {
            if ($data[self::FIELD_MAX_DOSE_PER_LIFETIME] instanceof FHIRQuantity) {
                $this->setMaxDosePerLifetime($data[self::FIELD_MAX_DOSE_PER_LIFETIME]);
            } else {
                $this->setMaxDosePerLifetime(new FHIRQuantity($data[self::FIELD_MAX_DOSE_PER_LIFETIME]));
            }
        }
        if (isset($data[self::FIELD_MAX_DOSE_PER_PERIOD])) {
            if ($data[self::FIELD_MAX_DOSE_PER_PERIOD] instanceof FHIRRatio) {
                $this->setMaxDosePerPeriod($data[self::FIELD_MAX_DOSE_PER_PERIOD]);
            } else {
                $this->setMaxDosePerPeriod(new FHIRRatio($data[self::FIELD_MAX_DOSE_PER_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_METHOD])) {
            if ($data[self::FIELD_METHOD] instanceof FHIRCodeableConcept) {
                $this->setMethod($data[self::FIELD_METHOD]);
            } else {
                $this->setMethod(new FHIRCodeableConcept($data[self::FIELD_METHOD]));
            }
        }
        if (isset($data[self::FIELD_PATIENT_INSTRUCTION]) || isset($data[self::FIELD_PATIENT_INSTRUCTION_EXT])) {
            if (isset($data[self::FIELD_PATIENT_INSTRUCTION])) {
                $value = $data[self::FIELD_PATIENT_INSTRUCTION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PATIENT_INSTRUCTION_EXT]) && is_array($data[self::FIELD_PATIENT_INSTRUCTION_EXT])) {
                $ext = $data[self::FIELD_PATIENT_INSTRUCTION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPatientInstruction($value);
                } else if (is_array($value)) {
                    $this->setPatientInstruction(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPatientInstruction(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPatientInstruction(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ROUTE])) {
            if ($data[self::FIELD_ROUTE] instanceof FHIRCodeableConcept) {
                $this->setRoute($data[self::FIELD_ROUTE]);
            } else {
                $this->setRoute(new FHIRCodeableConcept($data[self::FIELD_ROUTE]));
            }
        }
        if (isset($data[self::FIELD_SEQUENCE]) || isset($data[self::FIELD_SEQUENCE_EXT])) {
            if (isset($data[self::FIELD_SEQUENCE])) {
                $value = $data[self::FIELD_SEQUENCE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SEQUENCE_EXT]) && is_array($data[self::FIELD_SEQUENCE_EXT])) {
                $ext = $data[self::FIELD_SEQUENCE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setSequence($value);
                } else if (is_array($value)) {
                    $this->setSequence(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setSequence(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSequence(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_SITE])) {
            if ($data[self::FIELD_SITE] instanceof FHIRCodeableConcept) {
                $this->setSite($data[self::FIELD_SITE]);
            } else {
                $this->setSite(new FHIRCodeableConcept($data[self::FIELD_SITE]));
            }
        }
        if (isset($data[self::FIELD_TEXT]) || isset($data[self::FIELD_TEXT_EXT])) {
            if (isset($data[self::FIELD_TEXT])) {
                $value = $data[self::FIELD_TEXT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT])) {
                $ext = $data[self::FIELD_TEXT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setText($value);
                } else if (is_array($value)) {
                    $this->setText(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setText(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_TIMING])) {
            if ($data[self::FIELD_TIMING] instanceof FHIRTiming) {
                $this->setTiming($data[self::FIELD_TIMING]);
            } else {
                $this->setTiming(new FHIRTiming($data[self::FIELD_TIMING]));
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
        return "<Dosage{$xmlns}></Dosage>";
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supplemental instructions to the patient on how to take the medication (e.g.
     * "with meals" or"take half to one hour before food") or warnings for the patient
     * about the medication (e.g. "may cause drowsiness" or "avoid exposure of skin to
     * direct sunlight or sunlamps").
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAdditionalInstruction()
    {
        return $this->additionalInstruction;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supplemental instructions to the patient on how to take the medication (e.g.
     * "with meals" or"take half to one hour before food") or warnings for the patient
     * about the medication (e.g. "may cause drowsiness" or "avoid exposure of skin to
     * direct sunlight or sunlamps").
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $additionalInstruction
     * @return static
     */
    public function addAdditionalInstruction(FHIRCodeableConcept $additionalInstruction = null)
    {
        $this->additionalInstruction[] = $additionalInstruction;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Supplemental instructions to the patient on how to take the medication (e.g.
     * "with meals" or"take half to one hour before food") or warnings for the patient
     * about the medication (e.g. "may cause drowsiness" or "avoid exposure of skin to
     * direct sunlight or sunlamps").
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $additionalInstruction
     * @return static
     */
    public function setAdditionalInstruction(array $additionalInstruction = [])
    {
        $this->additionalInstruction = [];
        if ([] === $additionalInstruction) {
            return $this;
        }
        foreach($additionalInstruction as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addAdditionalInstruction($v);
            } else {
                $this->addAdditionalInstruction(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the Medication is only taken when needed within a specific
     * dosing schedule (Boolean option), or it indicates the precondition for taking
     * the Medication (CodeableConcept). (choose any one of asNeeded*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getAsNeededBoolean()
    {
        return $this->asNeededBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the Medication is only taken when needed within a specific
     * dosing schedule (Boolean option), or it indicates the precondition for taking
     * the Medication (CodeableConcept). (choose any one of asNeeded*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $asNeededBoolean
     * @return static
     */
    public function setAsNeededBoolean($asNeededBoolean = null)
    {
        if (null === $asNeededBoolean) {
            $this->asNeededBoolean = null;
            return $this;
        }
        if ($asNeededBoolean instanceof FHIRBoolean) {
            $this->asNeededBoolean = $asNeededBoolean;
            return $this;
        }
        $this->asNeededBoolean = new FHIRBoolean($asNeededBoolean);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whether the Medication is only taken when needed within a specific
     * dosing schedule (Boolean option), or it indicates the precondition for taking
     * the Medication (CodeableConcept). (choose any one of asNeeded*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getAsNeededCodeableConcept()
    {
        return $this->asNeededCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whether the Medication is only taken when needed within a specific
     * dosing schedule (Boolean option), or it indicates the precondition for taking
     * the Medication (CodeableConcept). (choose any one of asNeeded*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $asNeededCodeableConcept
     * @return static
     */
    public function setAsNeededCodeableConcept(FHIRCodeableConcept $asNeededCodeableConcept = null)
    {
        $this->asNeededCodeableConcept = $asNeededCodeableConcept;
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of medication administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage\FHIRDosageDoseAndRate[]
     */
    public function getDoseAndRate()
    {
        return $this->doseAndRate;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of medication administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage\FHIRDosageDoseAndRate $doseAndRate
     * @return static
     */
    public function addDoseAndRate(FHIRDosageDoseAndRate $doseAndRate = null)
    {
        $this->doseAndRate[] = $doseAndRate;
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of medication administered.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage\FHIRDosageDoseAndRate[] $doseAndRate
     * @return static
     */
    public function setDoseAndRate(array $doseAndRate = [])
    {
        $this->doseAndRate = [];
        if ([] === $doseAndRate) {
            return $this;
        }
        foreach($doseAndRate as $v) {
            if ($v instanceof FHIRDosageDoseAndRate) {
                $this->addDoseAndRate($v);
            } else {
                $this->addDoseAndRate(new FHIRDosageDoseAndRate($v));
            }
        }
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per administration.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getMaxDosePerAdministration()
    {
        return $this->maxDosePerAdministration;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per administration.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $maxDosePerAdministration
     * @return static
     */
    public function setMaxDosePerAdministration(FHIRQuantity $maxDosePerAdministration = null)
    {
        $this->maxDosePerAdministration = $maxDosePerAdministration;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per lifetime of the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getMaxDosePerLifetime()
    {
        return $this->maxDosePerLifetime;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per lifetime of the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $maxDosePerLifetime
     * @return static
     */
    public function setMaxDosePerLifetime(FHIRQuantity $maxDosePerLifetime = null)
    {
        $this->maxDosePerLifetime = $maxDosePerLifetime;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per unit of time.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio
     */
    public function getMaxDosePerPeriod()
    {
        return $this->maxDosePerPeriod;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per unit of time.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRatio $maxDosePerPeriod
     * @return static
     */
    public function setMaxDosePerPeriod(FHIRRatio $maxDosePerPeriod = null)
    {
        $this->maxDosePerPeriod = $maxDosePerPeriod;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Technique for administering medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Technique for administering medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $method
     * @return static
     */
    public function setMethod(FHIRCodeableConcept $method = null)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getPatientInstruction()
    {
        return $this->patientInstruction;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $patientInstruction
     * @return static
     */
    public function setPatientInstruction($patientInstruction = null)
    {
        if (null === $patientInstruction) {
            $this->patientInstruction = null;
            return $this;
        }
        if ($patientInstruction instanceof FHIRString) {
            $this->patientInstruction = $patientInstruction;
            return $this;
        }
        $this->patientInstruction = new FHIRString($patientInstruction);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How drug should enter body.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How drug should enter body.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $route
     * @return static
     */
    public function setRoute(FHIRCodeableConcept $route = null)
    {
        $this->route = $route;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the order in which the dosage instructions should be applied or
     * interpreted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the order in which the dosage instructions should be applied or
     * interpreted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $sequence
     * @return static
     */
    public function setSequence($sequence = null)
    {
        if (null === $sequence) {
            $this->sequence = null;
            return $this;
        }
        if ($sequence instanceof FHIRInteger) {
            $this->sequence = $sequence;
            return $this;
        }
        $this->sequence = new FHIRInteger($sequence);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Body site to administer to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Body site to administer to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $site
     * @return static
     */
    public function setSite(FHIRCodeableConcept $site = null)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text dosage instructions e.g. SIG.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text dosage instructions e.g. SIG.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $text
     * @return static
     */
    public function setText($text = null)
    {
        if (null === $text) {
            $this->text = null;
            return $this;
        }
        if ($text instanceof FHIRString) {
            $this->text = $text;
            return $this;
        }
        $this->text = new FHIRString($text);
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When medication should be administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getTiming()
    {
        return $this->timing;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * When medication should be administered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTiming $timing
     * @return static
     */
    public function setTiming(FHIRTiming $timing = null)
    {
        $this->timing = $timing;
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
        if ([] !== ($vs = $this->getAdditionalInstruction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADDITIONAL_INSTRUCTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAsNeededBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AS_NEEDED_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAsNeededCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDoseAndRate())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DOSE_AND_RATE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getMaxDosePerAdministration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_DOSE_PER_ADMINISTRATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxDosePerLifetime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_DOSE_PER_LIFETIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxDosePerPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_DOSE_PER_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMethod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_METHOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatientInstruction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT_INSTRUCTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRoute())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ROUTE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSequence())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SEQUENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSite())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SITE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getText())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTiming())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIMING] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ADDITIONAL_INSTRUCTION])) {
            $v = $this->getAdditionalInstruction();
            foreach($validationRules[self::FIELD_ADDITIONAL_INSTRUCTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_ADDITIONAL_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDITIONAL_INSTRUCTION])) {
                        $errs[self::FIELD_ADDITIONAL_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_ADDITIONAL_INSTRUCTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AS_NEEDED_BOOLEAN])) {
            $v = $this->getAsNeededBoolean();
            foreach($validationRules[self::FIELD_AS_NEEDED_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_AS_NEEDED_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AS_NEEDED_BOOLEAN])) {
                        $errs[self::FIELD_AS_NEEDED_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_AS_NEEDED_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT])) {
            $v = $this->getAsNeededCodeableConcept();
            foreach($validationRules[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_AS_NEEDED_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_AND_RATE])) {
            $v = $this->getDoseAndRate();
            foreach($validationRules[self::FIELD_DOSE_AND_RATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_DOSE_AND_RATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_AND_RATE])) {
                        $errs[self::FIELD_DOSE_AND_RATE] = [];
                    }
                    $errs[self::FIELD_DOSE_AND_RATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_DOSE_PER_ADMINISTRATION])) {
            $v = $this->getMaxDosePerAdministration();
            foreach($validationRules[self::FIELD_MAX_DOSE_PER_ADMINISTRATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_MAX_DOSE_PER_ADMINISTRATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_DOSE_PER_ADMINISTRATION])) {
                        $errs[self::FIELD_MAX_DOSE_PER_ADMINISTRATION] = [];
                    }
                    $errs[self::FIELD_MAX_DOSE_PER_ADMINISTRATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_DOSE_PER_LIFETIME])) {
            $v = $this->getMaxDosePerLifetime();
            foreach($validationRules[self::FIELD_MAX_DOSE_PER_LIFETIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_MAX_DOSE_PER_LIFETIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_DOSE_PER_LIFETIME])) {
                        $errs[self::FIELD_MAX_DOSE_PER_LIFETIME] = [];
                    }
                    $errs[self::FIELD_MAX_DOSE_PER_LIFETIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_DOSE_PER_PERIOD])) {
            $v = $this->getMaxDosePerPeriod();
            foreach($validationRules[self::FIELD_MAX_DOSE_PER_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_MAX_DOSE_PER_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_DOSE_PER_PERIOD])) {
                        $errs[self::FIELD_MAX_DOSE_PER_PERIOD] = [];
                    }
                    $errs[self::FIELD_MAX_DOSE_PER_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_METHOD])) {
            $v = $this->getMethod();
            foreach($validationRules[self::FIELD_METHOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_METHOD])) {
                        $errs[self::FIELD_METHOD] = [];
                    }
                    $errs[self::FIELD_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT_INSTRUCTION])) {
            $v = $this->getPatientInstruction();
            foreach($validationRules[self::FIELD_PATIENT_INSTRUCTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_PATIENT_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT_INSTRUCTION])) {
                        $errs[self::FIELD_PATIENT_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_PATIENT_INSTRUCTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROUTE])) {
            $v = $this->getRoute();
            foreach($validationRules[self::FIELD_ROUTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_ROUTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROUTE])) {
                        $errs[self::FIELD_ROUTE] = [];
                    }
                    $errs[self::FIELD_ROUTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE])) {
                        $errs[self::FIELD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SITE])) {
            $v = $this->getSite();
            foreach($validationRules[self::FIELD_SITE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SITE])) {
                        $errs[self::FIELD_SITE] = [];
                    }
                    $errs[self::FIELD_SITE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING])) {
            $v = $this->getTiming();
            foreach($validationRules[self::FIELD_TIMING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOSAGE, self::FIELD_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING])) {
                        $errs[self::FIELD_TIMING] = [];
                    }
                    $errs[self::FIELD_TIMING][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage
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
                throw new \DomainException(sprintf('FHIRDosage::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRDosage::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRDosage;
        } elseif (!is_object($type) || !($type instanceof FHIRDosage)) {
            throw new \RuntimeException(sprintf(
                'FHIRDosage::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage or null, %s seen.',
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
        if (isset($children->additionalInstruction)) {
            foreach($children->additionalInstruction as $child) {
                $type->addAdditionalInstruction(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->asNeededBoolean)) {
            $type->setAsNeededBoolean(FHIRBoolean::xmlUnserialize($children->asNeededBoolean));
        }
        if (isset($attributes->asNeededBoolean)) {
            $pt = $type->getAsNeededBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->asNeededBoolean);
            } else {
                $type->setAsNeededBoolean((string)$attributes->asNeededBoolean);
            }
        }
        if (isset($children->asNeededCodeableConcept)) {
            $type->setAsNeededCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->asNeededCodeableConcept));
        }
        if (isset($children->doseAndRate)) {
            foreach($children->doseAndRate as $child) {
                $type->addDoseAndRate(FHIRDosageDoseAndRate::xmlUnserialize($child));
            }
        }
        if (isset($children->maxDosePerAdministration)) {
            $type->setMaxDosePerAdministration(FHIRQuantity::xmlUnserialize($children->maxDosePerAdministration));
        }
        if (isset($children->maxDosePerLifetime)) {
            $type->setMaxDosePerLifetime(FHIRQuantity::xmlUnserialize($children->maxDosePerLifetime));
        }
        if (isset($children->maxDosePerPeriod)) {
            $type->setMaxDosePerPeriod(FHIRRatio::xmlUnserialize($children->maxDosePerPeriod));
        }
        if (isset($children->method)) {
            $type->setMethod(FHIRCodeableConcept::xmlUnserialize($children->method));
        }
        if (isset($children->patientInstruction)) {
            $type->setPatientInstruction(FHIRString::xmlUnserialize($children->patientInstruction));
        }
        if (isset($attributes->patientInstruction)) {
            $pt = $type->getPatientInstruction();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->patientInstruction);
            } else {
                $type->setPatientInstruction((string)$attributes->patientInstruction);
            }
        }
        if (isset($children->route)) {
            $type->setRoute(FHIRCodeableConcept::xmlUnserialize($children->route));
        }
        if (isset($children->sequence)) {
            $type->setSequence(FHIRInteger::xmlUnserialize($children->sequence));
        }
        if (isset($attributes->sequence)) {
            $pt = $type->getSequence();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->sequence);
            } else {
                $type->setSequence((string)$attributes->sequence);
            }
        }
        if (isset($children->site)) {
            $type->setSite(FHIRCodeableConcept::xmlUnserialize($children->site));
        }
        if (isset($children->text)) {
            $type->setText(FHIRString::xmlUnserialize($children->text));
        }
        if (isset($attributes->text)) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->text);
            } else {
                $type->setText((string)$attributes->text);
            }
        }
        if (isset($children->timing)) {
            $type->setTiming(FHIRTiming::xmlUnserialize($children->timing));
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
        if ([] !== ($vs = $this->getAdditionalInstruction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ADDITIONAL_INSTRUCTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getAsNeededBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AS_NEEDED_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAsNeededCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AS_NEEDED_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getDoseAndRate())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOSE_AND_RATE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getMaxDosePerAdministration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_DOSE_PER_ADMINISTRATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaxDosePerLifetime())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_DOSE_PER_LIFETIME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaxDosePerPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_DOSE_PER_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMethod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_METHOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPatientInstruction())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT_INSTRUCTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRoute())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ROUTE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSequence())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SEQUENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSite())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SITE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getText())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TEXT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTiming())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TIMING, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getAdditionalInstruction())) {
            $a[self::FIELD_ADDITIONAL_INSTRUCTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ADDITIONAL_INSTRUCTION][] = $v;
            }
        }
        if (null !== ($v = $this->getAsNeededBoolean())) {
            $a[self::FIELD_AS_NEEDED_BOOLEAN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_AS_NEEDED_BOOLEAN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAsNeededCodeableConcept())) {
            $a[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] = $v;
        }
        if ([] !== ($vs = $this->getDoseAndRate())) {
            $a[self::FIELD_DOSE_AND_RATE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DOSE_AND_RATE][] = $v;
            }
        }
        if (null !== ($v = $this->getMaxDosePerAdministration())) {
            $a[self::FIELD_MAX_DOSE_PER_ADMINISTRATION] = $v;
        }
        if (null !== ($v = $this->getMaxDosePerLifetime())) {
            $a[self::FIELD_MAX_DOSE_PER_LIFETIME] = $v;
        }
        if (null !== ($v = $this->getMaxDosePerPeriod())) {
            $a[self::FIELD_MAX_DOSE_PER_PERIOD] = $v;
        }
        if (null !== ($v = $this->getMethod())) {
            $a[self::FIELD_METHOD] = $v;
        }
        if (null !== ($v = $this->getPatientInstruction())) {
            $a[self::FIELD_PATIENT_INSTRUCTION] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PATIENT_INSTRUCTION_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getRoute())) {
            $a[self::FIELD_ROUTE] = $v;
        }
        if (null !== ($v = $this->getSequence())) {
            $a[self::FIELD_SEQUENCE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_SEQUENCE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSite())) {
            $a[self::FIELD_SITE] = $v;
        }
        if (null !== ($v = $this->getText())) {
            $a[self::FIELD_TEXT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_TEXT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getTiming())) {
            $a[self::FIELD_TIMING] = $v;
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