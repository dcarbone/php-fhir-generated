<?php namespace PHPFHIRGenerated\FHIRResource\FHIROrganization;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A formally or informally recognized grouping of people or organizations formed for the purpose of achieving some form of collective action.  Includes companies, institutions, corporations, departments, community groups, healthcare practice groups, etc.
 */
class FHIROrganizationContact extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Indicates a purpose for which the contact can be reached.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $purpose = null;

    /**
     * A name associated with the contact.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $name = null;

    /**
     * A contact detail (e.g. a telephone number or an email address) by which the party may be contacted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContact[]
     */
    public $telecom = array();

    /**
     * Visiting or postal addresses for the contact.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $address = null;

    /**
     * Administrative Gender - the gender that the person is considered to have for administration and record keeping purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $gender = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Organization.Contact';

    /**
     * Indicates a purpose for which the contact can be reached.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Indicates a purpose for which the contact can be reached.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $purpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * A name associated with the contact.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A name associated with the contact.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * A contact detail (e.g. a telephone number or an email address) by which the party may be contacted.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContact[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * A contact detail (e.g. a telephone number or an email address) by which the party may be contacted.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContact $telecom
     * @return $this
     */
    public function addTelecom($telecom)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * Visiting or postal addresses for the contact.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Visiting or postal addresses for the contact.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Administrative Gender - the gender that the person is considered to have for administration and record keeping purposes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Administrative Gender - the gender that the person is considered to have for administration and record keeping purposes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
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
        if (null !== $this->purpose) $json['purpose'] = $this->purpose;
        if (null !== $this->name) $json['name'] = $this->name;
        if (0 < count($this->telecom)) {
            $json['telecom'] = [];
            foreach($this->telecom as $telecom) {
                $json['telecom'][] = $telecom;
            }
        }
        if (null !== $this->address) $json['address'] = $this->address;
        if (null !== $this->gender) $json['gender'] = $this->gender;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<OrganizationContact xmlns="http://hl7.org/fhir"></OrganizationContact>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->purpose) $this->purpose->xmlSerialize(true, $sxe->addChild('purpose'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (0 < count($this->telecom)) {
            foreach($this->telecom as $telecom) {
                $telecom->xmlSerialize(true, $sxe->addChild('telecom'));
            }
        }
        if (null !== $this->address) $this->address->xmlSerialize(true, $sxe->addChild('address'));
        if (null !== $this->gender) $this->gender->xmlSerialize(true, $sxe->addChild('gender'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}