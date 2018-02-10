<?php namespace PHPFHIRGenerated\FHIRResource;

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

use PHPFHIRGenerated\FHIRResource\FHIRResource;

/**
 * A conformance statement is a set of requirements for a desired implementation or a description of how a target application fulfills those requirements in a particular implementation.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRConformance extends FHIRResource implements \JsonSerializable
{
    /**
     * The identifier that is used to identify this conformance statement when it is referenced in a specification, model, design or an instance (should be globally unique OID, UUID, or URI).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $identifier = null;

    /**
     * The identifier that is used to identify this version of the conformance statement when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A free text natural language name identifying the conformance statement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Name of Organization publishing this conformance statement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contacts for Organization relevant to this conformance statement.  The contacts may be a website, email, phone numbers, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContact[]
     */
    public $telecom = array();

    /**
     * A free text natural language description of the conformance statement and its use. Typically, this is used when the profile describes a desired rather than an actual solution, for example as a formal expression of requirements as part of an RFP.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The status of this conformance statement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRConformanceStatementStatus
     */
    public $status = null;

    /**
     * A flag to indicate that this conformance statement is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The date when the conformance statement was published.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Software that is covered by this conformance statement.  It is used when the profile describes the capabilities of a particular software version, independent of an installation.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceSoftware
     */
    public $software = null;

    /**
     * Identifies a specific implementation instance that is described by the conformance statement - i.e. a particular installation, rather than the capabilities of a software program.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceImplementation
     */
    public $implementation = null;

    /**
     * The version of the FHIR specification on which this conformance statement is based.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $fhirVersion = null;

    /**
     * A flag that indicates whether the application accepts unknown elements as part of a resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $acceptUnknown = null;

    /**
     * A list of the formats supported by this implementation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public $format = array();

    /**
     * A list of profiles supported by the system. For a server, "supported by the system" means the system hosts/produces a set of recourses, conformant to a particular profile, and allows its clients to search using this profile and to find appropriate data. For a client, it means the system will search by this profile and process data according to the guidance implicit in the profile.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public $profile = array();

    /**
     * A definition of the restful capabilities of the solution, if any.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceRest[]
     */
    public $rest = array();

    /**
     * A description of the messaging capabilities of the solution.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceMessaging[]
     */
    public $messaging = array();

    /**
     * A document definition.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceDocument[]
     */
    public $document = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Conformance';

    /**
     * The identifier that is used to identify this conformance statement when it is referenced in a specification, model, design or an instance (should be globally unique OID, UUID, or URI).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The identifier that is used to identify this conformance statement when it is referenced in a specification, model, design or an instance (should be globally unique OID, UUID, or URI).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The identifier that is used to identify this version of the conformance statement when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the conformance statement when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * A free text natural language name identifying the conformance statement.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A free text natural language name identifying the conformance statement.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Name of Organization publishing this conformance statement.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Name of Organization publishing this conformance statement.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $publisher
     * @return $this
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Contacts for Organization relevant to this conformance statement.  The contacts may be a website, email, phone numbers, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContact[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * Contacts for Organization relevant to this conformance statement.  The contacts may be a website, email, phone numbers, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContact $telecom
     * @return $this
     */
    public function addTelecom($telecom)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * A free text natural language description of the conformance statement and its use. Typically, this is used when the profile describes a desired rather than an actual solution, for example as a formal expression of requirements as part of an RFP.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free text natural language description of the conformance statement and its use. Typically, this is used when the profile describes a desired rather than an actual solution, for example as a formal expression of requirements as part of an RFP.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * The status of this conformance statement.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRConformanceStatementStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this conformance statement.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRConformanceStatementStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A flag to indicate that this conformance statement is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * A flag to indicate that this conformance statement is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $experimental
     * @return $this
     */
    public function setExperimental($experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * The date when the conformance statement was published.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date when the conformance statement was published.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Software that is covered by this conformance statement.  It is used when the profile describes the capabilities of a particular software version, independent of an installation.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceSoftware
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * Software that is covered by this conformance statement.  It is used when the profile describes the capabilities of a particular software version, independent of an installation.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceSoftware $software
     * @return $this
     */
    public function setSoftware($software)
    {
        $this->software = $software;
        return $this;
    }

    /**
     * Identifies a specific implementation instance that is described by the conformance statement - i.e. a particular installation, rather than the capabilities of a software program.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceImplementation
     */
    public function getImplementation()
    {
        return $this->implementation;
    }

    /**
     * Identifies a specific implementation instance that is described by the conformance statement - i.e. a particular installation, rather than the capabilities of a software program.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceImplementation $implementation
     * @return $this
     */
    public function setImplementation($implementation)
    {
        $this->implementation = $implementation;
        return $this;
    }

    /**
     * The version of the FHIR specification on which this conformance statement is based.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getFhirVersion()
    {
        return $this->fhirVersion;
    }

    /**
     * The version of the FHIR specification on which this conformance statement is based.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $fhirVersion
     * @return $this
     */
    public function setFhirVersion($fhirVersion)
    {
        $this->fhirVersion = $fhirVersion;
        return $this;
    }

    /**
     * A flag that indicates whether the application accepts unknown elements as part of a resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAcceptUnknown()
    {
        return $this->acceptUnknown;
    }

    /**
     * A flag that indicates whether the application accepts unknown elements as part of a resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $acceptUnknown
     * @return $this
     */
    public function setAcceptUnknown($acceptUnknown)
    {
        $this->acceptUnknown = $acceptUnknown;
        return $this;
    }

    /**
     * A list of the formats supported by this implementation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * A list of the formats supported by this implementation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $format
     * @return $this
     */
    public function addFormat($format)
    {
        $this->format[] = $format;
        return $this;
    }

    /**
     * A list of profiles supported by the system. For a server, "supported by the system" means the system hosts/produces a set of recourses, conformant to a particular profile, and allows its clients to search using this profile and to find appropriate data. For a client, it means the system will search by this profile and process data according to the guidance implicit in the profile.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResourceReference[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * A list of profiles supported by the system. For a server, "supported by the system" means the system hosts/produces a set of recourses, conformant to a particular profile, and allows its clients to search using this profile and to find appropriate data. For a client, it means the system will search by this profile and process data according to the guidance implicit in the profile.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResourceReference $profile
     * @return $this
     */
    public function addProfile($profile)
    {
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * A definition of the restful capabilities of the solution, if any.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceRest[]
     */
    public function getRest()
    {
        return $this->rest;
    }

    /**
     * A definition of the restful capabilities of the solution, if any.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceRest $rest
     * @return $this
     */
    public function addRest($rest)
    {
        $this->rest[] = $rest;
        return $this;
    }

    /**
     * A description of the messaging capabilities of the solution.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceMessaging[]
     */
    public function getMessaging()
    {
        return $this->messaging;
    }

    /**
     * A description of the messaging capabilities of the solution.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceMessaging $messaging
     * @return $this
     */
    public function addMessaging($messaging)
    {
        $this->messaging[] = $messaging;
        return $this;
    }

    /**
     * A document definition.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceDocument[]
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * A document definition.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceDocument $document
     * @return $this
     */
    public function addDocument($document)
    {
        $this->document[] = $document;
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
        if (null !== $this->identifier) $json['identifier'] = $this->identifier;
        if (null !== $this->version) $json['version'] = $this->version;
        if (null !== $this->name) $json['name'] = $this->name;
        if (null !== $this->publisher) $json['publisher'] = $this->publisher;
        if (0 < count($this->telecom)) {
            $json['telecom'] = [];
            foreach($this->telecom as $telecom) {
                $json['telecom'][] = $telecom;
            }
        }
        if (null !== $this->description) $json['description'] = $this->description;
        if (null !== $this->status) $json['status'] = $this->status;
        if (null !== $this->experimental) $json['experimental'] = $this->experimental;
        if (null !== $this->date) $json['date'] = $this->date;
        if (null !== $this->software) $json['software'] = $this->software;
        if (null !== $this->implementation) $json['implementation'] = $this->implementation;
        if (null !== $this->fhirVersion) $json['fhirVersion'] = $this->fhirVersion;
        if (null !== $this->acceptUnknown) $json['acceptUnknown'] = $this->acceptUnknown;
        if (0 < count($this->format)) {
            $json['format'] = [];
            foreach($this->format as $format) {
                $json['format'][] = $format;
            }
        }
        if (0 < count($this->profile)) {
            $json['profile'] = [];
            foreach($this->profile as $profile) {
                $json['profile'][] = $profile;
            }
        }
        if (0 < count($this->rest)) {
            $json['rest'] = [];
            foreach($this->rest as $rest) {
                $json['rest'][] = $rest;
            }
        }
        if (0 < count($this->messaging)) {
            $json['messaging'] = [];
            foreach($this->messaging as $messaging) {
                $json['messaging'][] = $messaging;
            }
        }
        if (0 < count($this->document)) {
            $json['document'] = [];
            foreach($this->document as $document) {
                $json['document'][] = $document;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Conformance xmlns="http://hl7.org/fhir"></Conformance>');
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
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->experimental) $this->experimental->xmlSerialize(true, $sxe->addChild('experimental'));
        if (null !== $this->date) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (null !== $this->software) $this->software->xmlSerialize(true, $sxe->addChild('software'));
        if (null !== $this->implementation) $this->implementation->xmlSerialize(true, $sxe->addChild('implementation'));
        if (null !== $this->fhirVersion) $this->fhirVersion->xmlSerialize(true, $sxe->addChild('fhirVersion'));
        if (null !== $this->acceptUnknown) $this->acceptUnknown->xmlSerialize(true, $sxe->addChild('acceptUnknown'));
        if (0 < count($this->format)) {
            foreach($this->format as $format) {
                $format->xmlSerialize(true, $sxe->addChild('format'));
            }
        }
        if (0 < count($this->profile)) {
            foreach($this->profile as $profile) {
                $profile->xmlSerialize(true, $sxe->addChild('profile'));
            }
        }
        if (0 < count($this->rest)) {
            foreach($this->rest as $rest) {
                $rest->xmlSerialize(true, $sxe->addChild('rest'));
            }
        }
        if (0 < count($this->messaging)) {
            foreach($this->messaging as $messaging) {
                $messaging->xmlSerialize(true, $sxe->addChild('messaging'));
            }
        }
        if (0 < count($this->document)) {
            foreach($this->document as $document) {
                $document->xmlSerialize(true, $sxe->addChild('document'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}