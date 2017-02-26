<?php namespace PHPFHIRGenerated\FHIRResource\FHIRProtocol;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Tue, Dec 6, 2016 12:22+1100 for FHIR v1.8.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A definition of behaviors to be taken in particular circumstances, often including conditions, options and other decision points.
 */
class FHIRProtocolActivity extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * What can be done instead?
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public $alternative = array();

    /**
     * Activities that are part of this activity.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolComponent[]
     */
    public $component = array();

    /**
     * What happens next.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public $following = array();

    /**
     * Indicates the length of time to wait between the conditions being satisfied for the activity to start and the actual start of the activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public $wait = null;

    /**
     * Information about the nature of the activity, including type, timing and other qualifiers.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolDetail
     */
    public $detail = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Protocol.Activity';

    /**
     * What can be done instead?
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getAlternative()
    {
        return $this->alternative;
    }

    /**
     * What can be done instead?
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $alternative
     * @return $this
     */
    public function addAlternative($alternative)
    {
        $this->alternative[] = $alternative;
        return $this;
    }

    /**
     * Activities that are part of this activity.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolComponent[]
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Activities that are part of this activity.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolComponent $component
     * @return $this
     */
    public function addComponent($component)
    {
        $this->component[] = $component;
        return $this;
    }

    /**
     * What happens next.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getFollowing()
    {
        return $this->following;
    }

    /**
     * What happens next.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $following
     * @return $this
     */
    public function addFollowing($following)
    {
        $this->following[] = $following;
        return $this;
    }

    /**
     * Indicates the length of time to wait between the conditions being satisfied for the activity to start and the actual start of the activity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getWait()
    {
        return $this->wait;
    }

    /**
     * Indicates the length of time to wait between the conditions being satisfied for the activity to start and the actual start of the activity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity\FHIRDuration $wait
     * @return $this
     */
    public function setWait($wait)
    {
        $this->wait = $wait;
        return $this;
    }

    /**
     * Information about the nature of the activity, including type, timing and other qualifiers.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolDetail
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Information about the nature of the activity, including type, timing and other qualifiers.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProtocol\FHIRProtocolDetail $detail
     * @return $this
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
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
        if (0 < count($this->alternative)) {
            $json['alternative'] = [];
            foreach($this->alternative as $alternative) {
                $json['alternative'][] = json_encode($alternative);
            }
        }
        if (0 < count($this->component)) {
            $json['component'] = [];
            foreach($this->component as $component) {
                $json['component'][] = json_encode($component);
            }
        }
        if (0 < count($this->following)) {
            $json['following'] = [];
            foreach($this->following as $following) {
                $json['following'][] = json_encode($following);
            }
        }
        if (null !== $this->wait) $json['wait'] = json_encode($this->wait);
        if (null !== $this->detail) $json['detail'] = json_encode($this->detail);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ProtocolActivity xmlns="http://hl7.org/fhir"></ProtocolActivity>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->alternative)) {
            foreach($this->alternative as $alternative) {
                $alternative->xmlSerialize(true, $sxe->addChild('alternative'));
            }
        }
        if (0 < count($this->component)) {
            foreach($this->component as $component) {
                $component->xmlSerialize(true, $sxe->addChild('component'));
            }
        }
        if (0 < count($this->following)) {
            foreach($this->following as $following) {
                $following->xmlSerialize(true, $sxe->addChild('following'));
            }
        }
        if (null !== $this->wait) $this->wait->xmlSerialize(true, $sxe->addChild('wait'));
        if (null !== $this->detail) $this->detail->xmlSerialize(true, $sxe->addChild('detail'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}