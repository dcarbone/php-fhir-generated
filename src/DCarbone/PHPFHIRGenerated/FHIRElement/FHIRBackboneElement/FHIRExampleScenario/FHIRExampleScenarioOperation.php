<?php

namespace DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 27th, 2019 15:22+0000
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
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\PHPFHIRTypeInterface;

/**
 * Example of workflow instance.
 *
 * Class FHIRExampleScenarioOperation
 * @package \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario
 */
class FHIRExampleScenarioOperation extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_OPERATION;

    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_INITIATOR = 'initiator';
    const FIELD_INITIATOR_EXT = '_initiator';
    const FIELD_INITIATOR_ACTIVE = 'initiatorActive';
    const FIELD_INITIATOR_ACTIVE_EXT = '_initiatorActive';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_NUMBER = 'number';
    const FIELD_NUMBER_EXT = '_number';
    const FIELD_RECEIVER = 'receiver';
    const FIELD_RECEIVER_EXT = '_receiver';
    const FIELD_RECEIVER_ACTIVE = 'receiverActive';
    const FIELD_RECEIVER_ACTIVE_EXT = '_receiverActive';
    const FIELD_REQUEST = 'request';
    const FIELD_RESPONSE = 'response';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A comment to be inserted in the diagram.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    private $description = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Who starts the transaction.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $initiator = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the initiator is deactivated right after the transaction.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $initiatorActive = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The human-friendly name of the interaction.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $name = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The sequential number of the interaction, e.g. 1.2.5.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $number = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Who receives the transaction.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $receiver = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the receiver is deactivated right after the transaction.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    private $receiverActive = null;

    /**
     * Example of workflow instance.
     *
     * Each resource instance used by the initiator.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     */
    private $request = null;

    /**
     * Example of workflow instance.
     *
     * Each resource instance used by the responder.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     */
    private $response = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of operation - CRUD.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    private $type = null;

    /**
     * FHIRExampleScenarioOperation Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExampleScenarioOperation::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DESCRIPTION])) {
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT]))
                ? $data[self::FIELD_DESCRIPTION_EXT]
                : null;
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRMarkdown) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } elseif ($ext && is_scalar($data[self::FIELD_DESCRIPTION])) {
                $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $data[self::FIELD_DESCRIPTION]] + $ext));
            } else {
                $this->setDescription(new FHIRMarkdown($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_INITIATOR])) {
            $ext = (isset($data[self::FIELD_INITIATOR_EXT]) && is_array($data[self::FIELD_INITIATOR_EXT]))
                ? $data[self::FIELD_INITIATOR_EXT]
                : null;
            if ($data[self::FIELD_INITIATOR] instanceof FHIRString) {
                $this->setInitiator($data[self::FIELD_INITIATOR]);
            } elseif ($ext && is_scalar($data[self::FIELD_INITIATOR])) {
                $this->setInitiator(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_INITIATOR]] + $ext));
            } else {
                $this->setInitiator(new FHIRString($data[self::FIELD_INITIATOR]));
            }
        }
        if (isset($data[self::FIELD_INITIATOR_ACTIVE])) {
            $ext = (isset($data[self::FIELD_INITIATOR_ACTIVE_EXT]) && is_array($data[self::FIELD_INITIATOR_ACTIVE_EXT]))
                ? $data[self::FIELD_INITIATOR_ACTIVE_EXT]
                : null;
            if ($data[self::FIELD_INITIATOR_ACTIVE] instanceof FHIRBoolean) {
                $this->setInitiatorActive($data[self::FIELD_INITIATOR_ACTIVE]);
            } elseif ($ext && is_scalar($data[self::FIELD_INITIATOR_ACTIVE])) {
                $this->setInitiatorActive(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_INITIATOR_ACTIVE]] + $ext));
            } else {
                $this->setInitiatorActive(new FHIRBoolean($data[self::FIELD_INITIATOR_ACTIVE]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT]))
                ? $data[self::FIELD_NAME_EXT]
                : null;
            if ($data[self::FIELD_NAME] instanceof FHIRString) {
                $this->setName($data[self::FIELD_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_NAME])) {
                $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NAME]] + $ext));
            } else {
                $this->setName(new FHIRString($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_NUMBER])) {
            $ext = (isset($data[self::FIELD_NUMBER_EXT]) && is_array($data[self::FIELD_NUMBER_EXT]))
                ? $data[self::FIELD_NUMBER_EXT]
                : null;
            if ($data[self::FIELD_NUMBER] instanceof FHIRString) {
                $this->setNumber($data[self::FIELD_NUMBER]);
            } elseif ($ext && is_scalar($data[self::FIELD_NUMBER])) {
                $this->setNumber(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NUMBER]] + $ext));
            } else {
                $this->setNumber(new FHIRString($data[self::FIELD_NUMBER]));
            }
        }
        if (isset($data[self::FIELD_RECEIVER])) {
            $ext = (isset($data[self::FIELD_RECEIVER_EXT]) && is_array($data[self::FIELD_RECEIVER_EXT]))
                ? $data[self::FIELD_RECEIVER_EXT]
                : null;
            if ($data[self::FIELD_RECEIVER] instanceof FHIRString) {
                $this->setReceiver($data[self::FIELD_RECEIVER]);
            } elseif ($ext && is_scalar($data[self::FIELD_RECEIVER])) {
                $this->setReceiver(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_RECEIVER]] + $ext));
            } else {
                $this->setReceiver(new FHIRString($data[self::FIELD_RECEIVER]));
            }
        }
        if (isset($data[self::FIELD_RECEIVER_ACTIVE])) {
            $ext = (isset($data[self::FIELD_RECEIVER_ACTIVE_EXT]) && is_array($data[self::FIELD_RECEIVER_ACTIVE_EXT]))
                ? $data[self::FIELD_RECEIVER_ACTIVE_EXT]
                : null;
            if ($data[self::FIELD_RECEIVER_ACTIVE] instanceof FHIRBoolean) {
                $this->setReceiverActive($data[self::FIELD_RECEIVER_ACTIVE]);
            } elseif ($ext && is_scalar($data[self::FIELD_RECEIVER_ACTIVE])) {
                $this->setReceiverActive(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_RECEIVER_ACTIVE]] + $ext));
            } else {
                $this->setReceiverActive(new FHIRBoolean($data[self::FIELD_RECEIVER_ACTIVE]));
            }
        }
        if (isset($data[self::FIELD_REQUEST])) {
            if ($data[self::FIELD_REQUEST] instanceof FHIRExampleScenarioContainedInstance) {
                $this->setRequest($data[self::FIELD_REQUEST]);
            } else {
                $this->setRequest(new FHIRExampleScenarioContainedInstance($data[self::FIELD_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_RESPONSE])) {
            if ($data[self::FIELD_RESPONSE] instanceof FHIRExampleScenarioContainedInstance) {
                $this->setResponse($data[self::FIELD_RESPONSE]);
            } else {
                $this->setResponse(new FHIRExampleScenarioContainedInstance($data[self::FIELD_RESPONSE]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT]))
                ? $data[self::FIELD_TYPE_EXT]
                : null;
            if ($data[self::FIELD_TYPE] instanceof FHIRString) {
                $this->setType($data[self::FIELD_TYPE]);
            } elseif ($ext && is_scalar($data[self::FIELD_TYPE])) {
                $this->setType(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_TYPE]] + $ext));
            } else {
                $this->setType(new FHIRString($data[self::FIELD_TYPE]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A comment to be inserted in the diagram.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a @value, an @id referenced from
     * the Narrative, or extensions
     *
     * A comment to be inserted in the diagram.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRMarkdown $description
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    public function setDescription($description = null)
    {
        if (null === $description) {
            $this->description = null;
            return $this;
        }
        if ($description instanceof FHIRMarkdown) {
            $this->description = $description;
            return $this;
        }
        $this->description = new FHIRMarkdown($description);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Who starts the transaction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getInitiator()
    {
        return $this->initiator;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Who starts the transaction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $initiator
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    public function setInitiator($initiator = null)
    {
        if (null === $initiator) {
            $this->initiator = null;
            return $this;
        }
        if ($initiator instanceof FHIRString) {
            $this->initiator = $initiator;
            return $this;
        }
        $this->initiator = new FHIRString($initiator);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the initiator is deactivated right after the transaction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getInitiatorActive()
    {
        return $this->initiatorActive;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the initiator is deactivated right after the transaction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean $initiatorActive
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    public function setInitiatorActive($initiatorActive = null)
    {
        if (null === $initiatorActive) {
            $this->initiatorActive = null;
            return $this;
        }
        if ($initiatorActive instanceof FHIRBoolean) {
            $this->initiatorActive = $initiatorActive;
            return $this;
        }
        $this->initiatorActive = new FHIRBoolean($initiatorActive);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The human-friendly name of the interaction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The human-friendly name of the interaction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $name
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The sequential number of the interaction, e.g. 1.2.5.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The sequential number of the interaction, e.g. 1.2.5.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $number
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    public function setNumber($number = null)
    {
        if (null === $number) {
            $this->number = null;
            return $this;
        }
        if ($number instanceof FHIRString) {
            $this->number = $number;
            return $this;
        }
        $this->number = new FHIRString($number);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Who receives the transaction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Who receives the transaction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $receiver
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    public function setReceiver($receiver = null)
    {
        if (null === $receiver) {
            $this->receiver = null;
            return $this;
        }
        if ($receiver instanceof FHIRString) {
            $this->receiver = $receiver;
            return $this;
        }
        $this->receiver = new FHIRString($receiver);
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the receiver is deactivated right after the transaction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getReceiverActive()
    {
        return $this->receiverActive;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Whether the receiver is deactivated right after the transaction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBoolean $receiverActive
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    public function setReceiverActive($receiverActive = null)
    {
        if (null === $receiverActive) {
            $this->receiverActive = null;
            return $this;
        }
        if ($receiverActive instanceof FHIRBoolean) {
            $this->receiverActive = $receiverActive;
            return $this;
        }
        $this->receiverActive = new FHIRBoolean($receiverActive);
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Each resource instance used by the initiator.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Example of workflow instance.
     *
     * Each resource instance used by the initiator.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance $request
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    public function setRequest(FHIRExampleScenarioContainedInstance $request = null)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Example of workflow instance.
     *
     * Each resource instance used by the responder.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Example of workflow instance.
     *
     * Each resource instance used by the responder.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance $response
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    public function setResponse(FHIRExampleScenarioContainedInstance $response = null)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of operation - CRUD.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * The type of operation - CRUD.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRString $type
     * @return \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    public function setType($type = null)
    {
        if (null === $type) {
            $this->type = null;
            return $this;
        }
        if ($type instanceof FHIRString) {
            $this->type = $type;
            return $this;
        }
        $this->type = new FHIRString($type);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null \$sxe
     * @param null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation $type
     * @return null|\DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRExampleScenarioOperation::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRExampleScenarioOperation::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRBackboneElement::xmlUnserialize(\$sxe, new FHIRExampleScenarioOperation);
        } elseif (!is_object($type) || !($type instanceof FHIRExampleScenarioOperation)) {
            throw new \RuntimeException(sprintf(
                'FHIRExampleScenarioOperation::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->description)) {
            $type->setDescription((string)$attributes->description);
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRMarkdown::xmlUnserialize($children->description));
        }
        if (isset($attributes->initiator)) {
            $type->setInitiator((string)$attributes->initiator);
        }
        if (isset($children->initiator)) {
            $type->setInitiator(FHIRString::xmlUnserialize($children->initiator));
        }
        if (isset($attributes->initiatorActive)) {
            $type->setInitiatorActive((string)$attributes->initiatorActive);
        }
        if (isset($children->initiatorActive)) {
            $type->setInitiatorActive(FHIRBoolean::xmlUnserialize($children->initiatorActive));
        }
        if (isset($attributes->name)) {
            $type->setName((string)$attributes->name);
        }
        if (isset($children->name)) {
            $type->setName(FHIRString::xmlUnserialize($children->name));
        }
        if (isset($attributes->number)) {
            $type->setNumber((string)$attributes->number);
        }
        if (isset($children->number)) {
            $type->setNumber(FHIRString::xmlUnserialize($children->number));
        }
        if (isset($attributes->receiver)) {
            $type->setReceiver((string)$attributes->receiver);
        }
        if (isset($children->receiver)) {
            $type->setReceiver(FHIRString::xmlUnserialize($children->receiver));
        }
        if (isset($attributes->receiverActive)) {
            $type->setReceiverActive((string)$attributes->receiverActive);
        }
        if (isset($children->receiverActive)) {
            $type->setReceiverActive(FHIRBoolean::xmlUnserialize($children->receiverActive));
        }
        if (isset($children->request)) {
            $type->setRequest(FHIRExampleScenarioContainedInstance::xmlUnserialize($children->request));
        }
        if (isset($children->response)) {
            $type->setResponse(FHIRExampleScenarioContainedInstance::xmlUnserialize($children->response));
        }
        if (isset($attributes->type)) {
            $type->setType((string)$attributes->type);
        }
        if (isset($children->type)) {
            $type->setType(FHIRString::xmlUnserialize($children->type));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement \$sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ExampleScenarioOperation xmlns="http://hl7.org/fhir"></ExampleScenarioOperation>');
        }
        if (null !== ($v = $this->getDescription())) {
            $sxe->addAttribute(self::FIELD_DESCRIPTION, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION));
            }
        }
        if (null !== ($v = $this->getInitiator())) {
            $sxe->addAttribute(self::FIELD_INITIATOR, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_INITIATOR));
            }
        }
        if (null !== ($v = $this->getInitiatorActive())) {
            $sxe->addAttribute(self::FIELD_INITIATOR_ACTIVE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_INITIATOR_ACTIVE));
            }
        }
        if (null !== ($v = $this->getName())) {
            $sxe->addAttribute(self::FIELD_NAME, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_NAME));
            }
        }
        if (null !== ($v = $this->getNumber())) {
            $sxe->addAttribute(self::FIELD_NUMBER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_NUMBER));
            }
        }
        if (null !== ($v = $this->getReceiver())) {
            $sxe->addAttribute(self::FIELD_RECEIVER, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_RECEIVER));
            }
        }
        if (null !== ($v = $this->getReceiverActive())) {
            $sxe->addAttribute(self::FIELD_RECEIVER_ACTIVE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_RECEIVER_ACTIVE));
            }
        }
        if (null !== ($v = $this->getRequest())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUEST));
        }
        if (null !== ($v = $this->getResponse())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RESPONSE));
        }
        if (null !== ($v = $this->getType())) {
            $sxe->addAttribute(self::FIELD_TYPE, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE));
            }
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
            $a[self::FIELD_DESCRIPTION] = (string)$v;
            $a[self::FIELD_DESCRIPTION_EXT] = $v;
        }
        if (null !== ($v = $this->getInitiator())) {
            $a[self::FIELD_INITIATOR] = (string)$v;
            $a[self::FIELD_INITIATOR_EXT] = $v;
        }
        if (null !== ($v = $this->getInitiatorActive())) {
            $a[self::FIELD_INITIATOR_ACTIVE] = (string)$v;
            $a[self::FIELD_INITIATOR_ACTIVE_EXT] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a[self::FIELD_NAME] = (string)$v;
            $a[self::FIELD_NAME_EXT] = $v;
        }
        if (null !== ($v = $this->getNumber())) {
            $a[self::FIELD_NUMBER] = (string)$v;
            $a[self::FIELD_NUMBER_EXT] = $v;
        }
        if (null !== ($v = $this->getReceiver())) {
            $a[self::FIELD_RECEIVER] = (string)$v;
            $a[self::FIELD_RECEIVER_EXT] = $v;
        }
        if (null !== ($v = $this->getReceiverActive())) {
            $a[self::FIELD_RECEIVER_ACTIVE] = (string)$v;
            $a[self::FIELD_RECEIVER_ACTIVE_EXT] = $v;
        }
        if (null !== ($v = $this->getRequest())) {
            $a[self::FIELD_REQUEST] = $v;
        }
        if (null !== ($v = $this->getResponse())) {
            $a[self::FIELD_RESPONSE] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = (string)$v;
            $a[self::FIELD_TYPE_EXT] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}