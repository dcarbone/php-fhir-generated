<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: July 10th, 2024 03:24+0000
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

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionChargeItem;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionClassification;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionConformsTo;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionCorrectiveAction;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionDeviceName;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionGuideline;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionHasPart;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionLink;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMaterial;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionPackaging;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionProperty;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionRegulatoryIdentifier;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionVersion;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRProductShelfLife;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDeviceProductionIdentifierInUDI;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R5\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
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
 * The characteristics, operational status and capabilities of a medical-related
 * component of a medical device.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRDeviceDefinition
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource
 */
class FHIRDeviceDefinition extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION;

    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_UDI_DEVICE_IDENTIFIER = 'udiDeviceIdentifier';
    const FIELD_REGULATORY_IDENTIFIER = 'regulatoryIdentifier';
    const FIELD_PART_NUMBER = 'partNumber';
    const FIELD_PART_NUMBER_EXT = '_partNumber';
    const FIELD_MANUFACTURER = 'manufacturer';
    const FIELD_DEVICE_NAME = 'deviceName';
    const FIELD_MODEL_NUMBER = 'modelNumber';
    const FIELD_MODEL_NUMBER_EXT = '_modelNumber';
    const FIELD_CLASSIFICATION = 'classification';
    const FIELD_CONFORMS_TO = 'conformsTo';
    const FIELD_HAS_PART = 'hasPart';
    const FIELD_PACKAGING = 'packaging';
    const FIELD_VERSION = 'version';
    const FIELD_SAFETY = 'safety';
    const FIELD_SHELF_LIFE_STORAGE = 'shelfLifeStorage';
    const FIELD_LANGUAGE_CODE = 'languageCode';
    const FIELD_PROPERTY = 'property';
    const FIELD_OWNER = 'owner';
    const FIELD_CONTACT = 'contact';
    const FIELD_LINK = 'link';
    const FIELD_NOTE = 'note';
    const FIELD_MATERIAL = 'material';
    const FIELD_PRODUCTION_IDENTIFIER_IN_UDI = 'productionIdentifierInUDI';
    const FIELD_PRODUCTION_IDENTIFIER_IN_UDI_EXT = '_productionIdentifierInUDI';
    const FIELD_GUIDELINE = 'guideline';
    const FIELD_CORRECTIVE_ACTION = 'correctiveAction';
    const FIELD_CHARGE_ITEM = 'chargeItem';

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Additional information to describe the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $description = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique instance identifiers assigned to a device by the software, manufacturers,
     * other organizations or owners. For example: handle ID. The identifier is
     * typically valued if the udiDeviceIdentifier, partNumber or modelNumber is not
     * valued and represents a different type of identifier. However, it is permissible
     * to still include those identifiers in DeviceDefinition.identifier with the
     * appropriate identifier.type.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Unique device identifier (UDI) assigned to device label or package. Note that
     * the Device may include multiple udiCarriers as it either may include just the
     * udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it
     * could have been sold.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier[]
     */
    protected null|array $udiDeviceIdentifier = [];
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Identifier associated with the regulatory documentation (certificates, technical
     * documentation, post-market surveillance documentation and reports) of a set of
     * device models sharing the same intended purpose, risk class and essential design
     * and manufacturing characteristics. One example is the Basic UDI-DI in Europe.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionRegulatoryIdentifier[]
     */
    protected null|array $regulatoryIdentifier = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The part number or catalog number of the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $partNumber = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name of the manufacturer or legal representative e.g. labeler. Whether this is
     * the actual manufacturer or the labeler or responsible depends on implementation
     * and jurisdiction.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $manufacturer = null;
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * The name or names of the device as given by the manufacturer.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionDeviceName[]
     */
    protected null|array $deviceName = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The model number for the device for example as defined by the manufacturer or
     * labeler, or other agency.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $modelNumber = null;
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * What kind of device or device system this is.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionClassification[]
     */
    protected null|array $classification = [];
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Identifies the standards, specifications, or formal guidances for the
     * capabilities supported by the device. The device may be certified as conformant
     * to these specifications e.g., communication, performance, process, measurement,
     * or specialization standards.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionConformsTo[]
     */
    protected null|array $conformsTo = [];
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * A device that is part (for example a component) of the present device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionHasPart[]
     */
    protected null|array $hasPart = [];
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Information about the packaging of the device, i.e. how the device is packaged.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionPackaging[]
     */
    protected null|array $packaging = [];
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * The version of the device or software.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionVersion[]
     */
    protected null|array $version = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Safety characteristics of the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $safety = [];
    /**
     * The shelf-life and storage information for a medicinal product item or container
     * can be described using this class.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Shelf Life and storage information.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRProductShelfLife[]
     */
    protected null|array $shelfLifeStorage = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Language code for the human-readable text strings produced by the device (all
     * supported).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    protected null|array $languageCode = [];
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Static or essentially fixed characteristics or features of this kind of device
     * that are otherwise not captured in more specific attributes, e.g., time or
     * timing attributes, resolution, accuracy, and physical attributes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionProperty[]
     */
    protected null|array $property = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An organization that is responsible for the provision and ongoing maintenance of
     * the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $owner = null;
    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details for an organization or a particular human that is responsible
     * for the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint[]
     */
    protected null|array $contact = [];
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * An associated device, attached to, used with, communicating with or linking a
     * previous or new device model to the focal device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionLink[]
     */
    protected null|array $link = [];
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive information, usage information or implantation information that is
     * not captured in an existing element.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    protected null|array $note = [];
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * A substance used to create the material(s) of which the device is made.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMaterial[]
     */
    protected null|array $material = [];
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the production identifier(s) that are expected to appear in the UDI
     * carrier on the device label.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDeviceProductionIdentifierInUDI[]
     */
    protected null|array $productionIdentifierInUDI = [];
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Information aimed at providing directions for the usage of this model of device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionGuideline
     */
    protected null|FHIRDeviceDefinitionGuideline $guideline = null;
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Tracking of latest field safety corrective action.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionCorrectiveAction
     */
    protected null|FHIRDeviceDefinitionCorrectiveAction $correctiveAction = null;
    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Billing code or reference associated with the device.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionChargeItem[]
     */
    protected null|array $chargeItem = [];

    /**
     * Validation map for fields in type DeviceDefinition
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRDeviceDefinition Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_DESCRIPTION, $data) || array_key_exists(self::FIELD_DESCRIPTION_EXT, $data)) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRMarkdown($ext));
            } else {
                $this->setDescription(new FHIRMarkdown(null));
            }
        }
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
        if (array_key_exists(self::FIELD_UDI_DEVICE_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_UDI_DEVICE_IDENTIFIER])) {
                foreach($data[self::FIELD_UDI_DEVICE_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRDeviceDefinitionUdiDeviceIdentifier) {
                        $this->addUdiDeviceIdentifier($v);
                    } else {
                        $this->addUdiDeviceIdentifier(new FHIRDeviceDefinitionUdiDeviceIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_UDI_DEVICE_IDENTIFIER] instanceof FHIRDeviceDefinitionUdiDeviceIdentifier) {
                $this->addUdiDeviceIdentifier($data[self::FIELD_UDI_DEVICE_IDENTIFIER]);
            } else {
                $this->addUdiDeviceIdentifier(new FHIRDeviceDefinitionUdiDeviceIdentifier($data[self::FIELD_UDI_DEVICE_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_REGULATORY_IDENTIFIER, $data)) {
            if (is_array($data[self::FIELD_REGULATORY_IDENTIFIER])) {
                foreach($data[self::FIELD_REGULATORY_IDENTIFIER] as $v) {
                    if ($v instanceof FHIRDeviceDefinitionRegulatoryIdentifier) {
                        $this->addRegulatoryIdentifier($v);
                    } else {
                        $this->addRegulatoryIdentifier(new FHIRDeviceDefinitionRegulatoryIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_REGULATORY_IDENTIFIER] instanceof FHIRDeviceDefinitionRegulatoryIdentifier) {
                $this->addRegulatoryIdentifier($data[self::FIELD_REGULATORY_IDENTIFIER]);
            } else {
                $this->addRegulatoryIdentifier(new FHIRDeviceDefinitionRegulatoryIdentifier($data[self::FIELD_REGULATORY_IDENTIFIER]));
            }
        }
        if (array_key_exists(self::FIELD_PART_NUMBER, $data) || array_key_exists(self::FIELD_PART_NUMBER_EXT, $data)) {
            $value = $data[self::FIELD_PART_NUMBER] ?? null;
            $ext = (isset($data[self::FIELD_PART_NUMBER_EXT]) && is_array($data[self::FIELD_PART_NUMBER_EXT])) ? $data[self::FIELD_PART_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPartNumber($value);
                } else if (is_array($value)) {
                    $this->setPartNumber(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPartNumber(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPartNumber(new FHIRString($ext));
            } else {
                $this->setPartNumber(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_MANUFACTURER, $data)) {
            if ($data[self::FIELD_MANUFACTURER] instanceof FHIRReference) {
                $this->setManufacturer($data[self::FIELD_MANUFACTURER]);
            } else {
                $this->setManufacturer(new FHIRReference($data[self::FIELD_MANUFACTURER]));
            }
        }
        if (array_key_exists(self::FIELD_DEVICE_NAME, $data)) {
            if (is_array($data[self::FIELD_DEVICE_NAME])) {
                foreach($data[self::FIELD_DEVICE_NAME] as $v) {
                    if ($v instanceof FHIRDeviceDefinitionDeviceName) {
                        $this->addDeviceName($v);
                    } else {
                        $this->addDeviceName(new FHIRDeviceDefinitionDeviceName($v));
                    }
                }
            } elseif ($data[self::FIELD_DEVICE_NAME] instanceof FHIRDeviceDefinitionDeviceName) {
                $this->addDeviceName($data[self::FIELD_DEVICE_NAME]);
            } else {
                $this->addDeviceName(new FHIRDeviceDefinitionDeviceName($data[self::FIELD_DEVICE_NAME]));
            }
        }
        if (array_key_exists(self::FIELD_MODEL_NUMBER, $data) || array_key_exists(self::FIELD_MODEL_NUMBER_EXT, $data)) {
            $value = $data[self::FIELD_MODEL_NUMBER] ?? null;
            $ext = (isset($data[self::FIELD_MODEL_NUMBER_EXT]) && is_array($data[self::FIELD_MODEL_NUMBER_EXT])) ? $data[self::FIELD_MODEL_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setModelNumber($value);
                } else if (is_array($value)) {
                    $this->setModelNumber(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setModelNumber(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setModelNumber(new FHIRString($ext));
            } else {
                $this->setModelNumber(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_CLASSIFICATION, $data)) {
            if (is_array($data[self::FIELD_CLASSIFICATION])) {
                foreach($data[self::FIELD_CLASSIFICATION] as $v) {
                    if ($v instanceof FHIRDeviceDefinitionClassification) {
                        $this->addClassification($v);
                    } else {
                        $this->addClassification(new FHIRDeviceDefinitionClassification($v));
                    }
                }
            } elseif ($data[self::FIELD_CLASSIFICATION] instanceof FHIRDeviceDefinitionClassification) {
                $this->addClassification($data[self::FIELD_CLASSIFICATION]);
            } else {
                $this->addClassification(new FHIRDeviceDefinitionClassification($data[self::FIELD_CLASSIFICATION]));
            }
        }
        if (array_key_exists(self::FIELD_CONFORMS_TO, $data)) {
            if (is_array($data[self::FIELD_CONFORMS_TO])) {
                foreach($data[self::FIELD_CONFORMS_TO] as $v) {
                    if ($v instanceof FHIRDeviceDefinitionConformsTo) {
                        $this->addConformsTo($v);
                    } else {
                        $this->addConformsTo(new FHIRDeviceDefinitionConformsTo($v));
                    }
                }
            } elseif ($data[self::FIELD_CONFORMS_TO] instanceof FHIRDeviceDefinitionConformsTo) {
                $this->addConformsTo($data[self::FIELD_CONFORMS_TO]);
            } else {
                $this->addConformsTo(new FHIRDeviceDefinitionConformsTo($data[self::FIELD_CONFORMS_TO]));
            }
        }
        if (array_key_exists(self::FIELD_HAS_PART, $data)) {
            if (is_array($data[self::FIELD_HAS_PART])) {
                foreach($data[self::FIELD_HAS_PART] as $v) {
                    if ($v instanceof FHIRDeviceDefinitionHasPart) {
                        $this->addHasPart($v);
                    } else {
                        $this->addHasPart(new FHIRDeviceDefinitionHasPart($v));
                    }
                }
            } elseif ($data[self::FIELD_HAS_PART] instanceof FHIRDeviceDefinitionHasPart) {
                $this->addHasPart($data[self::FIELD_HAS_PART]);
            } else {
                $this->addHasPart(new FHIRDeviceDefinitionHasPart($data[self::FIELD_HAS_PART]));
            }
        }
        if (array_key_exists(self::FIELD_PACKAGING, $data)) {
            if (is_array($data[self::FIELD_PACKAGING])) {
                foreach($data[self::FIELD_PACKAGING] as $v) {
                    if ($v instanceof FHIRDeviceDefinitionPackaging) {
                        $this->addPackaging($v);
                    } else {
                        $this->addPackaging(new FHIRDeviceDefinitionPackaging($v));
                    }
                }
            } elseif ($data[self::FIELD_PACKAGING] instanceof FHIRDeviceDefinitionPackaging) {
                $this->addPackaging($data[self::FIELD_PACKAGING]);
            } else {
                $this->addPackaging(new FHIRDeviceDefinitionPackaging($data[self::FIELD_PACKAGING]));
            }
        }
        if (array_key_exists(self::FIELD_VERSION, $data)) {
            if (is_array($data[self::FIELD_VERSION])) {
                foreach($data[self::FIELD_VERSION] as $v) {
                    if ($v instanceof FHIRDeviceDefinitionVersion) {
                        $this->addVersion($v);
                    } else {
                        $this->addVersion(new FHIRDeviceDefinitionVersion($v));
                    }
                }
            } elseif ($data[self::FIELD_VERSION] instanceof FHIRDeviceDefinitionVersion) {
                $this->addVersion($data[self::FIELD_VERSION]);
            } else {
                $this->addVersion(new FHIRDeviceDefinitionVersion($data[self::FIELD_VERSION]));
            }
        }
        if (array_key_exists(self::FIELD_SAFETY, $data)) {
            if (is_array($data[self::FIELD_SAFETY])) {
                foreach($data[self::FIELD_SAFETY] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSafety($v);
                    } else {
                        $this->addSafety(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_SAFETY] instanceof FHIRCodeableConcept) {
                $this->addSafety($data[self::FIELD_SAFETY]);
            } else {
                $this->addSafety(new FHIRCodeableConcept($data[self::FIELD_SAFETY]));
            }
        }
        if (array_key_exists(self::FIELD_SHELF_LIFE_STORAGE, $data)) {
            if (is_array($data[self::FIELD_SHELF_LIFE_STORAGE])) {
                foreach($data[self::FIELD_SHELF_LIFE_STORAGE] as $v) {
                    if ($v instanceof FHIRProductShelfLife) {
                        $this->addShelfLifeStorage($v);
                    } else {
                        $this->addShelfLifeStorage(new FHIRProductShelfLife($v));
                    }
                }
            } elseif ($data[self::FIELD_SHELF_LIFE_STORAGE] instanceof FHIRProductShelfLife) {
                $this->addShelfLifeStorage($data[self::FIELD_SHELF_LIFE_STORAGE]);
            } else {
                $this->addShelfLifeStorage(new FHIRProductShelfLife($data[self::FIELD_SHELF_LIFE_STORAGE]));
            }
        }
        if (array_key_exists(self::FIELD_LANGUAGE_CODE, $data)) {
            if (is_array($data[self::FIELD_LANGUAGE_CODE])) {
                foreach($data[self::FIELD_LANGUAGE_CODE] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addLanguageCode($v);
                    } else {
                        $this->addLanguageCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_LANGUAGE_CODE] instanceof FHIRCodeableConcept) {
                $this->addLanguageCode($data[self::FIELD_LANGUAGE_CODE]);
            } else {
                $this->addLanguageCode(new FHIRCodeableConcept($data[self::FIELD_LANGUAGE_CODE]));
            }
        }
        if (array_key_exists(self::FIELD_PROPERTY, $data)) {
            if (is_array($data[self::FIELD_PROPERTY])) {
                foreach($data[self::FIELD_PROPERTY] as $v) {
                    if ($v instanceof FHIRDeviceDefinitionProperty) {
                        $this->addProperty($v);
                    } else {
                        $this->addProperty(new FHIRDeviceDefinitionProperty($v));
                    }
                }
            } elseif ($data[self::FIELD_PROPERTY] instanceof FHIRDeviceDefinitionProperty) {
                $this->addProperty($data[self::FIELD_PROPERTY]);
            } else {
                $this->addProperty(new FHIRDeviceDefinitionProperty($data[self::FIELD_PROPERTY]));
            }
        }
        if (array_key_exists(self::FIELD_OWNER, $data)) {
            if ($data[self::FIELD_OWNER] instanceof FHIRReference) {
                $this->setOwner($data[self::FIELD_OWNER]);
            } else {
                $this->setOwner(new FHIRReference($data[self::FIELD_OWNER]));
            }
        }
        if (array_key_exists(self::FIELD_CONTACT, $data)) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if ($v instanceof FHIRContactPoint) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRContactPoint($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTACT] instanceof FHIRContactPoint) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRContactPoint($data[self::FIELD_CONTACT]));
            }
        }
        if (array_key_exists(self::FIELD_LINK, $data)) {
            if (is_array($data[self::FIELD_LINK])) {
                foreach($data[self::FIELD_LINK] as $v) {
                    if ($v instanceof FHIRDeviceDefinitionLink) {
                        $this->addLink($v);
                    } else {
                        $this->addLink(new FHIRDeviceDefinitionLink($v));
                    }
                }
            } elseif ($data[self::FIELD_LINK] instanceof FHIRDeviceDefinitionLink) {
                $this->addLink($data[self::FIELD_LINK]);
            } else {
                $this->addLink(new FHIRDeviceDefinitionLink($data[self::FIELD_LINK]));
            }
        }
        if (array_key_exists(self::FIELD_NOTE, $data)) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (array_key_exists(self::FIELD_MATERIAL, $data)) {
            if (is_array($data[self::FIELD_MATERIAL])) {
                foreach($data[self::FIELD_MATERIAL] as $v) {
                    if ($v instanceof FHIRDeviceDefinitionMaterial) {
                        $this->addMaterial($v);
                    } else {
                        $this->addMaterial(new FHIRDeviceDefinitionMaterial($v));
                    }
                }
            } elseif ($data[self::FIELD_MATERIAL] instanceof FHIRDeviceDefinitionMaterial) {
                $this->addMaterial($data[self::FIELD_MATERIAL]);
            } else {
                $this->addMaterial(new FHIRDeviceDefinitionMaterial($data[self::FIELD_MATERIAL]));
            }
        }
        if (array_key_exists(self::FIELD_PRODUCTION_IDENTIFIER_IN_UDI, $data) || array_key_exists(self::FIELD_PRODUCTION_IDENTIFIER_IN_UDI_EXT, $data)) {
            $value = $data[self::FIELD_PRODUCTION_IDENTIFIER_IN_UDI] ?? null;
            $ext = (isset($data[self::FIELD_PRODUCTION_IDENTIFIER_IN_UDI_EXT]) && is_array($data[self::FIELD_PRODUCTION_IDENTIFIER_IN_UDI_EXT])) ? $data[self::FIELD_PRODUCTION_IDENTIFIER_IN_UDI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDeviceProductionIdentifierInUDI) {
                    $this->addProductionIdentifierInUDI($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDeviceProductionIdentifierInUDI) {
                            $this->addProductionIdentifierInUDI($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addProductionIdentifierInUDI(new FHIRDeviceProductionIdentifierInUDI(array_merge($v, $iext)));
                            } else {
                                $this->addProductionIdentifierInUDI(new FHIRDeviceProductionIdentifierInUDI([FHIRDeviceProductionIdentifierInUDI::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addProductionIdentifierInUDI(new FHIRDeviceProductionIdentifierInUDI(array_merge($ext, $value)));
                } else {
                    $this->addProductionIdentifierInUDI(new FHIRDeviceProductionIdentifierInUDI([FHIRDeviceProductionIdentifierInUDI::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addProductionIdentifierInUDI(new FHIRDeviceProductionIdentifierInUDI($iext));
                }
            } else {
                $this->addProductionIdentifierInUDI(new FHIRDeviceProductionIdentifierInUDI(null));
            }
        }
        if (array_key_exists(self::FIELD_GUIDELINE, $data)) {
            if ($data[self::FIELD_GUIDELINE] instanceof FHIRDeviceDefinitionGuideline) {
                $this->setGuideline($data[self::FIELD_GUIDELINE]);
            } else {
                $this->setGuideline(new FHIRDeviceDefinitionGuideline($data[self::FIELD_GUIDELINE]));
            }
        }
        if (array_key_exists(self::FIELD_CORRECTIVE_ACTION, $data)) {
            if ($data[self::FIELD_CORRECTIVE_ACTION] instanceof FHIRDeviceDefinitionCorrectiveAction) {
                $this->setCorrectiveAction($data[self::FIELD_CORRECTIVE_ACTION]);
            } else {
                $this->setCorrectiveAction(new FHIRDeviceDefinitionCorrectiveAction($data[self::FIELD_CORRECTIVE_ACTION]));
            }
        }
        if (array_key_exists(self::FIELD_CHARGE_ITEM, $data)) {
            if (is_array($data[self::FIELD_CHARGE_ITEM])) {
                foreach($data[self::FIELD_CHARGE_ITEM] as $v) {
                    if ($v instanceof FHIRDeviceDefinitionChargeItem) {
                        $this->addChargeItem($v);
                    } else {
                        $this->addChargeItem(new FHIRDeviceDefinitionChargeItem($v));
                    }
                }
            } elseif ($data[self::FIELD_CHARGE_ITEM] instanceof FHIRDeviceDefinitionChargeItem) {
                $this->addChargeItem($data[self::FIELD_CHARGE_ITEM]);
            } else {
                $this->addChargeItem(new FHIRDeviceDefinitionChargeItem($data[self::FIELD_CHARGE_ITEM]));
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
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Additional information to describe the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
    {
        return $this->description;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Additional information to describe the device.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRMarkdown $description
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $description && !($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown($description);
        }
        $this->_trackValueSet($this->description, $description);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_DESCRIPTION])) {
            $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION][0] = $xmlLocation;
        $this->description = $description;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique instance identifiers assigned to a device by the software, manufacturers,
     * other organizations or owners. For example: handle ID. The identifier is
     * typically valued if the udiDeviceIdentifier, partNumber or modelNumber is not
     * valued and represents a different type of identifier. However, it is permissible
     * to still include those identifiers in DeviceDefinition.identifier with the
     * appropriate identifier.type.
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
     * Unique instance identifiers assigned to a device by the software, manufacturers,
     * other organizations or owners. For example: handle ID. The identifier is
     * typically valued if the udiDeviceIdentifier, partNumber or modelNumber is not
     * valued and represents a different type of identifier. However, it is permissible
     * to still include those identifiers in DeviceDefinition.identifier with the
     * appropriate identifier.type.
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
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Unique device identifier (UDI) assigned to device label or package. Note that
     * the Device may include multiple udiCarriers as it either may include just the
     * udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it
     * could have been sold.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier[]
     */
    public function getUdiDeviceIdentifier(): null|array
    {
        return $this->udiDeviceIdentifier;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Unique device identifier (UDI) assigned to device label or package. Note that
     * the Device may include multiple udiCarriers as it either may include just the
     * udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it
     * could have been sold.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier $udiDeviceIdentifier
     * @return static
     */
    public function addUdiDeviceIdentifier(null|FHIRDeviceDefinitionUdiDeviceIdentifier $udiDeviceIdentifier = null): self
    {
        if (null === $udiDeviceIdentifier) {
            $udiDeviceIdentifier = new FHIRDeviceDefinitionUdiDeviceIdentifier();
        }
        $this->_trackValueAdded();
        $this->udiDeviceIdentifier[] = $udiDeviceIdentifier;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Identifier associated with the regulatory documentation (certificates, technical
     * documentation, post-market surveillance documentation and reports) of a set of
     * device models sharing the same intended purpose, risk class and essential design
     * and manufacturing characteristics. One example is the Basic UDI-DI in Europe.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionRegulatoryIdentifier[]
     */
    public function getRegulatoryIdentifier(): null|array
    {
        return $this->regulatoryIdentifier;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Identifier associated with the regulatory documentation (certificates, technical
     * documentation, post-market surveillance documentation and reports) of a set of
     * device models sharing the same intended purpose, risk class and essential design
     * and manufacturing characteristics. One example is the Basic UDI-DI in Europe.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionRegulatoryIdentifier $regulatoryIdentifier
     * @return static
     */
    public function addRegulatoryIdentifier(null|FHIRDeviceDefinitionRegulatoryIdentifier $regulatoryIdentifier = null): self
    {
        if (null === $regulatoryIdentifier) {
            $regulatoryIdentifier = new FHIRDeviceDefinitionRegulatoryIdentifier();
        }
        $this->_trackValueAdded();
        $this->regulatoryIdentifier[] = $regulatoryIdentifier;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The part number or catalog number of the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getPartNumber(): null|FHIRString
    {
        return $this->partNumber;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The part number or catalog number of the device.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $partNumber
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPartNumber(null|string|FHIRStringPrimitive|FHIRString $partNumber = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $partNumber && !($partNumber instanceof FHIRString)) {
            $partNumber = new FHIRString($partNumber);
        }
        $this->_trackValueSet($this->partNumber, $partNumber);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_PART_NUMBER])) {
            $this->_primitiveXmlLocations[self::FIELD_PART_NUMBER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_PART_NUMBER][0] = $xmlLocation;
        $this->partNumber = $partNumber;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name of the manufacturer or legal representative e.g. labeler. Whether this is
     * the actual manufacturer or the labeler or responsible depends on implementation
     * and jurisdiction.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getManufacturer(): null|FHIRReference
    {
        return $this->manufacturer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name of the manufacturer or legal representative e.g. labeler. Whether this is
     * the actual manufacturer or the labeler or responsible depends on implementation
     * and jurisdiction.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $manufacturer
     * @return static
     */
    public function setManufacturer(null|FHIRReference $manufacturer = null): self
    {
        if (null === $manufacturer) {
            $manufacturer = new FHIRReference();
        }
        $this->_trackValueSet($this->manufacturer, $manufacturer);
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * The name or names of the device as given by the manufacturer.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionDeviceName[]
     */
    public function getDeviceName(): null|array
    {
        return $this->deviceName;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * The name or names of the device as given by the manufacturer.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionDeviceName $deviceName
     * @return static
     */
    public function addDeviceName(null|FHIRDeviceDefinitionDeviceName $deviceName = null): self
    {
        if (null === $deviceName) {
            $deviceName = new FHIRDeviceDefinitionDeviceName();
        }
        $this->_trackValueAdded();
        $this->deviceName[] = $deviceName;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The model number for the device for example as defined by the manufacturer or
     * labeler, or other agency.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getModelNumber(): null|FHIRString
    {
        return $this->modelNumber;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The model number for the device for example as defined by the manufacturer or
     * labeler, or other agency.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $modelNumber
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setModelNumber(null|string|FHIRStringPrimitive|FHIRString $modelNumber = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ATTRIBUTE): self
    {
        if (null !== $modelNumber && !($modelNumber instanceof FHIRString)) {
            $modelNumber = new FHIRString($modelNumber);
        }
        $this->_trackValueSet($this->modelNumber, $modelNumber);
        if (!isset($this->_primitiveXmlLocations[self::FIELD_MODEL_NUMBER])) {
            $this->_primitiveXmlLocations[self::FIELD_MODEL_NUMBER] = [];
        }
        $this->_primitiveXmlLocations[self::FIELD_MODEL_NUMBER][0] = $xmlLocation;
        $this->modelNumber = $modelNumber;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * What kind of device or device system this is.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionClassification[]
     */
    public function getClassification(): null|array
    {
        return $this->classification;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * What kind of device or device system this is.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionClassification $classification
     * @return static
     */
    public function addClassification(null|FHIRDeviceDefinitionClassification $classification = null): self
    {
        if (null === $classification) {
            $classification = new FHIRDeviceDefinitionClassification();
        }
        $this->_trackValueAdded();
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Identifies the standards, specifications, or formal guidances for the
     * capabilities supported by the device. The device may be certified as conformant
     * to these specifications e.g., communication, performance, process, measurement,
     * or specialization standards.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionConformsTo[]
     */
    public function getConformsTo(): null|array
    {
        return $this->conformsTo;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Identifies the standards, specifications, or formal guidances for the
     * capabilities supported by the device. The device may be certified as conformant
     * to these specifications e.g., communication, performance, process, measurement,
     * or specialization standards.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionConformsTo $conformsTo
     * @return static
     */
    public function addConformsTo(null|FHIRDeviceDefinitionConformsTo $conformsTo = null): self
    {
        if (null === $conformsTo) {
            $conformsTo = new FHIRDeviceDefinitionConformsTo();
        }
        $this->_trackValueAdded();
        $this->conformsTo[] = $conformsTo;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * A device that is part (for example a component) of the present device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionHasPart[]
     */
    public function getHasPart(): null|array
    {
        return $this->hasPart;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * A device that is part (for example a component) of the present device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionHasPart $hasPart
     * @return static
     */
    public function addHasPart(null|FHIRDeviceDefinitionHasPart $hasPart = null): self
    {
        if (null === $hasPart) {
            $hasPart = new FHIRDeviceDefinitionHasPart();
        }
        $this->_trackValueAdded();
        $this->hasPart[] = $hasPart;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Information about the packaging of the device, i.e. how the device is packaged.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionPackaging[]
     */
    public function getPackaging(): null|array
    {
        return $this->packaging;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Information about the packaging of the device, i.e. how the device is packaged.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionPackaging $packaging
     * @return static
     */
    public function addPackaging(null|FHIRDeviceDefinitionPackaging $packaging = null): self
    {
        if (null === $packaging) {
            $packaging = new FHIRDeviceDefinitionPackaging();
        }
        $this->_trackValueAdded();
        $this->packaging[] = $packaging;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * The version of the device or software.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionVersion[]
     */
    public function getVersion(): null|array
    {
        return $this->version;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * The version of the device or software.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionVersion $version
     * @return static
     */
    public function addVersion(null|FHIRDeviceDefinitionVersion $version = null): self
    {
        if (null === $version) {
            $version = new FHIRDeviceDefinitionVersion();
        }
        $this->_trackValueAdded();
        $this->version[] = $version;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Safety characteristics of the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getSafety(): null|array
    {
        return $this->safety;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Safety characteristics of the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $safety
     * @return static
     */
    public function addSafety(null|FHIRCodeableConcept $safety = null): self
    {
        if (null === $safety) {
            $safety = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->safety[] = $safety;
        return $this;
    }

    /**
     * The shelf-life and storage information for a medicinal product item or container
     * can be described using this class.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Shelf Life and storage information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRProductShelfLife[]
     */
    public function getShelfLifeStorage(): null|array
    {
        return $this->shelfLifeStorage;
    }

    /**
     * The shelf-life and storage information for a medicinal product item or container
     * can be described using this class.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Shelf Life and storage information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRBackboneType\FHIRProductShelfLife $shelfLifeStorage
     * @return static
     */
    public function addShelfLifeStorage(null|FHIRProductShelfLife $shelfLifeStorage = null): self
    {
        if (null === $shelfLifeStorage) {
            $shelfLifeStorage = new FHIRProductShelfLife();
        }
        $this->_trackValueAdded();
        $this->shelfLifeStorage[] = $shelfLifeStorage;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Language code for the human-readable text strings produced by the device (all
     * supported).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getLanguageCode(): null|array
    {
        return $this->languageCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Language code for the human-readable text strings produced by the device (all
     * supported).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $languageCode
     * @return static
     */
    public function addLanguageCode(null|FHIRCodeableConcept $languageCode = null): self
    {
        if (null === $languageCode) {
            $languageCode = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->languageCode[] = $languageCode;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Static or essentially fixed characteristics or features of this kind of device
     * that are otherwise not captured in more specific attributes, e.g., time or
     * timing attributes, resolution, accuracy, and physical attributes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionProperty[]
     */
    public function getProperty(): null|array
    {
        return $this->property;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Static or essentially fixed characteristics or features of this kind of device
     * that are otherwise not captured in more specific attributes, e.g., time or
     * timing attributes, resolution, accuracy, and physical attributes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionProperty $property
     * @return static
     */
    public function addProperty(null|FHIRDeviceDefinitionProperty $property = null): self
    {
        if (null === $property) {
            $property = new FHIRDeviceDefinitionProperty();
        }
        $this->_trackValueAdded();
        $this->property[] = $property;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An organization that is responsible for the provision and ongoing maintenance of
     * the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getOwner(): null|FHIRReference
    {
        return $this->owner;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An organization that is responsible for the provision and ongoing maintenance of
     * the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $owner
     * @return static
     */
    public function setOwner(null|FHIRReference $owner = null): self
    {
        if (null === $owner) {
            $owner = new FHIRReference();
        }
        $this->_trackValueSet($this->owner, $owner);
        $this->owner = $owner;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details for an organization or a particular human that is responsible
     * for the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint[]
     */
    public function getContact(): null|array
    {
        return $this->contact;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details for an organization or a particular human that is responsible
     * for the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRContactPoint $contact
     * @return static
     */
    public function addContact(null|FHIRContactPoint $contact = null): self
    {
        if (null === $contact) {
            $contact = new FHIRContactPoint();
        }
        $this->_trackValueAdded();
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * An associated device, attached to, used with, communicating with or linking a
     * previous or new device model to the focal device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionLink[]
     */
    public function getLink(): null|array
    {
        return $this->link;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * An associated device, attached to, used with, communicating with or linking a
     * previous or new device model to the focal device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionLink $link
     * @return static
     */
    public function addLink(null|FHIRDeviceDefinitionLink $link = null): self
    {
        if (null === $link) {
            $link = new FHIRDeviceDefinitionLink();
        }
        $this->_trackValueAdded();
        $this->link[] = $link;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive information, usage information or implantation information that is
     * not captured in an existing element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation[]
     */
    public function getNote(): null|array
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Descriptive information, usage information or implantation information that is
     * not captured in an existing element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRAnnotation $note
     * @return static
     */
    public function addNote(null|FHIRAnnotation $note = null): self
    {
        if (null === $note) {
            $note = new FHIRAnnotation();
        }
        $this->_trackValueAdded();
        $this->note[] = $note;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * A substance used to create the material(s) of which the device is made.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMaterial[]
     */
    public function getMaterial(): null|array
    {
        return $this->material;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * A substance used to create the material(s) of which the device is made.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMaterial $material
     * @return static
     */
    public function addMaterial(null|FHIRDeviceDefinitionMaterial $material = null): self
    {
        if (null === $material) {
            $material = new FHIRDeviceDefinitionMaterial();
        }
        $this->_trackValueAdded();
        $this->material[] = $material;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the production identifier(s) that are expected to appear in the UDI
     * carrier on the device label.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDeviceProductionIdentifierInUDI[]
     */
    public function getProductionIdentifierInUDI(): null|array
    {
        return $this->productionIdentifierInUDI;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the production identifier(s) that are expected to appear in the UDI
     * carrier on the device label.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDeviceProductionIdentifierInUDI $productionIdentifierInUDI
     * @return static
     */
    public function addProductionIdentifierInUDI(null|FHIRDeviceProductionIdentifierInUDI $productionIdentifierInUDI = null): self
    {
        if (null === $productionIdentifierInUDI) {
            $productionIdentifierInUDI = new FHIRDeviceProductionIdentifierInUDI();
        }
        $this->_trackValueAdded();
        $this->productionIdentifierInUDI[] = $productionIdentifierInUDI;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Information aimed at providing directions for the usage of this model of device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionGuideline
     */
    public function getGuideline(): null|FHIRDeviceDefinitionGuideline
    {
        return $this->guideline;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Information aimed at providing directions for the usage of this model of device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionGuideline $guideline
     * @return static
     */
    public function setGuideline(null|FHIRDeviceDefinitionGuideline $guideline = null): self
    {
        if (null === $guideline) {
            $guideline = new FHIRDeviceDefinitionGuideline();
        }
        $this->_trackValueSet($this->guideline, $guideline);
        $this->guideline = $guideline;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Tracking of latest field safety corrective action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionCorrectiveAction
     */
    public function getCorrectiveAction(): null|FHIRDeviceDefinitionCorrectiveAction
    {
        return $this->correctiveAction;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Tracking of latest field safety corrective action.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionCorrectiveAction $correctiveAction
     * @return static
     */
    public function setCorrectiveAction(null|FHIRDeviceDefinitionCorrectiveAction $correctiveAction = null): self
    {
        if (null === $correctiveAction) {
            $correctiveAction = new FHIRDeviceDefinitionCorrectiveAction();
        }
        $this->_trackValueSet($this->correctiveAction, $correctiveAction);
        $this->correctiveAction = $correctiveAction;
        return $this;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Billing code or reference associated with the device.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionChargeItem[]
     */
    public function getChargeItem(): null|array
    {
        return $this->chargeItem;
    }

    /**
     * The characteristics, operational status and capabilities of a medical-related
     * component of a medical device.
     *
     * Billing code or reference associated with the device.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionChargeItem $chargeItem
     * @return static
     */
    public function addChargeItem(null|FHIRDeviceDefinitionChargeItem $chargeItem = null): self
    {
        if (null === $chargeItem) {
            $chargeItem = new FHIRDeviceDefinitionChargeItem();
        }
        $this->_trackValueAdded();
        $this->chargeItem[] = $chargeItem;
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
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getUdiDeviceIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_UDI_DEVICE_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRegulatoryIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REGULATORY_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPartNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PART_NUMBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getManufacturer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MANUFACTURER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDeviceName())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DEVICE_NAME, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getModelNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MODEL_NUMBER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getClassification())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CLASSIFICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getConformsTo())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONFORMS_TO, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getHasPart())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_HAS_PART, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPackaging())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PACKAGING, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getVersion())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VERSION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSafety())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SAFETY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getShelfLifeStorage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SHELF_LIFE_STORAGE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getLanguageCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LANGUAGE_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROPERTY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getOwner())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OWNER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTACT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getLink())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LINK, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMaterial())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MATERIAL, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProductionIdentifierInUDI())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRODUCTION_IDENTIFIER_IN_UDI, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getGuideline())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GUIDELINE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCorrectiveAction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CORRECTIVE_ACTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getChargeItem())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CHARGE_ITEM, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UDI_DEVICE_IDENTIFIER])) {
            $v = $this->getUdiDeviceIdentifier();
            foreach($validationRules[self::FIELD_UDI_DEVICE_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_UDI_DEVICE_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UDI_DEVICE_IDENTIFIER])) {
                        $errs[self::FIELD_UDI_DEVICE_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_UDI_DEVICE_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REGULATORY_IDENTIFIER])) {
            $v = $this->getRegulatoryIdentifier();
            foreach($validationRules[self::FIELD_REGULATORY_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_REGULATORY_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REGULATORY_IDENTIFIER])) {
                        $errs[self::FIELD_REGULATORY_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_REGULATORY_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART_NUMBER])) {
            $v = $this->getPartNumber();
            foreach($validationRules[self::FIELD_PART_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_PART_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART_NUMBER])) {
                        $errs[self::FIELD_PART_NUMBER] = [];
                    }
                    $errs[self::FIELD_PART_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANUFACTURER])) {
            $v = $this->getManufacturer();
            foreach($validationRules[self::FIELD_MANUFACTURER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_MANUFACTURER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANUFACTURER])) {
                        $errs[self::FIELD_MANUFACTURER] = [];
                    }
                    $errs[self::FIELD_MANUFACTURER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEVICE_NAME])) {
            $v = $this->getDeviceName();
            foreach($validationRules[self::FIELD_DEVICE_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_DEVICE_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVICE_NAME])) {
                        $errs[self::FIELD_DEVICE_NAME] = [];
                    }
                    $errs[self::FIELD_DEVICE_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODEL_NUMBER])) {
            $v = $this->getModelNumber();
            foreach($validationRules[self::FIELD_MODEL_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_MODEL_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODEL_NUMBER])) {
                        $errs[self::FIELD_MODEL_NUMBER] = [];
                    }
                    $errs[self::FIELD_MODEL_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASSIFICATION])) {
            $v = $this->getClassification();
            foreach($validationRules[self::FIELD_CLASSIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_CLASSIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFICATION])) {
                        $errs[self::FIELD_CLASSIFICATION] = [];
                    }
                    $errs[self::FIELD_CLASSIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONFORMS_TO])) {
            $v = $this->getConformsTo();
            foreach($validationRules[self::FIELD_CONFORMS_TO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_CONFORMS_TO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONFORMS_TO])) {
                        $errs[self::FIELD_CONFORMS_TO] = [];
                    }
                    $errs[self::FIELD_CONFORMS_TO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HAS_PART])) {
            $v = $this->getHasPart();
            foreach($validationRules[self::FIELD_HAS_PART] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_HAS_PART, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HAS_PART])) {
                        $errs[self::FIELD_HAS_PART] = [];
                    }
                    $errs[self::FIELD_HAS_PART][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PACKAGING])) {
            $v = $this->getPackaging();
            foreach($validationRules[self::FIELD_PACKAGING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_PACKAGING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PACKAGING])) {
                        $errs[self::FIELD_PACKAGING] = [];
                    }
                    $errs[self::FIELD_PACKAGING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SAFETY])) {
            $v = $this->getSafety();
            foreach($validationRules[self::FIELD_SAFETY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_SAFETY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SAFETY])) {
                        $errs[self::FIELD_SAFETY] = [];
                    }
                    $errs[self::FIELD_SAFETY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SHELF_LIFE_STORAGE])) {
            $v = $this->getShelfLifeStorage();
            foreach($validationRules[self::FIELD_SHELF_LIFE_STORAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_SHELF_LIFE_STORAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SHELF_LIFE_STORAGE])) {
                        $errs[self::FIELD_SHELF_LIFE_STORAGE] = [];
                    }
                    $errs[self::FIELD_SHELF_LIFE_STORAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE_CODE])) {
            $v = $this->getLanguageCode();
            foreach($validationRules[self::FIELD_LANGUAGE_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_LANGUAGE_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE_CODE])) {
                        $errs[self::FIELD_LANGUAGE_CODE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROPERTY])) {
            $v = $this->getProperty();
            foreach($validationRules[self::FIELD_PROPERTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_PROPERTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROPERTY])) {
                        $errs[self::FIELD_PROPERTY] = [];
                    }
                    $errs[self::FIELD_PROPERTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OWNER])) {
            $v = $this->getOwner();
            foreach($validationRules[self::FIELD_OWNER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_OWNER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OWNER])) {
                        $errs[self::FIELD_OWNER] = [];
                    }
                    $errs[self::FIELD_OWNER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTACT])) {
            $v = $this->getContact();
            foreach($validationRules[self::FIELD_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTACT])) {
                        $errs[self::FIELD_CONTACT] = [];
                    }
                    $errs[self::FIELD_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LINK])) {
            $v = $this->getLink();
            foreach($validationRules[self::FIELD_LINK] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_LINK, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINK])) {
                        $errs[self::FIELD_LINK] = [];
                    }
                    $errs[self::FIELD_LINK][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MATERIAL])) {
            $v = $this->getMaterial();
            foreach($validationRules[self::FIELD_MATERIAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_MATERIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MATERIAL])) {
                        $errs[self::FIELD_MATERIAL] = [];
                    }
                    $errs[self::FIELD_MATERIAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCTION_IDENTIFIER_IN_UDI])) {
            $v = $this->getProductionIdentifierInUDI();
            foreach($validationRules[self::FIELD_PRODUCTION_IDENTIFIER_IN_UDI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_PRODUCTION_IDENTIFIER_IN_UDI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCTION_IDENTIFIER_IN_UDI])) {
                        $errs[self::FIELD_PRODUCTION_IDENTIFIER_IN_UDI] = [];
                    }
                    $errs[self::FIELD_PRODUCTION_IDENTIFIER_IN_UDI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GUIDELINE])) {
            $v = $this->getGuideline();
            foreach($validationRules[self::FIELD_GUIDELINE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_GUIDELINE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GUIDELINE])) {
                        $errs[self::FIELD_GUIDELINE] = [];
                    }
                    $errs[self::FIELD_GUIDELINE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CORRECTIVE_ACTION])) {
            $v = $this->getCorrectiveAction();
            foreach($validationRules[self::FIELD_CORRECTIVE_ACTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_CORRECTIVE_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CORRECTIVE_ACTION])) {
                        $errs[self::FIELD_CORRECTIVE_ACTION] = [];
                    }
                    $errs[self::FIELD_CORRECTIVE_ACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHARGE_ITEM])) {
            $v = $this->getChargeItem();
            foreach($validationRules[self::FIELD_CHARGE_ITEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DEVICE_DEFINITION, self::FIELD_CHARGE_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHARGE_ITEM])) {
                        $errs[self::FIELD_CHARGE_ITEM] = [];
                    }
                    $errs[self::FIELD_CHARGE_ITEM][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceDefinition $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDeviceDefinition
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
        } else if (!($type instanceof FHIRDeviceDefinition)) {
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
            if (self::FIELD_DESCRIPTION === $childName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_IDENTIFIER === $childName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_UDI_DEVICE_IDENTIFIER === $childName) {
                $type->addUdiDeviceIdentifier(FHIRDeviceDefinitionUdiDeviceIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REGULATORY_IDENTIFIER === $childName) {
                $type->addRegulatoryIdentifier(FHIRDeviceDefinitionRegulatoryIdentifier::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PART_NUMBER === $childName) {
                $type->setPartNumber(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MANUFACTURER === $childName) {
                $type->setManufacturer(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEVICE_NAME === $childName) {
                $type->addDeviceName(FHIRDeviceDefinitionDeviceName::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODEL_NUMBER === $childName) {
                $type->setModelNumber(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_CLASSIFICATION === $childName) {
                $type->addClassification(FHIRDeviceDefinitionClassification::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONFORMS_TO === $childName) {
                $type->addConformsTo(FHIRDeviceDefinitionConformsTo::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_HAS_PART === $childName) {
                $type->addHasPart(FHIRDeviceDefinitionHasPart::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PACKAGING === $childName) {
                $type->addPackaging(FHIRDeviceDefinitionPackaging::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VERSION === $childName) {
                $type->addVersion(FHIRDeviceDefinitionVersion::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SAFETY === $childName) {
                $type->addSafety(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SHELF_LIFE_STORAGE === $childName) {
                $type->addShelfLifeStorage(FHIRProductShelfLife::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LANGUAGE_CODE === $childName) {
                $type->addLanguageCode(FHIRCodeableConcept::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PROPERTY === $childName) {
                $type->addProperty(FHIRDeviceDefinitionProperty::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OWNER === $childName) {
                $type->setOwner(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONTACT === $childName) {
                $type->addContact(FHIRContactPoint::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LINK === $childName) {
                $type->addLink(FHIRDeviceDefinitionLink::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_NOTE === $childName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MATERIAL === $childName) {
                $type->addMaterial(FHIRDeviceDefinitionMaterial::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PRODUCTION_IDENTIFIER_IN_UDI === $childName) {
                $type->addProductionIdentifierInUDI(FHIRDeviceProductionIdentifierInUDI::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_GUIDELINE === $childName) {
                $type->setGuideline(FHIRDeviceDefinitionGuideline::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CORRECTIVE_ACTION === $childName) {
                $type->setCorrectiveAction(FHIRDeviceDefinitionCorrectiveAction::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CHARGE_ITEM === $childName) {
                $type->addChargeItem(FHIRDeviceDefinitionChargeItem::xmlUnserialize($n, null, $config));
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
        if (isset($attributes[self::FIELD_DESCRIPTION])) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDescription((string)$attributes[self::FIELD_DESCRIPTION], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_PART_NUMBER])) {
            $pt = $type->getPartNumber();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PART_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPartNumber((string)$attributes[self::FIELD_PART_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_MODEL_NUMBER])) {
            $pt = $type->getModelNumber();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MODEL_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setModelNumber((string)$attributes[self::FIELD_MODEL_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
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
            $xw->openRootNode($config, 'DeviceDefinition', $this->_getSourceXmlns());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->writeAttribute(self::FIELD_DESCRIPTION, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PART_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPartNumber())) {
            $xw->writeAttribute(self::FIELD_PART_NUMBER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MODEL_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getModelNumber())) {
            $xw->writeAttribute(self::FIELD_MODEL_NUMBER, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_primitiveXmlLocations[self::FIELD_DESCRIPTION] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDescription())) {
            $xw->startElement(self::FIELD_DESCRIPTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getIdentifier() as $v) {
            $xw->startElement(self::FIELD_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getUdiDeviceIdentifier() as $v) {
            $xw->startElement(self::FIELD_UDI_DEVICE_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getRegulatoryIdentifier() as $v) {
            $xw->startElement(self::FIELD_REGULATORY_IDENTIFIER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_PART_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPartNumber())) {
            $xw->startElement(self::FIELD_PART_NUMBER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getManufacturer())) {
            $xw->startElement(self::FIELD_MANUFACTURER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getDeviceName() as $v) {
            $xw->startElement(self::FIELD_DEVICE_NAME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_primitiveXmlLocations[self::FIELD_MODEL_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getModelNumber())) {
            $xw->startElement(self::FIELD_MODEL_NUMBER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getClassification() as $v) {
            $xw->startElement(self::FIELD_CLASSIFICATION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getConformsTo() as $v) {
            $xw->startElement(self::FIELD_CONFORMS_TO);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getHasPart() as $v) {
            $xw->startElement(self::FIELD_HAS_PART);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getPackaging() as $v) {
            $xw->startElement(self::FIELD_PACKAGING);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getVersion() as $v) {
            $xw->startElement(self::FIELD_VERSION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSafety() as $v) {
            $xw->startElement(self::FIELD_SAFETY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getShelfLifeStorage() as $v) {
            $xw->startElement(self::FIELD_SHELF_LIFE_STORAGE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getLanguageCode() as $v) {
            $xw->startElement(self::FIELD_LANGUAGE_CODE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getProperty() as $v) {
            $xw->startElement(self::FIELD_PROPERTY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOwner())) {
            $xw->startElement(self::FIELD_OWNER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getContact() as $v) {
            $xw->startElement(self::FIELD_CONTACT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getLink() as $v) {
            $xw->startElement(self::FIELD_LINK);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getNote() as $v) {
            $xw->startElement(self::FIELD_NOTE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getMaterial() as $v) {
            $xw->startElement(self::FIELD_MATERIAL);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getProductionIdentifierInUDI() as $v) {
            $xw->startElement(self::FIELD_PRODUCTION_IDENTIFIER_IN_UDI);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getGuideline())) {
            $xw->startElement(self::FIELD_GUIDELINE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getCorrectiveAction())) {
            $xw->startElement(self::FIELD_CORRECTIVE_ACTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getChargeItem() as $v) {
            $xw->startElement(self::FIELD_CHARGE_ITEM);
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
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getUdiDeviceIdentifier())) {
            $out->{self::FIELD_UDI_DEVICE_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_UDI_DEVICE_IDENTIFIER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getRegulatoryIdentifier())) {
            $out->{self::FIELD_REGULATORY_IDENTIFIER} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_REGULATORY_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getPartNumber())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PART_NUMBER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PART_NUMBER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getManufacturer())) {
            $out->{self::FIELD_MANUFACTURER} = $v;
        }
        if ([] !== ($vs = $this->getDeviceName())) {
            $out->{self::FIELD_DEVICE_NAME} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_DEVICE_NAME}[] = $v;
            }
        }
        if (null !== ($v = $this->getModelNumber())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MODEL_NUMBER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MODEL_NUMBER_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getClassification())) {
            $out->{self::FIELD_CLASSIFICATION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CLASSIFICATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getConformsTo())) {
            $out->{self::FIELD_CONFORMS_TO} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CONFORMS_TO}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getHasPart())) {
            $out->{self::FIELD_HAS_PART} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_HAS_PART}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPackaging())) {
            $out->{self::FIELD_PACKAGING} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PACKAGING}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getVersion())) {
            $out->{self::FIELD_VERSION} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_VERSION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSafety())) {
            $out->{self::FIELD_SAFETY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SAFETY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getShelfLifeStorage())) {
            $out->{self::FIELD_SHELF_LIFE_STORAGE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SHELF_LIFE_STORAGE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getLanguageCode())) {
            $out->{self::FIELD_LANGUAGE_CODE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_LANGUAGE_CODE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            $out->{self::FIELD_PROPERTY} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PROPERTY}[] = $v;
            }
        }
        if (null !== ($v = $this->getOwner())) {
            $out->{self::FIELD_OWNER} = $v;
        }
        if ([] !== ($vs = $this->getContact())) {
            $out->{self::FIELD_CONTACT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CONTACT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getLink())) {
            $out->{self::FIELD_LINK} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_LINK}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            $out->{self::FIELD_NOTE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_NOTE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getMaterial())) {
            $out->{self::FIELD_MATERIAL} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_MATERIAL}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getProductionIdentifierInUDI())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRDeviceProductionIdentifierInUDI::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_PRODUCTION_IDENTIFIER_IN_UDI} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PRODUCTION_IDENTIFIER_IN_UDI_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getGuideline())) {
            $out->{self::FIELD_GUIDELINE} = $v;
        }
        if (null !== ($v = $this->getCorrectiveAction())) {
            $out->{self::FIELD_CORRECTIVE_ACTION} = $v;
        }
        if ([] !== ($vs = $this->getChargeItem())) {
            $out->{self::FIELD_CHARGE_ITEM} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_CHARGE_ITEM}[] = $v;
            }
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