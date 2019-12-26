<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder;

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
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * An order for both supply of the medication and the instructions for
 * administration of the medication to a patient. The resource is called
 * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
 * across inpatient and outpatient settings as well as for care plans, etc.
 *
 * Class FHIRMedicationOrderDosageInstruction
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder
 */
class FHIRMedicationOrderDosageInstruction extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DOSAGE_INSTRUCTION;
    const FIELD_ADDITIONAL_INSTRUCTIONS = 'additionalInstructions';
    const FIELD_AS_NEEDED_BOOLEAN = 'asNeededBoolean';
    const FIELD_AS_NEEDED_BOOLEAN_EXT = '_asNeededBoolean';
    const FIELD_AS_NEEDED_CODEABLE_CONCEPT = 'asNeededCodeableConcept';
    const FIELD_DOSE_QUANTITY = 'doseQuantity';
    const FIELD_DOSE_RANGE = 'doseRange';
    const FIELD_MAX_DOSE_PER_PERIOD = 'maxDosePerPeriod';
    const FIELD_METHOD = 'method';
    const FIELD_RATE_RANGE = 'rateRange';
    const FIELD_RATE_RATIO = 'rateRatio';
    const FIELD_ROUTE = 'route';
    const FIELD_SITE_CODEABLE_CONCEPT = 'siteCodeableConcept';
    const FIELD_SITE_REFERENCE = 'siteReference';
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
     * Additional instructions such as "Swallow with plenty of water" which may or may
     * not be coded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $additionalInstructions = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the Medication is only taken when needed within a specific
     * dosing schedule (Boolean option), or it indicates the precondition for taking
     * the Medication (CodeableConcept).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
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
     * the Medication (CodeableConcept).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $asNeededCodeableConcept = null;

    /**
     * The amount of therapeutic or other substance given at one administration event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    protected $doseQuantity = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of therapeutic or other substance given at one administration event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange
     */
    protected $doseRange = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum total quantity of a therapeutic substance that may be administered
     * to a subject over the period of time. For example, 1000mg in 24 hours.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRatio
     */
    protected $maxDosePerPeriod = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded value indicating the method by which the medication is introduced into
     * or onto the body. Most commonly used for injections. For examples, Slow Push;
     * Deep IV.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $method = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the speed with which the medication was or will be introduced into
     * the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100
     * ml/hr. May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.
     * Currently we do not specify a default of '1' in the denominator, but this is
     * being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8
     * hours.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange
     */
    protected $rateRange = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the speed with which the medication was or will be introduced into
     * the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100
     * ml/hr. May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.
     * Currently we do not specify a default of '1' in the denominator, but this is
     * being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8
     * hours.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRatio
     */
    protected $rateRatio = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the route or physiological path of administration of a
     * therapeutic agent into or onto a patient's body.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $route = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded specification of the anatomic site where the medication first enters the
     * body.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    protected $siteCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded specification of the anatomic site where the medication first enters the
     * body.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $siteReference = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text dosage instructions can be used for cases where the instructions are
     * too complex to code. The content of this attribute does not include the name or
     * description of the medication. When coded instructions are present, the free
     * text instructions may still be present for display to humans taking or
     * administering the medication. It is expected that the text instructions will
     * always be populated. If the dosage.timing attribute is also populated, then the
     * dosage.text should reflect the same information as the timing.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $text = null;

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for giving the medication to the patient. The Schedule data
     * type allows many different expressions. For example: "Every 8 hours"; "Three
     * times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15
     * Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming
     */
    protected $timing = null;

    /**
     * Validation map for fields in type MedicationOrder.DosageInstruction
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMedicationOrderDosageInstruction Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationOrderDosageInstruction::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ADDITIONAL_INSTRUCTIONS])) {
            if ($data[self::FIELD_ADDITIONAL_INSTRUCTIONS] instanceof FHIRCodeableConcept) {
                $this->setAdditionalInstructions($data[self::FIELD_ADDITIONAL_INSTRUCTIONS]);
            } else {
                $this->setAdditionalInstructions(new FHIRCodeableConcept($data[self::FIELD_ADDITIONAL_INSTRUCTIONS]));
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
        if (isset($data[self::FIELD_DOSE_QUANTITY])) {
            if ($data[self::FIELD_DOSE_QUANTITY] instanceof FHIRSimpleQuantity) {
                $this->setDoseQuantity($data[self::FIELD_DOSE_QUANTITY]);
            } else {
                $this->setDoseQuantity(new FHIRSimpleQuantity($data[self::FIELD_DOSE_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_DOSE_RANGE])) {
            if ($data[self::FIELD_DOSE_RANGE] instanceof FHIRRange) {
                $this->setDoseRange($data[self::FIELD_DOSE_RANGE]);
            } else {
                $this->setDoseRange(new FHIRRange($data[self::FIELD_DOSE_RANGE]));
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
        if (isset($data[self::FIELD_RATE_RANGE])) {
            if ($data[self::FIELD_RATE_RANGE] instanceof FHIRRange) {
                $this->setRateRange($data[self::FIELD_RATE_RANGE]);
            } else {
                $this->setRateRange(new FHIRRange($data[self::FIELD_RATE_RANGE]));
            }
        }
        if (isset($data[self::FIELD_RATE_RATIO])) {
            if ($data[self::FIELD_RATE_RATIO] instanceof FHIRRatio) {
                $this->setRateRatio($data[self::FIELD_RATE_RATIO]);
            } else {
                $this->setRateRatio(new FHIRRatio($data[self::FIELD_RATE_RATIO]));
            }
        }
        if (isset($data[self::FIELD_ROUTE])) {
            if ($data[self::FIELD_ROUTE] instanceof FHIRCodeableConcept) {
                $this->setRoute($data[self::FIELD_ROUTE]);
            } else {
                $this->setRoute(new FHIRCodeableConcept($data[self::FIELD_ROUTE]));
            }
        }
        if (isset($data[self::FIELD_SITE_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_SITE_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setSiteCodeableConcept($data[self::FIELD_SITE_CODEABLE_CONCEPT]);
            } else {
                $this->setSiteCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_SITE_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_SITE_REFERENCE])) {
            if ($data[self::FIELD_SITE_REFERENCE] instanceof FHIRReference) {
                $this->setSiteReference($data[self::FIELD_SITE_REFERENCE]);
            } else {
                $this->setSiteReference(new FHIRReference($data[self::FIELD_SITE_REFERENCE]));
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
        return "<MedicationOrderDosageInstruction{$xmlns}></MedicationOrderDosageInstruction>";
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional instructions such as "Swallow with plenty of water" which may or may
     * not be coded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getAdditionalInstructions()
    {
        return $this->additionalInstructions;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional instructions such as "Swallow with plenty of water" which may or may
     * not be coded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $additionalInstructions
     * @return static
     */
    public function setAdditionalInstructions(FHIRCodeableConcept $additionalInstructions = null)
    {
        $this->additionalInstructions = $additionalInstructions;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the Medication is only taken when needed within a specific
     * dosing schedule (Boolean option), or it indicates the precondition for taking
     * the Medication (CodeableConcept).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
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
     * the Medication (CodeableConcept).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $asNeededBoolean
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
     * the Medication (CodeableConcept).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
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
     * the Medication (CodeableConcept).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $asNeededCodeableConcept
     * @return static
     */
    public function setAsNeededCodeableConcept(FHIRCodeableConcept $asNeededCodeableConcept = null)
    {
        $this->asNeededCodeableConcept = $asNeededCodeableConcept;
        return $this;
    }

    /**
     * The amount of therapeutic or other substance given at one administration event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getDoseQuantity()
    {
        return $this->doseQuantity;
    }

    /**
     * The amount of therapeutic or other substance given at one administration event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $doseQuantity
     * @return static
     */
    public function setDoseQuantity(FHIRSimpleQuantity $doseQuantity = null)
    {
        $this->doseQuantity = $doseQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of therapeutic or other substance given at one administration event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange
     */
    public function getDoseRange()
    {
        return $this->doseRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of therapeutic or other substance given at one administration event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange $doseRange
     * @return static
     */
    public function setDoseRange(FHIRRange $doseRange = null)
    {
        $this->doseRange = $doseRange;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum total quantity of a therapeutic substance that may be administered
     * to a subject over the period of time. For example, 1000mg in 24 hours.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRatio
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
     * The maximum total quantity of a therapeutic substance that may be administered
     * to a subject over the period of time. For example, 1000mg in 24 hours.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRatio $maxDosePerPeriod
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
     * A coded value indicating the method by which the medication is introduced into
     * or onto the body. Most commonly used for injections. For examples, Slow Push;
     * Deep IV.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
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
     * A coded value indicating the method by which the medication is introduced into
     * or onto the body. Most commonly used for injections. For examples, Slow Push;
     * Deep IV.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $method
     * @return static
     */
    public function setMethod(FHIRCodeableConcept $method = null)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the speed with which the medication was or will be introduced into
     * the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100
     * ml/hr. May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.
     * Currently we do not specify a default of '1' in the denominator, but this is
     * being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8
     * hours.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange
     */
    public function getRateRange()
    {
        return $this->rateRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the speed with which the medication was or will be introduced into
     * the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100
     * ml/hr. May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.
     * Currently we do not specify a default of '1' in the denominator, but this is
     * being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8
     * hours.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange $rateRange
     * @return static
     */
    public function setRateRange(FHIRRange $rateRange = null)
    {
        $this->rateRange = $rateRange;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the speed with which the medication was or will be introduced into
     * the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100
     * ml/hr. May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.
     * Currently we do not specify a default of '1' in the denominator, but this is
     * being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8
     * hours.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRatio
     */
    public function getRateRatio()
    {
        return $this->rateRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the speed with which the medication was or will be introduced into
     * the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100
     * ml/hr. May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.
     * Currently we do not specify a default of '1' in the denominator, but this is
     * being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8
     * hours.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRatio $rateRatio
     * @return static
     */
    public function setRateRatio(FHIRRatio $rateRatio = null)
    {
        $this->rateRatio = $rateRatio;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the route or physiological path of administration of a
     * therapeutic agent into or onto a patient's body.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
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
     * A code specifying the route or physiological path of administration of a
     * therapeutic agent into or onto a patient's body.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $route
     * @return static
     */
    public function setRoute(FHIRCodeableConcept $route = null)
    {
        $this->route = $route;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded specification of the anatomic site where the medication first enters the
     * body.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept
     */
    public function getSiteCodeableConcept()
    {
        return $this->siteCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded specification of the anatomic site where the medication first enters the
     * body.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $siteCodeableConcept
     * @return static
     */
    public function setSiteCodeableConcept(FHIRCodeableConcept $siteCodeableConcept = null)
    {
        $this->siteCodeableConcept = $siteCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded specification of the anatomic site where the medication first enters the
     * body.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getSiteReference()
    {
        return $this->siteReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded specification of the anatomic site where the medication first enters the
     * body.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $siteReference
     * @return static
     */
    public function setSiteReference(FHIRReference $siteReference = null)
    {
        $this->siteReference = $siteReference;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text dosage instructions can be used for cases where the instructions are
     * too complex to code. The content of this attribute does not include the name or
     * description of the medication. When coded instructions are present, the free
     * text instructions may still be present for display to humans taking or
     * administering the medication. It is expected that the text instructions will
     * always be populated. If the dosage.timing attribute is also populated, then the
     * dosage.text should reflect the same information as the timing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text dosage instructions can be used for cases where the instructions are
     * too complex to code. The content of this attribute does not include the name or
     * description of the medication. When coded instructions are present, the free
     * text instructions may still be present for display to humans taking or
     * administering the medication. It is expected that the text instructions will
     * always be populated. If the dosage.timing attribute is also populated, then the
     * dosage.text should reflect the same information as the timing.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $text
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
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for giving the medication to the patient. The Schedule data
     * type allows many different expressions. For example: "Every 8 hours"; "Three
     * times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15
     * Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming
     */
    public function getTiming()
    {
        return $this->timing;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for giving the medication to the patient. The Schedule data
     * type allows many different expressions. For example: "Every 8 hours"; "Three
     * times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15
     * Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming $timing
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
        if (null !== ($v = $this->getAdditionalInstructions())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADDITIONAL_INSTRUCTIONS] = $fieldErrs;
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
        if (null !== ($v = $this->getDoseQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_QUANTITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDoseRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOSE_RANGE] = $fieldErrs;
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
        if (null !== ($v = $this->getRateRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RATE_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRateRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RATE_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRoute())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ROUTE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSiteCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SITE_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSiteReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SITE_REFERENCE] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_ADDITIONAL_INSTRUCTIONS])) {
            $v = $this->getAdditionalInstructions();
            foreach($validationRules[self::FIELD_ADDITIONAL_INSTRUCTIONS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DOSAGE_INSTRUCTION, self::FIELD_ADDITIONAL_INSTRUCTIONS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDITIONAL_INSTRUCTIONS])) {
                        $errs[self::FIELD_ADDITIONAL_INSTRUCTIONS] = [];
                    }
                    $errs[self::FIELD_ADDITIONAL_INSTRUCTIONS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AS_NEEDED_BOOLEAN])) {
            $v = $this->getAsNeededBoolean();
            foreach($validationRules[self::FIELD_AS_NEEDED_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DOSAGE_INSTRUCTION, self::FIELD_AS_NEEDED_BOOLEAN, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DOSAGE_INSTRUCTION, self::FIELD_AS_NEEDED_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_QUANTITY])) {
            $v = $this->getDoseQuantity();
            foreach($validationRules[self::FIELD_DOSE_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DOSAGE_INSTRUCTION, self::FIELD_DOSE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_QUANTITY])) {
                        $errs[self::FIELD_DOSE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_DOSE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_RANGE])) {
            $v = $this->getDoseRange();
            foreach($validationRules[self::FIELD_DOSE_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DOSAGE_INSTRUCTION, self::FIELD_DOSE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_RANGE])) {
                        $errs[self::FIELD_DOSE_RANGE] = [];
                    }
                    $errs[self::FIELD_DOSE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_DOSE_PER_PERIOD])) {
            $v = $this->getMaxDosePerPeriod();
            foreach($validationRules[self::FIELD_MAX_DOSE_PER_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DOSAGE_INSTRUCTION, self::FIELD_MAX_DOSE_PER_PERIOD, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DOSAGE_INSTRUCTION, self::FIELD_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_METHOD])) {
                        $errs[self::FIELD_METHOD] = [];
                    }
                    $errs[self::FIELD_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RATE_RANGE])) {
            $v = $this->getRateRange();
            foreach($validationRules[self::FIELD_RATE_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DOSAGE_INSTRUCTION, self::FIELD_RATE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RATE_RANGE])) {
                        $errs[self::FIELD_RATE_RANGE] = [];
                    }
                    $errs[self::FIELD_RATE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RATE_RATIO])) {
            $v = $this->getRateRatio();
            foreach($validationRules[self::FIELD_RATE_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DOSAGE_INSTRUCTION, self::FIELD_RATE_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RATE_RATIO])) {
                        $errs[self::FIELD_RATE_RATIO] = [];
                    }
                    $errs[self::FIELD_RATE_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROUTE])) {
            $v = $this->getRoute();
            foreach($validationRules[self::FIELD_ROUTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DOSAGE_INSTRUCTION, self::FIELD_ROUTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROUTE])) {
                        $errs[self::FIELD_ROUTE] = [];
                    }
                    $errs[self::FIELD_ROUTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SITE_CODEABLE_CONCEPT])) {
            $v = $this->getSiteCodeableConcept();
            foreach($validationRules[self::FIELD_SITE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DOSAGE_INSTRUCTION, self::FIELD_SITE_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SITE_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_SITE_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_SITE_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SITE_REFERENCE])) {
            $v = $this->getSiteReference();
            foreach($validationRules[self::FIELD_SITE_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DOSAGE_INSTRUCTION, self::FIELD_SITE_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SITE_REFERENCE])) {
                        $errs[self::FIELD_SITE_REFERENCE] = [];
                    }
                    $errs[self::FIELD_SITE_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DOSAGE_INSTRUCTION, self::FIELD_TEXT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DOSAGE_INSTRUCTION, self::FIELD_TIMING, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDosageInstruction $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDosageInstruction
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
                throw new \DomainException(sprintf('FHIRMedicationOrderDosageInstruction::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicationOrderDosageInstruction::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicationOrderDosageInstruction;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicationOrderDosageInstruction)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicationOrderDosageInstruction::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDosageInstruction or null, %s seen.',
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
        if (isset($children->additionalInstructions)) {
            $type->setAdditionalInstructions(FHIRCodeableConcept::xmlUnserialize($children->additionalInstructions));
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
        if (isset($children->doseQuantity)) {
            $type->setDoseQuantity(FHIRSimpleQuantity::xmlUnserialize($children->doseQuantity));
        }
        if (isset($children->doseRange)) {
            $type->setDoseRange(FHIRRange::xmlUnserialize($children->doseRange));
        }
        if (isset($children->maxDosePerPeriod)) {
            $type->setMaxDosePerPeriod(FHIRRatio::xmlUnserialize($children->maxDosePerPeriod));
        }
        if (isset($children->method)) {
            $type->setMethod(FHIRCodeableConcept::xmlUnserialize($children->method));
        }
        if (isset($children->rateRange)) {
            $type->setRateRange(FHIRRange::xmlUnserialize($children->rateRange));
        }
        if (isset($children->rateRatio)) {
            $type->setRateRatio(FHIRRatio::xmlUnserialize($children->rateRatio));
        }
        if (isset($children->route)) {
            $type->setRoute(FHIRCodeableConcept::xmlUnserialize($children->route));
        }
        if (isset($children->siteCodeableConcept)) {
            $type->setSiteCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->siteCodeableConcept));
        }
        if (isset($children->siteReference)) {
            $type->setSiteReference(FHIRReference::xmlUnserialize($children->siteReference));
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
        if (null !== ($v = $this->getAdditionalInstructions())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ADDITIONAL_INSTRUCTIONS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAsNeededBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AS_NEEDED_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAsNeededCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AS_NEEDED_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDoseQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOSE_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDoseRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DOSE_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMaxDosePerPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MAX_DOSE_PER_PERIOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMethod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_METHOD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRateRange())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RATE_RANGE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRateRatio())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RATE_RATIO, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRoute())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ROUTE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSiteCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SITE_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSiteReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SITE_REFERENCE, null, $v->_getFHIRXMLNamespace()));
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
        if (null !== ($v = $this->getAdditionalInstructions())) {
            $a[self::FIELD_ADDITIONAL_INSTRUCTIONS] = $v;
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
        if (null !== ($v = $this->getDoseQuantity())) {
            $a[self::FIELD_DOSE_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getDoseRange())) {
            $a[self::FIELD_DOSE_RANGE] = $v;
        }
        if (null !== ($v = $this->getMaxDosePerPeriod())) {
            $a[self::FIELD_MAX_DOSE_PER_PERIOD] = $v;
        }
        if (null !== ($v = $this->getMethod())) {
            $a[self::FIELD_METHOD] = $v;
        }
        if (null !== ($v = $this->getRateRange())) {
            $a[self::FIELD_RATE_RANGE] = $v;
        }
        if (null !== ($v = $this->getRateRatio())) {
            $a[self::FIELD_RATE_RATIO] = $v;
        }
        if (null !== ($v = $this->getRoute())) {
            $a[self::FIELD_ROUTE] = $v;
        }
        if (null !== ($v = $this->getSiteCodeableConcept())) {
            $a[self::FIELD_SITE_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getSiteReference())) {
            $a[self::FIELD_SITE_REFERENCE] = $v;
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