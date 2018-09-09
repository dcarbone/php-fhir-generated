<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition;

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

use PHPFHIRGenerated\FHIRElement\FHIRAggregationMode;
use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\FHIRElement\FHIRCanonical;
use PHPFHIRGenerated\FHIRElement\FHIRReferenceVersionRules;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 *
 * Class FHIRElementDefinitionType
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition
 */
class FHIRElementDefinitionType extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'ElementDefinition.Type';

    /**
     * If the type is a reference to another resource, how the resource is or can be aggregated - is it a contained resource, or a reference, and if the context is a bundle, is it included in the bundle.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAggregationMode
     */
    public $aggregation = null;

    /**
     * URL of Data type or Resource that is a(or the) type used for this element. References are URLs that are relative to http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed in logical models.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $code = null;

    /**
     * Identifies a profile structure or implementation Guide that applies to the datatype this element refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the type SHALL conform to at least one profile defined in the implementation guide.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $profile = null;

    /**
     * Used when the type is "Reference" or "canonical", and identifies a profile structure or implementation Guide that applies to the target of the reference this element refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the target resource SHALL conform to at least one profile defined in the implementation guide.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public $targetProfile = null;

    /**
     * Whether this reference needs to be version specific or version independent, or whether either can be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReferenceVersionRules
     */
    public $versioning = null;

    /**
     * FHIRElementDefinitionType Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['aggregation'])) {
                $this->setAggregation($data['aggregation']);
            }
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['profile'])) {
                $this->setProfile($data['profile']);
            }
            if (isset($data['targetProfile'])) {
                $this->setTargetProfile($data['targetProfile']);
            }
            if (isset($data['versioning'])) {
                $this->setVersioning($data['versioning']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionType::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * If the type is a reference to another resource, how the resource is or can be aggregated - is it a contained resource, or a reference, and if the context is a bundle, is it included in the bundle.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRAggregationMode
     * @return $this
     */
    public function setAggregation($aggregation)
    {
        if (null === $aggregation) {
            return $this; 
        }
        if (is_scalar($aggregation)) {
            $aggregation = new FHIRAggregationMode($aggregation);
        }
        if (!($aggregation instanceof FHIRAggregationMode)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionType::setAggregation - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRAggregationMode or appropriate scalar value, %s seen.',
                gettype($aggregation)
            ));
        }
        $this->aggregation = $aggregation;
        return $this;
    }

    /**
     * If the type is a reference to another resource, how the resource is or can be aggregated - is it a contained resource, or a reference, and if the context is a bundle, is it included in the bundle.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRAggregationMode
     */
    public function getAggregation()
    {
        return $this->aggregation;
    }


    /**
     * URL of Data type or Resource that is a(or the) type used for this element. References are URLs that are relative to http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed in logical models.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setCode($code)
    {
        if (null === $code) {
            return $this; 
        }
        if (is_scalar($code)) {
            $code = new FHIRUri($code);
        }
        if (!($code instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionType::setCode - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($code)
            ));
        }
        $this->code = $code;
        return $this;
    }

    /**
     * URL of Data type or Resource that is a(or the) type used for this element. References are URLs that are relative to http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed in logical models.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * Identifies a profile structure or implementation Guide that applies to the datatype this element refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the type SHALL conform to at least one profile defined in the implementation guide.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setProfile($profile)
    {
        if (null === $profile) {
            return $this; 
        }
        if (is_scalar($profile)) {
            $profile = new FHIRCanonical($profile);
        }
        if (!($profile instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionType::setProfile - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($profile)
            ));
        }
        $this->profile = $profile;
        return $this;
    }

    /**
     * Identifies a profile structure or implementation Guide that applies to the datatype this element refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the type SHALL conform to at least one profile defined in the implementation guide.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getProfile()
    {
        return $this->profile;
    }


    /**
     * Used when the type is "Reference" or "canonical", and identifies a profile structure or implementation Guide that applies to the target of the reference this element refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the target resource SHALL conform to at least one profile defined in the implementation guide.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     * @return $this
     */
    public function setTargetProfile($targetProfile)
    {
        if (null === $targetProfile) {
            return $this; 
        }
        if (is_scalar($targetProfile)) {
            $targetProfile = new FHIRCanonical($targetProfile);
        }
        if (!($targetProfile instanceof FHIRCanonical)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionType::setTargetProfile - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRCanonical or appropriate scalar value, %s seen.',
                gettype($targetProfile)
            ));
        }
        $this->targetProfile = $targetProfile;
        return $this;
    }

    /**
     * Used when the type is "Reference" or "canonical", and identifies a profile structure or implementation Guide that applies to the target of the reference this element refers to. If any profiles are specified, then the content must conform to at least one of them. The URL can be a local reference - to a contained StructureDefinition, or a reference to another StructureDefinition or Implementation Guide by a canonical URL. When an implementation guide is specified, the target resource SHALL conform to at least one profile defined in the implementation guide.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRCanonical
     */
    public function getTargetProfile()
    {
        return $this->targetProfile;
    }


    /**
     * Whether this reference needs to be version specific or version independent, or whether either can be used.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRReferenceVersionRules
     * @return $this
     */
    public function setVersioning($versioning)
    {
        if (null === $versioning) {
            return $this; 
        }
        if (is_scalar($versioning)) {
            $versioning = new FHIRReferenceVersionRules($versioning);
        }
        if (!($versioning instanceof FHIRReferenceVersionRules)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRElementDefinitionType::setVersioning - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRReferenceVersionRules or appropriate scalar value, %s seen.',
                gettype($versioning)
            ));
        }
        $this->versioning = $versioning;
        return $this;
    }

    /**
     * Whether this reference needs to be version specific or version independent, or whether either can be used.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRReferenceVersionRules
     */
    public function getVersioning()
    {
        return $this->versioning;
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
        if (null !== ($v = $this->getAggregation())) {
            $a['aggregation'] = $v;
        }
        if (null !== ($v = $this->getCode())) {
            $a['code'] = $v;
        }
        if (null !== ($v = $this->getProfile())) {
            $a['profile'] = $v;
        }
        if (null !== ($v = $this->getTargetProfile())) {
            $a['targetProfile'] = $v;
        }
        if (null !== ($v = $this->getVersioning())) {
            $a['versioning'] = $v;
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
            $sxe = new \SimpleXMLElement('<ElementDefinitionType xmlns="http://hl7.org/fhir"></ElementDefinitionType>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}