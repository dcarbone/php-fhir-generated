<?php namespace PHPFHIRGenerated\FHIRResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRResource;

/**
 * A value set specifies a set of codes drawn from one or more code systems.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRValueSet extends FHIRResource implements \JsonSerializable
{
    /**
     * The identifier that is used to identify this value set when it is referenced in a specification, model, design or an instance (should be globally unique OID, UUID, or URI).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $identifier = null;

    /**
     * The identifier that is used to identify this version of the value set when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A free text natural language name describing the value set.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The name of the individual or organization that published the value set.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contacts of the publisher to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContact[]
     */
    public $telecom = array();

    /**
     * A free text natural language description of the use of the value set - reason for definition, conditions of use, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * A copyright statement relating to the value set and/or its contents.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $copyright = null;

    /**
     * The status of the value set.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRValueSetStatus
     */
    public $status = null;

    /**
     * This valueset was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * Whether this is intended to be used with an extensible binding or not.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $extensible = null;

    /**
     * The date that the value set status was last changed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * When value set defines its own codes.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetDefine
     */
    public $define = null;

    /**
     * When value set includes codes from elsewhere.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetCompose
     */
    public $compose = null;

    /**
     * When value set is an expansion.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetExpansion
     */
    public $expansion = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ValueSet';

    /**
     * The identifier that is used to identify this value set when it is referenced in a specification, model, design or an instance (should be globally unique OID, UUID, or URI).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The identifier that is used to identify this value set when it is referenced in a specification, model, design or an instance (should be globally unique OID, UUID, or URI).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the value set when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the value set when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * A free text natural language name describing the value set.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A free text natural language name describing the value set.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The name of the individual or organization that published the value set.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the value set.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $publisher
     * @return $this
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Contacts of the publisher to assist a user in finding and communicating with the publisher.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContact[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * Contacts of the publisher to assist a user in finding and communicating with the publisher.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContact $telecom
     * @return $this
     */
    public function addTelecom($telecom)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * A free text natural language description of the use of the value set - reason for definition, conditions of use, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free text natural language description of the use of the value set - reason for definition, conditions of use, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * A copyright statement relating to the value set and/or its contents.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * A copyright statement relating to the value set and/or its contents.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $copyright
     * @return $this
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * The status of the value set.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRValueSetStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the value set.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRValueSetStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * This valueset was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * This valueset was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * Whether this is intended to be used with an extensible binding or not.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExtensible()
    {
        return $this->extensible;
    }

    /**
     * Whether this is intended to be used with an extensible binding or not.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $extensible
     * @return $this
     */
    public function setExtensible($extensible)
    {
        $this->extensible = $extensible;
        return $this;
    }

    /**
     * The date that the value set status was last changed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date that the value set status was last changed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * When value set defines its own codes.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetDefine
     */
    public function getDefine()
    {
        return $this->define;
    }

    /**
     * When value set defines its own codes.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetDefine $define
     * @return $this
     */
    public function setDefine($define)
    {
        $this->define = $define;
        return $this;
    }

    /**
     * When value set includes codes from elsewhere.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetCompose
     */
    public function getCompose()
    {
        return $this->compose;
    }

    /**
     * When value set includes codes from elsewhere.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetCompose $compose
     * @return $this
     */
    public function setCompose($compose)
    {
        $this->compose = $compose;
        return $this;
    }

    /**
     * When value set is an expansion.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetExpansion
     */
    public function getExpansion()
    {
        return $this->expansion;
    }

    /**
     * When value set is an expansion.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetExpansion $expansion
     * @return $this
     */
    public function setExpansion($expansion)
    {
        $this->expansion = $expansion;
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
        if (null !== $this->identifier) $json['identifier'] = json_encode($this->identifier);
        if (null !== $this->version) $json['version'] = json_encode($this->version);
        if (null !== $this->name) $json['name'] = json_encode($this->name);
        if (null !== $this->publisher) $json['publisher'] = json_encode($this->publisher);
        if (0 < count($this->telecom)) {
            $json['telecom'] = [];
            foreach($this->telecom as $telecom) {
                $json['telecom'][] = json_encode($telecom);
            }
        }
        if (null !== $this->description) $json['description'] = json_encode($this->description);
        if (null !== $this->copyright) $json['copyright'] = json_encode($this->copyright);
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->experimental) $json['experimental'] = json_encode($this->experimental);
        if (null !== $this->extensible) $json['extensible'] = json_encode($this->extensible);
        if (null !== $this->date) $json['date'] = json_encode($this->date);
        if (null !== $this->define) $json['define'] = json_encode($this->define);
        if (null !== $this->compose) $json['compose'] = json_encode($this->compose);
        if (null !== $this->expansion) $json['expansion'] = json_encode($this->expansion);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ValueSet xmlns="http://hl7.org/fhir"></ValueSet>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->version) $this->version->xmlSerialize(true, $sxe->addChild('version'));
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->publisher) $this->publisher->xmlSerialize(true, $sxe->addChild('publisher'));
        if (0 < count($this->telecom)) {
            foreach($this->telecom as $telecom) {
                $telecom->xmlSerialize(true, $sxe->addChild('telecom'));
            }
        }
        if (null !== $this->description) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (null !== $this->copyright) $this->copyright->xmlSerialize(true, $sxe->addChild('copyright'));
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->experimental) $this->experimental->xmlSerialize(true, $sxe->addChild('experimental'));
        if (null !== $this->extensible) $this->extensible->xmlSerialize(true, $sxe->addChild('extensible'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->define) $this->define->xmlSerialize(true, $sxe->addChild('define'));
        if (null !== $this->compose) $this->compose->xmlSerialize(true, $sxe->addChild('compose'));
        if (null !== $this->expansion) $this->expansion->xmlSerialize(true, $sxe->addChild('expansion'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}