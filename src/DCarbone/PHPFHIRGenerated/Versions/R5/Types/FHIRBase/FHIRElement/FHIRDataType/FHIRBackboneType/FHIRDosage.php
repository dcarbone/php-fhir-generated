<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 02:55+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Indicates how the medication is/was taken or should be taken by the patient.
 * If the element is present, it must have a value for at least one of the defined
 * elements, an \@id referenced from the Narrative, or extensions
 */
class FHIRDosage extends FHIRBackboneType
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DOSAGE;

    /* class_default.php:48 */
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

    /* class_default.php:67 */
    private static array $_validationRules = [];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_SEQUENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TEXT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PATIENT_INSTRUCTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_AS_NEEDED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
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
    protected FHIRCodeableConcept $method;
    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Depending on the resource,this is the amount of medication administered, to be
     * administered or typical amount to be administered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage\FHIRDosageDoseAndRate[] 
     */
    protected array $doseAndRate;
    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Upper limit on medication per unit of time.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio[] 
     */
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
    protected FHIRQuantity $maxDosePerLifetime;

    /* constructor.php:63 */
    /**
     * FHIRDosage Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $sequence
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $additionalInstruction
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $patientInstruction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRTiming $timing
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBoolean $asNeeded
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $asNeededFor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $site
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $route
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $method
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage\FHIRDosageDoseAndRate[] $doseAndRate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio[] $maxDosePerPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $maxDosePerAdministration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $maxDosePerLifetime
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $sequence = null,
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

    /* class_default.php:137 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:163 */
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger $sequence
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSequence(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $sequence,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $sequence) {
            unset($this->sequence);
            return $this;
        }
        if (!($sequence instanceof FHIRInteger)) {
            $sequence = new FHIRInteger(value: $sequence);
        }
        $this->sequence = $sequence;
        if ($this->_valueXMLLocations[self::FIELD_SEQUENCE] !== $valueXMLLocation) {
            $this->_setSequenceValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the sequence element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getSequenceValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_SEQUENCE];
    }

    /**
     * Set the location the "value" field of the sequence element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setSequenceValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_SEQUENCE] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setText(null|string|FHIRStringPrimitive|FHIRString $text,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $text) {
            unset($this->text);
            return $this;
        }
        if (!($text instanceof FHIRString)) {
            $text = new FHIRString(value: $text);
        }
        $this->text = $text;
        if ($this->_valueXMLLocations[self::FIELD_TEXT] !== $valueXMLLocation) {
            $this->_setTextValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the text element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTextValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TEXT];
    }

    /**
     * Set the location the "value" field of the text element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTextValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TEXT] = $valueXMLLocation;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPatientInstruction(null|string|FHIRStringPrimitive|FHIRString $patientInstruction,
                                          ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $patientInstruction) {
            unset($this->patientInstruction);
            return $this;
        }
        if (!($patientInstruction instanceof FHIRString)) {
            $patientInstruction = new FHIRString(value: $patientInstruction);
        }
        $this->patientInstruction = $patientInstruction;
        if ($this->_valueXMLLocations[self::FIELD_PATIENT_INSTRUCTION] !== $valueXMLLocation) {
            $this->_setPatientInstructionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the patientInstruction element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPatientInstructionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PATIENT_INSTRUCTION];
    }

    /**
     * Set the location the "value" field of the patientInstruction element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPatientInstructionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PATIENT_INSTRUCTION] = $valueXMLLocation;
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
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAsNeeded(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $asNeeded,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $asNeeded) {
            unset($this->asNeeded);
            return $this;
        }
        if (!($asNeeded instanceof FHIRBoolean)) {
            $asNeeded = new FHIRBoolean(value: $asNeeded);
        }
        $this->asNeeded = $asNeeded;
        if ($this->_valueXMLLocations[self::FIELD_AS_NEEDED] !== $valueXMLLocation) {
            $this->_setAsNeededValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the asNeeded element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAsNeededValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_AS_NEEDED];
    }

    /**
     * Set the location the "value" field of the asNeeded element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAsNeededValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_AS_NEEDED] = $valueXMLLocation;
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage\FHIRDosageDoseAndRate[]
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRRatio[]
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

    /* class_default.php:189 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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
        if (isset($validationRules[self::FIELD_SEQUENCE])) {
            $v = $this->getSequence();
            foreach($validationRules[self::FIELD_SEQUENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SEQUENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SEQUENCE])) {
                        $errs[self::FIELD_SEQUENCE] = [];
                    }
                    $errs[self::FIELD_SEQUENCE][$rule] = $err;
                }
            }
        }
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
        if (isset($validationRules[self::FIELD_ADDITIONAL_INSTRUCTION])) {
            $v = $this->getAdditionalInstruction();
            foreach($validationRules[self::FIELD_ADDITIONAL_INSTRUCTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADDITIONAL_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDITIONAL_INSTRUCTION])) {
                        $errs[self::FIELD_ADDITIONAL_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_ADDITIONAL_INSTRUCTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT_INSTRUCTION])) {
            $v = $this->getPatientInstruction();
            foreach($validationRules[self::FIELD_PATIENT_INSTRUCTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATIENT_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT_INSTRUCTION])) {
                        $errs[self::FIELD_PATIENT_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_PATIENT_INSTRUCTION][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_AS_NEEDED])) {
            $v = $this->getAsNeeded();
            foreach($validationRules[self::FIELD_AS_NEEDED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AS_NEEDED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AS_NEEDED])) {
                        $errs[self::FIELD_AS_NEEDED] = [];
                    }
                    $errs[self::FIELD_AS_NEEDED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AS_NEEDED_FOR])) {
            $v = $this->getAsNeededFor();
            foreach($validationRules[self::FIELD_AS_NEEDED_FOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AS_NEEDED_FOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AS_NEEDED_FOR])) {
                        $errs[self::FIELD_AS_NEEDED_FOR] = [];
                    }
                    $errs[self::FIELD_AS_NEEDED_FOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SITE])) {
            $v = $this->getSite();
            foreach($validationRules[self::FIELD_SITE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SITE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SITE])) {
                        $errs[self::FIELD_SITE] = [];
                    }
                    $errs[self::FIELD_SITE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_DOSE_AND_RATE])) {
            $v = $this->getDoseAndRate();
            foreach($validationRules[self::FIELD_DOSE_AND_RATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DOSE_AND_RATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSE_AND_RATE])) {
                        $errs[self::FIELD_DOSE_AND_RATE] = [];
                    }
                    $errs[self::FIELD_DOSE_AND_RATE][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_MAX_DOSE_PER_ADMINISTRATION])) {
            $v = $this->getMaxDosePerAdministration();
            foreach($validationRules[self::FIELD_MAX_DOSE_PER_ADMINISTRATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_DOSE_PER_ADMINISTRATION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_DOSE_PER_LIFETIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_DOSE_PER_LIFETIME])) {
                        $errs[self::FIELD_MAX_DOSE_PER_LIFETIME] = [];
                    }
                    $errs[self::FIELD_MAX_DOSE_PER_LIFETIME][$rule] = $err;
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

    /* class_default.php:213 */
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
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
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SEQUENCE])) {
            if (isset($type->sequence)) {
                $type->sequence->setValue((string)$attributes[self::FIELD_SEQUENCE]);
                $type->_setSequenceValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setSequence((string)$attributes[self::FIELD_SEQUENCE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_TEXT])) {
            if (isset($type->text)) {
                $type->text->setValue((string)$attributes[self::FIELD_TEXT]);
                $type->_setTextValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setText((string)$attributes[self::FIELD_TEXT], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PATIENT_INSTRUCTION])) {
            if (isset($type->patientInstruction)) {
                $type->patientInstruction->setValue((string)$attributes[self::FIELD_PATIENT_INSTRUCTION]);
                $type->_setPatientInstructionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPatientInstruction((string)$attributes[self::FIELD_PATIENT_INSTRUCTION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_AS_NEEDED])) {
            if (isset($type->asNeeded)) {
                $type->asNeeded->setValue((string)$attributes[self::FIELD_AS_NEEDED]);
                $type->_setAsNeededValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAsNeeded((string)$attributes[self::FIELD_AS_NEEDED], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
            $xw->writeAttribute(self::FIELD_SEQUENCE, $this->sequence->_getFormattedValue());
        }
        if (isset($this->text) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TEXT]) {
            $xw->writeAttribute(self::FIELD_TEXT, $this->text->_getFormattedValue());
        }
        if (isset($this->patientInstruction) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PATIENT_INSTRUCTION]) {
            $xw->writeAttribute(self::FIELD_PATIENT_INSTRUCTION, $this->patientInstruction->_getFormattedValue());
        }
        if (isset($this->asNeeded) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_AS_NEEDED]) {
            $xw->writeAttribute(self::FIELD_AS_NEEDED, $this->asNeeded->_getFormattedValue());
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
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRDosage
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_SEQUENCE])
            || isset($json[self::FIELD_SEQUENCE_EXT])
            || array_key_exists(self::FIELD_SEQUENCE, $json)
            || array_key_exists(self::FIELD_SEQUENCE_EXT, $json)) {
            $value = $json[self::FIELD_SEQUENCE] ?? null;
            $type->setSequence(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_SEQUENCE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TEXT])
            || isset($json[self::FIELD_TEXT_EXT])
            || array_key_exists(self::FIELD_TEXT, $json)
            || array_key_exists(self::FIELD_TEXT_EXT, $json)) {
            $value = $json[self::FIELD_TEXT] ?? null;
            $type->setText(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_TEXT_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ADDITIONAL_INSTRUCTION]) || array_key_exists(self::FIELD_ADDITIONAL_INSTRUCTION, $json)) {
            $vs = $json[self::FIELD_ADDITIONAL_INSTRUCTION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addAdditionalInstruction(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_PATIENT_INSTRUCTION])
            || isset($json[self::FIELD_PATIENT_INSTRUCTION_EXT])
            || array_key_exists(self::FIELD_PATIENT_INSTRUCTION, $json)
            || array_key_exists(self::FIELD_PATIENT_INSTRUCTION_EXT, $json)) {
            $value = $json[self::FIELD_PATIENT_INSTRUCTION] ?? null;
            $type->setPatientInstruction(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_PATIENT_INSTRUCTION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_TIMING]) || array_key_exists(self::FIELD_TIMING, $json)) {
            $type->setTiming(FHIRTiming::jsonUnserialize($json[self::FIELD_TIMING], $config));
        }
        if (isset($json[self::FIELD_AS_NEEDED])
            || isset($json[self::FIELD_AS_NEEDED_EXT])
            || array_key_exists(self::FIELD_AS_NEEDED, $json)
            || array_key_exists(self::FIELD_AS_NEEDED_EXT, $json)) {
            $value = $json[self::FIELD_AS_NEEDED] ?? null;
            $type->setAsNeeded(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_AS_NEEDED_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_AS_NEEDED_FOR]) || array_key_exists(self::FIELD_AS_NEEDED_FOR, $json)) {
            $vs = $json[self::FIELD_AS_NEEDED_FOR];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addAsNeededFor(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_SITE]) || array_key_exists(self::FIELD_SITE, $json)) {
            $type->setSite(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_SITE], $config));
        }
        if (isset($json[self::FIELD_ROUTE]) || array_key_exists(self::FIELD_ROUTE, $json)) {
            $type->setRoute(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_ROUTE], $config));
        }
        if (isset($json[self::FIELD_METHOD]) || array_key_exists(self::FIELD_METHOD, $json)) {
            $type->setMethod(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_METHOD], $config));
        }
        if (isset($json[self::FIELD_DOSE_AND_RATE]) || array_key_exists(self::FIELD_DOSE_AND_RATE, $json)) {
            $vs = $json[self::FIELD_DOSE_AND_RATE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addDoseAndRate(FHIRDosageDoseAndRate::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_MAX_DOSE_PER_PERIOD]) || array_key_exists(self::FIELD_MAX_DOSE_PER_PERIOD, $json)) {
            $vs = $json[self::FIELD_MAX_DOSE_PER_PERIOD];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addMaxDosePerPeriod(FHIRRatio::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_MAX_DOSE_PER_ADMINISTRATION]) || array_key_exists(self::FIELD_MAX_DOSE_PER_ADMINISTRATION, $json)) {
            $type->setMaxDosePerAdministration(FHIRQuantity::jsonUnserialize($json[self::FIELD_MAX_DOSE_PER_ADMINISTRATION], $config));
        }
        if (isset($json[self::FIELD_MAX_DOSE_PER_LIFETIME]) || array_key_exists(self::FIELD_MAX_DOSE_PER_LIFETIME, $json)) {
            $type->setMaxDosePerLifetime(FHIRQuantity::jsonUnserialize($json[self::FIELD_MAX_DOSE_PER_LIFETIME], $config));
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
            $ext = $this->sequence->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_sequence = $ext;
            }
        }
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
        if (isset($this->additionalInstruction) && [] !== $this->additionalInstruction) {
            $out->additionalInstruction = $this->additionalInstruction;
        }
        if (isset($this->patientInstruction)) {
            if (null !== ($val = $this->patientInstruction->getValue())) {
                $out->patientInstruction = $val;
            }
            $ext = $this->patientInstruction->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
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
            $ext = $this->asNeeded->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_asNeeded = $ext;
            }
        }
        if (isset($this->asNeededFor) && [] !== $this->asNeededFor) {
            $out->asNeededFor = $this->asNeededFor;
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
            $out->doseAndRate = $this->doseAndRate;
        }
        if (isset($this->maxDosePerPeriod) && [] !== $this->maxDosePerPeriod) {
            $out->maxDosePerPeriod = $this->maxDosePerPeriod;
        }
        if (isset($this->maxDosePerAdministration)) {
            $out->maxDosePerAdministration = $this->maxDosePerAdministration;
        }
        if (isset($this->maxDosePerLifetime)) {
            $out->maxDosePerLifetime = $this->maxDosePerLifetime;
        }
        return $out;
    }
    /* class_default.php:238 */
    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}