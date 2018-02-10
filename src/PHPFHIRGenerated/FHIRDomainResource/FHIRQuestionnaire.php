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
 * A structured set of questions intended to guide the collection of answers. The questions are ordered and grouped into coherent subsets, corresponding to the structure of the grouping of the underlying questions.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRQuestionnaire extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * This records identifiers associated with this question set that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The version number assigned by the publisher for business reasons.  It may remain the same when the resource is updated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * The lifecycle status of the questionnaire as a whole.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireStatus
     */
    public $status = null;

    /**
     * The date that this questionnaire was last changed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Organization or person responsible for developing and maintaining the questionnaire.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public $telecom = array();

    /**
     * Identifies the types of subjects that can be the subject of the questionnaire.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public $subjectType = array();

    /**
     * A collection of related questions (or further groupings of questions).
     * @var \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireGroup
     */
    public $group = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Questionnaire';

    /**
     * This records identifiers associated with this question set that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this question set that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The version number assigned by the publisher for business reasons.  It may remain the same when the resource is updated.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The version number assigned by the publisher for business reasons.  It may remain the same when the resource is updated.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * The lifecycle status of the questionnaire as a whole.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The lifecycle status of the questionnaire as a whole.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The date that this questionnaire was last changed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date that this questionnaire was last changed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Organization or person responsible for developing and maintaining the questionnaire.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Organization or person responsible for developing and maintaining the questionnaire.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $publisher
     * @return $this
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $telecom
     * @return $this
     */
    public function addTelecom($telecom)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * Identifies the types of subjects that can be the subject of the questionnaire.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public function getSubjectType()
    {
        return $this->subjectType;
    }

    /**
     * Identifies the types of subjects that can be the subject of the questionnaire.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $subjectType
     * @return $this
     */
    public function addSubjectType($subjectType)
    {
        $this->subjectType[] = $subjectType;
        return $this;
    }

    /**
     * A collection of related questions (or further groupings of questions).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireGroup
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * A collection of related questions (or further groupings of questions).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaire\FHIRQuestionnaireGroup $group
     * @return $this
     */
    public function setGroup($group)
    {
        $this->group = $group;
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
        if (null !== $this->version) $json['version'] = $this->version;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->date) $json['date'] = $this->date;
        if (null !== $this->publisher) $json['publisher'] = $this->publisher;
        if (0 < count($this->telecom)) {
            $json['telecom'] = [];
            foreach($this->telecom as $telecom) {
                $json['telecom'][] = $telecom;
            }
        }
        if (0 < count($this->subjectType)) {
            $json['subjectType'] = [];
            foreach($this->subjectType as $subjectType) {
                $json['subjectType'][] = $subjectType;
            }
        }
        if (null !== $this->group) $json['group'] = $this->group;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Questionnaire xmlns="http://hl7.org/fhir"></Questionnaire>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->version) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->publisher) $this->publisher->xmlSerialize(true, $sxe->addChild('publisher'));
        if (0 < count($this->telecom)) {
            foreach($this->telecom as $telecom) {
                $telecom->xmlSerialize(true, $sxe->addChild('telecom'));
            }
        }
        if (0 < count($this->subjectType)) {
            foreach($this->subjectType as $subjectType) {
                $subjectType->xmlSerialize(true, $sxe->addChild('subjectType'));
            }
        }
        if (null !== $this->group) $this->group->xmlSerialize(true, $sxe->addChild('group'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}