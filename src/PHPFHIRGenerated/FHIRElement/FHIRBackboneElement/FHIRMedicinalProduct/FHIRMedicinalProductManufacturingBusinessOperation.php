<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct;

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
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * Detailed definition of a medicinal product, typically for uses other than direct patient care (e.g. regulatory use).
 *
 * Class FHIRMedicinalProductManufacturingBusinessOperation
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct
 */
class FHIRMedicinalProductManufacturingBusinessOperation extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'MedicinalProduct.ManufacturingBusinessOperation';

    /**
     * Regulatory authorization reference number.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $authorisationReferenceNumber = null;

    /**
     * To indicate if this proces is commercially confidential.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $confidentialityIndicator = null;

    /**
     * Regulatory authorization date.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $effectiveDate = null;

    /**
     * The manufacturer or establishment associated with the process.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $manufacturer = null;

    /**
     * The type of manufacturing operation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $operationType = null;

    /**
     * A regulator which oversees the operation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $regulator = null;

    /**
     * FHIRMedicinalProductManufacturingBusinessOperation Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['authorisationReferenceNumber'])) {
                $this->setAuthorisationReferenceNumber($data['authorisationReferenceNumber']);
            }
            if (isset($data['confidentialityIndicator'])) {
                $this->setConfidentialityIndicator($data['confidentialityIndicator']);
            }
            if (isset($data['effectiveDate'])) {
                $this->setEffectiveDate($data['effectiveDate']);
            }
            if (isset($data['manufacturer'])) {
                $this->setManufacturer($data['manufacturer']);
            }
            if (isset($data['operationType'])) {
                $this->setOperationType($data['operationType']);
            }
            if (isset($data['regulator'])) {
                $this->setRegulator($data['regulator']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRMedicinalProduct\FHIRMedicinalProductManufacturingBusinessOperation::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Regulatory authorization reference number.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setAuthorisationReferenceNumber(FHIRIdentifier $authorisationReferenceNumber = null)
    {
        if (null === $authorisationReferenceNumber) {
            return $this; 
        }
        $this->authorisationReferenceNumber = $authorisationReferenceNumber;
        return $this;
    }

    /**
     * Regulatory authorization reference number.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getAuthorisationReferenceNumber()
    {
        return $this->authorisationReferenceNumber;
    }


    /**
     * To indicate if this proces is commercially confidential.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setConfidentialityIndicator(FHIRCodeableConcept $confidentialityIndicator = null)
    {
        if (null === $confidentialityIndicator) {
            return $this; 
        }
        $this->confidentialityIndicator = $confidentialityIndicator;
        return $this;
    }

    /**
     * To indicate if this proces is commercially confidential.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getConfidentialityIndicator()
    {
        return $this->confidentialityIndicator;
    }


    /**
     * Regulatory authorization date.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setEffectiveDate($effectiveDate)
    {
        if (null === $effectiveDate) {
            return $this; 
        }
        if (is_scalar($effectiveDate)) {
            $effectiveDate = new FHIRDateTime($effectiveDate);
        }
        if (!($effectiveDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductManufacturingBusinessOperation::setEffectiveDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($effectiveDate)
            ));
        }
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Regulatory authorization date.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }


    /**
     * The manufacturer or establishment associated with the process.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setManufacturer(FHIRReference $manufacturer = null)
    {
        if (null === $manufacturer) {
            return $this; 
        }
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * The manufacturer or establishment associated with the process.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }


    /**
     * The type of manufacturing operation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setOperationType(FHIRCodeableConcept $operationType = null)
    {
        if (null === $operationType) {
            return $this; 
        }
        $this->operationType = $operationType;
        return $this;
    }

    /**
     * The type of manufacturing operation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOperationType()
    {
        return $this->operationType;
    }


    /**
     * A regulator which oversees the operation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRegulator(FHIRReference $regulator = null)
    {
        if (null === $regulator) {
            return $this; 
        }
        $this->regulator = $regulator;
        return $this;
    }

    /**
     * A regulator which oversees the operation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRegulator()
    {
        return $this->regulator;
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
        if (null !== ($v = $this->getAuthorisationReferenceNumber())) {
            $a['authorisationReferenceNumber'] = $v;
        }
        if (null !== ($v = $this->getConfidentialityIndicator())) {
            $a['confidentialityIndicator'] = $v;
        }
        if (null !== ($v = $this->getEffectiveDate())) {
            $a['effectiveDate'] = $v;
        }
        if (null !== ($v = $this->getManufacturer())) {
            $a['manufacturer'] = $v;
        }
        if (null !== ($v = $this->getOperationType())) {
            $a['operationType'] = $v;
        }
        if (null !== ($v = $this->getRegulator())) {
            $a['regulator'] = $v;
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
            $sxe = new \SimpleXMLElement('<MedicinalProductManufacturingBusinessOperation xmlns="http://hl7.org/fhir"></MedicinalProductManufacturingBusinessOperation>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}