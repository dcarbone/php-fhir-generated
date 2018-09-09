<?php

namespace PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 9th, 2018
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
 *   Generated on Sun, Sep 9, 2018 00:54+0000 for FHIR v3.5.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRContactDetail;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIRNamingSystemType;
use PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUsageContext;
use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A curated namespace that issues unique symbols within that namespace for the identification of concepts, people, devices, etc.  Represents a "System" used within the Identifier and Coding data types.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRNamingSystem
 * @package PHPFHIRGenerated\FHIRResource\FHIRDomainResource
 */
class FHIRNamingSystem extends FHIRDomainResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'NamingSystem';

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public $contact = null;

    /**
     * The date  (and optionally time) when the naming system was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the naming system changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * A free text natural language description of the naming system from a consumer's perspective. Details about what the namespace identifies including scope, granularity, version labeling, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * A legal or geographic region in which the naming system is intended to be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $jurisdiction = null;

    /**
     * Indicates the purpose for the naming system - what kinds of things does it make unique?
     * @var \PHPFHIRGenerated\FHIRElement\FHIRNamingSystemType
     */
    public $kind = null;

    /**
     * A natural language name identifying the naming system. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The name of the organization or individual that published the naming system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * The name of the organization that is responsible for issuing identifiers or codes for this namespace and ensuring their non-collision.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $responsible = null;

    /**
     * The status of this naming system. Enables tracking the life-cycle of the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public $status = null;

    /**
     * Categorizes a naming system for easier search by grouping related naming systems.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Indicates how the system may be identified when referenced in electronic exchange.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId
     */
    public $uniqueId = null;

    /**
     * Provides guidance on the use of the namespace, including the handling of formatting characters, use of upper vs. lower case, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $usage = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate naming system instances.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public $useContext = null;

    /**
     * FHIRNamingSystem Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['contact'])) {
                $this->setContact($data['contact']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['jurisdiction'])) {
                $this->setJurisdiction($data['jurisdiction']);
            }
            if (isset($data['kind'])) {
                $this->setKind($data['kind']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['publisher'])) {
                $this->setPublisher($data['publisher']);
            }
            if (isset($data['responsible'])) {
                $this->setResponsible($data['responsible']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['uniqueId'])) {
                $this->setUniqueId($data['uniqueId']);
            }
            if (isset($data['usage'])) {
                $this->setUsage($data['usage']);
            }
            if (isset($data['useContext'])) {
                $this->setUseContext($data['useContext']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource\FHIRNamingSystem::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     * @return $this
     */
    public function setContact(FHIRContactDetail $contact = null)
    {
        if (null === $contact) {
            return $this; 
        }
        $this->contact = $contact;
        return $this;
    }

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRContactDetail
     */
    public function getContact()
    {
        return $this->contact;
    }


    /**
     * The date  (and optionally time) when the naming system was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the naming system changes.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     * @return $this
     */
    public function setDate($date)
    {
        if (null === $date) {
            return $this; 
        }
        if (is_scalar($date)) {
            $date = new FHIRDateTime($date);
        }
        if (!($date instanceof FHIRDateTime)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNamingSystem::setDate - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRDateTime or appropriate scalar value, %s seen.',
                gettype($date)
            ));
        }
        $this->date = $date;
        return $this;
    }

    /**
     * The date  (and optionally time) when the naming system was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the naming system changes.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * A free text natural language description of the naming system from a consumer's perspective. Details about what the namespace identifies including scope, granularity, version labeling, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRMarkdown($description);
        }
        if (!($description instanceof FHIRMarkdown)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNamingSystem::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A free text natural language description of the naming system from a consumer's perspective. Details about what the namespace identifies including scope, granularity, version labeling, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * A legal or geographic region in which the naming system is intended to be used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setJurisdiction(FHIRCodeableConcept $jurisdiction = null)
    {
        if (null === $jurisdiction) {
            return $this; 
        }
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * A legal or geographic region in which the naming system is intended to be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }


    /**
     * Indicates the purpose for the naming system - what kinds of things does it make unique?
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRNamingSystemType
     * @return $this
     */
    public function setKind($kind)
    {
        if (null === $kind) {
            return $this; 
        }
        if (is_scalar($kind)) {
            $kind = new FHIRNamingSystemType($kind);
        }
        if (!($kind instanceof FHIRNamingSystemType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNamingSystem::setKind - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRNamingSystemType or appropriate scalar value, %s seen.',
                gettype($kind)
            ));
        }
        $this->kind = $kind;
        return $this;
    }

    /**
     * Indicates the purpose for the naming system - what kinds of things does it make unique?
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRNamingSystemType
     */
    public function getKind()
    {
        return $this->kind;
    }


    /**
     * A natural language name identifying the naming system. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setName($name)
    {
        if (null === $name) {
            return $this; 
        }
        if (is_scalar($name)) {
            $name = new FHIRString($name);
        }
        if (!($name instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNamingSystem::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A natural language name identifying the naming system. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * The name of the organization or individual that published the naming system.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setPublisher($publisher)
    {
        if (null === $publisher) {
            return $this; 
        }
        if (is_scalar($publisher)) {
            $publisher = new FHIRString($publisher);
        }
        if (!($publisher instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNamingSystem::setPublisher - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($publisher)
            ));
        }
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * The name of the organization or individual that published the naming system.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }


    /**
     * The name of the organization that is responsible for issuing identifiers or codes for this namespace and ensuring their non-collision.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setResponsible($responsible)
    {
        if (null === $responsible) {
            return $this; 
        }
        if (is_scalar($responsible)) {
            $responsible = new FHIRString($responsible);
        }
        if (!($responsible instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNamingSystem::setResponsible - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($responsible)
            ));
        }
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * The name of the organization that is responsible for issuing identifiers or codes for this namespace and ensuring their non-collision.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getResponsible()
    {
        return $this->responsible;
    }


    /**
     * The status of this naming system. Enables tracking the life-cycle of the content.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     * @return $this
     */
    public function setStatus($status)
    {
        if (null === $status) {
            return $this; 
        }
        if (is_scalar($status)) {
            $status = new FHIRPublicationStatus($status);
        }
        if (!($status instanceof FHIRPublicationStatus)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNamingSystem::setStatus - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus or appropriate scalar value, %s seen.',
                gettype($status)
            ));
        }
        $this->status = $status;
        return $this;
    }

    /**
     * The status of this naming system. Enables tracking the life-cycle of the content.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Categorizes a naming system for easier search by grouping related naming systems.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     * @return $this
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Categorizes a naming system for easier search by grouping related naming systems.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Indicates how the system may be identified when referenced in electronic exchange.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId
     * @return $this
     */
    public function setUniqueId(FHIRNamingSystemUniqueId $uniqueId = null)
    {
        if (null === $uniqueId) {
            return $this; 
        }
        $this->uniqueId = $uniqueId;
        return $this;
    }

    /**
     * Indicates how the system may be identified when referenced in electronic exchange.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }


    /**
     * Provides guidance on the use of the namespace, including the handling of formatting characters, use of upper vs. lower case, etc.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setUsage($usage)
    {
        if (null === $usage) {
            return $this; 
        }
        if (is_scalar($usage)) {
            $usage = new FHIRString($usage);
        }
        if (!($usage instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRNamingSystem::setUsage - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($usage)
            ));
        }
        $this->usage = $usage;
        return $this;
    }

    /**
     * Provides guidance on the use of the namespace, including the handling of formatting characters, use of upper vs. lower case, etc.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getUsage()
    {
        return $this->usage;
    }


    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate naming system instances.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     * @return $this
     */
    public function setUseContext(FHIRUsageContext $useContext = null)
    {
        if (null === $useContext) {
            return $this; 
        }
        $this->useContext = $useContext;
        return $this;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching for appropriate naming system instances.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUsageContext
     */
    public function getUseContext()
    {
        return $this->useContext;
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
        if (null !== ($v = $this->getContact())) {
            $a['contact'] = $v;
        }
        if (null !== ($v = $this->getDate())) {
            $a['date'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getJurisdiction())) {
            $a['jurisdiction'] = $v;
        }
        if (null !== ($v = $this->getKind())) {
            $a['kind'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getPublisher())) {
            $a['publisher'] = $v;
        }
        if (null !== ($v = $this->getResponsible())) {
            $a['responsible'] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a['status'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUniqueId())) {
            $a['uniqueId'] = $v;
        }
        if (null !== ($v = $this->getUsage())) {
            $a['usage'] = $v;
        }
        if (null !== ($v = $this->getUseContext())) {
            $a['useContext'] = $v;
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
            $sxe = new \SimpleXMLElement('<NamingSystem xmlns="http://hl7.org/fhir"></NamingSystem>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}