<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 22nd, 2025 19:32+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
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
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRVisionBase;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRVisionEyes;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * An authorization for the supply of glasses and/or contact lenses to a patient.
 */
class FHIRVisionPrescriptionDispense extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE;


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
    public const FIELD_NOTE = 'note';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the type of vision correction product which is required for the
     * patient.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $product;
    /**
     * A coded concept listing the eye codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The eye for which the lens applies.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRVisionEyes 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $cylinder;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $prism;
    /**
     * A coded concept listing the base codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The relative base, or reference lens edge, for the prism.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRVisionBase 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal 
     */
    protected FHIRDecimal $diameter;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The recommended maximum wear period for the lens.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity 
     */
    protected FHIRQuantity $duration;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Special color or pattern.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $color;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Brand recommendations or restrictions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $brand;
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation[] 
     */
    protected array $note;

    /** Default validation map for fields in type VisionPrescription.Dispense */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRVisionPrescriptionDispense Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $product
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRVisionEyes $eye
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $sphere
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $cylinder
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $axis
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $prism
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRVisionBase $base
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $add
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $power
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $backCurve
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $diameter
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $duration
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $color
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $brand
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation[] $note
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $product = null,
                                null|FHIRVisionEyes $eye = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $sphere = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $cylinder = null,
                                null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $axis = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $prism = null,
                                null|FHIRVisionBase $base = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $add = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $power = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $backCurve = null,
                                null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $diameter = null,
                                null|FHIRQuantity $duration = null,
                                null|string|FHIRStringPrimitive|FHIRString $color = null,
                                null|string|FHIRStringPrimitive|FHIRString $brand = null,
                                null|iterable $note = null,
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
        if (null !== $note) {
            $this->setNote(...$note);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the type of vision correction product which is required for the
     * patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getProduct(): null|FHIRCodeableConcept
    {
        return $this->product ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the type of vision correction product which is required for the
     * patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $product
     * @return static
     */
    public function setProduct(null|FHIRCodeableConcept $product): self
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRVisionEyes
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRVisionEyes $eye
     * @return static
     */
    public function setEye(null|FHIRVisionEyes $eye): self
    {
        if (null === $eye) {
            unset($this->eye);
            return $this;
        }
        $this->eye = $eye;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $sphere
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSphere(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $sphere,
                              null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $sphere) {
            unset($this->sphere);
            return $this;
        }
        if (!($sphere instanceof FHIRDecimal)) {
            $sphere = new FHIRDecimal(value: $sphere);
        }
        if (null !== $valueXMLLocation) {
            $sphere->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $sphere->_getValueXMLLocation()) {
            $sphere->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->sphere = $sphere;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $cylinder
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCylinder(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $cylinder,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $cylinder) {
            unset($this->cylinder);
            return $this;
        }
        if (!($cylinder instanceof FHIRDecimal)) {
            $cylinder = new FHIRDecimal(value: $cylinder);
        }
        if (null !== $valueXMLLocation) {
            $cylinder->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $cylinder->_getValueXMLLocation()) {
            $cylinder->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->cylinder = $cylinder;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger
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
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger $axis
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAxis(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $axis,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $axis) {
            unset($this->axis);
            return $this;
        }
        if (!($axis instanceof FHIRInteger)) {
            $axis = new FHIRInteger(value: $axis);
        }
        if (null !== $valueXMLLocation) {
            $axis->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $axis->_getValueXMLLocation()) {
            $axis->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->axis = $axis;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $prism
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPrism(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $prism,
                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $prism) {
            unset($this->prism);
            return $this;
        }
        if (!($prism instanceof FHIRDecimal)) {
            $prism = new FHIRDecimal(value: $prism);
        }
        if (null !== $valueXMLLocation) {
            $prism->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $prism->_getValueXMLLocation()) {
            $prism->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->prism = $prism;
        return $this;
    }

    /**
     * A coded concept listing the base codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The relative base, or reference lens edge, for the prism.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRVisionBase
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRVisionBase $base
     * @return static
     */
    public function setBase(null|FHIRVisionBase $base): self
    {
        if (null === $base) {
            unset($this->base);
            return $this;
        }
        $this->base = $base;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $add
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAdd(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $add,
                           null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $add) {
            unset($this->add);
            return $this;
        }
        if (!($add instanceof FHIRDecimal)) {
            $add = new FHIRDecimal(value: $add);
        }
        if (null !== $valueXMLLocation) {
            $add->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $add->_getValueXMLLocation()) {
            $add->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->add = $add;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $power
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPower(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $power,
                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $power) {
            unset($this->power);
            return $this;
        }
        if (!($power instanceof FHIRDecimal)) {
            $power = new FHIRDecimal(value: $power);
        }
        if (null !== $valueXMLLocation) {
            $power->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $power->_getValueXMLLocation()) {
            $power->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->power = $power;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $backCurve
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setBackCurve(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $backCurve,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $backCurve) {
            unset($this->backCurve);
            return $this;
        }
        if (!($backCurve instanceof FHIRDecimal)) {
            $backCurve = new FHIRDecimal(value: $backCurve);
        }
        if (null !== $valueXMLLocation) {
            $backCurve->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $backCurve->_getValueXMLLocation()) {
            $backCurve->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->backCurve = $backCurve;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal
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
     * @param null|string|float|int|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal $diameter
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDiameter(null|string|float|int|FHIRDecimalPrimitive|FHIRDecimal $diameter,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $diameter) {
            unset($this->diameter);
            return $this;
        }
        if (!($diameter instanceof FHIRDecimal)) {
            $diameter = new FHIRDecimal(value: $diameter);
        }
        if (null !== $valueXMLLocation) {
            $diameter->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $diameter->_getValueXMLLocation()) {
            $diameter->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->diameter = $diameter;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The recommended maximum wear period for the lens.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity
     */
    public function getDuration(): null|FHIRQuantity
    {
        return $this->duration ?? null;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The recommended maximum wear period for the lens.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity $duration
     * @return static
     */
    public function setDuration(null|FHIRQuantity $duration): self
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $color
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setColor(null|string|FHIRStringPrimitive|FHIRString $color,
                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $color) {
            unset($this->color);
            return $this;
        }
        if (!($color instanceof FHIRString)) {
            $color = new FHIRString(value: $color);
        }
        if (null !== $valueXMLLocation) {
            $color->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $color->_getValueXMLLocation()) {
            $color->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->color = $color;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Brand recommendations or restrictions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $brand
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setBrand(null|string|FHIRStringPrimitive|FHIRString $brand,
                             null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $brand) {
            unset($this->brand);
            return $this;
        }
        if (!($brand instanceof FHIRString)) {
            $brand = new FHIRString(value: $brand);
        }
        if (null !== $valueXMLLocation) {
            $brand->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $brand->_getValueXMLLocation()) {
            $brand->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->brand = $brand;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation[]
     */
    public function getNote(): array
    {
        return $this->note ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation>
     */
    public function getNoteIterator(): iterable
    {
        if (!isset($this->note) || [] === $this->note) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->note);
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(FHIRAnnotation $note): self
    {
        if (!isset($this->note)) {
            $this->note = [];
        }
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation ...$note
     * @return static
     */
    public function setNote(FHIRAnnotation ...$note): self
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_DEFAULT_VALIDATION_RULES;
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
        if (isset($validationRules[self::FIELD_PRODUCT])) {
            $v = $this->getProduct();
            foreach($validationRules[self::FIELD_PRODUCT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRODUCT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT])) {
                        $errs[self::FIELD_PRODUCT] = [];
                    }
                    $errs[self::FIELD_PRODUCT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EYE])) {
            $v = $this->getEye();
            foreach($validationRules[self::FIELD_EYE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EYE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EYE])) {
                        $errs[self::FIELD_EYE] = [];
                    }
                    $errs[self::FIELD_EYE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPHERE])) {
            $v = $this->getSphere();
            foreach($validationRules[self::FIELD_SPHERE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SPHERE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPHERE])) {
                        $errs[self::FIELD_SPHERE] = [];
                    }
                    $errs[self::FIELD_SPHERE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CYLINDER])) {
            $v = $this->getCylinder();
            foreach($validationRules[self::FIELD_CYLINDER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CYLINDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CYLINDER])) {
                        $errs[self::FIELD_CYLINDER] = [];
                    }
                    $errs[self::FIELD_CYLINDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AXIS])) {
            $v = $this->getAxis();
            foreach($validationRules[self::FIELD_AXIS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AXIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AXIS])) {
                        $errs[self::FIELD_AXIS] = [];
                    }
                    $errs[self::FIELD_AXIS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRISM])) {
            $v = $this->getPrism();
            foreach($validationRules[self::FIELD_PRISM] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRISM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRISM])) {
                        $errs[self::FIELD_PRISM] = [];
                    }
                    $errs[self::FIELD_PRISM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASE])) {
            $v = $this->getBase();
            foreach($validationRules[self::FIELD_BASE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BASE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASE])) {
                        $errs[self::FIELD_BASE] = [];
                    }
                    $errs[self::FIELD_BASE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADD])) {
            $v = $this->getAdd();
            foreach($validationRules[self::FIELD_ADD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ADD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADD])) {
                        $errs[self::FIELD_ADD] = [];
                    }
                    $errs[self::FIELD_ADD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POWER])) {
            $v = $this->getPower();
            foreach($validationRules[self::FIELD_POWER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_POWER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POWER])) {
                        $errs[self::FIELD_POWER] = [];
                    }
                    $errs[self::FIELD_POWER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BACK_CURVE])) {
            $v = $this->getBackCurve();
            foreach($validationRules[self::FIELD_BACK_CURVE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BACK_CURVE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BACK_CURVE])) {
                        $errs[self::FIELD_BACK_CURVE] = [];
                    }
                    $errs[self::FIELD_BACK_CURVE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIAMETER])) {
            $v = $this->getDiameter();
            foreach($validationRules[self::FIELD_DIAMETER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DIAMETER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DIAMETER])) {
                        $errs[self::FIELD_DIAMETER] = [];
                    }
                    $errs[self::FIELD_DIAMETER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION])) {
            $v = $this->getDuration();
            foreach($validationRules[self::FIELD_DURATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION])) {
                        $errs[self::FIELD_DURATION] = [];
                    }
                    $errs[self::FIELD_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COLOR])) {
            $v = $this->getColor();
            foreach($validationRules[self::FIELD_COLOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_COLOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COLOR])) {
                        $errs[self::FIELD_COLOR] = [];
                    }
                    $errs[self::FIELD_COLOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BRAND])) {
            $v = $this->getBrand();
            foreach($validationRules[self::FIELD_BRAND] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BRAND, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BRAND])) {
                        $errs[self::FIELD_BRAND] = [];
                    }
                    $errs[self::FIELD_BRAND][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
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

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
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
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRODUCT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setProduct(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_EYE === $childName) {
                $v = new FHIRVisionEyes(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setEye(FHIRVisionEyes::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SPHERE === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSphere(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CYLINDER === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCylinder(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_AXIS === $childName) {
                $v = new FHIRInteger(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAxis(FHIRInteger::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRISM === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPrism(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BASE === $childName) {
                $v = new FHIRVisionBase(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setBase(FHIRVisionBase::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ADD === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setAdd(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_POWER === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPower(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BACK_CURVE === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setBackCurve(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DIAMETER === $childName) {
                $v = new FHIRDecimal(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setDiameter(FHIRDecimal::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DURATION === $childName) {
                $v = new FHIRQuantity();
                $type->setDuration(FHIRQuantity::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_COLOR === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setColor(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_BRAND === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setBrand(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NOTE === $childName) {
                $v = new FHIRAnnotation();
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SPHERE])) {
            $pt = $type->getSphere();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SPHERE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSphere(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_SPHERE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CYLINDER])) {
            $pt = $type->getCylinder();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_CYLINDER]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCylinder(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_CYLINDER],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_AXIS])) {
            $pt = $type->getAxis();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_AXIS]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAxis(new FHIRInteger(
                    value: (string)$attributes[self::FIELD_AXIS],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PRISM])) {
            $pt = $type->getPrism();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PRISM]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPrism(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_PRISM],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_ADD])) {
            $pt = $type->getAdd();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ADD]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setAdd(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_ADD],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_POWER])) {
            $pt = $type->getPower();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_POWER]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPower(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_POWER],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_BACK_CURVE])) {
            $pt = $type->getBackCurve();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_BACK_CURVE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setBackCurve(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_BACK_CURVE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DIAMETER])) {
            $pt = $type->getDiameter();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_DIAMETER]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDiameter(new FHIRDecimal(
                    value: (string)$attributes[self::FIELD_DIAMETER],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_COLOR])) {
            $pt = $type->getColor();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_COLOR]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setColor(new FHIRString(
                    value: (string)$attributes[self::FIELD_COLOR],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_BRAND])) {
            $pt = $type->getBrand();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_BRAND]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setBrand(new FHIRString(
                    value: (string)$attributes[self::FIELD_BRAND],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
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
            $xw->openRootNode('VisionPrescriptionDispense', $this->_getSourceXMLNS());
        }
        if (isset($this->sphere) && $this->sphere->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SPHERE, $this->sphere->getValue()?->_getFormattedValue());
        }
        if (isset($this->cylinder) && $this->cylinder->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CYLINDER, $this->cylinder->getValue()?->_getFormattedValue());
        }
        if (isset($this->axis) && $this->axis->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_AXIS, $this->axis->getValue()?->_getFormattedValue());
        }
        if (isset($this->prism) && $this->prism->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PRISM, $this->prism->getValue()?->_getFormattedValue());
        }
        if (isset($this->add) && $this->add->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_ADD, $this->add->getValue()?->_getFormattedValue());
        }
        if (isset($this->power) && $this->power->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_POWER, $this->power->getValue()?->_getFormattedValue());
        }
        if (isset($this->backCurve) && $this->backCurve->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_BACK_CURVE, $this->backCurve->getValue()?->_getFormattedValue());
        }
        if (isset($this->diameter) && $this->diameter->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DIAMETER, $this->diameter->getValue()?->_getFormattedValue());
        }
        if (isset($this->color) && $this->color->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_COLOR, $this->color->getValue()?->_getFormattedValue());
        }
        if (isset($this->brand) && $this->brand->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_BRAND, $this->brand->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->product)) {
            $xw->startElement(self::FIELD_PRODUCT);
            $this->product->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->eye)) {
            $xw->startElement(self::FIELD_EYE);
            $this->eye->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sphere) && $this->sphere->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SPHERE);
            $this->sphere->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->cylinder) && $this->cylinder->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CYLINDER);
            $this->cylinder->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->axis) && $this->axis->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_AXIS);
            $this->axis->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->prism) && $this->prism->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PRISM);
            $this->prism->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->base)) {
            $xw->startElement(self::FIELD_BASE);
            $this->base->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->add) && $this->add->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_ADD);
            $this->add->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->power) && $this->power->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_POWER);
            $this->power->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->backCurve) && $this->backCurve->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_BACK_CURVE);
            $this->backCurve->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->diameter) && $this->diameter->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DIAMETER);
            $this->diameter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->duration)) {
            $xw->startElement(self::FIELD_DURATION);
            $this->duration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->color) && $this->color->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_COLOR);
            $this->color->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->brand) && $this->brand->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_BRAND);
            $this->brand->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->note)) {
            foreach ($this->note as $v) {
                $xw->startElement(self::FIELD_NOTE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
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
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
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
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_PRODUCT]) || array_key_exists(self::FIELD_PRODUCT, $json)) {
            $type->setProduct(FHIRCodeableConcept::jsonUnserialize(
                json: $json[self::FIELD_PRODUCT],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_EYE]) || isset($json[self::FIELD_EYE_EXT]) || array_key_exists(self::FIELD_EYE, $json) || array_key_exists(self::FIELD_EYE_EXT, $json)) {
            $value = $json[self::FIELD_EYE] ?? null;
            $ext = (array)($json[self::FIELD_EYE_EXT] ?? []);
            $type->setEye(FHIRVisionEyes::jsonUnserialize(
                json: [FHIRVisionEyes::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_SPHERE]) || isset($json[self::FIELD_SPHERE_EXT]) || array_key_exists(self::FIELD_SPHERE, $json) || array_key_exists(self::FIELD_SPHERE_EXT, $json)) {
            $value = $json[self::FIELD_SPHERE] ?? null;
            $ext = (array)($json[self::FIELD_SPHERE_EXT] ?? []);
            $type->setSphere(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CYLINDER]) || isset($json[self::FIELD_CYLINDER_EXT]) || array_key_exists(self::FIELD_CYLINDER, $json) || array_key_exists(self::FIELD_CYLINDER_EXT, $json)) {
            $value = $json[self::FIELD_CYLINDER] ?? null;
            $ext = (array)($json[self::FIELD_CYLINDER_EXT] ?? []);
            $type->setCylinder(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_AXIS]) || isset($json[self::FIELD_AXIS_EXT]) || array_key_exists(self::FIELD_AXIS, $json) || array_key_exists(self::FIELD_AXIS_EXT, $json)) {
            $value = $json[self::FIELD_AXIS] ?? null;
            $ext = (array)($json[self::FIELD_AXIS_EXT] ?? []);
            $type->setAxis(FHIRInteger::jsonUnserialize(
                json: [FHIRInteger::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_PRISM]) || isset($json[self::FIELD_PRISM_EXT]) || array_key_exists(self::FIELD_PRISM, $json) || array_key_exists(self::FIELD_PRISM_EXT, $json)) {
            $value = $json[self::FIELD_PRISM] ?? null;
            $ext = (array)($json[self::FIELD_PRISM_EXT] ?? []);
            $type->setPrism(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_BASE]) || isset($json[self::FIELD_BASE_EXT]) || array_key_exists(self::FIELD_BASE, $json) || array_key_exists(self::FIELD_BASE_EXT, $json)) {
            $value = $json[self::FIELD_BASE] ?? null;
            $ext = (array)($json[self::FIELD_BASE_EXT] ?? []);
            $type->setBase(FHIRVisionBase::jsonUnserialize(
                json: [FHIRVisionBase::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_ADD]) || isset($json[self::FIELD_ADD_EXT]) || array_key_exists(self::FIELD_ADD, $json) || array_key_exists(self::FIELD_ADD_EXT, $json)) {
            $value = $json[self::FIELD_ADD] ?? null;
            $ext = (array)($json[self::FIELD_ADD_EXT] ?? []);
            $type->setAdd(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_POWER]) || isset($json[self::FIELD_POWER_EXT]) || array_key_exists(self::FIELD_POWER, $json) || array_key_exists(self::FIELD_POWER_EXT, $json)) {
            $value = $json[self::FIELD_POWER] ?? null;
            $ext = (array)($json[self::FIELD_POWER_EXT] ?? []);
            $type->setPower(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_BACK_CURVE]) || isset($json[self::FIELD_BACK_CURVE_EXT]) || array_key_exists(self::FIELD_BACK_CURVE, $json) || array_key_exists(self::FIELD_BACK_CURVE_EXT, $json)) {
            $value = $json[self::FIELD_BACK_CURVE] ?? null;
            $ext = (array)($json[self::FIELD_BACK_CURVE_EXT] ?? []);
            $type->setBackCurve(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DIAMETER]) || isset($json[self::FIELD_DIAMETER_EXT]) || array_key_exists(self::FIELD_DIAMETER, $json) || array_key_exists(self::FIELD_DIAMETER_EXT, $json)) {
            $value = $json[self::FIELD_DIAMETER] ?? null;
            $ext = (array)($json[self::FIELD_DIAMETER_EXT] ?? []);
            $type->setDiameter(FHIRDecimal::jsonUnserialize(
                json: [FHIRDecimal::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_DURATION]) || array_key_exists(self::FIELD_DURATION, $json)) {
            $type->setDuration(FHIRQuantity::jsonUnserialize(
                json: $json[self::FIELD_DURATION],
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_COLOR]) || isset($json[self::FIELD_COLOR_EXT]) || array_key_exists(self::FIELD_COLOR, $json) || array_key_exists(self::FIELD_COLOR_EXT, $json)) {
            $value = $json[self::FIELD_COLOR] ?? null;
            $ext = (array)($json[self::FIELD_COLOR_EXT] ?? []);
            $type->setColor(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_BRAND]) || isset($json[self::FIELD_BRAND_EXT]) || array_key_exists(self::FIELD_BRAND, $json) || array_key_exists(self::FIELD_BRAND_EXT, $json)) {
            $value = $json[self::FIELD_BRAND] ?? null;
            $ext = (array)($json[self::FIELD_BRAND_EXT] ?? []);
            $type->setBrand(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_NOTE]) || array_key_exists(self::FIELD_NOTE, $json)) {
            $vs = $json[self::FIELD_NOTE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addNote(FHIRAnnotation::jsonUnserialize(
                    json: $v,
                    config: $config,
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
        if (isset($this->product)) {
            $out->product = $this->product;
        }
        if (isset($this->eye)) {
            if (null !== ($val = $this->eye->getValue())) {
                $out->eye = $val;
            }
            $ext = $this->eye->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_eye = $ext;
            }
        }
        if (isset($this->sphere)) {
            if (null !== ($val = $this->sphere->getValue())) {
                $out->sphere = $val;
            }
            $ext = $this->sphere->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_sphere = $ext;
            }
        }
        if (isset($this->cylinder)) {
            if (null !== ($val = $this->cylinder->getValue())) {
                $out->cylinder = $val;
            }
            $ext = $this->cylinder->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_cylinder = $ext;
            }
        }
        if (isset($this->axis)) {
            if (null !== ($val = $this->axis->getValue())) {
                $out->axis = $val;
            }
            $ext = $this->axis->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_axis = $ext;
            }
        }
        if (isset($this->prism)) {
            if (null !== ($val = $this->prism->getValue())) {
                $out->prism = $val;
            }
            $ext = $this->prism->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_prism = $ext;
            }
        }
        if (isset($this->base)) {
            if (null !== ($val = $this->base->getValue())) {
                $out->base = $val;
            }
            $ext = $this->base->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_base = $ext;
            }
        }
        if (isset($this->add)) {
            if (null !== ($val = $this->add->getValue())) {
                $out->add = $val;
            }
            $ext = $this->add->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_add = $ext;
            }
        }
        if (isset($this->power)) {
            if (null !== ($val = $this->power->getValue())) {
                $out->power = $val;
            }
            $ext = $this->power->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_power = $ext;
            }
        }
        if (isset($this->backCurve)) {
            if (null !== ($val = $this->backCurve->getValue())) {
                $out->backCurve = $val;
            }
            $ext = $this->backCurve->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_backCurve = $ext;
            }
        }
        if (isset($this->diameter)) {
            if (null !== ($val = $this->diameter->getValue())) {
                $out->diameter = $val;
            }
            $ext = $this->diameter->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
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
            $ext = $this->color->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_color = $ext;
            }
        }
        if (isset($this->brand)) {
            if (null !== ($val = $this->brand->getValue())) {
                $out->brand = $val;
            }
            $ext = $this->brand->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_brand = $ext;
            }
        }
        if (isset($this->note) && [] !== $this->note) {
            $out->note = $this->note;
        }
        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}