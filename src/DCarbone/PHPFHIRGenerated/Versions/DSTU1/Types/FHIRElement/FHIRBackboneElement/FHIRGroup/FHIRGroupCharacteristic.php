<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRGroup;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 17:37+0000
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * Represents a defined collection of entities that may be discussed or acted upon
 * collectively but which are not expected to act collectively and are not formally
 * or legally recognized. I.e. A collection of entities that isn't an Organization.
 */
class FHIRGroupCharacteristic extends FHIRBackboneElement
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_GROUP_DOT_CHARACTERISTIC;

    /* class_default.php:47 */
    public const FIELD_CODE = 'code';
    public const FIELD_VALUE_CODEABLE_CONCEPT = 'valueCodeableConcept';
    public const FIELD_VALUE_BOOLEAN = 'valueBoolean';
    public const FIELD_VALUE_BOOLEAN_EXT = '_valueBoolean';
    public const FIELD_VALUE_QUANTITY = 'valueQuantity';
    public const FIELD_VALUE_RANGE = 'valueRange';
    public const FIELD_EXCLUDE = 'exclude';
    public const FIELD_EXCLUDE_EXT = '_exclude';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_CODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_VALUE_CODEABLE_CONCEPT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_VALUE_BOOLEAN => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_VALUE_QUANTITY => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_VALUE_RANGE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_EXCLUDE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_VALUE_BOOLEAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EXCLUDE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that identifies the kind of trait being asserted.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members
     * of the group.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $valueCodeableConcept;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members
     * of the group.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $valueBoolean;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members
     * of the group.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $valueQuantity;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members
     * of the group.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $valueRange;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates the characteristic is one that is NOT held by members of the
     * group.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $exclude;

    /* constructor.php:62 */
    /**
     * FHIRGroupCharacteristic Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $code
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $valueBoolean
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity $valueQuantity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange $valueRange
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $exclude
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $code = null,
                                null|FHIRCodeableConcept $valueCodeableConcept = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $valueBoolean = null,
                                null|FHIRQuantity $valueQuantity = null,
                                null|FHIRRange $valueRange = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exclude = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $valueCodeableConcept) {
            $this->setValueCodeableConcept($valueCodeableConcept);
        }
        if (null !== $valueBoolean) {
            $this->setValueBoolean($valueBoolean);
        }
        if (null !== $valueQuantity) {
            $this->setValueQuantity($valueQuantity);
        }
        if (null !== $valueRange) {
            $this->setValueRange($valueRange);
        }
        if (null !== $exclude) {
            $this->setExclude($exclude);
        }
    }

    /* class_default.php:143 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:169 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that identifies the kind of trait being asserted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getCode(): null|FHIRCodeableConcept
    {
        return $this->code ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that identifies the kind of trait being asserted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(null|FHIRCodeableConcept $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members
     * of the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->valueCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members
     * of the group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     * @return static
     */
    public function setValueCodeableConcept(null|FHIRCodeableConcept $valueCodeableConcept): self
    {
        if (null === $valueCodeableConcept) {
            unset($this->valueCodeableConcept);
            return $this;
        }
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members
     * of the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean(): null|FHIRBoolean
    {
        return $this->valueBoolean ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members
     * of the group.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $valueBoolean
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setValueBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $valueBoolean,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $valueBoolean) {
            unset($this->valueBoolean);
            return $this;
        }
        if (!($valueBoolean instanceof FHIRBoolean)) {
            $valueBoolean = new FHIRBoolean(value: $valueBoolean);
        }
        $this->valueBoolean = $valueBoolean;
        if ($this->_valueXMLLocations[self::FIELD_VALUE_BOOLEAN] !== $valueXMLLocation) {
            $this->_setValueBooleanValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the valueBoolean element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getValueBooleanValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_VALUE_BOOLEAN];
    }

    /**
     * Set the location the "value" field of the valueBoolean element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setValueBooleanValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_VALUE_BOOLEAN] = $valueXMLLocation;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members
     * of the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity(): null|FHIRQuantity
    {
        return $this->valueQuantity ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members
     * of the group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity $valueQuantity
     * @return static
     */
    public function setValueQuantity(null|FHIRQuantity $valueQuantity): self
    {
        if (null === $valueQuantity) {
            unset($this->valueQuantity);
            return $this;
        }
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members
     * of the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange
     */
    public function getValueRange(): null|FHIRRange
    {
        return $this->valueRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The value of the trait that holds (or does not hold - see 'exclude') for members
     * of the group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange $valueRange
     * @return static
     */
    public function setValueRange(null|FHIRRange $valueRange): self
    {
        if (null === $valueRange) {
            unset($this->valueRange);
            return $this;
        }
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates the characteristic is one that is NOT held by members of the
     * group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean
     */
    public function getExclude(): null|FHIRBoolean
    {
        return $this->exclude ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates the characteristic is one that is NOT held by members of the
     * group.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean $exclude
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setExclude(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $exclude,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $exclude) {
            unset($this->exclude);
            return $this;
        }
        if (!($exclude instanceof FHIRBoolean)) {
            $exclude = new FHIRBoolean(value: $exclude);
        }
        $this->exclude = $exclude;
        if ($this->_valueXMLLocations[self::FIELD_EXCLUDE] !== $valueXMLLocation) {
            $this->_setExcludeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the exclude element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getExcludeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EXCLUDE];
    }

    /**
     * Set the location the "value" field of the exclude element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setExcludeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EXCLUDE] = $valueXMLLocation;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRGroupCharacteristic)) {
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_CODEABLE_CONCEPT === $cen) {
                $type->setValueCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_BOOLEAN === $cen) {
                $type->setValueBoolean(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_QUANTITY === $cen) {
                $type->setValueQuantity(FHIRQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALUE_RANGE === $cen) {
                $type->setValueRange(FHIRRange::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXCLUDE === $cen) {
                $type->setExclude(FHIRBoolean::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_VALUE_BOOLEAN])) {
            if (isset($type->valueBoolean)) {
                $type->valueBoolean->setValue((string)$attributes[self::FIELD_VALUE_BOOLEAN]);
                $type->_setValueBooleanValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setValueBoolean((string)$attributes[self::FIELD_VALUE_BOOLEAN], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_EXCLUDE])) {
            if (isset($type->exclude)) {
                $type->exclude->setValue((string)$attributes[self::FIELD_EXCLUDE]);
                $type->_setExcludeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setExclude((string)$attributes[self::FIELD_EXCLUDE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
            $xw->openRootNode('GroupCharacteristic', $this->_getSourceXMLNS());
        }
        if (isset($this->valueBoolean) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_VALUE_BOOLEAN]) {
            $xw->writeAttribute(self::FIELD_VALUE_BOOLEAN, $this->valueBoolean->_getFormattedValue());
        }
        if (isset($this->exclude) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EXCLUDE]) {
            $xw->writeAttribute(self::FIELD_EXCLUDE, $this->exclude->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueCodeableConcept)) {
            $xw->startElement(self::FIELD_VALUE_CODEABLE_CONCEPT);
            $this->valueCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueBoolean)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_VALUE_BOOLEAN]
                || $this->valueBoolean->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_VALUE_BOOLEAN);
            $this->valueBoolean->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_VALUE_BOOLEAN]);
            $xw->endElement();
        }
        if (isset($this->valueQuantity)) {
            $xw->startElement(self::FIELD_VALUE_QUANTITY);
            $this->valueQuantity->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->valueRange)) {
            $xw->startElement(self::FIELD_VALUE_RANGE);
            $this->valueRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->exclude)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EXCLUDE]
                || $this->exclude->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EXCLUDE);
            $this->exclude->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EXCLUDE]);
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
     * @param string|\stdClass|array $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRGroupCharacteristic)) {
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            $type->setCode(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CODE], $config));
        }
        if (isset($json[self::FIELD_VALUE_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_VALUE_CODEABLE_CONCEPT, $json)) {
            $type->setValueCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_VALUE_CODEABLE_CONCEPT], $config));
        }
        if (isset($json[self::FIELD_VALUE_BOOLEAN])
            || isset($json[self::FIELD_VALUE_BOOLEAN_EXT])
            || array_key_exists(self::FIELD_VALUE_BOOLEAN, $json)
            || array_key_exists(self::FIELD_VALUE_BOOLEAN_EXT, $json)) {
            $value = $json[self::FIELD_VALUE_BOOLEAN] ?? null;
            $type->setValueBoolean(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_VALUE_BOOLEAN_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALUE_QUANTITY]) || array_key_exists(self::FIELD_VALUE_QUANTITY, $json)) {
            $type->setValueQuantity(FHIRQuantity::jsonUnserialize($json[self::FIELD_VALUE_QUANTITY], $config));
        }
        if (isset($json[self::FIELD_VALUE_RANGE]) || array_key_exists(self::FIELD_VALUE_RANGE, $json)) {
            $type->setValueRange(FHIRRange::jsonUnserialize($json[self::FIELD_VALUE_RANGE], $config));
        }
        if (isset($json[self::FIELD_EXCLUDE])
            || isset($json[self::FIELD_EXCLUDE_EXT])
            || array_key_exists(self::FIELD_EXCLUDE, $json)
            || array_key_exists(self::FIELD_EXCLUDE_EXT, $json)) {
            $value = $json[self::FIELD_EXCLUDE] ?? null;
            $type->setExclude(FHIRBoolean::jsonUnserialize(
                (is_array($value) ? $value : [FHIRBoolean::FIELD_VALUE => $value]) + ($json[self::FIELD_EXCLUDE_EXT] ?? []),
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
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->valueCodeableConcept)) {
            $out->valueCodeableConcept = $this->valueCodeableConcept;
        }
        if (isset($this->valueBoolean)) {
            if (null !== ($val = $this->valueBoolean->getValue())) {
                $out->valueBoolean = $val;
            }
            if ($this->valueBoolean->_nonValueFieldDefined()) {
                $ext = $this->valueBoolean->jsonSerialize();
                unset($ext->value);
                $out->_valueBoolean = $ext;
            }
        }
        if (isset($this->valueQuantity)) {
            $out->valueQuantity = $this->valueQuantity;
        }
        if (isset($this->valueRange)) {
            $out->valueRange = $this->valueRange;
        }
        if (isset($this->exclude)) {
            if (null !== ($val = $this->exclude->getValue())) {
                $out->exclude = $val;
            }
            if ($this->exclude->_nonValueFieldDefined()) {
                $ext = $this->exclude->jsonSerialize();
                unset($ext->value);
                $out->_exclude = $ext;
            }
        }
        return $out;
    }
}