<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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

use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRResearchSubjectStatus;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A process where a researcher or organization plans and then executes a series of steps intended to increase the field of healthcare-related knowledge.  This includes studies of safety, efficacy, comparative effectiveness and other information about medications, devices, therapies and other interventional and investigative techniques.  A ResearchStudy involves the gathering of information about human or animal subjects.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRResearchSubject
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRResearchSubject extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ResearchSubject';

    /**
     * The name of the arm in the study the subject actually followed as part of this study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $actualArm = null;

    /**
     * The name of the arm in the study the subject is expected to follow as part of this study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $assignedArm = null;

    /**
     * A record of the patient's informed agreement to participate in the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $consent = null;

    /**
     * Identifiers assigned to this research study by the sponsor or other systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    private $identifier = null;

    /**
     * The record of the person or animal who is involved in the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $individual = null;

    /**
     * The dates the subject began and ended their participation in the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $period = null;

    /**
     * The current state of the subject.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResearchSubjectStatus
     */
    private $status = null;

    /**
     * Reference to the study the subject is participating in.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $study = null;

    /**
     * FHIRResearchSubject Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['actualArm'])) {
                $value = $data['actualArm'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRResearchSubject::__construct - Property \"actualArm\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setActualArm($value);
            }
            if (isset($data['assignedArm'])) {
                $value = $data['assignedArm'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRResearchSubject::__construct - Property \"assignedArm\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setAssignedArm($value);
            }
            if (isset($data['consent'])) {
                $value = $data['consent'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRResearchSubject::__construct - Property \"consent\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setConsent($value);
            }
            if (isset($data['identifier'])) {
                $value = $data['identifier'];
                if (is_array($value)) {
                    $value = new FHIRIdentifier($value);
                } 
                if (!($value instanceof FHIRIdentifier)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRResearchSubject::__construct - Property \"identifier\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($value));
                }
                $this->setIdentifier($value);
            }
            if (isset($data['individual'])) {
                $value = $data['individual'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRResearchSubject::__construct - Property \"individual\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setIndividual($value);
            }
            if (isset($data['period'])) {
                $value = $data['period'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRResearchSubject::__construct - Property \"period\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value));
                }
                $this->setPeriod($value);
            }
            if (isset($data['status'])) {
                $value = $data['status'];
                if (is_array($value)) {
                    $value = new FHIRResearchSubjectStatus($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRResearchSubjectStatus($value);
                }
                if (!($value instanceof FHIRResearchSubjectStatus)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRResearchSubject::__construct - Property \"status\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRResearchSubjectStatus or data to construct type, saw ".gettype($value));
                }
                $this->setStatus($value);
            }
            if (isset($data['study'])) {
                $value = $data['study'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRResearchSubject::__construct - Property \"study\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setStudy($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRResearchSubject::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The name of the arm in the study the subject actually followed as part of this study.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setActualArm($actualArm)
    {
        if (null === $actualArm) {
            return $this; 
        }
        if (is_scalar($actualArm)) {
            $actualArm = new FHIRString($actualArm);
        }
        if (!($actualArm instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRResearchSubject::setActualArm - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($actualArm)
            ));
        }
        $this->actualArm = $actualArm;
        return $this;
    }

    /**
     * The name of the arm in the study the subject actually followed as part of this study.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getActualArm()
    {
        return $this->actualArm;
    }

    /**
     * The name of the arm in the study the subject is expected to follow as part of this study.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setAssignedArm($assignedArm)
    {
        if (null === $assignedArm) {
            return $this; 
        }
        if (is_scalar($assignedArm)) {
            $assignedArm = new FHIRString($assignedArm);
        }
        if (!($assignedArm instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRResearchSubject::setAssignedArm - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($assignedArm)
            ));
        }
        $this->assignedArm = $assignedArm;
        return $this;
    }

    /**
     * The name of the arm in the study the subject is expected to follow as part of this study.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAssignedArm()
    {
        return $this->assignedArm;
    }

    /**
     * A record of the patient's informed agreement to participate in the study.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setConsent(FHIRReference $consent = null)
    {
        if (null === $consent) {
            return $this; 
        }
        $this->consent = $consent;
        return $this;
    }

    /**
     * A record of the patient's informed agreement to participate in the study.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getConsent()
    {
        return $this->consent;
    }

    /**
     * Identifiers assigned to this research study by the sponsor or other systems.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Identifiers assigned to this research study by the sponsor or other systems.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The record of the person or animal who is involved in the study.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setIndividual(FHIRReference $individual = null)
    {
        if (null === $individual) {
            return $this; 
        }
        $this->individual = $individual;
        return $this;
    }

    /**
     * The record of the person or animal who is involved in the study.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getIndividual()
    {
        return $this->individual;
    }

    /**
     * The dates the subject began and ended their participation in the study.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        if (null === $period) {
            return $this; 
        }
        $this->period = $period;
        return $this;
    }

    /**
     * The dates the subject began and ended their participation in the study.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * The current state of the subject.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRResearchSubjectStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRResearchSubjectStatus($status);
        }
        if (!($status instanceof FHIRResearchSubjectStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRResearchSubject::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRResearchSubjectStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The current state of the subject.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRResearchSubjectStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Reference to the study the subject is participating in.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setStudy(FHIRReference $study = null)
    {
        if (null === $study) {
            return $this; 
        }
        $this->study = $study;
        return $this;
    }

    /**
     * Reference to the study the subject is participating in.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getStudy()
    {
        return $this->study;
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
        $a['resourceType'] = self::FHIR_TYPE_NAME;
        if (null !== ($v = $this->getActualArm())) {
            $a['actualArm'] = $v;
        }
        if (null !== ($v = $this->getAssignedArm())) {
            $a['assignedArm'] = $v;
        }
        if (null !== ($v = $this->getConsent())) {
            $a['consent'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getIndividual())) {
            $a['individual'] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a['period'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getStudy())) {
            $a['study'] = $v;
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
            $sxe = new \SimpleXMLElement('<ResearchSubject xmlns="http://hl7.org/fhir"></ResearchSubject>');
        }
        if (null !== ($v = $this->getActualArm())) {
            $v->xmlSerialize(true, $sxe->addChild('actualArm'));
        }
        if (null !== ($v = $this->getAssignedArm())) {
            $v->xmlSerialize(true, $sxe->addChild('assignedArm'));
        }
        if (null !== ($v = $this->getConsent())) {
            $v->xmlSerialize(true, $sxe->addChild('consent'));
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize(true, $sxe->addChild('identifier'));
        }
        if (null !== ($v = $this->getIndividual())) {
            $v->xmlSerialize(true, $sxe->addChild('individual'));
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('period'));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('status'));
        }
        if (null !== ($v = $this->getStudy())) {
            $v->xmlSerialize(true, $sxe->addChild('study'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}