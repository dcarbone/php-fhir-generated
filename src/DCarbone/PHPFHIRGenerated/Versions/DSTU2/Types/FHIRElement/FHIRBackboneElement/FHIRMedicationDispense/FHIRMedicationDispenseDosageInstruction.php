<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 26th, 2025 01:06+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRatio;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * Indicates that a medication product is to be or has been dispensed for a named
 * person/patient. This includes a description of the medication product (supply)
 * provided and the instructions for administering the medication. The medication
 * dispense is the result of a pharmacy system responding to a medication order.
 */
class FHIRMedicationDispenseDosageInstruction extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE_INSTRUCTION;


    public const FIELD_TEXT = 'text';
    public const FIELD_TEXT_EXT = '_text';
    public const FIELD_ADDITIONAL_INSTRUCTIONS = 'additionalInstructions';
    public const FIELD_TIMING = 'timing';
    public const FIELD_AS_NEEDED_BOOLEAN = 'asNeededBoolean';
    public const FIELD_AS_NEEDED_BOOLEAN_EXT = '_asNeededBoolean';
    public const FIELD_AS_NEEDED_CODEABLE_CONCEPT = 'asNeededCodeableConcept';
    public const FIELD_SITE_CODEABLE_CONCEPT = 'siteCodeableConcept';
    public const FIELD_SITE_REFERENCE = 'siteReference';
    public const FIELD_ROUTE = 'route';
    public const FIELD_METHOD = 'method';
    public const FIELD_DOSE_RANGE = 'doseRange';
    public const FIELD_DOSE_QUANTITY = 'doseQuantity';
    public const FIELD_RATE_RATIO = 'rateRatio';
    public const FIELD_RATE_RANGE = 'rateRange';
    public const FIELD_MAX_DOSE_PER_PERIOD = 'maxDosePerPeriod';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text dosage instructions can be used for cases where the instructions are
     * too complex to code. When coded instructions are present, the free text
     * instructions may still be present for display to humans taking or administering
     * the medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $text;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional instructions such as "Swallow with plenty of water" which may or may
     * not be coded.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $additionalInstructions;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are expected or requested to occur. The most common usage is
     * in dosage instructions for medications. They are also used when planning care of
     * various kinds.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The timing schedule for giving the medication to the patient. The Schedule data
     * type allows many different expressions. For example, "Every 8 hours"; "Three
     * times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15
     * Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRTiming 
     */
    protected FHIRTiming $timing;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the Medication is only taken when needed within a specific
     * dosing schedule (Boolean option), or it indicates the precondition for taking
     * the Medication (CodeableConcept). Specifically if 'boolean' datatype is
     * selected, then the following logic applies: If set to True, this indicates that
     * the medication is only taken when needed, within the specified schedule.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $asNeededBoolean;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whether the Medication is only taken when needed within a specific
     * dosing schedule (Boolean option), or it indicates the precondition for taking
     * the Medication (CodeableConcept). Specifically if 'boolean' datatype is
     * selected, then the following logic applies: If set to True, this indicates that
     * the medication is only taken when needed, within the specified schedule.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $asNeededCodeableConcept;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded specification of the anatomic site where the medication first enters the
     * body.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $siteCodeableConcept;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded specification of the anatomic site where the medication first enters the
     * body.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $siteReference;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the route or physiological path of administration of a
     * therapeutic agent into or onto a subject.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $route;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded value indicating the method by which the medication is intended to be or
     * was introduced into or on the body.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $method;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of therapeutic or other substance given at one administration event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $doseRange;
    /**
     * The amount of therapeutic or other substance given at one administration event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity 
     */
    protected FHIRSimpleQuantity $doseQuantity;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $rateRatio;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $rateRange;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum total quantity of a therapeutic substance that may be administered
     * to a subject over the period of time, e.g. 1000mg in 24 hours.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRatio 
     */
    protected FHIRRatio $maxDosePerPeriod;

    /** Default validation map for fields in type MedicationDispense.DosageInstruction */
    private const _DEFAULT_VALIDATION_RULES = [];

    /* constructor.php:66 */
    /**
     * FHIRMedicationDispenseDosageInstruction Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $additionalInstructions
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRTiming $timing
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean $asNeededBoolean
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $asNeededCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $siteCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $siteReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $route
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $method
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange $doseRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $doseQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRatio $rateRatio
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange $rateRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRatio $maxDosePerPeriod
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $text = null,
                                null|FHIRCodeableConcept $additionalInstructions = null,
                                null|FHIRTiming $timing = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $asNeededBoolean = null,
                                null|FHIRCodeableConcept $asNeededCodeableConcept = null,
                                null|FHIRCodeableConcept $siteCodeableConcept = null,
                                null|FHIRReference $siteReference = null,
                                null|FHIRCodeableConcept $route = null,
                                null|FHIRCodeableConcept $method = null,
                                null|FHIRRange $doseRange = null,
                                null|FHIRSimpleQuantity $doseQuantity = null,
                                null|FHIRRatio $rateRatio = null,
                                null|FHIRRange $rateRange = null,
                                null|FHIRRatio $maxDosePerPeriod = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $text) {
            $this->setText($text);
        }
        if (null !== $additionalInstructions) {
            $this->setAdditionalInstructions($additionalInstructions);
        }
        if (null !== $timing) {
            $this->setTiming($timing);
        }
        if (null !== $asNeededBoolean) {
            $this->setAsNeededBoolean($asNeededBoolean);
        }
        if (null !== $asNeededCodeableConcept) {
            $this->setAsNeededCodeableConcept($asNeededCodeableConcept);
        }
        if (null !== $siteCodeableConcept) {
            $this->setSiteCodeableConcept($siteCodeableConcept);
        }
        if (null !== $siteReference) {
            $this->setSiteReference($siteReference);
        }
        if (null !== $route) {
            $this->setRoute($route);
        }
        if (null !== $method) {
            $this->setMethod($method);
        }
        if (null !== $doseRange) {
            $this->setDoseRange($doseRange);
        }
        if (null !== $doseQuantity) {
            $this->setDoseQuantity($doseQuantity);
        }
        if (null !== $rateRatio) {
            $this->setRateRatio($rateRatio);
        }
        if (null !== $rateRange) {
            $this->setRateRange($rateRange);
        }
        if (null !== $maxDosePerPeriod) {
            $this->setMaxDosePerPeriod($maxDosePerPeriod);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text dosage instructions can be used for cases where the instructions are
     * too complex to code. When coded instructions are present, the free text
     * instructions may still be present for display to humans taking or administering
     * the medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getText(): null|FHIRString
    {
        return $this->text ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text dosage instructions can be used for cases where the instructions are
     * too complex to code. When coded instructions are present, the free text
     * instructions may still be present for display to humans taking or administering
     * the medication.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $text
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setText(null|string|FHIRStringPrimitive|FHIRString $text,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $text) {
            unset($this->text);
            return $this;
        }
        if (!($text instanceof FHIRString)) {
            $text = new FHIRString(value: $text);
        }
        if (null !== $valueXMLLocation) {
            $text->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $text->_getValueXMLLocation()) {
            $text->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->text = $text;
        return $this;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getAdditionalInstructions(): null|FHIRCodeableConcept
    {
        return $this->additionalInstructions ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $additionalInstructions
     * @return static
     */
    public function setAdditionalInstructions(null|FHIRCodeableConcept $additionalInstructions): self
    {
        if (null === $additionalInstructions) {
            unset($this->additionalInstructions);
            return $this;
        }
        $this->additionalInstructions = $additionalInstructions;
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
     * type allows many different expressions. For example, "Every 8 hours"; "Three
     * times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15
     * Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRTiming
     */
    public function getTiming(): null|FHIRTiming
    {
        return $this->timing ?? null;
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
     * type allows many different expressions. For example, "Every 8 hours"; "Three
     * times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15
     * Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRTiming $timing
     * @return static
     */
    public function setTiming(null|FHIRTiming $timing): self
    {
        if (null === $timing) {
            unset($this->timing);
            return $this;
        }
        $this->timing = $timing;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the Medication is only taken when needed within a specific
     * dosing schedule (Boolean option), or it indicates the precondition for taking
     * the Medication (CodeableConcept). Specifically if 'boolean' datatype is
     * selected, then the following logic applies: If set to True, this indicates that
     * the medication is only taken when needed, within the specified schedule.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean
     */
    public function getAsNeededBoolean(): null|FHIRBoolean
    {
        return $this->asNeededBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the Medication is only taken when needed within a specific
     * dosing schedule (Boolean option), or it indicates the precondition for taking
     * the Medication (CodeableConcept). Specifically if 'boolean' datatype is
     * selected, then the following logic applies: If set to True, this indicates that
     * the medication is only taken when needed, within the specified schedule.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean $asNeededBoolean
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAsNeededBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $asNeededBoolean,
                                       null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $asNeededBoolean) {
            unset($this->asNeededBoolean);
            return $this;
        }
        if (!($asNeededBoolean instanceof FHIRBoolean)) {
            $asNeededBoolean = new FHIRBoolean(value: $asNeededBoolean);
        }
        if (null !== $valueXMLLocation) {
            $asNeededBoolean->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $asNeededBoolean->_getValueXMLLocation()) {
            $asNeededBoolean->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->asNeededBoolean = $asNeededBoolean;
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
     * the Medication (CodeableConcept). Specifically if 'boolean' datatype is
     * selected, then the following logic applies: If set to True, this indicates that
     * the medication is only taken when needed, within the specified schedule.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getAsNeededCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->asNeededCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whether the Medication is only taken when needed within a specific
     * dosing schedule (Boolean option), or it indicates the precondition for taking
     * the Medication (CodeableConcept). Specifically if 'boolean' datatype is
     * selected, then the following logic applies: If set to True, this indicates that
     * the medication is only taken when needed, within the specified schedule.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $asNeededCodeableConcept
     * @return static
     */
    public function setAsNeededCodeableConcept(null|FHIRCodeableConcept $asNeededCodeableConcept): self
    {
        if (null === $asNeededCodeableConcept) {
            unset($this->asNeededCodeableConcept);
            return $this;
        }
        $this->asNeededCodeableConcept = $asNeededCodeableConcept;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getSiteCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->siteCodeableConcept ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $siteCodeableConcept
     * @return static
     */
    public function setSiteCodeableConcept(null|FHIRCodeableConcept $siteCodeableConcept): self
    {
        if (null === $siteCodeableConcept) {
            unset($this->siteCodeableConcept);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getSiteReference(): null|FHIRReference
    {
        return $this->siteReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded specification of the anatomic site where the medication first enters the
     * body.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $siteReference
     * @return static
     */
    public function setSiteReference(null|FHIRReference $siteReference): self
    {
        if (null === $siteReference) {
            unset($this->siteReference);
            return $this;
        }
        $this->siteReference = $siteReference;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the route or physiological path of administration of a
     * therapeutic agent into or onto a subject.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getRoute(): null|FHIRCodeableConcept
    {
        return $this->route ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code specifying the route or physiological path of administration of a
     * therapeutic agent into or onto a subject.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $route
     * @return static
     */
    public function setRoute(null|FHIRCodeableConcept $route): self
    {
        if (null === $route) {
            unset($this->route);
            return $this;
        }
        $this->route = $route;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded value indicating the method by which the medication is intended to be or
     * was introduced into or on the body.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod(): null|FHIRCodeableConcept
    {
        return $this->method ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A coded value indicating the method by which the medication is intended to be or
     * was introduced into or on the body.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $method
     * @return static
     */
    public function setMethod(null|FHIRCodeableConcept $method): self
    {
        if (null === $method) {
            unset($this->method);
            return $this;
        }
        $this->method = $method;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of therapeutic or other substance given at one administration event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange
     */
    public function getDoseRange(): null|FHIRRange
    {
        return $this->doseRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount of therapeutic or other substance given at one administration event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange $doseRange
     * @return static
     */
    public function setDoseRange(null|FHIRRange $doseRange): self
    {
        if (null === $doseRange) {
            unset($this->doseRange);
            return $this;
        }
        $this->doseRange = $doseRange;
        return $this;
    }

    /**
     * The amount of therapeutic or other substance given at one administration event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getDoseQuantity(): null|FHIRSimpleQuantity
    {
        return $this->doseQuantity ?? null;
    }

    /**
     * The amount of therapeutic or other substance given at one administration event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $doseQuantity
     * @return static
     */
    public function setDoseQuantity(null|FHIRSimpleQuantity $doseQuantity): self
    {
        if (null === $doseQuantity) {
            unset($this->doseQuantity);
            return $this;
        }
        $this->doseQuantity = $doseQuantity;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRatio
     */
    public function getRateRatio(): null|FHIRRatio
    {
        return $this->rateRatio ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRatio $rateRatio
     * @return static
     */
    public function setRateRatio(null|FHIRRatio $rateRatio): self
    {
        if (null === $rateRatio) {
            unset($this->rateRatio);
            return $this;
        }
        $this->rateRatio = $rateRatio;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange
     */
    public function getRateRange(): null|FHIRRange
    {
        return $this->rateRange ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange $rateRange
     * @return static
     */
    public function setRateRange(null|FHIRRange $rateRange): self
    {
        if (null === $rateRange) {
            unset($this->rateRange);
            return $this;
        }
        $this->rateRange = $rateRange;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum total quantity of a therapeutic substance that may be administered
     * to a subject over the period of time, e.g. 1000mg in 24 hours.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRatio
     */
    public function getMaxDosePerPeriod(): null|FHIRRatio
    {
        return $this->maxDosePerPeriod ?? null;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum total quantity of a therapeutic substance that may be administered
     * to a subject over the period of time, e.g. 1000mg in 24 hours.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRatio $maxDosePerPeriod
     * @return static
     */
    public function setMaxDosePerPeriod(null|FHIRRatio $maxDosePerPeriod): self
    {
        if (null === $maxDosePerPeriod) {
            unset($this->maxDosePerPeriod);
            return $this;
        }
        $this->maxDosePerPeriod = $maxDosePerPeriod;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDITIONAL_INSTRUCTIONS])) {
            $v = $this->getAdditionalInstructions();
            foreach($validationRules[self::FIELD_ADDITIONAL_INSTRUCTIONS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADDITIONAL_INSTRUCTIONS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDITIONAL_INSTRUCTIONS])) {
                        $errs[self::FIELD_ADDITIONAL_INSTRUCTIONS] = [];
                    }
                    $errs[self::FIELD_ADDITIONAL_INSTRUCTIONS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIMING])) {
            $v = $this->getTiming();
            foreach($validationRules[self::FIELD_TIMING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TIMING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIMING])) {
                        $errs[self::FIELD_TIMING] = [];
                    }
                    $errs[self::FIELD_TIMING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AS_NEEDED_BOOLEAN])) {
            $v = $this->getAsNeededBoolean();
            foreach($validationRules[self::FIELD_AS_NEEDED_BOOLEAN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AS_NEEDED_BOOLEAN, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AS_NEEDED_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SITE_CODEABLE_CONCEPT])) {
            $v = $this->getSiteCodeableConcept();
            foreach($validationRules[self::FIELD_SITE_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SITE_CODEABLE_CONCEPT, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SITE_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SITE_REFERENCE])) {
                        $errs[self::FIELD_SITE_REFERENCE] = [];
                    }
                    $errs[self::FIELD_SITE_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROUTE])) {
            $v = $this->getRoute();
            foreach($validationRules[self::FIELD_ROUTE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ROUTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROUTE])) {
                        $errs[self::FIELD_ROUTE] = [];
                    }
                    $errs[self::FIELD_ROUTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_METHOD])) {
            $v = $this->getMethod();
            foreach($validationRules[self::FIELD_METHOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_METHOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_METHOD])) {
                        $errs[self::FIELD_METHOD] = [];
                    }
                    $errs[self::FIELD_METHOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_RANGE])) {
            $v = $this->getDoseRange();
            foreach($validationRules[self::FIELD_DOSE_RANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DOSE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_RANGE])) {
                        $errs[self::FIELD_DOSE_RANGE] = [];
                    }
                    $errs[self::FIELD_DOSE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSE_QUANTITY])) {
            $v = $this->getDoseQuantity();
            foreach($validationRules[self::FIELD_DOSE_QUANTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DOSE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_QUANTITY])) {
                        $errs[self::FIELD_DOSE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_DOSE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RATE_RATIO])) {
            $v = $this->getRateRatio();
            foreach($validationRules[self::FIELD_RATE_RATIO] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RATE_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RATE_RATIO])) {
                        $errs[self::FIELD_RATE_RATIO] = [];
                    }
                    $errs[self::FIELD_RATE_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RATE_RANGE])) {
            $v = $this->getRateRange();
            foreach($validationRules[self::FIELD_RATE_RANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RATE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RATE_RANGE])) {
                        $errs[self::FIELD_RATE_RANGE] = [];
                    }
                    $errs[self::FIELD_RATE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_DOSE_PER_PERIOD])) {
            $v = $this->getMaxDosePerPeriod();
            foreach($validationRules[self::FIELD_MAX_DOSE_PER_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_DOSE_PER_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_DOSE_PER_PERIOD])) {
                        $errs[self::FIELD_MAX_DOSE_PER_PERIOD] = [];
                    }
                    $errs[self::FIELD_MAX_DOSE_PER_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationDispenseDosageInstruction)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setText(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ADDITIONAL_INSTRUCTIONS === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setAdditionalInstructions(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TIMING === $childName) {
                $v = new FHIRTiming();
                $type->setTiming(FHIRTiming::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AS_NEEDED_BOOLEAN === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAsNeededBoolean(FHIRBoolean::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AS_NEEDED_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setAsNeededCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SITE_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setSiteCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SITE_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->setSiteReference(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ROUTE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setRoute(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_METHOD === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setMethod(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DOSE_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setDoseRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DOSE_QUANTITY === $childName) {
                $v = new FHIRSimpleQuantity();
                $type->setDoseQuantity(FHIRSimpleQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RATE_RATIO === $childName) {
                $v = new FHIRRatio();
                $type->setRateRatio(FHIRRatio::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RATE_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setRateRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX_DOSE_PER_PERIOD === $childName) {
                $v = new FHIRRatio();
                $type->setMaxDosePerPeriod(FHIRRatio::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRIdPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_TEXT])) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_TEXT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setText(new FHIRString(
                    value: (string)$attributes[self::FIELD_TEXT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_AS_NEEDED_BOOLEAN])) {
            $pt = $type->getAsNeededBoolean();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_AS_NEEDED_BOOLEAN]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAsNeededBoolean(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_AS_NEEDED_BOOLEAN],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('MedicationDispenseDosageInstruction', $this->_getSourceXMLNS());
        }
        if (isset($this->text) && $this->text->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_TEXT, $this->text->getValue()?->_getFormattedValue());
        }
        if (isset($this->asNeededBoolean) && $this->asNeededBoolean->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_AS_NEEDED_BOOLEAN, $this->asNeededBoolean->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->text) && $this->text->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_TEXT);
            $this->text->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->additionalInstructions)) {
            $xw->startElement(self::FIELD_ADDITIONAL_INSTRUCTIONS);
            $this->additionalInstructions->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->timing)) {
            $xw->startElement(self::FIELD_TIMING);
            $this->timing->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->asNeededBoolean) && $this->asNeededBoolean->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_AS_NEEDED_BOOLEAN);
            $this->asNeededBoolean->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->asNeededCodeableConcept)) {
            $xw->startElement(self::FIELD_AS_NEEDED_CODEABLE_CONCEPT);
            $this->asNeededCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->siteCodeableConcept)) {
            $xw->startElement(self::FIELD_SITE_CODEABLE_CONCEPT);
            $this->siteCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->siteReference)) {
            $xw->startElement(self::FIELD_SITE_REFERENCE);
            $this->siteReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->route)) {
            $xw->startElement(self::FIELD_ROUTE);
            $this->route->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->method)) {
            $xw->startElement(self::FIELD_METHOD);
            $this->method->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->doseRange)) {
            $xw->startElement(self::FIELD_DOSE_RANGE);
            $this->doseRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->doseQuantity)) {
            $xw->startElement(self::FIELD_DOSE_QUANTITY);
            $this->doseQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->rateRatio)) {
            $xw->startElement(self::FIELD_RATE_RATIO);
            $this->rateRatio->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->rateRange)) {
            $xw->startElement(self::FIELD_RATE_RANGE);
            $this->rateRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxDosePerPeriod)) {
            $xw->startElement(self::FIELD_MAX_DOSE_PER_PERIOD);
            $this->maxDosePerPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationDispenseDosageInstruction)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_TEXT]) || isset($json[self::FIELD_TEXT_EXT]) || array_key_exists(self::FIELD_TEXT, $json) || array_key_exists(self::FIELD_TEXT_EXT, $json)) {
            $value = $json[self::FIELD_TEXT] ?? null;
            $ext = (array)($json[self::FIELD_TEXT_EXT] ?? []);
            $type->setText(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ADDITIONAL_INSTRUCTIONS]) || array_key_exists(self::FIELD_ADDITIONAL_INSTRUCTIONS, $json)) {
            $type->setAdditionalInstructions(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_ADDITIONAL_INSTRUCTIONS],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_TIMING]) || array_key_exists(self::FIELD_TIMING, $json)) {
            $type->setTiming(FHIRTiming::jsonUnserialize(
                json: $json[self::FIELD_TIMING],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_AS_NEEDED_BOOLEAN]) || isset($json[self::FIELD_AS_NEEDED_BOOLEAN_EXT]) || array_key_exists(self::FIELD_AS_NEEDED_BOOLEAN, $json) || array_key_exists(self::FIELD_AS_NEEDED_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_AS_NEEDED_BOOLEAN] ?? null;
            $ext = (array)($json[self::FIELD_AS_NEEDED_BOOLEAN_EXT] ?? []);
            $type->setAsNeededBoolean(FHIRBoolean::jsonUnserialize(
                json: [FHIRBoolean::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_AS_NEEDED_CODEABLE_CONCEPT, $json)) {
            $type->setAsNeededCodeableConcept(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_AS_NEEDED_CODEABLE_CONCEPT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_SITE_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_SITE_CODEABLE_CONCEPT, $json)) {
            $type->setSiteCodeableConcept(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_SITE_CODEABLE_CONCEPT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_SITE_REFERENCE]) || array_key_exists(self::FIELD_SITE_REFERENCE, $json)) {
            $type->setSiteReference(FHIRReference::jsonUnserialize(
                json: $json[self::FIELD_SITE_REFERENCE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ROUTE]) || array_key_exists(self::FIELD_ROUTE, $json)) {
            $type->setRoute(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_ROUTE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_METHOD]) || array_key_exists(self::FIELD_METHOD, $json)) {
            $type->setMethod(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_METHOD],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DOSE_RANGE]) || array_key_exists(self::FIELD_DOSE_RANGE, $json)) {
            $type->setDoseRange(FHIRRange::jsonUnserialize(
                json: $json[self::FIELD_DOSE_RANGE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DOSE_QUANTITY]) || array_key_exists(self::FIELD_DOSE_QUANTITY, $json)) {
            $type->setDoseQuantity(FHIRSimpleQuantity::jsonUnserialize(
                json: $json[self::FIELD_DOSE_QUANTITY],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_RATE_RATIO]) || array_key_exists(self::FIELD_RATE_RATIO, $json)) {
            $type->setRateRatio(FHIRRatio::jsonUnserialize(
                json: $json[self::FIELD_RATE_RATIO],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_RATE_RANGE]) || array_key_exists(self::FIELD_RATE_RANGE, $json)) {
            $type->setRateRange(FHIRRange::jsonUnserialize(
                json: $json[self::FIELD_RATE_RANGE],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_MAX_DOSE_PER_PERIOD]) || array_key_exists(self::FIELD_MAX_DOSE_PER_PERIOD, $json)) {
            $type->setMaxDosePerPeriod(FHIRRatio::jsonUnserialize(
                json: $json[self::FIELD_MAX_DOSE_PER_PERIOD],
                config: $config,
            ));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->text)) {
            if (null !== ($val = $this->text->getValue())) {
                $out->text = $val;
            }
            $ext = $this->text->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_text = $ext;
            }
        }
        if (isset($this->additionalInstructions)) {
            $out->additionalInstructions = $this->additionalInstructions;
        }
        if (isset($this->timing)) {
            $out->timing = $this->timing;
        }
        if (isset($this->asNeededBoolean)) {
            if (null !== ($val = $this->asNeededBoolean->getValue())) {
                $out->asNeededBoolean = $val;
            }
            $ext = $this->asNeededBoolean->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_asNeededBoolean = $ext;
            }
        }
        if (isset($this->asNeededCodeableConcept)) {
            $out->asNeededCodeableConcept = $this->asNeededCodeableConcept;
        }
        if (isset($this->siteCodeableConcept)) {
            $out->siteCodeableConcept = $this->siteCodeableConcept;
        }
        if (isset($this->siteReference)) {
            $out->siteReference = $this->siteReference;
        }
        if (isset($this->route)) {
            $out->route = $this->route;
        }
        if (isset($this->method)) {
            $out->method = $this->method;
        }
        if (isset($this->doseRange)) {
            $out->doseRange = $this->doseRange;
        }
        if (isset($this->doseQuantity)) {
            $out->doseQuantity = $this->doseQuantity;
        }
        if (isset($this->rateRatio)) {
            $out->rateRatio = $this->rateRatio;
        }
        if (isset($this->rateRange)) {
            $out->rateRange = $this->rateRange;
        }
        if (isset($this->maxDosePerPeriod)) {
            $out->maxDosePerPeriod = $this->maxDosePerPeriod;
        }
        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}