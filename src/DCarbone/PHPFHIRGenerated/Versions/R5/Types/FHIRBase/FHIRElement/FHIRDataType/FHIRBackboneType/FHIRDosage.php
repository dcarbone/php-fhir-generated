<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage\FHIRDosageDoseAndRate;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Indicates how the medication is/was taken or should be taken by the patient.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRDosage extends FHIRBackboneType
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DOSAGE;

    /* class_default.php:56 */
    public const FIELD_SEQUENCE = 'sequence';
    public const FIELD_SEQUENCE_EXT = '_sequence';
    public const FIELD_TEXT = 'text';
    public const FIELD_TEXT_EXT = '_text';
    public const FIELD_ADDITIONAL_INSTRUCTION = 'additionalInstruction';
    public const FIELD_PATIENT_INSTRUCTION = 'patientInstruction';
    public const FIELD_PATIENT_INSTRUCTION_EXT = '_patientInstruction';
    public const FIELD_TIMING = 'timing';
    public const FIELD_AS_NEEDED = 'asNeeded';
    public const FIELD_AS_NEEDED_EXT = '_asNeeded';
    public const FIELD_AS_NEEDED_FOR = 'asNeededFor';
    public const FIELD_SITE = 'site';
    public const FIELD_ROUTE = 'route';
    public const FIELD_METHOD = 'method';
    public const FIELD_DOSE_AND_RATE = 'doseAndRate';
    public const FIELD_MAX_DOSE_PER_PERIOD = 'maxDosePerPeriod';
    public const FIELD_MAX_DOSE_PER_ADMINISTRATION = 'maxDosePerAdministration';
    public const FIELD_MAX_DOSE_PER_LIFETIME = 'maxDosePerLifetime';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_SEQUENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TEXT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATIENT_INSTRUCTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_AS_NEEDED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the order in which the dosage instructions should be applied or
     * interpreted.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger 
     */
    #[FHIRInteger]
    protected FHIRInteger $sequence;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text dosage instructions e.g. SIG.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $text;
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
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $additionalInstruction;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $patientInstruction;
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming 
     */
    #[FHIRTiming]
    protected FHIRTiming $timing;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the Medication is only taken when needed within a specific
     * dosing schedule (Boolean option).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean 
     */
    #[FHIRBoolean]
    protected FHIRBoolean $asNeeded;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whether the Medication is only taken based on a precondition for
     * taking the Medication (CodeableConcept).
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> 
     */
    #[FHIRCodeableConcept]
    protected array $asNeededFor;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Body site to administer to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $site;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How drug should enter body.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $route;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Technique for administering medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $method;
    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Depending on the resource,this is the amount of medication administered, to be
     * administered or typical amount to be administered.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage\FHIRDosageDoseAndRate> 
     */
    #[FHIRDosageDoseAndRate]
    protected array $doseAndRate;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per unit of time.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio> 
     */
    #[FHIRRatio]
    protected array $maxDosePerPeriod;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per administration.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    #[FHIRQuantity]
    protected FHIRQuantity $maxDosePerAdministration;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per lifetime of the patient.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity 
     */
    #[FHIRQuantity]
    protected FHIRQuantity $maxDosePerLifetime;

    /* constructor.php:61 */
    /**
     * FHIRDosage Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $sequence
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $text
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $additionalInstruction
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $patientInstruction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming $timing
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $asNeeded
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept> $asNeededFor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $site
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $route
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $method
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage\FHIRDosageDoseAndRate> $doseAndRate
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio> $maxDosePerPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $maxDosePerAdministration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $maxDosePerLifetime
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $sequence = null,
                                null|string|FHIRStringPrimitive|FHIRString $text = null,
                                null|iterable $additionalInstruction = null,
                                null|string|FHIRStringPrimitive|FHIRString $patientInstruction = null,
                                null|FHIRTiming $timing = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $asNeeded = null,
                                null|iterable $asNeededFor = null,
                                null|FHIRCodeableConcept $site = null,
                                null|FHIRCodeableConcept $route = null,
                                null|FHIRCodeableConcept $method = null,
                                null|iterable $doseAndRate = null,
                                null|iterable $maxDosePerPeriod = null,
                                null|FHIRQuantity $maxDosePerAdministration = null,
                                null|FHIRQuantity $maxDosePerLifetime = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $sequence) {
            $this->setSequence($sequence);
        }
        if (null !== $text) {
            $this->setText($text);
        }
        if (null !== $additionalInstruction) {
            $this->setAdditionalInstruction(...$additionalInstruction);
        }
        if (null !== $patientInstruction) {
            $this->setPatientInstruction($patientInstruction);
        }
        if (null !== $timing) {
            $this->setTiming($timing);
        }
        if (null !== $asNeeded) {
            $this->setAsNeeded($asNeeded);
        }
        if (null !== $asNeededFor) {
            $this->setAsNeededFor(...$asNeededFor);
        }
        if (null !== $site) {
            $this->setSite($site);
        }
        if (null !== $route) {
            $this->setRoute($route);
        }
        if (null !== $method) {
            $this->setMethod($method);
        }
        if (null !== $doseAndRate) {
            $this->setDoseAndRate(...$doseAndRate);
        }
        if (null !== $maxDosePerPeriod) {
            $this->setMaxDosePerPeriod(...$maxDosePerPeriod);
        }
        if (null !== $maxDosePerAdministration) {
            $this->setMaxDosePerAdministration($maxDosePerAdministration);
        }
        if (null !== $maxDosePerLifetime) {
            $this->setMaxDosePerLifetime($maxDosePerLifetime);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the order in which the dosage instructions should be applied or
     * interpreted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger
     */
    public function getSequence(): null|FHIRInteger
    {
        return $this->sequence ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the order in which the dosage instructions should be applied or
     * interpreted.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $sequence
     * @return static
     */
    public function setSequence(null|string|float|FHIRIntegerPrimitive|FHIRInteger $sequence): self
    {
        if (null === $sequence) {
            unset($this->sequence);
            return $this;
        }
        if (!($sequence instanceof FHIRInteger)) {
            $sequence = new FHIRInteger(value: $sequence);
        }
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text dosage instructions e.g. SIG.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getText(): null|FHIRString
    {
        return $this->text ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Free text dosage instructions e.g. SIG.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $text
     * @return static
     */
    public function setText(null|string|FHIRStringPrimitive|FHIRString $text): self
    {
        if (null === $text) {
            unset($this->text);
            return $this;
        }
        if (!($text instanceof FHIRString)) {
            $text = new FHIRString(value: $text);
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
     * Supplemental instructions to the patient on how to take the medication (e.g.
     * "with meals" or"take half to one hour before food") or warnings for the patient
     * about the medication (e.g. "may cause drowsiness" or "avoid exposure of skin to
     * direct sunlight or sunlamps").
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getAdditionalInstruction(): array
    {
        return $this->additionalInstruction ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getAdditionalInstructionIterator(): iterable
    {
        if (!isset($this->additionalInstruction)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->additionalInstruction);
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $additionalInstruction
     * @return static
     */
    public function addAdditionalInstruction(FHIRCodeableConcept $additionalInstruction): self
    {
        if (!isset($this->additionalInstruction)) {
            $this->additionalInstruction = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$additionalInstruction
     * @return static
     */
    public function setAdditionalInstruction(FHIRCodeableConcept ...$additionalInstruction): self
    {
        if ([] === $additionalInstruction) {
            unset($this->additionalInstruction);
            return $this;
        }
        $this->additionalInstruction = $additionalInstruction;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getPatientInstruction(): null|FHIRString
    {
        return $this->patientInstruction ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $patientInstruction
     * @return static
     */
    public function setPatientInstruction(null|string|FHIRStringPrimitive|FHIRString $patientInstruction): self
    {
        if (null === $patientInstruction) {
            unset($this->patientInstruction);
            return $this;
        }
        if (!($patientInstruction instanceof FHIRString)) {
            $patientInstruction = new FHIRString(value: $patientInstruction);
        }
        $this->patientInstruction = $patientInstruction;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming
     */
    public function getTiming(): null|FHIRTiming
    {
        return $this->timing ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming $timing
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
     * dosing schedule (Boolean option).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getAsNeeded(): null|FHIRBoolean
    {
        return $this->asNeeded ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the Medication is only taken when needed within a specific
     * dosing schedule (Boolean option).
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $asNeeded
     * @return static
     */
    public function setAsNeeded(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $asNeeded): self
    {
        if (null === $asNeeded) {
            unset($this->asNeeded);
            return $this;
        }
        if (!($asNeeded instanceof FHIRBoolean)) {
            $asNeeded = new FHIRBoolean(value: $asNeeded);
        }
        $this->asNeeded = $asNeeded;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whether the Medication is only taken based on a precondition for
     * taking the Medication (CodeableConcept).
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getAsNeededFor(): array
    {
        return $this->asNeededFor ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getAsNeededForIterator(): iterable
    {
        if (!isset($this->asNeededFor)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->asNeededFor);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whether the Medication is only taken based on a precondition for
     * taking the Medication (CodeableConcept).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $asNeededFor
     * @return static
     */
    public function addAsNeededFor(FHIRCodeableConcept $asNeededFor): self
    {
        if (!isset($this->asNeededFor)) {
            $this->asNeededFor = [];
        }
        $this->asNeededFor[] = $asNeededFor;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whether the Medication is only taken based on a precondition for
     * taking the Medication (CodeableConcept).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$asNeededFor
     * @return static
     */
    public function setAsNeededFor(FHIRCodeableConcept ...$asNeededFor): self
    {
        if ([] === $asNeededFor) {
            unset($this->asNeededFor);
            return $this;
        }
        $this->asNeededFor = $asNeededFor;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getSite(): null|FHIRCodeableConcept
    {
        return $this->site ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Body site to administer to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $site
     * @return static
     */
    public function setSite(null|FHIRCodeableConcept $site): self
    {
        if (null === $site) {
            unset($this->site);
            return $this;
        }
        $this->site = $site;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * How drug should enter body.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $route
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
     * Technique for administering medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
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
     * Technique for administering medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $method
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
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Depending on the resource,this is the amount of medication administered, to be
     * administered or typical amount to be administered.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage\FHIRDosageDoseAndRate>
     */
    public function getDoseAndRate(): array
    {
        return $this->doseAndRate ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage\FHIRDosageDoseAndRate>
     */
    public function getDoseAndRateIterator(): iterable
    {
        if (!isset($this->doseAndRate)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->doseAndRate);
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Depending on the resource,this is the amount of medication administered, to be
     * administered or typical amount to be administered.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage\FHIRDosageDoseAndRate $doseAndRate
     * @return static
     */
    public function addDoseAndRate(FHIRDosageDoseAndRate $doseAndRate): self
    {
        if (!isset($this->doseAndRate)) {
            $this->doseAndRate = [];
        }
        $this->doseAndRate[] = $doseAndRate;
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Depending on the resource,this is the amount of medication administered, to be
     * administered or typical amount to be administered.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage\FHIRDosageDoseAndRate ...$doseAndRate
     * @return static
     */
    public function setDoseAndRate(FHIRDosageDoseAndRate ...$doseAndRate): self
    {
        if ([] === $doseAndRate) {
            unset($this->doseAndRate);
            return $this;
        }
        $this->doseAndRate = $doseAndRate;
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
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio>
     */
    public function getMaxDosePerPeriod(): array
    {
        return $this->maxDosePerPeriod ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio>
     */
    public function getMaxDosePerPeriodIterator(): iterable
    {
        if (!isset($this->maxDosePerPeriod)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->maxDosePerPeriod);
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per unit of time.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio $maxDosePerPeriod
     * @return static
     */
    public function addMaxDosePerPeriod(FHIRRatio $maxDosePerPeriod): self
    {
        if (!isset($this->maxDosePerPeriod)) {
            $this->maxDosePerPeriod = [];
        }
        $this->maxDosePerPeriod[] = $maxDosePerPeriod;
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio ...$maxDosePerPeriod
     * @return static
     */
    public function setMaxDosePerPeriod(FHIRRatio ...$maxDosePerPeriod): self
    {
        if ([] === $maxDosePerPeriod) {
            unset($this->maxDosePerPeriod);
            return $this;
        }
        $this->maxDosePerPeriod = $maxDosePerPeriod;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getMaxDosePerAdministration(): null|FHIRQuantity
    {
        return $this->maxDosePerAdministration ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $maxDosePerAdministration
     * @return static
     */
    public function setMaxDosePerAdministration(null|FHIRQuantity $maxDosePerAdministration): self
    {
        if (null === $maxDosePerAdministration) {
            unset($this->maxDosePerAdministration);
            return $this;
        }
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getMaxDosePerLifetime(): null|FHIRQuantity
    {
        return $this->maxDosePerLifetime ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $maxDosePerLifetime
     * @return static
     */
    public function setMaxDosePerLifetime(null|FHIRQuantity $maxDosePerLifetime): self
    {
        if (null === $maxDosePerLifetime) {
            unset($this->maxDosePerLifetime);
            return $this;
        }
        $this->maxDosePerLifetime = $maxDosePerLifetime;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDosage)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEQUENCE === $cen) {
                $type->setSequence(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADDITIONAL_INSTRUCTION === $cen) {
                $type->addAdditionalInstruction(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATIENT_INSTRUCTION === $cen) {
                $type->setPatientInstruction(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMING === $cen) {
                $type->setTiming(FHIRTiming::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AS_NEEDED === $cen) {
                $type->setAsNeeded(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AS_NEEDED_FOR === $cen) {
                $type->addAsNeededFor(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SITE === $cen) {
                $type->setSite(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ROUTE === $cen) {
                $type->setRoute(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_METHOD === $cen) {
                $type->setMethod(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOSE_AND_RATE === $cen) {
                $type->addDoseAndRate(FHIRDosageDoseAndRate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_DOSE_PER_PERIOD === $cen) {
                $type->addMaxDosePerPeriod(FHIRRatio::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_DOSE_PER_ADMINISTRATION === $cen) {
                $type->setMaxDosePerAdministration(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MAX_DOSE_PER_LIFETIME === $cen) {
                $type->setMaxDosePerLifetime(FHIRQuantity::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SEQUENCE])) {
            if (isset($type->sequence)) {
                $type->sequence->setValue((string)$attributes[self::FIELD_SEQUENCE]);
            } else {
                $type->setSequence((string)$attributes[self::FIELD_SEQUENCE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SEQUENCE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TEXT])) {
            if (isset($type->text)) {
                $type->text->setValue((string)$attributes[self::FIELD_TEXT]);
            } else {
                $type->setText((string)$attributes[self::FIELD_TEXT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TEXT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PATIENT_INSTRUCTION])) {
            if (isset($type->patientInstruction)) {
                $type->patientInstruction->setValue((string)$attributes[self::FIELD_PATIENT_INSTRUCTION]);
            } else {
                $type->setPatientInstruction((string)$attributes[self::FIELD_PATIENT_INSTRUCTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PATIENT_INSTRUCTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_AS_NEEDED])) {
            if (isset($type->asNeeded)) {
                $type->asNeeded->setValue((string)$attributes[self::FIELD_AS_NEEDED]);
            } else {
                $type->setAsNeeded((string)$attributes[self::FIELD_AS_NEEDED]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_AS_NEEDED, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->sequence) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SEQUENCE]) {
            $xw->writeAttribute(self::FIELD_SEQUENCE, $this->sequence->_getValueAsString());
        }
        if (isset($this->text) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TEXT]) {
            $xw->writeAttribute(self::FIELD_TEXT, $this->text->_getValueAsString());
        }
        if (isset($this->patientInstruction) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATIENT_INSTRUCTION]) {
            $xw->writeAttribute(self::FIELD_PATIENT_INSTRUCTION, $this->patientInstruction->_getValueAsString());
        }
        if (isset($this->asNeeded) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_AS_NEEDED]) {
            $xw->writeAttribute(self::FIELD_AS_NEEDED, $this->asNeeded->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->sequence)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SEQUENCE]
                || $this->sequence->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SEQUENCE);
            $this->sequence->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SEQUENCE]);
            $xw->endElement();
        }
        if (isset($this->text)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TEXT]
                || $this->text->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TEXT);
            $this->text->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TEXT]);
            $xw->endElement();
        }
        if (isset($this->additionalInstruction)) {
            foreach ($this->additionalInstruction as $v) {
                $xw->startElement(self::FIELD_ADDITIONAL_INSTRUCTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->patientInstruction)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PATIENT_INSTRUCTION]
                || $this->patientInstruction->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PATIENT_INSTRUCTION);
            $this->patientInstruction->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PATIENT_INSTRUCTION]);
            $xw->endElement();
        }
        if (isset($this->timing)) {
            $xw->startElement(self::FIELD_TIMING);
            $this->timing->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->asNeeded)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_AS_NEEDED]
                || $this->asNeeded->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_AS_NEEDED);
            $this->asNeeded->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_AS_NEEDED]);
            $xw->endElement();
        }
        if (isset($this->asNeededFor)) {
            foreach ($this->asNeededFor as $v) {
                $xw->startElement(self::FIELD_AS_NEEDED_FOR);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->site)) {
            $xw->startElement(self::FIELD_SITE);
            $this->site->xmlSerialize($xw, $config);
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
        if (isset($this->doseAndRate)) {
            foreach ($this->doseAndRate as $v) {
                $xw->startElement(self::FIELD_DOSE_AND_RATE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->maxDosePerPeriod)) {
            foreach ($this->maxDosePerPeriod as $v) {
                $xw->startElement(self::FIELD_MAX_DOSE_PER_PERIOD);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->maxDosePerAdministration)) {
            $xw->startElement(self::FIELD_MAX_DOSE_PER_ADMINISTRATION);
            $this->maxDosePerAdministration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxDosePerLifetime)) {
            $xw->startElement(self::FIELD_MAX_DOSE_PER_LIFETIME);
            $this->maxDosePerLifetime->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDosage)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->sequence)
            || isset($decoded->_sequence)
            || property_exists($decoded, self::FIELD_SEQUENCE)
            || property_exists($decoded, self::FIELD_SEQUENCE_EXT)) {
            $v = $decoded->_sequence ?? new \stdClass();
            $v->value = $decoded->sequence ?? null;
            $type->setSequence(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->text)
            || isset($decoded->_text)
            || property_exists($decoded, self::FIELD_TEXT)
            || property_exists($decoded, self::FIELD_TEXT_EXT)) {
            $v = $decoded->_text ?? new \stdClass();
            $v->value = $decoded->text ?? null;
            $type->setText(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->additionalInstruction) || property_exists($decoded, self::FIELD_ADDITIONAL_INSTRUCTION)) {
            if (is_object($decoded->additionalInstruction)) {
                $vals = [$decoded->additionalInstruction];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ADDITIONAL_INSTRUCTION, true);
            } else {
                $vals = $decoded->additionalInstruction;
            }
            foreach($vals as $v) {
                $type->addAdditionalInstruction(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->patientInstruction)
            || isset($decoded->_patientInstruction)
            || property_exists($decoded, self::FIELD_PATIENT_INSTRUCTION)
            || property_exists($decoded, self::FIELD_PATIENT_INSTRUCTION_EXT)) {
            $v = $decoded->_patientInstruction ?? new \stdClass();
            $v->value = $decoded->patientInstruction ?? null;
            $type->setPatientInstruction(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->timing) || property_exists($decoded, self::FIELD_TIMING)) {
            if (is_array($decoded->timing)) {
                $type->setTiming(FHIRTiming::jsonUnserialize(reset($decoded->timing), $config));
            } else {
                $type->setTiming(FHIRTiming::jsonUnserialize($decoded->timing, $config));
            }
        }
        if (isset($decoded->asNeeded)
            || isset($decoded->_asNeeded)
            || property_exists($decoded, self::FIELD_AS_NEEDED)
            || property_exists($decoded, self::FIELD_AS_NEEDED_EXT)) {
            $v = $decoded->_asNeeded ?? new \stdClass();
            $v->value = $decoded->asNeeded ?? null;
            $type->setAsNeeded(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($decoded->asNeededFor) || property_exists($decoded, self::FIELD_AS_NEEDED_FOR)) {
            if (is_object($decoded->asNeededFor)) {
                $vals = [$decoded->asNeededFor];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_AS_NEEDED_FOR, true);
            } else {
                $vals = $decoded->asNeededFor;
            }
            foreach($vals as $v) {
                $type->addAsNeededFor(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->site) || property_exists($decoded, self::FIELD_SITE)) {
            if (is_array($decoded->site)) {
                $type->setSite(FHIRCodeableConcept::jsonUnserialize(reset($decoded->site), $config));
            } else {
                $type->setSite(FHIRCodeableConcept::jsonUnserialize($decoded->site, $config));
            }
        }
        if (isset($decoded->route) || property_exists($decoded, self::FIELD_ROUTE)) {
            if (is_array($decoded->route)) {
                $type->setRoute(FHIRCodeableConcept::jsonUnserialize(reset($decoded->route), $config));
            } else {
                $type->setRoute(FHIRCodeableConcept::jsonUnserialize($decoded->route, $config));
            }
        }
        if (isset($decoded->method) || property_exists($decoded, self::FIELD_METHOD)) {
            if (is_array($decoded->method)) {
                $type->setMethod(FHIRCodeableConcept::jsonUnserialize(reset($decoded->method), $config));
            } else {
                $type->setMethod(FHIRCodeableConcept::jsonUnserialize($decoded->method, $config));
            }
        }
        if (isset($decoded->doseAndRate) || property_exists($decoded, self::FIELD_DOSE_AND_RATE)) {
            if (is_object($decoded->doseAndRate)) {
                $vals = [$decoded->doseAndRate];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DOSE_AND_RATE, true);
            } else {
                $vals = $decoded->doseAndRate;
            }
            foreach($vals as $v) {
                $type->addDoseAndRate(FHIRDosageDoseAndRate::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->maxDosePerPeriod) || property_exists($decoded, self::FIELD_MAX_DOSE_PER_PERIOD)) {
            if (is_object($decoded->maxDosePerPeriod)) {
                $vals = [$decoded->maxDosePerPeriod];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MAX_DOSE_PER_PERIOD, true);
            } else {
                $vals = $decoded->maxDosePerPeriod;
            }
            foreach($vals as $v) {
                $type->addMaxDosePerPeriod(FHIRRatio::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->maxDosePerAdministration) || property_exists($decoded, self::FIELD_MAX_DOSE_PER_ADMINISTRATION)) {
            if (is_array($decoded->maxDosePerAdministration)) {
                $type->setMaxDosePerAdministration(FHIRQuantity::jsonUnserialize(reset($decoded->maxDosePerAdministration), $config));
            } else {
                $type->setMaxDosePerAdministration(FHIRQuantity::jsonUnserialize($decoded->maxDosePerAdministration, $config));
            }
        }
        if (isset($decoded->maxDosePerLifetime) || property_exists($decoded, self::FIELD_MAX_DOSE_PER_LIFETIME)) {
            if (is_array($decoded->maxDosePerLifetime)) {
                $type->setMaxDosePerLifetime(FHIRQuantity::jsonUnserialize(reset($decoded->maxDosePerLifetime), $config));
            } else {
                $type->setMaxDosePerLifetime(FHIRQuantity::jsonUnserialize($decoded->maxDosePerLifetime, $config));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->sequence)) {
            if (null !== ($val = $this->sequence->getValue())) {
                $out->sequence = $val;
            }
            if ($this->sequence->_nonValueFieldDefined()) {
                $ext = $this->sequence->jsonSerialize();
                unset($ext->value);
                $out->_sequence = $ext;
            }
        }
        if (isset($this->text)) {
            if (null !== ($val = $this->text->getValue())) {
                $out->text = $val;
            }
            if ($this->text->_nonValueFieldDefined()) {
                $ext = $this->text->jsonSerialize();
                unset($ext->value);
                $out->_text = $ext;
            }
        }
        if (isset($this->additionalInstruction) && [] !== $this->additionalInstruction) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ADDITIONAL_INSTRUCTION) && 1 === count($this->additionalInstruction)) {
                $out->additionalInstruction = $this->additionalInstruction[0];
            } else {
                $out->additionalInstruction = $this->additionalInstruction;
            }
        }
        if (isset($this->patientInstruction)) {
            if (null !== ($val = $this->patientInstruction->getValue())) {
                $out->patientInstruction = $val;
            }
            if ($this->patientInstruction->_nonValueFieldDefined()) {
                $ext = $this->patientInstruction->jsonSerialize();
                unset($ext->value);
                $out->_patientInstruction = $ext;
            }
        }
        if (isset($this->timing)) {
            $out->timing = $this->timing;
        }
        if (isset($this->asNeeded)) {
            if (null !== ($val = $this->asNeeded->getValue())) {
                $out->asNeeded = $val;
            }
            if ($this->asNeeded->_nonValueFieldDefined()) {
                $ext = $this->asNeeded->jsonSerialize();
                unset($ext->value);
                $out->_asNeeded = $ext;
            }
        }
        if (isset($this->asNeededFor) && [] !== $this->asNeededFor) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_AS_NEEDED_FOR) && 1 === count($this->asNeededFor)) {
                $out->asNeededFor = $this->asNeededFor[0];
            } else {
                $out->asNeededFor = $this->asNeededFor;
            }
        }
        if (isset($this->site)) {
            $out->site = $this->site;
        }
        if (isset($this->route)) {
            $out->route = $this->route;
        }
        if (isset($this->method)) {
            $out->method = $this->method;
        }
        if (isset($this->doseAndRate) && [] !== $this->doseAndRate) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DOSE_AND_RATE) && 1 === count($this->doseAndRate)) {
                $out->doseAndRate = $this->doseAndRate[0];
            } else {
                $out->doseAndRate = $this->doseAndRate;
            }
        }
        if (isset($this->maxDosePerPeriod) && [] !== $this->maxDosePerPeriod) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MAX_DOSE_PER_PERIOD) && 1 === count($this->maxDosePerPeriod)) {
                $out->maxDosePerPeriod = $this->maxDosePerPeriod[0];
            } else {
                $out->maxDosePerPeriod = $this->maxDosePerPeriod;
            }
        }
        if (isset($this->maxDosePerAdministration)) {
            $out->maxDosePerAdministration = $this->maxDosePerAdministration;
        }
        if (isset($this->maxDosePerLifetime)) {
            $out->maxDosePerLifetime = $this->maxDosePerLifetime;
        }
        return $out;
    }
}