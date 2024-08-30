<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:23+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRCanonicalPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRIntegerPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R4\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter;

/**
 * A structured set of tests against a FHIR server or client implementation to
 * determine compliance against the FHIR specification.
 *
 * Class FHIRTestScriptCapability
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript
 */
class FHIRTestScriptCapability extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY;

    const FIELD_REQUIRED = 'required';
    const FIELD_REQUIRED_EXT = '_required';
    const FIELD_VALIDATED = 'validated';
    const FIELD_VALIDATED_EXT = '_validated';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_ORIGIN = 'origin';
    const FIELD_ORIGIN_EXT = '_origin';
    const FIELD_DESTINATION = 'destination';
    const FIELD_DESTINATION_EXT = '_destination';
    const FIELD_LINK = 'link';
    const FIELD_LINK_EXT = '_link';
    const FIELD_CAPABILITIES = 'capabilities';
    const FIELD_CAPABILITIES_EXT = '_capabilities';

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution will require the given capabilities of the
     * server in order for this test script to execute.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $required = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution will validate the given capabilities of the
     * server in order for this test script to execute.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $validated = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of the capabilities that this test script is requiring the server to
     * support.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $description = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Which origin server these requirements apply to.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger[]
     */
    protected null|array $origin = [];
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Which server these requirements apply to.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $destination = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Links to the FHIR specification that describes this interaction and the
     * resources involved in more detail.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[]
     */
    protected null|array $link = [];
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Minimum capabilities required of server for test script to execute successfully.
     * If server does not meet at a minimum the referenced capability statement, then
     * all tests in this script are skipped.
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $capabilities = null;

    /**
     * Validation map for fields in type TestScript.Capability
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_CAPABILITIES => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_REQUIRED => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_VALIDATED => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRTestScriptCapability Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_REQUIRED, $data) || array_key_exists(self::FIELD_REQUIRED_EXT, $data)) {
            $value = $data[self::FIELD_REQUIRED] ?? null;
            $ext = (isset($data[self::FIELD_REQUIRED_EXT]) && is_array($data[self::FIELD_REQUIRED_EXT])) ? $data[self::FIELD_REQUIRED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setRequired($value);
                } else if (is_array($value)) {
                    $this->setRequired(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setRequired(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRequired(new FHIRBoolean($ext));
            } else {
                $this->setRequired(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_VALIDATED, $data) || array_key_exists(self::FIELD_VALIDATED_EXT, $data)) {
            $value = $data[self::FIELD_VALIDATED] ?? null;
            $ext = (isset($data[self::FIELD_VALIDATED_EXT]) && is_array($data[self::FIELD_VALIDATED_EXT])) ? $data[self::FIELD_VALIDATED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setValidated($value);
                } else if (is_array($value)) {
                    $this->setValidated(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setValidated(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValidated(new FHIRBoolean($ext));
            } else {
                $this->setValidated(new FHIRBoolean(null));
            }
        }
        if (array_key_exists(self::FIELD_DESCRIPTION, $data) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRString($ext));
            } else {
                $this->setDescription(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_ORIGIN, $data) || array_key_exists(self::FIELD_ORIGIN_EXT, $data)) {
            $value = $data[self::FIELD_ORIGIN] ?? null;
            $ext = (isset($data[self::FIELD_ORIGIN_EXT]) && is_array($data[self::FIELD_ORIGIN_EXT])) ? $data[self::FIELD_ORIGIN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->addOrigin($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRInteger) {
                            $this->addOrigin($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addOrigin(new FHIRInteger(array_merge($v, $iext)));
                            } else {
                                $this->addOrigin(new FHIRInteger([FHIRInteger::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addOrigin(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->addOrigin(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addOrigin(new FHIRInteger($iext));
                }
            } else {
                $this->addOrigin(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_DESTINATION, $data) || array_key_exists(self::FIELD_DESTINATION_EXT, $data)) {
            $value = $data[self::FIELD_DESTINATION] ?? null;
            $ext = (isset($data[self::FIELD_DESTINATION_EXT]) && is_array($data[self::FIELD_DESTINATION_EXT])) ? $data[self::FIELD_DESTINATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setDestination($value);
                } else if (is_array($value)) {
                    $this->setDestination(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setDestination(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDestination(new FHIRInteger($ext));
            } else {
                $this->setDestination(new FHIRInteger(null));
            }
        }
        if (array_key_exists(self::FIELD_LINK, $data) || array_key_exists(self::FIELD_LINK_EXT, $data)) {
            $value = $data[self::FIELD_LINK] ?? null;
            $ext = (isset($data[self::FIELD_LINK_EXT]) && is_array($data[self::FIELD_LINK_EXT])) ? $data[self::FIELD_LINK_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->addLink($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUri) {
                            $this->addLink($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addLink(new FHIRUri(array_merge($v, $iext)));
                            } else {
                                $this->addLink(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addLink(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->addLink(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addLink(new FHIRUri($iext));
                }
            } else {
                $this->addLink(new FHIRUri(null));
            }
        }
        if (array_key_exists(self::FIELD_CAPABILITIES, $data) || array_key_exists(self::FIELD_CAPABILITIES_EXT, $data)) {
            $value = $data[self::FIELD_CAPABILITIES] ?? null;
            $ext = (isset($data[self::FIELD_CAPABILITIES_EXT]) && is_array($data[self::FIELD_CAPABILITIES_EXT])) ? $data[self::FIELD_CAPABILITIES_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setCapabilities($value);
                } else if (is_array($value)) {
                    $this->setCapabilities(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setCapabilities(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCapabilities(new FHIRCanonical($ext));
            } else {
                $this->setCapabilities(new FHIRCanonical(null));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution will require the given capabilities of the
     * server in order for this test script to execute.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getRequired(): null|FHIRBoolean
    {
        return $this->required;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution will require the given capabilities of the
     * server in order for this test script to execute.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R4\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $required
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setRequired(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $required = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $required && !($required instanceof FHIRBoolean)) {
            $required = new FHIRBoolean($required);
        }
        $this->_trackValueSet($this->required, $required);
        if (!isset($this->_xmlLocations[self::FIELD_REQUIRED])) {
            $this->_xmlLocations[self::FIELD_REQUIRED] = [];
        }
        $this->_xmlLocations[self::FIELD_REQUIRED][0] = $xmlLocation;
        $this->required = $required;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution will validate the given capabilities of the
     * server in order for this test script to execute.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getValidated(): null|FHIRBoolean
    {
        return $this->validated;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether or not the test execution will validate the given capabilities of the
     * server in order for this test script to execute.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R4\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $validated
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setValidated(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $validated = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $validated && !($validated instanceof FHIRBoolean)) {
            $validated = new FHIRBoolean($validated);
        }
        $this->_trackValueSet($this->validated, $validated);
        if (!isset($this->_xmlLocations[self::FIELD_VALIDATED])) {
            $this->_xmlLocations[self::FIELD_VALIDATED] = [];
        }
        $this->_xmlLocations[self::FIELD_VALIDATED][0] = $xmlLocation;
        $this->validated = $validated;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of the capabilities that this test script is requiring the server to
     * support.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getDescription(): null|FHIRString
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Description of the capabilities that this test script is requiring the server to
     * support.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $description
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDescription(null|string|FHIRStringPrimitive|FHIRString $description = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $description && !($description instanceof FHIRString)) {
            $description = new FHIRString($description);
        }
        $this->_trackValueSet($this->description, $description);
        if (!isset($this->_xmlLocations[self::FIELD_DESCRIPTION])) {
            $this->_xmlLocations[self::FIELD_DESCRIPTION] = [];
        }
        $this->_xmlLocations[self::FIELD_DESCRIPTION][0] = $xmlLocation;
        $this->description = $description;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Which origin server these requirements apply to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger[]
     */
    public function getOrigin(): null|array
    {
        return $this->origin;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Which origin server these requirements apply to.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R4\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $origin
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addOrigin(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $origin = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $origin && !($origin instanceof FHIRInteger)) {
            $origin = new FHIRInteger($origin);
        }
        $this->_trackValueAdded();
        if (!isset($this->_xmlLocations[self::FIELD_ORIGIN])) {
            $this->_xmlLocations[self::FIELD_ORIGIN] = [];
        }
        if ([] === $this->_xmlLocations[self::FIELD_ORIGIN]) {
            $this->_xmlLocations[self::FIELD_ORIGIN][0] = $xmlLocation;
        } else {
            $this->_xmlLocations[self::FIELD_ORIGIN][] = PHPFHIRXmlLocationEnum::ELEMENT;
        }
        $this->origin[] = $origin;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Which origin server these requirements apply to.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger[] $origin
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setOrigin(array $origin = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        unset($this->_xmlLocations[self::FIELD_ORIGIN]);
        if ([] !== $this->origin) {
            $this->_trackValuesRemoved(count($this->origin));
            $this->origin = [];
        }
        if ([] === $origin) {
            return $this;
        }
        foreach($origin as $v) {
            if ($v instanceof FHIRInteger) {
                $this->addOrigin($v, $xmlLocation);
            } else {
                $this->addOrigin(new FHIRInteger($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Which server these requirements apply to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger
     */
    public function getDestination(): null|FHIRInteger
    {
        return $this->destination;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Which server these requirements apply to.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R4\FHIRIntegerPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $destination
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDestination(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $destination = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $destination && !($destination instanceof FHIRInteger)) {
            $destination = new FHIRInteger($destination);
        }
        $this->_trackValueSet($this->destination, $destination);
        if (!isset($this->_xmlLocations[self::FIELD_DESTINATION])) {
            $this->_xmlLocations[self::FIELD_DESTINATION] = [];
        }
        $this->_xmlLocations[self::FIELD_DESTINATION][0] = $xmlLocation;
        $this->destination = $destination;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Links to the FHIR specification that describes this interaction and the
     * resources involved in more detail.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[]
     */
    public function getLink(): null|array
    {
        return $this->link;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Links to the FHIR specification that describes this interaction and the
     * resources involved in more detail.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $link
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function addLink(null|string|FHIRUriPrimitive|FHIRUri $link = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $link && !($link instanceof FHIRUri)) {
            $link = new FHIRUri($link);
        }
        $this->_trackValueAdded();
        if (!isset($this->_xmlLocations[self::FIELD_LINK])) {
            $this->_xmlLocations[self::FIELD_LINK] = [];
        }
        if ([] === $this->_xmlLocations[self::FIELD_LINK]) {
            $this->_xmlLocations[self::FIELD_LINK][0] = $xmlLocation;
        } else {
            $this->_xmlLocations[self::FIELD_LINK][] = PHPFHIRXmlLocationEnum::ELEMENT;
        }
        $this->link[] = $link;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Links to the FHIR specification that describes this interaction and the
     * resources involved in more detail.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[] $link
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setLink(array $link = [], PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        unset($this->_xmlLocations[self::FIELD_LINK]);
        if ([] !== $this->link) {
            $this->_trackValuesRemoved(count($this->link));
            $this->link = [];
        }
        if ([] === $link) {
            return $this;
        }
        foreach($link as $v) {
            if ($v instanceof FHIRUri) {
                $this->addLink($v, $xmlLocation);
            } else {
                $this->addLink(new FHIRUri($v), $xmlLocation);
            }
        }
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Minimum capabilities required of server for test script to execute successfully.
     * If server does not meet at a minimum the referenced capability statement, then
     * all tests in this script are skipped.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical
     */
    public function getCapabilities(): null|FHIRCanonical
    {
        return $this->capabilities;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Minimum capabilities required of server for test script to execute successfully.
     * If server does not meet at a minimum the referenced capability statement, then
     * all tests in this script are skipped.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R4\FHIRCanonicalPrimitive|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $capabilities
     * @param \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCapabilities(null|string|FHIRCanonicalPrimitive|FHIRCanonical $capabilities = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $capabilities && !($capabilities instanceof FHIRCanonical)) {
            $capabilities = new FHIRCanonical($capabilities);
        }
        $this->_trackValueSet($this->capabilities, $capabilities);
        if (!isset($this->_xmlLocations[self::FIELD_CAPABILITIES])) {
            $this->_xmlLocations[self::FIELD_CAPABILITIES] = [];
        }
        $this->_xmlLocations[self::FIELD_CAPABILITIES][0] = $xmlLocation;
        $this->capabilities = $capabilities;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getRequired())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUIRED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValidated())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALIDATED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getOrigin())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ORIGIN, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDestination())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESTINATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLink())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LINK, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCapabilities())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CAPABILITIES] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_REQUIRED])) {
            $v = $this->getRequired();
            foreach($validationRules[self::FIELD_REQUIRED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY, self::FIELD_REQUIRED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIRED])) {
                        $errs[self::FIELD_REQUIRED] = [];
                    }
                    $errs[self::FIELD_REQUIRED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDATED])) {
            $v = $this->getValidated();
            foreach($validationRules[self::FIELD_VALIDATED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY, self::FIELD_VALIDATED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDATED])) {
                        $errs[self::FIELD_VALIDATED] = [];
                    }
                    $errs[self::FIELD_VALIDATED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORIGIN])) {
            $v = $this->getOrigin();
            foreach($validationRules[self::FIELD_ORIGIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY, self::FIELD_ORIGIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORIGIN])) {
                        $errs[self::FIELD_ORIGIN] = [];
                    }
                    $errs[self::FIELD_ORIGIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESTINATION])) {
            $v = $this->getDestination();
            foreach($validationRules[self::FIELD_DESTINATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY, self::FIELD_DESTINATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESTINATION])) {
                        $errs[self::FIELD_DESTINATION] = [];
                    }
                    $errs[self::FIELD_DESTINATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LINK])) {
            $v = $this->getLink();
            foreach($validationRules[self::FIELD_LINK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY, self::FIELD_LINK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINK])) {
                        $errs[self::FIELD_LINK] = [];
                    }
                    $errs[self::FIELD_LINK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CAPABILITIES])) {
            $v = $this->getCapabilities();
            foreach($validationRules[self::FIELD_CAPABILITIES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY, self::FIELD_CAPABILITIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CAPABILITIES])) {
                        $errs[self::FIELD_CAPABILITIES] = [];
                    }
                    $errs[self::FIELD_CAPABILITIES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRTestScriptCapability)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_REQUIRED === $childName) {
                $type->setRequired(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_VALIDATED === $childName) {
                $type->setValidated(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ORIGIN === $childName) {
                $type->addOrigin(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_DESTINATION === $childName) {
                $type->setDestination(FHIRInteger::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LINK === $childName) {
                $type->addLink(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CAPABILITIES === $childName) {
                $type->setCapabilities(FHIRCanonical::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_REQUIRED])) {
            $pt = $type->getRequired();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_REQUIRED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setRequired((string)$attributes[self::FIELD_REQUIRED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_VALIDATED])) {
            $pt = $type->getValidated();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_VALIDATED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setValidated((string)$attributes[self::FIELD_VALIDATED], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ORIGIN])) {
            $type->addOrigin((string)$attributes[self::FIELD_ORIGIN], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DESTINATION])) {
            $pt = $type->getDestination();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESTINATION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDestination((string)$attributes[self::FIELD_DESTINATION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LINK])) {
            $type->addLink((string)$attributes[self::FIELD_LINK], PHPFHIRXmlLocationEnum::ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CAPABILITIES])) {
            $pt = $type->getCapabilities();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CAPABILITIES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCapabilities((string)$attributes[self::FIELD_CAPABILITIES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R4\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R4\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'TestScriptCapability', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_REQUIRED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getRequired())) {
            $xw->writeAttribute(self::FIELD_REQUIRED, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_VALIDATED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getValidated())) {
            $xw->writeAttribute(self::FIELD_VALIDATED, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_ORIGIN] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getOrigin())) {
            $xw->writeAttribute(self::FIELD_ORIGIN, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getOrigin()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_ORIGIN, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_DESTINATION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDestination())) {
            $xw->writeAttribute(self::FIELD_DESTINATION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_LINK] ?? [];
        if ([] === $locs && [] !== ($vs = $this->getLink())) {
            $xw->writeAttribute(self::FIELD_LINK, $vs[0]->getValue()?->getFormattedValue());
        } else if (false !== ($idx = array_search(PHPFHIRXmlLocationEnum::ATTRIBUTE, $locs, true)) && [] !== ($vs = $this->getLink()) && isset($vs[$idx])) {
            $xw->writeAttribute(self::FIELD_LINK, $vs[$idx]->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_CAPABILITIES] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCapabilities())) {
            $xw->writeAttribute(self::FIELD_CAPABILITIES, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_REQUIRED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getRequired())) {
            $xw->startElement(self::FIELD_REQUIRED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_VALIDATED] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getValidated())) {
            $xw->startElement(self::FIELD_VALIDATED);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_ORIGIN] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getOrigin())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_ORIGIN);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        $locs = $this->_xmlLocations[self::FIELD_DESTINATION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDestination())) {
            $xw->startElement(self::FIELD_DESTINATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_LINK] ?? [];
        if (([] === $locs || in_array(PHPFHIRXmlLocationEnum::ELEMENT, $locs, true)) && [] !== ($vs = $this->getLink())) {
            foreach($vs as $i => $v) {
                if (!isset($locs[$i]) || PHPFHIRXmlLocationEnum::ELEMENT === $locs[$i]) {
                    $xw->startElement(self::FIELD_LINK);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        $locs = $this->_xmlLocations[self::FIELD_CAPABILITIES] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCapabilities())) {
            $xw->startElement(self::FIELD_CAPABILITIES);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getRequired())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REQUIRED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REQUIRED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValidated())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALIDATED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALIDATED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getOrigin())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRInteger::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_ORIGIN} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ORIGIN_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getDestination())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESTINATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESTINATION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getLink())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRUri::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_LINK} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LINK_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getCapabilities())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CAPABILITIES} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CAPABILITIES_EXT} = $ext;
            }
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}