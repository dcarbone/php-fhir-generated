<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRObservation;

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
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * Measurements and simple assertions made about a patient, device or other
 * subject.
 */
class FHIRObservationReferenceRange extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_OBSERVATION_DOT_REFERENCE_RANGE;

    /* class_default.php:48 */
    public const FIELD_LOW = 'low';
    public const FIELD_LOW_EXT = '_low';
    public const FIELD_HIGH = 'high';
    public const FIELD_HIGH_EXT = '_high';
    public const FIELD_MEANING = 'meaning';
    public const FIELD_AGE = 'age';
    public const FIELD_TEXT = 'text';
    public const FIELD_TEXT_EXT = '_text';

    /* class_default.php:67 */
    private static array $_validationRules = [];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_LOW => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_HIGH => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TEXT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * The value of the low bound of the reference range. The low bound of the
     * reference range endpoint is inclusive of the value (e.g. reference range is >=5
     * - <=9). If the low bound is omitted, it is assumed to be meaningless (e.g.
     * reference range is <=2.3).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity 
     */
    protected FHIRSimpleQuantity $low;
    /**
     * The value of the high bound of the reference range. The high bound of the
     * reference range endpoint is inclusive of the value (e.g. reference range is >=5
     * - <=9). If the high bound is omitted, it is assumed to be meaningless (e.g.
     * reference range is >= 2.3).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity 
     */
    protected FHIRSimpleQuantity $high;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code for the meaning of the reference range.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $meaning;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age at which this reference range is applicable. This is a neonatal age
     * (e.g. number of weeks at term) if the meaning says so.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $age;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text based reference range in an observation which may be used when a
     * quantitative range is not appropriate for an observation. An example would be a
     * reference value of "Negative" or a list or table of 'normals'.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $text;

    /* constructor.php:63 */
    /**
     * FHIRObservationReferenceRange Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $low
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $high
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $meaning
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange $age
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $text
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRDecimal|FHIRSimpleQuantity $low = null,
                                null|FHIRDecimal|FHIRSimpleQuantity $high = null,
                                null|FHIRCodeableConcept $meaning = null,
                                null|FHIRRange $age = null,
                                null|string|FHIRStringPrimitive|FHIRString $text = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $low) {
            $this->setLow($low);
        }
        if (null !== $high) {
            $this->setHigh($high);
        }
        if (null !== $meaning) {
            $this->setMeaning($meaning);
        }
        if (null !== $age) {
            $this->setAge($age);
        }
        if (null !== $text) {
            $this->setText($text);
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
     * The value of the low bound of the reference range. The low bound of the
     * reference range endpoint is inclusive of the value (e.g. reference range is >=5
     * - <=9). If the low bound is omitted, it is assumed to be meaningless (e.g.
     * reference range is <=2.3).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getLow(): null|FHIRSimpleQuantity
    {
        return $this->low ?? null;
    }

    /**
     * The value of the low bound of the reference range. The low bound of the
     * reference range endpoint is inclusive of the value (e.g. reference range is >=5
     * - <=9). If the low bound is omitted, it is assumed to be meaningless (e.g.
     * reference range is <=2.3).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $low
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLow(null|FHIRDecimal|FHIRSimpleQuantity $low,
                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $low) {
            unset($this->low);
            return $this;
        }
        if (!($low instanceof FHIRSimpleQuantity)) {
            $low = new FHIRSimpleQuantity(value: $low);
        }
        $this->low = $low;
        if ($this->_valueXMLLocations[self::FIELD_LOW] !== $valueXMLLocation) {
            $this->_setLowValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the low element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getLowValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_LOW];
    }

    /**
     * Set the location the "value" field of the low element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setLowValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_LOW] = $valueXMLLocation;
        return $this;
    }

    /**
     * The value of the high bound of the reference range. The high bound of the
     * reference range endpoint is inclusive of the value (e.g. reference range is >=5
     * - <=9). If the high bound is omitted, it is assumed to be meaningless (e.g.
     * reference range is >= 2.3).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getHigh(): null|FHIRSimpleQuantity
    {
        return $this->high ?? null;
    }

    /**
     * The value of the high bound of the reference range. The high bound of the
     * reference range endpoint is inclusive of the value (e.g. reference range is >=5
     * - <=9). If the high bound is omitted, it is assumed to be meaningless (e.g.
     * reference range is >= 2.3).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $high
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setHigh(null|FHIRDecimal|FHIRSimpleQuantity $high,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $high) {
            unset($this->high);
            return $this;
        }
        if (!($high instanceof FHIRSimpleQuantity)) {
            $high = new FHIRSimpleQuantity(value: $high);
        }
        $this->high = $high;
        if ($this->_valueXMLLocations[self::FIELD_HIGH] !== $valueXMLLocation) {
            $this->_setHighValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the high element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getHighValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_HIGH];
    }

    /**
     * Set the location the "value" field of the high element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setHighValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_HIGH] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code for the meaning of the reference range.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getMeaning(): null|FHIRCodeableConcept
    {
        return $this->meaning ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code for the meaning of the reference range.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $meaning
     * @return static
     */
    public function setMeaning(null|FHIRCodeableConcept $meaning): self
    {
        if (null === $meaning) {
            unset($this->meaning);
            return $this;
        }
        $this->meaning = $meaning;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age at which this reference range is applicable. This is a neonatal age
     * (e.g. number of weeks at term) if the meaning says so.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange
     */
    public function getAge(): null|FHIRRange
    {
        return $this->age ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age at which this reference range is applicable. This is a neonatal age
     * (e.g. number of weeks at term) if the meaning says so.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRRange $age
     * @return static
     */
    public function setAge(null|FHIRRange $age): self
    {
        if (null === $age) {
            unset($this->age);
            return $this;
        }
        $this->age = $age;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text based reference range in an observation which may be used when a
     * quantitative range is not appropriate for an observation. An example would be a
     * reference value of "Negative" or a list or table of 'normals'.
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
     * Text based reference range in an observation which may be used when a
     * quantitative range is not appropriate for an observation. An example would be a
     * reference value of "Negative" or a list or table of 'normals'.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $text
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
        if (isset($validationRules[self::FIELD_LOW])) {
            $v = $this->getLow();
            foreach($validationRules[self::FIELD_LOW] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LOW, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LOW])) {
                        $errs[self::FIELD_LOW] = [];
                    }
                    $errs[self::FIELD_LOW][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HIGH])) {
            $v = $this->getHigh();
            foreach($validationRules[self::FIELD_HIGH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_HIGH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HIGH])) {
                        $errs[self::FIELD_HIGH] = [];
                    }
                    $errs[self::FIELD_HIGH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEANING])) {
            $v = $this->getMeaning();
            foreach($validationRules[self::FIELD_MEANING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MEANING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEANING])) {
                        $errs[self::FIELD_MEANING] = [];
                    }
                    $errs[self::FIELD_MEANING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AGE])) {
            $v = $this->getAge();
            foreach($validationRules[self::FIELD_AGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGE])) {
                        $errs[self::FIELD_AGE] = [];
                    }
                    $errs[self::FIELD_AGE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRObservationReferenceRange)) {
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
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LOW === $cen) {
                $type->setLow(FHIRSimpleQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_HIGH === $cen) {
                $type->setHigh(FHIRSimpleQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEANING === $cen) {
                $type->setMeaning(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AGE === $cen) {
                $type->setAge(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRString::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LOW])) {
            if (isset($type->low)) {
                $type->low->setValue((string)$attributes[self::FIELD_LOW]);
                $type->_setLowValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLow((string)$attributes[self::FIELD_LOW], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_HIGH])) {
            if (isset($type->high)) {
                $type->high->setValue((string)$attributes[self::FIELD_HIGH]);
                $type->_setHighValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setHigh((string)$attributes[self::FIELD_HIGH], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->low) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LOW]) {
            $xw->writeAttribute(self::FIELD_LOW, $this->low->_getFormattedValue());
        }
        if (isset($this->high) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_HIGH]) {
            $xw->writeAttribute(self::FIELD_HIGH, $this->high->_getFormattedValue());
        }
        if (isset($this->text) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TEXT]) {
            $xw->writeAttribute(self::FIELD_TEXT, $this->text->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->low)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LOW]
                || $this->low->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LOW);
            $this->low->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LOW]);
            $xw->endElement();
        }
        if (isset($this->high)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_HIGH]
                || $this->high->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_HIGH);
            $this->high->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_HIGH]);
            $xw->endElement();
        }
        if (isset($this->meaning)) {
            $xw->startElement(self::FIELD_MEANING);
            $this->meaning->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->age)) {
            $xw->startElement(self::FIELD_AGE);
            $this->age->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->text)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TEXT]
                || $this->text->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TEXT);
            $this->text->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TEXT]);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRObservationReferenceRange)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_LOW])
            || isset($json[self::FIELD_LOW_EXT])
            || array_key_exists(self::FIELD_LOW, $json)
            || array_key_exists(self::FIELD_LOW_EXT, $json)) {
            $value = $json[self::FIELD_LOW] ?? null;
            $type->setLow(FHIRSimpleQuantity::jsonUnserialize(
                (is_array($value) ? $value : [FHIRSimpleQuantity::FIELD_VALUE => $value]) + ($json[self::FIELD_LOW_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_HIGH])
            || isset($json[self::FIELD_HIGH_EXT])
            || array_key_exists(self::FIELD_HIGH, $json)
            || array_key_exists(self::FIELD_HIGH_EXT, $json)) {
            $value = $json[self::FIELD_HIGH] ?? null;
            $type->setHigh(FHIRSimpleQuantity::jsonUnserialize(
                (is_array($value) ? $value : [FHIRSimpleQuantity::FIELD_VALUE => $value]) + ($json[self::FIELD_HIGH_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_MEANING]) || array_key_exists(self::FIELD_MEANING, $json)) {
            $type->setMeaning(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_MEANING], $config));
        }
        if (isset($json[self::FIELD_AGE]) || array_key_exists(self::FIELD_AGE, $json)) {
            $type->setAge(FHIRRange::jsonUnserialize($json[self::FIELD_AGE], $config));
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
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->low)) {
            if (null !== ($val = $this->low->getValue())) {
                $out->low = $val;
            }
            $ext = $this->low->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_low = $ext;
            }
        }
        if (isset($this->high)) {
            if (null !== ($val = $this->high->getValue())) {
                $out->high = $val;
            }
            $ext = $this->high->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_high = $ext;
            }
        }
        if (isset($this->meaning)) {
            $out->meaning = $this->meaning;
        }
        if (isset($this->age)) {
            $out->age = $this->age;
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