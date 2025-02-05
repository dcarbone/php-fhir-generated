<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 00:09+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConsentProvisionType;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRConsentProvisionTypeEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Permission resource holds access rules for a given data and context.
 */
class FHIRPermissionRule extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_PERMISSION_DOT_RULE;

    /* class_default.php:50 */
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_DATA = 'data';
    public const FIELD_ACTIVITY = 'activity';
    public const FIELD_LIMIT = 'limit';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * deny | permit.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConsentProvisionType 
     */
    protected FHIRConsentProvisionType $type;
    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A description or definition of which activities are allowed to be done on the
     * data.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionData[] 
     */
    protected array $data;
    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A description or definition of which activities are allowed to be done on the
     * data.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionActivity[] 
     */
    protected array $activity;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What limits apply to the use of the data.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $limit;

    /* constructor.php:61 */
    /**
     * FHIRPermissionRule Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRConsentProvisionTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConsentProvisionType $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionData[] $data
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionActivity[] $activity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $limit
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRConsentProvisionTypeEnum|FHIRConsentProvisionType $type = null,
                                null|iterable $data = null,
                                null|iterable $activity = null,
                                null|iterable $limit = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $data) {
            $this->setData(...$data);
        }
        if (null !== $activity) {
            $this->setActivity(...$activity);
        }
        if (null !== $limit) {
            $this->setLimit(...$limit);
        }
    }

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * deny | permit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConsentProvisionType
     */
    public function getType(): null|FHIRConsentProvisionType
    {
        return $this->type ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * deny | permit.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRConsentProvisionTypeEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRConsentProvisionType $type
     * @return static
     */
    public function setType(null|string|FHIRConsentProvisionTypeEnum|FHIRConsentProvisionType $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        if (!($type instanceof FHIRConsentProvisionType)) {
            $type = new FHIRConsentProvisionType(value: $type);
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A description or definition of which activities are allowed to be done on the
     * data.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionData[]
     */
    public function getData(): array
    {
        return $this->data ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionData>
     */
    public function getDataIterator(): iterable
    {
        if (!isset($this->data)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->data);
    }

    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A description or definition of which activities are allowed to be done on the
     * data.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionData $data
     * @return static
     */
    public function addData(FHIRPermissionData $data): self
    {
        if (!isset($this->data)) {
            $this->data = [];
        }
        $this->data[] = $data;
        return $this;
    }

    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A description or definition of which activities are allowed to be done on the
     * data.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionData ...$data
     * @return static
     */
    public function setData(FHIRPermissionData ...$data): self
    {
        if ([] === $data) {
            unset($this->data);
            return $this;
        }
        $this->data = $data;
        return $this;
    }

    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A description or definition of which activities are allowed to be done on the
     * data.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionActivity[]
     */
    public function getActivity(): array
    {
        return $this->activity ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionActivity>
     */
    public function getActivityIterator(): iterable
    {
        if (!isset($this->activity)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->activity);
    }

    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A description or definition of which activities are allowed to be done on the
     * data.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionActivity $activity
     * @return static
     */
    public function addActivity(FHIRPermissionActivity $activity): self
    {
        if (!isset($this->activity)) {
            $this->activity = [];
        }
        $this->activity[] = $activity;
        return $this;
    }

    /**
     * Permission resource holds access rules for a given data and context.
     *
     * A description or definition of which activities are allowed to be done on the
     * data.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionActivity ...$activity
     * @return static
     */
    public function setActivity(FHIRPermissionActivity ...$activity): self
    {
        if ([] === $activity) {
            unset($this->activity);
            return $this;
        }
        $this->activity = $activity;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What limits apply to the use of the data.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getLimit(): array
    {
        return $this->limit ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getLimitIterator(): iterable
    {
        if (!isset($this->limit)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->limit);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What limits apply to the use of the data.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $limit
     * @return static
     */
    public function addLimit(FHIRCodeableConcept $limit): self
    {
        if (!isset($this->limit)) {
            $this->limit = [];
        }
        $this->limit[] = $limit;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What limits apply to the use of the data.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$limit
     * @return static
     */
    public function setLimit(FHIRCodeableConcept ...$limit): self
    {
        if ([] === $limit) {
            unset($this->limit);
            return $this;
        }
        $this->limit = $limit;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionRule $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionRule
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPermissionRule)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRConsentProvisionType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATA === $cen) {
                $type->addData(FHIRPermissionData::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACTIVITY === $cen) {
                $type->addActivity(FHIRPermissionActivity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LIMIT === $cen) {
                $type->addLimit(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TYPE])) {
            if (isset($type->type)) {
                $type->type->setValue((string)$attributes[self::FIELD_TYPE]);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TYPE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        if (isset($this->type) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TYPE]) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->type)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TYPE]
                || $this->type->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TYPE]);
            $xw->endElement();
        }
        if (isset($this->data)) {
            foreach ($this->data as $v) {
                $xw->startElement(self::FIELD_DATA);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->activity)) {
            foreach ($this->activity as $v) {
                $xw->startElement(self::FIELD_ACTIVITY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->limit)) {
            foreach ($this->limit as $v) {
                $xw->startElement(self::FIELD_LIMIT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionRule $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRPermission\FHIRPermissionRule
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRPermissionRule)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->type)
            || isset($json->_type)
            || property_exists($json, self::FIELD_TYPE)
            || property_exists($json, self::FIELD_TYPE_EXT)) {
            $v = $json->_type ?? new \stdClass();
            $v->value = $json->type ?? null;
            $type->setType(FHIRConsentProvisionType::jsonUnserialize($v, $config));
        }
        if (isset($json->data) || property_exists($json, self::FIELD_DATA)) {
            if (is_object($json->data)) {
                $vals = [$json->data];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DATA, true);
            } else {
                $vals = $json->data;
            }
            foreach($vals as $v) {
                $type->addData(FHIRPermissionData::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->activity) || property_exists($json, self::FIELD_ACTIVITY)) {
            if (is_object($json->activity)) {
                $vals = [$json->activity];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ACTIVITY, true);
            } else {
                $vals = $json->activity;
            }
            foreach($vals as $v) {
                $type->addActivity(FHIRPermissionActivity::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->limit) || property_exists($json, self::FIELD_LIMIT)) {
            if (is_object($json->limit)) {
                $vals = [$json->limit];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_LIMIT, true);
            } else {
                $vals = $json->limit;
            }
            foreach($vals as $v) {
                $type->addLimit(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            if ($this->type->_nonValueFieldDefined()) {
                $ext = $this->type->jsonSerialize();
                unset($ext->value);
                $out->_type = $ext;
            }
        }
        if (isset($this->data) && [] !== $this->data) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DATA) && 1 === count($this->data)) {
                $out->data = $this->data[0];
            } else {
                $out->data = $this->data;
            }
        }
        if (isset($this->activity) && [] !== $this->activity) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ACTIVITY) && 1 === count($this->activity)) {
                $out->activity = $this->activity[0];
            } else {
                $out->activity = $this->activity;
            }
        }
        if (isset($this->limit) && [] !== $this->limit) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_LIMIT) && 1 === count($this->limit)) {
                $out->limit = $this->limit[0];
            } else {
                $out->limit = $this->limit;
            }
        }
        return $out;
    }
}