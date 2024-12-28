<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:13+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRVisionBase;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRVisionEyes;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRIdPrimitive;
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
    const FIELD_PRODUCT = 'product';
    const FIELD_EYE = 'eye';
    const FIELD_EYE_EXT = '_eye';
    const FIELD_SPHERE = 'sphere';
    const FIELD_SPHERE_EXT = '_sphere';
    const FIELD_CYLINDER = 'cylinder';
    const FIELD_CYLINDER_EXT = '_cylinder';
    const FIELD_AXIS = 'axis';
    const FIELD_AXIS_EXT = '_axis';
    const FIELD_PRISM = 'prism';
    const FIELD_PRISM_EXT = '_prism';
    const FIELD_BASE = 'base';
    const FIELD_BASE_EXT = '_base';
    const FIELD_ADD = 'add';
    const FIELD_ADD_EXT = '_add';
    const FIELD_POWER = 'power';
    const FIELD_POWER_EXT = '_power';
    const FIELD_BACK_CURVE = 'backCurve';
    const FIELD_BACK_CURVE_EXT = '_backCurve';
    const FIELD_DIAMETER = 'diameter';
    const FIELD_DIAMETER_EXT = '_diameter';
    const FIELD_DURATION = 'duration';
    const FIELD_COLOR = 'color';
    const FIELD_COLOR_EXT = '_color';
    const FIELD_BRAND = 'brand';
    const FIELD_BRAND_EXT = '_brand';
    const FIELD_NOTES = 'notes';
    const FIELD_NOTES_EXT = '_notes';

    /** @var string */
    private $_xmlns = '';

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the type of vision correction product which is required for the
     * patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected $product = null;

    /**
     * A coded concept listing the eye codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The eye for which the lens applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRVisionEyes
     */
    protected $eye = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lens power measured in diopters (0.25 units).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    protected $sphere = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for astigmatism measured in diopters (0.25 units).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    protected $cylinder = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
     */
    protected $axis = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Amount of prism to compensate for eye alignment in fractional units.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    protected $prism = null;

    /**
     * A coded concept listing the base codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The relative base, or reference lens edge, for the prism.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRVisionBase
     */
    protected $base = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for multifocal lenses measured in diopters (0.25 units).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    protected $add = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens power measured in diopters (0.25 units).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    protected $power = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Back curvature measured in millimeters.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    protected $backCurve = null;

    /**
     * A rational number with implicit precision
     * Do not use a IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens diameter measured in millimeters.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal
     */
    protected $diameter = null;

    /**
     * The recommended maximum wear period for the lens.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity
     */
    protected $duration = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Special color or pattern.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $color = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Brand recommendations or restrictions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $brand = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $notes = null;

    /**
     * Validation map for fields in type VisionPrescription.Dispense
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_PRODUCT])) {
            if ($data[self::FIELD_PRODUCT] instanceof FHIRCoding) {
                $this->setProduct($data[self::FIELD_PRODUCT]);
            } else {
                $this->setProduct(new FHIRCoding($data[self::FIELD_PRODUCT]));
            }
        }
        if (isset($data[self::FIELD_EYE]) || isset($data[self::FIELD_EYE_EXT])) {
            $value = isset($data[self::FIELD_EYE]) ? $data[self::FIELD_EYE] : null;
            $ext = (isset($data[self::FIELD_EYE_EXT]) && is_array($data[self::FIELD_EYE_EXT])) ? $ext = $data[self::FIELD_EYE_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRVisionEyes) {
                    $this->setEye($value);
                } else if (is_array($value)) {
                    $this->setEye(new FHIRVisionEyes(array_merge($ext, $value)));
                } else {
                    $this->setEye(new FHIRVisionEyes([FHIRVisionEyes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setEye(new FHIRVisionEyes($ext));
            }
        }
        if (isset($data[self::FIELD_SPHERE]) || isset($data[self::FIELD_SPHERE_EXT])) {
            $value = isset($data[self::FIELD_SPHERE]) ? $data[self::FIELD_SPHERE] : null;
            $ext = (isset($data[self::FIELD_SPHERE_EXT]) && is_array($data[self::FIELD_SPHERE_EXT])) ? $ext = $data[self::FIELD_SPHERE_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setSphere($value);
                } else if (is_array($value)) {
                    $this->setSphere(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setSphere(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSphere(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_CYLINDER]) || isset($data[self::FIELD_CYLINDER_EXT])) {
            $value = isset($data[self::FIELD_CYLINDER]) ? $data[self::FIELD_CYLINDER] : null;
            $ext = (isset($data[self::FIELD_CYLINDER_EXT]) && is_array($data[self::FIELD_CYLINDER_EXT])) ? $ext = $data[self::FIELD_CYLINDER_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setCylinder($value);
                } else if (is_array($value)) {
                    $this->setCylinder(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setCylinder(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCylinder(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_AXIS]) || isset($data[self::FIELD_AXIS_EXT])) {
            $value = isset($data[self::FIELD_AXIS]) ? $data[self::FIELD_AXIS] : null;
            $ext = (isset($data[self::FIELD_AXIS_EXT]) && is_array($data[self::FIELD_AXIS_EXT])) ? $ext = $data[self::FIELD_AXIS_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setAxis($value);
                } else if (is_array($value)) {
                    $this->setAxis(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setAxis(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAxis(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_PRISM]) || isset($data[self::FIELD_PRISM_EXT])) {
            $value = isset($data[self::FIELD_PRISM]) ? $data[self::FIELD_PRISM] : null;
            $ext = (isset($data[self::FIELD_PRISM_EXT]) && is_array($data[self::FIELD_PRISM_EXT])) ? $ext = $data[self::FIELD_PRISM_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setPrism($value);
                } else if (is_array($value)) {
                    $this->setPrism(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setPrism(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPrism(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_BASE]) || isset($data[self::FIELD_BASE_EXT])) {
            $value = isset($data[self::FIELD_BASE]) ? $data[self::FIELD_BASE] : null;
            $ext = (isset($data[self::FIELD_BASE_EXT]) && is_array($data[self::FIELD_BASE_EXT])) ? $ext = $data[self::FIELD_BASE_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRVisionBase) {
                    $this->setBase($value);
                } else if (is_array($value)) {
                    $this->setBase(new FHIRVisionBase(array_merge($ext, $value)));
                } else {
                    $this->setBase(new FHIRVisionBase([FHIRVisionBase::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setBase(new FHIRVisionBase($ext));
            }
        }
        if (isset($data[self::FIELD_ADD]) || isset($data[self::FIELD_ADD_EXT])) {
            $value = isset($data[self::FIELD_ADD]) ? $data[self::FIELD_ADD] : null;
            $ext = (isset($data[self::FIELD_ADD_EXT]) && is_array($data[self::FIELD_ADD_EXT])) ? $ext = $data[self::FIELD_ADD_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setAdd($value);
                } else if (is_array($value)) {
                    $this->setAdd(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setAdd(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAdd(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_POWER]) || isset($data[self::FIELD_POWER_EXT])) {
            $value = isset($data[self::FIELD_POWER]) ? $data[self::FIELD_POWER] : null;
            $ext = (isset($data[self::FIELD_POWER_EXT]) && is_array($data[self::FIELD_POWER_EXT])) ? $ext = $data[self::FIELD_POWER_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setPower($value);
                } else if (is_array($value)) {
                    $this->setPower(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setPower(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPower(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_BACK_CURVE]) || isset($data[self::FIELD_BACK_CURVE_EXT])) {
            $value = isset($data[self::FIELD_BACK_CURVE]) ? $data[self::FIELD_BACK_CURVE] : null;
            $ext = (isset($data[self::FIELD_BACK_CURVE_EXT]) && is_array($data[self::FIELD_BACK_CURVE_EXT])) ? $ext = $data[self::FIELD_BACK_CURVE_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setBackCurve($value);
                } else if (is_array($value)) {
                    $this->setBackCurve(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setBackCurve(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setBackCurve(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_DIAMETER]) || isset($data[self::FIELD_DIAMETER_EXT])) {
            $value = isset($data[self::FIELD_DIAMETER]) ? $data[self::FIELD_DIAMETER] : null;
            $ext = (isset($data[self::FIELD_DIAMETER_EXT]) && is_array($data[self::FIELD_DIAMETER_EXT])) ? $ext = $data[self::FIELD_DIAMETER_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setDiameter($value);
                } else if (is_array($value)) {
                    $this->setDiameter(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setDiameter(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDiameter(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_DURATION])) {
            if ($data[self::FIELD_DURATION] instanceof FHIRSimpleQuantity) {
                $this->setDuration($data[self::FIELD_DURATION]);
            } else {
                $this->setDuration(new FHIRSimpleQuantity($data[self::FIELD_DURATION]));
            }
        }
        if (isset($data[self::FIELD_COLOR]) || isset($data[self::FIELD_COLOR_EXT])) {
            $value = isset($data[self::FIELD_COLOR]) ? $data[self::FIELD_COLOR] : null;
            $ext = (isset($data[self::FIELD_COLOR_EXT]) && is_array($data[self::FIELD_COLOR_EXT])) ? $ext = $data[self::FIELD_COLOR_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setColor($value);
                } else if (is_array($value)) {
                    $this->setColor(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setColor(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setColor(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_BRAND]) || isset($data[self::FIELD_BRAND_EXT])) {
            $value = isset($data[self::FIELD_BRAND]) ? $data[self::FIELD_BRAND] : null;
            $ext = (isset($data[self::FIELD_BRAND_EXT]) && is_array($data[self::FIELD_BRAND_EXT])) ? $ext = $data[self::FIELD_BRAND_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setBrand($value);
                } else if (is_array($value)) {
                    $this->setBrand(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setBrand(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setBrand(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_NOTES]) || isset($data[self::FIELD_NOTES_EXT])) {
            $value = isset($data[self::FIELD_NOTES]) ? $data[self::FIELD_NOTES] : null;
            $ext = (isset($data[self::FIELD_NOTES_EXT]) && is_array($data[self::FIELD_NOTES_EXT])) ? $ext = $data[self::FIELD_NOTES_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setNotes($value);
                } else if (is_array($value)) {
                    $this->setNotes(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setNotes(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNotes(new FHIRString($ext));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<VisionPrescriptionDispense{$xmlns}></VisionPrescriptionDispense>";
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the type of vision correction product which is required for the
     * patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $product
     * @return static
     */
    public function setProduct(FHIRCoding $product = null)
    {
        $this->_trackValueSet($this->product, $product);
        $this->product = $product;
        return $this;
    }

    /**
     * A coded concept listing the eye codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The eye for which the lens applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRVisionEyes $eye
     * @return static
     */
    public function setEye(FHIRVisionEyes $eye = null)
    {
        $this->_trackValueSet($this->eye, $eye);
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lens power measured in diopters (0.25 units).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $sphere
     * @return static
     */
    public function setSphere($sphere = null)
    {
        if (null !== $sphere && !($sphere instanceof FHIRDecimal)) {
            $sphere = new FHIRDecimal($sphere);
        }
        $this->_trackValueSet($this->sphere, $sphere);
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for astigmatism measured in diopters (0.25 units).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $cylinder
     * @return static
     */
    public function setCylinder($cylinder = null)
    {
        if (null !== $cylinder && !($cylinder instanceof FHIRDecimal)) {
            $cylinder = new FHIRDecimal($cylinder);
        }
        $this->_trackValueSet($this->cylinder, $cylinder);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger
     */
    public function getAxis()
    {
        return $this->axis;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger $axis
     * @return static
     */
    public function setAxis($axis = null)
    {
        if (null !== $axis && !($axis instanceof FHIRInteger)) {
            $axis = new FHIRInteger($axis);
        }
        $this->_trackValueSet($this->axis, $axis);
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Amount of prism to compensate for eye alignment in fractional units.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $prism
     * @return static
     */
    public function setPrism($prism = null)
    {
        if (null !== $prism && !($prism instanceof FHIRDecimal)) {
            $prism = new FHIRDecimal($prism);
        }
        $this->_trackValueSet($this->prism, $prism);
        $this->prism = $prism;
        return $this;
    }

    /**
     * A coded concept listing the base codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The relative base, or reference lens edge, for the prism.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRVisionBase $base
     * @return static
     */
    public function setBase(FHIRVisionBase $base = null)
    {
        $this->_trackValueSet($this->base, $base);
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for multifocal lenses measured in diopters (0.25 units).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $add
     * @return static
     */
    public function setAdd($add = null)
    {
        if (null !== $add && !($add instanceof FHIRDecimal)) {
            $add = new FHIRDecimal($add);
        }
        $this->_trackValueSet($this->add, $add);
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens power measured in diopters (0.25 units).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $power
     * @return static
     */
    public function setPower($power = null)
    {
        if (null !== $power && !($power instanceof FHIRDecimal)) {
            $power = new FHIRDecimal($power);
        }
        $this->_trackValueSet($this->power, $power);
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Back curvature measured in millimeters.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $backCurve
     * @return static
     */
    public function setBackCurve($backCurve = null)
    {
        if (null !== $backCurve && !($backCurve instanceof FHIRDecimal)) {
            $backCurve = new FHIRDecimal($backCurve);
        }
        $this->_trackValueSet($this->backCurve, $backCurve);
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens diameter measured in millimeters.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal $diameter
     * @return static
     */
    public function setDiameter($diameter = null)
    {
        if (null !== $diameter && !($diameter instanceof FHIRDecimal)) {
            $diameter = new FHIRDecimal($diameter);
        }
        $this->_trackValueSet($this->diameter, $diameter);
        $this->diameter = $diameter;
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
     * @return static
     */
    public function setDuration(FHIRSimpleQuantity $duration = null)
    {
        $this->_trackValueSet($this->duration, $duration);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Special color or pattern.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $color
     * @return static
     */
    public function setColor($color = null)
    {
        if (null !== $color && !($color instanceof FHIRString)) {
            $color = new FHIRString($color);
        }
        $this->_trackValueSet($this->color, $color);
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
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Brand recommendations or restrictions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $brand
     * @return static
     */
    public function setBrand($brand = null)
    {
        if (null !== $brand && !($brand instanceof FHIRString)) {
            $brand = new FHIRString($brand);
        }
        $this->_trackValueSet($this->brand, $brand);
        $this->brand = $brand;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $notes
     * @return static
     */
    public function setNotes($notes = null)
    {
        if (null !== $notes && !($notes instanceof FHIRString)) {
            $notes = new FHIRString($notes);
        }
        $this->_trackValueSet($this->notes, $notes);
        $this->notes = $notes;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getProduct())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRODUCT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEye())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EYE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSphere())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SPHERE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCylinder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CYLINDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAxis())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AXIS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPrism())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRISM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBase())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BASE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAdd())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPower())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_POWER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBackCurve())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BACK_CURVE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDiameter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIAMETER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getColor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COLOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBrand())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BRAND] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNotes())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOTES] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT])) {
            $v = $this->getProduct();
            foreach($validationRules[self::FIELD_PRODUCT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE, self::FIELD_PRODUCT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE, self::FIELD_EYE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE, self::FIELD_SPHERE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE, self::FIELD_CYLINDER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE, self::FIELD_AXIS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE, self::FIELD_PRISM, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE, self::FIELD_BASE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE, self::FIELD_ADD, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE, self::FIELD_POWER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE, self::FIELD_BACK_CURVE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE, self::FIELD_DIAMETER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE, self::FIELD_DURATION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE, self::FIELD_COLOR, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE, self::FIELD_BRAND, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BRAND])) {
                        $errs[self::FIELD_BRAND] = [];
                    }
                    $errs[self::FIELD_BRAND][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTES])) {
            $v = $this->getNotes();
            foreach($validationRules[self::FIELD_NOTES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE, self::FIELD_NOTES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTES])) {
                        $errs[self::FIELD_NOTES] = [];
                    }
                    $errs[self::FIELD_NOTES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param null|string|\DOMElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            $dom->loadXML($element, $libxmlOpts);
            if (false === $dom) {
                throw new \DomainException(sprintf('FHIRVisionPrescriptionDispense::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRVisionPrescriptionDispense::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRVisionPrescriptionDispense(null);
        } elseif (!is_object($type) || !($type instanceof FHIRVisionPrescriptionDispense)) {
            throw new \RuntimeException(sprintf(
                'FHIRVisionPrescriptionDispense::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_PRODUCT === $n->nodeName) {
                $type->setProduct(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_EYE === $n->nodeName) {
                $type->setEye(FHIRVisionEyes::xmlUnserialize($n));
            } elseif (self::FIELD_SPHERE === $n->nodeName) {
                $type->setSphere(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_CYLINDER === $n->nodeName) {
                $type->setCylinder(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_AXIS === $n->nodeName) {
                $type->setAxis(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_PRISM === $n->nodeName) {
                $type->setPrism(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_BASE === $n->nodeName) {
                $type->setBase(FHIRVisionBase::xmlUnserialize($n));
            } elseif (self::FIELD_ADD === $n->nodeName) {
                $type->setAdd(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_POWER === $n->nodeName) {
                $type->setPower(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_BACK_CURVE === $n->nodeName) {
                $type->setBackCurve(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_DIAMETER === $n->nodeName) {
                $type->setDiameter(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_DURATION === $n->nodeName) {
                $type->setDuration(FHIRSimpleQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_COLOR === $n->nodeName) {
                $type->setColor(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_BRAND === $n->nodeName) {
                $type->setBrand(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_NOTES === $n->nodeName) {
                $type->setNotes(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SPHERE);
        if (null !== $n) {
            $pt = $type->getSphere();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSphere($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CYLINDER);
        if (null !== $n) {
            $pt = $type->getCylinder();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCylinder($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_AXIS);
        if (null !== $n) {
            $pt = $type->getAxis();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAxis($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PRISM);
        if (null !== $n) {
            $pt = $type->getPrism();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPrism($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ADD);
        if (null !== $n) {
            $pt = $type->getAdd();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAdd($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_POWER);
        if (null !== $n) {
            $pt = $type->getPower();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPower($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_BACK_CURVE);
        if (null !== $n) {
            $pt = $type->getBackCurve();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setBackCurve($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DIAMETER);
        if (null !== $n) {
            $pt = $type->getDiameter();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDiameter($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_COLOR);
        if (null !== $n) {
            $pt = $type->getColor();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setColor($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_BRAND);
        if (null !== $n) {
            $pt = $type->getBrand();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setBrand($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NOTES);
        if (null !== $n) {
            $pt = $type->getNotes();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setNotes($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getProduct())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRODUCT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getEye())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EYE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSphere())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SPHERE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCylinder())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CYLINDER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAxis())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AXIS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPrism())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRISM);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getBase())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BASE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAdd())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ADD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPower())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_POWER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getBackCurve())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BACK_CURVE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDiameter())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DIAMETER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDuration())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DURATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getColor())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COLOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getBrand())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BRAND);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getNotes())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NOTES);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        return $element;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getProduct())) {
            $a[self::FIELD_PRODUCT] = $v;
        }
        if (null !== ($v = $this->getEye())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_EYE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRVisionEyes::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_EYE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getSphere())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_SPHERE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDecimal::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_SPHERE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getCylinder())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_CYLINDER] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDecimal::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_CYLINDER_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getAxis())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_AXIS] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRInteger::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_AXIS_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getPrism())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PRISM] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDecimal::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_PRISM_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getBase())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_BASE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRVisionBase::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_BASE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getAdd())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_ADD] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDecimal::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_ADD_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getPower())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_POWER] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDecimal::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_POWER_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getBackCurve())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_BACK_CURVE] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDecimal::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_BACK_CURVE_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDiameter())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_DIAMETER] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRDecimal::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_DIAMETER_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            $a[self::FIELD_DURATION] = $v;
        }
        if (null !== ($v = $this->getColor())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_COLOR] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_COLOR_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getBrand())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_BRAND] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_BRAND_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getNotes())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_NOTES] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_NOTES_EXT] = $ext;
            }
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}