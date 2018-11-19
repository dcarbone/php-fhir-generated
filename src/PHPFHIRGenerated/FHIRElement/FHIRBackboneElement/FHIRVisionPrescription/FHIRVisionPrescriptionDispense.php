<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 19th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDecimal;
use PHPFHIRGenerated\FHIRElement\FHIRInteger;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRVisionBase;
use PHPFHIRGenerated\FHIRElement\FHIRVisionEyes;

/**
 * An authorization for the supply of glasses and/or contact lenses to a patient.
 *
 * Class FHIRVisionPrescriptionDispense
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription
 */
class FHIRVisionPrescriptionDispense extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'VisionPrescription.Dispense';

    /**
     * Power adjustment for multifocal lenses measured in diopters (0.25 units).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $add = null;

    /**
     * Adjustment for astigmatism measured in integer degrees.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    private $axis = null;

    /**
     * Back curvature measured in millimeters.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $backCurve = null;

    /**
     * The relative base, or reference lens edge, for the prism.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRVisionBase
     */
    private $base = null;

    /**
     * Brand recommendations or restrictions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $brand = null;

    /**
     * Special color or pattern.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $color = null;

    /**
     * Power adjustment for astigmatism measured in diopters (0.25 units).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $cylinder = null;

    /**
     * Contact lens diameter measured in millimeters.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $diameter = null;

    /**
     * The recommended maximum wear period for the lens.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    private $duration = null;

    /**
     * The eye for which the lens applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRVisionEyes
     */
    private $eye = null;

    /**
     * Notes for special requirements such as coatings and lens materials.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    private $note = [];

    /**
     * Contact lens power measured in diopters (0.25 units).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $power = null;

    /**
     * Amount of prism to compensate for eye alignment in fractional units.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $prism = null;

    /**
     * Identifies the type of vision correction product which is required for the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $product = null;

    /**
     * Lens power measured in diopters (0.25 units).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    private $sphere = null;

    /**
     * FHIRVisionPrescriptionDispense Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['add'])) {
                $value = $data['add'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense::__construct - Property \"add\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setAdd($value);
            }
            if (isset($data['axis'])) {
                $value = $data['axis'];
                if (is_array($value)) {
                    $value = new FHIRInteger($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRInteger($value);
                }
                if (!($value instanceof FHIRInteger)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense::__construct - Property \"axis\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or data to construct type, saw ".gettype($value)); 
                }
                $this->setAxis($value);
            }
            if (isset($data['backCurve'])) {
                $value = $data['backCurve'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense::__construct - Property \"backCurve\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setBackCurve($value);
            }
            if (isset($data['base'])) {
                $value = $data['base'];
                if (is_array($value)) {
                    $value = new FHIRVisionBase($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRVisionBase($value);
                }
                if (!($value instanceof FHIRVisionBase)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense::__construct - Property \"base\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRVisionBase or data to construct type, saw ".gettype($value)); 
                }
                $this->setBase($value);
            }
            if (isset($data['brand'])) {
                $value = $data['brand'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense::__construct - Property \"brand\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setBrand($value);
            }
            if (isset($data['color'])) {
                $value = $data['color'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense::__construct - Property \"color\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value)); 
                }
                $this->setColor($value);
            }
            if (isset($data['cylinder'])) {
                $value = $data['cylinder'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense::__construct - Property \"cylinder\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setCylinder($value);
            }
            if (isset($data['diameter'])) {
                $value = $data['diameter'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense::__construct - Property \"diameter\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setDiameter($value);
            }
            if (isset($data['duration'])) {
                $value = $data['duration'];
                if (is_array($value)) {
                    $value = new FHIRQuantity($value);
                } 
                if (!($value instanceof FHIRQuantity)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense::__construct - Property \"duration\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity or data to construct type, saw ".gettype($value)); 
                }
                $this->setDuration($value);
            }
            if (isset($data['eye'])) {
                $value = $data['eye'];
                if (is_array($value)) {
                    $value = new FHIRVisionEyes($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRVisionEyes($value);
                }
                if (!($value instanceof FHIRVisionEyes)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense::__construct - Property \"eye\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRVisionEyes or data to construct type, saw ".gettype($value)); 
                }
                $this->setEye($value);
            }
            if (isset($data['note'])) {
                $value = $data['note'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRAnnotation($v);
                        } 
                        if (!($v instanceof FHIRAnnotation)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense::__construct - Collection field \"note\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAnnotation or data to construct type, saw ".gettype($v)); 
                        }
                        $this->addNote($v);
                    }
                }
            }
            if (isset($data['power'])) {
                $value = $data['power'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense::__construct - Property \"power\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setPower($value);
            }
            if (isset($data['prism'])) {
                $value = $data['prism'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense::__construct - Property \"prism\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setPrism($value);
            }
            if (isset($data['product'])) {
                $value = $data['product'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense::__construct - Property \"product\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value)); 
                }
                $this->setProduct($value);
            }
            if (isset($data['sphere'])) {
                $value = $data['sphere'];
                if (is_array($value)) {
                    $value = new FHIRDecimal($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDecimal($value);
                }
                if (!($value instanceof FHIRDecimal)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense::__construct - Property \"sphere\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or data to construct type, saw ".gettype($value)); 
                }
                $this->setSphere($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Power adjustment for multifocal lenses measured in diopters (0.25 units).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setAdd($add)
    {
        if (null === $add) {
            return $this; 
        }
        if (is_scalar($add)) {
            $add = new FHIRDecimal($add);
        }
        if (!($add instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVisionPrescriptionDispense::setAdd - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($add)
            ));
        }
        $this->add = $add;
        return $this;
    }

    /**
     * Power adjustment for multifocal lenses measured in diopters (0.25 units).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getAdd()
    {
        return $this->add;
    }

    /**
     * Adjustment for astigmatism measured in integer degrees.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     * @return $this
     */
    public function setAxis($axis)
    {
        if (null === $axis) {
            return $this; 
        }
        if (is_scalar($axis)) {
            $axis = new FHIRInteger($axis);
        }
        if (!($axis instanceof FHIRInteger)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVisionPrescriptionDispense::setAxis - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRInteger or appropriate scalar value, %s seen.',
                gettype($axis)
            ));
        }
        $this->axis = $axis;
        return $this;
    }

    /**
     * Adjustment for astigmatism measured in integer degrees.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getAxis()
    {
        return $this->axis;
    }

    /**
     * Back curvature measured in millimeters.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setBackCurve($backCurve)
    {
        if (null === $backCurve) {
            return $this; 
        }
        if (is_scalar($backCurve)) {
            $backCurve = new FHIRDecimal($backCurve);
        }
        if (!($backCurve instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVisionPrescriptionDispense::setBackCurve - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($backCurve)
            ));
        }
        $this->backCurve = $backCurve;
        return $this;
    }

    /**
     * Back curvature measured in millimeters.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getBackCurve()
    {
        return $this->backCurve;
    }

    /**
     * The relative base, or reference lens edge, for the prism.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRVisionBase
     * @return $this
     */
    public function setBase($base)
    {
        if (null === $base) {
            return $this; 
        }
        if (is_scalar($base)) {
            $base = new FHIRVisionBase($base);
        }
        if (!($base instanceof FHIRVisionBase)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVisionPrescriptionDispense::setBase - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRVisionBase or appropriate scalar value, %s seen.',
                gettype($base)
            ));
        }
        $this->base = $base;
        return $this;
    }

    /**
     * The relative base, or reference lens edge, for the prism.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRVisionBase
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Brand recommendations or restrictions.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setBrand($brand)
    {
        if (null === $brand) {
            return $this; 
        }
        if (is_scalar($brand)) {
            $brand = new FHIRString($brand);
        }
        if (!($brand instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVisionPrescriptionDispense::setBrand - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($brand)
            ));
        }
        $this->brand = $brand;
        return $this;
    }

    /**
     * Brand recommendations or restrictions.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Special color or pattern.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setColor($color)
    {
        if (null === $color) {
            return $this; 
        }
        if (is_scalar($color)) {
            $color = new FHIRString($color);
        }
        if (!($color instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVisionPrescriptionDispense::setColor - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($color)
            ));
        }
        $this->color = $color;
        return $this;
    }

    /**
     * Special color or pattern.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Power adjustment for astigmatism measured in diopters (0.25 units).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setCylinder($cylinder)
    {
        if (null === $cylinder) {
            return $this; 
        }
        if (is_scalar($cylinder)) {
            $cylinder = new FHIRDecimal($cylinder);
        }
        if (!($cylinder instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVisionPrescriptionDispense::setCylinder - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($cylinder)
            ));
        }
        $this->cylinder = $cylinder;
        return $this;
    }

    /**
     * Power adjustment for astigmatism measured in diopters (0.25 units).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getCylinder()
    {
        return $this->cylinder;
    }

    /**
     * Contact lens diameter measured in millimeters.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setDiameter($diameter)
    {
        if (null === $diameter) {
            return $this; 
        }
        if (is_scalar($diameter)) {
            $diameter = new FHIRDecimal($diameter);
        }
        if (!($diameter instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVisionPrescriptionDispense::setDiameter - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($diameter)
            ));
        }
        $this->diameter = $diameter;
        return $this;
    }

    /**
     * Contact lens diameter measured in millimeters.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDiameter()
    {
        return $this->diameter;
    }

    /**
     * The recommended maximum wear period for the lens.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     * @return $this
     */
    public function setDuration(FHIRQuantity $duration = null)
    {
        if (null === $duration) {
            return $this; 
        }
        $this->duration = $duration;
        return $this;
    }

    /**
     * The recommended maximum wear period for the lens.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * The eye for which the lens applies.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRVisionEyes
     * @return $this
     */
    public function setEye($eye)
    {
        if (null === $eye) {
            return $this; 
        }
        if (is_scalar($eye)) {
            $eye = new FHIRVisionEyes($eye);
        }
        if (!($eye instanceof FHIRVisionEyes)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVisionPrescriptionDispense::setEye - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRVisionEyes or appropriate scalar value, %s seen.',
                gettype($eye)
            ));
        }
        $this->eye = $eye;
        return $this;
    }

    /**
     * The eye for which the lens applies.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRVisionEyes
     */
    public function getEye()
    {
        return $this->eye;
    }

    /**
     * Notes for special requirements such as coatings and lens materials.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     * @return $this
     */
    public function addNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note[] = $note;
        return $this;
    }

    /**
     * Notes for special requirements such as coatings and lens materials.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Contact lens power measured in diopters (0.25 units).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setPower($power)
    {
        if (null === $power) {
            return $this; 
        }
        if (is_scalar($power)) {
            $power = new FHIRDecimal($power);
        }
        if (!($power instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVisionPrescriptionDispense::setPower - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($power)
            ));
        }
        $this->power = $power;
        return $this;
    }

    /**
     * Contact lens power measured in diopters (0.25 units).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Amount of prism to compensate for eye alignment in fractional units.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setPrism($prism)
    {
        if (null === $prism) {
            return $this; 
        }
        if (is_scalar($prism)) {
            $prism = new FHIRDecimal($prism);
        }
        if (!($prism instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVisionPrescriptionDispense::setPrism - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($prism)
            ));
        }
        $this->prism = $prism;
        return $this;
    }

    /**
     * Amount of prism to compensate for eye alignment in fractional units.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPrism()
    {
        return $this->prism;
    }

    /**
     * Identifies the type of vision correction product which is required for the patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setProduct(FHIRCodeableConcept $product = null)
    {
        if (null === $product) {
            return $this; 
        }
        $this->product = $product;
        return $this;
    }

    /**
     * Identifies the type of vision correction product which is required for the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Lens power measured in diopters (0.25 units).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     * @return $this
     */
    public function setSphere($sphere)
    {
        if (null === $sphere) {
            return $this; 
        }
        if (is_scalar($sphere)) {
            $sphere = new FHIRDecimal($sphere);
        }
        if (!($sphere instanceof FHIRDecimal)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRVisionPrescriptionDispense::setSphere - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDecimal or appropriate scalar value, %s seen.',
                gettype($sphere)
            ));
        }
        $this->sphere = $sphere;
        return $this;
    }

    /**
     * Lens power measured in diopters (0.25 units).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getSphere()
    {
        return $this->sphere;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)self::FHIR_TYPE_NAME;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAdd())) {
            $a['add'] = $v;
        }
        if (null !== ($v = $this->getAxis())) {
            $a['axis'] = $v;
        }
        if (null !== ($v = $this->getBackCurve())) {
            $a['backCurve'] = $v;
        }
        if (null !== ($v = $this->getBase())) {
            $a['base'] = $v;
        }
        if (null !== ($v = $this->getBrand())) {
            $a['brand'] = $v;
        }
        if (null !== ($v = $this->getColor())) {
            $a['color'] = $v;
        }
        if (null !== ($v = $this->getCylinder())) {
            $a['cylinder'] = $v;
        }
        if (null !== ($v = $this->getDiameter())) {
            $a['diameter'] = $v;
        }
        if (null !== ($v = $this->getDuration())) {
            $a['duration'] = $v;
        }
        if (null !== ($v = $this->getEye())) {
            $a['eye'] = $v;
        }
        if (0 < count($values = $this->getNote())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['note'] = $vs;
            }
        }
        if (null !== ($v = $this->getPower())) {
            $a['power'] = $v;
        }
        if (null !== ($v = $this->getPrism())) {
            $a['prism'] = $v;
        }
        if (null !== ($v = $this->getProduct())) {
            $a['product'] = $v;
        }
        if (null !== ($v = $this->getSphere())) {
            $a['sphere'] = $v;
        }
        return $a;
    }

    /**
     * @param bool $returnSXE
     * @param null|\SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, \SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<VisionPrescriptionDispense xmlns="http://hl7.org/fhir"></VisionPrescriptionDispense>');
        }
        if (null !== ($v = $this->getAdd())) {
            $v->xmlSerialize(true, $sxe->addChild('add'));
        }
        if (null !== ($v = $this->getAxis())) {
            $v->xmlSerialize(true, $sxe->addChild('axis'));
        }
        if (null !== ($v = $this->getBackCurve())) {
            $v->xmlSerialize(true, $sxe->addChild('backCurve'));
        }
        if (null !== ($v = $this->getBase())) {
            $v->xmlSerialize(true, $sxe->addChild('base'));
        }
        if (null !== ($v = $this->getBrand())) {
            $v->xmlSerialize(true, $sxe->addChild('brand'));
        }
        if (null !== ($v = $this->getColor())) {
            $v->xmlSerialize(true, $sxe->addChild('color'));
        }
        if (null !== ($v = $this->getCylinder())) {
            $v->xmlSerialize(true, $sxe->addChild('cylinder'));
        }
        if (null !== ($v = $this->getDiameter())) {
            $v->xmlSerialize(true, $sxe->addChild('diameter'));
        }
        if (null !== ($v = $this->getDuration())) {
            $v->xmlSerialize(true, $sxe->addChild('duration'));
        }
        if (null !== ($v = $this->getEye())) {
            $v->xmlSerialize(true, $sxe->addChild('eye'));
        }
        if (0 < count($values = $this->getNote())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('note'));
                }
            }
        }
        if (null !== ($v = $this->getPower())) {
            $v->xmlSerialize(true, $sxe->addChild('power'));
        }
        if (null !== ($v = $this->getPrism())) {
            $v->xmlSerialize(true, $sxe->addChild('prism'));
        }
        if (null !== ($v = $this->getProduct())) {
            $v->xmlSerialize(true, $sxe->addChild('product'));
        }
        if (null !== ($v = $this->getSphere())) {
            $v->xmlSerialize(true, $sxe->addChild('sphere'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}