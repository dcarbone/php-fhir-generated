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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Demographics and administrative information about a person independent of a specific health-related context.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRPerson extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifier for a person within a particular scope.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * A name associated with the person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName[]
     */
    public $name = [];

    /**
     * A contact detail for the person, e.g. a telephone number or an email address.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public $telecom = [];

    /**
     * Administrative Gender.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender
     */
    public $gender = null;

    /**
     * The birth date for the person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $birthDate = null;

    /**
     * One or more addresses for the person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress[]
     */
    public $address = [];

    /**
     * An image that can be displayed as a thumbnail of the person to enhance the identification of the individual.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $photo = null;

    /**
     * The organization that is the custodian of the person record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $managingOrganization = null;

    /**
     * Whether this person's record is in active use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $active = null;

    /**
     * Link to a resource that concerns the same actual person.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRPerson\FHIRPersonLink[]
     */
    public $link = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Person';

    /**
     * Identifier for a person within a particular scope.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Identifier for a person within a particular scope.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A name associated with the person.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName[]
     */
    public function getName() {
        return $this->name;
    }

    /**
     * A name associated with the person.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $name
     * @return $this
     */
    public function addName($name) {
        $this->name[] = $name;
        return $this;
    }

    /**
     * A contact detail for the person, e.g. a telephone number or an email address.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom() {
        return $this->telecom;
    }

    /**
     * A contact detail for the person, e.g. a telephone number or an email address.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $telecom
     * @return $this
     */
    public function addTelecom($telecom) {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * Administrative Gender.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender
     */
    public function getGender() {
        return $this->gender;
    }

    /**
     * Administrative Gender.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender $gender
     * @return $this
     */
    public function setGender($gender) {
        $this->gender = $gender;
        return $this;
    }

    /**
     * The birth date for the person.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getBirthDate() {
        return $this->birthDate;
    }

    /**
     * The birth date for the person.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $birthDate
     * @return $this
     */
    public function setBirthDate($birthDate) {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * One or more addresses for the person.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress[]
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * One or more addresses for the person.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $address
     * @return $this
     */
    public function addAddress($address) {
        $this->address[] = $address;
        return $this;
    }

    /**
     * An image that can be displayed as a thumbnail of the person to enhance the identification of the individual.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getPhoto() {
        return $this->photo;
    }

    /**
     * An image that can be displayed as a thumbnail of the person to enhance the identification of the individual.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $photo
     * @return $this
     */
    public function setPhoto($photo) {
        $this->photo = $photo;
        return $this;
    }

    /**
     * The organization that is the custodian of the person record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManagingOrganization() {
        return $this->managingOrganization;
    }

    /**
     * The organization that is the custodian of the person record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $managingOrganization
     * @return $this
     */
    public function setManagingOrganization($managingOrganization) {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Whether this person's record is in active use.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * Whether this person's record is in active use.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $active
     * @return $this
     */
    public function setActive($active) {
        $this->active = $active;
        return $this;
    }

    /**
     * Link to a resource that concerns the same actual person.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRPerson\FHIRPersonLink[]
     */
    public function getLink() {
        return $this->link;
    }

    /**
     * Link to a resource that concerns the same actual person.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRPerson\FHIRPersonLink $link
     * @return $this
     */
    public function addLink($link) {
        $this->link[] = $link;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.');
                }
            }
            if (isset($data['name'])) {
                if (is_array($data['name'])) {
                    foreach($data['name'] as $d) {
                        $this->addName($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"name" must be array of objects or null, '.gettype($data['name']).' seen.');
                }
            }
            if (isset($data['telecom'])) {
                if (is_array($data['telecom'])) {
                    foreach($data['telecom'] as $d) {
                        $this->addTelecom($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"telecom" must be array of objects or null, '.gettype($data['telecom']).' seen.');
                }
            }
            if (isset($data['gender'])) {
                $this->setGender($data['gender']);
            }
            if (isset($data['birthDate'])) {
                $this->setBirthDate($data['birthDate']);
            }
            if (isset($data['address'])) {
                if (is_array($data['address'])) {
                    foreach($data['address'] as $d) {
                        $this->addAddress($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"address" must be array of objects or null, '.gettype($data['address']).' seen.');
                }
            }
            if (isset($data['photo'])) {
                $this->setPhoto($data['photo']);
            }
            if (isset($data['managingOrganization'])) {
                $this->setManagingOrganization($data['managingOrganization']);
            }
            if (isset($data['active'])) {
                $this->setActive($data['active']);
            }
            if (isset($data['link'])) {
                if (is_array($data['link'])) {
                    foreach($data['link'] as $d) {
                        $this->addLink($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"link" must be array of objects or null, '.gettype($data['link']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (0 < count($this->name)) {
            $json['name'] = [];
            foreach($this->name as $name) {
                if (null !== $name) $json['name'][] = $name;
            }
        }
        if (0 < count($this->telecom)) {
            $json['telecom'] = [];
            foreach($this->telecom as $telecom) {
                if (null !== $telecom) $json['telecom'][] = $telecom;
            }
        }
        if (isset($this->gender)) $json['gender'] = $this->gender;
        if (isset($this->birthDate)) $json['birthDate'] = $this->birthDate;
        if (0 < count($this->address)) {
            $json['address'] = [];
            foreach($this->address as $address) {
                if (null !== $address) $json['address'][] = $address;
            }
        }
        if (isset($this->photo)) $json['photo'] = $this->photo;
        if (isset($this->managingOrganization)) $json['managingOrganization'] = $this->managingOrganization;
        if (isset($this->active)) $json['active'] = $this->active;
        if (0 < count($this->link)) {
            $json['link'] = [];
            foreach($this->link as $link) {
                if (null !== $link) $json['link'][] = $link;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Person xmlns="http://hl7.org/fhir"></Person>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->name)) {
            foreach($this->name as $name) {
                $name->xmlSerialize(true, $sxe->addChild('name'));
            }
        }
        if (0 < count($this->telecom)) {
            foreach($this->telecom as $telecom) {
                $telecom->xmlSerialize(true, $sxe->addChild('telecom'));
            }
        }
        if (isset($this->gender)) $this->gender->xmlSerialize(true, $sxe->addChild('gender'));
        if (isset($this->birthDate)) $this->birthDate->xmlSerialize(true, $sxe->addChild('birthDate'));
        if (0 < count($this->address)) {
            foreach($this->address as $address) {
                $address->xmlSerialize(true, $sxe->addChild('address'));
            }
        }
        if (isset($this->photo)) $this->photo->xmlSerialize(true, $sxe->addChild('photo'));
        if (isset($this->managingOrganization)) $this->managingOrganization->xmlSerialize(true, $sxe->addChild('managingOrganization'));
        if (isset($this->active)) $this->active->xmlSerialize(true, $sxe->addChild('active'));
        if (0 < count($this->link)) {
            foreach($this->link as $link) {
                $link->xmlSerialize(true, $sxe->addChild('link'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}