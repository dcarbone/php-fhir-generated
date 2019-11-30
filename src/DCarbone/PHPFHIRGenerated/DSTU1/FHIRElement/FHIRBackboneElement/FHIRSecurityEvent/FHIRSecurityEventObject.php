<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 30th, 2019 21:21+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventObjectLifecycle;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventObjectRole;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventObjectType;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * A record of an event made for purposes of maintaining a security log. Typical
 * uses include detection of intrusion attempts and monitoring for inappropriate
 * usage.
 *
 * Class FHIRSecurityEventObject
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent
 */
class FHIRSecurityEventObject extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_DOT_OBJECT;
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DETAIL = 'detail';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_LIFECYCLE = 'lifecycle';
    const FIELD_LIFECYCLE_EXT = '_lifecycle';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_QUERY = 'query';
    const FIELD_QUERY_EXT = '_query';
    const FIELD_REFERENCE = 'reference';
    const FIELD_ROLE = 'role';
    const FIELD_ROLE_EXT = '_role';
    const FIELD_SENSITIVITY = 'sensitivity';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text that describes the object in more detail.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $description = null;

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Additional Information about the Object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventDetail[]
     */
    protected $detail = [];

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a specific instance of the participant object. The reference should
     * always be version specific.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    protected $identifier = null;

    /**
     * Identifier for the data life-cycle stage for the participant object
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifier for the data life-cycle stage for the participant object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventObjectLifecycle
     */
    protected $lifecycle = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An instance-specific descriptor of the Participant Object ID audited, such as a
     * person's name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual query for a query-type participant object.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    protected $query = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a specific instance of the participant object. The reference should
     * always be version specific.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $reference = null;

    /**
     * Code representing the functional application role of Participant Object being
     * audited
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Code representing the functional application role of Participant Object being
     * audited.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventObjectRole
     */
    protected $role = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Denotes policy-defined sensitivity for the Participant Object ID such as VIP,
     * HIV status, mental health status or similar topics.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    protected $sensitivity = null;

    /**
     * Code for the participant object type being audited
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Object type being audited.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventObjectType
     */
    protected $type = null;

    /**
     * Validation map for fields in type SecurityEvent.Object
     * @var array
     */
    private static $_fieldValidation = [    ];

    /**
     * FHIRSecurityEventObject Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSecurityEventObject::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_DESCRIPTION])) {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
                } else if (is_array($data[self::FIELD_DESCRIPTION])) {
                    $this->setDescription(new FHIRString(array_merge($ext, $data[self::FIELD_DESCRIPTION])));
                }
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_DETAIL])) {
            if (is_array($data[self::FIELD_DETAIL])) {
                foreach($data[self::FIELD_DETAIL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSecurityEventDetail) {
                        $this->addDetail($v);
                    } else {
                        $this->addDetail(new FHIRSecurityEventDetail($v));
                    }
                }
            } else if ($data[self::FIELD_DETAIL] instanceof FHIRSecurityEventDetail) {
                $this->addDetail($data[self::FIELD_DETAIL]);
            } else {
                $this->addDetail(new FHIRSecurityEventDetail($data[self::FIELD_DETAIL]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_LIFECYCLE])) {
            $ext = (isset($data[self::FIELD_LIFECYCLE_EXT]) && is_array($data[self::FIELD_LIFECYCLE_EXT]))
                ? $data[self::FIELD_LIFECYCLE_EXT]
                : null;
            if ($data[self::FIELD_LIFECYCLE] instanceof FHIRSecurityEventObjectLifecycle) {
                $this->setLifecycle($data[self::FIELD_LIFECYCLE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_LIFECYCLE])) {
                    $this->setLifecycle(new FHIRSecurityEventObjectLifecycle([FHIRSecurityEventObjectLifecycle::FIELD_VALUE => $data[self::FIELD_LIFECYCLE]] + $ext));
                } else if (is_array($data[self::FIELD_LIFECYCLE])) {
                    $this->setLifecycle(new FHIRSecurityEventObjectLifecycle(array_merge($ext, $data[self::FIELD_LIFECYCLE])));
                }
            } else {
                $this->setLifecycle(new FHIRSecurityEventObjectLifecycle($data[self::FIELD_LIFECYCLE]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRString) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_NAME])) {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
                } else if (is_array($data[self::FIELD_NAME])) {
                    $this->setName(new FHIRString(array_merge($ext, $data[self::FIELD_NAME])));
                }
            } else {
                $this->setName(new FHIRString($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_QUERY])) {
            $ext = (isset($data[self::FIELD_QUERY_EXT]) && is_array($data[self::FIELD_QUERY_EXT]))
                ? $data[self::FIELD_QUERY_EXT]
                : null;
            if ($data[self::FIELD_QUERY] instanceof FHIRBase64Binary) {
                $this->setQuery($data[self::FIELD_QUERY]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_QUERY])) {
                    $this->setQuery(new FHIRBase64Binary([FHIRBase64Binary::FIELD_VALUE => $data[self::FIELD_QUERY]] + $ext));
                } else if (is_array($data[self::FIELD_QUERY])) {
                    $this->setQuery(new FHIRBase64Binary(array_merge($ext, $data[self::FIELD_QUERY])));
                }
            } else {
                $this->setQuery(new FHIRBase64Binary($data[self::FIELD_QUERY]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE])) {
            if ($data[self::FIELD_REFERENCE] instanceof FHIRResourceReference) {
                $this->setReference($data[self::FIELD_REFERENCE]);
            } else {
                $this->setReference(new FHIRResourceReference($data[self::FIELD_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_ROLE])) {
            $ext = (isset($data[self::FIELD_ROLE_EXT]) && is_array($data[self::FIELD_ROLE_EXT]))
                ? $data[self::FIELD_ROLE_EXT]
                : null;
            if ($data[self::FIELD_ROLE] instanceof FHIRSecurityEventObjectRole) {
                $this->setRole($data[self::FIELD_ROLE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_ROLE])) {
                    $this->setRole(new FHIRSecurityEventObjectRole([FHIRSecurityEventObjectRole::FIELD_VALUE => $data[self::FIELD_ROLE]] + $ext));
                } else if (is_array($data[self::FIELD_ROLE])) {
                    $this->setRole(new FHIRSecurityEventObjectRole(array_merge($ext, $data[self::FIELD_ROLE])));
                }
            } else {
                $this->setRole(new FHIRSecurityEventObjectRole($data[self::FIELD_ROLE]));
            }
        }
        if (isset($data[self::FIELD_SENSITIVITY])) {
            if ($data[self::FIELD_SENSITIVITY] instanceof FHIRCodeableConcept) {
                $this->setSensitivity($data[self::FIELD_SENSITIVITY]);
            } else {
                $this->setSensitivity(new FHIRCodeableConcept($data[self::FIELD_SENSITIVITY]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT]))
                ? $data[self::FIELD_TYPE_EXT]
                : null;
            if ($data[self::FIELD_TYPE] instanceof FHIRSecurityEventObjectType) {
                $this->setType($data[self::FIELD_TYPE]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_TYPE])) {
                    $this->setType(new FHIRSecurityEventObjectType([FHIRSecurityEventObjectType::FIELD_VALUE => $data[self::FIELD_TYPE]] + $ext));
                } else if (is_array($data[self::FIELD_TYPE])) {
                    $this->setType(new FHIRSecurityEventObjectType(array_merge($ext, $data[self::FIELD_TYPE])));
                }
            } else {
                $this->setType(new FHIRSecurityEventObjectType($data[self::FIELD_TYPE]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<SecurityEventObject{$xmlns}></SecurityEventObject>";
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text that describes the object in more detail.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Text that describes the object in more detail.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $description
     * @return static
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRString) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRString($description);
        return $this;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Additional Information about the Object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventDetail[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Additional Information about the Object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventDetail $detail
     * @return static
     */
    public function addDetail(FHIRSecurityEventDetail $detail = null)
    {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Additional Information about the Object.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventDetail[] $detail
     * @return static
     */
    public function setDetail(array $detail = [])
    {
        $this->detail = [];
        if ([] === $detail) {
            return $this;
        }
        foreach($detail as $v) {
            if ($v instanceof FHIRSecurityEventDetail) {
                $this->addDetail($v);
            } else {
                $this->addDetail(new FHIRSecurityEventDetail($v));
            }
        }
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a specific instance of the participant object. The reference should
     * always be version specific.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a specific instance of the participant object. The reference should
     * always be version specific.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Identifier for the data life-cycle stage for the participant object
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifier for the data life-cycle stage for the participant object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventObjectLifecycle
     */
    public function getLifecycle()
    {
        return $this->lifecycle;
    }

    /**
     * Identifier for the data life-cycle stage for the participant object
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifier for the data life-cycle stage for the participant object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventObjectLifecycle $lifecycle
     * @return static
     */
    public function setLifecycle(FHIRSecurityEventObjectLifecycle $lifecycle = null)
    {
        $this->lifecycle = $lifecycle;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An instance-specific descriptor of the Participant Object ID audited, such as a
     * person's name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An instance-specific descriptor of the Participant Object ID audited, such as a
     * person's name.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName($name = null)
    {
        if (null === $name) {
            $this->name = null;
            return $this;
        }
        if ($name instanceof FHIRString) {
            $this->name = $name;
            return $this;
        }
        $this->name = new FHIRString($name);
        return $this;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual query for a query-type participant object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * A stream of bytes
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual query for a query-type participant object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary $query
     * @return static
     */
    public function setQuery($query = null)
    {
        if (null === $query) {
            $this->query = null;
            return $this;
        }
        if ($query instanceof FHIRBase64Binary) {
            $this->query = $query;
            return $this;
        }
        $this->query = new FHIRBase64Binary($query);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a specific instance of the participant object. The reference should
     * always be version specific.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies a specific instance of the participant object. The reference should
     * always be version specific.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $reference
     * @return static
     */
    public function setReference(FHIRResourceReference $reference = null)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Code representing the functional application role of Participant Object being
     * audited
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Code representing the functional application role of Participant Object being
     * audited.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventObjectRole
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Code representing the functional application role of Participant Object being
     * audited
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Code representing the functional application role of Participant Object being
     * audited.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventObjectRole $role
     * @return static
     */
    public function setRole(FHIRSecurityEventObjectRole $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Denotes policy-defined sensitivity for the Participant Object ID such as VIP,
     * HIV status, mental health status or similar topics.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept
     */
    public function getSensitivity()
    {
        return $this->sensitivity;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Denotes policy-defined sensitivity for the Participant Object ID such as VIP,
     * HIV status, mental health status or similar topics.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept $sensitivity
     * @return static
     */
    public function setSensitivity(FHIRCodeableConcept $sensitivity = null)
    {
        $this->sensitivity = $sensitivity;
        return $this;
    }

    /**
     * Code for the participant object type being audited
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Object type being audited.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventObjectType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Code for the participant object type being audited
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Object type being audited.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventObjectType $type
     * @return static
     */
    public function setType(FHIRSecurityEventObjectType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array
     */
    public function _validationErrors()
    {
        // TODO: implement validation
        return [];
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventObject $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventObject
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRSecurityEventObject::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSecurityEventObject::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRSecurityEventObject;
        } elseif (!is_object($type) || !($type instanceof FHIRSecurityEventObject)) {
            throw new \RuntimeException(sprintf(
                'FHIRSecurityEventObject::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventObject or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->description)) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->description);
            } else {
                $type->setDescription((string)$attributes->description);
            }
        }
        if (isset($children->detail)) {
            foreach($children->detail as $child) {
                $type->addDetail(FHIRSecurityEventDetail::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($children->lifecycle)) {
            $type->setLifecycle(FHIRSecurityEventObjectLifecycle::xmlUnserialize($children->lifecycle));
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($attributes->name)) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->name);
            } else {
                $type->setName((string)$attributes->name);
            }
        }
        if (isset($children->query)) {
            $type->setQuery(FHIRBase64Binary::xmlUnserialize($children->query));
        }
        if (isset($attributes->query)) {
            $pt = $type->getQuery();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->query);
            } else {
                $type->setQuery((string)$attributes->query);
            }
        }
        if (isset($children->reference)) {
            $type->setReference(FHIRResourceReference::xmlUnserialize($children->reference));
        }
        if (isset($children->role)) {
            $type->setRole(FHIRSecurityEventObjectRole::xmlUnserialize($children->role));
        }
        if (isset($children->sensitivity)) {
            $type->setSensitivity(FHIRCodeableConcept::xmlUnserialize($children->sensitivity));
        }
        if (isset($children->type)) {
            $type->setType(FHIRSecurityEventObjectType::xmlUnserialize($children->type));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getDetail())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLifecycle())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LIFECYCLE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getQuery())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUERY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRole())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ROLE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSensitivity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SENSITIVITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_DESCRIPTION_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getDetail())) {
            $a[self::FIELD_DETAIL] = $vs;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getLifecycle())) {
            $a[self::FIELD_LIFECYCLE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_LIFECYCLE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_NAME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getQuery())) {
            $a[self::FIELD_QUERY] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_QUERY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getReference())) {
            $a[self::FIELD_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getRole())) {
            $a[self::FIELD_ROLE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_ROLE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSensitivity())) {
            $a[self::FIELD_SENSITIVITY] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_TYPE_EXT] = $enc;
            }
        }
        return $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}