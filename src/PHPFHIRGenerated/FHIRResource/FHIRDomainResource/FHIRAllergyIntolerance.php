<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

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
     * The source of the information about the allergy that is recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $asserter = null;

    /**
     * Category of the identified substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory
     */
    public $category = null;

    /**
     * The clinical status of the allergy or intolerance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceClinicalStatus
     */
    public $clinicalStatus = null;

    /**
     * Code for an allergy or intolerance statement (either a positive or a negated/excluded statement).  This may be a code for a substance or pharmaceutical product that is considered to be responsible for the adverse reaction risk (e.g., "Latex"), an allergy or intolerance condition (e.g., "Latex allergy"), or a negated/excluded code for a specific substance or class (e.g., "No latex allergy") or a general or categorical negated statement (e.g.,  "No known allergy", "No known drug allergies").  Note: the substance for a specific reaction may be different from the substance identified as the cause of the risk, but it must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite product that includes the identified substance. It must be clinically safe to only process the 'code' and ignore the 'reaction.substance'.  If a receiving system is unable to confirm that AllergyIntolerance.reaction.substance falls within the semantic scope of AllergyIntolerance.code, then the receiving system should ignore AllergyIntolerance.reaction.substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Estimate of the potential clinical harm, or seriousness, of the reaction to the identified substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCriticality
     */
    public $criticality = null;

    /**
     * The encounter when the allergy or intolerance was asserted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * Business identifiers assigned to this AllergyIntolerance by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Represents the date and/or time of the last known occurrence of a reaction event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $lastOccurrence = null;

    /**
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public $onsetAge = null;

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $onsetDateTime = null;

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $onsetPeriod = null;

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $onsetRange = null;

    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $onsetString = null;

    /**
     * The patient who has the allergy or intolerance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Details about each adverse reaction event linked to exposure to the identified substance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction
     */
    public $reaction = null;

    /**
     * The recordedDate represents when this particular AllergyIntolerance record was created in the system, which is often a system-generated date.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $recordedDate = null;

    /**
     * Individual who recorded the record and takes responsibility for its content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $recorder = null;

    /**
     * Identification of the underlying physiological mechanism for the reaction risk.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceType
     */
    public $type = null;

    /**
     * Assertion about certainty associated with the propensity, or potential risk, of a reaction to the identified substance (including pharmaceutical product).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceVerificationStatus
     */
    public $verificationStatus = null;

    /**
     * FHIRAllergyIntolerance Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['asserter'])) {
                $this->setAsserter($data['asserter']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['clinicalStatus'])) {
                $this->setClinicalStatus($data['clinicalStatus']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['criticality'])) {
                $this->setCriticality($data['criticality']);
            }
            if (isset($data['encounter'])) {
                $this->setEncounter($data['encounter']);
            }
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['lastOccurrence'])) {
                $this->setLastOccurrence($data['lastOccurrence']);
            }
            if (isset($data['note'])) {
                $this->setNote($data['note']);
            }
            if (isset($data['onsetAge'])) {
                $this->setOnsetAge($data['onsetAge']);
            }
            if (isset($data['onsetDateTime'])) {
                $this->setOnsetDateTime($data['onsetDateTime']);
            }
            if (isset($data['onsetPeriod'])) {
                $this->setOnsetPeriod($data['onsetPeriod']);
            }
            if (isset($data['onsetRange'])) {
                $this->setOnsetRange($data['onsetRange']);
            }
            if (isset($data['onsetString'])) {
                $this->setOnsetString($data['onsetString']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['reaction'])) {
                $this->setReaction($data['reaction']);
            }
            if (isset($data['recordedDate'])) {
                $this->setRecordedDate($data['recordedDate']);
            }
            if (isset($data['recorder'])) {
                $this->setRecorder($data['recorder']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['verificationStatus'])) {
                $this->setVerificationStatus($data['verificationStatus']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
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
    public function setCategory($category)
    {
        if (null === $category) {
            return $this; 
        }
        if (is_scalar($category)) {
            $category = new FHIRAllergyIntoleranceCategory($category);
        }
        if (!($category instanceof FHIRAllergyIntoleranceCategory)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAllergyIntolerance::setCategory - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory or appropriate scalar value, %s seen.',
                gettype($category)
            ));
        }
        $this->category = $category;
        return $this;
    }

    /**
     * Category of the identified substance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAllergyIntoleranceCategory
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
     * Code for an allergy or intolerance statement (either a positive or a negated/excluded statement).  This may be a code for a substance or pharmaceutical product that is considered to be responsible for the adverse reaction risk (e.g., "Latex"), an allergy or intolerance condition (e.g., "Latex allergy"), or a negated/excluded code for a specific substance or class (e.g., "No latex allergy") or a general or categorical negated statement (e.g.,  "No known allergy", "No known drug allergies").  Note: the substance for a specific reaction may be different from the substance identified as the cause of the risk, but it must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite product that includes the identified substance. It must be clinically safe to only process the 'code' and ignore the 'reaction.substance'.  If a receiving system is unable to confirm that AllergyIntolerance.reaction.substance falls within the semantic scope of AllergyIntolerance.code, then the receiving system should ignore AllergyIntolerance.reaction.substance.
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
     * Code for an allergy or intolerance statement (either a positive or a negated/excluded statement).  This may be a code for a substance or pharmaceutical product that is considered to be responsible for the adverse reaction risk (e.g., "Latex"), an allergy or intolerance condition (e.g., "Latex allergy"), or a negated/excluded code for a specific substance or class (e.g., "No latex allergy") or a general or categorical negated statement (e.g.,  "No known allergy", "No known drug allergies").  Note: the substance for a specific reaction may be different from the substance identified as the cause of the risk, but it must be consistent with it. For instance, it may be a more specific substance (e.g. a brand medication) or a composite product that includes the identified substance. It must be clinically safe to only process the 'code' and ignore the 'reaction.substance'.  If a receiving system is unable to confirm that AllergyIntolerance.reaction.substance falls within the semantic scope of AllergyIntolerance.code, then the receiving system should ignore AllergyIntolerance.reaction.substance.
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
     * The encounter when the allergy or intolerance was asserted.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setEncounter(FHIRReference $encounter = null)
    {
        if (null === $encounter) {
            return $this; 
        }
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * The encounter when the allergy or intolerance was asserted.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }


    /**
     * Business identifiers assigned to this AllergyIntolerance by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this AllergyIntolerance by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier
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
    public function setNote(FHIRAnnotation $note = null)
    {
        if (null === $note) {
            return $this; 
        }
        $this->note = $note;
        return $this;
    }

    /**
     * Additional narrative about the propensity for the Adverse Reaction, not captured in other fields.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified.
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
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getOnsetAge()
    {
        return $this->onsetAge;
    }


    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified.
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
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOnsetDateTime()
    {
        return $this->onsetDateTime;
    }


    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified.
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
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOnsetPeriod()
    {
        return $this->onsetPeriod;
    }


    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified.
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
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getOnsetRange()
    {
        return $this->onsetRange;
    }


    /**
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified.
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
     * Estimated or actual date,  date-time, or age when allergy or intolerance was identified.
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
    public function setReaction(FHIRAllergyIntoleranceReaction $reaction = null)
    {
        if (null === $reaction) {
            return $this; 
        }
        $this->reaction = $reaction;
        return $this;
    }

    /**
     * Details about each adverse reaction event linked to exposure to the identified substance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction
     */
    public function getReaction()
    {
        return $this->reaction;
    }


    /**
     * The recordedDate represents when this particular AllergyIntolerance record was created in the system, which is often a system-generated date.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setRecordedDate($recordedDate)
    {
        if (null === $recordedDate) {
            return $this; 
        }
        if (is_scalar($recordedDate)) {
            $recordedDate = new FHIRDateTime($recordedDate);
        }
        if (!($recordedDate instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAllergyIntolerance::setRecordedDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($recordedDate)
            ));
        }
        $this->recordedDate = $recordedDate;
        return $this;
    }

    /**
     * The recordedDate represents when this particular AllergyIntolerance record was created in the system, which is often a system-generated date.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getRecordedDate()
    {
        return $this->recordedDate;
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
        if (null !== ($v = $this->getAsserter())) {
            $a['asserter'] = $v;
        }
        if (null !== ($v = $this->getCategory())) {
            $a['category'] = $v;
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
        if (null !== ($v = $this->getEncounter())) {
            $a['encounter'] = $v;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a['identifier'] = $v;
        }
        if (null !== ($v = $this->getLastOccurrence())) {
            $a['lastOccurrence'] = $v;
        }
        if (null !== ($v = $this->getNote())) {
            $a['note'] = $v;
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
        if (null !== ($v = $this->getReaction())) {
            $a['reaction'] = $v;
        }
        if (null !== ($v = $this->getRecordedDate())) {
            $a['recordedDate'] = $v;
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
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}