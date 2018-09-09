<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDeviceSpec;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;

/**
 * A detailed description of a device, typically as part of a regulated medicinal product. It is not intended to replace the Device resource, which covers use of device instances.
 *
 * Class FHIRMedicinalProductDeviceSpecMaterial
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDeviceSpec
 */
class FHIRMedicinalProductDeviceSpecMaterial extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MedicinalProductDeviceSpec.Material';

    /**
     * Whether the substance is a known or suspected allergen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $allergenicIndicator = null;

    /**
     * Indicates an alternative material of the device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $alternate = null;

    /**
     * The substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $substance = null;

    /**
     * FHIRMedicinalProductDeviceSpecMaterial Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['allergenicIndicator'])) {
                $this->setAllergenicIndicator($data['allergenicIndicator']);
            }
            if (isset($data['alternate'])) {
                $this->setAlternate($data['alternate']);
            }
            if (isset($data['substance'])) {
                $this->setSubstance($data['substance']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDeviceSpec\FHIRMedicinalProductDeviceSpecMaterial::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Whether the substance is a known or suspected allergen.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setAllergenicIndicator($allergenicIndicator)
    {
        if (null === $allergenicIndicator) {
            return $this; 
        }
        if (is_scalar($allergenicIndicator)) {
            $allergenicIndicator = new FHIRBoolean($allergenicIndicator);
        }
        if (!($allergenicIndicator instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductDeviceSpecMaterial::setAllergenicIndicator - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($allergenicIndicator)
            ));
        }
        $this->allergenicIndicator = $allergenicIndicator;
        return $this;
    }

    /**
     * Whether the substance is a known or suspected allergen.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAllergenicIndicator()
    {
        return $this->allergenicIndicator;
    }


    /**
     * Indicates an alternative material of the device.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setAlternate($alternate)
    {
        if (null === $alternate) {
            return $this; 
        }
        if (is_scalar($alternate)) {
            $alternate = new FHIRBoolean($alternate);
        }
        if (!($alternate instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductDeviceSpecMaterial::setAlternate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($alternate)
            ));
        }
        $this->alternate = $alternate;
        return $this;
    }

    /**
     * Indicates an alternative material of the device.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAlternate()
    {
        return $this->alternate;
    }


    /**
     * The substance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setSubstance(FHIRCodeableConcept $substance = null)
    {
        if (null === $substance) {
            return $this; 
        }
        $this->substance = $substance;
        return $this;
    }

    /**
     * The substance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubstance()
    {
        return $this->substance;
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
        if (null !== ($v = $this->getAllergenicIndicator())) {
            $a['allergenicIndicator'] = $v;
        }
        if (null !== ($v = $this->getAlternate())) {
            $a['alternate'] = $v;
        }
        if (null !== ($v = $this->getSubstance())) {
            $a['substance'] = $v;
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
            $sxe = new \SimpleXMLElement('<MedicinalProductDeviceSpecMaterial xmlns="http://hl7.org/fhir"></MedicinalProductDeviceSpecMaterial>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}