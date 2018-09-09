<?php

namespace PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence;

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
use PHPFHIRGenerated\FHIRElement\FHIRRepositoryType;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;

/**
 * Raw data describing a biological sequence.
 *
 * Class FHIRSequenceRepository
 * @package PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence
 */
class FHIRSequenceRepository extends FHIRBackboneElement implements \JsonSerializable
{
    // Raw name of FHIR type represented by this class
    const FHIR_TYPE_NAME = 'Sequence.Repository';

    /**
     * Id of the variant in this external repository. The server will understand how to use this id to call for more info about datasets in external repository.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $datasetId = null;

    /**
     * URI of an external repository which contains further details about the genetics data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Id of the read in this external repository.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $readsetId = null;

    /**
     * Click and see / RESTful API / Need login to see / RESTful API with authentication / Other ways to see resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRepositoryType
     */
    public $type = null;

    /**
     * URI of an external repository which contains further details about the genetics data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * Id of the variantset in this external repository. The server will understand how to use this id to call for more info about variantsets in external repository.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $variantsetId = null;

    /**
     * FHIRSequenceRepository Constructor
     *
     * @var mixed $data Value depends upon object being constructed.
     */
    public function __construct($data = null)
    {
        parent::__construct($data);
        if (is_array($data)) {
            if (isset($data['datasetId'])) {
                $this->setDatasetId($data['datasetId']);
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['readsetId'])) {
                $this->setReadsetId($data['readsetId']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['url'])) {
                $this->setUrl($data['url']);
            }
            if (isset($data['variantsetId'])) {
                $this->setVariantsetId($data['variantsetId']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException(
                '\PHPFHIRGenerated\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceRepository::__construct - Argument 1 expected to be array or null, '.
                gettype($data).
                ' seen.'
            );
        }
    }

    /**
     * Id of the variant in this external repository. The server will understand how to use this id to call for more info about datasets in external repository.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setDatasetId($datasetId)
    {
        if (null === $datasetId) {
            return $this; 
        }
        if (is_scalar($datasetId)) {
            $datasetId = new FHIRString($datasetId);
        }
        if (!($datasetId instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceRepository::setDatasetId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($datasetId)
            ));
        }
        $this->datasetId = $datasetId;
        return $this;
    }

    /**
     * Id of the variant in this external repository. The server will understand how to use this id to call for more info about datasets in external repository.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDatasetId()
    {
        return $this->datasetId;
    }


    /**
     * URI of an external repository which contains further details about the genetics data.
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
                'FHIRSequenceRepository::setName - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($name)
            ));
        }
        $this->name = $name;
        return $this;
    }

    /**
     * URI of an external repository which contains further details about the genetics data.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Id of the read in this external repository.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setReadsetId($readsetId)
    {
        if (null === $readsetId) {
            return $this; 
        }
        if (is_scalar($readsetId)) {
            $readsetId = new FHIRString($readsetId);
        }
        if (!($readsetId instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceRepository::setReadsetId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($readsetId)
            ));
        }
        $this->readsetId = $readsetId;
        return $this;
    }

    /**
     * Id of the read in this external repository.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getReadsetId()
    {
        return $this->readsetId;
    }


    /**
     * Click and see / RESTful API / Need login to see / RESTful API with authentication / Other ways to see resource.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRRepositoryType
     * @return $this
     */
    public function setType($type)
    {
        if (null === $type) {
            return $this; 
        }
        if (is_scalar($type)) {
            $type = new FHIRRepositoryType($type);
        }
        if (!($type instanceof FHIRRepositoryType)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceRepository::setType - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRRepositoryType or appropriate scalar value, %s seen.',
                gettype($type)
            ));
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Click and see / RESTful API / Need login to see / RESTful API with authentication / Other ways to see resource.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRRepositoryType
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * URI of an external repository which contains further details about the genetics data.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     * @return $this
     */
    public function setUrl($url)
    {
        if (null === $url) {
            return $this; 
        }
        if (is_scalar($url)) {
            $url = new FHIRUri($url);
        }
        if (!($url instanceof FHIRUri)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceRepository::setUrl - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRUri or appropriate scalar value, %s seen.',
                gettype($url)
            ));
        }
        $this->url = $url;
        return $this;
    }

    /**
     * URI of an external repository which contains further details about the genetics data.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }


    /**
     * Id of the variantset in this external repository. The server will understand how to use this id to call for more info about variantsets in external repository.
     * @param null|\PHPFHIRGenerated\FHIRElement\FHIRString
     * @return $this
     */
    public function setVariantsetId($variantsetId)
    {
        if (null === $variantsetId) {
            return $this; 
        }
        if (is_scalar($variantsetId)) {
            $variantsetId = new FHIRString($variantsetId);
        }
        if (!($variantsetId instanceof FHIRString)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSequenceRepository::setVariantsetId - Argument 1 expected to be instance of \PHPFHIRGenerated\FHIRElement\FHIRString or appropriate scalar value, %s seen.',
                gettype($variantsetId)
            ));
        }
        $this->variantsetId = $variantsetId;
        return $this;
    }

    /**
     * Id of the variantset in this external repository. The server will understand how to use this id to call for more info about variantsets in external repository.
     * @return null|\PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVariantsetId()
    {
        return $this->variantsetId;
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
        if (null !== ($v = $this->getDatasetId())) {
            $a['datasetId'] = $v;
        }
        if (null !== ($v = $this->getName())) {
            $a['name'] = $v;
        }
        if (null !== ($v = $this->getReadsetId())) {
            $a['readsetId'] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a['type'] = $v;
        }
        if (null !== ($v = $this->getUrl())) {
            $a['url'] = $v;
        }
        if (null !== ($v = $this->getVariantsetId())) {
            $a['variantsetId'] = $v;
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
            $sxe = new \SimpleXMLElement('<SequenceRepository xmlns="http://hl7.org/fhir"></SequenceRepository>');
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}