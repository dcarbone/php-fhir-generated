<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: June 7th, 2024 20:38+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemAssociation;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemCharacteristic;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemDescription;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemInstance;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemName;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemResponsibleOrganization;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInventoryItemStatusCodes;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R5\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeMap;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * A functional description of an inventory item used in inventory and
 * supply-related workflows.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRInventoryItem
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIRInventoryItem extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_INVENTORY_ITEM;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_CATEGORY = 'category';
    const FIELD_CODE = 'code';
    const FIELD_NAME = 'name';
    const FIELD_RESPONSIBLE_ORGANIZATION = 'responsibleOrganization';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_INVENTORY_STATUS = 'inventoryStatus';
    const FIELD_BASE_UNIT = 'baseUnit';
    const FIELD_NET_CONTENT = 'netContent';
    const FIELD_ASSOCIATION = 'association';
    const FIELD_CHARACTERISTIC = 'characteristic';
    const FIELD_INSTANCE = 'instance';
    const FIELD_PRODUCT_REFERENCE = 'productReference';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for the inventory item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A coded concept specifying the status of the inventory item.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status of the item entry.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInventoryItemStatusCodes
     */
    protected null|FHIRInventoryItemStatusCodes $status = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category or class of the item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $category = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code designating the specific type of item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $code = [];
    /**
     * A functional description of an inventory item used in inventory and
     * supply-related workflows.
     *
     * The item name(s) - the brand name, or common name, functional name, generic
     * name.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemName[]
     */
    protected null|array $name = [];
    /**
     * A functional description of an inventory item used in inventory and
     * supply-related workflows.
     *
     * Organization(s) responsible for the product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemResponsibleOrganization[]
     */
    protected null|array $responsibleOrganization = [];
    /**
     * A functional description of an inventory item used in inventory and
     * supply-related workflows.
     *
     * The descriptive characteristics of the inventory item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemDescription
     */
    protected null|FHIRInventoryItemDescription $description = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The usage status e.g. recalled, in use, discarded... This can be used to
     * indicate that the items have been taken out of inventory, or are in use, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $inventoryStatus = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The base unit of measure - the unit in which the product is used or counted.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $baseUnit = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Net content or amount present in the item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    protected null|FHIRQuantity $netContent = null;
    /**
     * A functional description of an inventory item used in inventory and
     * supply-related workflows.
     *
     * Association with other items or products.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemAssociation[]
     */
    protected null|array $association = [];
    /**
     * A functional description of an inventory item used in inventory and
     * supply-related workflows.
     *
     * The descriptive or identifying characteristics of the item.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemCharacteristic[]
     */
    protected null|array $characteristic = [];
    /**
     * A functional description of an inventory item used in inventory and
     * supply-related workflows.
     *
     * Instances or occurrences of the product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemInstance
     */
    protected null|FHIRInventoryItemInstance $instance = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Link to a product resource used in clinical workflows.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $productReference = null;

    /**
     * Validation map for fields in type InventoryItem
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRInventoryItem Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_STATUS, $data) || array_key_exists(self::FIELD_STATUS_EXT, $data)) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInventoryItemStatusCodes) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRInventoryItemStatusCodes(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRInventoryItemStatusCodes([FHIRInventoryItemStatusCodes::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRInventoryItemStatusCodes($ext));
            } else {
                $this->setStatus(new FHIRInventoryItemStatusCodes(null));
            }
        }
        if (array_key_exists(self::FIELD_CATEGORY, $data)) {
            if (is_array($data[self::FIELD_CATEGORY])) {
                foreach($data[self::FIELD_CATEGORY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCategory($v);
                    } else {
                        $this->addCategory(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->addCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->addCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (array_key_exists(self::FIELD_CODE, $data)) {
            if (is_array($data[self::FIELD_CODE])) {
                foreach($data[self::FIELD_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCode($v);
                    } else {
                        $this->addCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->addCode($data[self::FIELD_CODE]);
            } else {
                $this->addCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (array_key_exists(self::FIELD_NAME, $data)) {
            if (is_array($data[self::FIELD_NAME])) {
                foreach($data[self::FIELD_NAME] as $v) {
                    if ($v instanceof FHIRInventoryItemName) {
                        $this->addName($v);
                    } else {
                        $this->addName(new FHIRInventoryItemName($v));
                    }
                }
            } elseif ($data[self::FIELD_NAME] instanceof FHIRInventoryItemName) {
                $this->addName($data[self::FIELD_NAME]);
            } else {
                $this->addName(new FHIRInventoryItemName($data[self::FIELD_NAME]));
            }
        }
        if (array_key_exists(self::FIELD_RESPONSIBLE_ORGANIZATION, $data)) {
            if (is_array($data[self::FIELD_RESPONSIBLE_ORGANIZATION])) {
                foreach($data[self::FIELD_RESPONSIBLE_ORGANIZATION] as $v) {
                    if ($v instanceof FHIRInventoryItemResponsibleOrganization) {
                        $this->addResponsibleOrganization($v);
                    } else {
                        $this->addResponsibleOrganization(new FHIRInventoryItemResponsibleOrganization($v));
                    }
                }
            } elseif ($data[self::FIELD_RESPONSIBLE_ORGANIZATION] instanceof FHIRInventoryItemResponsibleOrganization) {
                $this->addResponsibleOrganization($data[self::FIELD_RESPONSIBLE_ORGANIZATION]);
            } else {
                $this->addResponsibleOrganization(new FHIRInventoryItemResponsibleOrganization($data[self::FIELD_RESPONSIBLE_ORGANIZATION]));
            }
        }
        if (array_key_exists(self::FIELD_DESCRIPTION, $data)) {
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRInventoryItemDescription) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } else {
                $this->setDescription(new FHIRInventoryItemDescription($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (array_key_exists(self::FIELD_INVENTORY_STATUS, $data)) {
            if (is_array($data[self::FIELD_INVENTORY_STATUS])) {
                foreach($data[self::FIELD_INVENTORY_STATUS] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addInventoryStatus($v);
                    } else {
                        $this->addInventoryStatus(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_INVENTORY_STATUS] instanceof FHIRCodeableConcept) {
                $this->addInventoryStatus($data[self::FIELD_INVENTORY_STATUS]);
            } else {
                $this->addInventoryStatus(new FHIRCodeableConcept($data[self::FIELD_INVENTORY_STATUS]));
            }
        }
        if (array_key_exists(self::FIELD_BASE_UNIT, $data)) {
            if ($data[self::FIELD_BASE_UNIT] instanceof FHIRCodeableConcept) {
                $this->setBaseUnit($data[self::FIELD_BASE_UNIT]);
            } else {
                $this->setBaseUnit(new FHIRCodeableConcept($data[self::FIELD_BASE_UNIT]));
            }
        }
        if (array_key_exists(self::FIELD_NET_CONTENT, $data)) {
            if ($data[self::FIELD_NET_CONTENT] instanceof FHIRQuantity) {
                $this->setNetContent($data[self::FIELD_NET_CONTENT]);
            } else {
                $this->setNetContent(new FHIRQuantity($data[self::FIELD_NET_CONTENT]));
            }
        }
        if (array_key_exists(self::FIELD_ASSOCIATION, $data)) {
            if (is_array($data[self::FIELD_ASSOCIATION])) {
                foreach($data[self::FIELD_ASSOCIATION] as $v) {
                    if ($v instanceof FHIRInventoryItemAssociation) {
                        $this->addAssociation($v);
                    } else {
                        $this->addAssociation(new FHIRInventoryItemAssociation($v));
                    }
                }
            } elseif ($data[self::FIELD_ASSOCIATION] instanceof FHIRInventoryItemAssociation) {
                $this->addAssociation($data[self::FIELD_ASSOCIATION]);
            } else {
                $this->addAssociation(new FHIRInventoryItemAssociation($data[self::FIELD_ASSOCIATION]));
            }
        }
        if (array_key_exists(self::FIELD_CHARACTERISTIC, $data)) {
            if (is_array($data[self::FIELD_CHARACTERISTIC])) {
                foreach($data[self::FIELD_CHARACTERISTIC] as $v) {
                    if ($v instanceof FHIRInventoryItemCharacteristic) {
                        $this->addCharacteristic($v);
                    } else {
                        $this->addCharacteristic(new FHIRInventoryItemCharacteristic($v));
                    }
                }
            } elseif ($data[self::FIELD_CHARACTERISTIC] instanceof FHIRInventoryItemCharacteristic) {
                $this->addCharacteristic($data[self::FIELD_CHARACTERISTIC]);
            } else {
                $this->addCharacteristic(new FHIRInventoryItemCharacteristic($data[self::FIELD_CHARACTERISTIC]));
            }
        }
        if (array_key_exists(self::FIELD_INSTANCE, $data)) {
            if ($data[self::FIELD_INSTANCE] instanceof FHIRInventoryItemInstance) {
                $this->setInstance($data[self::FIELD_INSTANCE]);
            } else {
                $this->setInstance(new FHIRInventoryItemInstance($data[self::FIELD_INSTANCE]));
            }
        }
        if (array_key_exists(self::FIELD_PRODUCT_REFERENCE, $data)) {
            if ($data[self::FIELD_PRODUCT_REFERENCE] instanceof FHIRReference) {
                $this->setProductReference($data[self::FIELD_PRODUCT_REFERENCE]);
            } else {
                $this->setProductReference(new FHIRReference($data[self::FIELD_PRODUCT_REFERENCE]));
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
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for the inventory item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for the inventory item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A coded concept specifying the status of the inventory item.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status of the item entry.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInventoryItemStatusCodes
     */
    public function getStatus(): null|FHIRInventoryItemStatusCodes
    {
        return $this->status;
    }

    /**
     * A coded concept specifying the status of the inventory item.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Status of the item entry.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRInventoryItemStatusCodes $status
     * @return static
     */
    public function setStatus(null|FHIRInventoryItemStatusCodes $status = null): self
    {
        if (null === $status) {
            $status = new FHIRInventoryItemStatusCodes();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category or class of the item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getCategory(): null|array
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Category or class of the item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $category
     * @return static
     */
    public function addCategory(null|FHIRCodeableConcept $category = null): self
    {
        if (null === $category) {
            $category = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->category[] = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code designating the specific type of item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getCode(): null|array
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code designating the specific type of item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @return static
     */
    public function addCode(null|FHIRCodeableConcept $code = null): self
    {
        if (null === $code) {
            $code = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->code[] = $code;
        return $this;
    }

    /**
     * A functional description of an inventory item used in inventory and
     * supply-related workflows.
     *
     * The item name(s) - the brand name, or common name, functional name, generic
     * name.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemName[]
     */
    public function getName(): null|array
    {
        return $this->name;
    }

    /**
     * A functional description of an inventory item used in inventory and
     * supply-related workflows.
     *
     * The item name(s) - the brand name, or common name, functional name, generic
     * name.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemName $name
     * @return static
     */
    public function addName(null|FHIRInventoryItemName $name = null): self
    {
        if (null === $name) {
            $name = new FHIRInventoryItemName();
        }
        $this->_trackValueAdded();
        $this->name[] = $name;
        return $this;
    }

    /**
     * A functional description of an inventory item used in inventory and
     * supply-related workflows.
     *
     * Organization(s) responsible for the product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemResponsibleOrganization[]
     */
    public function getResponsibleOrganization(): null|array
    {
        return $this->responsibleOrganization;
    }

    /**
     * A functional description of an inventory item used in inventory and
     * supply-related workflows.
     *
     * Organization(s) responsible for the product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemResponsibleOrganization $responsibleOrganization
     * @return static
     */
    public function addResponsibleOrganization(null|FHIRInventoryItemResponsibleOrganization $responsibleOrganization = null): self
    {
        if (null === $responsibleOrganization) {
            $responsibleOrganization = new FHIRInventoryItemResponsibleOrganization();
        }
        $this->_trackValueAdded();
        $this->responsibleOrganization[] = $responsibleOrganization;
        return $this;
    }

    /**
     * A functional description of an inventory item used in inventory and
     * supply-related workflows.
     *
     * The descriptive characteristics of the inventory item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemDescription
     */
    public function getDescription(): null|FHIRInventoryItemDescription
    {
        return $this->description;
    }

    /**
     * A functional description of an inventory item used in inventory and
     * supply-related workflows.
     *
     * The descriptive characteristics of the inventory item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemDescription $description
     * @return static
     */
    public function setDescription(null|FHIRInventoryItemDescription $description = null): self
    {
        if (null === $description) {
            $description = new FHIRInventoryItemDescription();
        }
        $this->_trackValueSet($this->description, $description);
        $this->description = $description;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The usage status e.g. recalled, in use, discarded... This can be used to
     * indicate that the items have been taken out of inventory, or are in use, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getInventoryStatus(): null|array
    {
        return $this->inventoryStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The usage status e.g. recalled, in use, discarded... This can be used to
     * indicate that the items have been taken out of inventory, or are in use, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $inventoryStatus
     * @return static
     */
    public function addInventoryStatus(null|FHIRCodeableConcept $inventoryStatus = null): self
    {
        if (null === $inventoryStatus) {
            $inventoryStatus = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->inventoryStatus[] = $inventoryStatus;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The base unit of measure - the unit in which the product is used or counted.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getBaseUnit(): null|FHIRCodeableConcept
    {
        return $this->baseUnit;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The base unit of measure - the unit in which the product is used or counted.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $baseUnit
     * @return static
     */
    public function setBaseUnit(null|FHIRCodeableConcept $baseUnit = null): self
    {
        if (null === $baseUnit) {
            $baseUnit = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->baseUnit, $baseUnit);
        $this->baseUnit = $baseUnit;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Net content or amount present in the item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity
     */
    public function getNetContent(): null|FHIRQuantity
    {
        return $this->netContent;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Net content or amount present in the item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRQuantity $netContent
     * @return static
     */
    public function setNetContent(null|FHIRQuantity $netContent = null): self
    {
        if (null === $netContent) {
            $netContent = new FHIRQuantity();
        }
        $this->_trackValueSet($this->netContent, $netContent);
        $this->netContent = $netContent;
        return $this;
    }

    /**
     * A functional description of an inventory item used in inventory and
     * supply-related workflows.
     *
     * Association with other items or products.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemAssociation[]
     */
    public function getAssociation(): null|array
    {
        return $this->association;
    }

    /**
     * A functional description of an inventory item used in inventory and
     * supply-related workflows.
     *
     * Association with other items or products.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemAssociation $association
     * @return static
     */
    public function addAssociation(null|FHIRInventoryItemAssociation $association = null): self
    {
        if (null === $association) {
            $association = new FHIRInventoryItemAssociation();
        }
        $this->_trackValueAdded();
        $this->association[] = $association;
        return $this;
    }

    /**
     * A functional description of an inventory item used in inventory and
     * supply-related workflows.
     *
     * The descriptive or identifying characteristics of the item.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemCharacteristic[]
     */
    public function getCharacteristic(): null|array
    {
        return $this->characteristic;
    }

    /**
     * A functional description of an inventory item used in inventory and
     * supply-related workflows.
     *
     * The descriptive or identifying characteristics of the item.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemCharacteristic $characteristic
     * @return static
     */
    public function addCharacteristic(null|FHIRInventoryItemCharacteristic $characteristic = null): self
    {
        if (null === $characteristic) {
            $characteristic = new FHIRInventoryItemCharacteristic();
        }
        $this->_trackValueAdded();
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * A functional description of an inventory item used in inventory and
     * supply-related workflows.
     *
     * Instances or occurrences of the product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemInstance
     */
    public function getInstance(): null|FHIRInventoryItemInstance
    {
        return $this->instance;
    }

    /**
     * A functional description of an inventory item used in inventory and
     * supply-related workflows.
     *
     * Instances or occurrences of the product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRInventoryItem\FHIRInventoryItemInstance $instance
     * @return static
     */
    public function setInstance(null|FHIRInventoryItemInstance $instance = null): self
    {
        if (null === $instance) {
            $instance = new FHIRInventoryItemInstance();
        }
        $this->_trackValueSet($this->instance, $instance);
        $this->instance = $instance;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Link to a product resource used in clinical workflows.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getProductReference(): null|FHIRReference
    {
        return $this->productReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Link to a product resource used in clinical workflows.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $productReference
     * @return static
     */
    public function setProductReference(null|FHIRReference $productReference = null): self
    {
        if (null === $productReference) {
            $productReference = new FHIRReference();
        }
        $this->_trackValueSet($this->productReference, $productReference);
        $this->productReference = $productReference;
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CATEGORY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getName())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NAME, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getResponsibleOrganization())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RESPONSIBLE_ORGANIZATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getInventoryStatus())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INVENTORY_STATUS, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getBaseUnit())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BASE_UNIT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNetContent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NET_CONTENT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAssociation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ASSOCIATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCharacteristic())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CHARACTERISTIC, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getInstance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INSTANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProductReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRODUCT_REFERENCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_ITEM, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_ITEM, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_ITEM, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_ITEM, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_ITEM, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESPONSIBLE_ORGANIZATION])) {
            $v = $this->getResponsibleOrganization();
            foreach($validationRules[self::FIELD_RESPONSIBLE_ORGANIZATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_ITEM, self::FIELD_RESPONSIBLE_ORGANIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESPONSIBLE_ORGANIZATION])) {
                        $errs[self::FIELD_RESPONSIBLE_ORGANIZATION] = [];
                    }
                    $errs[self::FIELD_RESPONSIBLE_ORGANIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_ITEM, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INVENTORY_STATUS])) {
            $v = $this->getInventoryStatus();
            foreach($validationRules[self::FIELD_INVENTORY_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_ITEM, self::FIELD_INVENTORY_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INVENTORY_STATUS])) {
                        $errs[self::FIELD_INVENTORY_STATUS] = [];
                    }
                    $errs[self::FIELD_INVENTORY_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASE_UNIT])) {
            $v = $this->getBaseUnit();
            foreach($validationRules[self::FIELD_BASE_UNIT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_ITEM, self::FIELD_BASE_UNIT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASE_UNIT])) {
                        $errs[self::FIELD_BASE_UNIT] = [];
                    }
                    $errs[self::FIELD_BASE_UNIT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NET_CONTENT])) {
            $v = $this->getNetContent();
            foreach($validationRules[self::FIELD_NET_CONTENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_ITEM, self::FIELD_NET_CONTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NET_CONTENT])) {
                        $errs[self::FIELD_NET_CONTENT] = [];
                    }
                    $errs[self::FIELD_NET_CONTENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ASSOCIATION])) {
            $v = $this->getAssociation();
            foreach($validationRules[self::FIELD_ASSOCIATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_ITEM, self::FIELD_ASSOCIATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ASSOCIATION])) {
                        $errs[self::FIELD_ASSOCIATION] = [];
                    }
                    $errs[self::FIELD_ASSOCIATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHARACTERISTIC])) {
            $v = $this->getCharacteristic();
            foreach($validationRules[self::FIELD_CHARACTERISTIC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_ITEM, self::FIELD_CHARACTERISTIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHARACTERISTIC])) {
                        $errs[self::FIELD_CHARACTERISTIC] = [];
                    }
                    $errs[self::FIELD_CHARACTERISTIC][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTANCE])) {
            $v = $this->getInstance();
            foreach($validationRules[self::FIELD_INSTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_ITEM, self::FIELD_INSTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTANCE])) {
                        $errs[self::FIELD_INSTANCE] = [];
                    }
                    $errs[self::FIELD_INSTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCT_REFERENCE])) {
            $v = $this->getProductReference();
            foreach($validationRules[self::FIELD_PRODUCT_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INVENTORY_ITEM, self::FIELD_PRODUCT_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCT_REFERENCE])) {
                        $errs[self::FIELD_PRODUCT_REFERENCE] = [];
                    }
                    $errs[self::FIELD_PRODUCT_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRInventoryItem $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRInventoryItem
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
        } else if (!($type instanceof FHIRInventoryItem)) {
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
            if (self::FIELD_IDENTIFIER === $childName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_STATUS === $childName) {
                $type->setStatus(FHIRInventoryItemStatusCodes::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CATEGORY === $childName) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CODE === $childName) {
                $type->addCode(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NAME === $childName) {
                $type->addName(FHIRInventoryItemName::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RESPONSIBLE_ORGANIZATION === $childName) {
                $type->addResponsibleOrganization(FHIRInventoryItemResponsibleOrganization::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRInventoryItemDescription::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_INVENTORY_STATUS === $childName) {
                $type->addInventoryStatus(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_BASE_UNIT === $childName) {
                $type->setBaseUnit(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NET_CONTENT === $childName) {
                $type->setNetContent(FHIRQuantity::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ASSOCIATION === $childName) {
                $type->addAssociation(FHIRInventoryItemAssociation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CHARACTERISTIC === $childName) {
                $type->addCharacteristic(FHIRInventoryItemCharacteristic::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_INSTANCE === $childName) {
                $type->setInstance(FHIRInventoryItemInstance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PRODUCT_REFERENCE === $childName) {
                $type->setProductReference(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_TEXT === $childName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn, $config));
                }
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRId::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_META === $childName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMPLICIT_RULES === $childName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_LANGUAGE === $childName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
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
            $xw->openRootNode($config, 'InventoryItem', $this->_getSourceXmlns());
        }
        parent::xmlSerialize($xw, $config);
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getStatus())) {
            $xw->startElement(self::FIELD_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCategory() as $v) {
            $xw->startElement(self::FIELD_CATEGORY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCode() as $v) {
            $xw->startElement(self::FIELD_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getName() as $v) {
            $xw->startElement(self::FIELD_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getResponsibleOrganization() as $v) {
            $xw->startElement(self::FIELD_RESPONSIBLE_ORGANIZATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getInventoryStatus() as $v) {
            $xw->startElement(self::FIELD_INVENTORY_STATUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getBaseUnit())) {
            $xw->startElement(self::FIELD_BASE_UNIT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getNetContent())) {
            $xw->startElement(self::FIELD_NET_CONTENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getAssociation() as $v) {
            $xw->startElement(self::FIELD_ASSOCIATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getCharacteristic() as $v) {
            $xw->startElement(self::FIELD_CHARACTERISTIC);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getInstance())) {
            $xw->startElement(self::FIELD_INSTANCE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getProductReference())) {
            $xw->startElement(self::FIELD_PRODUCT_REFERENCE);
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
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInventoryItemStatusCodes::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            $out->{self::FIELD_CATEGORY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CATEGORY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            $out->{self::FIELD_CODE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CODE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getName())) {
            $out->{self::FIELD_NAME} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NAME}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getResponsibleOrganization())) {
            $out->{self::FIELD_RESPONSIBLE_ORGANIZATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_RESPONSIBLE_ORGANIZATION}[] = $v;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $out->{self::FIELD_DESCRIPTION} = $v;
        }
        if ([] !== ($vs = $this->getInventoryStatus())) {
            $out->{self::FIELD_INVENTORY_STATUS} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_INVENTORY_STATUS}[] = $v;
            }
        }
        if (null !== ($v = $this->getBaseUnit())) {
            $out->{self::FIELD_BASE_UNIT} = $v;
        }
        if (null !== ($v = $this->getNetContent())) {
            $out->{self::FIELD_NET_CONTENT} = $v;
        }
        if ([] !== ($vs = $this->getAssociation())) {
            $out->{self::FIELD_ASSOCIATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_ASSOCIATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCharacteristic())) {
            $out->{self::FIELD_CHARACTERISTIC} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CHARACTERISTIC}[] = $v;
            }
        }
        if (null !== ($v = $this->getInstance())) {
            $out->{self::FIELD_INSTANCE} = $v;
        }
        if (null !== ($v = $this->getProductReference())) {
            $out->{self::FIELD_PRODUCT_REFERENCE} = $v;
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

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