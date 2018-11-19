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

use PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory;
use PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceClinicalStatus;
use PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCriticality;
use PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceType;
use PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceVerificationStatus;
use PHPFHIRGenerated\FHIRElement\FHIRAnnotation;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge;
use PHPFHIRGenerated\FHIRElement\FHIRRange;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Risk of harmful or undesirable, physiological response which is unique to an individual and associated with exposure to a substance.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRAllergyIntolerance
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRAllergyIntolerance extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'AllergyIntolerance';

    /**
     * The date on which the existance of the AllergyIntolerance was first asserted or acknowledged.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $assertedDate = null;

    /**
     * The source of the information about the allergy that is recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $asserter = null;

    /**
     * Category of the identified substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory[]
     */
    private $category = [];

    /**
     * The clinical status of the allergy or intolerance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceClinicalStatus
     */
    private $clinicalStatus = null;

    /**
     * Code for an allergy or intolerance statement (either a positive or a negated/excluded statement).  This may be a code for a substance or pharmaceutical product that is considered to be responsible for the adverse reaction risk (e.g., "Latex"), an allergy or intolerance condition (e.g., "Latex allergy"), or a negated/excluded code for a specific substance or class (e.g., "No latex allergy") or a general or categorical negated statement (e.g.,  "No known allergy", "No known drug allergies").
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    private $code = null;

    /**
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the identified substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCriticality
     */
    private $criticality = null;

    /**
     * This records identifiers associated with this allergy/intolerance concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * Represents the date and/or time of the last known occurrence of a reaction event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $lastOccurrence = null;

    /**
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    private $note = [];

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    private $onsetAge = null;

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    private $onsetDateTime = null;

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    private $onsetPeriod = null;

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    private $onsetRange = null;

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $onsetString = null;

    /**
     * The patient who has the allergy or intolerance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $patient = null;

    /**
     * Details about each adverse reaction event linked to exposure to the identified substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[]
     */
    private $reaction = [];

    /**
     * Individual who recorded the record and takes responsibility for its content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $recorder = null;

    /**
     * Identification of the underlying physiological mechanism for the reaction risk.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceType
     */
    private $type = null;

    /**
     * Assertion about certainty associated with the propensity, or potential risk, of a reaction to the identified substance (including pharmaceutical product).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceVerificationStatus
     */
    private $verificationStatus = null;

    /**
     * FHIRAllergyIntolerance Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['assertedDate'])) {
                $value = $data['assertedDate'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Property \"assertedDate\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setAssertedDate($value);
            }
            if (isset($data['asserter'])) {
                $value = $data['asserter'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Property \"asserter\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setAsserter($value);
            }
            if (isset($data['category'])) {
                $value = $data['category'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRAllergyIntoleranceCategory($v);
                        }  elseif (is_scalar($v)) {
                            $v = new FHIRAllergyIntoleranceCategory($v);
                        }
                        if (!($v instanceof FHIRAllergyIntoleranceCategory)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Collection field \"category\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory or data to construct type, saw ".gettype($v));
                        }
                        $this->addCategory($v);
                    }
                }
            }
            if (isset($data['clinicalStatus'])) {
                $value = $data['clinicalStatus'];
                if (is_array($value)) {
                    $value = new FHIRAllergyIntoleranceClinicalStatus($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRAllergyIntoleranceClinicalStatus($value);
                }
                if (!($value instanceof FHIRAllergyIntoleranceClinicalStatus)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Property \"clinicalStatus\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceClinicalStatus or data to construct type, saw ".gettype($value));
                }
                $this->setClinicalStatus($value);
            }
            if (isset($data['code'])) {
                $value = $data['code'];
                if (is_array($value)) {
                    $value = new FHIRCodeableConcept($value);
                } 
                if (!($value instanceof FHIRCodeableConcept)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Property \"code\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept or data to construct type, saw ".gettype($value));
                }
                $this->setCode($value);
            }
            if (isset($data['criticality'])) {
                $value = $data['criticality'];
                if (is_array($value)) {
                    $value = new FHIRAllergyIntoleranceCriticality($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRAllergyIntoleranceCriticality($value);
                }
                if (!($value instanceof FHIRAllergyIntoleranceCriticality)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Property \"criticality\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCriticality or data to construct type, saw ".gettype($value));
                }
                $this->setCriticality($value);
            }
            if (isset($data['identifier'])) {
                $value = $data['identifier'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRIdentifier($v);
                        } 
                        if (!($v instanceof FHIRIdentifier)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Collection field \"identifier\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($v));
                        }
                        $this->addIdentifier($v);
                    }
                }
            }
            if (isset($data['lastOccurrence'])) {
                $value = $data['lastOccurrence'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Property \"lastOccurrence\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setLastOccurrence($value);
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
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Collection field \"note\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAnnotation or data to construct type, saw ".gettype($v));
                        }
                        $this->addNote($v);
                    }
                }
            }
            if (isset($data['onsetAge'])) {
                $value = $data['onsetAge'];
                if (is_array($value)) {
                    $value = new FHIRAge($value);
                } 
                if (!($value instanceof FHIRAge)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Property \"onsetAge\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge or data to construct type, saw ".gettype($value));
                }
                $this->setOnsetAge($value);
            }
            if (isset($data['onsetDateTime'])) {
                $value = $data['onsetDateTime'];
                if (is_array($value)) {
                    $value = new FHIRDateTime($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDateTime($value);
                }
                if (!($value instanceof FHIRDateTime)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Property \"onsetDateTime\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or data to construct type, saw ".gettype($value));
                }
                $this->setOnsetDateTime($value);
            }
            if (isset($data['onsetPeriod'])) {
                $value = $data['onsetPeriod'];
                if (is_array($value)) {
                    $value = new FHIRPeriod($value);
                } 
                if (!($value instanceof FHIRPeriod)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Property \"onsetPeriod\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRPeriod or data to construct type, saw ".gettype($value));
                }
                $this->setOnsetPeriod($value);
            }
            if (isset($data['onsetRange'])) {
                $value = $data['onsetRange'];
                if (is_array($value)) {
                    $value = new FHIRRange($value);
                } 
                if (!($value instanceof FHIRRange)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Property \"onsetRange\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRRange or data to construct type, saw ".gettype($value));
                }
                $this->setOnsetRange($value);
            }
            if (isset($data['onsetString'])) {
                $value = $data['onsetString'];
                if (is_array($value)) {
                    $value = new FHIRString($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRString($value);
                }
                if (!($value instanceof FHIRString)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Property \"onsetString\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or data to construct type, saw ".gettype($value));
                }
                $this->setOnsetString($value);
            }
            if (isset($data['patient'])) {
                $value = $data['patient'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Property \"patient\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setPatient($value);
            }
            if (isset($data['reaction'])) {
                $value = $data['reaction'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRAllergyIntoleranceReaction($v);
                        } 
                        if (!($v instanceof FHIRAllergyIntoleranceReaction)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Collection field \"reaction\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction or data to construct type, saw ".gettype($v));
                        }
                        $this->addReaction($v);
                    }
                }
            }
            if (isset($data['recorder'])) {
                $value = $data['recorder'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Property \"recorder\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setRecorder($value);
            }
            if (isset($data['type'])) {
                $value = $data['type'];
                if (is_array($value)) {
                    $value = new FHIRAllergyIntoleranceType($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRAllergyIntoleranceType($value);
                }
                if (!($value instanceof FHIRAllergyIntoleranceType)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Property \"type\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceType or data to construct type, saw ".gettype($value));
                }
                $this->setType($value);
            }
            if (isset($data['verificationStatus'])) {
                $value = $data['verificationStatus'];
                if (is_array($value)) {
                    $value = new FHIRAllergyIntoleranceVerificationStatus($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRAllergyIntoleranceVerificationStatus($value);
                }
                if (!($value instanceof FHIRAllergyIntoleranceVerificationStatus)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Property \"verificationStatus\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceVerificationStatus or data to construct type, saw ".gettype($value));
                }
                $this->setVerificationStatus($value);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * The date on which the existance of the AllergyIntolerance was first asserted or acknowledged.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setAssertedDate($assertedDate)
    {
        if (null === $assertedDate) {
            return $this; 
        }
        if (is_scalar($assertedDate)) {
            $assertedDate = new FHIRDateTime($assertedDate);
        }
        if (!($assertedDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAllergyIntolerance::setAssertedDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($assertedDate)
            ));
        }
        $this->assertedDate = $assertedDate;
        return $this;
    }

    /**
     * The date on which the existance of the AllergyIntolerance was first asserted or acknowledged.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAssertedDate()
    {
        return $this->assertedDate;
    }

    /**
     * The source of the information about the allergy that is recorded.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setAsserter(FHIRReference $asserter = null)
    {
        if (null === $asserter) {
            return $this; 
        }
        $this->asserter = $asserter;
        return $this;
    }

    /**
     * The source of the information about the allergy that is recorded.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAsserter()
    {
        return $this->asserter;
    }

    /**
     * Category of the identified substance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory
     * @return $this
     */
    public function addCategory($category)
    {
        if (null === $category) {
            return $this; 
        }
        if (is_scalar($category)) {
            $category = new FHIRAllergyIntoleranceCategory($category);
        }
        if (!($category instanceof FHIRAllergyIntoleranceCategory)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAllergyIntolerance::addCategory - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory or appropriate scalar value, %s seen.',
                gettype($category)
            ));
        }
        $this->category[] = $category;
        return $this;
    }

    /**
     * Category of the identified substance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * The clinical status of the allergy or intolerance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceClinicalStatus
     * @return $this
     */
    public function setClinicalStatus($clinicalStatus)
    {
        if (null === $clinicalStatus) {
            return $this; 
        }
        if (is_scalar($clinicalStatus)) {
            $clinicalStatus = new FHIRAllergyIntoleranceClinicalStatus($clinicalStatus);
        }
        if (!($clinicalStatus instanceof FHIRAllergyIntoleranceClinicalStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAllergyIntolerance::setClinicalStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceClinicalStatus or appropriate scalar value, %s seen.',
                gettype($clinicalStatus)
            ));
        }
        $this->clinicalStatus = $clinicalStatus;
        return $this;
    }

    /**
     * The clinical status of the allergy or intolerance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceClinicalStatus
     */
    public function getClinicalStatus()
    {
        return $this->clinicalStatus;
    }

    /**
     * Code for an allergy or intolerance statement (either a positive or a negated/excluded statement).  This may be a code for a substance or pharmaceutical product that is considered to be responsible for the adverse reaction risk (e.g., "Latex"), an allergy or intolerance condition (e.g., "Latex allergy"), or a negated/excluded code for a specific substance or class (e.g., "No latex allergy") or a general or categorical negated statement (e.g.,  "No known allergy", "No known drug allergies").
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setCode(FHIRCodeableConcept $code = null)
    {
        if (null === $code) {
            return $this; 
        }
        $this->code = $code;
        return $this;
    }

    /**
     * Code for an allergy or intolerance statement (either a positive or a negated/excluded statement).  This may be a code for a substance or pharmaceutical product that is considered to be responsible for the adverse reaction risk (e.g., "Latex"), an allergy or intolerance condition (e.g., "Latex allergy"), or a negated/excluded code for a specific substance or class (e.g., "No latex allergy") or a general or categorical negated statement (e.g.,  "No known allergy", "No known drug allergies").
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the identified substance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCriticality
     * @return $this
     */
    public function setCriticality($criticality)
    {
        if (null === $criticality) {
            return $this; 
        }
        if (is_scalar($criticality)) {
            $criticality = new FHIRAllergyIntoleranceCriticality($criticality);
        }
        if (!($criticality instanceof FHIRAllergyIntoleranceCriticality)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAllergyIntolerance::setCriticality - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCriticality or appropriate scalar value, %s seen.',
                gettype($criticality)
            ));
        }
        $this->criticality = $criticality;
        return $this;
    }

    /**
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the identified substance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCriticality
     */
    public function getCriticality()
    {
        return $this->criticality;
    }

    /**
     * This records identifiers associated with this allergy/intolerance concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     * @return $this
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        if (null === $identifier) {
            return $this; 
        }
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * This records identifiers associated with this allergy/intolerance concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Represents the date and/or time of the last known occurrence of a reaction event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setLastOccurrence($lastOccurrence)
    {
        if (null === $lastOccurrence) {
            return $this; 
        }
        if (is_scalar($lastOccurrence)) {
            $lastOccurrence = new FHIRDateTime($lastOccurrence);
        }
        if (!($lastOccurrence instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAllergyIntolerance::setLastOccurrence - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($lastOccurrence)
            ));
        }
        $this->lastOccurrence = $lastOccurrence;
        return $this;
    }

    /**
     * Represents the date and/or time of the last known occurrence of a reaction event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getLastOccurrence()
    {
        return $this->lastOccurrence;
    }

    /**
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
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
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     * @return $this
     */
    public function setOnsetAge(FHIRAge $onsetAge = null)
    {
        if (null === $onsetAge) {
            return $this; 
        }
        $this->onsetAge = $onsetAge;
        return $this;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getOnsetAge()
    {
        return $this->onsetAge;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setOnsetDateTime($onsetDateTime)
    {
        if (null === $onsetDateTime) {
            return $this; 
        }
        if (is_scalar($onsetDateTime)) {
            $onsetDateTime = new FHIRDateTime($onsetDateTime);
        }
        if (!($onsetDateTime instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAllergyIntolerance::setOnsetDateTime - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($onsetDateTime)
            ));
        }
        $this->onsetDateTime = $onsetDateTime;
        return $this;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOnsetDateTime()
    {
        return $this->onsetDateTime;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     * @return $this
     */
    public function setOnsetPeriod(FHIRPeriod $onsetPeriod = null)
    {
        if (null === $onsetPeriod) {
            return $this; 
        }
        $this->onsetPeriod = $onsetPeriod;
        return $this;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOnsetPeriod()
    {
        return $this->onsetPeriod;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     * @return $this
     */
    public function setOnsetRange(FHIRRange $onsetRange = null)
    {
        if (null === $onsetRange) {
            return $this; 
        }
        $this->onsetRange = $onsetRange;
        return $this;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getOnsetRange()
    {
        return $this->onsetRange;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setOnsetString($onsetString)
    {
        if (null === $onsetString) {
            return $this; 
        }
        if (is_scalar($onsetString)) {
            $onsetString = new FHIRString($onsetString);
        }
        if (!($onsetString instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAllergyIntolerance::setOnsetString - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($onsetString)
            ));
        }
        $this->onsetString = $onsetString;
        return $this;
    }

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified. (choose any one of onset*, but only one)
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getOnsetString()
    {
        return $this->onsetString;
    }

    /**
     * The patient who has the allergy or intolerance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setPatient(FHIRReference $patient = null)
    {
        if (null === $patient) {
            return $this; 
        }
        $this->patient = $patient;
        return $this;
    }

    /**
     * The patient who has the allergy or intolerance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Details about each adverse reaction event linked to exposure to the identified substance.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction
     * @return $this
     */
    public function addReaction(FHIRAllergyIntoleranceReaction $reaction = null)
    {
        if (null === $reaction) {
            return $this; 
        }
        $this->reaction[] = $reaction;
        return $this;
    }

    /**
     * Details about each adverse reaction event linked to exposure to the identified substance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction[]
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * Individual who recorded the record and takes responsibility for its content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setRecorder(FHIRReference $recorder = null)
    {
        if (null === $recorder) {
            return $this; 
        }
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * Individual who recorded the record and takes responsibility for its content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRecorder()
    {
        return $this->recorder;
    }

    /**
     * Identification of the underlying physiological mechanism for the reaction risk.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceType
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRAllergyIntoleranceType($type);
        }
        if (!($type instanceof FHIRAllergyIntoleranceType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAllergyIntolerance::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceType or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Identification of the underlying physiological mechanism for the reaction risk.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Assertion about certainty associated with the propensity, or potential risk, of a reaction to the identified substance (including pharmaceutical product).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceVerificationStatus
     * @return $this
     */
    public function setVerificationStatus($verificationStatus)
    {
        if (null === $verificationStatus) {
            return $this; 
        }
        if (is_scalar($verificationStatus)) {
            $verificationStatus = new FHIRAllergyIntoleranceVerificationStatus($verificationStatus);
        }
        if (!($verificationStatus instanceof FHIRAllergyIntoleranceVerificationStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAllergyIntolerance::setVerificationStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceVerificationStatus or appropriate scalar value, %s seen.',
                gettype($verificationStatus)
            ));
        }
        $this->verificationStatus = $verificationStatus;
        return $this;
    }

    /**
     * Assertion about certainty associated with the propensity, or potential risk, of a reaction to the identified substance (including pharmaceutical product).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceVerificationStatus
     */
    public function getVerificationStatus()
    {
        return $this->verificationStatus;
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
        if (null !== ($v = $this->getAssertedDate())) {
            $a['assertedDate'] = $v;
        }
        if (null !== ($v = $this->getAsserter())) {
            $a['asserter'] = $v;
        }
        if (0 < count($values = $this->getCategory())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['category'] = $vs;
            }
        }
        if (null !== ($v = $this->getClinicalStatus())) {
            $a['clinicalStatus'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getCriticality())) {
            $a['criticality'] = $v;
        }
        if (0 < count($values = $this->getIdentifier())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['identifier'] = $vs;
            }
        }
        if (null !== ($v = $this->getLastOccurrence())) {
            $a['lastOccurrence'] = $v;
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
        if (null !== ($v = $this->getOnsetAge())) {
            $a['onsetAge'] = $v;
        }
        if (null !== ($v = $this->getOnsetDateTime())) {
            $a['onsetDateTime'] = $v;
        }
        if (null !== ($v = $this->getOnsetPeriod())) {
            $a['onsetPeriod'] = $v;
        }
        if (null !== ($v = $this->getOnsetRange())) {
            $a['onsetRange'] = $v;
        }
        if (null !== ($v = $this->getOnsetString())) {
            $a['onsetString'] = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $a['patient'] = $v;
        }
        if (0 < count($values = $this->getReaction())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['reaction'] = $vs;
            }
        }
        if (null !== ($v = $this->getRecorder())) {
            $a['recorder'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getVerificationStatus())) {
            $a['verificationStatus'] = $v;
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
            $sxe = new \SimpleXMLElement('<AllergyIntolerance xmlns="http://hl7.org/fhir"></AllergyIntolerance>');
        }
        if (null !== ($v = $this->getAssertedDate())) {
            $v->xmlSerialize(true, $sxe->addChild('assertedDate'));
        }
        if (null !== ($v = $this->getAsserter())) {
            $v->xmlSerialize(true, $sxe->addChild('asserter'));
        }
        if (0 < count($values = $this->getCategory())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('category'));
                }
            }
        }
        if (null !== ($v = $this->getClinicalStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('clinicalStatus'));
        }
        if (null !== ($v = $this->getCode())) {
            $v->xmlSerialize(true, $sxe->addChild('code'));
        }
        if (null !== ($v = $this->getCriticality())) {
            $v->xmlSerialize(true, $sxe->addChild('criticality'));
        }
        if (0 < count($values = $this->getIdentifier())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('identifier'));
                }
            }
        }
        if (null !== ($v = $this->getLastOccurrence())) {
            $v->xmlSerialize(true, $sxe->addChild('lastOccurrence'));
        }
        if (0 < count($values = $this->getNote())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('note'));
                }
            }
        }
        if (null !== ($v = $this->getOnsetAge())) {
            $v->xmlSerialize(true, $sxe->addChild('onsetAge'));
        }
        if (null !== ($v = $this->getOnsetDateTime())) {
            $v->xmlSerialize(true, $sxe->addChild('onsetDateTime'));
        }
        if (null !== ($v = $this->getOnsetPeriod())) {
            $v->xmlSerialize(true, $sxe->addChild('onsetPeriod'));
        }
        if (null !== ($v = $this->getOnsetRange())) {
            $v->xmlSerialize(true, $sxe->addChild('onsetRange'));
        }
        if (null !== ($v = $this->getOnsetString())) {
            $v->xmlSerialize(true, $sxe->addChild('onsetString'));
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize(true, $sxe->addChild('patient'));
        }
        if (0 < count($values = $this->getReaction())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('reaction'));
                }
            }
        }
        if (null !== ($v = $this->getRecorder())) {
            $v->xmlSerialize(true, $sxe->addChild('recorder'));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize(true, $sxe->addChild('type'));
        }
        if (null !== ($v = $this->getVerificationStatus())) {
            $v->xmlSerialize(true, $sxe->addChild('verificationStatus'));
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}