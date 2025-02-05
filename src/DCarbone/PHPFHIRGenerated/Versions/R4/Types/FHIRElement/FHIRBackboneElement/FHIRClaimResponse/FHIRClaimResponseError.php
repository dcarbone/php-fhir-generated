<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 01:55+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * This resource provides the adjudication details from the processing of a Claim
 * resource.
 */
class FHIRClaimResponseError extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ERROR;

    /* class_default.php:50 */
    public const FIELD_ITEM_SEQUENCE = 'itemSequence';
    public const FIELD_ITEM_SEQUENCE_EXT = '_itemSequence';
    public const FIELD_DETAIL_SEQUENCE = 'detailSequence';
    public const FIELD_DETAIL_SEQUENCE_EXT = '_detailSequence';
    public const FIELD_SUB_DETAIL_SEQUENCE = 'subDetailSequence';
    public const FIELD_SUB_DETAIL_SEQUENCE_EXT = '_subDetailSequence';
    public const FIELD_CODE = 'code';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_CODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_ITEM_SEQUENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DETAIL_SEQUENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SUB_DETAIL_SEQUENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the line item submitted which contains the error. This
     * value is omitted when the error occurs outside of the item structure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $itemSequence;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the detail within the line item submitted which contains
     * the error. This value is omitted when the error occurs outside of the item
     * structure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $detailSequence;
    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the sub-detail within the detail within the line item
     * submitted which contains the error. This value is omitted when the error occurs
     * outside of the item structure.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt 
     */
    protected FHIRPositiveInt $subDetailSequence;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An error code, from a specified code system, which details why the claim could
     * not be adjudicated.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;

    /* constructor.php:61 */
    /**
     * FHIRClaimResponseError Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $itemSequence
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $detailSequence
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $subDetailSequence
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $code
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $itemSequence = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $detailSequence = null,
                                null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $subDetailSequence = null,
                                null|FHIRCodeableConcept $code = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $itemSequence) {
            $this->setItemSequence($itemSequence);
        }
        if (null !== $detailSequence) {
            $this->setDetailSequence($detailSequence);
        }
        if (null !== $subDetailSequence) {
            $this->setSubDetailSequence($subDetailSequence);
        }
        if (null !== $code) {
            $this->setCode($code);
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
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the line item submitted which contains the error. This
     * value is omitted when the error occurs outside of the item structure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt
     */
    public function getItemSequence(): null|FHIRPositiveInt
    {
        return $this->itemSequence ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the line item submitted which contains the error. This
     * value is omitted when the error occurs outside of the item structure.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $itemSequence
     * @return static
     */
    public function setItemSequence(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $itemSequence): self
    {
        if (null === $itemSequence) {
            unset($this->itemSequence);
            return $this;
        }
        if (!($itemSequence instanceof FHIRPositiveInt)) {
            $itemSequence = new FHIRPositiveInt(value: $itemSequence);
        }
        $this->itemSequence = $itemSequence;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the detail within the line item submitted which contains
     * the error. This value is omitted when the error occurs outside of the item
     * structure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt
     */
    public function getDetailSequence(): null|FHIRPositiveInt
    {
        return $this->detailSequence ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the detail within the line item submitted which contains
     * the error. This value is omitted when the error occurs outside of the item
     * structure.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $detailSequence
     * @return static
     */
    public function setDetailSequence(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $detailSequence): self
    {
        if (null === $detailSequence) {
            unset($this->detailSequence);
            return $this;
        }
        if (!($detailSequence instanceof FHIRPositiveInt)) {
            $detailSequence = new FHIRPositiveInt(value: $detailSequence);
        }
        $this->detailSequence = $detailSequence;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the sub-detail within the detail within the line item
     * submitted which contains the error. This value is omitted when the error occurs
     * outside of the item structure.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt
     */
    public function getSubDetailSequence(): null|FHIRPositiveInt
    {
        return $this->subDetailSequence ?? null;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The sequence number of the sub-detail within the detail within the line item
     * submitted which contains the error. This value is omitted when the error occurs
     * outside of the item structure.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRPositiveIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPositiveInt $subDetailSequence
     * @return static
     */
    public function setSubDetailSequence(null|string|float|FHIRPositiveIntPrimitive|FHIRPositiveInt $subDetailSequence): self
    {
        if (null === $subDetailSequence) {
            unset($this->subDetailSequence);
            return $this;
        }
        if (!($subDetailSequence instanceof FHIRPositiveInt)) {
            $subDetailSequence = new FHIRPositiveInt(value: $subDetailSequence);
        }
        $this->subDetailSequence = $subDetailSequence;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An error code, from a specified code system, which details why the claim could
     * not be adjudicated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
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
     * An error code, from a specified code system, which details why the claim could
     * not be adjudicated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $code
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

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaimResponseError)) {
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
            } else if (self::FIELD_ITEM_SEQUENCE === $cen) {
                $type->setItemSequence(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAIL_SEQUENCE === $cen) {
                $type->setDetailSequence(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUB_DETAIL_SEQUENCE === $cen) {
                $type->setSubDetailSequence(FHIRPositiveInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ITEM_SEQUENCE])) {
            if (isset($type->itemSequence)) {
                $type->itemSequence->setValue((string)$attributes[self::FIELD_ITEM_SEQUENCE]);
            } else {
                $type->setItemSequence((string)$attributes[self::FIELD_ITEM_SEQUENCE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ITEM_SEQUENCE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DETAIL_SEQUENCE])) {
            if (isset($type->detailSequence)) {
                $type->detailSequence->setValue((string)$attributes[self::FIELD_DETAIL_SEQUENCE]);
            } else {
                $type->setDetailSequence((string)$attributes[self::FIELD_DETAIL_SEQUENCE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DETAIL_SEQUENCE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SUB_DETAIL_SEQUENCE])) {
            if (isset($type->subDetailSequence)) {
                $type->subDetailSequence->setValue((string)$attributes[self::FIELD_SUB_DETAIL_SEQUENCE]);
            } else {
                $type->setSubDetailSequence((string)$attributes[self::FIELD_SUB_DETAIL_SEQUENCE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SUB_DETAIL_SEQUENCE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->itemSequence) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ITEM_SEQUENCE]) {
            $xw->writeAttribute(self::FIELD_ITEM_SEQUENCE, $this->itemSequence->_getValueAsString());
        }
        if (isset($this->detailSequence) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DETAIL_SEQUENCE]) {
            $xw->writeAttribute(self::FIELD_DETAIL_SEQUENCE, $this->detailSequence->_getValueAsString());
        }
        if (isset($this->subDetailSequence) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SUB_DETAIL_SEQUENCE]) {
            $xw->writeAttribute(self::FIELD_SUB_DETAIL_SEQUENCE, $this->subDetailSequence->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->itemSequence)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ITEM_SEQUENCE]
                || $this->itemSequence->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ITEM_SEQUENCE);
            $this->itemSequence->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ITEM_SEQUENCE]);
            $xw->endElement();
        }
        if (isset($this->detailSequence)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DETAIL_SEQUENCE]
                || $this->detailSequence->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DETAIL_SEQUENCE);
            $this->detailSequence->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DETAIL_SEQUENCE]);
            $xw->endElement();
        }
        if (isset($this->subDetailSequence)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SUB_DETAIL_SEQUENCE]
                || $this->subDetailSequence->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SUB_DETAIL_SEQUENCE);
            $this->subDetailSequence->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SUB_DETAIL_SEQUENCE]);
            $xw->endElement();
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaimResponseError)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->itemSequence)
            || isset($json->_itemSequence)
            || property_exists($json, self::FIELD_ITEM_SEQUENCE)
            || property_exists($json, self::FIELD_ITEM_SEQUENCE_EXT)) {
            $v = $json->_itemSequence ?? new \stdClass();
            $v->value = $json->itemSequence ?? null;
            $type->setItemSequence(FHIRPositiveInt::jsonUnserialize($v, $config));
        }
        if (isset($json->detailSequence)
            || isset($json->_detailSequence)
            || property_exists($json, self::FIELD_DETAIL_SEQUENCE)
            || property_exists($json, self::FIELD_DETAIL_SEQUENCE_EXT)) {
            $v = $json->_detailSequence ?? new \stdClass();
            $v->value = $json->detailSequence ?? null;
            $type->setDetailSequence(FHIRPositiveInt::jsonUnserialize($v, $config));
        }
        if (isset($json->subDetailSequence)
            || isset($json->_subDetailSequence)
            || property_exists($json, self::FIELD_SUB_DETAIL_SEQUENCE)
            || property_exists($json, self::FIELD_SUB_DETAIL_SEQUENCE_EXT)) {
            $v = $json->_subDetailSequence ?? new \stdClass();
            $v->value = $json->subDetailSequence ?? null;
            $type->setSubDetailSequence(FHIRPositiveInt::jsonUnserialize($v, $config));
        }
        if (isset($json->code) || property_exists($json, self::FIELD_CODE)) {
            if (is_array($json->code)) {
                $type->setCode(FHIRCodeableConcept::jsonUnserialize(reset($json->code), $config));
            } else {
                $type->setCode(FHIRCodeableConcept::jsonUnserialize($json->code, $config));
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
        if (isset($this->itemSequence)) {
            if (null !== ($val = $this->itemSequence->getValue())) {
                $out->itemSequence = $val;
            }
            if ($this->itemSequence->_nonValueFieldDefined()) {
                $ext = $this->itemSequence->jsonSerialize();
                unset($ext->value);
                $out->_itemSequence = $ext;
            }
        }
        if (isset($this->detailSequence)) {
            if (null !== ($val = $this->detailSequence->getValue())) {
                $out->detailSequence = $val;
            }
            if ($this->detailSequence->_nonValueFieldDefined()) {
                $ext = $this->detailSequence->jsonSerialize();
                unset($ext->value);
                $out->_detailSequence = $ext;
            }
        }
        if (isset($this->subDetailSequence)) {
            if (null !== ($val = $this->subDetailSequence->getValue())) {
                $out->subDetailSequence = $val;
            }
            if ($this->subDetailSequence->_nonValueFieldDefined()) {
                $ext = $this->subDetailSequence->jsonSerialize();
                unset($ext->value);
                $out->_subDetailSequence = $ext;
            }
        }
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        return $out;
    }
}