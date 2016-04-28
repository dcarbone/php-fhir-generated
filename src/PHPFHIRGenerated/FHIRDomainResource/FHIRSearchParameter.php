<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use PHPFHIRGenerated\JsonSerializable;

/**
 * A search parameter that defines a named search item that can be used to search/filter on a resource.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRSearchParameter extends FHIRDomainResource implements JsonSerializable
{
    /**
     * An absolute URL that is used to identify this search parameter when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this search parameter is (or will be) published.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * A free text natural language name identifying the search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The status of this search parameter definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $status = null;

    /**
     * A flag to indicate that this search parameter definition is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The name of the individual or organization that published the search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSearchParameter\FHIRSearchParameterContact[]
     */
    public $contact = array();

    /**
     * The date  (and optionally time) when the search parameter definition was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the search parameter changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The Scope and Usage that this search parameter was created to meet.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $requirements = null;

    /**
     * The code used in the URL or the parameter name in a parameters resource for this search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * The base resource type that this search parameter refers to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $base = null;

    /**
     * The type of value a search parameter refers to, and how the content is interpreted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $type = null;

    /**
     * A description of the search parameters and how it used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * An XPath expression that returns a set of elements for the search parameter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $xpath = null;

    /**
     * How the search parameter relates to the set of elements returned by evaluating the xpath query.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRXPathUsageType
     */
    public $xpathUsage = null;

    /**
     * Types of resource (if a resource is referenced).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public $target = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'SearchParameter';

    /**
     * An absolute URL that is used to identify this search parameter when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this search parameter is (or will be) published.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * An absolute URL that is used to identify this search parameter when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this search parameter is (or will be) published.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * A free text natural language name identifying the search parameter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A free text natural language name identifying the search parameter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The status of this search parameter definition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this search parameter definition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A flag to indicate that this search parameter definition is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * A flag to indicate that this search parameter definition is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * The name of the individual or organization that published the search parameter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the search parameter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $publisher
     * @return $this
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSearchParameter\FHIRSearchParameterContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSearchParameter\FHIRSearchParameterContact[] $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * The date  (and optionally time) when the search parameter definition was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the search parameter changes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date  (and optionally time) when the search parameter definition was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the search parameter changes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * The Scope and Usage that this search parameter was created to meet.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * The Scope and Usage that this search parameter was created to meet.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $requirements
     * @return $this
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * The code used in the URL or the parameter name in a parameters resource for this search parameter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * The code used in the URL or the parameter name in a parameters resource for this search parameter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * The base resource type that this search parameter refers to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * The base resource type that this search parameter refers to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $base
     * @return $this
     */
    public function setBase($base)
    {
        $this->base = $base;
        return $this;
    }

    /**
     * The type of value a search parameter refers to, and how the content is interpreted.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of value a search parameter refers to, and how the content is interpreted.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A description of the search parameters and how it used.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of the search parameters and how it used.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * An XPath expression that returns a set of elements for the search parameter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getXpath()
    {
        return $this->xpath;
    }

    /**
     * An XPath expression that returns a set of elements for the search parameter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $xpath
     * @return $this
     */
    public function setXpath($xpath)
    {
        $this->xpath = $xpath;
        return $this;
    }

    /**
     * How the search parameter relates to the set of elements returned by evaluating the xpath query.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRXPathUsageType
     */
    public function getXpathUsage()
    {
        return $this->xpathUsage;
    }

    /**
     * How the search parameter relates to the set of elements returned by evaluating the xpath query.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRXPathUsageType $xpathUsage
     * @return $this
     */
    public function setXpathUsage($xpathUsage)
    {
        $this->xpathUsage = $xpathUsage;
        return $this;
    }

    /**
     * Types of resource (if a resource is referenced).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Types of resource (if a resource is referenced).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode[] $target
     * @return $this
     */
    public function addTarget($target)
    {
        $this->target[] = $target;
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
        if (null !== $this->url) $json['url'] = $this->url->jsonSerialize();
        if (null !== $this->name) $json['name'] = $this->name->jsonSerialize();
        if (null !== $this->status) $json['status'] = $this->status->jsonSerialize();
        if (null !== $this->experimental) $json['experimental'] = $this->experimental->jsonSerialize();
        if (null !== $this->publisher) $json['publisher'] = $this->publisher->jsonSerialize();
        if (0 < count($this->contact)) {
            $json['contact'] = array();
            foreach($this->contact as $contact) {
                $json['contact'][] = $contact->jsonSerialize();
            }
        }
        if (null !== $this->date) $json['date'] = $this->date->jsonSerialize();
        if (null !== $this->requirements) $json['requirements'] = $this->requirements->jsonSerialize();
        if (null !== $this->code) $json['code'] = $this->code->jsonSerialize();
        if (null !== $this->base) $json['base'] = $this->base->jsonSerialize();
        if (null !== $this->type) $json['type'] = $this->type->jsonSerialize();
        if (null !== $this->description) $json['description'] = $this->description->jsonSerialize();
        if (null !== $this->xpath) $json['xpath'] = $this->xpath->jsonSerialize();
        if (null !== $this->xpathUsage) $json['xpathUsage'] = $this->xpathUsage->jsonSerialize();
        if (0 < count($this->target)) {
            $json['target'] = array();
            foreach($this->target as $target) {
                $json['target'][] = $target->jsonSerialize();
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<SearchParameter xmlns="http://hl7.org/fhir"></SearchParameter>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->url) $this->url->xmlSerialize(true, $sxe->addChild('url'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->experimental) $this->experimental->xmlSerialize(true, $sxe->addChild('experimental'));
        if (null !== $this->publisher) $this->publisher->xmlSerialize(true, $sxe->addChild('publisher'));
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->requirements) $this->requirements->xmlSerialize(true, $sxe->addChild('requirements'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (null !== $this->base) $this->base->xmlSerialize(true, $sxe->addChild('base'));
        if (null !== $this->type) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->xpath) $this->xpath->xmlSerialize(true, $sxe->addChild('xpath'));
        if (null !== $this->xpathUsage) $this->xpathUsage->xmlSerialize(true, $sxe->addChild('xpathUsage'));
        if (0 < count($this->target)) {
            foreach($this->target as $target) {
                $target->xmlSerialize(true, $sxe->addChild('target'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}