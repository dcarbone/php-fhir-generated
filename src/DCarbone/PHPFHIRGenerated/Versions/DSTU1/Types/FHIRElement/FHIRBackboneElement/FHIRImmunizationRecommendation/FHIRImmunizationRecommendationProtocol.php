<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation;

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
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * A patient's point-of-time immunization status and recommendation with optional
 * supporting justification.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRImmunizationRecommendationProtocol extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_PROTOCOL;

    /* class_default.php:56 */
    public const FIELD_DOSE_SEQUENCE = 'doseSequence';
    public const FIELD_DOSE_SEQUENCE_EXT = '_doseSequence';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DESCRIPTION_EXT = '_description';
    public const FIELD_AUTHORITY = 'authority';
    public const FIELD_SERIES = 'series';
    public const FIELD_SERIES_EXT = '_series';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_DOSE_SEQUENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DESCRIPTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SERIES => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the nominal position in a series of the next dose. This is the
     * recommended dose number as per a specified protocol.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger 
     */
    #[FHIRInteger]
    protected FHIRInteger $doseSequence;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $description;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol? E.g. ACIP.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    #[FHIRResourceReference]
    protected FHIRResourceReference $authority;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $series;

    /* constructor.php:61 */
    /**
     * FHIRImmunizationRecommendationProtocol Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $doseSequence
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $description
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $authority
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $series
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|float|FHIRIntegerPrimitive|FHIRInteger $doseSequence = null,
                                null|string|FHIRStringPrimitive|FHIRString $description = null,
                                null|FHIRResourceReference $authority = null,
                                null|string|FHIRStringPrimitive|FHIRString $series = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $doseSequence) {
            $this->setDoseSequence($doseSequence);
        }
        if (null !== $description) {
            $this->setDescription($description);
        }
        if (null !== $authority) {
            $this->setAuthority($authority);
        }
        if (null !== $series) {
            $this->setSeries($series);
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the nominal position in a series of the next dose. This is the
     * recommended dose number as per a specified protocol.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger
     */
    public function getDoseSequence(): null|FHIRInteger
    {
        return $this->doseSequence ?? null;
    }

    /**
     * A whole number
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the nominal position in a series of the next dose. This is the
     * recommended dose number as per a specified protocol.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger $doseSequence
     * @return static
     */
    public function setDoseSequence(null|string|float|FHIRIntegerPrimitive|FHIRInteger $doseSequence): self
    {
        if (null === $doseSequence) {
            unset($this->doseSequence);
            return $this;
        }
        if (!($doseSequence instanceof FHIRInteger)) {
            $doseSequence = new FHIRInteger(value: $doseSequence);
        }
        $this->doseSequence = $doseSequence;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contains the description about the protocol under which the vaccine was
     * administered.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description): self
    {
        if (null === $description) {
            unset($this->description);
            return $this;
        }
        if (!($description instanceof FHIRString)) {
            $description = new FHIRString(value: $description);
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol? E.g. ACIP.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getAuthority(): null|FHIRResourceReference
    {
        return $this->authority ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the authority who published the protocol? E.g. ACIP.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $authority
     * @return static
     */
    public function setAuthority(null|FHIRResourceReference $authority): self
    {
        if (null === $authority) {
            unset($this->authority);
            return $this;
        }
        $this->authority = $authority;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getSeries(): null|FHIRString
    {
        return $this->series ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * One possible path to achieve presumed immunity against a disease - within the
     * context of an authority.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $series
     * @return static
     */
    public function setSeries(null|string|FHIRStringPrimitive|FHIRString $series): self
    {
        if (null === $series) {
            unset($this->series);
            return $this;
        }
        if (!($series instanceof FHIRString)) {
            $series = new FHIRString(value: $series);
        }
        $this->series = $series;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImmunizationRecommendationProtocol)) {
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
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOSE_SEQUENCE === $cen) {
                $type->setDoseSequence(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DESCRIPTION === $cen) {
                $type->setDescription(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AUTHORITY === $cen) {
                $type->setAuthority(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SERIES === $cen) {
                $type->setSeries(FHIRString::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DOSE_SEQUENCE])) {
            if (isset($type->doseSequence)) {
                $type->doseSequence->setValue((string)$attributes[self::FIELD_DOSE_SEQUENCE]);
            } else {
                $type->setDoseSequence((string)$attributes[self::FIELD_DOSE_SEQUENCE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DOSE_SEQUENCE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            if (isset($type->description)) {
                $type->description->setValue((string)$attributes[self::FIELD_DESCRIPTION]);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DESCRIPTION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SERIES])) {
            if (isset($type->series)) {
                $type->series->setValue((string)$attributes[self::FIELD_SERIES]);
            } else {
                $type->setSeries((string)$attributes[self::FIELD_SERIES]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SERIES, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->doseSequence) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DOSE_SEQUENCE]) {
            $xw->writeAttribute(self::FIELD_DOSE_SEQUENCE, $this->doseSequence->_getValueAsString());
        }
        if (isset($this->description) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DESCRIPTION]) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $this->description->_getValueAsString());
        }
        if (isset($this->series) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SERIES]) {
            $xw->writeAttribute(self::FIELD_SERIES, $this->series->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->doseSequence)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DOSE_SEQUENCE]
                || $this->doseSequence->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DOSE_SEQUENCE);
            $this->doseSequence->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DOSE_SEQUENCE]);
            $xw->endElement();
        }
        if (isset($this->description)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DESCRIPTION]
                || $this->description->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $this->description->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DESCRIPTION]);
            $xw->endElement();
        }
        if (isset($this->authority)) {
            $xw->startElement(self::FIELD_AUTHORITY);
            $this->authority->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->series)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SERIES]
                || $this->series->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SERIES);
            $this->series->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SERIES]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImmunizationRecommendationProtocol)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->doseSequence)
            || isset($decoded->_doseSequence)
            || property_exists($decoded, self::FIELD_DOSE_SEQUENCE)
            || property_exists($decoded, self::FIELD_DOSE_SEQUENCE_EXT)) {
            $v = $decoded->_doseSequence ?? new \stdClass();
            $v->value = $decoded->doseSequence ?? null;
            $type->setDoseSequence(FHIRInteger::jsonUnserialize($v, $config));
        }
        if (isset($decoded->description)
            || isset($decoded->_description)
            || property_exists($decoded, self::FIELD_DESCRIPTION)
            || property_exists($decoded, self::FIELD_DESCRIPTION_EXT)) {
            $v = $decoded->_description ?? new \stdClass();
            $v->value = $decoded->description ?? null;
            $type->setDescription(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($decoded->authority) || property_exists($decoded, self::FIELD_AUTHORITY)) {
            if (is_array($decoded->authority)) {
                $type->setAuthority(FHIRResourceReference::jsonUnserialize(reset($decoded->authority), $config));
            } else {
                $type->setAuthority(FHIRResourceReference::jsonUnserialize($decoded->authority, $config));
            }
        }
        if (isset($decoded->series)
            || isset($decoded->_series)
            || property_exists($decoded, self::FIELD_SERIES)
            || property_exists($decoded, self::FIELD_SERIES_EXT)) {
            $v = $decoded->_series ?? new \stdClass();
            $v->value = $decoded->series ?? null;
            $type->setSeries(FHIRString::jsonUnserialize($v, $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->doseSequence)) {
            if (null !== ($val = $this->doseSequence->getValue())) {
                $out->doseSequence = $val;
            }
            if ($this->doseSequence->_nonValueFieldDefined()) {
                $ext = $this->doseSequence->jsonSerialize();
                unset($ext->value);
                $out->_doseSequence = $ext;
            }
        }
        if (isset($this->description)) {
            if (null !== ($val = $this->description->getValue())) {
                $out->description = $val;
            }
            if ($this->description->_nonValueFieldDefined()) {
                $ext = $this->description->jsonSerialize();
                unset($ext->value);
                $out->_description = $ext;
            }
        }
        if (isset($this->authority)) {
            $out->authority = $this->authority;
        }
        if (isset($this->series)) {
            if (null !== ($val = $this->series->getValue())) {
                $out->series = $val;
            }
            if ($this->series->_nonValueFieldDefined()) {
                $ext = $this->series->jsonSerialize();
                unset($ext->value);
                $out->_series = $ext;
            }
        }
        return $out;
    }
}