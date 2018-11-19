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

use PHPFHIRGenerated\FHIRElement\FHIRAddress;
use PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender;
use PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink;
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRHumanName;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * Demographics and administrative information about a person independent of a specific health-related context.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRPerson
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRPerson extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Person';

    /**
     * Whether this person's record is in active use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $active = null;

    /**
     * One or more addresses for the person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress[]
     */
    private $address = [];

    /**
     * The birth date for the person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    private $birthDate = null;

    /**
     * Administrative Gender.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender
     */
    private $gender = null;

    /**
     * Identifier for a person within a particular scope.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];

    /**
     * Link to a resource that concerns the same actual person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink[]
     */
    private $link = [];

    /**
     * The organization that is the custodian of the person record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    private $managingOrganization = null;

    /**
     * A name associated with the person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName[]
     */
    private $name = [];

    /**
     * An image that can be displayed as a thumbnail of the person to enhance the identification of the individual.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    private $photo = null;

    /**
     * A contact detail for the person, e.g. a telephone number or an email address.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    private $telecom = [];

    /**
     * FHIRPerson Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['active'])) {
                $value = $data['active'];
                if (is_array($value)) {
                    $value = new FHIRBoolean($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRBoolean($value);
                }
                if (!($value instanceof FHIRBoolean)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPerson::__construct - Property \"active\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or data to construct type, saw ".gettype($value));
                }
                $this->setActive($value);
            }
            if (isset($data['address'])) {
                $value = $data['address'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRAddress($v);
                        } 
                        if (!($v instanceof FHIRAddress)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPerson::__construct - Collection field \"address\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAddress or data to construct type, saw ".gettype($v));
                        }
                        $this->addAddress($v);
                    }
                }
            }
            if (isset($data['birthDate'])) {
                $value = $data['birthDate'];
                if (is_array($value)) {
                    $value = new FHIRDate($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRDate($value);
                }
                if (!($value instanceof FHIRDate)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPerson::__construct - Property \"birthDate\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or data to construct type, saw ".gettype($value));
                }
                $this->setBirthDate($value);
            }
            if (isset($data['gender'])) {
                $value = $data['gender'];
                if (is_array($value)) {
                    $value = new FHIRAdministrativeGender($value);
                }  elseif (is_scalar($value)) {
                    $value = new FHIRAdministrativeGender($value);
                }
                if (!($value instanceof FHIRAdministrativeGender)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPerson::__construct - Property \"gender\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender or data to construct type, saw ".gettype($value));
                }
                $this->setGender($value);
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
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPerson::__construct - Collection field \"identifier\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRIdentifier or data to construct type, saw ".gettype($v));
                        }
                        $this->addIdentifier($v);
                    }
                }
            }
            if (isset($data['link'])) {
                $value = $data['link'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRPersonLink($v);
                        } 
                        if (!($v instanceof FHIRPersonLink)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPerson::__construct - Collection field \"link\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink or data to construct type, saw ".gettype($v));
                        }
                        $this->addLink($v);
                    }
                }
            }
            if (isset($data['managingOrganization'])) {
                $value = $data['managingOrganization'];
                if (is_array($value)) {
                    $value = new FHIRReference($value);
                } 
                if (!($value instanceof FHIRReference)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPerson::__construct - Property \"managingOrganization\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRReference or data to construct type, saw ".gettype($value));
                }
                $this->setManagingOrganization($value);
            }
            if (isset($data['name'])) {
                $value = $data['name'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRHumanName($v);
                        } 
                        if (!($v instanceof FHIRHumanName)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPerson::__construct - Collection field \"name\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRHumanName or data to construct type, saw ".gettype($v));
                        }
                        $this->addName($v);
                    }
                }
            }
            if (isset($data['photo'])) {
                $value = $data['photo'];
                if (is_array($value)) {
                    $value = new FHIRAttachment($value);
                } 
                if (!($value instanceof FHIRAttachment)) {
                    throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPerson::__construct - Property \"photo\" must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRAttachment or data to construct type, saw ".gettype($value));
                }
                $this->setPhoto($value);
            }
            if (isset($data['telecom'])) {
                $value = $data['telecom'];
                if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if (null === $v) {
                            continue;
                        } elseif (is_array($v)) {
                            $v = new FHIRContactPoint($v);
                        } 
                        if (!($v instanceof FHIRContactPoint)) {
                            throw new \InvalidArgumentException("\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPerson::__construct - Collection field \"telecom\" offset {$i} must either be instance of \PHPFHIRGenerated\FHIRElement\FHIRContactPoint or data to construct type, saw ".gettype($v));
                        }
                        $this->addTelecom($v);
                    }
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRPerson::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
        parent::__construct($data);
    }

    /**
     * Whether this person's record is in active use.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setActive($active)
    {
        if (null === $active) {
            return $this; 
        }
        if (is_scalar($active)) {
            $active = new FHIRBoolean($active);
        }
        if (!($active instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPerson::setActive - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($active)
            ));
        }
        $this->active = $active;
        return $this;
    }

    /**
     * Whether this person's record is in active use.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * One or more addresses for the person.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAddress
     * @return $this
     */
    public function addAddress(FHIRAddress $address = null)
    {
        if (null === $address) {
            return $this; 
        }
        $this->address[] = $address;
        return $this;
    }

    /**
     * One or more addresses for the person.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAddress[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * The birth date for the person.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     * @return $this
     */
    public function setBirthDate($birthDate)
    {
        if (null === $birthDate) {
            return $this; 
        }
        if (is_scalar($birthDate)) {
            $birthDate = new FHIRDate($birthDate);
        }
        if (!($birthDate instanceof FHIRDate)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPerson::setBirthDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDate or appropriate scalar value, %s seen.',
                gettype($birthDate)
            ));
        }
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * The birth date for the person.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Administrative Gender.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender
     * @return $this
     */
    public function setGender($gender)
    {
        if (null === $gender) {
            return $this; 
        }
        if (is_scalar($gender)) {
            $gender = new FHIRAdministrativeGender($gender);
        }
        if (!($gender instanceof FHIRAdministrativeGender)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPerson::setGender - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender or appropriate scalar value, %s seen.',
                gettype($gender)
            ));
        }
        $this->gender = $gender;
        return $this;
    }

    /**
     * Administrative Gender.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAdministrativeGender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Identifier for a person within a particular scope.
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
     * Identifier for a person within a particular scope.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Link to a resource that concerns the same actual person.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink
     * @return $this
     */
    public function addLink(FHIRPersonLink $link = null)
    {
        if (null === $link) {
            return $this; 
        }
        $this->link[] = $link;
        return $this;
    }

    /**
     * Link to a resource that concerns the same actual person.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * The organization that is the custodian of the person record.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setManagingOrganization(FHIRReference $managingOrganization = null)
    {
        if (null === $managingOrganization) {
            return $this; 
        }
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * The organization that is the custodian of the person record.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * A name associated with the person.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName
     * @return $this
     */
    public function addName(FHIRHumanName $name = null)
    {
        if (null === $name) {
            return $this; 
        }
        $this->name[] = $name;
        return $this;
    }

    /**
     * A name associated with the person.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRHumanName[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * An image that can be displayed as a thumbnail of the person to enhance the identification of the individual.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     * @return $this
     */
    public function setPhoto(FHIRAttachment $photo = null)
    {
        if (null === $photo) {
            return $this; 
        }
        $this->photo = $photo;
        return $this;
    }

    /**
     * An image that can be displayed as a thumbnail of the person to enhance the identification of the individual.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * A contact detail for the person, e.g. a telephone number or an email address.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     * @return $this
     */
    public function addTelecom(FHIRContactPoint $telecom = null)
    {
        if (null === $telecom) {
            return $this; 
        }
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * A contact detail for the person, e.g. a telephone number or an email address.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom()
    {
        return $this->telecom;
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
        if (null !== ($v = $this->getActive())) {
            $a['active'] = $v;
        }
        if (0 < count($values = $this->getAddress())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['address'] = $vs;
            }
        }
        if (null !== ($v = $this->getBirthDate())) {
            $a['birthDate'] = $v;
        }
        if (null !== ($v = $this->getGender())) {
            $a['gender'] = $v;
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
        if (0 < count($values = $this->getLink())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['link'] = $vs;
            }
        }
        if (null !== ($v = $this->getManagingOrganization())) {
            $a['managingOrganization'] = $v;
        }
        if (0 < count($values = $this->getName())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['name'] = $vs;
            }
        }
        if (null !== ($v = $this->getPhoto())) {
            $a['photo'] = $v;
        }
        if (0 < count($values = $this->getTelecom())) {
            $vs = [];
            foreach($values as $value) {
                if (null !== $value) {
                    $vs[] = $value;
                }
            }
            if (0 < count($vs)) {
                $a['telecom'] = $vs;
            }
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
            $sxe = new \SimpleXMLElement('<Person xmlns="http://hl7.org/fhir"></Person>');
        }
        if (null !== ($v = $this->getActive())) {
            $v->xmlSerialize(true, $sxe->addChild('active'));
        }
        if (0 < count($values = $this->getAddress())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('address'));
                }
            }
        }
        if (null !== ($v = $this->getBirthDate())) {
            $v->xmlSerialize(true, $sxe->addChild('birthDate'));
        }
        if (null !== ($v = $this->getGender())) {
            $v->xmlSerialize(true, $sxe->addChild('gender'));
        }
        if (0 < count($values = $this->getIdentifier())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('identifier'));
                }
            }
        }
        if (0 < count($values = $this->getLink())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('link'));
                }
            }
        }
        if (null !== ($v = $this->getManagingOrganization())) {
            $v->xmlSerialize(true, $sxe->addChild('managingOrganization'));
        }
        if (0 < count($values = $this->getName())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('name'));
                }
            }
        }
        if (null !== ($v = $this->getPhoto())) {
            $v->xmlSerialize(true, $sxe->addChild('photo'));
        }
        if (0 < count($values = $this->getTelecom())) {
            foreach($values as $v) {
                if (null !== $v) {
                    $v->xmlSerialize(true, $sxe->addChild('telecom'));
                }
            }
        }
        return parent::xmlSerialize($returnSXE, $sxe);
    }
}