<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 12th, 2025 19:32+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * An event (i.e. any change to current patient status) that may be related to
 * unintended effects on a patient or research participant. The unintended effects
 * may require additional monitoring, treatment, hospitalization, or may result in
 * death. The AdverseEvent resource also extends to potential or avoided events
 * that could have had such effects. There are two major domains where the
 * AdverseEvent resource is expected to be used. One is in clinical care reported
 * adverse events and the other is in reporting adverse events in clinical research
 * trial management. Adverse events can be reported by healthcare providers,
 * patients, caregivers or by medical products manufacturers. Given the differences
 * between these two concepts, we recommend consulting the domain specific
 * implementation guides when implementing the AdverseEvent Resource. The
 * implementation guides include specific extensions, value sets and constraints.
 */
class FHIRAdverseEventSuspectEntity extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY;

    /* class_default.php:55 */
    public const FIELD_INSTANCE_CODEABLE_CONCEPT = 'instanceCodeableConcept';
    public const FIELD_INSTANCE_REFERENCE = 'instanceReference';
    public const FIELD_CAUSALITY = 'causality';

    /* class_default.php:74 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
    ];

    /* class_default.php:112 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the actual instance of what caused the adverse event. May be a
     * substance, medication, medication administration, medication statement or a
     * device. (choose any one of instance*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $instanceCodeableConcept;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the actual instance of what caused the adverse event. May be a
     * substance, medication, medication administration, medication statement or a
     * device. (choose any one of instance*, but only one)
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $instanceReference;
    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * Information on the possible cause of the event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventCausality 
     */
    protected FHIRAdverseEventCausality $causality;

    /* constructor.php:61 */
    /**
     * FHIRAdverseEventSuspectEntity Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $instanceCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $instanceReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventCausality $causality
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $instanceCodeableConcept = null,
                                null|FHIRReference $instanceReference = null,
                                null|FHIRAdverseEventCausality $causality = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $instanceCodeableConcept) {
            $this->setInstanceCodeableConcept($instanceCodeableConcept);
        }
        if (null !== $instanceReference) {
            $this->setInstanceReference($instanceReference);
        }
        if (null !== $causality) {
            $this->setCausality($causality);
        }
    }

    /* class_default.php:144 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:182 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the actual instance of what caused the adverse event. May be a
     * substance, medication, medication administration, medication statement or a
     * device. (choose any one of instance*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getInstanceCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->instanceCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the actual instance of what caused the adverse event. May be a
     * substance, medication, medication administration, medication statement or a
     * device. (choose any one of instance*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $instanceCodeableConcept
     * @return static
     */
    public function setInstanceCodeableConcept(null|FHIRCodeableConcept $instanceCodeableConcept): self
    {
        if (null === $instanceCodeableConcept) {
            unset($this->instanceCodeableConcept);
            return $this;
        }
        $this->instanceCodeableConcept = $instanceCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the actual instance of what caused the adverse event. May be a
     * substance, medication, medication administration, medication statement or a
     * device. (choose any one of instance*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getInstanceReference(): null|FHIRReference
    {
        return $this->instanceReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the actual instance of what caused the adverse event. May be a
     * substance, medication, medication administration, medication statement or a
     * device. (choose any one of instance*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $instanceReference
     * @return static
     */
    public function setInstanceReference(null|FHIRReference $instanceReference): self
    {
        if (null === $instanceReference) {
            unset($this->instanceReference);
            return $this;
        }
        $this->instanceReference = $instanceReference;
        return $this;
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * Information on the possible cause of the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventCausality
     */
    public function getCausality(): null|FHIRAdverseEventCausality
    {
        return $this->causality ?? null;
    }

    /**
     * An event (i.e. any change to current patient status) that may be related to
     * unintended effects on a patient or research participant. The unintended effects
     * may require additional monitoring, treatment, hospitalization, or may result in
     * death. The AdverseEvent resource also extends to potential or avoided events
     * that could have had such effects. There are two major domains where the
     * AdverseEvent resource is expected to be used. One is in clinical care reported
     * adverse events and the other is in reporting adverse events in clinical research
     * trial management. Adverse events can be reported by healthcare providers,
     * patients, caregivers or by medical products manufacturers. Given the differences
     * between these two concepts, we recommend consulting the domain specific
     * implementation guides when implementing the AdverseEvent Resource. The
     * implementation guides include specific extensions, value sets and constraints.
     *
     * Information on the possible cause of the event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventCausality $causality
     * @return static
     */
    public function setCausality(null|FHIRAdverseEventCausality $causality): self
    {
        if (null === $causality) {
            unset($this->causality);
            return $this;
        }
        $this->causality = $causality;
        return $this;
    }

    /* class_default.php:209 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAdverseEventSuspectEntity)) {
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
            } else if (self::FIELD_INSTANCE_CODEABLE_CONCEPT === $cen) {
                $type->setInstanceCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INSTANCE_REFERENCE === $cen) {
                $type->setInstanceReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CAUSALITY === $cen) {
                $type->setCausality(FHIRAdverseEventCausality::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        parent::xmlSerialize($xw, $config);
        if (isset($this->instanceCodeableConcept)) {
            $xw->startElement(self::FIELD_INSTANCE_CODEABLE_CONCEPT);
            $this->instanceCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->instanceReference)) {
            $xw->startElement(self::FIELD_INSTANCE_REFERENCE);
            $this->instanceReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->causality)) {
            $xw->startElement(self::FIELD_CAUSALITY);
            $this->causality->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAdverseEventSuspectEntity)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->instanceCodeableConcept) || property_exists($json, self::FIELD_INSTANCE_CODEABLE_CONCEPT)) {
            if (is_array($json->instanceCodeableConcept)) {
                $type->setInstanceCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($json->instanceCodeableConcept), $config));
            } else {
                $type->setInstanceCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json->instanceCodeableConcept, $config));
            }
        }
        if (isset($json->instanceReference) || property_exists($json, self::FIELD_INSTANCE_REFERENCE)) {
            if (is_array($json->instanceReference)) {
                $type->setInstanceReference(FHIRReference::jsonUnserialize(reset($json->instanceReference), $config));
            } else {
                $type->setInstanceReference(FHIRReference::jsonUnserialize($json->instanceReference, $config));
            }
        }
        if (isset($json->causality) || property_exists($json, self::FIELD_CAUSALITY)) {
            if (is_array($json->causality)) {
                $type->setCausality(FHIRAdverseEventCausality::jsonUnserialize(reset($json->causality), $config));
            } else {
                $type->setCausality(FHIRAdverseEventCausality::jsonUnserialize($json->causality, $config));
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
        if (isset($this->instanceCodeableConcept)) {
            $out->instanceCodeableConcept = $this->instanceCodeableConcept;
        }
        if (isset($this->instanceReference)) {
            $out->instanceReference = $this->instanceReference;
        }
        if (isset($this->causality)) {
            $out->causality = $this->causality;
        }
        return $out;
    }
}