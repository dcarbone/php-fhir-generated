<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection;

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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRImagingSelectionDGraphicType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRImagingSelectionDGraphicTypeEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A selection of DICOM SOP instances and/or frames within a single Study and
 * Series. This might include additional specifics such as an image region, an
 * Observation UID or a Segmentation Number, allowing linkage to an Observation
 * Resource or transferring this information along with the ImagingStudy Resource.
 */
class FHIRImagingSelectionImageRegion2D extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_IMAGING_SELECTION_DOT_IMAGE_REGION_2D;

    /* class_default.php:48 */
    public const FIELD_REGION_TYPE = 'regionType';
    public const FIELD_REGION_TYPE_EXT = '_regionType';
    public const FIELD_COORDINATE = 'coordinate';
    public const FIELD_COORDINATE_EXT = '_coordinate';

    /* class_default.php:67 */
    private static array $_validationRules = [
        self::FIELD_REGION_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_COORDINATE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:92 */
    private array $_valueXMLLocations = [
        self::FIELD_REGION_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:108 */
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies the type of image region.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRImagingSelectionDGraphicType 
     */
    protected FHIRImagingSelectionDGraphicType $regionType;
    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The coordinates describing the image region. Encoded as a set of (column, row)
     * pairs that denote positions in the selected image / frames specified with
     * sub-pixel resolution. The origin at the TLHC of the TLHC pixel is 0.0\0.0, the
     * BRHC of the TLHC pixel is 1.0\1.0, and the BRHC of the BRHC pixel is the number
     * of columns\rows in the image / frames. The values must be within the range 0\0
     * to the number of columns\rows in the image / frames.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal[] 
     */
    protected array $coordinate;

    /* constructor.php:63 */
    /**
     * FHIRImagingSelectionImageRegion2D Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRImagingSelectionDGraphicTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRImagingSelectionDGraphicType $regionType
     * @param null|string[]|float[]|int[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal[] $coordinate
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRImagingSelectionDGraphicTypeEnum|FHIRImagingSelectionDGraphicType $regionType = null,
                                null|iterable $coordinate = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $regionType) {
            $this->setRegionType($regionType);
        }
        if (null !== $coordinate) {
            $this->setCoordinate(...$coordinate);
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies the type of image region.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRImagingSelectionDGraphicType
     */
    public function getRegionType(): null|FHIRImagingSelectionDGraphicType
    {
        return $this->regionType ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specifies the type of image region.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRImagingSelectionDGraphicTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRImagingSelectionDGraphicType $regionType
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRegionType(null|string|FHIRImagingSelectionDGraphicTypeEnum|FHIRImagingSelectionDGraphicType $regionType,
                                  ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $regionType) {
            unset($this->regionType);
            return $this;
        }
        if (!($regionType instanceof FHIRImagingSelectionDGraphicType)) {
            $regionType = new FHIRImagingSelectionDGraphicType(value: $regionType);
        }
        $this->regionType = $regionType;
        if ($this->_valueXMLLocations[self::FIELD_REGION_TYPE] !== $valueXMLLocation) {
            $this->_setRegionTypeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the regionType element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getRegionTypeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_REGION_TYPE];
    }

    /**
     * Set the location the "value" field of the regionType element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setRegionTypeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_REGION_TYPE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The coordinates describing the image region. Encoded as a set of (column, row)
     * pairs that denote positions in the selected image / frames specified with
     * sub-pixel resolution. The origin at the TLHC of the TLHC pixel is 0.0\0.0, the
     * BRHC of the TLHC pixel is 1.0\1.0, and the BRHC of the BRHC pixel is the number
     * of columns\rows in the image / frames. The values must be within the range 0\0
     * to the number of columns\rows in the image / frames.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal[]
     */
    public function getCoordinate(): array
    {
        return $this->coordinate ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal>
     */
    public function getCoordinateIterator(): iterable
    {
        if (!isset($this->coordinate)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->coordinate);
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The coordinates describing the image region. Encoded as a set of (column, row)
     * pairs that denote positions in the selected image / frames specified with
     * sub-pixel resolution. The origin at the TLHC of the TLHC pixel is 0.0\0.0, the
     * BRHC of the TLHC pixel is 1.0\1.0, and the BRHC of the BRHC pixel is the number
     * of columns\rows in the image / frames. The values must be within the range 0\0
     * to the number of columns\rows in the image / frames.
     *
     * @param string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal $coordinate
     * @return static
     */
    public function addCoordinate(string|float|int|FHIRDecimalPrimitive|FHIRDecimal $coordinate): self
    {
        if (!($coordinate instanceof FHIRDecimal)) {
            $coordinate = new FHIRDecimal(value: $coordinate);
        }
        if (!isset($this->coordinate)) {
            $this->coordinate = [];
        }
        $this->coordinate[] = $coordinate;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The coordinates describing the image region. Encoded as a set of (column, row)
     * pairs that denote positions in the selected image / frames specified with
     * sub-pixel resolution. The origin at the TLHC of the TLHC pixel is 0.0\0.0, the
     * BRHC of the TLHC pixel is 1.0\1.0, and the BRHC of the BRHC pixel is the number
     * of columns\rows in the image / frames. The values must be within the range 0\0
     * to the number of columns\rows in the image / frames.
     *
     * @param string|float|int|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDecimal ...$coordinate
     * @return static
     */
    public function setCoordinate(string|float|int|FHIRDecimalPrimitive|FHIRDecimal ...$coordinate): self
    {
        if ([] === $coordinate) {
            unset($this->coordinate);
            return $this;
        }
        $this->coordinate = [];
        foreach($coordinate as $v) {
            if ($v instanceof FHIRDecimal) {
                $this->coordinate[] = $v;
            } else {
                $this->coordinate[] = new FHIRDecimal(value: $v);
            }
        }
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
        if (null !== ($v = $this->getRegionType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REGION_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCoordinate())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COORDINATE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REGION_TYPE])) {
            $v = $this->getRegionType();
            foreach($validationRules[self::FIELD_REGION_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REGION_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REGION_TYPE])) {
                        $errs[self::FIELD_REGION_TYPE] = [];
                    }
                    $errs[self::FIELD_REGION_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COORDINATE])) {
            $v = $this->getCoordinate();
            foreach($validationRules[self::FIELD_COORDINATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COORDINATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COORDINATE])) {
                        $errs[self::FIELD_COORDINATE] = [];
                    }
                    $errs[self::FIELD_COORDINATE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion2D $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion2D
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImagingSelectionImageRegion2D)) {
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
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REGION_TYPE === $cen) {
                $type->setRegionType(FHIRImagingSelectionDGraphicType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COORDINATE === $cen) {
                $type->addCoordinate(FHIRDecimal::xmlUnserialize($ce, $config));
            }        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_REGION_TYPE])) {
            if (isset($type->regionType)) {
                $type->regionType->setValue((string)$attributes[self::FIELD_REGION_TYPE]);
                $type->_setRegionTypeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setRegionType((string)$attributes[self::FIELD_REGION_TYPE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->regionType) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_REGION_TYPE]) {
            $xw->writeAttribute(self::FIELD_REGION_TYPE, $this->regionType->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->regionType)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_REGION_TYPE]
                || $this->regionType->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_REGION_TYPE);
            $this->regionType->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_REGION_TYPE]);
            $xw->endElement();
        }
        if (isset($this->coordinate) && [] !== $this->coordinate) {
            foreach($this->coordinate as $v) {
                $xw->startElement(self::FIELD_COORDINATE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion2D $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRImagingSelection\FHIRImagingSelectionImageRegion2D
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRImagingSelectionImageRegion2D)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_REGION_TYPE])
            || isset($json[self::FIELD_REGION_TYPE_EXT])
            || array_key_exists(self::FIELD_REGION_TYPE, $json)
            || array_key_exists(self::FIELD_REGION_TYPE_EXT, $json)) {
            $value = $json[self::FIELD_REGION_TYPE] ?? null;
            $type->setRegionType(FHIRImagingSelectionDGraphicType::jsonUnserialize(
                (is_array($value) ? $value : [FHIRImagingSelectionDGraphicType::FIELD_VALUE => $value]) + ($json[self::FIELD_REGION_TYPE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_COORDINATE])
            || isset($json[self::FIELD_COORDINATE_EXT])
            || array_key_exists(self::FIELD_COORDINATE, $json)
            || array_key_exists(self::FIELD_COORDINATE_EXT, $json)) {
            $value = (array)($json[self::FIELD_COORDINATE] ?? []);
            $ext = (array)($json[self::FIELD_COORDINATE_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addCoordinate(FHIRDecimal::jsonUnserialize(
                    [FHIRDecimal::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
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
        if (isset($this->regionType)) {
            if (null !== ($val = $this->regionType->getValue())) {
                $out->regionType = $val;
            }
            $ext = $this->regionType->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_regionType = $ext;
            }
        }
        if (isset($this->coordinate) && [] !== $this->coordinate) {
            $vals = [];
            $exts = [];
            foreach ($this->coordinate as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->coordinate = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_coordinate = $exts;
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