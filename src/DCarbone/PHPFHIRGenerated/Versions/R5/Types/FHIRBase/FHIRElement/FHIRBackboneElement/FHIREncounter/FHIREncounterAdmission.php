<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter;

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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * An interaction between a patient and healthcare provider(s) for the purpose of
 * providing healthcare service(s) or assessing the health status of a patient.
 * Encounter is primarily used to record information about the actual activities
 * that occurred, where Appointment is used to record planned activities.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIREncounterAdmission extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ENCOUNTER_DOT_ADMISSION;

    /* class_default.php:56 */
    public const FIELD_PRE_ADMISSION_IDENTIFIER = 'preAdmissionIdentifier';
    public const FIELD_ORIGIN = 'origin';
    public const FIELD_ADMIT_SOURCE = 'admitSource';
    public const FIELD_RE_ADMISSION = 'reAdmission';
    public const FIELD_DESTINATION = 'destination';
    public const FIELD_DISCHARGE_DISPOSITION = 'dischargeDisposition';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
    ];

    /* class_default.php:112 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pre-admission identifier.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier 
     */
    #[FHIRIdentifier]
    protected FHIRIdentifier $preAdmissionIdentifier;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location/organization from which the patient came before admission.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $origin;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * From where patient was admitted (physician referral, transfer).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $admitSource;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates that this encounter is directly related to a prior admission, often
     * because the conditions addressed in the prior admission were not fully
     * addressed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $reAdmission;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Location/organization to which the patient is discharged.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $destination;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category or kind of location after discharge.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    #[FHIRCodeableConcept]
    protected FHIRCodeableConcept $dischargeDisposition;

    /* constructor.php:61 */
    /**
     * FHIREncounterAdmission Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $preAdmissionIdentifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $origin
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $admitSource
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $reAdmission
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $destination
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $dischargeDisposition
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRIdentifier $preAdmissionIdentifier = null,
                                null|FHIRReference $origin = null,
                                null|FHIRCodeableConcept $admitSource = null,
                                null|FHIRCodeableConcept $reAdmission = null,
                                null|FHIRReference $destination = null,
                                null|FHIRCodeableConcept $dischargeDisposition = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $preAdmissionIdentifier) {
            $this->setPreAdmissionIdentifier($preAdmissionIdentifier);
        }
        if (null !== $origin) {
            $this->setOrigin($origin);
        }
        if (null !== $admitSource) {
            $this->setAdmitSource($admitSource);
        }
        if (null !== $reAdmission) {
            $this->setReAdmission($reAdmission);
        }
        if (null !== $destination) {
            $this->setDestination($destination);
        }
        if (null !== $dischargeDisposition) {
            $this->setDischargeDisposition($dischargeDisposition);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pre-admission identifier.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier
     */
    public function getPreAdmissionIdentifier(): null|FHIRIdentifier
    {
        return $this->preAdmissionIdentifier ?? null;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Pre-admission identifier.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $preAdmissionIdentifier
     * @return static
     */
    public function setPreAdmissionIdentifier(null|FHIRIdentifier $preAdmissionIdentifier): self
    {
        if (null === $preAdmissionIdentifier) {
            unset($this->preAdmissionIdentifier);
            return $this;
        }
        $this->preAdmissionIdentifier = $preAdmissionIdentifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location/organization from which the patient came before admission.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getOrigin(): null|FHIRReference
    {
        return $this->origin ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The location/organization from which the patient came before admission.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $origin
     * @return static
     */
    public function setOrigin(null|FHIRReference $origin): self
    {
        if (null === $origin) {
            unset($this->origin);
            return $this;
        }
        $this->origin = $origin;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * From where patient was admitted (physician referral, transfer).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getAdmitSource(): null|FHIRCodeableConcept
    {
        return $this->admitSource ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * From where patient was admitted (physician referral, transfer).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $admitSource
     * @return static
     */
    public function setAdmitSource(null|FHIRCodeableConcept $admitSource): self
    {
        if (null === $admitSource) {
            unset($this->admitSource);
            return $this;
        }
        $this->admitSource = $admitSource;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates that this encounter is directly related to a prior admission, often
     * because the conditions addressed in the prior admission were not fully
     * addressed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getReAdmission(): null|FHIRCodeableConcept
    {
        return $this->reAdmission ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates that this encounter is directly related to a prior admission, often
     * because the conditions addressed in the prior admission were not fully
     * addressed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $reAdmission
     * @return static
     */
    public function setReAdmission(null|FHIRCodeableConcept $reAdmission): self
    {
        if (null === $reAdmission) {
            unset($this->reAdmission);
            return $this;
        }
        $this->reAdmission = $reAdmission;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Location/organization to which the patient is discharged.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getDestination(): null|FHIRReference
    {
        return $this->destination ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Location/organization to which the patient is discharged.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $destination
     * @return static
     */
    public function setDestination(null|FHIRReference $destination): self
    {
        if (null === $destination) {
            unset($this->destination);
            return $this;
        }
        $this->destination = $destination;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category or kind of location after discharge.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getDischargeDisposition(): null|FHIRCodeableConcept
    {
        return $this->dischargeDisposition ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category or kind of location after discharge.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $dischargeDisposition
     * @return static
     */
    public function setDischargeDisposition(null|FHIRCodeableConcept $dischargeDisposition): self
    {
        if (null === $dischargeDisposition) {
            unset($this->dischargeDisposition);
            return $this;
        }
        $this->dischargeDisposition = $dischargeDisposition;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAdmission $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAdmission
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIREncounterAdmission)) {
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
            } else if (self::FIELD_PRE_ADMISSION_IDENTIFIER === $cen) {
                $type->setPreAdmissionIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORIGIN === $cen) {
                $type->setOrigin(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADMIT_SOURCE === $cen) {
                $type->setAdmitSource(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RE_ADMISSION === $cen) {
                $type->setReAdmission(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESTINATION === $cen) {
                $type->setDestination(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DISCHARGE_DISPOSITION === $cen) {
                $type->setDischargeDisposition(FHIRCodeableConcept::xmlUnserialize($ce, $config));
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
        if (isset($this->preAdmissionIdentifier)) {
            $xw->startElement(self::FIELD_PRE_ADMISSION_IDENTIFIER);
            $this->preAdmissionIdentifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->origin)) {
            $xw->startElement(self::FIELD_ORIGIN);
            $this->origin->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->admitSource)) {
            $xw->startElement(self::FIELD_ADMIT_SOURCE);
            $this->admitSource->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reAdmission)) {
            $xw->startElement(self::FIELD_RE_ADMISSION);
            $this->reAdmission->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->destination)) {
            $xw->startElement(self::FIELD_DESTINATION);
            $this->destination->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dischargeDisposition)) {
            $xw->startElement(self::FIELD_DISCHARGE_DISPOSITION);
            $this->dischargeDisposition->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAdmission $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAdmission
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIREncounterAdmission)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->preAdmissionIdentifier) || property_exists($decoded, self::FIELD_PRE_ADMISSION_IDENTIFIER)) {
            if (is_array($decoded->preAdmissionIdentifier)) {
                $type->setPreAdmissionIdentifier(FHIRIdentifier::jsonUnserialize(reset($decoded->preAdmissionIdentifier), $config));
            } else {
                $type->setPreAdmissionIdentifier(FHIRIdentifier::jsonUnserialize($decoded->preAdmissionIdentifier, $config));
            }
        }
        if (isset($decoded->origin) || property_exists($decoded, self::FIELD_ORIGIN)) {
            if (is_array($decoded->origin)) {
                $type->setOrigin(FHIRReference::jsonUnserialize(reset($decoded->origin), $config));
            } else {
                $type->setOrigin(FHIRReference::jsonUnserialize($decoded->origin, $config));
            }
        }
        if (isset($decoded->admitSource) || property_exists($decoded, self::FIELD_ADMIT_SOURCE)) {
            if (is_array($decoded->admitSource)) {
                $type->setAdmitSource(FHIRCodeableConcept::jsonUnserialize(reset($decoded->admitSource), $config));
            } else {
                $type->setAdmitSource(FHIRCodeableConcept::jsonUnserialize($decoded->admitSource, $config));
            }
        }
        if (isset($decoded->reAdmission) || property_exists($decoded, self::FIELD_RE_ADMISSION)) {
            if (is_array($decoded->reAdmission)) {
                $type->setReAdmission(FHIRCodeableConcept::jsonUnserialize(reset($decoded->reAdmission), $config));
            } else {
                $type->setReAdmission(FHIRCodeableConcept::jsonUnserialize($decoded->reAdmission, $config));
            }
        }
        if (isset($decoded->destination) || property_exists($decoded, self::FIELD_DESTINATION)) {
            if (is_array($decoded->destination)) {
                $type->setDestination(FHIRReference::jsonUnserialize(reset($decoded->destination), $config));
            } else {
                $type->setDestination(FHIRReference::jsonUnserialize($decoded->destination, $config));
            }
        }
        if (isset($decoded->dischargeDisposition) || property_exists($decoded, self::FIELD_DISCHARGE_DISPOSITION)) {
            if (is_array($decoded->dischargeDisposition)) {
                $type->setDischargeDisposition(FHIRCodeableConcept::jsonUnserialize(reset($decoded->dischargeDisposition), $config));
            } else {
                $type->setDischargeDisposition(FHIRCodeableConcept::jsonUnserialize($decoded->dischargeDisposition, $config));
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
        if (isset($this->preAdmissionIdentifier)) {
            $out->preAdmissionIdentifier = $this->preAdmissionIdentifier;
        }
        if (isset($this->origin)) {
            $out->origin = $this->origin;
        }
        if (isset($this->admitSource)) {
            $out->admitSource = $this->admitSource;
        }
        if (isset($this->reAdmission)) {
            $out->reAdmission = $this->reAdmission;
        }
        if (isset($this->destination)) {
            $out->destination = $this->destination;
        }
        if (isset($this->dischargeDisposition)) {
            $out->dischargeDisposition = $this->dischargeDisposition;
        }
        return $out;
    }
}