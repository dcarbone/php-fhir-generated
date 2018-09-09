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
use PHPFHIRGenerated\FHIRElement\FHIRMarkdown;
use PHPFHIRGenerated\FHIRElement\FHIRResourceType;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * Example of workflow instance.
 *
 * Class FHIRExampleScenarioInstance
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario
 */
class FHIRExampleScenarioInstance extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ExampleScenario.Instance';

    /**
     * Resources contained in the instance (e.g. the observations contained in a bundle).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     */
    public $containedInstance = null;

    /**
     * Human-friendly description of the resource instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * A short name for the resource instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The id of the resource for referencing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $resourceId = null;

    /**
     * The type of the resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResourceType
     */
    public $resourceType = null;

    /**
     * A specific version of the resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioVersion
     */
    public $version = null;

    /**
     * FHIRExampleScenarioInstance Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['containedInstance'])) {
                $this->setContainedInstance($data['containedInstance']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['resourceId'])) {
                $this->setResourceId($data['resourceId']);
            }
            if (isset($data['resourceType'])) {
                $this->setResourceType($data['resourceType']);
            }
            if (isset($data['version'])) {
                $this->setVersion($data['version']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioInstance::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Resources contained in the instance (e.g. the observations contained in a bundle).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     * @return $this
     */
    public function setContainedInstance(FHIRExampleScenarioContainedInstance $containedInstance = null)
    {
        if (null === $containedInstance) {
            return $this; 
        }
        $this->containedInstance = $containedInstance;
        return $this;
    }

    /**
     * Resources contained in the instance (e.g. the observations contained in a bundle).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance
     */
    public function getContainedInstance()
    {
        return $this->containedInstance;
    }


    /**
     * Human-friendly description of the resource instance.
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
                'FHIRExampleScenarioInstance::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRMarkdown or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * Human-friendly description of the resource instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * A short name for the resource instance.
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
                'FHIRExampleScenarioInstance::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A short name for the resource instance.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * The id of the resource for referencing.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setResourceId($resourceId)
    {
        if (null === $resourceId) {
            return $this; 
        }
        if (is_scalar($resourceId)) {
            $resourceId = new FHIRString($resourceId);
        }
        if (!($resourceId instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExampleScenarioInstance::setResourceId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($resourceId)
            ));
        }
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * The id of the resource for referencing.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }


    /**
     * The type of the resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRResourceType
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        if (null === $resourceType) {
            return $this; 
        }
        if (is_scalar($resourceType)) {
            $resourceType = new FHIRResourceType($resourceType);
        }
        if (!($resourceType instanceof FHIRResourceType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRExampleScenarioInstance::setResourceType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRResourceType or appropriate scalar value, %s seen.',
                gettype($resourceType)
            ));
        }
        $this->resourceType = $resourceType;
        return $this;
    }

    /**
     * The type of the resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRResourceType
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }


    /**
     * A specific version of the resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioVersion
     * @return $this
     */
    public function setVersion(FHIRExampleScenarioVersion $version = null)
    {
        if (null === $version) {
            return $this; 
        }
        $this->version = $version;
        return $this;
    }

    /**
     * A specific version of the resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioVersion
     */
    public function getVersion()
    {
        return $this->version;
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
        if (null !== ($v = $this->getContainedInstance())) {
            $a['containedInstance'] = $v;
        }
        if (null !== ($v = $this->getDescription())) {
            $a['description'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getResourceId())) {
            $a['resourceId'] = $v;
        }
        if (null !== ($v = $this->getResourceType())) {
            $a['resourceType'] = $v;
        }
        if (null !== ($v = $this->getVersion())) {
            $a['version'] = $v;
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
            $sxe = new \SimpleXMLElement('<ExampleScenarioInstance xmlns="http://hl7.org/fhir"></ExampleScenarioInstance>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}