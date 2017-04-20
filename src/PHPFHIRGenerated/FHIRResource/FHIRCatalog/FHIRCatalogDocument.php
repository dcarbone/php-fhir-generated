<?php namespace PHPFHIRGenerated\FHIRResource\FHIRCatalog;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A document that bundles a set of catalog entries. A catalog entry contains metadata about an item and a pointer to the item’s representative resource. The item is an entity that can be ordered or consulted from a catalog: Medications, devices, lab services, organizations...
The catalog resource provides the data necessary for a synchronization of the item data – e.g. the version or last update date which allows systems to obtain differential updates. 
The catalog does not replicate the content of the item, since that is expected to be in the resource that is referenced. There is however some metadata that is important for the catalog synchronization and not in the “clinical” resource. Examples are different classifications and related identifiers, or packaging information, or device components, or different characteristics.
 */
class FHIRCatalogDocument extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Used for presenting.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $status = null;

    /**
     * The entity that is issuing (sending, submitting, publishing) the catalog.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $provider = null;

    /**
     * For example FormularyOnly items, or Full Catalog, or SingleSubmission, or others.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $contentType = null;

    /**
     * Used to define a full update, or appending information (e.g. sending the catalog of substances does not replace the catalog of medications, but rather updates the characteristics).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $updateMode = null;

    /**
     * Uniquely identifies the catalog for archiving, versioning, duplicate checking, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * To support versioning and deciding when to overwrite /update content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $contentVersion = null;

    /**
     * The date when the catalog document is issued.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $issueDate = null;

    /**
     * To support delayed or timed activation of items, e.g. "next year this product will be available".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $validFrom = null;

    /**
     * To support delayed or timed deactivation of items, e.g. "next year this product will no longer be available".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $validTo = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Catalog.Document';

    /**
     * Used for presenting.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Used for presenting.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The entity that is issuing (sending, submitting, publishing) the catalog.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * The entity that is issuing (sending, submitting, publishing) the catalog.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $provider
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * For example FormularyOnly items, or Full Catalog, or SingleSubmission, or others.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * For example FormularyOnly items, or Full Catalog, or SingleSubmission, or others.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $contentType
     * @return $this
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * Used to define a full update, or appending information (e.g. sending the catalog of substances does not replace the catalog of medications, but rather updates the characteristics).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getUpdateMode()
    {
        return $this->updateMode;
    }

    /**
     * Used to define a full update, or appending information (e.g. sending the catalog of substances does not replace the catalog of medications, but rather updates the characteristics).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $updateMode
     * @return $this
     */
    public function setUpdateMode($updateMode)
    {
        $this->updateMode = $updateMode;
        return $this;
    }

    /**
     * Uniquely identifies the catalog for archiving, versioning, duplicate checking, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Uniquely identifies the catalog for archiving, versioning, duplicate checking, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * To support versioning and deciding when to overwrite /update content.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getContentVersion()
    {
        return $this->contentVersion;
    }

    /**
     * To support versioning and deciding when to overwrite /update content.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $contentVersion
     * @return $this
     */
    public function setContentVersion($contentVersion)
    {
        $this->contentVersion = $contentVersion;
        return $this;
    }

    /**
     * The date when the catalog document is issued.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * The date when the catalog document is issued.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $issueDate
     * @return $this
     */
    public function setIssueDate($issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * To support delayed or timed activation of items, e.g. "next year this product will be available".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * To support delayed or timed activation of items, e.g. "next year this product will be available".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $validFrom
     * @return $this
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * To support delayed or timed deactivation of items, e.g. "next year this product will no longer be available".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * To support delayed or timed deactivation of items, e.g. "next year this product will no longer be available".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $validTo
     * @return $this
     */
    public function setValidTo($validTo)
    {
        $this->validTo = $validTo;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->status) $json['status'] = json_encode($this->status);
        if (null !== $this->provider) $json['provider'] = json_encode($this->provider);
        if (null !== $this->contentType) $json['contentType'] = json_encode($this->contentType);
        if (null !== $this->updateMode) $json['updateMode'] = json_encode($this->updateMode);
        if (null !== $this->identifier) $json['identifier'] = json_encode($this->identifier);
        if (null !== $this->contentVersion) $json['contentVersion'] = json_encode($this->contentVersion);
        if (null !== $this->issueDate) $json['issueDate'] = json_encode($this->issueDate);
        if (null !== $this->validFrom) $json['validFrom'] = json_encode($this->validFrom);
        if (null !== $this->validTo) $json['validTo'] = json_encode($this->validTo);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CatalogDocument xmlns="http://hl7.org/fhir"></CatalogDocument>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->status) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (null !== $this->provider) $this->provider->xmlSerialize(true, $sxe->addChild('provider'));
        if (null !== $this->contentType) $this->contentType->xmlSerialize(true, $sxe->addChild('contentType'));
        if (null !== $this->updateMode) $this->updateMode->xmlSerialize(true, $sxe->addChild('updateMode'));
        if (null !== $this->identifier) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (null !== $this->contentVersion) $this->contentVersion->xmlSerialize(true, $sxe->addChild('contentVersion'));
        if (null !== $this->issueDate) $this->issueDate->xmlSerialize(true, $sxe->addChild('issueDate'));
        if (null !== $this->validFrom) $this->validFrom->xmlSerialize(true, $sxe->addChild('validFrom'));
        if (null !== $this->validTo) $this->validTo->xmlSerialize(true, $sxe->addChild('validTo'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}