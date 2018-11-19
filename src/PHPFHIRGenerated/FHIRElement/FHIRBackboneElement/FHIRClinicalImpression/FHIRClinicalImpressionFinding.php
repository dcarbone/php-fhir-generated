<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A record of a clinical assessment performed to determine what problem(s) may affect the patient and before planning the treatments or management strategies that are best to manage a patient's condition. Assessments are often 1:1 with a clinical consultation / encounter,  but this varies greatly depending on the clinical workflow. This resource is called "ClinicalImpression" rather than "ClinicalAssessment" to avoid confusion with the recording of assessment tools such as Apgar score.
 *
 * Class FHIRClinicalImpressionFinding
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression
 */
class FHIRClinicalImpressionFinding extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ClinicalImpression.Finding';

    /**
     * Which investigations support finding or diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $basis = null;

    /**
     * Specific text, code or reference for finding or diagnosis, which may include ruled-out or resolved conditions. (choose any one of item*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $itemCodeableConcept = null;

    /**
     * Specific text, code or reference for finding or diagnosis, which may include ruled-out or resolved conditions. (choose any one of item*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $itemReference = null;

    /**
     * FHIRClinicalImpressionFinding Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['basis'])) {
                $value = $data['basis'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding::__construct - Property \"basis\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setBasis($value);
            }
            if (isset($data['itemCodeableConcept'])) {
                $value = $data['itemCodeableConcept'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding::__construct - Property \"itemCodeableConcept\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setItemCodeableConcept($value);
            }
            if (isset($data['itemReference'])) {
                $value = $data['itemReference'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding::__construct - Property \"itemReference\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setItemReference($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Which investigations support finding or diagnosis.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setBasis($basis)
    {
        if (null === $basis) {
            return $this; 
        }
        if (is_scalar($basis)) {
            $basis = new FHIRString($basis);
        }
        if (!($basis instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClinicalImpressionFinding::setBasis - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($basis)
            ));
        }
        $this->basis = $basis;
        return $this;
    }

    /**
     * Which investigations support finding or diagnosis.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getBasis()
    {
        return $this->basis;
    }

    /**
     * Specific text, code or reference for finding or diagnosis, which may include ruled-out or resolved conditions. (choose any one of item*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setItemCodeableConcept(FHIRCodeableConcept $itemCodeableConcept = null)
    {
        if (null === $itemCodeableConcept) {
            return $this; 
        }
        $this->itemCodeableConcept = $itemCodeableConcept;
        return $this;
    }

    /**
     * Specific text, code or reference for finding or diagnosis, which may include ruled-out or resolved conditions. (choose any one of item*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getItemCodeableConcept()
    {
        return $this->itemCodeableConcept;
    }

    /**
     * Specific text, code or reference for finding or diagnosis, which may include ruled-out or resolved conditions. (choose any one of item*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setItemReference(FHIRReference $itemReference = null)
    {
        if (null === $itemReference) {
            return $this; 
        }
        $this->itemReference = $itemReference;
        return $this;
    }

    /**
     * Specific text, code or reference for finding or diagnosis, which may include ruled-out or resolved conditions. (choose any one of item*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getItemReference()
    {
        return $this->itemReference;
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
        if (null !== ($v = $this->getBasis())) {
            $a['basis'] = $v;
        }
        if (null !== ($v = $this->getItemCodeableConcept())) {
            $a['itemCodeableConcept'] = $v;
        }
        if (null !== ($v = $this->getItemReference())) {
            $a['itemReference'] = $v;
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
            $sxe = new \SimpleXMLElement('<ClinicalImpressionFinding xmlns="http://hl7.org/fhir"></ClinicalImpressionFinding>');
        }
        if (null !== ($v = $this->getBasis())) {
            $v->xmlSerialize(true, $sxe->addChild('basis'));
        }
        if (null !== ($v = $this->getItemCodeableConcept())) {
            $v->xmlSerialize(true, $sxe->addChild('itemCodeableConcept'));
        }
        if (null !== ($v = $this->getItemReference())) {
            $v->xmlSerialize(true, $sxe->addChild('itemReference'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}