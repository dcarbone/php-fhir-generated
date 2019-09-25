<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 25th, 2019 18:19+0000
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

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRVisionEyes;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * An authorization for the provision of glasses and/or contact lenses to a
 * patient.
 *
 * Class FHIRVisionPrescriptionLensSpecification
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription
 */
class FHIRVisionPrescriptionLensSpecification extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION;

    const FIELD_ADD = 'add';
    const FIELD_ADD_EXT = '_add';
    const FIELD_AXIS = 'axis';
    const FIELD_AXIS_EXT = '_axis';
    const FIELD_BACK_CURVE = 'backCurve';
    const FIELD_BACK_CURVE_EXT = '_backCurve';
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
    const FIELD_NOTE = 'note';
    const FIELD_POWER = 'power';
    const FIELD_POWER_EXT = '_power';
    const FIELD_PRISM = 'prism';
    const FIELD_PRODUCT = 'product';
    const FIELD_SPHERE = 'sphere';
    const FIELD_SPHERE_EXT = '_sphere';

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Power adjustment for multifocal lenses measured in dioptres (0.25 units).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $add = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $axis = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Back curvature measured in millimetres.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $backCurve = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Brand recommendations or restrictions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $brand = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Special color or pattern.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $color = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Power adjustment for astigmatism measured in dioptres (0.25 units).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $cylinder = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Contact lens diameter measured in millimetres.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $diameter = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The recommended maximum wear period for the lens.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $duration = null;

    /**
     * A coded concept listing the eye codes.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The eye for which the lens specification applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRVisionEyes
     */
    private $eye = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    private $note = [];

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Contact lens power measured in dioptres (0.25 units).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $power = null;

    /**
     * An authorization for the provision of glasses and/or contact lenses to a
     * patient.
     *
     * Allows for adjustment on two axis.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionPrism[]
     */
    private $prism = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the type of vision correction product which is required for the
     * patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $product = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Lens power measured in dioptres (0.25 units).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $sphere = null;

    /**
     * FHIRVisionPrescriptionLensSpecification Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVisionPrescriptionLensSpecification::_construct - $data expected to be null or array, %s seen',
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
            if ($data[self::FIELD_DURATION] instanceof FHIRQuantity) {
                $this->setDuration($data[self::FIELD_DURATION]);
            } else {
                $this->setDuration(new FHIRQuantity($data[self::FIELD_DURATION]));
            }
        }
        if (isset($data[self::FIELD_EYE])) {
            if ($data[self::FIELD_EYE] instanceof FHIRVisionEyes) {
                $this->setEye($data[self::FIELD_EYE]);
            } else {
                $this->setEye(new FHIRVisionEyes($data[self::FIELD_EYE]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } else if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
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
            if (is_array($data[self::FIELD_PRISM])) {
                foreach($data[self::FIELD_PRISM] as $v) {
                    if ($v instanceof FHIRVisionPrescriptionPrism) {
                        $this->addPrism($v);
                    } else {
                        $this->addPrism(new FHIRVisionPrescriptionPrism($v));
                    }
                }
            } else if ($data[self::FIELD_PRISM] instanceof FHIRVisionPrescriptionPrism) {
                $this->addPrism($data[self::FIELD_PRISM]);
            } else {
                $this->addPrism(new FHIRVisionPrescriptionPrism($data[self::FIELD_PRISM]));
            }
        }
        if (isset($data[self::FIELD_PRODUCT])) {
            if ($data[self::FIELD_PRODUCT] instanceof FHIRCodeableConcept) {
                $this->setProduct($data[self::FIELD_PRODUCT]);
            } else {
                $this->setProduct(new FHIRCodeableConcept($data[self::FIELD_PRODUCT]));
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
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Power adjustment for multifocal lenses measured in dioptres (0.25 units).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getAdd()
    {
        return $this->add;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Power adjustment for multifocal lenses measured in dioptres (0.25 units).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal $add
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification
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
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRInteger $axis
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification
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
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Back curvature measured in millimetres.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getBackCurve()
    {
        return $this->backCurve;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Back curvature measured in millimetres.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal $backCurve
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Brand recommendations or restrictions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Brand recommendations or restrictions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $brand
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification
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
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Special color or pattern.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Special color or pattern.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $color
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification
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
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Power adjustment for astigmatism measured in dioptres (0.25 units).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getCylinder()
    {
        return $this->cylinder;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Power adjustment for astigmatism measured in dioptres (0.25 units).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal $cylinder
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification
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
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Contact lens diameter measured in millimetres.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDiameter()
    {
        return $this->diameter;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Contact lens diameter measured in millimetres.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal $diameter
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification
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
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The recommended maximum wear period for the lens.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The recommended maximum wear period for the lens.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRQuantity $duration
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification
     */
    public function setDuration(FHIRQuantity $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * A coded concept listing the eye codes.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The eye for which the lens specification applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRVisionEyes
     */
    public function getEye()
    {
        return $this->eye;
    }

    /**
     * A coded concept listing the eye codes.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The eye for which the lens specification applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRVisionEyes $eye
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification
     */
    public function setEye(FHIRVisionEyes $eye = null)
    {
        $this->eye = $eye;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification
     */
    public function addNote(FHIRAnnotation $note = null)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[] $note
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification
     */
    public function setNote(array $note = [])
    {
        $this->note = [];
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
            }
        }
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Contact lens power measured in dioptres (0.25 units).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Contact lens power measured in dioptres (0.25 units).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal $power
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification
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
     * An authorization for the provision of glasses and/or contact lenses to a
     * patient.
     *
     * Allows for adjustment on two axis.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionPrism[]
     */
    public function getPrism()
    {
        return $this->prism;
    }

    /**
     * An authorization for the provision of glasses and/or contact lenses to a
     * patient.
     *
     * Allows for adjustment on two axis.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionPrism $prism
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification
     */
    public function addPrism(FHIRVisionPrescriptionPrism $prism = null)
    {
        $this->prism[] = $prism;
        return $this;
    }

    /**
     * An authorization for the provision of glasses and/or contact lenses to a
     * patient.
     *
     * Allows for adjustment on two axis.
     *
     * @param \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionPrism[] $prism
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification
     */
    public function setPrism(array $prism = [])
    {
        $this->prism = [];
        if ([] === $prism) {
            return $this;
        }
        foreach($prism as $v) {
            if ($v instanceof FHIRVisionPrescriptionPrism) {
                $this->addPrism($v);
            } else {
                $this->addPrism(new FHIRVisionPrescriptionPrism($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the type of vision correction product which is required for the
     * patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the type of vision correction product which is required for the
     * patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $product
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification
     */
    public function setProduct(FHIRCodeableConcept $product = null)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Lens power measured in dioptres (0.25 units).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getSphere()
    {
        return $this->sphere;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Lens power measured in dioptres (0.25 units).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRDecimal $sphere
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification
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
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification
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
                throw new \DomainException(sprintf('FHIRVisionPrescriptionLensSpecification::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRVisionPrescriptionLensSpecification::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize($sxe, new FHIRVisionPrescriptionLensSpecification);
        } elseif (!is_object($type) || !($type instanceof FHIRVisionPrescriptionLensSpecification)) {
            throw new \RuntimeException(sprintf(
                'FHIRVisionPrescriptionLensSpecification::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
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
            $type->setDuration(FHIRQuantity::xmlUnserialize($children->duration));
        }
        if (isset($children->eye)) {
            $type->setEye(FHIRVisionEyes::xmlUnserialize($children->eye));
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($attributes->power)) {
            $type->setPower((string)$attributes->power);
        }
        if (isset($children->power)) {
            $type->setPower(FHIRDecimal::xmlUnserialize($children->power));
        }
        if (isset($children->prism)) {
            foreach($children->prism as $child) {
                $type->addPrism(FHIRVisionPrescriptionPrism::xmlUnserialize($child));
            }
        }
        if (isset($children->product)) {
            $type->setProduct(FHIRCodeableConcept::xmlUnserialize($children->product));
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
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<VisionPrescriptionLensSpecification xmlns="http://hl7.org/fhir"></VisionPrescriptionLensSpecification>');
        }
        if (null !== ($v = $this->getAdd())) {
            $sxe->addAttribute(self::FIELD_ADD, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_ADD));
            }
        }
        if (null !== ($v = $this->getAxis())) {
            $sxe->addAttribute(self::FIELD_AXIS, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_AXIS));
            }
        }
        if (null !== ($v = $this->getBackCurve())) {
            $sxe->addAttribute(self::FIELD_BACK_CURVE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_BACK_CURVE));
            }
        }
        if (null !== ($v = $this->getBrand())) {
            $sxe->addAttribute(self::FIELD_BRAND, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_BRAND));
            }
        }
        if (null !== ($v = $this->getColor())) {
            $sxe->addAttribute(self::FIELD_COLOR, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_COLOR));
            }
        }
        if (null !== ($v = $this->getCylinder())) {
            $sxe->addAttribute(self::FIELD_CYLINDER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_CYLINDER));
            }
        }
        if (null !== ($v = $this->getDiameter())) {
            $sxe->addAttribute(self::FIELD_DIAMETER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DIAMETER));
            }
        }
        if (null !== ($v = $this->getDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DURATION));
        }
        if (null !== ($v = $this->getEye())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EYE));
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE));
            }
        }
        if (null !== ($v = $this->getPower())) {
            $sxe->addAttribute(self::FIELD_POWER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_POWER));
            }
        }
        if ([] !== ($vs = $this->getPrism())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRISM));
            }
        }
        if (null !== ($v = $this->getProduct())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT));
        }
        if (null !== ($v = $this->getSphere())) {
            $sxe->addAttribute(self::FIELD_SPHERE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_SPHERE));
            }
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
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = $vs;
        }
        if (null !== ($v = $this->getPower())) {
            $a[self::FIELD_POWER] = (string)$v;
            $a[self::FIELD_POWER_EXT] = $v;
        }
        if ([] !== ($vs = $this->getPrism())) {
            $a[self::FIELD_PRISM] = $vs;
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