<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 7th, 2019 22:31+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRVisionBase;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRVisionEyes;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * An authorization for the supply of glasses and/or contact lenses to a patient.
 *
 * Class FHIRVisionPrescriptionDispense
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription
 */
class FHIRVisionPrescriptionDispense extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ADD = 'add';
    const FIELD_ADD_EXT = '_add';
    const FIELD_AXIS = 'axis';
    const FIELD_AXIS_EXT = '_axis';
    const FIELD_BACK_CURVE = 'backCurve';
    const FIELD_BACK_CURVE_EXT = '_backCurve';
    const FIELD_BASE = 'base';
    const FIELD_BRAND = 'brand';
    const FIELD_BRAND_EXT = '_brand';
    const FIELD_COLOR = 'color';
    const FIELD_COLOR_EXT = '_color';
    const FIELD_CYLINDER = 'cylinder';
    const FIELD_CYLINDER_EXT = '_cylinder';
    const FIELD_DIAMETER = 'diameter';
    const FIELD_DIAMETER_EXT = '_diameter';
    const FIELD_DURATION = 'duration';
    const FIELD_EYE = 'eye';
    const FIELD_NOTES = 'notes';
    const FIELD_NOTES_EXT = '_notes';
    const FIELD_POWER = 'power';
    const FIELD_POWER_EXT = '_power';
    const FIELD_PRISM = 'prism';
    const FIELD_PRISM_EXT = '_prism';
    const FIELD_PRODUCT = 'product';
    const FIELD_SPHERE = 'sphere';
    const FIELD_SPHERE_EXT = '_sphere';

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Power adjustment for multifocal lenses measured in diopters (0.25 units).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    private $add = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
     */
    private $axis = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Back curvature measured in millimeters.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    private $backCurve = null;
    /**
     * A coded concept listing the base codes.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The relative base, or reference lens edge, for the prism.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRVisionBase
     */
    private $base = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Brand recommendations or restrictions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    private $brand = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Special color or pattern.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    private $color = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Power adjustment for astigmatism measured in diopters (0.25 units).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    private $cylinder = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Contact lens diameter measured in millimeters.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    private $diameter = null;
    /**
     * The recommended maximum wear period for the lens.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    private $duration = null;
    /**
     * A coded concept listing the eye codes.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The eye for which the lens applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRVisionEyes
     */
    private $eye = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    private $notes = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Contact lens power measured in diopters (0.25 units).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    private $power = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Amount of prism to compensate for eye alignment in fractional units.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    private $prism = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the type of vision correction product which is required for the
     * patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    private $product = null;
    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Lens power measured in diopters (0.25 units).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    private $sphere = null;

    /**
     * FHIRVisionPrescriptionDispense Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVisionPrescriptionDispense::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ADD])) {
            $ext = (isset($data[self::FIELD_ADD_EXT]) && is_array($data[self::FIELD_ADD_EXT]))
                ? $data[self::FIELD_ADD_EXT]
                : null;
            if ($data[self::FIELD_ADD] instanceof FHIRDecimal) {
                $this->setAdd($data[self::FIELD_ADD]);
            } elseif ($ext && is_scalar($data[self::FIELD_ADD])) {
                $this->setAdd(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_ADD]] + $ext));
            } else {
                $this->setAdd(new FHIRDecimal($data[self::FIELD_ADD]));
            }
        }
        if (isset($data[self::FIELD_AXIS])) {
            $ext = (isset($data[self::FIELD_AXIS_EXT]) && is_array($data[self::FIELD_AXIS_EXT]))
                ? $data[self::FIELD_AXIS_EXT]
                : null;
            if ($data[self::FIELD_AXIS] instanceof FHIRInteger) {
                $this->setAxis($data[self::FIELD_AXIS]);
            } elseif ($ext && is_scalar($data[self::FIELD_AXIS])) {
                $this->setAxis(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_AXIS]] + $ext));
            } else {
                $this->setAxis(new FHIRInteger($data[self::FIELD_AXIS]));
            }
        }
        if (isset($data[self::FIELD_BACK_CURVE])) {
            $ext = (isset($data[self::FIELD_BACK_CURVE_EXT]) && is_array($data[self::FIELD_BACK_CURVE_EXT]))
                ? $data[self::FIELD_BACK_CURVE_EXT]
                : null;
            if ($data[self::FIELD_BACK_CURVE] instanceof FHIRDecimal) {
                $this->setBackCurve($data[self::FIELD_BACK_CURVE]);
            } elseif ($ext && is_scalar($data[self::FIELD_BACK_CURVE])) {
                $this->setBackCurve(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_BACK_CURVE]] + $ext));
            } else {
                $this->setBackCurve(new FHIRDecimal($data[self::FIELD_BACK_CURVE]));
            }
        }
        if (isset($data[self::FIELD_BASE])) {
            if ($data[self::FIELD_BASE] instanceof FHIRVisionBase) {
                $this->setBase($data[self::FIELD_BASE]);
            } else {
                $this->setBase(new FHIRVisionBase($data[self::FIELD_BASE]));
            }
        }
        if (isset($data[self::FIELD_BRAND])) {
            $ext = (isset($data[self::FIELD_BRAND_EXT]) && is_array($data[self::FIELD_BRAND_EXT]))
                ? $data[self::FIELD_BRAND_EXT]
                : null;
            if ($data[self::FIELD_BRAND] instanceof FHIRString) {
                $this->setBrand($data[self::FIELD_BRAND]);
            } elseif ($ext && is_scalar($data[self::FIELD_BRAND])) {
                $this->setBrand(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_BRAND]] + $ext));
            } else {
                $this->setBrand(new FHIRString($data[self::FIELD_BRAND]));
            }
        }
        if (isset($data[self::FIELD_COLOR])) {
            $ext = (isset($data[self::FIELD_COLOR_EXT]) && is_array($data[self::FIELD_COLOR_EXT]))
                ? $data[self::FIELD_COLOR_EXT]
                : null;
            if ($data[self::FIELD_COLOR] instanceof FHIRString) {
                $this->setColor($data[self::FIELD_COLOR]);
            } elseif ($ext && is_scalar($data[self::FIELD_COLOR])) {
                $this->setColor(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_COLOR]] + $ext));
            } else {
                $this->setColor(new FHIRString($data[self::FIELD_COLOR]));
            }
        }
        if (isset($data[self::FIELD_CYLINDER])) {
            $ext = (isset($data[self::FIELD_CYLINDER_EXT]) && is_array($data[self::FIELD_CYLINDER_EXT]))
                ? $data[self::FIELD_CYLINDER_EXT]
                : null;
            if ($data[self::FIELD_CYLINDER] instanceof FHIRDecimal) {
                $this->setCylinder($data[self::FIELD_CYLINDER]);
            } elseif ($ext && is_scalar($data[self::FIELD_CYLINDER])) {
                $this->setCylinder(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_CYLINDER]] + $ext));
            } else {
                $this->setCylinder(new FHIRDecimal($data[self::FIELD_CYLINDER]));
            }
        }
        if (isset($data[self::FIELD_DIAMETER])) {
            $ext = (isset($data[self::FIELD_DIAMETER_EXT]) && is_array($data[self::FIELD_DIAMETER_EXT]))
                ? $data[self::FIELD_DIAMETER_EXT]
                : null;
            if ($data[self::FIELD_DIAMETER] instanceof FHIRDecimal) {
                $this->setDiameter($data[self::FIELD_DIAMETER]);
            } elseif ($ext && is_scalar($data[self::FIELD_DIAMETER])) {
                $this->setDiameter(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_DIAMETER]] + $ext));
            } else {
                $this->setDiameter(new FHIRDecimal($data[self::FIELD_DIAMETER]));
            }
        }
        if (isset($data[self::FIELD_DURATION])) {
            if ($data[self::FIELD_DURATION] instanceof FHIRSimpleQuantity) {
                $this->setDuration($data[self::FIELD_DURATION]);
            } else {
                $this->setDuration(new FHIRSimpleQuantity($data[self::FIELD_DURATION]));
            }
        }
        if (isset($data[self::FIELD_EYE])) {
            if ($data[self::FIELD_EYE] instanceof FHIRVisionEyes) {
                $this->setEye($data[self::FIELD_EYE]);
            } else {
                $this->setEye(new FHIRVisionEyes($data[self::FIELD_EYE]));
            }
        }
        if (isset($data[self::FIELD_NOTES])) {
            $ext = (isset($data[self::FIELD_NOTES_EXT]) && is_array($data[self::FIELD_NOTES_EXT]))
                ? $data[self::FIELD_NOTES_EXT]
                : null;
            if ($data[self::FIELD_NOTES] instanceof FHIRString) {
                $this->setNotes($data[self::FIELD_NOTES]);
            } elseif ($ext && is_scalar($data[self::FIELD_NOTES])) {
                $this->setNotes(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NOTES]] + $ext));
            } else {
                $this->setNotes(new FHIRString($data[self::FIELD_NOTES]));
            }
        }
        if (isset($data[self::FIELD_POWER])) {
            $ext = (isset($data[self::FIELD_POWER_EXT]) && is_array($data[self::FIELD_POWER_EXT]))
                ? $data[self::FIELD_POWER_EXT]
                : null;
            if ($data[self::FIELD_POWER] instanceof FHIRDecimal) {
                $this->setPower($data[self::FIELD_POWER]);
            } elseif ($ext && is_scalar($data[self::FIELD_POWER])) {
                $this->setPower(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_POWER]] + $ext));
            } else {
                $this->setPower(new FHIRDecimal($data[self::FIELD_POWER]));
            }
        }
        if (isset($data[self::FIELD_PRISM])) {
            $ext = (isset($data[self::FIELD_PRISM_EXT]) && is_array($data[self::FIELD_PRISM_EXT]))
                ? $data[self::FIELD_PRISM_EXT]
                : null;
            if ($data[self::FIELD_PRISM] instanceof FHIRDecimal) {
                $this->setPrism($data[self::FIELD_PRISM]);
            } elseif ($ext && is_scalar($data[self::FIELD_PRISM])) {
                $this->setPrism(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_PRISM]] + $ext));
            } else {
                $this->setPrism(new FHIRDecimal($data[self::FIELD_PRISM]));
            }
        }
        if (isset($data[self::FIELD_PRODUCT])) {
            if ($data[self::FIELD_PRODUCT] instanceof FHIRCoding) {
                $this->setProduct($data[self::FIELD_PRODUCT]);
            } else {
                $this->setProduct(new FHIRCoding($data[self::FIELD_PRODUCT]));
            }
        }
        if (isset($data[self::FIELD_SPHERE])) {
            $ext = (isset($data[self::FIELD_SPHERE_EXT]) && is_array($data[self::FIELD_SPHERE_EXT]))
                ? $data[self::FIELD_SPHERE_EXT]
                : null;
            if ($data[self::FIELD_SPHERE] instanceof FHIRDecimal) {
                $this->setSphere($data[self::FIELD_SPHERE]);
            } elseif ($ext && is_scalar($data[self::FIELD_SPHERE])) {
                $this->setSphere(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $data[self::FIELD_SPHERE]] + $ext));
            } else {
                $this->setSphere(new FHIRDecimal($data[self::FIELD_SPHERE]));
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
     * @return string|null
     */
    public function getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @return string
     */
    public function getFHIRXMLElementDefinition()
    {
        $xmlns = $this->getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<VisionPrescriptionDispense{$xmlns}></VisionPrescriptionDispense>";
    }


    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Power adjustment for multifocal lenses measured in diopters (0.25 units).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getAdd()
    {
        return $this->add;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Power adjustment for multifocal lenses measured in diopters (0.25 units).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $add
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     */
    public function setAdd($add = null)
    {
        if (null === $add) {
            $this->add = null;
            return $this;
        }
        if ($add instanceof FHIRDecimal) {
            $this->add = $add;
            return $this;
        }
        $this->add = new FHIRDecimal($add);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
     */
    public function getAxis()
    {
        return $this->axis;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger $axis
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     */
    public function setAxis($axis = null)
    {
        if (null === $axis) {
            $this->axis = null;
            return $this;
        }
        if ($axis instanceof FHIRInteger) {
            $this->axis = $axis;
            return $this;
        }
        $this->axis = new FHIRInteger($axis);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Back curvature measured in millimeters.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getBackCurve()
    {
        return $this->backCurve;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Back curvature measured in millimeters.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $backCurve
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     */
    public function setBackCurve($backCurve = null)
    {
        if (null === $backCurve) {
            $this->backCurve = null;
            return $this;
        }
        if ($backCurve instanceof FHIRDecimal) {
            $this->backCurve = $backCurve;
            return $this;
        }
        $this->backCurve = new FHIRDecimal($backCurve);
        return $this;
    }

    /**
     * A coded concept listing the base codes.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The relative base, or reference lens edge, for the prism.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRVisionBase
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * A coded concept listing the base codes.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The relative base, or reference lens edge, for the prism.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRVisionBase $base
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     */
    public function setBase(FHIRVisionBase $base = null)
    {
        $this->base = $base;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Brand recommendations or restrictions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Brand recommendations or restrictions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $brand
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     */
    public function setBrand($brand = null)
    {
        if (null === $brand) {
            $this->brand = null;
            return $this;
        }
        if ($brand instanceof FHIRString) {
            $this->brand = $brand;
            return $this;
        }
        $this->brand = new FHIRString($brand);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Special color or pattern.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Special color or pattern.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $color
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     */
    public function setColor($color = null)
    {
        if (null === $color) {
            $this->color = null;
            return $this;
        }
        if ($color instanceof FHIRString) {
            $this->color = $color;
            return $this;
        }
        $this->color = new FHIRString($color);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Power adjustment for astigmatism measured in diopters (0.25 units).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getCylinder()
    {
        return $this->cylinder;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Power adjustment for astigmatism measured in diopters (0.25 units).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $cylinder
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     */
    public function setCylinder($cylinder = null)
    {
        if (null === $cylinder) {
            $this->cylinder = null;
            return $this;
        }
        if ($cylinder instanceof FHIRDecimal) {
            $this->cylinder = $cylinder;
            return $this;
        }
        $this->cylinder = new FHIRDecimal($cylinder);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Contact lens diameter measured in millimeters.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getDiameter()
    {
        return $this->diameter;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Contact lens diameter measured in millimeters.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $diameter
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     */
    public function setDiameter($diameter = null)
    {
        if (null === $diameter) {
            $this->diameter = null;
            return $this;
        }
        if ($diameter instanceof FHIRDecimal) {
            $this->diameter = $diameter;
            return $this;
        }
        $this->diameter = new FHIRDecimal($diameter);
        return $this;
    }

    /**
     * The recommended maximum wear period for the lens.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * The recommended maximum wear period for the lens.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity $duration
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     */
    public function setDuration(FHIRSimpleQuantity $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * A coded concept listing the eye codes.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The eye for which the lens applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRVisionEyes
     */
    public function getEye()
    {
        return $this->eye;
    }

    /**
     * A coded concept listing the eye codes.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The eye for which the lens applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRVisionEyes $eye
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     */
    public function setEye(FHIRVisionEyes $eye = null)
    {
        $this->eye = $eye;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $notes
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     */
    public function setNotes($notes = null)
    {
        if (null === $notes) {
            $this->notes = null;
            return $this;
        }
        if ($notes instanceof FHIRString) {
            $this->notes = $notes;
            return $this;
        }
        $this->notes = new FHIRString($notes);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Contact lens power measured in diopters (0.25 units).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Contact lens power measured in diopters (0.25 units).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $power
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     */
    public function setPower($power = null)
    {
        if (null === $power) {
            $this->power = null;
            return $this;
        }
        if ($power instanceof FHIRDecimal) {
            $this->power = $power;
            return $this;
        }
        $this->power = new FHIRDecimal($power);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Amount of prism to compensate for eye alignment in fractional units.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getPrism()
    {
        return $this->prism;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Amount of prism to compensate for eye alignment in fractional units.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $prism
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     */
    public function setPrism($prism = null)
    {
        if (null === $prism) {
            $this->prism = null;
            return $this;
        }
        if ($prism instanceof FHIRDecimal) {
            $this->prism = $prism;
            return $this;
        }
        $this->prism = new FHIRDecimal($prism);
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the type of vision correction product which is required for the
     * patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the type of vision correction product which is required for the
     * patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $product
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     */
    public function setProduct(FHIRCoding $product = null)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Lens power measured in diopters (0.25 units).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    public function getSphere()
    {
        return $this->sphere;
    }

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Lens power measured in diopters (0.25 units).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $sphere
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     */
    public function setSphere($sphere = null)
    {
        if (null === $sphere) {
            $this->sphere = null;
            return $this;
        }
        if ($sphere instanceof FHIRDecimal) {
            $this->sphere = $sphere;
            return $this;
        }
        $this->sphere = new FHIRDecimal($sphere);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRVisionPrescriptionDispense::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRVisionPrescriptionDispense::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRVisionPrescriptionDispense);
        } elseif (!is_object($type) || !($type instanceof FHIRVisionPrescriptionDispense)) {
            throw new \RuntimeException(sprintf(
                'FHIRVisionPrescriptionDispense::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->add)) {
            $type->setAdd((string)$attributes->add);
        }
        if (isset($children->add)) {
            $type->setAdd(FHIRDecimal::xmlUnserialize($children->add));
        }
        if (isset($attributes->axis)) {
            $type->setAxis((string)$attributes->axis);
        }
        if (isset($children->axis)) {
            $type->setAxis(FHIRInteger::xmlUnserialize($children->axis));
        }
        if (isset($attributes->backCurve)) {
            $type->setBackCurve((string)$attributes->backCurve);
        }
        if (isset($children->backCurve)) {
            $type->setBackCurve(FHIRDecimal::xmlUnserialize($children->backCurve));
        }
        if (isset($children->base)) {
            $type->setBase(FHIRVisionBase::xmlUnserialize($children->base));
        }
        if (isset($attributes->brand)) {
            $type->setBrand((string)$attributes->brand);
        }
        if (isset($children->brand)) {
            $type->setBrand(FHIRString::xmlUnserialize($children->brand));
        }
        if (isset($attributes->color)) {
            $type->setColor((string)$attributes->color);
        }
        if (isset($children->color)) {
            $type->setColor(FHIRString::xmlUnserialize($children->color));
        }
        if (isset($attributes->cylinder)) {
            $type->setCylinder((string)$attributes->cylinder);
        }
        if (isset($children->cylinder)) {
            $type->setCylinder(FHIRDecimal::xmlUnserialize($children->cylinder));
        }
        if (isset($attributes->diameter)) {
            $type->setDiameter((string)$attributes->diameter);
        }
        if (isset($children->diameter)) {
            $type->setDiameter(FHIRDecimal::xmlUnserialize($children->diameter));
        }
        if (isset($children->duration)) {
            $type->setDuration(FHIRSimpleQuantity::xmlUnserialize($children->duration));
        }
        if (isset($children->eye)) {
            $type->setEye(FHIRVisionEyes::xmlUnserialize($children->eye));
        }
        if (isset($attributes->notes)) {
            $type->setNotes((string)$attributes->notes);
        }
        if (isset($children->notes)) {
            $type->setNotes(FHIRString::xmlUnserialize($children->notes));
        }
        if (isset($attributes->power)) {
            $type->setPower((string)$attributes->power);
        }
        if (isset($children->power)) {
            $type->setPower(FHIRDecimal::xmlUnserialize($children->power));
        }
        if (isset($attributes->prism)) {
            $type->setPrism((string)$attributes->prism);
        }
        if (isset($children->prism)) {
            $type->setPrism(FHIRDecimal::xmlUnserialize($children->prism));
        }
        if (isset($children->product)) {
            $type->setProduct(FHIRCoding::xmlUnserialize($children->product));
        }
        if (isset($attributes->sphere)) {
            $type->setSphere((string)$attributes->sphere);
        }
        if (isset($children->sphere)) {
            $type->setSphere(FHIRDecimal::xmlUnserialize($children->sphere));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getAdd())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ADD, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAxis())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AXIS, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getBackCurve())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BACK_CURVE, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getBase())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BASE, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getBrand())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BRAND, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getColor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COLOR, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCylinder())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CYLINDER, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDiameter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DIAMETER, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DURATION, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getEye())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EYE, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNotes())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NOTES, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPower())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_POWER, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPrism())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRISM, null, $v->getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getProduct())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT, null, $v->getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSphere())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SPHERE, null, $v->getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAdd())) {
            $a[self::FIELD_ADD] = (string)$v;
            $a[self::FIELD_ADD_EXT] = $v;
        }
        if (null !== ($v = $this->getAxis())) {
            $a[self::FIELD_AXIS] = (string)$v;
            $a[self::FIELD_AXIS_EXT] = $v;
        }
        if (null !== ($v = $this->getBackCurve())) {
            $a[self::FIELD_BACK_CURVE] = (string)$v;
            $a[self::FIELD_BACK_CURVE_EXT] = $v;
        }
        if (null !== ($v = $this->getBase())) {
            $a[self::FIELD_BASE] = $v;
        }
        if (null !== ($v = $this->getBrand())) {
            $a[self::FIELD_BRAND] = (string)$v;
            $a[self::FIELD_BRAND_EXT] = $v;
        }
        if (null !== ($v = $this->getColor())) {
            $a[self::FIELD_COLOR] = (string)$v;
            $a[self::FIELD_COLOR_EXT] = $v;
        }
        if (null !== ($v = $this->getCylinder())) {
            $a[self::FIELD_CYLINDER] = (string)$v;
            $a[self::FIELD_CYLINDER_EXT] = $v;
        }
        if (null !== ($v = $this->getDiameter())) {
            $a[self::FIELD_DIAMETER] = (string)$v;
            $a[self::FIELD_DIAMETER_EXT] = $v;
        }
        if (null !== ($v = $this->getDuration())) {
            $a[self::FIELD_DURATION] = $v;
        }
        if (null !== ($v = $this->getEye())) {
            $a[self::FIELD_EYE] = $v;
        }
        if (null !== ($v = $this->getNotes())) {
            $a[self::FIELD_NOTES] = (string)$v;
            $a[self::FIELD_NOTES_EXT] = $v;
        }
        if (null !== ($v = $this->getPower())) {
            $a[self::FIELD_POWER] = (string)$v;
            $a[self::FIELD_POWER_EXT] = $v;
        }
        if (null !== ($v = $this->getPrism())) {
            $a[self::FIELD_PRISM] = (string)$v;
            $a[self::FIELD_PRISM_EXT] = $v;
        }
        if (null !== ($v = $this->getProduct())) {
            $a[self::FIELD_PRODUCT] = $v;
        }
        if (null !== ($v = $this->getSphere())) {
            $a[self::FIELD_SPHERE] = (string)$v;
            $a[self::FIELD_SPHERE_EXT] = $v;
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