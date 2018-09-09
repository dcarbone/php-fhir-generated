<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide;

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
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use PHPFHIRGenerated\FHIRElement\FHIRString;

/**
 * A set of rules of how FHIR is used to solve a particular problem. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 *
 * Class FHIRImplementationGuideResource
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide
 */
class FHIRImplementationGuideResource extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ImplementationGuide.Resource';

    /**
     * A description of the reason that a resource has been included in the implementation guide.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * If true or a reference, indicates the resource is an example instance.  If a reference is present, indicates that the example is an example of the specified profile.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $exampleBoolean = null;

    /**
     * If true or a reference, indicates the resource is an example instance.  If a reference is present, indicates that the example is an example of the specified profile.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $exampleCanonical = null;

    /**
     * A human assigned name for the resource. All resources SHOULD have a name, but the name may be extracted from the resource (e.g. ValueSet.name).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Reference to the id of the pack this resource appears in.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $package = null;

    /**
     * Where this resource is found.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reference = null;

    /**
     * FHIRImplementationGuideResource Constructor
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
            if (isset($data['exampleBoolean'])) {
                $this->setExampleBoolean($data['exampleBoolean']);
            }
            if (isset($data['exampleCanonical'])) {
                $this->setExampleCanonical($data['exampleCanonical']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['package'])) {
                $this->setPackage($data['package']);
            }
            if (isset($data['reference'])) {
                $this->setReference($data['reference']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * A description of the reason that a resource has been included in the implementation guide.
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
                'FHIRImplementationGuideResource::setDescription - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($description)
            ));
        }
        $this->description = $description;
        return $this;
    }

    /**
     * A description of the reason that a resource has been included in the implementation guide.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * If true or a reference, indicates the resource is an example instance.  If a reference is present, indicates that the example is an example of the specified profile.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     * @return $this
     */
    public function setExampleBoolean($exampleBoolean)
    {
        if (null === $exampleBoolean) {
            return $this; 
        }
        if (is_scalar($exampleBoolean)) {
            $exampleBoolean = new FHIRBoolean($exampleBoolean);
        }
        if (!($exampleBoolean instanceof FHIRBoolean)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImplementationGuideResource::setExampleBoolean - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRBoolean or appropriate scalar value, %s seen.',
                gettype($exampleBoolean)
            ));
        }
        $this->exampleBoolean = $exampleBoolean;
        return $this;
    }

    /**
     * If true or a reference, indicates the resource is an example instance.  If a reference is present, indicates that the example is an example of the specified profile.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExampleBoolean()
    {
        return $this->exampleBoolean;
    }


    /**
     * If true or a reference, indicates the resource is an example instance.  If a reference is present, indicates that the example is an example of the specified profile.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setExampleCanonical($exampleCanonical)
    {
        if (null === $exampleCanonical) {
            return $this; 
        }
        if (is_scalar($exampleCanonical)) {
            $exampleCanonical = new FHIRCanonical($exampleCanonical);
        }
        if (!($exampleCanonical instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImplementationGuideResource::setExampleCanonical - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($exampleCanonical)
            ));
        }
        $this->exampleCanonical = $exampleCanonical;
        return $this;
    }

    /**
     * If true or a reference, indicates the resource is an example instance.  If a reference is present, indicates that the example is an example of the specified profile.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getExampleCanonical()
    {
        return $this->exampleCanonical;
    }


    /**
     * A human assigned name for the resource. All resources SHOULD have a name, but the name may be extracted from the resource (e.g. ValueSet.name).
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
                'FHIRImplementationGuideResource::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * A human assigned name for the resource. All resources SHOULD have a name, but the name may be extracted from the resource (e.g. ValueSet.name).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Reference to the id of the pack this resource appears in.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRId
     * @return $this
     */
    public function setPackage($package)
    {
        if (null === $package) {
            return $this; 
        }
        if (is_scalar($package)) {
            $package = new FHIRId($package);
        }
        if (!($package instanceof FHIRId)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRImplementationGuideResource::setPackage - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRId or appropriate scalar value, %s seen.',
                gettype($package)
            ));
        }
        $this->package = $package;
        return $this;
    }

    /**
     * Reference to the id of the pack this resource appears in.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getPackage()
    {
        return $this->package;
    }


    /**
     * Where this resource is found.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     * @return $this
     */
    public function setReference(FHIRReference $reference = null)
    {
        if (null === $reference) {
            return $this; 
        }
        $this->reference = $reference;
        return $this;
    }

    /**
     * Where this resource is found.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReference()
    {
        return $this->reference;
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
        if (null !== ($v = $this->getExampleBoolean())) {
            $a['exampleBoolean'] = $v;
        }
        if (null !== ($v = $this->getExampleCanonical())) {
            $a['exampleCanonical'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getPackage())) {
            $a['package'] = $v;
        }
        if (null !== ($v = $this->getReference())) {
            $a['reference'] = $v;
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
            $sxe = new \SimpleXMLElement('<ImplementationGuideResource xmlns="http://hl7.org/fhir"></ImplementationGuideResource>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}