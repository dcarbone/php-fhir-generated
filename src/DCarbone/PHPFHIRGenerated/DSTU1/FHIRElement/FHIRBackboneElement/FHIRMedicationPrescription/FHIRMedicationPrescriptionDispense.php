<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:03+0000
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * An order for both supply of the medication and the instructions for
 * administration of the medicine to a patient.
 *
 * Class FHIRMedicationPrescriptionDispense
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription
 */
class FHIRMedicationPrescriptionDispense extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION_DOT_DISPENSE;

    const FIELD_EXPECTED_SUPPLY_DURATION = 'expectedSupplyDuration';
    const FIELD_MEDICATION = 'medication';
    const FIELD_NUMBER_OF_REPEATS_ALLOWED = 'numberOfRepeatsAllowed';
    const FIELD_NUMBER_OF_REPEATS_ALLOWED_EXT = '_numberOfRepeatsAllowed';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_VALIDITY_PERIOD = 'validityPeriod';

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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRDuration
     */
    private $expectedSupplyDuration = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the medication that is to be dispensed. This may be a more
     * specifically defined than the medicationPrescription.medication . This is either
     * a link to a resource representing the details of the medication or a simple
     * attribute carrying a code that identifies the medication from a known list of
     * medications.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $medication = null;
    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An integer indicating the number of repeats of the Dispense. UsageNotes: For
     * example, the number of times the prescribed quantity is to be supplied including
     * the initial standard fill.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    private $numberOfRepeatsAllowed = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The amount that is to be dispensed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity
     */
    private $quantity = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    private $validityPeriod = null;

    /**
     * FHIRMedicationPrescriptionDispense Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationPrescriptionDispense::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_EXPECTED_SUPPLY_DURATION])) {
            if ($data[self::FIELD_EXPECTED_SUPPLY_DURATION] instanceof FHIRDuration) {
                $this->setExpectedSupplyDuration($data[self::FIELD_EXPECTED_SUPPLY_DURATION]);
            } else {
                $this->setExpectedSupplyDuration(new FHIRDuration($data[self::FIELD_EXPECTED_SUPPLY_DURATION]));
            }
        }
        if (isset($data[self::FIELD_MEDICATION])) {
            if ($data[self::FIELD_MEDICATION] instanceof FHIRResourceReference) {
                $this->setMedication($data[self::FIELD_MEDICATION]);
            } else {
                $this->setMedication(new FHIRResourceReference($data[self::FIELD_MEDICATION]));
            }
        }
        if (isset($data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED])) {
            $ext = (isset($data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED_EXT]) && is_array($data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED_EXT]))
                ? $data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED_EXT]
                : null;
            if ($data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED] instanceof FHIRInteger) {
                $this->setNumberOfRepeatsAllowed($data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED]);
            } elseif ($ext && is_scalar($data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED])) {
                $this->setNumberOfRepeatsAllowed(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED]] + $ext));
            } else {
                $this->setNumberOfRepeatsAllowed(new FHIRInteger($data[self::FIELD_NUMBER_OF_REPEATS_ALLOWED]));
            }
        }
        if (isset($data[self::FIELD_QUANTITY])) {
            if ($data[self::FIELD_QUANTITY] instanceof FHIRQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } else {
                $this->setQuantity(new FHIRQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_VALIDITY_PERIOD])) {
            if ($data[self::FIELD_VALIDITY_PERIOD] instanceof FHIRPeriod) {
                $this->setValidityPeriod($data[self::FIELD_VALIDITY_PERIOD]);
            } else {
                $this->setValidityPeriod(new FHIRPeriod($data[self::FIELD_VALIDITY_PERIOD]));
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
     * Identifies the period time over which the supplied product is expected to be
     * used, or the length of time the dispense is expected to last. In some
     * situations, this attribute may be used instead of quantity to identify the
     * amount supplied by how long it is expected to last, rather than the physical
     * quantity issued, e.g. 90 days supply of medication (based on an ordered dosage)
     * When possible, it is always better to specify quantity, as this tends to be more
     * precise. expectedSupplyDuration will always be an estimate that can be
     * influenced by external factors.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getExpectedSupplyDuration()
    {
        return $this->expectedSupplyDuration;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRDuration $expectedSupplyDuration
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense
     */
    public function setExpectedSupplyDuration(FHIRDuration $expectedSupplyDuration = null)
    {
        $this->expectedSupplyDuration = $expectedSupplyDuration;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the medication that is to be dispensed. This may be a more
     * specifically defined than the medicationPrescription.medication . This is either
     * a link to a resource representing the details of the medication or a simple
     * attribute carrying a code that identifies the medication from a known list of
     * medications.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getMedication()
    {
        return $this->medication;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the medication that is to be dispensed. This may be a more
     * specifically defined than the medicationPrescription.medication . This is either
     * a link to a resource representing the details of the medication or a simple
     * attribute carrying a code that identifies the medication from a known list of
     * medications.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $medication
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense
     */
    public function setMedication(FHIRResourceReference $medication = null)
    {
        $this->medication = $medication;
        return $this;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An integer indicating the number of repeats of the Dispense. UsageNotes: For
     * example, the number of times the prescribed quantity is to be supplied including
     * the initial standard fill.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger
     */
    public function getNumberOfRepeatsAllowed()
    {
        return $this->numberOfRepeatsAllowed;
    }

    /**
     * A whole number
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * An integer indicating the number of repeats of the Dispense. UsageNotes: For
     * example, the number of times the prescribed quantity is to be supplied including
     * the initial standard fill.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger $numberOfRepeatsAllowed
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense
     */
    public function setNumberOfRepeatsAllowed($numberOfRepeatsAllowed = null)
    {
        if (null === $numberOfRepeatsAllowed) {
            $this->numberOfRepeatsAllowed = null;
            return $this;
        }
        if ($numberOfRepeatsAllowed instanceof FHIRInteger) {
            $this->numberOfRepeatsAllowed = $numberOfRepeatsAllowed;
            return $this;
        }
        $this->numberOfRepeatsAllowed = new FHIRInteger($numberOfRepeatsAllowed);
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The amount that is to be dispensed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The amount that is to be dispensed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity $quantity
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense
     */
    public function setQuantity(FHIRQuantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $validityPeriod
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense
     */
    public function setValidityPeriod(FHIRPeriod $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRMedicationPrescriptionDispense::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicationPrescriptionDispense::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRMedicationPrescriptionDispense);
        } elseif (!is_object($type) || !($type instanceof FHIRMedicationPrescriptionDispense)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicationPrescriptionDispense::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->expectedSupplyDuration)) {
            $type->setExpectedSupplyDuration(FHIRDuration::xmlUnserialize($children->expectedSupplyDuration));
        }
        if (isset($children->medication)) {
            $type->setMedication(FHIRResourceReference::xmlUnserialize($children->medication));
        }
        if (isset($attributes->numberOfRepeatsAllowed)) {
            $type->setNumberOfRepeatsAllowed((string)$attributes->numberOfRepeatsAllowed);
        }
        if (isset($children->numberOfRepeatsAllowed)) {
            $type->setNumberOfRepeatsAllowed(FHIRInteger::xmlUnserialize($children->numberOfRepeatsAllowed));
        }
        if (isset($children->quantity)) {
            $type->setQuantity(FHIRQuantity::xmlUnserialize($children->quantity));
        }
        if (isset($children->validityPeriod)) {
            $type->setValidityPeriod(FHIRPeriod::xmlUnserialize($children->validityPeriod));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<MedicationPrescriptionDispense xmlns="http://hl7.org/fhir"></MedicationPrescriptionDispense>');
        }
        parent::xmlSerialize($sxe);

        if (null !== ($v = $this->getExpectedSupplyDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPECTED_SUPPLY_DURATION));
        }

        if (null !== ($v = $this->getMedication())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MEDICATION));
        }
        if (null !== ($v = $this->getNumberOfRepeatsAllowed())) {
            $sxe->addAttribute(self::FIELD_NUMBER_OF_REPEATS_ALLOWED, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_NUMBER_OF_REPEATS_ALLOWED));
            }
        }

        if (null !== ($v = $this->getQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITY));
        }

        if (null !== ($v = $this->getValidityPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALIDITY_PERIOD));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getExpectedSupplyDuration())) {
            $a[self::FIELD_EXPECTED_SUPPLY_DURATION] = $v;
        }
        if (null !== ($v = $this->getMedication())) {
            $a[self::FIELD_MEDICATION] = $v;
        }
        if (null !== ($v = $this->getNumberOfRepeatsAllowed())) {
            $a[self::FIELD_NUMBER_OF_REPEATS_ALLOWED] = (string)$v;
            $a[self::FIELD_NUMBER_OF_REPEATS_ALLOWED_EXT] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a[self::FIELD_QUANTITY] = $v;
        }
        if (null !== ($v = $this->getValidityPeriod())) {
            $a[self::FIELD_VALIDITY_PERIOD] = $v;
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