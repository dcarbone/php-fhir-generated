<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 8th, 2019 00:59+0000
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
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * An order or request for both supply of the medication and the instructions for
 * administration of the medication to a patient. The resource is called
 * "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to
 * generalize the use across inpatient and outpatient settings, including care
 * plans, etc., and to harmonize with workflow patterns.
 *
 * Class FHIRMedicationRequestSubstitution
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest
 */
class FHIRMedicationRequestSubstitution extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_SUBSTITUTION;

    const FIELD_ALLOWED_BOOLEAN = 'allowedBoolean';
    const FIELD_ALLOWED_BOOLEAN_EXT = '_allowedBoolean';
    const FIELD_ALLOWED_CODEABLE_CONCEPT = 'allowedCodeableConcept';
    const FIELD_REASON = 'reason';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * True if the prescriber allows a different drug to be dispensed from what was
     * prescribed. (choose any one of allowed*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $allowedBoolean = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * True if the prescriber allows a different drug to be dispensed from what was
     * prescribed. (choose any one of allowed*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $allowedCodeableConcept = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the reason for the substitution, or why substitution must or must not
     * be performed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $reason = null;

    /**
     * FHIRMedicationRequestSubstitution Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationRequestSubstitution::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ALLOWED_BOOLEAN])) {
            $ext = (isset($data[self::FIELD_ALLOWED_BOOLEAN_EXT]) && is_array($data[self::FIELD_ALLOWED_BOOLEAN_EXT]))
                ? $data[self::FIELD_ALLOWED_BOOLEAN_EXT]
                : null;
            if ($data[self::FIELD_ALLOWED_BOOLEAN] instanceof FHIRBoolean) {
                $this->setAllowedBoolean($data[self::FIELD_ALLOWED_BOOLEAN]);
            } elseif ($ext && is_scalar($data[self::FIELD_ALLOWED_BOOLEAN])) {
                $this->setAllowedBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_ALLOWED_BOOLEAN]] + $ext));
            } else {
                $this->setAllowedBoolean(new FHIRBoolean($data[self::FIELD_ALLOWED_BOOLEAN]));
            }
        }
        if (isset($data[self::FIELD_ALLOWED_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_ALLOWED_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setAllowedCodeableConcept($data[self::FIELD_ALLOWED_CODEABLE_CONCEPT]);
            } else {
                $this->setAllowedCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_ALLOWED_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_REASON])) {
            if ($data[self::FIELD_REASON] instanceof FHIRCodeableConcept) {
                $this->setReason($data[self::FIELD_REASON]);
            } else {
                $this->setReason(new FHIRCodeableConcept($data[self::FIELD_REASON]));
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
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * True if the prescriber allows a different drug to be dispensed from what was
     * prescribed. (choose any one of allowed*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAllowedBoolean()
    {
        return $this->allowedBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * True if the prescriber allows a different drug to be dispensed from what was
     * prescribed. (choose any one of allowed*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean $allowedBoolean
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution
     */
    public function setAllowedBoolean($allowedBoolean = null)
    {
        if (null === $allowedBoolean) {
            $this->allowedBoolean = null;
            return $this;
        }
        if ($allowedBoolean instanceof FHIRBoolean) {
            $this->allowedBoolean = $allowedBoolean;
            return $this;
        }
        $this->allowedBoolean = new FHIRBoolean($allowedBoolean);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * True if the prescriber allows a different drug to be dispensed from what was
     * prescribed. (choose any one of allowed*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAllowedCodeableConcept()
    {
        return $this->allowedCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * True if the prescriber allows a different drug to be dispensed from what was
     * prescribed. (choose any one of allowed*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $allowedCodeableConcept
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution
     */
    public function setAllowedCodeableConcept(FHIRCodeableConcept $allowedCodeableConcept = null)
    {
        $this->allowedCodeableConcept = $allowedCodeableConcept;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the reason for the substitution, or why substitution must or must not
     * be performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates the reason for the substitution, or why substitution must or must not
     * be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reason
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution
     */
    public function setReason(FHIRCodeableConcept $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution
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
                throw new \DomainException(sprintf('FHIRMedicationRequestSubstitution::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicationRequestSubstitution::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRMedicationRequestSubstitution);
        } elseif (!is_object($type) || !($type instanceof FHIRMedicationRequestSubstitution)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicationRequestSubstitution::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->allowedBoolean)) {
            $type->setAllowedBoolean((string)$attributes->allowedBoolean);
        }
        if (isset($children->allowedBoolean)) {
            $type->setAllowedBoolean(FHIRBoolean::xmlUnserialize($children->allowedBoolean));
        }
        if (isset($children->allowedCodeableConcept)) {
            $type->setAllowedCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->allowedCodeableConcept));
        }
        if (isset($children->reason)) {
            $type->setReason(FHIRCodeableConcept::xmlUnserialize($children->reason));
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
            $sxe = new \SimpleXMLElement('<MedicationRequestSubstitution xmlns="http://hl7.org/fhir"></MedicationRequestSubstitution>');
        }
        if (null !== ($v = $this->getAllowedBoolean())) {
            $sxe->addAttribute(self::FIELD_ALLOWED_BOOLEAN, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ALLOWED_BOOLEAN));
            }
        }
        if (null !== ($v = $this->getAllowedCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ALLOWED_CODEABLE_CONCEPT));
        }
        if (null !== ($v = $this->getReason())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REASON));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAllowedBoolean())) {
            $a[self::FIELD_ALLOWED_BOOLEAN] = (string)$v;
            $a[self::FIELD_ALLOWED_BOOLEAN_EXT] = $v;
        }
        if (null !== ($v = $this->getAllowedCodeableConcept())) {
            $a[self::FIELD_ALLOWED_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getReason())) {
            $a[self::FIELD_REASON] = $v;
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