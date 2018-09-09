<?php

namespace PHPFHIRGenerated\FHIRResource;

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

use PHPFHIRGenerated;
use PHPFHIRGenerated\FHIRElement\FHIRExtension;
use PHPFHIRGenerated\FHIRElement\FHIRNarrative;
use PHPFHIRGenerated\FHIRResource;
use PHPFHIRGenerated\FHIRResourceContainer;

/**
 * A resource that includes narrative, extensions, and contained resources.
 *
 * Class FHIRDomainResource
 * @package PHPFHIRGenerated\FHIRResource
 */
class FHIRDomainResource extends FHIRResource implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'DomainResource';

    /**
     * These resources do not have an independent existence apart from the resource that contains them - they cannot be identified independently, and nor can they have their own independent transaction scope.
     * @var \PHPFHIRGenerated\FHIRResourceContainer
     */
    public $contained = null;

    /**
     * May be used to represent additional information that is not part of the basic definition of the resource. To make the use of extensions safe and manageable, there is a strict set of governance  applied to the definition and use of extensions. Though any implementer can define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExtension
     */
    public $extension = null;

    /**
     * May be used to represent additional information that is not part of the basic definition of the resource, and that modifies the understanding of the element that contains it. Usually modifier elements provide negation or qualification. To make the use of extensions safe and manageable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer is allowed to define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension. Applications processing a resource are required to check for modifier extensions.

Modifier extensions SHALL NOT change the meaning of any elements on Resource or DomainResource (including cannot change the meaning of modifierExtension itself).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExtension
     */
    public $modifierExtension = null;

    /**
     * A human-readable narrative that contains a summary of the resource and can be used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative. Resource definitions may define what content should be represented in the narrative to ensure clinical safety.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRNarrative
     */
    public $text = null;

    /**
     * FHIRDomainResource Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['contained'])) {
                $this->setContained($data['contained']);
            }
            if (isset($data['extension'])) {
                $this->setExtension($data['extension']);
            }
            if (isset($data['modifierExtension'])) {
                $this->setModifierExtension($data['modifierExtension']);
            }
            if (isset($data['text'])) {
                $this->setText($data['text']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRResource\FHIRDomainResource::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * These resources do not have an independent existence apart from the resource that contains them - they cannot be identified independently, and nor can they have their own independent transaction scope.
     * @param null|mixed An instance of a FHIRResource or FHIRResourceContainer
     * @return $this
     */
    public function setContained($contained = null)
    {
        if (null === $contained) {
            return $this; 
        }
        if ($contained instanceof FHIRResource){
            $contained = new FHIRResourceContainer($contained);
        }
        if (!($contained instanceof FHIRResourceContainer)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRDomainResource::setContained - Argument expected to be instanceof FHIRResource, FHIRResourceContainer, or null, %s seen',
                gettype($contained)
            ));
        }
        $this->contained = $contained;
        return $this;
    }

    /**
     * These resources do not have an independent existence apart from the resource that contains them - they cannot be identified independently, and nor can they have their own independent transaction scope.
,
     * @return null|mixed
     */
    public function getContained()
    {
        return isset($this->contained) ? $this->contained->jsonSerialize() : null;
    }


    /**
     * May be used to represent additional information that is not part of the basic definition of the resource. To make the use of extensions safe and manageable, there is a strict set of governance  applied to the definition and use of extensions. Though any implementer can define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRExtension
     * @return $this
     */
    public function setExtension(FHIRExtension $extension = null)
    {
        if (null === $extension) {
            return $this; 
        }
        $this->extension = $extension;
        return $this;
    }

    /**
     * May be used to represent additional information that is not part of the basic definition of the resource. To make the use of extensions safe and manageable, there is a strict set of governance  applied to the definition and use of extensions. Though any implementer can define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRExtension
     */
    public function getExtension()
    {
        return $this->extension;
    }


    /**
     * May be used to represent additional information that is not part of the basic definition of the resource, and that modifies the understanding of the element that contains it. Usually modifier elements provide negation or qualification. To make the use of extensions safe and manageable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer is allowed to define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension. Applications processing a resource are required to check for modifier extensions.

Modifier extensions SHALL NOT change the meaning of any elements on Resource or DomainResource (including cannot change the meaning of modifierExtension itself).
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRExtension
     * @return $this
     */
    public function setModifierExtension(FHIRExtension $modifierExtension = null)
    {
        if (null === $modifierExtension) {
            return $this; 
        }
        $this->modifierExtension = $modifierExtension;
        return $this;
    }

    /**
     * May be used to represent additional information that is not part of the basic definition of the resource, and that modifies the understanding of the element that contains it. Usually modifier elements provide negation or qualification. To make the use of extensions safe and manageable, there is a strict set of governance applied to the definition and use of extensions. Though any implementer is allowed to define an extension, there is a set of requirements that SHALL be met as part of the definition of the extension. Applications processing a resource are required to check for modifier extensions.

Modifier extensions SHALL NOT change the meaning of any elements on Resource or DomainResource (including cannot change the meaning of modifierExtension itself).
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRExtension
     */
    public function getModifierExtension()
    {
        return $this->modifierExtension;
    }


    /**
     * A human-readable narrative that contains a summary of the resource and can be used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative. Resource definitions may define what content should be represented in the narrative to ensure clinical safety.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRNarrative
     * @return $this
     */
    public function setText(FHIRNarrative $text = null)
    {
        if (null === $text) {
            return $this; 
        }
        $this->text = $text;
        return $this;
    }

    /**
     * A human-readable narrative that contains a summary of the resource and can be used to represent the content of the resource to a human. The narrative need not encode all the structured data, but is required to contain sufficient detail to make it "clinically safe" for a human to just read the narrative. Resource definitions may define what content should be represented in the narrative to ensure clinical safety.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRNarrative
     */
    public function getText()
    {
        return $this->text;
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
        if (null !== ($v = $this->getContained())) {
            $a['contained'] = $v;
        }
        if (null !== ($v = $this->getExtension())) {
            $a['extension'] = $v;
        }
        if (null !== ($v = $this->getModifierExtension())) {
            $a['modifierExtension'] = $v;
        }
        if (null !== ($v = $this->getText())) {
            $a['text'] = $v;
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
            $sxe = new \SimpleXMLElement('<DomainResource xmlns="http://hl7.org/fhir"></DomainResource>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}