<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 29th, 2019 23:10+0000
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

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;

/**
 * A record of an event made for purposes of maintaining a security log. Typical
 * uses include detection of intrusion attempts and monitoring for inappropriate
 * usage.
 *
 * Class FHIRAuditEventParticipant
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent
 */
class FHIRAuditEventParticipant extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_PARTICIPANT;
    const FIELD_ALT_ID = 'altId';
    const FIELD_ALT_ID_EXT = '_altId';
    const FIELD_LOCATION = 'location';
    const FIELD_MEDIA = 'media';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_NETWORK = 'network';
    const FIELD_POLICY = 'policy';
    const FIELD_POLICY_EXT = '_policy';
    const FIELD_PURPOSE_OF_USE = 'purposeOfUse';
    const FIELD_REFERENCE = 'reference';
    const FIELD_REQUESTOR = 'requestor';
    const FIELD_REQUESTOR_EXT = '_requestor';
    const FIELD_ROLE = 'role';
    const FIELD_USER_ID = 'userId';

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Alternative Participant Identifier. For a human, this should be a user
     * identifier text string from authentication system. This identifier would be one
     * known to a common authentication system (e.g. single sign-on), if available.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $altId = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the event occurred.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $location = null;

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of media involved. Used when the event is about exporting/importing onto
     * media.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected $media = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-meaningful name for the user.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected $name = null;

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Logical network location for application activity, if the activity has a network
     * location.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventNetwork
     */
    protected $network = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The policy or plan that authorized the activity being recorded. Typically, a
     * single activity may have multiple applicable policies, such as patient consent,
     * guarantor funding, etc. The policy would also indicate the security token used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri[]
     */
    protected $policy = [];

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason (purpose of use), specific to this participant, that was used during
     * the event being recorded.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    protected $purposeOfUse = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Direct reference to a resource that identifies the participant.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    protected $reference = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator that the user is or is not the requestor, or initiator, for the event
     * being audited.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    protected $requestor = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specification of the role(s) the user plays when performing the event. Usually
     * the codes used in this element are local codes defined by the role-based access
     * control security system used in the local context.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    protected $role = [];

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for the user actively participating in the event.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    protected $userId = null;

    /**
     * Validation map for fields in type AuditEvent.Participant
     * @var array
     */
    private static $_fieldValidation = [    ];

    /**
     * FHIRAuditEventParticipant Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAuditEventParticipant::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ALT_ID])) {
            $ext = (isset($data[self::FIELD_ALT_ID_EXT]) && is_array($data[self::FIELD_ALT_ID_EXT]))
                ? $data[self::FIELD_ALT_ID_EXT]
                : null;
            if ($data[self::FIELD_ALT_ID] instanceof FHIRString) {
                $this->setAltId($data[self::FIELD_ALT_ID]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_ALT_ID])) {
                    $this->setAltId(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_ALT_ID]] + $ext));
                } else if (is_array($data[self::FIELD_ALT_ID])) {
                    $this->setAltId(new FHIRString(array_merge($ext, $data[self::FIELD_ALT_ID])));
                }
            } else {
                $this->setAltId(new FHIRString($data[self::FIELD_ALT_ID]));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRReference) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRReference($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_MEDIA])) {
            if ($data[self::FIELD_MEDIA] instanceof FHIRCoding) {
                $this->setMedia($data[self::FIELD_MEDIA]);
            } else {
                $this->setMedia(new FHIRCoding($data[self::FIELD_MEDIA]));
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
        if (isset($data[self::FIELD_NETWORK])) {
            if ($data[self::FIELD_NETWORK] instanceof FHIRAuditEventNetwork) {
                $this->setNetwork($data[self::FIELD_NETWORK]);
            } else {
                $this->setNetwork(new FHIRAuditEventNetwork($data[self::FIELD_NETWORK]));
            }
        }
        if (isset($data[self::FIELD_POLICY])) {
            $ext = (isset($data[self::FIELD_POLICY_EXT]) && is_array($data[self::FIELD_POLICY_EXT]))
                ? $data[self::FIELD_POLICY_EXT]
                : null;
            if (is_array($data[self::FIELD_POLICY])) {
                foreach($data[self::FIELD_POLICY] as $i => $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRUri) {
                        $this->addPolicy($v);
                    } elseif (null !== $ext && isset($ext[$i]) && is_array($ext[$i])) {
                        if (is_scalar($v)) {
                            $this->addPolicy(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $ext[$i]));
                        } elseif (is_array($v)) {
                            $this->addPolicy(new FHIRUri(array_merge($v, $ext[$i])));
                        }
                    } else {
                        $this->addPolicy(new FHIRUri($v));
                    }
                }
            } elseif ($data[self::FIELD_POLICY] instanceof FHIRUri) {
                $this->addPolicy($data[self::FIELD_POLICY]);
            } elseif (null !== $ext && is_scalar($data[self::FIELD_POLICY])) {
                $this->addPolicy(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_POLICY]] + $ext));
            } else {
                $this->addPolicy(new FHIRUri($data[self::FIELD_POLICY]));
            }
        }
        if (isset($data[self::FIELD_PURPOSE_OF_USE])) {
            if (is_array($data[self::FIELD_PURPOSE_OF_USE])) {
                foreach($data[self::FIELD_PURPOSE_OF_USE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addPurposeOfUse($v);
                    } else {
                        $this->addPurposeOfUse(new FHIRCoding($v));
                    }
                }
            } else if ($data[self::FIELD_PURPOSE_OF_USE] instanceof FHIRCoding) {
                $this->addPurposeOfUse($data[self::FIELD_PURPOSE_OF_USE]);
            } else {
                $this->addPurposeOfUse(new FHIRCoding($data[self::FIELD_PURPOSE_OF_USE]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE])) {
            if ($data[self::FIELD_REFERENCE] instanceof FHIRReference) {
                $this->setReference($data[self::FIELD_REFERENCE]);
            } else {
                $this->setReference(new FHIRReference($data[self::FIELD_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_REQUESTOR])) {
            $ext = (isset($data[self::FIELD_REQUESTOR_EXT]) && is_array($data[self::FIELD_REQUESTOR_EXT]))
                ? $data[self::FIELD_REQUESTOR_EXT]
                : null;
            if ($data[self::FIELD_REQUESTOR] instanceof FHIRBoolean) {
                $this->setRequestor($data[self::FIELD_REQUESTOR]);
            } elseif (null !== $ext) {
                if (is_scalar($data[self::FIELD_REQUESTOR])) {
                    $this->setRequestor(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_REQUESTOR]] + $ext));
                } else if (is_array($data[self::FIELD_REQUESTOR])) {
                    $this->setRequestor(new FHIRBoolean(array_merge($ext, $data[self::FIELD_REQUESTOR])));
                }
            } else {
                $this->setRequestor(new FHIRBoolean($data[self::FIELD_REQUESTOR]));
            }
        }
        if (isset($data[self::FIELD_ROLE])) {
            if (is_array($data[self::FIELD_ROLE])) {
                foreach($data[self::FIELD_ROLE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addRole($v);
                    } else {
                        $this->addRole(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_ROLE] instanceof FHIRCodeableConcept) {
                $this->addRole($data[self::FIELD_ROLE]);
            } else {
                $this->addRole(new FHIRCodeableConcept($data[self::FIELD_ROLE]));
            }
        }
        if (isset($data[self::FIELD_USER_ID])) {
            if ($data[self::FIELD_USER_ID] instanceof FHIRIdentifier) {
                $this->setUserId($data[self::FIELD_USER_ID]);
            } else {
                $this->setUserId(new FHIRIdentifier($data[self::FIELD_USER_ID]));
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
        return "<AuditEventParticipant{$xmlns}></AuditEventParticipant>";
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Alternative Participant Identifier. For a human, this should be a user
     * identifier text string from authentication system. This identifier would be one
     * known to a common authentication system (e.g. single sign-on), if available.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getAltId()
    {
        return $this->altId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Alternative Participant Identifier. For a human, this should be a user
     * identifier text string from authentication system. This identifier would be one
     * known to a common authentication system (e.g. single sign-on), if available.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $altId
     * @return static
     */
    public function setAltId($altId = null)
    {
        if (null === $altId) {
            $this->altId = null;
            return $this;
        }
        if ($altId instanceof FHIRString) {
            $this->altId = $altId;
            return $this;
        }
        $this->altId = new FHIRString($altId);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the event occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Where the event occurred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $location
     * @return static
     */
    public function setLocation(FHIRReference $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of media involved. Used when the event is about exporting/importing onto
     * media.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of media involved. Used when the event is about exporting/importing onto
     * media.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $media
     * @return static
     */
    public function setMedia(FHIRCoding $media = null)
    {
        $this->media = $media;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-meaningful name for the user.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Human-meaningful name for the user.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $name
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
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Logical network location for application activity, if the activity has a network
     * location.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventNetwork
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Logical network location for application activity, if the activity has a network
     * location.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventNetwork $network
     * @return static
     */
    public function setNetwork(FHIRAuditEventNetwork $network = null)
    {
        $this->network = $network;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The policy or plan that authorized the activity being recorded. Typically, a
     * single activity may have multiple applicable policies, such as patient consent,
     * guarantor funding, etc. The policy would also indicate the security token used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The policy or plan that authorized the activity being recorded. Typically, a
     * single activity may have multiple applicable policies, such as patient consent,
     * guarantor funding, etc. The policy would also indicate the security token used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri $policy
     * @return static
     */
    public function addPolicy($policy = null)
    {
        if (null === $policy) {
            $this->policy = [];
            return $this;
        }
        if ($policy instanceof FHIRUri) {
            $this->policy[] = $policy;
            return $this;
        }
        $this->policy[] = new FHIRUri($policy);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The policy or plan that authorized the activity being recorded. Typically, a
     * single activity may have multiple applicable policies, such as patient consent,
     * guarantor funding, etc. The policy would also indicate the security token used.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri[] $policy
     * @return static
     */
    public function setPolicy(array $policy = [])
    {
        $this->policy = [];
        if ([] === $policy) {
            return $this;
        }
        foreach($policy as $v) {
            if ($v instanceof FHIRUri) {
                $this->addPolicy($v);
            } else {
                $this->addPolicy(new FHIRUri($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason (purpose of use), specific to this participant, that was used during
     * the event being recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getPurposeOfUse()
    {
        return $this->purposeOfUse;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason (purpose of use), specific to this participant, that was used during
     * the event being recorded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $purposeOfUse
     * @return static
     */
    public function addPurposeOfUse(FHIRCoding $purposeOfUse = null)
    {
        $this->purposeOfUse[] = $purposeOfUse;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason (purpose of use), specific to this participant, that was used during
     * the event being recorded.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[] $purposeOfUse
     * @return static
     */
    public function setPurposeOfUse(array $purposeOfUse = [])
    {
        $this->purposeOfUse = [];
        if ([] === $purposeOfUse) {
            return $this;
        }
        foreach($purposeOfUse as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addPurposeOfUse($v);
            } else {
                $this->addPurposeOfUse(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Direct reference to a resource that identifies the participant.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference
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
     * Direct reference to a resource that identifies the participant.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference $reference
     * @return static
     */
    public function setReference(FHIRReference $reference = null)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator that the user is or is not the requestor, or initiator, for the event
     * being audited.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean
     */
    public function getRequestor()
    {
        return $this->requestor;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator that the user is or is not the requestor, or initiator, for the event
     * being audited.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean $requestor
     * @return static
     */
    public function setRequestor($requestor = null)
    {
        if (null === $requestor) {
            $this->requestor = null;
            return $this;
        }
        if ($requestor instanceof FHIRBoolean) {
            $this->requestor = $requestor;
            return $this;
        }
        $this->requestor = new FHIRBoolean($requestor);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specification of the role(s) the user plays when performing the event. Usually
     * the codes used in this element are local codes defined by the role-based access
     * control security system used in the local context.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specification of the role(s) the user plays when performing the event. Usually
     * the codes used in this element are local codes defined by the role-based access
     * control security system used in the local context.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept $role
     * @return static
     */
    public function addRole(FHIRCodeableConcept $role = null)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specification of the role(s) the user plays when performing the event. Usually
     * the codes used in this element are local codes defined by the role-based access
     * control security system used in the local context.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept[] $role
     * @return static
     */
    public function setRole(array $role = [])
    {
        $this->role = [];
        if ([] === $role) {
            return $this;
        }
        foreach($role as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addRole($v);
            } else {
                $this->addRole(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for the user actively participating in the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique identifier for the user actively participating in the event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier $userId
     * @return static
     */
    public function setUserId(FHIRIdentifier $userId = null)
    {
        $this->userId = $userId;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventParticipant $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventParticipant
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
                throw new \DomainException(sprintf('FHIRAuditEventParticipant::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRAuditEventParticipant::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRAuditEventParticipant;
        } elseif (!is_object($type) || !($type instanceof FHIRAuditEventParticipant)) {
            throw new \RuntimeException(sprintf(
                'FHIRAuditEventParticipant::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventParticipant or null, %s seen.',
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
        if (isset($attributes->altId)) {
            $type->setAltId((string)$attributes->altId);
        }
        if (isset($children->altId)) {
            $type->setAltId(FHIRString::xmlUnserialize($children->altId));
        }
        if (isset($children->location)) {
            $type->setLocation(FHIRReference::xmlUnserialize($children->location));
        }
        if (isset($children->media)) {
            $type->setMedia(FHIRCoding::xmlUnserialize($children->media));
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($children->network)) {
            $type->setNetwork(FHIRAuditEventNetwork::xmlUnserialize($children->network));
        }
        if (isset($attributes->policy)) {
            $type->addPolicy((string)$attributes->policy);
        }
        if (isset($children->policy)) {
            foreach($children->policy as $child) {
                $type->addPolicy(FHIRUri::xmlUnserialize($child));
            }
        }
        if (isset($children->purposeOfUse)) {
            foreach($children->purposeOfUse as $child) {
                $type->addPurposeOfUse(FHIRCoding::xmlUnserialize($child));
            }
        }
        if (isset($children->reference)) {
            $type->setReference(FHIRReference::xmlUnserialize($children->reference));
        }
        if (isset($attributes->requestor)) {
            $type->setRequestor((string)$attributes->requestor);
        }
        if (isset($children->requestor)) {
            $type->setRequestor(FHIRBoolean::xmlUnserialize($children->requestor));
        }
        if (isset($children->role)) {
            foreach($children->role as $child) {
                $type->addRole(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->userId)) {
            $type->setUserId(FHIRIdentifier::xmlUnserialize($children->userId));
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

        if (null !== ($v = $this->getAltId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ALT_ID, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getLocation())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LOCATION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMedia())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MEDIA, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NAME, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNetwork())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NETWORK, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getPolicy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_POLICY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getPurposeOfUse())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PURPOSE_OF_USE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRequestor())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUESTOR, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getRole())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ROLE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getUserId())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USER_ID, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAltId())) {
            $a[self::FIELD_ALT_ID] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_ALT_ID_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            $a[self::FIELD_LOCATION] = $v;
        }
        if (null !== ($v = $this->getMedia())) {
            $a[self::FIELD_MEDIA] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_NAME_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getNetwork())) {
            $a[self::FIELD_NETWORK] = $v;
        }
        if ([] !== ($vs = $this->getPolicy())) {
            $a[self::FIELD_POLICY] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_POLICY][] = $v->getValue();
                if (1 < count($enc = $v->jsonSerialize())) {
                    unset($enc[$v::FIELD_VALUE]);
                    $a[self::FIELD_POLICY_EXT][] = $enc;
                } else {
                    $a[self::FIELD_POLICY_EXT][] = null;
                }
            }
        }
        if ([] !== ($vs = $this->getPurposeOfUse())) {
            $a[self::FIELD_PURPOSE_OF_USE] = $vs;
        }
        if (null !== ($v = $this->getReference())) {
            $a[self::FIELD_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getRequestor())) {
            $a[self::FIELD_REQUESTOR] = $v->getValue();
            if (1 < count($enc = $v->jsonSerialize())) {
                unset($enc[$v::FIELD_VALUE]);
                $a[self::FIELD_REQUESTOR_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getRole())) {
            $a[self::FIELD_ROLE] = $vs;
        }
        if (null !== ($v = $this->getUserId())) {
            $a[self::FIELD_USER_ID] = $v;
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