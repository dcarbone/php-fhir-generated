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
 * A Resource Profile - a statement of use of one or more FHIR Resources.  It may include constraints on Resources and Data Types, Terminology Binding Statements and Extension Definitions.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRProfile extends FHIRResource implements \JsonSerializable
{
    /**
     * The identifier that is used to identify this profile when it is referenced in a specification, model, design or an instance  (should be globally unique OID, UUID, or URI).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $identifier = null;

    /**
     * The identifier that is used to identify this version of the profile when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A free text natural language name identifying the Profile.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Details of the individual or organization who accepts responsibility for publishing the profile.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContact[]
     */
    public $telecom = array();

    /**
     * A free text natural language description of the profile and its use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * A set of terms from external terminologies that may be used to assist with indexing and searching of templates.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $code = array();

    /**
     * The status of the profile.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceProfileStatus
     */
    public $status = null;

    /**
     * This profile was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The date that this version of the profile was published.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The Scope and Usage that this profile was created to meet.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $requirements = null;

    /**
     * The version of the FHIR specification on which this profile is based.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $fhirVersion = null;

    /**
     * An external specification that the content is mapped to.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileMapping[]
     */
    public $mapping = array();

    /**
     * A constraint statement about what contents a resource or data type may have.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileStructure[]
     */
    public $structure = array();

    /**
     * An extension defined as part of the profile.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileExtensionDefn[]
     */
    public $extensionDefn = array();

    /**
     * Definition of a named query and its parameters and their meaning.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileQuery[]
     */
    public $query = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Profile';

    /**
     * The identifier that is used to identify this profile when it is referenced in a specification, model, design or an instance  (should be globally unique OID, UUID, or URI).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The identifier that is used to identify this profile when it is referenced in a specification, model, design or an instance  (should be globally unique OID, UUID, or URI).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the profile when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the profile when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * A free text natural language name identifying the Profile.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A free text natural language name identifying the Profile.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Details of the individual or organization who accepts responsibility for publishing the profile.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Details of the individual or organization who accepts responsibility for publishing the profile.
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
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContact[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContact $telecom
     * @return $this
     */
    public function addTelecom($telecom)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * A free text natural language description of the profile and its use.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free text natural language description of the profile and its use.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * A set of terms from external terminologies that may be used to assist with indexing and searching of templates.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A set of terms from external terminologies that may be used to assist with indexing and searching of templates.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $code
     * @return $this
     */
    public function addCode($code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * The status of the profile.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceProfileStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the profile.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceProfileStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * This profile was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * This profile was authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * The date that this version of the profile was published.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date that this version of the profile was published.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * The Scope and Usage that this profile was created to meet.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * The Scope and Usage that this profile was created to meet.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $requirements
     * @return $this
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * The version of the FHIR specification on which this profile is based.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getFhirVersion()
    {
        return $this->fhirVersion;
    }

    /**
     * The version of the FHIR specification on which this profile is based.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $fhirVersion
     * @return $this
     */
    public function setFhirVersion($fhirVersion)
    {
        $this->fhirVersion = $fhirVersion;
        return $this;
    }

    /**
     * An external specification that the content is mapped to.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileMapping[]
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * An external specification that the content is mapped to.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileMapping $mapping
     * @return $this
     */
    public function addMapping($mapping)
    {
        $this->mapping[] = $mapping;
        return $this;
    }

    /**
     * A constraint statement about what contents a resource or data type may have.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileStructure[]
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * A constraint statement about what contents a resource or data type may have.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileStructure $structure
     * @return $this
     */
    public function addStructure($structure)
    {
        $this->structure[] = $structure;
        return $this;
    }

    /**
     * An extension defined as part of the profile.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileExtensionDefn[]
     */
    public function getExtensionDefn()
    {
        return $this->extensionDefn;
    }

    /**
     * An extension defined as part of the profile.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileExtensionDefn $extensionDefn
     * @return $this
     */
    public function addExtensionDefn($extensionDefn)
    {
        $this->extensionDefn[] = $extensionDefn;
        return $this;
    }

    /**
     * Definition of a named query and its parameters and their meaning.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileQuery[]
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Definition of a named query and its parameters and their meaning.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProfile\FHIRProfileQuery $query
     * @return $this
     */
    public function addQuery($query)
    {
        $this->query[] = $query;
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
        if (0 < count($this->code)) {
            $json['code'] = [];
            foreach($this->code as $code) {
                $json['code'][] = json_encode($code);
            }
        }
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->experimental) $json['experimental'] = json_encode($this->experimental);
        if (null !== $this->date) $json['date'] = json_encode($this->date);
        if (null !== $this->requirements) $json['requirements'] = json_encode($this->requirements);
        if (null !== $this->fhirVersion) $json['fhirVersion'] = json_encode($this->fhirVersion);
        if (0 < count($this->mapping)) {
            $json['mapping'] = [];
            foreach($this->mapping as $mapping) {
                $json['mapping'][] = json_encode($mapping);
            }
        }
        if (0 < count($this->structure)) {
            $json['structure'] = [];
            foreach($this->structure as $structure) {
                $json['structure'][] = json_encode($structure);
            }
        }
        if (0 < count($this->extensionDefn)) {
            $json['extensionDefn'] = [];
            foreach($this->extensionDefn as $extensionDefn) {
                $json['extensionDefn'][] = json_encode($extensionDefn);
            }
        }
        if (0 < count($this->query)) {
            $json['query'] = [];
            foreach($this->query as $query) {
                $json['query'][] = json_encode($query);
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Profile xmlns="http://hl7.org/fhir"></Profile>');
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
        if (0 < count($this->code)) {
            foreach($this->code as $code) {
                $code->xmlSerialize(true, $sxe->addChild('code'));
            }
        }
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->experimental) $this->experimental->xmlSerialize(true, $sxe->addChild('experimental'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->requirements) $this->requirements->xmlSerialize(true, $sxe->addChild('requirements'));
        if (null !== $this->fhirVersion) $this->fhirVersion->xmlSerialize(true, $sxe->addChild('fhirVersion'));
        if (0 < count($this->mapping)) {
            foreach($this->mapping as $mapping) {
                $mapping->xmlSerialize(true, $sxe->addChild('mapping'));
            }
        }
        if (0 < count($this->structure)) {
            foreach($this->structure as $structure) {
                $structure->xmlSerialize(true, $sxe->addChild('structure'));
            }
        }
        if (0 < count($this->extensionDefn)) {
            foreach($this->extensionDefn as $extensionDefn) {
                $extensionDefn->xmlSerialize(true, $sxe->addChild('extensionDefn'));
            }
        }
        if (0 < count($this->query)) {
            foreach($this->query as $query) {
                $query->xmlSerialize(true, $sxe->addChild('query'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}