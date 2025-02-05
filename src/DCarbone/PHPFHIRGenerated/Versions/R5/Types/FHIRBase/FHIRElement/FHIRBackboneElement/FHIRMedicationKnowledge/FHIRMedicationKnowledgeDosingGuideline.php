<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 00:09+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Information about a medication that is used to support knowledge.
 */
class FHIRMedicationKnowledgeDosingGuideline extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_DOSING_GUIDELINE;

    /* class_default.php:50 */
    public const FIELD_TREATMENT_INTENT = 'treatmentIntent';
    public const FIELD_DOSAGE = 'dosage';
    public const FIELD_ADMINISTRATION_TREATMENT = 'administrationTreatment';
    public const FIELD_PATIENT_CHARACTERISTIC = 'patientCharacteristic';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
    ];

    /* class_default.php:114 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The overall intention of the treatment, for example, prophylactic, supporative,
     * curative, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $treatmentIntent;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage[] 
     */
    protected array $dosage;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the treatment that the guideline applies to, for example, long term
     * therapy, first line treatment, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $administrationTreatment;
    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristic[] 
     */
    protected array $patientCharacteristic;

    /* constructor.php:61 */
    /**
     * FHIRMedicationKnowledgeDosingGuideline Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $treatmentIntent
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage[] $dosage
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $administrationTreatment
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristic[] $patientCharacteristic
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $treatmentIntent = null,
                                null|iterable $dosage = null,
                                null|FHIRCodeableConcept $administrationTreatment = null,
                                null|iterable $patientCharacteristic = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $treatmentIntent) {
            $this->setTreatmentIntent($treatmentIntent);
        }
        if (null !== $dosage) {
            $this->setDosage(...$dosage);
        }
        if (null !== $administrationTreatment) {
            $this->setAdministrationTreatment($administrationTreatment);
        }
        if (null !== $patientCharacteristic) {
            $this->setPatientCharacteristic(...$patientCharacteristic);
        }
    }

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The overall intention of the treatment, for example, prophylactic, supporative,
     * curative, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getTreatmentIntent(): null|FHIRCodeableConcept
    {
        return $this->treatmentIntent ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The overall intention of the treatment, for example, prophylactic, supporative,
     * curative, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $treatmentIntent
     * @return static
     */
    public function setTreatmentIntent(null|FHIRCodeableConcept $treatmentIntent): self
    {
        if (null === $treatmentIntent) {
            unset($this->treatmentIntent);
            return $this;
        }
        $this->treatmentIntent = $treatmentIntent;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage[]
     */
    public function getDosage(): array
    {
        return $this->dosage ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage>
     */
    public function getDosageIterator(): iterable
    {
        if (!isset($this->dosage)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dosage);
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage $dosage
     * @return static
     */
    public function addDosage(FHIRMedicationKnowledgeDosage $dosage): self
    {
        if (!isset($this->dosage)) {
            $this->dosage = [];
        }
        $this->dosage[] = $dosage;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage ...$dosage
     * @return static
     */
    public function setDosage(FHIRMedicationKnowledgeDosage ...$dosage): self
    {
        if ([] === $dosage) {
            unset($this->dosage);
            return $this;
        }
        $this->dosage = $dosage;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the treatment that the guideline applies to, for example, long term
     * therapy, first line treatment, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getAdministrationTreatment(): null|FHIRCodeableConcept
    {
        return $this->administrationTreatment ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of the treatment that the guideline applies to, for example, long term
     * therapy, first line treatment, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $administrationTreatment
     * @return static
     */
    public function setAdministrationTreatment(null|FHIRCodeableConcept $administrationTreatment): self
    {
        if (null === $administrationTreatment) {
            unset($this->administrationTreatment);
            return $this;
        }
        $this->administrationTreatment = $administrationTreatment;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristic[]
     */
    public function getPatientCharacteristic(): array
    {
        return $this->patientCharacteristic ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristic>
     */
    public function getPatientCharacteristicIterator(): iterable
    {
        if (!isset($this->patientCharacteristic)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->patientCharacteristic);
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristic $patientCharacteristic
     * @return static
     */
    public function addPatientCharacteristic(FHIRMedicationKnowledgePatientCharacteristic $patientCharacteristic): self
    {
        if (!isset($this->patientCharacteristic)) {
            $this->patientCharacteristic = [];
        }
        $this->patientCharacteristic[] = $patientCharacteristic;
        return $this;
    }

    /**
     * Information about a medication that is used to support knowledge.
     *
     * Characteristics of the patient that are relevant to the administration
     * guidelines (for example, height, weight, gender, etc.).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristic ...$patientCharacteristic
     * @return static
     */
    public function setPatientCharacteristic(FHIRMedicationKnowledgePatientCharacteristic ...$patientCharacteristic): self
    {
        if ([] === $patientCharacteristic) {
            unset($this->patientCharacteristic);
            return $this;
        }
        $this->patientCharacteristic = $patientCharacteristic;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosingGuideline $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosingGuideline
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationKnowledgeDosingGuideline)) {
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
            } else if (self::FIELD_TREATMENT_INTENT === $cen) {
                $type->setTreatmentIntent(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOSAGE === $cen) {
                $type->addDosage(FHIRMedicationKnowledgeDosage::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADMINISTRATION_TREATMENT === $cen) {
                $type->setAdministrationTreatment(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATIENT_CHARACTERISTIC === $cen) {
                $type->addPatientCharacteristic(FHIRMedicationKnowledgePatientCharacteristic::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        parent::xmlSerialize($xw, $config);
        if (isset($this->treatmentIntent)) {
            $xw->startElement(self::FIELD_TREATMENT_INTENT);
            $this->treatmentIntent->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dosage)) {
            foreach ($this->dosage as $v) {
                $xw->startElement(self::FIELD_DOSAGE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->administrationTreatment)) {
            $xw->startElement(self::FIELD_ADMINISTRATION_TREATMENT);
            $this->administrationTreatment->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patientCharacteristic)) {
            foreach ($this->patientCharacteristic as $v) {
                $xw->startElement(self::FIELD_PATIENT_CHARACTERISTIC);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosingGuideline $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosingGuideline
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationKnowledgeDosingGuideline)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->treatmentIntent) || property_exists($json, self::FIELD_TREATMENT_INTENT)) {
            if (is_array($json->treatmentIntent)) {
                $type->setTreatmentIntent(FHIRCodeableConcept::jsonUnserialize(reset($json->treatmentIntent), $config));
            } else {
                $type->setTreatmentIntent(FHIRCodeableConcept::jsonUnserialize($json->treatmentIntent, $config));
            }
        }
        if (isset($json->dosage) || property_exists($json, self::FIELD_DOSAGE)) {
            if (is_object($json->dosage)) {
                $vals = [$json->dosage];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DOSAGE, true);
            } else {
                $vals = $json->dosage;
            }
            foreach($vals as $v) {
                $type->addDosage(FHIRMedicationKnowledgeDosage::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->administrationTreatment) || property_exists($json, self::FIELD_ADMINISTRATION_TREATMENT)) {
            if (is_array($json->administrationTreatment)) {
                $type->setAdministrationTreatment(FHIRCodeableConcept::jsonUnserialize(reset($json->administrationTreatment), $config));
            } else {
                $type->setAdministrationTreatment(FHIRCodeableConcept::jsonUnserialize($json->administrationTreatment, $config));
            }
        }
        if (isset($json->patientCharacteristic) || property_exists($json, self::FIELD_PATIENT_CHARACTERISTIC)) {
            if (is_object($json->patientCharacteristic)) {
                $vals = [$json->patientCharacteristic];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_PATIENT_CHARACTERISTIC, true);
            } else {
                $vals = $json->patientCharacteristic;
            }
            foreach($vals as $v) {
                $type->addPatientCharacteristic(FHIRMedicationKnowledgePatientCharacteristic::jsonUnserialize($v, $config));
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
        if (isset($this->treatmentIntent)) {
            $out->treatmentIntent = $this->treatmentIntent;
        }
        if (isset($this->dosage) && [] !== $this->dosage) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DOSAGE) && 1 === count($this->dosage)) {
                $out->dosage = $this->dosage[0];
            } else {
                $out->dosage = $this->dosage;
            }
        }
        if (isset($this->administrationTreatment)) {
            $out->administrationTreatment = $this->administrationTreatment;
        }
        if (isset($this->patientCharacteristic) && [] !== $this->patientCharacteristic) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_PATIENT_CHARACTERISTIC) && 1 === count($this->patientCharacteristic)) {
                $out->patientCharacteristic = $this->patientCharacteristic[0];
            } else {
                $out->patientCharacteristic = $this->patientCharacteristic;
            }
        }
        return $out;
    }
}