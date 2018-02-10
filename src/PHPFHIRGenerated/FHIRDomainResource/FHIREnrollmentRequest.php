<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * This resource provides the insurance enrollment details to the insurer regarding a specified coverage.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIREnrollmentRequest extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The Response business identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The version of the style of resource contents. This should be mapped to the allowable profiles for this and supporting resources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $ruleset = null;

    /**
     * The style (standard) and version of the original material which was converted into this resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $originalRuleset = null;

    /**
     * The date when this resource was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * The Insurer who is target  of the request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $target = null;

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $provider = null;

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * Patient Resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Reference to the program or plan identification, underwriter or payor.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $coverage = null;

    /**
     * The relationship of the patient to the subscriber.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $relationship = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'EnrollmentRequest';

    /**
     * The Response business identifier.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The Response business identifier.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The version of the style of resource contents. This should be mapped to the allowable profiles for this and supporting resources.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getRuleset()
    {
        return $this->ruleset;
    }

    /**
     * The version of the style of resource contents. This should be mapped to the allowable profiles for this and supporting resources.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $ruleset
     * @return $this
     */
    public function setRuleset($ruleset)
    {
        $this->ruleset = $ruleset;
        return $this;
    }

    /**
     * The style (standard) and version of the original material which was converted into this resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getOriginalRuleset()
    {
        return $this->originalRuleset;
    }

    /**
     * The style (standard) and version of the original material which was converted into this resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $originalRuleset
     * @return $this
     */
    public function setOriginalRuleset($originalRuleset)
    {
        $this->originalRuleset = $originalRuleset;
        return $this;
    }

    /**
     * The date when this resource was created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * The date when this resource was created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * The Insurer who is target  of the request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * The Insurer who is target  of the request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $target
     * @return $this
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $provider
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Patient Resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Patient Resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Reference to the program or plan identification, underwriter or payor.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Reference to the program or plan identification, underwriter or payor.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $coverage
     * @return $this
     */
    public function setCoverage($coverage)
    {
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * The relationship of the patient to the subscriber.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * The relationship of the patient to the subscriber.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $relationship
     * @return $this
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier;
            }
        }
        if (null !== $this->ruleset) $json['ruleset'] = $this->ruleset;
        if (null !== $this->originalRuleset) $json['originalRuleset'] = $this->originalRuleset;
        if (null !== $this->created) $json['created'] = $this->created;
        if (null !== $this->target) $json['target'] = $this->target;
        if (null !== $this->provider) $json['provider'] = $this->provider;
        if (null !== $this->organization) $json['organization'] = $this->organization;
        if (null !== $this->subject) $json['subject'] = $this->subject;
        if (null !== $this->coverage) $json['coverage'] = $this->coverage;
        if (null !== $this->relationship) $json['relationship'] = $this->relationship;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<EnrollmentRequest xmlns="http://hl7.org/fhir"></EnrollmentRequest>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->ruleset) $this->ruleset->xmlSerialize(true, $sxe->addChild('ruleset'));
        if (null !== $this->originalRuleset) $this->originalRuleset->xmlSerialize(true, $sxe->addChild('originalRuleset'));
        if (null !== $this->created) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (null !== $this->target) $this->target->xmlSerialize(true, $sxe->addChild('target'));
        if (null !== $this->provider) $this->provider->xmlSerialize(true, $sxe->addChild('provider'));
        if (null !== $this->organization) $this->organization->xmlSerialize(true, $sxe->addChild('organization'));
        if (null !== $this->subject) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (null !== $this->coverage) $this->coverage->xmlSerialize(true, $sxe->addChild('coverage'));
        if (null !== $this->relationship) $this->relationship->xmlSerialize(true, $sxe->addChild('relationship'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}