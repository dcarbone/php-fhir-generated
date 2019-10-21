<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:04+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * A structured set of tests against a FHIR server implementation to determine
 * compliance against the FHIR specification.
 *
 * Class FHIRTestScriptCapability
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript
 */
class FHIRTestScriptCapability extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CAPABILITIES = 'capabilities';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_DESTINATION = 'destination';
    const FIELD_DESTINATION_EXT = '_destination';
    const FIELD_LINK = 'link';
    const FIELD_LINK_EXT = '_link';
    const FIELD_ORIGIN = 'origin';
    const FIELD_ORIGIN_EXT = '_origin';
    const FIELD_REQUIRED = 'required';
    const FIELD_REQUIRED_EXT = '_required';
    const FIELD_VALIDATED = 'validated';
    const FIELD_VALIDATED_EXT = '_validated';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Minimum capabilities required of server for test script to execute successfully.
     * If server does not meet at a minimum the referenced capability statement, then
     * all tests in this script are skipped.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    private $capabilities = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Description of the capabilities that this test script is requiring the server to
     * support.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $description = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Which server these requirements apply to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    private $destination = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Links to the FHIR specification that describes this interaction and the
     * resources involved in more detail.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri[]
     */
    private $link = [];
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Which origin server these requirements apply to.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger[]
     */
    private $origin = [];
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether or not the test execution will require the given capabilities of the
     * server in order for this test script to execute.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    private $required = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether or not the test execution will validate the given capabilities of the
     * server in order for this test script to execute.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    private $validated = null;

    /**
     * FHIRTestScriptCapability Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRTestScriptCapability::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CAPABILITIES])) {
            if ($data[self::FIELD_CAPABILITIES] instanceof FHIRReference) {
                $this->setCapabilities($data[self::FIELD_CAPABILITIES]);
            } else {
                $this->setCapabilities(new FHIRReference($data[self::FIELD_CAPABILITIES]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRString) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRString($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_DESTINATION])) {
            $ext = (isset($data[self::FIELD_DESTINATION_EXT]) && is_array($data[self::FIELD_DESTINATION_EXT]))
                ? $data[self::FIELD_DESTINATION_EXT]
                : null;
            if ($data[self::FIELD_DESTINATION] instanceof FHIRInteger) {
                $this->setDestination($data[self::FIELD_DESTINATION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESTINATION])) {
                $this->setDestination(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_DESTINATION]] + $ext));
            } else {
                $this->setDestination(new FHIRInteger($data[self::FIELD_DESTINATION]));
            }
        }
        if (isset($data[self::FIELD_LINK])) {
            $ext = (isset($data[self::FIELD_LINK_EXT]) && is_array($data[self::FIELD_LINK_EXT]))
                ? $data[self::FIELD_LINK_EXT]
                : null;
            if (is_array($data[self::FIELD_LINK])) {
                foreach($data[self::FIELD_LINK] as $i => $v) {
                    if ($v instanceof FHIRUri) {
                        $this->addLink($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addLink(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addLink(new FHIRUri($v));
                    }
                }
            } elseif ($data[self::FIELD_LINK] instanceof FHIRUri) {
                $this->addLink($data[self::FIELD_LINK]);
            } elseif ($ext && is_scalar($data[self::FIELD_LINK])) {
                $this->addLink(new FHIRUri([FHIRUri::FIELD_VALUE => $data[self::FIELD_LINK]] + $ext));
            } else {
                $this->addLink(new FHIRUri($data[self::FIELD_LINK]));
            }
        }
        if (isset($data[self::FIELD_ORIGIN])) {
            $ext = (isset($data[self::FIELD_ORIGIN_EXT]) && is_array($data[self::FIELD_ORIGIN_EXT]))
                ? $data[self::FIELD_ORIGIN_EXT]
                : null;
            if (is_array($data[self::FIELD_ORIGIN])) {
                foreach($data[self::FIELD_ORIGIN] as $i => $v) {
                    if ($v instanceof FHIRInteger) {
                        $this->addOrigin($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addOrigin(new FHIRInteger([FHIRInteger::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addOrigin(new FHIRInteger($v));
                    }
                }
            } elseif ($data[self::FIELD_ORIGIN] instanceof FHIRInteger) {
                $this->addOrigin($data[self::FIELD_ORIGIN]);
            } elseif ($ext && is_scalar($data[self::FIELD_ORIGIN])) {
                $this->addOrigin(new FHIRInteger([FHIRInteger::FIELD_VALUE => $data[self::FIELD_ORIGIN]] + $ext));
            } else {
                $this->addOrigin(new FHIRInteger($data[self::FIELD_ORIGIN]));
            }
        }
        if (isset($data[self::FIELD_REQUIRED])) {
            $ext = (isset($data[self::FIELD_REQUIRED_EXT]) && is_array($data[self::FIELD_REQUIRED_EXT]))
                ? $data[self::FIELD_REQUIRED_EXT]
                : null;
            if ($data[self::FIELD_REQUIRED] instanceof FHIRBoolean) {
                $this->setRequired($data[self::FIELD_REQUIRED]);
            } elseif ($ext && is_scalar($data[self::FIELD_REQUIRED])) {
                $this->setRequired(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_REQUIRED]] + $ext));
            } else {
                $this->setRequired(new FHIRBoolean($data[self::FIELD_REQUIRED]));
            }
        }
        if (isset($data[self::FIELD_VALIDATED])) {
            $ext = (isset($data[self::FIELD_VALIDATED_EXT]) && is_array($data[self::FIELD_VALIDATED_EXT]))
                ? $data[self::FIELD_VALIDATED_EXT]
                : null;
            if ($data[self::FIELD_VALIDATED] instanceof FHIRBoolean) {
                $this->setValidated($data[self::FIELD_VALIDATED]);
            } elseif ($ext && is_scalar($data[self::FIELD_VALIDATED])) {
                $this->setValidated(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_VALIDATED]] + $ext));
            } else {
                $this->setValidated(new FHIRBoolean($data[self::FIELD_VALIDATED]));
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
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
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
        return "<TestScriptCapability{$xmlns}></TestScriptCapability>";
    }


    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Minimum capabilities required of server for test script to execute successfully.
     * If server does not meet at a minimum the referenced capability statement, then
     * all tests in this script are skipped.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference
     */
    public function getCapabilities()
    {
        return $this->capabilities;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Minimum capabilities required of server for test script to execute successfully.
     * If server does not meet at a minimum the referenced capability statement, then
     * all tests in this script are skipped.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference $capabilities
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability
     */
    public function setCapabilities(FHIRReference $capabilities = null)
    {
        $this->capabilities = $capabilities;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Description of the capabilities that this test script is requiring the server to
     * support.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Description of the capabilities that this test script is requiring the server to
     * support.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $description
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability
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
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Which server these requirements apply to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Which server these requirements apply to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $destination
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability
     */
    public function setDestination($destination = null)
    {
        if (null === $destination) {
            $this->destination = null;
            return $this;
        }
        if ($destination instanceof FHIRInteger) {
            $this->destination = $destination;
            return $this;
        }
        $this->destination = new FHIRInteger($destination);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Links to the FHIR specification that describes this interaction and the
     * resources involved in more detail.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Links to the FHIR specification that describes this interaction and the
     * resources involved in more detail.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri $link
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability
     */
    public function addLink($link = null)
    {
        if (null === $link) {
            $this->link = [];
            return $this;
        }
        if ($link instanceof FHIRUri) {
            $this->link[] = $link;
            return $this;
        }
        $this->link[] = new FHIRUri($link);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Links to the FHIR specification that describes this interaction and the
     * resources involved in more detail.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri[] $link
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability
     */
    public function setLink(array $link = [])
    {
        $this->link = [];
        if ([] === $link) {
            return $this;
        }
        foreach($link as $v) {
            if ($v instanceof FHIRUri) {
                $this->addLink($v);
            } else {
                $this->addLink(new FHIRUri($v));
            }
        }
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Which origin server these requirements apply to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger[]
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Which origin server these requirements apply to.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger $origin
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability
     */
    public function addOrigin($origin = null)
    {
        if (null === $origin) {
            $this->origin = [];
            return $this;
        }
        if ($origin instanceof FHIRInteger) {
            $this->origin[] = $origin;
            return $this;
        }
        $this->origin[] = new FHIRInteger($origin);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Which origin server these requirements apply to.
     *
     * @param \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger[] $origin
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability
     */
    public function setOrigin(array $origin = [])
    {
        $this->origin = [];
        if ([] === $origin) {
            return $this;
        }
        foreach($origin as $v) {
            if ($v instanceof FHIRInteger) {
                $this->addOrigin($v);
            } else {
                $this->addOrigin(new FHIRInteger($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether or not the test execution will require the given capabilities of the
     * server in order for this test script to execute.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether or not the test execution will require the given capabilities of the
     * server in order for this test script to execute.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $required
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability
     */
    public function setRequired($required = null)
    {
        if (null === $required) {
            $this->required = null;
            return $this;
        }
        if ($required instanceof FHIRBoolean) {
            $this->required = $required;
            return $this;
        }
        $this->required = new FHIRBoolean($required);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether or not the test execution will validate the given capabilities of the
     * server in order for this test script to execute.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean
     */
    public function getValidated()
    {
        return $this->validated;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether or not the test execution will validate the given capabilities of the
     * server in order for this test script to execute.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean $validated
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability
     */
    public function setValidated($validated = null)
    {
        if (null === $validated) {
            $this->validated = null;
            return $this;
        }
        if ($validated instanceof FHIRBoolean) {
            $this->validated = $validated;
            return $this;
        }
        $this->validated = new FHIRBoolean($validated);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability
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
                throw new \DomainException(sprintf('FHIRTestScriptCapability::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRTestScriptCapability::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRTestScriptCapability;
        } elseif (!is_object($type) || !($type instanceof FHIRTestScriptCapability)) {
            throw new \RuntimeException(sprintf(
                'FHIRTestScriptCapability::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability or null, %s seen.',
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
        if (isset($children->capabilities)) {
            $type->setCapabilities(FHIRReference::xmlUnserialize($children->capabilities));
        }
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRString::xmlUnserialize($children->description));
        }
        if (isset($attributes->destination)) {
            $type->setDestination((string)$attributes->destination);
        }
        if (isset($children->destination)) {
            $type->setDestination(FHIRInteger::xmlUnserialize($children->destination));
        }
        if (isset($attributes->link)) {
            $type->addLink((string)$attributes->link);
        }
        if (isset($children->link)) {
            foreach($children->link as $child) {
                $type->addLink(FHIRUri::xmlUnserialize($child));
            }
        }
        if (isset($attributes->origin)) {
            $type->addOrigin((string)$attributes->origin);
        }
        if (isset($children->origin)) {
            foreach($children->origin as $child) {
                $type->addOrigin(FHIRInteger::xmlUnserialize($child));
            }
        }
        if (isset($attributes->required)) {
            $type->setRequired((string)$attributes->required);
        }
        if (isset($children->required)) {
            $type->setRequired(FHIRBoolean::xmlUnserialize($children->required));
        }
        if (isset($attributes->validated)) {
            $type->setValidated((string)$attributes->validated);
        }
        if (isset($children->validated)) {
            $type->setValidated(FHIRBoolean::xmlUnserialize($children->validated));
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

        if (null !== ($v = $this->getCapabilities())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CAPABILITIES, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDestination())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESTINATION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getLink())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_LINK, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getOrigin())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ORIGIN, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRequired())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUIRED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getValidated())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_VALIDATED, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getCapabilities())) {
            $a[self::FIELD_CAPABILITIES] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_DESCRIPTION_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getDestination())) {
            $a[self::FIELD_DESTINATION] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_DESTINATION_EXT] = $v;
            }
        }
        if ([] !== ($vs = $this->getLink())) {
            $a[self::FIELD_LINK] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_LINK][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_LINK_EXT])) {
                        $a[self::FIELD_LINK_EXT] = [];
                    }
                    $a[self::FIELD_LINK_EXT][] = $v;
                }
            }
        }
        if ([] !== ($vs = $this->getOrigin())) {
            $a[self::FIELD_ORIGIN] = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ORIGIN][] = $v->getValue();
                if ($v->_hasNonValueFieldsDefined()) {
                    if (!isset($a[self::FIELD_ORIGIN_EXT])) {
                        $a[self::FIELD_ORIGIN_EXT] = [];
                    }
                    $a[self::FIELD_ORIGIN_EXT][] = $v;
                }
            }
        }
        if (null !== ($v = $this->getRequired())) {
            $a[self::FIELD_REQUIRED] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_REQUIRED_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getValidated())) {
            $a[self::FIELD_VALIDATED] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_VALIDATED_EXT] = $v;
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