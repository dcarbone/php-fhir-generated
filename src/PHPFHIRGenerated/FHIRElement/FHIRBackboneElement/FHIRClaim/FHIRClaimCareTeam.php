<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaim;

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
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRReference;

/**
 * A provider issued list of services and products provided, or to be provided, to a patient which is provided to an insurer for payment recovery.
 *
 * Class FHIRClaimCareTeam
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaim
 */
class FHIRClaimCareTeam extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Claim.CareTeam';

    /**
     * Member of the team who provided the overall service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $provider = null;

    /**
     * The qualification which is applicable for this service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $qualification = null;

    /**
     * The party who is billing and responsible for the claimed good or service rendered to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $responsible = null;

    /**
     * The lead, assisting or supervising practitioner and their discipline if a multidisciplinary team.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $role = null;

    /**
     * Sequence of the careTeam which serves to order and provide a link.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $sequence = null;

    /**
     * FHIRClaimCareTeam Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['provider'])) {
                $this->setProvider($data['provider']);
            }
            if (isset($data['qualification'])) {
                $this->setQualification($data['qualification']);
            }
            if (isset($data['responsible'])) {
                $this->setResponsible($data['responsible']);
            }
            if (isset($data['role'])) {
                $this->setRole($data['role']);
            }
            if (isset($data['sequence'])) {
                $this->setSequence($data['sequence']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCareTeam::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Member of the team who provided the overall service.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setProvider(FHIRReference $provider = null)
    {
        if (null === $provider) {
            return $this; 
        }
        $this->provider = $provider;
        return $this;
    }

    /**
     * Member of the team who provided the overall service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProvider()
    {
        return $this->provider;
    }


    /**
     * The qualification which is applicable for this service.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setQualification(FHIRCodeableConcept $qualification = null)
    {
        if (null === $qualification) {
            return $this; 
        }
        $this->qualification = $qualification;
        return $this;
    }

    /**
     * The qualification which is applicable for this service.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getQualification()
    {
        return $this->qualification;
    }


    /**
     * The party who is billing and responsible for the claimed good or service rendered to the patient.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setResponsible($responsible)
    {
        if (null === $responsible) {
            return $this; 
        }
        if (is_scalar($responsible)) {
            $responsible = new FHIRBoolean($responsible);
        }
        if (!($responsible instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimCareTeam::setResponsible - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($responsible)
            ));
        }
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * The party who is billing and responsible for the claimed good or service rendered to the patient.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getResponsible()
    {
        return $this->responsible;
    }


    /**
     * The lead, assisting or supervising practitioner and their discipline if a multidisciplinary team.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setRole(FHIRCodeableConcept $role = null)
    {
        if (null === $role) {
            return $this; 
        }
        $this->role = $role;
        return $this;
    }

    /**
     * The lead, assisting or supervising practitioner and their discipline if a multidisciplinary team.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRole()
    {
        return $this->role;
    }


    /**
     * Sequence of the careTeam which serves to order and provide a link.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     * @return $this
     */
    public function setSequence($sequence)
    {
        if (null === $sequence) {
            return $this; 
        }
        if (is_scalar($sequence)) {
            $sequence = new FHIRPositiveInt($sequence);
        }
        if (!($sequence instanceof FHIRPositiveInt)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClaimCareTeam::setSequence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt or appropriate scalar value, %s seen.',
                gettype($sequence)
            ));
        }
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Sequence of the careTeam which serves to order and provide a link.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSequence()
    {
        return $this->sequence;
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
        if (null !== ($v = $this->getProvider())) {
            $a['provider'] = $v;
        }
        if (null !== ($v = $this->getQualification())) {
            $a['qualification'] = $v;
        }
        if (null !== ($v = $this->getResponsible())) {
            $a['responsible'] = $v;
        }
        if (null !== ($v = $this->getRole())) {
            $a['role'] = $v;
        }
        if (null !== ($v = $this->getSequence())) {
            $a['sequence'] = $v;
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
            $sxe = new \SimpleXMLElement('<ClaimCareTeam xmlns="http://hl7.org/fhir"></ClaimCareTeam>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}