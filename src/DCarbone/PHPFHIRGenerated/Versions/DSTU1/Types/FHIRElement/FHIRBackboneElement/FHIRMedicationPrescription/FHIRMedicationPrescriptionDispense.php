<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 04:06+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * An order for both supply of the medication and the instructions for
 * administration of the medicine to a patient.
 */
class FHIRMedicationPrescriptionDispense extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICATION_PRESCRIPTION_DOT_DISPENSE;

    /* class_default.php:50 */
    public const FIELD_MEDICATION = 'medication';
    public const FIELD_VALIDITY_PERIOD = 'validityPeriod';
    public const FIELD_NUMBER_OF_REPEATS_ALLOWED = 'numberOfRepeatsAllowed';
    public const FIELD_NUMBER_OF_REPEATS_ALLOWED_EXT = '_numberOfRepeatsAllowed';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_EXPECTED_SUPPLY_DURATION = 'expectedSupplyDuration';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_NUMBER_OF_REPEATS_ALLOWED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication that is to be dispensed. This may be a more
     * specifically defined than the medicationPrescription.medication . This is either
     * a link to a resource representing the details of the medication or a simple
     * attribute carrying a code that identifies the medication from a known list of
     * medications.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $medication;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Design Comments: This indicates the validity period of a prescription (stale
     * dating the Prescription) It reflects the prescriber perspective for the validity
     * of the prescription. Dispenses must not be made against the prescription outside
     * of this period. The lower-bound of the Dispensing Window signifies the earliest
     * date that the prescription can be filled for the first time. If an upper-bound
     * is not specified then the Prescription is open-ended or will default to a
     * stale-date based on regulations. Rationale: Indicates when the Prescription
     * becomes valid, and when it ceases to be a dispensable Prescription.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $validityPeriod;
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An integer indicating the number of repeats of the Dispense. UsageNotes: For
     * example, the number of times the prescribed quantity is to be supplied including
     * the initial standard fill.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $numberOfRepeatsAllowed;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount that is to be dispensed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $quantity;
    /**
     * Identifies the period time over which the supplied product is expected to be
     * used, or the length of time the dispense is expected to last. In some
     * situations, this attribute may be used instead of quantity to identify the
     * amount supplied by how long it is expected to last, rather than the physical
     * quantity issued, e.g. 90 days supply of medication (based on an ordered dosage)
     * When possible, it is always better to specify quantity, as this tends to be more
     * precise. expectedSupplyDuration will always be an estimate that can be
     * influenced by external factors.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $expectedSupplyDuration;

    /* constructor.php:61 */
    /**
     * FHIRMedicationPrescriptionDispense Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $medication
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod $validityPeriod
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $numberOfRepeatsAllowed
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity $quantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRDuration $expectedSupplyDuration
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRResourceReference $medication = null,
                                null|FHIRPeriod $validityPeriod = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $numberOfRepeatsAllowed = null,
                                null|FHIRQuantity $quantity = null,
                                null|FHIRDuration $expectedSupplyDuration = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $medication) {
            $this->setMedication($medication);
        }
        if (null !== $validityPeriod) {
            $this->setValidityPeriod($validityPeriod);
        }
        if (null !== $numberOfRepeatsAllowed) {
            $this->setNumberOfRepeatsAllowed($numberOfRepeatsAllowed);
        }
        if (null !== $quantity) {
            $this->setQuantity($quantity);
        }
        if (null !== $expectedSupplyDuration) {
            $this->setExpectedSupplyDuration($expectedSupplyDuration);
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication that is to be dispensed. This may be a more
     * specifically defined than the medicationPrescription.medication . This is either
     * a link to a resource representing the details of the medication or a simple
     * attribute carrying a code that identifies the medication from a known list of
     * medications.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getMedication(): null|FHIRResourceReference
    {
        return $this->medication ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication that is to be dispensed. This may be a more
     * specifically defined than the medicationPrescription.medication . This is either
     * a link to a resource representing the details of the medication or a simple
     * attribute carrying a code that identifies the medication from a known list of
     * medications.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $medication
     * @return static
     */
    public function setMedication(null|FHIRResourceReference $medication): self
    {
        if (null === $medication) {
            unset($this->medication);
            return $this;
        }
        $this->medication = $medication;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Design Comments: This indicates the validity period of a prescription (stale
     * dating the Prescription) It reflects the prescriber perspective for the validity
     * of the prescription. Dispenses must not be made against the prescription outside
     * of this period. The lower-bound of the Dispensing Window signifies the earliest
     * date that the prescription can be filled for the first time. If an upper-bound
     * is not specified then the Prescription is open-ended or will default to a
     * stale-date based on regulations. Rationale: Indicates when the Prescription
     * becomes valid, and when it ceases to be a dispensable Prescription.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod
     */
    public function getValidityPeriod(): null|FHIRPeriod
    {
        return $this->validityPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Design Comments: This indicates the validity period of a prescription (stale
     * dating the Prescription) It reflects the prescriber perspective for the validity
     * of the prescription. Dispenses must not be made against the prescription outside
     * of this period. The lower-bound of the Dispensing Window signifies the earliest
     * date that the prescription can be filled for the first time. If an upper-bound
     * is not specified then the Prescription is open-ended or will default to a
     * stale-date based on regulations. Rationale: Indicates when the Prescription
     * becomes valid, and when it ceases to be a dispensable Prescription.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod $validityPeriod
     * @return static
     */
    public function setValidityPeriod(null|FHIRPeriod $validityPeriod): self
    {
        if (null === $validityPeriod) {
            unset($this->validityPeriod);
            return $this;
        }
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An integer indicating the number of repeats of the Dispense. UsageNotes: For
     * example, the number of times the prescribed quantity is to be supplied including
     * the initial standard fill.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getNumberOfRepeatsAllowed(): null|FHIRInteger
    {
        return $this->numberOfRepeatsAllowed ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An integer indicating the number of repeats of the Dispense. UsageNotes: For
     * example, the number of times the prescribed quantity is to be supplied including
     * the initial standard fill.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $numberOfRepeatsAllowed
     * @return static
     */
    public function setNumberOfRepeatsAllowed(null|string|float|FHIRIntegerPrimitive|FHIRInteger $numberOfRepeatsAllowed): self
    {
        if (null === $numberOfRepeatsAllowed) {
            unset($this->numberOfRepeatsAllowed);
            return $this;
        }
        if (!($numberOfRepeatsAllowed instanceof FHIRInteger)) {
            $numberOfRepeatsAllowed = new FHIRInteger(value: $numberOfRepeatsAllowed);
        }
        $this->numberOfRepeatsAllowed = $numberOfRepeatsAllowed;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount that is to be dispensed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity
     */
    public function getQuantity(): null|FHIRQuantity
    {
        return $this->quantity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The amount that is to be dispensed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity $quantity
     * @return static
     */
    public function setQuantity(null|FHIRQuantity $quantity): self
    {
        if (null === $quantity) {
            unset($this->quantity);
            return $this;
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Identifies the period time over which the supplied product is expected to be
     * used, or the length of time the dispense is expected to last. In some
     * situations, this attribute may be used instead of quantity to identify the
     * amount supplied by how long it is expected to last, rather than the physical
     * quantity issued, e.g. 90 days supply of medication (based on an ordered dosage)
     * When possible, it is always better to specify quantity, as this tends to be more
     * precise. expectedSupplyDuration will always be an estimate that can be
     * influenced by external factors.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getExpectedSupplyDuration(): null|FHIRDuration
    {
        return $this->expectedSupplyDuration ?? null;
    }

    /**
     * Identifies the period time over which the supplied product is expected to be
     * used, or the length of time the dispense is expected to last. In some
     * situations, this attribute may be used instead of quantity to identify the
     * amount supplied by how long it is expected to last, rather than the physical
     * quantity issued, e.g. 90 days supply of medication (based on an ordered dosage)
     * When possible, it is always better to specify quantity, as this tends to be more
     * precise. expectedSupplyDuration will always be an estimate that can be
     * influenced by external factors.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRDuration $expectedSupplyDuration
     * @return static
     */
    public function setExpectedSupplyDuration(null|FHIRDuration $expectedSupplyDuration): self
    {
        if (null === $expectedSupplyDuration) {
            unset($this->expectedSupplyDuration);
            return $this;
        }
        $this->expectedSupplyDuration = $expectedSupplyDuration;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationPrescriptionDispense)) {
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEDICATION === $cen) {
                $type->setMedication(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALIDITY_PERIOD === $cen) {
                $type->setValidityPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NUMBER_OF_REPEATS_ALLOWED === $cen) {
                $type->setNumberOfRepeatsAllowed(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_QUANTITY === $cen) {
                $type->setQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXPECTED_SUPPLY_DURATION === $cen) {
                $type->setExpectedSupplyDuration(FHIRDuration::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_NUMBER_OF_REPEATS_ALLOWED])) {
            if (isset($type->numberOfRepeatsAllowed)) {
                $type->numberOfRepeatsAllowed->setValue((string)$attributes[self::FIELD_NUMBER_OF_REPEATS_ALLOWED]);
            } else {
                $type->setNumberOfRepeatsAllowed((string)$attributes[self::FIELD_NUMBER_OF_REPEATS_ALLOWED]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_NUMBER_OF_REPEATS_ALLOWED, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
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
            $xw->openRootNode('MedicationPrescriptionDispense', $this->_getSourceXMLNS());
        }
        if (isset($this->numberOfRepeatsAllowed) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NUMBER_OF_REPEATS_ALLOWED]) {
            $xw->writeAttribute(self::FIELD_NUMBER_OF_REPEATS_ALLOWED, $this->numberOfRepeatsAllowed->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->medication)) {
            $xw->startElement(self::FIELD_MEDICATION);
            $this->medication->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->validityPeriod)) {
            $xw->startElement(self::FIELD_VALIDITY_PERIOD);
            $this->validityPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->numberOfRepeatsAllowed)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NUMBER_OF_REPEATS_ALLOWED]
                || $this->numberOfRepeatsAllowed->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NUMBER_OF_REPEATS_ALLOWED);
            $this->numberOfRepeatsAllowed->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NUMBER_OF_REPEATS_ALLOWED]);
            $xw->endElement();
        }
        if (isset($this->quantity)) {
            $xw->startElement(self::FIELD_QUANTITY);
            $this->quantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->expectedSupplyDuration)) {
            $xw->startElement(self::FIELD_EXPECTED_SUPPLY_DURATION);
            $this->expectedSupplyDuration->xmlSerialize($xw, $config);
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
     * @param string|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationPrescriptionDispense)) {
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
            $json = json_decode(json: $json, associative: false, depth: $config->getJSONDecodeMaxDepth());
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->medication) || property_exists($json, self::FIELD_MEDICATION)) {
            if (is_array($json->medication)) {
                $type->setMedication(FHIRResourceReference::jsonUnserialize(reset($json->medication), $config));
            } else {
                $type->setMedication(FHIRResourceReference::jsonUnserialize($json->medication, $config));
            }
        }
        if (isset($json->validityPeriod) || property_exists($json, self::FIELD_VALIDITY_PERIOD)) {
            if (is_array($json->validityPeriod)) {
                $type->setValidityPeriod(FHIRPeriod::jsonUnserialize(reset($json->validityPeriod), $config));
            } else {
                $type->setValidityPeriod(FHIRPeriod::jsonUnserialize($json->validityPeriod, $config));
            }
        }
        if (isset($json->numberOfRepeatsAllowed)
            || isset($json->_numberOfRepeatsAllowed)
            || property_exists($json, self::FIELD_NUMBER_OF_REPEATS_ALLOWED)
            || property_exists($json, self::FIELD_NUMBER_OF_REPEATS_ALLOWED_EXT)) {
            $v = $json->_numberOfRepeatsAllowed ?? new \stdClass();
            $v->value = $json->numberOfRepeatsAllowed ?? null;
            $type->setNumberOfRepeatsAllowed(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($json->quantity) || property_exists($json, self::FIELD_QUANTITY)) {
            if (is_array($json->quantity)) {
                $type->setQuantity(FHIRQuantity::jsonUnserialize(reset($json->quantity), $config));
            } else {
                $type->setQuantity(FHIRQuantity::jsonUnserialize($json->quantity, $config));
            }
        }
        if (isset($json->expectedSupplyDuration) || property_exists($json, self::FIELD_EXPECTED_SUPPLY_DURATION)) {
            if (is_array($json->expectedSupplyDuration)) {
                $type->setExpectedSupplyDuration(FHIRDuration::jsonUnserialize(reset($json->expectedSupplyDuration), $config));
            } else {
                $type->setExpectedSupplyDuration(FHIRDuration::jsonUnserialize($json->expectedSupplyDuration, $config));
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
        if (isset($this->medication)) {
            $out->medication = $this->medication;
        }
        if (isset($this->validityPeriod)) {
            $out->validityPeriod = $this->validityPeriod;
        }
        if (isset($this->numberOfRepeatsAllowed)) {
            if (null !== ($val = $this->numberOfRepeatsAllowed->getValue())) {
                $out->numberOfRepeatsAllowed = $val;
            }
            if ($this->numberOfRepeatsAllowed->_nonValueFieldDefined()) {
                $ext = $this->numberOfRepeatsAllowed->jsonSerialize();
                unset($ext->value);
                $out->_numberOfRepeatsAllowed = $ext;
            }
        }
        if (isset($this->quantity)) {
            $out->quantity = $this->quantity;
        }
        if (isset($this->expectedSupplyDuration)) {
            $out->expectedSupplyDuration = $this->expectedSupplyDuration;
        }
        return $out;
    }
}