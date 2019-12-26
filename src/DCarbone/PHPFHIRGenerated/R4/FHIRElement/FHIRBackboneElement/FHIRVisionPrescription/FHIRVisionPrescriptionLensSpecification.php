<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRVisionEyes;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * An authorization for the provision of glasses and/or contact lenses to a
 * patient.
 *
 * Class FHIRVisionPrescriptionLensSpecification
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription
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
    const FIELD_EYE_EXT = '_eye';
    const FIELD_NOTE = 'note';
    const FIELD_POWER = 'power';
    const FIELD_POWER_EXT = '_power';
    const FIELD_PRISM = 'prism';
    const FIELD_PRODUCT = 'product';
    const FIELD_SPHERE = 'sphere';
    const FIELD_SPHERE_EXT = '_sphere';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for multifocal lenses measured in dioptres (0.25 units).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $add = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected $axis = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Back curvature measured in millimetres.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $backCurve = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Brand recommendations or restrictions.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $brand = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Special color or pattern.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $color = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for astigmatism measured in dioptres (0.25 units).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $cylinder = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens diameter measured in millimetres.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $diameter = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The recommended maximum wear period for the lens.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    protected $duration = null;

    /**
     * A coded concept listing the eye codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The eye for which the lens specification applies.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRVisionEyes
     */
    protected $eye = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    protected $note = [];

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens power measured in dioptres (0.25 units).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $power = null;

    /**
     * An authorization for the provision of glasses and/or contact lenses to a
     * patient.
     *
     * Allows for adjustment on two axis.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionPrism[]
     */
    protected $prism = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the type of vision correction product which is required for the
     * patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $product = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lens power measured in dioptres (0.25 units).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    protected $sphere = null;

    /**
     * Validation map for fields in type VisionPrescription.LensSpecification
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_ADD]) || isset($data[self::FIELD_ADD_EXT])) {
            if (isset($data[self::FIELD_ADD])) {
                $value = $data[self::FIELD_ADD];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_ADD_EXT]) && is_array($data[self::FIELD_ADD_EXT])) {
                $ext = $data[self::FIELD_ADD_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setAdd($value);
                } else if (is_array($value)) {
                    $this->setAdd(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setAdd(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAdd(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_AXIS]) || isset($data[self::FIELD_AXIS_EXT])) {
            if (isset($data[self::FIELD_AXIS])) {
                $value = $data[self::FIELD_AXIS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_AXIS_EXT]) && is_array($data[self::FIELD_AXIS_EXT])) {
                $ext = $data[self::FIELD_AXIS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setAxis($value);
                } else if (is_array($value)) {
                    $this->setAxis(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setAxis(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAxis(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_BACK_CURVE]) || isset($data[self::FIELD_BACK_CURVE_EXT])) {
            if (isset($data[self::FIELD_BACK_CURVE])) {
                $value = $data[self::FIELD_BACK_CURVE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_BACK_CURVE_EXT]) && is_array($data[self::FIELD_BACK_CURVE_EXT])) {
                $ext = $data[self::FIELD_BACK_CURVE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setBackCurve($value);
                } else if (is_array($value)) {
                    $this->setBackCurve(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setBackCurve(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setBackCurve(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_BRAND]) || isset($data[self::FIELD_BRAND_EXT])) {
            if (isset($data[self::FIELD_BRAND])) {
                $value = $data[self::FIELD_BRAND];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_BRAND_EXT]) && is_array($data[self::FIELD_BRAND_EXT])) {
                $ext = $data[self::FIELD_BRAND_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setBrand($value);
                } else if (is_array($value)) {
                    $this->setBrand(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setBrand(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setBrand(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_COLOR]) || isset($data[self::FIELD_COLOR_EXT])) {
            if (isset($data[self::FIELD_COLOR])) {
                $value = $data[self::FIELD_COLOR];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_COLOR_EXT]) && is_array($data[self::FIELD_COLOR_EXT])) {
                $ext = $data[self::FIELD_COLOR_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setColor($value);
                } else if (is_array($value)) {
                    $this->setColor(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setColor(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setColor(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_CYLINDER]) || isset($data[self::FIELD_CYLINDER_EXT])) {
            if (isset($data[self::FIELD_CYLINDER])) {
                $value = $data[self::FIELD_CYLINDER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CYLINDER_EXT]) && is_array($data[self::FIELD_CYLINDER_EXT])) {
                $ext = $data[self::FIELD_CYLINDER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setCylinder($value);
                } else if (is_array($value)) {
                    $this->setCylinder(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setCylinder(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setCylinder(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_DIAMETER]) || isset($data[self::FIELD_DIAMETER_EXT])) {
            if (isset($data[self::FIELD_DIAMETER])) {
                $value = $data[self::FIELD_DIAMETER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DIAMETER_EXT]) && is_array($data[self::FIELD_DIAMETER_EXT])) {
                $ext = $data[self::FIELD_DIAMETER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setDiameter($value);
                } else if (is_array($value)) {
                    $this->setDiameter(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setDiameter(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDiameter(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_DURATION])) {
            if ($data[self::FIELD_DURATION] instanceof FHIRQuantity) {
                $this->setDuration($data[self::FIELD_DURATION]);
            } else {
                $this->setDuration(new FHIRQuantity($data[self::FIELD_DURATION]));
            }
        }
        if (isset($data[self::FIELD_EYE]) || isset($data[self::FIELD_EYE_EXT])) {
            if (isset($data[self::FIELD_EYE])) {
                $value = $data[self::FIELD_EYE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_EYE_EXT]) && is_array($data[self::FIELD_EYE_EXT])) {
                $ext = $data[self::FIELD_EYE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRVisionEyes) {
                    $this->setEye($value);
                } else if (is_array($value)) {
                    $this->setEye(new FHIRVisionEyes(array_merge($ext, $value)));
                } else {
                    $this->setEye(new FHIRVisionEyes([FHIRVisionEyes::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setEye(new FHIRVisionEyes($ext));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_POWER]) || isset($data[self::FIELD_POWER_EXT])) {
            if (isset($data[self::FIELD_POWER])) {
                $value = $data[self::FIELD_POWER];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_POWER_EXT]) && is_array($data[self::FIELD_POWER_EXT])) {
                $ext = $data[self::FIELD_POWER_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setPower($value);
                } else if (is_array($value)) {
                    $this->setPower(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setPower(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPower(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_PRISM])) {
            if (is_array($data[self::FIELD_PRISM])) {
                foreach($data[self::FIELD_PRISM] as $v) {
                    if (null === $v) {
                        continue;
                    }
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
        if (isset($data[self::FIELD_SPHERE]) || isset($data[self::FIELD_SPHERE_EXT])) {
            if (isset($data[self::FIELD_SPHERE])) {
                $value = $data[self::FIELD_SPHERE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SPHERE_EXT]) && is_array($data[self::FIELD_SPHERE_EXT])) {
                $ext = $data[self::FIELD_SPHERE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setSphere($value);
                } else if (is_array($value)) {
                    $this->setSphere(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setSphere(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSphere(new FHIRDecimal($ext));
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
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<VisionPrescriptionLensSpecification{$xmlns}></VisionPrescriptionLensSpecification>";
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for multifocal lenses measured in dioptres (0.25 units).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getAdd()
    {
        return $this->add;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for multifocal lenses measured in dioptres (0.25 units).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $add
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Adjustment for astigmatism measured in integer degrees.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $axis
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Back curvature measured in millimetres.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getBackCurve()
    {
        return $this->backCurve;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Back curvature measured in millimetres.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $backCurve
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Brand recommendations or restrictions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Brand recommendations or restrictions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $brand
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Special color or pattern.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Special color or pattern.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $color
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for astigmatism measured in dioptres (0.25 units).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getCylinder()
    {
        return $this->cylinder;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Power adjustment for astigmatism measured in dioptres (0.25 units).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $cylinder
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens diameter measured in millimetres.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getDiameter()
    {
        return $this->diameter;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens diameter measured in millimetres.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $diameter
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The recommended maximum wear period for the lens.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The recommended maximum wear period for the lens.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $duration
     * @return static
     */
    public function setDuration(FHIRQuantity $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * A coded concept listing the eye codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The eye for which the lens specification applies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRVisionEyes
     */
    public function getEye()
    {
        return $this->eye;
    }

    /**
     * A coded concept listing the eye codes.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The eye for which the lens specification applies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRVisionEyes $eye
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $note
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Notes for special requirements such as coatings and lens materials.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[] $note
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens power measured in dioptres (0.25 units).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Contact lens power measured in dioptres (0.25 units).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $power
     * @return static
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
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionPrism[]
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionPrism $prism
     * @return static
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
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionPrism[] $prism
     * @return static
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
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the type of vision correction product which is required for the
     * patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getProduct()
    {
        return $this->product;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $product
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lens power measured in dioptres (0.25 units).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal
     */
    public function getSphere()
    {
        return $this->sphere;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Lens power measured in dioptres (0.25 units).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $sphere
     * @return static
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
        if (null !== ($v = $this->getAdd())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAxis())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AXIS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBackCurve())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BACK_CURVE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBrand())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BRAND] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getColor())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COLOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCylinder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CYLINDER] = $fieldErrs;
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
        if (null !== ($v = $this->getEye())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EYE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPower())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_POWER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPrism())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRISM, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getProduct())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRODUCT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSphere())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SPHERE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ADD])) {
            $v = $this->getAdd();
            foreach($validationRules[self::FIELD_ADD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_ADD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADD])) {
                        $errs[self::FIELD_ADD] = [];
                    }
                    $errs[self::FIELD_ADD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AXIS])) {
            $v = $this->getAxis();
            foreach($validationRules[self::FIELD_AXIS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_AXIS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AXIS])) {
                        $errs[self::FIELD_AXIS] = [];
                    }
                    $errs[self::FIELD_AXIS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BACK_CURVE])) {
            $v = $this->getBackCurve();
            foreach($validationRules[self::FIELD_BACK_CURVE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_BACK_CURVE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BACK_CURVE])) {
                        $errs[self::FIELD_BACK_CURVE] = [];
                    }
                    $errs[self::FIELD_BACK_CURVE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BRAND])) {
            $v = $this->getBrand();
            foreach($validationRules[self::FIELD_BRAND] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_BRAND, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BRAND])) {
                        $errs[self::FIELD_BRAND] = [];
                    }
                    $errs[self::FIELD_BRAND][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COLOR])) {
            $v = $this->getColor();
            foreach($validationRules[self::FIELD_COLOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_COLOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COLOR])) {
                        $errs[self::FIELD_COLOR] = [];
                    }
                    $errs[self::FIELD_COLOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CYLINDER])) {
            $v = $this->getCylinder();
            foreach($validationRules[self::FIELD_CYLINDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_CYLINDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CYLINDER])) {
                        $errs[self::FIELD_CYLINDER] = [];
                    }
                    $errs[self::FIELD_CYLINDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DIAMETER])) {
            $v = $this->getDiameter();
            foreach($validationRules[self::FIELD_DIAMETER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_DIAMETER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION])) {
                        $errs[self::FIELD_DURATION] = [];
                    }
                    $errs[self::FIELD_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EYE])) {
            $v = $this->getEye();
            foreach($validationRules[self::FIELD_EYE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_EYE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EYE])) {
                        $errs[self::FIELD_EYE] = [];
                    }
                    $errs[self::FIELD_EYE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_POWER])) {
            $v = $this->getPower();
            foreach($validationRules[self::FIELD_POWER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_POWER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_POWER])) {
                        $errs[self::FIELD_POWER] = [];
                    }
                    $errs[self::FIELD_POWER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRISM])) {
            $v = $this->getPrism();
            foreach($validationRules[self::FIELD_PRISM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_PRISM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRISM])) {
                        $errs[self::FIELD_PRISM] = [];
                    }
                    $errs[self::FIELD_PRISM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT])) {
            $v = $this->getProduct();
            foreach($validationRules[self::FIELD_PRODUCT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_PRODUCT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT])) {
                        $errs[self::FIELD_PRODUCT] = [];
                    }
                    $errs[self::FIELD_PRODUCT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPHERE])) {
            $v = $this->getSphere();
            foreach($validationRules[self::FIELD_SPHERE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION, self::FIELD_SPHERE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPHERE])) {
                        $errs[self::FIELD_SPHERE] = [];
                    }
                    $errs[self::FIELD_SPHERE][$rule] = $err;
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
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification
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
                throw new \DomainException(sprintf('FHIRVisionPrescriptionLensSpecification::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRVisionPrescriptionLensSpecification::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRVisionPrescriptionLensSpecification;
        } elseif (!is_object($type) || !($type instanceof FHIRVisionPrescriptionLensSpecification)) {
            throw new \RuntimeException(sprintf(
                'FHIRVisionPrescriptionLensSpecification::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->add)) {
            $type->setAdd(FHIRDecimal::xmlUnserialize($children->add));
        }
        if (isset($attributes->add)) {
            $pt = $type->getAdd();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->add);
            } else {
                $type->setAdd((string)$attributes->add);
            }
        }
        if (isset($children->axis)) {
            $type->setAxis(FHIRInteger::xmlUnserialize($children->axis));
        }
        if (isset($attributes->axis)) {
            $pt = $type->getAxis();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->axis);
            } else {
                $type->setAxis((string)$attributes->axis);
            }
        }
        if (isset($children->backCurve)) {
            $type->setBackCurve(FHIRDecimal::xmlUnserialize($children->backCurve));
        }
        if (isset($attributes->backCurve)) {
            $pt = $type->getBackCurve();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->backCurve);
            } else {
                $type->setBackCurve((string)$attributes->backCurve);
            }
        }
        if (isset($children->brand)) {
            $type->setBrand(FHIRString::xmlUnserialize($children->brand));
        }
        if (isset($attributes->brand)) {
            $pt = $type->getBrand();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->brand);
            } else {
                $type->setBrand((string)$attributes->brand);
            }
        }
        if (isset($children->color)) {
            $type->setColor(FHIRString::xmlUnserialize($children->color));
        }
        if (isset($attributes->color)) {
            $pt = $type->getColor();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->color);
            } else {
                $type->setColor((string)$attributes->color);
            }
        }
        if (isset($children->cylinder)) {
            $type->setCylinder(FHIRDecimal::xmlUnserialize($children->cylinder));
        }
        if (isset($attributes->cylinder)) {
            $pt = $type->getCylinder();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->cylinder);
            } else {
                $type->setCylinder((string)$attributes->cylinder);
            }
        }
        if (isset($children->diameter)) {
            $type->setDiameter(FHIRDecimal::xmlUnserialize($children->diameter));
        }
        if (isset($attributes->diameter)) {
            $pt = $type->getDiameter();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->diameter);
            } else {
                $type->setDiameter((string)$attributes->diameter);
            }
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
        if (isset($children->power)) {
            $type->setPower(FHIRDecimal::xmlUnserialize($children->power));
        }
        if (isset($attributes->power)) {
            $pt = $type->getPower();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->power);
            } else {
                $type->setPower((string)$attributes->power);
            }
        }
        if (isset($children->prism)) {
            foreach($children->prism as $child) {
                $type->addPrism(FHIRVisionPrescriptionPrism::xmlUnserialize($child));
            }
        }
        if (isset($children->product)) {
            $type->setProduct(FHIRCodeableConcept::xmlUnserialize($children->product));
        }
        if (isset($children->sphere)) {
            $type->setSphere(FHIRDecimal::xmlUnserialize($children->sphere));
        }
        if (isset($attributes->sphere)) {
            $pt = $type->getSphere();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->sphere);
            } else {
                $type->setSphere((string)$attributes->sphere);
            }
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
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getAdd())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ADD, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getAxis())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AXIS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getBackCurve())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BACK_CURVE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getBrand())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_BRAND, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getColor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COLOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getCylinder())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CYLINDER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDiameter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DIAMETER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDuration())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DURATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getEye())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EYE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPower())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_POWER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPrism())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRISM, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getProduct())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRODUCT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSphere())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SPHERE, null, $v->_getFHIRXMLNamespace()));
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
            $a[self::FIELD_ADD] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_ADD_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getAxis())) {
            $a[self::FIELD_AXIS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRInteger::FIELD_VALUE]);
                $a[self::FIELD_AXIS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getBackCurve())) {
            $a[self::FIELD_BACK_CURVE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_BACK_CURVE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getBrand())) {
            $a[self::FIELD_BRAND] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_BRAND_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getColor())) {
            $a[self::FIELD_COLOR] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_COLOR_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getCylinder())) {
            $a[self::FIELD_CYLINDER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_CYLINDER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDiameter())) {
            $a[self::FIELD_DIAMETER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_DIAMETER_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getDuration())) {
            $a[self::FIELD_DURATION] = $v;
        }
        if (null !== ($v = $this->getEye())) {
            $a[self::FIELD_EYE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRVisionEyes::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRVisionEyes::FIELD_VALUE]);
                $a[self::FIELD_EYE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_NOTE][] = $v;
            }
        }
        if (null !== ($v = $this->getPower())) {
            $a[self::FIELD_POWER] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_POWER_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getPrism())) {
            $a[self::FIELD_PRISM] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PRISM][] = $v;
            }
        }
        if (null !== ($v = $this->getProduct())) {
            $a[self::FIELD_PRODUCT] = $v;
        }
        if (null !== ($v = $this->getSphere())) {
            $a[self::FIELD_SPHERE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDecimal::FIELD_VALUE]);
                $a[self::FIELD_SPHERE_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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