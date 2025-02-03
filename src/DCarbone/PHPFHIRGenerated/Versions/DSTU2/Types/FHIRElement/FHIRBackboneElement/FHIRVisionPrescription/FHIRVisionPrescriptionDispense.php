<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 23:46+0000
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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRVisionBase;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRVisionEyes;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRVisionBaseList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRVisionEyesList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * An authorization for the supply of glasses and/or contact lenses to a patient.
 */
class FHIRVisionPrescriptionDispense extends FHIRBackboneElement
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE;

    /* class_default.php:47 */
    public const FIELD_PRODUCT = 'product';
    public const FIELD_EYE = 'eye';
    public const FIELD_EYE_EXT = '_eye';
    public const FIELD_SPHERE = 'sphere';
    public const FIELD_SPHERE_EXT = '_sphere';
    public const FIELD_CYLINDER = 'cylinder';
    public const FIELD_CYLINDER_EXT = '_cylinder';
    public const FIELD_AXIS = 'axis';
    public const FIELD_AXIS_EXT = '_axis';
    public const FIELD_PRISM = 'prism';
    public const FIELD_PRISM_EXT = '_prism';
    public const FIELD_BASE = 'base';
    public const FIELD_BASE_EXT = '_base';
    public const FIELD_ADD = 'add';
    public const FIELD_ADD_EXT = '_add';
    public const FIELD_POWER = 'power';
    public const FIELD_POWER_EXT = '_power';
    public const FIELD_BACK_CURVE = 'backCurve';
    public const FIELD_BACK_CURVE_EXT = '_backCurve';
    public const FIELD_DIAMETER = 'diameter';
    public const FIELD_DIAMETER_EXT = '_diameter';
    public const FIELD_DURATION = 'duration';
    public const FIELD_COLOR = 'color';
    public const FIELD_COLOR_EXT = '_color';
    public const FIELD_BRAND = 'brand';
    public const FIELD_BRAND_EXT = '_brand';
    public const FIELD_NOTES = 'notes';
    public const FIELD_NOTES_EXT = '_notes';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_PRODUCT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_EYE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SPHERE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CYLINDER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_AXIS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PRISM => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_BASE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ADD => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_POWER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_BACK_CURVE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DIAMETER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_COLOR => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_BRAND => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NOTES => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the type of vision correction product which is required for the
     * patient.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $product;
    /**
     * A coded concept listing the eye codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The eye for which the lens applies.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRVisionEyes 
     */
    protected FHIRVisionEyes $eye;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lens power measured in diopters (0.25 units).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $sphere;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for astigmatism measured in diopters (0.25 units).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $cylinder;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger 
     */
    protected FHIRInteger $axis;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Amount of prism to compensate for eye alignment in fractional units.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $prism;
    /**
     * A coded concept listing the base codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The relative base, or reference lens edge, for the prism.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRVisionBase 
     */
    protected FHIRVisionBase $base;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for multifocal lenses measured in diopters (0.25 units).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $add;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens power measured in diopters (0.25 units).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $power;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Back curvature measured in millimeters.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $backCurve;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens diameter measured in millimeters.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $diameter;
    /**
     * The recommended maximum wear period for the lens.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity 
     */
    protected FHIRSimpleQuantity $duration;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Special color or pattern.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $color;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Brand recommendations or restrictions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $brand;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $notes;

    /* constructor.php:62 */
    /**
     * FHIRVisionPrescriptionDispense Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $product
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRVisionEyesList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRVisionEyes $eye
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $sphere
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $cylinder
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $axis
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $prism
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRVisionBaseList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRVisionBase $base
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $add
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $power
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $backCurve
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $diameter
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $duration
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $color
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $brand
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $notes
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCoding $product = null,
                                null|string|FHIRVisionEyesList|FHIRVisionEyes $eye = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $sphere = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $cylinder = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $axis = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $prism = null,
                                null|string|FHIRVisionBaseList|FHIRVisionBase $base = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $add = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $power = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $backCurve = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $diameter = null,
                                null|FHIRSimpleQuantity $duration = null,
                                null|string|FHIRStringPrimitive|FHIRString $color = null,
                                null|string|FHIRStringPrimitive|FHIRString $brand = null,
                                null|string|FHIRStringPrimitive|FHIRString $notes = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $product) {
            $this->setProduct($product);
        }
        if (null !== $eye) {
            $this->setEye($eye);
        }
        if (null !== $sphere) {
            $this->setSphere($sphere);
        }
        if (null !== $cylinder) {
            $this->setCylinder($cylinder);
        }
        if (null !== $axis) {
            $this->setAxis($axis);
        }
        if (null !== $prism) {
            $this->setPrism($prism);
        }
        if (null !== $base) {
            $this->setBase($base);
        }
        if (null !== $add) {
            $this->setAdd($add);
        }
        if (null !== $power) {
            $this->setPower($power);
        }
        if (null !== $backCurve) {
            $this->setBackCurve($backCurve);
        }
        if (null !== $diameter) {
            $this->setDiameter($diameter);
        }
        if (null !== $duration) {
            $this->setDuration($duration);
        }
        if (null !== $color) {
            $this->setColor($color);
        }
        if (null !== $brand) {
            $this->setBrand($brand);
        }
        if (null !== $notes) {
            $this->setNotes($notes);
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
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the type of vision correction product which is required for the
     * patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding
     */
    public function getProduct(): null|FHIRCoding
    {
        return $this->product ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the type of vision correction product which is required for the
     * patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $product
     * @return static
     */
    public function setProduct(null|FHIRCoding $product): self
    {
        if (null === $product) {
            unset($this->product);
            return $this;
        }
        $this->product = $product;
        return $this;
    }

    /**
     * A coded concept listing the eye codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The eye for which the lens applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRVisionEyes
     */
    public function getEye(): null|FHIRVisionEyes
    {
        return $this->eye ?? null;
    }

    /**
     * A coded concept listing the eye codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The eye for which the lens applies.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRVisionEyesList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRVisionEyes $eye
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setEye(null|string|FHIRVisionEyesList|FHIRVisionEyes $eye,
                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $eye) {
            unset($this->eye);
            return $this;
        }
        if (!($eye instanceof FHIRVisionEyes)) {
            $eye = new FHIRVisionEyes(value: $eye);
        }
        $this->eye = $eye;
        if ($this->_valueXMLLocations[self::FIELD_EYE] !== $valueXMLLocation) {
            $this->_setEyeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the eye element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getEyeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_EYE];
    }

    /**
     * Set the location the "value" field of the eye element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setEyeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_EYE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lens power measured in diopters (0.25 units).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal
     */
    public function getSphere(): null|FHIRDecimal
    {
        return $this->sphere ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lens power measured in diopters (0.25 units).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $sphere
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSphere(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $sphere,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $sphere) {
            unset($this->sphere);
            return $this;
        }
        if (!($sphere instanceof FHIRDecimal)) {
            $sphere = new FHIRDecimal(value: $sphere);
        }
        $this->sphere = $sphere;
        if ($this->_valueXMLLocations[self::FIELD_SPHERE] !== $valueXMLLocation) {
            $this->_setSphereValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the sphere element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getSphereValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_SPHERE];
    }

    /**
     * Set the location the "value" field of the sphere element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setSphereValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_SPHERE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for astigmatism measured in diopters (0.25 units).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal
     */
    public function getCylinder(): null|FHIRDecimal
    {
        return $this->cylinder ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for astigmatism measured in diopters (0.25 units).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $cylinder
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCylinder(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $cylinder,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $cylinder) {
            unset($this->cylinder);
            return $this;
        }
        if (!($cylinder instanceof FHIRDecimal)) {
            $cylinder = new FHIRDecimal(value: $cylinder);
        }
        $this->cylinder = $cylinder;
        if ($this->_valueXMLLocations[self::FIELD_CYLINDER] !== $valueXMLLocation) {
            $this->_setCylinderValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the cylinder element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getCylinderValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_CYLINDER];
    }

    /**
     * Set the location the "value" field of the cylinder element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setCylinderValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_CYLINDER] = $valueXMLLocation;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger
     */
    public function getAxis(): null|FHIRInteger
    {
        return $this->axis ?? null;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInteger $axis
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAxis(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $axis,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $axis) {
            unset($this->axis);
            return $this;
        }
        if (!($axis instanceof FHIRInteger)) {
            $axis = new FHIRInteger(value: $axis);
        }
        $this->axis = $axis;
        if ($this->_valueXMLLocations[self::FIELD_AXIS] !== $valueXMLLocation) {
            $this->_setAxisValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the axis element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAxisValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_AXIS];
    }

    /**
     * Set the location the "value" field of the axis element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAxisValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_AXIS] = $valueXMLLocation;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Amount of prism to compensate for eye alignment in fractional units.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal
     */
    public function getPrism(): null|FHIRDecimal
    {
        return $this->prism ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Amount of prism to compensate for eye alignment in fractional units.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $prism
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPrism(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $prism,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $prism) {
            unset($this->prism);
            return $this;
        }
        if (!($prism instanceof FHIRDecimal)) {
            $prism = new FHIRDecimal(value: $prism);
        }
        $this->prism = $prism;
        if ($this->_valueXMLLocations[self::FIELD_PRISM] !== $valueXMLLocation) {
            $this->_setPrismValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the prism element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPrismValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_PRISM];
    }

    /**
     * Set the location the "value" field of the prism element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPrismValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_PRISM] = $valueXMLLocation;
        return $this;
    }

    /**
     * A coded concept listing the base codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The relative base, or reference lens edge, for the prism.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRVisionBase
     */
    public function getBase(): null|FHIRVisionBase
    {
        return $this->base ?? null;
    }

    /**
     * A coded concept listing the base codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The relative base, or reference lens edge, for the prism.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRVisionBaseList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRVisionBase $base
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setBase(null|string|FHIRVisionBaseList|FHIRVisionBase $base,
                            ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $base) {
            unset($this->base);
            return $this;
        }
        if (!($base instanceof FHIRVisionBase)) {
            $base = new FHIRVisionBase(value: $base);
        }
        $this->base = $base;
        if ($this->_valueXMLLocations[self::FIELD_BASE] !== $valueXMLLocation) {
            $this->_setBaseValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the base element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getBaseValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_BASE];
    }

    /**
     * Set the location the "value" field of the base element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setBaseValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_BASE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for multifocal lenses measured in diopters (0.25 units).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal
     */
    public function getAdd(): null|FHIRDecimal
    {
        return $this->add ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for multifocal lenses measured in diopters (0.25 units).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $add
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAdd(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $add,
                           ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $add) {
            unset($this->add);
            return $this;
        }
        if (!($add instanceof FHIRDecimal)) {
            $add = new FHIRDecimal(value: $add);
        }
        $this->add = $add;
        if ($this->_valueXMLLocations[self::FIELD_ADD] !== $valueXMLLocation) {
            $this->_setAddValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the add element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getAddValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ADD];
    }

    /**
     * Set the location the "value" field of the add element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setAddValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ADD] = $valueXMLLocation;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens power measured in diopters (0.25 units).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal
     */
    public function getPower(): null|FHIRDecimal
    {
        return $this->power ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens power measured in diopters (0.25 units).
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $power
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPower(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $power,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $power) {
            unset($this->power);
            return $this;
        }
        if (!($power instanceof FHIRDecimal)) {
            $power = new FHIRDecimal(value: $power);
        }
        $this->power = $power;
        if ($this->_valueXMLLocations[self::FIELD_POWER] !== $valueXMLLocation) {
            $this->_setPowerValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the power element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getPowerValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_POWER];
    }

    /**
     * Set the location the "value" field of the power element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setPowerValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_POWER] = $valueXMLLocation;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Back curvature measured in millimeters.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal
     */
    public function getBackCurve(): null|FHIRDecimal
    {
        return $this->backCurve ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Back curvature measured in millimeters.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $backCurve
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setBackCurve(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $backCurve,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $backCurve) {
            unset($this->backCurve);
            return $this;
        }
        if (!($backCurve instanceof FHIRDecimal)) {
            $backCurve = new FHIRDecimal(value: $backCurve);
        }
        $this->backCurve = $backCurve;
        if ($this->_valueXMLLocations[self::FIELD_BACK_CURVE] !== $valueXMLLocation) {
            $this->_setBackCurveValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the backCurve element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getBackCurveValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_BACK_CURVE];
    }

    /**
     * Set the location the "value" field of the backCurve element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setBackCurveValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_BACK_CURVE] = $valueXMLLocation;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens diameter measured in millimeters.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal
     */
    public function getDiameter(): null|FHIRDecimal
    {
        return $this->diameter ?? null;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens diameter measured in millimeters.
     *
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDecimal $diameter
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDiameter(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $diameter,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $diameter) {
            unset($this->diameter);
            return $this;
        }
        if (!($diameter instanceof FHIRDecimal)) {
            $diameter = new FHIRDecimal(value: $diameter);
        }
        $this->diameter = $diameter;
        if ($this->_valueXMLLocations[self::FIELD_DIAMETER] !== $valueXMLLocation) {
            $this->_setDiameterValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the diameter element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDiameterValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DIAMETER];
    }

    /**
     * Set the location the "value" field of the diameter element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDiameterValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DIAMETER] = $valueXMLLocation;
        return $this;
    }

    /**
     * The recommended maximum wear period for the lens.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getDuration(): null|FHIRSimpleQuantity
    {
        return $this->duration ?? null;
    }

    /**
     * The recommended maximum wear period for the lens.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $duration
     * @return static
     */
    public function setDuration(null|FHIRSimpleQuantity $duration): self
    {
        if (null === $duration) {
            unset($this->duration);
            return $this;
        }
        $this->duration = $duration;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Special color or pattern.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getColor(): null|FHIRString
    {
        return $this->color ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Special color or pattern.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $color
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setColor(null|string|FHIRStringPrimitive|FHIRString $color,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $color) {
            unset($this->color);
            return $this;
        }
        if (!($color instanceof FHIRString)) {
            $color = new FHIRString(value: $color);
        }
        $this->color = $color;
        if ($this->_valueXMLLocations[self::FIELD_COLOR] !== $valueXMLLocation) {
            $this->_setColorValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the color element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getColorValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_COLOR];
    }

    /**
     * Set the location the "value" field of the color element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setColorValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_COLOR] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Brand recommendations or restrictions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getBrand(): null|FHIRString
    {
        return $this->brand ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Brand recommendations or restrictions.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $brand
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setBrand(null|string|FHIRStringPrimitive|FHIRString $brand,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $brand) {
            unset($this->brand);
            return $this;
        }
        if (!($brand instanceof FHIRString)) {
            $brand = new FHIRString(value: $brand);
        }
        $this->brand = $brand;
        if ($this->_valueXMLLocations[self::FIELD_BRAND] !== $valueXMLLocation) {
            $this->_setBrandValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the brand element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getBrandValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_BRAND];
    }

    /**
     * Set the location the "value" field of the brand element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setBrandValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_BRAND] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getNotes(): null|FHIRString
    {
        return $this->notes ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $notes
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setNotes(null|string|FHIRStringPrimitive|FHIRString $notes,
                             ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $notes) {
            unset($this->notes);
            return $this;
        }
        if (!($notes instanceof FHIRString)) {
            $notes = new FHIRString(value: $notes);
        }
        $this->notes = $notes;
        if ($this->_valueXMLLocations[self::FIELD_NOTES] !== $valueXMLLocation) {
            $this->_setNotesValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the notes element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getNotesValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_NOTES];
    }

    /**
     * Set the location the "value" field of the notes element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setNotesValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_NOTES] = $valueXMLLocation;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRVisionPrescriptionDispense)) {
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
            } else if (self::FIELD_PRODUCT === $cen) {
                $type->setProduct(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EYE === $cen) {
                $type->setEye(FHIRVisionEyes::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SPHERE === $cen) {
                $type->setSphere(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CYLINDER === $cen) {
                $type->setCylinder(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AXIS === $cen) {
                $type->setAxis(FHIRInteger::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRISM === $cen) {
                $type->setPrism(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BASE === $cen) {
                $type->setBase(FHIRVisionBase::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADD === $cen) {
                $type->setAdd(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_POWER === $cen) {
                $type->setPower(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BACK_CURVE === $cen) {
                $type->setBackCurve(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DIAMETER === $cen) {
                $type->setDiameter(FHIRDecimal::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DURATION === $cen) {
                $type->setDuration(FHIRSimpleQuantity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COLOR === $cen) {
                $type->setColor(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BRAND === $cen) {
                $type->setBrand(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTES === $cen) {
                $type->setNotes(FHIRString::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EYE])) {
            if (isset($type->eye)) {
                $type->eye->setValue((string)$attributes[self::FIELD_EYE]);
                $type->_setEyeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setEye((string)$attributes[self::FIELD_EYE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SPHERE])) {
            if (isset($type->sphere)) {
                $type->sphere->setValue((string)$attributes[self::FIELD_SPHERE]);
                $type->_setSphereValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setSphere((string)$attributes[self::FIELD_SPHERE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CYLINDER])) {
            if (isset($type->cylinder)) {
                $type->cylinder->setValue((string)$attributes[self::FIELD_CYLINDER]);
                $type->_setCylinderValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setCylinder((string)$attributes[self::FIELD_CYLINDER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_AXIS])) {
            if (isset($type->axis)) {
                $type->axis->setValue((string)$attributes[self::FIELD_AXIS]);
                $type->_setAxisValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAxis((string)$attributes[self::FIELD_AXIS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PRISM])) {
            if (isset($type->prism)) {
                $type->prism->setValue((string)$attributes[self::FIELD_PRISM]);
                $type->_setPrismValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPrism((string)$attributes[self::FIELD_PRISM], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_BASE])) {
            if (isset($type->base)) {
                $type->base->setValue((string)$attributes[self::FIELD_BASE]);
                $type->_setBaseValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setBase((string)$attributes[self::FIELD_BASE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ADD])) {
            if (isset($type->add)) {
                $type->add->setValue((string)$attributes[self::FIELD_ADD]);
                $type->_setAddValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAdd((string)$attributes[self::FIELD_ADD], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_POWER])) {
            if (isset($type->power)) {
                $type->power->setValue((string)$attributes[self::FIELD_POWER]);
                $type->_setPowerValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setPower((string)$attributes[self::FIELD_POWER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_BACK_CURVE])) {
            if (isset($type->backCurve)) {
                $type->backCurve->setValue((string)$attributes[self::FIELD_BACK_CURVE]);
                $type->_setBackCurveValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setBackCurve((string)$attributes[self::FIELD_BACK_CURVE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DIAMETER])) {
            if (isset($type->diameter)) {
                $type->diameter->setValue((string)$attributes[self::FIELD_DIAMETER]);
                $type->_setDiameterValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDiameter((string)$attributes[self::FIELD_DIAMETER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_COLOR])) {
            if (isset($type->color)) {
                $type->color->setValue((string)$attributes[self::FIELD_COLOR]);
                $type->_setColorValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setColor((string)$attributes[self::FIELD_COLOR], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_BRAND])) {
            if (isset($type->brand)) {
                $type->brand->setValue((string)$attributes[self::FIELD_BRAND]);
                $type->_setBrandValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setBrand((string)$attributes[self::FIELD_BRAND], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NOTES])) {
            if (isset($type->notes)) {
                $type->notes->setValue((string)$attributes[self::FIELD_NOTES]);
                $type->_setNotesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setNotes((string)$attributes[self::FIELD_NOTES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->eye) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EYE]) {
            $xw->writeAttribute(self::FIELD_EYE, $this->eye->_getFormattedValue());
        }
        if (isset($this->sphere) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SPHERE]) {
            $xw->writeAttribute(self::FIELD_SPHERE, $this->sphere->_getFormattedValue());
        }
        if (isset($this->cylinder) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CYLINDER]) {
            $xw->writeAttribute(self::FIELD_CYLINDER, $this->cylinder->_getFormattedValue());
        }
        if (isset($this->axis) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_AXIS]) {
            $xw->writeAttribute(self::FIELD_AXIS, $this->axis->_getFormattedValue());
        }
        if (isset($this->prism) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PRISM]) {
            $xw->writeAttribute(self::FIELD_PRISM, $this->prism->_getFormattedValue());
        }
        if (isset($this->base) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_BASE]) {
            $xw->writeAttribute(self::FIELD_BASE, $this->base->_getFormattedValue());
        }
        if (isset($this->add) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ADD]) {
            $xw->writeAttribute(self::FIELD_ADD, $this->add->_getFormattedValue());
        }
        if (isset($this->power) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_POWER]) {
            $xw->writeAttribute(self::FIELD_POWER, $this->power->_getFormattedValue());
        }
        if (isset($this->backCurve) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_BACK_CURVE]) {
            $xw->writeAttribute(self::FIELD_BACK_CURVE, $this->backCurve->_getFormattedValue());
        }
        if (isset($this->diameter) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DIAMETER]) {
            $xw->writeAttribute(self::FIELD_DIAMETER, $this->diameter->_getFormattedValue());
        }
        if (isset($this->color) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_COLOR]) {
            $xw->writeAttribute(self::FIELD_COLOR, $this->color->_getFormattedValue());
        }
        if (isset($this->brand) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_BRAND]) {
            $xw->writeAttribute(self::FIELD_BRAND, $this->brand->_getFormattedValue());
        }
        if (isset($this->notes) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NOTES]) {
            $xw->writeAttribute(self::FIELD_NOTES, $this->notes->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->product)) {
            $xw->startElement(self::FIELD_PRODUCT);
            $this->product->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->eye)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EYE]
                || $this->eye->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EYE);
            $this->eye->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EYE]);
            $xw->endElement();
        }
        if (isset($this->sphere)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SPHERE]
                || $this->sphere->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SPHERE);
            $this->sphere->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SPHERE]);
            $xw->endElement();
        }
        if (isset($this->cylinder)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CYLINDER]
                || $this->cylinder->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CYLINDER);
            $this->cylinder->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CYLINDER]);
            $xw->endElement();
        }
        if (isset($this->axis)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_AXIS]
                || $this->axis->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_AXIS);
            $this->axis->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_AXIS]);
            $xw->endElement();
        }
        if (isset($this->prism)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PRISM]
                || $this->prism->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PRISM);
            $this->prism->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PRISM]);
            $xw->endElement();
        }
        if (isset($this->base)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_BASE]
                || $this->base->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_BASE);
            $this->base->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_BASE]);
            $xw->endElement();
        }
        if (isset($this->add)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ADD]
                || $this->add->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ADD);
            $this->add->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ADD]);
            $xw->endElement();
        }
        if (isset($this->power)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_POWER]
                || $this->power->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_POWER);
            $this->power->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_POWER]);
            $xw->endElement();
        }
        if (isset($this->backCurve)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_BACK_CURVE]
                || $this->backCurve->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_BACK_CURVE);
            $this->backCurve->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_BACK_CURVE]);
            $xw->endElement();
        }
        if (isset($this->diameter)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DIAMETER]
                || $this->diameter->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DIAMETER);
            $this->diameter->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DIAMETER]);
            $xw->endElement();
        }
        if (isset($this->duration)) {
            $xw->startElement(self::FIELD_DURATION);
            $this->duration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->color)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_COLOR]
                || $this->color->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_COLOR);
            $this->color->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_COLOR]);
            $xw->endElement();
        }
        if (isset($this->brand)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_BRAND]
                || $this->brand->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_BRAND);
            $this->brand->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_BRAND]);
            $xw->endElement();
        }
        if (isset($this->notes)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NOTES]
                || $this->notes->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NOTES);
            $this->notes->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NOTES]);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRVisionPrescriptionDispense)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_PRODUCT]) || array_key_exists(self::FIELD_PRODUCT, $json)) {
            $type->setProduct(FHIRCoding::jsonUnserialize($json[self::FIELD_PRODUCT], $config));
        }
        if (isset($json[self::FIELD_EYE])
            || isset($json[self::FIELD_EYE_EXT])
            || array_key_exists(self::FIELD_EYE, $json)
            || array_key_exists(self::FIELD_EYE_EXT, $json)) {
            $value = $json[self::FIELD_EYE] ?? null;
            $type->setEye(FHIRVisionEyes::jsonUnserialize(
                (is_array($value) ? $value : [FHIRVisionEyes::FIELD_VALUE => $value]) + ($json[self::FIELD_EYE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_SPHERE])
            || isset($json[self::FIELD_SPHERE_EXT])
            || array_key_exists(self::FIELD_SPHERE, $json)
            || array_key_exists(self::FIELD_SPHERE_EXT, $json)) {
            $value = $json[self::FIELD_SPHERE] ?? null;
            $type->setSphere(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_SPHERE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CYLINDER])
            || isset($json[self::FIELD_CYLINDER_EXT])
            || array_key_exists(self::FIELD_CYLINDER, $json)
            || array_key_exists(self::FIELD_CYLINDER_EXT, $json)) {
            $value = $json[self::FIELD_CYLINDER] ?? null;
            $type->setCylinder(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_CYLINDER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_AXIS])
            || isset($json[self::FIELD_AXIS_EXT])
            || array_key_exists(self::FIELD_AXIS, $json)
            || array_key_exists(self::FIELD_AXIS_EXT, $json)) {
            $value = $json[self::FIELD_AXIS] ?? null;
            $type->setAxis(FHIRInteger::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInteger::FIELD_VALUE => $value]) + ($json[self::FIELD_AXIS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PRISM])
            || isset($json[self::FIELD_PRISM_EXT])
            || array_key_exists(self::FIELD_PRISM, $json)
            || array_key_exists(self::FIELD_PRISM_EXT, $json)) {
            $value = $json[self::FIELD_PRISM] ?? null;
            $type->setPrism(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_PRISM_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_BASE])
            || isset($json[self::FIELD_BASE_EXT])
            || array_key_exists(self::FIELD_BASE, $json)
            || array_key_exists(self::FIELD_BASE_EXT, $json)) {
            $value = $json[self::FIELD_BASE] ?? null;
            $type->setBase(FHIRVisionBase::jsonUnserialize(
                (is_array($value) ? $value : [FHIRVisionBase::FIELD_VALUE => $value]) + ($json[self::FIELD_BASE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ADD])
            || isset($json[self::FIELD_ADD_EXT])
            || array_key_exists(self::FIELD_ADD, $json)
            || array_key_exists(self::FIELD_ADD_EXT, $json)) {
            $value = $json[self::FIELD_ADD] ?? null;
            $type->setAdd(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_ADD_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_POWER])
            || isset($json[self::FIELD_POWER_EXT])
            || array_key_exists(self::FIELD_POWER, $json)
            || array_key_exists(self::FIELD_POWER_EXT, $json)) {
            $value = $json[self::FIELD_POWER] ?? null;
            $type->setPower(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_POWER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_BACK_CURVE])
            || isset($json[self::FIELD_BACK_CURVE_EXT])
            || array_key_exists(self::FIELD_BACK_CURVE, $json)
            || array_key_exists(self::FIELD_BACK_CURVE_EXT, $json)) {
            $value = $json[self::FIELD_BACK_CURVE] ?? null;
            $type->setBackCurve(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_BACK_CURVE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DIAMETER])
            || isset($json[self::FIELD_DIAMETER_EXT])
            || array_key_exists(self::FIELD_DIAMETER, $json)
            || array_key_exists(self::FIELD_DIAMETER_EXT, $json)) {
            $value = $json[self::FIELD_DIAMETER] ?? null;
            $type->setDiameter(FHIRDecimal::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDecimal::FIELD_VALUE => $value]) + ($json[self::FIELD_DIAMETER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DURATION]) || array_key_exists(self::FIELD_DURATION, $json)) {
            $type->setDuration(FHIRSimpleQuantity::jsonUnserialize($json[self::FIELD_DURATION], $config));
        }
        if (isset($json[self::FIELD_COLOR])
            || isset($json[self::FIELD_COLOR_EXT])
            || array_key_exists(self::FIELD_COLOR, $json)
            || array_key_exists(self::FIELD_COLOR_EXT, $json)) {
            $value = $json[self::FIELD_COLOR] ?? null;
            $type->setColor(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_COLOR_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_BRAND])
            || isset($json[self::FIELD_BRAND_EXT])
            || array_key_exists(self::FIELD_BRAND, $json)
            || array_key_exists(self::FIELD_BRAND_EXT, $json)) {
            $value = $json[self::FIELD_BRAND] ?? null;
            $type->setBrand(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_BRAND_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_NOTES])
            || isset($json[self::FIELD_NOTES_EXT])
            || array_key_exists(self::FIELD_NOTES, $json)
            || array_key_exists(self::FIELD_NOTES_EXT, $json)) {
            $value = $json[self::FIELD_NOTES] ?? null;
            $type->setNotes(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_NOTES_EXT] ?? []),
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
        if (isset($this->product)) {
            $out->product = $this->product;
        }
        if (isset($this->eye)) {
            if (null !== ($val = $this->eye->getValue())) {
                $out->eye = $val;
            }
            if ($this->eye->_nonValueFieldDefined()) {
                $ext = $this->eye->jsonSerialize();
                unset($ext->value);
                $out->_eye = $ext;
            }
        }
        if (isset($this->sphere)) {
            if (null !== ($val = $this->sphere->getValue())) {
                $out->sphere = $val;
            }
            if ($this->sphere->_nonValueFieldDefined()) {
                $ext = $this->sphere->jsonSerialize();
                unset($ext->value);
                $out->_sphere = $ext;
            }
        }
        if (isset($this->cylinder)) {
            if (null !== ($val = $this->cylinder->getValue())) {
                $out->cylinder = $val;
            }
            if ($this->cylinder->_nonValueFieldDefined()) {
                $ext = $this->cylinder->jsonSerialize();
                unset($ext->value);
                $out->_cylinder = $ext;
            }
        }
        if (isset($this->axis)) {
            if (null !== ($val = $this->axis->getValue())) {
                $out->axis = $val;
            }
            if ($this->axis->_nonValueFieldDefined()) {
                $ext = $this->axis->jsonSerialize();
                unset($ext->value);
                $out->_axis = $ext;
            }
        }
        if (isset($this->prism)) {
            if (null !== ($val = $this->prism->getValue())) {
                $out->prism = $val;
            }
            if ($this->prism->_nonValueFieldDefined()) {
                $ext = $this->prism->jsonSerialize();
                unset($ext->value);
                $out->_prism = $ext;
            }
        }
        if (isset($this->base)) {
            if (null !== ($val = $this->base->getValue())) {
                $out->base = $val;
            }
            if ($this->base->_nonValueFieldDefined()) {
                $ext = $this->base->jsonSerialize();
                unset($ext->value);
                $out->_base = $ext;
            }
        }
        if (isset($this->add)) {
            if (null !== ($val = $this->add->getValue())) {
                $out->add = $val;
            }
            if ($this->add->_nonValueFieldDefined()) {
                $ext = $this->add->jsonSerialize();
                unset($ext->value);
                $out->_add = $ext;
            }
        }
        if (isset($this->power)) {
            if (null !== ($val = $this->power->getValue())) {
                $out->power = $val;
            }
            if ($this->power->_nonValueFieldDefined()) {
                $ext = $this->power->jsonSerialize();
                unset($ext->value);
                $out->_power = $ext;
            }
        }
        if (isset($this->backCurve)) {
            if (null !== ($val = $this->backCurve->getValue())) {
                $out->backCurve = $val;
            }
            if ($this->backCurve->_nonValueFieldDefined()) {
                $ext = $this->backCurve->jsonSerialize();
                unset($ext->value);
                $out->_backCurve = $ext;
            }
        }
        if (isset($this->diameter)) {
            if (null !== ($val = $this->diameter->getValue())) {
                $out->diameter = $val;
            }
            if ($this->diameter->_nonValueFieldDefined()) {
                $ext = $this->diameter->jsonSerialize();
                unset($ext->value);
                $out->_diameter = $ext;
            }
        }
        if (isset($this->duration)) {
            $out->duration = $this->duration;
        }
        if (isset($this->color)) {
            if (null !== ($val = $this->color->getValue())) {
                $out->color = $val;
            }
            if ($this->color->_nonValueFieldDefined()) {
                $ext = $this->color->jsonSerialize();
                unset($ext->value);
                $out->_color = $ext;
            }
        }
        if (isset($this->brand)) {
            if (null !== ($val = $this->brand->getValue())) {
                $out->brand = $val;
            }
            if ($this->brand->_nonValueFieldDefined()) {
                $ext = $this->brand->jsonSerialize();
                unset($ext->value);
                $out->_brand = $ext;
            }
        }
        if (isset($this->notes)) {
            if (null !== ($val = $this->notes->getValue())) {
                $out->notes = $val;
            }
            if ($this->notes->_nonValueFieldDefined()) {
                $ext = $this->notes->jsonSerialize();
                unset($ext->value);
                $out->_notes = $ext;
            }
        }
        return $out;
    }
}