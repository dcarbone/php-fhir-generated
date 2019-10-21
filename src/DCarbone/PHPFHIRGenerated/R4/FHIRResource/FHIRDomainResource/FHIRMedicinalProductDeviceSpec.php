<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 23:43+0000
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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDeviceSpec\FHIRMedicinalProductDeviceSpecMaterial;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * A detailed description of a device, typically as part of a regulated medicinal
 * product. It is not intended to replace the Device resource, which covers use of
 * device instances.
 * If the element is present, it must have either a @value, an @id, or extensions
 *
 * Class FHIRMedicinalProductDeviceSpec
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProductDeviceSpec extends FHIRDomainResource
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEVICE_SPEC;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_BATCH_IDENTIFIER = 'batchIdentifier';
    const FIELD_BATCH_IDENTIFIER_EXT = '_batchIdentifier';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_IDENTIFIER_EXT = '_identifier';
    const FIELD_LISTING_NUMBER = 'listingNumber';
    const FIELD_LISTING_NUMBER_EXT = '_listingNumber';
    const FIELD_MANUFACTURER = 'manufacturer';
    const FIELD_MATERIAL = 'material';
    const FIELD_MODEL_NUMBER = 'modelNumber';
    const FIELD_MODEL_NUMBER_EXT = '_modelNumber';
    const FIELD_NOMENCLATURE = 'nomenclature';
    const FIELD_OTHER_CHARACTERISTICS = 'otherCharacteristics';
    const FIELD_PHYSICAL_CHARACTERISTICS = 'physicalCharacteristics';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_QUANTITY_EXT = '_quantity';
    const FIELD_SHELF_LIFE_STORAGE = 'shelfLifeStorage';
    const FIELD_STERILISATION_REQUIREMENT = 'sterilisationRequirement';
    const FIELD_STERILITY_INDICATOR = 'sterilityIndicator';
    const FIELD_TRADE_NAME = 'tradeName';
    const FIELD_TRADE_NAME_EXT = '_tradeName';
    const FIELD_TYPE = 'type';
    const FIELD_USAGE = 'usage';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Batch number or expiry date of a device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    private $batchIdentifier = [];
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Business identifier.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    private $identifier = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Device listing number.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $listingNumber = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Manufacturer of this Device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    private $manufacturer = [];
    /**
     * A detailed description of a device, typically as part of a regulated medicinal
     * product. It is not intended to replace the Device resource, which covers use of
     * device instances.
     *
     * A substance used to create the material(s) of which the device is made.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDeviceSpec\FHIRMedicinalProductDeviceSpecMaterial[]
     */
    private $material = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Device model or reference number.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $modelNumber = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A nomenclature term for the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $nomenclature = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Other codeable characteristics.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    private $otherCharacteristics = [];
    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Dimensions, color etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic
     */
    private $physicalCharacteristics = null;
    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The quantity of the device present in the packaging of a medicinal product.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    private $quantity = null;
    /**
     * The shelf-life and storage information for a medicinal product item or container
     * can be described using this class.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Shelf Life and storage information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife[]
     */
    private $shelfLifeStorage = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Whether the device must be sterilised before use.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $sterilisationRequirement = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Whether the device is supplied as sterile.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $sterilityIndicator = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Trade name of the device, where applicable.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    private $tradeName = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $type = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Usage pattern including the number of times that the device may be used.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    private $usage = null;

    /**
     * FHIRMedicinalProductDeviceSpec Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductDeviceSpec::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_BATCH_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_BATCH_IDENTIFIER_EXT]) && is_array($data[self::FIELD_BATCH_IDENTIFIER_EXT]))
                ? $data[self::FIELD_BATCH_IDENTIFIER_EXT]
                : null;
            if (is_array($data[self::FIELD_BATCH_IDENTIFIER])) {
                foreach($data[self::FIELD_BATCH_IDENTIFIER] as $i => $v) {
                    if ($v instanceof FHIRIdentifier) {
                        $this->addBatchIdentifier($v);
                    } elseif ($ext && is_scalar($v) && isset($ext[$i]) && is_array($ext[$i])) {
                        $this->addBatchIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $v] + $ext[$i]));
                    } else {
                        $this->addBatchIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_BATCH_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addBatchIdentifier($data[self::FIELD_BATCH_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_BATCH_IDENTIFIER])) {
                $this->addBatchIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_BATCH_IDENTIFIER]] + $ext));
            } else {
                $this->addBatchIdentifier(new FHIRIdentifier($data[self::FIELD_BATCH_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            $ext = (isset($data[self::FIELD_IDENTIFIER_EXT]) && is_array($data[self::FIELD_IDENTIFIER_EXT]))
                ? $data[self::FIELD_IDENTIFIER_EXT]
                : null;
            if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setIdentifier($data[self::FIELD_IDENTIFIER]);
            } elseif ($ext && is_scalar($data[self::FIELD_IDENTIFIER])) {
                $this->setIdentifier(new FHIRIdentifier([FHIRIdentifier::FIELD_VALUE => $data[self::FIELD_IDENTIFIER]] + $ext));
            } else {
                $this->setIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_LISTING_NUMBER])) {
            $ext = (isset($data[self::FIELD_LISTING_NUMBER_EXT]) && is_array($data[self::FIELD_LISTING_NUMBER_EXT]))
                ? $data[self::FIELD_LISTING_NUMBER_EXT]
                : null;
            if ($data[self::FIELD_LISTING_NUMBER] instanceof FHIRString) {
                $this->setListingNumber($data[self::FIELD_LISTING_NUMBER]);
            } elseif ($ext && is_scalar($data[self::FIELD_LISTING_NUMBER])) {
                $this->setListingNumber(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_LISTING_NUMBER]] + $ext));
            } else {
                $this->setListingNumber(new FHIRString($data[self::FIELD_LISTING_NUMBER]));
            }
        }
        if (isset($data[self::FIELD_MANUFACTURER])) {
            if (is_array($data[self::FIELD_MANUFACTURER])) {
                foreach($data[self::FIELD_MANUFACTURER] as $v) {
                    if ($v instanceof FHIRReference) {
                        $this->addManufacturer($v);
                    } else {
                        $this->addManufacturer(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_MANUFACTURER] instanceof FHIRReference) {
                $this->addManufacturer($data[self::FIELD_MANUFACTURER]);
            } else {
                $this->addManufacturer(new FHIRReference($data[self::FIELD_MANUFACTURER]));
            }
        }
        if (isset($data[self::FIELD_MATERIAL])) {
            if (is_array($data[self::FIELD_MATERIAL])) {
                foreach($data[self::FIELD_MATERIAL] as $v) {
                    if ($v instanceof FHIRMedicinalProductDeviceSpecMaterial) {
                        $this->addMaterial($v);
                    } else {
                        $this->addMaterial(new FHIRMedicinalProductDeviceSpecMaterial($v));
                    }
                }
            } else if ($data[self::FIELD_MATERIAL] instanceof FHIRMedicinalProductDeviceSpecMaterial) {
                $this->addMaterial($data[self::FIELD_MATERIAL]);
            } else {
                $this->addMaterial(new FHIRMedicinalProductDeviceSpecMaterial($data[self::FIELD_MATERIAL]));
            }
        }
        if (isset($data[self::FIELD_MODEL_NUMBER])) {
            $ext = (isset($data[self::FIELD_MODEL_NUMBER_EXT]) && is_array($data[self::FIELD_MODEL_NUMBER_EXT]))
                ? $data[self::FIELD_MODEL_NUMBER_EXT]
                : null;
            if ($data[self::FIELD_MODEL_NUMBER] instanceof FHIRString) {
                $this->setModelNumber($data[self::FIELD_MODEL_NUMBER]);
            } elseif ($ext && is_scalar($data[self::FIELD_MODEL_NUMBER])) {
                $this->setModelNumber(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_MODEL_NUMBER]] + $ext));
            } else {
                $this->setModelNumber(new FHIRString($data[self::FIELD_MODEL_NUMBER]));
            }
        }
        if (isset($data[self::FIELD_NOMENCLATURE])) {
            if (is_array($data[self::FIELD_NOMENCLATURE])) {
                foreach($data[self::FIELD_NOMENCLATURE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addNomenclature($v);
                    } else {
                        $this->addNomenclature(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_NOMENCLATURE] instanceof FHIRCodeableConcept) {
                $this->addNomenclature($data[self::FIELD_NOMENCLATURE]);
            } else {
                $this->addNomenclature(new FHIRCodeableConcept($data[self::FIELD_NOMENCLATURE]));
            }
        }
        if (isset($data[self::FIELD_OTHER_CHARACTERISTICS])) {
            if (is_array($data[self::FIELD_OTHER_CHARACTERISTICS])) {
                foreach($data[self::FIELD_OTHER_CHARACTERISTICS] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addOtherCharacteristics($v);
                    } else {
                        $this->addOtherCharacteristics(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_OTHER_CHARACTERISTICS] instanceof FHIRCodeableConcept) {
                $this->addOtherCharacteristics($data[self::FIELD_OTHER_CHARACTERISTICS]);
            } else {
                $this->addOtherCharacteristics(new FHIRCodeableConcept($data[self::FIELD_OTHER_CHARACTERISTICS]));
            }
        }
        if (isset($data[self::FIELD_PHYSICAL_CHARACTERISTICS])) {
            if ($data[self::FIELD_PHYSICAL_CHARACTERISTICS] instanceof FHIRProdCharacteristic) {
                $this->setPhysicalCharacteristics($data[self::FIELD_PHYSICAL_CHARACTERISTICS]);
            } else {
                $this->setPhysicalCharacteristics(new FHIRProdCharacteristic($data[self::FIELD_PHYSICAL_CHARACTERISTICS]));
            }
        }
        if (isset($data[self::FIELD_QUANTITY])) {
            $ext = (isset($data[self::FIELD_QUANTITY_EXT]) && is_array($data[self::FIELD_QUANTITY_EXT]))
                ? $data[self::FIELD_QUANTITY_EXT]
                : null;
            if ($data[self::FIELD_QUANTITY] instanceof FHIRQuantity) {
                $this->setQuantity($data[self::FIELD_QUANTITY]);
            } elseif ($ext && is_scalar($data[self::FIELD_QUANTITY])) {
                $this->setQuantity(new FHIRQuantity([FHIRQuantity::FIELD_VALUE => $data[self::FIELD_QUANTITY]] + $ext));
            } else {
                $this->setQuantity(new FHIRQuantity($data[self::FIELD_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_SHELF_LIFE_STORAGE])) {
            if (is_array($data[self::FIELD_SHELF_LIFE_STORAGE])) {
                foreach($data[self::FIELD_SHELF_LIFE_STORAGE] as $v) {
                    if ($v instanceof FHIRProductShelfLife) {
                        $this->addShelfLifeStorage($v);
                    } else {
                        $this->addShelfLifeStorage(new FHIRProductShelfLife($v));
                    }
                }
            } else if ($data[self::FIELD_SHELF_LIFE_STORAGE] instanceof FHIRProductShelfLife) {
                $this->addShelfLifeStorage($data[self::FIELD_SHELF_LIFE_STORAGE]);
            } else {
                $this->addShelfLifeStorage(new FHIRProductShelfLife($data[self::FIELD_SHELF_LIFE_STORAGE]));
            }
        }
        if (isset($data[self::FIELD_STERILISATION_REQUIREMENT])) {
            if ($data[self::FIELD_STERILISATION_REQUIREMENT] instanceof FHIRCodeableConcept) {
                $this->setSterilisationRequirement($data[self::FIELD_STERILISATION_REQUIREMENT]);
            } else {
                $this->setSterilisationRequirement(new FHIRCodeableConcept($data[self::FIELD_STERILISATION_REQUIREMENT]));
            }
        }
        if (isset($data[self::FIELD_STERILITY_INDICATOR])) {
            if ($data[self::FIELD_STERILITY_INDICATOR] instanceof FHIRCodeableConcept) {
                $this->setSterilityIndicator($data[self::FIELD_STERILITY_INDICATOR]);
            } else {
                $this->setSterilityIndicator(new FHIRCodeableConcept($data[self::FIELD_STERILITY_INDICATOR]));
            }
        }
        if (isset($data[self::FIELD_TRADE_NAME])) {
            $ext = (isset($data[self::FIELD_TRADE_NAME_EXT]) && is_array($data[self::FIELD_TRADE_NAME_EXT]))
                ? $data[self::FIELD_TRADE_NAME_EXT]
                : null;
            if ($data[self::FIELD_TRADE_NAME] instanceof FHIRString) {
                $this->setTradeName($data[self::FIELD_TRADE_NAME]);
            } elseif ($ext && is_scalar($data[self::FIELD_TRADE_NAME])) {
                $this->setTradeName(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_TRADE_NAME]] + $ext));
            } else {
                $this->setTradeName(new FHIRString($data[self::FIELD_TRADE_NAME]));
            }
        }
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_USAGE])) {
            if ($data[self::FIELD_USAGE] instanceof FHIRCodeableConcept) {
                $this->setUsage($data[self::FIELD_USAGE]);
            } else {
                $this->setUsage(new FHIRCodeableConcept($data[self::FIELD_USAGE]));
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
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
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
        return "<MedicinalProductDeviceSpec{$xmlns}></MedicinalProductDeviceSpec>";
    }


    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Batch number or expiry date of a device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getBatchIdentifier()
    {
        return $this->batchIdentifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Batch number or expiry date of a device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $batchIdentifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function addBatchIdentifier(FHIRIdentifier $batchIdentifier = null)
    {
        $this->batchIdentifier[] = $batchIdentifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Batch number or expiry date of a device.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $batchIdentifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function setBatchIdentifier(array $batchIdentifier = [])
    {
        $this->batchIdentifier = [];
        if ([] === $batchIdentifier) {
            return $this;
        }
        foreach($batchIdentifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addBatchIdentifier($v);
            } else {
                $this->addBatchIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Business identifier.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Business identifier.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function setIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Device listing number.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getListingNumber()
    {
        return $this->listingNumber;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Device listing number.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $listingNumber
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function setListingNumber($listingNumber = null)
    {
        if (null === $listingNumber) {
            $this->listingNumber = null;
            return $this;
        }
        if ($listingNumber instanceof FHIRString) {
            $this->listingNumber = $listingNumber;
            return $this;
        }
        $this->listingNumber = new FHIRString($listingNumber);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Manufacturer of this Device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Manufacturer of this Device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $manufacturer
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function addManufacturer(FHIRReference $manufacturer = null)
    {
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Manufacturer of this Device.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $manufacturer
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function setManufacturer(array $manufacturer = [])
    {
        $this->manufacturer = [];
        if ([] === $manufacturer) {
            return $this;
        }
        foreach($manufacturer as $v) {
            if ($v instanceof FHIRReference) {
                $this->addManufacturer($v);
            } else {
                $this->addManufacturer(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A detailed description of a device, typically as part of a regulated medicinal
     * product. It is not intended to replace the Device resource, which covers use of
     * device instances.
     *
     * A substance used to create the material(s) of which the device is made.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDeviceSpec\FHIRMedicinalProductDeviceSpecMaterial[]
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * A detailed description of a device, typically as part of a regulated medicinal
     * product. It is not intended to replace the Device resource, which covers use of
     * device instances.
     *
     * A substance used to create the material(s) of which the device is made.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDeviceSpec\FHIRMedicinalProductDeviceSpecMaterial $material
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function addMaterial(FHIRMedicinalProductDeviceSpecMaterial $material = null)
    {
        $this->material[] = $material;
        return $this;
    }

    /**
     * A detailed description of a device, typically as part of a regulated medicinal
     * product. It is not intended to replace the Device resource, which covers use of
     * device instances.
     *
     * A substance used to create the material(s) of which the device is made.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDeviceSpec\FHIRMedicinalProductDeviceSpecMaterial[] $material
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function setMaterial(array $material = [])
    {
        $this->material = [];
        if ([] === $material) {
            return $this;
        }
        foreach($material as $v) {
            if ($v instanceof FHIRMedicinalProductDeviceSpecMaterial) {
                $this->addMaterial($v);
            } else {
                $this->addMaterial(new FHIRMedicinalProductDeviceSpecMaterial($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Device model or reference number.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getModelNumber()
    {
        return $this->modelNumber;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Device model or reference number.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $modelNumber
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function setModelNumber($modelNumber = null)
    {
        if (null === $modelNumber) {
            $this->modelNumber = null;
            return $this;
        }
        if ($modelNumber instanceof FHIRString) {
            $this->modelNumber = $modelNumber;
            return $this;
        }
        $this->modelNumber = new FHIRString($modelNumber);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A nomenclature term for the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getNomenclature()
    {
        return $this->nomenclature;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A nomenclature term for the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $nomenclature
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function addNomenclature(FHIRCodeableConcept $nomenclature = null)
    {
        $this->nomenclature[] = $nomenclature;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * A nomenclature term for the device.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $nomenclature
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function setNomenclature(array $nomenclature = [])
    {
        $this->nomenclature = [];
        if ([] === $nomenclature) {
            return $this;
        }
        foreach($nomenclature as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addNomenclature($v);
            } else {
                $this->addNomenclature(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Other codeable characteristics.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getOtherCharacteristics()
    {
        return $this->otherCharacteristics;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Other codeable characteristics.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $otherCharacteristics
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function addOtherCharacteristics(FHIRCodeableConcept $otherCharacteristics = null)
    {
        $this->otherCharacteristics[] = $otherCharacteristics;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Other codeable characteristics.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $otherCharacteristics
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function setOtherCharacteristics(array $otherCharacteristics = [])
    {
        $this->otherCharacteristics = [];
        if ([] === $otherCharacteristics) {
            return $this;
        }
        foreach($otherCharacteristics as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addOtherCharacteristics($v);
            } else {
                $this->addOtherCharacteristics(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Dimensions, color etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic
     */
    public function getPhysicalCharacteristics()
    {
        return $this->physicalCharacteristics;
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Dimensions, color etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic $physicalCharacteristics
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function setPhysicalCharacteristics(FHIRProdCharacteristic $physicalCharacteristics = null)
    {
        $this->physicalCharacteristics = $physicalCharacteristics;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The quantity of the device present in the packaging of a medicinal product.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The quantity of the device present in the packaging of a medicinal product.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRQuantity $quantity
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function setQuantity(FHIRQuantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * The shelf-life and storage information for a medicinal product item or container
     * can be described using this class.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Shelf Life and storage information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife[]
     */
    public function getShelfLifeStorage()
    {
        return $this->shelfLifeStorage;
    }

    /**
     * The shelf-life and storage information for a medicinal product item or container
     * can be described using this class.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Shelf Life and storage information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife $shelfLifeStorage
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function addShelfLifeStorage(FHIRProductShelfLife $shelfLifeStorage = null)
    {
        $this->shelfLifeStorage[] = $shelfLifeStorage;
        return $this;
    }

    /**
     * The shelf-life and storage information for a medicinal product item or container
     * can be described using this class.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Shelf Life and storage information.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife[] $shelfLifeStorage
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function setShelfLifeStorage(array $shelfLifeStorage = [])
    {
        $this->shelfLifeStorage = [];
        if ([] === $shelfLifeStorage) {
            return $this;
        }
        foreach($shelfLifeStorage as $v) {
            if ($v instanceof FHIRProductShelfLife) {
                $this->addShelfLifeStorage($v);
            } else {
                $this->addShelfLifeStorage(new FHIRProductShelfLife($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Whether the device must be sterilised before use.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getSterilisationRequirement()
    {
        return $this->sterilisationRequirement;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Whether the device must be sterilised before use.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $sterilisationRequirement
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function setSterilisationRequirement(FHIRCodeableConcept $sterilisationRequirement = null)
    {
        $this->sterilisationRequirement = $sterilisationRequirement;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Whether the device is supplied as sterile.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getSterilityIndicator()
    {
        return $this->sterilityIndicator;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Whether the device is supplied as sterile.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $sterilityIndicator
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function setSterilityIndicator(FHIRCodeableConcept $sterilityIndicator = null)
    {
        $this->sterilityIndicator = $sterilityIndicator;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Trade name of the device, where applicable.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getTradeName()
    {
        return $this->tradeName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Trade name of the device, where applicable.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $tradeName
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function setTradeName($tradeName = null)
    {
        if (null === $tradeName) {
            $this->tradeName = null;
            return $this;
        }
        if ($tradeName instanceof FHIRString) {
            $this->tradeName = $tradeName;
            return $this;
        }
        $this->tradeName = new FHIRString($tradeName);
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * The type of device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $type
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function setType(FHIRCodeableConcept $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Usage pattern including the number of times that the device may be used.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Usage pattern including the number of times that the device may be used.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $usage
     * @return \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
     */
    public function setUsage(FHIRCodeableConcept $usage = null)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec
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
                throw new \DomainException(sprintf('FHIRMedicinalProductDeviceSpec::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProductDeviceSpec::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicinalProductDeviceSpec;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProductDeviceSpec)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProductDeviceSpec::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDeviceSpec or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->batchIdentifier)) {
            foreach($children->batchIdentifier as $child) {
                $type->addBatchIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            $type->setIdentifier(FHIRIdentifier::xmlUnserialize($children->identifier));
        }
        if (isset($attributes->listingNumber)) {
            $type->setListingNumber((string)$attributes->listingNumber);
        }
        if (isset($children->listingNumber)) {
            $type->setListingNumber(FHIRString::xmlUnserialize($children->listingNumber));
        }
        if (isset($children->manufacturer)) {
            foreach($children->manufacturer as $child) {
                $type->addManufacturer(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->material)) {
            foreach($children->material as $child) {
                $type->addMaterial(FHIRMedicinalProductDeviceSpecMaterial::xmlUnserialize($child));
            }
        }
        if (isset($attributes->modelNumber)) {
            $type->setModelNumber((string)$attributes->modelNumber);
        }
        if (isset($children->modelNumber)) {
            $type->setModelNumber(FHIRString::xmlUnserialize($children->modelNumber));
        }
        if (isset($children->nomenclature)) {
            foreach($children->nomenclature as $child) {
                $type->addNomenclature(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->otherCharacteristics)) {
            foreach($children->otherCharacteristics as $child) {
                $type->addOtherCharacteristics(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->physicalCharacteristics)) {
            $type->setPhysicalCharacteristics(FHIRProdCharacteristic::xmlUnserialize($children->physicalCharacteristics));
        }
        if (isset($children->quantity)) {
            $type->setQuantity(FHIRQuantity::xmlUnserialize($children->quantity));
        }
        if (isset($children->shelfLifeStorage)) {
            foreach($children->shelfLifeStorage as $child) {
                $type->addShelfLifeStorage(FHIRProductShelfLife::xmlUnserialize($child));
            }
        }
        if (isset($children->sterilisationRequirement)) {
            $type->setSterilisationRequirement(FHIRCodeableConcept::xmlUnserialize($children->sterilisationRequirement));
        }
        if (isset($children->sterilityIndicator)) {
            $type->setSterilityIndicator(FHIRCodeableConcept::xmlUnserialize($children->sterilityIndicator));
        }
        if (isset($attributes->tradeName)) {
            $type->setTradeName((string)$attributes->tradeName);
        }
        if (isset($children->tradeName)) {
            $type->setTradeName(FHIRString::xmlUnserialize($children->tradeName));
        }
        if (isset($children->type)) {
            $type->setType(FHIRCodeableConcept::xmlUnserialize($children->type));
        }
        if (isset($children->usage)) {
            $type->setUsage(FHIRCodeableConcept::xmlUnserialize($children->usage));
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

        if ([] !== ($vs = $this->getBatchIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_BATCH_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getListingNumber())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LISTING_NUMBER, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getManufacturer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MANUFACTURER, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getMaterial())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_MATERIAL, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getModelNumber())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MODEL_NUMBER, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getNomenclature())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOMENCLATURE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if ([] !== ($vs = $this->getOtherCharacteristics())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_OTHER_CHARACTERISTICS, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getPhysicalCharacteristics())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PHYSICAL_CHARACTERISTICS, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getQuantity())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_QUANTITY, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getShelfLifeStorage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SHELF_LIFE_STORAGE, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getSterilisationRequirement())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STERILISATION_REQUIREMENT, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getSterilityIndicator())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STERILITY_INDICATOR, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getTradeName())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TRADE_NAME, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_TYPE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getUsage())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_USAGE, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getBatchIdentifier())) {
            $a[self::FIELD_BATCH_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $v;
        }
        if (null !== ($v = $this->getListingNumber())) {
            $a[self::FIELD_LISTING_NUMBER] = $v->getValue();
            $a[self::FIELD_LISTING_NUMBER_EXT] = $v;
        }
        if ([] !== ($vs = $this->getManufacturer())) {
            $a[self::FIELD_MANUFACTURER] = $vs;
        }
        if ([] !== ($vs = $this->getMaterial())) {
            $a[self::FIELD_MATERIAL] = $vs;
        }
        if (null !== ($v = $this->getModelNumber())) {
            $a[self::FIELD_MODEL_NUMBER] = $v->getValue();
            $a[self::FIELD_MODEL_NUMBER_EXT] = $v;
        }
        if ([] !== ($vs = $this->getNomenclature())) {
            $a[self::FIELD_NOMENCLATURE] = $vs;
        }
        if ([] !== ($vs = $this->getOtherCharacteristics())) {
            $a[self::FIELD_OTHER_CHARACTERISTICS] = $vs;
        }
        if (null !== ($v = $this->getPhysicalCharacteristics())) {
            $a[self::FIELD_PHYSICAL_CHARACTERISTICS] = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            $a[self::FIELD_QUANTITY] = $v;
        }
        if ([] !== ($vs = $this->getShelfLifeStorage())) {
            $a[self::FIELD_SHELF_LIFE_STORAGE] = $vs;
        }
        if (null !== ($v = $this->getSterilisationRequirement())) {
            $a[self::FIELD_STERILISATION_REQUIREMENT] = $v;
        }
        if (null !== ($v = $this->getSterilityIndicator())) {
            $a[self::FIELD_STERILITY_INDICATOR] = $v;
        }
        if (null !== ($v = $this->getTradeName())) {
            $a[self::FIELD_TRADE_NAME] = $v->getValue();
            $a[self::FIELD_TRADE_NAME_EXT] = $v;
        }
        if (null !== ($v = $this->getType())) {
            $a[self::FIELD_TYPE] = $v;
        }
        if (null !== ($v = $this->getUsage())) {
            $a[self::FIELD_USAGE] = $v;
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