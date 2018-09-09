<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRBase64Binary;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A record of an event made for purposes of maintaining a security log. Typical uses include detection of intrusion attempts and monitoring for inappropriate usage.
 *
 * Class FHIRAuditEventEntity
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent
 */
class FHIRAuditEventEntity extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'AuditEvent.Entity';

    /**
     * Text that describes the entity in more detail.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Tagged value pairs for conveying additional information about the entity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventDetail
     */
    public $detail = null;

    /**
     * Identifier for the data life-cycle stage for the entity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $lifecycle = null;

    /**
     * A name of the entity in the audit event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The query parameters for a query-type entities.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $query = null;

    /**
     * Code representing the role the entity played in the event being audited.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $role = null;

    /**
     * Security labels for the identified entity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $securityLabel = null;

    /**
     * The type of the object that was involved in this audit event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $type = null;

    /**
     * Identifies a specific instance of the entity. The reference should be version specific.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $what = null;

    /**
     * FHIRAuditEventEntity Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['detail'])) {
                $this->setDetail($data['detail']);
            }
            if (isset($data['lifecycle'])) {
                $this->setLifecycle($data['lifecycle']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['query'])) {
                $this->setQuery($data['query']);
            }
            if (isset($data['role'])) {
                $this->setRole($data['role']);
            }
            if (isset($data['securityLabel'])) {
                $this->setSecurityLabel($data['securityLabel']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['what'])) {
                $this->setWhat($data['what']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Text that describes the entity in more detail.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDescription($description)
    {
        if (null === $description) {
            return $this; 
        }
        if (is_scalar($description)) {
            $description = new FHIRString($description);
        }
        if (!($description instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAuditEventEntity::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * Text that describes the entity in more detail.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Tagged value pairs for conveying additional information about the entity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventDetail
     * @return $this
     */
    public function setDetail(FHIRAuditEventDetail $detail = null)
    {
        if (null === $detail) {
            return $this; 
        }
        $this->detail = $detail;
        return $this;
    }

    /**
     * Tagged value pairs for conveying additional information about the entity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventDetail
     */
    public function getDetail()
    {
        return $this->detail;
    }


    /**
     * Identifier for the data life-cycle stage for the entity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setLifecycle(FHIRCoding $lifecycle = null)
    {
        if (null === $lifecycle) {
            return $this; 
        }
        $this->lifecycle = $lifecycle;
        return $this;
    }

    /**
     * Identifier for the data life-cycle stage for the entity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getLifecycle()
    {
        return $this->lifecycle;
    }


    /**
     * A name of the entity in the audit event.
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
                'FHIRAuditEventEntity::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A name of the entity in the audit event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * The query parameters for a query-type entities.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     * @return $this
     */
    public function setQuery($query)
    {
        if (null === $query) {
            return $this; 
        }
        if (is_scalar($query)) {
            $query = new FHIRBase64Binary($query);
        }
        if (!($query instanceof FHIRBase64Binary)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAuditEventEntity::setQuery - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary or appropriate scalar value, %s seen.',
                gettype($query)
            ));
        }
        $this->query = $query;
        return $this;
    }

    /**
     * The query parameters for a query-type entities.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getQuery()
    {
        return $this->query;
    }


    /**
     * Code representing the role the entity played in the event being audited.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setRole(FHIRCoding $role = null)
    {
        if (null === $role) {
            return $this; 
        }
        $this->role = $role;
        return $this;
    }

    /**
     * Code representing the role the entity played in the event being audited.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getRole()
    {
        return $this->role;
    }


    /**
     * Security labels for the identified entity.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setSecurityLabel(FHIRCoding $securityLabel = null)
    {
        if (null === $securityLabel) {
            return $this; 
        }
        $this->securityLabel = $securityLabel;
        return $this;
    }

    /**
     * Security labels for the identified entity.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getSecurityLabel()
    {
        return $this->securityLabel;
    }


    /**
     * The type of the object that was involved in this audit event.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     * @return $this
     */
    public function setType(FHIRCoding $type = null)
    {
        if (null === $type) {
            return $this; 
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The type of the object that was involved in this audit event.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Identifies a specific instance of the entity. The reference should be version specific.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setWhat(FHIRReference $what = null)
    {
        if (null === $what) {
            return $this; 
        }
        $this->what = $what;
        return $this;
    }

    /**
     * Identifies a specific instance of the entity. The reference should be version specific.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getWhat()
    {
        return $this->what;
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
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getDetail())) {
            $a['detail'] = $v;
        }
        if (null !== ($v = $this->getLifecycle())) {
            $a['lifecycle'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getQuery())) {
            $a['query'] = $v;
        }
        if (null !== ($v = $this->getRole())) {
            $a['role'] = $v;
        }
        if (null !== ($v = $this->getSecurityLabel())) {
            $a['securityLabel'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getWhat())) {
            $a['what'] = $v;
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
            $sxe = new \SimpleXMLElement('<AuditEventEntity xmlns="http://hl7.org/fhir"></AuditEventEntity>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}