<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 6th, 2025 03:21+0000
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * An order or request for both supply of the medication and the instructions for
 * administration of the medication to a patient. The resource is called
 * "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to
 * generalize the use across inpatient and outpatient settings, including care
 * plans, etc., and to harmonize with workflow patterns.
 */
class FHIRMedicationRequestSubstitution extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_SUBSTITUTION;

    /* class_default.php:50 */
    public const FIELD_ALLOWED_BOOLEAN = 'allowedBoolean';
    public const FIELD_ALLOWED_BOOLEAN_EXT = '_allowedBoolean';
    public const FIELD_ALLOWED_CODEABLE_CONCEPT = 'allowedCodeableConcept';
    public const FIELD_REASON = 'reason';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ALLOWED_BOOLEAN => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_ALLOWED_CODEABLE_CONCEPT => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_ALLOWED_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if the prescriber allows a different drug to be dispensed from what was
     * prescribed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $allowedBoolean;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * True if the prescriber allows a different drug to be dispensed from what was
     * prescribed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $allowedCodeableConcept;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the reason for the substitution, or why substitution must or must not
     * be performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $reason;

    /* constructor.php:61 */
    /**
     * FHIRMedicationRequestSubstitution Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $allowedBoolean
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $allowedCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $reason
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $allowedBoolean = null,
                                null|FHIRCodeableConcept $allowedCodeableConcept = null,
                                null|FHIRCodeableConcept $reason = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $allowedBoolean) {
            $this->setAllowedBoolean($allowedBoolean);
        }
        if (null !== $allowedCodeableConcept) {
            $this->setAllowedCodeableConcept($allowedCodeableConcept);
        }
        if (null !== $reason) {
            $this->setReason($reason);
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if the prescriber allows a different drug to be dispensed from what was
     * prescribed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean
     */
    public function getAllowedBoolean(): null|FHIRBoolean
    {
        return $this->allowedBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * True if the prescriber allows a different drug to be dispensed from what was
     * prescribed.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $allowedBoolean
     * @return static
     */
    public function setAllowedBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $allowedBoolean): self
    {
        if (null === $allowedBoolean) {
            unset($this->allowedBoolean);
            return $this;
        }
        if (!($allowedBoolean instanceof FHIRBoolean)) {
            $allowedBoolean = new FHIRBoolean(value: $allowedBoolean);
        }
        $this->allowedBoolean = $allowedBoolean;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * True if the prescriber allows a different drug to be dispensed from what was
     * prescribed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getAllowedCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->allowedCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * True if the prescriber allows a different drug to be dispensed from what was
     * prescribed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $allowedCodeableConcept
     * @return static
     */
    public function setAllowedCodeableConcept(null|FHIRCodeableConcept $allowedCodeableConcept): self
    {
        if (null === $allowedCodeableConcept) {
            unset($this->allowedCodeableConcept);
            return $this;
        }
        $this->allowedCodeableConcept = $allowedCodeableConcept;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the reason for the substitution, or why substitution must or must not
     * be performed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getReason(): null|FHIRCodeableConcept
    {
        return $this->reason ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the reason for the substitution, or why substitution must or must not
     * be performed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $reason
     * @return static
     */
    public function setReason(null|FHIRCodeableConcept $reason): self
    {
        if (null === $reason) {
            unset($this->reason);
            return $this;
        }
        $this->reason = $reason;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationRequestSubstitution)) {
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
            } else if (self::FIELD_ALLOWED_BOOLEAN === $cen) {
                $type->setAllowedBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ALLOWED_CODEABLE_CONCEPT === $cen) {
                $type->setAllowedCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REASON === $cen) {
                $type->setReason(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ALLOWED_BOOLEAN])) {
            if (isset($type->allowedBoolean)) {
                $type->allowedBoolean->setValue((string)$attributes[self::FIELD_ALLOWED_BOOLEAN]);
            } else {
                $type->setAllowedBoolean((string)$attributes[self::FIELD_ALLOWED_BOOLEAN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ALLOWED_BOOLEAN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->allowedBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ALLOWED_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_ALLOWED_BOOLEAN, $this->allowedBoolean->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->allowedBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ALLOWED_BOOLEAN]
                || $this->allowedBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ALLOWED_BOOLEAN);
            $this->allowedBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ALLOWED_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->allowedCodeableConcept)) {
            $xw->startElement(self::FIELD_ALLOWED_CODEABLE_CONCEPT);
            $this->allowedCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reason)) {
            $xw->startElement(self::FIELD_REASON);
            $this->reason->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationRequestSubstitution)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->allowedBoolean)
            || isset($json->_allowedBoolean)
            || property_exists($json, self::FIELD_ALLOWED_BOOLEAN)
            || property_exists($json, self::FIELD_ALLOWED_BOOLEAN_EXT)) {
            $v = $json->_allowedBoolean ?? new \stdClass();
            $v->value = $json->allowedBoolean ?? null;
            $type->setAllowedBoolean(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->allowedCodeableConcept) || property_exists($json, self::FIELD_ALLOWED_CODEABLE_CONCEPT)) {
            if (is_array($json->allowedCodeableConcept)) {
                $type->setAllowedCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($json->allowedCodeableConcept), $config));
            } else {
                $type->setAllowedCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json->allowedCodeableConcept, $config));
            }
        }
        if (isset($json->reason) || property_exists($json, self::FIELD_REASON)) {
            if (is_array($json->reason)) {
                $type->setReason(FHIRCodeableConcept::jsonUnserialize(reset($json->reason), $config));
            } else {
                $type->setReason(FHIRCodeableConcept::jsonUnserialize($json->reason, $config));
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
        if (isset($this->allowedBoolean)) {
            if (null !== ($val = $this->allowedBoolean->getValue())) {
                $out->allowedBoolean = $val;
            }
            if ($this->allowedBoolean->_nonValueFieldDefined()) {
                $ext = $this->allowedBoolean->jsonSerialize();
                unset($ext->value);
                $out->_allowedBoolean = $ext;
            }
        }
        if (isset($this->allowedCodeableConcept)) {
            $out->allowedCodeableConcept = $this->allowedCodeableConcept;
        }
        if (isset($this->reason)) {
            $out->reason = $this->reason;
        }
        return $out;
    }
}