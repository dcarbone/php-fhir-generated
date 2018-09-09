<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario;

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
use PHPFHIRGenerated\FHIRElement\FHIRBoolean;
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Example of workflow instance.
 *
 * Class FHIRExampleScenarioOperation
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario
 */
class FHIRExampleScenarioOperation extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ExampleScenario.Operation';

    /**
     * A comment to be inserted in the diagram.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * Who starts the transaction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $initiator = null;

    /**
     * Whether the initiator is deactivated right after the transaction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $initiatorActive = null;

    /**
     * The human-friendly name of the interaction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The sequential number of the interaction, e.g. 1.2.5.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $number = null;

    /**
     * Who receives the transaction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $receiver = null;

    /**
     * Whether the receiver is deactivated right after the transaction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $receiverActive = null;

    /**
     * Each resource instance used by the initiator.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     */
    public $request = null;

    /**
     * Each resource instance used by the responder.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     */
    public $response = null;

    /**
     * The type of operation - CRUD.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $type = null;

    /**
     * FHIRExampleScenarioOperation Constructor
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
            if (isset($data['initiator'])) {
                $this->setInitiator($data['initiator']);
            }
            if (isset($data['initiatorActive'])) {
                $this->setInitiatorActive($data['initiatorActive']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['number'])) {
                $this->setNumber($data['number']);
            }
            if (isset($data['receiver'])) {
                $this->setReceiver($data['receiver']);
            }
            if (isset($data['receiverActive'])) {
                $this->setReceiverActive($data['receiverActive']);
            }
            if (isset($data['request'])) {
                $this->setRequest($data['request']);
            }
            if (isset($data['response'])) {
                $this->setResponse($data['response']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A comment to be inserted in the diagram.
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
                'FHIRExampleScenarioOperation::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A comment to be inserted in the diagram.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Who starts the transaction.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setInitiator($initiator)
    {
        if (null === $initiator) {
            return $this; 
        }
        if (is_scalar($initiator)) {
            $initiator = new FHIRString($initiator);
        }
        if (!($initiator instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExampleScenarioOperation::setInitiator - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($initiator)
            ));
        }
        $this->initiator = $initiator;
        return $this;
    }

    /**
     * Who starts the transaction.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getInitiator()
    {
        return $this->initiator;
    }


    /**
     * Whether the initiator is deactivated right after the transaction.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setInitiatorActive($initiatorActive)
    {
        if (null === $initiatorActive) {
            return $this; 
        }
        if (is_scalar($initiatorActive)) {
            $initiatorActive = new FHIRBoolean($initiatorActive);
        }
        if (!($initiatorActive instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExampleScenarioOperation::setInitiatorActive - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($initiatorActive)
            ));
        }
        $this->initiatorActive = $initiatorActive;
        return $this;
    }

    /**
     * Whether the initiator is deactivated right after the transaction.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getInitiatorActive()
    {
        return $this->initiatorActive;
    }


    /**
     * The human-friendly name of the interaction.
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
                'FHIRExampleScenarioOperation::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * The human-friendly name of the interaction.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * The sequential number of the interaction, e.g. 1.2.5.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setNumber($number)
    {
        if (null === $number) {
            return $this; 
        }
        if (is_scalar($number)) {
            $number = new FHIRString($number);
        }
        if (!($number instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExampleScenarioOperation::setNumber - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($number)
            ));
        }
        $this->number = $number;
        return $this;
    }

    /**
     * The sequential number of the interaction, e.g. 1.2.5.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getNumber()
    {
        return $this->number;
    }


    /**
     * Who receives the transaction.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setReceiver($receiver)
    {
        if (null === $receiver) {
            return $this; 
        }
        if (is_scalar($receiver)) {
            $receiver = new FHIRString($receiver);
        }
        if (!($receiver instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExampleScenarioOperation::setReceiver - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($receiver)
            ));
        }
        $this->receiver = $receiver;
        return $this;
    }

    /**
     * Who receives the transaction.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getReceiver()
    {
        return $this->receiver;
    }


    /**
     * Whether the receiver is deactivated right after the transaction.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setReceiverActive($receiverActive)
    {
        if (null === $receiverActive) {
            return $this; 
        }
        if (is_scalar($receiverActive)) {
            $receiverActive = new FHIRBoolean($receiverActive);
        }
        if (!($receiverActive instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExampleScenarioOperation::setReceiverActive - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($receiverActive)
            ));
        }
        $this->receiverActive = $receiverActive;
        return $this;
    }

    /**
     * Whether the receiver is deactivated right after the transaction.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getReceiverActive()
    {
        return $this->receiverActive;
    }


    /**
     * Each resource instance used by the initiator.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     * @return $this
     */
    public function setRequest(FHIRExampleScenarioContainedInstance $request = null)
    {
        if (null === $request) {
            return $this; 
        }
        $this->request = $request;
        return $this;
    }

    /**
     * Each resource instance used by the initiator.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     */
    public function getRequest()
    {
        return $this->request;
    }


    /**
     * Each resource instance used by the responder.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     * @return $this
     */
    public function setResponse(FHIRExampleScenarioContainedInstance $response = null)
    {
        if (null === $response) {
            return $this; 
        }
        $this->response = $response;
        return $this;
    }

    /**
     * Each resource instance used by the responder.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     */
    public function getResponse()
    {
        return $this->response;
    }


    /**
     * The type of operation - CRUD.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRString($type);
        }
        if (!($type instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExampleScenarioOperation::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * The type of operation - CRUD.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getType()
    {
        return $this->type;
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
        if (null !== ($v = $this->getInitiator())) {
            $a['initiator'] = $v;
        }
        if (null !== ($v = $this->getInitiatorActive())) {
            $a['initiatorActive'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getNumber())) {
            $a['number'] = $v;
        }
        if (null !== ($v = $this->getReceiver())) {
            $a['receiver'] = $v;
        }
        if (null !== ($v = $this->getReceiverActive())) {
            $a['receiverActive'] = $v;
        }
        if (null !== ($v = $this->getRequest())) {
            $a['request'] = $v;
        }
        if (null !== ($v = $this->getResponse())) {
            $a['response'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
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
            $sxe = new \SimpleXMLElement('<ExampleScenarioOperation xmlns="http://hl7.org/fhir"></ExampleScenarioOperation>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}